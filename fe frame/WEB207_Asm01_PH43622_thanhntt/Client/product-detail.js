console.log("detail");
app.controller('detailCtrl', function ($scope, $http, $routeParams) {
     console.log("detailCtrl", $routeParams);
     $scope.product = {
          id: "",
          ten: "",
          anh: "",
          giaBan: "",
          giaNiemYet: "",
          mota: "",
          tenDanhMuc: "",
          idDanhMuc: ""
     }
     $http({
          method: "GET",
          url: "http://localhost:3000/san-pham/" + $routeParams.id,
     }).then(function (response) {
          // Gán giá trị nhận được từ api vào bién cần thiết
          $scope.product = response.data;
          // Sử dụng ng-repreat để hiện thị biến $scope.dánhachSanPham ra html

     })
     $scope.cart = [];
   
     $scope.addToCart = function (product) {
          console.log("THanh cong");
         var index = $scope.cart.findIndex(p => p.cart[0].idSP == product.cart[0].id);
         if (index >= 0) {
             // Nếu sản phẩm đã tồn tại trong giỏ hàng
             $scope.cart[index].soluong++;
             $scope.cart[index].thanhTien = $scope.cart[index].soluong * $scope.cart[index].giaTien;
     
             // Cập nhật sản phẩm trong giỏ hàng thông qua phương thức PUT
             $http.put('http://localhost:3000/gio-hang/' + $scope.cart[index].id, $scope.cart[index])
                 .then(function(response) {
                     console.log("Dữ liệu giỏ hàng đã được cập nhật thành công.");
                 })
                 .catch(function(error) {
                     console.error("Đã xảy ra lỗi khi cập nhật dữ liệu giỏ hàng:", error);
                 });
         } else {
             // Nếu sản phẩm chưa tồn tại trong giỏ hàng, thêm vào giỏ hàng
             var newProduct = {
                 idSP: product.id,
                 tenSP: product.ten,
                 anhSP: product.anh,
                 giaTien: product.giaNiemYet,
                 soluong: 1,
                 thanhTien: product.giaNiemYet
             }
             $scope.cart.push(newProduct);
             console.log($scope.cart);
             // Gửi đối tượng giỏ hàng hiện tại đến backend
             $http.post('http://localhost:3000/gio-hang/', { cart: $scope.cart })
                 .then(function(response) {
                    alert("Thêm vào giỏ hàng thành công")

                     console.log("Dữ liệu giỏ hàng đã được gửi thành công đến backend.");
                 })
                 .catch(function(error) {
                     console.error("Đã xảy ra lỗi khi gửi dữ liệu giỏ hàng đến backend:", error);
                 });
         }
     
         console.log($scope.cart);
     }
})