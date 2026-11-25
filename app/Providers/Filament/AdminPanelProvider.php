<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets\AccountWidget;
use Filament\Widgets\FilamentInfoWidget;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Support\Assets\Css;


class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->favicon(asset('img/logo/favicon.png'))
            ->login()
            ->authGuard('web')
            ->colors([
                'primary' => Color::Blue,
            ])

            ->assets([
                Css::make(
                    'counselling-enquiry-view',
                    asset('css/filament/filament/counselling-enquiry-view.css')
                ),
                Css::make(
                    'counselling-enquiries-table',
                    asset('css/filament/filament/counselling-enquiries-table.css')
                ),

                Css::make(
                    'study-india-reviews-table',
                    asset('css/filament/filament/study-india-reviews-table.css')
                ),
                Css::make(
                    'ign-university-table',
                    asset('css/filament/filament/university-table.css')
                ),

                Css::make(
                    'users-table',
                    asset('css/filament/filament/users-table.css')
                ),

                Css::make(
                    'ign-blog-posts-table',
                    asset('css/filament/filament/blog-posts-table.css')
                ),

                Css::make(
                    'ign-success-stories-table',
                    asset('css/filament/filament/success-stories-table.css')
                ),

                Css::make(
                    'ign-success-story-reviews-table',
                    asset('css/filament/filament/success-story-reviews-table.css')
                ),

                Css::make(
                    'ign-scholarships-table',
                    asset('css/filament/filament/scholarships-table.css')
                ),

                Css::make(
                    'ign-blog-categories',
                    asset('css/filament/filament/ign-blog-categories.css')
                ),
                Css::make(
                    'ign-blog-authors',
                    asset('css/filament/filament/ign-blog-authors.css')
                ),

                 Css::make(
                    'ign-cities-table',
                    asset('css/filament/filament/ign-cities-table.css')
                ),

                 Css::make(
                    'ign-states-table',
                    asset('css/filament/filament/ign-states-table.css')
                ),

                
            ])



            ->navigationGroups([
                'Shop',
                'HR',
                'Projects',
                'Blog',
                'Admissions',
            ])
            ->sidebarCollapsibleOnDesktop() // Enables icon-only collapsible sidebar
            // ->databaseNotifications()
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\Filament\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\Filament\Pages')
            ->pages([
                Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\Filament\Widgets')
            ->widgets([
                AccountWidget::class,
                FilamentInfoWidget::class,

            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
