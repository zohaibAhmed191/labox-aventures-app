<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomeEventSectionResource\Pages;
use App\Filament\Resources\HomeEventSectionResource\RelationManagers;
use App\Models\HomeEventSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HomeEventSectionResource extends Resource
{
    protected static ?string $model = HomeEventSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('heading')
                ->label('Heading')
                ->required(),

            Forms\Components\TextInput::make('subheading')
                ->label('Subheading')
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
                Tables\Columns\TextColumn::make('heading')->label('Heading'),
                Tables\Columns\TextColumn::make('subheading')->label('Subheading'),
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
            'index' => Pages\ListHomeEventSections::route('/'),
            'create' => Pages\CreateHomeEventSection::route('/create'),
            'edit' => Pages\EditHomeEventSection::route('/{record}/edit'),
        ];
    }
}
