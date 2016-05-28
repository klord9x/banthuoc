-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2015 at 02:11 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `banthuoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE IF NOT EXISTS `khachhang` (
  `idkhachhang` int(11) NOT NULL AUTO_INCREMENT,
  `tentaikhoan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dienthoai` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Gioitinh` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idkhachhang`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`idkhachhang`, `tentaikhoan`, `Pass`, `hoten`, `ngaysinh`, `email`, `dienthoai`, `Gioitinh`) VALUES
(1, 'Thuhien', '76335c638683d7aeb032daf611b6b579', 'Nguyá»…n Thá»‹ Thu Hiá»n', '15/02/1995', 'thuhien95.fmp@gmail.co', '01686882762', 'Nu'),
(2, 'vincentIII', '27726e14cb12cc6afb313d2968de0ab4', 'Nguyá»…n Ngá»c Báº£o', '13/09/1994', 'nguyenngocbao.12i3.cit@gmail.com', '0949972885', 'Nam'),
(3, 'vÃ¢n trÆ°á»ng', '06dc3e674a51c0bbee6078b27ab14a89', 'Quang VÃ¢n TrÆ°á»ng', '10/1/1993', 'lequoctru95@gmail.com', '01212025142', 'Nam');

-- --------------------------------------------------------

--
-- Table structure for table `lienhe`
--

CREATE TABLE IF NOT EXISTS `lienhe` (
  `idlienhe` int(11) NOT NULL AUTO_INCREMENT,
  `Tenhienthi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idlienhe`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `lienhe`
--

INSERT INTO `lienhe` (`idlienhe`, `Tenhienthi`, `SDT`) VALUES
(1, 'Kinh doanh Thuốc', '0124585213'),
(2, 'Tư vấn Sức Khỏe', '0125846554');

-- --------------------------------------------------------

--
-- Table structure for table `nhacungcap`
--

CREATE TABLE IF NOT EXISTS `nhacungcap` (
  `idnhacungcap` int(50) NOT NULL AUTO_INCREMENT,
  `Tennhacungcap` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Diachi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `web` char(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idnhacungcap`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `nhacungcap`
--

INSERT INTO `nhacungcap` (`idnhacungcap`, `Tennhacungcap`, `Diachi`, `SDT`, `web`) VALUES
(1, 'Công ty TNHH dược phẩm Hà Tây', '80, Quang Trung, Phường Quang Trung, Quận Hà Đông, Hà Nội', '(84-4) 33 824 685', 'http://www.hataphar.com.vn'),
(2, 'Công ty TNHH Thiên Thành', '187/11 Đường Nguyễn Huệ, Phường 5, Thành Phố Tuy Hòa, Tỉnh Phú Yên', '057. 3810 740', 'http://diachivang.com/cong-ty-tnhh-thien-thanh-4/'),
(3, 'Công ty cổ phần dược Hậu Giang', '288 Bis Nguyễn Văn Cừ, P. An Hòa, Q. Ninh Kiều, TP. Cần Thơ', '(0710). 3891433', 'http://www.dhgpharma.com.vn/dhg/');

-- --------------------------------------------------------

--
-- Table structure for table `quantrivien`
--

CREATE TABLE IF NOT EXISTS `quantrivien` (
  `idquantri` int(11) NOT NULL AUTO_INCREMENT,
  `SDT` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `Email` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pass` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `Hoten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Giotinh` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `Diachi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idquantri`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `quantrivien`
--

INSERT INTO `quantrivien` (`idquantri`, `SDT`, `Email`, `user`, `pass`, `Hoten`, `Giotinh`, `Diachi`) VALUES
(1, '01686796962', 'lequoctru95@gmail.com', 'tru', '012332154655', 'Lê Quốc Trụ', 'Nam', 'Đức Nhuận-Mộ Đức-Quảng Ngãi');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE IF NOT EXISTS `sanpham` (
  `idsanpham` int(50) NOT NULL AUTO_INCREMENT,
  `idnsx` int(11) NOT NULL,
  `Tensanpham` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Congdung` varchar(100) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `Donggoi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Tennhacungcap` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Thanhphancotrongsanpham` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Sodangky` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Gia` float NOT NULL,
  `Hinhanh` text COLLATE utf8_unicode_ci NOT NULL,
  `Ngaysanxuat` datetime NOT NULL,
  `Ngayhethan` datetime NOT NULL,
  `Losanxuat` char(11) COLLATE utf8_unicode_ci NOT NULL,
  `Soluongcon` int(11) NOT NULL,
  PRIMARY KEY (`idsanpham`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`idsanpham`, `idnsx`, `Tensanpham`, `Congdung`, `Donggoi`, `Tennhacungcap`, `Thanhphancotrongsanpham`, `Sodangky`, `Gia`, `Hinhanh`, `Ngaysanxuat`, `Ngayhethan`, `Losanxuat`, `Soluongcon`) VALUES
(1, 3, 'PAQ Q10', 'Hỗ trợ cơ tim, thiểu năng tuần hoàn, bệnh thiếu máu ở tim', 'Lọ 30 viên', 'Công ty cổ phần dược Hậu Giang', 'Coenzym Q10', 'VN-5138-10', 350000, 'images/padq10_9-24812.jpg', '2015-08-02 00:00:00', '2016-12-02 00:00:00', '2B97', 1500),
(2, 1, 'Qplus super', 'Bệnh thiếu máu ở tim, tăng huyết áp động mạch', 'Lọ 30 viên', 'Công ty THHH dược phẩm Hà Tây', 'Coenzyme Q10', 'VN-9074-09', 160000, 'images/sanpham/Q_plus_14-28310.jpg', '2015-07-05 00:00:00', '2016-09-05 00:00:00', '1C31', 700),
(3, 3, 'Aphaxylo', 'Mũi: viêm xoang, viêm mũi, viêm mũi dị ứng        Mắt: viêm giác mạc do sưng huyết', 'Hộp 1 lọ x 10ml dung dịch nhỏ mũi', 'Công ty cổ phần dược Hậu Giang', 'Xylometazoline', 'V1262-H12-05', 70000, 'images/sanpham/Aphaxylo_10ml.jpg', '2015-07-12 00:00:00', '2016-10-12 00:00:00', '2D64', 650),
(4, 2, 'Biracin E', 'Tình trạng viêm ở mắt', 'Hộp 1 lọ 5ml dd thuốc nhỏ mắt', 'Công ty TNHH Thiên Thành', 'Tobramycin', 'VNA-2614-04', 90000, 'images/sanpham/Biracin_E.gif', '2015-07-19 00:00:00', '2016-10-19 00:00:00', '3A52', 700),
(5, 2, 'Coldi baby 10ml', 'Mũi: viêm xoang, viêm mũi, viêm mũi dị ứng       Mắt: viêm kết mạc do sưng huyết', 'Hộp 1 lọ 10ml dd thuốc nhỏ mũi', 'Công ty TNHH Thiên Thành', 'Xylometazoline', 'V882-H12-05', 50000, 'images/sanpham/Coldi_Baby_10ml.jpg', '2015-07-19 00:00:00', '2016-12-29 00:00:00', '3B56', 800),
(6, 1, 'Hadocort-D 15ml', 'Mũi: các chứng viêm mũi dị ứng   Mắt: Viêm giác mạc, viêm mí mắt, viêm túi lệ', 'Hộp 1 lọ x  15ml thuốc xịt', 'Công ty cổ phần dược phẩm Hà Tây', 'Dexamethasone, neomycin, xylometazoline', 'VNA-2971-00', 150000, 'images/sanpham/Hadocort-D.jpg', '2015-06-14 00:00:00', '2016-12-14 00:00:00', '3A53', 2500),
(7, 1, 'Viasarginin', 'Cải thiện đường tiêu hóa', 'Hộp 6 vỉ x 5 viên', 'Công ty cổ phần dược phẩm Hà Tây', 'Arqinine', 'VD-5440-08', 300000, 'images/sanpham/H_Viasarginin.jpg', '2015-08-02 00:00:00', '0000-00-00 00:00:00', '2D56', 550),
(8, 3, 'Berberin', 'Nhiễm trùng đường ruột, tiêu chảy, viêm ống mật', 'Hộp 1 chai 100 viên nang', 'Công ty cổ phần dược Hậu Giang', 'Berberine', 'V17-H12-05', 125000, 'images/sanpham/Berberin_100mg.gif', '2015-07-19 00:00:00', '2016-08-19 00:00:00', '2C43', 800),
(9, 2, 'Bipheran', 'Viêm gan do virus, viêm gan do rượu, viêm gan do thuốc', 'Hộp 10 vỉ x 10 viêm', 'Công ty TNHH Thiên Thành', 'Biphenyl Dimethyl Dicarboxylate', 'VN-6169-02', 250000, 'images/sanpham/Bipheran_cap.jpg', '2015-06-28 00:00:00', '2016-12-28 00:00:00', '5C68', 600),
(10, 1, 'Decontractyl', 'Bệnh lý thái hóa cột sống và rối loạn tư thế cột sống: vẹo cổ, đau thắt lưng, đau lưng', 'Hộp 2 vỉ x 25 viên', 'Công ty THHH dược phẩm Hà Tây', 'Mephenesin', 'VN-7593-03', 50000, 'images/sanpham/Decontractyl.jpg', '2015-08-03 00:00:00', '2016-10-05 00:00:00', '4D86', 500),
(11, 2, 'Myonal', 'Bệnh mạch máu não, liệt cứng do tuỷ, thái hóa đốt sống cổ', 'Hộp 3 vỉ x 10 viên', 'Công ty TNHH Thiên Thành', 'Eperisone', 'VN-8602-04', 100000, 'images/sanpham/Myonal_50mg.jpg', '2015-09-02 00:00:00', '2016-12-02 00:00:00', '5A37', 1000),
(12, 3, 'Patest', 'Vẹo cổ, đau thắt lưng, đau lưng, các tình trạng đau thắt cơ kèm theo', 'Hộp 2 vỉ x 25 viên bao đường', 'Công ty cổ phần dược Hậu Giang', 'Mephenesin', 'VD-0922-06', 100000, 'images/sanpham/patest.jpg', '2015-06-01 00:00:00', '2016-10-01 00:00:00', '1C41', 400);

-- --------------------------------------------------------

--
-- Table structure for table `thongtin`
--

CREATE TABLE IF NOT EXISTS `thongtin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Email` text COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `thongtin`
--

INSERT INTO `thongtin` (`id`, `diachi`, `Email`, `SDT`) VALUES
(1, 'Phường Hòa Qúy - Ngũ Hành Sơn - Đà Nẵng', 'lequoctru95@gmail.com', '01212025142');

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE IF NOT EXISTS `tintuc` (
  `idbaiviet` int(11) NOT NULL AUTO_INCREMENT,
  `tenbaiviet` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `noidung` mediumtext COLLATE utf8_vietnamese_ci NOT NULL,
  `hinhanh` text COLLATE utf8_vietnamese_ci NOT NULL,
  PRIMARY KEY (`idbaiviet`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`idbaiviet`, `tenbaiviet`, `noidung`, `hinhanh`) VALUES
(1, '<b>6 BỆNH DÂN VĂN PHÒNG CẦN ĐỀ PHÒNG</b>', 'Mỏi mắt, đau lưng, thoái hóa đốt sống cổ, khô da, béo bụng... là những bệnh thường gặp<br> của dân văn phòng. Những bệnh này ban đầu tưởng không nguy hại nhưng về lâu dài sẽ ảnh<br> hưởng rất lớn tới sức khỏe<br>\n•<u><b> Nhiều bệnh tấn công dân văn phòng / Dân văn phòng ăn như thế nào để khỏe</b></u> <br>\nDưới đây bác sĩ Vũ Thanh Tú lý giải nguyên nhân đồng thời đưa ra cách điều trị, hoặc đơn giản là<br> điều chỉnh phong cách làm việc, giúp dân văn phòng tránh xa những căn bệnh này.<br><br>\n<b>1. Mỏi mắt</b><br>\nLàm việc liên tục với máy tính sẽ khiến mắt bạn không chỉ mỏi, nhức, mà còn có thể bị khô hoặc<br> chảy nước. Đó là do mắt phải điều tiết quá nhiều trong một thời gian dài nên dẫn đến tình trạng trên. <br>Đi kèm với mỏi mắt là chóng mặt, nhức đầu và có cảm giác nôn nao. Sóng máy tính gây hại cho hệ<br> thần kinh, mắt nhức mỏi cũng khiến thần kinh căng thẳng, cùng với đó là không khí ngột ngạt <br>của văn phòng sẽ khiến bạn dễ bị căng thẳng hơn.<br>\nNếu muốn chấm dứt tình trạng trên, sau mỗi 60 phút làm việc trước máy tính bạn nên nghỉ ngơi <br>khoảng 5 phút. Trong thời gian nghỉ ngơi, bạn hãy nhắm mắt lại, thả lỏng cơ thể và tưởng tượng<br> mình đang ở một nơi có phong cảnh đẹp hay nghe một bản nhạc du dương.<br><br>\n<b>2. Đau lưng, nhức tay, thoái hóa đốt sống cổ</b><br>\nNgồi nhiều với tư thế sai sẽ làm cơ lưng và cột sống vặn vẹo dẫn đến đau lưng. Gõ máy tính liên tục<br> và bấm chuột sẽ khiến các khớp tay đau nhức. Cổ liên tục ở tư thế bất động, máu kém lưu thông,<br> dần dần sẽ dẫn đến thoái hóa khớp. Đó là lý do vì sao những người làm văn phòng dễ mắc các<br> bệnh như hội chứng ống cổ tay (cánh tay đau nhức), thoái hóa đốt sống cổ, đau thần kinh tọa.<br><br>\nLời khuyên hữu ích dành cho dân văn phòng là hãy điều chỉnh tư thế ngồi của mình cho đúng: lưng <br>thẳng, không ngồi lún quá sâu vào lưng ghế. Nên tìm cho mình một chiếc ghế mềm mại và thoải mái<br> nhất. Chú ý đến độ cao của bàn viết và ghế ngồi để hai tay của bạn vừa tầm trên bàn làm việc. Sau<br> 2 giờ làm việc với máy tính, bạn nên vươn vai, xoay người, hay tập một môn thể thao nhẹ nhàng để <br>khí huyết được lưu thông. Đồng thời, thường xuyên tự xoa bóp các khớp ngón tay để tránh sự nhức<br> mỏi và co rút cơ.<br><br>\n<b>3. Hội chứng tổn thương thần kinh</b><br>\nHội chứng tổn thương thần kinh cũng là một bệnh mà dân văn phòng dễ gặp. Khi bạn ngả đầu sang <br>một bên để giữ điện thoại nói chuyện đồng thời hai tay vẫn thoăn thoắt với máy tính, bạn có thể bị<br> hội chứng thoát ngực. Đó là do sự chèn ép đám rối thần kinh cánh tay do căng cơ bên của cổ vì sai<br> vị trí đầu hay tư thế ngồi sụp. Khi bạn duỗi ngón tay và cổ tay hay quay cẳng tay sẽ làm chèn ép dây<br> thần kinh quay, coi chừng bạn bị hội chứng ống thần kinh quay với biểu hiện là cảm giác khó chịu từ <br>khuỷu tay đến phần chân đế của ngón cái hoặc yếu cổ tay.<br><br>\n<b>4. Béo bụng</b><br>\nKhông chỉ với nam giới, nữ giới văn phòng bụng cũng có xu hướng to hơn bình thường. Đó là vì họ <br>ít vận động, ngồi sai tư thế, khiến cho lượng mỡ tích lại ở vùng bụng nhiều hơn bình thường. Không <br>những thế, ít vận động, thừa calo còn dẫn tới béo phì.<br>\nDo đó, nếu công việc của bạn ít phải vận động thì hãy cố tận dụng mọi cơ hội để được đi lại, hoạt<br> động chân tay. Thay cho đi thang máy, hãy leo cầu thang bộ... cùng với đó là tập các bài tập thể dục<br> giữa giờ.<br><br>\n<b>5. Các bệnh về da và hô hấp</b><br>\nTrong môi trường máy điều hòa tại văn phòng, thiếu không khí trong lành, da và hệ thống hô hấp<br> của bạn sẽ có vấn đề. Nhẹ thì da mất nước, khô ráp, sạm màu. Nặng hơn thì da nổi mụn, dị ứng,<br> miệng khô, khó thở và dễ bị viêm đường hô hấp.<br>\nUống nhiều nước, dùng kem dưỡng ẩm và bổ sung thực phẩm giàu vitamin A, C, E... là rất cần thiết<br> đối với nhân viên văn phòng vì chúng có tác dụng chống lão hóa, khôi phục độ ẩm cũng như độ đàn<br> hồi cho các tế bào da. Thỉnh thoảng, bạn cố gắng ra ngoài phòng hít thở không khí trong lành để cải<br> thiện tình trạng trên.<br>\nDa bạn phải "làm việc" căng thẳng cả ngày, vì vậy buổi tối chính là lúc bạn cần dành thời gian để<br> "cải tạo" làn da của mình thông qua việc đắp mặt nạ và massage cho da. Đắp mặt nạ sẽ làm giãn<br> nở các lỗ chân lông, giúp lấy đi tế bào da chết, lưu thông máu, từ đó làm da bạn mềm mại và mịn <br>màng.<br><br>\n<b>6. Hội chứng ống cổ tay</b><br>\nBệnh nhân có cảm giác đau lan xuống ngón cái, trỏ, giữa và nửa trong của ngón tay đeo nhẫn, họ<br> cũng cảm thấy tê giống như kiến bò hoặc kim châm. Một số bệnh nhân có thể thấy đau lan cổ tay,<br> lòng bàn tay hoặc cẳng tay, nhất là về đêm. Cảm giác đau và tê đôi khi cũng lan lên cẳng tay dẫn<br> đến khó cầm nắm. Bệnh nhân thường phải lắc bàn tay để bớt khó chịu.<br><br>\nĐể phòng ngừa hội chứng ống cổ tay, các cơ bắp cần phải có nhiều thời gian để nghỉ ngơi thư giãn.<br> Thường xuyên tập thể dục nhất là với những người mà công việc bắt buộc phải ngồi nhiều hoặc<br> phải thực hiện những thao tác lặp đi lặp lại ở cổ tay. Khi làm việc nên ngồi ở tư thế đúng, thỉnh<br> thoảng thay đổi tư thế hoặc đứng lên đi lại.\n               ', '');

-- --------------------------------------------------------

--
-- Table structure for table `useronline`
--

CREATE TABLE IF NOT EXISTS `useronline` (
  `tgtmp` int(11) NOT NULL,
  `ip` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `local` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`tgtmp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `useronline`
--

INSERT INTO `useronline` (`tgtmp`, `ip`, `local`) VALUES
(1449130481, '', ''),
(1449130485, '', ''),
(1449130493, '', ''),
(1449130495, '', ''),
(1449130497, '', ''),
(1449130505, '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
