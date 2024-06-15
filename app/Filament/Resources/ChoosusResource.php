<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ChoosusResource\Pages;
use App\Filament\Resources\ChoosusResource\RelationManagers;
use App\Models\Choosus;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ChoosusResource extends Resource
{
    protected static ?string $model = Choosus::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()->schema([
                    Forms\Components\TextInput::make("title")->label("Title")->required(),
                    Forms\Components\Textarea::make("info")->label("Info")->required(),
                    Forms\Components\Textarea::make("icon")->label("Icon (SVG)")->required(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make("title"),
                Tables\Columns\TextColumn::make("info")->limit(40),
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
            'index' => Pages\ListChoosuses::route('/'),
            'create' => Pages\CreateChoosus::route('/create'),
            'edit' => Pages\EditChoosus::route('/{record}/edit'),
        ];
    }
}
