<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 30 Jul 2018 04:23:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ProductsOptionsValuesToProductsOption
 * 
 * @property int $products_options_values_to_products_options_id
 * @property int $products_options_id
 * @property int $products_options_values_id
 *
 * @package App\Models
 */
class ProductsOptionsValuesToProductsOption extends Eloquent
{
	protected $primaryKey = 'products_options_values_to_products_options_id';
	public $timestamps = false;

	protected $casts = [
		'products_options_id' => 'int',
		'products_options_values_id' => 'int'
	];

	protected $fillable = [
		'products_options_id',
		'products_options_values_id'
	];
}
