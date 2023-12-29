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
                <div class="bg-white shadow border-0 rounded p-4 p-lg-5 w-100 fmxw-500">
                    <h1 class="h3 mb-4 text-center">{{ __('admin.reset_password.title') }}</h1>
                    <form wire:submit.prevent="resetPassword" method="POST">
                        <div class="mb-4">
                            <label for="email">{{ __('admin.reset_password.email') }}</label>
                            <div class="input-group">
                                <input type="email" wire:model="email"
                                    class="form-control @error('email') is-invalid @enderror" id="email" required>
                                @error('email')
                                    <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="password">{{ __('admin.reset_password.password') }}</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon2">
                                    <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                                <input type="password" wire:model.lazy="password" placeholder="******"
                                    class="form-control" id="password" required>
                                @error('password')
                                    <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="confirm_password">{{ __('admin.reset_password.confirm_password') }}</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon2">
                                    <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                                <input type="password" wire:model.lazy="passwordConfirmation" placeholder="******"
                                    class="form-control" id="confirm_password" required>
                            </div>
                        </div>
                        @if ($isPasswordChanged)
                            <div class="alert alert-success" role="alert">
                                <small>Your password has been changed.</small>
                            </div>
                        @endif
                        @if ($wrongEmail)
                            <div class="alert alert-danger" role="alert">
                                <small>Please insert the correct email address.</small>
                            </div>
                        @endif
                        <div class="d-grid">
                            <button type="submit"
                                class="btn btn-gray-800">{{ __('admin.reset_password.button') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
