<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class register extends Authenticatable{

    use Notifiable;
    protected $table= 'registers';
    protected $primarykey = 'register_id';

    protected $fillable = [
        'register_name', 'register_phone', 'register_address', 'register_email', 'register_password',
    ];
    
}
  

