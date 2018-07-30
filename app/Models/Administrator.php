<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 30 Jul 2018 04:23:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Administrator
 * 
 * @property int $id
 * @property string $user_name
 * @property string $user_password
 *
 * @package App\Models
 */
class Administrator extends Eloquent
{
	public $timestamps = false;

	protected $hidden = [
		'user_password'
	];

	protected $fillable = [
		'user_name',
		'user_password'
	];
}
