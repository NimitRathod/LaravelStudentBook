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
    <h2>Address Output</h2>
    <div class="form-group">
      <label for="name">Name</label>
      : {{ $request->name }}
    </div>
    <div class="form-group">
      <label for="email">EMail</label>
      : {{ $request->email }}
    </div>
    <div class="form-group">
      <label for="address">Address</label>
      : {{ $request->address }}
    </div>
  </div>
</body>
</html>
