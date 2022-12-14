<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Airport
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Airport newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Airport newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Airport query()
 */
	class IdeHelperAirport {}
}

namespace App\Models{
/**
 * App\Models\Post
 *
 * @property string $id
 * @property string|null $name
 * @property int $ref
 * @property string $type
 * @property string $from
 * @property string $to
 * @property string $date_from
 * @property string $date_to
 * @property string|null $content
 * @property int $kilo
 * @property int $price
 * @property int|null $quantity
 * @property string $slug
 * @property string|null $company
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\TransportedObject[] $objects
 * @property string|null $payment
 * @property string $status
 * @property string $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read int|null $objects_count
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\PostFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post query()
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereCompany($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereDateFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereDateTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereKilo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereObjects($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post wherePayment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereRef($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereUserId($value)
 */
	class IdeHelperPost {}
}

namespace App\Models{
/**
 * App\Models\Profile
 *
 * @property string $id
 * @property string|null $full_name
 * @property string|null $avatar
 * @property string|null $city
 * @property string|null $country
 * @property string|null $street
 * @property string|null $phone
 * @property string|null $birthday
 * @property string|null $about
 * @property string|null $facebook
 * @property string|null $instagram
 * @property string|null $google
 * @property string|null $linkedin
 * @property string $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\ProfileFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile query()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereAbout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereBirthday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereGoogle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereInstagram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereLinkedin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereUserId($value)
 */
	class IdeHelperProfile {}
}

namespace App\Models{
/**
 * App\Models\TransportedObject
 *
 * @property string $id
 * @property string $name
 * @property string $bg_color
 * @property string $text_color
 * @property int $count
 * @property int $kilo_number
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\TransportedObjectFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|TransportedObject newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TransportedObject newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TransportedObject query()
 * @method static \Illuminate\Database\Eloquent\Builder|TransportedObject whereBgColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransportedObject whereCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransportedObject whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransportedObject whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransportedObject whereKiloNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransportedObject whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransportedObject whereTextColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TransportedObject whereUpdatedAt($value)
 */
	class IdeHelperTransportedObject {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property string $id
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string|null $phone
 * @property string|null $avatar
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string|null $confirmed_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string $name
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Post[] $posts
 * @property-read int|null $posts_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereConfirmedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFirstname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class IdeHelperUser {}
}

