console.log("editOrder");
app.controller('editOrderCtrl', function ($scope, $http, $routeParams) {
     console.log("editOrderCtrl");
     // Sau khi nhận được dữ liệu đơn hàng từ server
     $http({
          method: "GET",
          url: "http://localhost:3000/don-hang"
      }).then(function (response) {
          $scope.cart = response.data;
      });
      $scope.updateCartItem = function (item) {
          var updatedItem = generateCartItem(item); // Tạo cấu trúc dữ liệu phù hợp
  
          $http.put(`http://localhost:3000/don-hang/${item.id}`, updatedItem)
              .then(function (response) {
                  console.log("Đã cập nhật sản phẩm trong giỏ hàng thành công.");
              })
              .catch(function (error) {
                  console.error("Đã xảy ra lỗi khi cập nhật sản phẩm trong giỏ hàng:", error);
              });
      };
  
      // Hàm tạo cấu trúc dữ liệu cho cart item
      function generateCartItem(item) {
          return {
              id: item.id, // ID của sản phẩm
              order: [
                  {
                      idDH: item.order[0].idDH, // ID của sản phẩm
                      tenDH: item.order[0].tenDH, // Tên sản phẩm
                      anhDH: item.order[0].anhDH, // Đường dẫn ảnh sản phẩm
                      giaTien: item.order[0].giaTien, // Giá tiền của sản phẩm
                      soluong: item.order[0].soluong, // Số lượng mới
                      thanhTien: item.order[0].giaTien * item.cart[0].soluong // Thành tiền của sản phẩm
                  }
              ]
          };
      }
});
