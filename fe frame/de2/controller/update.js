window.update= function($scope,$http,$location,$routeParams){
    var api="http://localhost:3000/post/"

    $http.get(api+ $routeParams.id)
        .then(function(response){
            $scope.data= response.data
            $scope.data.date= new Date(response.data.date)
        })

    $scope.update= function(){
        var date=$scope.data.date.toISOString().split("T")[0]
        var update={
            name: $scope.data.name,
                pass: $scope.data.pass,
                email: $scope.data.email,
                theLoai: $scope.data.theLoai,
                phone: $scope.data.phone,
                date:date
        }
        $http.patch(api+$routeParams.id, update)
            .then(function(response){
                alert("Sửa thành công")
                $location.path("/list")
            })
    }
}