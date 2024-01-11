<?php

namespace App\Livewire\Admin;

use App\Notifications\ResetPassword;
use App\Repositories\AdminRepository;
use Illuminate\Notifications\Notifiable;
use Livewire\Attributes\Layout;
use Livewire\Component;

class ForgotPassword extends Component
{
    use Notifiable;

    #[Layout('layouts.admin-auth')]

    public $mailSentAlert = false;
    public $email = '';

    public function rules()
    {
        return [
            'email' => 'required|email',
        ];
    }

    protected $messages = [
        'email.exists' => 'The Email Address must be in our database.',
    ];

    public function mount()
    {
        if (auth(ADMIN)->user()) {
            return redirect()->route('admin.index');
        }
    }

    public function updatedEmail()
    {
        $this->validate(['email' => 'required|email|exists:users']);
    }

    public function routeNotificationForMail()
    {
        return $this->email;
    }

    public function recoverPassword(AdminRepository $adminRepository)
    {
        $this->validate();
        $admin = $adminRepository->findEmail($this->email);
        if ($admin) {
            $this->notify(new ResetPassword($admin->id));
            $this->mailSentAlert = true;
        } else {
            $this->mailSentAlert = false;
        }
    }

    public function render()
    {
        return view('livewire.admin.forgot-password');
    }
}
