console.log("listCategory");
app.controller('listCategoryCtrl', function($scope, $http){
     console.log("listCategoryCtrl");
     $scope.danhSachDanhMuc = [];
     $http({
          method:"GET",
          url:"http://localhost:3000/danh-muc"
     }).then(function(response){
          console.log("thành cong", response.data );
          // Gán giá trị nhận được từ api vào bién cần thiết
          $scope.danhSachDanhMuc = response.data;
          // Sử dụng ng-repeat để hiện thị biến $scope.dánhachDanhMuc ra html

     })
     $scope.submitDel = function(category_id) {
          // Hiển thị hộp thoại xác nhận
          var isConfirmed = confirm("Bạn có chắc chắn muốn xóa không?");
          
          // Nếu người dùng đồng ý xóa
          if (isConfirmed) {
              $http({
                  method: "DELETE",
                  url: "http://localhost:3000/danh-muc/" + category_id
              }).then(function(response) {
                  // Xử lý khi xóa thành công
                  alert("Xóa thành công");
              });
          }
      };
      
})