-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 16, 2021 lúc 11:02 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dienmay`
DROP DATABASE IF EXISTS dienmay;
CREATE DATABASE dienmay;
USE dienmay; 
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `admin_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`, `admin_name`) VALUES
(1, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Văn Nghĩa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

CREATE TABLE `baiviet` (
  `baiviet_id` int(11) NOT NULL,
  `baiviet_image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tenbaiviet` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tomtat` text COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `danhmuctin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `baiviet`
--

INSERT INTO `baiviet` (`baiviet_id`, `baiviet_image`, `tenbaiviet`, `tomtat`, `noidung`, `danhmuctin_id`) VALUES
(1, 'tu-lanh.jpg', 'TỔNG HỢP KIẾN THỨC CẦN BIẾT VỀ TỦ LẠNH, TỦ MÁT, TỦ ĐÔNG.', 'Về mua tủ cho gia đình nên chọn loại không đóng tuyết và có công suất tủ ít nhất phải >100W . Đơn giản là vì khả năng tủ có thể chịu tải cao vào mùa lễ tết, nhét đồ ăn kín mít mà tủ vẫn lạnh, vẫn đông đá, ko hư hỏng. Và các loại tủ này nếu có nguồn điện ổn định sẽ xài được rất lâu và bền, chịu tải cao và chứa được rất nhiều thực phẩm. Nếu nguồn điện không ổn định, có thể xem xét đến việc mua ổn áp cho tủ lạnh.', '<b>I. Khái niệm cơ bản về tủ lạnh</b><br>\r\nQui trình của tủ lạnh là quy trình khép kín. Toàn bộ các ống dẫn bên trong đều được hàn kín, không có 1 khe hở nào dể khí Gas lọt ra. Phân ra làm 2 loại :<br>\r\n\r\n1. Tủ Coil ( tủ lạnh đóng tuyết ) : Cấu tạo đơn giản chỉ bao gồm:<br>\r\n\r\n- Compressor - Giàn nóng (bộ phận giải nhiệt cho Gas khi bị nén ở áp lực cao)<br>\r\n\r\n- Thermosta - Cảm ứng ngắt mạch cho Compressor khi tủ đạt được độ lạnh cần thiết ( nút xoay tròn chỉnh temp trong tủ )\r\n<br>\r\n\r\n2. Tủ quạt ( tủ lạnh không đóng tuyết )<br>\r\n\r\n- Do nhu cầu sử dụng ngày càng cao nên loại tủ này được thiết kế theo tiêu chuẩn Automatic từ A- Z. Bạn chỉ cần bỏ đồ ăn, thức uống vào rồi lấy ra mà ko cần phải lo tủ bị đóng tuyết hay tủ có mùi hôi do không khí bên trong luôn được lưu thông.<br>\r\n\r\n- Được thiết kế có thêm FAN(quạt) – mục đích tạo luồng không khí lạnh đều trong tủ, không làm cho thực phẩm bị ôi thiu. Giúp bảo quản thực phẩm được lâu hơn.<br>\r\n\r\n- Ngoài ra còn có thêm các sensor(bộ cảm ứng) và bộ timer(hẹn giờ) – mục đích tự động xả đá thừa bám đọng lâu ngày ngay trên ngăn đá giúp cho tủ lấy độ lạnh nhanh hơn và gọn gàng hơn ngay cả khi bạn không có thời gian để xả đá.<br>\r\n\r\n \r\n\r\n<b>II. Những điều cấm khi đã sử dụng tủ lạnh</b><br><br>\r\n+ Đối với các loại tủ lạnh, tuyệt đối không được dùng các vật nhọn như dao, dùi... để nạy đá hoặc cạy đồ dơ ra. Vì điều này nếu không cẩn thận sẽ làm thủng giàn Coil. Nếu lỡ bị thủng dàn Coil, chi phí để sửa chữa sẽ rất đắt đỏ ~ 6 - 800.0000 VNĐ, và \"dung nhan\" của chiếc tủ lạnh sau khi sửa cũng chả lành lặn gì.<br>\r\n\r\n+ Các phích cắm phải thật chắc chắn, nếu có thể thì làm riêng cho tủ lạnh một cầu dao tầm 10Ampe. Tốt hơn nữa thì nên sắm 1 cái Relay (trễ mạch) hoặc ổn áp có mạch trễ khi điện bị ngắt (như vậy cho máy có thời gian để hồi toàn bộ lượng Gas khi bị ngắt đột ngột).<br>\r\n\r\n+ Một khi cắm trực tiếp (cắm phích thẳng vào ổ cắm), Không được cắm theo kiểu rút ra rồi lại rút vào liên tục, như vậy chẳng khác nào làm cho máy bị Shock điện gây hư hỏng mát dây bên trong.<br>\r\n\r\n+ Khi xê dịch tủ ngòai kiểu bê thẳng đứng thì lúc cắm lại nên để yên trong vòng ít nhất 30p (thời gian an toàn) để máy dồn Oil (nhớt cho Compressor) về đúng vị trí. Như vậy để tránh chuyện tủ bị nghẹt (ko lạnh).<br>\r\n\r\n+ Tuyệt đối không che kín, không để áp sát tường che bít những mặt gián nóng xung quanh tủ. Vì tủ lạnh thường được thiết kế giàn nóng chìm trong vỏ tủ (bị hạn chế về giải nhiệt) cho nên cần giữ khoảng cách xung quanh vỏ tủ. Chỗ nào nóng thì chỗ đó để trống ra hoặc đừng che bít hay áp sát tường/tủ là được.<br>\r\n\r\n \r\n\r\n<b>III. Mức tiêu hao điện năng của tủ lạnh</b><br><br>\r\nVề tủ lạnh (thấp nhất là 1/18HP).<br>\r\n+ HP (sức ngựa) / Kw/h (trị số điện năng tiêu thụ trong 1giờ) / W công suất riêng của Compressor ( ko tính các thiết bị khác kèm theo)<br>\r\n+ 1/18HP ~ 18h/Kw<br>\r\n+ 1/10HP ~ 10h/Kw ~ 85Woát<br>\r\n+ 1/8HP ~ 8h/Kw ~ 100Woát<br>\r\n+ 1/6HP ~ 6h/Kw ~ 120-125Woát<br>\r\n+ 1/4HP ~ 4h/Kw ~ 180-185Woát<br>', 1),
(2, 'm8.jpg', 'Review máy giặt mini LG cao cấp 3.5kg TWINWash T2735NWLV', 'Máy giặt mini LG cao cấp 3.5kg TWINWash T2735NWLV là một sản phẩm cực kỳ tiện dụng và đang được rất nhiều người tiêu dùng lựa chọn. Vậy sản phẩm này có gì đặc biệt? Hãy cùng META.vn review máy giặt mini LG cao cấp 3.5kg TWINWash T2735NWLV này nhé!', 'Thiết kế nhỏ gọn, tiện lợi<br>\r\nMáy giặt mini LG cao cấp 3.5kg TWINWash T2735NWLV có thiết kế nhỏ gọn, đơn giản, bạn có thể thoải mái đặt máy tại mọi vị trí trong nhà mà không chiếm nhiều diện tích.<br>\r\nMáy giặt có thể kéo ra rất tiện lợi, bảng điều khiển được tích hợp ngay trên nắp máy giúp bạn quan sát và điều chỉnh các tính năng dễ dàng. Lồng giặt và vỏ máy được làm bằng chất liệu thép không gỉ giúp bảo vệ quần áo và máy giặt.<br>\r\nTích hợp công nghệ Slim Inverter hiện đại<br>\r\nMáy giặt mini LG TWINWash T2735NWLV sở hữu công nghệ Slim Inverter giúp tiết kiệm điện năng. Thêm vào đó, máy còn được trang bị động cơ truyền động trực tiếp “tinh gọn”, giúp máy vận hành êm ái, bền bỉ.', 2),
(4, 'bg2.jpg', 'Những điều cần biết khi mua tivi', 'Mua tivi hoặc sử dụng tivi có thể bạn sẽ quan tâm đến một số khái niệm đặc thù như loại màn hình tivi (LED, Plasma, OLED), độ phân giải (HD, FullHD, 4K), một số tính năng đặc biệt (TV thông minh, TV màn hình cong, TV 4K, Tivi 3D), các hình thức kết nối phổ biến (HDMI, USB, MHL) và kết nối đặc trưng (Screen Mirroring, Content Streaming).', '<b>1. Các loại Tivi</b><br>\r\n<a href=\"#\">(Định nghĩa) Tivi LED là gì?</a>\r\n<br>\r\n<a href=\"#\">(Định nghĩa) Tivi Plasma là gì?</a>\r\n<br>\r\n<a href=\"#\">(Định nghĩa) Tivi OLED là gì?</a>\r\n<br>\r\n<a href=\"#\">(Định nghĩa) Tivi 3D là gì?</a>\r\n<br>\r\n<a href=\"#\">(Định nghĩa) Công nghệ 3D chủ động là gì?</a>\r\n<br>\r\n<a href=\"#\">(Định nghĩa) Công nghệ 3D thụ động là gì?</a>\r\n<br>\r\n<a href=\"#\">(Tư vấn) Cách để bảo vệ mắt khi xem tivi 3D</a><br>\r\n\r\n<a href=\"#\">(Định nghĩa) Tivi 4K là gì? </a>\r\n<br>\r\n<a href=\"#\">(Định nghĩa) Tivi màn hình cong là gì?</a>\r\n<br>\r\n<a href=\"#\">(Định nghĩa) Màn hình IPS trên tivi và những tác dụng thú vị</a><br><br>\r\n<b>2.Tần số quét</b><br>\r\n<a href=\"#\">(Định nghĩa) Tần số quét là gì?</a>\r\n<br><br>\r\n<b>3. Kết nối (có dây & ko dây)</b> <br>\r\n<a href=\"#\">(Định nghĩa) Điểm mặt những kết nối cơ bản trên TV</a><br>\r\n\r\n<a href=\"#\">(Hướng dẫn) Cách kết nối laptop với tivi qua cổng HDMI</a><br>\r\n\r\n<a href=\"#\">(Hướng dẫn) 4 bước đơn giản kết nối điện thoại với tivi qua MHL</a><br>\r\n\r\n<a href=\"#\">(Hướng dẫn) Hướng dẫn ghép nối screen mirroring giữa điện thoại & tivi</a><br>\r\n\r\n<a href=\"#\">(Hướng dẫn) 8 tiện lợi bất ngờ mà cổng usb movie mang đến</a><br>\r\n\r\n<a href=\"#\">(Hướng dẫn) Cách xem phim, nghe nhạc trên tivi qua cổng USB</a><br>\r\n\r\n<a href=\"#\">(Hướng dẫn) Có bao nhiêu cách để xem video trên Tivi nhà bạn?</a><br>', 4),
(5, 'ab.jpg', 'Những kiến thức căn bản về cách sử dụng, bảo vệ Laptop', ' Ngày nay, khi nhu cầu trao đổi và tìm kiếm thông tin của con người ngày càng lớn, hầu như ai cũng trang bị cho mình một chiếc máy tính, đặc biệt là máy tính xách tay (Laptop)  bởi sự  nhỏ gọn và tiện dụng của nó. Tuy vậy, không phải ai cũng hiểu, biết cách bảo vệ và sử dụng nó một cách có hiệu quả, nhất là đối với sinh viên, làm thế nào để laptop có thể sử dụng tốt, ít hỏng hóc, có thể sử dụng được ít nhất trong 4 năm học đại học là điều ai cũng mong muốn.<br>\r\n\r\nChính vì vậy, bài viết này sẽ giới thiệu với các em sinh viên một số kiến thức cơ bản về laptop, cách sử dụng cũng như khắc phục một số lỗi thường gặp trên thiết bị tiện dụng này.', '<b>I.  Cấu trúc phần cứng của Laptop</b><br>\r\n\r\nVề cơ bản, Laptop cũng có dầy đủ các bộ phận như máy tính để bàn nhưng được thiết kế nhỏ gọn hơn để phù hợp với kiểu dáng của chúng. Sau đây là một số bộ phận và chức năng chính của chúng:<br>\r\n\r\n1. Bản mạch chính (Mainboard)<br>\r\n-        Mainboard là bản mạch chính liên kết tất cả các linh kiện và thiết bị ngoại vi nhằm điều khiển tốc độ đường đi của luồng dữ liệu giữa các thiết bị và điều khiển điện áp cung cấp cho các linh kiện <br>\r\n\r\n-        Mainboard của laptop được chế tạo đặc biệt để phù hợp với hình dáng của vỏ máy, chúng thường tích hợp sẵn các thiết bị như: Card màn hình, âm thanh, kết nối mạng,… giúp cho máy được gọn nhẹ.<br>\r\n\r\n2. Bộ xử lí trung tâm CPU<br>\r\n     Đối với laptop, CPU được thiết kế riêng nhằm tiêu hao ít năng lượng và đạt hiệu suất cao. CPU thông dụng hiện nay gồm 2 loại:\r\n<br>\r\n-        CPU cấp thấp dành cho người dùng thông thường, đó là các CPU có kí hiệu chữ M (Mobile Processer). Những laptop này được chế tạo đặc biệt để có thể tiêu hao ít năng lượng mà vẫn đạt hiệu suất cao.<br>\r\n\r\n-        Loại thứ hai là CPU cao cấp dành cho những người dùng chuyên nghiệp, đó là các CPU có kí hiệu chữ U.  Đây là loại chip siêu tiết kiệm điện và có công suất cao, tuy nhiên nó sẽ làm giảm thời gian sử dụng khi dùng pin<br>\r\n\r\n3. Ổ dĩa cứng (HDD)<br>\r\n     Là thiết bị dùng để lưu trữ dữ liệu. Ổ đĩa cứng của Laptop được thiết kế nhỏ, mỏng, gọn và có khả năng chống sốc cao<br>\r\n\r\n4. Ổ đĩa quang<br>\r\n     Hiện nay Laptop thường được trang bị ổ CD-RW hoặc DVD Combo có thể đọc DVD và ghi CD được. Những máy cấu hình trung bình thường sử dụng CD-RW, còn những máy cấu hình cao có gắn ổ ghi DVD-RW.<br>\r\n\r\n5. Bộ nhớ (RAM)<br>\r\n-        Bộ nhớ RAM giống như một bộ nhớ tạm, dùng để lưu trữ các chương trình hay các kết quả trung gian khi thực hiện chương trình. <br>\r\n\r\n-        Laptop được thiết kế với nhiều khe cắm RAM ( thường là 2). Hầu hết các hệ thống máy tính hiện nay đều sử dụng kiến trúc kênh đôi nhằm chia tác dữ liệu xử lí và giúp tăng băng thông dữ liệu.<br>\r\n\r\n6. Card màn hình<br>\r\n-        Card màn hình (Video Graphic Adapter – VGA) là thiết bị giao tiếp giữa màn hình và Mainboard.<br>\r\n\r\n-        Dung lượng của card thể hiện khả năng xử lí hình ảnh. Thông thường bộ nhớ đồ họa của Laptop chỉ cần khoảng từ 32MB đến 64MB là đủ để sử dụng các chương trình quen thuộc, còn với việc sử dụng các chương trình đồ họa trên Laptop và những chương trình đòi hỏi khả năng xử lý đồ hoạ cao cấp thì lượng bộ nhớ đồ hoạ cần 128MB hoặc hơn.<br>\r\n\r\n-        Các Laptop sử dụng bộ nhớ hệ thống làm bộ nhớ đồ hoạ giúp tiết kiệm chi phí, nhưng khả năng xử lý đồ hoạ sẽ không bằng sử dụng bộ nhớ riêng. Ngoài ra khả năng xử lý đồ hoạ còn phụ thuộc rất lớn vào bộ xử lý đồ hoạ.<br>\r\n\r\n7. Thiết bị hỗ trợ kết nối mạng<br>\r\n     Đa phần các laptop hiện nay đều được tích hợp sẵn bộ điều hợp mạng không dây theo các chuẩn thông dụng (802.11 a/b/g hoặc các chuẩn mới hơn) cùng với các bộ điều hợp mạng Ethernet (RJ-45) thông thường.<br>\r\n\r\n8. Bộ biến điện (Adaptor):<br>\r\n     Bộ biến điện dùng để cung cấp điện cho Laptop hoạt động và sạc Pin, được cung cấp kèm theo máy.<br>\r\n\r\n9. Bàn phím và chuột<br>\r\n-        Bàn phím của Laptop là phần cho phép nhập dữ liệu vào máy tính. Khác với các bàn phím PC, bàn phím Laptop thường có thêm các phím chức năng như phím điều chỉnh độ sáng, xuất tín hiệu ra cổng CRT… khi kết hợp các phím đó với phím Fn.<br>\r\n\r\n-        Thiết bị trỏ (chuột) của Laptop thường có dạng cảm ứng chạm tay (touchpad), nếu không quen sử dụng thì có thể gắn thêm chuột ngoài thông qua cổng Mouse (PS/2) hoặc USB để sử dụng.<br>\r\n\r\n10. Màn hình<br>\r\n-        Màn hình Laptop thường sử dụng màn hình tinh thể lỏng, là nơi hiển thị hình ảnh mầu cho chúng ta giao tiếp với máy tính. Màn hình trên mỗi dòng máy thường có độ phân giải khác nhau nhưng chúng thường có chuẩn chân cắm là 20 chân hoặc 30 chân tín hiệu.<br>\r\n\r\n-        Trên màn hình được cấu tạo bởi các điểm ảnh (pixels), độ phân giải của màn hình được tính bởi số điểm ảnh theo chiều ngang nhân với số điểm ảnh theo chiều dọc. Hiện nay màn hình nên có độ phân giải ít nhất là XGA (1024 x 768 pixel) để đủ đáp ứng cho các ứng dụng.<br>\r\n\r\n<b>II. Sử dụng và bảo vệ laptop</b><br>\r\n1. Vệ sinh laptop<br>\r\na. Vệ sinh màn hình<br>\r\nMàn hình là bộ phận nhạy cảm nhất, rất dễ bắt bụi và cũng dễ bị hư hỏng nhất. Chính vì vậy chúng ta cần hết sức cẩn thận.<br>\r\n-        Đầu tiên, phải đảm bảo rằng máy tính đã được tắt để tránh bị điện giật và dễ dàng nhận ra các vết bẩn trên màn hình<br>\r\n\r\n-        Khi vệ sinh màn hình, dùng một tấm vải sạch (tránh dùng vải nhân tạo, ni lông, khăn hay giấy, báo để tránh trầy xước màn hình) thấm nước tinh khiết (không sử dụng nước máy, nước rửa kính hay xà phòng để lau chùi, vì chúng có chứa các chất muối khoáng gây hư hại cho màn hình).    <br>\r\n\r\n-        Mở màn hình ra một góc lớn hơn 90°, rồi nhẹ nhàng lau từ trên xuống. Có thể chọn mua những phụ kiện rửa màn hình nhưng tuyệt đối không để bất cứ một chất lỏng nào chảy trên màn hình<br>\r\n\r\n-        Không dùng ngón tay chọc vào màn hình vì có thể dẫn đến việc tạo những quần thâm đen trên màn hình. Thiết kế của màn hình theo chuẩn LCD có chứa những chất lỏng như thủy ngân nên phải hết sức cẩn thận nếu màn hình chẳng may bị vỡ.<br>\r\n\r\n-        Ngoài ra, trên những màn hình kém chất lượng thường xuất hiện những điểm chết màu xanh. Những điểm này không thể biến mất cũng như sửa chữa được. Do đó khi mua máy nên nhìn kỹ màn hình, nhất là khi khởi động để xem có xuất hiện điểm chết nào hay không.<br>\r\n\r\nb. Vệ sinh bàn phím<br>\r\nBàn phím là nơi thao tác nhiều nhất, lại được gắn cố định với máy nên rất khó vệ sinh cũng như sửa chữa. Khi đánh máy phải đánh nhẹ nhàng, tránh nhấn phím quá mạnh hay quá lâu vì có thể gây chai phím hoặc lún phím. Có thể vệ sinh bàn phím bằng một số cách như sau:<br>\r\n-        Tháo bàn phím hoặc phím của Laptop: Chỉ làm cách này nếu chúng ta biết một chút kiến thức laptop, nếu không có thể gây ra hỏng bàn phím laptop của mình. Cách tốt nhất là khi tháo ra, hãy sắp xếp các bàn phím đã gỡ ra theo đúng thứ tự. Cần chú ý ở dưới mỗi phím đều có miếng cao su nhỏ nên cần gỡ nó ra để tránh những bàn phím bật lung tung. Cuối cùng, sử dụng tăm bông để làm sạch bên trong và xung quanh bàn phím.<br>\r\n\r\n-        Dùng máy hút bụi cho laptop: Có thể mua một số loại máy hút bụi mini USB để vệ sinh bàn phím. Nên dùng thường xuyên vì nếu bụi bám lâu ngày sẽ cản trở việc tiếp xúc giữa mạch điện và phím bấm, gây ra hiện tượng phím chết.<br>\r\n\r\n-        Dùng tăm bông hoặc chổi nhỏ: Vì đầu tăm nhỏ nên rất thích hợp để móc những thứ như cặn bẩn, tóc, vụn bánh…ra khỏi bàn phím. Ngoài ra, trong các bộ vệ sinh màn hình thường có một cái chổi nhỏ để phủi bụi.<br>\r\n\r\n2. Bảo vệ laptop<br>\r\n-        Sử dụng túi đựng laptop và túi chống sốc: Nhằm tránh máy tính bị rơi, va đập hay bị ngập nước.<br>\r\n\r\n-        Sử dụng tấm dán bàn phím bằng silicon: Không phải tất cả laptop đều có bàn phím chống tràn nước. Miếng dán silicon là phụ kiện giúp máy tính không bị ngấm nước khi chẳng may bị đổ cốc nước. Hơn nữa, miếng dán này còn giúp bàn phím không bị mòn vì sử dụng thường xuyên.<br>\r\n\r\n-        Sử dụng quạt tản nhiệt cho laptop: Khi sử dụng laptop tốt nhất hãy mua theo 1 quạt tản nhiệt. Vì laptop quá nhỏ nên bộ tản nhiệt của nó rất kém, sử dụng lâu sẽ gây nhiệt độ của máy tăng cao ảnh hưởng đến hoạt động và hại máy<br>\r\n\r\n-        Khi sử dụng, nên mở màn hình một góc thích hợp nhất là từ 90 đến 120 độ và không nên đóng mở liên tục nhiều lần trong một thời gian ngắn.<br>\r\n\r\n3. Sử dụng Pin<br>\r\n-        Pin là bộ phận rất quan trọng của laptop. Nó có thể được tháo ra dễ dàng trong trường hợp chúng ta muốn lắp pin mới để tiếp tục công việc. Tuy vậy, pin cũng là một linh kiện nhạy cảm, dễ hư hỏng và thường chỉ được bảo hành tối đa 1 năm.<br>\r\n\r\n-        Khi mua máy dùng loại pin Lithium được sử dụng trong hầu hết các loại laptop, do phôi pin vẫn chưa tích điện, nên sạc liên tục 8 giờ cho 3 lần đầu tiên sử dụng. Điều này sẽ giúp pin tích trữ đủ điện năng và tránh bị chai sớm.<br>\r\n\r\n-        Khi tháo ráp pin chú ý xem hướng dẫn của nhà sản xuất. Hầu hết pin hoạt động tốt ở nhiệt độ 10°C đến 35°C, cao hay thấp quá biên độ này đều có thể gây hỏng hóc cho pin. Khi muốn mua pin rời, chú ý đến độ tương thích của pin và máy. Việc không tương thích giữa pin rời và laptop có thể dẫn đến giảm tuổi thọ máy.<br>\r\n\r\n-        Nên sử dụng pin đều đặn, và xen kẽ với dùng adapter. Khi sử dụng, đợi khi nào pin còn khoảng 10% mới nên sạc, tránh trường hợp pin còn một nửa đã cắm nguồn sử dụng Adapter. Lưu ý là không để pin hết sạch hoàn toàn. Điều này rất nguy hiểm vì đối với loại pin Lithium, nếu để pin suy kiệt dễ dẫn đến hư luôn mạch pin.<br>\r\n\r\n-        Sau một thời gian sử dụng, pin sẽ bị chai. Thời gian pin bị lão hóa nhanh hay chậm là do người sử dụng. Nguyên nhân pin bị chai phổ biến nhất là do bị sạc liên tục do người sử dụng cắm nguồn quá lâu.<br>\r\n\r\n<b>III. Một số lỗi thường gặp và hướng khắc phục</b><br>\r\n1. Các lỗi thường gặp<br>\r\n\r\na. Lỗi do máy quá nóng<br>\r\n\r\n-        Dấu hiệu: Máy bị treo hoặc nhận thấy cánh quạt có sự giảm về công suất<br>\r\n\r\n-        Hướng khắc phục:<br>\r\n\r\n+ Làm sạch các bộ phận tản nhiệt ở hai bên sườn hoặc phía sau thân máy<br>\r\n\r\n+ Sử dụng các thiết bị làm mát bên ngoài bằng cách sử dụng bộ bản tản nhiệt<br>\r\n\r\n+ Không nên vừa cắm sạc vừa sử dụng máy, điều đó làm cho Pin nhanh bị chai và quá trình sinh nhiệt nhiều hơn bình thường.<br>\r\n\r\nb. Lỗi do ổ đĩa chạy chậm<br>\r\n\r\n-        Dấu hiệu: Thời gian nạp các chương trình quá lâu, truyền tải file lâu<br>\r\n\r\n-        Hướng khắc phục: Sử dụng công cụ chống phân mảnh đĩa cứng Disk Defragmenter trong Programs Accessories System Tools của Windows<br>\r\n\r\n  c. Màn hình quay ngược 180 độ.<br>\r\n\r\n-        Dấu hiệu: Phần đầu màn hình bị đảo xuống dưới và ngược lại.<br>\r\n\r\n-        Hướng khắc phục: Nhấn tổ hợp phím:  Ctrl+ Alt+ phím mũi tên hoặc nháy chuột phải vào Properties Setting Advance Intel Graphic, sau đó vào Properties của Intel Graphic và bỏ dấu chọn ở phần Enable Rotation.<br>\r\n\r\nd. Màn hình máy tính xuất hiện điểm chết\r\n<br>\r\n-        Dấu hiệu: Trên màn hình xuất hiện một số dấu chấm xanh mà tại đó màu sắc không thể hiển thị được.<br>\r\n\r\n-        Hướng khắc phục: Sử dụng một miếng giẻ mềm khô lót lên khu vực điểm chết rồi dùng đầu ngón tay đè mạnh lên đó với một lực vừa phải, tiếp đó xoay đầu ngón tay một cách nhẹ nhàng vào vị trí đó; hoặc có thể sử dụng phần mềm JscreenFix, chương trình này có khả năng chiếu sáng rất nhiều màu sắc với cường độ cao trên màn hình<br>\r\n\r\ne. Laptop bị dính nước<br>\r\n\r\nHướng khắc phục:<br>\r\n\r\n-        Ngắt nguồn điện và tháo rời pin<br>\r\n\r\n-        Tháo rời tất cả các loại card nối với máy, lau sạch<br>\r\n\r\n-        Cuối cùng để máy mở ở nơi thông thoáng, kê cao. Giữ nguyên quá trình này 24 tiếng, tuyệt đối không dùng quạt hay máy sấy để đẩy nhanh tốc độ làm khô. Khi thực hiện việc khởi động lại máy tính 24 giờ sau, hãy dùng pin trước khi sử dụng nguồn điện.<br>\r\n\r\nf. Lỗi do nhiễm virus<br>\r\n\r\n-        Dấu hiệu: Một số dấu hiệu điển hình thường gặp như: Truy xuất tập tin, mở các chương trình ứng dụng chậm, khi duyệt web có các trang web lạ tự động xuất hiện, duyệt web chậm, nội dung các trang web hiển thị trên trình duyệt chậm, các file lạ tự động sinh ra khi bạn mở ổ đĩa USB, xuất hiện các file có phần mở rộng .exe có tên trùng với tên các thư mục<br>\r\n\r\n-        Hướng khắc phục: Quét virus. Sử dụng một phần mềm diệt virus tốt để cài đặt và sử dụng thường xuyên, lâu dài cho máy tính. Phần mềm diệt virus tốt phải là phần mềm đáp ứng được đầy đủ các tiêu chí: là phần mềm có bản quyền, cập nhật phiên bản mới thường xuyên, có hỗ trợ kỹ thuật trực tiếp từ nhà sản xuất khi có sự cố liên quan tới virus.<br>\r\n\r\ng. Lỗi khi kết nối với Internet<br>\r\n\r\n Khi kết nối Laptop với Internet có thể xảy ra rất nhiều lỗi, trong đó lỗi mà hầu như ai cũng đã gặp khi kết nối Wifi đó là lỗi Limited or no connectivity  hoặc Limited Access<br>\r\n\r\n-        Dấu hiệu: ở biểu tượng mạng có xuất hiện dấu chấm than trên nền vàng, khi đặt con trỏ vào sẽ xuất hiện dòng chữ Limited or no connectivity  hoặc Limited Access<br>\r\n\r\n-        Hướng khắc phục:<br>\r\n\r\n+ Nháy chuột phải vào biểu tượng mạng trên thanh taskbar phía dưới màn hình, chọn Network and Sharing Center<br>\r\n\r\n+ Cửa sổ xuất hiện, chọn Change Adapter Settings<br>\r\n\r\n+ Nháy chuột phải vào Local Area Connection, chọn Configure<br>\r\n\r\n+ Chọn tab Advanced, sau đó đánh dấu các Network Address và thay đổi value bằng cách nhập 12 chữ số ngẫu nhiên<br>\r\n\r\n2. Lỗi phần cứng<br>\r\n\r\nĐây là những lỗi không thể tự khắc phục hoặc cần thay thế<br>\r\n\r\na. Lỗi do ổ cứng<br>\r\n\r\n-        Dấu hiệu: Máy chạy chậm, treo máy, nghe tiếng kêu khi truy cập dữ liệu trong ổ cứng. Những tiếng kêu này diễn ra liên tục, lúc đầu tiếng kêu khá nhỏ nhưng sau đó tiếng kêu lớn dần lên.<br>\r\n\r\n-        Hướng khắc phục: Backup lại dữ liệu sau đó thay ổ cứng mới<br>\r\n\r\nb. RAM lỏng hoặc bị hỏng<br>\r\n\r\n-        Dấu hiệu: Khi bắt đầu khởi động, máy liên tục phát ra các tiếng kêu tít tít<br>\r\n\r\n-        Hướng khắc phục: Tháo RAM, làm sạch khe cắm RAM sau đó lắp lại cho chắc chắn, nếu không thu được kết quả tức có thể RAM đã bị hỏng, khi đó nên mang RAM đi bảo hành hoặc thay RAM mới<br>\r\n\r\nc. Lỗi do Pin<br>\r\n\r\n-        Dấu hiệu: Máy chạy được một khoảng thời gian ngắn sau đó tự tắt khi không cắm nguồn<br>\r\n\r\n-        Hướng khắc phục: Thay Pin mới. Do qua quá trình sử dụng, các pin lithium-ion có thể mất khả năng để nạp điện (chai pin). Sau 1 vài năm, sẽ chỉ còn nạp được điện trên 1 vài phần của pin. Chính vì thế thay pin là cách đơn giản và hiệu nhất.<br>\r\n\r\nd. Lỗi màn hình<br>\r\n\r\n-        Dấu hiệu: Trên màn hình có thể xuất hiện vệt trắng cắt ngang hoặc cắt dọc màn hình; màn hình bị vết ố màu xám, hoặc màu trắng khá lớn; hay màn hình chuyển sang một màu duy nhất, có thể là màu xanh, vàng,...<br>\r\n\r\n-        Hướng khắc phục: Điều tốt nhất nên làm là mang máy đi bảo hành, vì những lỗi trên có thể là do sợi cáp nối từ màn hình đến bo mạch của thân máy bị hỏng, bẹ cáp bị gãy, hay tấm chắn bên trong màn hình bị chuyển màu<br>\r\n\r\n', 3),
(6, 'b4.jpg', 'Cẩm nang những điều cần biết về smartphone', 'Smartphonehiện nay đã trở thành thiết bị quen thuộc của đa số người dùng điện thoại di độngtương tự như feature phone hay basic phone ngày trước. Tuy nhiên không phải aicũng có hiểu biết nhất định về smartphone ngoài việc biết rằng thiết bị nàythông minh và có rất nhiều tính năng.', '<b>Bộ xử lý</b><br>\r\n\r\nĐây là thuật ngữ thường gặp ở máy tính hay laptop, ở feature phone cũng có bộ xử lý nhưng ít người biết đến vì nó không đóng một vai trò rõ rệt như trên smartphone. Bộ vi xử lý thực sự là “bộ não” của smartphone khi nó đóng vai trò chủ đạo trong việc điều khiển, xử lý, tiến hành thực hiện các thao tác trên smartphone theo yêu cầu của người dùng.<br><br>\r\n<b>Camera</b><br>\r\n\r\nCamera khôngphải là một thuật ngữ mới, chức năng này đã xuất hiện từ rất sớm trên điện thoạidi động, được dùng để chụp ảnh, quay phim, và đây là một trong những tính năngkhông thể thiếu trên smartphone. Camera trên smartphone rất đa dạng về độ phângiải và thiết kế, dao động ở mức 2 - 3.2 mpx ở smartphone phổ thông, 5 mpx ởsmartphone tầm trung và trên 8 mpx ở smartphone cao cấp, có thể được trang bịthêm đèn flash đơn hoặc kép.<br><br>\r\n<b>Pin</b><br>\r\n\r\n \r\n\r\nBất cứ thiếtbị di động nào cũng cần đến pin, so với fearture phone hay basic phone thì pincủa smartphone là một khuyết điểm. Các thiết bị thông minh này có thời lượngpin hoạt động rất ngắn và phổ biến ở mức một tới hai ngày cá biệt có khi dưới mộtngày. Do đó, nhiều người khi mới sử dụng smartphone sẽ cảm thấy khó chịu khi phảisạc pin liên tục.<br><br>\r\n<b>Kết nốikhông dây wifi</b><br>\r\n\r\nWifi xuất hiệnkhá sớm trên điện thoại di động vào giai đoạn cuối thời kỳ thịnh hành củafeature phone, tuy nhiên kết nối này chỉ có mặt trên những chiếc feature phonecao cấp. Sang thời kỳ của smartphone, wifi được xem là chuẩn kết nối cơ bản vàkhông thể thiếu song song với 3G từ những chiếc smartphone phổ thông đến cao cấp.<br>\r\n\r\nWifi trênsmartphone cũng có tốc độ rất cao và khả năng bắt sóng mạnh, dễ dàng thao táchơn feature phone rất nhiều. Đa số các truy cập trên smartphone đều thực hiệnthông qua wifi. Ngoại trừ những chiếc smartphone siêu rẻ, người dùng có thể antâm vì hầu hết smartphone hiện nay đều được trang bị wifi.\r\n\r\n\r\n\r\n', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `dm_id` int(11) NOT NULL,
  `dm_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`dm_id`, `dm_name`) VALUES
(1, 'Laptop'),
(2, 'Tủ lạnh'),
(3, 'Máy giặt'),
(4, 'Điện thoại'),
(9, 'TiVi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc_tin`
--

CREATE TABLE `danhmuc_tin` (
  `danhmuctin_id` int(11) NOT NULL,
  `tendanhmuc` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc_tin`
--

INSERT INTO `danhmuc_tin` (`danhmuctin_id`, `tendanhmuc`) VALUES
(1, 'Kiến thức tủ lạnh'),
(2, 'Kiến thức máy giặt'),
(3, 'Kiến thức laptop'),
(4, 'Kiến thức TV'),
(5, 'Kiến thức điện thoại');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `donhang_id` int(11) NOT NULL,
  `sp_id` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `mahang` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `khachhang_id` int(11) NOT NULL,
  `ngaythang` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tinhtrang` int(11) NOT NULL,
  `huydon` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`donhang_id`, `sp_id`, `soluong`, `mahang`, `khachhang_id`, `ngaythang`, `tinhtrang`, `huydon`) VALUES
(50, 17, 1, '5125', 21, '2021-12-08 07:37:22', 1, 2),
(51, 17, 1, '4481', 21, '2021-12-08 07:35:48', 0, 0),
(52, 17, 1, '8885', 21, '2021-12-08 07:36:53', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giaodich`
--

CREATE TABLE `giaodich` (
  `giaodich_id` int(11) NOT NULL,
  `sp_id` int(11) NOT NULL,
  `khachhang_id` int(11) NOT NULL,
  `tinhtrangdon` int(11) NOT NULL DEFAULT 0,
  `soluong` int(11) NOT NULL,
  `magiaodich` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngaythang` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `huydon` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giaodich`
--

INSERT INTO `giaodich` (`giaodich_id`, `sp_id`, `khachhang_id`, `tinhtrangdon`, `soluong`, `magiaodich`, `ngaythang`, `huydon`) VALUES
(5, 8, 14, 0, 2, '1000', '2020-07-03 16:26:33', 0),
(6, 3, 14, 0, 5, '1000', '2020-07-03 16:26:33', 0),
(9, 8, 16, 0, 2, '9746', '2020-07-03 17:12:32', 0),
(10, 1, 16, 0, 4, '9746', '2020-07-03 17:12:32', 0),
(11, 5, 16, 0, 3, '9746', '2020-07-03 17:12:32', 0),
(12, 13, 17, 1, 1, '6091', '2020-07-06 15:56:34', 0),
(13, 8, 17, 1, 1, '6091', '2020-07-06 15:56:34', 0),
(14, 5, 17, 1, 2, '6091', '2020-07-06 15:56:34', 0),
(15, 8, 19, 0, 3, '9214', '2020-07-04 04:39:47', 0),
(16, 13, 19, 0, 5, '9214', '2020-07-04 04:39:47', 0),
(17, 11, 15, 1, 1, '2609', '2020-07-06 17:16:51', 2),
(18, 2, 15, 1, 1, '2609', '2020-07-06 17:16:51', 2),
(19, 9, 15, 0, 1, '839', '2020-07-06 17:16:01', 2),
(20, 13, 15, 0, 1, '839', '2020-07-06 17:16:01', 2),
(21, 6, 20, 0, 1, '5937', '2021-01-12 06:21:25', 0),
(22, 4, 20, 0, 1, '5937', '2021-01-12 06:21:25', 0),
(23, 6, 20, 0, 2, '7898', '2021-01-12 06:41:11', 0),
(24, 6, 20, 0, 1, '2651', '2021-01-12 06:46:10', 0),
(25, 6, 20, 0, 1, '6418', '2021-01-12 06:47:12', 0),
(26, 6, 20, 0, 1, '8842', '2021-01-12 06:49:52', 0),
(27, 6, 20, 0, 1, '5082', '2021-01-12 06:50:27', 0),
(28, 6, 20, 0, 1, '505', '2021-01-12 06:50:42', 0),
(29, 5, 20, 0, 2, '2108', '2021-01-12 06:55:11', 0),
(30, 5, 20, 0, 1, '5929', '2021-01-12 07:00:45', 0),
(31, 4, 20, 0, 1, '5929', '2021-01-12 07:00:45', 0),
(32, 4, 20, 0, 1, '4692', '2021-01-12 07:02:02', 0),
(33, 4, 20, 0, 1, '1858', '2021-01-12 07:07:12', 0),
(34, 6, 20, 0, 2, '6047', '2021-01-12 07:08:35', 0),
(35, 17, 21, 1, 1, '5125', '2021-12-08 07:37:22', 2),
(36, 17, 21, 0, 1, '4481', '2021-12-08 07:35:48', 0),
(37, 17, 21, 0, 1, '8885', '2021-12-08 07:36:53', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `giohang_id` int(11) NOT NULL,
  `sp_id` int(11) NOT NULL,
  `tensanpham` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `giasanpham` int(11) NOT NULL,
  `hinhanh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`giohang_id`, `sp_id`, `tensanpham`, `giasanpham`, `hinhanh`, `soluong`) VALUES
(51, 17, 'Laptop HP', 12990000, 'mthp.JPG', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `khachhang_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `note` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `giaohang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`khachhang_id`, `name`, `phone`, `address`, `note`, `email`, `password`, `giaohang`) VALUES
(21, 'vannghia', '123', '123', '123', 'vannghia123q@gmail.com', '202cb962ac59075b964b07152d234b70', 1),
(22, '123', '123', '123', '', 'vannghia123q@gmail.com', '202cb962ac59075b964b07152d234b70', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienhe`
--

CREATE TABLE `lienhe` (
  `lienhe_id` int(11) NOT NULL,
  `lienhe_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lienhe_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `ad_phanhoi` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lienhe`
--

INSERT INTO `lienhe` (`lienhe_id`, `lienhe_name`, `lienhe_email`, `message`, `ad_phanhoi`) VALUES
(1, 'Phạm Văn Nghĩa', 'Vannghia@gmail.com', 'Hãy liên hệ với tôi qua email này!!!', ''),
(2, 'Hữu Nghĩa', 'huunghia@gmail.com', 'Chào Ad :)))', 'Chào anh Tuấn Anh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `sp_id` int(11) NOT NULL,
  `dm_id` int(11) NOT NULL,
  `sp_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sp_chitiet` text COLLATE utf8_unicode_ci NOT NULL,
  `sp_mota` text COLLATE utf8_unicode_ci NOT NULL,
  `sp_gia` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sp_giakhuyenmai` int(100) NOT NULL,
  `sp_active` int(11) NOT NULL,
  `sp_hot` int(11) NOT NULL DEFAULT 1,
  `sp_soluong` int(11) NOT NULL,
  `sp_image` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`sp_id`, `dm_id`, `sp_name`, `sp_chitiet`, `sp_mota`, `sp_gia`, `sp_giakhuyenmai`, `sp_active`, `sp_hot`, `sp_soluong`, `sp_image`) VALUES
(1, 4, 'Samsung Galaxy J7', 'Màn hình:PLS TFT LCD, 5.5\", Full HD<br>\r\nHệ điều hành:Android 6.0 (Marshmallow)<br>\r\nCamera sau:13 MP<br>\r\nCamera trước:8 MP<br>\r\nCPU:Exynos 7870 8 nhân<br>\r\nRAM:3 GB<br>\r\nBộ nhớ trong:32 GB<br>\r\nThẻ nhớ:MicroSD, hỗ trợ tối đa 256 GB<br>\r\nThẻ SIM:2 Nano SIM, hỗ trợ 4G<br>', 'Vẻ ngoài của Galaxy J7 Prime hết sức trẻ trung nhờ sự kết hợp giữa lớp vỏ kim loại sang trọng, mặt kính cường lực Gorilla Glass 4 được vát cong 2.5D ở các cạnh.\r\nCác cạnh cong 2.5D tạo cảm giác thoải mái khi thao tác trên màn hình.', '5000000', 4800000, 1, 0, 10, 'dtsamsung.JPG'),
(2, 4, 'OPPO A37f', 'Màn hình:	IPS LCD, 5\", HD<br>\r\nHệ điều hành:	Android 5.1 (Lollipop)<br>\r\nCamera sau:	8 MP<br>\r\nCamera trước:	5 MP<br>\r\nCPU:	Snapdragon 410 4 nhân<br>\r\nRAM:	2 GB<br>\r\nBộ nhớ trong:	16 GB<br>\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 128 GB<br>\r\nThẻ SIM:\r\n2 Nano SIM, Hỗ trợ 4G', 'OPPO A37 (Neo 9) là thiết bị tiếp theo của dòng OPPO Neo vốn được người dùng yêu thích với camera selfie ảo diệu cùng mức giá bán phải chăng.Thiết kế là điểm cải tiến lớn trên OPPO A37 so với các thế hệ OPPO Neo 5 và Neo 7 đi trước, vẫn được làm từ nhựa nhưng OPPO A37 đã chắc chắn và thời trang hơn các đàn anh của mình rất nhiều.', '6000000', 5500000, 1, 1, 10, 'dtoppo.JPG'),
(3, 4, 'IPhone XS MAX 265GB', 'Màn hình:	OLED, 6.5\", Super Retina<br>\r\nHệ điều hành:	iOS 12<br>\r\nCamera sau:	Chính 12 MP & Phụ 12 MP<br>\r\nCamera trước:	7 MP<br>\r\nCPU:	Apple A12 Bionic 6 nhân<br>\r\nRAM:	4 GB<br>\r\nBộ nhớ trong:	256 GB<br>\r\nThẻ SIM:\r\n1 eSIM & 1 Nano SIM, Hỗ trợ 4G\r\nHOTSIM Vina Bùm 120 (2GB/ngày)<br>\r\nDung lượng pin:	3174 mAh, có sạc nhanh', 'Sau 1 năm mong chờ, chiếc smartphone cao cấp nhất của Apple đã chính thức ra mắt mang tên iPhone Xs Max 256 GB. Máy các trang bị các tính năng cao cấp nhất từ chip A12 Bionic, dàn loa đa chiều cho tới camera kép tích hợp trí tuệ nhân tạo.\r\nHiệu năng đỉnh cao cùng chip Apple A12\r\niPhone Xs Max được Apple trang bị cho con chip mới toanh hàng đầu của hãng mang tên Apple A12.\r\n\r\nChip A12 Bionic được xây dựng trên tiến trình 7nm đầu tiên mà hãng sản xuất với 6 nhân đáp ứng vượt trội trong việc xử lý các tác vụ và khả năng tiết kiệm năng lượng tối ưu.', '9500000', 9200000, 1, 1, 10, 'iphone.JPG'),
(4, 9, 'TV Samsung', '-Loại tivi:Smart Tivi, 43 inch<br>\r\n-Màn hình:Ultra HD 4K,<br>\r\n-Hệ điều hành:Tizen OS<br>\r\n-Remote thông minh:Remote đa nhiệm - One Remote<br>\r\n-Tính năng thông minh:Tìm kiếm giọng nói (Chỉ hỗ trợ tiếng Việt trong Youtube)<br>\r\n-Ứng dụng:YouTube, Netflix, Trình duyệt web, Kho ứng dụng, Spotify, FPT Play, MyTV, Galaxy Play (Fim+), Nhaccuatui, Apple TV, ZingTV, Clip TV<br>\r\n-Điều khiển TV bằng điện thoại:Bằng ứng dụng SmartThings<br>\r\n-Chiếu màn hình điện thoại lên tivi:Chiếu màn hình qua AirPlay 2, Chiếu màn hình Screen Mirroring<br>\r\n-Năm ra mắt:2019<br>', 'Thiết kế màn hình cỡ nhỏ 43 inch, kiểu dáng cứng cáp.\r\nĐộ phân giải 4K sắc nét gấp 4 lần Full HD.\r\nCông nghệ HDR10+ nâng cao độ tương phản cho trải nghiệm hình ảnh ấn tượng.\r\nCông nghệ PurColor mang đến thế giới hình ảnh rực rỡ đầy màu sắc.\r\nCông nghệ UHD Dimming tối ưu cho hình ảnh sắc nét, màu sắc hiển thị chân thật hơn.\r\nCông nghệ Dolby Digital Plus cho trải nghiệm âm thanh vòm bùng nổ, sống động.\r\nHệ điều hành Tizen OS dễ sử dụng, hỗ trợ nhiều ứng dụng giải trí hấp dẫn đi kèm One remote điều khiển linh hoạt.\r\nĐiều khiển tivi bằng điện thoại qua ứng dụng SmartThings.\r\nHỗ trợ chiếu màn hình điện thoại lên tivi nhờ Screen Mirroring, Airplay 2.', '25000000', 24700000, 1, 0, 3, 'm4.jpg'),
(5, 9, 'TV Toshiba', '-Loại tivi:Tivi LED cơ bản, 55 inch<br>\r\n-Màn hình:Full HD<br>\r\n-Remote thông minh:Không dùng được<br>\r\n-Năm ra mắt:2017<br>', '-Công nghệ Essential PQ Technology tạo màu sắc rực rỡ, độ sáng hoàn hảo.<br>\r\n-Trang bị công nghệ DTS TruSurround cho ra  âm thanh vòm ảo.<br>\r\n-Kết nối với thiết bị ngoài, USB, ổ HDD để phát các chương trình yêu thích.<br>', '25000000', 24700000, 1, 0, 7, 'tvtoshiba.jpg'),
(6, 9, 'TV LG', '-Loại tivi:Smart Tivi, 65 inch<br>\r\n-Màn hình:Ultra HD 4K<br>\r\n-Hệ điều hành:WebOS 4.5<br>\r\n-Remote thông minh:Có Magic Remote (tìm kiếm bằng giọng nói có hỗ trợ tiếng Việt)<br>\r\n-Tính năng thông minh:Tìm kiếm bằng giọng nói (có hỗ trợ tiếng Việt), Trợ lý ảo Google Assistant, AI ThinQ<br>\r\n-Ứng dụng:YouTube, Netflix, Trình duyệt web, LG Content Store, FPT Play, MyTV, Spotify, Nhaccuatui, ZingTV, Clip TV\r\n-Điều khiển TV bằng điện thoại:Bằng ứng dụng LG TV Plus<br>\r\n-Chiếu màn hình điện thoại lên tivi:Chiếu màn hình Screen Mirroring, Chiếu màn hình qua AirPlay 2<br>\r\n-Năm ra mắt:2019', 'Thiết kế màn hình 65 inch, viền mỏng chỉ 0.5 cm.\r\nĐộ phân giải 4K cực nét gấp 4 lần Full HD.\r\nCông nghệ 4K Active HDR giúp hình ảnh trở nên chân thực, sống động.\r\nCông nghệ True Color Accuracy mang đến màu sắc rực rỡ, bắt mắt.\r\nChip xử lý Quad Core tái tạo hình ảnh một cách chính xác.\r\nÂm thanh sắc sảo với công nghệ DTS Virtual:X.\r\nHệ điều hành WebOS 4.5 dễ sử dụng, đi kèm remote thông minh hỗ trợ tìm kiếm giọng nói bằng tiếng Việt cả 3 miền.\r\nTìm kiếm thông tin, điều khiển tivi dễ dàng hơn với trí tuệ nhân tạo  AI ThinQ.\r\nĐiều khiển tivi bằng điện thoại qua ứng dụng LG TV Plus.\r\nHỗ trợ chiếu màn hình điện thoại lên tivi Screen Mirroring và AirPlay 2.', '25000000', 24700000, 1, 1, 3, 'TV LG.jpg'),
(7, 3, 'Máy giặt Toshiba', '-Loại máy giặt:Cửa trước, Lồng ngang\r\nKhối lượng giặt:8.5 Kg<br>\r\n-Số người sử dụng:Từ trên 6 người (Trên 8.5 kg)<br>\r\n-Tốc độ quay vắt:1200 vòng/phút<br>\r\n-Lượng nước tiêu thụ chuẩn:Khoảng 50 lít một lần giặt thường<br>\r\n\r\n-Hiệu suất sử dụng điện20 Wh/kg<br>\r\n-Kiểu động cơ:Truyền động dây Curoa<br>\r\n-Inverter:Có<br>\r\n-Chương trình hoạt động:16 chương trình\r\nCông nghệ giặt:Greatwave sức mạnh siêu sóng, Phục hồi chương trình giặt dang dở<br>\r\n-Nơi sản xuất:Trung Quốc', 'Great Waves tích hợp 3 công nghệ tiên tiến: Flush Waves tạo sóng mạnh mẽ đánh bật vết bẩn, chế độ giặt Color Care giảm 39% độ phai màu, công nghệ Real Inverter tiết kiệm điện, vận hành êm, bền bỉ.<br>\r\nGiặt nhanh 15 phút - Giải pháp hoàn hảo cho cuộc sống bận rộn.<br>\r\nTính năng vệ sinh lồng giặt tự động, tiết kiệm thời gian và chi phí.<br>\r\nTùy chỉnh nhiệt độ nước 20~90 độ C.<br>\r\nTiện lợi hơn với tính năng tự khởi động lại khi có điện.', '11000000', 10500000, 1, 0, 10, 'm8.jpg'),
(8, 3, 'Máy giặt Electrolux', '-Loại máy giặt:Cửa trước, Lồng ngang\r\n-Khối lượng giặt:9 Kg<br>\r\n-Số người sử dụng:4 - 5 người (7.5 - 8.5 kg)<br>\r\n-Tốc độ quay vắt:1200 vòng/phút<br>\r\n-Hiệu suất sử dụng điện34.5 Wh/kg<br>\r\n-Kiểu động cơ:Truyền động dây Curoa<br>\r\n-Inverter:Có<br>\r\n-Chương trình hoạt động:8 chương trình<br>\r\n-Công nghệ giặt:Lồng giặt HIVE hình tổ ong, Giặt hơi nước Vapour Care, Chức năng Add Cloths - thêm quần áo khi giặt<br>\r\n-Nơi sản xuất:Thái Lan<br>\r\n-Hãng:Electrolux. Xem thông tin hãng', 'Thiết kế cửa máy giặt được cải tiến hơn với đường kính rộng lên đến 33 cm.<br>\r\nGiặt hơi nước Vapour Care tiêu diệt vi khuẩn, bảo vệ sức khỏe cho các thành viên.\r\nĐộng cơ Inverter giúp máy giặt vận hành ổn định, bền bỉ, tiết kiệm điện, nước cho gia đình.<br>\r\nChức năng Add Cloths cho thêm quần áo bỏ quên ngay cả khi máy đã vận hành.\r\nGiặt nhanh 15 phút - Giải pháp hoàn hảo cho cuộc sống bận rộn.<br>', '11000000', 10500000, 1, 1, 10, 'mgelectrolux.jpg'),
(9, 3, 'Máy giặt Samsung', '-Loại máy giặt:Cửa trước, Lồng ngang<br>\r\n-Khối lượng giặt:9 Kg<br>\r\n-Số người sử dụng:Từ trên 6 người (Trên 8.5 kg)<br>\r\n-Tốc độ quay vắt:1400 vòng/phút<br>\r\n-Hiệu suất sử dụng điện22.7 Wh/kg\r\nKiểu động cơ:Truyền động dây Curoa<br>\r\n-Inverter:Có<br>\r\n-Chương trình hoạt động:14 Chương trình\r\nCông nghệ giặt:Công nghệ giặt hơi nước Steam Cycles, Lồng giặt thiết kế kim cương, Công nghệ giặt bong bóng Eco Bubble<br>\r\n-Nơi sản xuất:Việt Nam', 'Công nghệ Digital Inverter hiện đại cho khả năng vận hành bền bỉ, tiết kiệm chi phí.\r\nThêm đồ trong khi giặt tiện lợi với cửa phụ Add Door.\r\nLồng giặt kim cương giặt sạch hiệu quả, bảo vệ quần áo bền đẹp như mới.\r\nĐánh bay mọi vết bẩn cứng đầu với công nghệ giặt bong bóng Eco Bubble.\r\nGiặt hơi nước loại bỏ tác nhân gây dị ứng có trong quần áo.\r\nGiặt sạch sâu, diệt khuẩn hiệu quả với giặt nước nóng.\r\nChẩn đoán lỗi thông minh SmartCheck.\r\nChế độ tự động làm sạch lồng giặt Eco Drum Clean.', '11000000', 10500000, 1, 0, 10, 'mgsamsung.jpg'),
(10, 2, 'Tủ lạnh Panasonic', '-Kiểu tủ:Ngăn đá trên<br>\r\n-Dung tích:234 lít<br>\r\n-Số người sử dụng:2 - 3 người<br>\r\n-Công nghệ Inverter:Tủ lạnh Inverter<br>\r\n-Tiện ích:Hộp đá xoay di động, Inverter tiết kiệm điện<br>\r\n-Công nghệ làm lạnh:Panorama<br>\r\n-Công nghệ kháng khuẩn khử mùi:Công nghệ kháng khuẩn Ag Clean với tinh thể bạc Ag+<br>\r\n-Công nghệ bảo quản thực phẩm:Ngăn rau quả giữ ẩm Fresh Safe, Ngăn Extra Cool Zone giữ lạnh thực phẩm ở nhiệt độ 2°C<br>\r\n-Nơi sản xuất:Việt Nam<br>\r\n-Năm ra mắt:2020<br>\r\n-Hãng:Panasonic. ', 'Hạn chế lẫn mùi thực phẩm nhờ hộp chứa riêng ở ngăn đông.\r\nLàm lạnh đồ uống nhanh trong ngăn Extra Cool Zone 2 độ C.\r\nTiết kiệm điện hiệu quả với công nghệ Inverter và cảm biến Econavi.\r\nHơi lạnh lan toả đều khắp tủ với công nghệ Panorama.\r\nKháng khuẩn, loại bỏ mùi hôi hiệu quả nhờ công nghệ Ag Clean.\r\nGiữ rau quả tươi lâu với ngăn giữ ẩm Fresh Safe.', '5600000', 5500000, 1, 0, 10, 'tulanhpana.JPG'),
(11, 2, 'Tủ lạnh LG GN-L205S', '-Kiểu tủ:Ngăn đá trên<br>\r\n-Dung tích:255 lít<br>\r\n-Số người sử dụng:2 - 3 người<br>\r\n-Công nghệ Inverter:Tủ lạnh Inverter\r\nTiện ích:Inverter tiết kiệm điện, Lấy nước bên ngoài, Ngăn kệ có thể thay đổi linh hoạt<br>\r\n-Công nghệ làm lạnh:Làm lạnh đa chiều<br>\r\n-Công nghệ kháng khuẩn khử mùi:Khử mùi Nano Carbon<br>\r\n-Công nghệ bảo quản thực phẩm:Ngăn rau quả giữ ẩm, Làm lạnh từ cửa tủ DoorCooling+<br>\r\n-Nơi sản xuất:Indonesia<br>\r\n-Năm ra mắt:2018<br>\r\n-Hãng:LG', 'Tiết kiệm điện, kiểm soát nhiệt ổn định với công nghệ Linear Inverter.\r\nLàm lạnh nhanh và đồng đều nhờ công nghệ làm lạnh đa chiều.\r\nKhông khí trong tủ luôn sạch sẽ, không còn mùi hôi khó chịu khi đã có khử mùi Nano Carbon.\r\nGiữ rau quả luôn tươi ngon nhờ ngăn cân bằng độ ẩm.\r\nLàm lạnh đều thực phẩm ở phía cửa tủ và khay cửa với tính năng làm lạnh từ cửa tủ Door Cooling+.\r\nLấy nước bên ngoài, khay đá di động tiện lợi.\r\nDễ dàng lấy thực phẩm với khay kéo trợ lực Pull out Tray.', '4500000', 4400000, 1, 0, 10, 'tulanhlg.JPG'),
(12, 2, 'Tủ lạnh Samsung', '-Kiểu tủ:Ngăn đá trên<br>\r\n-Dung tích:299 lít<br>\r\n-Số người sử dụng:2 - 3 người<br>\r\n-Công nghệ Inverter:Tủ lạnh Inverter<br>\r\n-Công suất tiêu thụ công bố theo TCVN:~ 1.14 kW/ngày<br>\r\n-Tiện ích:Inverter tiết kiệm điện, Dàn lạnh hoạt động độc lập, Ngăn Cool Pack duy trì độ lạnh khi mất điện<br>\r\n-Công nghệ làm lạnh:2 dàn lạnh riêng biệt (Twin Cooling Plus™)<br>\r\n-Công nghệ kháng khuẩn khử mùi:Bộ lọc than hoạt tính Deodorizer<br>\r\n-Công nghệ bảo quản thực phẩm:Ngăn rau quả giữ ẩm<br>\r\n-Nơi sản xuất:Thái Lan<br>\r\n-Năm ra mắt:2016<br>\r\n-Hãng:Samsung.', 'Vận hành êm ái, bền bỉ và tiết kiệm năng lượng nhờ có công nghệ Digital Inverter.\r\nCông nghệ hai dàn lạnh độc lập ngăn lẫn mùi, làm lạnh nhanh, giữ độ ẩm lên đến 70%.\r\nNgăn giữ lạnh Cool Pack tiện lợi khi bị mất điện.\r\nKhông khí được lọc sạch, đẩy lùi vi khuẩn gây bệnh với bộ lọc than hoạt tính.\r\nNgăn chứa rau củ, quả giữ ẩm Bigbox.', '5500000', 5300000, 1, 1, 10, 'tlsamsung.JPG'),
(13, 1, 'Acer Laptop ', '- CPU: Intel Core i5-10300H<br>\r\n- Màn hình: 15.6\" IPS (1920 x 1080)<br>\r\n- RAM: 1 x 8GB DDR4 2933MHz<br>\r\n- Đồ họa: NVIDIA GeForce GTX 1650 4GB GDDR6 / Intel UHD Graphics<br>\r\n- Lưu trữ: 512GB SSD M.2 NVMe /<br>\r\n- Hệ điều hành: Windows 10 Home 64-bit<br>\r\n- Pin: 3 cell 57 Wh Pin liền<br>\r\n- Khối lượng: 2.3 kg\r\n', 'Acer Laptop là chiếc laptop gaming có cấu hình mạnh mẽ với Chip Intel đa nhân hiệu năng cao và card đồ họa rời NVIDIA thế hệ mới nhất, hỗ trợ nâng cấp bộ nhớ ram lên đến 32GB, khả năng lưu trữ siêu khủng với hai khe SSD PCIe và ổ cứng HDD truyền thống.', '15000000', 13000000, 1, 1, 10, 'acer.JPG'),
(14, 1, 'Laptop Lennovo', '-CPU:Intel Core i3 Ice Lake, 1005G1, 1.20 GHz<br>\r\n-RAM:4 GB, DDR4 (On board +1 khe), 2666 MHz<br>\r\n-Ổ cứng:Hỗ trợ khe cắm HDD SATA, SSD: 512 GB, M.2 PCIe<br>\r\n-Màn hình:15.6 inch, Full HD (1920 x 1080)<br>\r\n-Card màn hình:Card đồ họa tích hợp, Intel UHD Graphics<br>\r\n-Cổng kết nối:2 x USB 3.0, HDMI, USB 2.0<br>\r\n-Hệ điều hành:Windows 10 Home SL<br>\r\n-Thiết kế:Vỏ nhựa, PIN liền<br>\r\n-Kích thước:Dày 19.9 mm, 1.85 kg<br>\r\n-Thời điểm ra mắt:2020', 'Laptop Lenovo IdeaPad 3 15IIL05 có cấu hình vừa dủ dùng với chip Intel Core i3, RAM 4 GB, xử lý ổn định các công việc văn phòng thường ngày, phù hợp với học sinh sinh viên, dân văn phòng.', '13000000', 12900000, 1, 0, 5, 'lennovo.JPG'),
(15, 1, 'Laptop Asus', '-CPU:Intel Core i3 Coffee Lake, 8145U, 2.10 GHz<br>\r\n-RAM:4 GB, DDR4 (On board +1 khe), 2400 MHz<br>\r\n-Ổ cứng:Hỗ trợ khe cắm HDD SATA, SSD 256GB NVMe PCIe<br>\r\n-Màn hình:14 inch, Full HD (1920 x 1080)<br>\r\n-Card màn hình:Card đồ họa tích hợp, Intel UHD Graphics<br>\r\n-Cổng kết nối:2 x USB 2.0, USB 3.1, HDMI, USB Type-C<br>\r\n-Hệ điều hành:Windows 10 Home SL<br>\r\n-Thiết kế:Vỏ nhựa, PIN liền<br>\r\n-Kích thước:Dày 22.9 mm, 1.423 kg<br>\r\n-Thời điểm ra mắt:2019<br>', 'Laptop Asus VivoBook X409FA i3 (EK468T) được trang bị cấu hình khá cùng ổ cứng SSD mang đến khả năng xử lí mượt mà các tác vụ văn phòng, học tập hay lướt web. Máy còn thuận tiện trong việc di chuyển nhờ có thiết kế gọn nhẹ, cơ động.', '10500000', 10300000, 0, 0, 7, 'asus.JPG'),
(17, 1, 'Laptop HP', 'CPU:	Intel Core i3 Coffee Lake, 8145U, 2.10 GHz<br>\r\nRAM:	4 GB, DDR4 (1 khe), 2666 MHz<br>\r\nỔ cứng:	HDD: 1 TB SATA3, Hỗ trợ khe cắm SSD M.2 PCIe<br>\r\nMàn hình:	14 inch, Full HD (1920 x 1080)<br>\r\nCard màn hình:	Card đồ họa tích hợp, Intel® UHD Graphics 620<br>\r\nCổng kết nối:	2 x USB 3.0, HDMI, LAN (RJ45), USB Type-C<br>\r\nHệ điều hành:	Windows 10 Home SL<br>\r\nThiết kế:	Vỏ kim loại, PIN liền<br>\r\nKích thước:	Dày 17.9 mm, 1.6 kg<br>\r\nThời điểm ra mắt:	2019', 'Đặc điểm nổi bật của HP Pavilon 14 ce2035tu i3 8145U/4GB/1TB/Win10 (6YZ18PA)<br>\r\n\r\nBộ sản phẩm chuẩn: Dây nguồn (2 dây)<br>\r\n\r\nHP Pavilon 14 ce2035tu i3 (6YZ18PA) là một mẫu laptop học tập văn phòng có cấu hình vừa phải, đáp ứng nhu cầu văn phòng và giải trí thường ngày. Laptop còn có thiết kế mỏng nhẹ và mức giá phải chăng.', '12990000', 11690000, 1, 0, 0, 'mthp.JPG'),
(18, 4, 'Xiaomi Redmi Note 8', 'Màn hình :	6.3 inches, Full HD+, 1080 x 2340 Pixels<br>\r\nCamera trước :	13.0 MP<br>\r\nCamera sau :	48 MP+ 8 MP+ 2 MP+ 2 MP<br>\r\nRAM :	4 GB<br>\r\nBộ nhớ trong :	64 GB<br>\r\nCPU :	Qualcomm® Snapdragon™ 665, Octa-Core, 2.0 Ghz<br>\r\nGPU :	Adreno 610<br>\r\nDung lượng pin :	4000 mAh<br>\r\nHệ điều hành :	Android 9.0 (Pie)<br>\r\nThẻ SIM :	2 Sim, Nano SIM<br>\r\nXuất xứ :	Trung Quốc<br>\r\nNăm sản xuất :	2019', 'Chiếc điện thoại với 4 camera sau Redmi Note 8 mang đến cho bạn khả năng chụp ảnh tuyệt vời. Đồng thời hiệu năng và thời lượng pin cực đỉnh đúng như truyền thống từ trước đến nay của Xiaomi.', '4490000', 4290000, 0, 1, 5, 'dtrelmi.JPG');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slider_caption` text COLLATE utf8_unicode_ci NOT NULL,
  `slider_active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_image`, `slider_caption`, `slider_active`) VALUES
(1, 'b2.jpg', 'Khuyến mãi', 1),
(2, 'b3.jpg', 'Khuyến mãi', 1),
(4, 'b1.jpg', 'Khuyến mãi', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`baiviet_id`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`dm_id`);

--
-- Chỉ mục cho bảng `danhmuc_tin`
--
ALTER TABLE `danhmuc_tin`
  ADD PRIMARY KEY (`danhmuctin_id`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`donhang_id`);

--
-- Chỉ mục cho bảng `giaodich`
--
ALTER TABLE `giaodich`
  ADD PRIMARY KEY (`giaodich_id`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`giohang_id`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`khachhang_id`);

--
-- Chỉ mục cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`lienhe_id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`sp_id`);

--
-- Chỉ mục cho bảng `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `baiviet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `dm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `danhmuc_tin`
--
ALTER TABLE `danhmuc_tin`
  MODIFY `danhmuctin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `donhang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT cho bảng `giaodich`
--
ALTER TABLE `giaodich`
  MODIFY `giaodich_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `giohang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `khachhang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `lienhe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `sp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
