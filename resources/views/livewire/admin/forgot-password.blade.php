<section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center form-bg-image">
            <p class="text-center">
                <a href="{{ route('admin.login') }}" wire:navigate
                    class="d-flex align-items-center justify-content-center">
                    <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    {{ __('admin.back_to_home') }}
                </a>
            </p>
            <div class="col-12 d-flex align-items-center justify-content-center">
                <div class="signin-inner my-3 my-lg-0 bg-white shadow border-0 rounded p-4 p-lg-5 w-100 fmxw-500">
                    <h1 class="h3 text-center">{{ __('admin.forgot_password.title') }}</h1>
                    <p class="mb-4">{{ __('admin.forgot_password.desc') }}</p>
                    <form wire:submit="recoverPassword" role="form" method="POST">
                        <div class="mb-4">
                            <label for="email">{{ __('admin.forgot_password.email') }}</label>
                            <div class="input-group">
                                <input type="email" wire:model="email"
                                    class="form-control @error('email') is-invalid @enderror" id="email"
                                        autocomplete="off"
                                    >
                                @error('email')
                                    <span class="invalid-feedback"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                        @if ($mailSentAlert)
                            <div class="alert alert-success" role="alert">
                                <small>An email containing the password reset link has been sent.</small>
                            </div>
                        @endif
                        <div class="d-grid">
                            <button type="submit"
                                class="btn btn-gray-800">{{ __('admin.forgot_password.button') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
