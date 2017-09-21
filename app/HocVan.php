<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HocVan extends Model
{
    protected $primaryKey = "mahocvan";
    protected $table = "hocvan";
    protected $hidden = ['updated_at, created_at'];
    protected $fillable = [
        'mahoso',
        'tgtu',
        'tgden',
        'hoctai',
        'congviec'
    ];
    public $timestamps = false;
}
