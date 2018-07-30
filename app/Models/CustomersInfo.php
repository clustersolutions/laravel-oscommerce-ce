<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 30 Jul 2018 04:23:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CustomersInfo
 * 
 * @property int $customers_info_id
 * @property \Carbon\Carbon $customers_info_date_of_last_logon
 * @property int $customers_info_number_of_logons
 * @property \Carbon\Carbon $customers_info_date_account_created
 * @property \Carbon\Carbon $customers_info_date_account_last_modified
 * @property int $global_product_notifications
 * @property string $password_reset_key
 * @property \Carbon\Carbon $password_reset_date
 *
 * @package App\Models
 */
class CustomersInfo extends Eloquent
{
	protected $table = 'customers_info';
	protected $primaryKey = 'customers_info_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'customers_info_id' => 'int',
		'customers_info_number_of_logons' => 'int',
		'global_product_notifications' => 'int'
	];

	protected $dates = [
		'customers_info_date_of_last_logon',
		'customers_info_date_account_created',
		'customers_info_date_account_last_modified',
		'password_reset_date'
	];

	protected $fillable = [
		'customers_info_date_of_last_logon',
		'customers_info_number_of_logons',
		'customers_info_date_account_created',
		'customers_info_date_account_last_modified',
		'global_product_notifications',
		'password_reset_key',
		'password_reset_date'
	];
}
