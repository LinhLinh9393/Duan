console.log("register");
app.controller('registerCtrl', function ($scope, $http) {
     console.log("registerCtrl");
     $scope.user = {
          email:"",
          tenDangNhap:"",
          hoTen:"",
          password:"",
          confirmpassword:"",
          soDienThoai:"",
          diaChi:"",

     }
     $scope.formValidate = {
          trangThai: true,
          noiDung:""
     }
     $scope.formDangKi = function() {
          console.log("Thành công");
          console.log("Giá trị nhập vào", $scope.user);
          // Validate
          // 1. Thiết kế html
          // 2. Khai báo biến 
          // reset form
          $scope.formValidate.trangThai = true;
          $scope.formValidate.noiDung = "";
          if($scope.user.email === ""){
               $scope.formValidate.trangThai = false;
               $scope.formValidate.noiDung = "Nhập email";
               return;
          }
          else if(!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test($scope.user.email)){
               $scope.formValidate.trangThai = false;
               $scope.formValidate.noiDung = "Email sai định dạng";
               return;
          }
          if($scope.user.tenDangNhap === ""){
               $scope.formValidate.trangThai = false;
               $scope.formValidate.noiDung = "Nhập tên đăng nhập";
               return;
          }
          if($scope.user.hoTen === ""){
               $scope.formValidate.trangThai = false;
               $scope.formValidate.noiDung = "Nhập họ tên";
               return;
          }
          if($scope.user.password === ""){
               $scope.formValidate.trangThai = false;
               $scope.formValidate.noiDung = "Nhập mật khẩu";
               return;
          }
          if($scope.user.confirmpassword === ""){
               $scope.formValidate.trangThai = false;
               $scope.formValidate.noiDung = "Nhập mật khẩu";
               return;
          }
          else if($scope.user.password !== $scope.user.confirmpassword) {
               $scope.formValidate.trangThai = false;
               $scope.formValidate.noiDung = "Mật khẩu không khớp";
               return;
          }
          
          // Generate a unique ID
          $scope.user.id = generateUniqueId(); // You need to implement this function

          // Call API to save user data
          $http({
               method:"POST",
               url:"http://localhost:3000/user",
               data: $scope.user
          }).then(function(response) {
            alert("Tạo mới thành công");
            window.location.href = "#!/"
          })
     }

     // Function to generate a unique ID (you can replace this with your own implementation)
     function generateUniqueId() {
          // Logic to generate a unique ID (e.g., using a timestamp or UUID)
          // For simplicity, let's use a timestamp
          return Date.now().toString();
     }
})
