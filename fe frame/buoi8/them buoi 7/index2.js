var myApp=angular.module("myApp",[])

myApp.controller("myController",function($scope, $rootScope) {
    
    // $scope.soA=""
    // $scope.soB=""
    // $scope.tinh=function() {
    //     $rootScope.ketQua = Number($scope.soA) + Number($scope.soB)
    //     //$rootScope phạm vi toàn cầu cái nào cx truy cập dc
        
    // }
    $rootScope.user={
        name: "",
        age: "",
        address: ""
    }
    $rootScope.listUser=[]
    $scope.submit=function(){
        $rootScope.listUser.push(angular.copy($rootScope.user))
        clear()
        // console.log($rootScope.listUser);
   }
   function clear(){
        $rootScope.user={
            name: "",
            age: "",
            address: ""
        }
   }
   $scope.confirmUpdate=function(){
        $rootScope.listUser[$rootScope.indexUpdate] = angular.copy($rootScope.user)
        clear()
        $rootScope.indexUpdate = -1
   }
    
})

myApp.controller("myController1" ,function($scope, $rootScope){
    $scope.delete = function(index){
        // $rootScope.listUser.splice(index, 1)
        
        let check= confirm("Bạn có muốn xoá không?")
        if(check){
            $rootScope.listUser.splice(index, 1)
        }
        
    }

    $rootScope.indexUpdate = -1
    $scope.update =function(index){
        $rootScope.user =angular.copy($rootScope.listUser[index]);
        $rootScope.indexUpdate = index
    }
})

