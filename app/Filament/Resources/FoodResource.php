<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FoodResource\Pages;
use App\Filament\Resources\FoodResource\RelationManagers;
use App\Models\Food;
use Filament\Forms;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Set;
use Illuminate\Support\Str;

class FoodResource extends Resource
{
    protected static ?string $model = Food::class;
    protected static ?string $navigationGroup = 'Lifestyle Settings';

    protected static ?string $modelLabel = 'Food & Drinks';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
               Section::make('Food & Drinks Details')->schema([
                   TextInput::make('name')
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state)))
                            ->required(),
                    TextInput::make('slug')
                        ->required(),
                    Textarea::make('description')
                        ->columnSpanFull(),
                        Textarea::make('address'),
                        FileUpload::make('image')
                            ->image()->multiple()->reorderable()->panelLayout('grid')->directory('food-images'),
                    TextInput::make('phone')
                        ->tel(),
                    TextInput::make('email')
                        ->email(),
                    TextInput::make('website'),
                    Select::make('category_id')
                        ->required()->relationship('category', 'name')->preload()->searchable(),
                    Select::make('place_id')
                        ->required()->relationship('place', 'name')->preload()->searchable(),
                    DateTimePicker::make('opening_time'),
                    DateTimePicker::make('closing_time'),
                    FileUpload::make('logo') ->image()->directory('food-logo'),
                    TagsInput::make('tags')->required(),
                    TagsInput::make('description_tags'),
                    Textarea::make('gmap')
                        ->columnSpanFull(),
                    Select::make('food_type')->options([
                        'vegetarian' => 'Vegetarian',
                        'non_vegetarian' => 'Non Vegetarian',
                        'vegan' => 'Vegan',
                    ])->required()->default('vegetarian')->searchable(),
                    TextInput::make('food_price'),
                    TextInput::make('food_capacity'),
               ])->collapsible()->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\TextColumn::make('address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('website')
                    ->searchable(),
                Tables\Columns\TextColumn::make('category_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('place_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('opening_time')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('closing_time')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('logo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('description_tags')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('food_type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('food_price')
                    ->searchable(),
                Tables\Columns\TextColumn::make('food_capacity')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListFood::route('/'),
            'create' => Pages\CreateFood::route('/create'),
            'edit' => Pages\EditFood::route('/{record}/edit'),
        ];
    }
}
