<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed|string url
 * @property mixed|string type
 * @property mixed|string name
 * @property int|mixed size
 * @property mixed id
 * @property mixed|string ext
 * @property int|mixed sort_number
 * @property int|mixed directory
 */
class Blob extends Model
{
    use HasFactory;
}
