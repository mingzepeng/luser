<!doctype html>
<html lang="en" ng-app="luser">
<head>
    <meta charset="UTF-8">
    <title>Laravel PHP Frashumework</title>
    <style>

    </style>
</head>
<body ng-controller="TextController">
  <p>{{someText.message}}</p>
    <input ng-model="someText.message" />
 <button ng-click="remove()">Remove</button>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.1/angular.min.js"></script>
<script>

var luser = angular.module('luser',[]);
luser.controller('TextController',function($scope){
    $scope.someText = {
        message : 'hello'
    };
    $scope.remove = function(){
        $scope.someText.message = '';
    }
});
</script>