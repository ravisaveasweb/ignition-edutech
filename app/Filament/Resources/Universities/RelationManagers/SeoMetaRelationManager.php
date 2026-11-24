<?php

namespace App\Filament\Resources\Universities\RelationManagers;

use Filament\Actions\{CreateAction, DeleteAction, EditAction};
use Filament\Forms\Components\{Textarea, TextInput};
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SeoMetaRelationManager extends RelationManager
{
    protected static string $relationship = 'seoMeta';
    protected static ?string $title = 'SEO';

    public function form(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('title')->maxLength(255),
            Textarea::make('description')->columnSpanFull(),
            Textarea::make('keywords')->columnSpanFull(),
            TextInput::make('canonical_url')->url(),
            TextInput::make('og_title'),
            Textarea::make('og_description')->columnSpanFull(),
            TextInput::make('og_image')->url(),
        ]);
    }

    public function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('title')->searchable(),
            TextColumn::make('canonical_url')->url(),
        ])->headerActions([CreateAction::make()])
          ->recordActions([EditAction::make(), DeleteAction::make()]);
    }
}
