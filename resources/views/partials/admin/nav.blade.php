<nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
    <a class="navbar-brand me-lg-5" wire:navigate href="{{ route('admin.index') }}">
        <img class="navbar-brand-dark" src="{{ asset('assets/admin/image/brand/light.svg') }}" alt="Volt logo" />
        <img class="navbar-brand-light" src="{{ asset('assets/admin/image/brand/dark.svg') }}" alt="Volt logo" />
    </a>
    <div class="d-flex align-items-center">
        <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
