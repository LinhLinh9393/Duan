console.log("Home");
app.controller('homeCtrl', function($scope, $http){
     console.log('homeCtrl');
 
     $scope.danhSachSanPham = [];
     $http({
          method:"GET",
          url:"http://localhost:3000/san-pham"
     }).then(function(response){
          // Gán giá trị nhận được từ api vào bién cần thiết
          $scope.danhSachSanPham = response.data;
          // Sử dụng ng-repeat để hiện thị biến $scope.dánhachSanPham ra html
     })
})