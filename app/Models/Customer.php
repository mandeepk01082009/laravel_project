<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "customers";
    protected $primaryKey = "customer_id";

    //Mutator in Laravel: Modification of value at set time.
    public function setNameAttribute($value)
       {
            $this->attributes['name'] = ucwords($value);
       }
    //Accessor in Laravel: Modification of value at get time.
    public function getDobAttribute($value)
    {
        return date("d-M-Y", strtotime($value));
    }
 
}

