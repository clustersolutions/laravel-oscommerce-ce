<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 30 Jul 2018 04:23:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class AddressBook
 * 
 * @property int $address_book_id
 * @property int $customers_id
 * @property string $entry_gender
 * @property string $entry_company
 * @property string $entry_firstname
 * @property string $entry_lastname
 * @property string $entry_street_address
 * @property string $entry_suburb
 * @property string $entry_postcode
 * @property string $entry_city
 * @property string $entry_state
 * @property int $entry_country_id
 * @property int $entry_zone_id
 *
 * @package App\Models
 */
class AddressBook extends Eloquent
{
	protected $table = 'address_book';
	protected $primaryKey = 'address_book_id';
	public $timestamps = false;

	protected $casts = [
		'customers_id' => 'int',
		'entry_country_id' => 'int',
		'entry_zone_id' => 'int'
	];

	protected $fillable = [
		'customers_id',
		'entry_gender',
		'entry_company',
		'entry_firstname',
		'entry_lastname',
		'entry_street_address',
		'entry_suburb',
		'entry_postcode',
		'entry_city',
		'entry_state',
		'entry_country_id',
		'entry_zone_id'
	];
}
