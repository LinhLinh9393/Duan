console.log("checkOut");
app.controller('checkOut', function ($scope, $http, $routeParams) {
     console.log("checkOut");
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
               tsl += $scope.cart[i].cart[0].soluong;
          }
          return tsl;
     };

     $scope.tongtien = function () {
          var tt = 0;
          for (var i = 0; i < $scope.cart.length; i++) {
               tt += $scope.cart[i].cart[0].soluong * $scope.cart[i].cart[0].giaTien;
          }
          return tt;
     };
     var userId = localStorage.getItem("id");

     if (userId) {

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

          var maVanDon = generateMaVanDon();
          var ngayDatHang = new Date();


          var newOrder = {
               order: $scope.cart.map(function (item) {
                    return {
                         idDH: item.cart[0].idSP,
                         tenDH: item.cart[0].tenSP,
                         anhDH: item.cart[0].anhSP,
                         giaTienDH: item.cart[0].giaTien,
                         soluongDH: item.cart[0].soluong,
                         thanhTienDH: item.cart[0].giaTien * item.cart[0].soluong
                    };
               }),
               userInfo: $scope.userInfo,
               trangThai: "Chưa xác nhận",
               maVanDon: maVanDon,
               ngayDatHang: ngayDatHang
          };

          $http.post('http://localhost:3000/don-hang/', newOrder)
               .then(function (response) {
                    alert("Đặt hàng thành công!");
                    //debugger
               })
               .catch(function (error) {
                    console.error("Đã xảy ra lỗi khi đặt hàng:", error);

               });

          let idArr = []
          $http.get('http://localhost:3000/gio-hang/')
               .then(function (response) {
                    response.data.forEach(item => {
                         idArr.push(item.id)
                    })
                    // console.log(idArr);

                    // $scope.cart = [];

                    // window.location.href = "#!/";
                    idArr.forEach(item => {
                         $http.delete('http://localhost:3000/gio-hang/' + item)
                              .then(function (response) {
                                   debugger
                              })
                              .catch(function (error) {
                                   console.error("Đã xảy ra lỗi khi xóa giỏ hàng:", error);

                              });
                    })
               })
               .catch(function (error) {
                    console.error("Đã xảy ra lỗi khi xóa giỏ hàng:", error);

               });



     };


     // Hàm tạo mã vận đơn tự động
     function generateMaVanDon() {
          // Thực hiện logic tạo mã vận đơn ở đây
          // Ví dụ: có thể sử dụng timestamp hoặc các kỹ thuật tạo mã đặc biệt khác
          return "VD" + Date.now(); // Ví dụ đơn giản: mã vận đơn là VD + timestamp hiện tại
     }

})