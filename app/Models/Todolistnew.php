<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use DB;

class Todolistnew extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;

    public $table= "to_do_list_new";

}