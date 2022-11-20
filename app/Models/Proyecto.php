<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;
    protected $table = 'proyectos';
    
    protected $fillable = ['url','nombre', 'favorito','descripcion', 'terminado', 'fecha_fin', 'user_id'];

    public function diagramas(){
        return $this->hasMany(Diagrama::class);
    }

    public function tiempoRestante(){
        return Carbon::createFromTimestamp(strtotime($this->fecha_fin))->diff(\Carbon\Carbon::now())->days;
    }

    public function porcentajeTerminado(){
        if(count($this->diagramas)){
            return (int) (count($this->diagramas()->where('terminado',1)->get()) * 100 / count($this->diagramas));
        }
        return 0;
    }
}
