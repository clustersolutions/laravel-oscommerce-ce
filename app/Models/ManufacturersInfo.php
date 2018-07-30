<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 30 Jul 2018 04:23:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ManufacturersInfo
 * 
 * @property int $manufacturers_id
 * @property int $languages_id
 * @property string $manufacturers_url
 * @property int $url_clicked
 * @property \Carbon\Carbon $date_last_click
 * @property string $manufacturers_description
 * @property string $manufacturers_seo_description
 * @property string $manufacturers_seo_keywords
 * @property string $manufacturers_seo_title
 *
 * @package App\Models
 */
class ManufacturersInfo extends Eloquent
{
	protected $table = 'manufacturers_info';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'manufacturers_id' => 'int',
		'languages_id' => 'int',
		'url_clicked' => 'int'
	];

	protected $dates = [
		'date_last_click'
	];

	protected $fillable = [
		'manufacturers_url',
		'url_clicked',
		'date_last_click',
		'manufacturers_description',
		'manufacturers_seo_description',
		'manufacturers_seo_keywords',
		'manufacturers_seo_title'
	];
}
