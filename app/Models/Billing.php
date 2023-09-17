<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','bank','card_number','account_number','account_holder','shaba_number','national_code'];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
