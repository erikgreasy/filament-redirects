<?php

namespace Erikgreasy\FilamentRedirects\Filament\Resources;

use Erikgreasy\FilamentRedirects\Filament\Resources\RedirectResource\Pages\ListRedirects;
use Erikgreasy\FilamentRedirects\Models\Redirect;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;

class RedirectResource extends Resource
{
    protected static ?string $model = Redirect::class;

    protected static ?string $navigationIcon = 'heroicon-o-arrows-right-left';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('pattern')
                    ->prefix('/'),

                TextInput::make('target')
                    ->prefix('/'),

                Select::make('http_status')
                    ->options([
                        302 => 'Temporary (302)',
                        301 => 'Permanent (301)',
                    ])
                    ->default(302),

                Toggle::make('is_active')
                    ->default(true),

                Toggle::make('keep_query_string')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('pattern'),
                TextColumn::make('target'),
                TextColumn::make('http_status'),
                ToggleColumn::make('is_active'),
                TextColumn::make('hit_count'),
                TextColumn::make('last_hit_at'),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
            ])
            ->bulkActions([
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
            'index' => ListRedirects::route('/'),
        ];
    }
}
