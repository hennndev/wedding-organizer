<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use App\Models\Pemesanan;

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static string $view = 'filament.pages.dashboard';
    protected static ?string $title = 'Dashboard';

    public function getStats(): array
    {
        return [
            'total'    => Pemesanan::count(),
            'request'  => Pemesanan::where('status', 'Request')->count(),
            'approved' => Pemesanan::where('status', 'Approved')->count(),
            'reject' => Pemesanan::where('status', 'reject')->count(),
        ];
    }
}
