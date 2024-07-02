console.log("createProduct");
app.controller('createProductCtrl', function ($scope, $http) {
     console.log("createProductCtrl");
     // 1. khai báo biến cần thiết
     // Cần 1 biến lưu gtri ngườidungf nhập vào từ các input
     $scope.product = {
          id:"",
          ten:"",
          anh:"",
          tenDanhMuc:""
     }
     $scope.formValidate = {
          trangThai: true,
          noiDung:""
     }
     // Liên kết biến $scope.product ra html dùng ng-model()
     // Bắt sự kiện click button
     $scope.onClickSubmit = function() {
          console.log("Thành công");
          console.log("Giá trị nhập vào", $scope.product);
          // Validate
          // 1. Thiết kế html
          // 2. Khai báo biến 
          // reset form
          $scope.formValidate.trangThai = true;
          $scope.formValidate.noiDung = "";
          if($scope.product.id === ""){
               $scope.formValidate.trangThai = false;
               $scope.formValidate.noiDung = "Nhập ID";
               
               return;
          }
          if($scope.product.ten === ""){
               $scope.formValidate.trangThai = false;
               $scope.formValidate.noiDung = "Nhập Tên";

               return;
          }else if($scope.product.ten.length < 5){
               $scope.formValidate.trangThai = false;
               $scope.formValidate.noiDung = "Nhập > 5";

               return;
          }
          if($scope.product.anh === ""){
               $scope.formValidate.trangThai = false;
               $scope.formValidate.noiDung = "Nhập Tên";

               return;
          }
          if($scope.product.tenDanhMuc === ""){
               $scope.formValidate.trangThai = false;
               $scope.formValidate.noiDung = "Nhập Tên";

               return;
          }
          // Call api
          $http({
               method:"POST",
               url:"http://localhost:3000/san-pham",
               data: $scope.product
          }).then(function(response) {
            alert("Tạo mới thành công");
            window.location.href = "#!list-product"
          })
     }
})