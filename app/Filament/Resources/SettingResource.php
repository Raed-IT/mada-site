<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Filament\Resources\SettingResource\RelationManagers;
use App\Models\Setting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;
    protected static bool $shouldRegisterNavigation = false;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()->schema([
                    Forms\Components\TextInput::make('why_choose_us_label')->label("Why Choose Us")->required(),
                    Forms\Components\TextInput::make('why_choose_us_desc')->label("Why Choose Us Desc")->required(),
                    Forms\Components\TextInput::make('counter_label')->label("Counter Label")->required(),
                    Forms\Components\TextInput::make('main_services_label')->label("Main Services")->required(),
                    Forms\Components\TextInput::make('main_services_desc')->label("Main Services Label")->required(),
                    Forms\Components\TextInput::make('how_it_works_label')->label("How It Works ")->required(),
                    Forms\Components\TextInput::make('how_it_works_desc')->label("How It Works Desc")->required(),
                    Forms\Components\TextInput::make('recent_blog_label')->label("Recent Blog ")->required(),
                    Forms\Components\TextInput::make('recent_blog_desc')->label("Recent Blog Desc")->required(),
                    Forms\Components\TextInput::make('contact_information_label')->label("Contact Information ")->required(),
                ])
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
            'index' => Pages\ListSettings::route('/'),
            'create' => Pages\CreateSetting::route('/create'),
            'edit' => Pages\EditSetting::route('/{record}/edit'),
        ];
    }
}
