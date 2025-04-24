<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NosEscapeResource\Pages;
use App\Filament\Resources\NosEscapeResource\RelationManagers;
use App\Models\NosEscape;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Redirect;

class NosEscapeResource extends Resource
{
    protected static ?string $model = NosEscape::class;

    protected static ?string $navigationIcon = 'heroicon-o-square-3-stack-3d';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('name')
                ->label('Name')
                ->required(),

            Forms\Components\Textarea::make('description')
                ->label('Description')
                ->required(),


        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Category Name'),
                Tables\Columns\TextColumn::make('description')->label('Description'),

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
            'index' => Pages\ListNosEscapes::route('/'),
            'create' => Pages\CreateNosEscape::route('/create'),
            'edit' => Pages\EditNosEscape::route('/{record}/edit'),
        ];
    }
}
