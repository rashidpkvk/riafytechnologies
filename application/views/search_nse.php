<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="row" ng-app="myApp" ng-controller="myCtrl" ng-init="getCompanies()">
	<div class="col-sm-2"></div>
	<div class="col-sm-8 text-center padding-top-10">
		<p>
			<h1>The easiest way to buy and sell stocks.</h1>
			<h6>Stock analysis and screening tool for investers in india</h6>
		</p>
		<br>

		<div class="input-group mb-3">
		    <div class="input-group-prepend">
		      <span class="input-group-text"><i class="fas fa-search"></i></span>
		    </div>
		    <input type="text" class="form-control" ng-model="keyword" ng-change="searching()" placeholder="Search here ...">
		    <!-- <select ng-model="companyId" class="form-control" ng-change="getCompany()">
		        <option ng-repeat="operator in operators" value="{{operator.value}}">
		          {{operator.label}}
		        </option>
		    </select> -->
		</div>
	    <div class="sugesstions" ng-show="search">
	    	<ul>
	    		<li ng-repeat="item in search" ng-click="getCompany(item.value, item.label)">{{item.label}}</li>
	    	</ul>
	    </div>
		<br>
		<div id="result" class="col-sm-12 text-left" ng-show="company">
			<h5>{{company.vchr_name}}</h5>
			<div class="row well">
				<div class="col-sm-4 item">
					<div class="bg item-bg-1">
						<label>Market Cap</label> : <span class="text-right">{{company.dec_MarketCap}}</span>
					</div>
				</div>
				<div class="col-sm-4 item">
					<div class="bg item-bg-1">
						<label>Dividend Yield</label> : <span class="text-right">{{company.dec_DividendYield}}%</span>
					</div>
				</div>
				<div class="col-sm-4 item">
					<div class="bg item-bg-1">
						<label>Debt to Equity</label> : <span class="text-right">{{company.dec_DebttoEquity}}%</span>
					</div>
				</div>

				<div class="col-sm-4 item">
					<div class="bg item-bg-2">
						<label>Current Price</label> : <span class="text-right">{{company.dec_CurrentMarketPrice}}</span>
					</div>
				</div>
				<div class="col-sm-4 item">
					<div class="bg item-bg-2">
						<label>ROCE %</label> : <span class="text-right">{{company.dec_ROCEPercent}}%</span>
					</div>
				</div>
				<div class="col-sm-4 item">
					<div class="bg item-bg-2">
						<label>EPS</label> : <span class="text-right">{{company.dec_EPS}}</span>
					</div>
				</div>

				<div class="col-sm-4 item">
					<div class="bg item-bg-1">
						<label>Stock P/E</label> : <span class="text-right">{{company.dec_StockPE}}%</span>
					</div>
				</div>
				<div class="col-sm-4 item">
					<div class="bg item-bg-1">
						<label>ROE</label> : <span class="text-right">{{company.dec_ROEPreviousAnnum}}%</span>
					</div>
				</div>
				<div class="col-sm-4 item">
					<div class="bg item-bg-1">
						<label>Reserves</label> : <span class="text-right">{{company.dec_Reserves}}</span>
					</div>
				</div>

				<div class="col-sm-4 item">
					<div class="bg item-bg-2">
						<label>Debt</label> : <span class="text-right">{{company.dec_Debt}}</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	var base_url='<?php echo base_url(); ?>index.php/Riafy/';
	var app = angular.module('myApp', []);
	app.controller('myCtrl', function($scope, $http) {
		$scope.search = '';
		$scope.company = '';
		$scope.getCompanies = function() {
			$scope.url = base_url+'searchCompanies';
		    $scope.keyword = '';
		    $http.post($scope.url, {
		        "keyword": $scope.keyword
		    }).then(function(data, status) {
		    	$scope.operators = data.data;
		    })
		}
		$scope.searching = function() {
		    $scope.url = base_url+'searchCompanies';
	    	$scope.company = '';
		    $http.post($scope.url, {
		        "keyword": $scope.keyword
		    }).then(function(data, status) {
		    	$scope.search = data.data;
		    })
		};
		$scope.getCompany = function(id, label) {
	    	$scope.keyword = label;
			$scope.companyId = id;
		    $scope.url = base_url+'getCompany';
		    $http.post($scope.url, {
		        "companyId": $scope.companyId
		    }).then(function(data, status) {
		    	$scope.company = data.data;
		    	$scope.search = '';
		    })
		};
	});
</script>