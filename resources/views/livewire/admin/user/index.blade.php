<div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block m-0">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block mb-0">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent mb-0">
                    <li class="breadcrumb-item"><a href="#"><svg class="icon icon-xxs" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg></a></li>
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">User</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="table-settings mb-4">
        <div class="row align-items-center justify-content-between">
            <div class="col col-md-6 col-lg-3 col-xl-4">
                <form method="GET" role="form">
                    <div class="input-group me-2 me-lg-3 fmxw-400">
                        <span class="input-group-text"><svg class="icon icon-xs"
                                x-description="Heroicon name: solid/search" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <input type="text" value="{{ $search }}" class="form-control" name="search"
                            placeholder="Bạn muốn tìm gì">
                    </div>
                </form>
            </div>
            <div class="col-12 col-md-6 col-xl-4 ps-md-0 text-end">
                <a class="btn btn-primary" href="{{ route('admin.user.create') }}" wire:navigate>Create user</a>
            </div>
        </div>
    </div>
    <div class="card card-body border-0 shadow table-wrapper table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="border-gray-200">#</th>
                    <th class="border-gray-200">Name</th>
                    <th class="border-gray-200">Email</th>
                    <th class="border-gray-200">Created_at</th>
                    <th class="border-gray-200">Updated_at</th>
                    <th class="border-gray-200">Status</th>
                    <th class="border-gray-200">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td><a href="#" class="fw-bold">{{ $user->id }}</a></td>
                        <td><span class="fw-normal">{{ $user->name }}</span></td>
                        <td><span class="fw-normal">{{ $user->email }}</span></td>
                        <td><span class="fw-normal">{{ $user->created_at->format('Y/m/d h:s') }}</span></td>
                        <td><span class="fw-normal">{{ $user->updated_at->format('Y/m/d h:s') }}</span></td>
                        <td><span
                                class="fw-normal badge badge-{{ strtolower($user->status->name) }}">{{ $user->status->name }}</span>
                        </td>
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                        </path>
                                    </svg>
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu py-0">
                                    <a class="dropdown-item rounded-top" wire:navigate
                                        href="{{ route('admin.user.edit', $user) }}">
                                        <span class="fas fa-eye me-2"></span>
                                        Edit
                                    </a>
                                    <button class="dropdown-item text-danger rounded-bottom"
                                        wire:click="delete({{ $user->id }})"
                                        wire:confirm="Are you sure DELETE it?"><span
                                            class="fas fa-trash-alt me-2"></span>Remove</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="card-footer px-3 border-0 d-flex flex-column flex-lg-row align-items-center justify-content-center">
            {{ $users->links('partials.admin.bootstrap') }}
        </div>
    </div>
</div>
