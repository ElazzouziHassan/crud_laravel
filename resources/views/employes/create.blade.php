@extends('employes.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New Emplyé</div>
  <div class="card-body">
       
      <form action="{{ url('employe') }}" method="post">
        {!! csrf_field() !!}
        <label>Nom</label></br>
        <input type="text" name="nom" id="nom" class="form-control"></br>
        <label>Prenom</label></br>
        <input type="text" name="prenom" id="prenom" class="form-control"></br>
        <label>Company</label></br>
        <input type="text" name="company" id="company" class="form-control"></br>
        <label>Ville</label></br>
        <input type="text" name="ville" id="ville" class="form-control"></br>
        <label>Salaire</label></br>
        <input type="text" name="salaire" id="salaire" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop