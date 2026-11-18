<?php

namespace App\Filament\Resources\CounsellingEnquiries\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CounsellingEnquiryInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([


            Section::make('Student Profile')
                ->description('Overview of this counselling enquiry.')
                ->icon('heroicon-o-user-circle')
                ->extraAttributes([
                    'class' => 'ign-counselling-profile-section',
                ])
                ->schema([

                    Grid::make(12)
                        ->schema([

                            TextEntry::make('name')
                                ->label('Student Name')
                                ->icon('heroicon-m-user')
                                ->weight('bold')
                                ->size('lg')
                                ->color('primary')
                                ->extraAttributes([
                                    'class' => 'ign-counselling-primary-field',
                                ])
                                ->columnSpan([
                                    'default' => 12,
                                    'md' => 6,
                                ]),

                            TextEntry::make('enquiry_type')
                                ->label('Enquiry Type')
                                ->icon('heroicon-m-chat-bubble-left-right')
                                ->badge()
                                ->color(fn (?string $state): string => self::getEnquiryTypeColor($state))
                                ->columnSpan([
                                    'default' => 6,
                                    'md' => 3,
                                ]),

                            TextEntry::make('source')
                                ->label('Source')
                                ->icon('heroicon-m-globe-alt')
                                ->badge()
                                ->color('gray')
                                ->columnSpan([
                                    'default' => 6,
                                    'md' => 3,
                                ]),

                            TextEntry::make('program')
                                ->label('Interested Program')
                                ->icon('heroicon-m-academic-cap')
                                ->weight('bold')
                                ->color('primary')
                                ->placeholder('Not specified')
                                ->extraAttributes([
                                    'class' => 'ign-counselling-program-field',
                                ])
                                ->columnSpanFull(),

                        ]),

                ])
                ->columnSpanFull(),


            Section::make('Contact Details')
                ->description('Student contact information.')
                ->icon('heroicon-o-identification')
                ->extraAttributes([
                    'class' => 'ign-counselling-contact-section',
                ])
                ->schema([

                    Grid::make(2)
                        ->schema([

                            TextEntry::make('email')
                                ->label('Email Address')
                                ->icon('heroicon-m-envelope')
                                ->color('info')
                                ->copyable()
                                ->copyMessage('Email copied')
                                ->copyMessageDuration(1500)
                                ->placeholder('Not provided')
                                ->extraAttributes([
                                    'class' => 'ign-counselling-email-field',
                                ]),

                            TextEntry::make('mobile')
                                ->label('Mobile Number')
                                ->icon('heroicon-m-phone')
                                ->color('success')
                                ->copyable()
                                ->copyMessage('Mobile number copied')
                                ->copyMessageDuration(1500)
                                ->placeholder('Not provided')
                                ->extraAttributes([
                                    'class' => 'ign-counselling-mobile-field',
                                ]),

                        ]),

                ])
                ->columnSpanFull(),


            Section::make('Enquiry Details')
                ->description('Information submitted by the student.')
                ->icon('heroicon-o-chat-bubble-left-right')
                ->extraAttributes([
                    'class' => 'ign-counselling-enquiry-section',
                ])
                ->schema([

                    Grid::make(2)
                        ->schema([

                            TextEntry::make('program')
                                ->label('Interested Program')
                                ->icon('heroicon-m-academic-cap')
                                ->color('primary')
                                ->weight('semibold')
                                ->placeholder('Not specified')
                                ->extraAttributes([
                                    'class' => 'ign-counselling-program-field',
                                ]),

                            TextEntry::make('enquiry_type')
                                ->label('Enquiry Type')
                                ->icon('heroicon-m-tag')
                                ->badge()
                                ->color(fn (?string $state): string => self::getEnquiryTypeColor($state)),

                            TextEntry::make('source')
                                ->label('Enquiry Source')
                                ->icon('heroicon-m-funnel')
                                ->badge()
                                ->color('gray')
                                ->placeholder('Not specified'),

                            TextEntry::make('created_at')
                                ->label('Submitted On')
                                ->icon('heroicon-m-calendar-days')
                                ->color('warning')
                                ->dateTime('d M Y, h:i A'),

                        ]),

                ])
                ->columnSpanFull(),


            Section::make('Record Activity')
                ->description('Enquiry creation and update information.')
                ->icon('heroicon-o-clock')
                ->extraAttributes([
                    'class' => 'ign-counselling-activity-section',
                ])
                ->schema([

                    Grid::make(2)
                        ->schema([

                            TextEntry::make('created_at')
                                ->label('Created On')
                                ->icon('heroicon-m-calendar-days')
                                ->color('success')
                                ->dateTime('d M Y, h:i A'),

                            TextEntry::make('updated_at')
                                ->label('Last Updated')
                                ->icon('heroicon-m-arrow-path')
                                ->color('info')
                                ->dateTime('d M Y, h:i A'),

                        ]),

                ])
                ->columnSpanFull(),

        ]);
    }


    private static function getEnquiryTypeColor(?string $state): string
    {
        return match ($state) {
            'Counselling' => 'warning',
            'Study India' => 'success',
            'Study Abroad' => 'info',
            default => 'gray',
        };
    }
}