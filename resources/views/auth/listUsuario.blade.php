@extends('layout')

@section('contenido')
    <div class="p-3 bg-white mb-3">
        <h3 class="text-center">Lista de Usuario</h3>

        <div class="table-responsive">
            <table class="table table-hover text-center">
                <thead>
                <tr>
                    <th scope="col">CODIGO USUARIO</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">CORREO</th>

                </tr>
                </thead>
                <tbody>
                @foreach($customers as $customer)
                    <tr>
                        <td>{{$customer->id}}</td>
                        <td>{{$customer->name}}</td>
                        <td>{{$customer->email}}</td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center">
            {{ $customers->links() }}
        </div>
    </div>
@endsection
