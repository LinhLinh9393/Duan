window.UpdateProductController = function ($scope, $http, $location, $routeParams) {

    var api = "http://localhost:3000/products/"
    $http.get(api + $routeParams.id)
        .then(function (response) {
            $scope.data = response.data
        })
        .catch(function () {
            console.log("Lỗi API");
        })

    $scope.update = function () {
        if(checkEmpty()){
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

    var api2 = "http://localhost:3000/danhmuc/";

    $scope.listDM = []
    $http.get(api2)
        .then(function (response) {
            $scope.listDM = response.data
        })
        .catch(function (error) {
            console.log("Lỗi api");
        })

    $scope.huy = function () {
        $scope.data = {
            name: "",
            image: "",
            price: "",
            mota: ""
            // iddm: ""
        }
    }
    
    $scope.validate = {
        name: false,
        image: false,
        price: false,
        mota: false
        // iddm: false
    }
    function checkEmpty() {
        $scope.validate.name = $scope.data.name == "" ? true : false;
        $scope.validate.mota = $scope.data.mota == "" ? true : false;


        if (($scope.data.price == "") || (isNaN($scope.data.price)) || !($scope.data.price > 0)) {
            $scope.validate.price = true
        }
        else {
            $scope.validate.price = false
        }

        if (!$scope.validate.name  && !$scope.validate.price && !$scope.validate.mota) {
            return true
        } else {
            return false
        }
    }
}

