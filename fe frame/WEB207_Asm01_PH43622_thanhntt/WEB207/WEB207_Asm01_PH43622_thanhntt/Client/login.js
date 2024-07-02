app.controller('loginCtrl', function ($scope, $http) {
     console.log('loginCtrl');
   
     $scope.user = {
       email: '',
       password: ''
     };
   
     $scope.formValidate = {
       trangThai: true,
       noiDung: '',
     };
   
     $scope.formDangNhap = function () {
       console.log('formDangNhap');
   
       $scope.formValidate.trangThai = true;
       $scope.formValidate.noiDung = '';
   
       if (!$scope.user.email || !$scope.user.password) {
         $scope.formValidate.trangThai = false;
         $scope.formValidate.noiDung = 'Vui lòng nhập đầy đủ thông tin đăng nhập.';
         return;
       }
   
       $http({
         method: 'POST',
         url: 'http://localhost:3000/user',
         data: $scope.user,
       }).then(function (response) {
         const serverEmail = response.data.email;
         const serverPassword = response.data.password;
   
         if ($scope.user.email === serverEmail && $scope.user.password === serverPassword) {
           alert('Đăng nhập thành công');
           window.location.href = '#!/';
         } else {
           $scope.formValidate.trangThai = false;
           $scope.formValidate.noiDung = 'Đăng nhập thất bại. Sai email hoặc mật khẩu.';
         }
       });
     };
   });
   