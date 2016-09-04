<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */
namespace Lizard\Models{
    /**
     * Lizard\Models\Permission.
     *
     * @property int $id
     * @property string $name
     * @property string $display_name
     * @property string $description
     * @property \Carbon\Carbon $created_at
     * @property \Carbon\Carbon $updated_at
     * @property-read \Illuminate\Database\Eloquent\Collection|\Lizard\Models\Role[] $roles
     * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Permission whereId($value)
     * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Permission whereName($value)
     * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Permission whereDisplayName($value)
     * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Permission whereDescription($value)
     * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Permission whereCreatedAt($value)
     * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Permission whereUpdatedAt($value)
     */
    class Permission extends \Eloquent
    {
    }
}

namespace Lizard\Models{
    /**
     * Lizard\Models\Role.
     *
     * @property int $id
     * @property string $name
     * @property string $display_name
     * @property string $description
     * @property \Carbon\Carbon $created_at
     * @property \Carbon\Carbon $updated_at
     * @property-read \Illuminate\Database\Eloquent\Collection|\Lizard\Models\User[] $users
     * @property-read \Illuminate\Database\Eloquent\Collection|\Lizard\Models\Permission[] $perms
     * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Role whereId($value)
     * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Role whereName($value)
     * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Role whereDisplayName($value)
     * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Role whereDescription($value)
     * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Role whereCreatedAt($value)
     * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Role whereUpdatedAt($value)
     */
    class Role extends \Eloquent
    {
    }
}

namespace Lizard\Models{
    /**
     * Lizard\Models\Thread.
     *
     * @property int $id
     * @property string $title
     * @property string $body
     * @property string $original_body
     * @property int $user_id
     * @property int $reply_count
     * @property int $last_reply_user
     * @property \Carbon\Carbon $created_at
     * @property \Carbon\Carbon $updated_at
     * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Thread whereId($value)
     * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Thread whereTitle($value)
     * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Thread whereBody($value)
     * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Thread whereOriginalBody($value)
     * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Thread whereUserId($value)
     * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Thread whereReplyCount($value)
     * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Thread whereLastReplyUser($value)
     * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Thread whereCreatedAt($value)
     * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Thread whereUpdatedAt($value)
     */
    class Thread extends \Eloquent
    {
    }
}

namespace Lizard\Models{
    /**
     * Lizard\Models\User.
     *
     * @property int $id
     * @property string $username
     * @property string $nickname
     * @property string $email
     * @property string $password
     * @property string $avatar_url
     * @property string $bio
     * @property string $signature
     * @property string $remember_token
     * @property string $deleted_at
     * @property \Carbon\Carbon $created_at
     * @property \Carbon\Carbon $updated_at
     * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
     * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $unreadNotifications
     * @property-read \Illuminate\Database\Eloquent\Collection|\Lizard\Models\Role[] $roles
     * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\User whereId($value)
     * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\User whereUsername($value)
     * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\User whereNickname($value)
     * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\User whereEmail($value)
     * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\User wherePassword($value)
     * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\User whereAvatarUrl($value)
     * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\User whereBio($value)
     * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\User whereSignature($value)
     * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\User whereRememberToken($value)
     * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\User whereDeletedAt($value)
     * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\User whereCreatedAt($value)
     * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\User whereUpdatedAt($value)
     */
    class User extends \Eloquent
    {
    }
}
