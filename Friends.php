<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;	

class Friends
class friends
{	
    use HasFactory;
}	    protected $guarded =['nama'];

    public function groups()
    {
        return $this->belongsTo('App\Models\Groups');
    }
} 