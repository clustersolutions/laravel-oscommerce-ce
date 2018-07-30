<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 30 Jul 2018 04:23:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CustomersBasketAttribute
 * 
 * @property int $customers_basket_attributes_id
 * @property int $customers_id
 * @property string $products_id
 * @property int $products_options_id
 * @property int $products_options_value_id
 *
 * @package App\Models
 */
class CustomersBasketAttribute extends Eloquent
{
	protected $primaryKey = 'customers_basket_attributes_id';
	public $timestamps = false;

	protected $casts = [
		'customers_id' => 'int',
		'products_options_id' => 'int',
		'products_options_value_id' => 'int'
	];

	protected $fillable = [
		'customers_id',
		'products_id',
		'products_options_id',
		'products_options_value_id'
	];
}
