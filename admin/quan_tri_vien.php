<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fishing Shop - Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Biến màu sắc */
        :root {
            --primary-dark: #1A5F7A;
            --primary-light: #57C3B6;
            --accent-orange: #FF895D;
            --cream-bg: #F9F7E8;
            --green-moss: #3E8E7E;
            --yellow-rod: #F7D56A;
            --brown-wood: #A2836E;
            --blue-water: #D4E6F4;
            --sidebar-width: 250px;
        }

        body {
            display: flex;
            min-height: 100vh;
            background-color: #f5f5f5;
        }

        /* Sidebar */
        .sidebar {
            width: var(--sidebar-width);
            background-color: var(--primary-dark);
            color: white;
            height: 100vh;
            position: fixed;
            transition: all 0.3s;
            z-index: 100;
        }

        .sidebar-header {
            padding: 1.5rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
        }

        .sidebar-header h3 {
            margin-left: 10px;
            font-size: 1.2rem;
        }

        .sidebar-header i {
            font-size: 1.5rem;
            color: var(--primary-light);
        }

        .sidebar-menu {
            padding: 1rem 0;
        }

        .sidebar-menu h4 {
            color: var(--primary-light);
            font-size: 0.8rem;
            text-transform: uppercase;
            padding: 0 1.5rem 0.5rem;
            margin-top: 1rem;
            font-weight: 500;
            letter-spacing: 1px;
        }

        .sidebar-menu ul {
            list-style: none;
        }

        .sidebar-menu li {
            margin-bottom: 0.2rem;
        }

        .sidebar-menu a {
            display: flex;
            align-items: center;
            padding: 0.8rem 1.5rem;
            color: #ddd;
            text-decoration: none;
            transition: all 0.3s;
        }

        .sidebar-menu a:hover,
        .sidebar-menu a.active {
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
        }

        .sidebar-menu a:hover i,
        .sidebar-menu a.active i {
            color: var(--primary-light);
        }

        .sidebar-menu i {
            margin-right: 10px;
            font-size: 1.1rem;
            width: 20px;
            text-align: center;
        }

        /* Main Content */
        .main-content {
            flex: 1;
            margin-left: var(--sidebar-width);
            transition: all 0.3s;
        }

        /* Top Navbar */
        .top-navbar {
            background-color: white;
            padding: 1rem 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            position: sticky;
            top: 0;
            z-index: 50;
        }

        .menu-toggle {
            font-size: 1.5rem;
            color: var(--primary-dark);
            cursor: pointer;
            display: none;
        }

        .search-box {
            display: flex;
            align-items: center;
            background-color: #f5f5f5;
            border-radius: 30px;
            padding: 0.5rem 1rem;
            width: 300px;
        }

        .search-box input {
            border: none;
            background: transparent;
            outline: none;
            width: 100%;
            padding: 0.3rem;
        }

        .search-box i {
            color: #777;
            margin-right: 0.5rem;
        }

        .user-area {
            display: flex;
            align-items: center;
        }

        .user-area .notification {
            position: relative;
            margin-right: 1.5rem;
            color: var(--primary-dark);
            font-size: 1.2rem;
        }

        .user-area .notification .badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background-color: var(--accent-orange);
            color: white;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            font-size: 0.7rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .user-area .user-img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 0.5rem;
        }

        .user-area .user-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .user-area .user-name {
            font-weight: 500;
            color: var(--primary-dark);
        }

        /* Cards */
        .card-section {
            padding: 1.5rem;
        }

        .card-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .card {
            background-color: white;
            border-radius: 10px;
            padding: 1.5rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }

        .card-header h3 {
            font-size: 1.1rem;
            color: var(--primary-dark);
        }

        .card-header i {
            font-size: 1.5rem;
            color: var(--primary-light);
        }

        .card-body h1 {
            font-size: 2.2rem;
            color: var(--primary-dark);
            margin-bottom: 0.5rem;
        }

        .card-body p {
            color: #777;
            font-size: 0.9rem;
        }

        .card-footer {
            margin-top: 1rem;
            padding-top: 1rem;
            border-top: 1px solid #eee;
            font-size: 0.9rem;
            color: var(--primary-light);
        }

        /* Stats Card Colors */
        .card-primary {
            border-left: 4px solid var(--primary-dark);
        }

        .card-success {
            border-left: 4px solid var(--green-moss);
        }

        .card-warning {
            border-left: 4px solid var(--yellow-rod);
        }

        .card-danger {
            border-left: 4px solid var(--accent-orange);
        }

        /* Table */
        .table-card {
            margin-top: 1.5rem;
        }

        .table-responsive {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 0.8rem 1rem;
            text-align: left;
            border-bottom: 1px solid #eee;
        }

        th {
            background-color: #f9f9f9;
            color: var(--primary-dark);
            font-weight: 500;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .status {
            display: inline-block;
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        .status-success {
            background-color: rgba(62, 142, 126, 0.1);
            color: var(--green-moss);
        }

        .status-pending {
            background-color: rgba(247, 213, 106, 0.1);
            color: var(--yellow-rod);
        }

        .status-canceled {
            background-color: rgba(255, 137, 93, 0.1);
            color: var(--accent-orange);
        }

        .btn {
            display: inline-block;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            font-size: 0.9rem;
            font-weight: 500;
            text-decoration: none;
            cursor: pointer;
            transition: all 0.3s;
            border: none;
        }

        .btn-sm {
            padding: 0.3rem 0.7rem;
            font-size: 0.8rem;
        }

        .btn-primary {
            background-color: var(--primary-light);
            color: white;
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
        }

        .btn-outline {
            background-color: transparent;
            border: 1px solid var(--primary-light);
            color: var(--primary-light);
        }

        .btn-outline:hover {
            background-color: var(--primary-light);
            color: white;
        }

        /* Form */
        .form-group {
            margin-bottom: 1rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: var(--primary-dark);
        }

        .form-control {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary-light);
        }

        .form-row {
            display: flex;
            gap: 1rem;
        }

        .form-row .form-group {
            flex: 1;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .sidebar {
                margin-left: -250px;
            }

            .sidebar.active {
                margin-left: 0;
            }

            .main-content {
                margin-left: 0;
            }

            .main-content.active {
                margin-left: 250px;
            }

            .menu-toggle {
                display: block;
            }
        }

        @media (max-width: 768px) {
            .card-row {
                grid-template-columns: 1fr;
            }

            .search-box {
                width: 200px;
            }

            .user-area .user-name {
                display: none;
            }
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-header">
            <i class="fas fa-fish"></i>
            <h3>Fishing Shop</h3>
        </div>
        <div class="sidebar-menu">
            <h4>Main</h4>
            <ul>
                <li><a href="#" class="active"><i class="fas fa-home"></i> Dashboard</a></li>
                <li><a href="#"><i class="fas fa-shopping-bag"></i> Sản phẩm</a></li>
                <li><a href="#"><i class="fas fa-list"></i> Danh mục</a></li>
                <li><a href="#"><i class="fas fa-tags"></i> Khuyến mãi</a></li>
                <li><a href="#"><i class="fas fa-users"></i> Khách hàng</a></li>
                <li><a href="#"><i class="fas fa-shopping-cart"></i> Đơn hàng</a></li>
            </ul>
            <h4>Hệ thống</h4>
            <ul>
                <li><a href="#"><i class="fas fa-cog"></i> Cài đặt</a></li>
                <li><a href="#"><i class="fas fa-user-shield"></i> Quản trị viên</a></li>
                <li><a href="#"><i class="fas fa-chart-line"></i> Báo cáo</a></li>
                <li><a href="#"><i class="fas fa-sign-out-alt"></i> Đăng xuất</a></li>
            </ul>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Top Navbar -->
        <div class="top-navbar">
            <div class="menu-toggle">
                <i class="fas fa-bars"></i>
            </div>
            <div class="search-box">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Tìm kiếm...">
            </div>
            <div class="user-area">
                <div class="notification">
                    <i class="fas fa-bell"></i>
                    <span class="badge">3</span>
                </div>
                <div class="user-img">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User">
                </div>
                <div class="user-name">Admin</div>
            </div>
        </div>

        <!-- Dashboard Content -->
        <div class="card-section">
            <div class="card-row">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3>Tổng doanh thu</h3>
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <div class="card-body">
                        <h1>125.450.000đ</h1>
                        <p>+12% so với tháng trước</p>
                    </div>
                    <div class="card-footer">
                        <i class="fas fa-calendar"></i> Tháng này
                    </div>
                </div>
                <div class="card card-success">
                    <div class="card-header">
                        <h3>Tổng đơn hàng</h3>
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div class="card-body">
                        <h1>245</h1>
                        <p>+8 đơn so với tháng trước</p>
                    </div>
                    <div class="card-footer">
                        <i class="fas fa-calendar"></i> Tháng này
                    </div>
                </div>
                <div class="card card-warning">
                    <div class="card-header">
                        <h3>Khách hàng mới</h3>
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="card-body">
                        <h1>56</h1>
                        <p>+5 khách so với tháng trước</p>
                    </div>
                    <div class="card-footer">
                        <i class="fas fa-calendar"></i> Tháng này
                    </div>
                </div>
                <div class="card card-danger">
                    <div class="card-header">
                        <h3>Sản phẩm tồn kho</h3>
                        <i class="fas fa-box-open"></i>
                    </div>
                    <div class="card-body">
                        <h1>23</h1>
                        <p>5 sản phẩm sắp hết hàng</p>
                    </div>
                    <div class="card-footer">
                        <i class="fas fa-exclamation-circle"></i> Cần nhập hàng
                    </div>
                </div>
            </div>

            <!-- Recent Orders -->
            <div class="card table-card">
                <div class="card-header">
                    <h3>Đơn hàng gần đây</h3>
                    <a href="#" class="btn btn-sm btn-outline">Xem tất cả</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>Mã đơn</th>
                                    <th>Khách hàng</th>
                                    <th>Ngày đặt</th>
                                    <th>Tổng tiền</th>
                                    <th>Trạng thái</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#DH-2023-001</td>
                                    <td>Nguyễn Văn A</td>
                                    <td>15/10/2023</td>
                                    <td>2.450.000đ</td>
                                    <td><span class="status status-success">Đã giao</span></td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-primary">Chi tiết</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#DH-2023-002</td>
                                    <td>Trần Thị B</td>
                                    <td>14/10/2023</td>
                                    <td>3.850.000đ</td>
                                    <td><span class="status status-pending">Đang xử lý</span></td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-primary">Chi tiết</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#DH-2023-003</td>
                                    <td>Lê Văn C</td>
                                    <td>13/10/2023</td>
                                    <td>1.250.000đ</td>
                                    <td><span class="status status-success">Đã giao</span></td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-primary">Chi tiết</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#DH-2023-004</td>
                                    <td>Phạm Thị D</td>
                                    <td>12/10/2023</td>
                                    <td>5.600.000đ</td>
                                    <td><span class="status status-canceled">Đã hủy</span></td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-primary">Chi tiết</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#DH-2023-005</td>
                                    <td>Hoàng Văn E</td>
                                    <td>11/10/2023</td>
                                    <td>1.850.000đ</td>
                                    <td><span class="status status-pending">Đang xử lý</span></td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-primary">Chi tiết</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Add Product Form -->
            <div class="card" style="margin-top: 1.5rem;">
                <div class="card-header">
                    <h3>Thêm sản phẩm mới</h3>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="productName">Tên sản phẩm</label>
                                <input type="text" id="productName" class="form-control" placeholder="Nhập tên sản phẩm">
                            </div>
                            <div class="form-group">
                                <label for="productCategory">Danh mục</label>
                                <select id="productCategory" class="form-control">
                                    <option value="">Chọn danh mục</option>
                                    <option value="1">Cần câu</option>
                                    <option value="2">Máy câu</option>
                                    <option value="3">Dây câu</option>
                                    <option value="4">Lưỡi câu</option>
                                    <option value="5">Phụ kiện</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="productPrice">Giá bán</label>
                                <input type="number" id="productPrice" class="form-control" placeholder="Nhập giá bán">
                            </div>
                            <div class="form-group">
                                <label for="productStock">Số lượng tồn kho</label>
                                <input type="number" id="productStock" class="form-control" placeholder="Nhập số lượng">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="productDescription">Mô tả sản phẩm</label>
                            <textarea id="productDescription" class="form-control" rows="3" placeholder="Nhập mô tả sản phẩm"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="productImage">Hình ảnh sản phẩm</label>
                            <input type="file" id="productImage" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Toggle sidebar on mobile
        document.querySelector('.menu-toggle').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('active');
            document.querySelector('.main-content').classList.toggle('active');
        });
    </script>
</body>

</html>