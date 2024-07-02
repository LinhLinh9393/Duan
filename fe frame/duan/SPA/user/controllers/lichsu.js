window.lichsu = function ($scope, $http ,$routeParams) {
    var api = "http://localhost:3000/order?email="
    $scope.listDH = []
    $http.get(api)
        .then(function (response) {
            $scope.listDH = response.data
            // console.log(response.data);
            

        });
}