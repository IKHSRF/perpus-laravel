@extends('rayons.siswa')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Rayon</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('rayons.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('rayons.update',$Rayon->id) }}" method="POST">
        @csrf
        @method('PUT')
   
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Rayon ID :</strong>
                <input type="number" name="rayonid" class="form-control" placeholder="Rayon ID" value="{{ $Rayon->rayonid }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Rayon :</strong>
                <input type="text" name="rayon" class="form-control" placeholder="Rayon" value="{{ $Rayon->rayon }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
   
    </form>
@endsection