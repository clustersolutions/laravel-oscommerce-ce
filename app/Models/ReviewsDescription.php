<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 30 Jul 2018 04:23:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ReviewsDescription
 * 
 * @property int $reviews_id
 * @property int $languages_id
 * @property string $reviews_text
 *
 * @package App\Models
 */
class ReviewsDescription extends Eloquent
{
	protected $table = 'reviews_description';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'reviews_id' => 'int',
		'languages_id' => 'int'
	];

	protected $fillable = [
		'reviews_text'
	];
}
