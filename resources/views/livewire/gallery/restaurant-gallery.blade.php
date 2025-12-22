<div>
    <div class="reveal-on-scroll">
        <livewire:banner.home-banner
            highlightedTitle="Gallery"
            bannerImg="{{ asset('landing-page/hero-5.png') }}"
            {{-- title="Our Stunning"
            subtitle="Set within the greens of Greenside Golf Club, our Restaurant pairs prime steaks and slow-cooked ribs"
            secondButtonText="View Menu"
            secondButtonLink="/menu-list" --}}
        />
    </div>

    <div>
        <livewire:gallery.gallery-list />
    </div>
</div>
