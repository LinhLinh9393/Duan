console.log("listOrder");
app.controller('listOrderCtrl', function ($scope, $http) {
     console.log("listOrderCtrl");

     // Sau khi nhận được dữ liệu đơn hàng từ server
   // Sau khi nhận được dữ liệu đơn hàng từ server
$http({
     method: "GET",
     url: "http://localhost:3000/don-hang"
 }).then(function (response) {
     // Lưu dữ liệu đơn hàng vào biến $scope.donHang
     $scope.donHang = response.data;
     
     // Duyệt qua mỗi bản ghi trong bảng đơn hàng
     angular.forEach($scope.donHang, function(donHang) {
         // Tính số lượng phần tử trong mảng order của mỗi bản ghi đơn hàng
         donHang.soLuongSanPham = donHang.order.length;
         
         // Tính tổng tiền cho mỗi bản ghi đơn hàng
         donHang.tongTien = tinhTongTien(donHang.order);
     });
 });
 
 // Hàm tính tổng tiền từ một mảng sản phẩm
 function tinhTongTien(items) {
     var tongTien = 0;
     // Duyệt qua từng sản phẩm trong mảng items
     angular.forEach(items, function(item) {
         // Tính tổng tiền bằng cách nhân số lượng với giá tiền và cộng dồn vào biến tongTien
         tongTien += item.giaTienDH * item.soluongDH;
     });
     return tongTien;
 }

});
