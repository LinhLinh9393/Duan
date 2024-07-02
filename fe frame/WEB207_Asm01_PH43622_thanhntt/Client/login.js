app.controller('loginCtrl', function ($scope, $http) {
     $scope.formDangNhap = function () {
          $http({
               method: "GET",
               url: "http://localhost:3000/user/?tenDangNhap=" + $scope.tenDangNhap + "&password=" + $scope.password,
          }).then(function (response) {
               if (response.data.length == 0) {
                    alert("Đăng nhập không thành công")
               } else {
                    alert("Đăng nhập thành công")
                    var userData = response.data[0]; // Lấy thông tin người dùng từ phản hồi
                    localStorage.setItem("id", userData.id); // Lưu id vào localStorage
                    localStorage.setItem("hoTen", userData.hoTen); // Lưu tên đăng nhập vào localStorage

                    if (userData.role == "1") {
                         window.location.href = "/Admin/index.html";
                    } else {
                         window.location.href = "index.html";
                    }
               }
          }).catch(function (error) {
               console.error("Đã xảy ra lỗi khi thực hiện yêu cầu:", error);
               alert("Đã xảy ra lỗi khi thực hiện yêu cầu");
          });
     }
     $scope.nameAccount = localStorage.getItem("tenDangNhap");
     $scope.logout = function () {
          localStorage.removeItem("id")
          localStorage.removeItem("tenDangNhap")

          window.location.href = "demo.html"
     }
});
