<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 30 Jul 2018 04:23:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Testimonial
 * 
 * @property int $testimonials_id
 * @property string $customers_name
 * @property \Carbon\Carbon $date_added
 * @property \Carbon\Carbon $last_modified
 * @property bool $testimonials_status
 *
 * @package App\Models
 */
class Testimonial extends Eloquent
{
	protected $primaryKey = 'testimonials_id';
	public $timestamps = false;

	protected $casts = [
		'testimonials_status' => 'bool'
	];

	protected $dates = [
		'date_added',
		'last_modified'
	];

	protected $fillable = [
		'customers_name',
		'date_added',
		'last_modified',
		'testimonials_status'
	];
}
