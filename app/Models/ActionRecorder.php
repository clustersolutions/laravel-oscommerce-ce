<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 30 Jul 2018 04:23:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ActionRecorder
 * 
 * @property int $id
 * @property string $module
 * @property int $user_id
 * @property string $user_name
 * @property string $identifier
 * @property string $success
 * @property \Carbon\Carbon $date_added
 *
 * @package App\Models
 */
class ActionRecorder extends Eloquent
{
	protected $table = 'action_recorder';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int'
	];

	protected $dates = [
		'date_added'
	];

	protected $fillable = [
		'module',
		'user_id',
		'user_name',
		'identifier',
		'success',
		'date_added'
	];
}
