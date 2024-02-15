@extends('app')

@section('content')
<div class="modal-header border-0 p-0 mb-2">
  <h3 class="mb-0">create Artical</h3>
</div>    
<form action="{{route('artical.store')}}" method="POST">
  @csrf
  @include('artical._form',[
    'button_label' => 'Create Artical'
  ])
</form> 

@endsection