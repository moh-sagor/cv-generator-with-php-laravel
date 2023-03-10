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
        <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
            @csrf 
      <div class="row">
        <a class="btn btn-sm btn-info" href="{{route('showcv')}}">Dashboard</a>
        <div class="col-md-8 col-8">
            <label for="name" class="col-sm-3 col-form-label">Name: </label>
                <div class="col-sm-8">
                    <input type="text" class=" name form-control" id="name" name="name" placeholder="Enter Your Name">
                </div>
            <label for="address" class="col-sm-3 col-form-label">Address: </label>
                <div class="col-sm-8">
                    <input type="text" class="address form-control" id="address" name="address" placeholder="Enter Your Address">
                </div>
            <label for="phone" class="col-sm-3 col-form-label">Phone: </label>
                <div class="col-sm-8">
                    <input type="text" class="phone form-control" id="phone" name="phone" placeholder="Enter Your Phone">
                </div>
            <label for="email" class="col-sm-3 col-form-label">Email: </label>
                <div class="col-sm-8">
                    <input type="text" class="email form-control" id="email" name="email" placeholder="Enter Your Email">
                </div>
            <label for="github" class="col-sm-3 col-form-label">GitHub: </label>
                <div class="col-sm-8">
                    <input type="text" class=" github form-control" id="github" name="github" placeholder="Enter Your GitHub Link">
                </div>
            <label for="linkedin" class="col-sm-3 col-form-label">LinkedIn: </label>
                <div class="col-sm-8">
                    <input type="text" class="linkedin form-control" id="linkedin" name="linkedin" placeholder="Enter Your Linkedin Link">
                </div>
        </div>
        <div class="col-md-3 col-3 mt-4">
            <label for="image" class="col-sm-3 col-form-label">Image: </label>
            <div class="col-sm-8">
                <input type="file" class="image form-control" id="image" name="image" >
            </div>
        </div>
      </div>
      <div class="career-objectives">
        <h2 class="text-info">Career Objectives</h2>
        <label for="carrer" class="col-sm-5 col-form-label">Carrer Objectives: </label>
            <div class="col-sm-12">
                <input type="text" class="carrer form-control" id="carrer" name="carrer" placeholder="Enter your Carrer Object" >
            </div>
      </div>
      <div class="skills">
        <h2 class="text-info">Skills</h2>
        <label for="skill" class="col-sm-5 col-form-label">Skills: </label>
        <div class="col-sm-12">
            <input type="text" class="form-control skill_1" id="skill_1" name="skill_1" placeholder="Enter your Skills" >
            <input type="text" class="form-control skill_2 " id="skill_2" name="skill_2" placeholder="Enter your Skills" >
            <input type="text" class="form-control skill_3" id="skill_3" name="skill_3" placeholder="Enter your Skills" >
            <input type="text" class="form-control skill_4" id="skill_4" name="skill_4" placeholder="Enter your Skills" >
            <input type="text" class="form-control skill_5" id="skill_5" name="skill_5" placeholder="Enter your Skills" >
        </div>
      </div>
      <div class="projects">
        <h2 class="text-info">Projects</h2>
        <label for="project" class="col-sm-5 col-form-label">Projects: </label>
        <div class="col-sm-12">
            <input type="text" class="form-control project_1" id="project_1" name="project_1" placeholder="Enter your projects" >
            <input type="text" class="form-control project_2" id="project_2" name="project_2" placeholder="Enter your projects" >
            <input type="text" class="form-control project_3" id="project_3" name="project_3" placeholder="Enter your projects" >
        </div>
      </div>
      <div class="education mb-4">
        <h2 class="text-info">Education</h2>
        <div class="row">
          <div class="col-8">
            <h5 class="edu-1">Bachelor of Science, Computer Science and Engineering</h5>
            <div class="col-sm-12">
                <input type="text" class="bsc form-control" id="bsc" name="bsc" placeholder="Enter your University" >
            </div>
          </div>
          <div class="col-4">
            <h5 class="edu-1-pass">CGPA</h5>
            <div class="col-sm-12">
                <input type="text" class="bsc_res form-control" id="bsc_res" name="bsc_res" placeholder="Enter your CGPA" >
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <h5 class="edu-2">Higher Secondary School Certificate (H.S.C)</h5>
            <div class="col-sm-12">
                <input type="text" class="hsc form-control" id="hsc" name="hsc" placeholder="Enter your College" >
            </div>
          </div>
          <div class="col-4">
            <h5 class="edu-2-pass">GPA</h5>
            <div class="col-sm-12">
                <input type="text" class="hsc_res form-control" id="hsc_res" name="hsc_res" placeholder="Enter your GPA" >
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <h5 class="edu-3">Secondary School Certificate (S.S.C)</h5>
            <div class="col-sm-12">
                <input type="text" class="ssc form-control" id="ssc" name="ssc" placeholder="Enter your School" >
            </div>
          </div>
          <div class="col-4">
            <h5 class="edu-2-pass">GPA</h5>
            <div class="col-sm-12">
                <input type="text" class="ssc_res form-control" id="ssc_res" name="ssc_res" placeholder="Enter your GPA" >
            </div>
          </div>
          <div class="row">
            <label class="col-sm-3 col-form-label"></label>
            <div class="col-sm-9">
                <button type="submit" class="btn btn-info px-5 offset-4 mt-4">Generate CV</button>
            </div>
        </div>
        </div>
          
      </div>
        </form>
    </div>
    <!-- Bootstrap Bundle  -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
