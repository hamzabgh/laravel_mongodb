@extends('app')

@section('content')
<div class="modal-header border-0 p-0 mb-2">
  <h3 class="mb-0">create commande</h3>
</div>    
<form action="{{route('commande.store')}}" method="POST">
  @csrf
  @include('commande._form',[
    'button_label' => 'Create Command'
  ])
</form> 

@endsection