<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 30 Jul 2018 04:23:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CustomersBasket
 * 
 * @property int $customers_basket_id
 * @property int $customers_id
 * @property string $products_id
 * @property int $customers_basket_quantity
 * @property float $final_price
 * @property string $customers_basket_date_added
 *
 * @package App\Models
 */
class CustomersBasket extends Eloquent
{
	protected $table = 'customers_basket';
	protected $primaryKey = 'customers_basket_id';
	public $timestamps = false;

	protected $casts = [
		'customers_id' => 'int',
		'customers_basket_quantity' => 'int',
		'final_price' => 'float'
	];

	protected $fillable = [
		'customers_id',
		'products_id',
		'customers_basket_quantity',
		'final_price',
		'customers_basket_date_added'
	];
}
