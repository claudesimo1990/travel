<?php
/**
 * @package App\Http\Livewire\Profile
 * @author Claude Simo <jeanclaude.simo@abus-kransysteme.de>
 * @copyright ABUS Kransysteme GmbH
 * @license proprietary
 */

namespace App\Http\Livewire\Profile;

use App\Models\Profile;
use App\Models\TransportedObject;
use App\Models\User;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Livewire\Component;

class ProfileCreate extends Component implements HasForms
{

    use InteractsWithForms;

    Public User $user;

    /**
     * @param User $user
     * @return void
     */
    public function mount(User $user): void
    {
        $this->user = $user;

        $this->form->fill([]);
    }

    protected function getFormSchema(): array
    {
        return [
           //
        ];
    }

    public function submit(): Redirector|Application|RedirectResponse
    {
        $data = $this->form->validate();

        $this->user->profile()->create([]);

        return redirect()->back();
    }

    protected function getFormModel(): User
    {
        return $this->user;
    }

    public function render(): string
    {
        return <<<'blade'
            <div>
                <form wire:submit.prevent="submit">

                    {{ $this->form }}

                    <button type="submit" class="colissend-btn">
                        Creer
                    </button>
                </form>
            </div>
        blade;
    }

}
