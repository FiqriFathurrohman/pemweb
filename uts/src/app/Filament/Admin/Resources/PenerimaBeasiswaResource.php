<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\PenerimaBeasiswaResource\Pages;
use App\Filament\Admin\Resources\PenerimaBeasiswaResource\RelationManagers;
use App\Models\PenerimaBeasiswa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PenerimaBeasiswaResource extends Resource
{
    protected static ?string $model = PenerimaBeasiswa::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('asal_sekolah')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('jurusan_dituju')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('jenjang')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('beasiswa_id')
                    ->label('Jenis Beasiswa')
                    ->relationship('beasiswa', 'jenis_beasiswa')
                    ->searchable()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('asal_sekolah')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jurusan_dituju')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jenjang')
                    ->searchable(),
                Tables\Columns\TextColumn::make('beasiswa.jenis_beasiswa')
                    ->label('Jenis Beasiswa')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListPenerimaBeasiswas::route('/'),
            'create' => Pages\CreatePenerimaBeasiswa::route('/create'),
            'edit' => Pages\EditPenerimaBeasiswa::route('/{record}/edit'),
        ];
    }
}
