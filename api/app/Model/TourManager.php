<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;
class TourManager extends Model 
{
  public $table= "tour_manager";
  use SoftDeletes;
protected $dates = ['deleted_at'];
    protected $fillable = [
        
          ];
 

          public function account(){
            return $this->belongsTo('App\Model\Account', 'id_account');
        }
 
}
