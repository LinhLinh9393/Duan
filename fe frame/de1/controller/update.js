window.update = function ($scope, $http, $location,$routeParams) {
    var api = "http://localhost:3000/post/"

    $http.get(api + $routeParams.id)
    .then(function(response){
        $scope.data=response.data
        $scope.data.date= new Date(response.data.date)
    })

    $scope.submit = function () {
        if(check()){
        var date= $scope.data.date.toISOString().split("T")[0]
        var add={
            name: $scope.data.name,
            email: $scope.data.email,
            date: date
        }
        $http.patch(api + $routeParams.id, add)
            .then(function(response){
                alert("Sửa thành công")
                $location.path("/list")
            })
        }
    }

    $scope.data={
        email: "",
       date: ""
    }
    $scope.validate={
        email: false,
       date: false
    }
    $scope.regex={
        email: false
    }
    var regexEmail=/^\S+@\S+\.\S+$/
    function check(){
        $scope.validate.email=$scope.data.email == ""? true:false
        $scope.validate.date=$scope.data.date == ""? true:false

        if(!$scope.data.email =="" || !regexEmail.test($scope.data.email)){
            $scope.regex.email = "Email phải đúng định dạng"
            $scope.validate.email=false
        }else{
            return false
        }

        if(!$scope.data.email =="" && !$scope.data.date ==""){
           return true
        }else{
            return false
        }

    }

}