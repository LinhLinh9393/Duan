window.UpdateController = function($scope,$http,$routeParams,$location){
    var api = "http://localhost:3000/users/";

    $http.get(api+$routeParams.id)
    .then(function(response){
        $scope.data= response.data
        
    })

    $scope.update = function(){
        $http.patch(api+$routeParams.id,$scope.data)
        .then(function(response){
            $scope.data = response.data
            alert("Sửa thành công")
        $location.path("/list-user");

        })
    }
}