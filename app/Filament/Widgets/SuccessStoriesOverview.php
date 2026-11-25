<?php

namespace App\Filament\Widgets;

use App\Models\SuccessStory;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;
use Illuminate\Database\Eloquent\Builder;

class SuccessStoriesOverview extends TableWidget
{
    protected static ?int $sort = 1;

    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                fn (): Builder => SuccessStory::query()
                    ->latest('created_at')
            )

            ->paginated(false)

            ->extraAttributes([
                'class' => 'ign-success-stories-dashboard-cards-scope',
            ])

            ->contentGrid([
                'sm' => 1,
                'md' => 2,
                'xl' => 3,
            ])

            ->columns([
                Stack::make([

                    TextColumn::make('student_name')
                        ->label('')
                        ->weight('bold')
                        ->color('primary')
                        ->alignCenter()
                        ->extraAttributes([
                            'class' => 'ign-success-stories-dashboard-card-name',
                        ]),

                    TextColumn::make('course_name')
                        ->label('')
                        ->alignCenter()
                        ->color('gray')
                        ->extraAttributes([
                            'class' => 'ign-success-stories-dashboard-card-course',
                        ]),

                    TextColumn::make('college_name')
                        ->label('')
                        ->alignCenter()
                        ->color('gray')
                        ->limit(35)
                        ->wrap()
                        ->extraAttributes([
                            'class' => 'ign-success-stories-dashboard-card-college',
                        ]),

                    TextColumn::make('country')
                        ->label('')
                        ->alignCenter()
                        ->color('gray')
                        ->extraAttributes([
                            'class' => 'ign-success-stories-dashboard-card-country',
                        ]),

                    TextColumn::make('rating')
                        ->label('')
                        ->alignCenter()
                        ->formatStateUsing(
                            fn ($state) => '★ ' . number_format((float) $state, 1)
                        )
                        ->color('warning')
                        ->weight('bold')
                        ->extraAttributes([
                            'class' => 'ign-success-stories-dashboard-card-rating',
                        ]),

                ])
                    ->extraAttributes([
                        'class' => 'ign-success-stories-dashboard-card-body',
                    ]),
            ])

            ->recordActions([
                EditAction::make()
                    ->label('Edit')
                    ->color('primary'),

                DeleteAction::make()
                    ->label('Delete')
                    ->color('danger'),
            ])

            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}