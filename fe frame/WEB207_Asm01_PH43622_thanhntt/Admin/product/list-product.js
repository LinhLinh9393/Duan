console.log("listproduct");
app.controller('listProductCtrl', function($scope, $http){
     console.log("listproductCtrl");
          $scope.danhSachSanPham = [];
          $scope.danhSachDanhMuc = [];
          $scope.currentPage = 1;
          $scope.itemsPerPage = 6;
      
          $http({
              method: "GET",
              url: "http://localhost:3000/san-pham"
          }).then(function (response) {
              console.log("thành công", response.data);
              $scope.danhSachSanPham = response.data;
              $scope.totalItems = $scope.danhSachSanPham.length;
              $scope.totalPages = Math.ceil($scope.totalItems / $scope.itemsPerPage);
              $scope.pages = [];
              for (var i = 1; i <= $scope.totalPages; i++) {
                  $scope.pages.push(i);
              }
          });
      
          // Các hàm phân trang
          $scope.setPage = function (page) {
              $scope.currentPage = page;
          };
      
          $scope.prevPage = function () {
              if ($scope.currentPage > 1) {
                  $scope.currentPage--;
              }
          };
      
          $scope.nextPage = function () {
              if ($scope.currentPage < $scope.totalPages) {
                  $scope.currentPage++;
              }
          };
      
          $scope.filteredProducts = function () {
              var startIndex = ($scope.currentPage - 1) * $scope.itemsPerPage;
              var endIndex = startIndex + $scope.itemsPerPage;
              return $scope.danhSachSanPham.slice(startIndex, endIndex);
          };
          $http({
              method: "GET",
              url: "http://localhost:3000/san-pham"
          }).then(function (response) {
              console.log("thành cong", response.data);
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
          $scope.locDanhMuc = function (idDanhMucClick) {
              console.log(idDanhMucClick);
              $http({
                  method: "GET",
                  url: "http://localhost:3000/san-pham",
                  params: {
                      idDanhMuc: idDanhMucClick
                  }
              }).then(function (response) {
                  $scope.danhSachSanPham = response.data;
              })
          }
          $scope.submitDel = function(product_id) {
               // Hiển thị hộp thoại xác nhận
               var isConfirmed = confirm("Bạn có chắc chắn muốn xóa không?");
               
               // Nếu người dùng đồng ý xóa
               if (isConfirmed) {
                   $http({
                       method: "DELETE",
                       url: "http://localhost:3000/san-pham/" + product_id
                   }).then(function(response) {
                       // Xử lý khi xóa thành công
                       alert("Xóa thành công");
                   }, function(error) {
                       // Xử lý khi có lỗi xảy ra trong quá trình xóa
                       console.error("Lỗi khi xóa sản phẩm:", error);
                       alert("Đã có lỗi xảy ra khi xóa sản phẩm. Vui lòng thử lại sau.");
                   });
               }
           };
           
      })