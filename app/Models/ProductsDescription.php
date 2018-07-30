<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 30 Jul 2018 04:23:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ProductsDescription
 * 
 * @property int $products_id
 * @property int $language_id
 * @property string $products_name
 * @property string $products_description
 * @property string $products_url
 * @property int $products_viewed
 * @property string $products_seo_description
 * @property string $products_seo_keywords
 * @property string $products_seo_title
 *
 * @package App\Models
 */
class ProductsDescription extends Eloquent
{
	protected $table = 'products_description';
	public $timestamps = false;

	protected $casts = [
		'language_id' => 'int',
		'products_viewed' => 'int'
	];

	protected $fillable = [
		'products_name',
		'products_description',
		'products_url',
		'products_viewed',
		'products_seo_description',
		'products_seo_keywords',
		'products_seo_title'
	];
}
