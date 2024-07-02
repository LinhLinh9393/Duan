myApp.controller("header", function($scope){
    $scope.nameAccount = localStorage.getItem("name")

    $scope.logout=function(){
        localStorage.removeItem("id")
        localStorage.removeItem("name")

        window.location.href = "../login.html"
    }
})