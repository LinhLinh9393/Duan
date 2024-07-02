console.log("listproduct");
app.controller('listProductCtrl', function($scope, $http){
     console.log("listproductCtrl");
     $scope.danhSachSanPham = [];
     $scope.danhSachDanhMuc = [];
     $http({
          method:"GET",
          url:"http://localhost:3000/san-pham"
     }).then(function(response){
          console.log("thành cong", response.data );
          // Gán giá trị nhận được từ api vào bién cần thiết
          $scope.danhSachSanPham = response.data;
          // Sử dụng ng-repeat để hiện thị biến $scope.dánhachSanPham ra html

     })
     $http({
          method: "GET",
          url: "http://localhost:3000/danh-muc"
      }).then(function (response) {
          console.log("Log giá trị ds danh mục", response.data);
          $scope.danhSachDanhMuc = response.data;

      })
     $scope.locDanhMuc = function(idDanhMucClick){
          console.log(idDanhMucClick);
          $http({
               method:"GET",
               url:"http://localhost:3000/san-pham",
               params:{
                    idDanhMuc : idDanhMucClick
               }
          }).then(function(response){
               $scope.danhSachSanPham = response.data;
          })
     }
     $scope.submitDel = function(product_id){
          $http ({
               method:"DELETE",
               url:"http://localhost:3000/san-pham/" + product_id 
          }).then(function(response){
               alert("Xóa thành công");
          })

     }
})