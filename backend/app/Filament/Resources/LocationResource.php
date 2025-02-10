<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LocationResource\Pages;
use App\Filament\Resources\LocationResource\RelationManagers;
use App\Models\Location;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use App\Filament\Resources\LocationResource\Pages\LocationsList;


class LocationResource extends Resource
{
    protected static ?string $model = Location::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Restaurant Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('city')
                    ->label('City')
                    ->required()
                    ->maxLength(20),

                TextInput::make('country')
                    ->label('Country')
                    ->required(),

                TextInput::make('restaurantName')
                    ->label('Restaurant')
                    ->required(),
                TextInput::make('restaurantAddress')
                    ->label('Address')
                    ->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('city')
                    ->label('City')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('country')
                    ->label('Country')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('restaurantName')
                    ->label('Restaurant')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('restaurantAddress')
                    ->label('Address')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                SelectFilter::make('city')
                    ->options([
                        'Banja Luka' => 'Banja Luka',
                        'Novi Sad' => 'Novi Sad',
                        'Beograd' => 'Beograd',
                    ])
                    ->label('Filter by City'),
                SelectFilter::make('country')
                    ->options([
                        'BiH' => 'BiH',
                        'Srbija' => 'Srbija',
                    ])
                    ->label('Filter by Country'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListLocations::route('/'),
            'create' => Pages\CreateLocation::route('/create'),
            'edit' => Pages\EditLocation::route('/{record}/edit'),
//            'list' => Pages\LocationsList::route('/list'),
        ];


    }

//    public static function getNavigationItems(): array
//    {
//        return [
//            'list' => [
//                'label' => 'Locations List',
//                'icon' => 'heroicon-o-map',
//                'url' => static::getUrl('list'),
//            ],
////            ...parent::getNavigationItems(),  ...parent::getNavigationItems(),
//        ];
//    }
}
