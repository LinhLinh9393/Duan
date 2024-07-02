app.controller('home', function($scope, $http){
     console.log("home");
     $scope.danhSachSanPham = [];
     $http({
          method:"GET",
          url:"http://localhost:3000/san-pham"
     }).then(function(response){
          console.log("thành cong", response.data );
          // Gán giá trị nhận được từ api vào bién cần thiết
          $scope.danhSachSanPham = response.data;
          // Sử dụng ng-repeat để hiện thị biến $scope.dánhachSanPham ra html
     })
})