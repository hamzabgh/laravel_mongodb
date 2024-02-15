@extends('app')

@section('content')
<div class="modal-header border-0 p-0 mb-2">
  <h3 class="mb-0">create artical</h3>
</div>    
<form action="{{route('artical.update',$articles->_id)}}" method="POST">
  @csrf
  @method('put')
  @include('artical._form',[
    'button_label' => 'Update Articals'
  ])
</form> 

@endsection