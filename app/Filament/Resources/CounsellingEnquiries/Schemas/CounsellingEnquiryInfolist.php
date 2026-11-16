<?php

namespace App\Filament\Resources\CounsellingEnquiries\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class CounsellingEnquiryInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name')
                    ->label('Student Name'),

                TextEntry::make('email')
                    ->label('Email Address')
                    ->copyable(),

                TextEntry::make('mobile')
                    ->label('Mobile Number')
                    ->copyable(),

                TextEntry::make('program')
                    ->label('Interested Program')
                    ->placeholder('Not specified'),

                TextEntry::make('source')
                    ->label('Enquiry Source')
                    ->badge(),

                TextEntry::make('created_at')
                    ->label('Submitted On')
                    ->dateTime('d M Y, h:i A'),

                TextEntry::make('updated_at')
                    ->label('Last Updated')
                    ->dateTime('d M Y, h:i A'),
            ]);
    }
}