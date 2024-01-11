<div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block m-0">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block mb-0">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.index') }}" wire:navigate>
                            <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.user.index') }}" wire:navigate>Product</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="table-settings mb-4">
        <div class="row align-items-center justify-content-between">
            <div class="col col-md-6 col-lg-3 col-xl-4">
                <div class="input-group me-2 me-lg-3 fmxw-400"><span class="input-group-text"><svg class="icon icon-xs"
                            x-description="Heroicon name: solid/search" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"></path>
                        </svg> </span>
                    <input type="text" class="form-control" />
                </div>
            </div>
            <div class="col-4 col-md-2 col-xl-1 ps-md-0 text-end">
                <a class="btn btn-primary" wire:navigate href="{{ route('admin.product.index') }}">Back</a>
            </div>
        </div>
    </div>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <form wire:submit="update">
                <div class="card border-0 shadow mb-4">
                    <div class="card-header">
                        Infomation
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <div class="mb-0">
                                    <label for="name"><small>Name</small></label>
                                    <input type="text" wire:model="name"
                                        class="form-control @error('name')is-invalid @enderror" id="name" />
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <div class="mb-0">
                                    <label for="email"><small>Email</small></label>
                                    <input type="email" wire:model="email"
                                        class="form-control @error('email')is-invalid @enderror" id="email" />
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="col-md-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">
                                Update
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
