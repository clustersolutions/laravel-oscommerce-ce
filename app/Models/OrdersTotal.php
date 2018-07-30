<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 30 Jul 2018 04:23:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OrdersTotal
 * 
 * @property int $orders_total_id
 * @property int $orders_id
 * @property string $title
 * @property string $text
 * @property float $value
 * @property string $class
 * @property int $sort_order
 *
 * @package App\Models
 */
class OrdersTotal extends Eloquent
{
	protected $table = 'orders_total';
	protected $primaryKey = 'orders_total_id';
	public $timestamps = false;

	protected $casts = [
		'orders_id' => 'int',
		'value' => 'float',
		'sort_order' => 'int'
	];

	protected $fillable = [
		'orders_id',
		'title',
		'text',
		'value',
		'class',
		'sort_order'
	];
}
