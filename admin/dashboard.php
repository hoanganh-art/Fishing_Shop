<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Fishing Shop Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../eseter/css/admin/dashboard.css">
</head>

<body>
    <!-- Admin Header -->
     <?php include_once("../admin/header_footer_sidebar/header.php"); ?>
    <!-- Admin Container -->
    <div class="admin-container">
        <!-- Sidebar -->
        <?php require_once("header_footer_sidebar/sidebar.php"); ?>
        <!-- Admin Main Content -->
        <main class="admin-main">
            <div class="page-header">
                <h1 class="page-title">Tổng quan</h1>
                <ul class="breadcrumb">
                    <li><a href="#">Dashboard</a></li>
                    <li><span>Tổng quan</span></li>
                </ul>
            </div>

            <!-- Stat Cards -->
            <div class="dashboard-content">
                <div class="stat-card">
                    <div class="stat-icon primary">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div class="stat-info">
                        <h3>1,245</h3>
                        <p>Đơn hàng</p>
                        <div class="stat-trend trend-up">
                            <i class="fas fa-arrow-up"></i> 12.5% so với tháng trước
                        </div>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon success">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <div class="stat-info">
                        <h3>245.8M</h3>
                        <p>Doanh thu</p>
                        <div class="stat-trend trend-up">
                            <i class="fas fa-arrow-up"></i> 8.3% so với tháng trước
                        </div>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon warning">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-info">
                        <h3>1,845</h3>
                        <p>Khách hàng</p>
                        <div class="stat-trend trend-up">
                            <i class="fas fa-arrow-up"></i> 5.2% so với tháng trước
                        </div>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon danger">
                        <i class="fas fa-box"></i>
                    </div>
                    <div class="stat-info">
                        <h3>245</h3>
                        <p>Sản phẩm</p>
                        <div class="stat-trend trend-down">
                            <i class="fas fa-arrow-down"></i> 2.1% so với tháng trước
                        </div>
                    </div>
                </div>
            </div>

            <!-- Charts Section -->
            <div class="charts-section">
                <div class="chart-card">
                    <div class="chart-header">
                        <h3 class="chart-title">Doanh thu theo tháng</h3>
                        <div class="chart-actions">
                            <select>
                                <option>Năm 2023</option>
                                <option>Năm 2022</option>
                                <option>Năm 2021</option>
                            </select>
                        </div>
                    </div>
                    <div class="chart-container">
                        <!-- Biểu đồ sẽ được thêm vào đây -->
                        <img src="https://via.placeholder.com/800x250?text=Revenue+Chart" alt="Doanh thu theo tháng" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                </div>

                <div class="chart-card">
                    <div class="chart-header">
                        <h3 class="chart-title">Tỉ lệ đơn hàng</h3>
                        <div class="chart-actions">
                            <select>
                                <option>Tháng này</option>
                                <option>Tháng trước</option>
                            </select>
                        </div>
                    </div>
                    <div class="chart-container">
                        <!-- Biểu đồ sẽ được thêm vào đây -->
                        <img src="https://via.placeholder.com/400x250?text=Order+Ratio+Chart" alt="Tỉ lệ đơn hàng" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                </div>
            </div>

            <!-- Recent Orders and Top Products -->
            <div class="data-section">
                <div class="data-card">
                    <div class="data-header">
                        <h3 class="data-title">Đơn hàng gần đây</h3>
                        <a href="#" class="btn btn-sm">Xem tất cả</a>
                    </div>

                    <div class="table-responsive">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>Mã đơn</th>
                                    <th>Khách hàng</th>
                                    <th>Ngày</th>
                                    <th>Tổng tiền</th>
                                    <th>Trạng thái</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-primary">#FD4578</td>
                                    <td>
                                        <div style="display: flex; align-items: center;">
                                            <img src="https://randomuser.me/api/portraits/men/41.jpg" class="user-avatar" alt="Customer">
                                            <span>Nguyễn Văn A</span>
                                        </div>
                                    </td>
                                    <td>12/11/2023</td>
                                    <td>₫3,450,000</td>
                                    <td><span class="status-badge status-completed">Hoàn thành</span></td>
                                </tr>
                                <tr>
                                    <td class="text-primary">#FD4577</td>
                                    <td>
                                        <div style="display: flex; align-items: center;">
                                            <img src="https://randomuser.me/api/portraits/women/63.jpg" class="user-avatar" alt="Customer">
                                            <span>Trần Thị B</span>
                                        </div>
                                    </td>
                                    <td>11/11/2023</td>
                                    <td>₫2,150,000</td>
                                    <td><span class="status-badge status-pending">Đang xử lý</span></td>
                                </tr>
                                <tr>
                                    <td class="text-primary">#FD4576</td>
                                    <td>
                                        <div style="display: flex; align-items: center;">
                                            <img src="https://randomuser.me/api/portraits/men/32.jpg" class="user-avatar" alt="Customer">
                                            <span>Lê Văn C</span>
                                        </div>
                                    </td>
                                    <td>10/11/2023</td>
                                    <td>₫5,780,000</td>
                                    <td><span class="status-badge status-completed">Hoàn thành</span></td>
                                </tr>
                                <tr>
                                    <td class="text-primary">#FD4575</td>
                                    <td>
                                        <div style="display: flex; align-items: center;">
                                            <img src="https://randomuser.me/api/portraits/women/44.jpg" class="user-avatar" alt="Customer">
                                            <span>Phạm Thị D</span>
                                        </div>
                                    </td>
                                    <td>09/11/2023</td>
                                    <td>₫1,230,000</td>
                                    <td><span class="status-badge status-cancelled">Đã hủy</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="view-all">
                        <a href="#">Xem tất cả đơn hàng <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>

                <div class="data-card">
                    <div class="data-header">
                        <h3 class="data-title">Sản phẩm bán chạy</h3>
                        <a href="#" class="btn btn-sm">Xem tất cả</a>
                    </div>

                    <div>
                        <div class="product-item">
                            <img src="https://images.unsplash.com/photo-1579586337278-3befd40fd17a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="product-img" alt="Product">
                            <div class="product-info">
                                <div class="product-name">Cần câu Shimano Expride</div>
                                <div class="product-category">Cần câu</div>
                            </div>
                            <div class="product-stats">
                                <div class="product-sales">128</div>
                                <div class="product-rating">
                                    <i class="fas fa-star"></i> 4.8
                                </div>
                            </div>
                        </div>

                        <div class="product-item">
                            <img src="https://images.unsplash.com/photo-1606755456206-b25206b30b58?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="product-img" alt="Product">
                            <div class="product-info">
                                <div class="product-name">Máy câu Daiwa Tatula</div>
                                <div class="product-category">Máy câu</div>
                            </div>
                            <div class="product-stats">
                                <div class="product-sales">98</div>
                                <div class="product-rating">
                                    <i class="fas fa-star"></i> 4.7
                                </div>
                            </div>
                        </div>

                        <div class="product-item">
                            <img src="https://images.unsplash.com/photo-1574629810360-7efbbe195018?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="product-img" alt="Product">
                            <div class="product-info">
                                <div class="product-name">Lưỡi câu Owner ST-36</div>
                                <div class="product-category">Lưỡi câu</div>
                            </div>
                            <div class="product-stats">
                                <div class="product-sales">87</div>
                                <div class="product-rating">
                                    <i class="fas fa-star"></i> 4.9
                                </div>
                            </div>
                        </div>

                        <div class="product-item">
                            <img src="https://images.unsplash.com/photo-1552465011-b4e21bf6e79a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="product-img" alt="Product">
                            <div class="product-info">
                                <div class="product-name">Phao câu cao cấp Daiwa</div>
                                <div class="product-category">Phao câu</div>
                            </div>
                            <div class="product-stats">
                                <div class="product-sales">76</div>
                                <div class="product-rating">
                                    <i class="fas fa-star"></i> 4.6
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="view-all">
                        <a href="#">Xem tất cả sản phẩm <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </main>
    </div>
    </div>
    <?php require_once("../admin/header_footer_sidebar/footer.php"); ?>

</body>

</html>