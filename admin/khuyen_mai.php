<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fishing Shop - Khuyến Mãi</title>
    <style>
        /* Reset CSS và Font chữ */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #F9F7E8;
            color: #333;
        }
        
        /* Header */
        header {
            background-color: #1A5F7A;
            color: white;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            display: flex;
            align-items: center;
        }
        
        .logo i {
            margin-right: 10px;
            color: #F7D56A;
        }
        
        nav ul {
            display: flex;
            list-style: none;
        }
        
        nav ul li {
            margin-left: 1.5rem;
        }
        
        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }
        
        nav ul li a:hover {
            color: #F7D56A;
        }
        
        /* Sidebar */
        .container {
            display: flex;
            min-height: calc(100vh - 70px);
        }
        
        .sidebar {
            width: 250px;
            background-color: #3E8E7E;
            color: white;
            padding: 1.5rem 0;
        }
        
        .sidebar-menu {
            list-style: none;
        }
        
        .sidebar-menu li {
            padding: 0.8rem 1.5rem;
            transition: background-color 0.3s;
        }
        
        .sidebar-menu li:hover {
            background-color: #57C3B6;
            cursor: pointer;
        }
        
        .sidebar-menu li.active {
            background-color: #57C3B6;
            border-left: 4px solid #F7D56A;
        }
        
        .sidebar-menu li i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }
        
        /* Main Content */
        .main-content {
            flex: 1;
            padding: 2rem;
        }
        
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }
        
        .page-title {
            font-size: 1.8rem;
            color: #1A5F7A;
        }
        
        .btn {
            padding: 0.6rem 1.2rem;
            border: none;
            border-radius: 4px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .btn-primary {
            background-color: #57C3B6;
            color: white;
        }
        
        .btn-primary:hover {
            background-color: #3E8E7E;
        }
        
        .btn-danger {
            background-color: #FF895D;
            color: white;
        }
        
        .btn-danger:hover {
            background-color: #e67a50;
        }
        
        /* Promotion Cards */
        .promotion-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1.5rem;
        }
        
        .promotion-card {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s, box-shadow 0.3s;
            border: 1px solid #eee;
        }
        
        .promotion-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .promotion-header {
            background-color: #FF895D;
            color: white;
            padding: 1rem;
            position: relative;
        }
        
        .promotion-badge {
            position: absolute;
            top: -10px;
            right: 20px;
            background-color: #F7D56A;
            color: #333;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-weight: bold;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        .promotion-title {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        
        .promotion-period {
            font-size: 0.8rem;
            opacity: 0.9;
        }
        
        .promotion-body {
            padding: 1.5rem;
        }
        
        .promotion-image {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 4px;
            margin-bottom: 1rem;
            background-color: #f5f5f5;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #999;
        }
        
        .promotion-desc {
            color: #666;
            margin-bottom: 1.5rem;
            font-size: 0.9rem;
            line-height: 1.5;
        }
        
        .promotion-products {
            margin-bottom: 1.5rem;
        }
        
        .product-tag {
            display: inline-block;
            background-color: #D4E6F4;
            color: #1A5F7A;
            padding: 0.3rem 0.6rem;
            border-radius: 4px;
            font-size: 0.8rem;
            margin-right: 0.5rem;
            margin-bottom: 0.5rem;
        }
        
        .promotion-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .promotion-status {
            display: inline-block;
            padding: 0.3rem 0.8rem;
            border-radius: 4px;
            font-size: 0.8rem;
            font-weight: 500;
        }
        
        .status-active {
            background-color: #57C3B6;
            color: white;
        }
        
        .status-upcoming {
            background-color: #F7D56A;
            color: #333;
        }
        
        .status-expired {
            background-color: #eee;
            color: #666;
        }
        
        .action-btns {
            display: flex;
            gap: 0.5rem;
        }
        
        .btn-sm {
            padding: 0.4rem 0.8rem;
            font-size: 0.8rem;
        }
        
        /* Form thêm/sửa khuyến mãi */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }
        
        .modal-content {
            background-color: white;
            padding: 2rem;
            border-radius: 8px;
            width: 600px;
            max-width: 90%;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }
        
        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid #F9F7E8;
        }
        
        .modal-title {
            font-size: 1.5rem;
            color: #1A5F7A;
        }
        
        .close-btn {
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: #999;
        }
        
        .form-group {
            margin-bottom: 1.2rem;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: #1A5F7A;
        }
        
        .form-control {
            width: 100%;
            padding: 0.6rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
        }
        
        .form-control:focus {
            outline: none;
            border-color: #57C3B6;
            box-shadow: 0 0 0 2px rgba(87, 195, 182, 0.2);
        }
        
        .form-row {
            display: flex;
            gap: 1rem;
        }
        
        .form-row .form-group {
            flex: 1;
        }
        
        .form-actions {
            display: flex;
            justify-content: flex-end;
            gap: 1rem;
            margin-top: 1.5rem;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }
            
            .sidebar {
                width: 100%;
            }
            
            .promotion-grid {
                grid-template-columns: 1fr;
            }
            
            .form-row {
                flex-direction: column;
                gap: 0;
            }
        }
    </style>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- header -->
    <?php include_once("../admin/header_footer_sidebar/header.php"); ?>
    <div class="container">
        <?php include_once("../admin/header_footer_sidebar/sidebar.php"); ?>
        
        <main class="main-content">
            <div class="page-header">
                <h1 class="page-title"><i class="fas fa-percentage"></i> Quản lý Khuyến mãi</h1>
                <button class="btn btn-primary" id="addPromotionBtn"><i class="fas fa-plus"></i> Thêm khuyến mãi</button>
            </div>
            
            <div class="promotion-grid">
                <!-- Khuyến mãi 1 -->
                <div class="promotion-card">
                    <div class="promotion-header">
                        <div class="promotion-badge">-30%</div>
                        <h3 class="promotion-title">Giảm giá cuối mùa</h3>
                        <div class="promotion-period">01/06 - 15/06/2023</div>
                    </div>
                    <div class="promotion-body">
                        <div class="promotion-image">
                            <i class="fas fa-fish fa-3x" style="color: #ddd;"></i>
                        </div>
                        <p class="promotion-desc">Giảm giá 30% tất cả các loại cần câu và máy câu nhập khẩu từ Nhật Bản.</p>
                        
                        <div class="promotion-products">
                            <span class="product-tag">Cần câu Shimano</span>
                            <span class="product-tag">Máy câu Daiwa</span>
                            <span class="product-tag">Cần câu Daiwa</span>
                            <span class="product-tag">+5 sản phẩm</span>
                        </div>
                        
                        <div class="promotion-actions">
                            <span class="promotion-status status-active">Đang diễn ra</span>
                            <div class="action-btns">
                                <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Khuyến mãi 2 -->
                <div class="promotion-card">
                    <div class="promotion-header" style="background-color: #57C3B6;">
                        <div class="promotion-badge">Mua 1 tặng 1</div>
                        <h3 class="promotion-title">Combo mồi câu</h3>
                        <div class="promotion-period">10/06 - 20/06/2023</div>
                    </div>
                    <div class="promotion-body">
                        <div class="promotion-image">
                            <i class="fas fa-bait fa-3x" style="color: #ddd;"></i>
                        </div>
                        <p class="promotion-desc">Mua 1 hộp mồi câu cá chép loại 500g được tặng ngay 1 hộp mồi câu cá rô phi 300g.</p>
                        
                        <div class="promotion-products">
                            <span class="product-tag">Mồi câu cá chép</span>
                            <span class="product-tag">Mồi câu cá rô phi</span>
                        </div>
                        
                        <div class="promotion-actions">
                            <span class="promotion-status status-upcoming">Sắp diễn ra</span>
                            <div class="action-btns">
                                <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Khuyến mãi 3 -->
                <div class="promotion-card">
                    <div class="promotion-header" style="background-color: #3E8E7E;">
                        <div class="promotion-badge">Freeship</div>
                        <h3 class="promotion-title">Miễn phí vận chuyển</h3>
                        <div class="promotion-period">15/05 - 31/05/2023</div>
                    </div>
                    <div class="promotion-body">
                        <div class="promotion-image">
                            <i class="fas fa-truck fa-3x" style="color: #ddd;"></i>
                        </div>
                        <p class="promotion-desc">Miễn phí vận chuyển cho tất cả đơn hàng từ 500.000đ trở lên trên toàn quốc.</p>
                        
                        <div class="promotion-products">
                            <span class="product-tag">Tất cả sản phẩm</span>
                        </div>
                        
                        <div class="promotion-actions">
                            <span class="promotion-status status-expired">Đã kết thúc</span>
                            <div class="action-btns">
                                <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Khuyến mãi 4 -->
                <div class="promotion-card">
                    <div class="promotion-header" style="background-color: #FF6B4A;">
                        <div class="promotion-badge">-50%</div>
                        <h3 class="promotion-title">Siêu sale tháng 6</h3>
                        <div class="promotion-period">20/06 - 30/06/2023</div>
                    </div>
                    <div class="promotion-body">
                        <div class="promotion-image">
                            <i class="fas fa-fire fa-3x" style="color: #ddd;"></i>
                        </div>
                        <p class="promotion-desc">Giảm giá 50% cho tất cả các loại phụ kiện câu cá: lưỡi câu, phao câu, dây câu...</p>
                        
                        <div class="promotion-products">
                            <span class="product-tag">Lưỡi câu</span>
                            <span class="product-tag">Phao câu</span>
                            <span class="product-tag">Dây câu</span>
                            <span class="product-tag">+10 sản phẩm</span>
                        </div>
                        
                        <div class="promotion-actions">
                            <span class="promotion-status status-upcoming">Sắp diễn ra</span>
                            <div class="action-btns">
                                <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    
    <!-- Modal Thêm/Sửa khuyến mãi -->
    <div class="modal" id="promotionModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Thêm khuyến mãi mới</h2>
                <button class="close-btn" id="closeModalBtn">&times;</button>
            </div>
            <form>
                <div class="form-group">
                    <label for="promotionName">Tên chương trình</label>
                    <input type="text" id="promotionName" class="form-control" placeholder="Nhập tên chương trình khuyến mãi">
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="promotionType">Loại khuyến mãi</label>
                        <select id="promotionType" class="form-control">
                            <option value="percent">Giảm giá %</option>
                            <option value="fixed">Giảm giá cố định</option>
                            <option value="gift">Quà tặng</option>
                            <option value="freeship">Miễn phí vận chuyển</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="promotionValue">Giá trị</label>
                        <input type="text" id="promotionValue" class="form-control" placeholder="VD: 30% hoặc 100.000đ">
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="startDate">Ngày bắt đầu</label>
                        <input type="date" id="startDate" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="endDate">Ngày kết thúc</label>
                        <input type="date" id="endDate" class="form-control">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="promotionImage">Hình ảnh khuyến mãi</label>
                    <input type="file" id="promotionImage" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="promotionColor">Màu sắc chủ đạo</label>
                    <input type="color" id="promotionColor" class="form-control" value="#FF895D" style="height: 40px;">
                </div>
                
                <div class="form-group">
                    <label for="promotionDesc">Mô tả khuyến mãi</label>
                    <textarea id="promotionDesc" class="form-control" rows="4" placeholder="Nhập mô tả chi tiết chương trình khuyến mãi"></textarea>
                </div>
                
                <div class="form-group">
                    <label>Sản phẩm áp dụng</label>
                    <div style="border: 1px solid #ddd; border-radius: 4px; padding: 0.5rem; max-height: 150px; overflow-y: auto;">
                        <div style="margin-bottom: 0.5rem;">
                            <input type="checkbox" id="product1" name="products" checked>
                            <label for="product1">Cần câu Shimano</label>
                        </div>
                        <div style="margin-bottom: 0.5rem;">
                            <input type="checkbox" id="product2" name="products">
                            <label for="product2">Máy câu Daiwa</label>
                        </div>
                        <div style="margin-bottom: 0.5rem;">
                            <input type="checkbox" id="product3" name="products" checked>
                            <label for="product3">Dây câu PE</label>
                        </div>
                        <div style="margin-bottom: 0.5rem;">
                            <input type="checkbox" id="product4" name="products">
                            <label for="product4">Lưỡi câu đa năng</label>
                        </div>
                        <div style="margin-bottom: 0.5rem;">
                            <input type="checkbox" id="product5" name="products">
                            <label for="product5">Phao câu cao cấp</label>
                        </div>
                    </div>
                </div>
                
                <div class="form-actions">
                    <button type="button" class="btn btn-danger" id="cancelBtn">Hủy bỏ</button>
                    <button type="submit" class="btn btn-primary">Lưu lại</button>
                </div>
            </form>
        </div>
    </div>
    <?php include_once('../admin/header_footer_sidebar/footer.php'); ?>
    <script>
        // Xử lý mở/đóng modal
        const modal = document.getElementById('promotionModal');
        const addPromotionBtn = document.getElementById('addPromotionBtn');
        const closeModalBtn = document.getElementById('closeModalBtn');
        const cancelBtn = document.getElementById('cancelBtn');
        
        addPromotionBtn.addEventListener('click', () => {
            modal.style.display = 'flex';
        });
        
        closeModalBtn.addEventListener('click', () => {
            modal.style.display = 'none';
        });
        
        cancelBtn.addEventListener('click', () => {
            modal.style.display = 'none';
        });
        
        // Đóng modal khi click bên ngoài
        window.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.style.display = 'none';
            }
        });
    </script>
</body>
</html>