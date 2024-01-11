<?php

namespace App\Livewire\Admin\User;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class UserCreate extends Component
{
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $confirm_password = '';

    public function rules(): array
    {
        return [
            'name' => 'required|min:5|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:7|max:255|same:confirm_password',
            'confirm_password' => 'required|min:7|max:255',
        ];
    }

    public function store(): mixed
    {
        $this->validate();
        User::create($this->only(['name', 'email', 'password']));
        return $this->redirect(route('admin.user.index'));
    }

    public function render(): View
    {
        return view('livewire.admin.user.create');
    }
}
