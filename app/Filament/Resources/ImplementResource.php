<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ImplementResource\Pages;
use App\Filament\Resources\ImplementResource\RelationManagers;
use App\Models\Implement;
use Faker\Provider\Text;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ImplementResource extends Resource
{
    protected static ?string $model = Implement::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()->schema([
                    Forms\Components\TextInput::make("tap")->required()->unique(),
                    Forms\Components\TextInput::make("title")->required(),
                    Forms\Components\Textarea::make("info")->required(),
                    Forms\Components\Textarea::make("icon")->label("Icon (SVG)")->required(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make("tap"),
                Tables\Columns\TextColumn::make("title"),
                Tables\Columns\TextColumn::make("info")->limit(50),
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
            'index' => Pages\ListImplements::route('/'),
            'create' => Pages\CreateImplement::route('/create'),
            'edit' => Pages\EditImplement::route('/{record}/edit'),
        ];
    }
}
