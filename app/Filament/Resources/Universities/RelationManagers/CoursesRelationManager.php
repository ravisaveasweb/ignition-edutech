<?php

namespace App\Filament\Resources\Universities\RelationManagers;

use Filament\Actions\AttachAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DetachAction;
use Filament\Actions\DetachBulkAction;
use Filament\Forms\Components\TextInput;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CoursesRelationManager extends RelationManager
{
    protected static string $relationship = 'courses';
    protected static ?string $title = 'Courses & Fees';

    public function form(Schema $schema): Schema
    {
        return $schema->components([]);
    }

    public function table(Table $table): Table
    {
        return $table->recordTitleAttribute('name')
            ->columns([
                TextColumn::make('name')->label('Course')->searchable()->sortable(),
                TextColumn::make('degree')->searchable(),
                TextColumn::make('duration')->numeric(),
                TextColumn::make('pivot.fees')->label('University Fee')->money('INR'),
                TextColumn::make('pivot.seats')->label('Seats')->numeric(),
                TextColumn::make('status')->badge()
                    ->formatStateUsing(fn($state) => $state ? 'Active' : 'Inactive'),
            ])
            ->headerActions([
                AttachAction::make()
                    ->label('Attach Course')
                    ->preloadRecordSelect()
                    ->recordSelectSearchColumns([
                        'name',
                        'degree',
                        'slug',
                    ])
                    ->schema(fn(AttachAction $action): array => [
                        $action->getRecordSelect(),

                        TextInput::make('fees')
                            ->label('Fees')
                            ->numeric()
                            ->prefix('₹')
                            ->required()
                            ->minValue(0),

                        TextInput::make('seats')
                            ->label('Seats')
                            ->numeric()
                            ->required()
                            ->minValue(0),
                    ]),
            ])
            ->recordActions([
                DetachAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DetachBulkAction::make(),
                ]),
            ]);
    }
}
