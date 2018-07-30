<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 30 Jul 2018 04:23:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ProductsAttributesDownload
 * 
 * @property int $products_attributes_id
 * @property string $products_attributes_filename
 * @property int $products_attributes_maxdays
 * @property int $products_attributes_maxcount
 *
 * @package App\Models
 */
class ProductsAttributesDownload extends Eloquent
{
	protected $table = 'products_attributes_download';
	protected $primaryKey = 'products_attributes_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'products_attributes_id' => 'int',
		'products_attributes_maxdays' => 'int',
		'products_attributes_maxcount' => 'int'
	];

	protected $fillable = [
		'products_attributes_filename',
		'products_attributes_maxdays',
		'products_attributes_maxcount'
	];
}
