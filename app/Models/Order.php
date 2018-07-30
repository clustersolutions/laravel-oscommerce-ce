<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 30 Jul 2018 04:23:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Order
 * 
 * @property int $orders_id
 * @property int $customers_id
 * @property string $customers_name
 * @property string $customers_company
 * @property string $customers_street_address
 * @property string $customers_suburb
 * @property string $customers_city
 * @property string $customers_postcode
 * @property string $customers_state
 * @property string $customers_country
 * @property string $customers_telephone
 * @property string $customers_email_address
 * @property int $customers_address_format_id
 * @property string $delivery_name
 * @property string $delivery_company
 * @property string $delivery_street_address
 * @property string $delivery_suburb
 * @property string $delivery_city
 * @property string $delivery_postcode
 * @property string $delivery_state
 * @property string $delivery_country
 * @property int $delivery_address_format_id
 * @property string $billing_name
 * @property string $billing_company
 * @property string $billing_street_address
 * @property string $billing_suburb
 * @property string $billing_city
 * @property string $billing_postcode
 * @property string $billing_state
 * @property string $billing_country
 * @property int $billing_address_format_id
 * @property string $payment_method
 * @property string $cc_type
 * @property string $cc_owner
 * @property string $cc_number
 * @property string $cc_expires
 * @property \Carbon\Carbon $last_modified
 * @property \Carbon\Carbon $date_purchased
 * @property int $orders_status
 * @property \Carbon\Carbon $orders_date_finished
 * @property string $currency
 * @property float $currency_value
 *
 * @package App\Models
 */
class Order extends Eloquent
{
	protected $primaryKey = 'orders_id';
	public $timestamps = false;

	protected $casts = [
		'customers_id' => 'int',
		'customers_address_format_id' => 'int',
		'delivery_address_format_id' => 'int',
		'billing_address_format_id' => 'int',
		'orders_status' => 'int',
		'currency_value' => 'float'
	];

	protected $dates = [
		'last_modified',
		'date_purchased',
		'orders_date_finished'
	];

	protected $fillable = [
		'customers_id',
		'customers_name',
		'customers_company',
		'customers_street_address',
		'customers_suburb',
		'customers_city',
		'customers_postcode',
		'customers_state',
		'customers_country',
		'customers_telephone',
		'customers_email_address',
		'customers_address_format_id',
		'delivery_name',
		'delivery_company',
		'delivery_street_address',
		'delivery_suburb',
		'delivery_city',
		'delivery_postcode',
		'delivery_state',
		'delivery_country',
		'delivery_address_format_id',
		'billing_name',
		'billing_company',
		'billing_street_address',
		'billing_suburb',
		'billing_city',
		'billing_postcode',
		'billing_state',
		'billing_country',
		'billing_address_format_id',
		'payment_method',
		'cc_type',
		'cc_owner',
		'cc_number',
		'cc_expires',
		'last_modified',
		'date_purchased',
		'orders_status',
		'orders_date_finished',
		'currency',
		'currency_value'
	];
}
