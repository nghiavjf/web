-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 02, 2020 lúc 08:10 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bandienmay`
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
(1, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Văn Thành');

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
(10, 'Sách văn học'),
(11, 'Sách lịch sử'),
(12, 'Sách giáo khoa - tham khỏa'),
(13, 'Sách chính trị - pháp luật'),
(14, 'Sách khoa học - kỹ thuật'),
(15, 'Sách ngoại ngữ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc_tin`
--

CREATE TABLE `danhmuc_tin` (
  `danhmuctin_id` int(11) NOT NULL,
  `tendanhmuc` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(20, 8, 2, '1000', 14, '2020-07-03 16:26:33', 0, 0),
(21, 3, 5, '1000', 14, '2020-07-03 16:26:33', 0, 0),
(24, 8, 2, '9746', 16, '2020-07-03 17:12:32', 0, 0),
(25, 1, 4, '9746', 16, '2020-07-03 17:12:32', 0, 0),
(26, 5, 3, '9746', 16, '2020-07-03 17:12:32', 0, 0),
(27, 13, 1, '6091', 17, '2020-07-06 15:56:34', 1, 0),
(28, 8, 1, '6091', 17, '2020-07-06 15:56:34', 1, 0),
(29, 5, 2, '6091', 17, '2020-07-06 15:56:34', 1, 0),
(30, 8, 3, '9214', 19, '2020-07-04 04:39:47', 0, 0),
(31, 13, 5, '9214', 19, '2020-07-04 04:39:47', 0, 0),
(32, 11, 1, '2609', 15, '2020-07-06 17:16:50', 1, 2),
(33, 2, 1, '2609', 15, '2020-07-06 17:16:50', 1, 2),
(34, 9, 1, '839', 15, '2020-07-06 17:16:01', 0, 2),
(35, 13, 1, '839', 15, '2020-07-06 17:16:01', 0, 2);

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
(20, 13, 15, 0, 1, '839', '2020-07-06 17:16:01', 2);

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
(14, 'Trần Phi Hùng', '0372458126', '123k/12 abc, đà nẵng', 'Giao hàng nhanh nhé', 'phihung@gmal.com', '7d3e17a6469c7e53c3d906532bd0ccae', 0),
(15, 'Lê Thoa', '0899234567', '123k/12 abc, đà nẵng', 'Giao hàng nhanh nhé', 'lethoa@gmail.com', '7720ab50b0739012d36de0b13db361bf', 1),
(16, 'Nam', '027654896', '123k/12 abc, đà nẵng', 'Giao hàng nhanh nhé', 'nam123@gmail.com', '54e193277215c92570bc9659bd48ff40', 1),
(17, 'Văn Trình', '0376015458', 'k58/31 ông ích khiêm, đà nẵng', 'Giao hàng nhanh nhé', 'vantrinh@gmail.com', '6f2008b2a318fa5f1a2fcdb9833e08be', 1),
(18, 'Cu Anh', '0273482460', 'Quảng Bình', 'Giao hàng nhanh nhé', 'cuanh123@gmail.com', '6685bb1ab73104770878bd25ded550c0', 1),
(19, 'Cu Đen', '037245235', 'Quảng Bình', 'Giao hàng nhanh nhé', 'cuden123@gmail.com', 'abd3562d7d9c6b0ffbb67bea9e1cd04d', 1);

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
(1, 'Hoàng Văn Hổ', 'hoangho@gmail.com', 'Hãy liên hệ với tôi qua email này!!!', ''),
(2, 'Tuấn Anh', 'tuananh@gmail.com', 'Chào Ad :)))', 'Chào anh Tuấn Anh');

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
(19, 10, 'Thay Đổi Cuộc Sống Với Nhân Số Học', '-Công ty phát hành:First News - Trí Việt<br>\r\n-Ngày xuất bản:10-2020<br>\r\n-Kích thước:16 x 24 cm<br>\r\n-Dịch Giả	Lê Đỗ Quỳnh Hương<br>\r\n-Loại bìa:Bìa gập<br>\r\n-Số trang:342<br>\r\n-SKU:2019473448712<br>\r\n-Nhà xuất bản:Nhà Xuất Bản -Tổng hợp: TP.HCM<br>', 'Thay Đổi Cuộc Sống Với Nhân Số Học\r\n\r\nCuốn sách Thay đổi cuộc sống với Nhân số học là tác phẩm được chị Lê Đỗ Quỳnh Hương phát triển từ tác phẩm gốc “The Complete Book of Numerology” của tiến sỹ David A. Phillips, khiến bộ môn Nhân số học khởi nguồn từ nhà toán học Pythagoras trở nên gần gũi, dễ hiểu hơn với độc giả Việt Nam.\r\n\r\nĐầu năm 2020, chuỗi chương trình “Thay đổi cuộc sống với Nhân số học” của biên tập viên, người dẫn chương trình quen thuộc tại Việt Nam Lê Đỗ Quỳnh Hương ra đời trên Youtube, với mục đích chia sẻ kiến thức, giúp mọi người tìm hiểu và phát triển, hoàn thiện bản thân, các mối quan hệ xã hội thông qua bộ môn Nhân số học. Chương trình đã nhận được sự yêu mến và phản hồi tích cực của rất nhiều khán giả và độc giả sau mỗi tập phát sóng.', '248000', 223200, 1, 1, 50, 'vh2.png'),
(20, 10, 'The Story Of Art - Câu Chuyện Nghệ Thuật', '-Công ty phát hành	:Omega Plus<br>\r\n-Ngày xuất bản	:09-2020<br>\r\n-Kích thước	:20.5 x 29.2 cm<br>\r\n-Dịch Giả	:Lưu Bích Ngọc<br>\r\n-Loại bìa	:Bìa cứng<br>\r\n-Số trang	:692<br>\r\n-SKU	:5696174627553<br>\r\n-Nhà xuất bản	:Nhà Xuất Bản Dân Trí', '“The Story of Art\" (Câu Chuyện Nghệ Thuật) được in lần đầu năm 1950 và trong 70 năm qua, được dịch ra gần 30 thứ tiếng và hơn tám triệu bản đã được bán ra trên toàn thế giới. Điều đó khiến tác phẩm trở thành cuốn sách nghệ thuật bán chạy nhất mọi thời đại và là tác phẩm nhập môn nghệ thuật thị giác cho vô số thế hệ độc giả.\r\n\r\nTác giả E.H Gombrich (1909-2001) là một trong những nhà sử học nghệ thuật lỗi lạc nhất của nửa sau thế kỷ 20, đối với giới hàn lâm cũng như với tầng lớp công chúng rộng rãi. Những tác phẩm khác mang tính lý thuyết của ông cũng đã trở thành những công trình then chốt đối với các nhà nghiên cứu lịch sử nghệ thuật.\r\n\r\nCâu Chuyện Nghệ Thuật là một tác phẩm kể về lịch sử nghệ thuật châu Âu từ thời cổ đại đến hiện đại, được tác giả khảo sát và đánh giá trong các lĩnh vực khác nhau như hội họa, điêu khắc, kiến trúc… song hành với những chuyển biến và giao thoa của các nền văn hóa, chính trị, và tôn giáo. Nguồn tư liệu phong phú về các tác phẩm đáng chú ý, những tên tuổi tài năng, những trường phái, phong cách đặc sắc trong dòng chảy nghệ thuật.', '999000', 646100, 1, 1, 50, 'vhm.png'),
(21, 10, 'Con Chim Xanh Biếc Bay Về', '-Nhà cung cấp:NXB Trẻ<br>\r\n-Tác giả:Nguyễn Nhật Ánh<br>\r\n-Nhà xuất bản:NXB Trẻ\r\n-Hình thức bìa:Bìa Cứng', 'Con Chim Xanh Biếc Bay Về\r\n\r\nKhông giống như những tác phẩm trước đây lấy bối cảnh vùng quê miền Trung đầy ắp những hoài niệm tuổi thơ dung dị, trong trẻo với các nhân vật ở độ tuổi dậy thì, trong quyển sách mới lần này nhà văn Nguyễn Nhật Ánh lấy bối cảnh chính là Sài Gòn – Thành phố Hồ Chí Minh nơi tác giả sinh sống (như là một sự đền đáp ân tình với mảnh đất miền Nam). Các nhân vật chính trong truyện cũng “lớn” hơn, với những câu chuyện mưu sinh lập nghiệp lắm gian nan thử thách của các sinh viên trẻ đầy hoài bão. Tất nhiên không thể thiếu những câu chuyện tình cảm động, kịch tính và bất ngờ khiến bạn đọc ngẩn ngơ, cười ra nước mắt. Và như trong mọi tác phẩm Nguyễn Nhật Ánh, sự tử tế và tinh thần hướng thượng vẫn là điểm nhấn quan trọng trong quyển sách mới này.', '270000', 202500, 0, 1, 50, 'vh3.png'),
(22, 10, 'Đừng Lựa Chọn An Nhàn Khi Còn Trẻ', '-Công ty phát hành:	GuBooks<br>\r\n-Ngày xuất bản:		02-2019<br>\r\n-Kích thước:		13.5 x 20 cm<br>\r\n-Dịch Giả:		Đặng Quân<br>\r\n-Loại bìa:		Bìa mềm<br>\r\n-Số trang:		316<br>\r\n-SKU:			9552147738847<br>\r\n-Nhà xuất bản:		Nhà Xuất Bản Thế Giới<br>', 'Trong độ xuân xanh phơi phới ngày ấy, bạn không dám mạo hiểm, không dám nỗ lực để kiếm học bổng, không chịu tìm tòi những thử thách trong công việc, không phấn đấu hướng đến ước mơ của mình. Bạn mơ mộng rằng làm việc xong sẽ vào làm ở một công ty nổi tiếng, làm một thời gian sẽ thăng quan tiến chức. Mơ mộng rằng khởi nghiệp xong sẽ lập tức nhận được tiền đầu tư, cầm được tiền đầu tư là sẽ niêm yết trên sàn chứng khoán. Mơ mộng rằng muốn gì sẽ có đó, không thiếu tiền cũng chẳng thiếu tình, an hưởng những năm tháng êm đềm trong cuộc đời mình. Nhưng vì sao bạn lại nghĩ rằng bạn chẳng cần bỏ ra chút công sức nào, cuộc sống sẽ dâng đến tận miệng những thứ bạn muốn? Bạn cần phải hiểu rằng: Hấp tấp muốn mau chóng thành công rất dễ khiến chúng ta đi vào mê lộ. Thanh xuân là khoảng thời gian đẹp đẽ nhất trong đời, cũng là những năm tháng then chốt có thể quyết định tương lai của một người. Nếu bạn lựa chọn an nhàn trong 10 năm, tương lai sẽ buộc bạn phải vất vả trong 50 năm để bù đắp lại. Nếu bạn bươn chải vất vả trong 10 năm, thứ mà bạn chắc chắn có được là 50 năm hạnh phúc. Điều quý giá nhất không phải là tiền mà là tiền bạc. Thế nên, bạn à, đừng lựa chọn an nhàn khi còn trẻ.', '81000', 56000, 1, 1, 50, 'vh4.png'),
(23, 11, 'Sapiens: Lược Sử Loài Người', '-Công ty phát hành:Omega Plus<br>\r\n-Ngày xuất bản:11-2017<br>\r\n-Kích thước:16 x 24 cm<br>\r\n-Dịch Giả:Nguyễn Thủy Chung<br>\r\n-Loại bìa:Bìa mềm<br>\r\n-Số trang:554<br>\r\n-SKU:3531839263887<br>\r\n-Nhà xuất bản:Nhà Xuất Bản Tri Thức<br>', 'Sapiens: Lược Sử Loài Người\r\n\r\nSapiens, đưa chúng ta vào một chuyến đi kinh ngạc qua toàn bộ lịch sử loài người, từ những gốc rễ tiến hóa của nó đến thời đại của chủ nghĩa tư bản và kỹ thuật di truyền, để khám phá tại sao chúng ta đang trong những điều kiện sinh sống hiện tại.\r\n\r\nSapiens tập trung vào các quá trình quan trọng đã định hình loài người và thế giới quanh nó, chẳng hạn như sự ra đời của sản xuất nông nghiệp, việc tạo ra tiền, sự lan truyền của những tôn giáo, và sự nổi lên của những nhà nước quốc gia. Không giống như những quyển sách khác cùng loại, Sapiens đã có một lối tiếp cận liên ngành học, bắc cầu qua những khoảng cách giữa lịch sử, sinh học, triết học và kinh tế theo một lối trước đây chưa từng có. Hơn nữa, lấy cả quan điểm vĩ mô và vi mô, Sapiens không chỉ đề cập đến những gì đã xảy ra và tại sao, mà còn đi sâu vào việc những cá nhân trong lịch sử đó đã cảm nhận nó như thế nào.', '209000', 125400, 1, 1, 50, 'ls1.png'),
(24, 11, 'Đại Việt Sử Ký Toàn Thư Trọn Bộ', '-Công ty phát hành:Nhà sách Minh Thắng<br>\r\n-Ngày xuất bản:01-2020<br>\r\n-Kích thước:16 x 24 cm<br>\r\n-Dịch Giả:Cao Huy Giu - Đào Duy Anh<br>\r\n-Loại bìa:Bìa cứng<br>\r\n-Số trang:	1284<br>\r\n-SKU	:8863801989668<br>\r\n-Nhà xuất bản:	Nhà Xuất Bản Hồng Đức<br>', 'Đại Việt Sử Ký Toàn Thư trọn bộ ( Tái bản 2020)\r\n\r\nTrong các sách lịch sử cũ của ta , thì \" Đại Việt sử ký toàn thư \" là một bộ sử lớn chép từ Hồng Bàng đến Ất Mão ( 1675) đời vua Gia Tôn nhà Lê. \" Đại Việt sử ký toàn thư \" là bộ sách lịch sử quý báu trong tủ sách sử cũ của nước Việt Nam , rất cần thiết cho những người nghiên cứu lịch sử dân tộc .\r\n\r\nGiá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Tuy nhiên tuỳ vào từng loại sản phẩm hoặc phương thức, địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, ...', '235000', 151900, 1, 1, 50, 'ls2.png'),
(25, 11, 'Homo Deus: Lược Sử Tương Lai', '-Công ty phát hành:Nhã Nam<br>\r\n-Kích thước	:15 x 24 cm<br>\r\n-Loại bìa	:Bìa mềm<br>\r\n-Số trang	:512<br>\r\n-SKU	:9299860227769<br>\r\n-Nhà xuất bản	:Nhà Xuất Bản Thế Giới', 'Homo Deus: Lược Sử Tương Lai\r\nHomo sapiens có phải là một dạng sống siêu đẳng, hay chỉ là một tay đầu gấu địa phương? Làm thế nào con người lại tin rằng họ không chỉ đã kiểm soát thế giới, mà còn mang lại ý nghĩa cho nó? Công nghệ sinh học và trí thông minh nhân tạo đe doạ loài người ra sao? Sinh vật nào có thể kế thừa loài người, và tôn giáo mới nào sẽ được sản sinh?\r\n\r\nVới giọng kể cuốn hút và mới lạ, Harari sẽ dần gợi mở và trả lời những câu hỏi trê, nhờ phân tích chi tiết những luận điểm gây nhiều tranh cãi: chủ nghĩa nhân đạo là một dạng tôn giáo, thứ tôn giáo tôn thờ con người thay vì thần thánh; sinh vật là thuật toán… ông vẽ ra một viễn cảnh tương lai khi Sapiens thất thế và Dữ liệu giáo trở thành một hình mẫu. HOMO DEUS còn bàn sâu hơn về các năng lực mà con người đã tự trang bị để sinh tồn và tiến hoá thành một giống loài ngự trị trên trái đất, để rồi chính trong tiến trình hoàn thiện và nâng cấp các năng lực ấy chúng ta sẽ bị truất quyền kiểm soát bởi một sinh vật mới, mang tên Homo Deus.', '189000', 103950, 1, 1, 50, 'ls3.png'),
(26, 11, 'Lược Sử Thế Giới', '-Công ty phát hành	:Nhã Nam<br>\r\n-Ngày xuất bản	:01-2019<br>\r\n-Kích thước	:18.5 x 23.5 cm<br>\r\n-Loại bìa	:Bìa mềm<br>\r\n-Số trang	:426<br>\r\n-SKU	:3217860347825<br>\r\n-Nhà xuất bản	:Nhà Xuất Bản Hồng Đức', 'Từ khi được viết ra bằng tiếng Đức năm 1935, Lược sử thế giới đã trở thành cuốn sách lịch sử bán chạy ở ba mươi ngôn ngữ. Năm 2005, cuốn sách được xuất bản bằng tiếng Anh với phần minh họa bổ sung, và phiên bản này bán được hơn nửa triệu bản trên toàn thế giới.\r\n\r\nNhư một bài thơ về lịch sử thế giới, E. H. Gombrich lịch lãm dẫn người đọc đi từ thời kỳ Đồ đá đến thời kỳ của năng lượng nguyên tử, với những biến cố lịch sử phức tạp nhất, các trào lưu tư tưởng khó hiểu nhất, những nhân vật lịch sử đa chiều nhất, các thành tựu lớn lao nhất của trí tuệ con người… tất cả đều được tác giả mô tả và diễn giải dễ hiểu đến bất ngờ.\r\n\r\nVới cuốn sách này trong tay, bạn sẽ thấy niềm vui to lớn trong việc tìm hiểu lịch sử, cùng vô số khoảnh khắc quên hết tất cả để say mê đắm mình trong quá vãng của dòng chảy lịch sử.', '213400', 320000, 0, 1, 50, 'ls4.png'),
(27, 12, 'AutoCAD Cơ Bản Cho Người Mới Bắt Đầu', '-Công ty phát hành	:NHÀ XUẤT BẢN XÂY DỰNG<br>\r\n-Kích thước	:17 x 24 cm<br>\r\n-Loại bìa	:Bìa mềm<br>\r\n-Số trang	:164<br>\r\n-SKU	:6434651332670<br>\r\n-Nhà xuất bản	:Nhà Xuất Bản Xây Dựng', 'Bạn đang cầm trên tay cuốn sách \"\"AutoCAD Cơ bản cho người mới bắt đầu\"\". Cuốn sách này dành cho những người thuộc ngành kỹ thuật nói chung và chuyên ngành xây dựng nói riêng. Quyển sách phù hợp với những người có nhu cầu nắm vững AutoCAD một cách có hệ thống, đi từ điểm khởi đầu.\r\n\r\nVới vai trò là Admin diễn đàn CADV - nơi hội tụ của người sử dụng AutoCAD ở Việt Nam, tcs giả đã quan sát thấy rất nhiều người học AutoCAD sai phương pháp ngay từ bước đầu tiên, khiến họ tốn nhiều công sức mà hiệu quả lại không cao. Bên cạnh đó, do thiếu phương pháp đúng đắn nên họ mất thời gian vào việc học những lệnh mà thực tế không dùng đến, họ vô tình hình thành các thói quen sử dụng AutoCAD không tốt rất khó sửa.', '0', 93000, 1, 1, 50, 'gk2.png'),
(28, 12, 'Cơ Sở Văn Hóa Việt Nam (Tái bản năm 2020)', '-Công ty phát hành	:Công Ty Cổ Phần Tri thức Văn Hóa Sách Việt Nam<br>\r\n-Ngày xuất bản	:10-2020<br>\r\n-Loại bìa	:Bìa mềm<br>\r\n-Số trang	:304<br>\r\n-SKU	:2721162414327<br>\r\n-Nhà xuất bản	Nhà Xuất Bản Giáo Dục Việt Nam<br>', 'Những năm gần đây, nhận thức về vai trò của văn hóa của nước ta được nâng lên đúng với giá trị đích thực của nó. Nghị quyết Hội nghị lần thứ 4 của Ban chấp hành Trung ương khóa VII đã khẳng định văn hóa là nền tảng tinh thần của xã hội, thể hiện tầm cao và chiều sâu về trình độ phát triển của một dân tộc, là sự kết tinh những giá trị tốt đẹp nhất trong quan hệ giữa người với người, với xã hội và với thiên nhiên. Nó vừa là một động lực thúc đẩy vừa là một mục tiêu phát triển kinh tế - xã hội của chúng ta.\r\n\r\nCũng vì thế, việc giữ gìn, phát huy và chấn hưng văn hóa dân tộc được đặt ra một cách cấp bách, đòi hỏi sự tham gia của nhiều ngành, nhiều giới.\r\n\r\nKhoa Văn hóa học nói chung và môn Cơ sở Văn hóa Việt Nam nói riêng có ý nghĩa rất quan trọng không chỉ trong nhà trường mà còn ở ngoài xã hội.', '0000', 66500, 1, 0, 50, 'gk3.png'),
(29, 12, 'Những Bài Văn Nghị Luận Xã Hội Chọn Lọc', '-Công ty phát hành	:Sách Việt<br>\r\n-Ngày xuất bản	:02-2020<br>\r\n-Kích thước	:17 x 24 cm<br>\r\n-Loại bìa	:Bìa mềm<br>\r\n-Số trang	:156<br>\r\n-SKU	:3702751060087<br>\r\n-Nhà xuất bản	:Nhà Xuất Bản Đại Học Sư Phạm TPHCM', 'Tại sao Những bài văn nghị luận xã hội chọn lọc lại là cuốn sách cần phải có của các em học sinh phổ thông? Hãy đọc để cảm nhận. Tôi tin các bạn sẽ có câu trả lời và nhận xét giống chúng tôi. Bởi lẽ đây thực sự là một tài liệu tham khảo quý và cần thiết.\r\n\r\nCái quý trước hết ở thể văn. Văn nghị luận xã hội là một mảng quan trọng nhất trong chương trình văn phổ thông. Bắt đầu từ lớp 7 cho đến khi thi tốt nghiệp cấp III. Mọi bài kiểm tra, bài thi đều không thể thiếu đề nghị luận xã hội. Hơn nữa, trên cả thi cử, những bài văn nghị luận xã hội còn cung cấp cho chúng ta cái nhìn đa chiều về cuộc sống. Giúp ta biết nhìn nhận, đánh giá và xác định quan điểm về nhiều mặt của đời sống xã hội.\r\n\r\nCái quý thứ hai khiến cuốn sách Những bài văn nghị luận xã hội chọn lọc trở nên đáng đọc chính là bởi nguồn gốc của nó. Đây là những bài văn hay nhất được chọn lọc từ cuộc thi Bài văn hay do công ty sách Việt kết hợp với báo Mực tím tổ chức đầu năm 2016. Học từ bạn bè, học từ những người bạn giỏi nhất chính là thông điệp chúng tôi muốn gửi gắm qua cuốn sách. Bấy lâu nay con em học trò chúng ta đang bị sa quá nhiều vào những bài văn mẫu của các chuyên gia, các thầy cô mà ít được đọc được học từ bạn bè. Cái nhìn quan điểm có phần già dặn, khuôn sáo. Vì vậy những bài văn hay từ bạn bè cùng trang lứa sẽ là kho tư liệu quý để chúng ta học hỏi và quan trọng hơn để chúng ta biết rằng bạn bè ta đang giỏi như thế nào mà nỗ lực và cố gắng.', '55000', 43500, 1, 1, 50, 'gk1.png'),
(30, 12, 'Giáo Trình Triết Học', '-Công ty phát hành	:NXB Đại Học Sư Phạm<br>\r\n-Ngày xuất bản	:07-2020<br>\r\n-Loại bìa	:Bìa mềm<br>\r\n-Số trang	:392<br>\r\n-SKU	:5627007755693<br>\r\n-Nhà xuất bản	:Nhà Xuất Bản Đại Học Sư Phạm', 'Thực hiện Thông tư số 08/2013/TT-BGDĐT ngày 08/3/2013 của Bộ trưởng Bộ Giáo dục và Đào tạo về việc ban hành Chương trình môn Triết học khối không chuyên ngành Triết học trình độ đào tạo thạc sĩ, tiến sĩ; căn cứ Quyết định số 2511/QĐ-BGDĐT ngày 18/7/2014 của Bộ trưởng Bộ Giáo dục và Đào tạo về việc phê duyệt Giáo trình môn Triết học khối không chuyên ngành Triết học trình độ đào tạo thạc sĩ, tiến sĩ các ngành khoa học xã hội và nhân văn, Bộ Giáo dục và Đào tạo chỉ đạo Nhà xuất bản Đại học Sư phạm xuất bản Giáo trình Triết học để phục vụ cho công tác giảng dạy và học tập của học viên cao học và nghiên cứu sinh các ngành khoa học xã hội và nhân văn không thuộc chuyên ngành Triết học.', '88000', 84990, 0, 1, 50, 'gk4.png'),
(31, 13, 'Chính Trị Đảng Phái Tại Hoa Kỳ', '-Công ty phát hành	:Omega Plus<br>\r\n-Ngày xuất bản	:10-2020<br>\r\n-Kích thước	:16 x 24 cm<br>\r\n-Dịch Giả	:Phạm Thị Ngọc Mai<br>\r\n-Loại bìa	:Bìa mềm<br>\r\n-Số trang	:572<br>\r\n-SKU	:1330897188420<br>\r\n-Nhà xuất bản	:Nhà Xuất Bản Thế Giới', '“Chính Trị Đảng Phái Tại Hoa Kỳ” (tên tiếng anh: “Parties Politics in America”) là cuốn giáo trình kinh điển về các đảng chính trị, được sử dụng rộng rãi trong giảng dạy tại các trường đại học của Mỹ.\r\n\r\nCuốn sách này liên tục được cập nhật nhưng mục đích thì không đổi. Hiện nay cuốn sách đã được tái bản 17 lần, phiên bản tiếng Việt này dựa trên ấn bản thứ 16.\r\nFrank J. Sorauf, một người tiên phong trong khoa học chính trị hiện đại, đã khởi xướng tác phẩm vào năm 1968, và Paul Allen Beck đưa cuốn sách tới công chúng vào thập niên 1980, 1990, với sự hiểu biết sâu rộng và góc nhìn mang tính chất so sánh ghi dấu các nghiên cứu của ông về đảng phái và hành vi bầu cử. Marjorie Randon Hershey là người đã cập nhật cho cuốn sách này từ ấn bản thứ 9 – từ năm 2001 đến nay.\r\n\r\nMục đích của họ qua mỗi ấn bản mới là cung cấp cho người học những kiến thức hấp dẫn, rõ ràng nhất và toàn diện nhất về đảng phái chính trị và tính đảng, mà chính đó là chìa khóa để hiểu về hoạt động bầu cử, công luận, xây dựng chính sách và lãnh đạo. Các tác giả đã thành công tới mức tác phẩm “Chính trị Đảng phái tại Hoa Kỳ” từ lâu được xem là “tiêu chuẩn vàng” cho các giáo trình về đảng phái chính trị.”', '269000', 201705, 1, 1, 50, 'ctri1.png'),
(32, 13, 'Bộ Luật Lao Động (sửa đổi) Năm 2019', '-Công ty phát hành	:Nhà Xuất Bản Chính Trị Quốc Gia Sự Thật<br>\r\n-Ngày xuất bản	:08-2020<br>\r\n-Kích thước	:13 x 19 cm<br>\r\n-Loại bìa	:Bìa mềm<br>\r\n-Số trang	:292<br>\r\n-SKU	:3617767744961<br>\r\n-Nhà xuất bản	:Nhà Xuất Bản Chính Trị Quốc Gia Sự Thật', 'Bộ luật Lao động số 45/2019/QH14 được Quốc hội nước Cộng hoà xã hội chủ nghĩa Việt Nam thông qua ngày 20-11-2019 tại Kỳ họp thứ 8 khóa XIV. Bộ luật này có 17 Chương, 220 Điều và có hiệu lực thi hành từ ngày 01-01-2021.\r\n \r\nTheo đó, Bộ luật này quy định tiêu chuẩn lao động; quyền, nghĩa vụ, trách nhiệm của người lao động, người sử dụng lao động, tổ chức đại diện người lao động tại cơ sở, tổ chức đại diện người sử dụng lao động trong quan hệ lao động và các quan hệ khác liên quan trực tiếp đến quan hệ lao động; quản lý nhà nước về lao động. Bộ luật có hiệu lực thi hành kể từ ngày 01-01-2021.\r\n \r\nĐối tượng áp dụng Bộ luật này là người lao động, người học nghề, người tập nghề và người làm việc không có quan hệ lao động; người sử dụng lao động; người lao động nước ngoài làm việc tại Việt Nam và cơ quan, tổ chức, cá nhân khác có liên quan trực tiếp đến quan hệ lao động.', '65000', 42000, 1, 0, 50, 'ct2.png'),
(33, 13, 'Bộ Luật Dân Sự (Hiện Hành)', '-Công ty phát hành	:NXB Chính Trị Quốc Gia<br>\r\n-Ngày xuất bản	:01-2019<br>\r\n-Kích thước	:14.5 x 20.5 cm<br>\r\n-Loại bìa	:Bìa mềm<br>\r\n-Số trang	:350<br>\r\n-SKU	:1177882940331<br>\r\n-Nhà xuất bản	:Nhà Xuất Bản Chính Trị Quốc Gia Sự Thật', 'Bộ luật dân sự bao gồm 689 điều, có những nội dung nổi bật về chuyển đổi giới tính. Thực hiện hợp đồng khi hoàn cảnh thay đổi cơ bản. Các nghĩa vụ tài sản và các khoản chi phí liên quan đến thừa kế...\r\n\r\nCuốn sách ra đời nhằm tạo điều kiện thuận tiện cho bạn đọc trong việc tra cứu và áp dụng Pháp luật. Nội dung cuốn sách trình bày đầy đủ các chương và điều trong Bộ luật Dân sự. Đây là tài liệu quan trọng trong hệ thống pháp luật.\r\n\r\nGiá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Tuy nhiên tuỳ vào từng loại sản phẩm hoặc phương thức, địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, ...', '74000', 59400, 0, 1, 50, 'ctri3.png'),
(34, 13, 'Những Anh Hùng Của Lịch Sử', '-Công ty phát hành	:Nhã Nam<br>\r\n-Ngày xuất bản	:08-2020<br>\r\n-Kích thước	:15.5 x 24cm<br>\r\n-Dịch Giả	:Hoàng Đức Long<br>\r\n-Loại bìa	:Bìa cứng<br>\r\n-Số trang	:474<br>\r\n-SKU	:2625229308126<br>\r\n-Nhà xuất bản	:Nhà Xuất Bản Thế Giới', 'Những anh hùng của lịch sử là một tác phẩm cho thấy rất rõ quan điểm của Durant về việc sử gia phải đồng thời là một triết gia. Ông nỗ lực nghiên cứu, nghiền ngẫm để truy tìm những viễn tượng triết học chứa đựng trong các sự kiện lịch sử, từ các vấn đề tôn giáo, chính trị tới xã hội, chẳng hạn như đấu tranh giai cấp và thậm chí cả cuộc tranh cãi có tính thời sự hơn, về tính khả dĩ của việc để người đồng tính làm việc trong quân đội. Ông không hướng tới tạo dựng một thứ gọi là “lịch sử toàn bộ”, không biến cuốn sách thành bộ sưu tập ngày tháng hay bản tóm lược những điểm quan trọng nhất trong loạt sách kiệt tác trước đó (Câu chuyện của các nền văn minh). Ông kích thích độc giả hứng thú theo đuổi những “hình tượng anh hùng” mà họ cảm thấy thuyết phục nhất. Bởi vậy, trong cuốn sách này, bạn đọc sẽ gặp rất nhiều kiểu hình tượng anh hùng, anh hùng trên chiến trường, anh hùng chính trị, anh hùng văn hóa-nghệ thuật, anh hùng triết học và tôn giáo\r\nQua ngôn từ đầy sức cuốn hút của ông, chúng ta có thể thấy những viễn tượng triết học, những bài học về di sản được truyền lại vì sự khai trí và lợi ích của các thế hệ tương lai, cũng như có thể hé nhìn vào “một thành phố trên thiên giới”, “đất nước của tâm trí” với một tầm nhĩn vĩ đại, cao quý, bao dung, trí huệ, đầy tình yêu.', '265000', 166400, 1, 0, 50, 'ctri4.png'),
(35, 14, 'Mô Hình Hồi Quy Và Khám Phá Khoa Học', '-Công ty phát hành	:NXB Tổng Hợp TP. HCM<br>\r\n-Ngày xuất bản	:10-2020<br>\r\n-Kích thước	:18 x 25 cm<br>\r\n-Loại bìa	:Bìa mềm<br>\r\n-Số trang	:324<br>\r\n-SKU	:6782803410449<br>\r\n-Nhà xuất bản	:Nhà Xuất Bản Tổng hợp TP.HCM', 'Cuốn sách giới thiệu các mô hình hồi quy tuyến tính, hồi quy logistic, hồi quy Poisson, và hồi quy Cox. Bạn đọc sẽ học qua các phát biểu giả thuyết khoa học qua các mô hình hồi quy. Những vấn đề (ít khi nào được đề cập trong sách giáo khoa) như đánh giá tầm quan trọng của biến tiên lượng, hoán chuyển dữ liệu, xây dựng và kiêm định mô hình, LASSO, Ridge, Robust, và cách triển khai các ý tưởng này bằng ngôn ngữ R.\r\n\r\n\r\nGiá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Tuy nhiên tuỳ vào từng loại sản phẩm hoặc phương thức, địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, ...', '150000', 124900, 1, 1, 50, 'kh1.png'),
(36, 14, 'Code Dạo Kí Sự - Lập Trình Viên Đâu Phải Chỉ Biết Code', '-Công ty phát hành	:Tri Thức Trẻ<br>\r\n-Ngày xuất bản	:01-2017<br>\r\n-Kích thước	::16 x 24 cm<br>\r\n-Số trang	:266<br>\r\n-SKU	:2448120945562<br>\r\n-Nhà xuất bản	:Nhà Xuất Bản Dân Trí', 'Nếu các bạn có đọc các blog về lập trình ở Việt Nam thì có lẽ cái tên Tôi đi code dạo không có gì quá xa lạ đối với các bạn.\r\n\r\nVề tác giả của blog Tôi đi code dạo, anh tên thật là Phạm Huy Hoàng, một Developer Full Stack, cựu sinh viên trường FPT University, hiện tại anh đang học Thạc sĩ Computer Science tại Đại học Lancaster ở Anh (học bổng $18000). Trước khi qua Xứ Sở Sương Mù, anh đã từng làm việc tại FPT Software và ASWIG Solutions.\r\n\r\nVới mong muốn chia sẻ kinh nghiệm học lập trình và các kỹ năng mà anh đã trải qua trong suốt quá trình học và làm việc với tư cách là người đi trước cũng như là một Developer Full Stack, nên anh đã quyết định xuất bản sách “Code dạo ký sự – lập trình viên đâu phải chỉ biết code”.\r\n\r\nHiện tại, trên thị trường sách Việt Nam với chủ đề về IT nói chung và lập trình viên nói riêng đều rất khan hiếm, chủ yếu là dịch lại từ tác giả nước ngoài. Chúng ta đã quá mải mê vào những đầu sách dạng “Những cách làm giàu hay đại loại vậy” đã khiến chúng ta ảo tưởng phần nào về bản thân mà thật sự kỹ năng của bạn không cho phép để làm điều đó.', '159000', 125100, 1, 1, 50, 'kh2.png'),
(37, 14, 'Các Thế Giới Song Song (Tái Bản 2018)', '-Công ty phát hành	:Nhã Nam<br>\r\n-Ngày xuất bản	:03-2018<br>\r\n-Kích thước	:15 x 24 cm<br>\r\n-Loại bìa	:Bìa mềm<br>\r\n-Số trang	:480<br>\r\n-SKU	:2441340913533<br>\r\n-Nhà xuất bản	:Nhà Xuất Bản Thế Giới', 'Các Thế Giới Song Song\r\n\r\nMột chuyến du hành đầy trí tuệ qua các vũ trụ, được dẫn dắt tài tình bởi \"thuyền trưởng\" Michio Kaku và độc giả có dịp chiêm ngưỡng vẻ đẹp kỳ vĩ của vũ trụ kể từ vụ nổ lớn, vượt qua những hố đen, lỗ sâu, bước vào các thế giới lượng tử từ muôn màu kỳ lạ nằm ngay trước mũi chúng ta, vốn dĩ tồn tại song song trên một màng bên ngoài không - thời gian bốn chiều, ngắm nhìn thực tại vật chất quen thuộc hoà quyện với thế giới của những điều kỳ diệu như năng lượng và vật chất tối, sự nảy chồi của các vũ trụ, những chiều không gian bí ẩn và sự biến ảo của các dây rung siêu nhỏ...\r\n\r\nDẫn chuyện lôi cuốn, kết hợp tường minh, sống động một lượng thông tin đồ sộ để khai mở những giới hạn tột cùng của trí  tưởng tượng, Kaku thực sự xứng đáng là \" nhà truyền giáo\" vĩ đại đã mang thế giới vật lý lý thuyết tới quảng đại quần chúng.\r\n\r\nGiá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Tuy nhiên tuỳ vào từng loại sản phẩm hoặc phương thức, địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, ...', '128000', 83200, 1, 1, 50, 'kh3.png'),
(38, 14, 'Cuộc đời kỳ lạ của Nikola Tesla (tái bản 2018)', '-Công ty phát hành	:Ecoblader<br>\r\n-Ngày xuất bản	:06-2018<br>\r\n-Loại bìa	:Bìa mềm<br>\r\n-Số trang	:120<br>\r\n-SKU	:9023529751636<br>\r\n-Nhà xuất bản	:Nhà Xuất Bản Kinh Tế TPHCM', 'Được mệnh danh là “nhà khoa học điên” của giới vật lý, Tesla là người đi tiên phong đưa kỹ thuật điện, điện từ vào đời sống. Với cách tư duy kỳ lạ của mình, ông đã có đến khoảng 300 bằng phát minh, tiêu biểu như động cơ điện không đồng bộ hay lõi Tesla. Rất nhiều phát minh của Tesla đang được ứng dụng trong các thiết bị điện xung quanh ta ngày nay.\r\n\r\nThật không dễ để hiểu thấu hết những gì đang diễn ra trong đầu Tesla, một thiên tài với trí nhớ hình ảnh, biết tám thứ tiếng và có tầm nhìn vượt thời đại. Những gì ông đã viết trong quyển sách này có thể kỳ lạ và khó tin, nhưng hãy nhớ rằng, người ta đã mất gần một thế kỷ để biết những gì Tesla đề xuất là chính xác và khả thi!\r\n\r\nHy vọng quý bạn đọc có thể nhìn ra được điều gì đó mới mẻ trong những câu chữ của Tesla, bởi đó có thể là những hiểu biết giúp ta thay đổi cả thế giới này.\r\n\r\nGiá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Tuy nhiên tuỳ vào từng loại sản phẩm hoặc phương thức, địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, ...', '75000', 54900, 0, 1, 50, 'kh4.png'),
(39, 15, 'Mindmap English Grammar - Ngữ Pháp Tiếng Anh Bằng Sơ Đồ Tư Duy', '-Công ty phát hành	:MCBOOKS<br>\r\n-Kích thước	:17 X 24 cm<br>\r\n-Số trang	:292<br>\r\n-SKU	:6311429831712', 'Sơ đồ tư duy được mệnh danh là \" CÔNG CỤ VẠN NĂNG CHO BỘ NÃO\" - một phương pháp trình bày ý tưởng, kiến thức bằng những từ khóa chính, hình ảnh và màu sắc, giúp não bộ phát huy tối đa khả năng ghi nhớ. Phương pháp này hiện nay được hơn 250 triệu người trên thế giới sử dụng, đã và đang đem lại những hiệu quả thực sự nhất là ngữ pháp tiếng Anh bởi: \r\n\r\nGiúp bạn nắm được bức tranh toàn cảnh của chủ để nghiên cứu\r\nPhương pháp ghi nhớ tối ưu hiệu quả, tăng khả năng tập trung khi học  \r\nCải thiện khả năng khai thác chi tiết thông tin , giải quyết triệt để quá tải dữ liệu\r\nCải thiện kỹ năng nghe qua các ví dụ hội thoại, tăng tính ứng dụng thực tế\r\nĐột phá tư duy qua các sơ đồ mindmap, các hình ảnh giúp bạn dễ dàng hình dung\r\nKích thích sự phát triển của bộ não trong quá trình học, khơi dậy niềm đam mê học\r\nGiúp bạn tổ chức thông tin vào các nhánh dễ nhớ, nắm trọn ngữ pháp từ a đến z\r\nGia tăng khả năng xử lý các vấn đề phức tạp, rút ngắn được thời gian học', '190000', 114000, 0, 0, 50, 'nn1.png'),
(40, 15, 'Tự Học 2000 Từ Vựng Tiếng Anh Theo Chủ Đề', '-Công ty phát hành	:MCBOOKS<br>\r\n-Ngày xuất bản	:12-2017<br>\r\n-Kích thước	:9.5 x 14.5 cm<br>\r\n-Loại bìa	:Bìa mềm<br>\r\n-Số trang	:260<br>\r\n-SKU	:9371358036029<br>\r\n-Nhà xuất bản	:Nhà Xuất Bản Đại Học Quốc Gia Hà Nội', 'Tự Học 2000 Từ Vựng Tiếng Anh Theo Chủ Đề\r\n\r\nNghe nói đọc viết là 4 kĩ năng quan trọng để có thể học và sử dụng tốt tiếng Anh - ngôn ngữ toàn cầu. Tuy nhiên không phải ai cũng có thể thành thạo những kĩ năng này. Nghe hiểu là một trong những kĩ năng đòi hỏi sự tập trung và rèn luyện của người học.\r\n\r\nLuyện nghe từ vựng tiếng Anh theo chủ điểm sẽ cung cấp những bài tập với trình độ nâng cao, là tài liệu bổ ích cho những ai muốn nâng cao khả năng nghe hiểu thông qua học từ vựng.\r\n\r\nGiá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Tuy nhiên tuỳ vào từng loại sản phẩm hoặc phương thức, địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, ...', '65000', 39000, 1, 1, 50, 'nn2.png'),
(41, 15, 'Giải Thích Ngữ Pháp Tiếng Anh (Tái Bản 2020)', '-Công ty phát hành	:Zenbooks<br>\r\n-Ngày xuất bản	:04-2020<br>\r\n-Kích thước	:17 x 24 cm<br>\r\n-Loại bìa	:Bìa mềm<br>\r\n-Số trang	:560<br>\r\n-SKU	:7924944303061<br>\r\n-Nhà xuất bản	:Nhà Xuất Bản Đà Nẵng', 'GIẢI THÍCH NGỮ PHÁP TIẾNG ANH, tác giả Mai Lan Hương - Hà Thanh Uyên, là cuốn sách ngữ pháp đã được phát hành và tái bản rất nhiều lần trong suốt những năm vừa qua.\r\nTrong lần tái bản GIẢI THÍCH NGỮ PHÁP TIẾNG ANH năm 2020 này, nhằm nâng cao chất lượng sách và giúp người học trau dồi, củng cố và nâng cao kiến thức ngữ pháp tiếng Anh, chúng tôi chỉnh sửa, bổ sung và cập nhật một số kiến thức ngữ pháp mới.\r\nẤn bản mới GIẢI THÍCH NGỮ PHÁP TIẾNG ANH gồm 5 chương, hệ thống hóa toàn diện kiến thức ngữ pháp tiếng Anh từ cơ bản đến nâng cao:\r\nChương 1: Từ Loại (Parts of Speech)\r\nChương 2: Thì và Sự Phối Hợp Thì (Tenses and Sequence of Tenses)\r\nChương 3: Mệnh Đề (Clauses)\r\nChương 4: Câu (Sentences)\r\nChương 5: Từ Vựng Học (Word Study)\r\nCác chủ điểm ngữ pháp trong từng chương được trình bày rõ ràng, chi tiết, giải thích cặn kẽ các cách dùng và quy luật mà người học cần nắm vững. Sau mỗi chủ điểm ngữ pháp là phần bài tập đa dạng nhằm giúp người học củng cố phần lý thuyết.\r\nGiá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Tuy nhiên tuỳ vào từng loại sản phẩm hoặc phương thức, địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, ...', '180000', 104900, 1, 1, 50, 'nn3.png'),
(42, 15, 'Cẩm Nang Cấu Trúc Tiếng Anh', '-Công ty phát hành	:Huy Hoàng Bookstore<br>\r\n-SKU	:4771691151314', 'Cuốn sách CẨM NANG CẤU TRÚC TIẾNG ANH gồm 25 phần, mỗi phần là một phạm trù kiến thức trong tiếng Anh được trình bày một cách ngắn gọn, đơn giản, cô đọng và hệ thống hoá dưới dạng sơ đồ, bảng biểu nhằm phát triển khả năng tư duy của người học và từ đó giúp người học nhớ kiến thức nhanh hơn và sâu hơn. Sau hầu hết các phần lí thuyết đều có 20-30 câu bài tập áp dụng để kiểm tra cũng như khắc sâu kiến thức cho người học. Tuy dày chưa đến 250 trang nhưng cuốn sách lại có thể bao trọn toàn bộ kiến thức từ đơn giản đến phức tạp cộng với cách tận dụng tối đa và áp dụng triệt để cách học tiếng Anh bằng sơ đồ tư duy.\r\nGiá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Tuy nhiên tuỳ vào từng loại sản phẩm hoặc phương thức, địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, ...', '98000', 65600, 1, 1, 50, 'nn4.png');

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
  MODIFY `dm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `danhmuc_tin`
--
ALTER TABLE `danhmuc_tin`
  MODIFY `danhmuctin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `donhang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `giaodich`
--
ALTER TABLE `giaodich`
  MODIFY `giaodich_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `giohang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `khachhang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `lienhe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `sp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
