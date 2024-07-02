window.detail= function($scope,$http,$routeParams){
    var api="http://localhost:3000/post/"

    $http.get(api + $routeParams.id)
        .then(function(response){
            $scope.data=response.data
        })
    }