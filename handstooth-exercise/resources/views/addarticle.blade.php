<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</head>
<body>

<div class="container">
<form action="{{url('article/save')}}" method="post" id="frmupdate" name="frmupdate">
  <div class="form-group">
    <label for="cLabel">cLabel:</label>
    <input type="cLabel" class="form-control" placeholder="Enter cLabel" id="cLabel" name="cLabel">
  </div>
  <div class="form-group">
    <label for="cRestrictions">cRestrictions:</label>
    <input type="cRestrictions" class="form-control" placeholder="Enter cRestrictions" id="cRestrictions" name="cRestrictions">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>

</body>
</html>
