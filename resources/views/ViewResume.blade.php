@extends('layouts.app')
@section('content')
<body>
<!-- style="background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)) background-size: cover;"    -->

@if(Session::has('success'))           
        <div class="alert alert-success" role="alert">
            {{ Session::get('success')}}
        </div>       
@endif 

<div class="container-fluid">
        <div class="row">
            <div class="px-3">
                <img src="{{ asset('images/icon.png')}}" alt="" class="img-fluid" style="border-radius: 50%; float: left;" width="50%">
                <h5 style="padding-left: 11%;">Name:
                @guest
                    @if (Route::has('login'))

                    @endif

                    @if (Route::has('register'))

                    @endif
                @else
                    {{ Auth::user()->name }}
                @endguest
                </h5>
            </div>
        </div>
    </div>
    <br>
<br><br>
<br>
<div class="col-md-12">
<a></a>
            <div class="container p-4">
                 <div class="row">
                @foreach($resumes as $resume)
                        <div class="col-sm-4">
                            <div class="card h-100 card bg-dark text-white" Style="outline: 5px groove black;">
                                <div class="card-body">

                                    <h5 class="card-title">name: {{$resume->name}}</h5>
                                    <h5 class="card-title">birthdate: {{$resume->birthdate}}</h5>
                                    <h5 class="card-title">phone_number: {{$resume->phone_number}}</h5>
                                    <h5 class="card-title">email: {{$resume->email}}</h5>
                                    <h5 class="card-title">education_level: {{$resume->education_level}}</h5>
                                    <h5 class="card-title">address: {{$resume->address}}</h5>
                                    <h5 class="card-title">self_evaluation: {{$resume->self_evaluation}}</h5>
                                    <h5 class="card-title">work_experiene: {{$resume->work_experiene}}</h5>

                                </div>
                            </div>
                        </div>
                @endforeach       
                    </div>
               
                <div>{{ $resumes->links()}}</div>  
                
            </div>
         </div>
         </body>
@endsection    