<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 30 Jul 2018 04:23:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Configuration
 * 
 * @property int $configuration_id
 * @property string $configuration_title
 * @property string $configuration_key
 * @property string $configuration_value
 * @property string $configuration_description
 * @property int $configuration_group_id
 * @property int $sort_order
 * @property \Carbon\Carbon $last_modified
 * @property \Carbon\Carbon $date_added
 * @property string $use_function
 * @property string $set_function
 *
 * @package App\Models
 */
class Configuration extends Eloquent
{
	protected $table = 'configuration';
	protected $primaryKey = 'configuration_id';
	public $timestamps = false;

	protected $casts = [
		'configuration_group_id' => 'int',
		'sort_order' => 'int'
	];

	protected $dates = [
		'last_modified',
		'date_added'
	];

	protected $fillable = [
		'configuration_title',
		'configuration_key',
		'configuration_value',
		'configuration_description',
		'configuration_group_id',
		'sort_order',
		'last_modified',
		'date_added',
		'use_function',
		'set_function'
	];
}
