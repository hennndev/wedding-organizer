<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KatalogResource\Pages;
use App\Models\Katalog;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class KatalogResource extends Resource
{
    protected static ?string $model = Katalog::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';
    protected static ?string $navigationLabel = 'Katalog';
    protected static ?string $pluralLabel = 'Daftar Katalog';
    protected static ?string $modelLabel = 'Katalog';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make("Informasi Paket")
                    ->schema([
                        Forms\Components\FileUpload::make('gambar')
                            ->image()
                            ->imagePreviewHeight('200')
                            ->directory('katalogs')
                            ->required(),

                        Forms\Components\TextInput::make("name")
                            ->label("Nama Paket")
                            ->required()
                            ->placeholder("Contoh: Paket Silver"),

                        Forms\Components\TextInput::make("harga")
                            ->label("Harga (Rp)")
                            ->numeric()
                            ->prefix("Rp")
                            ->required(),

                        Forms\Components\TextInput::make("lokasi")
                            ->label("Lokasi")
                            ->required()
                            ->placeholder("Contoh: Depok"),

                        Forms\Components\RichEditor::make("deskripsi")
                            ->label("Deskripsi")
                            ->required()
                            ->toolbarButtons([
                                'bold',
                                'italic',
                                'underline',
                                'bulletList',
                                'orderedList',
                                'link',
                            ])
                            ->placeholder("Tambahkan deskripsi paket..."),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('gambar')
    ->label('Foto')
    ->formatStateUsing(fn ($state) => collect($state ?? [])
        ->map(fn ($path) => '<img src="'.asset('storage/'.$path).'" width="60" />')
        ->implode(' ')
    )
    ->html(), // penting supaya bisa render <img>

               TextColumn::make("name")
                    ->label("Nama Paket")
                    ->sortable()
                    ->searchable()
                    ->weight('bold')
                    ->color('primary'),

               TextColumn::make("harga")
                    ->label("Harga")
                    ->money('idr', true)
                    ->sortable()
                    ->badge()
                    ->color(fn ($record) => $record->harga > 100000000 ? 'danger' : 'success'),

                TextColumn::make("lokasi")
                    ->label("Lokasi")
                    ->sortable()
                    ->searchable(),

               TextColumn::make("deskripsi")
                    ->label("Deskripsi")
                    ->limit(40)
                    ->tooltip(fn ($record) => $record->deskripsi),
            ])
            ->filters([
                // Tables\Filters\SelectFilter::make('lokasi')
                //     ->label('Filter Lokasi')
                //     ->options([
                //         'Depok' => 'Depok',
                //         'Jakarta' => 'Jakarta',
                //         'Bandung' => 'Bandung',
                //     ])
                //     ->placeholder('Semua Lokasi'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKatalogs::route('/'),
            'create' => Pages\CreateKatalog::route('/create'),
            'edit' => Pages\EditKatalog::route('/{record}/edit'),
        ];
    }
}
