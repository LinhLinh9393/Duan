console.log("editCategory");
app.controller('editCategoryCtrl', function($scope, $http, $routeParams){
     console.log("editCategoryCtrl", $routeParams);
     $scope.category = {
          id:"",
          ten:""
     };
     $scope.formValidate = {
          trangThai: true,
          noiDung: ""
     };
     $http({
          method:"GET",
          url:"http://localhost:3000/danh-muc/" + $routeParams.id
     }).then(function(response){
          // Gán giá trị nhận được từ api vào bién cần thiết
          $scope.category = response.data;
          // Sử dụng ng-repeat để hiện thị biến $scope.dánhachDanhMuc ra html

     });

     $scope.onClickCategory = function() {
          console.log("Thành công");
          console.log("Giá trị nhập vào", $scope.category);
          // Validate
          // 1. Thiết kế html
          // 2. Khai báo biến 
          // reset form
          $scope.formValidate.trangThai = true;
          $scope.formValidate.noiDung = "";
          if($scope.category.id === ""){
               $scope.formValidate.trangThai = false;
               $scope.formValidate.noiDung = "Nhập ID";
               
               return;
          }
          if($scope.category.ten === ""){
               $scope.formValidate.trangThai = false;
               $scope.formValidate.noiDung = "Nhập Tên";

               return;
          }
          // Call api
          $http({
               method:"PUT",
               url:"http://localhost:3000/danh-muc/" + $routeParams.id,
               data: $scope.category
          }).then(function(response) {
            alert("Tạo mới thành công");
            window.location.href = "#!list-category"
          })
     }
     
})