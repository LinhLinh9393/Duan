app.controller('search', function ($scope, $http) {
    console.log("search");

    $scope.nameAccount = localStorage.getItem("hoTen")
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
        console.log("Thành công", response.data);
        $scope.danhSachSanPham = response.data;
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
    //$scope.cart = [];
    $http.get('http://localhost:3000/gio-hang/')
        .then(function (response) {
            $scope.cart = response.data

        })
        .catch(function (error) {
            console.error("Đã xảy ra lỗi khi cập nhật dữ liệu giỏ hàng:", error);
        });

        $scope.addToCart = function (item) {
            var index = $scope.cart.findIndex(p => p.idSP == item.id);
            if (index >= 0) {
                // Product already exists in the cart, update its quantity and total price
                $scope.cart[index].soluong++;
                $scope.cart[index].thanhTien = $scope.cart[index].soluong * $scope.cart[index].giaTien;
                // Update the existing product in the backend
                $http.put('http://localhost:3000/gio-hang/' + $scope.cart[index].id, $scope.cart[index])
                    .then(function (response) {
                        console.log("Cart data updated successfully.");
                    })
                    .catch(function (error) {
                        console.error("Error updating cart data:", error);
                    });
            } else {
                // Product doesn't exist in the cart, add it to the cart
                var newItem = {
                    idSP: item.id,
                    tenSP: item.ten,
                    anhSP: item.anh,
                    giaTien: item.giaNiemYet,
                    soluong: 1,
                    thanhTien: item.giaNiemYet
                };
                // Clear the existing cart before adding the new item
                $scope.cart = [];
                // Push the new item to the cart
                $scope.cart.push(newItem);
                // Send the updated cart data to the backend
                $http.post('http://localhost:3000/gio-hang/', { cart: $scope.cart })
                    .then(function (response) {
                        alert("Product added to cart successfully.");
                        console.log("Cart data sent to backend successfully.");
                    })
                    .catch(function (error) {
                        console.error("Error sending cart data to backend:", error);
                    });
            }
        };
        

        // console.log($scope.cart);



})

