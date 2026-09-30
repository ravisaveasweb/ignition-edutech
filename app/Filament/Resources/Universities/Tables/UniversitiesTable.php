<?php

namespace App\Filament\Resources\Universities\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;

class UniversitiesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                SpatieMediaLibraryImageColumn::make('logo')
                    ->collection('logo')
                    ->label('Logo')
                    ->circular(),

                TextColumn::make('name')
                    ->label('University')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('state.name')
                    ->label('State')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('city.name')
                    ->label('City')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('university_type')
                    ->label('Type')
                    ->badge()
                    ->toggleable(),

                TextColumn::make('ownership')
                    ->badge()
                    ->toggleable(),

                TextColumn::make('ranking')
                    ->label('Ranking')
                    ->numeric()
                    ->sortable(),

                TextColumn::make('average_package')
                    ->label('Avg. Package')
                    ->money('INR')
                    ->sortable()
                    ->toggleable(),

                TextColumn::make('highest_package')
                    ->label('Highest Package')
                    ->money('INR')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('placement_percentage')
                    ->label('Placement')
                    ->suffix('%')
                    ->sortable()
                    ->toggleable(),

                IconColumn::make('featured')
                    ->boolean()
                    ->label('Featured'),

                IconColumn::make('status')
                    ->boolean()
                    ->label('Active'),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('state_id')
                    ->label('State')
                    ->relationship('state', 'name')
                    ->searchable()
                    ->preload(),

                SelectFilter::make('city_id')
                    ->label('City')
                    ->relationship('city', 'name')
                    ->searchable()
                    ->preload(),

                TernaryFilter::make('featured')
                    ->label('Featured'),

                TernaryFilter::make('status')
                    ->label('Active'),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
