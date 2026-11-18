<?php

namespace App\Filament\Resources\Universities\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\Action;
use Filament\Tables\Columns\IconColumn;
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
                // SpatieMediaLibraryImageColumn::make('logo')
                //     ->collection('logo')
                //     ->label('Logo')
                //     ->circular(),

                TextColumn::make('name')
                    ->label('University')
                    ->searchable()
                    ->sortable()
                    ->extraCellAttributes([
                        'class' => 'ign-university-grid-scope',
                    ]),

                TextColumn::make('slug')
                    ->label('Page Status')
                    ->formatStateUsing(fn() => 'Existing Page')
                    ->badge()
                    ->color('success')
                    ->icon('heroicon-m-check-circle'),

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

            // Clicking the university row opens its existing frontend page.
            ->recordUrl(fn($record) => match ($record->slug) {
                'nmims-cdoe' => route('nmims-distance-education-online-degree-programs'),
                'vit' => route('vit-online-degree-courses'),
                'amity-university-online' => route('amity-university-online-ug-pg-courses'),
                'manipal-online' => route('manipal-online'),
                'sikkim-manipal-university' => route('smu'),
                'dy-patil-pune' => route('dr-d-y-patil-pune'),
                'jain-online' => route('jain-online'),
                'nl-dalmia-online' => route('nldalmia-online'),
                'vivekananda-global-university-online' => route('vivekananda-global-university-online'),
                'gla-university-online' => route('gla-university-online'),
                'university-of-massachusetts-global-online' => route('university-of-massachusetts-global-online'),
                'bennett-university' => route('bennett-university'),
                default => null,
            })

            ->recordActions([
                Action::make('viewPage')
                    ->label('View Page')
                    ->icon('heroicon-m-arrow-top-right-on-square')
                    ->color('success')
                    ->url(fn($record) => match ($record->slug) {
                        'nmims-cdoe' => route('nmims-distance-education-online-degree-programs'),
                        'vit' => route('vit-online-degree-courses'),
                        'amity-university-online' => route('amity-university-online-ug-pg-courses'),
                        'manipal-online' => route('manipal-online'),
                        'sikkim-manipal-university' => route('smu'),
                        'dy-patil-pune' => route('dr-d-y-patil-pune'),
                        'jain-online' => route('jain-online'),
                        'nl-dalmia-online' => route('nldalmia-online'),
                        'vivekananda-global-university-online' => route('vivekananda-global-university-online'),
                        'gla-university-online' => route('gla-university-online'),
                        'university-of-massachusetts-global-online' => route('university-of-massachusetts-global-online'),
                        'bennett-university' => route('bennett-university'),
                        default => null,
                    })
                    ->openUrlInNewTab(),

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
