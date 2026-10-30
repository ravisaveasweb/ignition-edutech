<?php

namespace App\Filament\Resources\StudyIndiaReviews\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Actions\Action;
use Filament\Actions\ViewAction;
class StudyIndiaReviewsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('study_india_user_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('college_name')
                    ->searchable(),
                TextColumn::make('course')
                    ->searchable(),
                TextColumn::make('graduation_year')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('overall_rating')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('academics_rating')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('faculty_rating')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('placements_rating')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('infrastructure_rating')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('campus_life_rating')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('review_title')
                    ->searchable(),
               
TextColumn::make('status')
    ->label('Status')
    ->badge()
    ->color(fn (string $state): string => match ($state) {
        'approved' => 'success',
        'rejected' => 'danger',
        'pending' => 'warning',
        default => 'gray',
    })
    ->formatStateUsing(fn (string $state): string => match ($state) {
        'approved' => 'Approved',
        'rejected' => 'Rejected',
        'pending' => 'Pending',
        default => ucfirst($state),
    }),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('student_name')
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email address')
                    ->searchable(),
                TextColumn::make('country_code')
                    ->searchable(),
                TextColumn::make('mobile')
                    ->searchable(),
                TextColumn::make('gender')
                    ->searchable(),
                TextColumn::make('linkedin')
                    ->searchable(),
                TextColumn::make('college_display_name')
                    ->searchable(),
                TextColumn::make('course_fees')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('class_size')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('board_12')
                    ->searchable(),
                TextColumn::make('score_12')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('score_type_12')
                    ->searchable(),
                TextColumn::make('board_10')
                    ->searchable(),
                TextColumn::make('score_10')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('score_type_10')
                    ->searchable(),
                TextColumn::make('graduation_course')
                    ->searchable(),
                TextColumn::make('graduation_score')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('graduation_score_type')
                    ->searchable(),
                TextColumn::make('referral_code')
                    ->searchable(),
                TextColumn::make('reservation')
                    ->searchable(),
                TextColumn::make('reservation_type')
                    ->searchable(),
                TextColumn::make('gdpi')
                    ->searchable(),
                TextColumn::make('hostel')
                    ->searchable(),
                TextColumn::make('hostel_fees')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('placements')
                    ->searchable(),
                TextColumn::make('average_package')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('internships')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            
->recordActions([
    ViewAction::make()
        ->label('View Details')
        ->icon('heroicon-o-eye'),

    Action::make('approve')
        ->label('Approve')
        ->icon('heroicon-o-check-circle')
        ->color('success')
        ->requiresConfirmation()
        ->visible(fn ($record) => $record->status !== 'approved')
        ->action(fn ($record) => $record->update([
            'status' => 'approved',
        ])),

    Action::make('reject')
        ->label('Reject')
        ->icon('heroicon-o-x-circle')
        ->color('danger')
        ->requiresConfirmation()
        ->visible(fn ($record) => $record->status !== 'rejected')
        ->action(fn ($record) => $record->update([
            'status' => 'rejected',
        ])),

    EditAction::make()
        ->label('Edit'),
])

            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
