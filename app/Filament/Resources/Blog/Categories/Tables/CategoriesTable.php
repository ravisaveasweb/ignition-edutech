<?php

namespace App\Filament\Resources\Blog\Categories\Tables;

use App\Models\Blog\PostCategory;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Notifications\Notification;
use Filament\Support\Enums\FontWeight;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CategoriesTable
{
    public static function configure(Table $table): Table
    {
        return $table

            ->extraAttributes([
                'class' => 'ign-blog-categories-table',
            ])

            ->columns([

                TextColumn::make('name')
                    ->label('Category Name')
                    ->searchable()
                    ->sortable()
                    ->weight(FontWeight::SemiBold)
                    ->color('gray')
                    ->wrap(),

                TextColumn::make('slug')
                    ->label('URL Slug')
                    ->searchable()
                    ->sortable()
                    ->color('gray')
                    ->copyable()
                    ->copyMessage('Slug copied'),

                IconColumn::make('is_visible')
                    ->label('Visibility')
                    ->boolean()
                    ->trueColor('success')
                    ->falseColor('gray')
                    ->alignCenter(),

                TextColumn::make('updated_at')
                    ->label('Last Modified')
                    ->dateTime('d M Y')
                    ->sortable()
                    ->color('gray')
                    ->placeholder('Never modified'),

            ])

            ->filters([
                //
            ])

            ->recordActions([

                ActionGroup::make([

                    Action::make('toggle_visibility')
                        ->label(fn (PostCategory $record): string =>
                            $record->is_visible ? 'Hide Category' : 'Show Category'
                        )
                        ->icon(fn (PostCategory $record): Heroicon =>
                            $record->is_visible ? Heroicon::EyeSlash : Heroicon::Eye
                        )
                        ->color('gray')
                        ->requiresConfirmation()
                        ->modalHeading(fn (PostCategory $record): string =>
                            $record->is_visible ? 'Hide Category?' : 'Show Category?'
                        )
                        ->modalDescription('Are you sure you want to change this category visibility?')
                        ->action(function (PostCategory $record): void {

                            $record->update([
                                'is_visible' => ! $record->is_visible,
                            ]);

                            Notification::make()
                                ->title('Category visibility updated')
                                ->success()
                                ->send();
                        }),

                    ViewAction::make(),

                    EditAction::make(),

                    DeleteAction::make()
                        ->action(function (): void {
                            Notification::make()
                                ->title('Now, now, don\'t be cheeky, leave some records for others to play with!')
                                ->warning()
                                ->send();
                        }),

                ]),

            ])

            ->groupedBulkActions([

                DeleteBulkAction::make()
                    ->action(function (): void {
                        Notification::make()
                            ->title('Now, now, don\'t be cheeky, leave some records for others to play with!')
                            ->warning()
                            ->send();
                    }),

            ]);
    }
}