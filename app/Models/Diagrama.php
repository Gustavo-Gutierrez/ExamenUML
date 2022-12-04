<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Diagrama extends Model
{
    use HasFactory;
    protected $table = 'diagramas';
    
    protected $fillable = ['nombre','descripcion', 'contenido', 'tipo', 'terminado', 'proyecto_id', 'user_id'];
    /* tipo => 1:contexto 2:contendedor 3:componentes 4:codigo */

    public function proyecto(){
        return $this->belongsTo(Proyecto::class);
    }

    public function usuarios(){
        return $this->belongsToMany(User::class, 'user_diagramas');
    }

    public function user_diagrama(){
        return $this->hasMany(User_diagrama::class);
    }

    public function permiso($usuario_id){
        $relacion = $this->user_diagrama()->where('user_id', $usuario_id)->first();
        $relacion = $relacion->editar;
        return $relacion;
    }
}
