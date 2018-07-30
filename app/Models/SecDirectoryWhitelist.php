<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 30 Jul 2018 04:23:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class SecDirectoryWhitelist
 * 
 * @property int $id
 * @property string $directory
 *
 * @package App\Models
 */
class SecDirectoryWhitelist extends Eloquent
{
	protected $table = 'sec_directory_whitelist';
	public $timestamps = false;

	protected $fillable = [
		'directory'
	];
}
