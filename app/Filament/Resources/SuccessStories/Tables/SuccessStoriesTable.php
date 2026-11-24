<?php

namespace App\Filament\Resources\SuccessStories\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;

class SuccessStoriesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->extraAttributes([
                'class' => 'ign-success-stories-table-scope',
            ])
            ->striped()
            ->columns([

                /* Student Image */
                ImageColumn::make('student_image')
                    ->label('Student')
                    ->circular()
                    ->size(48),

                /* Student Name */
                TextColumn::make('student_name')
                    ->label('Student Name')
                    ->searchable()
                    ->sortable()
                    ->weight('bold')
                    ->color('primary')
                    ->description(fn ($record) => $record->course_name),

                /* Course */
                TextColumn::make('course_name')
                    ->label('Course')
                    ->searchable()
                    ->sortable()
                    ->limit(28)
                    ->wrap()
                    ->toggleable(),

                /* College / University */
                TextColumn::make('college_name')
                    ->label('College / University')
                    ->searchable()
                    ->sortable()
                    ->limit(30)
                    ->wrap()
                    ->toggleable(),

                /* Country */
                TextColumn::make('country')
                    ->label('Country')
                    ->searchable()
                    ->sortable()
                    ->badge()
                    ->color('info'),

                /* Rating */
                TextColumn::make('rating')
                    ->label('Rating')
                    ->sortable()
                    ->formatStateUsing(
                        fn ($state) => '★ ' . number_format((float) $state, 1) . ' / 5'
                    )
                    ->color('warning')
                    ->weight('bold')
                    ->alignCenter(),

                /* Featured */
                ToggleColumn::make('is_featured')
                    ->label('Featured')
                    ->alignCenter(),

                /* Approved */
                ToggleColumn::make('is_approved')
                    ->label('Approved')
                    ->alignCenter(),

                /* Active */
                ToggleColumn::make('status')
                    ->label('Active')
                    ->alignCenter(),
            ])

            ->recordActions([
                EditAction::make()
                    ->iconButton()
                    ->tooltip('Edit Success Story'),

                DeleteAction::make()
                    ->iconButton()
                    ->tooltip('Delete Success Story'),
            ])

            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}