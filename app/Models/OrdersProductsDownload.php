<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 30 Jul 2018 04:23:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OrdersProductsDownload
 * 
 * @property int $orders_products_download_id
 * @property int $orders_id
 * @property int $orders_products_id
 * @property string $orders_products_filename
 * @property int $download_maxdays
 * @property int $download_count
 *
 * @package App\Models
 */
class OrdersProductsDownload extends Eloquent
{
	protected $table = 'orders_products_download';
	protected $primaryKey = 'orders_products_download_id';
	public $timestamps = false;

	protected $casts = [
		'orders_id' => 'int',
		'orders_products_id' => 'int',
		'download_maxdays' => 'int',
		'download_count' => 'int'
	];

	protected $fillable = [
		'orders_id',
		'orders_products_id',
		'orders_products_filename',
		'download_maxdays',
		'download_count'
	];
}
