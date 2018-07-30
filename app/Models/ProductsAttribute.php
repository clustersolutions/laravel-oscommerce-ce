<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 30 Jul 2018 04:23:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ProductsAttribute
 * 
 * @property int $products_attributes_id
 * @property int $products_id
 * @property int $options_id
 * @property int $options_values_id
 * @property float $options_values_price
 * @property string $price_prefix
 *
 * @package App\Models
 */
class ProductsAttribute extends Eloquent
{
	protected $primaryKey = 'products_attributes_id';
	public $timestamps = false;

	protected $casts = [
		'products_id' => 'int',
		'options_id' => 'int',
		'options_values_id' => 'int',
		'options_values_price' => 'float'
	];

	protected $fillable = [
		'products_id',
		'options_id',
		'options_values_id',
		'options_values_price',
		'price_prefix'
	];
}
