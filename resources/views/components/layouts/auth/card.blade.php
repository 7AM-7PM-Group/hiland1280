<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    @include('partials.head')
</head>

<body class="min-h-screen bg-neutral-100 antialiased dark:bg-linear-to-b dark:from-neutral-950 dark:to-neutral-900">
    <div class="w-full flex min-h-svh flex-col items-center bg-center bg-no-repeat bg-cover justify-center gap-6 p-6 md:p-10"
        style="background-image: url({{ asset('assets/mlb5SK3KoR.jpg') }})">
        <div class="flex w-full max-w-md flex-col gap-6">
            <a href="{{ route('landingpage.landing-page') }}" class="flex flex-col items-center gap-2 font-medium" wire:navigate>
                <span class="flex h-9 items-center justify-center rounded-md">
                    <x-app-logo-icon class="h-9 fill-current " />
                </span>

                <span class="sr-only">{{ config('app.name', 'Laravel') }}</span>
            </a>

            <div class="flex flex-col gap-6">
                <div
                    class="rounded-xl border bg-white/20 backdrop-blur-lg dark:bg-neutral-900/70  dark:border-neutral-800 text-neutral-800 shadow-xs">
                    <div class="px-10 py-8">{{ $slot }}</div>
                </div>
            </div>
        </div>
    </div>
    @fluxScripts
</body>

</html>
