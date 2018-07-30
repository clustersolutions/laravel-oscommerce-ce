<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 30 Jul 2018 04:23:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ZonesToGeoZone
 * 
 * @property int $association_id
 * @property int $zone_country_id
 * @property int $zone_id
 * @property int $geo_zone_id
 * @property \Carbon\Carbon $last_modified
 * @property \Carbon\Carbon $date_added
 *
 * @package App\Models
 */
class ZonesToGeoZone extends Eloquent
{
	protected $primaryKey = 'association_id';
	public $timestamps = false;

	protected $casts = [
		'zone_country_id' => 'int',
		'zone_id' => 'int',
		'geo_zone_id' => 'int'
	];

	protected $dates = [
		'last_modified',
		'date_added'
	];

	protected $fillable = [
		'zone_country_id',
		'zone_id',
		'geo_zone_id',
		'last_modified',
		'date_added'
	];
}
