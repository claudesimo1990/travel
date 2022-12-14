<?php
/**
 * @package App\Filament\Tables\Actions\Post
 * @author Claude Simo <jeanclaude.simo@abus-kransysteme.de>
 * @copyright ABUS Kransysteme GmbH
 * @license proprietary
 */

namespace App\Filament\Tables\Actions\Post;

use Closure;
use Filament\Forms\ComponentContainer;
use Filament\Support\Actions\Concerns\CanCustomizeProcess;
use Filament\Tables\Actions\Action;
use Illuminate\Database\Eloquent\Model;

class PublishAction extends Action
{
    use CanCustomizeProcess;

    protected ?Closure $mutateRecordDataUsing = null;

    public static function getDefaultName(): ?string
    {
        return 'publish';
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->label(__('custom.table.actions.publish.label'));

        $this->successNotificationTitle(__('custom.table.actions.publish.messages.saved'));

        $this->icon('heroicon-s-pencil');

        $this->mountUsing(function (ComponentContainer $form, Model $record): void {
            $data = $record->attributesToArray();

            if ($this->mutateRecordDataUsing) {
                $data = $this->evaluate($this->mutateRecordDataUsing, ['data' => $data]);
            }

            $form->fill($data);
        });

        $this->action(function (): void {
            $this->process(function (array $data, Model $record) {
                $record->update([
                    'status' => 'ACCEPTED'
                ]);
            });

            $this->success();
        });
    }

    public function mutateRecordDataUsing(?Closure $callback): static
    {
        $this->mutateRecordDataUsing = $callback;

        return $this;
    }

}
