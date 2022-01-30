<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'filetype',
        'filename',
        'file',
    ];

    public $timestamps=false;


    public function requesteds()
    {
        return $this->belongsTo(Requested::class);
    }

        public function shapes()
    {
        return $this->belongsTo(Shape::class);
    }

}
