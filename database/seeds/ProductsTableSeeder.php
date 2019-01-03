<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Galaxy S7 EDGE',
                'slug' => 'galaxy-s7-edge',
            'intro' => 'Exynos 8890, 5.1 inch (1440 x 2560 pixels), Android 6.0 (Marshmallow)',
                'promo1' => 'Trả góp 0%',
                'promo2' => 'Hoặc Tặng Vali Lock & Lock ',
            'promo3' => 'Hoặc Tặng Combo Quà (Bao da S-View + Tai nghe Level Active)',
                'packet' => ' Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ',
                'images' => '1480005553_635918156798139185_s7-g2.jpg',
                'r_intro' => '<h2><strong>Camera k&eacute;p chinh phục b&oacute;ng tối, x&oacute;a ph&ocirc;ng nghệ thuật</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 chắc chắn l&agrave; chiếc điện thoại c&oacute; camera đ&aacute;ng gờm nhất trong ph&acirc;n kh&uacute;c, đặc biệt l&agrave; khả năng chụp đ&ecirc;m khi mang tr&ecirc;n m&igrave;nh cụm camera k&eacute;p th&ocirc;ng số v&ocirc; c&ugrave;ng chất lượng. Hai cảm biến camera sau 16MP f/1.7 + 5MP f/1.9 đều c&oacute; khẩu độ cực lớn, thu s&aacute;ng tốt trong cả những điều kiện khắc nghiệt, mang đến cho bạn những bức ảnh chụp đ&ecirc;m tuyệt vời.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-1.jpg" /></p>

<p>&nbsp;</p>

<p>Chụp ảnh x&oacute;a ph&ocirc;ng tr&ecirc;n Galaxy J8 được n&acirc;ng l&ecirc;n một tầm cao mới khi kh&ocirc;ng chỉ x&oacute;a ph&ocirc;ng ch&iacute;nh x&aacute;c, l&agrave;m nổi bật chủ thể m&agrave; bạn c&ograve;n c&oacute; th&ecirc;m cả c&aacute;c bộ lọc Bokeh, tạo những hiệu ứng x&oacute;a ph&ocirc;ng kh&aacute;c nhau đầy nghệ thuật. Ảnh chụp ch&acirc;n dung của bạn sẽ ấn tượng hơn bao giờ hết.</p>',
                'review' => '<h2><strong>Camera selfie x&oacute;a ph&ocirc;ng chủ động</strong></h2>

<p>Kh&ocirc;ng chỉ camera sau m&agrave; camera trước của Galaxy J8 cũng c&oacute; khả năng chụp selfie x&oacute;a ph&ocirc;ng. Camera n&agrave;y kh&ocirc;ng chỉ độ ph&acirc;n giải cao 16MP, khẩu độ lớn f/1.9 m&agrave; c&ograve;n c&oacute; cả đ&egrave;n flash LED trợ s&aacute;ng chuy&ecirc;n nghiệp với ba mức độ s&aacute;ng kh&aacute;c nhau. Bạn sẽ được thoải m&aacute;i selfie ngay cả trong điều kiện thiếu s&aacute;ng m&agrave; h&igrave;nh ảnh vẫn ho&agrave;n hảo với độ n&eacute;t cao, &iacute;t nhiễu v&agrave; ch&acirc;n thực. T&iacute;nh năng x&oacute;a ph&ocirc;ng chủ động mang đến c&aacute;c bức ảnh selfie x&oacute;a ph&ocirc;ng theo đ&uacute;ng &yacute; bạn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-3.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>M&agrave;n h&igrave;nh v&ocirc; cực sống động từng khung h&igrave;nh</strong></h2>

<p>&nbsp;</p>

<p>Samsung tiếp tục mang tinh hoa trong c&ocirc;ng nghệ m&agrave;n h&igrave;nh của họ l&ecirc;n Galaxy J8. Đ&oacute; l&agrave; m&agrave;n h&igrave;nh v&ocirc; cực Infinity Display c&ocirc;ng nghệ Super AMOLED cao cấp. Galaxy J8 sở hữu m&agrave;n h&igrave;nh lớn 6 inch HD+, tỉ lệ mới 18,5:9 chuẩn điện ảnh v&agrave; viền m&agrave;n h&igrave;nh cực mỏng. Bạn sẽ được tận hưởng từng khung h&igrave;nh giải tr&iacute; đỉnh cao, m&agrave;u sắc sống động rực rỡ.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-4.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Thiết kế c&aacute; t&iacute;nh, sắc m&agrave;u thời thượng</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 c&oacute; kiểu d&aacute;ng rất mềm mại để đồng nhất ho&agrave;n to&agrave;n với m&agrave;n h&igrave;nh v&ocirc; cực mặt trước. Bạn sẽ được cầm tr&ecirc;n tay một chiếc m&aacute;y liền lạc, bo cong hợp l&yacute; để cảm gi&aacute;c sử dụng thoải m&aacute;i nhất. Mặc d&ugrave; kiểu d&aacute;ng mượt m&agrave; nhưng Galaxy J8 vẫn rất chắc chắn nhờ lớp vỏ kim loại sang trọng. C&oacute; ba m&agrave;u sắc c&aacute; t&iacute;nh d&agrave;nh cho bạn l&agrave; T&iacute;m Sapphire, Đen Titan v&agrave; V&agrave;ng Thạch Anh.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-5.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Bảo mật an to&agrave;n v&agrave; th&ocirc;ng minh</strong></h2>

<p>&nbsp;</p>

<p>Camera trước Galaxy J8 được tối ưu để nhận diện khu&ocirc;n mặt th&ocirc;ng minh v&agrave; nhanh ch&oacute;ng. Chỉ cần đưa m&aacute;y l&ecirc;n l&agrave; chiếc J8 của bạn sẽ tự động mở kh&oacute;a. Ấn tượng hơn, đ&egrave;n flash LED d&agrave;nh cho camera trước sẽ ph&aacute;t huy t&aacute;c dụng để bạn nhận diện được trong cả trời tối. Trong khi đ&oacute; m&aacute;y qu&eacute;t v&acirc;n tay mặt sau cũng l&agrave; một phương thức bảo mật tiện dụng kh&aacute;c m&agrave; bạn c&oacute; thể thao t&aacute;c tiện lợi d&ugrave; cầm bằng bất cứ tay tr&aacute;i hay tay phải.</p>

<p>&nbsp;</p>

<h2><strong>Hiệu năng tốt trong tầm gi&aacute;</strong></h2>

<p>&nbsp;</p>

<p>Hiệu năng Samsung Galaxy J8 kh&aacute; ổn với bộ vi xử l&yacute; Snapdragon 450 t&aacute;m nh&acirc;n xung nhịp 1,8GHz đi c&ugrave;ng 3GB RAM v&agrave; 32GB bộ nhớ trong. Cấu h&igrave;nh n&agrave;y đủ sức để J8 chạy mượt trong hầu hết c&aacute;c t&aacute;c vụ. Ngo&agrave;i ra việc chạy tr&ecirc;n hệ điều h&agrave;nh Android 8.0 Oreo mới cũng gi&uacute;p cho Galaxy J8 mượt m&agrave; v&agrave; ổn định hơn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-6.jpg" /></p>

<h2>&nbsp;</h2>

<h2><strong>Thời lượng pin xuất sắc</strong></h2>

<p>&nbsp;</p>

<p>Pin lu&ocirc;n l&agrave; điểm mạnh tr&ecirc;n những chiếc điện thoại Galaxy J v&agrave; kh&ocirc;ng c&oacute; g&igrave; ngạc nhi&ecirc;n khi Galaxy J8 c&oacute; thời lượng pin xuất sắc. Với dung lượng lớn 3500 mAh, con chip tiết kiệm điện v&agrave; cơ chế quản l&yacute; pin th&ocirc;ng minh, Galaxy J8 c&oacute; thể duyệt web tối đa trong 13 giờ qua 4G LTE, xem video li&ecirc;n tục trong 20 giờ, gọi thoại trong 23 giờ, những con số rất ấn tượng.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-2.jpg" /></p>',
                'tag' => 'Galaxy S7, Galaxy S7,Galaxy S7',
                'price' => '15890000.00',
                'status' => 1,
                'cat_id' => 6,
                'user_id' => 1,
                'created_at' => '2018-11-24 09:39:13',
                'updated_at' => '2018-11-28 18:02:19',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Galaxy NOTE 7',
                'slug' => 'galaxy-note-7',
            'intro' => 'Exynos 8890, 5.1 inch (1440 x 2560 pixels), Android 6.0 (Marshmallow)',
                'promo1' => 'Trả góp 0%',
                'promo2' => 'Hoặc Tặng Vali Lock & Lock ',
            'promo3' => 'Hoặc Tặng Combo Quà (Bao da S-View + Tai nghe Level Active)',
                'packet' => ' Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ',
                'images' => '1480005568_635918156798139185_s7-g2.jpg',
                'r_intro' => '<h2><strong>Camera k&eacute;p chinh phục b&oacute;ng tối, x&oacute;a ph&ocirc;ng nghệ thuật</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 chắc chắn l&agrave; chiếc điện thoại c&oacute; camera đ&aacute;ng gờm nhất trong ph&acirc;n kh&uacute;c, đặc biệt l&agrave; khả năng chụp đ&ecirc;m khi mang tr&ecirc;n m&igrave;nh cụm camera k&eacute;p th&ocirc;ng số v&ocirc; c&ugrave;ng chất lượng. Hai cảm biến camera sau 16MP f/1.7 + 5MP f/1.9 đều c&oacute; khẩu độ cực lớn, thu s&aacute;ng tốt trong cả những điều kiện khắc nghiệt, mang đến cho bạn những bức ảnh chụp đ&ecirc;m tuyệt vời.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-1.jpg" /></p>

<p>&nbsp;</p>

<p>Chụp ảnh x&oacute;a ph&ocirc;ng tr&ecirc;n Galaxy J8 được n&acirc;ng l&ecirc;n một tầm cao mới khi kh&ocirc;ng chỉ x&oacute;a ph&ocirc;ng ch&iacute;nh x&aacute;c, l&agrave;m nổi bật chủ thể m&agrave; bạn c&ograve;n c&oacute; th&ecirc;m cả c&aacute;c bộ lọc Bokeh, tạo những hiệu ứng x&oacute;a ph&ocirc;ng kh&aacute;c nhau đầy nghệ thuật. Ảnh chụp ch&acirc;n dung của bạn sẽ ấn tượng hơn bao giờ hết.</p>',
                'review' => '<h2><strong>Camera selfie x&oacute;a ph&ocirc;ng chủ động</strong></h2>

<p>Kh&ocirc;ng chỉ camera sau m&agrave; camera trước của Galaxy J8 cũng c&oacute; khả năng chụp selfie x&oacute;a ph&ocirc;ng. Camera n&agrave;y kh&ocirc;ng chỉ độ ph&acirc;n giải cao 16MP, khẩu độ lớn f/1.9 m&agrave; c&ograve;n c&oacute; cả đ&egrave;n flash LED trợ s&aacute;ng chuy&ecirc;n nghiệp với ba mức độ s&aacute;ng kh&aacute;c nhau. Bạn sẽ được thoải m&aacute;i selfie ngay cả trong điều kiện thiếu s&aacute;ng m&agrave; h&igrave;nh ảnh vẫn ho&agrave;n hảo với độ n&eacute;t cao, &iacute;t nhiễu v&agrave; ch&acirc;n thực. T&iacute;nh năng x&oacute;a ph&ocirc;ng chủ động mang đến c&aacute;c bức ảnh selfie x&oacute;a ph&ocirc;ng theo đ&uacute;ng &yacute; bạn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-3.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>M&agrave;n h&igrave;nh v&ocirc; cực sống động từng khung h&igrave;nh</strong></h2>

<p>&nbsp;</p>

<p>Samsung tiếp tục mang tinh hoa trong c&ocirc;ng nghệ m&agrave;n h&igrave;nh của họ l&ecirc;n Galaxy J8. Đ&oacute; l&agrave; m&agrave;n h&igrave;nh v&ocirc; cực Infinity Display c&ocirc;ng nghệ Super AMOLED cao cấp. Galaxy J8 sở hữu m&agrave;n h&igrave;nh lớn 6 inch HD+, tỉ lệ mới 18,5:9 chuẩn điện ảnh v&agrave; viền m&agrave;n h&igrave;nh cực mỏng. Bạn sẽ được tận hưởng từng khung h&igrave;nh giải tr&iacute; đỉnh cao, m&agrave;u sắc sống động rực rỡ.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-4.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Thiết kế c&aacute; t&iacute;nh, sắc m&agrave;u thời thượng</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 c&oacute; kiểu d&aacute;ng rất mềm mại để đồng nhất ho&agrave;n to&agrave;n với m&agrave;n h&igrave;nh v&ocirc; cực mặt trước. Bạn sẽ được cầm tr&ecirc;n tay một chiếc m&aacute;y liền lạc, bo cong hợp l&yacute; để cảm gi&aacute;c sử dụng thoải m&aacute;i nhất. Mặc d&ugrave; kiểu d&aacute;ng mượt m&agrave; nhưng Galaxy J8 vẫn rất chắc chắn nhờ lớp vỏ kim loại sang trọng. C&oacute; ba m&agrave;u sắc c&aacute; t&iacute;nh d&agrave;nh cho bạn l&agrave; T&iacute;m Sapphire, Đen Titan v&agrave; V&agrave;ng Thạch Anh.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-5.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Bảo mật an to&agrave;n v&agrave; th&ocirc;ng minh</strong></h2>

<p>&nbsp;</p>

<p>Camera trước Galaxy J8 được tối ưu để nhận diện khu&ocirc;n mặt th&ocirc;ng minh v&agrave; nhanh ch&oacute;ng. Chỉ cần đưa m&aacute;y l&ecirc;n l&agrave; chiếc J8 của bạn sẽ tự động mở kh&oacute;a. Ấn tượng hơn, đ&egrave;n flash LED d&agrave;nh cho camera trước sẽ ph&aacute;t huy t&aacute;c dụng để bạn nhận diện được trong cả trời tối. Trong khi đ&oacute; m&aacute;y qu&eacute;t v&acirc;n tay mặt sau cũng l&agrave; một phương thức bảo mật tiện dụng kh&aacute;c m&agrave; bạn c&oacute; thể thao t&aacute;c tiện lợi d&ugrave; cầm bằng bất cứ tay tr&aacute;i hay tay phải.</p>

<p>&nbsp;</p>

<h2><strong>Hiệu năng tốt trong tầm gi&aacute;</strong></h2>

<p>&nbsp;</p>

<p>Hiệu năng Samsung Galaxy J8 kh&aacute; ổn với bộ vi xử l&yacute; Snapdragon 450 t&aacute;m nh&acirc;n xung nhịp 1,8GHz đi c&ugrave;ng 3GB RAM v&agrave; 32GB bộ nhớ trong. Cấu h&igrave;nh n&agrave;y đủ sức để J8 chạy mượt trong hầu hết c&aacute;c t&aacute;c vụ. Ngo&agrave;i ra việc chạy tr&ecirc;n hệ điều h&agrave;nh Android 8.0 Oreo mới cũng gi&uacute;p cho Galaxy J8 mượt m&agrave; v&agrave; ổn định hơn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-6.jpg" /></p>

<h2>&nbsp;</h2>

<h2><strong>Thời lượng pin xuất sắc</strong></h2>

<p>&nbsp;</p>

<p>Pin lu&ocirc;n l&agrave; điểm mạnh tr&ecirc;n những chiếc điện thoại Galaxy J v&agrave; kh&ocirc;ng c&oacute; g&igrave; ngạc nhi&ecirc;n khi Galaxy J8 c&oacute; thời lượng pin xuất sắc. Với dung lượng lớn 3500 mAh, con chip tiết kiệm điện v&agrave; cơ chế quản l&yacute; pin th&ocirc;ng minh, Galaxy J8 c&oacute; thể duyệt web tối đa trong 13 giờ qua 4G LTE, xem video li&ecirc;n tục trong 20 giờ, gọi thoại trong 23 giờ, những con số rất ấn tượng.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-2.jpg" /></p>',
                'tag' => 'Galaxy S7, Galaxy S7,Galaxy S7',
                'price' => '15890000.00',
                'status' => 1,
                'cat_id' => 6,
                'user_id' => 1,
                'created_at' => '2018-11-24 09:39:28',
                'updated_at' => '2018-11-24 09:39:28',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'OPPO F1S',
                'slug' => 'oppo-f1s',
            'intro' => 'Apple A10 mới, 2 cammera sau,Ram 3g, 5.5 inch (1920 x 1080 pixels)',
            'promo1' => 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):',
            'promo2' => 'Trả góp 0% (Chỉ áp dụng cho thẻ tín dụng) ',
                'promo3' => 'Tặng Voucher 500.000đ mua Apple Watch',
                'packet' => '',
                'images' => '1480650741_oppo-f1s-hero-400x460-400x460.png',
                'r_intro' => '<h2><strong>Camera k&eacute;p chinh phục b&oacute;ng tối, x&oacute;a ph&ocirc;ng nghệ thuật</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 chắc chắn l&agrave; chiếc điện thoại c&oacute; camera đ&aacute;ng gờm nhất trong ph&acirc;n kh&uacute;c, đặc biệt l&agrave; khả năng chụp đ&ecirc;m khi mang tr&ecirc;n m&igrave;nh cụm camera k&eacute;p th&ocirc;ng số v&ocirc; c&ugrave;ng chất lượng. Hai cảm biến camera sau 16MP f/1.7 + 5MP f/1.9 đều c&oacute; khẩu độ cực lớn, thu s&aacute;ng tốt trong cả những điều kiện khắc nghiệt, mang đến cho bạn những bức ảnh chụp đ&ecirc;m tuyệt vời.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-1.jpg" /></p>

<p>&nbsp;</p>

<p>Chụp ảnh x&oacute;a ph&ocirc;ng tr&ecirc;n Galaxy J8 được n&acirc;ng l&ecirc;n một tầm cao mới khi kh&ocirc;ng chỉ x&oacute;a ph&ocirc;ng ch&iacute;nh x&aacute;c, l&agrave;m nổi bật chủ thể m&agrave; bạn c&ograve;n c&oacute; th&ecirc;m cả c&aacute;c bộ lọc Bokeh, tạo những hiệu ứng x&oacute;a ph&ocirc;ng kh&aacute;c nhau đầy nghệ thuật. Ảnh chụp ch&acirc;n dung của bạn sẽ ấn tượng hơn bao giờ hết.</p>',
                'review' => '<h2><strong>Camera selfie x&oacute;a ph&ocirc;ng chủ động</strong></h2>

<p>Kh&ocirc;ng chỉ camera sau m&agrave; camera trước của Galaxy J8 cũng c&oacute; khả năng chụp selfie x&oacute;a ph&ocirc;ng. Camera n&agrave;y kh&ocirc;ng chỉ độ ph&acirc;n giải cao 16MP, khẩu độ lớn f/1.9 m&agrave; c&ograve;n c&oacute; cả đ&egrave;n flash LED trợ s&aacute;ng chuy&ecirc;n nghiệp với ba mức độ s&aacute;ng kh&aacute;c nhau. Bạn sẽ được thoải m&aacute;i selfie ngay cả trong điều kiện thiếu s&aacute;ng m&agrave; h&igrave;nh ảnh vẫn ho&agrave;n hảo với độ n&eacute;t cao, &iacute;t nhiễu v&agrave; ch&acirc;n thực. T&iacute;nh năng x&oacute;a ph&ocirc;ng chủ động mang đến c&aacute;c bức ảnh selfie x&oacute;a ph&ocirc;ng theo đ&uacute;ng &yacute; bạn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-3.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>M&agrave;n h&igrave;nh v&ocirc; cực sống động từng khung h&igrave;nh</strong></h2>

<p>&nbsp;</p>

<p>Samsung tiếp tục mang tinh hoa trong c&ocirc;ng nghệ m&agrave;n h&igrave;nh của họ l&ecirc;n Galaxy J8. Đ&oacute; l&agrave; m&agrave;n h&igrave;nh v&ocirc; cực Infinity Display c&ocirc;ng nghệ Super AMOLED cao cấp. Galaxy J8 sở hữu m&agrave;n h&igrave;nh lớn 6 inch HD+, tỉ lệ mới 18,5:9 chuẩn điện ảnh v&agrave; viền m&agrave;n h&igrave;nh cực mỏng. Bạn sẽ được tận hưởng từng khung h&igrave;nh giải tr&iacute; đỉnh cao, m&agrave;u sắc sống động rực rỡ.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-4.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Thiết kế c&aacute; t&iacute;nh, sắc m&agrave;u thời thượng</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 c&oacute; kiểu d&aacute;ng rất mềm mại để đồng nhất ho&agrave;n to&agrave;n với m&agrave;n h&igrave;nh v&ocirc; cực mặt trước. Bạn sẽ được cầm tr&ecirc;n tay một chiếc m&aacute;y liền lạc, bo cong hợp l&yacute; để cảm gi&aacute;c sử dụng thoải m&aacute;i nhất. Mặc d&ugrave; kiểu d&aacute;ng mượt m&agrave; nhưng Galaxy J8 vẫn rất chắc chắn nhờ lớp vỏ kim loại sang trọng. C&oacute; ba m&agrave;u sắc c&aacute; t&iacute;nh d&agrave;nh cho bạn l&agrave; T&iacute;m Sapphire, Đen Titan v&agrave; V&agrave;ng Thạch Anh.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-5.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Bảo mật an to&agrave;n v&agrave; th&ocirc;ng minh</strong></h2>

<p>&nbsp;</p>

<p>Camera trước Galaxy J8 được tối ưu để nhận diện khu&ocirc;n mặt th&ocirc;ng minh v&agrave; nhanh ch&oacute;ng. Chỉ cần đưa m&aacute;y l&ecirc;n l&agrave; chiếc J8 của bạn sẽ tự động mở kh&oacute;a. Ấn tượng hơn, đ&egrave;n flash LED d&agrave;nh cho camera trước sẽ ph&aacute;t huy t&aacute;c dụng để bạn nhận diện được trong cả trời tối. Trong khi đ&oacute; m&aacute;y qu&eacute;t v&acirc;n tay mặt sau cũng l&agrave; một phương thức bảo mật tiện dụng kh&aacute;c m&agrave; bạn c&oacute; thể thao t&aacute;c tiện lợi d&ugrave; cầm bằng bất cứ tay tr&aacute;i hay tay phải.</p>

<p>&nbsp;</p>

<h2><strong>Hiệu năng tốt trong tầm gi&aacute;</strong></h2>

<p>&nbsp;</p>

<p>Hiệu năng Samsung Galaxy J8 kh&aacute; ổn với bộ vi xử l&yacute; Snapdragon 450 t&aacute;m nh&acirc;n xung nhịp 1,8GHz đi c&ugrave;ng 3GB RAM v&agrave; 32GB bộ nhớ trong. Cấu h&igrave;nh n&agrave;y đủ sức để J8 chạy mượt trong hầu hết c&aacute;c t&aacute;c vụ. Ngo&agrave;i ra việc chạy tr&ecirc;n hệ điều h&agrave;nh Android 8.0 Oreo mới cũng gi&uacute;p cho Galaxy J8 mượt m&agrave; v&agrave; ổn định hơn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-6.jpg" /></p>

<h2>&nbsp;</h2>

<h2><strong>Thời lượng pin xuất sắc</strong></h2>

<p>&nbsp;</p>

<p>Pin lu&ocirc;n l&agrave; điểm mạnh tr&ecirc;n những chiếc điện thoại Galaxy J v&agrave; kh&ocirc;ng c&oacute; g&igrave; ngạc nhi&ecirc;n khi Galaxy J8 c&oacute; thời lượng pin xuất sắc. Với dung lượng lớn 3500 mAh, con chip tiết kiệm điện v&agrave; cơ chế quản l&yacute; pin th&ocirc;ng minh, Galaxy J8 c&oacute; thể duyệt web tối đa trong 13 giờ qua 4G LTE, xem video li&ecirc;n tục trong 20 giờ, gọi thoại trong 23 giờ, những con số rất ấn tượng.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-2.jpg" /></p>',
                'tag' => 'Ipple',
                'price' => '5990000.00',
                'status' => 1,
                'cat_id' => 8,
                'user_id' => 1,
                'created_at' => '2018-11-24 18:48:39',
                'updated_at' => '2018-12-01 20:52:21',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'iPhone 7 Plus 128GB',
                'slug' => 'iphone-7-plus-128gb',
            'intro' => 'Apple A10 mới, 2 cammera sau,Ram 3g, 5.5 inch (1920 x 1080 pixels)',
                'promo1' => 'Đặt Online hoặc Gọi 18006601',
            'promo2' => 'Trả góp 0% (Chỉ áp dụng cho thẻ tín dụng)',
                'promo3' => 'Tặng Voucher 500.000đ mua Apple Watch',
                'packet' => '',
                'images' => '1480038525_636089592275907954_7-plus-chi-tiet.jpg',
                'r_intro' => '<h2><strong>Camera k&eacute;p chinh phục b&oacute;ng tối, x&oacute;a ph&ocirc;ng nghệ thuật</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 chắc chắn l&agrave; chiếc điện thoại c&oacute; camera đ&aacute;ng gờm nhất trong ph&acirc;n kh&uacute;c, đặc biệt l&agrave; khả năng chụp đ&ecirc;m khi mang tr&ecirc;n m&igrave;nh cụm camera k&eacute;p th&ocirc;ng số v&ocirc; c&ugrave;ng chất lượng. Hai cảm biến camera sau 16MP f/1.7 + 5MP f/1.9 đều c&oacute; khẩu độ cực lớn, thu s&aacute;ng tốt trong cả những điều kiện khắc nghiệt, mang đến cho bạn những bức ảnh chụp đ&ecirc;m tuyệt vời.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-1.jpg" /></p>

<p>&nbsp;</p>

<p>Chụp ảnh x&oacute;a ph&ocirc;ng tr&ecirc;n Galaxy J8 được n&acirc;ng l&ecirc;n một tầm cao mới khi kh&ocirc;ng chỉ x&oacute;a ph&ocirc;ng ch&iacute;nh x&aacute;c, l&agrave;m nổi bật chủ thể m&agrave; bạn c&ograve;n c&oacute; th&ecirc;m cả c&aacute;c bộ lọc Bokeh, tạo những hiệu ứng x&oacute;a ph&ocirc;ng kh&aacute;c nhau đầy nghệ thuật. Ảnh chụp ch&acirc;n dung của bạn sẽ ấn tượng hơn bao giờ hết.</p>',
                'review' => '<h2><strong>Camera selfie x&oacute;a ph&ocirc;ng chủ động</strong></h2>

<p>Kh&ocirc;ng chỉ camera sau m&agrave; camera trước của Galaxy J8 cũng c&oacute; khả năng chụp selfie x&oacute;a ph&ocirc;ng. Camera n&agrave;y kh&ocirc;ng chỉ độ ph&acirc;n giải cao 16MP, khẩu độ lớn f/1.9 m&agrave; c&ograve;n c&oacute; cả đ&egrave;n flash LED trợ s&aacute;ng chuy&ecirc;n nghiệp với ba mức độ s&aacute;ng kh&aacute;c nhau. Bạn sẽ được thoải m&aacute;i selfie ngay cả trong điều kiện thiếu s&aacute;ng m&agrave; h&igrave;nh ảnh vẫn ho&agrave;n hảo với độ n&eacute;t cao, &iacute;t nhiễu v&agrave; ch&acirc;n thực. T&iacute;nh năng x&oacute;a ph&ocirc;ng chủ động mang đến c&aacute;c bức ảnh selfie x&oacute;a ph&ocirc;ng theo đ&uacute;ng &yacute; bạn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-3.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>M&agrave;n h&igrave;nh v&ocirc; cực sống động từng khung h&igrave;nh</strong></h2>

<p>&nbsp;</p>

<p>Samsung tiếp tục mang tinh hoa trong c&ocirc;ng nghệ m&agrave;n h&igrave;nh của họ l&ecirc;n Galaxy J8. Đ&oacute; l&agrave; m&agrave;n h&igrave;nh v&ocirc; cực Infinity Display c&ocirc;ng nghệ Super AMOLED cao cấp. Galaxy J8 sở hữu m&agrave;n h&igrave;nh lớn 6 inch HD+, tỉ lệ mới 18,5:9 chuẩn điện ảnh v&agrave; viền m&agrave;n h&igrave;nh cực mỏng. Bạn sẽ được tận hưởng từng khung h&igrave;nh giải tr&iacute; đỉnh cao, m&agrave;u sắc sống động rực rỡ.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-4.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Thiết kế c&aacute; t&iacute;nh, sắc m&agrave;u thời thượng</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 c&oacute; kiểu d&aacute;ng rất mềm mại để đồng nhất ho&agrave;n to&agrave;n với m&agrave;n h&igrave;nh v&ocirc; cực mặt trước. Bạn sẽ được cầm tr&ecirc;n tay một chiếc m&aacute;y liền lạc, bo cong hợp l&yacute; để cảm gi&aacute;c sử dụng thoải m&aacute;i nhất. Mặc d&ugrave; kiểu d&aacute;ng mượt m&agrave; nhưng Galaxy J8 vẫn rất chắc chắn nhờ lớp vỏ kim loại sang trọng. C&oacute; ba m&agrave;u sắc c&aacute; t&iacute;nh d&agrave;nh cho bạn l&agrave; T&iacute;m Sapphire, Đen Titan v&agrave; V&agrave;ng Thạch Anh.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-5.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Bảo mật an to&agrave;n v&agrave; th&ocirc;ng minh</strong></h2>

<p>&nbsp;</p>

<p>Camera trước Galaxy J8 được tối ưu để nhận diện khu&ocirc;n mặt th&ocirc;ng minh v&agrave; nhanh ch&oacute;ng. Chỉ cần đưa m&aacute;y l&ecirc;n l&agrave; chiếc J8 của bạn sẽ tự động mở kh&oacute;a. Ấn tượng hơn, đ&egrave;n flash LED d&agrave;nh cho camera trước sẽ ph&aacute;t huy t&aacute;c dụng để bạn nhận diện được trong cả trời tối. Trong khi đ&oacute; m&aacute;y qu&eacute;t v&acirc;n tay mặt sau cũng l&agrave; một phương thức bảo mật tiện dụng kh&aacute;c m&agrave; bạn c&oacute; thể thao t&aacute;c tiện lợi d&ugrave; cầm bằng bất cứ tay tr&aacute;i hay tay phải.</p>

<p>&nbsp;</p>

<h2><strong>Hiệu năng tốt trong tầm gi&aacute;</strong></h2>

<p>&nbsp;</p>

<p>Hiệu năng Samsung Galaxy J8 kh&aacute; ổn với bộ vi xử l&yacute; Snapdragon 450 t&aacute;m nh&acirc;n xung nhịp 1,8GHz đi c&ugrave;ng 3GB RAM v&agrave; 32GB bộ nhớ trong. Cấu h&igrave;nh n&agrave;y đủ sức để J8 chạy mượt trong hầu hết c&aacute;c t&aacute;c vụ. Ngo&agrave;i ra việc chạy tr&ecirc;n hệ điều h&agrave;nh Android 8.0 Oreo mới cũng gi&uacute;p cho Galaxy J8 mượt m&agrave; v&agrave; ổn định hơn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-6.jpg" /></p>

<h2>&nbsp;</h2>

<h2><strong>Thời lượng pin xuất sắc</strong></h2>

<p>&nbsp;</p>

<p>Pin lu&ocirc;n l&agrave; điểm mạnh tr&ecirc;n những chiếc điện thoại Galaxy J v&agrave; kh&ocirc;ng c&oacute; g&igrave; ngạc nhi&ecirc;n khi Galaxy J8 c&oacute; thời lượng pin xuất sắc. Với dung lượng lớn 3500 mAh, con chip tiết kiệm điện v&agrave; cơ chế quản l&yacute; pin th&ocirc;ng minh, Galaxy J8 c&oacute; thể duyệt web tối đa trong 13 giờ qua 4G LTE, xem video li&ecirc;n tục trong 20 giờ, gọi thoại trong 23 giờ, những con số rất ấn tượng.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-2.jpg" /></p>',
                'tag' => 'Ipple',
                'price' => '25190000.00',
                'status' => 1,
                'cat_id' => 7,
                'user_id' => 1,
                'created_at' => '2018-11-24 18:48:45',
                'updated_at' => '2018-12-01 20:53:36',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Galaxy S7 EDGE',
                'slug' => 'galaxy-s7-edge',
                'intro' => 'sắp ra mắt',
            'promo1' => 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):',
                'promo2' => 'Hoặc Tặng Vali Lock & Lock ',
                'promo3' => 'Tặng Voucher 500.000đ mua Apple Watch',
                'packet' => ' Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ',
                'images' => '1480399297_s7 edge.png',
                'r_intro' => '<h2><strong>Camera k&eacute;p chinh phục b&oacute;ng tối, x&oacute;a ph&ocirc;ng nghệ thuật</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 chắc chắn l&agrave; chiếc điện thoại c&oacute; camera đ&aacute;ng gờm nhất trong ph&acirc;n kh&uacute;c, đặc biệt l&agrave; khả năng chụp đ&ecirc;m khi mang tr&ecirc;n m&igrave;nh cụm camera k&eacute;p th&ocirc;ng số v&ocirc; c&ugrave;ng chất lượng. Hai cảm biến camera sau 16MP f/1.7 + 5MP f/1.9 đều c&oacute; khẩu độ cực lớn, thu s&aacute;ng tốt trong cả những điều kiện khắc nghiệt, mang đến cho bạn những bức ảnh chụp đ&ecirc;m tuyệt vời.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-1.jpg" /></p>

<p>&nbsp;</p>

<p>Chụp ảnh x&oacute;a ph&ocirc;ng tr&ecirc;n Galaxy J8 được n&acirc;ng l&ecirc;n một tầm cao mới khi kh&ocirc;ng chỉ x&oacute;a ph&ocirc;ng ch&iacute;nh x&aacute;c, l&agrave;m nổi bật chủ thể m&agrave; bạn c&ograve;n c&oacute; th&ecirc;m cả c&aacute;c bộ lọc Bokeh, tạo những hiệu ứng x&oacute;a ph&ocirc;ng kh&aacute;c nhau đầy nghệ thuật. Ảnh chụp ch&acirc;n dung của bạn sẽ ấn tượng hơn bao giờ hết.</p>',
                'review' => '<h2><strong>Camera selfie x&oacute;a ph&ocirc;ng chủ động</strong></h2>

<p>Kh&ocirc;ng chỉ camera sau m&agrave; camera trước của Galaxy J8 cũng c&oacute; khả năng chụp selfie x&oacute;a ph&ocirc;ng. Camera n&agrave;y kh&ocirc;ng chỉ độ ph&acirc;n giải cao 16MP, khẩu độ lớn f/1.9 m&agrave; c&ograve;n c&oacute; cả đ&egrave;n flash LED trợ s&aacute;ng chuy&ecirc;n nghiệp với ba mức độ s&aacute;ng kh&aacute;c nhau. Bạn sẽ được thoải m&aacute;i selfie ngay cả trong điều kiện thiếu s&aacute;ng m&agrave; h&igrave;nh ảnh vẫn ho&agrave;n hảo với độ n&eacute;t cao, &iacute;t nhiễu v&agrave; ch&acirc;n thực. T&iacute;nh năng x&oacute;a ph&ocirc;ng chủ động mang đến c&aacute;c bức ảnh selfie x&oacute;a ph&ocirc;ng theo đ&uacute;ng &yacute; bạn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-3.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>M&agrave;n h&igrave;nh v&ocirc; cực sống động từng khung h&igrave;nh</strong></h2>

<p>&nbsp;</p>

<p>Samsung tiếp tục mang tinh hoa trong c&ocirc;ng nghệ m&agrave;n h&igrave;nh của họ l&ecirc;n Galaxy J8. Đ&oacute; l&agrave; m&agrave;n h&igrave;nh v&ocirc; cực Infinity Display c&ocirc;ng nghệ Super AMOLED cao cấp. Galaxy J8 sở hữu m&agrave;n h&igrave;nh lớn 6 inch HD+, tỉ lệ mới 18,5:9 chuẩn điện ảnh v&agrave; viền m&agrave;n h&igrave;nh cực mỏng. Bạn sẽ được tận hưởng từng khung h&igrave;nh giải tr&iacute; đỉnh cao, m&agrave;u sắc sống động rực rỡ.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-4.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Thiết kế c&aacute; t&iacute;nh, sắc m&agrave;u thời thượng</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 c&oacute; kiểu d&aacute;ng rất mềm mại để đồng nhất ho&agrave;n to&agrave;n với m&agrave;n h&igrave;nh v&ocirc; cực mặt trước. Bạn sẽ được cầm tr&ecirc;n tay một chiếc m&aacute;y liền lạc, bo cong hợp l&yacute; để cảm gi&aacute;c sử dụng thoải m&aacute;i nhất. Mặc d&ugrave; kiểu d&aacute;ng mượt m&agrave; nhưng Galaxy J8 vẫn rất chắc chắn nhờ lớp vỏ kim loại sang trọng. C&oacute; ba m&agrave;u sắc c&aacute; t&iacute;nh d&agrave;nh cho bạn l&agrave; T&iacute;m Sapphire, Đen Titan v&agrave; V&agrave;ng Thạch Anh.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-5.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Bảo mật an to&agrave;n v&agrave; th&ocirc;ng minh</strong></h2>

<p>&nbsp;</p>

<p>Camera trước Galaxy J8 được tối ưu để nhận diện khu&ocirc;n mặt th&ocirc;ng minh v&agrave; nhanh ch&oacute;ng. Chỉ cần đưa m&aacute;y l&ecirc;n l&agrave; chiếc J8 của bạn sẽ tự động mở kh&oacute;a. Ấn tượng hơn, đ&egrave;n flash LED d&agrave;nh cho camera trước sẽ ph&aacute;t huy t&aacute;c dụng để bạn nhận diện được trong cả trời tối. Trong khi đ&oacute; m&aacute;y qu&eacute;t v&acirc;n tay mặt sau cũng l&agrave; một phương thức bảo mật tiện dụng kh&aacute;c m&agrave; bạn c&oacute; thể thao t&aacute;c tiện lợi d&ugrave; cầm bằng bất cứ tay tr&aacute;i hay tay phải.</p>

<p>&nbsp;</p>

<h2><strong>Hiệu năng tốt trong tầm gi&aacute;</strong></h2>

<p>&nbsp;</p>

<p>Hiệu năng Samsung Galaxy J8 kh&aacute; ổn với bộ vi xử l&yacute; Snapdragon 450 t&aacute;m nh&acirc;n xung nhịp 1,8GHz đi c&ugrave;ng 3GB RAM v&agrave; 32GB bộ nhớ trong. Cấu h&igrave;nh n&agrave;y đủ sức để J8 chạy mượt trong hầu hết c&aacute;c t&aacute;c vụ. Ngo&agrave;i ra việc chạy tr&ecirc;n hệ điều h&agrave;nh Android 8.0 Oreo mới cũng gi&uacute;p cho Galaxy J8 mượt m&agrave; v&agrave; ổn định hơn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-6.jpg" /></p>

<h2>&nbsp;</h2>

<h2><strong>Thời lượng pin xuất sắc</strong></h2>

<p>&nbsp;</p>

<p>Pin lu&ocirc;n l&agrave; điểm mạnh tr&ecirc;n những chiếc điện thoại Galaxy J v&agrave; kh&ocirc;ng c&oacute; g&igrave; ngạc nhi&ecirc;n khi Galaxy J8 c&oacute; thời lượng pin xuất sắc. Với dung lượng lớn 3500 mAh, con chip tiết kiệm điện v&agrave; cơ chế quản l&yacute; pin th&ocirc;ng minh, Galaxy J8 c&oacute; thể duyệt web tối đa trong 13 giờ qua 4G LTE, xem video li&ecirc;n tục trong 20 giờ, gọi thoại trong 23 giờ, những con số rất ấn tượng.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-2.jpg" /></p>',
                'tag' => 'Galaxy S8, Galaxy S8,Galaxy S8',
                'price' => '18490000.00',
                'status' => 1,
                'cat_id' => 6,
                'user_id' => 1,
                'created_at' => '2018-11-25 23:44:07',
                'updated_at' => '2018-11-28 23:01:37',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Galaxy S8',
                'slug' => 'galaxy-s8',
                'intro' => 'sắp ra mắt',
            'promo1' => 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):',
                'promo2' => 'Hoặc Tặng Vali Lock & Lock ',
                'promo3' => 'Tặng Voucher 500.000đ mua Apple Watch',
                'packet' => ' Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ',
                'images' => '1480399312_s7 edge.png',
                'r_intro' => '<h2><strong>Camera k&eacute;p chinh phục b&oacute;ng tối, x&oacute;a ph&ocirc;ng nghệ thuật</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 chắc chắn l&agrave; chiếc điện thoại c&oacute; camera đ&aacute;ng gờm nhất trong ph&acirc;n kh&uacute;c, đặc biệt l&agrave; khả năng chụp đ&ecirc;m khi mang tr&ecirc;n m&igrave;nh cụm camera k&eacute;p th&ocirc;ng số v&ocirc; c&ugrave;ng chất lượng. Hai cảm biến camera sau 16MP f/1.7 + 5MP f/1.9 đều c&oacute; khẩu độ cực lớn, thu s&aacute;ng tốt trong cả những điều kiện khắc nghiệt, mang đến cho bạn những bức ảnh chụp đ&ecirc;m tuyệt vời.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-1.jpg" /></p>

<p>&nbsp;</p>

<p>Chụp ảnh x&oacute;a ph&ocirc;ng tr&ecirc;n Galaxy J8 được n&acirc;ng l&ecirc;n một tầm cao mới khi kh&ocirc;ng chỉ x&oacute;a ph&ocirc;ng ch&iacute;nh x&aacute;c, l&agrave;m nổi bật chủ thể m&agrave; bạn c&ograve;n c&oacute; th&ecirc;m cả c&aacute;c bộ lọc Bokeh, tạo những hiệu ứng x&oacute;a ph&ocirc;ng kh&aacute;c nhau đầy nghệ thuật. Ảnh chụp ch&acirc;n dung của bạn sẽ ấn tượng hơn bao giờ hết.</p>',
                'review' => '<h2><strong>Camera selfie x&oacute;a ph&ocirc;ng chủ động</strong></h2>

<p>Kh&ocirc;ng chỉ camera sau m&agrave; camera trước của Galaxy J8 cũng c&oacute; khả năng chụp selfie x&oacute;a ph&ocirc;ng. Camera n&agrave;y kh&ocirc;ng chỉ độ ph&acirc;n giải cao 16MP, khẩu độ lớn f/1.9 m&agrave; c&ograve;n c&oacute; cả đ&egrave;n flash LED trợ s&aacute;ng chuy&ecirc;n nghiệp với ba mức độ s&aacute;ng kh&aacute;c nhau. Bạn sẽ được thoải m&aacute;i selfie ngay cả trong điều kiện thiếu s&aacute;ng m&agrave; h&igrave;nh ảnh vẫn ho&agrave;n hảo với độ n&eacute;t cao, &iacute;t nhiễu v&agrave; ch&acirc;n thực. T&iacute;nh năng x&oacute;a ph&ocirc;ng chủ động mang đến c&aacute;c bức ảnh selfie x&oacute;a ph&ocirc;ng theo đ&uacute;ng &yacute; bạn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-3.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>M&agrave;n h&igrave;nh v&ocirc; cực sống động từng khung h&igrave;nh</strong></h2>

<p>&nbsp;</p>

<p>Samsung tiếp tục mang tinh hoa trong c&ocirc;ng nghệ m&agrave;n h&igrave;nh của họ l&ecirc;n Galaxy J8. Đ&oacute; l&agrave; m&agrave;n h&igrave;nh v&ocirc; cực Infinity Display c&ocirc;ng nghệ Super AMOLED cao cấp. Galaxy J8 sở hữu m&agrave;n h&igrave;nh lớn 6 inch HD+, tỉ lệ mới 18,5:9 chuẩn điện ảnh v&agrave; viền m&agrave;n h&igrave;nh cực mỏng. Bạn sẽ được tận hưởng từng khung h&igrave;nh giải tr&iacute; đỉnh cao, m&agrave;u sắc sống động rực rỡ.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-4.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Thiết kế c&aacute; t&iacute;nh, sắc m&agrave;u thời thượng</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 c&oacute; kiểu d&aacute;ng rất mềm mại để đồng nhất ho&agrave;n to&agrave;n với m&agrave;n h&igrave;nh v&ocirc; cực mặt trước. Bạn sẽ được cầm tr&ecirc;n tay một chiếc m&aacute;y liền lạc, bo cong hợp l&yacute; để cảm gi&aacute;c sử dụng thoải m&aacute;i nhất. Mặc d&ugrave; kiểu d&aacute;ng mượt m&agrave; nhưng Galaxy J8 vẫn rất chắc chắn nhờ lớp vỏ kim loại sang trọng. C&oacute; ba m&agrave;u sắc c&aacute; t&iacute;nh d&agrave;nh cho bạn l&agrave; T&iacute;m Sapphire, Đen Titan v&agrave; V&agrave;ng Thạch Anh.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-5.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Bảo mật an to&agrave;n v&agrave; th&ocirc;ng minh</strong></h2>

<p>&nbsp;</p>

<p>Camera trước Galaxy J8 được tối ưu để nhận diện khu&ocirc;n mặt th&ocirc;ng minh v&agrave; nhanh ch&oacute;ng. Chỉ cần đưa m&aacute;y l&ecirc;n l&agrave; chiếc J8 của bạn sẽ tự động mở kh&oacute;a. Ấn tượng hơn, đ&egrave;n flash LED d&agrave;nh cho camera trước sẽ ph&aacute;t huy t&aacute;c dụng để bạn nhận diện được trong cả trời tối. Trong khi đ&oacute; m&aacute;y qu&eacute;t v&acirc;n tay mặt sau cũng l&agrave; một phương thức bảo mật tiện dụng kh&aacute;c m&agrave; bạn c&oacute; thể thao t&aacute;c tiện lợi d&ugrave; cầm bằng bất cứ tay tr&aacute;i hay tay phải.</p>

<p>&nbsp;</p>

<h2><strong>Hiệu năng tốt trong tầm gi&aacute;</strong></h2>

<p>&nbsp;</p>

<p>Hiệu năng Samsung Galaxy J8 kh&aacute; ổn với bộ vi xử l&yacute; Snapdragon 450 t&aacute;m nh&acirc;n xung nhịp 1,8GHz đi c&ugrave;ng 3GB RAM v&agrave; 32GB bộ nhớ trong. Cấu h&igrave;nh n&agrave;y đủ sức để J8 chạy mượt trong hầu hết c&aacute;c t&aacute;c vụ. Ngo&agrave;i ra việc chạy tr&ecirc;n hệ điều h&agrave;nh Android 8.0 Oreo mới cũng gi&uacute;p cho Galaxy J8 mượt m&agrave; v&agrave; ổn định hơn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-6.jpg" /></p>

<h2>&nbsp;</h2>

<h2><strong>Thời lượng pin xuất sắc</strong></h2>

<p>&nbsp;</p>

<p>Pin lu&ocirc;n l&agrave; điểm mạnh tr&ecirc;n những chiếc điện thoại Galaxy J v&agrave; kh&ocirc;ng c&oacute; g&igrave; ngạc nhi&ecirc;n khi Galaxy J8 c&oacute; thời lượng pin xuất sắc. Với dung lượng lớn 3500 mAh, con chip tiết kiệm điện v&agrave; cơ chế quản l&yacute; pin th&ocirc;ng minh, Galaxy J8 c&oacute; thể duyệt web tối đa trong 13 giờ qua 4G LTE, xem video li&ecirc;n tục trong 20 giờ, gọi thoại trong 23 giờ, những con số rất ấn tượng.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-2.jpg" /></p>',
                'tag' => 'Galaxy S8, Galaxy S8,Galaxy S8',
                'price' => '18490000.00',
                'status' => 1,
                'cat_id' => 6,
                'user_id' => 1,
                'created_at' => '2018-11-25 23:44:11',
                'updated_at' => '2018-11-28 23:01:52',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Galaxy S8',
                'slug' => 'galaxy-s8',
                'intro' => 'sắp ra mắt',
            'promo1' => 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):',
                'promo2' => 'Hoặc Tặng Vali Lock & Lock ',
                'promo3' => 'Tặng Voucher 500.000đ mua Apple Watch',
                'packet' => ' Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ',
                'images' => '1480399324_s7 edge.png',
                'r_intro' => '<h2><strong>Camera k&eacute;p chinh phục b&oacute;ng tối, x&oacute;a ph&ocirc;ng nghệ thuật</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 chắc chắn l&agrave; chiếc điện thoại c&oacute; camera đ&aacute;ng gờm nhất trong ph&acirc;n kh&uacute;c, đặc biệt l&agrave; khả năng chụp đ&ecirc;m khi mang tr&ecirc;n m&igrave;nh cụm camera k&eacute;p th&ocirc;ng số v&ocirc; c&ugrave;ng chất lượng. Hai cảm biến camera sau 16MP f/1.7 + 5MP f/1.9 đều c&oacute; khẩu độ cực lớn, thu s&aacute;ng tốt trong cả những điều kiện khắc nghiệt, mang đến cho bạn những bức ảnh chụp đ&ecirc;m tuyệt vời.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-1.jpg" /></p>

<p>&nbsp;</p>

<p>Chụp ảnh x&oacute;a ph&ocirc;ng tr&ecirc;n Galaxy J8 được n&acirc;ng l&ecirc;n một tầm cao mới khi kh&ocirc;ng chỉ x&oacute;a ph&ocirc;ng ch&iacute;nh x&aacute;c, l&agrave;m nổi bật chủ thể m&agrave; bạn c&ograve;n c&oacute; th&ecirc;m cả c&aacute;c bộ lọc Bokeh, tạo những hiệu ứng x&oacute;a ph&ocirc;ng kh&aacute;c nhau đầy nghệ thuật. Ảnh chụp ch&acirc;n dung của bạn sẽ ấn tượng hơn bao giờ hết.</p>',
                'review' => '<h2><strong>Camera selfie x&oacute;a ph&ocirc;ng chủ động</strong></h2>

<p>Kh&ocirc;ng chỉ camera sau m&agrave; camera trước của Galaxy J8 cũng c&oacute; khả năng chụp selfie x&oacute;a ph&ocirc;ng. Camera n&agrave;y kh&ocirc;ng chỉ độ ph&acirc;n giải cao 16MP, khẩu độ lớn f/1.9 m&agrave; c&ograve;n c&oacute; cả đ&egrave;n flash LED trợ s&aacute;ng chuy&ecirc;n nghiệp với ba mức độ s&aacute;ng kh&aacute;c nhau. Bạn sẽ được thoải m&aacute;i selfie ngay cả trong điều kiện thiếu s&aacute;ng m&agrave; h&igrave;nh ảnh vẫn ho&agrave;n hảo với độ n&eacute;t cao, &iacute;t nhiễu v&agrave; ch&acirc;n thực. T&iacute;nh năng x&oacute;a ph&ocirc;ng chủ động mang đến c&aacute;c bức ảnh selfie x&oacute;a ph&ocirc;ng theo đ&uacute;ng &yacute; bạn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-3.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>M&agrave;n h&igrave;nh v&ocirc; cực sống động từng khung h&igrave;nh</strong></h2>

<p>&nbsp;</p>

<p>Samsung tiếp tục mang tinh hoa trong c&ocirc;ng nghệ m&agrave;n h&igrave;nh của họ l&ecirc;n Galaxy J8. Đ&oacute; l&agrave; m&agrave;n h&igrave;nh v&ocirc; cực Infinity Display c&ocirc;ng nghệ Super AMOLED cao cấp. Galaxy J8 sở hữu m&agrave;n h&igrave;nh lớn 6 inch HD+, tỉ lệ mới 18,5:9 chuẩn điện ảnh v&agrave; viền m&agrave;n h&igrave;nh cực mỏng. Bạn sẽ được tận hưởng từng khung h&igrave;nh giải tr&iacute; đỉnh cao, m&agrave;u sắc sống động rực rỡ.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-4.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Thiết kế c&aacute; t&iacute;nh, sắc m&agrave;u thời thượng</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 c&oacute; kiểu d&aacute;ng rất mềm mại để đồng nhất ho&agrave;n to&agrave;n với m&agrave;n h&igrave;nh v&ocirc; cực mặt trước. Bạn sẽ được cầm tr&ecirc;n tay một chiếc m&aacute;y liền lạc, bo cong hợp l&yacute; để cảm gi&aacute;c sử dụng thoải m&aacute;i nhất. Mặc d&ugrave; kiểu d&aacute;ng mượt m&agrave; nhưng Galaxy J8 vẫn rất chắc chắn nhờ lớp vỏ kim loại sang trọng. C&oacute; ba m&agrave;u sắc c&aacute; t&iacute;nh d&agrave;nh cho bạn l&agrave; T&iacute;m Sapphire, Đen Titan v&agrave; V&agrave;ng Thạch Anh.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-5.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Bảo mật an to&agrave;n v&agrave; th&ocirc;ng minh</strong></h2>

<p>&nbsp;</p>

<p>Camera trước Galaxy J8 được tối ưu để nhận diện khu&ocirc;n mặt th&ocirc;ng minh v&agrave; nhanh ch&oacute;ng. Chỉ cần đưa m&aacute;y l&ecirc;n l&agrave; chiếc J8 của bạn sẽ tự động mở kh&oacute;a. Ấn tượng hơn, đ&egrave;n flash LED d&agrave;nh cho camera trước sẽ ph&aacute;t huy t&aacute;c dụng để bạn nhận diện được trong cả trời tối. Trong khi đ&oacute; m&aacute;y qu&eacute;t v&acirc;n tay mặt sau cũng l&agrave; một phương thức bảo mật tiện dụng kh&aacute;c m&agrave; bạn c&oacute; thể thao t&aacute;c tiện lợi d&ugrave; cầm bằng bất cứ tay tr&aacute;i hay tay phải.</p>

<p>&nbsp;</p>

<h2><strong>Hiệu năng tốt trong tầm gi&aacute;</strong></h2>

<p>&nbsp;</p>

<p>Hiệu năng Samsung Galaxy J8 kh&aacute; ổn với bộ vi xử l&yacute; Snapdragon 450 t&aacute;m nh&acirc;n xung nhịp 1,8GHz đi c&ugrave;ng 3GB RAM v&agrave; 32GB bộ nhớ trong. Cấu h&igrave;nh n&agrave;y đủ sức để J8 chạy mượt trong hầu hết c&aacute;c t&aacute;c vụ. Ngo&agrave;i ra việc chạy tr&ecirc;n hệ điều h&agrave;nh Android 8.0 Oreo mới cũng gi&uacute;p cho Galaxy J8 mượt m&agrave; v&agrave; ổn định hơn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-6.jpg" /></p>

<h2>&nbsp;</h2>

<h2><strong>Thời lượng pin xuất sắc</strong></h2>

<p>&nbsp;</p>

<p>Pin lu&ocirc;n l&agrave; điểm mạnh tr&ecirc;n những chiếc điện thoại Galaxy J v&agrave; kh&ocirc;ng c&oacute; g&igrave; ngạc nhi&ecirc;n khi Galaxy J8 c&oacute; thời lượng pin xuất sắc. Với dung lượng lớn 3500 mAh, con chip tiết kiệm điện v&agrave; cơ chế quản l&yacute; pin th&ocirc;ng minh, Galaxy J8 c&oacute; thể duyệt web tối đa trong 13 giờ qua 4G LTE, xem video li&ecirc;n tục trong 20 giờ, gọi thoại trong 23 giờ, những con số rất ấn tượng.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-2.jpg" /></p>',
                'tag' => 'Galaxy S8, Galaxy S8,Galaxy S8',
                'price' => '18490000.00',
                'status' => 1,
                'cat_id' => 6,
                'user_id' => 1,
                'created_at' => '2018-11-25 23:44:15',
                'updated_at' => '2018-11-28 23:02:04',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'ZENFONE 3 MAX',
                'slug' => 'zenfone-3-max',
                'intro' => 'sắp ra mắt',
            'promo1' => 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):',
                'promo2' => 'Hoặc Tặng Vali Lock & Lock ',
                'promo3' => 'Tặng Voucher 500.000đ mua Apple Watch',
                'packet' => ' Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ',
                'images' => '1480399412_asus-zenfone-3-max-400-400x460.png',
                'r_intro' => '<h2><strong>Camera k&eacute;p chinh phục b&oacute;ng tối, x&oacute;a ph&ocirc;ng nghệ thuật</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 chắc chắn l&agrave; chiếc điện thoại c&oacute; camera đ&aacute;ng gờm nhất trong ph&acirc;n kh&uacute;c, đặc biệt l&agrave; khả năng chụp đ&ecirc;m khi mang tr&ecirc;n m&igrave;nh cụm camera k&eacute;p th&ocirc;ng số v&ocirc; c&ugrave;ng chất lượng. Hai cảm biến camera sau 16MP f/1.7 + 5MP f/1.9 đều c&oacute; khẩu độ cực lớn, thu s&aacute;ng tốt trong cả những điều kiện khắc nghiệt, mang đến cho bạn những bức ảnh chụp đ&ecirc;m tuyệt vời.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-1.jpg" /></p>

<p>&nbsp;</p>

<p>Chụp ảnh x&oacute;a ph&ocirc;ng tr&ecirc;n Galaxy J8 được n&acirc;ng l&ecirc;n một tầm cao mới khi kh&ocirc;ng chỉ x&oacute;a ph&ocirc;ng ch&iacute;nh x&aacute;c, l&agrave;m nổi bật chủ thể m&agrave; bạn c&ograve;n c&oacute; th&ecirc;m cả c&aacute;c bộ lọc Bokeh, tạo những hiệu ứng x&oacute;a ph&ocirc;ng kh&aacute;c nhau đầy nghệ thuật. Ảnh chụp ch&acirc;n dung của bạn sẽ ấn tượng hơn bao giờ hết.</p>',
                'review' => '<h2><strong>Camera selfie x&oacute;a ph&ocirc;ng chủ động</strong></h2>

<p>Kh&ocirc;ng chỉ camera sau m&agrave; camera trước của Galaxy J8 cũng c&oacute; khả năng chụp selfie x&oacute;a ph&ocirc;ng. Camera n&agrave;y kh&ocirc;ng chỉ độ ph&acirc;n giải cao 16MP, khẩu độ lớn f/1.9 m&agrave; c&ograve;n c&oacute; cả đ&egrave;n flash LED trợ s&aacute;ng chuy&ecirc;n nghiệp với ba mức độ s&aacute;ng kh&aacute;c nhau. Bạn sẽ được thoải m&aacute;i selfie ngay cả trong điều kiện thiếu s&aacute;ng m&agrave; h&igrave;nh ảnh vẫn ho&agrave;n hảo với độ n&eacute;t cao, &iacute;t nhiễu v&agrave; ch&acirc;n thực. T&iacute;nh năng x&oacute;a ph&ocirc;ng chủ động mang đến c&aacute;c bức ảnh selfie x&oacute;a ph&ocirc;ng theo đ&uacute;ng &yacute; bạn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-3.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>M&agrave;n h&igrave;nh v&ocirc; cực sống động từng khung h&igrave;nh</strong></h2>

<p>&nbsp;</p>

<p>Samsung tiếp tục mang tinh hoa trong c&ocirc;ng nghệ m&agrave;n h&igrave;nh của họ l&ecirc;n Galaxy J8. Đ&oacute; l&agrave; m&agrave;n h&igrave;nh v&ocirc; cực Infinity Display c&ocirc;ng nghệ Super AMOLED cao cấp. Galaxy J8 sở hữu m&agrave;n h&igrave;nh lớn 6 inch HD+, tỉ lệ mới 18,5:9 chuẩn điện ảnh v&agrave; viền m&agrave;n h&igrave;nh cực mỏng. Bạn sẽ được tận hưởng từng khung h&igrave;nh giải tr&iacute; đỉnh cao, m&agrave;u sắc sống động rực rỡ.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-4.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Thiết kế c&aacute; t&iacute;nh, sắc m&agrave;u thời thượng</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 c&oacute; kiểu d&aacute;ng rất mềm mại để đồng nhất ho&agrave;n to&agrave;n với m&agrave;n h&igrave;nh v&ocirc; cực mặt trước. Bạn sẽ được cầm tr&ecirc;n tay một chiếc m&aacute;y liền lạc, bo cong hợp l&yacute; để cảm gi&aacute;c sử dụng thoải m&aacute;i nhất. Mặc d&ugrave; kiểu d&aacute;ng mượt m&agrave; nhưng Galaxy J8 vẫn rất chắc chắn nhờ lớp vỏ kim loại sang trọng. C&oacute; ba m&agrave;u sắc c&aacute; t&iacute;nh d&agrave;nh cho bạn l&agrave; T&iacute;m Sapphire, Đen Titan v&agrave; V&agrave;ng Thạch Anh.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-5.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Bảo mật an to&agrave;n v&agrave; th&ocirc;ng minh</strong></h2>

<p>&nbsp;</p>

<p>Camera trước Galaxy J8 được tối ưu để nhận diện khu&ocirc;n mặt th&ocirc;ng minh v&agrave; nhanh ch&oacute;ng. Chỉ cần đưa m&aacute;y l&ecirc;n l&agrave; chiếc J8 của bạn sẽ tự động mở kh&oacute;a. Ấn tượng hơn, đ&egrave;n flash LED d&agrave;nh cho camera trước sẽ ph&aacute;t huy t&aacute;c dụng để bạn nhận diện được trong cả trời tối. Trong khi đ&oacute; m&aacute;y qu&eacute;t v&acirc;n tay mặt sau cũng l&agrave; một phương thức bảo mật tiện dụng kh&aacute;c m&agrave; bạn c&oacute; thể thao t&aacute;c tiện lợi d&ugrave; cầm bằng bất cứ tay tr&aacute;i hay tay phải.</p>

<p>&nbsp;</p>

<h2><strong>Hiệu năng tốt trong tầm gi&aacute;</strong></h2>

<p>&nbsp;</p>

<p>Hiệu năng Samsung Galaxy J8 kh&aacute; ổn với bộ vi xử l&yacute; Snapdragon 450 t&aacute;m nh&acirc;n xung nhịp 1,8GHz đi c&ugrave;ng 3GB RAM v&agrave; 32GB bộ nhớ trong. Cấu h&igrave;nh n&agrave;y đủ sức để J8 chạy mượt trong hầu hết c&aacute;c t&aacute;c vụ. Ngo&agrave;i ra việc chạy tr&ecirc;n hệ điều h&agrave;nh Android 8.0 Oreo mới cũng gi&uacute;p cho Galaxy J8 mượt m&agrave; v&agrave; ổn định hơn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-6.jpg" /></p>

<h2>&nbsp;</h2>

<h2><strong>Thời lượng pin xuất sắc</strong></h2>

<p>&nbsp;</p>

<p>Pin lu&ocirc;n l&agrave; điểm mạnh tr&ecirc;n những chiếc điện thoại Galaxy J v&agrave; kh&ocirc;ng c&oacute; g&igrave; ngạc nhi&ecirc;n khi Galaxy J8 c&oacute; thời lượng pin xuất sắc. Với dung lượng lớn 3500 mAh, con chip tiết kiệm điện v&agrave; cơ chế quản l&yacute; pin th&ocirc;ng minh, Galaxy J8 c&oacute; thể duyệt web tối đa trong 13 giờ qua 4G LTE, xem video li&ecirc;n tục trong 20 giờ, gọi thoại trong 23 giờ, những con số rất ấn tượng.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-2.jpg" /></p>',
                'tag' => 'Galaxy S8, Galaxy S8,Galaxy S8',
                'price' => '18490000.00',
                'status' => 1,
                'cat_id' => 14,
                'user_id' => 1,
                'created_at' => '2018-11-25 23:45:03',
                'updated_at' => '2018-11-28 23:03:32',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Zenfone 2 Laser',
                'slug' => 'zenfone-2-laser',
                'intro' => 'sắp ra mắt',
            'promo1' => 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):',
                'promo2' => 'Hoặc Tặng Vali Lock & Lock ',
                'promo3' => 'Tặng Voucher 500.000đ mua Apple Watch',
                'packet' => ' Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ',
                'images' => '1480399445_asus-zenfone-2-laser-1-400x460.png',
                'r_intro' => '<h2><strong>Camera k&eacute;p chinh phục b&oacute;ng tối, x&oacute;a ph&ocirc;ng nghệ thuật</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 chắc chắn l&agrave; chiếc điện thoại c&oacute; camera đ&aacute;ng gờm nhất trong ph&acirc;n kh&uacute;c, đặc biệt l&agrave; khả năng chụp đ&ecirc;m khi mang tr&ecirc;n m&igrave;nh cụm camera k&eacute;p th&ocirc;ng số v&ocirc; c&ugrave;ng chất lượng. Hai cảm biến camera sau 16MP f/1.7 + 5MP f/1.9 đều c&oacute; khẩu độ cực lớn, thu s&aacute;ng tốt trong cả những điều kiện khắc nghiệt, mang đến cho bạn những bức ảnh chụp đ&ecirc;m tuyệt vời.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-1.jpg" /></p>

<p>&nbsp;</p>

<p>Chụp ảnh x&oacute;a ph&ocirc;ng tr&ecirc;n Galaxy J8 được n&acirc;ng l&ecirc;n một tầm cao mới khi kh&ocirc;ng chỉ x&oacute;a ph&ocirc;ng ch&iacute;nh x&aacute;c, l&agrave;m nổi bật chủ thể m&agrave; bạn c&ograve;n c&oacute; th&ecirc;m cả c&aacute;c bộ lọc Bokeh, tạo những hiệu ứng x&oacute;a ph&ocirc;ng kh&aacute;c nhau đầy nghệ thuật. Ảnh chụp ch&acirc;n dung của bạn sẽ ấn tượng hơn bao giờ hết.</p>',
                'review' => '<h2><strong>Camera selfie x&oacute;a ph&ocirc;ng chủ động</strong></h2>

<p>Kh&ocirc;ng chỉ camera sau m&agrave; camera trước của Galaxy J8 cũng c&oacute; khả năng chụp selfie x&oacute;a ph&ocirc;ng. Camera n&agrave;y kh&ocirc;ng chỉ độ ph&acirc;n giải cao 16MP, khẩu độ lớn f/1.9 m&agrave; c&ograve;n c&oacute; cả đ&egrave;n flash LED trợ s&aacute;ng chuy&ecirc;n nghiệp với ba mức độ s&aacute;ng kh&aacute;c nhau. Bạn sẽ được thoải m&aacute;i selfie ngay cả trong điều kiện thiếu s&aacute;ng m&agrave; h&igrave;nh ảnh vẫn ho&agrave;n hảo với độ n&eacute;t cao, &iacute;t nhiễu v&agrave; ch&acirc;n thực. T&iacute;nh năng x&oacute;a ph&ocirc;ng chủ động mang đến c&aacute;c bức ảnh selfie x&oacute;a ph&ocirc;ng theo đ&uacute;ng &yacute; bạn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-3.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>M&agrave;n h&igrave;nh v&ocirc; cực sống động từng khung h&igrave;nh</strong></h2>

<p>&nbsp;</p>

<p>Samsung tiếp tục mang tinh hoa trong c&ocirc;ng nghệ m&agrave;n h&igrave;nh của họ l&ecirc;n Galaxy J8. Đ&oacute; l&agrave; m&agrave;n h&igrave;nh v&ocirc; cực Infinity Display c&ocirc;ng nghệ Super AMOLED cao cấp. Galaxy J8 sở hữu m&agrave;n h&igrave;nh lớn 6 inch HD+, tỉ lệ mới 18,5:9 chuẩn điện ảnh v&agrave; viền m&agrave;n h&igrave;nh cực mỏng. Bạn sẽ được tận hưởng từng khung h&igrave;nh giải tr&iacute; đỉnh cao, m&agrave;u sắc sống động rực rỡ.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-4.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Thiết kế c&aacute; t&iacute;nh, sắc m&agrave;u thời thượng</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 c&oacute; kiểu d&aacute;ng rất mềm mại để đồng nhất ho&agrave;n to&agrave;n với m&agrave;n h&igrave;nh v&ocirc; cực mặt trước. Bạn sẽ được cầm tr&ecirc;n tay một chiếc m&aacute;y liền lạc, bo cong hợp l&yacute; để cảm gi&aacute;c sử dụng thoải m&aacute;i nhất. Mặc d&ugrave; kiểu d&aacute;ng mượt m&agrave; nhưng Galaxy J8 vẫn rất chắc chắn nhờ lớp vỏ kim loại sang trọng. C&oacute; ba m&agrave;u sắc c&aacute; t&iacute;nh d&agrave;nh cho bạn l&agrave; T&iacute;m Sapphire, Đen Titan v&agrave; V&agrave;ng Thạch Anh.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-5.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Bảo mật an to&agrave;n v&agrave; th&ocirc;ng minh</strong></h2>

<p>&nbsp;</p>

<p>Camera trước Galaxy J8 được tối ưu để nhận diện khu&ocirc;n mặt th&ocirc;ng minh v&agrave; nhanh ch&oacute;ng. Chỉ cần đưa m&aacute;y l&ecirc;n l&agrave; chiếc J8 của bạn sẽ tự động mở kh&oacute;a. Ấn tượng hơn, đ&egrave;n flash LED d&agrave;nh cho camera trước sẽ ph&aacute;t huy t&aacute;c dụng để bạn nhận diện được trong cả trời tối. Trong khi đ&oacute; m&aacute;y qu&eacute;t v&acirc;n tay mặt sau cũng l&agrave; một phương thức bảo mật tiện dụng kh&aacute;c m&agrave; bạn c&oacute; thể thao t&aacute;c tiện lợi d&ugrave; cầm bằng bất cứ tay tr&aacute;i hay tay phải.</p>

<p>&nbsp;</p>

<h2><strong>Hiệu năng tốt trong tầm gi&aacute;</strong></h2>

<p>&nbsp;</p>

<p>Hiệu năng Samsung Galaxy J8 kh&aacute; ổn với bộ vi xử l&yacute; Snapdragon 450 t&aacute;m nh&acirc;n xung nhịp 1,8GHz đi c&ugrave;ng 3GB RAM v&agrave; 32GB bộ nhớ trong. Cấu h&igrave;nh n&agrave;y đủ sức để J8 chạy mượt trong hầu hết c&aacute;c t&aacute;c vụ. Ngo&agrave;i ra việc chạy tr&ecirc;n hệ điều h&agrave;nh Android 8.0 Oreo mới cũng gi&uacute;p cho Galaxy J8 mượt m&agrave; v&agrave; ổn định hơn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-6.jpg" /></p>

<h2>&nbsp;</h2>

<h2><strong>Thời lượng pin xuất sắc</strong></h2>

<p>&nbsp;</p>

<p>Pin lu&ocirc;n l&agrave; điểm mạnh tr&ecirc;n những chiếc điện thoại Galaxy J v&agrave; kh&ocirc;ng c&oacute; g&igrave; ngạc nhi&ecirc;n khi Galaxy J8 c&oacute; thời lượng pin xuất sắc. Với dung lượng lớn 3500 mAh, con chip tiết kiệm điện v&agrave; cơ chế quản l&yacute; pin th&ocirc;ng minh, Galaxy J8 c&oacute; thể duyệt web tối đa trong 13 giờ qua 4G LTE, xem video li&ecirc;n tục trong 20 giờ, gọi thoại trong 23 giờ, những con số rất ấn tượng.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-2.jpg" /></p>',
                'tag' => 'Galaxy S8, Galaxy S8,Galaxy S8',
                'price' => '18490000.00',
                'status' => 1,
                'cat_id' => 14,
                'user_id' => 1,
                'created_at' => '2018-11-25 23:45:08',
                'updated_at' => '2018-11-28 23:04:05',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Galaxy NOTE 7',
                'slug' => 'galaxy-note-7',
            'intro' => 'Exynos 8890, 5.1 inch (1440 x 2560 pixels), Android 6.0 (Marshmallow)',
                'promo1' => 'Trả góp 0%',
                'promo2' => 'Hoặc Tặng Vali Lock & Lock ',
            'promo3' => 'Hoặc Tặng Combo Quà (Bao da S-View + Tai nghe Level Active)',
                'packet' => ' Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ',
                'images' => '1480005568_635918156798139185_s7-g2.jpg',
                'r_intro' => '<h2><strong>Camera k&eacute;p chinh phục b&oacute;ng tối, x&oacute;a ph&ocirc;ng nghệ thuật</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 chắc chắn l&agrave; chiếc điện thoại c&oacute; camera đ&aacute;ng gờm nhất trong ph&acirc;n kh&uacute;c, đặc biệt l&agrave; khả năng chụp đ&ecirc;m khi mang tr&ecirc;n m&igrave;nh cụm camera k&eacute;p th&ocirc;ng số v&ocirc; c&ugrave;ng chất lượng. Hai cảm biến camera sau 16MP f/1.7 + 5MP f/1.9 đều c&oacute; khẩu độ cực lớn, thu s&aacute;ng tốt trong cả những điều kiện khắc nghiệt, mang đến cho bạn những bức ảnh chụp đ&ecirc;m tuyệt vời.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-1.jpg" /></p>

<p>&nbsp;</p>

<p>Chụp ảnh x&oacute;a ph&ocirc;ng tr&ecirc;n Galaxy J8 được n&acirc;ng l&ecirc;n một tầm cao mới khi kh&ocirc;ng chỉ x&oacute;a ph&ocirc;ng ch&iacute;nh x&aacute;c, l&agrave;m nổi bật chủ thể m&agrave; bạn c&ograve;n c&oacute; th&ecirc;m cả c&aacute;c bộ lọc Bokeh, tạo những hiệu ứng x&oacute;a ph&ocirc;ng kh&aacute;c nhau đầy nghệ thuật. Ảnh chụp ch&acirc;n dung của bạn sẽ ấn tượng hơn bao giờ hết.</p>',
                'review' => '<h2><strong>Camera selfie x&oacute;a ph&ocirc;ng chủ động</strong></h2>

<p>Kh&ocirc;ng chỉ camera sau m&agrave; camera trước của Galaxy J8 cũng c&oacute; khả năng chụp selfie x&oacute;a ph&ocirc;ng. Camera n&agrave;y kh&ocirc;ng chỉ độ ph&acirc;n giải cao 16MP, khẩu độ lớn f/1.9 m&agrave; c&ograve;n c&oacute; cả đ&egrave;n flash LED trợ s&aacute;ng chuy&ecirc;n nghiệp với ba mức độ s&aacute;ng kh&aacute;c nhau. Bạn sẽ được thoải m&aacute;i selfie ngay cả trong điều kiện thiếu s&aacute;ng m&agrave; h&igrave;nh ảnh vẫn ho&agrave;n hảo với độ n&eacute;t cao, &iacute;t nhiễu v&agrave; ch&acirc;n thực. T&iacute;nh năng x&oacute;a ph&ocirc;ng chủ động mang đến c&aacute;c bức ảnh selfie x&oacute;a ph&ocirc;ng theo đ&uacute;ng &yacute; bạn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-3.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>M&agrave;n h&igrave;nh v&ocirc; cực sống động từng khung h&igrave;nh</strong></h2>

<p>&nbsp;</p>

<p>Samsung tiếp tục mang tinh hoa trong c&ocirc;ng nghệ m&agrave;n h&igrave;nh của họ l&ecirc;n Galaxy J8. Đ&oacute; l&agrave; m&agrave;n h&igrave;nh v&ocirc; cực Infinity Display c&ocirc;ng nghệ Super AMOLED cao cấp. Galaxy J8 sở hữu m&agrave;n h&igrave;nh lớn 6 inch HD+, tỉ lệ mới 18,5:9 chuẩn điện ảnh v&agrave; viền m&agrave;n h&igrave;nh cực mỏng. Bạn sẽ được tận hưởng từng khung h&igrave;nh giải tr&iacute; đỉnh cao, m&agrave;u sắc sống động rực rỡ.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-4.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Thiết kế c&aacute; t&iacute;nh, sắc m&agrave;u thời thượng</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 c&oacute; kiểu d&aacute;ng rất mềm mại để đồng nhất ho&agrave;n to&agrave;n với m&agrave;n h&igrave;nh v&ocirc; cực mặt trước. Bạn sẽ được cầm tr&ecirc;n tay một chiếc m&aacute;y liền lạc, bo cong hợp l&yacute; để cảm gi&aacute;c sử dụng thoải m&aacute;i nhất. Mặc d&ugrave; kiểu d&aacute;ng mượt m&agrave; nhưng Galaxy J8 vẫn rất chắc chắn nhờ lớp vỏ kim loại sang trọng. C&oacute; ba m&agrave;u sắc c&aacute; t&iacute;nh d&agrave;nh cho bạn l&agrave; T&iacute;m Sapphire, Đen Titan v&agrave; V&agrave;ng Thạch Anh.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-5.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Bảo mật an to&agrave;n v&agrave; th&ocirc;ng minh</strong></h2>

<p>&nbsp;</p>

<p>Camera trước Galaxy J8 được tối ưu để nhận diện khu&ocirc;n mặt th&ocirc;ng minh v&agrave; nhanh ch&oacute;ng. Chỉ cần đưa m&aacute;y l&ecirc;n l&agrave; chiếc J8 của bạn sẽ tự động mở kh&oacute;a. Ấn tượng hơn, đ&egrave;n flash LED d&agrave;nh cho camera trước sẽ ph&aacute;t huy t&aacute;c dụng để bạn nhận diện được trong cả trời tối. Trong khi đ&oacute; m&aacute;y qu&eacute;t v&acirc;n tay mặt sau cũng l&agrave; một phương thức bảo mật tiện dụng kh&aacute;c m&agrave; bạn c&oacute; thể thao t&aacute;c tiện lợi d&ugrave; cầm bằng bất cứ tay tr&aacute;i hay tay phải.</p>

<p>&nbsp;</p>

<h2><strong>Hiệu năng tốt trong tầm gi&aacute;</strong></h2>

<p>&nbsp;</p>

<p>Hiệu năng Samsung Galaxy J8 kh&aacute; ổn với bộ vi xử l&yacute; Snapdragon 450 t&aacute;m nh&acirc;n xung nhịp 1,8GHz đi c&ugrave;ng 3GB RAM v&agrave; 32GB bộ nhớ trong. Cấu h&igrave;nh n&agrave;y đủ sức để J8 chạy mượt trong hầu hết c&aacute;c t&aacute;c vụ. Ngo&agrave;i ra việc chạy tr&ecirc;n hệ điều h&agrave;nh Android 8.0 Oreo mới cũng gi&uacute;p cho Galaxy J8 mượt m&agrave; v&agrave; ổn định hơn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-6.jpg" /></p>

<h2>&nbsp;</h2>

<h2><strong>Thời lượng pin xuất sắc</strong></h2>

<p>&nbsp;</p>

<p>Pin lu&ocirc;n l&agrave; điểm mạnh tr&ecirc;n những chiếc điện thoại Galaxy J v&agrave; kh&ocirc;ng c&oacute; g&igrave; ngạc nhi&ecirc;n khi Galaxy J8 c&oacute; thời lượng pin xuất sắc. Với dung lượng lớn 3500 mAh, con chip tiết kiệm điện v&agrave; cơ chế quản l&yacute; pin th&ocirc;ng minh, Galaxy J8 c&oacute; thể duyệt web tối đa trong 13 giờ qua 4G LTE, xem video li&ecirc;n tục trong 20 giờ, gọi thoại trong 23 giờ, những con số rất ấn tượng.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-2.jpg" /></p>',
                'tag' => 'Galaxy S7, Galaxy S7,Galaxy S7',
                'price' => '15890000.00',
                'status' => 1,
                'cat_id' => 6,
                'user_id' => 1,
                'created_at' => '2018-11-24 09:39:28',
                'updated_at' => '2018-11-24 09:39:28',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Galaxy NOTE 7',
                'slug' => 'galaxy-note-7',
            'intro' => 'Exynos 8890, 5.1 inch (1440 x 2560 pixels), Android 6.0 (Marshmallow)',
                'promo1' => 'Trả góp 0%',
                'promo2' => 'Hoặc Tặng Vali Lock & Lock ',
            'promo3' => 'Hoặc Tặng Combo Quà (Bao da S-View + Tai nghe Level Active)',
                'packet' => ' Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ',
                'images' => '1480005568_635918156798139185_s7-g2.jpg',
                'r_intro' => '<h2><strong>Camera k&eacute;p chinh phục b&oacute;ng tối, x&oacute;a ph&ocirc;ng nghệ thuật</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 chắc chắn l&agrave; chiếc điện thoại c&oacute; camera đ&aacute;ng gờm nhất trong ph&acirc;n kh&uacute;c, đặc biệt l&agrave; khả năng chụp đ&ecirc;m khi mang tr&ecirc;n m&igrave;nh cụm camera k&eacute;p th&ocirc;ng số v&ocirc; c&ugrave;ng chất lượng. Hai cảm biến camera sau 16MP f/1.7 + 5MP f/1.9 đều c&oacute; khẩu độ cực lớn, thu s&aacute;ng tốt trong cả những điều kiện khắc nghiệt, mang đến cho bạn những bức ảnh chụp đ&ecirc;m tuyệt vời.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-1.jpg" /></p>

<p>&nbsp;</p>

<p>Chụp ảnh x&oacute;a ph&ocirc;ng tr&ecirc;n Galaxy J8 được n&acirc;ng l&ecirc;n một tầm cao mới khi kh&ocirc;ng chỉ x&oacute;a ph&ocirc;ng ch&iacute;nh x&aacute;c, l&agrave;m nổi bật chủ thể m&agrave; bạn c&ograve;n c&oacute; th&ecirc;m cả c&aacute;c bộ lọc Bokeh, tạo những hiệu ứng x&oacute;a ph&ocirc;ng kh&aacute;c nhau đầy nghệ thuật. Ảnh chụp ch&acirc;n dung của bạn sẽ ấn tượng hơn bao giờ hết.</p>',
                'review' => '<h2><strong>Camera selfie x&oacute;a ph&ocirc;ng chủ động</strong></h2>

<p>Kh&ocirc;ng chỉ camera sau m&agrave; camera trước của Galaxy J8 cũng c&oacute; khả năng chụp selfie x&oacute;a ph&ocirc;ng. Camera n&agrave;y kh&ocirc;ng chỉ độ ph&acirc;n giải cao 16MP, khẩu độ lớn f/1.9 m&agrave; c&ograve;n c&oacute; cả đ&egrave;n flash LED trợ s&aacute;ng chuy&ecirc;n nghiệp với ba mức độ s&aacute;ng kh&aacute;c nhau. Bạn sẽ được thoải m&aacute;i selfie ngay cả trong điều kiện thiếu s&aacute;ng m&agrave; h&igrave;nh ảnh vẫn ho&agrave;n hảo với độ n&eacute;t cao, &iacute;t nhiễu v&agrave; ch&acirc;n thực. T&iacute;nh năng x&oacute;a ph&ocirc;ng chủ động mang đến c&aacute;c bức ảnh selfie x&oacute;a ph&ocirc;ng theo đ&uacute;ng &yacute; bạn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-3.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>M&agrave;n h&igrave;nh v&ocirc; cực sống động từng khung h&igrave;nh</strong></h2>

<p>&nbsp;</p>

<p>Samsung tiếp tục mang tinh hoa trong c&ocirc;ng nghệ m&agrave;n h&igrave;nh của họ l&ecirc;n Galaxy J8. Đ&oacute; l&agrave; m&agrave;n h&igrave;nh v&ocirc; cực Infinity Display c&ocirc;ng nghệ Super AMOLED cao cấp. Galaxy J8 sở hữu m&agrave;n h&igrave;nh lớn 6 inch HD+, tỉ lệ mới 18,5:9 chuẩn điện ảnh v&agrave; viền m&agrave;n h&igrave;nh cực mỏng. Bạn sẽ được tận hưởng từng khung h&igrave;nh giải tr&iacute; đỉnh cao, m&agrave;u sắc sống động rực rỡ.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-4.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Thiết kế c&aacute; t&iacute;nh, sắc m&agrave;u thời thượng</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 c&oacute; kiểu d&aacute;ng rất mềm mại để đồng nhất ho&agrave;n to&agrave;n với m&agrave;n h&igrave;nh v&ocirc; cực mặt trước. Bạn sẽ được cầm tr&ecirc;n tay một chiếc m&aacute;y liền lạc, bo cong hợp l&yacute; để cảm gi&aacute;c sử dụng thoải m&aacute;i nhất. Mặc d&ugrave; kiểu d&aacute;ng mượt m&agrave; nhưng Galaxy J8 vẫn rất chắc chắn nhờ lớp vỏ kim loại sang trọng. C&oacute; ba m&agrave;u sắc c&aacute; t&iacute;nh d&agrave;nh cho bạn l&agrave; T&iacute;m Sapphire, Đen Titan v&agrave; V&agrave;ng Thạch Anh.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-5.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Bảo mật an to&agrave;n v&agrave; th&ocirc;ng minh</strong></h2>

<p>&nbsp;</p>

<p>Camera trước Galaxy J8 được tối ưu để nhận diện khu&ocirc;n mặt th&ocirc;ng minh v&agrave; nhanh ch&oacute;ng. Chỉ cần đưa m&aacute;y l&ecirc;n l&agrave; chiếc J8 của bạn sẽ tự động mở kh&oacute;a. Ấn tượng hơn, đ&egrave;n flash LED d&agrave;nh cho camera trước sẽ ph&aacute;t huy t&aacute;c dụng để bạn nhận diện được trong cả trời tối. Trong khi đ&oacute; m&aacute;y qu&eacute;t v&acirc;n tay mặt sau cũng l&agrave; một phương thức bảo mật tiện dụng kh&aacute;c m&agrave; bạn c&oacute; thể thao t&aacute;c tiện lợi d&ugrave; cầm bằng bất cứ tay tr&aacute;i hay tay phải.</p>

<p>&nbsp;</p>

<h2><strong>Hiệu năng tốt trong tầm gi&aacute;</strong></h2>

<p>&nbsp;</p>

<p>Hiệu năng Samsung Galaxy J8 kh&aacute; ổn với bộ vi xử l&yacute; Snapdragon 450 t&aacute;m nh&acirc;n xung nhịp 1,8GHz đi c&ugrave;ng 3GB RAM v&agrave; 32GB bộ nhớ trong. Cấu h&igrave;nh n&agrave;y đủ sức để J8 chạy mượt trong hầu hết c&aacute;c t&aacute;c vụ. Ngo&agrave;i ra việc chạy tr&ecirc;n hệ điều h&agrave;nh Android 8.0 Oreo mới cũng gi&uacute;p cho Galaxy J8 mượt m&agrave; v&agrave; ổn định hơn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-6.jpg" /></p>

<h2>&nbsp;</h2>

<h2><strong>Thời lượng pin xuất sắc</strong></h2>

<p>&nbsp;</p>

<p>Pin lu&ocirc;n l&agrave; điểm mạnh tr&ecirc;n những chiếc điện thoại Galaxy J v&agrave; kh&ocirc;ng c&oacute; g&igrave; ngạc nhi&ecirc;n khi Galaxy J8 c&oacute; thời lượng pin xuất sắc. Với dung lượng lớn 3500 mAh, con chip tiết kiệm điện v&agrave; cơ chế quản l&yacute; pin th&ocirc;ng minh, Galaxy J8 c&oacute; thể duyệt web tối đa trong 13 giờ qua 4G LTE, xem video li&ecirc;n tục trong 20 giờ, gọi thoại trong 23 giờ, những con số rất ấn tượng.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-2.jpg" /></p>',
                'tag' => 'Galaxy S7, Galaxy S7,Galaxy S7',
                'price' => '15890000.00',
                'status' => 1,
                'cat_id' => 6,
                'user_id' => 1,
                'created_at' => '2018-11-24 09:39:28',
                'updated_at' => '2018-11-24 09:39:28',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'OPPO F1S',
                'slug' => 'oppo-f1s',
            'intro' => 'Apple A10 mới, 2 cammera sau,Ram 3g, 5.5 inch (1920 x 1080 pixels)',
            'promo1' => 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):',
            'promo2' => 'Trả góp 0% (Chỉ áp dụng cho thẻ tín dụng) ',
                'promo3' => 'Tặng Voucher 500.000đ mua Apple Watch',
                'packet' => '',
                'images' => '1480650741_oppo-f1s-hero-400x460-400x460.png',
                'r_intro' => '<h2><strong>Camera k&eacute;p chinh phục b&oacute;ng tối, x&oacute;a ph&ocirc;ng nghệ thuật</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 chắc chắn l&agrave; chiếc điện thoại c&oacute; camera đ&aacute;ng gờm nhất trong ph&acirc;n kh&uacute;c, đặc biệt l&agrave; khả năng chụp đ&ecirc;m khi mang tr&ecirc;n m&igrave;nh cụm camera k&eacute;p th&ocirc;ng số v&ocirc; c&ugrave;ng chất lượng. Hai cảm biến camera sau 16MP f/1.7 + 5MP f/1.9 đều c&oacute; khẩu độ cực lớn, thu s&aacute;ng tốt trong cả những điều kiện khắc nghiệt, mang đến cho bạn những bức ảnh chụp đ&ecirc;m tuyệt vời.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-1.jpg" /></p>

<p>&nbsp;</p>

<p>Chụp ảnh x&oacute;a ph&ocirc;ng tr&ecirc;n Galaxy J8 được n&acirc;ng l&ecirc;n một tầm cao mới khi kh&ocirc;ng chỉ x&oacute;a ph&ocirc;ng ch&iacute;nh x&aacute;c, l&agrave;m nổi bật chủ thể m&agrave; bạn c&ograve;n c&oacute; th&ecirc;m cả c&aacute;c bộ lọc Bokeh, tạo những hiệu ứng x&oacute;a ph&ocirc;ng kh&aacute;c nhau đầy nghệ thuật. Ảnh chụp ch&acirc;n dung của bạn sẽ ấn tượng hơn bao giờ hết.</p>',
                'review' => '<h2><strong>Camera selfie x&oacute;a ph&ocirc;ng chủ động</strong></h2>

<p>Kh&ocirc;ng chỉ camera sau m&agrave; camera trước của Galaxy J8 cũng c&oacute; khả năng chụp selfie x&oacute;a ph&ocirc;ng. Camera n&agrave;y kh&ocirc;ng chỉ độ ph&acirc;n giải cao 16MP, khẩu độ lớn f/1.9 m&agrave; c&ograve;n c&oacute; cả đ&egrave;n flash LED trợ s&aacute;ng chuy&ecirc;n nghiệp với ba mức độ s&aacute;ng kh&aacute;c nhau. Bạn sẽ được thoải m&aacute;i selfie ngay cả trong điều kiện thiếu s&aacute;ng m&agrave; h&igrave;nh ảnh vẫn ho&agrave;n hảo với độ n&eacute;t cao, &iacute;t nhiễu v&agrave; ch&acirc;n thực. T&iacute;nh năng x&oacute;a ph&ocirc;ng chủ động mang đến c&aacute;c bức ảnh selfie x&oacute;a ph&ocirc;ng theo đ&uacute;ng &yacute; bạn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-3.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>M&agrave;n h&igrave;nh v&ocirc; cực sống động từng khung h&igrave;nh</strong></h2>

<p>&nbsp;</p>

<p>Samsung tiếp tục mang tinh hoa trong c&ocirc;ng nghệ m&agrave;n h&igrave;nh của họ l&ecirc;n Galaxy J8. Đ&oacute; l&agrave; m&agrave;n h&igrave;nh v&ocirc; cực Infinity Display c&ocirc;ng nghệ Super AMOLED cao cấp. Galaxy J8 sở hữu m&agrave;n h&igrave;nh lớn 6 inch HD+, tỉ lệ mới 18,5:9 chuẩn điện ảnh v&agrave; viền m&agrave;n h&igrave;nh cực mỏng. Bạn sẽ được tận hưởng từng khung h&igrave;nh giải tr&iacute; đỉnh cao, m&agrave;u sắc sống động rực rỡ.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-4.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Thiết kế c&aacute; t&iacute;nh, sắc m&agrave;u thời thượng</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 c&oacute; kiểu d&aacute;ng rất mềm mại để đồng nhất ho&agrave;n to&agrave;n với m&agrave;n h&igrave;nh v&ocirc; cực mặt trước. Bạn sẽ được cầm tr&ecirc;n tay một chiếc m&aacute;y liền lạc, bo cong hợp l&yacute; để cảm gi&aacute;c sử dụng thoải m&aacute;i nhất. Mặc d&ugrave; kiểu d&aacute;ng mượt m&agrave; nhưng Galaxy J8 vẫn rất chắc chắn nhờ lớp vỏ kim loại sang trọng. C&oacute; ba m&agrave;u sắc c&aacute; t&iacute;nh d&agrave;nh cho bạn l&agrave; T&iacute;m Sapphire, Đen Titan v&agrave; V&agrave;ng Thạch Anh.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-5.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Bảo mật an to&agrave;n v&agrave; th&ocirc;ng minh</strong></h2>

<p>&nbsp;</p>

<p>Camera trước Galaxy J8 được tối ưu để nhận diện khu&ocirc;n mặt th&ocirc;ng minh v&agrave; nhanh ch&oacute;ng. Chỉ cần đưa m&aacute;y l&ecirc;n l&agrave; chiếc J8 của bạn sẽ tự động mở kh&oacute;a. Ấn tượng hơn, đ&egrave;n flash LED d&agrave;nh cho camera trước sẽ ph&aacute;t huy t&aacute;c dụng để bạn nhận diện được trong cả trời tối. Trong khi đ&oacute; m&aacute;y qu&eacute;t v&acirc;n tay mặt sau cũng l&agrave; một phương thức bảo mật tiện dụng kh&aacute;c m&agrave; bạn c&oacute; thể thao t&aacute;c tiện lợi d&ugrave; cầm bằng bất cứ tay tr&aacute;i hay tay phải.</p>

<p>&nbsp;</p>

<h2><strong>Hiệu năng tốt trong tầm gi&aacute;</strong></h2>

<p>&nbsp;</p>

<p>Hiệu năng Samsung Galaxy J8 kh&aacute; ổn với bộ vi xử l&yacute; Snapdragon 450 t&aacute;m nh&acirc;n xung nhịp 1,8GHz đi c&ugrave;ng 3GB RAM v&agrave; 32GB bộ nhớ trong. Cấu h&igrave;nh n&agrave;y đủ sức để J8 chạy mượt trong hầu hết c&aacute;c t&aacute;c vụ. Ngo&agrave;i ra việc chạy tr&ecirc;n hệ điều h&agrave;nh Android 8.0 Oreo mới cũng gi&uacute;p cho Galaxy J8 mượt m&agrave; v&agrave; ổn định hơn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-6.jpg" /></p>

<h2>&nbsp;</h2>

<h2><strong>Thời lượng pin xuất sắc</strong></h2>

<p>&nbsp;</p>

<p>Pin lu&ocirc;n l&agrave; điểm mạnh tr&ecirc;n những chiếc điện thoại Galaxy J v&agrave; kh&ocirc;ng c&oacute; g&igrave; ngạc nhi&ecirc;n khi Galaxy J8 c&oacute; thời lượng pin xuất sắc. Với dung lượng lớn 3500 mAh, con chip tiết kiệm điện v&agrave; cơ chế quản l&yacute; pin th&ocirc;ng minh, Galaxy J8 c&oacute; thể duyệt web tối đa trong 13 giờ qua 4G LTE, xem video li&ecirc;n tục trong 20 giờ, gọi thoại trong 23 giờ, những con số rất ấn tượng.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-2.jpg" /></p>',
                'tag' => 'Ipple',
                'price' => '5990000.00',
                'status' => 1,
                'cat_id' => 8,
                'user_id' => 1,
                'created_at' => '2018-11-24 18:48:39',
                'updated_at' => '2018-12-01 20:52:21',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'OPPO F1S',
                'slug' => 'oppo-f1s',
            'intro' => 'Apple A10 mới, 2 cammera sau,Ram 3g, 5.5 inch (1920 x 1080 pixels)',
            'promo1' => 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):',
            'promo2' => 'Trả góp 0% (Chỉ áp dụng cho thẻ tín dụng) ',
                'promo3' => 'Tặng Voucher 500.000đ mua Apple Watch',
                'packet' => '',
                'images' => '1480650741_oppo-f1s-hero-400x460-400x460.png',
                'r_intro' => '<h2><strong>Camera k&eacute;p chinh phục b&oacute;ng tối, x&oacute;a ph&ocirc;ng nghệ thuật</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 chắc chắn l&agrave; chiếc điện thoại c&oacute; camera đ&aacute;ng gờm nhất trong ph&acirc;n kh&uacute;c, đặc biệt l&agrave; khả năng chụp đ&ecirc;m khi mang tr&ecirc;n m&igrave;nh cụm camera k&eacute;p th&ocirc;ng số v&ocirc; c&ugrave;ng chất lượng. Hai cảm biến camera sau 16MP f/1.7 + 5MP f/1.9 đều c&oacute; khẩu độ cực lớn, thu s&aacute;ng tốt trong cả những điều kiện khắc nghiệt, mang đến cho bạn những bức ảnh chụp đ&ecirc;m tuyệt vời.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-1.jpg" /></p>

<p>&nbsp;</p>

<p>Chụp ảnh x&oacute;a ph&ocirc;ng tr&ecirc;n Galaxy J8 được n&acirc;ng l&ecirc;n một tầm cao mới khi kh&ocirc;ng chỉ x&oacute;a ph&ocirc;ng ch&iacute;nh x&aacute;c, l&agrave;m nổi bật chủ thể m&agrave; bạn c&ograve;n c&oacute; th&ecirc;m cả c&aacute;c bộ lọc Bokeh, tạo những hiệu ứng x&oacute;a ph&ocirc;ng kh&aacute;c nhau đầy nghệ thuật. Ảnh chụp ch&acirc;n dung của bạn sẽ ấn tượng hơn bao giờ hết.</p>',
                'review' => '<h2><strong>Camera selfie x&oacute;a ph&ocirc;ng chủ động</strong></h2>

<p>Kh&ocirc;ng chỉ camera sau m&agrave; camera trước của Galaxy J8 cũng c&oacute; khả năng chụp selfie x&oacute;a ph&ocirc;ng. Camera n&agrave;y kh&ocirc;ng chỉ độ ph&acirc;n giải cao 16MP, khẩu độ lớn f/1.9 m&agrave; c&ograve;n c&oacute; cả đ&egrave;n flash LED trợ s&aacute;ng chuy&ecirc;n nghiệp với ba mức độ s&aacute;ng kh&aacute;c nhau. Bạn sẽ được thoải m&aacute;i selfie ngay cả trong điều kiện thiếu s&aacute;ng m&agrave; h&igrave;nh ảnh vẫn ho&agrave;n hảo với độ n&eacute;t cao, &iacute;t nhiễu v&agrave; ch&acirc;n thực. T&iacute;nh năng x&oacute;a ph&ocirc;ng chủ động mang đến c&aacute;c bức ảnh selfie x&oacute;a ph&ocirc;ng theo đ&uacute;ng &yacute; bạn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-3.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>M&agrave;n h&igrave;nh v&ocirc; cực sống động từng khung h&igrave;nh</strong></h2>

<p>&nbsp;</p>

<p>Samsung tiếp tục mang tinh hoa trong c&ocirc;ng nghệ m&agrave;n h&igrave;nh của họ l&ecirc;n Galaxy J8. Đ&oacute; l&agrave; m&agrave;n h&igrave;nh v&ocirc; cực Infinity Display c&ocirc;ng nghệ Super AMOLED cao cấp. Galaxy J8 sở hữu m&agrave;n h&igrave;nh lớn 6 inch HD+, tỉ lệ mới 18,5:9 chuẩn điện ảnh v&agrave; viền m&agrave;n h&igrave;nh cực mỏng. Bạn sẽ được tận hưởng từng khung h&igrave;nh giải tr&iacute; đỉnh cao, m&agrave;u sắc sống động rực rỡ.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-4.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Thiết kế c&aacute; t&iacute;nh, sắc m&agrave;u thời thượng</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 c&oacute; kiểu d&aacute;ng rất mềm mại để đồng nhất ho&agrave;n to&agrave;n với m&agrave;n h&igrave;nh v&ocirc; cực mặt trước. Bạn sẽ được cầm tr&ecirc;n tay một chiếc m&aacute;y liền lạc, bo cong hợp l&yacute; để cảm gi&aacute;c sử dụng thoải m&aacute;i nhất. Mặc d&ugrave; kiểu d&aacute;ng mượt m&agrave; nhưng Galaxy J8 vẫn rất chắc chắn nhờ lớp vỏ kim loại sang trọng. C&oacute; ba m&agrave;u sắc c&aacute; t&iacute;nh d&agrave;nh cho bạn l&agrave; T&iacute;m Sapphire, Đen Titan v&agrave; V&agrave;ng Thạch Anh.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-5.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Bảo mật an to&agrave;n v&agrave; th&ocirc;ng minh</strong></h2>

<p>&nbsp;</p>

<p>Camera trước Galaxy J8 được tối ưu để nhận diện khu&ocirc;n mặt th&ocirc;ng minh v&agrave; nhanh ch&oacute;ng. Chỉ cần đưa m&aacute;y l&ecirc;n l&agrave; chiếc J8 của bạn sẽ tự động mở kh&oacute;a. Ấn tượng hơn, đ&egrave;n flash LED d&agrave;nh cho camera trước sẽ ph&aacute;t huy t&aacute;c dụng để bạn nhận diện được trong cả trời tối. Trong khi đ&oacute; m&aacute;y qu&eacute;t v&acirc;n tay mặt sau cũng l&agrave; một phương thức bảo mật tiện dụng kh&aacute;c m&agrave; bạn c&oacute; thể thao t&aacute;c tiện lợi d&ugrave; cầm bằng bất cứ tay tr&aacute;i hay tay phải.</p>

<p>&nbsp;</p>

<h2><strong>Hiệu năng tốt trong tầm gi&aacute;</strong></h2>

<p>&nbsp;</p>

<p>Hiệu năng Samsung Galaxy J8 kh&aacute; ổn với bộ vi xử l&yacute; Snapdragon 450 t&aacute;m nh&acirc;n xung nhịp 1,8GHz đi c&ugrave;ng 3GB RAM v&agrave; 32GB bộ nhớ trong. Cấu h&igrave;nh n&agrave;y đủ sức để J8 chạy mượt trong hầu hết c&aacute;c t&aacute;c vụ. Ngo&agrave;i ra việc chạy tr&ecirc;n hệ điều h&agrave;nh Android 8.0 Oreo mới cũng gi&uacute;p cho Galaxy J8 mượt m&agrave; v&agrave; ổn định hơn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-6.jpg" /></p>

<h2>&nbsp;</h2>

<h2><strong>Thời lượng pin xuất sắc</strong></h2>

<p>&nbsp;</p>

<p>Pin lu&ocirc;n l&agrave; điểm mạnh tr&ecirc;n những chiếc điện thoại Galaxy J v&agrave; kh&ocirc;ng c&oacute; g&igrave; ngạc nhi&ecirc;n khi Galaxy J8 c&oacute; thời lượng pin xuất sắc. Với dung lượng lớn 3500 mAh, con chip tiết kiệm điện v&agrave; cơ chế quản l&yacute; pin th&ocirc;ng minh, Galaxy J8 c&oacute; thể duyệt web tối đa trong 13 giờ qua 4G LTE, xem video li&ecirc;n tục trong 20 giờ, gọi thoại trong 23 giờ, những con số rất ấn tượng.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-2.jpg" /></p>',
                'tag' => 'Ipple',
                'price' => '5990000.00',
                'status' => 1,
                'cat_id' => 8,
                'user_id' => 1,
                'created_at' => '2018-11-24 18:48:39',
                'updated_at' => '2018-12-01 20:52:21',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'OPPO F1S',
                'slug' => 'oppo-f1s',
            'intro' => 'Apple A10 mới, 2 cammera sau,Ram 3g, 5.5 inch (1920 x 1080 pixels)',
            'promo1' => 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):',
            'promo2' => 'Trả góp 0% (Chỉ áp dụng cho thẻ tín dụng) ',
                'promo3' => 'Tặng Voucher 500.000đ mua Apple Watch',
                'packet' => '',
                'images' => '1480650741_oppo-f1s-hero-400x460-400x460.png',
                'r_intro' => '<h2><strong>Camera k&eacute;p chinh phục b&oacute;ng tối, x&oacute;a ph&ocirc;ng nghệ thuật</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 chắc chắn l&agrave; chiếc điện thoại c&oacute; camera đ&aacute;ng gờm nhất trong ph&acirc;n kh&uacute;c, đặc biệt l&agrave; khả năng chụp đ&ecirc;m khi mang tr&ecirc;n m&igrave;nh cụm camera k&eacute;p th&ocirc;ng số v&ocirc; c&ugrave;ng chất lượng. Hai cảm biến camera sau 16MP f/1.7 + 5MP f/1.9 đều c&oacute; khẩu độ cực lớn, thu s&aacute;ng tốt trong cả những điều kiện khắc nghiệt, mang đến cho bạn những bức ảnh chụp đ&ecirc;m tuyệt vời.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-1.jpg" /></p>

<p>&nbsp;</p>

<p>Chụp ảnh x&oacute;a ph&ocirc;ng tr&ecirc;n Galaxy J8 được n&acirc;ng l&ecirc;n một tầm cao mới khi kh&ocirc;ng chỉ x&oacute;a ph&ocirc;ng ch&iacute;nh x&aacute;c, l&agrave;m nổi bật chủ thể m&agrave; bạn c&ograve;n c&oacute; th&ecirc;m cả c&aacute;c bộ lọc Bokeh, tạo những hiệu ứng x&oacute;a ph&ocirc;ng kh&aacute;c nhau đầy nghệ thuật. Ảnh chụp ch&acirc;n dung của bạn sẽ ấn tượng hơn bao giờ hết.</p>',
                'review' => '<h2><strong>Camera selfie x&oacute;a ph&ocirc;ng chủ động</strong></h2>

<p>Kh&ocirc;ng chỉ camera sau m&agrave; camera trước của Galaxy J8 cũng c&oacute; khả năng chụp selfie x&oacute;a ph&ocirc;ng. Camera n&agrave;y kh&ocirc;ng chỉ độ ph&acirc;n giải cao 16MP, khẩu độ lớn f/1.9 m&agrave; c&ograve;n c&oacute; cả đ&egrave;n flash LED trợ s&aacute;ng chuy&ecirc;n nghiệp với ba mức độ s&aacute;ng kh&aacute;c nhau. Bạn sẽ được thoải m&aacute;i selfie ngay cả trong điều kiện thiếu s&aacute;ng m&agrave; h&igrave;nh ảnh vẫn ho&agrave;n hảo với độ n&eacute;t cao, &iacute;t nhiễu v&agrave; ch&acirc;n thực. T&iacute;nh năng x&oacute;a ph&ocirc;ng chủ động mang đến c&aacute;c bức ảnh selfie x&oacute;a ph&ocirc;ng theo đ&uacute;ng &yacute; bạn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-3.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>M&agrave;n h&igrave;nh v&ocirc; cực sống động từng khung h&igrave;nh</strong></h2>

<p>&nbsp;</p>

<p>Samsung tiếp tục mang tinh hoa trong c&ocirc;ng nghệ m&agrave;n h&igrave;nh của họ l&ecirc;n Galaxy J8. Đ&oacute; l&agrave; m&agrave;n h&igrave;nh v&ocirc; cực Infinity Display c&ocirc;ng nghệ Super AMOLED cao cấp. Galaxy J8 sở hữu m&agrave;n h&igrave;nh lớn 6 inch HD+, tỉ lệ mới 18,5:9 chuẩn điện ảnh v&agrave; viền m&agrave;n h&igrave;nh cực mỏng. Bạn sẽ được tận hưởng từng khung h&igrave;nh giải tr&iacute; đỉnh cao, m&agrave;u sắc sống động rực rỡ.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-4.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Thiết kế c&aacute; t&iacute;nh, sắc m&agrave;u thời thượng</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 c&oacute; kiểu d&aacute;ng rất mềm mại để đồng nhất ho&agrave;n to&agrave;n với m&agrave;n h&igrave;nh v&ocirc; cực mặt trước. Bạn sẽ được cầm tr&ecirc;n tay một chiếc m&aacute;y liền lạc, bo cong hợp l&yacute; để cảm gi&aacute;c sử dụng thoải m&aacute;i nhất. Mặc d&ugrave; kiểu d&aacute;ng mượt m&agrave; nhưng Galaxy J8 vẫn rất chắc chắn nhờ lớp vỏ kim loại sang trọng. C&oacute; ba m&agrave;u sắc c&aacute; t&iacute;nh d&agrave;nh cho bạn l&agrave; T&iacute;m Sapphire, Đen Titan v&agrave; V&agrave;ng Thạch Anh.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-5.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Bảo mật an to&agrave;n v&agrave; th&ocirc;ng minh</strong></h2>

<p>&nbsp;</p>

<p>Camera trước Galaxy J8 được tối ưu để nhận diện khu&ocirc;n mặt th&ocirc;ng minh v&agrave; nhanh ch&oacute;ng. Chỉ cần đưa m&aacute;y l&ecirc;n l&agrave; chiếc J8 của bạn sẽ tự động mở kh&oacute;a. Ấn tượng hơn, đ&egrave;n flash LED d&agrave;nh cho camera trước sẽ ph&aacute;t huy t&aacute;c dụng để bạn nhận diện được trong cả trời tối. Trong khi đ&oacute; m&aacute;y qu&eacute;t v&acirc;n tay mặt sau cũng l&agrave; một phương thức bảo mật tiện dụng kh&aacute;c m&agrave; bạn c&oacute; thể thao t&aacute;c tiện lợi d&ugrave; cầm bằng bất cứ tay tr&aacute;i hay tay phải.</p>

<p>&nbsp;</p>

<h2><strong>Hiệu năng tốt trong tầm gi&aacute;</strong></h2>

<p>&nbsp;</p>

<p>Hiệu năng Samsung Galaxy J8 kh&aacute; ổn với bộ vi xử l&yacute; Snapdragon 450 t&aacute;m nh&acirc;n xung nhịp 1,8GHz đi c&ugrave;ng 3GB RAM v&agrave; 32GB bộ nhớ trong. Cấu h&igrave;nh n&agrave;y đủ sức để J8 chạy mượt trong hầu hết c&aacute;c t&aacute;c vụ. Ngo&agrave;i ra việc chạy tr&ecirc;n hệ điều h&agrave;nh Android 8.0 Oreo mới cũng gi&uacute;p cho Galaxy J8 mượt m&agrave; v&agrave; ổn định hơn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-6.jpg" /></p>

<h2>&nbsp;</h2>

<h2><strong>Thời lượng pin xuất sắc</strong></h2>

<p>&nbsp;</p>

<p>Pin lu&ocirc;n l&agrave; điểm mạnh tr&ecirc;n những chiếc điện thoại Galaxy J v&agrave; kh&ocirc;ng c&oacute; g&igrave; ngạc nhi&ecirc;n khi Galaxy J8 c&oacute; thời lượng pin xuất sắc. Với dung lượng lớn 3500 mAh, con chip tiết kiệm điện v&agrave; cơ chế quản l&yacute; pin th&ocirc;ng minh, Galaxy J8 c&oacute; thể duyệt web tối đa trong 13 giờ qua 4G LTE, xem video li&ecirc;n tục trong 20 giờ, gọi thoại trong 23 giờ, những con số rất ấn tượng.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-2.jpg" /></p>',
                'tag' => 'Ipple',
                'price' => '5990000.00',
                'status' => 1,
                'cat_id' => 8,
                'user_id' => 1,
                'created_at' => '2018-11-24 18:48:39',
                'updated_at' => '2018-12-01 20:52:21',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'OPPO F1S',
                'slug' => 'oppo-f1s',
            'intro' => 'Apple A10 mới, 2 cammera sau,Ram 3g, 5.5 inch (1920 x 1080 pixels)',
            'promo1' => 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):',
            'promo2' => 'Trả góp 0% (Chỉ áp dụng cho thẻ tín dụng) ',
                'promo3' => 'Tặng Voucher 500.000đ mua Apple Watch',
                'packet' => '',
                'images' => '1480650741_oppo-f1s-hero-400x460-400x460.png',
                'r_intro' => '<h2><strong>Camera k&eacute;p chinh phục b&oacute;ng tối, x&oacute;a ph&ocirc;ng nghệ thuật</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 chắc chắn l&agrave; chiếc điện thoại c&oacute; camera đ&aacute;ng gờm nhất trong ph&acirc;n kh&uacute;c, đặc biệt l&agrave; khả năng chụp đ&ecirc;m khi mang tr&ecirc;n m&igrave;nh cụm camera k&eacute;p th&ocirc;ng số v&ocirc; c&ugrave;ng chất lượng. Hai cảm biến camera sau 16MP f/1.7 + 5MP f/1.9 đều c&oacute; khẩu độ cực lớn, thu s&aacute;ng tốt trong cả những điều kiện khắc nghiệt, mang đến cho bạn những bức ảnh chụp đ&ecirc;m tuyệt vời.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-1.jpg" /></p>

<p>&nbsp;</p>

<p>Chụp ảnh x&oacute;a ph&ocirc;ng tr&ecirc;n Galaxy J8 được n&acirc;ng l&ecirc;n một tầm cao mới khi kh&ocirc;ng chỉ x&oacute;a ph&ocirc;ng ch&iacute;nh x&aacute;c, l&agrave;m nổi bật chủ thể m&agrave; bạn c&ograve;n c&oacute; th&ecirc;m cả c&aacute;c bộ lọc Bokeh, tạo những hiệu ứng x&oacute;a ph&ocirc;ng kh&aacute;c nhau đầy nghệ thuật. Ảnh chụp ch&acirc;n dung của bạn sẽ ấn tượng hơn bao giờ hết.</p>',
                'review' => '<h2><strong>Camera selfie x&oacute;a ph&ocirc;ng chủ động</strong></h2>

<p>Kh&ocirc;ng chỉ camera sau m&agrave; camera trước của Galaxy J8 cũng c&oacute; khả năng chụp selfie x&oacute;a ph&ocirc;ng. Camera n&agrave;y kh&ocirc;ng chỉ độ ph&acirc;n giải cao 16MP, khẩu độ lớn f/1.9 m&agrave; c&ograve;n c&oacute; cả đ&egrave;n flash LED trợ s&aacute;ng chuy&ecirc;n nghiệp với ba mức độ s&aacute;ng kh&aacute;c nhau. Bạn sẽ được thoải m&aacute;i selfie ngay cả trong điều kiện thiếu s&aacute;ng m&agrave; h&igrave;nh ảnh vẫn ho&agrave;n hảo với độ n&eacute;t cao, &iacute;t nhiễu v&agrave; ch&acirc;n thực. T&iacute;nh năng x&oacute;a ph&ocirc;ng chủ động mang đến c&aacute;c bức ảnh selfie x&oacute;a ph&ocirc;ng theo đ&uacute;ng &yacute; bạn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-3.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>M&agrave;n h&igrave;nh v&ocirc; cực sống động từng khung h&igrave;nh</strong></h2>

<p>&nbsp;</p>

<p>Samsung tiếp tục mang tinh hoa trong c&ocirc;ng nghệ m&agrave;n h&igrave;nh của họ l&ecirc;n Galaxy J8. Đ&oacute; l&agrave; m&agrave;n h&igrave;nh v&ocirc; cực Infinity Display c&ocirc;ng nghệ Super AMOLED cao cấp. Galaxy J8 sở hữu m&agrave;n h&igrave;nh lớn 6 inch HD+, tỉ lệ mới 18,5:9 chuẩn điện ảnh v&agrave; viền m&agrave;n h&igrave;nh cực mỏng. Bạn sẽ được tận hưởng từng khung h&igrave;nh giải tr&iacute; đỉnh cao, m&agrave;u sắc sống động rực rỡ.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-4.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Thiết kế c&aacute; t&iacute;nh, sắc m&agrave;u thời thượng</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 c&oacute; kiểu d&aacute;ng rất mềm mại để đồng nhất ho&agrave;n to&agrave;n với m&agrave;n h&igrave;nh v&ocirc; cực mặt trước. Bạn sẽ được cầm tr&ecirc;n tay một chiếc m&aacute;y liền lạc, bo cong hợp l&yacute; để cảm gi&aacute;c sử dụng thoải m&aacute;i nhất. Mặc d&ugrave; kiểu d&aacute;ng mượt m&agrave; nhưng Galaxy J8 vẫn rất chắc chắn nhờ lớp vỏ kim loại sang trọng. C&oacute; ba m&agrave;u sắc c&aacute; t&iacute;nh d&agrave;nh cho bạn l&agrave; T&iacute;m Sapphire, Đen Titan v&agrave; V&agrave;ng Thạch Anh.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-5.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Bảo mật an to&agrave;n v&agrave; th&ocirc;ng minh</strong></h2>

<p>&nbsp;</p>

<p>Camera trước Galaxy J8 được tối ưu để nhận diện khu&ocirc;n mặt th&ocirc;ng minh v&agrave; nhanh ch&oacute;ng. Chỉ cần đưa m&aacute;y l&ecirc;n l&agrave; chiếc J8 của bạn sẽ tự động mở kh&oacute;a. Ấn tượng hơn, đ&egrave;n flash LED d&agrave;nh cho camera trước sẽ ph&aacute;t huy t&aacute;c dụng để bạn nhận diện được trong cả trời tối. Trong khi đ&oacute; m&aacute;y qu&eacute;t v&acirc;n tay mặt sau cũng l&agrave; một phương thức bảo mật tiện dụng kh&aacute;c m&agrave; bạn c&oacute; thể thao t&aacute;c tiện lợi d&ugrave; cầm bằng bất cứ tay tr&aacute;i hay tay phải.</p>

<p>&nbsp;</p>

<h2><strong>Hiệu năng tốt trong tầm gi&aacute;</strong></h2>

<p>&nbsp;</p>

<p>Hiệu năng Samsung Galaxy J8 kh&aacute; ổn với bộ vi xử l&yacute; Snapdragon 450 t&aacute;m nh&acirc;n xung nhịp 1,8GHz đi c&ugrave;ng 3GB RAM v&agrave; 32GB bộ nhớ trong. Cấu h&igrave;nh n&agrave;y đủ sức để J8 chạy mượt trong hầu hết c&aacute;c t&aacute;c vụ. Ngo&agrave;i ra việc chạy tr&ecirc;n hệ điều h&agrave;nh Android 8.0 Oreo mới cũng gi&uacute;p cho Galaxy J8 mượt m&agrave; v&agrave; ổn định hơn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-6.jpg" /></p>

<h2>&nbsp;</h2>

<h2><strong>Thời lượng pin xuất sắc</strong></h2>

<p>&nbsp;</p>

<p>Pin lu&ocirc;n l&agrave; điểm mạnh tr&ecirc;n những chiếc điện thoại Galaxy J v&agrave; kh&ocirc;ng c&oacute; g&igrave; ngạc nhi&ecirc;n khi Galaxy J8 c&oacute; thời lượng pin xuất sắc. Với dung lượng lớn 3500 mAh, con chip tiết kiệm điện v&agrave; cơ chế quản l&yacute; pin th&ocirc;ng minh, Galaxy J8 c&oacute; thể duyệt web tối đa trong 13 giờ qua 4G LTE, xem video li&ecirc;n tục trong 20 giờ, gọi thoại trong 23 giờ, những con số rất ấn tượng.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-2.jpg" /></p>',
                'tag' => 'Ipple',
                'price' => '5990000.00',
                'status' => 1,
                'cat_id' => 8,
                'user_id' => 1,
                'created_at' => '2018-11-24 18:48:39',
                'updated_at' => '2018-12-01 20:52:21',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'OPPO F1S',
                'slug' => 'oppo-f1s',
            'intro' => 'Apple A10 mới, 2 cammera sau,Ram 3g, 5.5 inch (1920 x 1080 pixels)',
            'promo1' => 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):',
            'promo2' => 'Trả góp 0% (Chỉ áp dụng cho thẻ tín dụng) ',
                'promo3' => 'Tặng Voucher 500.000đ mua Apple Watch',
                'packet' => '',
                'images' => '1480650741_oppo-f1s-hero-400x460-400x460.png',
                'r_intro' => '<h2><strong>Camera k&eacute;p chinh phục b&oacute;ng tối, x&oacute;a ph&ocirc;ng nghệ thuật</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 chắc chắn l&agrave; chiếc điện thoại c&oacute; camera đ&aacute;ng gờm nhất trong ph&acirc;n kh&uacute;c, đặc biệt l&agrave; khả năng chụp đ&ecirc;m khi mang tr&ecirc;n m&igrave;nh cụm camera k&eacute;p th&ocirc;ng số v&ocirc; c&ugrave;ng chất lượng. Hai cảm biến camera sau 16MP f/1.7 + 5MP f/1.9 đều c&oacute; khẩu độ cực lớn, thu s&aacute;ng tốt trong cả những điều kiện khắc nghiệt, mang đến cho bạn những bức ảnh chụp đ&ecirc;m tuyệt vời.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-1.jpg" /></p>

<p>&nbsp;</p>

<p>Chụp ảnh x&oacute;a ph&ocirc;ng tr&ecirc;n Galaxy J8 được n&acirc;ng l&ecirc;n một tầm cao mới khi kh&ocirc;ng chỉ x&oacute;a ph&ocirc;ng ch&iacute;nh x&aacute;c, l&agrave;m nổi bật chủ thể m&agrave; bạn c&ograve;n c&oacute; th&ecirc;m cả c&aacute;c bộ lọc Bokeh, tạo những hiệu ứng x&oacute;a ph&ocirc;ng kh&aacute;c nhau đầy nghệ thuật. Ảnh chụp ch&acirc;n dung của bạn sẽ ấn tượng hơn bao giờ hết.</p>',
                'review' => '<h2><strong>Camera selfie x&oacute;a ph&ocirc;ng chủ động</strong></h2>

<p>Kh&ocirc;ng chỉ camera sau m&agrave; camera trước của Galaxy J8 cũng c&oacute; khả năng chụp selfie x&oacute;a ph&ocirc;ng. Camera n&agrave;y kh&ocirc;ng chỉ độ ph&acirc;n giải cao 16MP, khẩu độ lớn f/1.9 m&agrave; c&ograve;n c&oacute; cả đ&egrave;n flash LED trợ s&aacute;ng chuy&ecirc;n nghiệp với ba mức độ s&aacute;ng kh&aacute;c nhau. Bạn sẽ được thoải m&aacute;i selfie ngay cả trong điều kiện thiếu s&aacute;ng m&agrave; h&igrave;nh ảnh vẫn ho&agrave;n hảo với độ n&eacute;t cao, &iacute;t nhiễu v&agrave; ch&acirc;n thực. T&iacute;nh năng x&oacute;a ph&ocirc;ng chủ động mang đến c&aacute;c bức ảnh selfie x&oacute;a ph&ocirc;ng theo đ&uacute;ng &yacute; bạn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-3.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>M&agrave;n h&igrave;nh v&ocirc; cực sống động từng khung h&igrave;nh</strong></h2>

<p>&nbsp;</p>

<p>Samsung tiếp tục mang tinh hoa trong c&ocirc;ng nghệ m&agrave;n h&igrave;nh của họ l&ecirc;n Galaxy J8. Đ&oacute; l&agrave; m&agrave;n h&igrave;nh v&ocirc; cực Infinity Display c&ocirc;ng nghệ Super AMOLED cao cấp. Galaxy J8 sở hữu m&agrave;n h&igrave;nh lớn 6 inch HD+, tỉ lệ mới 18,5:9 chuẩn điện ảnh v&agrave; viền m&agrave;n h&igrave;nh cực mỏng. Bạn sẽ được tận hưởng từng khung h&igrave;nh giải tr&iacute; đỉnh cao, m&agrave;u sắc sống động rực rỡ.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-4.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Thiết kế c&aacute; t&iacute;nh, sắc m&agrave;u thời thượng</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 c&oacute; kiểu d&aacute;ng rất mềm mại để đồng nhất ho&agrave;n to&agrave;n với m&agrave;n h&igrave;nh v&ocirc; cực mặt trước. Bạn sẽ được cầm tr&ecirc;n tay một chiếc m&aacute;y liền lạc, bo cong hợp l&yacute; để cảm gi&aacute;c sử dụng thoải m&aacute;i nhất. Mặc d&ugrave; kiểu d&aacute;ng mượt m&agrave; nhưng Galaxy J8 vẫn rất chắc chắn nhờ lớp vỏ kim loại sang trọng. C&oacute; ba m&agrave;u sắc c&aacute; t&iacute;nh d&agrave;nh cho bạn l&agrave; T&iacute;m Sapphire, Đen Titan v&agrave; V&agrave;ng Thạch Anh.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-5.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Bảo mật an to&agrave;n v&agrave; th&ocirc;ng minh</strong></h2>

<p>&nbsp;</p>

<p>Camera trước Galaxy J8 được tối ưu để nhận diện khu&ocirc;n mặt th&ocirc;ng minh v&agrave; nhanh ch&oacute;ng. Chỉ cần đưa m&aacute;y l&ecirc;n l&agrave; chiếc J8 của bạn sẽ tự động mở kh&oacute;a. Ấn tượng hơn, đ&egrave;n flash LED d&agrave;nh cho camera trước sẽ ph&aacute;t huy t&aacute;c dụng để bạn nhận diện được trong cả trời tối. Trong khi đ&oacute; m&aacute;y qu&eacute;t v&acirc;n tay mặt sau cũng l&agrave; một phương thức bảo mật tiện dụng kh&aacute;c m&agrave; bạn c&oacute; thể thao t&aacute;c tiện lợi d&ugrave; cầm bằng bất cứ tay tr&aacute;i hay tay phải.</p>

<p>&nbsp;</p>

<h2><strong>Hiệu năng tốt trong tầm gi&aacute;</strong></h2>

<p>&nbsp;</p>

<p>Hiệu năng Samsung Galaxy J8 kh&aacute; ổn với bộ vi xử l&yacute; Snapdragon 450 t&aacute;m nh&acirc;n xung nhịp 1,8GHz đi c&ugrave;ng 3GB RAM v&agrave; 32GB bộ nhớ trong. Cấu h&igrave;nh n&agrave;y đủ sức để J8 chạy mượt trong hầu hết c&aacute;c t&aacute;c vụ. Ngo&agrave;i ra việc chạy tr&ecirc;n hệ điều h&agrave;nh Android 8.0 Oreo mới cũng gi&uacute;p cho Galaxy J8 mượt m&agrave; v&agrave; ổn định hơn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-6.jpg" /></p>

<h2>&nbsp;</h2>

<h2><strong>Thời lượng pin xuất sắc</strong></h2>

<p>&nbsp;</p>

<p>Pin lu&ocirc;n l&agrave; điểm mạnh tr&ecirc;n những chiếc điện thoại Galaxy J v&agrave; kh&ocirc;ng c&oacute; g&igrave; ngạc nhi&ecirc;n khi Galaxy J8 c&oacute; thời lượng pin xuất sắc. Với dung lượng lớn 3500 mAh, con chip tiết kiệm điện v&agrave; cơ chế quản l&yacute; pin th&ocirc;ng minh, Galaxy J8 c&oacute; thể duyệt web tối đa trong 13 giờ qua 4G LTE, xem video li&ecirc;n tục trong 20 giờ, gọi thoại trong 23 giờ, những con số rất ấn tượng.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-2.jpg" /></p>',
                'tag' => 'Ipple',
                'price' => '5990000.00',
                'status' => 1,
                'cat_id' => 8,
                'user_id' => 1,
                'created_at' => '2018-11-24 18:48:39',
                'updated_at' => '2018-12-01 20:52:21',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'OPPO F1S',
                'slug' => 'oppo-f1s',
            'intro' => 'Apple A10 mới, 2 cammera sau,Ram 3g, 5.5 inch (1920 x 1080 pixels)',
            'promo1' => 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):',
            'promo2' => 'Trả góp 0% (Chỉ áp dụng cho thẻ tín dụng) ',
                'promo3' => 'Tặng Voucher 500.000đ mua Apple Watch',
                'packet' => '',
                'images' => '1480650741_oppo-f1s-hero-400x460-400x460.png',
                'r_intro' => '<h2><strong>Camera k&eacute;p chinh phục b&oacute;ng tối, x&oacute;a ph&ocirc;ng nghệ thuật</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 chắc chắn l&agrave; chiếc điện thoại c&oacute; camera đ&aacute;ng gờm nhất trong ph&acirc;n kh&uacute;c, đặc biệt l&agrave; khả năng chụp đ&ecirc;m khi mang tr&ecirc;n m&igrave;nh cụm camera k&eacute;p th&ocirc;ng số v&ocirc; c&ugrave;ng chất lượng. Hai cảm biến camera sau 16MP f/1.7 + 5MP f/1.9 đều c&oacute; khẩu độ cực lớn, thu s&aacute;ng tốt trong cả những điều kiện khắc nghiệt, mang đến cho bạn những bức ảnh chụp đ&ecirc;m tuyệt vời.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-1.jpg" /></p>

<p>&nbsp;</p>

<p>Chụp ảnh x&oacute;a ph&ocirc;ng tr&ecirc;n Galaxy J8 được n&acirc;ng l&ecirc;n một tầm cao mới khi kh&ocirc;ng chỉ x&oacute;a ph&ocirc;ng ch&iacute;nh x&aacute;c, l&agrave;m nổi bật chủ thể m&agrave; bạn c&ograve;n c&oacute; th&ecirc;m cả c&aacute;c bộ lọc Bokeh, tạo những hiệu ứng x&oacute;a ph&ocirc;ng kh&aacute;c nhau đầy nghệ thuật. Ảnh chụp ch&acirc;n dung của bạn sẽ ấn tượng hơn bao giờ hết.</p>',
                'review' => '<h2><strong>Camera selfie x&oacute;a ph&ocirc;ng chủ động</strong></h2>

<p>Kh&ocirc;ng chỉ camera sau m&agrave; camera trước của Galaxy J8 cũng c&oacute; khả năng chụp selfie x&oacute;a ph&ocirc;ng. Camera n&agrave;y kh&ocirc;ng chỉ độ ph&acirc;n giải cao 16MP, khẩu độ lớn f/1.9 m&agrave; c&ograve;n c&oacute; cả đ&egrave;n flash LED trợ s&aacute;ng chuy&ecirc;n nghiệp với ba mức độ s&aacute;ng kh&aacute;c nhau. Bạn sẽ được thoải m&aacute;i selfie ngay cả trong điều kiện thiếu s&aacute;ng m&agrave; h&igrave;nh ảnh vẫn ho&agrave;n hảo với độ n&eacute;t cao, &iacute;t nhiễu v&agrave; ch&acirc;n thực. T&iacute;nh năng x&oacute;a ph&ocirc;ng chủ động mang đến c&aacute;c bức ảnh selfie x&oacute;a ph&ocirc;ng theo đ&uacute;ng &yacute; bạn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-3.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>M&agrave;n h&igrave;nh v&ocirc; cực sống động từng khung h&igrave;nh</strong></h2>

<p>&nbsp;</p>

<p>Samsung tiếp tục mang tinh hoa trong c&ocirc;ng nghệ m&agrave;n h&igrave;nh của họ l&ecirc;n Galaxy J8. Đ&oacute; l&agrave; m&agrave;n h&igrave;nh v&ocirc; cực Infinity Display c&ocirc;ng nghệ Super AMOLED cao cấp. Galaxy J8 sở hữu m&agrave;n h&igrave;nh lớn 6 inch HD+, tỉ lệ mới 18,5:9 chuẩn điện ảnh v&agrave; viền m&agrave;n h&igrave;nh cực mỏng. Bạn sẽ được tận hưởng từng khung h&igrave;nh giải tr&iacute; đỉnh cao, m&agrave;u sắc sống động rực rỡ.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-4.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Thiết kế c&aacute; t&iacute;nh, sắc m&agrave;u thời thượng</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 c&oacute; kiểu d&aacute;ng rất mềm mại để đồng nhất ho&agrave;n to&agrave;n với m&agrave;n h&igrave;nh v&ocirc; cực mặt trước. Bạn sẽ được cầm tr&ecirc;n tay một chiếc m&aacute;y liền lạc, bo cong hợp l&yacute; để cảm gi&aacute;c sử dụng thoải m&aacute;i nhất. Mặc d&ugrave; kiểu d&aacute;ng mượt m&agrave; nhưng Galaxy J8 vẫn rất chắc chắn nhờ lớp vỏ kim loại sang trọng. C&oacute; ba m&agrave;u sắc c&aacute; t&iacute;nh d&agrave;nh cho bạn l&agrave; T&iacute;m Sapphire, Đen Titan v&agrave; V&agrave;ng Thạch Anh.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-5.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Bảo mật an to&agrave;n v&agrave; th&ocirc;ng minh</strong></h2>

<p>&nbsp;</p>

<p>Camera trước Galaxy J8 được tối ưu để nhận diện khu&ocirc;n mặt th&ocirc;ng minh v&agrave; nhanh ch&oacute;ng. Chỉ cần đưa m&aacute;y l&ecirc;n l&agrave; chiếc J8 của bạn sẽ tự động mở kh&oacute;a. Ấn tượng hơn, đ&egrave;n flash LED d&agrave;nh cho camera trước sẽ ph&aacute;t huy t&aacute;c dụng để bạn nhận diện được trong cả trời tối. Trong khi đ&oacute; m&aacute;y qu&eacute;t v&acirc;n tay mặt sau cũng l&agrave; một phương thức bảo mật tiện dụng kh&aacute;c m&agrave; bạn c&oacute; thể thao t&aacute;c tiện lợi d&ugrave; cầm bằng bất cứ tay tr&aacute;i hay tay phải.</p>

<p>&nbsp;</p>

<h2><strong>Hiệu năng tốt trong tầm gi&aacute;</strong></h2>

<p>&nbsp;</p>

<p>Hiệu năng Samsung Galaxy J8 kh&aacute; ổn với bộ vi xử l&yacute; Snapdragon 450 t&aacute;m nh&acirc;n xung nhịp 1,8GHz đi c&ugrave;ng 3GB RAM v&agrave; 32GB bộ nhớ trong. Cấu h&igrave;nh n&agrave;y đủ sức để J8 chạy mượt trong hầu hết c&aacute;c t&aacute;c vụ. Ngo&agrave;i ra việc chạy tr&ecirc;n hệ điều h&agrave;nh Android 8.0 Oreo mới cũng gi&uacute;p cho Galaxy J8 mượt m&agrave; v&agrave; ổn định hơn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-6.jpg" /></p>

<h2>&nbsp;</h2>

<h2><strong>Thời lượng pin xuất sắc</strong></h2>

<p>&nbsp;</p>

<p>Pin lu&ocirc;n l&agrave; điểm mạnh tr&ecirc;n những chiếc điện thoại Galaxy J v&agrave; kh&ocirc;ng c&oacute; g&igrave; ngạc nhi&ecirc;n khi Galaxy J8 c&oacute; thời lượng pin xuất sắc. Với dung lượng lớn 3500 mAh, con chip tiết kiệm điện v&agrave; cơ chế quản l&yacute; pin th&ocirc;ng minh, Galaxy J8 c&oacute; thể duyệt web tối đa trong 13 giờ qua 4G LTE, xem video li&ecirc;n tục trong 20 giờ, gọi thoại trong 23 giờ, những con số rất ấn tượng.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-2.jpg" /></p>',
                'tag' => 'Ipple',
                'price' => '5990000.00',
                'status' => 1,
                'cat_id' => 8,
                'user_id' => 1,
                'created_at' => '2018-11-24 18:48:39',
                'updated_at' => '2018-12-01 20:52:21',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'OPPO F1S',
                'slug' => 'oppo-f1s',
            'intro' => 'Apple A10 mới, 2 cammera sau,Ram 3g, 5.5 inch (1920 x 1080 pixels)',
            'promo1' => 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):',
            'promo2' => 'Trả góp 0% (Chỉ áp dụng cho thẻ tín dụng) ',
                'promo3' => 'Tặng Voucher 500.000đ mua Apple Watch',
                'packet' => '',
                'images' => '1480650741_oppo-f1s-hero-400x460-400x460.png',
                'r_intro' => '<h2><strong>Camera k&eacute;p chinh phục b&oacute;ng tối, x&oacute;a ph&ocirc;ng nghệ thuật</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 chắc chắn l&agrave; chiếc điện thoại c&oacute; camera đ&aacute;ng gờm nhất trong ph&acirc;n kh&uacute;c, đặc biệt l&agrave; khả năng chụp đ&ecirc;m khi mang tr&ecirc;n m&igrave;nh cụm camera k&eacute;p th&ocirc;ng số v&ocirc; c&ugrave;ng chất lượng. Hai cảm biến camera sau 16MP f/1.7 + 5MP f/1.9 đều c&oacute; khẩu độ cực lớn, thu s&aacute;ng tốt trong cả những điều kiện khắc nghiệt, mang đến cho bạn những bức ảnh chụp đ&ecirc;m tuyệt vời.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-1.jpg" /></p>

<p>&nbsp;</p>

<p>Chụp ảnh x&oacute;a ph&ocirc;ng tr&ecirc;n Galaxy J8 được n&acirc;ng l&ecirc;n một tầm cao mới khi kh&ocirc;ng chỉ x&oacute;a ph&ocirc;ng ch&iacute;nh x&aacute;c, l&agrave;m nổi bật chủ thể m&agrave; bạn c&ograve;n c&oacute; th&ecirc;m cả c&aacute;c bộ lọc Bokeh, tạo những hiệu ứng x&oacute;a ph&ocirc;ng kh&aacute;c nhau đầy nghệ thuật. Ảnh chụp ch&acirc;n dung của bạn sẽ ấn tượng hơn bao giờ hết.</p>',
                'review' => '<h2><strong>Camera selfie x&oacute;a ph&ocirc;ng chủ động</strong></h2>

<p>Kh&ocirc;ng chỉ camera sau m&agrave; camera trước của Galaxy J8 cũng c&oacute; khả năng chụp selfie x&oacute;a ph&ocirc;ng. Camera n&agrave;y kh&ocirc;ng chỉ độ ph&acirc;n giải cao 16MP, khẩu độ lớn f/1.9 m&agrave; c&ograve;n c&oacute; cả đ&egrave;n flash LED trợ s&aacute;ng chuy&ecirc;n nghiệp với ba mức độ s&aacute;ng kh&aacute;c nhau. Bạn sẽ được thoải m&aacute;i selfie ngay cả trong điều kiện thiếu s&aacute;ng m&agrave; h&igrave;nh ảnh vẫn ho&agrave;n hảo với độ n&eacute;t cao, &iacute;t nhiễu v&agrave; ch&acirc;n thực. T&iacute;nh năng x&oacute;a ph&ocirc;ng chủ động mang đến c&aacute;c bức ảnh selfie x&oacute;a ph&ocirc;ng theo đ&uacute;ng &yacute; bạn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-3.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>M&agrave;n h&igrave;nh v&ocirc; cực sống động từng khung h&igrave;nh</strong></h2>

<p>&nbsp;</p>

<p>Samsung tiếp tục mang tinh hoa trong c&ocirc;ng nghệ m&agrave;n h&igrave;nh của họ l&ecirc;n Galaxy J8. Đ&oacute; l&agrave; m&agrave;n h&igrave;nh v&ocirc; cực Infinity Display c&ocirc;ng nghệ Super AMOLED cao cấp. Galaxy J8 sở hữu m&agrave;n h&igrave;nh lớn 6 inch HD+, tỉ lệ mới 18,5:9 chuẩn điện ảnh v&agrave; viền m&agrave;n h&igrave;nh cực mỏng. Bạn sẽ được tận hưởng từng khung h&igrave;nh giải tr&iacute; đỉnh cao, m&agrave;u sắc sống động rực rỡ.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-4.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Thiết kế c&aacute; t&iacute;nh, sắc m&agrave;u thời thượng</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 c&oacute; kiểu d&aacute;ng rất mềm mại để đồng nhất ho&agrave;n to&agrave;n với m&agrave;n h&igrave;nh v&ocirc; cực mặt trước. Bạn sẽ được cầm tr&ecirc;n tay một chiếc m&aacute;y liền lạc, bo cong hợp l&yacute; để cảm gi&aacute;c sử dụng thoải m&aacute;i nhất. Mặc d&ugrave; kiểu d&aacute;ng mượt m&agrave; nhưng Galaxy J8 vẫn rất chắc chắn nhờ lớp vỏ kim loại sang trọng. C&oacute; ba m&agrave;u sắc c&aacute; t&iacute;nh d&agrave;nh cho bạn l&agrave; T&iacute;m Sapphire, Đen Titan v&agrave; V&agrave;ng Thạch Anh.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-5.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Bảo mật an to&agrave;n v&agrave; th&ocirc;ng minh</strong></h2>

<p>&nbsp;</p>

<p>Camera trước Galaxy J8 được tối ưu để nhận diện khu&ocirc;n mặt th&ocirc;ng minh v&agrave; nhanh ch&oacute;ng. Chỉ cần đưa m&aacute;y l&ecirc;n l&agrave; chiếc J8 của bạn sẽ tự động mở kh&oacute;a. Ấn tượng hơn, đ&egrave;n flash LED d&agrave;nh cho camera trước sẽ ph&aacute;t huy t&aacute;c dụng để bạn nhận diện được trong cả trời tối. Trong khi đ&oacute; m&aacute;y qu&eacute;t v&acirc;n tay mặt sau cũng l&agrave; một phương thức bảo mật tiện dụng kh&aacute;c m&agrave; bạn c&oacute; thể thao t&aacute;c tiện lợi d&ugrave; cầm bằng bất cứ tay tr&aacute;i hay tay phải.</p>

<p>&nbsp;</p>

<h2><strong>Hiệu năng tốt trong tầm gi&aacute;</strong></h2>

<p>&nbsp;</p>

<p>Hiệu năng Samsung Galaxy J8 kh&aacute; ổn với bộ vi xử l&yacute; Snapdragon 450 t&aacute;m nh&acirc;n xung nhịp 1,8GHz đi c&ugrave;ng 3GB RAM v&agrave; 32GB bộ nhớ trong. Cấu h&igrave;nh n&agrave;y đủ sức để J8 chạy mượt trong hầu hết c&aacute;c t&aacute;c vụ. Ngo&agrave;i ra việc chạy tr&ecirc;n hệ điều h&agrave;nh Android 8.0 Oreo mới cũng gi&uacute;p cho Galaxy J8 mượt m&agrave; v&agrave; ổn định hơn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-6.jpg" /></p>

<h2>&nbsp;</h2>

<h2><strong>Thời lượng pin xuất sắc</strong></h2>

<p>&nbsp;</p>

<p>Pin lu&ocirc;n l&agrave; điểm mạnh tr&ecirc;n những chiếc điện thoại Galaxy J v&agrave; kh&ocirc;ng c&oacute; g&igrave; ngạc nhi&ecirc;n khi Galaxy J8 c&oacute; thời lượng pin xuất sắc. Với dung lượng lớn 3500 mAh, con chip tiết kiệm điện v&agrave; cơ chế quản l&yacute; pin th&ocirc;ng minh, Galaxy J8 c&oacute; thể duyệt web tối đa trong 13 giờ qua 4G LTE, xem video li&ecirc;n tục trong 20 giờ, gọi thoại trong 23 giờ, những con số rất ấn tượng.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-2.jpg" /></p>',
                'tag' => 'Ipple',
                'price' => '5990000.00',
                'status' => 1,
                'cat_id' => 8,
                'user_id' => 1,
                'created_at' => '2018-11-24 18:48:39',
                'updated_at' => '2018-12-01 20:52:21',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'iPhone 7 Plus 128GB',
                'slug' => 'iphone-7-plus-128gb',
            'intro' => 'Apple A10 mới, 2 cammera sau,Ram 3g, 5.5 inch (1920 x 1080 pixels)',
                'promo1' => 'Đặt Online hoặc Gọi 18006601',
            'promo2' => 'Trả góp 0% (Chỉ áp dụng cho thẻ tín dụng)',
                'promo3' => 'Tặng Voucher 500.000đ mua Apple Watch',
                'packet' => '',
                'images' => '1480038525_636089592275907954_7-plus-chi-tiet.jpg',
                'r_intro' => '<h2><strong>Camera k&eacute;p chinh phục b&oacute;ng tối, x&oacute;a ph&ocirc;ng nghệ thuật</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 chắc chắn l&agrave; chiếc điện thoại c&oacute; camera đ&aacute;ng gờm nhất trong ph&acirc;n kh&uacute;c, đặc biệt l&agrave; khả năng chụp đ&ecirc;m khi mang tr&ecirc;n m&igrave;nh cụm camera k&eacute;p th&ocirc;ng số v&ocirc; c&ugrave;ng chất lượng. Hai cảm biến camera sau 16MP f/1.7 + 5MP f/1.9 đều c&oacute; khẩu độ cực lớn, thu s&aacute;ng tốt trong cả những điều kiện khắc nghiệt, mang đến cho bạn những bức ảnh chụp đ&ecirc;m tuyệt vời.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-1.jpg" /></p>

<p>&nbsp;</p>

<p>Chụp ảnh x&oacute;a ph&ocirc;ng tr&ecirc;n Galaxy J8 được n&acirc;ng l&ecirc;n một tầm cao mới khi kh&ocirc;ng chỉ x&oacute;a ph&ocirc;ng ch&iacute;nh x&aacute;c, l&agrave;m nổi bật chủ thể m&agrave; bạn c&ograve;n c&oacute; th&ecirc;m cả c&aacute;c bộ lọc Bokeh, tạo những hiệu ứng x&oacute;a ph&ocirc;ng kh&aacute;c nhau đầy nghệ thuật. Ảnh chụp ch&acirc;n dung của bạn sẽ ấn tượng hơn bao giờ hết.</p>',
                'review' => '<h2><strong>Camera selfie x&oacute;a ph&ocirc;ng chủ động</strong></h2>

<p>Kh&ocirc;ng chỉ camera sau m&agrave; camera trước của Galaxy J8 cũng c&oacute; khả năng chụp selfie x&oacute;a ph&ocirc;ng. Camera n&agrave;y kh&ocirc;ng chỉ độ ph&acirc;n giải cao 16MP, khẩu độ lớn f/1.9 m&agrave; c&ograve;n c&oacute; cả đ&egrave;n flash LED trợ s&aacute;ng chuy&ecirc;n nghiệp với ba mức độ s&aacute;ng kh&aacute;c nhau. Bạn sẽ được thoải m&aacute;i selfie ngay cả trong điều kiện thiếu s&aacute;ng m&agrave; h&igrave;nh ảnh vẫn ho&agrave;n hảo với độ n&eacute;t cao, &iacute;t nhiễu v&agrave; ch&acirc;n thực. T&iacute;nh năng x&oacute;a ph&ocirc;ng chủ động mang đến c&aacute;c bức ảnh selfie x&oacute;a ph&ocirc;ng theo đ&uacute;ng &yacute; bạn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-3.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>M&agrave;n h&igrave;nh v&ocirc; cực sống động từng khung h&igrave;nh</strong></h2>

<p>&nbsp;</p>

<p>Samsung tiếp tục mang tinh hoa trong c&ocirc;ng nghệ m&agrave;n h&igrave;nh của họ l&ecirc;n Galaxy J8. Đ&oacute; l&agrave; m&agrave;n h&igrave;nh v&ocirc; cực Infinity Display c&ocirc;ng nghệ Super AMOLED cao cấp. Galaxy J8 sở hữu m&agrave;n h&igrave;nh lớn 6 inch HD+, tỉ lệ mới 18,5:9 chuẩn điện ảnh v&agrave; viền m&agrave;n h&igrave;nh cực mỏng. Bạn sẽ được tận hưởng từng khung h&igrave;nh giải tr&iacute; đỉnh cao, m&agrave;u sắc sống động rực rỡ.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-4.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Thiết kế c&aacute; t&iacute;nh, sắc m&agrave;u thời thượng</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 c&oacute; kiểu d&aacute;ng rất mềm mại để đồng nhất ho&agrave;n to&agrave;n với m&agrave;n h&igrave;nh v&ocirc; cực mặt trước. Bạn sẽ được cầm tr&ecirc;n tay một chiếc m&aacute;y liền lạc, bo cong hợp l&yacute; để cảm gi&aacute;c sử dụng thoải m&aacute;i nhất. Mặc d&ugrave; kiểu d&aacute;ng mượt m&agrave; nhưng Galaxy J8 vẫn rất chắc chắn nhờ lớp vỏ kim loại sang trọng. C&oacute; ba m&agrave;u sắc c&aacute; t&iacute;nh d&agrave;nh cho bạn l&agrave; T&iacute;m Sapphire, Đen Titan v&agrave; V&agrave;ng Thạch Anh.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-5.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Bảo mật an to&agrave;n v&agrave; th&ocirc;ng minh</strong></h2>

<p>&nbsp;</p>

<p>Camera trước Galaxy J8 được tối ưu để nhận diện khu&ocirc;n mặt th&ocirc;ng minh v&agrave; nhanh ch&oacute;ng. Chỉ cần đưa m&aacute;y l&ecirc;n l&agrave; chiếc J8 của bạn sẽ tự động mở kh&oacute;a. Ấn tượng hơn, đ&egrave;n flash LED d&agrave;nh cho camera trước sẽ ph&aacute;t huy t&aacute;c dụng để bạn nhận diện được trong cả trời tối. Trong khi đ&oacute; m&aacute;y qu&eacute;t v&acirc;n tay mặt sau cũng l&agrave; một phương thức bảo mật tiện dụng kh&aacute;c m&agrave; bạn c&oacute; thể thao t&aacute;c tiện lợi d&ugrave; cầm bằng bất cứ tay tr&aacute;i hay tay phải.</p>

<p>&nbsp;</p>

<h2><strong>Hiệu năng tốt trong tầm gi&aacute;</strong></h2>

<p>&nbsp;</p>

<p>Hiệu năng Samsung Galaxy J8 kh&aacute; ổn với bộ vi xử l&yacute; Snapdragon 450 t&aacute;m nh&acirc;n xung nhịp 1,8GHz đi c&ugrave;ng 3GB RAM v&agrave; 32GB bộ nhớ trong. Cấu h&igrave;nh n&agrave;y đủ sức để J8 chạy mượt trong hầu hết c&aacute;c t&aacute;c vụ. Ngo&agrave;i ra việc chạy tr&ecirc;n hệ điều h&agrave;nh Android 8.0 Oreo mới cũng gi&uacute;p cho Galaxy J8 mượt m&agrave; v&agrave; ổn định hơn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-6.jpg" /></p>

<h2>&nbsp;</h2>

<h2><strong>Thời lượng pin xuất sắc</strong></h2>

<p>&nbsp;</p>

<p>Pin lu&ocirc;n l&agrave; điểm mạnh tr&ecirc;n những chiếc điện thoại Galaxy J v&agrave; kh&ocirc;ng c&oacute; g&igrave; ngạc nhi&ecirc;n khi Galaxy J8 c&oacute; thời lượng pin xuất sắc. Với dung lượng lớn 3500 mAh, con chip tiết kiệm điện v&agrave; cơ chế quản l&yacute; pin th&ocirc;ng minh, Galaxy J8 c&oacute; thể duyệt web tối đa trong 13 giờ qua 4G LTE, xem video li&ecirc;n tục trong 20 giờ, gọi thoại trong 23 giờ, những con số rất ấn tượng.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-2.jpg" /></p>',
                'tag' => 'Ipple',
                'price' => '25190000.00',
                'status' => 1,
                'cat_id' => 7,
                'user_id' => 1,
                'created_at' => '2018-11-24 18:48:45',
                'updated_at' => '2018-12-01 20:53:36',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'iPhone 7 Plus 128GB',
                'slug' => 'iphone-7-plus-128gb',
            'intro' => 'Apple A10 mới, 2 cammera sau,Ram 3g, 5.5 inch (1920 x 1080 pixels)',
                'promo1' => 'Đặt Online hoặc Gọi 18006601',
            'promo2' => 'Trả góp 0% (Chỉ áp dụng cho thẻ tín dụng)',
                'promo3' => 'Tặng Voucher 500.000đ mua Apple Watch',
                'packet' => '',
                'images' => '1480038525_636089592275907954_7-plus-chi-tiet.jpg',
                'r_intro' => '<h2><strong>Camera k&eacute;p chinh phục b&oacute;ng tối, x&oacute;a ph&ocirc;ng nghệ thuật</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 chắc chắn l&agrave; chiếc điện thoại c&oacute; camera đ&aacute;ng gờm nhất trong ph&acirc;n kh&uacute;c, đặc biệt l&agrave; khả năng chụp đ&ecirc;m khi mang tr&ecirc;n m&igrave;nh cụm camera k&eacute;p th&ocirc;ng số v&ocirc; c&ugrave;ng chất lượng. Hai cảm biến camera sau 16MP f/1.7 + 5MP f/1.9 đều c&oacute; khẩu độ cực lớn, thu s&aacute;ng tốt trong cả những điều kiện khắc nghiệt, mang đến cho bạn những bức ảnh chụp đ&ecirc;m tuyệt vời.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-1.jpg" /></p>

<p>&nbsp;</p>

<p>Chụp ảnh x&oacute;a ph&ocirc;ng tr&ecirc;n Galaxy J8 được n&acirc;ng l&ecirc;n một tầm cao mới khi kh&ocirc;ng chỉ x&oacute;a ph&ocirc;ng ch&iacute;nh x&aacute;c, l&agrave;m nổi bật chủ thể m&agrave; bạn c&ograve;n c&oacute; th&ecirc;m cả c&aacute;c bộ lọc Bokeh, tạo những hiệu ứng x&oacute;a ph&ocirc;ng kh&aacute;c nhau đầy nghệ thuật. Ảnh chụp ch&acirc;n dung của bạn sẽ ấn tượng hơn bao giờ hết.</p>',
                'review' => '<h2><strong>Camera selfie x&oacute;a ph&ocirc;ng chủ động</strong></h2>

<p>Kh&ocirc;ng chỉ camera sau m&agrave; camera trước của Galaxy J8 cũng c&oacute; khả năng chụp selfie x&oacute;a ph&ocirc;ng. Camera n&agrave;y kh&ocirc;ng chỉ độ ph&acirc;n giải cao 16MP, khẩu độ lớn f/1.9 m&agrave; c&ograve;n c&oacute; cả đ&egrave;n flash LED trợ s&aacute;ng chuy&ecirc;n nghiệp với ba mức độ s&aacute;ng kh&aacute;c nhau. Bạn sẽ được thoải m&aacute;i selfie ngay cả trong điều kiện thiếu s&aacute;ng m&agrave; h&igrave;nh ảnh vẫn ho&agrave;n hảo với độ n&eacute;t cao, &iacute;t nhiễu v&agrave; ch&acirc;n thực. T&iacute;nh năng x&oacute;a ph&ocirc;ng chủ động mang đến c&aacute;c bức ảnh selfie x&oacute;a ph&ocirc;ng theo đ&uacute;ng &yacute; bạn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-3.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>M&agrave;n h&igrave;nh v&ocirc; cực sống động từng khung h&igrave;nh</strong></h2>

<p>&nbsp;</p>

<p>Samsung tiếp tục mang tinh hoa trong c&ocirc;ng nghệ m&agrave;n h&igrave;nh của họ l&ecirc;n Galaxy J8. Đ&oacute; l&agrave; m&agrave;n h&igrave;nh v&ocirc; cực Infinity Display c&ocirc;ng nghệ Super AMOLED cao cấp. Galaxy J8 sở hữu m&agrave;n h&igrave;nh lớn 6 inch HD+, tỉ lệ mới 18,5:9 chuẩn điện ảnh v&agrave; viền m&agrave;n h&igrave;nh cực mỏng. Bạn sẽ được tận hưởng từng khung h&igrave;nh giải tr&iacute; đỉnh cao, m&agrave;u sắc sống động rực rỡ.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-4.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Thiết kế c&aacute; t&iacute;nh, sắc m&agrave;u thời thượng</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 c&oacute; kiểu d&aacute;ng rất mềm mại để đồng nhất ho&agrave;n to&agrave;n với m&agrave;n h&igrave;nh v&ocirc; cực mặt trước. Bạn sẽ được cầm tr&ecirc;n tay một chiếc m&aacute;y liền lạc, bo cong hợp l&yacute; để cảm gi&aacute;c sử dụng thoải m&aacute;i nhất. Mặc d&ugrave; kiểu d&aacute;ng mượt m&agrave; nhưng Galaxy J8 vẫn rất chắc chắn nhờ lớp vỏ kim loại sang trọng. C&oacute; ba m&agrave;u sắc c&aacute; t&iacute;nh d&agrave;nh cho bạn l&agrave; T&iacute;m Sapphire, Đen Titan v&agrave; V&agrave;ng Thạch Anh.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-5.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Bảo mật an to&agrave;n v&agrave; th&ocirc;ng minh</strong></h2>

<p>&nbsp;</p>

<p>Camera trước Galaxy J8 được tối ưu để nhận diện khu&ocirc;n mặt th&ocirc;ng minh v&agrave; nhanh ch&oacute;ng. Chỉ cần đưa m&aacute;y l&ecirc;n l&agrave; chiếc J8 của bạn sẽ tự động mở kh&oacute;a. Ấn tượng hơn, đ&egrave;n flash LED d&agrave;nh cho camera trước sẽ ph&aacute;t huy t&aacute;c dụng để bạn nhận diện được trong cả trời tối. Trong khi đ&oacute; m&aacute;y qu&eacute;t v&acirc;n tay mặt sau cũng l&agrave; một phương thức bảo mật tiện dụng kh&aacute;c m&agrave; bạn c&oacute; thể thao t&aacute;c tiện lợi d&ugrave; cầm bằng bất cứ tay tr&aacute;i hay tay phải.</p>

<p>&nbsp;</p>

<h2><strong>Hiệu năng tốt trong tầm gi&aacute;</strong></h2>

<p>&nbsp;</p>

<p>Hiệu năng Samsung Galaxy J8 kh&aacute; ổn với bộ vi xử l&yacute; Snapdragon 450 t&aacute;m nh&acirc;n xung nhịp 1,8GHz đi c&ugrave;ng 3GB RAM v&agrave; 32GB bộ nhớ trong. Cấu h&igrave;nh n&agrave;y đủ sức để J8 chạy mượt trong hầu hết c&aacute;c t&aacute;c vụ. Ngo&agrave;i ra việc chạy tr&ecirc;n hệ điều h&agrave;nh Android 8.0 Oreo mới cũng gi&uacute;p cho Galaxy J8 mượt m&agrave; v&agrave; ổn định hơn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-6.jpg" /></p>

<h2>&nbsp;</h2>

<h2><strong>Thời lượng pin xuất sắc</strong></h2>

<p>&nbsp;</p>

<p>Pin lu&ocirc;n l&agrave; điểm mạnh tr&ecirc;n những chiếc điện thoại Galaxy J v&agrave; kh&ocirc;ng c&oacute; g&igrave; ngạc nhi&ecirc;n khi Galaxy J8 c&oacute; thời lượng pin xuất sắc. Với dung lượng lớn 3500 mAh, con chip tiết kiệm điện v&agrave; cơ chế quản l&yacute; pin th&ocirc;ng minh, Galaxy J8 c&oacute; thể duyệt web tối đa trong 13 giờ qua 4G LTE, xem video li&ecirc;n tục trong 20 giờ, gọi thoại trong 23 giờ, những con số rất ấn tượng.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-2.jpg" /></p>',
                'tag' => 'Ipple',
                'price' => '25190000.00',
                'status' => 1,
                'cat_id' => 7,
                'user_id' => 1,
                'created_at' => '2018-11-24 18:48:45',
                'updated_at' => '2018-12-01 20:53:36',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'iPhone 7 Plus 128GB',
                'slug' => 'iphone-7-plus-128gb',
            'intro' => 'Apple A10 mới, 2 cammera sau,Ram 3g, 5.5 inch (1920 x 1080 pixels)',
                'promo1' => 'Đặt Online hoặc Gọi 18006601',
            'promo2' => 'Trả góp 0% (Chỉ áp dụng cho thẻ tín dụng)',
                'promo3' => 'Tặng Voucher 500.000đ mua Apple Watch',
                'packet' => '',
                'images' => '1480038525_636089592275907954_7-plus-chi-tiet.jpg',
                'r_intro' => '<h2><strong>Camera k&eacute;p chinh phục b&oacute;ng tối, x&oacute;a ph&ocirc;ng nghệ thuật</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 chắc chắn l&agrave; chiếc điện thoại c&oacute; camera đ&aacute;ng gờm nhất trong ph&acirc;n kh&uacute;c, đặc biệt l&agrave; khả năng chụp đ&ecirc;m khi mang tr&ecirc;n m&igrave;nh cụm camera k&eacute;p th&ocirc;ng số v&ocirc; c&ugrave;ng chất lượng. Hai cảm biến camera sau 16MP f/1.7 + 5MP f/1.9 đều c&oacute; khẩu độ cực lớn, thu s&aacute;ng tốt trong cả những điều kiện khắc nghiệt, mang đến cho bạn những bức ảnh chụp đ&ecirc;m tuyệt vời.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-1.jpg" /></p>

<p>&nbsp;</p>

<p>Chụp ảnh x&oacute;a ph&ocirc;ng tr&ecirc;n Galaxy J8 được n&acirc;ng l&ecirc;n một tầm cao mới khi kh&ocirc;ng chỉ x&oacute;a ph&ocirc;ng ch&iacute;nh x&aacute;c, l&agrave;m nổi bật chủ thể m&agrave; bạn c&ograve;n c&oacute; th&ecirc;m cả c&aacute;c bộ lọc Bokeh, tạo những hiệu ứng x&oacute;a ph&ocirc;ng kh&aacute;c nhau đầy nghệ thuật. Ảnh chụp ch&acirc;n dung của bạn sẽ ấn tượng hơn bao giờ hết.</p>',
                'review' => '<h2><strong>Camera selfie x&oacute;a ph&ocirc;ng chủ động</strong></h2>

<p>Kh&ocirc;ng chỉ camera sau m&agrave; camera trước của Galaxy J8 cũng c&oacute; khả năng chụp selfie x&oacute;a ph&ocirc;ng. Camera n&agrave;y kh&ocirc;ng chỉ độ ph&acirc;n giải cao 16MP, khẩu độ lớn f/1.9 m&agrave; c&ograve;n c&oacute; cả đ&egrave;n flash LED trợ s&aacute;ng chuy&ecirc;n nghiệp với ba mức độ s&aacute;ng kh&aacute;c nhau. Bạn sẽ được thoải m&aacute;i selfie ngay cả trong điều kiện thiếu s&aacute;ng m&agrave; h&igrave;nh ảnh vẫn ho&agrave;n hảo với độ n&eacute;t cao, &iacute;t nhiễu v&agrave; ch&acirc;n thực. T&iacute;nh năng x&oacute;a ph&ocirc;ng chủ động mang đến c&aacute;c bức ảnh selfie x&oacute;a ph&ocirc;ng theo đ&uacute;ng &yacute; bạn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-3.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>M&agrave;n h&igrave;nh v&ocirc; cực sống động từng khung h&igrave;nh</strong></h2>

<p>&nbsp;</p>

<p>Samsung tiếp tục mang tinh hoa trong c&ocirc;ng nghệ m&agrave;n h&igrave;nh của họ l&ecirc;n Galaxy J8. Đ&oacute; l&agrave; m&agrave;n h&igrave;nh v&ocirc; cực Infinity Display c&ocirc;ng nghệ Super AMOLED cao cấp. Galaxy J8 sở hữu m&agrave;n h&igrave;nh lớn 6 inch HD+, tỉ lệ mới 18,5:9 chuẩn điện ảnh v&agrave; viền m&agrave;n h&igrave;nh cực mỏng. Bạn sẽ được tận hưởng từng khung h&igrave;nh giải tr&iacute; đỉnh cao, m&agrave;u sắc sống động rực rỡ.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-4.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Thiết kế c&aacute; t&iacute;nh, sắc m&agrave;u thời thượng</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 c&oacute; kiểu d&aacute;ng rất mềm mại để đồng nhất ho&agrave;n to&agrave;n với m&agrave;n h&igrave;nh v&ocirc; cực mặt trước. Bạn sẽ được cầm tr&ecirc;n tay một chiếc m&aacute;y liền lạc, bo cong hợp l&yacute; để cảm gi&aacute;c sử dụng thoải m&aacute;i nhất. Mặc d&ugrave; kiểu d&aacute;ng mượt m&agrave; nhưng Galaxy J8 vẫn rất chắc chắn nhờ lớp vỏ kim loại sang trọng. C&oacute; ba m&agrave;u sắc c&aacute; t&iacute;nh d&agrave;nh cho bạn l&agrave; T&iacute;m Sapphire, Đen Titan v&agrave; V&agrave;ng Thạch Anh.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-5.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Bảo mật an to&agrave;n v&agrave; th&ocirc;ng minh</strong></h2>

<p>&nbsp;</p>

<p>Camera trước Galaxy J8 được tối ưu để nhận diện khu&ocirc;n mặt th&ocirc;ng minh v&agrave; nhanh ch&oacute;ng. Chỉ cần đưa m&aacute;y l&ecirc;n l&agrave; chiếc J8 của bạn sẽ tự động mở kh&oacute;a. Ấn tượng hơn, đ&egrave;n flash LED d&agrave;nh cho camera trước sẽ ph&aacute;t huy t&aacute;c dụng để bạn nhận diện được trong cả trời tối. Trong khi đ&oacute; m&aacute;y qu&eacute;t v&acirc;n tay mặt sau cũng l&agrave; một phương thức bảo mật tiện dụng kh&aacute;c m&agrave; bạn c&oacute; thể thao t&aacute;c tiện lợi d&ugrave; cầm bằng bất cứ tay tr&aacute;i hay tay phải.</p>

<p>&nbsp;</p>

<h2><strong>Hiệu năng tốt trong tầm gi&aacute;</strong></h2>

<p>&nbsp;</p>

<p>Hiệu năng Samsung Galaxy J8 kh&aacute; ổn với bộ vi xử l&yacute; Snapdragon 450 t&aacute;m nh&acirc;n xung nhịp 1,8GHz đi c&ugrave;ng 3GB RAM v&agrave; 32GB bộ nhớ trong. Cấu h&igrave;nh n&agrave;y đủ sức để J8 chạy mượt trong hầu hết c&aacute;c t&aacute;c vụ. Ngo&agrave;i ra việc chạy tr&ecirc;n hệ điều h&agrave;nh Android 8.0 Oreo mới cũng gi&uacute;p cho Galaxy J8 mượt m&agrave; v&agrave; ổn định hơn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-6.jpg" /></p>

<h2>&nbsp;</h2>

<h2><strong>Thời lượng pin xuất sắc</strong></h2>

<p>&nbsp;</p>

<p>Pin lu&ocirc;n l&agrave; điểm mạnh tr&ecirc;n những chiếc điện thoại Galaxy J v&agrave; kh&ocirc;ng c&oacute; g&igrave; ngạc nhi&ecirc;n khi Galaxy J8 c&oacute; thời lượng pin xuất sắc. Với dung lượng lớn 3500 mAh, con chip tiết kiệm điện v&agrave; cơ chế quản l&yacute; pin th&ocirc;ng minh, Galaxy J8 c&oacute; thể duyệt web tối đa trong 13 giờ qua 4G LTE, xem video li&ecirc;n tục trong 20 giờ, gọi thoại trong 23 giờ, những con số rất ấn tượng.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-2.jpg" /></p>',
                'tag' => 'Ipple',
                'price' => '25190000.00',
                'status' => 0,
                'cat_id' => 7,
                'user_id' => 1,
                'created_at' => '2018-11-24 18:48:45',
                'updated_at' => '2018-12-01 20:53:36',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'iPhone 7 Plus 128GB',
                'slug' => 'iphone-7-plus-128gb',
            'intro' => 'Apple A10 mới, 2 cammera sau,Ram 3g, 5.5 inch (1920 x 1080 pixels)',
                'promo1' => 'Đặt Online hoặc Gọi 18006601',
            'promo2' => 'Trả góp 0% (Chỉ áp dụng cho thẻ tín dụng)',
                'promo3' => 'Tặng Voucher 500.000đ mua Apple Watch',
                'packet' => '',
                'images' => '1480038525_636089592275907954_7-plus-chi-tiet.jpg',
                'r_intro' => '<h2><strong>Camera k&eacute;p chinh phục b&oacute;ng tối, x&oacute;a ph&ocirc;ng nghệ thuật</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 chắc chắn l&agrave; chiếc điện thoại c&oacute; camera đ&aacute;ng gờm nhất trong ph&acirc;n kh&uacute;c, đặc biệt l&agrave; khả năng chụp đ&ecirc;m khi mang tr&ecirc;n m&igrave;nh cụm camera k&eacute;p th&ocirc;ng số v&ocirc; c&ugrave;ng chất lượng. Hai cảm biến camera sau 16MP f/1.7 + 5MP f/1.9 đều c&oacute; khẩu độ cực lớn, thu s&aacute;ng tốt trong cả những điều kiện khắc nghiệt, mang đến cho bạn những bức ảnh chụp đ&ecirc;m tuyệt vời.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-1.jpg" /></p>

<p>&nbsp;</p>

<p>Chụp ảnh x&oacute;a ph&ocirc;ng tr&ecirc;n Galaxy J8 được n&acirc;ng l&ecirc;n một tầm cao mới khi kh&ocirc;ng chỉ x&oacute;a ph&ocirc;ng ch&iacute;nh x&aacute;c, l&agrave;m nổi bật chủ thể m&agrave; bạn c&ograve;n c&oacute; th&ecirc;m cả c&aacute;c bộ lọc Bokeh, tạo những hiệu ứng x&oacute;a ph&ocirc;ng kh&aacute;c nhau đầy nghệ thuật. Ảnh chụp ch&acirc;n dung của bạn sẽ ấn tượng hơn bao giờ hết.</p>',
                'review' => '<h2><strong>Camera selfie x&oacute;a ph&ocirc;ng chủ động</strong></h2>

<p>Kh&ocirc;ng chỉ camera sau m&agrave; camera trước của Galaxy J8 cũng c&oacute; khả năng chụp selfie x&oacute;a ph&ocirc;ng. Camera n&agrave;y kh&ocirc;ng chỉ độ ph&acirc;n giải cao 16MP, khẩu độ lớn f/1.9 m&agrave; c&ograve;n c&oacute; cả đ&egrave;n flash LED trợ s&aacute;ng chuy&ecirc;n nghiệp với ba mức độ s&aacute;ng kh&aacute;c nhau. Bạn sẽ được thoải m&aacute;i selfie ngay cả trong điều kiện thiếu s&aacute;ng m&agrave; h&igrave;nh ảnh vẫn ho&agrave;n hảo với độ n&eacute;t cao, &iacute;t nhiễu v&agrave; ch&acirc;n thực. T&iacute;nh năng x&oacute;a ph&ocirc;ng chủ động mang đến c&aacute;c bức ảnh selfie x&oacute;a ph&ocirc;ng theo đ&uacute;ng &yacute; bạn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-3.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>M&agrave;n h&igrave;nh v&ocirc; cực sống động từng khung h&igrave;nh</strong></h2>

<p>&nbsp;</p>

<p>Samsung tiếp tục mang tinh hoa trong c&ocirc;ng nghệ m&agrave;n h&igrave;nh của họ l&ecirc;n Galaxy J8. Đ&oacute; l&agrave; m&agrave;n h&igrave;nh v&ocirc; cực Infinity Display c&ocirc;ng nghệ Super AMOLED cao cấp. Galaxy J8 sở hữu m&agrave;n h&igrave;nh lớn 6 inch HD+, tỉ lệ mới 18,5:9 chuẩn điện ảnh v&agrave; viền m&agrave;n h&igrave;nh cực mỏng. Bạn sẽ được tận hưởng từng khung h&igrave;nh giải tr&iacute; đỉnh cao, m&agrave;u sắc sống động rực rỡ.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-4.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Thiết kế c&aacute; t&iacute;nh, sắc m&agrave;u thời thượng</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 c&oacute; kiểu d&aacute;ng rất mềm mại để đồng nhất ho&agrave;n to&agrave;n với m&agrave;n h&igrave;nh v&ocirc; cực mặt trước. Bạn sẽ được cầm tr&ecirc;n tay một chiếc m&aacute;y liền lạc, bo cong hợp l&yacute; để cảm gi&aacute;c sử dụng thoải m&aacute;i nhất. Mặc d&ugrave; kiểu d&aacute;ng mượt m&agrave; nhưng Galaxy J8 vẫn rất chắc chắn nhờ lớp vỏ kim loại sang trọng. C&oacute; ba m&agrave;u sắc c&aacute; t&iacute;nh d&agrave;nh cho bạn l&agrave; T&iacute;m Sapphire, Đen Titan v&agrave; V&agrave;ng Thạch Anh.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-5.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Bảo mật an to&agrave;n v&agrave; th&ocirc;ng minh</strong></h2>

<p>&nbsp;</p>

<p>Camera trước Galaxy J8 được tối ưu để nhận diện khu&ocirc;n mặt th&ocirc;ng minh v&agrave; nhanh ch&oacute;ng. Chỉ cần đưa m&aacute;y l&ecirc;n l&agrave; chiếc J8 của bạn sẽ tự động mở kh&oacute;a. Ấn tượng hơn, đ&egrave;n flash LED d&agrave;nh cho camera trước sẽ ph&aacute;t huy t&aacute;c dụng để bạn nhận diện được trong cả trời tối. Trong khi đ&oacute; m&aacute;y qu&eacute;t v&acirc;n tay mặt sau cũng l&agrave; một phương thức bảo mật tiện dụng kh&aacute;c m&agrave; bạn c&oacute; thể thao t&aacute;c tiện lợi d&ugrave; cầm bằng bất cứ tay tr&aacute;i hay tay phải.</p>

<p>&nbsp;</p>

<h2><strong>Hiệu năng tốt trong tầm gi&aacute;</strong></h2>

<p>&nbsp;</p>

<p>Hiệu năng Samsung Galaxy J8 kh&aacute; ổn với bộ vi xử l&yacute; Snapdragon 450 t&aacute;m nh&acirc;n xung nhịp 1,8GHz đi c&ugrave;ng 3GB RAM v&agrave; 32GB bộ nhớ trong. Cấu h&igrave;nh n&agrave;y đủ sức để J8 chạy mượt trong hầu hết c&aacute;c t&aacute;c vụ. Ngo&agrave;i ra việc chạy tr&ecirc;n hệ điều h&agrave;nh Android 8.0 Oreo mới cũng gi&uacute;p cho Galaxy J8 mượt m&agrave; v&agrave; ổn định hơn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-6.jpg" /></p>

<h2>&nbsp;</h2>

<h2><strong>Thời lượng pin xuất sắc</strong></h2>

<p>&nbsp;</p>

<p>Pin lu&ocirc;n l&agrave; điểm mạnh tr&ecirc;n những chiếc điện thoại Galaxy J v&agrave; kh&ocirc;ng c&oacute; g&igrave; ngạc nhi&ecirc;n khi Galaxy J8 c&oacute; thời lượng pin xuất sắc. Với dung lượng lớn 3500 mAh, con chip tiết kiệm điện v&agrave; cơ chế quản l&yacute; pin th&ocirc;ng minh, Galaxy J8 c&oacute; thể duyệt web tối đa trong 13 giờ qua 4G LTE, xem video li&ecirc;n tục trong 20 giờ, gọi thoại trong 23 giờ, những con số rất ấn tượng.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-2.jpg" /></p>',
                'tag' => 'Ipple',
                'price' => '25190000.00',
                'status' => 1,
                'cat_id' => 7,
                'user_id' => 1,
                'created_at' => '2018-11-24 18:48:45',
                'updated_at' => '2018-12-01 20:53:36',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'iPhone 7 Plus 128GB',
                'slug' => 'iphone-7-plus-128gb',
            'intro' => 'Apple A10 mới, 2 cammera sau,Ram 3g, 5.5 inch (1920 x 1080 pixels)',
                'promo1' => 'Đặt Online hoặc Gọi 18006601',
            'promo2' => 'Trả góp 0% (Chỉ áp dụng cho thẻ tín dụng)',
                'promo3' => 'Tặng Voucher 500.000đ mua Apple Watch',
                'packet' => '',
                'images' => '1480038525_636089592275907954_7-plus-chi-tiet.jpg',
                'r_intro' => '<h2><strong>Camera k&eacute;p chinh phục b&oacute;ng tối, x&oacute;a ph&ocirc;ng nghệ thuật</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 chắc chắn l&agrave; chiếc điện thoại c&oacute; camera đ&aacute;ng gờm nhất trong ph&acirc;n kh&uacute;c, đặc biệt l&agrave; khả năng chụp đ&ecirc;m khi mang tr&ecirc;n m&igrave;nh cụm camera k&eacute;p th&ocirc;ng số v&ocirc; c&ugrave;ng chất lượng. Hai cảm biến camera sau 16MP f/1.7 + 5MP f/1.9 đều c&oacute; khẩu độ cực lớn, thu s&aacute;ng tốt trong cả những điều kiện khắc nghiệt, mang đến cho bạn những bức ảnh chụp đ&ecirc;m tuyệt vời.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-1.jpg" /></p>

<p>&nbsp;</p>

<p>Chụp ảnh x&oacute;a ph&ocirc;ng tr&ecirc;n Galaxy J8 được n&acirc;ng l&ecirc;n một tầm cao mới khi kh&ocirc;ng chỉ x&oacute;a ph&ocirc;ng ch&iacute;nh x&aacute;c, l&agrave;m nổi bật chủ thể m&agrave; bạn c&ograve;n c&oacute; th&ecirc;m cả c&aacute;c bộ lọc Bokeh, tạo những hiệu ứng x&oacute;a ph&ocirc;ng kh&aacute;c nhau đầy nghệ thuật. Ảnh chụp ch&acirc;n dung của bạn sẽ ấn tượng hơn bao giờ hết.</p>',
                'review' => '<h2><strong>Camera selfie x&oacute;a ph&ocirc;ng chủ động</strong></h2>

<p>Kh&ocirc;ng chỉ camera sau m&agrave; camera trước của Galaxy J8 cũng c&oacute; khả năng chụp selfie x&oacute;a ph&ocirc;ng. Camera n&agrave;y kh&ocirc;ng chỉ độ ph&acirc;n giải cao 16MP, khẩu độ lớn f/1.9 m&agrave; c&ograve;n c&oacute; cả đ&egrave;n flash LED trợ s&aacute;ng chuy&ecirc;n nghiệp với ba mức độ s&aacute;ng kh&aacute;c nhau. Bạn sẽ được thoải m&aacute;i selfie ngay cả trong điều kiện thiếu s&aacute;ng m&agrave; h&igrave;nh ảnh vẫn ho&agrave;n hảo với độ n&eacute;t cao, &iacute;t nhiễu v&agrave; ch&acirc;n thực. T&iacute;nh năng x&oacute;a ph&ocirc;ng chủ động mang đến c&aacute;c bức ảnh selfie x&oacute;a ph&ocirc;ng theo đ&uacute;ng &yacute; bạn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-3.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>M&agrave;n h&igrave;nh v&ocirc; cực sống động từng khung h&igrave;nh</strong></h2>

<p>&nbsp;</p>

<p>Samsung tiếp tục mang tinh hoa trong c&ocirc;ng nghệ m&agrave;n h&igrave;nh của họ l&ecirc;n Galaxy J8. Đ&oacute; l&agrave; m&agrave;n h&igrave;nh v&ocirc; cực Infinity Display c&ocirc;ng nghệ Super AMOLED cao cấp. Galaxy J8 sở hữu m&agrave;n h&igrave;nh lớn 6 inch HD+, tỉ lệ mới 18,5:9 chuẩn điện ảnh v&agrave; viền m&agrave;n h&igrave;nh cực mỏng. Bạn sẽ được tận hưởng từng khung h&igrave;nh giải tr&iacute; đỉnh cao, m&agrave;u sắc sống động rực rỡ.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-4.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Thiết kế c&aacute; t&iacute;nh, sắc m&agrave;u thời thượng</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 c&oacute; kiểu d&aacute;ng rất mềm mại để đồng nhất ho&agrave;n to&agrave;n với m&agrave;n h&igrave;nh v&ocirc; cực mặt trước. Bạn sẽ được cầm tr&ecirc;n tay một chiếc m&aacute;y liền lạc, bo cong hợp l&yacute; để cảm gi&aacute;c sử dụng thoải m&aacute;i nhất. Mặc d&ugrave; kiểu d&aacute;ng mượt m&agrave; nhưng Galaxy J8 vẫn rất chắc chắn nhờ lớp vỏ kim loại sang trọng. C&oacute; ba m&agrave;u sắc c&aacute; t&iacute;nh d&agrave;nh cho bạn l&agrave; T&iacute;m Sapphire, Đen Titan v&agrave; V&agrave;ng Thạch Anh.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-5.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Bảo mật an to&agrave;n v&agrave; th&ocirc;ng minh</strong></h2>

<p>&nbsp;</p>

<p>Camera trước Galaxy J8 được tối ưu để nhận diện khu&ocirc;n mặt th&ocirc;ng minh v&agrave; nhanh ch&oacute;ng. Chỉ cần đưa m&aacute;y l&ecirc;n l&agrave; chiếc J8 của bạn sẽ tự động mở kh&oacute;a. Ấn tượng hơn, đ&egrave;n flash LED d&agrave;nh cho camera trước sẽ ph&aacute;t huy t&aacute;c dụng để bạn nhận diện được trong cả trời tối. Trong khi đ&oacute; m&aacute;y qu&eacute;t v&acirc;n tay mặt sau cũng l&agrave; một phương thức bảo mật tiện dụng kh&aacute;c m&agrave; bạn c&oacute; thể thao t&aacute;c tiện lợi d&ugrave; cầm bằng bất cứ tay tr&aacute;i hay tay phải.</p>

<p>&nbsp;</p>

<h2><strong>Hiệu năng tốt trong tầm gi&aacute;</strong></h2>

<p>&nbsp;</p>

<p>Hiệu năng Samsung Galaxy J8 kh&aacute; ổn với bộ vi xử l&yacute; Snapdragon 450 t&aacute;m nh&acirc;n xung nhịp 1,8GHz đi c&ugrave;ng 3GB RAM v&agrave; 32GB bộ nhớ trong. Cấu h&igrave;nh n&agrave;y đủ sức để J8 chạy mượt trong hầu hết c&aacute;c t&aacute;c vụ. Ngo&agrave;i ra việc chạy tr&ecirc;n hệ điều h&agrave;nh Android 8.0 Oreo mới cũng gi&uacute;p cho Galaxy J8 mượt m&agrave; v&agrave; ổn định hơn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-6.jpg" /></p>

<h2>&nbsp;</h2>

<h2><strong>Thời lượng pin xuất sắc</strong></h2>

<p>&nbsp;</p>

<p>Pin lu&ocirc;n l&agrave; điểm mạnh tr&ecirc;n những chiếc điện thoại Galaxy J v&agrave; kh&ocirc;ng c&oacute; g&igrave; ngạc nhi&ecirc;n khi Galaxy J8 c&oacute; thời lượng pin xuất sắc. Với dung lượng lớn 3500 mAh, con chip tiết kiệm điện v&agrave; cơ chế quản l&yacute; pin th&ocirc;ng minh, Galaxy J8 c&oacute; thể duyệt web tối đa trong 13 giờ qua 4G LTE, xem video li&ecirc;n tục trong 20 giờ, gọi thoại trong 23 giờ, những con số rất ấn tượng.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-2.jpg" /></p>',
                'tag' => 'Ipple',
                'price' => '25190000.00',
                'status' => 1,
                'cat_id' => 7,
                'user_id' => 1,
                'created_at' => '2018-11-24 18:48:45',
                'updated_at' => '2018-12-01 20:53:36',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'iPhone 7 Plus 128GB',
                'slug' => 'iphone-7-plus-128gb',
            'intro' => 'Apple A10 mới, 2 cammera sau,Ram 3g, 5.5 inch (1920 x 1080 pixels)',
                'promo1' => 'Đặt Online hoặc Gọi 18006601',
            'promo2' => 'Trả góp 0% (Chỉ áp dụng cho thẻ tín dụng)',
                'promo3' => 'Tặng Voucher 500.000đ mua Apple Watch',
                'packet' => '',
                'images' => '1480038525_636089592275907954_7-plus-chi-tiet.jpg',
                'r_intro' => '<h2><strong>Camera k&eacute;p chinh phục b&oacute;ng tối, x&oacute;a ph&ocirc;ng nghệ thuật</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 chắc chắn l&agrave; chiếc điện thoại c&oacute; camera đ&aacute;ng gờm nhất trong ph&acirc;n kh&uacute;c, đặc biệt l&agrave; khả năng chụp đ&ecirc;m khi mang tr&ecirc;n m&igrave;nh cụm camera k&eacute;p th&ocirc;ng số v&ocirc; c&ugrave;ng chất lượng. Hai cảm biến camera sau 16MP f/1.7 + 5MP f/1.9 đều c&oacute; khẩu độ cực lớn, thu s&aacute;ng tốt trong cả những điều kiện khắc nghiệt, mang đến cho bạn những bức ảnh chụp đ&ecirc;m tuyệt vời.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-1.jpg" /></p>

<p>&nbsp;</p>

<p>Chụp ảnh x&oacute;a ph&ocirc;ng tr&ecirc;n Galaxy J8 được n&acirc;ng l&ecirc;n một tầm cao mới khi kh&ocirc;ng chỉ x&oacute;a ph&ocirc;ng ch&iacute;nh x&aacute;c, l&agrave;m nổi bật chủ thể m&agrave; bạn c&ograve;n c&oacute; th&ecirc;m cả c&aacute;c bộ lọc Bokeh, tạo những hiệu ứng x&oacute;a ph&ocirc;ng kh&aacute;c nhau đầy nghệ thuật. Ảnh chụp ch&acirc;n dung của bạn sẽ ấn tượng hơn bao giờ hết.</p>',
                'review' => '<h2><strong>Camera selfie x&oacute;a ph&ocirc;ng chủ động</strong></h2>

<p>Kh&ocirc;ng chỉ camera sau m&agrave; camera trước của Galaxy J8 cũng c&oacute; khả năng chụp selfie x&oacute;a ph&ocirc;ng. Camera n&agrave;y kh&ocirc;ng chỉ độ ph&acirc;n giải cao 16MP, khẩu độ lớn f/1.9 m&agrave; c&ograve;n c&oacute; cả đ&egrave;n flash LED trợ s&aacute;ng chuy&ecirc;n nghiệp với ba mức độ s&aacute;ng kh&aacute;c nhau. Bạn sẽ được thoải m&aacute;i selfie ngay cả trong điều kiện thiếu s&aacute;ng m&agrave; h&igrave;nh ảnh vẫn ho&agrave;n hảo với độ n&eacute;t cao, &iacute;t nhiễu v&agrave; ch&acirc;n thực. T&iacute;nh năng x&oacute;a ph&ocirc;ng chủ động mang đến c&aacute;c bức ảnh selfie x&oacute;a ph&ocirc;ng theo đ&uacute;ng &yacute; bạn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-3.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>M&agrave;n h&igrave;nh v&ocirc; cực sống động từng khung h&igrave;nh</strong></h2>

<p>&nbsp;</p>

<p>Samsung tiếp tục mang tinh hoa trong c&ocirc;ng nghệ m&agrave;n h&igrave;nh của họ l&ecirc;n Galaxy J8. Đ&oacute; l&agrave; m&agrave;n h&igrave;nh v&ocirc; cực Infinity Display c&ocirc;ng nghệ Super AMOLED cao cấp. Galaxy J8 sở hữu m&agrave;n h&igrave;nh lớn 6 inch HD+, tỉ lệ mới 18,5:9 chuẩn điện ảnh v&agrave; viền m&agrave;n h&igrave;nh cực mỏng. Bạn sẽ được tận hưởng từng khung h&igrave;nh giải tr&iacute; đỉnh cao, m&agrave;u sắc sống động rực rỡ.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-4.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Thiết kế c&aacute; t&iacute;nh, sắc m&agrave;u thời thượng</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 c&oacute; kiểu d&aacute;ng rất mềm mại để đồng nhất ho&agrave;n to&agrave;n với m&agrave;n h&igrave;nh v&ocirc; cực mặt trước. Bạn sẽ được cầm tr&ecirc;n tay một chiếc m&aacute;y liền lạc, bo cong hợp l&yacute; để cảm gi&aacute;c sử dụng thoải m&aacute;i nhất. Mặc d&ugrave; kiểu d&aacute;ng mượt m&agrave; nhưng Galaxy J8 vẫn rất chắc chắn nhờ lớp vỏ kim loại sang trọng. C&oacute; ba m&agrave;u sắc c&aacute; t&iacute;nh d&agrave;nh cho bạn l&agrave; T&iacute;m Sapphire, Đen Titan v&agrave; V&agrave;ng Thạch Anh.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-5.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Bảo mật an to&agrave;n v&agrave; th&ocirc;ng minh</strong></h2>

<p>&nbsp;</p>

<p>Camera trước Galaxy J8 được tối ưu để nhận diện khu&ocirc;n mặt th&ocirc;ng minh v&agrave; nhanh ch&oacute;ng. Chỉ cần đưa m&aacute;y l&ecirc;n l&agrave; chiếc J8 của bạn sẽ tự động mở kh&oacute;a. Ấn tượng hơn, đ&egrave;n flash LED d&agrave;nh cho camera trước sẽ ph&aacute;t huy t&aacute;c dụng để bạn nhận diện được trong cả trời tối. Trong khi đ&oacute; m&aacute;y qu&eacute;t v&acirc;n tay mặt sau cũng l&agrave; một phương thức bảo mật tiện dụng kh&aacute;c m&agrave; bạn c&oacute; thể thao t&aacute;c tiện lợi d&ugrave; cầm bằng bất cứ tay tr&aacute;i hay tay phải.</p>

<p>&nbsp;</p>

<h2><strong>Hiệu năng tốt trong tầm gi&aacute;</strong></h2>

<p>&nbsp;</p>

<p>Hiệu năng Samsung Galaxy J8 kh&aacute; ổn với bộ vi xử l&yacute; Snapdragon 450 t&aacute;m nh&acirc;n xung nhịp 1,8GHz đi c&ugrave;ng 3GB RAM v&agrave; 32GB bộ nhớ trong. Cấu h&igrave;nh n&agrave;y đủ sức để J8 chạy mượt trong hầu hết c&aacute;c t&aacute;c vụ. Ngo&agrave;i ra việc chạy tr&ecirc;n hệ điều h&agrave;nh Android 8.0 Oreo mới cũng gi&uacute;p cho Galaxy J8 mượt m&agrave; v&agrave; ổn định hơn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-6.jpg" /></p>

<h2>&nbsp;</h2>

<h2><strong>Thời lượng pin xuất sắc</strong></h2>

<p>&nbsp;</p>

<p>Pin lu&ocirc;n l&agrave; điểm mạnh tr&ecirc;n những chiếc điện thoại Galaxy J v&agrave; kh&ocirc;ng c&oacute; g&igrave; ngạc nhi&ecirc;n khi Galaxy J8 c&oacute; thời lượng pin xuất sắc. Với dung lượng lớn 3500 mAh, con chip tiết kiệm điện v&agrave; cơ chế quản l&yacute; pin th&ocirc;ng minh, Galaxy J8 c&oacute; thể duyệt web tối đa trong 13 giờ qua 4G LTE, xem video li&ecirc;n tục trong 20 giờ, gọi thoại trong 23 giờ, những con số rất ấn tượng.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-2.jpg" /></p>',
                'tag' => 'Ipple',
                'price' => '25190000.00',
                'status' => 1,
                'cat_id' => 7,
                'user_id' => 1,
                'created_at' => '2018-11-24 18:48:45',
                'updated_at' => '2018-12-01 20:53:36',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'ZENFONE 3 MAX',
                'slug' => 'zenfone-3-max',
                'intro' => 'sắp ra mắt',
            'promo1' => 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):',
                'promo2' => 'Hoặc Tặng Vali Lock & Lock ',
                'promo3' => 'Tặng Voucher 500.000đ mua Apple Watch',
                'packet' => ' Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ',
                'images' => '1480399412_asus-zenfone-3-max-400-400x460.png',
                'r_intro' => '<p>sắp ra mắt</p>
',
                'review' => '<p>sản phẩm sắp được ra mắt</p>
',
                'tag' => 'Galaxy S8, Galaxy S8,Galaxy S8',
                'price' => '18490000.00',
                'status' => 1,
                'cat_id' => 14,
                'user_id' => 1,
                'created_at' => '2018-11-25 23:45:03',
                'updated_at' => '2018-11-28 23:03:32',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'ZENFONE 3 MAX',
                'slug' => 'zenfone-3-max',
                'intro' => 'sắp ra mắt',
            'promo1' => 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):',
                'promo2' => 'Hoặc Tặng Vali Lock & Lock ',
                'promo3' => 'Tặng Voucher 500.000đ mua Apple Watch',
                'packet' => ' Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ',
                'images' => '1480399412_asus-zenfone-3-max-400-400x460.png',
                'r_intro' => '<p>sắp ra mắt</p>
',
                'review' => '<p>sản phẩm sắp được ra mắt</p>
',
                'tag' => 'Galaxy S8, Galaxy S8,Galaxy S8',
                'price' => '18490000.00',
                'status' => 1,
                'cat_id' => 14,
                'user_id' => 1,
                'created_at' => '2018-11-25 23:45:03',
                'updated_at' => '2018-11-28 23:03:32',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'ZENFONE 3 MAX',
                'slug' => 'zenfone-3-max',
                'intro' => 'sắp ra mắt',
            'promo1' => 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):',
                'promo2' => 'Hoặc Tặng Vali Lock & Lock ',
                'promo3' => 'Tặng Voucher 500.000đ mua Apple Watch',
                'packet' => ' Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ',
                'images' => '1480399412_asus-zenfone-3-max-400-400x460.png',
                'r_intro' => '<p>sắp ra mắt</p>
',
                'review' => '<p>sản phẩm sắp được ra mắt</p>
',
                'tag' => 'Galaxy S8, Galaxy S8,Galaxy S8',
                'price' => '18490000.00',
                'status' => 1,
                'cat_id' => 14,
                'user_id' => 1,
                'created_at' => '2018-11-25 23:45:03',
                'updated_at' => '2018-11-28 23:03:32',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'ZENFONE 3 MAX',
                'slug' => 'zenfone-3-max',
                'intro' => 'sắp ra mắt',
            'promo1' => 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):',
                'promo2' => 'Hoặc Tặng Vali Lock & Lock ',
                'promo3' => 'Tặng Voucher 500.000đ mua Apple Watch',
                'packet' => ' Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ',
                'images' => '1480399412_asus-zenfone-3-max-400-400x460.png',
                'r_intro' => '<p>sắp ra mắt</p>
',
                'review' => '<p>sản phẩm sắp được ra mắt</p>
',
                'tag' => 'Galaxy S8, Galaxy S8,Galaxy S8',
                'price' => '18490000.00',
                'status' => 1,
                'cat_id' => 14,
                'user_id' => 1,
                'created_at' => '2018-11-25 23:45:03',
                'updated_at' => '2018-11-28 23:03:32',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'ZENFONE 3 MAX',
                'slug' => 'zenfone-3-max',
                'intro' => 'sắp ra mắt',
            'promo1' => 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):',
                'promo2' => 'Hoặc Tặng Vali Lock & Lock ',
                'promo3' => 'Tặng Voucher 500.000đ mua Apple Watch',
                'packet' => ' Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ',
                'images' => '1480399412_asus-zenfone-3-max-400-400x460.png',
                'r_intro' => '<p>sắp ra mắt</p>
',
                'review' => '<p>sản phẩm sắp được ra mắt</p>
',
                'tag' => 'Galaxy S8, Galaxy S8,Galaxy S8',
                'price' => '18490000.00',
                'status' => 1,
                'cat_id' => 14,
                'user_id' => 1,
                'created_at' => '2018-11-25 23:45:03',
                'updated_at' => '2018-11-28 23:03:32',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Zenfone 2 Laser',
                'slug' => 'zenfone-2-laser',
                'intro' => 'sắp ra mắt',
            'promo1' => 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):',
                'promo2' => 'Hoặc Tặng Vali Lock & Lock ',
                'promo3' => 'Tặng Voucher 500.000đ mua Apple Watch',
                'packet' => ' Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ',
                'images' => '1480399445_asus-zenfone-2-laser-1-400x460.png',
                'r_intro' => '<p>sắp ra mắt</p>
',
                'review' => '<p>sản phẩm sắp được ra mắt</p>
',
                'tag' => 'Galaxy S8, Galaxy S8,Galaxy S8',
                'price' => '18490000.00',
                'status' => 1,
                'cat_id' => 14,
                'user_id' => 1,
                'created_at' => '2018-11-25 23:45:08',
                'updated_at' => '2018-11-28 23:04:05',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Zenfone 2 Laser',
                'slug' => 'zenfone-2-laser',
                'intro' => 'sắp ra mắt',
            'promo1' => 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):',
                'promo2' => 'Hoặc Tặng Vali Lock & Lock ',
                'promo3' => 'Tặng Voucher 500.000đ mua Apple Watch',
                'packet' => ' Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ',
                'images' => '1480399445_asus-zenfone-2-laser-1-400x460.png',
                'r_intro' => '<p>sắp ra mắt</p>
',
                'review' => '<p>sản phẩm sắp được ra mắt</p>
',
                'tag' => 'Galaxy S8, Galaxy S8,Galaxy S8',
                'price' => '18490000.00',
                'status' => 1,
                'cat_id' => 14,
                'user_id' => 1,
                'created_at' => '2018-11-25 23:45:08',
                'updated_at' => '2018-11-28 23:04:05',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Zenfone 2 Laser',
                'slug' => 'zenfone-2-laser',
                'intro' => 'sắp ra mắt',
            'promo1' => 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):',
                'promo2' => 'Hoặc Tặng Vali Lock & Lock ',
                'promo3' => 'Tặng Voucher 500.000đ mua Apple Watch',
                'packet' => ' Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ',
                'images' => '1480399445_asus-zenfone-2-laser-1-400x460.png',
                'r_intro' => '<p>sắp ra mắt</p>
',
                'review' => '<p>sản phẩm sắp được ra mắt</p>
',
                'tag' => 'Galaxy S8, Galaxy S8,Galaxy S8',
                'price' => '18490000.00',
                'status' => 1,
                'cat_id' => 9,
                'user_id' => 1,
                'created_at' => '2018-11-25 23:45:08',
                'updated_at' => '2018-11-28 23:04:05',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Zenfone 2 Laser',
                'slug' => 'zenfone-2-laser',
                'intro' => 'sắp ra mắt',
            'promo1' => 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):',
                'promo2' => 'Hoặc Tặng Vali Lock & Lock ',
                'promo3' => 'Tặng Voucher 500.000đ mua Apple Watch',
                'packet' => ' Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ',
                'images' => '1480399445_asus-zenfone-2-laser-1-400x460.png',
                'r_intro' => '<p>sắp ra mắt</p>
',
                'review' => '<p>sản phẩm sắp được ra mắt</p>
',
                'tag' => 'Galaxy S8, Galaxy S8,Galaxy S8',
                'price' => '18490000.00',
                'status' => 1,
                'cat_id' => 9,
                'user_id' => 1,
                'created_at' => '2018-11-25 23:45:08',
                'updated_at' => '2018-11-28 23:04:05',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Zenfone 2 Laser',
                'slug' => 'zenfone-2-laser',
                'intro' => 'sắp ra mắt',
            'promo1' => 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):',
                'promo2' => 'Hoặc Tặng Vali Lock & Lock ',
                'promo3' => 'Tặng Voucher 500.000đ mua Apple Watch',
                'packet' => ' Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ',
                'images' => '1480399445_asus-zenfone-2-laser-1-400x460.png',
                'r_intro' => '<p>sắp ra mắt</p>
',
                'review' => '<p>sản phẩm sắp được ra mắt</p>
',
                'tag' => 'Galaxy S8, Galaxy S8,Galaxy S8',
                'price' => '18490000.00',
                'status' => 1,
                'cat_id' => 9,
                'user_id' => 1,
                'created_at' => '2018-11-25 23:45:08',
                'updated_at' => '2018-11-28 23:04:05',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Zenfone 2 Laser',
                'slug' => 'zenfone-2-laser',
                'intro' => 'sắp ra mắt',
            'promo1' => 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):',
                'promo2' => 'Hoặc Tặng Vali Lock & Lock ',
                'promo3' => 'Tặng Voucher 500.000đ mua Apple Watch',
                'packet' => ' Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ',
                'images' => '1480399445_asus-zenfone-2-laser-1-400x460.png',
                'r_intro' => '<p>sắp ra mắt</p>
',
                'review' => '<p>sản phẩm sắp được ra mắt</p>
',
                'tag' => 'Galaxy S8, Galaxy S8,Galaxy S8',
                'price' => '18490000.00',
                'status' => 1,
                'cat_id' => 9,
                'user_id' => 1,
                'created_at' => '2018-11-25 23:45:08',
                'updated_at' => '2018-11-28 23:04:05',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Zenfone 2 Laser',
                'slug' => 'zenfone-2-laser',
                'intro' => 'sắp ra mắt',
            'promo1' => 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):',
                'promo2' => 'Hoặc Tặng Vali Lock & Lock ',
                'promo3' => 'Tặng Voucher 500.000đ mua Apple Watch',
                'packet' => ' Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ',
                'images' => '1480399445_asus-zenfone-2-laser-1-400x460.png',
                'r_intro' => '<p>sắp ra mắt</p>
',
                'review' => '<p>sản phẩm sắp được ra mắt</p>
',
                'tag' => 'Galaxy S8, Galaxy S8,Galaxy S8',
                'price' => '18490000.00',
                'status' => 1,
                'cat_id' => 10,
                'user_id' => 1,
                'created_at' => '2018-11-25 23:45:08',
                'updated_at' => '2018-11-28 23:04:05',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Zenfone 2 Laser',
                'slug' => 'zenfone-2-laser',
                'intro' => 'sắp ra mắt',
            'promo1' => 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):',
                'promo2' => 'Hoặc Tặng Vali Lock & Lock ',
                'promo3' => 'Tặng Voucher 500.000đ mua Apple Watch',
                'packet' => ' Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ',
                'images' => '1480399445_asus-zenfone-2-laser-1-400x460.png',
                'r_intro' => '<p>sắp ra mắt</p>
',
                'review' => '<p>sản phẩm sắp được ra mắt</p>
',
                'tag' => 'Galaxy S8, Galaxy S8,Galaxy S8',
                'price' => '18490000.00',
                'status' => 1,
                'cat_id' => 10,
                'user_id' => 1,
                'created_at' => '2018-11-25 23:45:08',
                'updated_at' => '2018-11-28 23:04:05',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Zenfone 2 Laser',
                'slug' => 'zenfone-2-laser',
                'intro' => 'sắp ra mắt',
            'promo1' => 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):',
                'promo2' => 'Hoặc Tặng Vali Lock & Lock ',
                'promo3' => 'Tặng Voucher 500.000đ mua Apple Watch',
                'packet' => ' Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ',
                'images' => '1480399445_asus-zenfone-2-laser-1-400x460.png',
                'r_intro' => '<p>sắp ra mắt</p>
',
                'review' => '<p>sản phẩm sắp được ra mắt</p>
',
                'tag' => 'Galaxy S8, Galaxy S8,Galaxy S8',
                'price' => '18490000.00',
                'status' => 1,
                'cat_id' => 10,
                'user_id' => 1,
                'created_at' => '2018-11-25 23:45:08',
                'updated_at' => '2018-11-28 23:04:05',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Zenfone 2 Laser',
                'slug' => 'zenfone-2-laser',
                'intro' => 'sắp ra mắt',
            'promo1' => 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):',
                'promo2' => 'Hoặc Tặng Vali Lock & Lock ',
                'promo3' => 'Tặng Voucher 500.000đ mua Apple Watch',
                'packet' => ' Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ',
                'images' => '1480399445_asus-zenfone-2-laser-1-400x460.png',
                'r_intro' => '<p>sắp ra mắt</p>
',
                'review' => '<p>sản phẩm sắp được ra mắt</p>
',
                'tag' => 'Galaxy S8, Galaxy S8,Galaxy S8',
                'price' => '18490000.00',
                'status' => 1,
                'cat_id' => 10,
                'user_id' => 1,
                'created_at' => '2018-11-25 23:45:08',
                'updated_at' => '2018-11-28 23:04:05',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Zenfone 2 Laser',
                'slug' => 'zenfone-2-laser',
                'intro' => 'sắp ra mắt',
            'promo1' => 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):',
                'promo2' => 'Hoặc Tặng Vali Lock & Lock ',
                'promo3' => 'Tặng Voucher 500.000đ mua Apple Watch',
                'packet' => ' Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ',
                'images' => '1480399445_asus-zenfone-2-laser-1-400x460.png',
                'r_intro' => '<p>sắp ra mắt</p>
',
                'review' => '<p>sản phẩm sắp được ra mắt</p>
',
                'tag' => 'Galaxy S8, Galaxy S8,Galaxy S8',
                'price' => '18490000.00',
                'status' => 1,
                'cat_id' => 11,
                'user_id' => 1,
                'created_at' => '2018-11-25 23:45:08',
                'updated_at' => '2018-11-28 23:04:05',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Zenfone 2 Laser',
                'slug' => 'zenfone-2-laser',
                'intro' => 'sắp ra mắt',
            'promo1' => 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):',
                'promo2' => 'Hoặc Tặng Vali Lock & Lock ',
                'promo3' => 'Tặng Voucher 500.000đ mua Apple Watch',
                'packet' => ' Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ',
                'images' => '1480399445_asus-zenfone-2-laser-1-400x460.png',
                'r_intro' => '<p>sắp ra mắt</p>
',
                'review' => '<p>sản phẩm sắp được ra mắt</p>
',
                'tag' => 'Galaxy S8, Galaxy S8,Galaxy S8',
                'price' => '18490000.00',
                'status' => 1,
                'cat_id' => 11,
                'user_id' => 1,
                'created_at' => '2018-11-25 23:45:08',
                'updated_at' => '2018-11-28 23:04:05',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Zenfone 2 Laser',
                'slug' => 'zenfone-2-laser',
                'intro' => 'sắp ra mắt',
            'promo1' => 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):',
                'promo2' => 'Hoặc Tặng Vali Lock & Lock ',
                'promo3' => 'Tặng Voucher 500.000đ mua Apple Watch',
                'packet' => ' Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ',
                'images' => '1480399445_asus-zenfone-2-laser-1-400x460.png',
                'r_intro' => '<p>sắp ra mắt</p>
',
                'review' => '<p>sản phẩm sắp được ra mắt</p>
',
                'tag' => 'Galaxy S8, Galaxy S8,Galaxy S8',
                'price' => '18490000.00',
                'status' => 1,
                'cat_id' => 11,
                'user_id' => 1,
                'created_at' => '2018-11-25 23:45:08',
                'updated_at' => '2018-11-28 23:04:05',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Zenfone 2 Laser',
                'slug' => 'zenfone-2-laser',
                'intro' => 'sắp ra mắt',
            'promo1' => 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):',
                'promo2' => 'Hoặc Tặng Vali Lock & Lock ',
                'promo3' => 'Tặng Voucher 500.000đ mua Apple Watch',
                'packet' => ' Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ',
                'images' => '1480399445_asus-zenfone-2-laser-1-400x460.png',
                'r_intro' => '<p>sắp ra mắt</p>
',
                'review' => '<p>sản phẩm sắp được ra mắt</p>
',
                'tag' => 'Galaxy S8, Galaxy S8,Galaxy S8',
                'price' => '18490000.00',
                'status' => 1,
                'cat_id' => 11,
                'user_id' => 1,
                'created_at' => '2018-11-25 23:45:08',
                'updated_at' => '2018-11-28 23:04:05',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Zenfone 2 Laser',
                'slug' => 'zenfone-2-laser',
                'intro' => 'sắp ra mắt',
            'promo1' => 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):',
                'promo2' => 'Hoặc Tặng Vali Lock & Lock ',
                'promo3' => 'Tặng Voucher 500.000đ mua Apple Watch',
                'packet' => ' Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ',
                'images' => '1480399445_asus-zenfone-2-laser-1-400x460.png',
                'r_intro' => '<p>sắp ra mắt</p>
',
                'review' => '<p>sản phẩm sắp được ra mắt</p>
',
                'tag' => 'Galaxy S8, Galaxy S8,Galaxy S8',
                'price' => '18490000.00',
                'status' => 1,
                'cat_id' => 12,
                'user_id' => 1,
                'created_at' => '2018-11-25 23:45:08',
                'updated_at' => '2018-11-28 23:04:05',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'Zenfone 2 Laser',
                'slug' => 'zenfone-2-laser',
                'intro' => 'sắp ra mắt',
            'promo1' => 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):',
                'promo2' => 'Hoặc Tặng Vali Lock & Lock ',
                'promo3' => 'Tặng Voucher 500.000đ mua Apple Watch',
                'packet' => ' Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ',
                'images' => '1480399445_asus-zenfone-2-laser-1-400x460.png',
                'r_intro' => '<p>sắp ra mắt</p>
',
                'review' => '<p>sản phẩm sắp được ra mắt</p>
',
                'tag' => 'Galaxy S8, Galaxy S8,Galaxy S8',
                'price' => '18490000.00',
                'status' => 1,
                'cat_id' => 12,
                'user_id' => 1,
                'created_at' => '2018-11-25 23:45:08',
                'updated_at' => '2018-11-28 23:04:05',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Zenfone 2 Laser',
                'slug' => 'zenfone-2-laser',
                'intro' => 'sắp ra mắt',
            'promo1' => 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):',
                'promo2' => 'Hoặc Tặng Vali Lock & Lock ',
                'promo3' => 'Tặng Voucher 500.000đ mua Apple Watch',
                'packet' => ' Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ',
                'images' => '1480399445_asus-zenfone-2-laser-1-400x460.png',
                'r_intro' => '<p>sắp ra mắt</p>
',
                'review' => '<p>sản phẩm sắp được ra mắt</p>
',
                'tag' => 'Galaxy S8, Galaxy S8,Galaxy S8',
                'price' => '18490000.00',
                'status' => 1,
                'cat_id' => 12,
                'user_id' => 1,
                'created_at' => '2018-11-25 23:45:08',
                'updated_at' => '2018-11-28 23:04:05',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'Zenfone 2 Laser',
                'slug' => 'zenfone-2-laser',
                'intro' => 'sắp ra mắt',
            'promo1' => 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):',
                'promo2' => 'Hoặc Tặng Vali Lock & Lock ',
                'promo3' => 'Tặng Voucher 500.000đ mua Apple Watch',
                'packet' => ' Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ',
                'images' => '1480399445_asus-zenfone-2-laser-1-400x460.png',
                'r_intro' => '<p>sắp ra mắt</p>
',
                'review' => '<p>sản phẩm sắp được ra mắt</p>
',
                'tag' => 'Galaxy S8, Galaxy S8,Galaxy S8',
                'price' => '18490000.00',
                'status' => 1,
                'cat_id' => 12,
                'user_id' => 1,
                'created_at' => '2018-11-25 23:45:08',
                'updated_at' => '2018-11-28 23:04:05',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Zenfone 2 Laser',
                'slug' => 'zenfone-2-laser',
                'intro' => 'sắp ra mắt',
            'promo1' => 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):',
                'promo2' => 'Hoặc Tặng Vali Lock & Lock ',
                'promo3' => 'Tặng Voucher 500.000đ mua Apple Watch',
                'packet' => ' Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ',
                'images' => '1480399445_asus-zenfone-2-laser-1-400x460.png',
                'r_intro' => '<p>sắp ra mắt</p>
',
                'review' => '<p>sản phẩm sắp được ra mắt</p>
',
                'tag' => 'Galaxy S8, Galaxy S8,Galaxy S8',
                'price' => '18490000.00',
                'status' => 1,
                'cat_id' => 13,
                'user_id' => 1,
                'created_at' => '2018-11-25 23:45:08',
                'updated_at' => '2018-11-28 23:04:05',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Zenfone 2 Laser',
                'slug' => 'zenfone-2-laser',
                'intro' => 'sắp ra mắt',
            'promo1' => 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):',
                'promo2' => 'Hoặc Tặng Vali Lock & Lock ',
                'promo3' => 'Tặng Voucher 500.000đ mua Apple Watch',
                'packet' => ' Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ',
                'images' => '1480399445_asus-zenfone-2-laser-1-400x460.png',
                'r_intro' => '<p>sắp ra mắt</p>
',
                'review' => '<h2><strong>Camera selfie x&oacute;a ph&ocirc;ng chủ động</strong></h2>

<p>Kh&ocirc;ng chỉ camera sau m&agrave; camera trước của Galaxy J8 cũng c&oacute; khả năng chụp selfie x&oacute;a ph&ocirc;ng. Camera n&agrave;y kh&ocirc;ng chỉ độ ph&acirc;n giải cao 16MP, khẩu độ lớn f/1.9 m&agrave; c&ograve;n c&oacute; cả đ&egrave;n flash LED trợ s&aacute;ng chuy&ecirc;n nghiệp với ba mức độ s&aacute;ng kh&aacute;c nhau. Bạn sẽ được thoải m&aacute;i selfie ngay cả trong điều kiện thiếu s&aacute;ng m&agrave; h&igrave;nh ảnh vẫn ho&agrave;n hảo với độ n&eacute;t cao, &iacute;t nhiễu v&agrave; ch&acirc;n thực. T&iacute;nh năng x&oacute;a ph&ocirc;ng chủ động mang đến c&aacute;c bức ảnh selfie x&oacute;a ph&ocirc;ng theo đ&uacute;ng &yacute; bạn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-3.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>M&agrave;n h&igrave;nh v&ocirc; cực sống động từng khung h&igrave;nh</strong></h2>

<p>&nbsp;</p>

<p>Samsung tiếp tục mang tinh hoa trong c&ocirc;ng nghệ m&agrave;n h&igrave;nh của họ l&ecirc;n Galaxy J8. Đ&oacute; l&agrave; m&agrave;n h&igrave;nh v&ocirc; cực Infinity Display c&ocirc;ng nghệ Super AMOLED cao cấp. Galaxy J8 sở hữu m&agrave;n h&igrave;nh lớn 6 inch HD+, tỉ lệ mới 18,5:9 chuẩn điện ảnh v&agrave; viền m&agrave;n h&igrave;nh cực mỏng. Bạn sẽ được tận hưởng từng khung h&igrave;nh giải tr&iacute; đỉnh cao, m&agrave;u sắc sống động rực rỡ.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-4.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Thiết kế c&aacute; t&iacute;nh, sắc m&agrave;u thời thượng</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 c&oacute; kiểu d&aacute;ng rất mềm mại để đồng nhất ho&agrave;n to&agrave;n với m&agrave;n h&igrave;nh v&ocirc; cực mặt trước. Bạn sẽ được cầm tr&ecirc;n tay một chiếc m&aacute;y liền lạc, bo cong hợp l&yacute; để cảm gi&aacute;c sử dụng thoải m&aacute;i nhất. Mặc d&ugrave; kiểu d&aacute;ng mượt m&agrave; nhưng Galaxy J8 vẫn rất chắc chắn nhờ lớp vỏ kim loại sang trọng. C&oacute; ba m&agrave;u sắc c&aacute; t&iacute;nh d&agrave;nh cho bạn l&agrave; T&iacute;m Sapphire, Đen Titan v&agrave; V&agrave;ng Thạch Anh.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-5.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Bảo mật an to&agrave;n v&agrave; th&ocirc;ng minh</strong></h2>

<p>&nbsp;</p>

<p>Camera trước Galaxy J8 được tối ưu để nhận diện khu&ocirc;n mặt th&ocirc;ng minh v&agrave; nhanh ch&oacute;ng. Chỉ cần đưa m&aacute;y l&ecirc;n l&agrave; chiếc J8 của bạn sẽ tự động mở kh&oacute;a. Ấn tượng hơn, đ&egrave;n flash LED d&agrave;nh cho camera trước sẽ ph&aacute;t huy t&aacute;c dụng để bạn nhận diện được trong cả trời tối. Trong khi đ&oacute; m&aacute;y qu&eacute;t v&acirc;n tay mặt sau cũng l&agrave; một phương thức bảo mật tiện dụng kh&aacute;c m&agrave; bạn c&oacute; thể thao t&aacute;c tiện lợi d&ugrave; cầm bằng bất cứ tay tr&aacute;i hay tay phải.</p>

<p>&nbsp;</p>

<h2><strong>Hiệu năng tốt trong tầm gi&aacute;</strong></h2>

<p>&nbsp;</p>

<p>Hiệu năng Samsung Galaxy J8 kh&aacute; ổn với bộ vi xử l&yacute; Snapdragon 450 t&aacute;m nh&acirc;n xung nhịp 1,8GHz đi c&ugrave;ng 3GB RAM v&agrave; 32GB bộ nhớ trong. Cấu h&igrave;nh n&agrave;y đủ sức để J8 chạy mượt trong hầu hết c&aacute;c t&aacute;c vụ. Ngo&agrave;i ra việc chạy tr&ecirc;n hệ điều h&agrave;nh Android 8.0 Oreo mới cũng gi&uacute;p cho Galaxy J8 mượt m&agrave; v&agrave; ổn định hơn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-6.jpg" /></p>

<h2>&nbsp;</h2>

<h2><strong>Thời lượng pin xuất sắc</strong></h2>

<p>&nbsp;</p>

<p>Pin lu&ocirc;n l&agrave; điểm mạnh tr&ecirc;n những chiếc điện thoại Galaxy J v&agrave; kh&ocirc;ng c&oacute; g&igrave; ngạc nhi&ecirc;n khi Galaxy J8 c&oacute; thời lượng pin xuất sắc. Với dung lượng lớn 3500 mAh, con chip tiết kiệm điện v&agrave; cơ chế quản l&yacute; pin th&ocirc;ng minh, Galaxy J8 c&oacute; thể duyệt web tối đa trong 13 giờ qua 4G LTE, xem video li&ecirc;n tục trong 20 giờ, gọi thoại trong 23 giờ, những con số rất ấn tượng.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-2.jpg" /></p>',
                'tag' => 'Galaxy S8, Galaxy S8,Galaxy S8',
                'price' => '18490000.00',
                'status' => 1,
                'cat_id' => 13,
                'user_id' => 1,
                'created_at' => '2018-11-25 23:45:08',
                'updated_at' => '2018-11-28 23:04:05',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Zenfone 2 Laser',
                'slug' => 'zenfone-2-laser',
                'intro' => 'sắp ra mắt',
            'promo1' => 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):',
                'promo2' => 'Hoặc Tặng Vali Lock & Lock ',
                'promo3' => 'Tặng Voucher 500.000đ mua Apple Watch',
                'packet' => ' Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ',
                'images' => '1480399445_asus-zenfone-2-laser-1-400x460.png',
                'r_intro' => '<p>sắp ra mắt</p>
',
                'review' => '<h2><strong>Camera selfie x&oacute;a ph&ocirc;ng chủ động</strong></h2>

<p>Kh&ocirc;ng chỉ camera sau m&agrave; camera trước của Galaxy J8 cũng c&oacute; khả năng chụp selfie x&oacute;a ph&ocirc;ng. Camera n&agrave;y kh&ocirc;ng chỉ độ ph&acirc;n giải cao 16MP, khẩu độ lớn f/1.9 m&agrave; c&ograve;n c&oacute; cả đ&egrave;n flash LED trợ s&aacute;ng chuy&ecirc;n nghiệp với ba mức độ s&aacute;ng kh&aacute;c nhau. Bạn sẽ được thoải m&aacute;i selfie ngay cả trong điều kiện thiếu s&aacute;ng m&agrave; h&igrave;nh ảnh vẫn ho&agrave;n hảo với độ n&eacute;t cao, &iacute;t nhiễu v&agrave; ch&acirc;n thực. T&iacute;nh năng x&oacute;a ph&ocirc;ng chủ động mang đến c&aacute;c bức ảnh selfie x&oacute;a ph&ocirc;ng theo đ&uacute;ng &yacute; bạn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-3.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>M&agrave;n h&igrave;nh v&ocirc; cực sống động từng khung h&igrave;nh</strong></h2>

<p>&nbsp;</p>

<p>Samsung tiếp tục mang tinh hoa trong c&ocirc;ng nghệ m&agrave;n h&igrave;nh của họ l&ecirc;n Galaxy J8. Đ&oacute; l&agrave; m&agrave;n h&igrave;nh v&ocirc; cực Infinity Display c&ocirc;ng nghệ Super AMOLED cao cấp. Galaxy J8 sở hữu m&agrave;n h&igrave;nh lớn 6 inch HD+, tỉ lệ mới 18,5:9 chuẩn điện ảnh v&agrave; viền m&agrave;n h&igrave;nh cực mỏng. Bạn sẽ được tận hưởng từng khung h&igrave;nh giải tr&iacute; đỉnh cao, m&agrave;u sắc sống động rực rỡ.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-4.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Thiết kế c&aacute; t&iacute;nh, sắc m&agrave;u thời thượng</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 c&oacute; kiểu d&aacute;ng rất mềm mại để đồng nhất ho&agrave;n to&agrave;n với m&agrave;n h&igrave;nh v&ocirc; cực mặt trước. Bạn sẽ được cầm tr&ecirc;n tay một chiếc m&aacute;y liền lạc, bo cong hợp l&yacute; để cảm gi&aacute;c sử dụng thoải m&aacute;i nhất. Mặc d&ugrave; kiểu d&aacute;ng mượt m&agrave; nhưng Galaxy J8 vẫn rất chắc chắn nhờ lớp vỏ kim loại sang trọng. C&oacute; ba m&agrave;u sắc c&aacute; t&iacute;nh d&agrave;nh cho bạn l&agrave; T&iacute;m Sapphire, Đen Titan v&agrave; V&agrave;ng Thạch Anh.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-5.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Bảo mật an to&agrave;n v&agrave; th&ocirc;ng minh</strong></h2>

<p>&nbsp;</p>

<p>Camera trước Galaxy J8 được tối ưu để nhận diện khu&ocirc;n mặt th&ocirc;ng minh v&agrave; nhanh ch&oacute;ng. Chỉ cần đưa m&aacute;y l&ecirc;n l&agrave; chiếc J8 của bạn sẽ tự động mở kh&oacute;a. Ấn tượng hơn, đ&egrave;n flash LED d&agrave;nh cho camera trước sẽ ph&aacute;t huy t&aacute;c dụng để bạn nhận diện được trong cả trời tối. Trong khi đ&oacute; m&aacute;y qu&eacute;t v&acirc;n tay mặt sau cũng l&agrave; một phương thức bảo mật tiện dụng kh&aacute;c m&agrave; bạn c&oacute; thể thao t&aacute;c tiện lợi d&ugrave; cầm bằng bất cứ tay tr&aacute;i hay tay phải.</p>

<p>&nbsp;</p>

<h2><strong>Hiệu năng tốt trong tầm gi&aacute;</strong></h2>

<p>&nbsp;</p>

<p>Hiệu năng Samsung Galaxy J8 kh&aacute; ổn với bộ vi xử l&yacute; Snapdragon 450 t&aacute;m nh&acirc;n xung nhịp 1,8GHz đi c&ugrave;ng 3GB RAM v&agrave; 32GB bộ nhớ trong. Cấu h&igrave;nh n&agrave;y đủ sức để J8 chạy mượt trong hầu hết c&aacute;c t&aacute;c vụ. Ngo&agrave;i ra việc chạy tr&ecirc;n hệ điều h&agrave;nh Android 8.0 Oreo mới cũng gi&uacute;p cho Galaxy J8 mượt m&agrave; v&agrave; ổn định hơn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-6.jpg" /></p>

<h2>&nbsp;</h2>

<h2><strong>Thời lượng pin xuất sắc</strong></h2>

<p>&nbsp;</p>

<p>Pin lu&ocirc;n l&agrave; điểm mạnh tr&ecirc;n những chiếc điện thoại Galaxy J v&agrave; kh&ocirc;ng c&oacute; g&igrave; ngạc nhi&ecirc;n khi Galaxy J8 c&oacute; thời lượng pin xuất sắc. Với dung lượng lớn 3500 mAh, con chip tiết kiệm điện v&agrave; cơ chế quản l&yacute; pin th&ocirc;ng minh, Galaxy J8 c&oacute; thể duyệt web tối đa trong 13 giờ qua 4G LTE, xem video li&ecirc;n tục trong 20 giờ, gọi thoại trong 23 giờ, những con số rất ấn tượng.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-2.jpg" /></p>',
                'tag' => 'Galaxy S8, Galaxy S8,Galaxy S8',
                'price' => '18490000.00',
                'status' => 1,
                'cat_id' => 13,
                'user_id' => 1,
                'created_at' => '2018-11-25 23:45:08',
                'updated_at' => '2018-11-28 23:04:05',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'Zenfone 2 Laser',
                'slug' => 'zenfone-2-laser',
                'intro' => 'sắp ra mắt',
            'promo1' => 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):',
                'promo2' => 'Hoặc Tặng Vali Lock & Lock ',
                'promo3' => 'Tặng Voucher 500.000đ mua Apple Watch',
                'packet' => ' Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ',
                'images' => '1480399445_asus-zenfone-2-laser-1-400x460.png',
                'r_intro' => '<p>sắp ra mắt</p>
',
                'review' => '<h2><strong>Camera selfie x&oacute;a ph&ocirc;ng chủ động</strong></h2>

<p>Kh&ocirc;ng chỉ camera sau m&agrave; camera trước của Galaxy J8 cũng c&oacute; khả năng chụp selfie x&oacute;a ph&ocirc;ng. Camera n&agrave;y kh&ocirc;ng chỉ độ ph&acirc;n giải cao 16MP, khẩu độ lớn f/1.9 m&agrave; c&ograve;n c&oacute; cả đ&egrave;n flash LED trợ s&aacute;ng chuy&ecirc;n nghiệp với ba mức độ s&aacute;ng kh&aacute;c nhau. Bạn sẽ được thoải m&aacute;i selfie ngay cả trong điều kiện thiếu s&aacute;ng m&agrave; h&igrave;nh ảnh vẫn ho&agrave;n hảo với độ n&eacute;t cao, &iacute;t nhiễu v&agrave; ch&acirc;n thực. T&iacute;nh năng x&oacute;a ph&ocirc;ng chủ động mang đến c&aacute;c bức ảnh selfie x&oacute;a ph&ocirc;ng theo đ&uacute;ng &yacute; bạn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-3.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>M&agrave;n h&igrave;nh v&ocirc; cực sống động từng khung h&igrave;nh</strong></h2>

<p>&nbsp;</p>

<p>Samsung tiếp tục mang tinh hoa trong c&ocirc;ng nghệ m&agrave;n h&igrave;nh của họ l&ecirc;n Galaxy J8. Đ&oacute; l&agrave; m&agrave;n h&igrave;nh v&ocirc; cực Infinity Display c&ocirc;ng nghệ Super AMOLED cao cấp. Galaxy J8 sở hữu m&agrave;n h&igrave;nh lớn 6 inch HD+, tỉ lệ mới 18,5:9 chuẩn điện ảnh v&agrave; viền m&agrave;n h&igrave;nh cực mỏng. Bạn sẽ được tận hưởng từng khung h&igrave;nh giải tr&iacute; đỉnh cao, m&agrave;u sắc sống động rực rỡ.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-4.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Thiết kế c&aacute; t&iacute;nh, sắc m&agrave;u thời thượng</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 c&oacute; kiểu d&aacute;ng rất mềm mại để đồng nhất ho&agrave;n to&agrave;n với m&agrave;n h&igrave;nh v&ocirc; cực mặt trước. Bạn sẽ được cầm tr&ecirc;n tay một chiếc m&aacute;y liền lạc, bo cong hợp l&yacute; để cảm gi&aacute;c sử dụng thoải m&aacute;i nhất. Mặc d&ugrave; kiểu d&aacute;ng mượt m&agrave; nhưng Galaxy J8 vẫn rất chắc chắn nhờ lớp vỏ kim loại sang trọng. C&oacute; ba m&agrave;u sắc c&aacute; t&iacute;nh d&agrave;nh cho bạn l&agrave; T&iacute;m Sapphire, Đen Titan v&agrave; V&agrave;ng Thạch Anh.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-5.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Bảo mật an to&agrave;n v&agrave; th&ocirc;ng minh</strong></h2>

<p>&nbsp;</p>

<p>Camera trước Galaxy J8 được tối ưu để nhận diện khu&ocirc;n mặt th&ocirc;ng minh v&agrave; nhanh ch&oacute;ng. Chỉ cần đưa m&aacute;y l&ecirc;n l&agrave; chiếc J8 của bạn sẽ tự động mở kh&oacute;a. Ấn tượng hơn, đ&egrave;n flash LED d&agrave;nh cho camera trước sẽ ph&aacute;t huy t&aacute;c dụng để bạn nhận diện được trong cả trời tối. Trong khi đ&oacute; m&aacute;y qu&eacute;t v&acirc;n tay mặt sau cũng l&agrave; một phương thức bảo mật tiện dụng kh&aacute;c m&agrave; bạn c&oacute; thể thao t&aacute;c tiện lợi d&ugrave; cầm bằng bất cứ tay tr&aacute;i hay tay phải.</p>

<p>&nbsp;</p>

<h2><strong>Hiệu năng tốt trong tầm gi&aacute;</strong></h2>

<p>&nbsp;</p>

<p>Hiệu năng Samsung Galaxy J8 kh&aacute; ổn với bộ vi xử l&yacute; Snapdragon 450 t&aacute;m nh&acirc;n xung nhịp 1,8GHz đi c&ugrave;ng 3GB RAM v&agrave; 32GB bộ nhớ trong. Cấu h&igrave;nh n&agrave;y đủ sức để J8 chạy mượt trong hầu hết c&aacute;c t&aacute;c vụ. Ngo&agrave;i ra việc chạy tr&ecirc;n hệ điều h&agrave;nh Android 8.0 Oreo mới cũng gi&uacute;p cho Galaxy J8 mượt m&agrave; v&agrave; ổn định hơn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-6.jpg" /></p>

<h2>&nbsp;</h2>

<h2><strong>Thời lượng pin xuất sắc</strong></h2>

<p>&nbsp;</p>

<p>Pin lu&ocirc;n l&agrave; điểm mạnh tr&ecirc;n những chiếc điện thoại Galaxy J v&agrave; kh&ocirc;ng c&oacute; g&igrave; ngạc nhi&ecirc;n khi Galaxy J8 c&oacute; thời lượng pin xuất sắc. Với dung lượng lớn 3500 mAh, con chip tiết kiệm điện v&agrave; cơ chế quản l&yacute; pin th&ocirc;ng minh, Galaxy J8 c&oacute; thể duyệt web tối đa trong 13 giờ qua 4G LTE, xem video li&ecirc;n tục trong 20 giờ, gọi thoại trong 23 giờ, những con số rất ấn tượng.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-2.jpg" /></p>',
                'tag' => 'Galaxy S8, Galaxy S8,Galaxy S8',
                'price' => '18490000.00',
                'status' => 1,
                'cat_id' => 13,
                'user_id' => 1,
                'created_at' => '2018-11-25 23:45:08',
                'updated_at' => '2018-11-28 23:04:05',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'Zenfone 2 Laser',
                'slug' => 'zenfone-2-laser',
                'intro' => 'sắp ra mắt',
            'promo1' => 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):',
                'promo2' => 'Hoặc Tặng Vali Lock & Lock ',
                'promo3' => 'Tặng Voucher 500.000đ mua Apple Watch',
                'packet' => ' Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ',
                'images' => '1480399445_asus-zenfone-2-laser-1-400x460.png',
                'r_intro' => '<p>sắp ra mắt</p>
',
                'review' => '<h2><strong>Camera selfie x&oacute;a ph&ocirc;ng chủ động</strong></h2>

<p>Kh&ocirc;ng chỉ camera sau m&agrave; camera trước của Galaxy J8 cũng c&oacute; khả năng chụp selfie x&oacute;a ph&ocirc;ng. Camera n&agrave;y kh&ocirc;ng chỉ độ ph&acirc;n giải cao 16MP, khẩu độ lớn f/1.9 m&agrave; c&ograve;n c&oacute; cả đ&egrave;n flash LED trợ s&aacute;ng chuy&ecirc;n nghiệp với ba mức độ s&aacute;ng kh&aacute;c nhau. Bạn sẽ được thoải m&aacute;i selfie ngay cả trong điều kiện thiếu s&aacute;ng m&agrave; h&igrave;nh ảnh vẫn ho&agrave;n hảo với độ n&eacute;t cao, &iacute;t nhiễu v&agrave; ch&acirc;n thực. T&iacute;nh năng x&oacute;a ph&ocirc;ng chủ động mang đến c&aacute;c bức ảnh selfie x&oacute;a ph&ocirc;ng theo đ&uacute;ng &yacute; bạn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-3.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>M&agrave;n h&igrave;nh v&ocirc; cực sống động từng khung h&igrave;nh</strong></h2>

<p>&nbsp;</p>

<p>Samsung tiếp tục mang tinh hoa trong c&ocirc;ng nghệ m&agrave;n h&igrave;nh của họ l&ecirc;n Galaxy J8. Đ&oacute; l&agrave; m&agrave;n h&igrave;nh v&ocirc; cực Infinity Display c&ocirc;ng nghệ Super AMOLED cao cấp. Galaxy J8 sở hữu m&agrave;n h&igrave;nh lớn 6 inch HD+, tỉ lệ mới 18,5:9 chuẩn điện ảnh v&agrave; viền m&agrave;n h&igrave;nh cực mỏng. Bạn sẽ được tận hưởng từng khung h&igrave;nh giải tr&iacute; đỉnh cao, m&agrave;u sắc sống động rực rỡ.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-4.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Thiết kế c&aacute; t&iacute;nh, sắc m&agrave;u thời thượng</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 c&oacute; kiểu d&aacute;ng rất mềm mại để đồng nhất ho&agrave;n to&agrave;n với m&agrave;n h&igrave;nh v&ocirc; cực mặt trước. Bạn sẽ được cầm tr&ecirc;n tay một chiếc m&aacute;y liền lạc, bo cong hợp l&yacute; để cảm gi&aacute;c sử dụng thoải m&aacute;i nhất. Mặc d&ugrave; kiểu d&aacute;ng mượt m&agrave; nhưng Galaxy J8 vẫn rất chắc chắn nhờ lớp vỏ kim loại sang trọng. C&oacute; ba m&agrave;u sắc c&aacute; t&iacute;nh d&agrave;nh cho bạn l&agrave; T&iacute;m Sapphire, Đen Titan v&agrave; V&agrave;ng Thạch Anh.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-5.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Bảo mật an to&agrave;n v&agrave; th&ocirc;ng minh</strong></h2>

<p>&nbsp;</p>

<p>Camera trước Galaxy J8 được tối ưu để nhận diện khu&ocirc;n mặt th&ocirc;ng minh v&agrave; nhanh ch&oacute;ng. Chỉ cần đưa m&aacute;y l&ecirc;n l&agrave; chiếc J8 của bạn sẽ tự động mở kh&oacute;a. Ấn tượng hơn, đ&egrave;n flash LED d&agrave;nh cho camera trước sẽ ph&aacute;t huy t&aacute;c dụng để bạn nhận diện được trong cả trời tối. Trong khi đ&oacute; m&aacute;y qu&eacute;t v&acirc;n tay mặt sau cũng l&agrave; một phương thức bảo mật tiện dụng kh&aacute;c m&agrave; bạn c&oacute; thể thao t&aacute;c tiện lợi d&ugrave; cầm bằng bất cứ tay tr&aacute;i hay tay phải.</p>

<p>&nbsp;</p>

<h2><strong>Hiệu năng tốt trong tầm gi&aacute;</strong></h2>

<p>&nbsp;</p>

<p>Hiệu năng Samsung Galaxy J8 kh&aacute; ổn với bộ vi xử l&yacute; Snapdragon 450 t&aacute;m nh&acirc;n xung nhịp 1,8GHz đi c&ugrave;ng 3GB RAM v&agrave; 32GB bộ nhớ trong. Cấu h&igrave;nh n&agrave;y đủ sức để J8 chạy mượt trong hầu hết c&aacute;c t&aacute;c vụ. Ngo&agrave;i ra việc chạy tr&ecirc;n hệ điều h&agrave;nh Android 8.0 Oreo mới cũng gi&uacute;p cho Galaxy J8 mượt m&agrave; v&agrave; ổn định hơn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-6.jpg" /></p>

<h2>&nbsp;</h2>

<h2><strong>Thời lượng pin xuất sắc</strong></h2>

<p>&nbsp;</p>

<p>Pin lu&ocirc;n l&agrave; điểm mạnh tr&ecirc;n những chiếc điện thoại Galaxy J v&agrave; kh&ocirc;ng c&oacute; g&igrave; ngạc nhi&ecirc;n khi Galaxy J8 c&oacute; thời lượng pin xuất sắc. Với dung lượng lớn 3500 mAh, con chip tiết kiệm điện v&agrave; cơ chế quản l&yacute; pin th&ocirc;ng minh, Galaxy J8 c&oacute; thể duyệt web tối đa trong 13 giờ qua 4G LTE, xem video li&ecirc;n tục trong 20 giờ, gọi thoại trong 23 giờ, những con số rất ấn tượng.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-2.jpg" /></p>',
                'tag' => 'Galaxy S8, Galaxy S8,Galaxy S8',
                'price' => '18490000.00',
                'status' => 1,
                'cat_id' => 15,
                'user_id' => 1,
                'created_at' => '2018-11-25 23:45:08',
                'updated_at' => '2018-11-28 23:04:05',
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'Zenfone 2 Laser',
                'slug' => 'zenfone-2-laser',
                'intro' => 'sắp ra mắt',
            'promo1' => 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):',
                'promo2' => 'Hoặc Tặng Vali Lock & Lock ',
                'promo3' => 'Tặng Voucher 500.000đ mua Apple Watch',
                'packet' => ' Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ',
                'images' => '1480399445_asus-zenfone-2-laser-1-400x460.png',
                'r_intro' => '<p>sắp ra mắt</p>
',
                'review' => '<h2><strong>Camera selfie x&oacute;a ph&ocirc;ng chủ động</strong></h2>

<p>Kh&ocirc;ng chỉ camera sau m&agrave; camera trước của Galaxy J8 cũng c&oacute; khả năng chụp selfie x&oacute;a ph&ocirc;ng. Camera n&agrave;y kh&ocirc;ng chỉ độ ph&acirc;n giải cao 16MP, khẩu độ lớn f/1.9 m&agrave; c&ograve;n c&oacute; cả đ&egrave;n flash LED trợ s&aacute;ng chuy&ecirc;n nghiệp với ba mức độ s&aacute;ng kh&aacute;c nhau. Bạn sẽ được thoải m&aacute;i selfie ngay cả trong điều kiện thiếu s&aacute;ng m&agrave; h&igrave;nh ảnh vẫn ho&agrave;n hảo với độ n&eacute;t cao, &iacute;t nhiễu v&agrave; ch&acirc;n thực. T&iacute;nh năng x&oacute;a ph&ocirc;ng chủ động mang đến c&aacute;c bức ảnh selfie x&oacute;a ph&ocirc;ng theo đ&uacute;ng &yacute; bạn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-3.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>M&agrave;n h&igrave;nh v&ocirc; cực sống động từng khung h&igrave;nh</strong></h2>

<p>&nbsp;</p>

<p>Samsung tiếp tục mang tinh hoa trong c&ocirc;ng nghệ m&agrave;n h&igrave;nh của họ l&ecirc;n Galaxy J8. Đ&oacute; l&agrave; m&agrave;n h&igrave;nh v&ocirc; cực Infinity Display c&ocirc;ng nghệ Super AMOLED cao cấp. Galaxy J8 sở hữu m&agrave;n h&igrave;nh lớn 6 inch HD+, tỉ lệ mới 18,5:9 chuẩn điện ảnh v&agrave; viền m&agrave;n h&igrave;nh cực mỏng. Bạn sẽ được tận hưởng từng khung h&igrave;nh giải tr&iacute; đỉnh cao, m&agrave;u sắc sống động rực rỡ.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-4.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Thiết kế c&aacute; t&iacute;nh, sắc m&agrave;u thời thượng</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 c&oacute; kiểu d&aacute;ng rất mềm mại để đồng nhất ho&agrave;n to&agrave;n với m&agrave;n h&igrave;nh v&ocirc; cực mặt trước. Bạn sẽ được cầm tr&ecirc;n tay một chiếc m&aacute;y liền lạc, bo cong hợp l&yacute; để cảm gi&aacute;c sử dụng thoải m&aacute;i nhất. Mặc d&ugrave; kiểu d&aacute;ng mượt m&agrave; nhưng Galaxy J8 vẫn rất chắc chắn nhờ lớp vỏ kim loại sang trọng. C&oacute; ba m&agrave;u sắc c&aacute; t&iacute;nh d&agrave;nh cho bạn l&agrave; T&iacute;m Sapphire, Đen Titan v&agrave; V&agrave;ng Thạch Anh.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-5.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Bảo mật an to&agrave;n v&agrave; th&ocirc;ng minh</strong></h2>

<p>&nbsp;</p>

<p>Camera trước Galaxy J8 được tối ưu để nhận diện khu&ocirc;n mặt th&ocirc;ng minh v&agrave; nhanh ch&oacute;ng. Chỉ cần đưa m&aacute;y l&ecirc;n l&agrave; chiếc J8 của bạn sẽ tự động mở kh&oacute;a. Ấn tượng hơn, đ&egrave;n flash LED d&agrave;nh cho camera trước sẽ ph&aacute;t huy t&aacute;c dụng để bạn nhận diện được trong cả trời tối. Trong khi đ&oacute; m&aacute;y qu&eacute;t v&acirc;n tay mặt sau cũng l&agrave; một phương thức bảo mật tiện dụng kh&aacute;c m&agrave; bạn c&oacute; thể thao t&aacute;c tiện lợi d&ugrave; cầm bằng bất cứ tay tr&aacute;i hay tay phải.</p>

<p>&nbsp;</p>

<h2><strong>Hiệu năng tốt trong tầm gi&aacute;</strong></h2>

<p>&nbsp;</p>

<p>Hiệu năng Samsung Galaxy J8 kh&aacute; ổn với bộ vi xử l&yacute; Snapdragon 450 t&aacute;m nh&acirc;n xung nhịp 1,8GHz đi c&ugrave;ng 3GB RAM v&agrave; 32GB bộ nhớ trong. Cấu h&igrave;nh n&agrave;y đủ sức để J8 chạy mượt trong hầu hết c&aacute;c t&aacute;c vụ. Ngo&agrave;i ra việc chạy tr&ecirc;n hệ điều h&agrave;nh Android 8.0 Oreo mới cũng gi&uacute;p cho Galaxy J8 mượt m&agrave; v&agrave; ổn định hơn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-6.jpg" /></p>

<h2>&nbsp;</h2>

<h2><strong>Thời lượng pin xuất sắc</strong></h2>

<p>&nbsp;</p>

<p>Pin lu&ocirc;n l&agrave; điểm mạnh tr&ecirc;n những chiếc điện thoại Galaxy J v&agrave; kh&ocirc;ng c&oacute; g&igrave; ngạc nhi&ecirc;n khi Galaxy J8 c&oacute; thời lượng pin xuất sắc. Với dung lượng lớn 3500 mAh, con chip tiết kiệm điện v&agrave; cơ chế quản l&yacute; pin th&ocirc;ng minh, Galaxy J8 c&oacute; thể duyệt web tối đa trong 13 giờ qua 4G LTE, xem video li&ecirc;n tục trong 20 giờ, gọi thoại trong 23 giờ, những con số rất ấn tượng.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-2.jpg" /></p>',
                'tag' => 'Galaxy S8, Galaxy S8,Galaxy S8',
                'price' => '18490000.00',
                'status' => 1,
                'cat_id' => 15,
                'user_id' => 1,
                'created_at' => '2018-11-25 23:45:08',
                'updated_at' => '2018-11-28 23:04:05',
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'Zenfone 2 Laser',
                'slug' => 'zenfone-2-laser',
                'intro' => 'sắp ra mắt',
            'promo1' => 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):',
                'promo2' => 'Hoặc Tặng Vali Lock & Lock ',
                'promo3' => 'Tặng Voucher 500.000đ mua Apple Watch',
                'packet' => ' Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ',
                'images' => '1480399445_asus-zenfone-2-laser-1-400x460.png',
                'r_intro' => '<p>sắp ra mắt</p>
',
                'review' => '<h2><strong>Camera selfie x&oacute;a ph&ocirc;ng chủ động</strong></h2>

<p>Kh&ocirc;ng chỉ camera sau m&agrave; camera trước của Galaxy J8 cũng c&oacute; khả năng chụp selfie x&oacute;a ph&ocirc;ng. Camera n&agrave;y kh&ocirc;ng chỉ độ ph&acirc;n giải cao 16MP, khẩu độ lớn f/1.9 m&agrave; c&ograve;n c&oacute; cả đ&egrave;n flash LED trợ s&aacute;ng chuy&ecirc;n nghiệp với ba mức độ s&aacute;ng kh&aacute;c nhau. Bạn sẽ được thoải m&aacute;i selfie ngay cả trong điều kiện thiếu s&aacute;ng m&agrave; h&igrave;nh ảnh vẫn ho&agrave;n hảo với độ n&eacute;t cao, &iacute;t nhiễu v&agrave; ch&acirc;n thực. T&iacute;nh năng x&oacute;a ph&ocirc;ng chủ động mang đến c&aacute;c bức ảnh selfie x&oacute;a ph&ocirc;ng theo đ&uacute;ng &yacute; bạn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-3.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>M&agrave;n h&igrave;nh v&ocirc; cực sống động từng khung h&igrave;nh</strong></h2>

<p>&nbsp;</p>

<p>Samsung tiếp tục mang tinh hoa trong c&ocirc;ng nghệ m&agrave;n h&igrave;nh của họ l&ecirc;n Galaxy J8. Đ&oacute; l&agrave; m&agrave;n h&igrave;nh v&ocirc; cực Infinity Display c&ocirc;ng nghệ Super AMOLED cao cấp. Galaxy J8 sở hữu m&agrave;n h&igrave;nh lớn 6 inch HD+, tỉ lệ mới 18,5:9 chuẩn điện ảnh v&agrave; viền m&agrave;n h&igrave;nh cực mỏng. Bạn sẽ được tận hưởng từng khung h&igrave;nh giải tr&iacute; đỉnh cao, m&agrave;u sắc sống động rực rỡ.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-4.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Thiết kế c&aacute; t&iacute;nh, sắc m&agrave;u thời thượng</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 c&oacute; kiểu d&aacute;ng rất mềm mại để đồng nhất ho&agrave;n to&agrave;n với m&agrave;n h&igrave;nh v&ocirc; cực mặt trước. Bạn sẽ được cầm tr&ecirc;n tay một chiếc m&aacute;y liền lạc, bo cong hợp l&yacute; để cảm gi&aacute;c sử dụng thoải m&aacute;i nhất. Mặc d&ugrave; kiểu d&aacute;ng mượt m&agrave; nhưng Galaxy J8 vẫn rất chắc chắn nhờ lớp vỏ kim loại sang trọng. C&oacute; ba m&agrave;u sắc c&aacute; t&iacute;nh d&agrave;nh cho bạn l&agrave; T&iacute;m Sapphire, Đen Titan v&agrave; V&agrave;ng Thạch Anh.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-5.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Bảo mật an to&agrave;n v&agrave; th&ocirc;ng minh</strong></h2>

<p>&nbsp;</p>

<p>Camera trước Galaxy J8 được tối ưu để nhận diện khu&ocirc;n mặt th&ocirc;ng minh v&agrave; nhanh ch&oacute;ng. Chỉ cần đưa m&aacute;y l&ecirc;n l&agrave; chiếc J8 của bạn sẽ tự động mở kh&oacute;a. Ấn tượng hơn, đ&egrave;n flash LED d&agrave;nh cho camera trước sẽ ph&aacute;t huy t&aacute;c dụng để bạn nhận diện được trong cả trời tối. Trong khi đ&oacute; m&aacute;y qu&eacute;t v&acirc;n tay mặt sau cũng l&agrave; một phương thức bảo mật tiện dụng kh&aacute;c m&agrave; bạn c&oacute; thể thao t&aacute;c tiện lợi d&ugrave; cầm bằng bất cứ tay tr&aacute;i hay tay phải.</p>

<p>&nbsp;</p>

<h2><strong>Hiệu năng tốt trong tầm gi&aacute;</strong></h2>

<p>&nbsp;</p>

<p>Hiệu năng Samsung Galaxy J8 kh&aacute; ổn với bộ vi xử l&yacute; Snapdragon 450 t&aacute;m nh&acirc;n xung nhịp 1,8GHz đi c&ugrave;ng 3GB RAM v&agrave; 32GB bộ nhớ trong. Cấu h&igrave;nh n&agrave;y đủ sức để J8 chạy mượt trong hầu hết c&aacute;c t&aacute;c vụ. Ngo&agrave;i ra việc chạy tr&ecirc;n hệ điều h&agrave;nh Android 8.0 Oreo mới cũng gi&uacute;p cho Galaxy J8 mượt m&agrave; v&agrave; ổn định hơn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-6.jpg" /></p>

<h2>&nbsp;</h2>

<h2><strong>Thời lượng pin xuất sắc</strong></h2>

<p>&nbsp;</p>

<p>Pin lu&ocirc;n l&agrave; điểm mạnh tr&ecirc;n những chiếc điện thoại Galaxy J v&agrave; kh&ocirc;ng c&oacute; g&igrave; ngạc nhi&ecirc;n khi Galaxy J8 c&oacute; thời lượng pin xuất sắc. Với dung lượng lớn 3500 mAh, con chip tiết kiệm điện v&agrave; cơ chế quản l&yacute; pin th&ocirc;ng minh, Galaxy J8 c&oacute; thể duyệt web tối đa trong 13 giờ qua 4G LTE, xem video li&ecirc;n tục trong 20 giờ, gọi thoại trong 23 giờ, những con số rất ấn tượng.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-2.jpg" /></p>',
                'tag' => 'Galaxy S8, Galaxy S8,Galaxy S8',
                'price' => '18490000.00',
                'status' => 1,
                'cat_id' => 15,
                'user_id' => 1,
                'created_at' => '2018-11-25 23:45:08',
                'updated_at' => '2018-11-28 23:04:05',
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'Zenfone 2 Laser',
                'slug' => 'zenfone-2-laser',
                'intro' => 'sắp ra mắt',
            'promo1' => 'Đặt Online hoặc Gọi 18006601 ưu tiên khuyến mãi (SL có hạn):',
                'promo2' => 'Hoặc Tặng Vali Lock & Lock ',
                'promo3' => 'Tặng Voucher 500.000đ mua Apple Watch',
                'packet' => ' Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim ',
                'images' => '1480399445_asus-zenfone-2-laser-1-400x460.png',
                'r_intro' => '<p>sắp ra mắt</p>
',
                'review' => '<h2><strong>Camera selfie x&oacute;a ph&ocirc;ng chủ động</strong></h2>

<p>Kh&ocirc;ng chỉ camera sau m&agrave; camera trước của Galaxy J8 cũng c&oacute; khả năng chụp selfie x&oacute;a ph&ocirc;ng. Camera n&agrave;y kh&ocirc;ng chỉ độ ph&acirc;n giải cao 16MP, khẩu độ lớn f/1.9 m&agrave; c&ograve;n c&oacute; cả đ&egrave;n flash LED trợ s&aacute;ng chuy&ecirc;n nghiệp với ba mức độ s&aacute;ng kh&aacute;c nhau. Bạn sẽ được thoải m&aacute;i selfie ngay cả trong điều kiện thiếu s&aacute;ng m&agrave; h&igrave;nh ảnh vẫn ho&agrave;n hảo với độ n&eacute;t cao, &iacute;t nhiễu v&agrave; ch&acirc;n thực. T&iacute;nh năng x&oacute;a ph&ocirc;ng chủ động mang đến c&aacute;c bức ảnh selfie x&oacute;a ph&ocirc;ng theo đ&uacute;ng &yacute; bạn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-3.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>M&agrave;n h&igrave;nh v&ocirc; cực sống động từng khung h&igrave;nh</strong></h2>

<p>&nbsp;</p>

<p>Samsung tiếp tục mang tinh hoa trong c&ocirc;ng nghệ m&agrave;n h&igrave;nh của họ l&ecirc;n Galaxy J8. Đ&oacute; l&agrave; m&agrave;n h&igrave;nh v&ocirc; cực Infinity Display c&ocirc;ng nghệ Super AMOLED cao cấp. Galaxy J8 sở hữu m&agrave;n h&igrave;nh lớn 6 inch HD+, tỉ lệ mới 18,5:9 chuẩn điện ảnh v&agrave; viền m&agrave;n h&igrave;nh cực mỏng. Bạn sẽ được tận hưởng từng khung h&igrave;nh giải tr&iacute; đỉnh cao, m&agrave;u sắc sống động rực rỡ.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-4.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Thiết kế c&aacute; t&iacute;nh, sắc m&agrave;u thời thượng</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 c&oacute; kiểu d&aacute;ng rất mềm mại để đồng nhất ho&agrave;n to&agrave;n với m&agrave;n h&igrave;nh v&ocirc; cực mặt trước. Bạn sẽ được cầm tr&ecirc;n tay một chiếc m&aacute;y liền lạc, bo cong hợp l&yacute; để cảm gi&aacute;c sử dụng thoải m&aacute;i nhất. Mặc d&ugrave; kiểu d&aacute;ng mượt m&agrave; nhưng Galaxy J8 vẫn rất chắc chắn nhờ lớp vỏ kim loại sang trọng. C&oacute; ba m&agrave;u sắc c&aacute; t&iacute;nh d&agrave;nh cho bạn l&agrave; T&iacute;m Sapphire, Đen Titan v&agrave; V&agrave;ng Thạch Anh.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-5.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Bảo mật an to&agrave;n v&agrave; th&ocirc;ng minh</strong></h2>

<p>&nbsp;</p>

<p>Camera trước Galaxy J8 được tối ưu để nhận diện khu&ocirc;n mặt th&ocirc;ng minh v&agrave; nhanh ch&oacute;ng. Chỉ cần đưa m&aacute;y l&ecirc;n l&agrave; chiếc J8 của bạn sẽ tự động mở kh&oacute;a. Ấn tượng hơn, đ&egrave;n flash LED d&agrave;nh cho camera trước sẽ ph&aacute;t huy t&aacute;c dụng để bạn nhận diện được trong cả trời tối. Trong khi đ&oacute; m&aacute;y qu&eacute;t v&acirc;n tay mặt sau cũng l&agrave; một phương thức bảo mật tiện dụng kh&aacute;c m&agrave; bạn c&oacute; thể thao t&aacute;c tiện lợi d&ugrave; cầm bằng bất cứ tay tr&aacute;i hay tay phải.</p>

<p>&nbsp;</p>

<h2><strong>Hiệu năng tốt trong tầm gi&aacute;</strong></h2>

<p>&nbsp;</p>

<p>Hiệu năng Samsung Galaxy J8 kh&aacute; ổn với bộ vi xử l&yacute; Snapdragon 450 t&aacute;m nh&acirc;n xung nhịp 1,8GHz đi c&ugrave;ng 3GB RAM v&agrave; 32GB bộ nhớ trong. Cấu h&igrave;nh n&agrave;y đủ sức để J8 chạy mượt trong hầu hết c&aacute;c t&aacute;c vụ. Ngo&agrave;i ra việc chạy tr&ecirc;n hệ điều h&agrave;nh Android 8.0 Oreo mới cũng gi&uacute;p cho Galaxy J8 mượt m&agrave; v&agrave; ổn định hơn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-6.jpg" /></p>

<h2>&nbsp;</h2>

<h2><strong>Thời lượng pin xuất sắc</strong></h2>

<p>&nbsp;</p>

<p>Pin lu&ocirc;n l&agrave; điểm mạnh tr&ecirc;n những chiếc điện thoại Galaxy J v&agrave; kh&ocirc;ng c&oacute; g&igrave; ngạc nhi&ecirc;n khi Galaxy J8 c&oacute; thời lượng pin xuất sắc. Với dung lượng lớn 3500 mAh, con chip tiết kiệm điện v&agrave; cơ chế quản l&yacute; pin th&ocirc;ng minh, Galaxy J8 c&oacute; thể duyệt web tối đa trong 13 giờ qua 4G LTE, xem video li&ecirc;n tục trong 20 giờ, gọi thoại trong 23 giờ, những con số rất ấn tượng.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-2.jpg" /></p>',
                'tag' => 'Galaxy S8, Galaxy S8,Galaxy S8',
                'price' => '18490000.00',
                'status' => 1,
                'cat_id' => 15,
                'user_id' => 1,
                'created_at' => '2018-11-25 23:45:08',
                'updated_at' => '2018-11-28 23:04:05',
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'IPhone XS',
                'slug' => 'iphone-xs',
                'intro' => 'Selfie ngược sáng HDR, Camera góc rộng, Nhận diện khuôn mặt, Hỗ trợ sạc nhanh, chống nước chuẩn IP68',
                'promo1' => 'Trả góp 0%',
                'promo2' => 'Lì xì 1,000,000đ',
                'promo3' => 'Lì xì thêm 1,000,000đ khi thanh toán online 100% bằng thẻ tín dụng Mastercard',
                'packet' => 'iPhone, EarPods with Lightning Connector, Lightning to USB Cable, 5W USB Power Adapter',
                'images' => '1546334250_636748771945393060_iPhone-Xs-Max-gold.png',
                'r_intro' => '<p>Gi&aacute; đặc biệt khi mua Online đến 02/01: 27,990,000đ</p>

<p>Hoặc mua gi&aacute; thường: 29,990,000đ</p>

<p>Kh&aacute;ch h&agrave;ng chọn 1 trong 2 khuyến mại sau:</p>

<p>KM1:</p>

<p>KM2:</p>

<p>Kh&aacute;ch h&agrave;ng được khuyến mại th&ecirc;m:</p>

<ul>
<li>
<ul>
<li>Trả g&oacute;p 0%</li>
</ul>

<ul>
<li>L&igrave; x&igrave; 1,000,000đ</li>
</ul>

<ul>
<li>L&igrave; x&igrave; th&ecirc;m 1,000,000đ khi thanh to&aacute;n online 100% bằng thẻ t&iacute;n dụng Mastercard</li>
</ul>

<ul>
<li>Cơ hội tr&uacute;ng 600 Chỉ V&agrave;ng 9999&nbsp;<a href="https://fptshop.com.vn/tin-tuc/tin-moi-1/review-test/fptshop-an-tet-lon-mua-hang-trung-600-chi-vang-78636" target="_blank">Xem chi tiết</a></li>
</ul>

<ul>
<li>Tặng 6 lon Bia Carlsberg</li>
</ul>

<ul>
<li>L&igrave; x&igrave; th&ecirc;m 1,000,000đ khi mua combo sức khỏe (iPhone + Apple Watch + Airpods)</li>
</ul>
</li>
</ul>',
                'review' => '',
                'tag' => 'Iphone',
                'price' => '27990000.00',
                'status' => 1,
                'cat_id' => 7,
                'user_id' => 1,
                'created_at' => '2019-01-01 16:17:30',
                'updated_at' => '2019-01-01 16:17:30',
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'Samsung Galaxy J8',
                'slug' => 'samsung-galaxy-j8',
                'intro' => 'Samsung Galaxy J8 có khả năng chụp ảnh xóa phông nghệ thuật nhờ camera kép chất lượng, đồng thời bạn sẽ được giải trí trên màn hình vô cực ấn tượng.',
                'promo1' => 'Lì xì 1,500,000đ',
                'promo2' => 'Trợ giá lên đến 1,400,000đ',
                'promo3' => 'Tặng 6 lon Bia Carlsberg',
                'packet' => 'Cáp xác, tai nghe',
                'images' => '1546335191_636667501534844172_samsungj8-den-1.jpg',
                'r_intro' => '<h2><strong>Camera k&eacute;p chinh phục b&oacute;ng tối, x&oacute;a ph&ocirc;ng nghệ thuật</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 chắc chắn l&agrave; chiếc điện thoại c&oacute; camera đ&aacute;ng gờm nhất trong ph&acirc;n kh&uacute;c, đặc biệt l&agrave; khả năng chụp đ&ecirc;m khi mang tr&ecirc;n m&igrave;nh cụm camera k&eacute;p th&ocirc;ng số v&ocirc; c&ugrave;ng chất lượng. Hai cảm biến camera sau 16MP f/1.7 + 5MP f/1.9 đều c&oacute; khẩu độ cực lớn, thu s&aacute;ng tốt trong cả những điều kiện khắc nghiệt, mang đến cho bạn những bức ảnh chụp đ&ecirc;m tuyệt vời.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-1.jpg" /></p>

<p>&nbsp;</p>

<p>Chụp ảnh x&oacute;a ph&ocirc;ng tr&ecirc;n Galaxy J8 được n&acirc;ng l&ecirc;n một tầm cao mới khi kh&ocirc;ng chỉ x&oacute;a ph&ocirc;ng ch&iacute;nh x&aacute;c, l&agrave;m nổi bật chủ thể m&agrave; bạn c&ograve;n c&oacute; th&ecirc;m cả c&aacute;c bộ lọc Bokeh, tạo những hiệu ứng x&oacute;a ph&ocirc;ng kh&aacute;c nhau đầy nghệ thuật. Ảnh chụp ch&acirc;n dung của bạn sẽ ấn tượng hơn bao giờ hết.</p>',
                'review' => '<h2><strong>Camera selfie x&oacute;a ph&ocirc;ng chủ động</strong></h2>

<p>Kh&ocirc;ng chỉ camera sau m&agrave; camera trước của Galaxy J8 cũng c&oacute; khả năng chụp selfie x&oacute;a ph&ocirc;ng. Camera n&agrave;y kh&ocirc;ng chỉ độ ph&acirc;n giải cao 16MP, khẩu độ lớn f/1.9 m&agrave; c&ograve;n c&oacute; cả đ&egrave;n flash LED trợ s&aacute;ng chuy&ecirc;n nghiệp với ba mức độ s&aacute;ng kh&aacute;c nhau. Bạn sẽ được thoải m&aacute;i selfie ngay cả trong điều kiện thiếu s&aacute;ng m&agrave; h&igrave;nh ảnh vẫn ho&agrave;n hảo với độ n&eacute;t cao, &iacute;t nhiễu v&agrave; ch&acirc;n thực. T&iacute;nh năng x&oacute;a ph&ocirc;ng chủ động mang đến c&aacute;c bức ảnh selfie x&oacute;a ph&ocirc;ng theo đ&uacute;ng &yacute; bạn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-3.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>M&agrave;n h&igrave;nh v&ocirc; cực sống động từng khung h&igrave;nh</strong></h2>

<p>&nbsp;</p>

<p>Samsung tiếp tục mang tinh hoa trong c&ocirc;ng nghệ m&agrave;n h&igrave;nh của họ l&ecirc;n Galaxy J8. Đ&oacute; l&agrave; m&agrave;n h&igrave;nh v&ocirc; cực Infinity Display c&ocirc;ng nghệ Super AMOLED cao cấp. Galaxy J8 sở hữu m&agrave;n h&igrave;nh lớn 6 inch HD+, tỉ lệ mới 18,5:9 chuẩn điện ảnh v&agrave; viền m&agrave;n h&igrave;nh cực mỏng. Bạn sẽ được tận hưởng từng khung h&igrave;nh giải tr&iacute; đỉnh cao, m&agrave;u sắc sống động rực rỡ.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-4.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Thiết kế c&aacute; t&iacute;nh, sắc m&agrave;u thời thượng</strong></h2>

<p>&nbsp;</p>

<p>Galaxy J8 c&oacute; kiểu d&aacute;ng rất mềm mại để đồng nhất ho&agrave;n to&agrave;n với m&agrave;n h&igrave;nh v&ocirc; cực mặt trước. Bạn sẽ được cầm tr&ecirc;n tay một chiếc m&aacute;y liền lạc, bo cong hợp l&yacute; để cảm gi&aacute;c sử dụng thoải m&aacute;i nhất. Mặc d&ugrave; kiểu d&aacute;ng mượt m&agrave; nhưng Galaxy J8 vẫn rất chắc chắn nhờ lớp vỏ kim loại sang trọng. C&oacute; ba m&agrave;u sắc c&aacute; t&iacute;nh d&agrave;nh cho bạn l&agrave; T&iacute;m Sapphire, Đen Titan v&agrave; V&agrave;ng Thạch Anh.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-5.jpg" /></p>

<p>&nbsp;</p>

<h2><strong>Bảo mật an to&agrave;n v&agrave; th&ocirc;ng minh</strong></h2>

<p>&nbsp;</p>

<p>Camera trước Galaxy J8 được tối ưu để nhận diện khu&ocirc;n mặt th&ocirc;ng minh v&agrave; nhanh ch&oacute;ng. Chỉ cần đưa m&aacute;y l&ecirc;n l&agrave; chiếc J8 của bạn sẽ tự động mở kh&oacute;a. Ấn tượng hơn, đ&egrave;n flash LED d&agrave;nh cho camera trước sẽ ph&aacute;t huy t&aacute;c dụng để bạn nhận diện được trong cả trời tối. Trong khi đ&oacute; m&aacute;y qu&eacute;t v&acirc;n tay mặt sau cũng l&agrave; một phương thức bảo mật tiện dụng kh&aacute;c m&agrave; bạn c&oacute; thể thao t&aacute;c tiện lợi d&ugrave; cầm bằng bất cứ tay tr&aacute;i hay tay phải.</p>

<p>&nbsp;</p>

<h2><strong>Hiệu năng tốt trong tầm gi&aacute;</strong></h2>

<p>&nbsp;</p>

<p>Hiệu năng Samsung Galaxy J8 kh&aacute; ổn với bộ vi xử l&yacute; Snapdragon 450 t&aacute;m nh&acirc;n xung nhịp 1,8GHz đi c&ugrave;ng 3GB RAM v&agrave; 32GB bộ nhớ trong. Cấu h&igrave;nh n&agrave;y đủ sức để J8 chạy mượt trong hầu hết c&aacute;c t&aacute;c vụ. Ngo&agrave;i ra việc chạy tr&ecirc;n hệ điều h&agrave;nh Android 8.0 Oreo mới cũng gi&uacute;p cho Galaxy J8 mượt m&agrave; v&agrave; ổn định hơn.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-6.jpg" /></p>

<h2>&nbsp;</h2>

<h2><strong>Thời lượng pin xuất sắc</strong></h2>

<p>&nbsp;</p>

<p>Pin lu&ocirc;n l&agrave; điểm mạnh tr&ecirc;n những chiếc điện thoại Galaxy J v&agrave; kh&ocirc;ng c&oacute; g&igrave; ngạc nhi&ecirc;n khi Galaxy J8 c&oacute; thời lượng pin xuất sắc. Với dung lượng lớn 3500 mAh, con chip tiết kiệm điện v&agrave; cơ chế quản l&yacute; pin th&ocirc;ng minh, Galaxy J8 c&oacute; thể duyệt web tối đa trong 13 giờ qua 4G LTE, xem video li&ecirc;n tục trong 20 giờ, gọi thoại trong 23 giờ, những con số rất ấn tượng.</p>

<p>&nbsp;</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/samsung-galaxy-j8-mo-ta-2.jpg" /></p>',
                'tag' => 'Samsung',
                'price' => '6290000.00',
                'status' => 1,
                'cat_id' => 6,
                'user_id' => 1,
                'created_at' => '2019-01-01 16:33:11',
                'updated_at' => '2019-01-01 16:33:11',
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'Oppo A3s',
                'slug' => 'oppo-a3s',
                'intro' => 'Một màn hình lớn cực đã, thời lượng pin siêu dài và camera kép đẳng cấp trong tầm giá rẻ, đó là OPPO A3s, chiếc điện thoại thời trang được ưa chuộng bậc nhất hiện nay.',
                'promo1' => 'Cơ hội trúng 600 Chỉ Vàng 9999',
                'promo2' => 'Trả góp 0%/1%',
                'promo3' => '',
                'packet' => 'Cáp, sạc, tai nghe',
                'images' => '1546335358_636688079458645221_oppoA3s-tim-1.jpg',
                'r_intro' => '<p><strong>Một m&agrave;n h&igrave;nh lớn cực đ&atilde;, thời lượng pin si&ecirc;u d&agrave;i v&agrave; camera k&eacute;p đẳng cấp trong tầm gi&aacute; rẻ, đ&oacute; l&agrave;&nbsp;<a href="https://fptshop.com.vn/dien-thoai/oppo-a3s" target="_blank">OPPO A3s</a>, chiếc điện thoại thời trang được ưa chuộng bậc nhất hiện nay.</strong></p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/oppo-a3s-1.jpg" /></p>',
                'review' => '<h2><strong>M&agrave;n h&igrave;nh si&ecirc;u lớn 6,2 inch tr&agrave;n viền</strong></h2>

<p>Hiện tại đang l&agrave; kỷ nguy&ecirc;n của những chiếc điện thoại m&agrave;n h&igrave;nh lớn. OPPO A3s sở hữu m&agrave;n h&igrave;nh c&oacute; k&iacute;ch thước lớn tới 6,2 inch được thiết kế theo dạng tr&agrave;n viền thời thượng, cho bạn những trải nghiệm tuyệt vời. Tỉ lệ m&agrave;n h&igrave;nh mới 19:9 mang đến nhiều nội dung hơn khi lướt web, đọc b&aacute;o v&agrave; kh&ocirc;ng gian rộng lớn hơn khi xem phim hay chơi game.</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/oppo-a3s-2.jpg" /></p>

<h2><strong>Tỏa s&aacute;ng ở mọi &aacute;nh nh&igrave;n</strong></h2>

<p>OPPO A3s c&oacute; kiểu d&aacute;ng hiện đại, ho&agrave;n thiện tuyệt vời với những đường bo cong liền lạc, cho cảm gi&aacute;c cầm nắm ho&agrave;n hảo trong l&ograve;ng b&agrave;n tay. Mặt lưng m&aacute;y được thiết kế lấy cảm hứng từ &aacute;nh s&aacute;ng, lấp l&aacute;nh ở mọi g&oacute;c nh&igrave;n v&agrave; hai m&agrave;u sắc v&ocirc; c&ugrave;ng thời trang. M&agrave;u đỏ tươi trẻ v&agrave; m&aacute;u t&iacute;m c&aacute; t&iacute;nh sẽ l&agrave; những lựa chọn d&agrave;nh cho bạn.</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/oppo-a3s-4.jpg" /></p>

<h2><strong>Camera k&eacute;p</strong></h2>

<p>Camera k&eacute;p tr&ecirc;n OPPO A3s bao gồm hai cảm biến 13MP + 2MP, c&oacute; khả năng chụp được những bức ảnh x&oacute;a ph&ocirc;ng tuyệt vời. Kh&ocirc;ng cần m&aacute;y ảnh chuy&ecirc;n dụng, bạn chỉ cần đưa OPPO A3s l&ecirc;n v&agrave; ấn chụp, chủ thể sẽ xuất hiện rạng rỡ với hậu cảnh l&agrave;m mờ đầy ấn tượng.</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/oppo-a3s-5.jpg" /></p>

<h2><strong>Camera selfie l&agrave;m đẹp AI Beauty 2.0</strong></h2>

<p>C&oacute; thể n&oacute;i camera selfie 8MP của OPPO A3s l&agrave; một &ldquo;chuy&ecirc;n gia trang điểm&rdquo; d&agrave;nh cho bạn. Tr&iacute; th&ocirc;ng minh nh&acirc;n tạo AI c&oacute; thể nhận diện c&aacute;c đặc điểm nổi bật của bạn v&agrave; l&agrave;m đẹp ri&ecirc;ng biệt cho từng người. Mỗi người sẽ c&oacute; một c&aacute;ch l&agrave;m đẹp kh&aacute;c nhau để ai cũng lu&ocirc;n tỏa s&aacute;ng rạng rỡ theo phong c&aacute;ch ri&ecirc;ng.</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/oppo-a3s-6.jpg" /></p>

<h2><strong>Sức mạnh từ vi xử l&yacute; Snapdragon 8 nh&acirc;n 14nm</strong></h2>

<p>OPPO A3s được trang bị bộ vi xử l&yacute; Snapdragon 450. Đ&acirc;y l&agrave; một con chip 64-bit, 8 nh&acirc;n v&agrave; đặc biệt được sản xuất tr&ecirc;n tiến tr&igrave;nh 14nm. Việc sản xuất tr&ecirc;n tiến tr&igrave;nh 14nm gi&uacute;p cho Snapdragon 450 vừa mạnh mẽ, vừa tiết kiệm điện năng hơn, đảm bảo cho m&aacute;y lu&ocirc;n chạy mượt m&agrave;.</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/oppo-a3s-7.jpg" /></p>

<h2><strong>Vi&ecirc;n pin cực khủng 4230 mAh</strong></h2>

<p>OPPO A3s mang tr&ecirc;n m&igrave;nh vi&ecirc;n pin c&oacute; dung lượng lơn hiếm thấy tr&ecirc;n thị trường hiện nay. Với dung lượng l&ecirc;n tới 4230 mAh, OPPO A3s c&oacute; thể sử dụng thoải m&aacute;i trong hai ng&agrave;y. D&ugrave; bạn l&agrave;m g&igrave; đi chăng nữa, sẽ kh&ocirc;ng phải lo hết pin tr&ecirc;n OPPO A3s.</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/oppo-a3s-8.jpg" /></p>

<h2><strong>Mở kh&oacute;a khu&ocirc;n mặt cực nhanh</strong></h2>

<p>Kh&ocirc;ng cần những mật khẩu d&agrave;i d&ograve;ng, chỉ cần đưa chiếc OPPO A3s của bạn l&ecirc;n, m&aacute;y sẽ tự động nhận diện khu&ocirc;n mặt chủ nh&acirc;n v&agrave; mở kh&oacute;a m&aacute;y ngay lập tức. Phương thức bảo mật n&agrave;y rất an to&agrave;n v&agrave; tiện lợi.</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/oppo-a3s-9.jpg" /></p>

<h2><strong>Giao diện mới hiện đại</strong></h2>

<p>Hệ điều h&agrave;nh ColorOS 5.1 mới nhất tr&ecirc;n OPPO A3s mang lại sức sống tươi trẻ, giao diện hiện đại v&agrave; trực quan. Bạn sẽ c&oacute; đủ những t&iacute;nh năng m&igrave;nh cần v&agrave; thao t&aacute;c hết sức đơn giản.</p>

<p><img alt="" src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/oppo-a3s-10.jpg" /></p>',
                'tag' => 'OPPO',
                'price' => '3690000.00',
                'status' => 1,
                'cat_id' => 8,
                'user_id' => 1,
                'created_at' => '2019-01-01 16:35:58',
                'updated_at' => '2019-01-01 16:35:58',
            ),
        ));
        
        
    }
}