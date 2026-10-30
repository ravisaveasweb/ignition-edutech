<?php

namespace App\Filament\Resources\StudyIndiaReviews\Tables;

use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class StudyIndiaReviewsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->label('ID')
                    ->sortable()
                    ->alignCenter()
                    ->color('gray')
                    ->weight('medium')

                    ->iconColor('gray')
                    ->toggleable(),

                TextColumn::make('student_name')
                    ->label('Student Details')
                    ->searchable()
                    ->placeholder('Not provided')
                    ->icon('heroicon-m-user-circle')
                    ->iconColor('primary')
                    ->weight('semibold')
                    ->description(fn($record) => $record->email ?: 'No email provided')
                    ->copyable()
                    ->copyMessage('Student details copied')
                    ->wrap(),

                TextColumn::make('college_name')
                    ->label('College')
                    ->searchable()
                    ->limit(30)
                    ->tooltip(fn($record) => $record->college_name)
                    ->icon('heroicon-m-building-library')
                    ->iconColor('info')
                    ->placeholder('Not specified')
                    ->wrap(),

                TextColumn::make('course')
                    ->label('Course')
                    ->searchable()
                    ->limit(25)
                    ->placeholder('Not specified')
                    ->icon('heroicon-m-academic-cap')
                    ->iconColor('primary')
                    ->wrap(),

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

                TextColumn::make('status')
                    ->label('Review Status')
                    ->badge()
                    ->icon(fn(?string $state): string => match ($state) {
                        'approved' => 'heroicon-m-check-circle',
                        'rejected' => 'heroicon-m-x-circle',
                        'pending' => 'heroicon-m-clock',
                        default => 'heroicon-m-question-mark-circle',
                    })
                    ->color(fn(?string $state): string => match ($state) {
                        'approved' => 'success',
                        'rejected' => 'danger',
                        'pending' => 'warning',
                        default => 'gray',
                    })
                    ->formatStateUsing(fn(?string $state): string => match ($state) {
                        'approved' => 'Approved',
                        'rejected' => 'Rejected',
                        'pending' => 'Pending',
                        default => ucfirst($state ?? 'Unknown'),
                    })
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label('Submitted On')
                    ->dateTime('d M Y')
                    ->sortable()
                    ->icon('heroicon-m-calendar-days')
                    ->iconColor('gray')
                    ->color('gray')
                    ->description(fn($record) => $record->created_at?->format('h:i A')),
            ])

            ->defaultSort('created_at', 'asc')

            ->filters([
                SelectFilter::make('status')
                    ->label('Review Status')
                    ->options([
                        'pending' => 'Pending',
                        'approved' => 'Approved',
                        'rejected' => 'Rejected',
                    ]),
            ])

            ->recordActions([
                ViewAction::make()
                    ->label('View Details')
                    ->icon('heroicon-o-eye')
                    ->color('info')
                    ->tooltip('View complete review'),

                Action::make('approve')
                    ->label('Approve')
                    ->icon('heroicon-o-check-circle')
                    ->color('success')
                    ->size('sm')
                    ->requiresConfirmation()
                    ->modalHeading('Approve Review')
                    ->modalDescription('Are you sure you want to approve this review?')
                    ->modalSubmitActionLabel('Yes, approve')
                    ->visible(fn($record) => $record->status !== 'approved')
                    ->action(fn($record) => $record->update([
                        'status' => 'approved',
                    ])),

                Action::make('reject')
                    ->label('Reject')
                    ->icon('heroicon-o-x-circle')
                    ->color('danger')
                    ->size('sm')
                    ->requiresConfirmation()
                    ->modalHeading('Reject Review')
                    ->modalDescription('Are you sure you want to reject this review?')
                    ->modalSubmitActionLabel('Yes, reject')
                    ->visible(fn($record) => $record->status !== 'rejected')
                    ->action(fn($record) => $record->update([
                        'status' => 'rejected',
                    ])),

                EditAction::make()
                    ->label('Edit')
                    ->icon('heroicon-o-pencil-square')
                    ->color('gray'),
            ])

            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make()
                        ->requiresConfirmation(),
                ]),
            ])

            ->paginated([5, 10, 25, 50, 100])
            ->defaultPaginationPageOption(10);
    }
}
