<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 30 Jul 2018 04:23:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TaxRate
 * 
 * @property int $tax_rates_id
 * @property int $tax_zone_id
 * @property int $tax_class_id
 * @property int $tax_priority
 * @property float $tax_rate
 * @property string $tax_description
 * @property \Carbon\Carbon $last_modified
 * @property \Carbon\Carbon $date_added
 *
 * @package App\Models
 */
class TaxRate extends Eloquent
{
	protected $primaryKey = 'tax_rates_id';
	public $timestamps = false;

	protected $casts = [
		'tax_zone_id' => 'int',
		'tax_class_id' => 'int',
		'tax_priority' => 'int',
		'tax_rate' => 'float'
	];

	protected $dates = [
		'last_modified',
		'date_added'
	];

	protected $fillable = [
		'tax_zone_id',
		'tax_class_id',
		'tax_priority',
		'tax_rate',
		'tax_description',
		'last_modified',
		'date_added'
	];
}
