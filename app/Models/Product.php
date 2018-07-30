<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 30 Jul 2018 04:23:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Product
 * 
 * @property int $products_id
 * @property int $products_quantity
 * @property string $products_model
 * @property string $products_image
 * @property float $products_price
 * @property \Carbon\Carbon $products_date_added
 * @property \Carbon\Carbon $products_last_modified
 * @property \Carbon\Carbon $products_date_available
 * @property float $products_weight
 * @property bool $products_status
 * @property int $products_tax_class_id
 * @property int $manufacturers_id
 * @property int $products_ordered
 * @property string $products_gtin
 *
 * @package App\Models
 */
class Product extends Eloquent
{
	protected $primaryKey = 'products_id';
	public $timestamps = false;

	protected $casts = [
		'products_quantity' => 'int',
		'products_price' => 'float',
		'products_weight' => 'float',
		'products_status' => 'bool',
		'products_tax_class_id' => 'int',
		'manufacturers_id' => 'int',
		'products_ordered' => 'int'
	];

	protected $dates = [
		'products_date_added',
		'products_last_modified',
		'products_date_available'
	];

	protected $fillable = [
		'products_quantity',
		'products_model',
		'products_image',
		'products_price',
		'products_date_added',
		'products_last_modified',
		'products_date_available',
		'products_weight',
		'products_status',
		'products_tax_class_id',
		'manufacturers_id',
		'products_ordered',
		'products_gtin'
	];
}
