@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      {{ Form::model($requisitos,['route'=>['requisitos.update',$requisitos->rqID],'method'=>'PATCH']) }}
      @include('requisitos.form_master')
      {{ Form::close() }}
    </div>
  </div>
@endsection