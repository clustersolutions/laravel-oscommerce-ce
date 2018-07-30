<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 30 Jul 2018 04:23:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OrdersStatus
 * 
 * @property int $orders_status_id
 * @property int $language_id
 * @property string $orders_status_name
 * @property int $public_flag
 * @property int $downloads_flag
 *
 * @package App\Models
 */
class OrdersStatus extends Eloquent
{
	protected $table = 'orders_status';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'orders_status_id' => 'int',
		'language_id' => 'int',
		'public_flag' => 'int',
		'downloads_flag' => 'int'
	];

	protected $fillable = [
		'orders_status_name',
		'public_flag',
		'downloads_flag'
	];
}
