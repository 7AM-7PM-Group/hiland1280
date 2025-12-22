<div>
    <div class="reveal-on-scroll">
        <livewire:banner.home-banner
            title="THE DINING"
            bannerImg="{{ asset('landing-page/hero-4.png') }}"
            highlightedTitle="MENU"
            {{-- subtitle="Set within the greens of Greenside Golf Club, our Restaurant pairs prime steaks and slow-cooked ribs"
            secondButtonText="View Menu"
            secondButtonLink="/menu-list" --}}
        />
    </div>

    <div>
        <livewire:menu.menu-list />
    </div>
</div>
