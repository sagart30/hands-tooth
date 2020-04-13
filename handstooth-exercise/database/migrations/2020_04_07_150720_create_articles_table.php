<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
	 /*


	$aBrands 				= $val['aBrands'];
	$aLocal 				= $val['aLocal'];
	$aCategoriesV2 			= json_encode($val['aCategoriesV2']);
	$nLinkID 				= $val['nLinkID'];
	$createdAt 				= time();
	$modifiedAt				= time();
	 */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
			$table->bigInteger('nCouponID');
			$table->string('cMerchant', 100)->nullable();
			$table->bigInteger('nMerchantID')->nullable();
			$table->bigInteger('nMasterMerchantID')->nullable();
			$table->string('cNetwork', 100)->nullable();
			$table->string('cStatus', 100)->nullable();
			$table->string('cLabel', 100)->nullable();
			$table->string('cImage', 100)->nullable();
			$table->string('cRestrictions', 100)->nullable();
			$table->string('cCode', 100)->nullable();
	
			$table->dateTime('dtStartDate', 0)->nullable();
			$table->dateTime('dtEndDate', 0)->nullable();
			$table->dateTime('cLastUpdated', 0)->nullable();
			$table->dateTime('cCreated', 0)->nullable();
			
			$table->string('cAffiliateURL', 100)->nullable();
			$table->string('cDirectURL', 100)->nullable();
			$table->string('cSkimlinksURL', 100)->nullable();
			$table->string('cFreshReachURL', 100)->nullable();
			$table->string('cFMTCURL', 100)->nullable();
			$table->string('cPixelHTML', 100)->nullable();
			
			$table->string('aTypes', 500)->nullable();
			
			$table->float('fSalePrice', 8, 2)->nullable();
			$table->float('fWasPrice', 8, 2)->nullable();
			$table->float('fDiscount', 8, 2)->nullable();
			$table->float('nPercent', 8, 2)->nullable();
			$table->float('fThreshold', 8, 2)->nullable();
			$table->float('fRating', 8, 3)->nullable();
			$table->float('bStarred', 8, 3)->nullable();
			
			$table->string('aBrands', 100)->nullable();
			$table->string('aLocal', 100)->nullable();
			$table->string('aCategoriesV2', 500)->nullable();

			$table->float('nLinkID', 8, 3)->nullable();
			$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
