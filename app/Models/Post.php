<?php

namespace App\Models;

use App\Traits\Uuids;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @mixin IdeHelperPost
 */
class Post extends Model
{
    use HasFactory, Uuids;

    protected $guarded = [];

    /**
     * Get the user's first name.
     *
     * @return Attribute
     */
    protected function dateFrom(): Attribute
    {
        return Attribute::get(
          get:  fn ($value) => Carbon::parse($value)->format('d.m.Y h:m')
        );
    }

    /**
     * Get the user's first name.
     *
     * @return Attribute
     */
    protected function dateTo(): Attribute
    {
        return Attribute::get(
            get:  fn ($value) => Carbon::parse($value)->format('d.m.Y h:m')
        );
    }

    public function objects(): HasMany
    {
        return $this->hasMany(TransportedObject::class);
    }

    /**
     * Get the user's first name.
     *
     * @return Attribute
     */
    protected function price(): Attribute
    {
        return Attribute::get(
            get:  fn ($value) => $value / 100
        );
    }

    /**
     * Get the user's first name.
     *
     * @return Attribute
     */
    protected function createdAt(): Attribute
    {
        return Attribute::get(
            get:  fn ($value) => Carbon::parse($value)->format('d.m.Y h:m')
        );
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
