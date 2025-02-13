<?php

namespace App\Filament\Resources;

use App\Filament\Pages\LocationListPage;
use App\Filament\Resources\LocationResource\Pages;
use App\Filament\Resources\LocationResource\RelationManagers;
use App\Models\Location;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;


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

                FileUpload::make('image_path')
                ->label('Restaurant Image')
                    ->image()
                    ->disk('public')
                    ->directory('restaurant-images')
                    ->required(),
                Textarea::make('description')
                    ->label('Description')
                    ->maxLength(500)
                    ->nullable(),
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
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                TextEntry::make('city')
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
            'view' => Pages\ViewLocation::route('/{record}'),
         //   'location-list' =>  \App\Filament\Pages\LocationListPage::url('/location-list'),
          //'location-list' => LocationListPage::route('/location-list'),
        ];


    }
//    public static function getNavigationItems(): array
//    {
//        return [
//            'location-list' => [
//                'label' => 'Location List',
//                'icon' => 'heroicon-o-map',
//                'url' => static::getUrl('location-list'),
//            ],
//            ...parent::getNavigationItems(),
//        ];
//   }


}
