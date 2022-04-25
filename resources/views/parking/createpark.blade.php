@extends('layout')
@section('contenido')
    <div >
        <!--MENSAJE FLASH-->
        @if(session('parqueoguardado'))
            <div class="alert alert-success">
                {{ session('parqueoguardado') }}
            </div>
        @endif

        <!--VALIDACION DE ERRORES-->
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li> {{$error}} </li>
                    @endforeach
                </ul>
            </div>
        @endif

            <h2 class="text-center"> NUEVO CABEZAL </h2>

        <form action="{{route('save')}}" mathod="POST">
            @csrf
                <div class="mb-2">
                    <label for="exampleFormControlInput1" class="form-label">No. Placa</label>
                    <input type="text" class="form-control" name="placa" id="exampleFormControlInput1" placeholder="8472300">
                </div>
                <div class="mb-2">
                    <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="exampleFormControlInput1" placeholder="Maria Castillo">
                </div>
                <div class="mb-2">
                    <label for="exampleFormControlInput1" class="form-label">Fecha</label>
                    <input type="date" class="form-control" name="fecha" id="exampleFormControlInput1" placeholder="Col. el INDE">
                </div>

                <div class=" mb-2 ">
                    <label for="exampleFormControlInput1" class="form-label">Hora</label>
                    <input type="time" class="form-control" name="hora" id="exampleFormControlInput1" placeholder="Ejemplo@gmail.com">
                </div>

                <div class="mb-2">
                    <label for="exampleFormControlInput1" class="form-label">Sector</label>
                    <select class="form-select" name="sector" id="exampleFormControlInput1">
                        <option>A1</option>
                        <option>A2</option>
                        <option>B1</option>
                        <option>B2</option>
                        <option>C1</option>
                        <option>C2</option>
                    </select>
                </div>

                <div class="mb-2">
                    <label for="exampleFormControlInput1" class="form-label">Servicio</label>
                    <select   class="form-select" name="servicio" id="exampleFormControlInput1">
                        <option>Ninguno</option>
                        <option>Lavado</option>
                        <option>Cambio de aceite y filtro</option>
                        <option>Revision tecnica</option>
                    </select>
                </div>

                <div class="mb-2">
                    <button type="submit" class="btn btn-success col-md-3 mt-3 mr-2 offset">INGRESAR</button>
                    <a type="button " href="{{ url('/listar-Predio')}}" class="btn btn-danger col-md-3 mt-3 offset float-right">VOLVER / CANCELAR </a>

                </div>
        </form>

    </div>
@endsection
