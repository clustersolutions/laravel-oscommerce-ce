<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 30 Jul 2018 04:23:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Country
 * 
 * @property int $countries_id
 * @property string $countries_name
 * @property string $countries_iso_code_2
 * @property string $countries_iso_code_3
 * @property int $address_format_id
 *
 * @package App\Models
 */
class Country extends Eloquent
{
	protected $primaryKey = 'countries_id';
	public $timestamps = false;

	protected $casts = [
		'address_format_id' => 'int'
	];

	protected $fillable = [
		'countries_name',
		'countries_iso_code_2',
		'countries_iso_code_3',
		'address_format_id'
	];
}
