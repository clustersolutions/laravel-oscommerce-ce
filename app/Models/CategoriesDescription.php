<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 30 Jul 2018 04:23:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CategoriesDescription
 * 
 * @property int $categories_id
 * @property int $language_id
 * @property string $categories_name
 * @property string $categories_description
 * @property string $categories_seo_description
 * @property string $categories_seo_keywords
 * @property string $categories_seo_title
 *
 * @package App\Models
 */
class CategoriesDescription extends Eloquent
{
	protected $table = 'categories_description';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'categories_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'categories_name',
		'categories_description',
		'categories_seo_description',
		'categories_seo_keywords',
		'categories_seo_title'
	];
}
