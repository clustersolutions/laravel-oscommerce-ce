<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 30 Jul 2018 04:23:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Special
 * 
 * @property int $specials_id
 * @property int $products_id
 * @property float $specials_new_products_price
 * @property \Carbon\Carbon $specials_date_added
 * @property \Carbon\Carbon $specials_last_modified
 * @property \Carbon\Carbon $expires_date
 * @property \Carbon\Carbon $date_status_change
 * @property int $status
 *
 * @package App\Models
 */
class Special extends Eloquent
{
	protected $primaryKey = 'specials_id';
	public $timestamps = false;

	protected $casts = [
		'products_id' => 'int',
		'specials_new_products_price' => 'float',
		'status' => 'int'
	];

	protected $dates = [
		'specials_date_added',
		'specials_last_modified',
		'expires_date',
		'date_status_change'
	];

	protected $fillable = [
		'products_id',
		'specials_new_products_price',
		'specials_date_added',
		'specials_last_modified',
		'expires_date',
		'date_status_change',
		'status'
	];
}
