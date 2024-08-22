<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function adminlte_image()
    {
        // Obtener el rol actual del usuario
        $rol = $this->roles->first()->name; // Suponiendo que un usuario solo tiene un rol

        // Devolver una URL de imagen diferente según el rol
        switch ($rol) {
            case 'admin':
                return 'https://laverdadnoticias.com/__export/1710454571326/sites/laverdad/img/2024/03/14/muichiro-tokito-pilar_de_niebla.jpeg_423682103.jpeg';
            case 'empleado':
                return 'https://i.pinimg.com/236x/21/bd/05/21bd05495f7bcd16f8e6a35742e0c621.jpg';
            case 'cliente':
                return 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQguC5zz66f9r5dbH3XkgYMKfdi5gIE8TrCtw&s';
            default:
                return 'URL_por_defecto_para_otros_roles';
        }
    }

    public function adminlte_profile_url(){
        return 'profile/username';
    }
}
