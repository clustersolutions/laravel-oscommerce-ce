<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 30 Jul 2018 04:23:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class GeoZone
 * 
 * @property int $geo_zone_id
 * @property string $geo_zone_name
 * @property string $geo_zone_description
 * @property \Carbon\Carbon $last_modified
 * @property \Carbon\Carbon $date_added
 *
 * @package App\Models
 */
class GeoZone extends Eloquent
{
	protected $primaryKey = 'geo_zone_id';
	public $timestamps = false;

	protected $dates = [
		'last_modified',
		'date_added'
	];

	protected $fillable = [
		'geo_zone_name',
		'geo_zone_description',
		'last_modified',
		'date_added'
	];
}
