<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;
class Account extends Model 
{
  public $table= "account";
  use SoftDeletes;
protected $dates = ['deleted_at'];
    protected $fillable = [
        
          ];
          public function setPasswordAttribute($value){
            if (Hash::needsRehash($value)) {
              $this->attributes['password'] = Hash::make($value); 
            }else{
              $this->attributes['password'] = $value; 
            }
          }
          public function tourist(){
            return $this->hasOne('App\Model\Tourist', 'id_account');
        }
        public function tourManager(){
          return $this->hasOne('App\Model\TourManager', 'id_account');
      }
      public function transportPartner(){
        return $this->hasOne('App\Model\TransportPartner', 'id_account');
    }
  }