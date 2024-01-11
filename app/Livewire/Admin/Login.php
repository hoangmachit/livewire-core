<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Login extends Component
{

    #[Layout('layouts.admin-auth')]
    public $username = '';
    public $password = '';
    public $remember = false;

    public function rules()
    {
        return [
            'username' => 'required|min:5',
            'password' => 'required|min:5',
            'remember' => 'nullable|boolean',
        ];
    }

    public function login()
    {
        $this->validate();
        if (auth(ADMIN)->attempt([
            'username' => $this->username,
            'password' => $this->password,
        ], $this->remember)) {
            return redirect()->route('admin.index');
        } else {
            return $this->addError('error', __('admin.login.failed'));
        }
    }

    public function mount()
    {
        $this->fill([
            'username' => 'admin',
            'password' => 'admin#123',
            'remember' => true,
        ]);
    }

    public function render()
    {
        return view('livewire.admin.login');
    }
}
