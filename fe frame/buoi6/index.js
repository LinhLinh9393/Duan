var myApp = angular.module("myApp", [])

myApp.controller("myController", $scope => {
    $scope.product = {
        image: "https://cdn2.cellphones.com.vn/358x358,webp,q100/media/catalog/product/t/_/t_m_18.png",
        nameProduct: "IPhone 14 pro max",
        typeProduct: "VNA",
        priceProduct: "27.000.000 VNĐ",
        company: "Apple",
        advantages: [
            "Bộ nhớ cao",
            "Hàng mới nhập",
            "Màn hình 120Hz"
        ],
        discount: "5%",
        description: "iPhone 14 Pro được trang bị viên pin cho thời lượng sử dụng lên tới 29 giờ, tương đương 2 ngày sử dụng bình thường. Thời lượng sử dụng đủ dài để bạn có thể sử dụng thoải mái mà không lo hết pin. Ngoài ra, máy cũng hỗ trợ sạc nhanh 20W, nhờ vậy máy có thể sạc tới 50% trong khoảng 30 phút.",
        detail: "Camera chính của iPhone 14 Pro có cảm biến chính 48MP, lớn hơn 65% so với iPhone 13 Pro Max. Bên cạnh đó, máy cũng bổ sung thêm nhiều tính năng chụp hình và quay phim chuyên nghiệp hơn. Chẳng hạn như tính năng ProRAW ở 48 MP, Photonic Engine, Chế độ Hành động,... mang đến hiệu suất chụp ảnh thiếu sáng tốt hơn."
    }
    $scope.kindsOfProduct = [
        {
            name: "Điện thoại di động",
            num: 5
        }, {
            name: "Máy tính xách tay",
            num: 3
        }, {
            name: "Máy tính để bàn",
            num: 7
        }, {
            name: "Quạt máy",
            num: 9
        }, {
            name: "Tivi",
            num: 11
        }, {
            name: "Tủ lạnh",
            num: 15
        }
    ]

    

    
})