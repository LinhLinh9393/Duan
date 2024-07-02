console.log("detailOrder");
app.controller('detailOrderCtrl', function($scope, $http, $routeParams){
     console.log("detailOrderCtrl");
     $scope.order = [];
// Sau khi nhận được dữ liệu đơn hàng từ server
$http({
    method: "GET",
    url: "http://localhost:3000/don-hang/" + $routeParams.id
}).then(function (response) {
    // Lưu dữ liệu đơn hàng vào biến $scope.donHang
    $scope.order = response.data;

});
})