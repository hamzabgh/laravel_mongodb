@extends('app')

@section('content')
<div class="modal-header border-0 p-0 mb-2">
  <h3 class="mb-0">update commandes</h3>
</div>    
<form action="{{route('commande.update',$commandes->_id)}}" method="POST">
  @csrf
  @method('put')
  @include('commande._form',[
    'button_label' => 'Update Command'
  ])
</form> 

@endsection