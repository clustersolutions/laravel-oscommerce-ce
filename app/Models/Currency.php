<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 30 Jul 2018 04:23:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Currency
 * 
 * @property int $currencies_id
 * @property string $title
 * @property string $code
 * @property string $symbol_left
 * @property string $symbol_right
 * @property string $decimal_point
 * @property string $thousands_point
 * @property string $decimal_places
 * @property float $value
 * @property \Carbon\Carbon $last_updated
 *
 * @package App\Models
 */
class Currency extends Eloquent
{
	protected $primaryKey = 'currencies_id';
	public $timestamps = false;

	protected $casts = [
		'value' => 'float'
	];

	protected $dates = [
		'last_updated'
	];

	protected $fillable = [
		'title',
		'code',
		'symbol_left',
		'symbol_right',
		'decimal_point',
		'thousands_point',
		'decimal_places',
		'value',
		'last_updated'
	];
}
