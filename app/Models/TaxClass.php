<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 30 Jul 2018 04:23:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TaxClass
 * 
 * @property int $tax_class_id
 * @property string $tax_class_title
 * @property string $tax_class_description
 * @property \Carbon\Carbon $last_modified
 * @property \Carbon\Carbon $date_added
 *
 * @package App\Models
 */
class TaxClass extends Eloquent
{
	protected $table = 'tax_class';
	protected $primaryKey = 'tax_class_id';
	public $timestamps = false;

	protected $dates = [
		'last_modified',
		'date_added'
	];

	protected $fillable = [
		'tax_class_title',
		'tax_class_description',
		'last_modified',
		'date_added'
	];
}
