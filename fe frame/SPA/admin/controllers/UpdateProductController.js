window.UpdateProductController = function ($scope, $http, $location, $routeParams) {

    var api = "http://localhost:3000/products/"
    $http.get(api + $routeParams.id)
        .then(function (response) {
            $scope.data = response.data
        })
        .catch(function () {
            console.log("Lỗi API");
        })

        $scope.update=function(){
            $http.patch(api + $routeParams.id, $scope.data)
                .then(function (response) {
                   alert("Chỉnh sửa thành công")
                   $location.path("/list-product")
                })
                .catch(function () {
                    console.log("Lỗi API");
                })
        }
}
