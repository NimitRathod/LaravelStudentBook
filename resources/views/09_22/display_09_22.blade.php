<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="container">
    <h2>Show Data</h2>
    <a href="{{ route('student.create') }}" class="btn btn-info"> Create </a>
    <div class="table-responsive">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>Name</th>
            <th>EMail</th>
            <th>Address</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $user)
          <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->address }}</td>
            <td>
              <a href="{{url('/student/' . $user->id . '/edit') }}" class="btn btn-info">Edit</a>
            </td>
            <td>
              <a href="" class="btn btn-danger">Delete</a>
            </td>
          </tr>      
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

</body>
</html>

