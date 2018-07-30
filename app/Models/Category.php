<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 30 Jul 2018 04:23:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Category
 * 
 * @property int $categories_id
 * @property string $categories_image
 * @property int $parent_id
 * @property int $sort_order
 * @property \Carbon\Carbon $date_added
 * @property \Carbon\Carbon $last_modified
 *
 * @package App\Models
 */
class Category extends Eloquent
{
	protected $primaryKey = 'categories_id';
	public $timestamps = false;

	protected $casts = [
		'parent_id' => 'int',
		'sort_order' => 'int'
	];

	protected $dates = [
		'date_added',
		'last_modified'
	];

	protected $fillable = [
		'categories_image',
		'parent_id',
		'sort_order',
		'date_added',
		'last_modified'
	];
}
