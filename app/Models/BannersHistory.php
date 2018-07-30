<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 30 Jul 2018 04:23:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class BannersHistory
 * 
 * @property int $banners_history_id
 * @property int $banners_id
 * @property int $banners_shown
 * @property int $banners_clicked
 * @property \Carbon\Carbon $banners_history_date
 *
 * @package App\Models
 */
class BannersHistory extends Eloquent
{
	protected $table = 'banners_history';
	protected $primaryKey = 'banners_history_id';
	public $timestamps = false;

	protected $casts = [
		'banners_id' => 'int',
		'banners_shown' => 'int',
		'banners_clicked' => 'int'
	];

	protected $dates = [
		'banners_history_date'
	];

	protected $fillable = [
		'banners_id',
		'banners_shown',
		'banners_clicked',
		'banners_history_date'
	];
}
