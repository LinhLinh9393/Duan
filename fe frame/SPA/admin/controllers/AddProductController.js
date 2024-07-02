window.AddProductController = function($scope, $http, $location){
    $scope.submit = function(){
        var api="http://localhost:3000/products/"
        $http.post(api, $scope.data)
            .then(function(response){
                alert("Thêm mới thành công")
                $location.path("/list-product")
            })
            .catch(function(error){
                console.log("Lỗi API");
            })
    }
}