var app= angular.module('rateapp',[]);

app.controller('ratecontroller',function($scope,$http){
	$scope.insertdata=function(){
$http.post("insert.php",{'brand':$scope.brand,'brewer':$scope.brewer,'country':$scope.country,'style':$scope.style,
'alc':$scope.alc,'price':$scope.price,'foam':$scope.foam,'transparency':$scope.transparency,'srm':$scope.srm,
'ibu':$scope.ibu,'glass':$scope.glass,'vessel':$scope.vessel,'notes':$scope.notes, 'name':$scope.name})
		.success(function (data,status,headers,config)
		{
			console.log("data inserted successfully");
		});
	}

	});




