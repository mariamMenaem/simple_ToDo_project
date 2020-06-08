<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
   protected $fillable = ['title' , 'cpmleated' , 'user_id' , 'description'];


   public function user()
   {
      return $this->belongsTo('App\User');
   }

   public function steps(){
      return $this->hasMany('App\Step');
   }
}
