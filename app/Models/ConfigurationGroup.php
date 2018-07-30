<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 30 Jul 2018 04:23:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ConfigurationGroup
 * 
 * @property int $configuration_group_id
 * @property string $configuration_group_title
 * @property string $configuration_group_description
 * @property int $sort_order
 * @property int $visible
 *
 * @package App\Models
 */
class ConfigurationGroup extends Eloquent
{
	protected $table = 'configuration_group';
	protected $primaryKey = 'configuration_group_id';
	public $timestamps = false;

	protected $casts = [
		'sort_order' => 'int',
		'visible' => 'int'
	];

	protected $fillable = [
		'configuration_group_title',
		'configuration_group_description',
		'sort_order',
		'visible'
	];
}
