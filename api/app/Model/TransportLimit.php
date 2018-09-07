<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;
class TransportLimit extends Model 
{
  public $table= "transport_limit";
  use SoftDeletes;
protected $dates = ['deleted_at'];
    protected $fillable = [
        
          ];
 
          public function transportPartner(){
            return $this->belongsTo('App\Model\TransportPartner', 'id_transport_partner');
        }
 
}
