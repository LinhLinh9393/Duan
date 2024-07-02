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

    $scope.delete = function (id) {
        $scope.idDelete = id
    }
    $scope.confirmDelete = function () {
        $http.delete(api + $scope.idDelete)
            .then(function (response) {
                alert("Xoá thành công")
            })
            .catch(function (error) {
                console.log("Lỗi API");
            })
    }
    

    $scope.columnName = ''
    $scope.reverse = false
    $scope.sortData = function(tenCot){
        if($scope.columnName != tenCot){
            $scope.columnName = tenCot
            $scope.reverse = false
        }else{
            $scope.reverse = !$scope.reverse
        }
    }


    $scope.pageNumber=0
    $scope.changePage=function(status){
        if(status == 'next'){
            if($scope.pageNumber == $scope.listSP.length -1){
                $scope.pageNumber = 0
            }else{
                $scope.pageNumber = $scope.pageNumber +2
            }
        }else if(status == 'back'){
            if($scope.pageNumber == 0){
                $scope.pageNumber = $scope.listSP.length -1
            }else{
                $scope.pageNumber = $scope.pageNumber -2
            }
        }
       
    }
}

