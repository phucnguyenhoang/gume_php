<?php
import('css/blogs/header');
import('js/blogs/header');
?>
<paper-drawer-panel>
    <div drawer class="pan-drawer">
        <paper-toolbar class="drawer-toolbar">
            <app-logo></app-logo>
        </paper-toolbar>
        <blog-search placeholder="Tim kiem"></blog-search>
        <hot-blog
            thumb="http://img.v3.news.zdn.vn/w660/Uploaded/nutmjz/2015_12_02/12319798_10204788201299254_1637655560_n.jpg"
            src="http://news.zing.vn/Doi-chan-phi-thuong-cua-co-gai-Viet-chinh-phuc-sa-mac-post606705.html">
            <div class="title">Đôi chân phi thường của cô gái Việt chinh phục sa mạc</div>
            <div class="description">Để vượt sa mạc Atacama - nơi có độ cao 3.200 m so với mực nước biển, Vũ Phương Thanh, sinh năm 1990 đã chạy, đi bộ 85-115km/tuần, rèn đôi chân hoạt động liên tục 12 tiếng/ngày.</div>
        </hot-blog>
        <blog-menu class="blog-menu">
            <blog-menu-item url="/cong-nghe" color="blue">Cong nghe</blog-menu-item>
            <blog-menu-item url="/doi-song" color="red" active>Doi song</blog-menu-item>
            <blog-menu-item url="/giai-tri" color="green">Giai tri</blog-menu-item>
        </blog-menu>
    </div>
    <paper-header-panel main mode="waterfall">
        <paper-toolbar class="paper-header">
            <paper-icon-button icon="menu" paper-drawer-toggle></paper-icon-button>
            <div class="title"><?php echo lang('blogs'); ?></div>
            <paper-icon-button icon="more-vert" on-tap="moreAction"></paper-icon-button>
        </paper-toolbar>
        <div class="content layout horizontal">
            <paper-card heading="12 địa điểm tham quan miễn phí ở Đà Lạt" class="blog-detail" elevation="2">
                <div class="card-content">
                    <blog-date>Thứ năm, 10/12/2015 | 13:06 GMT+7</blog-date>
                    <h4>Làng hoa Vạn Thành</h4>
                    <p>
                        Chạy theo đường 3/2, đến khách sạn Sài Gòn - Đà Lạt rẽ tay trái về hướng Cam Ly, bạn sẽ được chiêm ngưỡng làng hoa nổi tiếng và lâu đời nhất ở Đà Lạt. Các ruộng hoa và nhà kính với muôn vàn sắc hoa rực rỡ sẽ là phông nền đẹp cho những bức ảnh của bạn. Du khách cũng khó lòng rời khỏi nơi này khi bước chân bị níu giữ bởi hương thơm quyến rũ của “vương quốc” hoa.
                    </p>
                    <p class="image-content">
                        <img src="http://img.f33.dulich.vnecdn.net/2015/12/08/DL1-9135-1448943946-8706-1449565760.jpg">
                        <i>Đến Đà Lạt đừng quên bỏ qua làng hoa lâu đời nhất nơi đây. Ảnh: dalatnews</i>
                    </p>
                    <h4>Thiền Viện Trúc Lâm</h4>
                    <p>
                        Cách trung tâm thành phố Đà Lạt 5 km, nằm trên núi Phụng Hoàng, đây là một trong những thiền viện lớn nhất của Việt Nam. Tầm nhìn từ trên cao giúp cảnh sắc ở đây bao la thoáng đãng, cộng thêm tiếng chuông, mõ cầu kinh sẽ giúp du khách trút bỏ mọi phiền muộn, tìm được cảm giác nhẹ nhàng lắng đọng.
                    </p>
                    <h4>Hồ Tuyền Lâm</h4>
                    <p>
                        Từ Thiền viện Trúc Lâm đi xuống con dốc 140 bậc thang đá, bạn sẽ đến hồ Tuyền Lâm. Hồ tự nhiên đẹp nhất của xứ hoa có khung cảnh hữu tình với một rừng thông xanh ngắt soi bóng xuống mặt hồ phẳng lặng. Nơi đây sẽ cho bạn cảm nhận được nét quyến rũ của sự tĩnh lặng, một vẻ đẹp khác xa nhịp điệu sôi động của đô thị.
                    </p>
                    <h4>Chợ Đà Lạt</h4>
                    <p>
                        Nằm ngay trên trục đường chính Nguyễn Thị Minh Khai, chợ Đà Lạt là nơi thu hút du khách đến mua quần áo ấm và các đặc sản hấp dẫn như mứt, đậu ngự, nước cốt dâu tằm, trà atiso, hoa quả thập cẩm sấy khô… Tuy nhiên, ngôi chợ không chỉ đơn thuần là nơi mua bán mà còn khắc họa rõ nét lối sống, văn hóa của người dân ở thành phố sương mù.
                    </p>
                    <h4>Hồ Xuân Hương</h4>
                    <p>
                        Ở giữa trung tâm thành phố, hồ Xuân Hương được xem là trái tim của Đà Lạt. Hồ nhân tạo có hình trăng lưỡi liềm kéo dài gần 7 km đi qua nhiều địa danh du lịch nổi tiếng như: Vườn hoa thành phố, Công viên Yersin, Đồi Cù. Ngắm hồ Xuân Hương đẹp nhất là vào tinh mơ và hoàng hôn nhưng khám phá chợ đêm gần đây với những quán hàng rong cũng là một trải nghiệm không kém phần hấp dẫn.
                    </p>
                    <h4>Đồi chè Cầu Đất</h4>
                    <p class="image-content">
                        <img src="http://img.f33.dulich.vnecdn.net/2015/12/08/DL3-7099-1448943947-8741-1449565761.jpg">
                        <i>Đến đồi chè Cầu Đất để cảm nhận không khí trong lành của vùng đất cao nguyên. Ảnh: Xuân Lộc.</i>
                    </p>
                    <p>
                        Cách trung tâm thành phố 25 km, đồi chè Cầu Đất ở thôn Xuân Trường mở ra một khung cảnh thiên nhiên tươi đẹp. Cảnh đẹp và khí hậu mát mẻ khiến nơi đây ngày càng thu hút nhiều du khách. Màu xanh ngắt của những cánh đồng chè hòa quyện với sắc vàng rợp kín không gian của dã quỳ vào mỗi độ tháng 11 quả là một bức tranh ấn tượng mà bạn không nên bỏ lỡ.
                    </p>
                    <h4>Chùa Linh Phước</h4>
                    <p>
                        Nằm ở số 120 Tự Phước trên quốc lộ 20, thuộc khu vực Trại Mát, cách trung tâm thành phố Đà Lạt 8 km, chùa Linh Phước là công trình độc nhất vô nhị với kiến trúc khảm sành độc đáo. Tượng rồng dài 49 m được làm bằng 12.000 vỏ chai bia trong sân chùa đã mang đến tên gọi Chùa Ve Chai cho nơi này. Đặc biệt hơn hết, đây là ngôi chùa duy nhất có 11 công trình xác lập kỷ lục Việt Nam nên có rất nhiều điều thú vị đang chờ bạn khám phá.
                    </p>
                    <h4>Ga Đà Lạt</h4>
                    <p>
                        Nhà ga cổ nhất Đông Dương này nằm ở số 1 Quang Trung, được công nhận là di tích lịch sử văn hóa quốc gia. Với kiến trúc đặc sắc cùng ba mái hình chóp độc đáo, đây là địa điểm luôn thu hút giới trẻ đến tham quan chụp ảnh. Dấu ấn thời gian in hằn trên đoàn tàu và cả nhà ga sẽ mang lại cho bạn những ấn tượng khó quên.
                    </p>
                </div>
            </paper-card>
        </div>
    </paper-header-panel>
</paper-drawer-panel>
