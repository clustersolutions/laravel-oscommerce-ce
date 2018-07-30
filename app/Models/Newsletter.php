<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 30 Jul 2018 04:23:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Newsletter
 * 
 * @property int $newsletters_id
 * @property string $title
 * @property string $content
 * @property string $module
 * @property \Carbon\Carbon $date_added
 * @property \Carbon\Carbon $date_sent
 * @property int $status
 * @property int $locked
 *
 * @package App\Models
 */
class Newsletter extends Eloquent
{
	protected $primaryKey = 'newsletters_id';
	public $timestamps = false;

	protected $casts = [
		'status' => 'int',
		'locked' => 'int'
	];

	protected $dates = [
		'date_added',
		'date_sent'
	];

	protected $fillable = [
		'title',
		'content',
		'module',
		'date_added',
		'date_sent',
		'status',
		'locked'
	];
}
