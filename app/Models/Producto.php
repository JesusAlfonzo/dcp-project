<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    public function compras() {
        return $this->belongsToMany(Compra::class)->withTimestamps()
        ->withPivot('cantidad', 'precio_compra', 'precio_venta');
    }

    public function ventas() {
        return $this->belongsToMany(Venta::class)->withTimestamps()
        ->withPivot('cantidad', 'precio_venta', 'descuento');
    }

    public function categorias() {
        return $this->belongsToMany(Categoria::class)->withTimestamps();
    }

    public function marcas() {
        return $this->belongsTo(Marca::class);
    }

    public function presentacione() {
        return $this->belongsTo(Presentacione::class);
    }

    // protected $fillable =['codigo', 'nombre', 'descripcion','marca_id', 'presentacione_id', 'fecha_vencimiento', 'img_path'];

    // public function handleUploadeImage($image) {
    //     $file = $image;
    //     $name = time() . $file->getClientOriginalName();
    //     $file->move(public_path() . '/img/productos/', $name);

    //     return $name;
    //     }
}
