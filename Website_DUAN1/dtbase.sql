-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 06, 2023 lúc 06:27 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1_team12`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `id` int(11) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pro` int(11) NOT NULL,
  `ngaybinhluan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`id`, `noidung`, `id_user`, `id_pro`, `ngaybinhluan`) VALUES
(6, 'Sản phẩm mặc rất ưng ý. Giao hàng đúng thời hạn.', 4, 1, '2023-11-15'),
(21, 'Sản phẩm mặc rất ưng ý. Giao hàng đúng thời hạn.', 4, 2, '2023-11-21'),
(26, 'Sản phẩm mặc rất ưng ý. Giao hàng đúng thời hạn.', 12, 2, '2023-11-22'),
(27, 'Sản phẩm mặc rất ưng ý. Giao hàng đúng thời hạn.', 12, 3, '2023-11-22'),
(28, 'Sản phẩm mặc rất ưng ý. Giao hàng đúng thời hạn.', 4, 5, '2023-11-23'),
(29, 'Sản phẩm mặc rất ưng ý. Giao hàng đúng thời hạn.', 4, 6, '2023-12-04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_don_hang`
--

CREATE TABLE `chi_tiet_don_hang` (
  `id_ctdh` int(11) NOT NULL,
  `ma_dh` int(11) NOT NULL,
  `ma_sp` int(11) NOT NULL,
  `color` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `soluong` int(11) NOT NULL,
  `thanh_tien` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `code_cart` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chi_tiet_don_hang`
--

INSERT INTO `chi_tiet_don_hang` (`id_ctdh`, `ma_dh`, `ma_sp`, `color`, `size`, `soluong`, `thanh_tien`, `created_at`, `updated_at`, `code_cart`) VALUES
(1, 2, 7, 'Nâu', 'XXL', 3, 1047000, '2023-11-29 06:13:47', '2023-11-29 06:13:47', ''),
(2, 3, 8, 'Trắng', 'M', 20, 5980000, '2023-11-29 18:53:59', '2023-11-29 18:53:59', ''),
(3, 4, 5, 'Vàng', 'S', 3, 1257000, '2023-12-01 15:28:26', '2023-12-01 15:28:26', ''),
(4, 4, 4, 'Trắng', 'L', 2, 208000, '2023-12-01 15:28:26', '2023-12-01 15:28:26', ''),
(5, 5, 6, 'Xám', 'XL', 4, 1596000, '2023-12-01 16:20:41', '2023-12-01 16:20:41', ''),
(6, 6, 3, 'Đen', 'S', 2, 698000, '2023-12-01 17:38:24', '2023-12-01 17:38:24', ''),
(9, 9, 6, 'Xám', 'XL', 2, 798000, '2023-12-04 06:49:40', '2023-12-04 06:49:40', ''),
(10, 10, 1, 'Trắng', 'XL', 4, 1856000, '2023-12-04 10:23:39', '2023-12-04 10:23:39', ''),
(11, 10, 1, 'Vàng', 'L', 2, 878000, '2023-12-04 10:23:39', '2023-12-04 10:23:39', ''),
(17, 16, 6, 'Xám', 'XL', 4, 1596000, '2023-12-05 14:21:38', '2023-12-05 14:21:38', ''),
(22, 21, 2, 'Đen', 'L', 2, 998000, '2023-12-06 14:09:56', '2023-12-06 14:09:56', '4172'),
(23, 22, 5, 'Vàng', 'S', 3, 1157000, '2023-12-06 14:20:01', '2023-12-06 14:20:01', '4174'),
(29, 26, 5, 'Vàng', 'S', 2, 838000, '2023-12-06 17:17:42', '2023-12-06 17:17:42', '2696');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_san_pham`
--

CREATE TABLE `chi_tiet_san_pham` (
  `id_ctsp` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `color` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chi_tiet_san_pham`
--

INSERT INTO `chi_tiet_san_pham` (`id_ctsp`, `id_sp`, `color`, `size`, `soluong`) VALUES
(2, 1, 'Vàng', 'L', 16),
(7, 1, 'Trắng', 'XL', 4),
(27, 3, 'Đen', 'S', 10),
(30, 2, 'Đen', 'L', 8),
(31, 4, 'Trắng', 'L', 12),
(32, 5, 'Vàng', 'S', 15),
(33, 6, 'Xám', 'XL', 5),
(34, 7, 'Nâu', 'XXL', 10),
(35, 8, 'Trắng', 'M', 20);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_muc`
--

CREATE TABLE `danh_muc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `trangthai` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danh_muc`
--

INSERT INTO `danh_muc` (`id`, `name`, `img`, `trangthai`) VALUES
(6, '', NULL, 0),
(7, 'Áo sơ mi', 'danhmuc3.webp', 0),
(8, 'Áo phông', 'danhmuc1.webp', 0),
(9, 'Áo polo', 'danhmuc2.webp', 0),
(10, 'Áo nỉ', 'danhmuc4.webp', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_hang`
--

CREATE TABLE `don_hang` (
  `id_dh` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_trangthai` int(11) NOT NULL,
  `ten_nguoi_nhan` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sdt_nguoi_nhan` int(11) NOT NULL,
  `dia_chi_nguoi_nhan` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `pt_thanh_toan` varchar(50) NOT NULL,
  `pt_van_chuyen` int(11) NOT NULL,
  `cart_status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `don_hang`
--

INSERT INTO `don_hang` (`id_dh`, `id_user`, `id_trangthai`, `ten_nguoi_nhan`, `email`, `sdt_nguoi_nhan`, `dia_chi_nguoi_nhan`, `created`, `updated_at`, `pt_thanh_toan`, `pt_van_chuyen`, `cart_status`) VALUES
(2, 4, 2, 'Dũng', 'dungndph35764@fpt.edu.vn', 376318876, 'Hà Nội', '2023-11-29 06:13:47', '2023-11-29 06:13:47', '0', 0, 0),
(3, 12, 2, 'Mạnh', 'nguyenduymanh010180@gmail.com', 376318876, '32 - ĐH06 - Đức Giang - Hoài Đức - Hà Nội', '2023-11-29 18:53:59', '2023-11-29 18:53:59', '0', 0, 0),
(4, 4, 1, 'Chung', 'chung2k4@gmail.com', 376318876, 'Hồ Chí Minh', '2023-12-01 15:28:26', '2023-12-01 15:28:26', '0', 0, 0),
(5, 12, 4, 'Chi', 'chung2k4ndc@gmail.com', 376318876, 'Hải Phòng', '2023-12-01 16:20:41', '2023-12-01 16:20:41', '0', 0, 0),
(6, 13, 4, 'Nam', 'nam2k4ndc@gmail.com', 376318876, 'Cầu Giấy - Hà Nội', '2023-12-01 17:38:24', '2023-12-01 17:38:24', '0', 0, 0),
(9, 34, 1, 'Hiếu', 'hieunmph35831@fpt.edu.vn', 886329865, 'Ba Vì', '2023-12-04 06:49:40', '2023-12-04 06:49:40', '0', 0, 0),
(10, 13, 2, 'Dũng', 'nguyenduymanh010180@gmail.com', 376318876, 'Hà Nội', '2023-12-04 10:23:39', '2023-12-04 10:23:39', '0', 0, 0),
(16, 12, 1, 'Uyên', 'chung2k4ndc@gmail.com', 376318876, 'Hà Nam', '2023-12-05 14:21:38', '2023-12-05 14:21:38', 'tienmat', 0, 0),
(21, 13, 1, 'Dũng', 'chung2k4@gmail.com', 376318876, 'Hồ Chí Minh', '2023-12-06 14:09:56', '2023-12-06 14:09:56', 'vnpay', 0, 0),
(22, 4, 1, 'Ngân', 'chung2k4ndc@gmail.com', 943869846, 'Bắc Giang', '2023-12-06 14:20:01', '2023-12-06 14:20:01', 'vnpay', 0, 1),
(26, 4, 1, 'Liên', 'chung2k4ndc@gmail.com', 943869846, 'Bắc Giang', '2023-12-06 17:17:42', '2023-12-06 17:17:42', 'momo', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `momo`
--

CREATE TABLE `momo` (
  `id` int(11) NOT NULL,
  `partner_code` varchar(255) NOT NULL,
  `order_id` int(11) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `order_info` varchar(255) NOT NULL,
  `order_type` varchar(255) NOT NULL,
  `trans_id` int(11) NOT NULL,
  `pay_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `momo`
--

INSERT INTO `momo` (`id`, `partner_code`, `order_id`, `amount`, `order_info`, `order_type`, `trans_id`, `pay_type`) VALUES
(5, 'MOMOBKUN20180529', 2696, '838000', 'Thanh toán qua MoMo', 'momo_wallet', 2147483647, 'napas');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `price_old` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `mota` text DEFAULT NULL,
  `luotxem` varchar(255) NOT NULL DEFAULT '0',
  `ngaynhapkhau` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`id`, `name`, `price`, `price_old`, `img`, `mota`, `luotxem`, `ngaynhapkhau`, `iddm`) VALUES
(1, 'Áo nỉ ', 489000, 599000, 'upload1.webp', 'Áo được thiết kế vừa vặn, thoải mái, tiện lợi trong mọi hoạt động. Áo phù hợp để mặc thường ngày, dễ dàng phối layer tạo nhiếu set thời trang đa phong cách (lịch sự, ấn tượng, trẻ trung....)\r\nSự kết hợp của 2 thành phần sợi cotton và polyester giúp sản phẩm giữ form dáng tốt nhưng vẫn đảm bảo độ xốp và thoáng khí. Màu sắc bền đẹp và độ bền của sản phẩm cao.', '0', '2023-11-27 10:35:13', 10),
(2, 'Áo polo nam kẻ ngang dáng suông', 499000, 599000, 'upload2.webp', 'Áo polo sợi nam cộc tay có dáng áo regular với đặc trưng vừa phần vai, phần thân và tay áo hơi ôm vào body nhưng không đem lại sự khó chịu hay bó sát. Trong tiết trời nóng lạnh thất thường mỗi khi giao mùa, áo polo sợi sẽ là sự lựa chọn hoàn hảo và hoàn toàn phù hợp với nhiệt độ với thời điểm đặc biệt như này, để mọi người có thể tự tin diện khi dạo phố, đi làm, hẹn hò,… bất chấp thời tiết thay đổi thế nào. Chính vì vậy, áo polo sợi hội tụ đủ những yếu tố mà mọi người cần: lịch sự, chỉn chu nhưng lại không quá formal.', '10', '2023-11-27 10:35:23', 9),
(3, 'Áo nỉ nam in nhỏ ở ngực', 349000, 499000, 'upload3.jpg', 'Áo nỉ chất liệu cotton pha, cổ áo, gấu tay và gấu thân tra bo, phom regular.', '0', '2023-11-27 10:35:36', 10),
(4, 'Áo phông nam cổ tim cộc tay dáng suông', 104000, 149000, 'upload4.webp', 'Áo phông chất liệu cotton pha, cổ tim, tay cộc, phom regular.', '20', '2023-11-27 10:35:53', 8),
(5, 'Áo sơ mi nam cổ đức cộc tay hai túi ốp ngực có hình in', 419000, 599000, 'upload5.webp', 'Áo sơ mi chất liệu cotton pha, cổ đức tay cộc, 2 túi ốp ngực.', '35', '2023-11-27 10:36:25', 7),
(6, 'Áo polo nam cổ đức cộc tay có hình thêu nhỏ', 399000, 499000, 'upload6.webp', 'Áo polo chất liệu cotton pha, cổ đức tay cộc.', '0', '2023-11-27 10:36:25', 9),
(7, 'Áo polo nam cổ đức cộc tay dáng suông', 349000, 499000, 'upload7.webp', 'Áo polo chất liệu cotton pha, cổ đức tay cộc, phom regular.', '32', '2023-11-27 10:36:25', 9),
(8, 'Áo polo nam bo cổ và tay dáng suông họa tiết kẻ', 299000, 599000, 'upload8.webp', 'Áo polo chất liệu cotton spandex, cổ và tay bằng bo, phom regular.', '54', '2023-11-27 10:36:25', 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tel` int(11) DEFAULT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tai_khoan`
--

INSERT INTO `tai_khoan` (`id`, `user`, `pass`, `email`, `avatar`, `address`, `tel`, `role`) VALUES
(1, 'admin', '123456', 'dungndph35764@fpt.edu.vn', 'admin.jpg', 'Hà Nội', 886329865, 1),
(4, 'dungngduy', '1111', 'chung2k4ndc@gmail.com', 'avt.jpeg', 'Bắc Giang', 943869846, 0),
(5, 'dung', '189', 'dungndph35764@gmail.com', 'avt.jpeg', 'Hải Phòng', 376318876, 0),
(12, 'nguyenduydung', '123', 'chung2k4ndc@gmail.com', 'avt.jpeg', 'Hà Nam', 376318876, 0),
(13, 'ddung', '111', 'chung2k4@gmail.com', 'avt.jpeg', 'Hồ Chí Minh', 376318876, 0),
(34, 'hieu', '1233', 'hieunmph35831@fpt.edu.vn', 'avt.jpeg', 'Ba Vì', 886329865, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thong_ke`
--

CREATE TABLE `thong_ke` (
  `id` int(11) NOT NULL,
  `ngaydat` varchar(255) NOT NULL,
  `donhang` int(11) NOT NULL,
  `doanhthu` int(11) NOT NULL,
  `soluongban` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `thong_ke`
--

INSERT INTO `thong_ke` (`id`, `ngaydat`, `donhang`, `doanhthu`, `soluongban`) VALUES
(1, '2023-11-01', 50, 1500000, 20),
(2, '2023-11-02', 48, 14800000, 34),
(3, '2023-11-03', 20, 5000000, 25),
(4, '2023-11-04', 40, 14000000, 30),
(5, '2023-11-05', 58, 1600000, 14),
(6, '2023-11-06', 32, 12000000, 40),
(9, '2023-09-01', 22, 2300000, 26),
(10, '2023-09-18', 48, 14800000, 34),
(11, '2023-10-04', 8, 2000000, 10),
(12, '2023-10-10', 36, 13200000, 38),
(13, '2023-11-29', 34, 16000000, 40),
(14, '2023-11-30', 32, 12000000, 40),
(19, '2023-12-02', 8, 12622000, 38),
(23, '2023-12-04', 2, 1596000, 4),
(24, '2023-12-05', 1, 878000, 2),
(25, '2023-12-06', 2, 2594000, 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tin_tuc`
--

CREATE TABLE `tin_tuc` (
  `id` int(11) NOT NULL,
  `noidung` text NOT NULL,
  `tieude` text NOT NULL,
  `ngaydang` date NOT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tin_tuc`
--

INSERT INTO `tin_tuc` (`id`, `noidung`, `tieude`, `ngaydang`, `img`) VALUES
(1, 'Đây là thời điểm vàng khi bạn đang có dự định mua sắm cho cả gia đình cho dịp cuối năm. Nhanh tay bỏ túi cho mình ít nhất vài voucher và chốt đơn liền tay bạn nhé', 'ĐỒ ĐẸP, GIÁ HỜI, SẮM SỬA THẢNH THƠI CÙNG SIÊU HỘI VOUCHER NHÀ CANIFA', '2023-11-08', 'new1.webp'),
(2, 'Áo polo nam là một trang phục thời trang đơn giản nhưng cực kỳ linh hoạt và dễ dàng phối đồ', '5 cách phối đồ với áo polo nam để tạo phong cách thời trang đẳng cấp', '2023-11-10', 'new2.webp'),
(3, 'Thời gian gần đây, Canifa nhận được nhiều phản ánh về các nhóm đối tượng xấu MẠO DANH CANIFA để LỪA ĐẢO nhằm chiếm đoạt tài sản dưới nhiều hình thức tinh vi.', '[CẢNH BÁO] Chiêu trò lừa đảo, mạo danh CANIFA tuyển mẫu nhí, CTV và nhân sự', '2023-11-13', 'new3.webp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trang_thai`
--

CREATE TABLE `trang_thai` (
  `id` int(11) NOT NULL,
  `name_tt` varchar(255) NOT NULL,
  `hoat_dong_tt` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `trang_thai`
--

INSERT INTO `trang_thai` (`id`, `name_tt`, `hoat_dong_tt`) VALUES
(1, 'Đang chờ xử lý', 0),
(2, 'Đơn hàng đã đặt hàng', 0),
(3, 'Đang giao', 0),
(4, 'Đã giao hàng', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vnpay`
--

CREATE TABLE `vnpay` (
  `id` int(11) NOT NULL,
  `vnp_amount` varchar(255) NOT NULL,
  `vnp_bankcode` varchar(255) NOT NULL,
  `vnp_banktranno` varchar(255) NOT NULL,
  `vnp_cardtype` varchar(255) NOT NULL,
  `vnp_orderinfo` varchar(255) NOT NULL,
  `vnp_paydate` varchar(255) NOT NULL,
  `vnp_tmncode` varchar(255) NOT NULL,
  `vnp_transactionno` varchar(255) NOT NULL,
  `code_cart` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `vnpay`
--

INSERT INTO `vnpay` (`id`, `vnp_amount`, `vnp_bankcode`, `vnp_banktranno`, `vnp_cardtype`, `vnp_orderinfo`, `vnp_paydate`, `vnp_tmncode`, `vnp_transactionno`, `code_cart`) VALUES
(4, '1000000', 'NCB', 'VNP14223627', 'ATM', 'Thanh toan GD: 2832', '20231206210314', '4JYL63X1', '14223627', '2832'),
(5, '1000000', 'NCB', 'VNP14223634', 'ATM', 'Thanh toan GD: 6062', '20231206210822', '4JYL63X1', '14223634', '6062'),
(6, '1000000', 'NCB', 'VNP14223637', 'ATM', 'Thanh toan GD: 4172', '20231206211012', '4JYL63X1', '14223637', '4172'),
(7, '115700000', 'NCB', 'VNP14223667', 'ATM', 'Thanh toan GD: 4174', '20231206212031', '4JYL63X1', '14223667', '4174');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `voucher`
--

CREATE TABLE `voucher` (
  `id_voucher` int(11) NOT NULL,
  `ma_voucher` varchar(255) NOT NULL,
  `soluong_voucher` int(11) NOT NULL,
  `loai_khuyenmai` tinyint(1) NOT NULL DEFAULT 0,
  `so_tien_giam` int(11) NOT NULL,
  `ngaybatdau` date NOT NULL,
  `ngayketthuc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `voucher`
--

INSERT INTO `voucher` (`id_voucher`, `ma_voucher`, `soluong_voucher`, `loai_khuyenmai`, `so_tien_giam`, `ngaybatdau`, `ngayketthuc`) VALUES
(1, 'DC01', 2, 1, 100000, '2023-12-03', '2023-12-10'),
(2, 'DC02', 4, 0, 50000, '2023-12-03', '2023-12-10');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bl_tk` (`id_user`),
  ADD KEY `bl_sp` (`id_pro`);

--
-- Chỉ mục cho bảng `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  ADD PRIMARY KEY (`id_ctdh`),
  ADD KEY `ctdh_dh` (`ma_dh`),
  ADD KEY `ctdh_sp` (`ma_sp`) USING BTREE;

--
-- Chỉ mục cho bảng `chi_tiet_san_pham`
--
ALTER TABLE `chi_tiet_san_pham`
  ADD PRIMARY KEY (`id_ctsp`),
  ADD KEY `sp_ctsp` (`id_sp`);

--
-- Chỉ mục cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`id_dh`),
  ADD KEY `dh_tk` (`id_user`),
  ADD KEY `dh_tt` (`id_trangthai`),
  ADD KEY `dh_thanhtoan` (`pt_thanh_toan`),
  ADD KEY `dh_vc` (`pt_van_chuyen`);

--
-- Chỉ mục cho bảng `momo`
--
ALTER TABLE `momo`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sp_dm` (`iddm`);

--
-- Chỉ mục cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thong_ke`
--
ALTER TABLE `thong_ke`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tin_tuc`
--
ALTER TABLE `tin_tuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `trang_thai`
--
ALTER TABLE `trang_thai`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `vnpay`
--
ALTER TABLE `vnpay`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`id_voucher`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  MODIFY `id_ctdh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `chi_tiet_san_pham`
--
ALTER TABLE `chi_tiet_san_pham`
  MODIFY `id_ctsp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `id_dh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `momo`
--
ALTER TABLE `momo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `thong_ke`
--
ALTER TABLE `thong_ke`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `tin_tuc`
--
ALTER TABLE `tin_tuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `trang_thai`
--
ALTER TABLE `trang_thai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `vnpay`
--
ALTER TABLE `vnpay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `voucher`
--
ALTER TABLE `voucher`
  MODIFY `id_voucher` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `bl_sp` FOREIGN KEY (`id_pro`) REFERENCES `san_pham` (`id`),
  ADD CONSTRAINT `bl_tk` FOREIGN KEY (`id_user`) REFERENCES `tai_khoan` (`id`);

--
-- Các ràng buộc cho bảng `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  ADD CONSTRAINT `ctdh_dh` FOREIGN KEY (`ma_dh`) REFERENCES `don_hang` (`id_dh`),
  ADD CONSTRAINT `ctdh_sp` FOREIGN KEY (`ma_sp`) REFERENCES `san_pham` (`id`);

--
-- Các ràng buộc cho bảng `chi_tiet_san_pham`
--
ALTER TABLE `chi_tiet_san_pham`
  ADD CONSTRAINT `sp_ctsp` FOREIGN KEY (`id_sp`) REFERENCES `san_pham` (`id`);

--
-- Các ràng buộc cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  ADD CONSTRAINT `dh_tk` FOREIGN KEY (`id_user`) REFERENCES `tai_khoan` (`id`),
  ADD CONSTRAINT `dh_tt` FOREIGN KEY (`id_trangthai`) REFERENCES `trang_thai` (`id`);

--
-- Các ràng buộc cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `sp_dm` FOREIGN KEY (`iddm`) REFERENCES `danh_muc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
