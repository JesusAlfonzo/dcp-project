@extends('template')

@section('title','Crear Producto')

@push('css')

<style>
    #descripcion {
        resize: none;
    }
</style>

@endpush

@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4 text-center">Crear Producto</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('panel') }}">Inicio</a></li>
        <li class="breadcrumb-item"><a href="{{ route('producto.index')}}">Categorías</a></li>
        <li class="breadcrumb-item active">Crear Producto</li>
    </ol>

    <div class="container w-100 border border-3 border-primary rounded p-4 mt-3">
        <form action="{{ route('producto.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">

                <!-- codigo -->
                <div class="col-md-6">
                    <label for="codigo" class="form-label">Código</label>
                    <input type="text" name="codigo" id="codigo" class="form-control" value="{{old('codigo')}}">
                    @error('codigo')
                    <small class="text-danger">{{'*' .$message}}</small>
                    @enderror
                </div>

                <!-- nombre  -->
                <div class="col-md-6">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre')}}">
                    @error('nombre')
                    <small class="text-danger">{{'*'. $message}}</small>
                    @enderror
                </div>

                <!-- descripcion -->
                <div class="col-md-6">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea name="descripcion" id="descripcion" class="form-control" rows="4">{{old('descripcion')}}</textarea>
                    @error('descripcion')
                    <small class="text-danger">{{'*'. $message}}</small>
                    @enderror
                </div>

                <!-- Fecha de Vencimiento -->
                <div class="col-md-2">
                    <label for="fecha_vencimiento" class="form-label">Fecha de Vencimiento:</label>
                    <input type="date" name="fecha_vencimiento" id="fecha_vencimiento" class="form-control" value="{{old('fecha_vencimiento')}}">
                    @error('fecha_vencimiento')
                    <small class="text-danger">{{'*'. $message}}</small>
                    @enderror
                </div>

                <!--Imagen -->
                <div class="col-md-2">
                    <label for="img_path" class="form-label">Imagen</label>
                    <input type="file" name="img_path" id="img_path" class="form-control" accept="Image/" >
                    @error('img_path')
                    <small class="text-danger">{{'*'. $message}}</small>
                    @enderror
                </div>

                <!-- marcas -->

                 <!-- formulario para categorias -->

                 <!-- presentacion -->

                 <!-- formulario para presentacion -->

                <!-- Categorias -->

                <!-- formulario para categorias -->


                <div>
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>

@endsection

@push('js')

@endpush