<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use Illuminate\Database\Eloquent\SoftDeletes; 
Class TypeUser extends Model 
{ 
 // Use Hasfactory; 
    use Softdeletes; 
    //deklarasi tabel 
    public $table = 'type_user'; 
    //tipe data harus yyyy-mm-dd hh:mm:ss 
    protected $dates = [ 
        'created_at', 
        'updated_at', 
        'deleted_at' 
    ]; 
    protected $fillable = [ 
        'name', 
        'created_at', 
        'updated_at', 
        'deleted_at' 
 ]; 
    public function detail_user() { 
         return $this->hasMany('App\Models\ManagementAccess\DetailUser','type_user_id'); 
     } 

} 
   