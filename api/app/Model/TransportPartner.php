<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;
class TransportPartner extends Model 
{
  public $table= "transport_partner";
  use SoftDeletes;
protected $dates = ['deleted_at'];
    protected $fillable = [
        
          ];
 

          public function account(){
            return $this->belongsTo('App\Model\Account', 'id_account');
        }
        public function transportLimit(){
          return $this->hasMany('App\Model\TransportLimit', 'id_transport_partner');
      }
}
