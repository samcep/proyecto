<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repuesto extends Model
{
    use HasFactory;

    protected $fillable = ['id','nombreRepuesto','descripcionRepuesto','precioRepuesto'];
    //relacion  muchos a muchos detalle solliciutd

    public function detalleSolicitudes(){
        return $this->belongsToMany(DetalleSolicitud::class);
    }
}
