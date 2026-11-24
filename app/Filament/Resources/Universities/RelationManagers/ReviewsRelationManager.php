<?php

namespace App\Filament\Resources\Universities\RelationManagers;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\CreateAction;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ReviewsRelationManager extends RelationManager
{
    protected static string $relationship = 'reviews';
    protected static ?string $title = 'Reviews';

    public function form(Schema $schema): Schema
    {
        return $schema->components([
            Select::make('user_id')->relationship('user', 'name')->searchable()->preload()->required(),
            TextInput::make('rating')->numeric()->minValue(1)->maxValue(5)->required(),
            TextInput::make('title')->required(),
            Textarea::make('review')->required()->rows(5)->columnSpanFull(),
            Toggle::make('status')->label('Approved')->default(false),
        ]);
    }

    public function table(Table $table): Table
    {
        return $table->recordTitleAttribute('title')
            ->columns([
                TextColumn::make('user.name')->label('Student')->searchable(),
                TextColumn::make('rating')->sortable(),
                TextColumn::make('title')->searchable(),
                IconColumn::make('status')->boolean(),
                TextColumn::make('created_at')->dateTime()->sortable(),
            ])
            ->headerActions([CreateAction::make()])
            ->recordActions([EditAction::make(), DeleteAction::make()])
            ->toolbarActions([
                BulkActionGroup::make([DeleteBulkAction::make()]),
            ]);
    }
}
