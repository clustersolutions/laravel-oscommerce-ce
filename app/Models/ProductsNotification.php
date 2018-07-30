<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 30 Jul 2018 04:23:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ProductsNotification
 * 
 * @property int $products_id
 * @property int $customers_id
 * @property \Carbon\Carbon $date_added
 *
 * @package App\Models
 */
class ProductsNotification extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'products_id' => 'int',
		'customers_id' => 'int'
	];

	protected $dates = [
		'date_added'
	];

	protected $fillable = [
		'date_added'
	];
}
