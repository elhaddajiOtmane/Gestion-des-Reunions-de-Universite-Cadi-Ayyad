<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Meeting extends Model
{
    use HasFactory;

    protected $table = 'meetings';
    public $timestamps = true;

    protected $fillable = [
        'title',
        'date',
        'end_time',
        'end_time',
        'place',
        'leader',
        'minuter',
        'created_at',
        'created_by'
    ];

    // public function getTanggaAtribute(){
    //     return Carbon::parse($this->attributes['date'])->translatedFormat('l, d F Y');
    // }
}
