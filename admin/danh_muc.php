<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fishing Shop - Quản lý Danh mục</title>
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

        /* Category Cards */
        .category-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 1.5rem;
        }

        .category-card {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .category-image {
            height: 150px;
            background-color: #D4E6F4;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #1A5F7A;
            font-size: 3rem;
        }

        .category-info {
            padding: 1.5rem;
        }

        .category-name {
            font-size: 1.2rem;
            font-weight: 600;
            color: #1A5F7A;
            margin-bottom: 0.5rem;
        }

        .category-meta {
            display: flex;
            justify-content: space-between;
            color: #A2836E;
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }

        .category-desc {
            color: #666;
            margin-bottom: 1.5rem;
            font-size: 0.9rem;
            line-height: 1.5;
        }

        .category-actions {
            display: flex;
            justify-content: space-between;
        }

        .btn-sm {
            padding: 0.4rem 0.8rem;
            font-size: 0.8rem;
        }

        /* Form thêm/sửa danh mục */
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
            width: 500px;
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

            .category-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <!-- header -->
     <?php include_once('../admin/header_footer_sidebar/header.php'); ?>
    <div class="container">
        <!-- sidebar -->
         <?php include_once ('../admin/header_footer_sidebar/sidebar.php');?>
        <main class="main-content">
            <div class="page-header">
                <h1 class="page-title"><i class="fas fa-list"></i> Quản lý Danh mục</h1>
                <button class="btn btn-primary" id="addCategoryBtn"><i class="fas fa-plus"></i> Thêm danh mục</button>
            </div>

            <div class="category-grid">
                <!-- Danh mục 1 -->
                <div class="category-card">
                    <div class="category-image" style="background-color: #D4E6F4;">
                        <i class="fas fa-fishing-rod"></i>
                    </div>
                    <div class="category-info">
                        <h3 class="category-name">Cần câu</h3>
                        <div class="category-meta">
                            <span><i class="fas fa-box"></i> 25 sản phẩm</span>
                            <span><i class="fas fa-eye"></i> 1.2K lượt xem</span>
                        </div>
                        <p class="category-desc">Các loại cần câu chất lượng cao từ thương hiệu Shimano, Daiwa...</p>
                        <div class="category-actions">
                            <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Sửa</button>
                            <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Xóa</button>
                        </div>
                    </div>
                </div>

                <!-- Danh mục 2 -->
                <div class="category-card">
                    <div class="category-image" style="background-color: #FFE8D4;">
                        <i class="fas fa-cog"></i>
                    </div>
                    <div class="category-info">
                        <h3 class="category-name">Máy câu</h3>
                        <div class="category-meta">
                            <span><i class="fas fa-box"></i> 18 sản phẩm</span>
                            <span><i class="fas fa-eye"></i> 890 lượt xem</span>
                        </div>
                        <p class="category-desc">Máy câu đa năng, máy câu đứng, máy câu ngang từ các hãng nổi tiếng</p>
                        <div class="category-actions">
                            <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Sửa</button>
                            <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Xóa</button>
                        </div>
                    </div>
                </div>

                <!-- Danh mục 3 -->
                <div class="category-card">
                    <div class="category-image" style="background-color: #E8F4D4;">
                        <i class="fas fa-tools"></i>
                    </div>
                    <div class="category-info">
                        <h3 class="category-name">Phụ kiện</h3>
                        <div class="category-meta">
                            <span><i class="fas fa-box"></i> 42 sản phẩm</span>
                            <span><i class="fas fa-eye"></i> 2.5K lượt xem</span>
                        </div>
                        <p class="category-desc">Lưỡi câu, phao câu, dây câu và các phụ kiện câu cá khác</p>
                        <div class="category-actions">
                            <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Sửa</button>
                            <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Xóa</button>
                        </div>
                    </div>
                </div>

                <!-- Danh mục 4 -->
                <div class="category-card">
                    <div class="category-image" style="background-color: #F4D4E8;">
                        <i class="fas fa-bait"></i>
                    </div>
                    <div class="category-info">
                        <h3 class="category-name">Mồi câu</h3>
                        <div class="category-meta">
                            <span><i class="fas fa-box"></i> 36 sản phẩm</span>
                            <span><i class="fas fa-eye"></i> 1.8K lượt xem</span>
                        </div>
                        <p class="category-desc">Các loại mồi câu tự nhiên và nhân tạo cho nhiều loại cá khác nhau</p>
                        <div class="category-actions">
                            <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Sửa</button>
                            <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Xóa</button>
                        </div>
                    </div>
                </div>

                <!-- Danh mục 5 -->
                <div class="category-card">
                    <div class="category-image" style="background-color: #D4E8F4;">
                        <i class="fas fa-tshirt"></i>
                    </div>
                    <div class="category-info">
                        <h3 class="category-name">Quần áo</h3>
                        <div class="category-meta">
                            <span><i class="fas fa-box"></i> 15 sản phẩm</span>
                            <span><i class="fas fa-eye"></i> 750 lượt xem</span>
                        </div>
                        <p class="category-desc">Quần áo đi câu chuyên dụng, áo phao, giày đi câu</p>
                        <div class="category-actions">
                            <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Sửa</button>
                            <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Xóa</button>
                        </div>
                    </div>
                </div>

                <!-- Danh mục 6 -->
                <div class="category-card">
                    <div class="category-image" style="background-color: #F4E8D4;">
                        <i class="fas fa-chair"></i>
                    </div>
                    <div class="category-info">
                        <h3 class="category-name">Ghế & Dụng cụ</h3>
                        <div class="category-meta">
                            <span><i class="fas fa-box"></i> 12 sản phẩm</span>
                            <span><i class="fas fa-eye"></i> 620 lượt xem</span>
                        </div>
                        <p class="category-desc">Ghế ngồi câu, lều câu, hộp đựng đồ nghề và các dụng cụ hỗ trợ</p>
                        <div class="category-actions">
                            <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Sửa</button>
                            <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Xóa</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Modal Thêm/Sửa danh mục -->
    <div class="modal" id="categoryModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Thêm danh mục mới</h2>
                <button class="close-btn" id="closeModalBtn">&times;</button>
            </div>
            <form>
                <div class="form-group">
                    <label for="categoryName">Tên danh mục</label>
                    <input type="text" id="categoryName" class="form-control" placeholder="Nhập tên danh mục">
                </div>

                <div class="form-group">
                    <label for="categoryImage">Hình ảnh đại diện</label>
                    <input type="file" id="categoryImage" class="form-control">
                    <small class="text-muted">Chọn icon hoặc hình ảnh đại diện cho danh mục</small>
                </div>

                <div class="form-group">
                    <label for="categoryColor">Màu sắc chủ đạo</label>
                    <input type="color" id="categoryColor" class="form-control" value="#D4E6F4" style="height: 40px;">
                </div>

                <div class="form-group">
                    <label for="categoryDesc">Mô tả danh mục</label>
                    <textarea id="categoryDesc" class="form-control" rows="4" placeholder="Nhập mô tả ngắn về danh mục"></textarea>
                </div>

                <div class="form-actions">
                    <button type="button" class="btn btn-danger" id="cancelBtn">Hủy bỏ</button>
                    <button type="submit" class="btn btn-primary">Lưu lại</button>
                </div>
            </form>
        </div>
    </div>
    <!-- footer -->
     <?php include_once('../admin/header_footer_sidebar/footer.php'); ?>
    <script>
        // Xử lý mở/đóng modal
        const modal = document.getElementById('categoryModal');
        const addCategoryBtn = document.getElementById('addCategoryBtn');
        const closeModalBtn = document.getElementById('closeModalBtn');
        const cancelBtn = document.getElementById('cancelBtn');

        addCategoryBtn.addEventListener('click', () => {
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