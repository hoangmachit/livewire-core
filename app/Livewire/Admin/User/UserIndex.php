<?php

namespace App\Livewire\Admin\User;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Url;

class UserIndex extends Component
{
    use WithPagination;

    #[Url]
    public string $search = '';

    public function delete(int $userId)
    {
        $user = User::findOrFail($userId);
        $user->delete();
        $this->dispatch('$refresh');
    }

    public function render(): View
    {
        $users = User::with('status')
            ->where(function ($q) {
                $q->where('name', 'LIKE', "%{$this->search}%")
                    ->orWhere('email', 'LIKE', "%{$this->search}%");
            })
            ->orderByDesc('id')
            ->paginate(10);
        return view('livewire.admin.user.index', compact('users'));
    }
}
