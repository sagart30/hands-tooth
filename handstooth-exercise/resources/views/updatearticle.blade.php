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
<table class="table table-bordered">
    <tr>
		<th>nCouponID</th><td><?= $articles->nCouponID ?></td>
		<th>cMerchant</th><td><?= $articles->cMerchant ?></td>
		<th>nMerchantID</th><td><?= $articles->nMerchantID ?></td>
		<th>nMasterMerchantID</th><td><?= $articles->nMasterMerchantID ?></td>
	</tr>
    <tr>
		<th>cNetwork</th><td><?= $articles->cNetwork ?></td>
		<th>cStatus</th><td><?= $articles->cStatus ?></td>
		<th>cImage</th><td><?= $articles->cImage ?></td>
		<th>cCode</th><td><?= $articles->cCode ?></td>
	</tr>
    <tr>
		<th>dtStartDate</th><td><?= @dateView($articles->dtStartDate) ?></td>
		<th>dtEndDate</th><td><?= @dateView($articles->dtEndDate) ?></td>
		<th>cLastUpdated</th><td><?= @dateView($articles->cLastUpdated) ?></td>
		<th>cPixelHTML</th><td><?= $articles->cPixelHTML ?></td>
	</tr>
    <tr>
		<th>fSalePrice</th><td><?= $articles->fSalePrice ?></td>
		<th>fWasPrice</th><td><?= $articles->fWasPrice ?></td>
		<th>fDiscount</th><td><?= $articles->fDiscount ?></td>
		<th>nPercent</th><td><?= $articles->nPercent ?></td>
	</tr>
    <tr>
		<th>fThreshold</th><td><?= $articles->fThreshold ?></td>
		<th>fRating</th><td><?= $articles->fRating ?></td>
		<th>bStarred</th><td><?= $articles->bStarred ?></td>
		<th>aBrands</th><td><?= $articles->aBrands ?></td>
	</tr>
    <tr>
		<th>aLocal</th><td><?= $articles->aLocal ?></td>		
		<th>nLinkID</th><td><?= $articles->nLinkID ?></td></tr>
</table>        
<table class="table table-bordered">
	@if($articles->cAffiliateURL)
		<tr><th>cAffiliateURL</th><td><?= $articles->cAffiliateURL ?></td></tr>
	@endif
	@if($articles->cFMTCURL)
	<tr><th>cFMTCURL</th><td><?= $articles->cFMTCURL ?></td></tr>
	@endif
	@if($articles->cDirectURL)
	<tr><th>cDirectURL</th><td><?= $articles->cDirectURL ?></td></tr>
	@endif
	@if($articles->cSkimlinksURL)
    <tr><th>cSkimlinksURL</th><td><?= $articles->cSkimlinksURL ?></td></tr>
	@endif
	@if($articles->cFreshReachURL)
	<tr><th>cFreshReachURL</th><td><?= $articles->cFreshReachURL ?></td></tr>
	@endif
	@if($articles->aCategoriesV2)
	<tr><th>aCategoriesV2</th><td><?= @categoryData($articles->aCategoriesV2) ?></td></tr>
	@endif
	@if($articles->aTypes)
	<tr><th>aTypes</th><td><?= @typeData($articles->aTypes) ?></td></tr>
	@endif
</table>
<form action="{{url('article/save')}}" method="post" id="frmupdate" name="frmupdate">
  <div class="form-group">
    <label for="cLabel">cLabel:</label>
    <input type="text" class="form-control" placeholder="Enter cLabel" id="cLabel" name="cLabel" value="{{$articles->cLabel}}">
    <input type="hidden" class="form-control" id="id" name="id" value="{{$articles->id}}">
  </div>
  <div class="form-group">
    <label for="cRestrictions">cRestrictions:</label>
    <input type="text" class="form-control" placeholder="Enter cRestrictions" id="cRestrictions" name="cRestrictions" value="{{$articles->cRestrictions}}">
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>

</div>

</body>
</html>
