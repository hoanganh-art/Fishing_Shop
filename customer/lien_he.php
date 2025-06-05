<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên hệ - Fishing Shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../../eseter/css/customer/lien_he.css">
</head>
<body>
    <!-- Header -->
    <?php require_once '../customer/header_footer/header.php'; ?>

    <!-- Main Content -->
    <main class="container">
        <!-- Breadcrumb -->
        <div class="breadcrumb">
            <ul>
                <li><a href="trang_chu.php">Trang chủ</a></li>
                <li><a href="lien_he.php">Liên hệ</a></li>
            </ul>
        </div>

        <!-- Page Title -->
        <h1 class="page-title">Liên hệ với chúng tôi</h1>

        <!-- Contact Page Layout -->
        <div class="contact-page">
            <!-- Contact Info -->
            <div class="contact-info">
                <h3>Thông tin liên hệ</h3>
                
                <div class="contact-details">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Địa chỉ</h4>
                            <p>123 Đường Cá Chép, Phường Bến Nghé, Quận 1, TP.HCM</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Điện thoại</h4>
                            <p><a href="tel:0909123456">0909 123 456</a></p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Email</h4>
                            <p><a href="mailto:info@fishingshop.vn">info@fishingshop.vn</a></p>
                        </div>
                    </div>
                </div>
                
                <div class="business-hours">
                    <h4>Giờ mở cửa</h4>
                    <table class="hours-table">
                        <tr>
                            <td>Thứ 2 - Thứ 6</td>
                            <td>8:00 - 20:00</td>
                        </tr>
                        <tr>
                            <td>Thứ 7</td>
                            <td>9:00 - 18:00</td>
                        </tr>
                        <tr>
                            <td>Chủ nhật</td>
                            <td>9:00 - 15:00</td>
                        </tr>
                    </table>
                </div>
                
                <div class="social-media">
                    <h4>Mạng xã hội</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div class="contact-form">
                <h3>Gửi tin nhắn cho chúng tôi</h3>
                <form>
                    <div class="form-group">
                        <label for="name">Họ và tên</label>
                        <input type="text" id="name" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Điện thoại</label>
                        <input type="tel" id="phone" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="subject">Chủ đề</label>
                        <select id="subject" class="form-control">
                            <option value="">Chọn chủ đề</option>
                            <option value="product">Hỏi về sản phẩm</option>
                            <option value="order">Hỏi về đơn hàng</option>
                            <option value="warranty">Bảo hành sản phẩm</option>
                            <option value="other">Khác</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Nội dung</label>
                        <textarea id="message" class="form-control" required></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-block">Gửi tin nhắn</button>
                </form>
            </div>
        </div>
        
        <!-- Map -->
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.319359355093!2d106.69917831526037!3d10.78683789231632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3a7d18c50b%3A0xa8c5b5e5a5a5a5a5!2sFishing%20Shop!5e0!3m2!1sen!2s!4v1620000000000!5m2!1sen!2s" allowfullscreen="" loading="lazy"></iframe>
        </div>
        
        <!-- FAQ Section -->
        <div class="faq-section">
            <h3>Câu hỏi thường gặp</h3>
            
            <div class="faq-item">
                <div class="faq-question">Làm cách nào để mua hàng online?</div>
                <div class="faq-answer">
                    <p>Bạn có thể mua hàng trực tiếp trên website bằng cách chọn sản phẩm, thêm vào giỏ hàng và tiến hành thanh toán. Chúng tôi hỗ trợ nhiều phương thức thanh toán như chuyển khoản, thẻ tín dụng hoặc COD (thanh toán khi nhận hàng).</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">Thời gian giao hàng là bao lâu?</div>
                <div class="faq-answer">
                    <p>Thời gian giao hàng phụ thuộc vào địa chỉ nhận hàng của bạn. Trong nội thành TP.HCM, thời gian giao hàng từ 1-2 ngày làm việc. Các tỉnh thành khác từ 2-5 ngày làm việc tùy vào khu vực.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">Chính sách đổi trả sản phẩm như thế nào?</div>
                <div class="faq-answer">
                    <p>Chúng tôi chấp nhận đổi trả sản phẩm trong vòng 7 ngày kể từ ngày nhận hàng nếu sản phẩm có lỗi từ nhà sản xuất hoặc không đúng với mô tả. Sản phẩm phải còn nguyên vẹn, chưa qua sử dụng và còn đầy đủ hóa đơn, phụ kiện đi kèm.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">Tôi có thể đến xem sản phẩm trực tiếp không?</div>
                <div class="faq-answer">
                    <p>Hoàn toàn có thể! Bạn có thể đến trực tiếp cửa hàng tại địa chỉ 123 Đường Cá Chép, Q.1, TP.HCM trong giờ làm việc để xem và trải nghiệm sản phẩm trước khi mua.</p>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <?php require_once '../customer/header_footer/footer.php'; ?>

    <script>
        // FAQ Accordion
        const faqQuestions = document.querySelectorAll('.faq-question');
        
        faqQuestions.forEach(question => {
            question.addEventListener('click', () => {
                const answer = question.nextElementSibling;
                const isActive = question.classList.contains('active');
                
                // Close all answers
                document.querySelectorAll('.faq-answer').forEach(item => {
                    item.classList.remove('show');
                });
                
                // Remove active class from all questions
                document.querySelectorAll('.faq-question').forEach(item => {
                    item.classList.remove('active');
                });
                
                // If this question wasn't active, open it
                if (!isActive) {
                    question.classList.add('active');
                    answer.classList.add('show');
                }
            });
        });
    </script>
</body>
</html>