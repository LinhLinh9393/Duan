console.log("register");
app.controller('registerCtrl', function ($scope, $http) {
     console.log("registerCtrl");

     $scope.user = {
          email: "",
          tenDangNhap: "",
          hoTen: "",
          password: "",
          confirmpassword: "",
          soDienThoai: "",
          diaChi: "",
          role: "2"
     };

     $scope.formValidate = {
          trangThai: true,
          noiDung: ""
     };

     $scope.formDangKi = function () {
          console.log("Thành công");
          console.log("Giá trị nhập vào", $scope.user);
          $scope.formValidate.trangThai = true;
          $scope.formValidate.noiDung = "";

          // Kiểm tra email đã tồn tại
          $http({
               method: "GET",
               url: "http://localhost:3000/user?email=" + $scope.user.email
          }).then(function (response) {
               if (response.data.length > 0) {
                    // Email đã tồn tại 
                    $scope.formValidate.trangThai = false;
                    $scope.formValidate.noiDung = "Email đã tồn tại trong hệ thống";
               } else {
                    // Email chưa tồn tại
                    // Kiểm tra các trường dữ liệu khác 
                    if ($scope.user.email === "") {
                         $scope.formValidate.trangThai = false;
                         $scope.formValidate.noiDung = "Nhập email";
                         return;
                    } else if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test($scope.user.email)) {
                         $scope.formValidate.trangThai = false;
                         $scope.formValidate.noiDung = "Email sai định dạng";
                         return;
                    }
                    if ($scope.user.tenDangNhap === "") {
                         $scope.formValidate.trangThai = false;
                         $scope.formValidate.noiDung = "Nhập tên đăng nhập";
                         return;
                    }
                    if ($scope.user.hoTen === "") {
                         $scope.formValidate.trangThai = false;
                         $scope.formValidate.noiDung = "Nhập họ tên";
                         return;
                    }
                    if ($scope.user.password === "" && $scope.user.password.length > 6) {
                         $scope.formValidate.trangThai = false;
                         $scope.formValidate.noiDung = "Nhập mật khẩu và lớn hơn 6 kí tự";
                         return;
                    }
                    if ($scope.user.confirmpassword === "") {
                         $scope.formValidate.trangThai = false;
                         $scope.formValidate.noiDung = "Nhập mật khẩu";
                         return;
                    } else if ($scope.user.password !== $scope.user.confirmpassword) {
                         $scope.formValidate.trangThai = false;
                         $scope.formValidate.noiDung = "Mật khẩu không khớp";
                         return;
                    }

                    // Đăng ký
                    $http({
                         method: "POST",
                         url: "http://localhost:3000/user",
                         data: $scope.user
                    }).then(function (response) {
                         alert("Đăng kí thành công");
                         window.location.href = "#!login";
                    });
               }
          });
     };
});
