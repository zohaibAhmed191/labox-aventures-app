<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomeHeaderResource\Pages;
use App\Filament\Resources\HomeHeaderResource\RelationManagers;
use App\Models\HomeHeader;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HomeHeaderResource extends Resource
{
    protected static ?string $model = HomeHeader::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('top_line')
                ->label('Top Line')
                ->required(),

            Forms\Components\TextInput::make('main_heading')
                ->label('Main Heading')
                ->required(),

            Forms\Components\TextInput::make('color_heading')
                ->label('Color Heading')
                ->required(),

            Forms\Components\Textarea::make('paragraph')
                ->label('Paragraph')
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('top_line')->label('Top Line'),
                Tables\Columns\TextColumn::make('main_heading')->label('Main Heading'),
                Tables\Columns\TextColumn::make('color_heading')->label('Color Heading'),
                Tables\Columns\TextColumn::make('paragraph')->label('Paragraph'),
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
            'index' => Pages\ListHomeHeaders::route('/'),
            'create' => Pages\CreateHomeHeader::route('/create'),
            'edit' => Pages\EditHomeHeader::route('/{record}/edit'),
        ];
    }
}
