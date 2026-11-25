<?php

namespace App\Filament\Resources\Blog\Authors\Tables;

use App\Models\Blog\Author;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Notifications\Notification;
use Filament\Support\Enums\FontWeight;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class AuthorsTable
{
    public static function configure(Table $table): Table
    {
        return $table

            ->extraAttributes([
                'class' => 'ign-blog-authors-table',
            ])

            ->columns([

                Split::make([

                    Stack::make([

                        TextColumn::make('name')
                            ->label('Author Name')
                            ->searchable()
                            ->sortable()
                            ->weight(FontWeight::SemiBold)
                            ->color('primary')
                            ->alignLeft(),

                        TextColumn::make('email')
                            ->label('Email Address')
                            ->searchable()
                            ->sortable()
                            ->color('gray')
                            ->icon('heroicon-m-envelope')
                            ->alignLeft(),

                    ])->space(2),

                    Stack::make([

                        TextColumn::make('github_handle')
                            ->label('GitHub Handle')
                            ->placeholder('Not provided')
                            ->color('gray')
                            ->icon('heroicon-m-code-bracket')
                            ->alignLeft(),

                        TextColumn::make('twitter_handle')
                            ->label('X / Twitter')
                            ->placeholder('Not provided')
                            ->color('gray')
                            ->icon('heroicon-m-at-symbol')
                            ->alignLeft(),

                    ])->space(2),

                ])->from('md'),

            ])

            ->filters([
                //
            ])

            ->recordActions([

                ActionGroup::make([

                    Action::make('view_github')
                        ->label('View GitHub')
                        ->icon('heroicon-m-code-bracket')
                        ->color('gray')
                        ->url(
                            fn(Author $record): string =>
                            "https://github.com/{$record->github_handle}"
                        )
                        ->openUrlInNewTab()
                        ->hidden(
                            fn(Author $record): bool =>
                            blank($record->github_handle)
                        ),

                    Action::make('view_twitter')
                        ->label('View X / Twitter')
                        ->icon('heroicon-m-at-symbol')
                        ->color('gray')
                        ->url(
                            fn(Author $record): string =>
                            "https://x.com/{$record->twitter_handle}"
                        )
                        ->openUrlInNewTab()
                        ->hidden(
                            fn(Author $record): bool =>
                            blank($record->twitter_handle)
                        ),

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
