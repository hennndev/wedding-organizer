<?php

namespace App\Filament\Widgets;

use Filament\Widgets\BarChartWidget;
use App\Models\Pemesanan;

class PesananChart extends BarChartWidget
{
    protected static ?string $heading = 'Grafik Pemesanan';

    protected function getData(): array
    {
        $data = Pemesanan::selectRaw('MONTH(created_at) as bulan, COUNT(*) as total')
            ->groupBy('bulan')
            ->pluck('total', 'bulan')
            ->toArray();

        return [
            'datasets' => [
                [
                    'label' => 'Jumlah Pesanan',
                    'data' => array_values($data),
                ],
            ],
            'labels' => array_map(fn ($bulan) => date('F', mktime(0, 0, 0, $bulan, 10)), array_keys($data)),
        ];
    }
}
