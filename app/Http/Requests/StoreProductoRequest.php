<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Unique;

class StoreProductoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        // return [
        //     'codigo'=> 'required|unique:productos,codigo,|max:50',
        //     'nombre'=> 'required|unique:productos,nombre,|max:80',
        //     'descripcion'=> 'nullable|max:255',
        //     'fecha_vencimiento'=> 'nullable|date',
        //     'img_path'=> 'nullable|image|mimes:png,jpg,jpeg|max:2048',
        //     'marca_id' => 'nullable|exists:marcas,id',
        //     'presentacione_id' => 'nullable|exists:presentaciones,id',
        //     'caracteristicas' => 'required'
        // ];
    }

    public function attributes()
    {
        // return [
        //     'marca_id' => 'marca',
        //     'presentacione_id' => 'presentacion',
        // 
        // ];
    }

    public function messages()
    {
        return [
            // 'codigo.required'=> 'El :attribute es obligatorio',
            // 'codigo.unique'=> 'El :attribute ya existe',
            // 'codigo.max'=> 'El :attribute no puede tener más de 50 caracteres',
            // 'nombre.required'=> 'El :attribute es obligatorio',
            // 'nombre.unique'=> 'El :attribute ya existe',
            // 'nombre.max'=> 'El :attribute no puede tener más de 80 caracteres',
            // 'descripcion.max'=> 'La :attribute no puede tener más de 255 caracteres',
            // 'fecha_vencimiento.date'=> 'La :attribute no es una fecha válida',
            // 'img_path.image'=> 'La :attribute no es una imagen válida',
            // 'img_path.mimes'=> 'La :attribute debe ser un archivo de tipo: png, jpg, jpeg',
            // 'img_path.max'=> 'La :attribute no puede tener más de 2048 caracteres',
            // 'categoria_id.required'=> 'La :attribute es obligatoria',
            // 'categoria_id.exists'=> 'La :attribute no existe'
        ];
    }
}
