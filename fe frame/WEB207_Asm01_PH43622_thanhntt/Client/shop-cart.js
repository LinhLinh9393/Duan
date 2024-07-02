app.controller('cartCtrl', function ($scope, $http) {
    console.log("cartCtrl");
    $scope.cart = [];
    // Lấy danh sách sản phẩm trong giỏ hàng từ API
    $http({
        method: "GET",
        url: "http://localhost:3000/gio-hang"
    }).then(function (response) {
        $scope.cart = response.data;
    });
    $scope.updateCartItem = function (item) {
        var updatedItem = generateCartItem(item); // Tạo cấu trúc dữ liệu phù hợp

        $http.put(`http://localhost:3000/gio-hang/${item.id}`, updatedItem)
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
            cart: [
                {
                    idSP: item.cart[0].idSP, // ID của sản phẩm
                    tenSP: item.cart[0].tenSP, // Tên sản phẩm
                    anhSP: item.cart[0].anhSP, // Đường dẫn ảnh sản phẩm
                    giaTien: item.cart[0].giaTien, // Giá tiền của sản phẩm
                    soluong: item.cart[0].soluong, // Số lượng mới
                    thanhTien: item.cart[0].giaTien * item.cart[0].soluong // Thành tiền của sản phẩm
                }
            ]
        };
    }

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

    $scope.submitDel = function (cart_id) {
        // Hiển thị hộp thoại xác nhận
        var isConfirmed = confirm("Bạn có chắc chắn muốn xóa không?");

        // Nếu người dùng đồng ý xóa
        if (isConfirmed) {
            $http({
                method: "DELETE",
                url: "http://localhost:3000/gio-hang/" + cart_id,
            }).then(function (response) {
                // Xử lý khi xóa thành công
                alert("Xóa thành công");
                // Sau khi xóa thành công, cập nhật lại danh sách sản phẩm trong giỏ hàng
                $http({
                    method: "GET",
                    url: "http://localhost:3000/gio-hang"
                }).then(function (response) {
                    $scope.cart = response.data;
                });
            }, function (error) {
                // Xử lý khi có lỗi xảy ra trong quá trình xóa
                console.error("Lỗi khi xóa sản phẩm:", error);
                alert("Đã có lỗi xảy ra khi xóa sản phẩm. Vui lòng thử lại sau.");
            });
        }
    };
 
});
