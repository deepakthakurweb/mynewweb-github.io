<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <br><br>
    @if ($message = Session::get('image'))
              <img src="images/{{ Session::get('image') }}" class="mb-2" style="width:400px;height:200px;">
              @endif
    @include('alert.messages')
    {{-- <form action="" method="post"></form> --}}
    <table class="table-hover table borderd table-striped table-shadow">
        <a href="{{ route('employee.create')}}" class="btn btn-primary mb-3">Insert Data</a>
        <thead>

          <tr>
            <th scope="col">ID</th>
            <th scope="col">NAME</th>
            <th scope="col">DENDER</th>
            <th scope="col">SALARY</th>
            <th scope="col">DESIGNATION</th>
            <th scope="col">IMAGE</th>
            <th scope="col">DELETE</th>
            <th scope="col">UPDATE</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($student as $stud)
                
            
          <tr>
            <th scope="row">{{$stud['id']}}</th>
            <td>{{$stud['name']}}</td>
            <td>{{$stud['gender']}}</td>
            <td>{{$stud['salary']}}</td>
            <td>{{$stud['designation']}}</td>
            <td>
            
              <img src="{{ asset('images/'.$stud['image_name']) }}" width="150" height="150" alt="Image">
             
            </td>
            <td>
              <form action="{{ route('employee.destroy', $stud->id)}}" onsubmit="return onsub()" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger"  type="submit">Delete</button>
              </form>
          </td>
            <td><a href="{{ route('employee.edit',$stud->id)}}" class="btn btn-success">Edit</a></td>
          </tr>
          @endforeach
        </tbody>
    </table>
    {{ $student->links() }}

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
      function onsub(){
        return confirm('Are you sure want to Delete data ?');
      }
    </script>
  </body>
</html>