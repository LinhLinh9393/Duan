window.add=function($scope, $http, $location ){
    var api="http://localhost:3000/post/"

    $scope.submit = function(){
        if(check()){
            var date=$scope.data.date.toISOString().split("T")[0]
            var add = {
                name: $scope.data.name,
                email: $scope.data.email,
                date:date
            }
        $http.post(api, add)
            .then(function(response){
                alert("Thêm thành công")
                $location.path("/list")
            })
        }
    }
    $scope.data = {
        name: "",
        email: "",
        date:""
    }

    $scope.validate={
        name:  false,
        email:  false,
        date: false
    }
    $scope.regex={
        email:  false
    }
    var regexEmail=/^\S+@\S+\.\S+$/
    function check(){
        $scope.validate.name= $scope.data.name ==""? true: false
        $scope.validate.email= $scope.data.email ==""? true: false
        $scope.validate.date= $scope.data.date ==""? true: false

        if(!$scope.regex.email == "" || !regexEmail.test($scope.regex.email)){
            $scope.regex.email = "Email phải đúng định dạng"
            
        }else{
            $scope.regex.email =false
        }
        if(!$scope.validate.name == "" && !$scope.validate.email =="" && !$scope.validate.date == ""){
            return true
        }else{
            return false
        }
        
    }
}