window.listController = function ($scope, $http) {
    var api = "http://localhost:3000/products/";

    $scope.listSP = []
    $http.get(api)
        .then(function (response) {
            $scope.listSP = response.data
        })
        .catch(function (error) {
            console.log("Lỗi api");
        })

    var api2 = "http://localhost:3000/danhmuc/";

    $scope.listDM = []
    $http.get(api2)
        .then(function (response) {
            $scope.listDM = response.data
        })
        .catch(function (error) {
            console.log("Lỗi api");
        })

    $scope.loadDM= function (id) {
        console.log(id);
        // // $scope.id = $scope.listSP.iddm
        // $http.get(api + id)
        //     .then(function(response){
        //         $scope.listSP = response.data
        //     })
        $http({
            method: "GET",
            url: "http://localhost:3000/products/",
            params: {
                iddm: id
            }
        }).then(function (response) {
            $scope.listSP = response.data;
        })
    }

}