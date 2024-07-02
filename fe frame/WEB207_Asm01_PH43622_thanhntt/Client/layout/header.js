app.controller("header", function ($scope) {

    // Kiểm tra xem liệu 'hoTen' có tồn tại trong localStorage hay không
    if (localStorage.getItem("hoTen")) {
        $scope.nameAccount = localStorage.getItem("hoTen");
        $scope.isLoggedIn = true; // Đánh dấu là người dùng đã đăng nhập
        $scope.isAdmin = true; // Đánh dấu là người dùng đã đăng nhập
    } else {
        $scope.nameAccount = "Xin chào"; // Nếu không có, hiển thị "Xin chào"
        $scope.isLoggedIn = false; // Đánh dấu là người dùng chưa đăng nhập
    }

    $scope.logout = function () {
        var confirmLogout = confirm("Bạn có chắc chắn muốn đăng xuất?");

        // Nếu người dùng đồng ý đăng xuất
        if (confirmLogout) {
            localStorage.removeItem("id");
            localStorage.removeItem("hoTen");
            $scope.nameAccount = "Xin chào"; // Cập nhật nameAccount thành "Xin chào" sau khi đăng xuất
            $scope.isLoggedIn = false; // Đánh dấu là người dùng chưa đăng nhập
            alert("Đăng xuất thành công");
            window.location.href = "#!login";
        }
    };

});
