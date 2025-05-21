<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ShoppingResource\Pages;
use App\Filament\Resources\ShoppingResource\RelationManagers;
use App\Models\Shopping;
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

use Filament\Forms\Set;
use Illuminate\Support\Str;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ShoppingResource extends Resource
{
    protected static ?string $model = Shopping::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';
    

      protected static ?string $navigationGroup = 'Lifestyle Settings';

    protected static ?string $modelLabel = 'Shopping';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                  Section::make('Shopping Details')->schema([
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
                            ->image()->multiple()->reorderable()->panelLayout('grid')->directory('health-images'),
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
                    FileUpload::make('logo') ->image()->directory('health-logo'),
                    TagsInput::make('tags')->required(),
                    TagsInput::make('description_tags'),
                    Textarea::make('gmap')
                        ->columnSpanFull(),
                    Select::make('shopping_type')->options([
                        'clothing' => 'Clothing',
                        'electronics' => 'Electronics',
                        'groceries' => 'Groceries',
                        'furniture' => 'Furniture',
                    ])->required()->searchable()->default('clothing'),
                    TextInput::make('shopping_price'),
                    TextInput::make('shopping_capacity'),
               ])->collapsible()->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('website')
                    ->searchable(),
                Tables\Columns\TextColumn::make('description_tags')
                    ->searchable(),
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
            'index' => Pages\ListShoppings::route('/'),
            'create' => Pages\CreateShopping::route('/create'),
            'edit' => Pages\EditShopping::route('/{record}/edit'),
        ];
    }
}
