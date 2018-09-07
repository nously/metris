<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;
class Tourist extends Model 
{
  public $table= "tourist";
  use SoftDeletes;
protected $dates = ['deleted_at'];
    protected $fillable = [
        
          ];
          public function account(){
            return $this->belongsTo('App\Model\Account', 'id_account');
        }

 
}
