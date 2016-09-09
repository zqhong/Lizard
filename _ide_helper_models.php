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
 * Lizard\Models\Node
 *
 * @property integer $id
 * @property integer $section_id
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Lizard\Models\Section $section
 * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Node whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Node whereSectionId($value)
 * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Node whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Node whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Node whereUpdatedAt($value)
 */
	class Node extends \Eloquent {}
}

namespace Lizard\Models{
/**
 * Lizard\Models\Permission
 *
 * @property integer $id
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
	class Permission extends \Eloquent {}
}

namespace Lizard\Models{
/**
 * Lizard\Models\Reply
 *
 * @property integer $id
 * @property integer $thread_id
 * @property integer $user_id
 * @property string $original_body
 * @property string $body
 * @property string $device_name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Lizard\Models\Thread $thread
 * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Reply whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Reply whereThreadId($value)
 * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Reply whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Reply whereOriginalBody($value)
 * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Reply whereBody($value)
 * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Reply whereDeviceName($value)
 * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Reply whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Reply whereUpdatedAt($value)
 */
	class Reply extends \Eloquent {}
}

namespace Lizard\Models{
/**
 * Lizard\Models\Role
 *
 * @property integer $id
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
	class Role extends \Eloquent {}
}

namespace Lizard\Models{
/**
 * Lizard\Models\Section
 *
 * @property integer $id
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Lizard\Models\Node[] $nodes
 * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Section whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Section whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Section whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Section whereUpdatedAt($value)
 */
	class Section extends \Eloquent {}
}

namespace Lizard\Models{
/**
 * Lizard\Models\Tag
 *
 * @property integer $id
 * @property string $name
 * @property string $thread_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Lizard\Models\Thread[] $threads
 * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Tag whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Tag whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Tag whereThreadId($value)
 * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Tag whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Tag whereUpdatedAt($value)
 */
	class Tag extends \Eloquent {}
}

namespace Lizard\Models{
/**
 * Lizard\Models\Thread
 *
 * @property integer $id
 * @property string $title
 * @property string $slug
 * @property string $body
 * @property string $original_body
 * @property integer $user_id
 * @property integer $node_id
 * @property integer $reply_count
 * @property integer $last_reply_user
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Lizard\Models\Tag[] $tags
 * @property-read \Illuminate\Database\Eloquent\Collection|\Lizard\Models\Reply[] $replies
 * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Thread whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Thread whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Thread whereSlug($value)
 * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Thread whereBody($value)
 * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Thread whereOriginalBody($value)
 * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Thread whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Thread whereNodeId($value)
 * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Thread whereReplyCount($value)
 * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Thread whereLastReplyUser($value)
 * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Thread whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Lizard\Models\Thread whereUpdatedAt($value)
 */
	class Thread extends \Eloquent {}
}

namespace Lizard\Models{
/**
 * Lizard\Models\User
 *
 * @property integer $id
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
	class User extends \Eloquent {}
}

