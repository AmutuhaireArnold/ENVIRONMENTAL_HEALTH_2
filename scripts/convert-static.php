<?php
// One-off converter: extracts <main> content from the legacy static site
// into Blade views that extend layouts/app.blade.php.
// Usage: php scripts/convert-static.php

$srcDir = __DIR__ . '/../ENVIRONMENTAL HEALTH';
$outDir = __DIR__ . '/../resources/views/pages';
@mkdir($outDir, 0777, true);

// filename (no .html) => [view name, route path]
$pages = [
    'index' => 'home',
    'history' => 'history',
    'objectives' => 'objectives',
    'member-value-benefits' => 'member-value-benefits',
    'member-options' => 'member-options',
    'corporate' => 'corporate',
    'committees' => 'committees',
    'partners' => 'partners',
    'associations' => 'associations',
    'upcoming-events' => 'upcoming-events',
    'programs' => 'programs',
    'events' => 'events',
    'news' => 'news',
    'press-release' => 'press-release',
    'articles-journals' => 'articles-journals',
    'media' => 'media',
    'standard' => 'standard',
    'resources' => 'resources',
    'contact' => 'contact',
];

function mapHref(string $target): string
{
    if ($target === 'index.html') return '/';
    if (preg_match('/^(committee-\w+|other-committee-\w+)\.html$/', $target, $m)) return '/committees/' . $m[1];
    if (preg_match('/^sister-org-(\d+)\.html$/', $target, $m)) return '/associations/sister-org-' . $m[1];
    if (preg_match('/^([a-z0-9-]+)\.html$/i', $target, $m)) return '/' . $m[1];
    return $target;
}

function rewrite(string $html): string
{
    // href="*.html" -> routes
    $html = preg_replace_callback('/href="([^"#]+\.html)"/i', fn($m) => 'href="' . mapHref($m[1]) . '"', $html);
    // href="pdfs/..." -> /pdfs/...
    $html = preg_replace('/href="pdfs\//i', 'href="/pdfs/', $html);
    // src / data-photo / poster to /images/ unless absolute or assets
    $attr = function ($m) {
        $v = $m[2];
        if (preg_match('#^(https?:)?//#i', $v) || str_starts_with($v, '/') || str_starts_with($v, 'data:')) return $m[0];
        if (str_starts_with($v, 'assets/')) return $m[1] . '="/' . $v . '"';
        return $m[1] . '="/images/' . $v . '"';
    };
    $html = preg_replace_callback('/(src|data-photo|poster)="([^"]+)"/i', $attr, $html);
    // inline style background url('x')
    $html = preg_replace_callback("/url\\((['\"]?)([^'\")]+)\\1\\)/i", function ($m) {
        $v = $m[2];
        if (preg_match('#^(https?:)?//#i', $v) || str_starts_with($v, '/') || str_starts_with($v, 'data:')) return $m[0];
        return "url('/images/" . $v . "')";
    }, $html);
    return $html;
}

foreach ($pages as $file => $view) {
    $path = "$srcDir/$file.html";
    if (!is_file($path)) {
        echo "MISSING $file\n";
        continue;
    }
    $html = file_get_contents($path);

    preg_match('/<title>(.*?)<\/title>/s', $html, $t);
    $title = trim($t[1] ?? 'FEHSU');
    preg_match('/<meta name="description" content="([^"]*)"/s', $html, $d);
    $desc = trim($d[1] ?? '');

    if (!preg_match('/<main id="main-content">(.*)<\/main>/s', $html, $m)) {
        echo "NO MAIN $file\n";
        continue;
    }
    $main = rewrite(trim($m[1]));

    // Page-specific inline scripts outside <main> (skip the shared base script)
    $afterMain = substr($html, strpos($html, '</main>'));
    preg_match_all('/<script(?![^>]*src)[^>]*>(.*?)<\/script>/s', $afterMain, $s);
    $push = '';
    foreach ($s[1] as $block) {
        if (str_contains($block, 'function toggleMenu')) continue; // shared base, lives in layout
        $push .= "<script>\n" . rewrite(trim($block)) . "\n</script>\n";
    }

    $blade = "@extends('layouts.app')\n\n"
        . "@section('title', " . var_export($title, true) . ")\n"
        . ($desc !== '' ? "@section('description', " . var_export(html_entity_decode($desc, ENT_QUOTES), true) . ")\n" : '')
        . "\n@section('content')\n" . $main . "\n@endsection\n"
        . ($push !== '' ? "\n@push('scripts')\n" . $push . "@endpush\n" : '');

    file_put_contents("$outDir/$view.blade.php", $blade);
    echo "OK $file -> pages/$view.blade.php\n";
}
echo "Done.\n";
