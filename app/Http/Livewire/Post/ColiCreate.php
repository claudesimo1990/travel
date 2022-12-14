<?php
/**
 * @package App\Http\Livewire\Post
 * @author Claude Simo <jeanclaude.simo@abus-kransysteme.de>
 * @copyright ABUS Kransysteme GmbH
 * @license proprietary
 */

namespace App\Http\Livewire\Post;

use App\Models\Post;
use App\Models\TransportedObject;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Livewire\Component;

class ColiCreate extends Component implements HasForms
{
    use InteractsWithForms;

    public Post $post;

    public function mount(Post $post): void
    {
        $this->post = $post;

        $this->form->fill([
            'date_from' => $this->post->date_from,
            'date_to' => $this->post->date_to,
            'user_id' => 1 , //Auth()->user()
            'ref' => rand(1000, 50000) , //Auth()->user()
        ]);
    }

    protected function getFormSchema(): array
    {
        return [
            Grid::make([
                'sm' => 2,
                'xs' => 1,
            ])
                ->columns(2)
                ->schema([
                    TextInput::make('ref')->hidden(uniqid()),
                    TextInput::make('from')->required(),
                    TextInput::make('to')->required(),
                    DateTimePicker::make('date_from')
                        ->minDate(now())
                        ->label('Depart le')
                        ->required(),
                    DateTimePicker::make('date_to')
                        ->minDate(now())
                        ->label('Arrivee le')
                        ->required(),
                    TextInput::make('kilo')
                        ->numeric(1)
                        ->label('Kilos disponibles')
                        ->required(),
                    TextInput::make('price')
                        ->numeric()
                        ->label('Prix du kilo')
                        ->required(),
                    TextInput::make('company')
                        ->label('Company')
                        ->required(),
                    Select::make('transported Objects')
                        ->multiple()
                        ->options(TransportedObject::all()->pluck('name', 'id'))
                        ->preload(),
                    FileUpload::make('ticket')
                        ->uploadProgressIndicatorPosition('left'),
                    TextInput::make('company')
                        ->label('Company')
                        ->required(),
                    Textarea::make('content')
                        ->label('Message')
                        ->cols(12)
                        ->required(),
                ])
        ];
    }

    public function submit(): void
    {
        // ...
    }

    protected function getFormModel(): Post
    {
        return $this->post;
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
