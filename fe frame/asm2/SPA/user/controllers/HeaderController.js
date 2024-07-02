myApp.controller("header", function($scope){
    $scope.nameAccount = localStorage.getItem("username")

    $scope.logout=function(){
        localStorage.removeItem("id")
        localStorage.removeItem("name")

        window.location.href = "../login.html"
    }
})