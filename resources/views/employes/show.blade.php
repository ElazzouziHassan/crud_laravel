@extends('employes.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Employes</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Nom : {{ $employes->nom }}</h5>
        <p class="card-text">Prenom : {{ $employes->prenom }}</p>
        <p class="card-text">Company : {{ $employes->company }}</p>
        <p class="card-text">ville : {{ $employes->ville }}</p>
        <p class="card-text">salaire : {{ $employes->salaire }}</p>
  </div>
    </hr>
  </div>
</div>