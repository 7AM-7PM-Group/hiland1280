<?php

use App\Livewire\Menu\RestaurantMenu;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;

Volt::route('/', 'landingpage.landing-page')->name('landingpage.landing-page');
Volt::route('menu', 'menu.restaurant-menu')->name('menu.restaurant-menu');
Volt::route('reservation', 'reservation.restaurant-reservation')->name('reservation.restaurant-reservation');
Volt::route('gallery', 'gallery.restaurant-gallery')->name('gallery.restaurant-gallery');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

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
});
