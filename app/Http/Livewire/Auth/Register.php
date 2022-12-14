<?php
/**
 * @package App\Http\Livewire\Auth
 * @author Claude Simo <jeanclaude.simo@abus-kransysteme.de>
 * @copyright ABUS Kransysteme GmbH
 * @license proprietary
 */

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Closure;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Livewire\Component;
use Livewire\TemporaryUploadedFile;
use function Livewire\str;

class Register extends Component implements HasForms
{
    use InteractsWithForms;

    public User $user;
    public null|string $firstname = '';
    public null|string $lastname = '';
    public null|string $email = '';
    public null|string $phone = '';
    public null|string $password = '';
    public null|string $password_confirmation = '';

    public function mount(User $user): void
    {
        $this->user = $user;
        $this->password_confirmation = '';

        $this->form->fill([
            'firstname' => $this->user->firstname,
            'name' => $this->user->name,
            'email' => $this->user->email,
            'phone' => $this->user->phone,
            'password' => $this->user->password,
        ]);
    }

    protected function getFormModel(): User
    {
        return $this->user;
    }

    protected function getFormSchema(): array
    {
        return [
            Grid::make([
                'sm' => 1,
                'xs' => 1,
            ])
                ->columns(2)
                ->schema([
                    TextInput::make('firstname')->required(),
                    TextInput::make('lastname')->required(),
                    TextInput::make('email')->required(),
                    TextInput::make('phone')->required(),
                    TextInput::make('password')
                        ->password()
                        ->required(),
                    TextInput::make('password_confirmation')
                        ->password()
                ])
        ];
    }

    /**
     * @throws ValidationException
     */
    public function submit(): void
    {
        $this->validate([
            'password' => 'required|confirmed'
        ]);

        $data = $this->form->validate();

       User::create([
           'firstname' => $data['firstname'],
           'lastname' => $data['lastname'],
           'email' => $data['email'],
           'phone' => $data['phone'],
           'password' => Hash::make($data['password']),
       ]);

        session()->flash('message', 'Your register successfully Go to the login page.');

        $this->redirect('/login');
    }

    public function render(): Factory|View|Application
    {
        return view('components.auth.register');
    }

}
