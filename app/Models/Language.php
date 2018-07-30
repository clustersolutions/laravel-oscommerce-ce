<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 30 Jul 2018 04:23:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Language
 * 
 * @property int $languages_id
 * @property string $name
 * @property string $code
 * @property string $image
 * @property string $directory
 * @property int $sort_order
 *
 * @package App\Models
 */
class Language extends Eloquent
{
	protected $primaryKey = 'languages_id';
	public $timestamps = false;

	protected $casts = [
		'sort_order' => 'int'
	];

	protected $fillable = [
		'name',
		'code',
		'image',
		'directory',
		'sort_order'
	];
}
