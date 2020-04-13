<?php

$jsonData 	= file_get_contents("http://localhost/laravel/deals.json");
$arrData 	= json_decode($jsonData,true);

$conn = mysqli_connect("localhost", "root", "", "laravel");
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


foreach($arrData as $key => $val){
	$sql	= "SELECT id FROM articles where nCouponID = ".$val['nCouponID'];
	
	$nCouponID 				= $val['nCouponID'];
	$cMerchant 				= $val['cMerchant'];
	$nMasterMerchantID 		= $val['nMasterMerchantID'];
	$cNetwork 				= $val['cNetwork'];
	$cStatus 				= $val['cStatus'];
	$cLabel 				= $val['cLabel'];
	$cImage 				= $val['cImage'];
	$cRestrictions 			= $val['cRestrictions'];
	$cCode 					= $val['cCode'];
	$dtStartDate 			= $val['dtStartDate'];
	$dtEndDate 				= $val['dtEndDate'];
	$cLastUpdated 			= $val['cLastUpdated'];
	$cCreated 				= $val['cCreated'];
	$cAffiliateURL 			= $val['cAffiliateURL'];
	$cDirectURL 			= $val['cDirectURL'];
	$cSkimlinksURL 			= $val['cSkimlinksURL'];
	$cFreshReachURL 		= $val['cFreshReachURL'];
	$cFMTCURL 				= $val['cFMTCURL'];
	$cPixelHTML 			= $val['cPixelHTML'];
	$aTypes 				= (!empty($val['aTypes'])) ? json_encode($val['aTypes']) : "";
	$fSalePrice 			= $val['fSalePrice'];
	$fWasPrice 				= $val['fWasPrice'];
	$fDiscount 				= $val['fDiscount'];
	$nPercent 				= $val['nPercent'];
	$fThreshold 			= $val['fThreshold'];
	$fRating 				= $val['fRating'];
	$bStarred 				= $val['bStarred'];
	$aBrands 				= (!empty($val['aBrands'])) ? json_encode($val['aBrands']) : "";
	$aLocal 				= (!empty($val['aLocal'])) ? json_encode($val['aLocal']) : "";
	$aCategoriesV2 			= (!empty($val['aCategoriesV2'])) ? json_encode($val['aCategoriesV2']) : "";
	$nLinkID 				= $val['nLinkID'];
	$createdAt 				= time();
	$modifiedAt				= time();

	if(mysqli_num_rows(mysqli_query($conn,$sql))){
		$Qry = "update articles set cMerchant = '$cMerchant', 
			nMasterMerchantID = '$nMasterMerchantID',
			cNetwork = '$cNetwork',
			cStatus = '$cStatus',
			cLabel = '$cLabel',
			cImage = '$cImage',
			cRestrictions = '$cRestrictions',
			cCode = '$cCode',
			dtStartDate = '$dtStartDate',
			dtEndDate = '$dtEndDate',
			cLastUpdated = '$cLastUpdated',
			cCreated = '$cCreated',
			cAffiliateURL = '$cAffiliateURL',
			cDirectURL = '$cDirectURL',
			cSkimlinksURL = '$cSkimlinksURL',
			cFreshReachURL = '$cFreshReachURL',
			cFMTCURL = '$cFMTCURL',
			cPixelHTML = '$cPixelHTML',
			aTypes = '$aTypes',
			fSalePrice = '$fSalePrice',
			fWasPrice = '$fWasPrice',
			fDiscount = '$fDiscount',
			nPercent = '$nPercent',
			fThreshold = '$fThreshold',
			fRating = '$fRating',
			bStarred = '$bStarred',
			aBrands = '$aBrands',
			aLocal = '$aLocal',
			aCategoriesV2 = '$aCategoriesV2',
			nLinkID = '$nLinkID',
			created_at = time() where nCouponID = '$nCouponID'";
	}else{
			$created_at = $updated_at = time();
		 $Qry = "insert into articles (nCouponID, cMerchant, nMasterMerchantID, cNetwork, cStatus, cLabel, cImage, cRestrictions, cCode, dtStartDate, dtEndDate, cLastUpdated, cCreated, cAffiliateURL,
			cDirectURL, cSkimlinksURL, cFreshReachURL, cFMTCURL, cPixelHTML, aTypes, fSalePrice, fWasPrice, fDiscount, nPercent, fThreshold, fRating, bStarred, aBrands, aLocal, aCategoriesV2, nLinkID, created_at, updated_at) values ('$nCouponID', '$cMerchant', 
			'$nMasterMerchantID', '$cNetwork', '$cStatus', '$cLabel', '$cImage', '$cRestrictions', '$cCode', '$dtStartDate', '$dtEndDate', '$cLastUpdated', '$cCreated', '$cAffiliateURL',
			'$cDirectURL', '$cSkimlinksURL', '$cFreshReachURL', '$cFMTCURL', '$cPixelHTML', '$aTypes', '$fSalePrice', '$fWasPrice', '$fDiscount', '$nPercent', '$fThreshold', '$fRating', '$bStarred', '$aBrands', '$aLocal', '$aCategoriesV2', '$nLinkID','','')";
	}
	mysqli_query($conn,$Qry);
}
echo "Data insertion/Updation is completed";
mysqli_close($con);
exit;
