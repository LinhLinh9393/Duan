console.log("CreateCategory");
app.controller('createCategoryCtrl', function ($scope, $http) {
     console.log("createCategoryCtrl");
     $scope.category = {
          id: "",
          ten: ""
     }
     // Reload lại validate
     $scope.formValidate = {
          trangThai: true,
          noiDung:""
     }
     $scope.onClickCategory = function () {
          console.log("Thành công");
          console.log("Nhập vào", $scope.category);
          // Validate
          $scope.formValidate.trangThai = true;
          $scope.formValidate.noiDung = "";
          
          if ($scope.category.id === "") {
               $scope.formValidate.trangThai = false;
               $scope.formValidate.noiDung = "Nhập ID danh mục"; 
               return; 
          }

          if ($scope.category.ten === "") {
               $scope.formValidate.trangThai = false;
               $scope.formValidate.noiDung = "Nhập tên danh mục"; 
               return; 
          }
          //  Call API
          $http({
               method: "POST",
               url: "http://localhost:3000/danh-muc",
               data: $scope.category
          }).then(function (response) {
               alert("Thêm thành công");
               window.location.href = "#!list-category"
          })
     }


})