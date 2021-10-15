<?php

namespace App\Models;
use DateTime;

use App\Models\UserDomicilio;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $appends = ['edad','UsuarioDomicilio'];

    public function getedadAttribute(){
        $nacimiento = new DateTime($this->fecha_nacimiento);
        $ahora = new DateTime(date("Y-m-d"));
        $diferencia = $ahora->diff($nacimiento);
        return $diferencia->format("%y");
    }

    public function getUsuarioDomicilioAttribute(){
      return $this->domicilio->toArray();
    }
    public function domicilio()
    {
        return $this->hasOne(UserDomicilio::class);
    }
    protected $fillable = [
        'name',
        'email',
        'password',

        'fecha_nacimiento'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
