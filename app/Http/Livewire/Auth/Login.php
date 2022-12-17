<?php

/**
 * @package App\Http\Livewire\Auth
 * @author Claude Simo <claudesimo1990@gmail.com>
 * @copyright COLISSEND GMBH
 * @license proprietary
 */

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class Login extends Component implements HasForms
{

    use InteractsWithForms;

    public User $user;
    public null|string $email = '';
    public null|string $password = '';

    public function mount(User $user): void
    {
        $this->user = $user;

        $this->form->fill([
            'email' => $this->user->email,
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
                ->columns(1)
                ->schema([
                    TextInput::make('email')->required(),
                    TextInput::make('password')->password()->required(),
                ])
        ];
    }

    /**
     * @throws ValidationException
     */
    public function submit(): void
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required|password'
        ]);

        $data = $this->form->validate();

        session()->flash('message', 'Your logged successfully Go to the login page.');
    }

    public function render(): string
    {
        return <<<'blade'
            <div>
                <form wire:submit.prevent="submit">

                    {{ $this->form }}

                    <button type="submit" class="colissend-btn w-full" data-mdb-ripple="true" data-mdb-ripple-color="light">
                        @lang('login.buttons.submit.label')
                    </button>

                    <div class="flex items-center my-4 before:flex-1 before:border-t before:border-gray-300 before:mt-0.5 after:flex-1 after:border-t after:border-gray-300 after:mt-0.5">
                    <p class="text-center font-semibold mx-4 mb-0">OR</p>
                    </div>

                    <a class="colissend-btn w-full mb-3" href="#!" role="button" data-mdb-ripple="true" data-mdb-ripple-color="light">
                        <!-- Facebook -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="w-3.5 h-3.5 mr-2">
                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/>
                        </svg>
                        @lang('login.social.facebook')
                    </a>
                    <a class="colissend-btn w-full" href="#!" role="button" data-mdb-ripple="true" data-mdb-ripple-color="light">
                        <!-- Twitter -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3.5 h-3.5 mr-2">
                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/>
                        </svg>
                        @lang('login.social.google')
                    </a>
                </form>
            </div>
        blade;
    }

}
