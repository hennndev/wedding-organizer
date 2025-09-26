<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PemesananResource\Pages;
use App\Filament\Resources\PemesananResource\RelationManagers;
use App\Models\Pemesanan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;

class PemesananResource extends Resource
{
  protected static ?string $model = Pemesanan::class;

  protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

  public static function form(Form $form): Form
  {
    return $form
      ->schema([
        //
      ]);
  }

  public static function table(Table $table): Table
  {
    return $table
      ->columns([
        TextColumn::make('paket.name')
          ->label('Paket')
          ->sortable()
          ->searchable(),
        TextColumn::make("nama_pemesan")
          ->searchable()
          ->sortable(),
        TextColumn::make("email_pemesan")
          ->searchable()
          ->sortable(),
        TextColumn::make("no_telp")
          ->searchable()
          ->sortable(),
        TextColumn::make("tanggal_acara")
          ->searchable()
          ->sortable(),
        SelectColumn::make("status")
          ->options([
            'request' => 'Request',
            'approved' => 'Approved',
          ])
          ->sortable()
          ->searchable(),

      ])
      ->filters([
        //
      ])
      ->actions([
        // Tables\Actions\EditAction::make(),
      ])
      ->bulkActions([
        Tables\Actions\BulkActionGroup::make([
          Tables\Actions\DeleteBulkAction::make(),
        ]),
      ])
      ->emptyStateActions([
        Tables\Actions\CreateAction::make(),
      ]);
  }

  public static function getRelations(): array
  {
    return [
      //
    ];
  }

  public static function getPages(): array
  {
    return [
      'index' => Pages\ListPemesanans::route('/'),
      'create' => Pages\CreatePemesanan::route('/create'),
      'edit' => Pages\EditPemesanan::route('/{record}/edit'),
    ];
  }
}
