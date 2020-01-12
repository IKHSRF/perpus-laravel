@extends('penerbits.siswa')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Lihat Penerbit</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('penerbits.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
   <br>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Penerbit ID:</strong>
                {{ $Penerbit->penerbitid }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Penerbit :</strong>
                {{ $Penerbit->penerbit }}
            </div>
        </div>
    </div>
@endsection