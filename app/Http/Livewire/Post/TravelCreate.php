<?php

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
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Component;

class TravelCreate extends Component implements HasForms
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
                    Select::make('objects')
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

    public function submit(): Redirector|Application|RedirectResponse
    {
        $data = $this->form->validate();

        $this->post->create([
            'user_id' => Auth::id(),
            'type' => 'TRAVEL',
            'name' => null,
            'from' => $data['from'],
            'to' => $data['to'],
            'ref' => rand(1000000, 20000000),
            'date_from' =>  $data['date_from'],
            'date_to' => $data['date_to'],
            'content' => $data['content'],
            'kilo' => $data['kilo'],
            'price' => $data['price'],
            'quantity' => 1,
            'objects' => json_encode($data['objects']),
            'slug' => Str::slug($data['from']. ' ' . $data['to']. ' ' . $data['date_from']. ' ' . $data['date_to']),
            'company' => $data['date_from'],
            'status' => 'PROGRESS',
        ]);

        return redirect('/posts');
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
