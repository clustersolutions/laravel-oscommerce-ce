<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 30 Jul 2018 04:23:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ProductsToCategory
 * 
 * @property int $products_id
 * @property int $categories_id
 *
 * @package App\Models
 */
class ProductsToCategory extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'products_id' => 'int',
		'categories_id' => 'int'
	];
}
