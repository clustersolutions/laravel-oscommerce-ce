<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 30 Jul 2018 04:23:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Manufacturer
 * 
 * @property int $manufacturers_id
 * @property string $manufacturers_name
 * @property string $manufacturers_image
 * @property \Carbon\Carbon $date_added
 * @property \Carbon\Carbon $last_modified
 *
 * @package App\Models
 */
class Manufacturer extends Eloquent
{
	protected $primaryKey = 'manufacturers_id';
	public $timestamps = false;

	protected $dates = [
		'date_added',
		'last_modified'
	];

	protected $fillable = [
		'manufacturers_name',
		'manufacturers_image',
		'date_added',
		'last_modified'
	];
}
