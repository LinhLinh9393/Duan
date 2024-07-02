app.controller("header", function($scope){
   console.log("hedaer");
     $scope.nameAccount = localStorage.getItem("tenDangNhap");
     $scope.logout=function(){
        localStorage.removeItem("id")
        localStorage.removeItem("tenDangNhap")

        window.location.href = "index.html"
    }
 })