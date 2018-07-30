<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 30 Jul 2018 04:23:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OrdersProductsAttribute
 * 
 * @property int $orders_products_attributes_id
 * @property int $orders_id
 * @property int $orders_products_id
 * @property string $products_options
 * @property string $products_options_values
 * @property float $options_values_price
 * @property string $price_prefix
 *
 * @package App\Models
 */
class OrdersProductsAttribute extends Eloquent
{
	protected $primaryKey = 'orders_products_attributes_id';
	public $timestamps = false;

	protected $casts = [
		'orders_id' => 'int',
		'orders_products_id' => 'int',
		'options_values_price' => 'float'
	];

	protected $fillable = [
		'orders_id',
		'orders_products_id',
		'products_options',
		'products_options_values',
		'options_values_price',
		'price_prefix'
	];
}
