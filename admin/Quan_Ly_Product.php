<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fishing Shop - Quản lý Sản phẩm</title>
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

        /* Product Table */
        .product-table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
            border-radius: 8px;
            overflow: hidden;
        }

        .product-table th,
        .product-table td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid #F9F7E8;
        }

        .product-table th {
            background-color: #1A5F7A;
            color: white;
            font-weight: 500;
        }

        .product-table tr:hover {
            background-color: #D4E6F4;
        }

        .product-table .action-btns {
            display: flex;
            gap: 0.5rem;
        }

        .product-table .btn-sm {
            padding: 0.3rem 0.6rem;
            font-size: 0.8rem;
        }

        .badge {
            display: inline-block;
            padding: 0.25rem 0.5rem;
            border-radius: 4px;
            font-size: 0.75rem;
            font-weight: 500;
        }

        .badge-success {
            background-color: #57C3B6;
            color: white;
        }

        .badge-warning {
            background-color: #F7D56A;
            color: #333;
        }

        .badge-danger {
            background-color: #FF895D;
            color: white;
        }

        /* Form thêm/sửa sản phẩm */
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

        #productForm {
            display: flex;
            justify-content: center;
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
            padding: 0.3rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
        }

        .form-control:focus {
            outline: none;
            border-color: #57C3B6;
            box-shadow: 0 0 0 2px rgba(87, 195, 182, 0.2);
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

            .product-table {
                font-size: 0.9rem;
            }

            .product-table th,
            .product-table td {
                padding: 0.6rem;
            }
        }
    </style>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <!-- Header -->
    <?php include_once('../admin/header_footer_sidebar/header.php') ?>
    <div class="admin-container">
        <!-- sidebar -->
        <?php include_once('../admin/header_footer_sidebar/sidebar.php') ?>

        <main class="main-content">
            <div class="page-header">
                <h1 class="page-title"><i class="fas fa-box-open"></i> Quản lý Sản phẩm</h1>
                <button class="btn btn-primary" id="addProductBtn"><i class="fas fa-plus"></i> Thêm sản phẩm</button>
            </div>

            <table class="product-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Hình ảnh</th>
                        <th>Tên sản phẩm</th>
                        <th>Danh mục</th>
                        <th>Giá</th>
                        <th>Tồn kho</th>
                        <th>Trạng thái</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>001</td>
                        <td><img src="https://via.placeholder.com/50" alt="Product"></td>
                        <td>Cần câu Shimano</td>
                        <td>Cần câu</td>
                        <td><span style="color: #FF895D; font-weight: bold;">1,250,000đ</span></td>
                        <td>15</td>
                        <td><span class="badge badge-success">Còn hàng</span></td>
                        <td>
                            <div class="action-btns">
                                <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td><img src="https://via.placeholder.com/50" alt="Product"></td>
                        <td>Máy câu Daiwa</td>
                        <td>Máy câu</td>
                        <td><span style="color: #FF895D; font-weight: bold;">2,500,000đ</span> <span class="badge" style="background-color: #F7D56A;">-10%</span></td>
                        <td>8</td>
                        <td><span class="badge badge-success">Còn hàng</span></td>
                        <td>
                            <div class="action-btns">
                                <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>003</td>
                        <td><img src="https://via.placeholder.com/50" alt="Product"></td>
                        <td>Dây câu PE</td>
                        <td>Phụ kiện</td>
                        <td><span style="color: #FF895D; font-weight: bold;">350,000đ</span></td>
                        <td>0</td>
                        <td><span class="badge badge-danger">Hết hàng</span></td>
                        <td>
                            <div class="action-btns">
                                <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>004</td>
                        <td><img src="https://via.placeholder.com/50" alt="Product"></td>
                        <td>Lưỡi câu đa năng</td>
                        <td>Phụ kiện</td>
                        <td><span style="color: #FF895D; font-weight: bold;">120,000đ</span></td>
                        <td>42</td>
                        <td><span class="badge badge-success">Còn hàng</span></td>
                        <td>
                            <div class="action-btns">
                                <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>005</td>
                        <td><img src="https://via.placeholder.com/50" alt="Product"></td>
                        <td>Phao câu cao cấp</td>
                        <td>Phụ kiện</td>
                        <td><span style="color: #FF895D; font-weight: bold;">85,000đ</span> <span class="badge" style="background-color: #F7D56A;">Bán chạy</span></td>
                        <td>27</td>
                        <td><span class="badge ge-warning">Sắp hết</span></td>
                        <td>
                            <div class="action-btns">
                                <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </main>
    </div>

    <!-- Modal Thêm/Sửa sản phẩm -->
    <div class="modal" id="productModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Thêm sản phẩm mới</h2>
                <button class="close-btn" id="closeModalBtn">&times;</button>
            </div>
            <form>

                <div id="productForm">
                    <div class="form-group">
                        <label for="productName">Tên sản phẩm</label>
                        <input type="text" id="productName" class="form-control" placeholder="Nhập tên sản phẩm">
                    </div>
    
                    <div class="form-group" style="width:36.4%; margin-left: auto;">
                        <label for="productCategory">Danh mục</label>
                        <select id="productCategory" class="form-control">
                            <option value="">Chọn danh mục</option>
                            <option value="1">Cần câu</option>
                            <option value="2">Máy câu</option>
                            <option value="3">Phụ kiện</option>
                            <option value="4">Mồi câu</option>
                        </select>
                    </div>
                </div>
                <div id="productForm">
                    <div class="form-group">
                        <label for="productPrice">Giá bán</label>
                        <input type="number" id="productPrice" class="form-control" placeholder="Nhập giá bán">
                    </div>

                    <div class="form-group" style="margin-left: auto;">
                        <label for="productPrice">Giá sele</label>
                        <input type="number" id="productPrice_sele" class="form-control" placeholder="Nhập giá sele">
                    </div>
                </div>


                <div class="form-group">
                    <label for="productStock">Số lượng tồn kho</label>
                    <input type="number" id="productStock" class="form-control" placeholder="Nhập số lượng">
                </div>

                <div class="form-group">
                    <label for="productImage">Hình ảnh</label>
                    <input type="file" id="productImage" class="form-control">
                </div>

                <div class="form-group">
                    <label for="productDescription">Mô tả sản phẩm</label>
                    <textarea id="productDescription" class="form-control" rows="4" placeholder="Nhập mô tả sản phẩm"></textarea>
                </div>

                <div class="form-actions">
                    <button type="button" class="btn btn-danger" id="cancelBtn">Hủy bỏ</button>
                    <button type="submit" class="btn btn-primary">Lưu lại</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <?php include_once('../admin/header_footer_sidebar/footer.php') ?>

    <!-- -----------------------Phần Xử lý JavaScript----------------------- -->
    <script>
        // Xử lý mở/đóng modal
        const modal = document.getElementById('productModal');
        const addProductBtn = document.getElementById('addProductBtn');
        const closeModalBtn = document.getElementById('closeModalBtn');
        const cancelBtn = document.getElementById('cancelBtn');

        addProductBtn.addEventListener('click', () => {
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