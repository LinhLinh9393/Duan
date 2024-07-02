window.donhangController = function ($scope, $http ,$routeParams) {
    var api = "http://localhost:3000/order"
    $scope.listDH = []
    $http.get(api)
        .then(function (response) {
            $scope.listDH = response.data
            // console.log(response.data);
            

        });
    
    $scope.update = function () {
        $http.patch(api + $routeParams.id, $scope.listDH)
            .then(function (response) {
                alert("Update thành công")
                // $location.path("/list-product")
            })
            .catch(function () {
                console.log("Lỗi API");
            })
        }

}