<form id="formAuthentication" class="mb-3" wire:submit.prevent="submit" method="POST">
    @csrf
    <div class="mb-3">
        <label for="email" class="form-label">Email or Username</label>
        <input type="text" class="form-control" id="email" wire:model="email"
            placeholder="Enter your email or username" autofocus />
        @error('email')
            <span class="text-danger small">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3 form-password-toggle">
        <div class="d-flex justify-content-between">
            <label class="form-label" for="password">Password</label>

        </div>
        <div class="input-group input-group-merge">
            <input type="password" id="password" class="form-control" wire:model="password"
                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                aria-describedby="password" />

            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
        </div>
        @error('password')
            <span class="text-danger small">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <div class="form-check">
            <input class="form-check-input" wire:model="remember" type="checkbox" id="remember-me" />
            <label class="form-check-label" for="remember-me"> Remember Me </label>
        </div>
    </div>
    <div class="mb-3">
        <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
    </div>

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    </div>
</form>
