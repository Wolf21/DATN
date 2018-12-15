<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('news')->delete();
        
        \DB::table('news')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'iPhone SE đổi trả thiết kế thanh lịch, mạnh như iPhone 6s còn dưới 7 triệu đồng',
                'slug' => 'iphone-se-doi-tra-thiet-ke-thanh-lich-manh-nhu-iphone-6s-con-duoi-7-trieu-dong',
                'author' => 'admin',
                'intro' => '<p>Kh&ocirc;ng chỉ iPhone SE h&agrave;ng mới m&agrave; h&agrave;ng đổi trả cũng được giảm gi&aacute; mạnh mẽ. Trước đ&acirc;y mức gi&aacute; l&agrave; hơn 7 triệu b&acirc;y giờ chỉ c&ograve;n dưới 7 triệu đồng, thậm ch&iacute; về gần mức 6 triệu đồng</p>',
                'full' => '<p>iPhone SE kế thừa từ nhiều mẫu iPhone hiện nay, n&oacute; l&agrave; tổng h&ograve;a của vẻ đẹp thanh lịch, gọn g&agrave;ng của&nbsp;<a href="https://www.thegioididong.com/dtdd/iphone-5s-16gb" target="_blank" title=" iPhone 5s" type=" iPhone 5s">iPhone 5s</a>&nbsp;với sức mạnh cấu h&igrave;nh của iPhone 6s. Ch&iacute;nh v&igrave; vậy, iPhone SE vẫn l&agrave; mong ước của nhiều t&iacute;n đồ nh&agrave; T&aacute;o.</p>

<p><img alt="iPhone SE đổi trả thiết kế thanh lịch, mạnh như iPhone 6s còn dưới 7 triệu đồng" src="https://cdn1.tgdd.vn/Files/2016/11/28/919237/iphone-se-2_1204x535.jpg" title="iPhone SE đổi trả thiết kế thanh lịch, mạnh như iPhone 6s còn dưới 7 triệu đồng" /></p>

<p>Về gi&aacute; b&aacute;n, hiện tại iPhone SE h&agrave;ng đổi trả chỉ c&ograve;n dưới 7 triệu, ở mức trung b&igrave;nh l&agrave; 6.8 triệu đồng, thậm ch&iacute; c&oacute; chiếc chỉ 6.3 triệu đồng, t&ugrave;y thời gian bảo h&agrave;nh. Đ&acirc;y ch&iacute;nh l&agrave; lựa chọn tốt cho nhiều bạn trẻ mong muốn c&oacute; một iPhone &ldquo;nhỏ nhưng c&oacute; v&otilde;&rdquo;, gọn g&agrave;ng nhưng cực kỳ mạnh mẽ.</p>

<p>iPhone SE hiện l&agrave; mẫu smartphone nhỏ gọn c&oacute; hiệu suất cao nhất hiện nay bởi n&oacute; trang bị cấu h&igrave;nh như iPhone 6s, đ&oacute; l&agrave; vi xử l&yacute; Apple A9, RAM 2 GB, c&ugrave;ng camera 12 MP sắc n&eacute;t. So với iPhone 5s th&igrave; iPhone SE c&ograve;n sở hữu thỏi pin dung lượng lớn hơn (1.642 mAh so với 1.560 mAh).</p>
',
                'images' => '1480392187_bannernew4-_1920x1080.jpg',
                'tag' => 'iphone 7, iphone 7 plus',
                'status' => 1,
                'source' => 'the gioi di dong',
                'cat_id' => 22,
                'user_id' => 1,
                'created_at' => '2016-11-28 21:03:07',
                'updated_at' => '2016-11-28 21:03:07',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Điểm tin HOT 23/11: Mẫu iPhone SE 2017 đẹp nao lòng, đoạn video 5 giây biến iPhone thành cục gạch',
                'slug' => 'diem-tin-hot-2311-mau-iphone-se-2017-dep-nao-long-doan-video-5-giay-bien-iphone-thanh-cuc-gach',
                'author' => 'admin',
                'intro' => '<p>Mới đ&acirc;y, 1 nh&agrave; thiết kể trẻ tuổi sinh năm 1998 tại Việt Nam đ&atilde; tạo ra 1 bản concept iPhone SE 2017 đẹp đến nao l&ograve;ng, sợ kiểu n&agrave;y th&igrave; iPhone 7 sẽ ế h&agrave;ng mất.</p>
',
                'full' => '<h2>Mới đ&acirc;y, 1 nh&agrave; thiết kể trẻ tuổi sinh năm 1998 tại Việt Nam đ&atilde; tạo ra 1 bản concept iPhone SE 2017 đẹp đến nao l&ograve;ng, sợ kiểu n&agrave;y th&igrave; iPhone 7 sẽ ế h&agrave;ng mất. Ngo&agrave;i ra, cư d&acirc;n mạng đang truyền tay nhau 1 clip 5 gi&acirc;y khiến nhiều chiếc iPhone trở th&agrave;nh cục gạch 1 c&aacute;ch nhẹ nh&agrave;ng.</h2>

<h3><strong>1.&nbsp;Nếu iPhone SE 2017 đẹp thế n&agrave;y th&igrave; iPhone 7 cũng sẽ ế h&agrave;ng cho coi</strong></h3>

<p>Mới đ&acirc;y, nh&agrave; thiết kế nhỏ tuổi Đạt Nobita tiếp tục đến với mẫu thiết kế iPhone SE 2017 m&agrave; theo m&igrave;nh l&agrave; &ldquo;đẹp kh&ocirc;ng tỳ vết&rdquo;. iPhone SE 2017 trong mẫu thiết kế n&agrave;y c&oacute; khung viền phẳng, rất mạnh mẽ trong khi mặt trước v&agrave; sau được phủ k&iacute;nh cường lực. C&oacute; vẻ như những th&ocirc;ng tin cho rằng năm sau iPhone sẽ sử dụng lại kiểu thiết kế tr&ecirc;n iPhone 4/4s đ&atilde; ảnh hưởng tới mẫu concept n&agrave;y.</p>

<p><img alt="Nếu iPhone SE 2017 đẹp thế này thì iPhone 7 cũng sẽ ế hàng cho coi" src="https://cdn3.tgdd.vn/Files/2016/11/22/917054/se1_1280x720.jpg" title="Nếu iPhone SE 2017 đẹp thế này thì iPhone 7 cũng sẽ ế hàng cho coi" /></p>

<p>Chưa hết, concept iPhone SE 2017 c&ograve;n ấn tượng bởi viền cạnh m&agrave;n h&igrave;nh si&ecirc;u mỏng, cạnh tr&ecirc;n cũng rất hẹp, t&iacute;ch hợp camera trước gọn nhỏ, tinh tế. Lần n&agrave;y, m&aacute;y kh&ocirc;ng c&oacute; n&uacute;t nguồn cạnh tr&ecirc;n m&agrave; l&agrave; ở cạnh phải để tiện lợi cho người d&ugrave;ng bởi m&agrave;n h&igrave;nh của m&aacute;y đ&atilde; lớn hơn.</p>

<p>Xem th&ecirc;m:&nbsp;<a href="https://www.thegioididong.com/tin-tuc/neu-iphone-se-2017-dep-the-nay-thi-iphone-7-cung-se-e-hang-917054" target="_blank" title="Nếu iPhone SE 2017 đẹp thế này thì iPhone 7 cũng sẽ ế hàng cho coi">Nếu iPhone SE 2017 đẹp thế n&agrave;y th&igrave; iPhone 7 cũng sẽ ế h&agrave;ng cho coi</a></p>

<h3><strong>2.&nbsp;Cảnh b&aacute;o: Đoạn video 5 gi&acirc;y khiến m&aacute;y iPhone trở th&agrave;nh &quot;cục gạch&quot;</strong></h3>

<p><img alt="" src="https://www.thegioididong.com/tin-tuc/mau-iphone-se-2017-dep-nao-long-doan-video-5-giay-917408" /></p>

<p>Xem th&ecirc;m:&nbsp;<a href="https://www.thegioididong.com/tin-tuc/canh-bao-doan-video-5-giay-khien-may-iphone-tro-thanh-cuc-gach-917063" target="_blank" title="Cảnh báo: Đoạn video 5 giây khiến máy iPhone trở thành cục gạch">Cảnh b&aacute;o: Đoạn video 5 gi&acirc;y khiến m&aacute;y iPhone trở th&agrave;nh &quot;cục gạch&quot;</a></p>

<h3><strong>3.&nbsp;Galaxy S7 Edge Glossy Black bỗng dưng xuất hiện, iPhone 7 Jet Black sắp c&oacute; &ldquo;người anh em&rdquo;</strong></h3>

<p>Trang c&ocirc;ng nghệ th&acirc;n cận với Samsung &ndash;&nbsp;<a href="http://www.sammobile.com/2016/11/23/first-images-of-the-glossy-black-galaxy-s7-edge-surface-online/" rel="nofollow" target="_blank" title="Galaxy S7 Edge" type="Galaxy S7 Edge">Sammobile</a>&nbsp;l&agrave; nguồn tin mang đến cho ch&uacute;ng ta những h&igrave;nh ảnh n&agrave;y. Trong bộ ảnh dưới đ&acirc;y, c&aacute;c bạn c&oacute; thể thấy rằng Galaxy S7 Edge xuất hiện với m&agrave;u đen b&oacute;ng bẩy hơn so với m&agrave;u Black Onyx trước đ&oacute;.</p>

<p><img alt="Galaxy S7 Edge Glossy Black bỗng dưng xuất hiện, iPhone 7 Jet Black sắp có “người anh em”" src="https://cdn.tgdd.vn/Files/2016/11/23/917387/s7-edge-glossy-black-7_690x690.jpg" title="Galaxy S7 Edge Glossy Black bỗng dưng xuất hiện, iPhone 7 Jet Black sắp có “người anh em”" /></p>

<p>Đặc biệt, bộ ảnh n&agrave;y cũng rất sắc n&eacute;t v&agrave; chi tiết, kh&ocirc;ng c&oacute; vẻ g&igrave; l&agrave; đang chụp l&eacute;n cả, v&igrave; vậy c&oacute; thể n&oacute;i rằng Samsung đ&atilde; sẵn s&agrave;ng để tung phi&ecirc;n bản m&agrave;u sắc mới n&agrave;y cho dịp cuối năm để những ai th&iacute;ch m&agrave;u đen b&oacute;ng c&oacute; th&ecirc;m lựa chọn hấp dẫn.</p>

<p>Xem th&ecirc;m:&nbsp;<a href="https://www.thegioididong.com/tin-tuc/galaxy-s7-edge-glossy-black-bong-dung-xuat-hien-917387" target="_blank" title="Galaxy S7 Edge Glossy Black bỗng dưng xuất hiện, iPhone 7 Jet Black sắp có người anh em">Galaxy S7 Edge Glossy Black bỗng dưng xuất hiện, iPhone 7 Jet Black sắp c&oacute; &ldquo;người anh em&rdquo;</a></p>

<h3><strong>4.&nbsp;3 smartphone c&oacute; gi&aacute; giảm l&agrave;m nao l&ograve;ng người d&ugrave;ng Việt (11/2016)</strong></h3>

<p><img alt="Apple iPhone SE" src="https://cdn3.tgdd.vn/Files/2016/11/22/917091/iphone-se_800x450.jpg" title="Apple iPhone SE" /></p>

<p>Bắt đầu rồi đ&oacute; c&aacute;c bạn ạ, m&ugrave;a mua sắm cuối năm đang nhộn nhịp hẳn l&ecirc;n. Thị trường di động kh&ocirc;ng chỉ xuất hiện c&aacute;c mẫu&nbsp;<a href="https://www.thegioididong.com/dtdd" target="_blank" title="Đặt mua smartphone tại Thegioididong.com" type="Đặt mua smartphone tại Thegioididong.com">smartphone</a>&nbsp;mới thời thượng, m&agrave; b&ecirc;n cạnh đ&oacute;, những mẫu m&aacute;y được b&aacute;n ra trước đ&oacute; cũng ồ ạt giảm gi&aacute; để h&uacute;t kh&aacute;ch.</p>

<p>Xem th&ecirc;m:&nbsp;<a href="https://www.thegioididong.com/tin-tuc/top-3-smartphone-co-gia-giam-lam-nao-long-nguoi-viet-11-2016-917091" target="_blank" title="3 smartphone có giá giảm làm nao lòng người dùng Việt (11/2016)">3 smartphone c&oacute; gi&aacute; giảm l&agrave;m nao l&ograve;ng người d&ugrave;ng Việt (11/2016)</a></p>

<h3><strong>5.&nbsp;7 t&iacute;nh năng tuyệt vời gi&uacute;p bạn sử dụng Android như chuy&ecirc;n gia</strong></h3>

<p><img alt="Android" src="https://cdn1.tgdd.vn/Files/2016/11/23/917202/android_800x450.jpg" title="Android" /></p>

<p><a href="https://www.thegioididong.com/tin-tuc/tim-kiem?key=android" target="_blank" title="Android" type="Android">Android</a>&nbsp;l&agrave; một hệ điều hảnh phổ biến nhất hiện nay với rất nhiều tuỳ chỉnh th&uacute; vị. V&igrave; vậy, h&ocirc;m nay m&igrave;nh xin giới thiệu với c&aacute;c bạn c&aacute;c cử chỉ rất hữu &iacute;ch gi&uacute;p bạn sử dụng thiết bị như một chuy&ecirc;n gia. Mời c&aacute;c bạn c&ugrave;ng theo d&otilde;i b&agrave;i viết nh&eacute;.</p>
',
                'images' => '1480385929_bannernew4-_1920x1080.jpg',
                'tag' => 'Điểm tin HOT 23/11: Mẫu iPhone SE 2017 ',
                'status' => 1,
                'source' => 'thegoididong.com',
                'cat_id' => 22,
                'user_id' => 1,
                'created_at' => '2016-11-28 19:18:49',
                'updated_at' => '2016-11-28 19:18:49',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Điểm tin HOT 23/11: Mẫu iPhone SE 2017 ',
                'slug' => 'diem-tin-hot-2311-mau-iphone-se-2017',
                'author' => 'admin',
                'intro' => '<p>Mới đ&acirc;y, 1 nh&agrave; thiết kể trẻ tuổi sinh năm 1998 tại Việt Nam đ&atilde; tạo ra 1 bản concept iPhone SE 2017 đẹp đến nao l&ograve;ng, sợ kiểu n&agrave;y th&igrave; iPhone 7 sẽ ế h&agrave;ng mất.</p>
',
                'full' => '<h2>Mới đ&acirc;y, 1 nh&agrave; thiết kể trẻ tuổi sinh năm 1998 tại Việt Nam đ&atilde; tạo ra 1 bản concept iPhone SE 2017 đẹp đến nao l&ograve;ng, sợ kiểu n&agrave;y th&igrave; iPhone 7 sẽ ế h&agrave;ng mất. Ngo&agrave;i ra, cư d&acirc;n mạng đang truyền tay nhau 1 clip 5 gi&acirc;y khiến nhiều chiếc iPhone trở th&agrave;nh cục gạch 1 c&aacute;ch nhẹ nh&agrave;ng.</h2>

<h3><strong>1.&nbsp;Nếu iPhone SE 2017 đẹp thế n&agrave;y th&igrave; iPhone 7 cũng sẽ ế h&agrave;ng cho coi</strong></h3>

<p>Mới đ&acirc;y, nh&agrave; thiết kế nhỏ tuổi Đạt Nobita tiếp tục đến với mẫu thiết kế iPhone SE 2017 m&agrave; theo m&igrave;nh l&agrave; &ldquo;đẹp kh&ocirc;ng tỳ vết&rdquo;. iPhone SE 2017 trong mẫu thiết kế n&agrave;y c&oacute; khung viền phẳng, rất mạnh mẽ trong khi mặt trước v&agrave; sau được phủ k&iacute;nh cường lực. C&oacute; vẻ như những th&ocirc;ng tin cho rằng năm sau iPhone sẽ sử dụng lại kiểu thiết kế tr&ecirc;n iPhone 4/4s đ&atilde; ảnh hưởng tới mẫu concept n&agrave;y.</p>

<p><img alt="Nếu iPhone SE 2017 đẹp thế này thì iPhone 7 cũng sẽ ế hàng cho coi" src="https://cdn3.tgdd.vn/Files/2016/11/22/917054/se1_1280x720.jpg" title="Nếu iPhone SE 2017 đẹp thế này thì iPhone 7 cũng sẽ ế hàng cho coi" /></p>

<p>Chưa hết, concept iPhone SE 2017 c&ograve;n ấn tượng bởi viền cạnh m&agrave;n h&igrave;nh si&ecirc;u mỏng, cạnh tr&ecirc;n cũng rất hẹp, t&iacute;ch hợp camera trước gọn nhỏ, tinh tế. Lần n&agrave;y, m&aacute;y kh&ocirc;ng c&oacute; n&uacute;t nguồn cạnh tr&ecirc;n m&agrave; l&agrave; ở cạnh phải để tiện lợi cho người d&ugrave;ng bởi m&agrave;n h&igrave;nh của m&aacute;y đ&atilde; lớn hơn.</p>

<p>Xem th&ecirc;m:&nbsp;<a href="https://www.thegioididong.com/tin-tuc/neu-iphone-se-2017-dep-the-nay-thi-iphone-7-cung-se-e-hang-917054" target="_blank" title="Nếu iPhone SE 2017 đẹp thế này thì iPhone 7 cũng sẽ ế hàng cho coi">Nếu iPhone SE 2017 đẹp thế n&agrave;y th&igrave; iPhone 7 cũng sẽ ế h&agrave;ng cho coi</a></p>

<h3><strong>2.&nbsp;Cảnh b&aacute;o: Đoạn video 5 gi&acirc;y khiến m&aacute;y iPhone trở th&agrave;nh &quot;cục gạch&quot;</strong></h3>

<p><img alt="" src="https://www.thegioididong.com/tin-tuc/mau-iphone-se-2017-dep-nao-long-doan-video-5-giay-917408" /></p>

<p>Xem th&ecirc;m:&nbsp;<a href="https://www.thegioididong.com/tin-tuc/canh-bao-doan-video-5-giay-khien-may-iphone-tro-thanh-cuc-gach-917063" target="_blank" title="Cảnh báo: Đoạn video 5 giây khiến máy iPhone trở thành cục gạch">Cảnh b&aacute;o: Đoạn video 5 gi&acirc;y khiến m&aacute;y iPhone trở th&agrave;nh &quot;cục gạch&quot;</a></p>

<h3><strong>3.&nbsp;Galaxy S7 Edge Glossy Black bỗng dưng xuất hiện, iPhone 7 Jet Black sắp c&oacute; &ldquo;người anh em&rdquo;</strong></h3>

<p>Trang c&ocirc;ng nghệ th&acirc;n cận với Samsung &ndash;&nbsp;<a href="http://www.sammobile.com/2016/11/23/first-images-of-the-glossy-black-galaxy-s7-edge-surface-online/" rel="nofollow" target="_blank" title="Galaxy S7 Edge" type="Galaxy S7 Edge">Sammobile</a>&nbsp;l&agrave; nguồn tin mang đến cho ch&uacute;ng ta những h&igrave;nh ảnh n&agrave;y. Trong bộ ảnh dưới đ&acirc;y, c&aacute;c bạn c&oacute; thể thấy rằng Galaxy S7 Edge xuất hiện với m&agrave;u đen b&oacute;ng bẩy hơn so với m&agrave;u Black Onyx trước đ&oacute;.</p>

<p><img alt="Galaxy S7 Edge Glossy Black bỗng dưng xuất hiện, iPhone 7 Jet Black sắp có “người anh em”" src="https://cdn.tgdd.vn/Files/2016/11/23/917387/s7-edge-glossy-black-7_690x690.jpg" title="Galaxy S7 Edge Glossy Black bỗng dưng xuất hiện, iPhone 7 Jet Black sắp có “người anh em”" /></p>

<p>Đặc biệt, bộ ảnh n&agrave;y cũng rất sắc n&eacute;t v&agrave; chi tiết, kh&ocirc;ng c&oacute; vẻ g&igrave; l&agrave; đang chụp l&eacute;n cả, v&igrave; vậy c&oacute; thể n&oacute;i rằng Samsung đ&atilde; sẵn s&agrave;ng để tung phi&ecirc;n bản m&agrave;u sắc mới n&agrave;y cho dịp cuối năm để những ai th&iacute;ch m&agrave;u đen b&oacute;ng c&oacute; th&ecirc;m lựa chọn hấp dẫn.</p>

<p>Xem th&ecirc;m:&nbsp;<a href="https://www.thegioididong.com/tin-tuc/galaxy-s7-edge-glossy-black-bong-dung-xuat-hien-917387" target="_blank" title="Galaxy S7 Edge Glossy Black bỗng dưng xuất hiện, iPhone 7 Jet Black sắp có người anh em">Galaxy S7 Edge Glossy Black bỗng dưng xuất hiện, iPhone 7 Jet Black sắp c&oacute; &ldquo;người anh em&rdquo;</a></p>

<h3><strong>4.&nbsp;3 smartphone c&oacute; gi&aacute; giảm l&agrave;m nao l&ograve;ng người d&ugrave;ng Việt (11/2016)</strong></h3>

<p><img alt="Apple iPhone SE" src="https://cdn3.tgdd.vn/Files/2016/11/22/917091/iphone-se_800x450.jpg" title="Apple iPhone SE" /></p>

<p>Bắt đầu rồi đ&oacute; c&aacute;c bạn ạ, m&ugrave;a mua sắm cuối năm đang nhộn nhịp hẳn l&ecirc;n. Thị trường di động kh&ocirc;ng chỉ xuất hiện c&aacute;c mẫu&nbsp;<a href="https://www.thegioididong.com/dtdd" target="_blank" title="Đặt mua smartphone tại Thegioididong.com" type="Đặt mua smartphone tại Thegioididong.com">smartphone</a>&nbsp;mới thời thượng, m&agrave; b&ecirc;n cạnh đ&oacute;, những mẫu m&aacute;y được b&aacute;n ra trước đ&oacute; cũng ồ ạt giảm gi&aacute; để h&uacute;t kh&aacute;ch.</p>

<p>Xem th&ecirc;m:&nbsp;<a href="https://www.thegioididong.com/tin-tuc/top-3-smartphone-co-gia-giam-lam-nao-long-nguoi-viet-11-2016-917091" target="_blank" title="3 smartphone có giá giảm làm nao lòng người dùng Việt (11/2016)">3 smartphone c&oacute; gi&aacute; giảm l&agrave;m nao l&ograve;ng người d&ugrave;ng Việt (11/2016)</a></p>

<h3><strong>5.&nbsp;7 t&iacute;nh năng tuyệt vời gi&uacute;p bạn sử dụng Android như chuy&ecirc;n gia</strong></h3>

<p><img alt="Android" src="https://cdn1.tgdd.vn/Files/2016/11/23/917202/android_800x450.jpg" title="Android" /></p>

<p><a href="https://www.thegioididong.com/tin-tuc/tim-kiem?key=android" target="_blank" title="Android" type="Android">Android</a>&nbsp;l&agrave; một hệ điều hảnh phổ biến nhất hiện nay với rất nhiều tuỳ chỉnh th&uacute; vị. V&igrave; vậy, h&ocirc;m nay m&igrave;nh xin giới thiệu với c&aacute;c bạn c&aacute;c cử chỉ rất hữu &iacute;ch gi&uacute;p bạn sử dụng thiết bị như một chuy&ecirc;n gia. Mời c&aacute;c bạn c&ugrave;ng theo d&otilde;i b&agrave;i viết nh&eacute;.</p>
',
                'images' => '1480385945_bannernew4-_1920x1080.jpg',
                'tag' => 'Điểm tin HOT 23/11: Mẫu iPhone SE 2017 ',
                'status' => 1,
                'source' => 'thegoididong.com',
                'cat_id' => 22,
                'user_id' => 1,
                'created_at' => '2016-11-28 19:19:05',
                'updated_at' => '2016-11-28 19:19:05',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'iPhone SE đổi trả thiết kế thanh lịch, mạnh như iPhone 6s còn dưới 7 triệu ',
                'slug' => 'iphone-se-doi-tra-thiet-ke-thanh-lich-manh-nhu-iphone-6s-con-duoi-7-trieu',
                'author' => 'admin',
                'intro' => '<p>The&nbsp;<code>orderBy</code>&nbsp;method allows you to sort the result of the query by a given column.&nbsp;</p>
',
                'full' => '<p>The&nbsp;<code>orderBy</code>&nbsp;method allows you to sort the result of the query by a given column. The first argument to the&nbsp;<code>orderBy</code>&nbsp;method should be the column you wish to sort by, while the second argument controls the direction of the sort and may be either&nbsp;<code>asc</code>&nbsp;or&nbsp;<code>desc</code>:</p>

<p>The&nbsp;<code>orderBy</code>&nbsp;method allows you to sort the result of the query by a given column. The first argument to the&nbsp;<code>orderBy</code>&nbsp;method should be the column you wish to sort by, while the second argument controls the direction of the sort and may be either&nbsp;<code>asc</code>&nbsp;or&nbsp;<code>desc</code>:</p>

<p>The&nbsp;<code>orderBy</code>&nbsp;method allows you to sort the result of the query by a given column. The first argument to the&nbsp;<code>orderBy</code>&nbsp;method should be the column you wish to sort by, while the second argument controls the direction of the sort and may be either&nbsp;<code>asc</code>&nbsp;or&nbsp;<code>desc</code>:</p>
',
                'images' => '1480390877_iphone-se-1_1240x698.jpg',
                'tag' => 'Galaxy S7, Galaxy S7,Galaxy S7',
                'status' => 1,
                'source' => 'Google Product Forum​',
                'cat_id' => 22,
                'user_id' => 1,
                'created_at' => '2016-11-28 20:41:17',
                'updated_at' => '2016-11-28 20:41:17',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'iPhone SE đổi trả thiết kế thanh lịch, mạnh như iPhone 6s còn dưới 7 ',
                'slug' => 'iphone-se-doi-tra-thiet-ke-thanh-lich-manh-nhu-iphone-6s-con-duoi-7',
                'author' => 'admin',
                'intro' => '<p>The&nbsp;<code>orderBy</code>&nbsp;method allows you to sort the result of the query by a given column.&nbsp;</p>
',
                'full' => '<p>The&nbsp;<code>orderBy</code>&nbsp;method allows you to sort the result of the query by a given column. The first argument to the&nbsp;<code>orderBy</code>&nbsp;method should be the column you wish to sort by, while the second argument controls the direction of the sort and may be either&nbsp;<code>asc</code>&nbsp;or&nbsp;<code>desc</code>:</p>

<p>The&nbsp;<code>orderBy</code>&nbsp;method allows you to sort the result of the query by a given column. The first argument to the&nbsp;<code>orderBy</code>&nbsp;method should be the column you wish to sort by, while the second argument controls the direction of the sort and may be either&nbsp;<code>asc</code>&nbsp;or&nbsp;<code>desc</code>:</p>

<p>The&nbsp;<code>orderBy</code>&nbsp;method allows you to sort the result of the query by a given column. The first argument to the&nbsp;<code>orderBy</code>&nbsp;method should be the column you wish to sort by, while the second argument controls the direction of the sort and may be either&nbsp;<code>asc</code>&nbsp;or&nbsp;<code>desc</code>:</p>
',
                'images' => '1480390903_bannernew4-_1920x1080.jpg',
                'tag' => 'bla ble',
                'status' => 1,
                'source' => 'Google Product Forum​',
                'cat_id' => 22,
                'user_id' => 1,
                'created_at' => '2016-11-28 20:41:43',
                'updated_at' => '2016-11-28 20:41:43',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'iPhone SE đổi trả thiết kế thanh lịch, mạnh như iPhone',
                'slug' => 'iphone-se-doi-tra-thiet-ke-thanh-lich-manh-nhu-iphone',
                'author' => 'admin',
                'intro' => '<p>The&nbsp;<code>orderBy</code>&nbsp;method allows you to sort the result of the query by a given column.&nbsp;</p>
',
                'full' => '<p>The&nbsp;<code>orderBy</code>&nbsp;method allows you to sort the result of the query by a given column. The first argument to the&nbsp;<code>orderBy</code>&nbsp;method should be the column you wish to sort by, while the second argument controls the direction of the sort and may be either&nbsp;<code>asc</code>&nbsp;or&nbsp;<code>desc</code>:</p>

<p>The&nbsp;<code>orderBy</code>&nbsp;method allows you to sort the result of the query by a given column. The first argument to the&nbsp;<code>orderBy</code>&nbsp;method should be the column you wish to sort by, while the second argument controls the direction of the sort and may be either&nbsp;<code>asc</code>&nbsp;or&nbsp;<code>desc</code>:</p>

<p>The&nbsp;<code>orderBy</code>&nbsp;method allows you to sort the result of the query by a given column. The first argument to the&nbsp;<code>orderBy</code>&nbsp;method should be the column you wish to sort by, while the second argument controls the direction of the sort and may be either&nbsp;<code>asc</code>&nbsp;or&nbsp;<code>desc</code>:</p>
',
                'images' => '1480390918_bannernew4-_1920x1080.jpg',
                'tag' => 'Galaxy S7, Galaxy S7,Galaxy S7',
                'status' => 1,
                'source' => 'Google Product Forum​',
                'cat_id' => 22,
                'user_id' => 1,
                'created_at' => '2016-11-28 20:41:58',
                'updated_at' => '2016-11-28 20:41:58',
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'iPhone SE đổi trả thiết kế thanh lịch, mạnh ',
                'slug' => 'iphone-se-doi-tra-thiet-ke-thanh-lich-manh',
                'author' => 'admin',
                'intro' => '<p>The&nbsp;<code>orderBy</code>&nbsp;method allows you to sort the result of the query by a given column.&nbsp;</p>
',
                'full' => '<p>The&nbsp;<code>orderBy</code>&nbsp;method allows you to sort the result of the query by a given column. The first argument to the&nbsp;<code>orderBy</code>&nbsp;method should be the column you wish to sort by, while the second argument controls the direction of the sort and may be either&nbsp;<code>asc</code>&nbsp;or&nbsp;<code>desc</code>:</p>

<p>The&nbsp;<code>orderBy</code>&nbsp;method allows you to sort the result of the query by a given column. The first argument to the&nbsp;<code>orderBy</code>&nbsp;method should be the column you wish to sort by, while the second argument controls the direction of the sort and may be either&nbsp;<code>asc</code>&nbsp;or&nbsp;<code>desc</code>:</p>

<p>The&nbsp;<code>orderBy</code>&nbsp;method allows you to sort the result of the query by a given column. The first argument to the&nbsp;<code>orderBy</code>&nbsp;method should be the column you wish to sort by, while the second argument controls the direction of the sort and may be either&nbsp;<code>asc</code>&nbsp;or&nbsp;<code>desc</code>:</p>
',
                'images' => '1480390929_bannernew4-_1920x1080.jpg',
                'tag' => 'Galaxy S7, Galaxy S7,Galaxy S7',
                'status' => 1,
                'source' => 'Google Product Forum​',
                'cat_id' => 22,
                'user_id' => 1,
                'created_at' => '2016-11-28 20:42:09',
                'updated_at' => '2016-11-28 20:42:09',
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'iPhone SE đổi trả thiết kế thanh lịch',
                'slug' => 'iphone-se-doi-tra-thiet-ke-thanh-lich',
                'author' => 'admin',
                'intro' => '<p>The&nbsp;<code>orderBy</code>&nbsp;method allows you to sort the result of the query by a given column.&nbsp;</p>
',
                'full' => '<p>The&nbsp;<code>orderBy</code>&nbsp;method allows you to sort the result of the query by a given column. The first argument to the&nbsp;<code>orderBy</code>&nbsp;method should be the column you wish to sort by, while the second argument controls the direction of the sort and may be either&nbsp;<code>asc</code>&nbsp;or&nbsp;<code>desc</code>:</p>

<p>The&nbsp;<code>orderBy</code>&nbsp;method allows you to sort the result of the query by a given column. The first argument to the&nbsp;<code>orderBy</code>&nbsp;method should be the column you wish to sort by, while the second argument controls the direction of the sort and may be either&nbsp;<code>asc</code>&nbsp;or&nbsp;<code>desc</code>:</p>

<p>The&nbsp;<code>orderBy</code>&nbsp;method allows you to sort the result of the query by a given column. The first argument to the&nbsp;<code>orderBy</code>&nbsp;method should be the column you wish to sort by, while the second argument controls the direction of the sort and may be either&nbsp;<code>asc</code>&nbsp;or&nbsp;<code>desc</code>:</p>
',
                'images' => '1480390936_bannernew4-_1920x1080.jpg',
                'tag' => 'Galaxy S7, Galaxy S7,Galaxy S7',
                'status' => 1,
                'source' => 'Google Product Forum​',
                'cat_id' => 22,
                'user_id' => 1,
                'created_at' => '2016-11-28 20:42:16',
                'updated_at' => '2016-11-28 20:42:16',
            ),
            8 => 
            array (
                'id' => 9,
                'title' => 'iOS 10.1.1 đang gặp vấn đề nghiêm trọng về pin?',
                'slug' => 'ios-1011-dang-gap-van-de-nghiem-trong-ve-pin',
                'author' => 'Hoang Viet',
                'intro' => '<p>Đầu th&aacute;ng 11 n&agrave;y Apple đ&atilde; ch&iacute;nh thức ph&aacute;t h&agrave;nh bản cập nhật iOS 10.1.1, tuy nhi&ecirc;n bản n&acirc;ng cấp n&agrave;y đ&atilde; nhận phản hồi kh&ocirc;ng tốt từ người d&ugrave;ng.</p>
',
                'full' => '<h2>Đầu th&aacute;ng 11 n&agrave;y Apple đ&atilde; ch&iacute;nh thức ph&aacute;t h&agrave;nh bản cập nhật&nbsp;<a href="https://www.thegioididong.com/tin-tuc/tim-kiem?key=iOS+10.1.1" target="_blank" title="iOS 10.1.1" type="iOS 10.1.1">iOS 10.1.1</a>, tuy nhi&ecirc;n bản n&acirc;ng cấp n&agrave;y đ&atilde; nhận phản hồi kh&ocirc;ng tốt từ người d&ugrave;ng.</h2>

<p>Cụ thể ng&agrave;y c&agrave;ng c&oacute; nhiều c&aacute;c b&aacute;o c&aacute;o về vấn đề iOS 10.1.1 ngốn pin nhanh hơn so với c&aacute;c phi&ecirc;n bản trước. Một số thiết bị khi c&ograve;n khoảng 30% pin sẽ đột ngột tắt nguồn, sau khi cắm bộ sạc v&agrave;o v&agrave;i gi&acirc;y th&igrave; m&agrave;n h&igrave;nh sẽ hiển thị lại dung lượng pin 30% trước đ&oacute;, th&ocirc;ng tin được&nbsp;<a href="http://www.phonearena.com/news/iOS-10.1.1-reported-to-drain-users-batteries_id88354" rel="nofollow" target="_blank" title="phonearena" type="phonearena">phonearena</a>&nbsp;đăng tải.</p>

<p>Người d&ugrave;ng kh&aacute;c c&ograve;n gặp vấn đề nghi&ecirc;m trọng hơn, khi iPhone của họ bị giảm hơn 80% pin trong một đ&ecirc;m, v&agrave; ho&agrave;n to&agrave;n tắt nguồn v&agrave;o s&aacute;ng h&ocirc;m sau, khi cắm sạc v&agrave;o th&igrave; lại hiển thị ở mức 30% pin.</p>

<p>Hiện lỗi n&agrave;y chỉ xuất hiện ở một số người d&ugrave;ng nhất định, v&igrave; vậy Apple vẫn chưa thừa nhận đ&acirc;y l&agrave; vấn đề g&acirc;y ra bởi iOS 10.1.1. Hy vọng nh&agrave; t&aacute;o sẽ t&igrave;m ra nguy&ecirc;n nh&acirc;n vấn đề v&agrave; sớm khắc phục.</p>

<p>Cũng nhắc lại đ&ocirc;i ch&uacute;t về iOS 10.1.1, trong bản n&acirc;ng cấp n&agrave;y Apple tập trung cải thiện t&iacute;nh năng chăm s&oacute;c sức khỏe v&agrave; sửa lỗi c&aacute;c ứng dụng kh&ocirc;ng thể tiếp cận dữ liệu từ điện thoại để thống k&ecirc; cho người d&ugrave;ng. Ngo&agrave;i ra, kh&ocirc;ng c&oacute; bất kỳ t&iacute;nh năng mới n&agrave;o được th&ecirc;m v&agrave;o.</p>
',
                'images' => '1480399611_sac-pin-iphone77-636137797940677630_800x450.jpg',
                'tag' => 'iOS 10.1.1 , Pin',
                'status' => 1,
                'source' => 'thegoididong.com',
                'cat_id' => 22,
                'user_id' => 1,
                'created_at' => '2016-11-28 23:09:06',
                'updated_at' => '2016-11-28 23:09:06',
            ),
            9 => 
            array (
                'id' => 10,
                'title' => 'iOS 10.1.1 mới ra mắt',
                'slug' => 'ios-1011-moi-ra-mat',
                'author' => 'Hoang Viet',
                'intro' => '<p>Đầu th&aacute;ng 11 n&agrave;y Apple đ&atilde; ch&iacute;nh thức ph&aacute;t h&agrave;nh bản cập nhật iOS 10.1.1, tuy nhi&ecirc;n bản n&acirc;ng cấp n&agrave;y đ&atilde; nhận phản hồi kh&ocirc;ng tốt từ người d&ugrave;ng.</p>
',
                'full' => '<h2>Đầu th&aacute;ng 11 n&agrave;y Apple đ&atilde; ch&iacute;nh thức ph&aacute;t h&agrave;nh bản cập nhật&nbsp;<a href="https://www.thegioididong.com/tin-tuc/tim-kiem?key=iOS+10.1.1" target="_blank" title="iOS 10.1.1" type="iOS 10.1.1">iOS 10.1.1</a>, tuy nhi&ecirc;n bản n&acirc;ng cấp n&agrave;y đ&atilde; nhận phản hồi kh&ocirc;ng tốt từ người d&ugrave;ng.</h2>

<p>Cụ thể ng&agrave;y c&agrave;ng c&oacute; nhiều c&aacute;c b&aacute;o c&aacute;o về vấn đề iOS 10.1.1 ngốn pin nhanh hơn so với c&aacute;c phi&ecirc;n bản trước. Một số thiết bị khi c&ograve;n khoảng 30% pin sẽ đột ngột tắt nguồn, sau khi cắm bộ sạc v&agrave;o v&agrave;i gi&acirc;y th&igrave; m&agrave;n h&igrave;nh sẽ hiển thị lại dung lượng pin 30% trước đ&oacute;, th&ocirc;ng tin được&nbsp;<a href="http://www.phonearena.com/news/iOS-10.1.1-reported-to-drain-users-batteries_id88354" rel="nofollow" target="_blank" title="phonearena" type="phonearena">phonearena</a>&nbsp;đăng tải.</p>

<p>Người d&ugrave;ng kh&aacute;c c&ograve;n gặp vấn đề nghi&ecirc;m trọng hơn, khi iPhone của họ bị giảm hơn 80% pin trong một đ&ecirc;m, v&agrave; ho&agrave;n to&agrave;n tắt nguồn v&agrave;o s&aacute;ng h&ocirc;m sau, khi cắm sạc v&agrave;o th&igrave; lại hiển thị ở mức 30% pin.</p>

<p>Hiện lỗi n&agrave;y chỉ xuất hiện ở một số người d&ugrave;ng nhất định, v&igrave; vậy Apple vẫn chưa thừa nhận đ&acirc;y l&agrave; vấn đề g&acirc;y ra bởi iOS 10.1.1. Hy vọng nh&agrave; t&aacute;o sẽ t&igrave;m ra nguy&ecirc;n nh&acirc;n vấn đề v&agrave; sớm khắc phục.</p>

<p>Cũng nhắc lại đ&ocirc;i ch&uacute;t về iOS 10.1.1, trong bản n&acirc;ng cấp n&agrave;y Apple tập trung cải thiện t&iacute;nh năng chăm s&oacute;c sức khỏe v&agrave; sửa lỗi c&aacute;c ứng dụng kh&ocirc;ng thể tiếp cận dữ liệu từ điện thoại để thống k&ecirc; cho người d&ugrave;ng. Ngo&agrave;i ra, kh&ocirc;ng c&oacute; bất kỳ t&iacute;nh năng mới n&agrave;o được th&ecirc;m v&agrave;o.</p>
',
                'images' => '1480399632_sac-pin-iphone77-636137797940677630_800x450.jpg',
                'tag' => 'iOS 10.1.1 , Pin',
                'status' => 1,
                'source' => 'thegoididong.com',
                'cat_id' => 22,
                'user_id' => 1,
                'created_at' => '2016-11-28 23:09:34',
                'updated_at' => '2016-11-28 23:09:34',
            ),
            10 => 
            array (
                'id' => 11,
                'title' => 'Google phải khâm phục Samsung về khả năng tối ưu hóa Android 7.0',
                'slug' => 'google-phai-kham-phuc-samsung-ve-kha-nang-toi-uu-hoa-android-70',
                'author' => 'Hoang Viet',
                'intro' => '<p>Google đ&atilde; tham gia v&agrave;o cuộc dua smartphone với Google Pixel được ra mắt v&agrave;o v&agrave;i th&aacute;ng trước. Mới đ&acirc;y, một Youtuber đ&atilde; c&oacute; cuộc thử nghiệm tốc độ giữa Google Pixel XL v&agrave; Galaxy S7. Để xem kết<',
                'full' => '<p>Một Youtuber c&oacute; t&ecirc;n XEETECHCARE đ&atilde; c&oacute; 1 cuộc thử nghiệm nhỏ nhằm so s&aacute;nh tốc độ của 2 chiếc smartphone Android cao cấp nhất hiện tại đ&oacute; l&agrave; Google Pixel XL v&agrave; Galaxy S7 tr&ecirc;n nền tảng Android 7.0 Nougat. Cuộc thử nghiệm n&agrave;y bao gồm c&aacute;c phần test về tốc độ mở của c&aacute;c ứng dụng cũng như tr&ograve; chơi. T&ograve; m&ograve; kết quả ra sao qu&aacute; nhỉ.</p>

<p><img alt="" src="https://www.thegioididong.com/tin-tuc/google-phai-kham-phuc-samsung-ve-kha-nang-toi-uu-hoa-919330" /></p>

<p>Như đ&atilde; thấy, 2 chiếc điện thoại n&agrave;y kh&aacute; c&acirc;n t&agrave;i c&acirc;n sức. Google Pixel XL hơn Galaxy S7 ở 1 số dụng v&agrave; ngược lại. Tuy nhi&ecirc;n, nh&igrave;n chung th&igrave; Galaxy S7 vẫn vượt trội hơn so với ch&iacute;nh đứa con của Google. D&ugrave; c&oacute; lợi thế được sử dụng hệ sinh th&aacute;i Android gốc v&agrave; chip Snapdragon 821 nhưng về độ mượt tr&ecirc;n Android 7.0 th&igrave; c&oacute; lẽ Google phải thua Samsung về 1 bậc.</p>
',
                'images' => '1480399703_ggpixels7_800x450.jpg',
                'tag' => 'iOS 10.1.1 , Pin',
                'status' => 1,
                'source' => 'thegoididong.com',
                'cat_id' => 22,
                'user_id' => 1,
                'created_at' => '2016-11-28 23:09:49',
                'updated_at' => '2016-11-28 23:09:49',
            ),
            11 => 
            array (
                'id' => 12,
                'title' => 'khuyễn mại mùa mua sắm cuối năm 2017',
                'slug' => 'khuyen-mai-mua-mua-sam-cuoi-nam-2017',
                'author' => 'admin',
                'intro' => '<p>H&agrave;ng ng&agrave;n sản phẩm Đồ gia dụng Điện, Đồ d&ugrave;ng Nh&agrave; bếp đang được GIẢM GI&Aacute; SỐC trong ng&agrave;y Online Friday tại Megaplaza. Nhanh tay, cơ hội Mua sắm GI&Aacute; SI&Ecirc;U RẺ cuối c&ugrave;ng trong năm 2016. Si&ecirc;u',
                'full' => '<p>H&agrave;ng ng&agrave;n sản phẩm Đồ gia dụng Điện, Đồ d&ugrave;ng Nh&agrave; bếp đang được GIẢM GI&Aacute; SỐC trong ng&agrave;y Online Friday tại Megaplaza. Nhanh tay, cơ hội Mua sắm GI&Aacute; SI&Ecirc;U RẺ cuối c&ugrave;ng trong năm 2016. Si&ecirc;u thị Megaplaza | Vui vẻ Mua sắm - Tiết kiệm chi ti&ecirc;u.</p>
',
                'images' => '1480404640_iphone-se-1_1240x698.jpg',
                'tag' => 'Galaxy S7, Galaxy S7,Galaxy S7',
                'status' => 1,
                'source' => 'Google Product Forum​',
                'cat_id' => 23,
                'user_id' => 1,
                'created_at' => '2016-11-29 00:30:40',
                'updated_at' => '2016-11-29 00:30:40',
            ),
            12 => 
            array (
                'id' => 13,
                'title' => 'khuyễn mại mùa mua sắm cuối năm 2017 1',
                'slug' => 'khuyen-mai-mua-mua-sam-cuoi-nam-2017-1',
                'author' => 'admin',
                'intro' => '<p>H&agrave;ng ng&agrave;n sản phẩm Đồ gia dụng Điện, Đồ d&ugrave;ng Nh&agrave; bếp đang được GIẢM GI&Aacute; SỐC trong ng&agrave;y Online Friday tại Megaplaza. Nhanh tay, cơ hội Mua sắm GI&Aacute; SI&Ecirc;U RẺ cuối c&ugrave;ng trong năm 2016. Si&ecirc;u',
                'full' => '<p>H&agrave;ng ng&agrave;n sản phẩm Đồ gia dụng Điện, Đồ d&ugrave;ng Nh&agrave; bếp đang được GIẢM GI&Aacute; SỐC trong ng&agrave;y Online Friday tại Megaplaza. Nhanh tay, cơ hội Mua sắm GI&Aacute; SI&Ecirc;U RẺ cuối c&ugrave;ng trong năm 2016. Si&ecirc;u thị Megaplaza | Vui vẻ Mua sắm - Tiết kiệm chi ti&ecirc;u.</p>
',
                'images' => '1480404648_iphone-se-1_1240x698.jpg',
                'tag' => 'Galaxy S7, Galaxy S7,Galaxy S7',
                'status' => 1,
                'source' => 'Google Product Forum​',
                'cat_id' => 23,
                'user_id' => 1,
                'created_at' => '2016-11-29 00:30:48',
                'updated_at' => '2016-11-29 00:30:48',
            ),
            13 => 
            array (
                'id' => 14,
                'title' => 'khuyễn mại mùa mua sắm cuối năm 12/2017 ',
                'slug' => 'khuyen-mai-mua-mua-sam-cuoi-nam-122017',
                'author' => 'admin',
                'intro' => '<p>H&agrave;ng ng&agrave;n sản phẩm Đồ gia dụng Điện, Đồ d&ugrave;ng Nh&agrave; bếp đang được GIẢM GI&Aacute; SỐC trong ng&agrave;y Online Friday tại Megaplaza. Nhanh tay, cơ hội Mua sắm GI&Aacute; SI&Ecirc;U RẺ cuối c&ugrave;ng trong năm 2016. Si&ecirc;u',
                'full' => '<p>H&agrave;ng ng&agrave;n sản phẩm Đồ gia dụng Điện, Đồ d&ugrave;ng Nh&agrave; bếp đang được GIẢM GI&Aacute; SỐC trong ng&agrave;y Online Friday tại Megaplaza. Nhanh tay, cơ hội Mua sắm GI&Aacute; SI&Ecirc;U RẺ cuối c&ugrave;ng trong năm 2016. Si&ecirc;u thị Megaplaza | Vui vẻ Mua sắm - Tiết kiệm chi ti&ecirc;u.</p>
',
                'images' => '1480404656_iphone-se-1_1240x698.jpg',
                'tag' => 'Galaxy S7, Galaxy S7,Galaxy S7',
                'status' => 1,
                'source' => 'Google Product Forum​',
                'cat_id' => 23,
                'user_id' => 1,
                'created_at' => '2016-11-29 00:30:56',
                'updated_at' => '2016-11-29 00:30:56',
            ),
        ));
        
        
    }
}