console.log("listUser");
app.controller('listUserCtrl', function($scope, $http){
     console.log("listUserCtrl");
     $scope.danhSachUser = [];
     $http({
          method:"GET",
          url:"http://localhost:3000/user"
     }).then(function(response){
          console.log("thành cong", response.data );
          // Gán giá trị nhận được từ api vào bién cần thiết
          $scope.danhSachUser = response.data;
          // Sử dụng ng-repeat để hiện thị biến $scope.dánhachSanPham ra html

     })
})