<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de producto</title>
    <!-- Include your stylesheet here -->
    <link rel="stylesheet" href="{{ public_path('dist/css/adminlte.min.css') }}">
</head>
</head>
<body>
    
    
<h4 class="text-center">  StockMaster </h4> 

<div class="container-fluid">
        <dv class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Producto') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('productos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">

                                  {{ __('Create New') }}

                                  <a href="{{url('imprimirProductos')}}" class="pull-right"> 
                                        <button class="btn btn-success">Imprimir Pdf</button> </a>
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre Producto</th>
										<th>Descripcion</th>
										<th>Precio</th>
										<th>Existencias</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($productos as $producto)
                                        <tr>
                                            
                                            
											<td>{{ $producto->Nombre_Producto }}</td>
											<td>{{ $producto->Descripcion }}</td>
											<td>{{ $producto->Precio }}</td>
											<td>{{ $producto->Existencias }}</td>
                                            <td>
                                                <form action="{{ route('productos.destroy',$producto->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('productos.show',$producto->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('productos.edit',$producto->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
</body>
</html>

