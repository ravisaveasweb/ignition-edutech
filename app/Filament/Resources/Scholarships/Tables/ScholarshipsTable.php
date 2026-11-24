<?php

namespace App\Filament\Resources\Scholarships\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ScholarshipsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Scholarship')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('amount')
                    ->label('Amount')
                    ->numeric()
                    ->sortable()
                    ->formatStateUsing(
                        fn($state) => $state !== null
                            ? '₹' . number_format((float) $state)
                            : '—'
                    ),

                TextColumn::make('deadline')
                    ->label('Deadline')
                    ->date('d M Y')
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime('d M Y, h:i A')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('updated_at')
                    ->label('Updated')
                    ->dateTime('d M Y, h:i A')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])

            ->filters([
                //
            ])

            ->recordActions([
                EditAction::make()
                    ->label('Edit'),

                DeleteAction::make()
                    ->label('Delete'),
            ])

            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])

            ->extraAttributes([
                'class' => 'ign-scholarships-table-scope',
            ]);
    }
}
