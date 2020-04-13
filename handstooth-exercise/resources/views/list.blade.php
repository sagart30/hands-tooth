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
  <style>body{font-size:0.8em;}</style>
</head>
<body>

<div class="table-responsive">
  <h2>Articles List</h2>
         
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Coupan Id</th>
        <th>Company Name</th>
        <th>Marchant</th>
        <th>Category</th>
        <th>Network</th>
        <th>Types</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Status</th>
        <th>&nbsp;</th>
      </tr>
    </thead>
    <tbody>
	@if($articles)
		@foreach ($articles as $key => $val)
		  <tr>
			<td><a href="{{url('article/edit/'.$val->id)}}"><?= $val->nCouponID ?></a></td>
			<td><?= $val->cLabel ?></td>
			<td><?= $val->cMerchant ?></td>
			<td><?= @categoryData($val->aCategoriesV2) ?></td>
			<td><?= $val->cNetwork ?></td>
			<td><?= @typeData($val->aTypes) ?></td>
			<td><?= date("d M Y", strtotime($val->dtStartDate)) ?></td>
			<td><?= date("d M Y", strtotime($val->dtEndDate)) ?></td>
			<td><button type="button" class="btn btn-warning"><?= $val->cStatus ?></button></td>
			<td><a href="{{url('article/edit/'.$val->id)}}" class="btn btn-primary">Start Writing</a></td>
		  </tr>
		@endforeach  
	@else
		<tr>
			<td colspan="3">No data found</td>
		</tr>
	@endif
    </tbody>
  </table>
</div>

</body>
</html>
