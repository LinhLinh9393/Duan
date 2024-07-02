-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 06, 2023 lúc 02:00 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `idsp` int(10) NOT NULL,
  `iduser` int(11) NOT NULL,
  `ngaybinhluan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `idsp`, `iduser`, `ngaybinhluan`) VALUES
(76, 'bé rất đáng yêu', 4, 2, '2023-12-06'),
(79, 'bé rất đáng yêu', 4, 2, '2023-12-06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(1, 'Chó Cảnh'),
(2, 'Mèo Cảnh'),
(3, 'Chuột cảnh'),
(4, 'Phụ kiện thú cưng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(0, 'user'),
(1, 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(25) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL DEFAULT 0.00,
  `img` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `luotmua` int(20) NOT NULL DEFAULT 0,
  `iddm` int(11) NOT NULL,
  `trangthai` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `luotmua`, `iddm`, `trangthai`) VALUES
(1, 'Chó Phốc Sóc teacup vàng cam', 2400000.00, 'Chó Phốc Sóc teacup vàng cam.jpg', 'Chó Phốc Sóc teacup vàng cam trông vô cùng đáng yêu và năng động. Là một cô công chúa nhỏ 8 tháng tuổi sở hữu ngoại hình nổi bật khoác trên mình bộ áo màu vàng cam bồng bềnh, mềm mượt cùng ánh mắt toát kên sự thần thái, sang trọng. Các bạn để ý chiếc đuôi không?  Lông đuôi vô cùng dày, cong lên một độ cong hoàn hảo. Bé cái được 8 tháng tuổi, tiêm đầy đủ 3 mũi và xổ giun 3 lần rồi đó các tình yêu.\r\n\r\nChó Phốc Sóc là giống chó khiến người gặp người khen bởi ngoài hình của các bé vô cùng dễ thương cùng tính cách hiếu động, hoạt bát, yêu đời, luôn luôn chọc người cười, người cưng.', 10, 1, 0),
(2, 'Mèo Anh lông ngắn chân lùn', 2000000.00, 'meo anh.png', 'Mèo Anh lông ngắn chân lùn là bé mèo đực 2 tháng tuổi siêu đáng yêu luôn cả nhà mình ơi. Bộ lông ngắn mà dày lại còn bông xù, mềm mượt như mây. Đôi mắt to, tròn xoe, linh động, hoạt bát vô ngần. Đôi chân ngắn, bé xinh, mỗi bước đi đều ngập tràn sự đáng yêu luôn. Tính cách của giống mèo Anh lông ngắn thì chắc hẳn ai cũng biết rồi, bé khá trầm tĩnh, tự chơi tư vui các tình yêu ạ. Các bé không hề gây rắc rối cho chủ nuôi một xíu nào hết, thích hợp cho những ai yêu sự tĩnh lặng mà vẫn muốn có một cục bông để vuốt ve. Cả 2 bé đều được 2 tháng tuổi, tiêm 1 mũi vacxin và xổ giun rồi đó ạ.\r\n\r\nMèo Anh lông ngắn cùng cặp chân lùn là biểu tượng của sự đáng yêu nhất trên trần đời này. Bản tính của mèo vô cùng sạch sẽ, không gây phiền hà cho chủ nuôi, xứng đáng nhận được sự yêu thương của tất cả mọi người trên thế giới.', 8, 2, 0),
(3, 'Hạt Pedigree Puppy vị gà và trứng 400g', 59000.00, 'Hat-Pedigree-Puppy-vi-ga-va-trung-400g.jpg', 'Thức ăn dạng hạt Pedigree Puppy vị gà sốt trứng đem đến những bữa ăn đầy đủ chất dinh dưỡng, cùng hương vị ngon miệng kích thích các bé ăn uống. Với dạng thức ăn ướt mềm, nấu chín kĩ bảo vệ răng giúp cún con dễ tiêu hoá và hấp thụ.', 17, 4, 0),
(4, 'Mèo Ba Tư màu kem', 15000000.00, 'meo ba tu.jpg', 'Mèo Ba Tư màu kem 3 tháng tuổi sở hữu vóc dáng bụ bẫm đáng yêu cùng thần thái sang trọng quý phái, chất lông đẹp mềm mượt, mèo con được thừa hưởng những ưu điểm nổi bật từ gen bố mẹ. Bé là cô mèo xinh đẹp, nhanh nhẹn, rất dễ nuôi, đôi mắt thông minh, đầy mị lực làm say đắm mọi người xung quanh, mèo con đã sẵn sàng được đón về nhà mới.', 15, 2, 0),
(5, 'Chó Chihuahua mini màu kem', 10000000.00, 'cho chihuahua vang kem.jpg', 'Chó Chihuahua mini màu kem sở hữu thân hình vô cùng bé nhỏ với chiếc đầu nhỏ nhắn tròn trông rất đáng yêu và dễ thương. Bộ lông màu kem vani càng tô điểm thêm vẻ đẹp của chú chó này.\r\n\r\nChihuahu là giống chó được coi là nhỏ nhất trên thế giới với bề ngoài đáng yêu nên ai cũng yêu thích giống chó này.', 7, 1, 0),
(6, 'Hamster bear 1', 1000000.00, 'Hamster.jpg', 'Hamster bear là một trong những loại chuột hamster lớn nhất, có màu sắc và các bố trí màu lông đa dạng với nhiều kiểu hình khác nhau còn được gọi với cái tên Syrian có đặc tính hiền lành nên được được nhiều em nhỏ yêu thích. Bé Hamster được 8 tháng tuổi là một cậu bé ham ăn rất đáng yêu.\r\n\r\n', 13, 3, 0),
(7, 'Nhà cây một tổ ngủ cho mèo', 1500000.00, 'nha-cay-cho-meo-nupet-3.jpg', 'Sản phẩm được làm bằng gỗ ép tạo cảm giác sang trọng và chắc chắn. Với cấu trúc hình hộp ở dưới có cửa vào hình mặt mèo đáng yêu trông rất rộng rãi, là chỗ ngủ cho mèo. Đây là sản phẩm vừa đơn giản vừa đầy đủ các tiện nghi cho Boss và có một cái cầu thang bé và một cái võng bằng nhung êm ái. Bên trên là những vật dụng, đồ chơi của các bé để xả stress, giảm căng thẳng bằng cách cào móng, vui chơi nô đùa.\r\n\r\nCông dụng và ưu điểm của sản phẩm:\r\n - Sản phẩm làm từ chất liệu gỗ ép chắc chắn\r\n - Thiết kế đơn giản, độ tiện nghi cao\r\n - Là không gian nghỉ ngơi, thư giãn cũng như vui chơi của mèo cưng', 7, 4, 0),
(8, 'Hamster vàng chanh\r\n', 1200000.00, 'Hamster bear.jpg', 'Chuột hamster 10 tháng tuổi có kích thước nhỏ bộ lông mềm màu vàng chanh bao phủ khắp cơ thể. Chuột hams có đuôi nhưng cực kì ngắn (khoảng 1 cm) và có 1 lớp lông mỏng bao phủ dường như chẳng để làm gì cả.Hãy sẵn sàng đưa bé về nhà ngay!! ', 11, 3, 0),
(9, 'Chó Phốc Sóc teacup màu trắng', 1900000.00, 'cho phoc.jpg', 'Chó Phốc Sóc teacup màu trắng là chàng hoàng tử bé 2 tháng tuổi sở hữu ngoại hình vô cùng đẹp mắt, chỉ cần một nhìn thôi là khó quên cả đời đó nha. Bộ lông trắng tinh, siêu bông xù, mềm mượt mà như lụa quý, kết hợp với đôi mắt đen lay láy cùng chiếc miệng xinh xắn. Trông yêu lắm các bạn ạ. Cầm trên tay chúng ta chỉ mướn vuốt ve, cưng nựng bé thôi. Hiện tại, bé Phốc Sóc được 2 tháng tuổi, tiêm 1 mũi vacxin và xổ giun một lần, vô cùng hợp thời để đón về nhà rồi ạ.\r\n\r\nChó Phốc Sóc là giống chó vô cùng thích hợp cho những bạn nuôi chó lần đầu đó ạ, bởi các bé rất dễ chăm, ăn khỏe, mau lớn, rất tinh nghịch nhưng cũng vô cùng nghe lời, ngoan ngoãn', 12, 1, 0),
(10, 'Váy hồng Sakura cho chó mèo', 150000.00, 'vay-hong-Sakura-cho-cho-meo.jpg', 'Chiếc váy vô cùng xinh xắn, dễ thương phù hợp cho các bạn thú cưng nhỏ mặc để đi chơi, đi du lịch. Được thiết kế tinh tế với họa tiết kẻ sọc hồng, tô điểm với những bông hoa anh đào xinh xắn là điểm thu hút, đáng chú ý của sản phẩm này.  Bộ váy mang tính thời trang này có nhiều kích cỡ chủ yếu là cho các bạn thú cưng nhỏ.', 14, 4, 0),
(11, 'Mèo Ragdoll Lilac', 7900000.00, 'anh-meo-ragdoll.jpg', 'Cô mèo Ragdoll Lilac 2 tháng tuổi với vóc dáng chuẩn chất lông đẹp dày dặn kiêu sa, bé đã được tiêm phòng tẩy, giun đầy đủ chắc chắn sẽ là người bạn nhỏ đáng yêu nếu được đón về gia đình bạn. Sở hữu vóc dáng cân đối cùng màu lông kem nổi bật sang trọng thu hút ánh nhìn từ phía mọi người, mèo con được thừa hưởng những ưu điểm nổi bật từ gen bố mẹ.', 12, 2, 0),
(12, 'Thức ăn hạt Tony Cat túi 1.5kg dành cho mèo', 120000.00, 'thuc-an-cho-meo.jpg', 'Thức ăn hạt Tony Cat dành cho mèo trưởng thành vị cá ngừ thơm ngon làm bùng nổ vị giác của thú cưng kích thích sự ăn uống của các bé. Với các thành phần giàu dinh dưỡng, hạt giúp các bé phát triển toàn diện, hấp thụ tốt trong mỗi bữa ăn.\r\n\r\n', 11, 4, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `diachi` varchar(225) NOT NULL,
  `dienthoai` varchar(20) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `ten`, `diachi`, `dienthoai`, `role`) VALUES
(1, 'linh', 'a123456', 'linhdttph43993@fpt.edu.vn', 'linh', 'Hà Nội', '0123456789', 1),
(2, 'linhlinh', 'a123456', 'linhlinh@gmail.com', 'linhlinh', 'Hà Nội', '0123456789', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id` int(11) NOT NULL,
  `iddh` int(11) NOT NULL,
  `idpro` int(11) NOT NULL,
  `soluong` int(11) NOT NULL DEFAULT 0,
  `dongia` double(10,2) NOT NULL DEFAULT 0.00,
  `tensp` varchar(50) NOT NULL,
  `trangthai` tinyint(11) NOT NULL DEFAULT 1 COMMENT '1. Đang chờ duyệt\r\n2. Đã xác nhận\r\n3. Đang vận chuyển\r\n4. Hoàn thành'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`id`, `iddh`, `idpro`, `soluong`, `dongia`, `tensp`, `trangthai`) VALUES
(1, 1, 1, 1, 2400000.00, 'Chó Phốc Sóc teacup vàng cam', 1),
(2, 2, 2, 2, 2000000.00, 'Mèo Anh lông ngắn chân lùn', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `madh` varchar(20) NOT NULL,
  `tongtien` double(10,2) NOT NULL DEFAULT 0.00,
  `id_user` int(11) DEFAULT 0,
  `hoten` varchar(30) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sdt` varchar(20) NOT NULL,
  `pttt` tinyint(1) NOT NULL DEFAULT 1,
  `trangthai` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1. Đang chờ duyệt\r\n2. Đã xác nhận\r\n3. Đang vận chuyển\r\n4. Hoàn thành'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `madh`, `tongtien`, `id_user`, `hoten`, `diachi`, `email`, `sdt`, `pttt`, `trangthai`) VALUES
(0, '', 150000.00, 0, 'linh', 'Hà Nội', 'linhlinh@gmail.com', '0123456789', 1, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idsp` (`idsp`),
  ADD KEY `iduser` (`iduser`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ID` (`iddm`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`role`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`idsp`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `ID` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);

--
-- Các ràng buộc cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `taikhoan_ibfk_1` FOREIGN KEY (`role`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
