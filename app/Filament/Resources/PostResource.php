<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Filament\Tables\Actions\Post\PublishAction;
use App\Models\Post;
use Exception;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Model;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required(),
                Forms\Components\TextInput::make('user_id')->hidden(auth()->id()),
                Forms\Components\TextInput::make('referenznumber')->hidden(uniqid()),
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

    /**
     * @throws Exception
     */
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('N°'),
                Tables\Columns\TextColumn::make('from')->label('From'),
                Tables\Columns\TextColumn::make('dateFrom')->label('Date'),
                Tables\Columns\TextColumn::make('to')->label('To'),
                Tables\Columns\TextColumn::make('dateTo')->label('Date'),
                Tables\Columns\TextColumn::make('kilo')->label('Kilos available'),
                Tables\Columns\TextColumn::make('price')->label('Price'),
                Tables\Columns\TextColumn::make('status')->label('Status'),
            ])
            ->filters([
                //
            ])
            ->actions([
                PublishAction::make(),
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'view' => Pages\ViewPost::route('/{record}'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }

    public static function can(string $action, ?Model $record = null): bool
    {
        return parent::can($action, $record);
    }

    public static function canCreate(): bool
    {
        return false;
    }
}
