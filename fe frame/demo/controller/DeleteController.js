window.DeleteController = function ($scope, $http, $routeParams, $location) {
  var api = "http://localhost:3000/users/";

  $http.get(api + $routeParams.id).then(function (response) {
    $scope.data = response.data;
  });

  $scope.del = function () {
    let check = confirm("Bạn có muốn xóa hay không");
    if (check) {
      $http.delete(api + $routeParams.id).then(function (response) {
        alert("Xóa thành công");
        $location.path("/list-user");
      });
    }
  };
};
