window.add=function($scope, $http, $location ){
    var api="http://localhost:3000/post/"

    $scope.submit = function(){
        if(check()){
            var date=$scope.data.date.toISOString().split("T")[0]
            var add = {
                name: $scope.data.name,
                pass: $scope.data.pass,
                email: $scope.data.email,
                theLoai: $scope.data.theLoai,
                phone: $scope.data.phone,
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
        pass: "",
        email: "",
        theLoai:"",
        phone:"",
        date:""
    }

    $scope.validate={
        name:  false,
        pass:  false,
        email:  false,
        theLoai: false,
        phone: false,
        date: false
    }
    $scope.regex={
        email:  false
    }
    var regexEmail=/^\S+@\S+\.\S+$/
    function check(){
        $scope.validate.name= $scope.data.name ==""? true: false
        $scope.validate.email= $scope.data.email ==""? true: false
        $scope.validate.pass= $scope.data.pass ==""? true: false
        $scope.validate.theLoai= $scope.data.theLoai ==""? true: false
        $scope.validate.phone= $scope.data.phone ==""? true: false
        $scope.validate.date= $scope.data.date ==""? true: false

        if(!$scope.data.email || !regexEmail.test($scope.data.email)){
            $scope.regex.email = "Email phải đúng định dạng"
        }else{
            return false
        }
        
        if(!$scope.data.name == "" || !$scope.data.pass == "" || !$scope.data.email == "" || !$scope.data.theLoai == "" || !$scope.data.phone == "" || !$scope.data.date == ""){
            return true
        }else{
            return false
        }
        
    }
}