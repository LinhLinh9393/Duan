var myApp=angular.module("myApp",[])
myApp.controller("parent" ,function($scope){
    $scope.soA=""
    $scope.soB=""
    $scope.ketQua=""
})

myApp.controller("myController", $scope=> {
    $scope.tinh =function(){
        $scope.$parent.ketQua = Number($scope.$parent.soA) + Number($scope.$parent.soB)
    }
})

myApp.controller("myController1" ,function($scope){
  
})

