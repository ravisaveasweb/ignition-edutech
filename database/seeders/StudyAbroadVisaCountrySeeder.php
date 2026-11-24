<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StudyAbroadVisaCountry;

class StudyAbroadVisaCountrySeeder extends Seeder
{
    public function run(): void
    {
        $countries = [
            ['country' => 'Argentina', 'country_code' => 'AR', 'flag' => '🇦🇷'],
            ['country' => 'Armenia', 'country_code' => 'AM', 'flag' => '🇦🇲'],
            ['country' => 'Australia', 'country_code' => 'AU', 'flag' => '🇦🇺'],
            ['country' => 'Austria', 'country_code' => 'AT', 'flag' => '🇦🇹'],
            ['country' => 'Azerbaijan', 'country_code' => 'AZ', 'flag' => '🇦🇿'],
            ['country' => 'Bahrain', 'country_code' => 'BH', 'flag' => '🇧🇭'],
            ['country' => 'Bangladesh', 'country_code' => 'BD', 'flag' => '🇧🇩'],
            ['country' => 'Belarus', 'country_code' => 'BY', 'flag' => '🇧🇾'],
            ['country' => 'Belgium', 'country_code' => 'BE', 'flag' => '🇧🇪'],
            ['country' => 'Bosnia and Herzegovina', 'country_code' => 'BA', 'flag' => '🇧🇦'],
            ['country' => 'Brazil', 'country_code' => 'BR', 'flag' => '🇧🇷'],
            ['country' => 'Brunei Darussalam', 'country_code' => 'BN', 'flag' => '🇧🇳'],
            ['country' => 'Bulgaria', 'country_code' => 'BG', 'flag' => '🇧🇬'],
            ['country' => 'Canada', 'country_code' => 'CA', 'flag' => '🇨🇦'],
            ['country' => 'Chile', 'country_code' => 'CL', 'flag' => '🇨🇱'],
            ['country' => 'China (Mainland)', 'country_code' => 'CN', 'flag' => '🇨🇳'],
            ['country' => 'Colombia', 'country_code' => 'CO', 'flag' => '🇨🇴'],
            ['country' => 'Costa Rica', 'country_code' => 'CR', 'flag' => '🇨🇷'],
            ['country' => 'Croatia', 'country_code' => 'HR', 'flag' => '🇭🇷'],
            ['country' => 'Cuba', 'country_code' => 'CU', 'flag' => '🇨🇺'],
            ['country' => 'Cyprus', 'country_code' => 'CY', 'flag' => '🇨🇾'],
            ['country' => 'Czechia', 'country_code' => 'CZ', 'flag' => '🇨🇿'],
            ['country' => 'Denmark', 'country_code' => 'DK', 'flag' => '🇩🇰'],
            ['country' => 'Dominican Republic', 'country_code' => 'DO', 'flag' => '🇩🇴'],
            ['country' => 'Ecuador', 'country_code' => 'EC', 'flag' => '🇪🇨'],
            ['country' => 'Egypt', 'country_code' => 'EG', 'flag' => '🇪🇬'],
            ['country' => 'Estonia', 'country_code' => 'EE', 'flag' => '🇪🇪'],
            ['country' => 'Ethiopia', 'country_code' => 'ET', 'flag' => '🇪🇹'],
            ['country' => 'Finland', 'country_code' => 'FI', 'flag' => '🇫🇮'],
            ['country' => 'France', 'country_code' => 'FR', 'flag' => '🇫🇷'],
            ['country' => 'Georgia', 'country_code' => 'GE', 'flag' => '🇬🇪'],
            ['country' => 'Germany', 'country_code' => 'DE', 'flag' => '🇩🇪'],
            ['country' => 'Ghana', 'country_code' => 'GH', 'flag' => '🇬🇭'],
            ['country' => 'Greece', 'country_code' => 'GR', 'flag' => '🇬🇷'],
            ['country' => 'Guatemala', 'country_code' => 'GT', 'flag' => '🇬🇹'],
            ['country' => 'Honduras', 'country_code' => 'HN', 'flag' => '🇭🇳'],
            ['country' => 'Hong Kong SAR, China', 'country_code' => 'HK', 'flag' => '🇭🇰'],
            ['country' => 'Hungary', 'country_code' => 'HU', 'flag' => '🇭🇺'],
            ['country' => 'Iceland', 'country_code' => 'IS', 'flag' => '🇮🇸'],
            ['country' => 'India', 'country_code' => 'IN', 'flag' => '🇮🇳'],
            ['country' => 'Indonesia', 'country_code' => 'ID', 'flag' => '🇮🇩'],
            ['country' => 'Iran (Islamic Republic of)', 'country_code' => 'IR', 'flag' => '🇮🇷'],
            ['country' => 'Iraq', 'country_code' => 'IQ', 'flag' => '🇮🇶'],
            ['country' => 'Ireland', 'country_code' => 'IE', 'flag' => '🇮🇪'],
            ['country' => 'Israel', 'country_code' => 'IL', 'flag' => '🇮🇱'],
            ['country' => 'Italy', 'country_code' => 'IT', 'flag' => '🇮🇹'],
            ['country' => 'Japan', 'country_code' => 'JP', 'flag' => '🇯🇵'],
            ['country' => 'Jordan', 'country_code' => 'JO', 'flag' => '🇯🇴'],
            ['country' => 'Kazakhstan', 'country_code' => 'KZ', 'flag' => '🇰🇿'],
            ['country' => 'Kenya', 'country_code' => 'KE', 'flag' => '🇰🇪'],
            ['country' => 'Kuwait', 'country_code' => 'KW', 'flag' => '🇰🇼'],
            ['country' => 'Kyrgyzstan', 'country_code' => 'KG', 'flag' => '🇰🇬'],
            ['country' => 'Latvia', 'country_code' => 'LV', 'flag' => '🇱🇻'],
            ['country' => 'Lebanon', 'country_code' => 'LB', 'flag' => '🇱🇧'],
            ['country' => 'Libya', 'country_code' => 'LY', 'flag' => '🇱🇾'],
            ['country' => 'Lithuania', 'country_code' => 'LT', 'flag' => '🇱🇹'],
            ['country' => 'Luxembourg', 'country_code' => 'LU', 'flag' => '🇱🇺'],
            ['country' => 'Macao SAR, China', 'country_code' => 'MO', 'flag' => '🇲🇴'],
            ['country' => 'Malaysia', 'country_code' => 'MY', 'flag' => '🇲🇾'],
            ['country' => 'Malta', 'country_code' => 'MT', 'flag' => '🇲🇹'],
            ['country' => 'Mexico', 'country_code' => 'MX', 'flag' => '🇲🇽'],
            ['country' => 'Morocco', 'country_code' => 'MA', 'flag' => '🇲🇦'],
            ['country' => 'Netherlands', 'country_code' => 'NL', 'flag' => '🇳🇱'],
            ['country' => 'New Zealand', 'country_code' => 'NZ', 'flag' => '🇳🇿'],
            ['country' => 'Nigeria', 'country_code' => 'NG', 'flag' => '🇳🇬'],
            ['country' => 'Northern Cyprus', 'country_code' => 'NC', 'flag' => '🇨🇾'],
            ['country' => 'Norway', 'country_code' => 'NO', 'flag' => '🇳🇴'],
            ['country' => 'Oman', 'country_code' => 'OM', 'flag' => '🇴🇲'],
            ['country' => 'Pakistan', 'country_code' => 'PK', 'flag' => '🇵🇰'],
            ['country' => 'Palestine', 'country_code' => 'PS', 'flag' => '🇵🇸'],
            ['country' => 'Panama', 'country_code' => 'PA', 'flag' => '🇵🇦'],
            ['country' => 'Paraguay', 'country_code' => 'PY', 'flag' => '🇵🇾'],
            ['country' => 'Peru', 'country_code' => 'PE', 'flag' => '🇵🇪'],
            ['country' => 'Philippines', 'country_code' => 'PH', 'flag' => '🇵🇭'],
            ['country' => 'Poland', 'country_code' => 'PL', 'flag' => '🇵🇱'],
            ['country' => 'Portugal', 'country_code' => 'PT', 'flag' => '🇵🇹'],
            ['country' => 'Puerto Rico', 'country_code' => 'PR', 'flag' => '🇵🇷'],
            ['country' => 'Qatar', 'country_code' => 'QA', 'flag' => '🇶🇦'],
            ['country' => 'Republic of Korea', 'country_code' => 'KR', 'flag' => '🇰🇷'],
            ['country' => 'Romania', 'country_code' => 'RO', 'flag' => '🇷🇴'],
            ['country' => 'Russian Federation', 'country_code' => 'RU', 'flag' => '🇷🇺'],
            ['country' => 'Saudi Arabia', 'country_code' => 'SA', 'flag' => '🇸🇦'],
            ['country' => 'Serbia', 'country_code' => 'RS', 'flag' => '🇷🇸'],
            ['country' => 'Singapore', 'country_code' => 'SG', 'flag' => '🇸🇬'],
            ['country' => 'Slovakia', 'country_code' => 'SK', 'flag' => '🇸🇰'],
            ['country' => 'Slovenia', 'country_code' => 'SI', 'flag' => '🇸🇮'],
            ['country' => 'South Africa', 'country_code' => 'ZA', 'flag' => '🇿🇦'],
            ['country' => 'Spain', 'country_code' => 'ES', 'flag' => '🇪🇸'],
            ['country' => 'Sri Lanka', 'country_code' => 'LK', 'flag' => '🇱🇰'],
            ['country' => 'Sudan', 'country_code' => 'SD', 'flag' => '🇸🇩'],
            ['country' => 'Sweden', 'country_code' => 'SE', 'flag' => '🇸🇪'],
            ['country' => 'Switzerland', 'country_code' => 'CH', 'flag' => '🇨🇭'],
            ['country' => 'Syrian Arab Republic', 'country_code' => 'SY', 'flag' => '🇸🇾'],
            ['country' => 'Taiwan', 'country_code' => 'TW', 'flag' => '🇹🇼'],
            ['country' => 'Thailand', 'country_code' => 'TH', 'flag' => '🇹🇭'],
            ['country' => 'Tunisia', 'country_code' => 'TN', 'flag' => '🇹🇳'],
            ['country' => 'Türkiye', 'country_code' => 'TR', 'flag' => '🇹🇷'],
            ['country' => 'Uganda', 'country_code' => 'UG', 'flag' => '🇺🇬'],
            ['country' => 'Ukraine', 'country_code' => 'UA', 'flag' => '🇺🇦'],
            ['country' => 'United Arab Emirates', 'country_code' => 'AE', 'flag' => '🇦🇪'],
            ['country' => 'United Kingdom', 'country_code' => 'GB', 'flag' => '🇬🇧'],
            ['country' => 'United States of America', 'country_code' => 'US', 'flag' => '🇺🇸'],
            ['country' => 'Uruguay', 'country_code' => 'UY', 'flag' => '🇺🇾'],
            ['country' => 'Uzbekistan', 'country_code' => 'UZ', 'flag' => '🇺🇿'],
            ['country' => 'Venezuela (Bolivarian Republic of)', 'country_code' => 'VE', 'flag' => '🇻🇪'],
            ['country' => 'Viet Nam', 'country_code' => 'VN', 'flag' => '🇻🇳'],
        ];

        foreach ($countries as $country) {
            $country['visa_name'] = $this->getVisaName($country['country']);
            $country['short_description'] = 'Student visa guidance for international students planning to study in ' . $country['country'] . '.';
            $country['status'] = 1;

            StudyAbroadVisaCountry::updateOrCreate(
                ['country_code' => $country['country_code']],
                $country
            );
        }
    }

    private function getVisaName(string $country): string
    {
        return match ($country) {
            'United States of America' => 'F-1 Student Visa',
            'United Kingdom' => 'Student Visa',
            'Canada' => 'Study Permit',
            'Australia' => 'Student Visa Subclass 500',
            'Germany' => 'Student National Visa',
            'Ireland' => 'Student Visa',
            'New Zealand' => 'Student Visa',
            'France' => 'Long-Stay Student Visa',
            default => 'Student Visa',
        };
    }
}