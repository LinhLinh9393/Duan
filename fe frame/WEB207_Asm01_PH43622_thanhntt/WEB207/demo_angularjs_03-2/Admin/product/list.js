console.log("ListProduct");
app.controller('listProductCtrl', function ($scope, $http) {
     console.log("ListProductCtrl");
     $scope.danhSachSanPham = [];
     $http({
          method:"GET",
          url:"http://localhost:3000/san-pham"
     }).then(function (response) {
          $scope.danhSachSanPham = response.data;
     })
     
})