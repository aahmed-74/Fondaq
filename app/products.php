<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected  $fillable=[
       'id','Product_name','description','section_id',
    ];
    public function section()
    {
    return $this->belongsTo('App\sections');
    }
}
