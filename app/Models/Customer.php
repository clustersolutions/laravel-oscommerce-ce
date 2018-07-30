<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 30 Jul 2018 04:23:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Customer
 * 
 * @property int $customers_id
 * @property string $customers_gender
 * @property string $customers_firstname
 * @property string $customers_lastname
 * @property \Carbon\Carbon $customers_dob
 * @property string $customers_email_address
 * @property int $customers_default_address_id
 * @property string $customers_telephone
 * @property string $customers_fax
 * @property string $customers_password
 * @property string $customers_newsletter
 *
 * @package App\Models
 */
class Customer extends Eloquent
{
	protected $primaryKey = 'customers_id';
	public $timestamps = false;

	protected $casts = [
		'customers_default_address_id' => 'int'
	];

	protected $dates = [
		'customers_dob'
	];

	protected $hidden = [
		'customers_password'
	];

	protected $fillable = [
		'customers_gender',
		'customers_firstname',
		'customers_lastname',
		'customers_dob',
		'customers_email_address',
		'customers_default_address_id',
		'customers_telephone',
		'customers_fax',
		'customers_password',
		'customers_newsletter'
	];
}
