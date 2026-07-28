<?php

namespace App\Filament\Widgets;

use App\Models\Document;
use App\Models\Event;
use App\Models\MediaItem;
use App\Models\Member;
use App\Models\Post;
use App\Models\TickerMessage;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class FehsuStatsOverview extends StatsOverviewWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        return [
            Stat::make('Published posts', Post::where('is_published', true)->count())
                ->description('News, press releases & articles')
                ->descriptionIcon('heroicon-m-newspaper')
                ->color('primary'),
            Stat::make('Upcoming events', Event::where('is_published', true)->where('type', 'upcoming')->where(fn($q) => $q->whereNull('starts_at')->orWhere('starts_at', '>=', now()))->count())
                ->description('On the public calendar')
                ->descriptionIcon('heroicon-m-calendar-days')
                ->color('success'),
            Stat::make('Member profiles', Member::count())
                ->description('Committee & association members')
                ->descriptionIcon('heroicon-m-user-group')
                ->color('info'),
            Stat::make('Documents', Document::count())
                ->description('PDFs available for download')
                ->descriptionIcon('heroicon-m-document-arrow-down')
                ->color('primary'),
            Stat::make('Media items', MediaItem::count())
                ->description('Gallery photos & videos')
                ->descriptionIcon('heroicon-m-photo')
                ->color('info'),
            Stat::make('Active ticker messages', TickerMessage::where('is_active', true)->count())
                ->description('Scrolling in the live bar')
                ->descriptionIcon('heroicon-m-megaphone')
                ->color('success'),
        ];
    }
}
