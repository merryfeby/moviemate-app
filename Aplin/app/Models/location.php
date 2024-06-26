<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    use HasFactory;

    protected $table = 'location';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'address',
    ];

    public $timestamps = false;

    public function studio()
    {
        return $this->hasMany(studio::class, 'locationID', 'id');
    }
}
