<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HealthResource\Pages;
use App\Filament\Resources\HealthResource\RelationManagers;
use App\Models\Health;
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

class HealthResource extends Resource
{
    protected static ?string $model = Health::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-currency-bangladeshi';

      protected static ?string $navigationGroup = 'Lifestyle Settings';

    protected static ?string $modelLabel = 'Health';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                 Section::make('Health Care Details')->schema([
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
                    Select::make('health_type')->options([
                        'spa' => 'Spa',
                        'gym' => 'Gym',
                        'yoga' => 'Yoga',
                        'health-care' => 'Health Care',
                    ])->required()->searchable(),
                    TextInput::make('health_price'),
                    TextInput::make('health_capacity'),
               ])->collapsible()->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('website')
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
            'index' => Pages\ListHealths::route('/'),
            'create' => Pages\CreateHealth::route('/create'),
            'edit' => Pages\EditHealth::route('/{record}/edit'),
        ];
    }
}
