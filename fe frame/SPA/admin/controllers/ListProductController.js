window.ListProductController = function ($scope, $http) {
    var api = "http://localhost:3000/products/";

    $scope.listSP = []
    $http.get(api)
        .then(function (response) {
            $scope.listSP = response.data
        })
        .catch(function (error) {
            console.log("Lỗi api");
        })
    $scope.delete =function (id){
        $scope.idDelete =id
    }
    $scope.confirmDelete = function () {
        $http.delete(api + $scope.idDelete)
            .then(function(response){
                alert("Xoá thành công")
            })
            .catch(function(error){
                console.log("Lỗi API");
            })
    }
}