var myApp=angular.module("myApp",[])

//custom filter 
myApp.filter('genderStatus',function(){
    return function(input){
        return input == 1 ? "Nam" : "Nữ"
    }
})
myApp.filter('ageStatus',function(){
    return function(input, min, max){
        // input.filter(item =>{
        //     return item.tuoi > min && item.tuoi < max
        // })
        let output=[]
        input.forEach(item => {
            if(item.tuoi > min && item.tuoi < max){
                output.push(item)
            }
        });
        return output
    }
})

myApp.controller("myController", function($scope){
    $scope.employee = [
        {
            nameNV: 'Hoàng',
            ngaysinhNV: new Date('12/3/2002'),
            luong: 2000000,
            gioitinh: 1,
            diachi: "Hà nội",
            tuoi: 21
        }, {
            nameNV: 'Hải',
            ngaysinhNV: new Date('5/20/2002'),
            luong: 5000000,
            gioitinh: 1,
            diachi: "Hải Phòng",
            tuoi: 21
        }, {
            nameNV: 'Hằng',
            ngaysinhNV: new Date('4/25/2002'),
            luong: 10000000,
            gioitinh: 2,
            diachi: "Hà nội",
            tuoi: 21
        }, {
            nameNV: 'Hiếu',
            ngaysinhNV: new Date('1/3/1992'),
            luong: 15000000,
            gioitinh: 1,
            diachi: "Quảng Ninh",
            tuoi: 31
        }, {
            nameNV: 'Duy',
            ngaysinhNV: new Date('1/3/1992'),
            luong: 25000000,
            gioitinh: 1,
            diachi: "Quảng Ninh",
            tuoi: 31
        }, {
            nameNV: 'Hoa',
            ngaysinhNV: new Date('1/3/1998'),
            luong: 5000000,
            gioitinh: 1,
            diachi: "Thái bình",
            tuoi: 25
        }, {
            nameNV: 'Phương',
            ngaysinhNV: new Date('1/3/2000'),
            luong: 4000000,
            gioitinh: 2,
            diachi: "Hà nội",
            tuoi: 23
        }
    ]


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
            if($scope.pageNumber == $scope.employee.length -1){
                $scope.pageNumber = 0
            }else{
                $scope.pageNumber = $scope.pageNumber +2
            }
        }else if(status == 'back'){
            if($scope.pageNumber == 0){
                $scope.pageNumber = $scope.employee.length -1
            }else{
                $scope.pageNumber = $scope.pageNumber -2
            }
        }
       
    }
})