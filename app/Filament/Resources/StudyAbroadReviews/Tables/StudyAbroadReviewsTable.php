<?php

namespace App\Filament\Resources\StudyAbroadReviews\Tables;

use App\Models\StudyAbroadReview;
use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class StudyAbroadReviewsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'asc')
            ->striped()
            ->paginated([5, 10, 25, 50])

            ->columns([

                // REVIEW ID
                TextColumn::make('id')
                    ->label('ID')
                    ->sortable()
                    ->toggleable(),

                // STUDENT DETAILS
                TextColumn::make('student_name')
                    ->label('Student')
                    ->icon('heroicon-m-user-circle')
                    ->iconColor('info')
                    ->description(
                        fn(StudyAbroadReview $record) =>
                        $record->student_email
                    )
                    ->searchable()
                    ->sortable()
                    ->weight('semibold')
                    ->wrap(),

                TextColumn::make('student_mobile')
                    ->label('Mobile')
                    ->icon('heroicon-o-phone')
                    ->iconColor('gray')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),

                // UNIVERSITY DETAILS
                TextColumn::make('university_name')
                    ->label('University')
                    ->icon('heroicon-m-building-library')
                    ->iconColor('info')
                    ->searchable()
                    ->sortable()
                    ->weight('medium')
                    ->wrap(),

                TextColumn::make('country')
                    ->label('Country')
                    ->icon('heroicon-m-globe-alt')
                    ->iconColor('info')
                    ->searchable()
                    ->sortable()
                    ->wrap(),

                TextColumn::make('course_name')
                    ->label('Course')
                    ->icon('heroicon-o-academic-cap')
                    ->iconColor('info')
                    ->searchable()
                    ->toggleable()
                    ->wrap(),

                // OVERALL RATING
                TextColumn::make('overall_rating')
                    ->label('Rating')
                    ->numeric(decimalPlaces: 1)
                    ->sortable()
                    ->alignCenter()
                    ->formatStateUsing(fn($state) => $state !== null
                        ? $state . ' / 5'
                        : 'N/A')
                    ->icon('heroicon-s-star')
                    ->iconColor('warning')
                    ->color('warning')
                    ->weight('semibold'),

                // REVIEW STATUS
                TextColumn::make('status')
                    ->label('Review Status')
                    ->badge()
                    ->formatStateUsing(
                        fn(?string $state): string => match ($state) {
                            'pending' => 'Pending',
                            'approved' => 'Approved',
                            'rejected' => 'Rejected',
                            default => ucfirst($state ?? 'Unknown'),
                        }
                    )
                    ->color(
                        fn(?string $state): string => match ($state) {
                            'pending' => 'warning',
                            'approved' => 'success',
                            'rejected' => 'danger',
                            default => 'gray',
                        }
                    )
                    ->icon(
                        fn(?string $state): string => match ($state) {
                            'pending' => 'heroicon-m-clock',
                            'approved' => 'heroicon-m-check-circle',
                            'rejected' => 'heroicon-m-x-circle',
                            default => 'heroicon-o-question-mark-circle',
                        }
                    )
                    ->sortable(),

                // SUBMISSION DATE
                TextColumn::make('created_at')
                    ->label('Submitted On')
                    ->dateTime('d M Y, h:i A')
                    ->icon('heroicon-m-calendar-days')
                    ->iconColor('gray')
                    ->sortable(),

            ])

            // FILTERS
            ->filters([
                SelectFilter::make('status')
                    ->label('Review Status')
                    ->options([
                        'pending' => 'Pending',
                        'approved' => 'Approved',
                        'rejected' => 'Rejected',
                    ])
                    ->native(false),

                SelectFilter::make('country')
                    ->label('Study Country')
                    ->options(
                        fn(): array => StudyAbroadReview::query()
                            ->whereNotNull('country')
                            ->where('country', '!=', '')
                            ->distinct()
                            ->orderBy('country')
                            ->pluck('country', 'country')
                            ->all()
                    )
                    ->searchable()
                    ->native(false),
            ])

            // ROW ACTIONS
            ->recordActions([

                ViewAction::make()
                    ->label('View Details')
                    ->icon('heroicon-o-eye')
                    ->color('info'),

                Action::make('approve')
                    ->label('Approve')
                    ->icon('heroicon-m-check-circle')
                    ->color('success')
                    ->requiresConfirmation()
                    ->modalHeading('Approve this review?')
                    ->modalDescription(
                        'This review will be marked as approved and can appear on the public reviews page.'
                    )
                    ->modalSubmitActionLabel('Yes, approve')
                    ->visible(
                        fn(StudyAbroadReview $record): bool =>
                        $record->status !== 'approved'
                    )
                    ->action(
                        fn(StudyAbroadReview $record) =>
                        $record->update([
                            'status' => 'approved',
                        ])
                    ),

                Action::make('reject')
                    ->label('Reject')
                    ->icon('heroicon-m-x-circle')
                    ->color('danger')
                    ->requiresConfirmation()
                    ->modalHeading('Reject this review?')
                    ->modalDescription(
                        'This review will remain unpublished on the public reviews page.'
                    )
                    ->modalSubmitActionLabel('Yes, reject')
                    ->visible(
                        fn(StudyAbroadReview $record): bool =>
                        $record->status !== 'rejected'
                    )
                    ->action(
                        fn(StudyAbroadReview $record) =>
                        $record->update([
                            'status' => 'rejected',
                        ])
                    ),

                EditAction::make()
                    ->label('Edit')
                    ->icon('heroicon-m-pencil-square')
                    ->color('primary'),

            ])

            // BULK ACTIONS
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make()
                        ->requiresConfirmation(),
                ]),
            ])

            // EMPTY TABLE DESIGN
            ->emptyStateHeading('No study abroad reviews yet')
            ->emptyStateDescription(
                'Submitted student reviews will appear here when they are available.'
            )
            ->emptyStateIcon('heroicon-o-chat-bubble-left-right');
    }
}
