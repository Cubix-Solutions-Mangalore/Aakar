<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AccomodationResource\Pages;
use App\Filament\Resources\AccomodationResource\RelationManagers;
use App\Models\Accomodation;
use Filament\Forms;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AccomodationResource extends Resource
{
    protected static ?string $model = Accomodation::class;

    protected static ?string $navigationIcon = 'heroicon-o-home-modern';

    protected static ?string $navigationGroup = 'Lifestyle Settings';

    protected static ?string $modelLabel = 'Accomodations';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Accomadation Details')->schema([
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
                            ->image()->multiple()->reorderable()->panelLayout('grid')->directory('accomodation-images'),
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
                    FileUpload::make('logo') ->image()->directory('accomodation-logo'),
                    TagsInput::make('tags')->required(),
                    TagsInput::make('description_tags'),
                    Textarea::make('gmap')
                        ->columnSpanFull(),
                    Select::make('room_type')->options([
                        'single' => 'Single',
                        'double' => 'Double',
                        'suite' => 'Suite',
                    ])->required(),
                    TextInput::make('room_price'),
                    TextInput::make('room_capacity'),
                    TextInput::make('room_amenities'),
                ])->columns(2)->collapsible(),

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
                Tables\Columns\ImageColumn::make('image'),
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
            'index' => Pages\ListAccomodations::route('/'),
            'create' => Pages\CreateAccomodation::route('/create'),
            'edit' => Pages\EditAccomodation::route('/{record}/edit'),
        ];
    }
}
