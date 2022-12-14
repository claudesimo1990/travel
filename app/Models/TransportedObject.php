<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperTransportedObject
 */
class TransportedObject extends Model
{
    use HasFactory, Uuids;
}
