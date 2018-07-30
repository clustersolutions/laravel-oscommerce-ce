<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 30 Jul 2018 04:23:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class WhosOnline
 * 
 * @property int $id
 * @property int $customer_id
 * @property string $full_name
 * @property string $session_id
 * @property string $ip_address
 * @property string $time_entry
 * @property string $time_last_click
 * @property string $last_page_url
 *
 * @package App\Models
 */
class WhosOnline extends Eloquent
{
	protected $table = 'whos_online';
	public $timestamps = false;

	protected $casts = [
		'customer_id' => 'int'
	];

	protected $fillable = [
		'customer_id',
		'full_name',
		'session_id',
		'ip_address',
		'time_entry',
		'time_last_click',
		'last_page_url'
	];
}
