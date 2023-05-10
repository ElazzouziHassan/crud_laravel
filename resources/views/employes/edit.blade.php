@extends('employes.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Employé</div>
  <div class="card-body">
       
      <form action="{{ url('employe/' .$employes->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$employes->id}}" id="id" />
        <label>nom</label></br>
        <input type="text" name="nom" id="nom" value="{{$employes->nom}}" class="form-control"></br>
        <label>prenom</label></br>
        <input type="text" name="prenom" id="prenom" value="{{$employes->prenom}}" class="form-control"></br>
        <label>company</label></br>
        <input type="text" name="company" id="company" value="{{$employes->company}}" class="form-control"></br>
        <label>ville</label></br>
        <input type="text" name="ville" id="ville" value="{{$employes->ville}}" class="form-control"></br>
        <label>salaire</label></br>
        <input type="text" name="salaire" id="salaire" value="{{$employes->salaire}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop