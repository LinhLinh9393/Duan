console.log("editProduct");
app.controller('editProductCtrl', function ($scope, $http, $routeParams) {
     console.log("editProductCtrl", $routeParams);
    
          // 1. Thiết kế html
          // 2. Khai báo biến 
          // reset form
          $scope.product = {
               id:"",
               ten:"",
               anh:"",
               tenDanhMuc:""
          };
          $scope.formValidate = {
               trangThai: true,
               noiDung:""
          };
          // Call api
          $http({
               method: "GET",
               url: "http://localhost:3000/san-pham/" + $routeParams.id
          }).then(function (response) {
               $scope.product = response.data;
          })


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
                    method:"PUT",
                    url:"http://localhost:3000/san-pham/" + $routeParams.id,
                    data: $scope.product
               }).then(function(response) {
                 alert("Tạo mới thành công");
                 window.location.href = "#!list-product"
               })
          }
     })