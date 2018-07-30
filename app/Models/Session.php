<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 30 Jul 2018 04:23:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Session
 * 
 * @property string $sesskey
 * @property int $expiry
 * @property string $value
 *
 * @package App\Models
 */
class Session extends Eloquent
{
	protected $primaryKey = 'sesskey';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'expiry' => 'int'
	];

	protected $fillable = [
		'expiry',
		'value'
	];
}
