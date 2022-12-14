<?php

namespace App\Forms\Components\post;

use App\Filament\Tables\Actions\Post\PublishAction;
use App\Models\Post;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;

class PostForm extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required(),
                Forms\Components\TextInput::make('user_id')->hidden(auth()->id()),
                Forms\Components\TextInput::make('ref')->hidden(uniqid()),
                Forms\Components\Select::make('type')->required()
                    ->label('type')
                    ->options(['TRAVEL', 'PACKS'])
                    ->searchable()
                    ->required(),
                Forms\Components\TextInput::make('from')->required(),
                Forms\Components\TextInput::make('to')->required(),

                Forms\Components\DateTimePicker::make('fromDate')
                    ->label('Depart le')
                    ->required(),
                Forms\Components\DateTimePicker::make('toDate')
                    ->label('Arrivee le')
                    ->required(),
                Forms\Components\TextInput::make('kilo')
                    ->numeric(1)
                    ->label('Kilos disponibles')
                    ->required(),
                Forms\Components\TextInput::make('price')
                    ->numeric()
                    ->label('Prix du kilo')
                    ->required(),
                Forms\Components\Textarea::make('content')
                    ->label('Message')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

            ])
            ->filters([
                //
            ])
            ->actions([

            ])
            ->bulkActions([

            ]);
    }
}
