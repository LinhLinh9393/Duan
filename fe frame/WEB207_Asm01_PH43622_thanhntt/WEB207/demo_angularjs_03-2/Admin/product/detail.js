console.log("detailProduct");
app.controller('detailProductCtrl', function ($scope, $http, $routeParams) {
     console.log("detailProductCtrl", $routeParams);
     // 1. Khai báo biến cần thiết
     $scope.product = {
          id:"",
          ten:"",
          anh:"",
          tenDanhMuc:""
     }
     // Call API laays thoong tin chi tiet
     $http({
          method:"GET",
          url:"http://localhost:3000/san-pham/" + $routeParams.id
     }).then(function(response) {
          $scope.product = response.data;
     })
     // 3. Bắt sự kiện button Xóa
     $scope.onClickXacNhanXoa = function(){
          console.log("Gọi hàm thành công");
          $http({
               method:"DELETE",
               url:"http://localhost:3000/san-pham/" + $routeParams.id
          }).then(function(response) {
               alert("Xóa thành công");
               window.location.href = "#!list-product"
          })
     }
})