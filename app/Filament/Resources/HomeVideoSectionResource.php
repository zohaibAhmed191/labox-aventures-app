<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomeVideoSectionResource\Pages;
use App\Filament\Resources\HomeVideoSectionResource\RelationManagers;
use App\Models\HomeVideoSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HomeVideoSectionResource extends Resource
{
    protected static ?string $model = HomeVideoSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-play';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('video_url')
                ->label('Video URL (e.g : https://www.youtube.com/embed/3mRXbYmXGXA)')
                ->required()
                ->url(),  // You can add URL validation here

            Forms\Components\Textarea::make('paragraph_one')
                ->label('Paragraph One')
                ->required(),

            Forms\Components\Textarea::make('paragraph_two')
                ->label('Paragraph Two')
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListHomeVideoSections::route('/'),
            'create' => Pages\CreateHomeVideoSection::route('/create'),
            'edit' => Pages\EditHomeVideoSection::route('/{record}/edit'),
        ];
    }
}
