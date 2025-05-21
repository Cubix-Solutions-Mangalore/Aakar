<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AccomodationResource\Pages;
use App\Filament\Resources\AccomodationResource\RelationManagers;
use App\Models\Accomodation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AccomodationResource extends Resource
{
    protected static ?string $model = Accomodation::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required(),
                Forms\Components\TextInput::make('slug')
                    ->required(),
                Forms\Components\Textarea::make('description')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('address'),
                Forms\Components\TextInput::make('phone')
                    ->tel(),
                Forms\Components\TextInput::make('email')
                    ->email(),
                Forms\Components\TextInput::make('website'),
                Forms\Components\FileUpload::make('image')
                    ->image(),
                Forms\Components\TextInput::make('category_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('place_id')
                    ->required()
                    ->numeric(),
                Forms\Components\DateTimePicker::make('opening_time'),
                Forms\Components\DateTimePicker::make('closing_time'),
                Forms\Components\TextInput::make('logo'),
                Forms\Components\Textarea::make('tags')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('gmap')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('description_tags'),
                Forms\Components\TextInput::make('room_type'),
                Forms\Components\TextInput::make('room_price'),
                Forms\Components\TextInput::make('room_capacity'),
                Forms\Components\TextInput::make('room_amenities'),
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
                Tables\Columns\ImageColumn::make('image'),
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
                Tables\Columns\TextColumn::make('room_type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('room_price')
                    ->searchable(),
                Tables\Columns\TextColumn::make('room_capacity')
                    ->searchable(),
                Tables\Columns\TextColumn::make('room_amenities')
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
            'index' => Pages\ListAccomodations::route('/'),
            'create' => Pages\CreateAccomodation::route('/create'),
            'edit' => Pages\EditAccomodation::route('/{record}/edit'),
        ];
    }
}
