<?php

namespace App\Filament\Resources\Universities\RelationManagers;

use Filament\Actions\{BulkActionGroup, CreateAction, DeleteAction, DeleteBulkAction, EditAction};
use Filament\Forms\Components\{DatePicker, TextInput, Textarea, Toggle};
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\{IconColumn, TextColumn};
use Filament\Tables\Table;

class AdmissionsRelationManager extends RelationManager
{
    protected static string $relationship = 'admissions';
    protected static ?string $title = 'Admissions';

    public function form(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('title')->required(),
            Textarea::make('description')->columnSpanFull(),
            Textarea::make('eligibility')->columnSpanFull(),
            Textarea::make('admission_process')->columnSpanFull(),
            DatePicker::make('start_date'),
            DatePicker::make('end_date'),
            Toggle::make('status')->default(true),
        ]);
    }

    public function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('title')->searchable(),
            TextColumn::make('start_date')->date(),
            TextColumn::make('end_date')->date(),
            IconColumn::make('status')->boolean(),
        ])->headerActions([CreateAction::make()])
            ->recordActions([EditAction::make(), DeleteAction::make()])
            ->toolbarActions([BulkActionGroup::make([DeleteBulkAction::make()])]);
    }
}
