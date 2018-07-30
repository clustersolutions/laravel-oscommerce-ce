<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 30 Jul 2018 04:23:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TestimonialsDescription
 * 
 * @property int $testimonials_id
 * @property int $languages_id
 * @property string $testimonials_text
 *
 * @package App\Models
 */
class TestimonialsDescription extends Eloquent
{
	protected $table = 'testimonials_description';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'testimonials_id' => 'int',
		'languages_id' => 'int'
	];

	protected $fillable = [
		'testimonials_text'
	];
}
