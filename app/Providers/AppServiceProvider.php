<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // CMS content blocks: @content('key', 'hardcoded default') echoes the
        // admin-edited value (escaped); @richcontent allows saved HTML.
        Blade::directive('content', fn(string $expression) => "<?php echo e(\App\Models\ContentBlock::get({$expression})); ?>");
        Blade::directive('richcontent', fn(string $expression) => "<?php echo \App\Models\ContentBlock::get({$expression}, type: 'rich'); ?>");
    }
}
