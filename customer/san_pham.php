<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm - Fishing Shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../eseter/css/customer/san_pham.css">
</head>

<body>
    <!-- Header -->
    <?php require_once '../customer/header_footer/header.php' ?>

    <!-- Main Content -->
    <main class="container">
        <!-- Breadcrumb -->
        <div class="breadcrumb">
            <ul>
                <li><a href="index.html">Trang chủ</a></li>
                <li><a href="products.html">Sản phẩm</a></li>
                <li><span>Cần câu</span></li>
            </ul>
        </div>

        <!-- Page Title -->
        <h1 class="page-title">Tất cả sản phẩm</h1>

        <!-- Product Page Layout -->
        <div class="product-page">
            <!-- Sidebar -->
            <aside class="sidebar">
                <div class="sidebar-section">
                    <h3 class="sidebar-title">Danh mục</h3>
                    <div class="filter-group">
                        <ul class="filter-options">
                            <li>
                                <label>
                                    <input type="checkbox" checked> Cần câu
                                    <span>(128)</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox"> Máy câu
                                    <span>(76)</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox"> Lưỡi câu
                                    <span>(54)</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox"> Phao câu
                                    <span>(42)</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox"> Dây câu
                                    <span>(35)</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox"> Phụ kiện
                                    <span>(89)</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="sidebar-section">
                    <h3 class="sidebar-title">Lọc theo giá</h3>
                    <div class="filter-group">
                        <div class="price-range">
                            <div class="progress"></div>
                            <div class="range-input">
                                <input type="range" min="0" max="20000000" value="5000000" step="100000">
                                <input type="range" min="0" max="20000000" value="15000000" step="100000">
                            </div>
                        </div>
                        <div class="price-input">
                            <div class="field">
                                <span>Từ</span>
                                <input type="number" value="5000000">
                            </div>
                            <div class="field">
                                <span>Đến</span>
                                <input type="number" value="15000000">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sidebar-section">
                    <h3 class="sidebar-title">Thương hiệu</h3>
                    <div class="filter-group">
                        <h4>Chọn thương hiệu <span>Xóa</span></h4>
                        <ul class="filter-options">
                            <li>
                                <label>
                                    <input type="checkbox" checked> Shimano
                                    <span>(42)</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox"> Daiwa
                                    <span>(38)</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox"> Abu Garcia
                                    <span>(25)</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox"> Penn
                                    <span>(18)</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox"> Owner
                                    <span>(32)</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="sidebar-section">
                    <h3 class="sidebar-title">Đánh giá</h3>
                    <div class="filter-group">
                        <ul class="filter-options">
                            <li>
                                <label>
                                    <input type="checkbox">
                                    <span class="product-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </span>
                                    <span>(42)</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox">
                                    <span class="product-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                    <span>(38)</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox">
                                    <span class="product-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                    <span>(25)</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>

                <button class="btn btn-accent" style="width: 100%;">Áp dụng bộ lọc</button>
            </aside>

            <!-- Main Content -->
            <div class="main-content">
                <!-- Product Toolbar -->
                <div class="product-toolbar">
                    <div class="product-count">
                        Hiển thị <strong>12</strong> trên <strong>128</strong> sản phẩm
                    </div>
                    <div class="sort-options">
                        <select>
                            <option>Sắp xếp theo: Mặc định</option>
                            <option>Giá: Thấp đến cao</option>
                            <option>Giá: Cao đến thấp</option>
                            <option>Đánh giá cao nhất</option>
                            <option>Bán chạy nhất</option>
                            <option>Sản phẩm mới</option>
                        </select>
                    </div>
                    <div class="view-options">
                        <button class="active"><i class="fas fa-th"></i></button>
                        <button><i class="fas fa-list"></i></button>
                    </div>
                </div>

                <!-- Product Grid -->
                <div class="product-grid">
                    <!-- Product 1 -->
                    <div class="product-card">
                        <span class="product-badge">Giảm 20%</span>
                        <div class="product-img">
                            <img src="https://images.unsplash.com/photo-1579586337278-3befd40fd17a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Cần câu Shimano">
                        </div>
                        <div class="product-content">
                            <h3>Cần câu Shimano Expride</h3>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>(24)</span>
                            </div>
                            <div class="product-price">
                                <span class="current-price">4.990.000đ</span>
                                <span class="original-price">6.200.000đ</span>
                            </div>
                            <div class="product-actions">
                                <a href="#" class="btn">Chi tiết</a>
                                <a href="#" class="btn btn-accent">Thêm giỏ</a>
                            </div>
                        </div>
                    </div>

                    <!-- Product 2 -->
                    <div class="product-card">
                        <div class="product-img">
                            <img src="https://images.unsplash.com/photo-1606755456206-b25206b30b58?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Máy câu Daiwa">
                        </div>
                        <div class="product-content">
                            <h3>Máy câu Daiwa Tatula</h3>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>(15)</span>
                            </div>
                            <div class="product-price">
                                <span class="current-price">6.500.000đ</span>
                            </div>
                            <div class="product-actions">
                                <a href="#" class="btn">Chi tiết</a>
                                <a href="#" class="btn btn-accent">Thêm giỏ</a>
                            </div>
                        </div>
                    </div>

                    <!-- Product 3 -->
                    <div class="product-card">
                        <span class="product-badge">Hot</span>
                        <div class="product-img">
                            <img src="https://images.unsplash.com/photo-1574629810360-7efbbe195018?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Lưỡi câu Owner">
                        </div>
                        <div class="product-content">
                            <h3>Lưỡi câu Owner ST-36</h3>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>(42)</span>
                            </div>
                            <div class="product-price">
                                <span class="current-price">120.000đ</span>
                                <span class="original-price">150.000đ</span>
                            </div>
                            <div class="product-actions">
                                <a href="#" class="btn">Chi tiết</a>
                                <a href="#" class="btn btn-accent">Thêm giỏ</a>
                            </div>
                        </div>
                    </div>

                    <!-- Product 4 -->
                    <div class="product-card">
                        <div class="product-img">
                            <img src="https://images.unsplash.com/photo-1552465011-b4e21bf6e79a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Phao câu">
                        </div>
                        <div class="product-content">
                            <h3>Phao câu cao cấp Daiwa</h3>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>(18)</span>
                            </div>
                            <div class="product-price">
                                <span class="current-price">350.000đ</span>
                            </div>
                            <div class="product-actions">
                                <a href="#" class="btn">Chi tiết</a>
                                <a href="#" class="btn btn-accent">Thêm giỏ</a>
                            </div>
                        </div>
                    </div>

                    <!-- Product 5 -->
                    <div class="product-card">
                        <span class="product-badge">Mới</span>
                        <div class="product-img">
                            <img src="https://images.unsplash.com/photo-1593810450967-f9c42742e326?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Dây câu">
                        </div>
                        <div class="product-content">
                            <h3>Dây câu PE Shimano Kairiki</h3>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>(8)</span>
                            </div>
                            <div class="product-price">
                                <span class="current-price">450.000đ</span>
                            </div>
                            <div class="product-actions">
                                <a href="#" class="btn">Chi tiết</a>
                                <a href="#" class="btn btn-accent">Thêm giỏ</a>
                            </div>
                        </div>
                    </div>

                    <!-- Product 6 -->
                    <div class="product-card">
                        <div class="product-img">
                            <img src="https://images.unsplash.com/photo-1593810451137-5dc55105dace?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Mồi câu">
                        </div>
                        <div class="product-content">
                            <h3>Mồi câu cá Jackall Mask</h3>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                                <span>(12)</span>
                            </div>
                            <div class="product-price">
                                <span class="current-price">280.000đ</span>
                            </div>
                            <div class="product-actions">
                                <a href="#" class="btn">Chi tiết</a>
                                <a href="#" class="btn btn-accent">Thêm giỏ</a>
                            </div>
                        </div>
                    </div>

                    <!-- Product 7 -->
                    <div class="product-card">
                        <span class="product-badge">Giảm 15%</span>
                        <div class="product-img">
                            <img src="https://images.unsplash.com/photo-1593810451153-598d8dd39d3b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Phụ kiện">
                        </div>
                        <div class="product-content">
                            <h3>Bộ dụng cụ câu cá đa năng</h3>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>(21)</span>
                            </div>
                            <div class="product-price">
                                <span class="current-price">1.250.000đ</span>
                                <span class="original-price">1.470.000đ</span>
                            </div>
                            <div class="product-actions">
                                <a href="#" class="btn">Chi tiết</a>
                                <a href="#" class="btn btn-accent">Thêm giỏ</a>
                            </div>
                        </div>
                    </div>

                    <!-- Product 8 -->
                    <div class="product-card">
                        <div class="product-img">
                            <img src="https://images.unsplash.com/photo-1593810451129-59d01d67230e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Túi đựng">
                        </div>
                        <div class="product-content">
                            <h3>Túi đựng dụng cụ câu cá</h3>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                                <span>(7)</span>
                            </div>
                            <div class="product-price">
                                <span class="current-price">850.000đ</span>
                            </div>
                            <div class="product-actions">
                                <a href="#" class="btn">Chi tiết</a>
                                <a href="#" class="btn btn-accent">Thêm giỏ</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="pagination">
                    <ul>
                        <li><a href="#"><i class="fas fa-chevron-left"></i></a></li>
                        <li><a href="#" class="active">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
     <?php require_once '../customer/header_footer/footer.php' ?>
</body>

</html>