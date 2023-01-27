<h1>hello !!</h1>


{{-- <form action=" {{ route('employee.update', $stud->id) }} " method="post">
  @method('PATCH') 
  @csrf
  <input type="text" name="id"value="{{$stud['id']}}" id=""><br>
  <input type="text" name="name" value="{{$stud['name']}}"id=""><br>
  <input type="text" name="gender" value="{{$stud['gender']}}"id=""><br>
  <input type="text" name="salary" value="{{$stud['salary']}}"id=""><br>
  <input type="text" name="designation" value="{{$stud['designation']}}"id=""><br>
  <input type="submit" value="Update">
</form> --}}
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Hello, world!</title>
    <style>
        
        .container{
            background-color: #ccc;
            border: 1px solid black;
        }
    </style>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-2">
                <form action=" {{ route('employee.update', $stud->id)}}" enctype="multipart/form-data" method="post">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Enter your Name</label>
                      <input type="text" class="form-control" value="{{$stud['name']}}" name="name" id="exampleFormControlInput1" placeholder="">
                      @error('name')
                      <span style="color: red">{{$message}}</span>     
                      @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Gender</label>
                        <input type="text" class="form-control" value="{{$stud['gender']}}" name="gender" id="exampleFormControlInput1" placeholder="">
                        @error('gender')
                        <span style="color: red">{{$message}}</span>     
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Salary</label>
                        <input type="text" class="form-control" value="{{$stud['salary']}}" name="salary" id="exampleFormControlInput1" placeholder="">
                        @error('salary')
                        <span style="color: red">{{$message}}</span>     
                        @enderror
                    </div>
                    
                    <div class="form-group">
                      <input 
                        
                        type="file" 
                        name="image_name" 
                        id="name"
                        class="form-control @error('name') is-invalid @enderror">
                      @error('image')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                      <img src="{{asset('images/'.$stud['image_name'])}}" width="50" height="50" alt="image...">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Enter Your Designation</label>
                        <input type="text" class="form-control" value="{{$stud['designation']}}" name="designation" id="exampleFormControlInput1" placeholder="">
                        @error('desig')
                        <span style="color: red">{{$message}}</span>     
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-block " value="Update">
                    </div>
                  </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>