window.ListController = function($scope,$http){
    var api = "http://localhost:3000/users/"


    //lấy dữ liệu từ ủrl
    $http.get(api)
    .then(function(response){
        $scope.listUser = response.data
    })
}