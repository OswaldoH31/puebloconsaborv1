<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendCodeMail;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Nombre',
        'Apellido_paterno',
        'Apellido_materno',
        'Genero',
        'Fecha_nacimiento',
        'email',
        'Telefono',
        'Rol_id',
        'Usuario',
        'password',
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


    public function role(){
        return $this->belongsTo('App\Models\role');
    }

    public function Admin(){
        
        if($this->role->nombre=='Administrador'){

            return true;
        }
        return false;
    }


    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
    
    
    public function generateCode()
    {
        $code = rand(1000, 9999);

        UserCode::updateOrCreate(
            [ 'user_id' => auth()->id() ],
            [ 'codigo' => $code ]
        );

        try {

            $details = [
                'title' => 'Mail from shouts.dev',
                'codigo' => $code
            ];

            Mail::to(auth()->user()->email)->send(new SendCodeMail($details));

        } catch (\Exception $e) {
            info("Error: ". $e->getMessage());
            dd($e);
        }
    }

    

    public function getProfileImageAttribute(){
        return $this->image
            ? "images/{$this->image->path}"
            : 'https://www.gravatar.com/avatar/404?d=mp';
    }
    


}
