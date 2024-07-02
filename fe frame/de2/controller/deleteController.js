window.deleteController = function ($scope, $http, $routeParams, $location) {
    var api = "http://localhost:3000/post/"

    $http.get(api + $routeParams.id)
        .then(function (response) {
            $scope.data = response.data
        })
    $scope.delete = function () {
        $http.delete(api + $routeParams.id)
            .then(function (response) {
                alert("Xoá thành công")
                $location.path("/list")
            })
    }
}