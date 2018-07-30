<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 30 Jul 2018 04:23:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Review
 * 
 * @property int $reviews_id
 * @property int $products_id
 * @property int $customers_id
 * @property string $customers_name
 * @property int $reviews_rating
 * @property \Carbon\Carbon $date_added
 * @property \Carbon\Carbon $last_modified
 * @property bool $reviews_status
 * @property int $reviews_read
 *
 * @package App\Models
 */
class Review extends Eloquent
{
	protected $primaryKey = 'reviews_id';
	public $timestamps = false;

	protected $casts = [
		'products_id' => 'int',
		'customers_id' => 'int',
		'reviews_rating' => 'int',
		'reviews_status' => 'bool',
		'reviews_read' => 'int'
	];

	protected $dates = [
		'date_added',
		'last_modified'
	];

	protected $fillable = [
		'products_id',
		'customers_id',
		'customers_name',
		'reviews_rating',
		'date_added',
		'last_modified',
		'reviews_status',
		'reviews_read'
	];
}
