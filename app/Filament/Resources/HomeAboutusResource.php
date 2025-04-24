<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomeAboutusResource\Pages;
use App\Filament\Resources\HomeAboutusResource\RelationManagers;
use App\Models\HomeAboutus;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Spacer;

class HomeAboutusResource extends Resource
{
    protected static ?string $model = HomeAboutus::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('main_heading')
                ->label('Main Heading')
                ->required(),
            Forms\Components\Section::make()->statePath('spacer'),
            // First bunch of sub-heading and description
            Forms\Components\TextInput::make('sub_heading_1')
                ->label('Sub Heading 1')
                ->required(),
            Forms\Components\Textarea::make('description_1')
                ->label('Description 1')
                ->required(),

            Forms\Components\TextInput::make('sub_heading_2')
                ->label('Sub Heading 2')
                ->required(),
            Forms\Components\Textarea::make('description_2')
                ->label('Description 2')
                ->required(),

            // Add separation here
            Forms\Components\TextInput::make('sub_heading_3')
                ->label('Sub Heading 3')
                ->required(),
            Forms\Components\Textarea::make('description_3')
                ->label('Description 3')
                ->required(),

            Forms\Components\TextInput::make('sub_heading_4')
                ->label('Sub Heading 4')
                ->required(),
            Forms\Components\Textarea::make('description_4')
                ->label('Description 4')
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('main_heading')->label('Main Heading'),
                Tables\Columns\TextColumn::make('sub_heading_1')->label('Sub Heading 1'),
                Tables\Columns\TextColumn::make('sub_heading_2')->label('Sub Heading 2'),
                Tables\Columns\TextColumn::make('sub_heading_3')->label('Sub Heading 3'),
                Tables\Columns\TextColumn::make('sub_heading_4')->label('Sub Heading 4'),
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
            'index' => Pages\ListHomeAboutuses::route('/'),
            'create' => Pages\CreateHomeAboutus::route('/create'),
            'edit' => Pages\EditHomeAboutus::route('/{record}/edit'),
        ];
    }
}