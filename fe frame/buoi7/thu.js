var myApp=angular.module("myApp",[])
myApp.controller("myController1", $scope => {
    $scope.message= 'Hello'
    
})

myApp.controller("myController2", $scope => {
    $scope.message= 'Hello1'
    $scope.content='ABC1';
    $scope.$parent.content='linh';//thêm $parent để lấy content của parent
})

myApp.controller("parent" , function($scope){
    $scope.content='ABC';
})