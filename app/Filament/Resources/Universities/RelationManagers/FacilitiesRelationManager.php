<?php

namespace App\Filament\Resources\Universities\RelationManagers;

use Filament\Actions\{BulkActionGroup, CreateAction, DeleteAction, DeleteBulkAction, EditAction};
use Filament\Forms\Components\{TextInput, Textarea, Toggle};
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\{IconColumn, TextColumn};
use Filament\Tables\Table;

class FacilitiesRelationManager extends RelationManager
{
    protected static string $relationship = 'facilities';
    protected static ?string $title = 'Facilities';

    public function form(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('name')->required(),
            TextInput::make('icon'),
            Textarea::make('description')->columnSpanFull(),
            Toggle::make('status')->default(true),
        ]);
    }

    public function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('name')->searchable()->sortable(),
            TextColumn::make('icon'),
            IconColumn::make('status')->boolean(),
        ])->headerActions([CreateAction::make()])
            ->recordActions([EditAction::make(), DeleteAction::make()])
            ->toolbarActions([BulkActionGroup::make([DeleteBulkAction::make()])]);
    }
}
