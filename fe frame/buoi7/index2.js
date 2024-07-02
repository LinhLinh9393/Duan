var myApp=angular.module("myApp",[])

myApp.controller("myController",function($scope, $rootScope) {
    
    // $scope.soA=""
    // $scope.soB=""
    // $scope.tinh=function() {
    //     $rootScope.ketQua = Number($scope.soA) + Number($scope.soB)
    //     //$rootScope phạm vi toàn cầu cái nào cx truy cập dc
        
    // }
    $scope.user={
        name: "",
        age: "",
        address: ""
    }
    $rootScope.listUser=[]
    $scope.submit=function(){
        $rootScope.listUser.push(angular.copy($scope.user))
        clear()
        // console.log($rootScope.listUser);
   }
   function clear(){
        $scope.user={
            name: "",
            age: "",
            address: ""
        }
   }
    
})

myApp.controller("myController1" ,function($scope){
    
})

