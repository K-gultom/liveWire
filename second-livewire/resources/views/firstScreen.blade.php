@extends('main')

@section('title')
First Screen
@endsection

@section('content') 

<div class = "container-fluid" > 
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page"><h1>Home</h1></li>
        </ol>
    </nav>


</div>

@livewire('test-post')

@endsection