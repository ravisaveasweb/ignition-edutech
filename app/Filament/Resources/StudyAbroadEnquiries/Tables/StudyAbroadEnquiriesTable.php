<?php

namespace App\Filament\Resources\StudyAbroadEnquiries\Tables;

use App\Models\Enquiry;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class StudyAbroadEnquiriesTable
{
    public static function configure(Table $table): Table
    {
        return $table

          

            ->columns([

                TextColumn::make('id')
                    ->label('ID')
                    ->sortable()
                    ->toggleable()
                     ->extraCellAttributes([
                        'class' => 'ign-counselling-table-scope',
                    ]),

                TextColumn::make('name')
                    ->label('Student Details')
                    ->searchable()
                    ->sortable()
                    ->weight('semibold')
                    ->description(fn (Enquiry $record): string =>
                        filled($record->email)
                            ? $record->email
                            : 'Email not provided'
                    )
                    ->icon('heroicon-m-user-circle')
                    ->iconColor('primary')
                    ->wrap(),

                TextColumn::make('email')
                    ->label('Email Address')
                    ->searchable()
                    ->copyable()
                    ->copyMessage('Email copied successfully')
                    ->url(fn (Enquiry $record): ?string =>
                        filled($record->email)
                            ? 'mailto:' . $record->email
                            : null
                    )
                    ->color('primary')
                    ->icon('heroicon-m-envelope')
                    ->placeholder('Not provided')
                    ->toggleable(),

                TextColumn::make('mobile')
                    ->label('Mobile Number')
                    ->searchable()
                    ->copyable()
                    ->copyMessage('Mobile number copied successfully')
                    ->url(fn (Enquiry $record): ?string =>
                        filled($record->mobile)
                            ? 'tel:' . $record->mobile
                            : null
                    )
                    ->icon('heroicon-m-phone')
                    ->iconColor('success')
                    ->placeholder('Not provided')
                    ->toggleable(),

                TextColumn::make('program')
                    ->label('Interested Program')
                    ->searchable()
                    ->sortable()
                    ->weight('medium')
                    ->placeholder('Not specified')
                    ->wrap(),

                TextColumn::make('enquiry_type')
                    ->label('Enquiry Category')
                    ->badge()
                    ->formatStateUsing(fn (?string $state): string =>
                        $state ?: 'Not classified'
                    )
                    ->color(fn (?string $state): string => match ($state) {
                        'Study Abroad' => 'info',
                        default => 'gray',
                    })
                    ->icon('heroicon-m-globe-asia-australia'),

                TextColumn::make('source')
                    ->label('Enquiry Source')
                    ->badge()
                    ->color('gray')
                    ->placeholder('Unknown')
                    ->searchable()
                    ->toggleable(),

                TextColumn::make('created_at')
                    ->label('Submission Details')
                    ->dateTime('d M Y')
                    ->description(fn (Enquiry $record): string =>
                        $record->created_at
                            ? $record->created_at->format('h:i A') .
                                ' · ' .
                                $record->created_at->diffForHumans()
                            : 'Date unavailable'
                    )
                    ->sortable()
                    ->icon('heroicon-m-calendar-days')
                    ->iconColor('gray'),

            ])


            ->filters([

                SelectFilter::make('program')
                    ->label('Filter by Program')
                    ->placeholder('All Programs')
                    ->searchable()
                    ->options(fn (): array => Enquiry::query()
                        ->where('enquiry_type', 'Study Abroad')
                        ->whereNotNull('program')
                        ->where('program', '!=', '')
                        ->distinct()
                        ->orderBy('program')
                        ->pluck('program', 'program')
                        ->toArray()),

                SelectFilter::make('source')
                    ->label('Enquiry Source')
                    ->placeholder('All Sources')
                    ->searchable()
                    ->options(fn (): array => Enquiry::query()
                        ->where('enquiry_type', 'Study Abroad')
                        ->whereNotNull('source')
                        ->where('source', '!=', '')
                        ->distinct()
                        ->orderBy('source')
                        ->pluck('source', 'source')
                        ->toArray()),

                Filter::make('created_at')
                    ->label('Submission Period')
                    ->form([

                        DatePicker::make('from')
                            ->label('From Date')
                            ->native(false)
                            ->displayFormat('d M Y'),

                        DatePicker::make('until')
                            ->label('To Date')
                            ->native(false)
                            ->displayFormat('d M Y'),

                    ])
                    ->columns(2)
                    ->query(function (
                        Builder $query,
                        array $data
                    ): Builder {

                        return $query

                            ->when(
                                $data['from'] ?? null,
                                fn (Builder $query, $date) =>
                                    $query->whereDate(
                                        'created_at',
                                        '>=',
                                        $date
                                    )
                            )

                            ->when(
                                $data['until'] ?? null,
                                fn (Builder $query, $date) =>
                                    $query->whereDate(
                                        'created_at',
                                        '<=',
                                        $date
                                    )
                            );
                    }),

            ])

          

            ->recordActions([

                ViewAction::make()
                    ->label('View')
                    ->icon('heroicon-m-eye')
                    ->color('info'),

                EditAction::make()
                    ->label('Edit')
                    ->icon('heroicon-m-pencil-square')
                    ->color('warning'),

                DeleteAction::make()
                    ->label('Delete')
                    ->icon('heroicon-m-trash')
                    ->color('danger'),

            ])


            ->toolbarActions([

                BulkActionGroup::make([

                    DeleteBulkAction::make()
                        ->label('Delete Selected')
                        ->requiresConfirmation(),

                ]),

            ])

           

            ->striped()

            ->emptyStateHeading('No Study Abroad enquiries found')
            ->emptyStateDescription(
                'Study Abroad enquiries will appear here when students submit the enquiry form.'
            )
            ->emptyStateIcon('heroicon-o-globe-asia-australia')

            ->defaultSort('created_at', 'desc')

            ->paginated([10, 25, 50, 100])

            ->defaultPaginationPageOption(25)

           

            ->modifyQueryUsing(
                fn (Builder $query): Builder =>
                    $query->where('enquiry_type', 'Study Abroad')
            );
    }
}
