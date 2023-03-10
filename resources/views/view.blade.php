<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <title>CV Maker</title>
  </head>
  <body>
    <div class="container mt-5 h-auto w-75">
      <div class="row">
        <div class="col-md-8 col-8">
          <h1 class="name text-info">{{$cv->name}}</h1>
          <p class="address">
            {{$cv->address}}
          </p>
          <br />
          <p>Phone : {{$cv->phone}}</p>
          <p>Email : {{$cv->email}}</p>
          <p>Github : {{$cv->github}}</p>
          <p>LinkedIn : {{$cv->linkedin}}</p>
        </div>
        <div class="col-md-3 col-3 mt-4">
          <img class="rounded-circle" height="220" width="220" src="{{asset('assets/'.$cv->image)}}" alt="{{$cv->name}}" />
        </div>
      </div>
      <div class="career-objectives">
        <h2 class="text-info">Career Objectives</h2>
        <p class="carrer-text text-justify">
          {{$cv->carrer}}
        </p>
      </div>
      <div class="skills">
        <h2 class="text-info">Skills</h2>
        <ul>
          <li>{{$cv->skill_1}}</li>
          <li>{{$cv->skill_2}}</li>
          <li>{{$cv->skill_3}}</li>
          <li>{{$cv->skill_4}}</li>
          <li>{{$cv->skill_5}}</li>
        </ul>
      </div>
      <div class="projects">
        <h2 class="text-info">Projects</h2>
        <ul>
          <li>{{$cv->project_1}}</li>
          <li>{{$cv->project_2}}</li>
          <li>{{$cv->project_3}}</li>
          
      </div>
      <div class="education mb-4">
        <h2 class="text-info">Education</h2>
        <div class="row">
          <div class="col-8">
            <h5 class="edu-1">Bachelor of Science, Computer Science and Engineering</h5>
            <p class="varsity">{{$cv->bsc}}</p>
          </div>
          <div class="col-4">
            <h5 class="edu-1-pass">Passing Year 2022</h5>
            <p class="cgpa-varsity">{{$cv->bsc_res}}</p>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <h5 class="edu-2">Higher Secondary School Certificate (H.S.C)</h5>
            <p class="collage">{{$cv->hsc}}</p>
          </div>
          <div class="col-4">
            <h5 class="edu-2-pass">Passing Year 2016(Science)</h5>
            <p class="gpa-collage">{{$cv->hsc_res}}</p>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <h5 class="edu-3">Secondary School Certificate (S.S.C)</h5>
            <p class="collage">{{$cv->ssc}}</p>
          </div>
          <div class="col-4">
            <h5 class="edu-2-pass">Passing Year 2014(Science)</h5>
            <p class="gpa-collage">{{$cv->ssc_res}}</p>
          </div>
        </div>
          
      </div>
     
    </div>
    <!-- Bootstrap Bundle  -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
