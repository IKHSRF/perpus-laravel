@extends('siswas.layout')
@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <div class="panel">
								<div class="panel-heading">
                                    <h3 class="panel-title">Data siswa</h3>
                                    <div class="pull-right">
                                        <a class="btn btn-success" href="{{ route('siswas.create') }}"> Tambah siswa</a>
                                    </div>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
										<tr>
                                            <th>No</th>
                                            <th>NIS</th>
                                            <th>Nama</th>
                                            <th>Rayon</th>
                                            <th>Rombel</th>
                                            <th width="280px">Action</th>
                                        </tr>
										</thead>
										<tbody>
                                        @foreach ($siswas as $siswa)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $siswa->nis }}</td>
                                                <td>{{ $siswa->nama }}</td>
                                                <td>{{ $siswa->rayon }}</td>
                                                <td>{{ $siswa->rombel }}</td>
                                                <td>
                                                    <form action="{{ route('siswas.destroy',$siswa->id) }}" method="POST">
                                    
                                                        <a class="btn btn-info" href="{{ route('siswas.show',$siswa->id) }}">Show</a>
                                        
                                                        <a class="btn btn-primary" href="{{ route('siswas.edit',$siswa->id) }}">Edit</a>
                                    
                                                        @csrf
                                                        @method('DELETE')
                                        
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
										</tbody>
									</table>
								</div>
							</div>
                </div>
            </div>
        </div>
    </div>
</div>
{!! $siswas->links() !!}
@stop
@section('content1')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dahsboard</title>
</head>
<body>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>SISWA</h2>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Rayon</th>
            <th>Rombel</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($siswas as $siswa)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $siswa->nis }}</td>
            <td>{{ $siswa->nama }}</td>
            <td>{{ $siswa->rayon }}</td>
            <td>{{ $siswa->rombel }}</td>
            <td>
                <form action="{{ route('siswas.destroy',$siswa->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('siswas.show',$siswa->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('siswas.edit',$siswa->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $siswas->links() !!}
</body>
</html>
   
      
@endsection