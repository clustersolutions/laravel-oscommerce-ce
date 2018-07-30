<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 30 Jul 2018 04:23:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ProductsImage
 * 
 * @property int $id
 * @property int $products_id
 * @property string $image
 * @property string $htmlcontent
 * @property int $sort_order
 *
 * @package App\Models
 */
class ProductsImage extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'products_id' => 'int',
		'sort_order' => 'int'
	];

	protected $fillable = [
		'products_id',
		'image',
		'htmlcontent',
		'sort_order'
	];
}
