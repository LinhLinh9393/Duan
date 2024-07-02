window.DetailController = function($scope,$http,$routeParams){
    var api = "http://localhost:3000/users/";

    $http.get(api+$routeParams.id)
    .then(function(response){
        $scope.data= response.data
    })
}