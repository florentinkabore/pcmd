<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shape extends Model
{
    use HasFactory;

    protected $fillable=[
    'police',
    'taille',
    'interline',
];

public $timestamps=false;
public $autoincrement = false;

public function files()
{
    return $this->hasOne(File::class);
}

}
