@extends('layouts.app')
@section('content')
<body>
<!-- style="background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)); background-size: cover;"  -->

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
                    {{ Auth::user()->salary_range }}
                @endguest
                </h5>
            </div>
        </div>
    </div>

<div class="col-md-12">
<a></a>
            <div class="container p-4">
                 <div class="row">
                @foreach($recruitment_notices as $recruitment_notice)
                        <div class="col-sm-4">
                            <div class="card h-100 card bg-dark text-white" Style="outline: 5px groove black;">
                                <div class="card-body">
                                    
                                    <h5 class="card-title">salary_range: {{$recruitment_notice->salary_range}}</h5>
                                    <h5 class="card-title">career_level: {{$recruitment_notice->career_level}}</h5>
                                    <h5 class="card-title">Description: {{$recruitment_notice->job_description}}</h5>
                                    <h5 class="card-title">requirements: {{$recruitment_notice->requirements}}</h5>
                                    <h5 class="card-title">job_type: {{$recruitment_notice->job_type}}</h5>
                                    <h5 class="card-title">qualification: {{$recruitment_notice->qualification}}</h5>
                                    <h5 class="card-title">job_specialization: {{$recruitment_notice->job_specialization}}</h5>
                                </div>
                            </div>
                        </div>
                @endforeach       
                    </div>
               
                <div>{{ $recruitment_notices->links()}}</div>  
                
            </div>
         </div>
         </body>
@endsection    