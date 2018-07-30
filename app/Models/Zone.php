<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 30 Jul 2018 04:23:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Zone
 * 
 * @property int $zone_id
 * @property int $zone_country_id
 * @property string $zone_code
 * @property string $zone_name
 *
 * @package App\Models
 */
class Zone extends Eloquent
{
	protected $primaryKey = 'zone_id';
	public $timestamps = false;

	protected $casts = [
		'zone_country_id' => 'int'
	];

	protected $fillable = [
		'zone_country_id',
		'zone_code',
		'zone_name'
	];
}
