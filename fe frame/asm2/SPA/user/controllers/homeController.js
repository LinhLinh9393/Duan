window.homeController = function ($scope, $http) {
    var api = "http://localhost:3000/products/";

    $scope.listSP = []
    $http.get(api)
        .then(function (response) {
            $scope.listSP = response.data
        })
        .catch(function (error) {
            console.log("Lỗi api");
        })

    
}