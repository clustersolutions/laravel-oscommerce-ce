<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 30 Jul 2018 04:23:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class AddressFormat
 * 
 * @property int $address_format_id
 * @property string $address_format
 * @property string $address_summary
 *
 * @package App\Models
 */
class AddressFormat extends Eloquent
{
	protected $table = 'address_format';
	protected $primaryKey = 'address_format_id';
	public $timestamps = false;

	protected $fillable = [
		'address_format',
		'address_summary'
	];
}
