window.AddController = function ($scope, $http, $location) {
  var api = "http://localhost:3000/users/";

  $scope.reset = function () {
    $scope.data = {
      name: "",
      password: "",
      email: "",
      chuc_nang: "Khách hàng",
      phone: "",
    };
  };
  $scope.data = {
    name: "",
    password: "",
    email: "",
    chuc_nang: "1",
    phone: "",
  };
  // validate
  $scope.validate = {
    name: false,
    password: false,
    email: false,
    phone: false,
  };
  $scope.regex = {
    name: false,
    email: false,
    phone: false,
  };
  $scope.so = {
    phone: false,
  };

  //   Cách 1:

    function checkEmty() {
      var regexEmail = /^\S+@\S+\.\S+$/;

      $scope.validate.name = $scope.data.name == "" ? true : false;
      $scope.validate.password = $scope.data.password == "" ? true : false;
      $scope.validate.email = $scope.data.email == "" ? true : false;
      $scope.validate.phone = $scope.data.phone == "" ? true : false;

      $scope.regex.name =
        $scope.data.name.length < 10 || $scope.data.name.length > 50
          ? true
          : false;

      $scope.regex.email = !regexEmail.test($scope.data.email) ? true : false;
      $scope.so.phone = isNaN($scope.data.phone) ? true :false
      $scope.regex.phone =
        ($scope.data.phone).length >10 || ($scope.data.phone).length<10
          ? true
          : false;

      if (
        $scope.validate.name ||
        $scope.validate.password ||
        $scope.validate.email ||
        $scope.validate.phone ||
        $scope.regex.name ||
        $scope.regex.email ||
        $scope.regex.phone ||
        $scope.so.phone
      ) {
        return false;
      } else {
        return true;
      }
    }

  //cách 2
//   function checkEmty() {
//     var regexEmail = /^\S+@\S+\.\S+$/;
//     if ($scope.data.name == "") {
//       $scope.validate.name = true;
//       return false;
//     }
//     else if ($scope.data.name.length < 10 || $scope.data.name.length > 50) {
//       $scope.validate.name = false;
//       $scope.regex.name = true
//       return false;
//     } else {
//       return true;
//       $scope.regex.name = false;
//     }

//     if ($scope.data.password == "") {
//       $scope.validate.password = true;
//       return false;
//     } else {
//       return true;
//       $scope.validate.password = false;
//     }

   
//   }

  //thêm dữ liệu vào db
  $scope.add = function () {
    if (checkEmty()) {
      $http.post(api, $scope.data).then(function (response) {
        $scope.data = response.data;
        alert("Thêm thành công");
        $location.path("/list-user");
      });
    }
  };
};
