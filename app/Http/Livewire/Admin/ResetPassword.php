<?php

namespace App\Http\Livewire\Admin;

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Component;

class ResetPassword extends Component
{
    #[Layout('layouts.admin-auth')]

    public $email = '';
    public $password = '';
    public $passwordConfirmation = '';
    public $isPasswordChanged = false;
    public $wrongEmail = false;
    public $urlId = '';

    public $rules = [
        'email' => 'required|email|exists:admins',
        'password' => 'required|same:passwordConfirmation|min:6',
    ];
    protected $messages = [
        'email.exists' => 'The Email Address must be in our database.',
    ];

    public function updatedEmail()
    {
        $this->validate(['email' => 'required|email|exists:admins']);
    }
    public function mount($id)
    {
        $existingUser = Admin::find($id);
        $this->urlId = intval($existingUser->id);
    }

    public function resetPassword()
    {
        $this->validate();
        $existingUser = Admin::where('email', $this->email)->first();
        if ($existingUser && $existingUser->id == $this->urlId) {
            $existingUser->update([
                'password' => Hash::make($this->password),
            ]);
            $this->isPasswordChanged = true;
            $this->wrongEmail = false;
            $this->reset(['email', 'password', 'passwordConfirmation']);
        } else {
            $this->wrongEmail = true;
        }
    }
    public function render()
    {
        return view('livewire.admin.reset-password');
    }
}
