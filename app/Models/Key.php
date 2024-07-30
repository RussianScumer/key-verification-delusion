<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Key extends Model
{
    use HasFactory;

    protected $fillable =
        [
          'key',
          'status'
        ];
    public static function generateKey()
    {
        $key = strtoupper(bin2hex(random_bytes(8)));
        $key = substr(chunk_split($key, 4, '-'), 0, -1);
        return $key;
    }
}
