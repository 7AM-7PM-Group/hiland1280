<?php

use App\Livewire\Menu\RestaurantMenu;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;

Route::get('/sitemap.xml', function () {
    return response()->file(
        public_path('sitemap.xml'),
        ['Content-Type' => 'application/xml']
    );
});


Volt::route('/', 'landingpage.landing-page')->name('landingpage.landing-page');
Volt::route('menu', 'menu.restaurant-menu')->name('menu.restaurant-menu');
Volt::route('reservation', 'reservation.restaurant-reservation')->name('reservation.restaurant-reservation');
Volt::route('gallery', 'gallery.restaurant-gallery')->name('gallery.restaurant-gallery');

Route::get('menu-list', function () {
    return redirect()->route('menu.restaurant-menu', [], 301);
});

Route::get('reservation-form', function () {
    return redirect()->route('reservation.restaurant-reservation', [], 301);
});

Route::get('gallery-list', function () {
    return redirect()->route('gallery.restaurant-gallery', [], 301);
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Volt::route('search', 'search')->name('search');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('reservations', 'reservation-index')->name('reservations.index');

    Volt::route('settings/profile', 'settings.profile')->name('profile.edit');
    Volt::route('settings/password', 'settings.password')->name('user-password.edit');
    Volt::route('settings/appearance', 'settings.appearance')->name('appearance.edit');

    Volt::route('settings/two-factor', 'settings.two-factor')
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                    && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                [],
            ),
        )
        ->name('two-factor.show');
})
;
Route::fallback(function () {
    return redirect()->route('landingpage.landing-page', [], 301);
});
