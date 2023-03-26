@extends('layouts/main')
@section('contenido')
    <div class="container">
        <h1 class="Titulo mt-4 text-center " >
            Altas Bajas
        </h1>
        <div class="row">
            <div class="col">
                <a href="/create" class="btn btn-primary" >Nuevo Ingreso</a>

                <div style="position: relative; text-align: right; vertical-align: top;">
                    <h3>Ganancias</h3>
                    <p style="color: chartreuse">{{$Ganado}}</p>
                </div>

                <hr>
                <div style="position: relative; text-align: right; vertical-align: top;">
                    <h3>Perdidas</h3>
                    <p style="color: rgb(255, 64, 0)" >{{$Gastado}}</p>
                </div>
            
                    
               

                
                
                <table class="table" id="items-table" >

                    <thead>
                        <tr>
                            <th>Tipo</th>
                            <th>Categoria</th>
                            <th>Cantidad</th>
                            <th>Descripcion</th>
                            <th>fecha</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                        <tr>
                            <td>{{$item->tipo}}</td>
                            <td>{{$item->categoria}}</td>
                            <td>{{$item->cantidad}}</td>
                            <td>{{$item->descripcion}}</td>
                            <td>{{$item->fecha}}</td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>


    <script>
        $(function() {
            $('#items-table').DataTable();
        });
        </script>



@endsection
    

