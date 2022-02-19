<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    protected $fillable = ['districtid', 'district_title', 'state_id', 'district_status'];

    public function state(){
        return $this->belongsTo(State::class);
    }
    
}
