<?php get_header(); ?>
<!-- Hero Section -->
<div class="hero-section" id="home">
    <h1>Chào Mừng Đến Với Vĩnh Phúc</h1>
    <p>Khám phá vẻ đẹp yên bình và văn hóa phong phú của địa danh quyến rũ này.</p>
    <a href="#about">Tìm Hiểu Thêm</a>
</div>

<!-- About Section -->
<section id="about">
    <h2>Về Vĩnh Phúc</h2>
    <p>Vĩnh Phúc, nằm ở miền Bắc Việt Nam, là sự kết hợp hoàn hảo giữa truyền thống và hiện đại. 
       Với những cảnh quan xanh tươi, di tích lịch sử, và lễ hội sôi động, nơi đây thu hút mọi du khách. 
       Từ Tam Đảo với khí hậu mát lành quanh năm đến Hồ Đại Lải yên bình, mỗi góc của Vĩnh Phúc đều chứa đựng những điều bất ngờ. 
       Không chỉ có vậy, ẩm thực nơi đây cũng là một trải nghiệm tuyệt vời với những món ăn mang đậm hương vị vùng miền.
       Hãy đến và khám phá vẻ đẹp chưa được chạm đến, thưởng thức ẩm thực độc đáo, và hòa mình vào lòng hiếu khách nồng hậu mà Vĩnh Phúc mang lại. 
       Tại đây, bạn sẽ tìm thấy vô vàn trải nghiệm khó quên cùng những kỷ niệm đáng nhớ bên gia đình và bạn bè.</p>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about.jpg" alt="Văn Hóa Vĩnh Phúc">
</section>

<!-- Destinations Section -->
<section id="destinations">
    <h2>Những Điểm Đến Hàng Đầu Tại Vĩnh Phúc</h2>
    <div class="cards">
        <div class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tam_dao.jpg" alt="Tam Đảo">
            <h3>Tam Đảo</h3>
            <p>Một khu nghỉ mát trên núi với khí hậu mát mẻ và cảnh quan ngoạn mục.</p>
            <a href="#">Tìm Hiểu Thêm</a>
        </div>
        <div class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ho_dai_lai.jpg" alt="Hồ Đại Lải">
            <h3>Hồ Đại Lải</h3>
            <p>Một địa điểm yên bình để chèo thuyền, câu cá, và thư giãn giữa thiên nhiên.</p>
            <a href="#">Tìm Hiểu Thêm</a>
        </div>
        <div class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/chua_tay_thien.jpg" alt="Chùa Tây Thiên">
            <h3>Chùa Tây Thiên</h3>
            <p>Một điểm đến linh thiêng kết hợp giữa tâm linh và vẻ đẹp tự nhiên.</p>
            <a href="#">Tìm Hiểu Thêm</a>
        </div>
        <div class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cong_vien_vinh_phuc.jpg" alt="Công Viên Vĩnh Phúc">
            <h3>Công Viên Vĩnh Phúc</h3>
            <p>Một công viên đẹp, lý tưởng cho các buổi dã ngoại gia đình và dạo chơi thư giãn.</p>
            <a href="#">Tìm Hiểu Thêm</a>
        </div>
        <div class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lang_phuc_lap.jpg" alt="Làng Phúc Lập">
            <h3>Làng Phúc Lập</h3>
            <p>Một ngôi làng đậm chất truyền thống, tái hiện cuộc sống của người Việt xưa.</p>
            <a href="#">Tìm Hiểu Thêm</a>
        </div>
        <div class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/den_tich_son.jpg" alt="Đền Tích Sơn">
            <h3>Đền Tích Sơn</h3>
            <p>Một di tích lịch sử chứa đựng giá trị văn hóa và truyền thuyết dân gian.</p>
            <a href="#">Tìm Hiểu Thêm</a>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact">
    <h2>Liên Hệ Với Chúng Tôi</h2>
    <div class="contact-section">
        <div class="image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact.jpg" alt="Liên hệ" style="width: 100%; border-radius: 10px;">
        </div>
        <div class="form">
            <p>Nếu bạn có bất kỳ câu hỏi nào, đừng ngần ngại liên hệ với chúng tôi. Chúng tôi sẵn sàng hỗ trợ bạn lập kế hoạch cho chuyến đi đáng nhớ đến Vĩnh Phúc.</p>
            <form>
                <label for="name">Họ và Tên:</label><br>
                <input type="text" id="name" name="name" placeholder="Nhập họ và tên" style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 5px;" required><br>

                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" placeholder="Nhập địa chỉ email" style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 5px;" required><br>

                <label for="message">Tin Nhắn:</label><br>
                <textarea id="message" name="message" placeholder="Nhập tin nhắn của bạn" rows="5" style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 5px;" required></textarea><br>

                <button type="submit" style="background-color: #ff5722; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">Gửi</button>
            </form>
        </div>
    </div>
</section>
<?php get_footer(); ?>
