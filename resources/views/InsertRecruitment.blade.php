@extends('layouts.app')
@section('content') 
            <div>
                <div style="text-align:left"> 
                   

    <div class="row">

      <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
       
      </div>

      <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
  
            <form class="subform"  method="post" action="{{ route('addRecruitment') }}" enctype="multipart/form-data">
                @csrf <!-- very important if you didn't insert CSRF, it not allow submit the data-->
                    <h1 Style="text-align:center;">Recruitment Notices</h1>
                    <div class="container p-4">
                        <p>
                            <label for="ID" class="label">Recruitment ID:</label>
                            <input type="text" name="ID" id="ID" class="form-control" placeholder="Please insert Car ID">
                        </p>
                        <p>
                            <label for="salaryRange" class="label">salaryRange:</label>
                            <input type="text" name="salaryRange" id="salaryRange" class="form-control" placeholder="Please insert Car Name">
                        </p>
                        <p>
                            <label for="careerLevel" class="label">careerLevel:</label>
                            <input type="text" name="careerLevel" id="careerLevel" class="form-control" placeholder="Introduce to the car......">
                        </p>
                        <p>
                            <label for="jobDescription" class="label">jobDescription:</label>
                            <input type="number" name="jobDescription" id="jobDescription" class="form-control" placeholder="Please Key in the price /per hour">
                        </p>
                        <p>
                            <label for="requirements" class="label">requirements:</label>
                            <input type="number" name="requirements" id="requirements" class="form-control" placeholder="Please Key in the price /per hour">
                        </p>
                        <p>
                            <label for="jobType" class="label">jobType:</label>
                            <input type="number" name="jobType" id="jobType" class="form-control" placeholder="Please Key in the price /per hour">
                        </p>
                        <p>
                            <label for="qualification" class="label">qualification:</label>
                            <input type="number" name="qualification" id="qualification" class="form-control" placeholder="Please Key in the price /per hour">
                        </p>
                        <p>
                            <label for="jobSpecialization" class="label">jobSpecialization:</label>
                            <input type="number" name="jobSpecialization" id="jobSpecialization" class="form-control" placeholder="Please Key in the price /per hour">
                        </p>

                        <p style="text-align:center">
                            <input type="submit" name="insert" value="Insert" class="btn btn-secondary">
                        </p>
                        </form>
        </div>

        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
        </div>

    </div>

  </div>
@endsection