<?php

namespace App\Livewire\Admin\User;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class UserEdit extends Component
{
    public User $user;
    public string $name = '';
    public string $email = '';

    public function mount(): void
    {
        $this->email = $this->user->email;
        $this->name = $this->user->name;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|min:5|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $this->user->id,
        ];
    }

    public function update(): void
    {
        $this->validate();
        $this->user->update($this->all());
        session()->flash('success', 'User update successfully.');
    }
    public function render(): View
    {
        return view('livewire.admin.user.edit');
    }
}
