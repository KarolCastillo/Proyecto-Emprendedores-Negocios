@extends('layout')

@section('contenido')


    <div class="p-3 bg-white mb-4">
        <h3 class="text-center">PREDIO</h3>

        <div class="table-responsive">
            <table class="table table-striped text-center">
                <thead>
                    <tr class="bg-info">
                    <th scope="col">PLACA</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">FECHA</th>
                    <th scope="col">HORA</th>
                    <th scope="col">SECTOR</th>
                    <th scope="col">SERVICIO</th>
                </tr>
                </thead>
                <tbody>
                @foreach($customers as $customer)
                    <tr>
                        <td>{{$customer->placa}}</td>
                        <td>{{$customer->nombre}}</td>
                        <td>{{$customer->fecha}}</td>
                        <td>{{$customer->hora}}</td>
                        <td>{{$customer->sector}}</td>
                        <td>{{$customer->servicio}}</td>
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

