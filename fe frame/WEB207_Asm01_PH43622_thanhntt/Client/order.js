console.log("order");
app.controller('order', function ($scope, $http, $routeParams) {
     console.log("order");
     $scope.cart = [];
     $http({
          method: "GET",
          url: "http://localhost:3000/gio-hang"
     }).then(function (response) {
          $scope.cart = response.data;
     });

     $scope.tongsoluong = function () {
          var tsl = 0;
          for (var i = 0; i < $scope.cart.length; i++) {
               tsl += $scope.cart[i].cart[0].soluong; // Sửa lại cấu trúc để truy cập vào số lượng
          }
          return tsl;
     };

     $scope.tongtien = function () {
          var tt = 0;
          for (var i = 0; i < $scope.cart.length; i++) {
               tt += $scope.cart[i].cart[0].soluong * $scope.cart[i].cart[0].giaTien; // Sửa lại cấu trúc để truy cập vào giá tiền
          }
          return tt;
     };
     var userId = localStorage.getItem("id"); // Lấy ID người dùng từ localStorage
     // Kiểm tra xem có ID người dùng hay không
     if (userId) {
          // Gọi yêu cầu GET để lấy thông tin người dùng
          $http({
               method: "GET",
               url: "http://localhost:3000/user/" + userId,
          }).then(function (response) {
               // Gán thông tin người dùng nhận được vào $scope để hiển thị trên giao diện người dùng
               $scope.userInfo = response.data;
          }).catch(function (error) {
               console.error("Lỗi khi lấy thông tin người dùng:", error);
          });
     } else {
          console.error("Không tìm thấy ID người dùng trong localStorage");
     }
     $scope.order = [];

     $scope.datHang = function () {
          console.log('th');
          // Tạo đối tượng đơn hàng từ các sản phẩm trong giỏ hàng
          var newOrder = {
               items: $scope.cart.map(function (item) {
                    return {
                         id: item.cart[0].idSP,
                         ten: item.cart[0].tenSP,
                         anh: item.cart[0].anhSP,
                         giaNiemYet: item.cart[0].giaTien,
                         soluong: item.cart[0].soluong,
                         thanhTien: item.cart[0].giaTien * item.cart[0].soluong
                    };
               }),
               userInfo: $scope.userInfo,
               trangThai: "Chưa xác nhận"
          };

          // Gửi yêu cầu POST để tạo đơn hàng mới
          $http.post('http://localhost:3000/don-hang/', newOrder)
          .then(function (response) {
              alert("Đặt hàng thành công!");
              // Lấy ID của giỏ hàng từ dữ liệu giỏ hàng
              var cartId = $scope.cart[0].id;
              // Sau khi đặt hàng thành công, gửi yêu cầu DELETE để xóa giỏ hàng
              $http.delete('http://localhost:3000/gio-hang/' + cartId)
                  .then(function (deleteResponse) {
                      // Xóa thành công, xóa toàn bộ sản phẩm trong giỏ hàng ở phía máy khách
                      $scope.cart = [];
                      // Chuyển hướng đến trang thanh toán
                      window.location.href = "#!order";
                  })
                  .catch(function (error) {
                      console.error("Đã xảy ra lỗi khi xóa giỏ hàng:", error);
                      // Nếu có lỗi khi xóa giỏ hàng, vẫn chuyển hướng đến trang thanh toán
                      window.location.href = "#!/";
                  });
          })
          .catch(function (error) {
              console.error("Đã xảy ra lỗi khi đặt hàng:", error);
              // Nếu có lỗi khi đặt hàng, vẫn chuyển hướng đến trang thanh toán
              window.location.href = "#!/";
          });
      

            
     };



})