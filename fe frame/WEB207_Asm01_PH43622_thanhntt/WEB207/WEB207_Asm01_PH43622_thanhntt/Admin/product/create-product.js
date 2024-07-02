console.log("CreateProduct");
app.controller('createProductCtrl', function ($scope, $http) {
     console.log("createProductCtrl");
     $scope.product = {
          id:"",
          ten:"",
          anh:"",
          giaBan:"",
          giaNiemYet:"",
          mota:"",
          tenDanhMuc:"",
          idDanhMuc:""
          
     }
     $scope.formValidate = {
          trangThai: true,
          noiDung:""
     }
     $scope.onClickProduct = function() {
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
               $scope.formValidate.noiDung = "Nhập tên";

               return;
          }else if($scope.product.ten.length < 5){
               $scope.formValidate.trangThai = false;
               $scope.formValidate.noiDung = "Nhập tên có giá trị lớn 5";

               return;
          }
          if($scope.product.anh === ""){
               $scope.formValidate.trangThai = false;
               $scope.formValidate.noiDung = "Nhập ảnh";

               return;
          }
          if($scope.product.giaBan === ""){
               $scope.formValidate.trangThai = false;
               $scope.formValidate.noiDung = "Nhập giá bán";

               return;
          }
          if($scope.product.giaNiemYet === ""){
               $scope.formValidate.trangThai = false;
               $scope.formValidate.noiDung = "Nhập giá niêm yết";
               return;
          }
          if($scope.product.idDanhMuc === ""){
               $scope.formValidate.trangThai = false;
               $scope.formValidate.noiDung = "Nhập danh mục";

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