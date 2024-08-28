@extends('layout')
@section('content')
<div class="card m-4" style="width: 18rem;">
    <div class="card-header">
        Detail Cloth
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Name : {{ $clothing->name }}</li>
        <li class="list-group-item">Stock : {{ $clothing->stock }}</li>
        <li class="list-group-item">Description : {{ $clothing->description }}</li>
    </ul>
</div>
@endsection
