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
    $scope.data={
        username: "",
        email: "",
        password: "",
        role:""
        }
    $scope.validate = {
        username: false,
        email: false,
        password: false,
        role: false
    }
    RegExpEmail=  /^\S+@\S+\.\S+$/
    function checkEmpty() {
        $scope.validate.username = $scope.data.username == "" ? true : false;
        $scope.validate.email = $scope.data.email == "" ? true : false;
        $scope.validate.password = $scope.data.password == "" ? true : false;
        $scope.validate.role = $scope.data.role == "" ? true : false;

        if (($scope.data.email == "") ||  !RegExpEmail.test($scope.data.email)) {
            $scope.validate.email = true
            alert("Email sai định dạng")
        }
        else {
            $scope.validate.email = false
        }
        if (!$scope.validate.username && !$scope.validate.email  && !$scope.validate.password && !$scope.validate.role) {
            return true
        } else {
            return false
        }
    }
}

