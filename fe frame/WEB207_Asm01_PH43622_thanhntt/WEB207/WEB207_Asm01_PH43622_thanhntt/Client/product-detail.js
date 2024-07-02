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
          console.log("thành cong", response.data);
          // Gán giá trị nhận được từ api vào bién cần thiết
          $scope.product = response.data;
          // Sử dụng ng-repreat để hiện thị biến $scope.dánhachSanPham ra html

     })
})