<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 30 Jul 2018 04:23:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OrdersProduct
 * 
 * @property int $orders_products_id
 * @property int $orders_id
 * @property int $products_id
 * @property string $products_model
 * @property string $products_name
 * @property float $products_price
 * @property float $final_price
 * @property float $products_tax
 * @property int $products_quantity
 *
 * @package App\Models
 */
class OrdersProduct extends Eloquent
{
	protected $primaryKey = 'orders_products_id';
	public $timestamps = false;

	protected $casts = [
		'orders_id' => 'int',
		'products_id' => 'int',
		'products_price' => 'float',
		'final_price' => 'float',
		'products_tax' => 'float',
		'products_quantity' => 'int'
	];

	protected $fillable = [
		'orders_id',
		'products_id',
		'products_model',
		'products_name',
		'products_price',
		'final_price',
		'products_tax',
		'products_quantity'
	];
}
