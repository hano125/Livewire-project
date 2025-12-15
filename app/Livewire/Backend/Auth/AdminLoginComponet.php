<?php

namespace App\Livewire\Backend\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class AdminLoginComponet extends Component
{
    public $email;
    public $password;
    public $remember;

    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required|min:6',
            "remember" => 'nullable|boolean',
        ];
    }

    public function submit()
    {
        $this->validate();


        if (!Auth::guard('admin')->attempt($this->only('email', 'password'), $this->remember)) {

            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);
        }
        return to_route("admin.dashboard");
    }
    public function render()
    {
        return view('backend.auth.admin-login-componet');
    }
}
