<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 30 Jul 2018 04:23:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ProductsOptionsValue
 * 
 * @property int $products_options_values_id
 * @property int $language_id
 * @property string $products_options_values_name
 *
 * @package App\Models
 */
class ProductsOptionsValue extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'products_options_values_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'products_options_values_name'
	];
}
