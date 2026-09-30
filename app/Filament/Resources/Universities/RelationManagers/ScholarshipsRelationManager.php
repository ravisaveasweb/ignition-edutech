<?php

namespace App\Filament\Resources\Universities\RelationManagers;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ScholarshipsRelationManager extends RelationManager
{
    protected static string $relationship = 'scholarships';
    protected static ?string $title = 'Scholarships';

    public function form(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('name')->required()->maxLength(255),
            TextInput::make('amount')->numeric()->prefix('₹'),
            DatePicker::make('deadline'),
            Textarea::make('eligibility_criteria')->columnSpanFull(),
            Textarea::make('description')->columnSpanFull(),
            Toggle::make('status')->default(true),
        ]);
    }

    public function table(Table $table): Table
    {
        return $table->recordTitleAttribute('name')
            ->columns([
                TextColumn::make('name')->searchable()->sortable(),
                TextColumn::make('amount')->money('INR'),
                TextColumn::make('deadline')->date(),
                IconColumn::make('status')->boolean(),
            ])
            ->headerActions([CreateAction::make()])
            ->recordActions([EditAction::make(), DeleteAction::make()])
            ->toolbarActions([
                BulkActionGroup::make([DeleteBulkAction::make()]),
            ]);
    }
}
