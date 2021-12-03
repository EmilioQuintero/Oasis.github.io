<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;

use DB;

class User extends Authenticatable  implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'apellido_paterno',
        'apellido_materno',
        'estado',
        'ciudad',
        'cp',
        'direccion',
        'telefono',
        'autorizado',
        'tipo_usuario',
        'permisos'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function paquetes(){
        return $this->hasMany(Paquete::class);
    }

    public function polizas(){
        return $this->hasMany(Poliza::class);
    }

    public function crearUsuario($data){
        $id=DB::table("users")->insertGetId([
            "name" => $data["name"],
            "email"  => $data["email"],
            "password"      => Bcrypt($data["password"]),
            'apellido_paterno'     => $data["apellido_paterno"],
            'apellido_materno' => $data["apellido_materno"],
            'telefono' => $data["telefono"],
            'direccion' => $data["direccion"],
            'cp' => $data["cp"],
            'permisos' => 1,
            'tipo_usuario' =>  1
        ]);
        return User::find($id);
    }

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    public function getJWTCustomClaims()
    {
        return [];
    }

   

    

}
