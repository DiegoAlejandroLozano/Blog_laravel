@extends('blogLayout.principal')

@section('contenido')

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                
                <h1>Administración de nuestro blog</h1>

                <form action="{{ route('guardarImg') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="imagen">Selecciona su imagen</label>
                        <input type="file" id="imagen" name="imagen" class="form-control">
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Enviar" class="btn btn-primary">
                    </div>

                </form>

            </div>
        </div>
    </div>

@endsection