
window.UserController = function ($scope, $http, $location, $routeParams) {
    var api = "http://localhost:3000/user/";

    $scope.listUser = []
    $http.get(api)
        .then(function (response) {
            $scope.listUser = response.data
        })
        .catch(function (error) {
            console.log("Lỗi api");
        })
    
    $scope.huy=function(){
        $scope.data={
            username: "",
            email: "",
            password: "",
            role: ""
            }
    }

    $scope.submit = function () {
        if (checkEmpty()) {
            $http.post(api, $scope.data)
                .then(function (response) {
                    alert("Thêm mới thành công")
                    $location.path("/list-user")
                    // alert("Thêm mới thành công")
                })
                .catch(function (error) {
                    console.log("Lỗi API");
                })
        }
    }

    $http.get(api + $routeParams.id)
        .then(function (response) {
            $scope.data = response.data
        })
        .catch(function () {
            console.log("Lỗi API");
        })

    $scope.update=function(){
        if (checkEmpty()) {
            $http.patch(api + $routeParams.id, $scope.data)
                .then(function (response) {
                    alert("Chỉnh sửa thành công")
                    $location.path("/list-user")
                })
                .catch(function () {
                    console.log("Lỗi API");
                })
        }
    }

    $scope.delete = function (id) {
        $scope.idDelete = id
    }
    $scope.confirmDelete = function () {
        $http.delete(api + $scope.idDelete)
            .then(function (response) {
                alert("Xoá thành công")
            })
            .catch(function (error) {
                console.log("Lỗi API");
            })
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

