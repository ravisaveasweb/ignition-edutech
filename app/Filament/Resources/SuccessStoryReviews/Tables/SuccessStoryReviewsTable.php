<?php

namespace App\Filament\Resources\SuccessStoryReviews\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;

class SuccessStoryReviewsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->extraAttributes([
                'class' => 'ign-success-story-reviews-table-scope',
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

                /* Review Type */
                TextColumn::make('review_type')
                    ->label('Type')
                    ->badge()
                    ->formatStateUsing(
                        fn (string $state): string => match ($state) {
                            'review' => 'Student Review',
                            'testimonial' => 'Testimonial',
                            default => ucfirst($state),
                        }
                    ),

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

                /* Approved */
                ToggleColumn::make('is_approved')
                    ->label('Approved')
                    ->alignCenter(),

                /* Active */
                ToggleColumn::make('status')
                    ->label('Active')
                    ->alignCenter(),

                /* Sort Order */
                TextColumn::make('sort_order')
                    ->label('Order')
                    ->numeric()
                    ->sortable()
                    ->alignCenter(),
            ])

            ->filters([
                //
            ])

            ->recordActions([
                EditAction::make()
                    ->iconButton()
                    ->tooltip('Edit Review'),

                DeleteAction::make()
                    ->iconButton()
                    ->tooltip('Delete Review'),
            ])

            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}