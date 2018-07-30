<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 30 Jul 2018 04:23:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OrdersStatusHistory
 * 
 * @property int $orders_status_history_id
 * @property int $orders_id
 * @property int $orders_status_id
 * @property \Carbon\Carbon $date_added
 * @property int $customer_notified
 * @property string $comments
 *
 * @package App\Models
 */
class OrdersStatusHistory extends Eloquent
{
	protected $table = 'orders_status_history';
	protected $primaryKey = 'orders_status_history_id';
	public $timestamps = false;

	protected $casts = [
		'orders_id' => 'int',
		'orders_status_id' => 'int',
		'customer_notified' => 'int'
	];

	protected $dates = [
		'date_added'
	];

	protected $fillable = [
		'orders_id',
		'orders_status_id',
		'date_added',
		'customer_notified',
		'comments'
	];
}
