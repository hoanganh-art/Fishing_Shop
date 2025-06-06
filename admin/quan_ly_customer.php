<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fishing Shop - Quản lý Khách Hàng</title>
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

        /* Sidebar */
        .container {
            display: flex;
            min-height: calc(100vh - 70px);
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

        /* Customer Table */
        .customer-table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
            border-radius: 8px;
            overflow: hidden;
        }

        .customer-table th,
        .customer-table td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid #F9F7E8;
        }

        .customer-table th {
            background-color: #1A5F7A;
            color: white;
            font-weight: 500;
        }

        .customer-table tr:hover {
            background-color: #D4E6F4;
        }

        .customer-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 10px;
        }

        .customer-name {
            display: flex;
            align-items: center;
        }

        .customer-status {
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

        .status-inactive {
            background-color: #A2836E;
            color: white;
        }

        .status-banned {
            background-color: #FF895D;
            color: white;
        }

        .action-btns {
            display: flex;
            gap: 0.5rem;
        }

        .btn-sm {
            padding: 0.3rem 0.6rem;
            font-size: 0.8rem;
        }

        /* Customer Filter */
        .customer-filter {
            background-color: white;
            padding: 1.5rem;
            border-radius: 8px;
            margin-bottom: 1.5rem;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
        }

        .filter-row {
            display: flex;
            gap: 1.5rem;
            margin-bottom: 1rem;
        }

        .filter-group {
            flex: 1;
        }

        .filter-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: #1A5F7A;
        }

        .filter-control {
            width: 100%;
            padding: 0.6rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
        }

        .filter-actions {
            display: flex;
            justify-content: flex-end;
            gap: 1rem;
        }

        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 2rem;
        }

        .page-item {
            margin: 0 0.3rem;
        }

        .page-link {
            display: block;
            padding: 0.5rem 0.8rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            color: #1A5F7A;
            text-decoration: none;
            transition: all 0.3s;
        }

        .page-link:hover {
            background-color: #D4E6F4;
        }

        .page-item.active .page-link {
            background-color: #1A5F7A;
            color: white;
            border-color: #1A5F7A;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
            }

            .customer-table {
                font-size: 0.9rem;
            }

            .customer-table th,
            .customer-table td {
                padding: 0.6rem;
            }

            .filter-row {
                flex-direction: column;
                gap: 1rem;
            }
        }
    </style>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <!-- header -->
    <?php include 'header_footer_sidebar/header.php'; ?>
    <div class="container">
        <?php include 'header_footer_sidebar/sidebar.php'; ?>

        <main class="main-content">
            <div class="page-header">
                <h1 class="page-title"><i class="fas fa-users"></i> Quản lý Khách Hàng</h1>
                <button class="btn btn-primary" id="addCustomerBtn"><i class="fas fa-plus"></i> Thêm khách hàng</button>
            </div>

            <div class="customer-filter">
                <div class="filter-row">
                    <div class="filter-group">
                        <label for="searchName">Tìm kiếm</label>
                        <input type="text" id="searchName" class="filter-control" placeholder="Tên, email hoặc số điện thoại">
                    </div>
                    <div class="filter-group">
                        <label for="filterStatus">Trạng thái</label>
                        <select id="filterStatus" class="filter-control">
                            <option value="">Tất cả</option>
                            <option value="active">Hoạt động</option>
                            <option value="inactive">Không hoạt động</option>
                            <option value="banned">Đã khóa</option>
                        </select>
                    </div>
                </div>
                <div class="filter-row">
                    <div class="filter-group">
                        <label for="filterDate">Ngày đăng ký</label>
                        <input type="date" id="filterDate" class="filter-control">
                    </div>
                    <div class="filter-group">
                        <label for="filterGroup">Nhóm khách hàng</label>
                        <select id="filterGroup" class="filter-control">
                            <option value="">Tất cả</option>
                            <option value="vip">VIP</option>
                            <option value="regular">Thường</option>
                            <option value="new">Mới</option>
                        </select>
                    </div>
                </div>
                <div class="filter-actions">
                    <button class="btn btn-danger"><i class="fas fa-filter"></i> Xóa bộ lọc</button>
                    <button class="btn btn-primary"><i class="fas fa-search"></i> Tìm kiếm</button>
                </div>
            </div>

            <table class="customer-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Khách hàng</th>
                        <th>Điện thoại</th>
                        <th>Email</th>
                        <th>Đơn hàng</th>
                        <th>Tổng chi tiêu</th>
                        <th>Trạng thái</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>KH001</td>
                        <td>
                            <div class="customer-name">
                                <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="Avatar" class="customer-avatar">
                                <span>Nguyễn Văn An</span>
                            </div>
                        </td>
                        <td>0987654321</td>
                        <td>nguyenvanan@example.com</td>
                        <td>12</td>
                        <td>15,200,000đ</td>
                        <td><span class="customer-status status-active">Hoạt động</span></td>
                        <td>
                            <div class="action-btns">
                                <button class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button>
                                <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="fas fa-ban"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>KH002</td>
                        <td>
                            <div class="customer-name">
                                <img src="https://randomuser.me/api/portraits/women/2.jpg" alt="Avatar" class="customer-avatar">
                                <span>Trần Thị Bình</span>
                            </div>
                        </td>
                        <td>0912345678</td>
                        <td>tranthibinh@example.com</td>
                        <td>8</td>
                        <td>8,750,000đ</td>
                        <td><span class="customer-status status-active">Hoạt động</span></td>
                        <td>
                            <div class="action-btns">
                                <button class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button>
                                <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="fas fa-ban"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>KH003</td>
                        <td>
                            <div class="customer-name">
                                <img src="https://randomuser.me/api/portraits/men/3.jpg" alt="Avatar" class="customer-avatar">
                                <span>Lê Văn Cường</span>
                            </div>
                        </td>
                        <td>0978123456</td>
                        <td>levancuong@example.com</td>
                        <td>5</td>
                        <td>6,300,000đ</td>
                        <td><span class="customer-status status-inactive">Không hoạt động</span></td>
                        <td>
                            <div class="action-btns">
                                <button class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button>
                                <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="fas fa-ban"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>KH004</td>
                        <td>
                            <div class="customer-name">
                                <img src="https://randomuser.me/api/portraits/women/4.jpg" alt="Avatar" class="customer-avatar">
                                <span>Phạm Thị Dung</span>
                            </div>
                        </td>
                        <td>0967891234</td>
                        <td>phamthidung@example.com</td>
                        <td>3</td>
                        <td>4,100,000đ</td>
                        <td><span class="customer-status status-banned">Đã khóa</span></td>
                        <td>
                            <div class="action-btns">
                                <button class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button>
                                <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="fas fa-unlock"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>KH005</td>
                        <td>
                            <div class="customer-name">
                                <img src="https://randomuser.me/api/portraits/men/5.jpg" alt="Avatar" class="customer-avatar">
                                <span>Hoàng Văn Em</span>
                            </div>
                        </td>
                        <td>0934567891</td>
                        <td>hoangvanem@example.com</td>
                        <td>15</td>
                        <td>22,500,000đ</td>
                        <td><span class="customer-status status-active">Hoạt động</span></td>
                        <td>
                            <div class="action-btns">
                                <button class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button>
                                <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="fas fa-ban"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="pagination">
                <ul style="list-style: none; display: flex; padding: 0;">
                    <li class="page-item"><a href="#" class="page-link"><i class="fas fa-angle-left"></i></a></li>
                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link"><i class="fas fa-angle-right"></i></a></li>
                </ul>
            </div>
        </main>
    </div>
    <!-- //footer -->
    <?php include 'header_footer_sidebar/footer.php'; ?>
    <script>

    </script>
</body>

</html>