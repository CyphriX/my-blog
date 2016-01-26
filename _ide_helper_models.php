<?php
/**
 * An helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace BlogIt{
/**
 * BlogIt\Post
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $title
 * @property string $body
 * @property string $slug
 * @property string $deleted_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
	class Post {}
}

namespace BlogIt{
/**
 * BlogIt\Comment
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $post_id
 * @property string $body
 * @property string $deleted_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
	class Comment {}
}

namespace BlogIt{
/**
 * BlogIt\Role
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $roleName
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
	class Role {}
}

namespace BlogIt{
/**
 * BlogIt\User
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $display_name
 * @property string $email
 * @property string $password
 * @property string $password_reset_token
 * @property string $deleted_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
	class User {}
}

