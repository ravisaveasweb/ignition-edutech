<?php

namespace App\Filament\Resources\Universities\RelationManagers;

use Filament\Actions\{BulkActionGroup, CreateAction, DeleteAction, DeleteBulkAction, EditAction};
use Filament\Forms\Components\{TextInput, Textarea, Toggle};
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\{IconColumn, TextColumn};
use Filament\Tables\Table;

class PlacementsRelationManager extends RelationManager
{
    protected static string $relationship = 'placements';
    protected static ?string $title = 'Placement Records';

    public function form(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('year')->label('Year'),
            TextInput::make('average_package')->numeric()->prefix('₹'),
            TextInput::make('highest_package')->numeric()->prefix('₹'),
            TextInput::make('placement_percentage')->numeric()->minValue(0)->maxValue(100)->suffix('%'),
            Textarea::make('description')->columnSpanFull(),
            Toggle::make('status')->default(true),
        ]);
    }

    public function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('year')->sortable(),
            TextColumn::make('average_package')->money('INR'),
            TextColumn::make('highest_package')->money('INR'),
            TextColumn::make('placement_percentage')->suffix('%'),
            IconColumn::make('status')->boolean(),
        ])->headerActions([CreateAction::make()])
          ->recordActions([EditAction::make(), DeleteAction::make()])
          ->toolbarActions([BulkActionGroup::make([DeleteBulkAction::make()])]);
    }
}
