<link rel="stylesheet" href="../../eseter/css/customer/trang_chủ.css">
<link rel="stylesheet" href="../../eseter/css/customer/header_menu.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<!-- Header -->
<header>
    <div class="container header-container">
        <div class="logo">
            <i class="fas fa-fish"></i>
            <span>Fishing Shop</span>
        </div>
        <nav>
            <ul class="header-menu">
                <?php
                $header_menu = basename($_SERVER['PHP_SELF']);
                ?>
                <li><a href="../../customer/trang_chu.php" class="<?php echo $header_menu == 'trang_chu.php' ? 'active' : ''; ?>">Trang chủ</a></li>
                <li><a href="../../customer/san_pham.php" class="<?php echo $header_menu == 'san_pham.php' ? 'active' : ''; ?>">Sản phẩm</a></li>
                <li><a href="../../customer/danh_muc.php" class="<?php echo $header_menu == 'danh_muc.php' ? 'active' : ''; ?>">Danh mục</a></li>
                <li><a href="../../customer/khuyen_mai.php" class="<?php echo $header_menu == 'khuyen_mai.php' ? 'active' : ''; ?>">Khuyến mãi</a></li>
                <li><a href="../../customer/lien_he.php" class="<?php echo $header_menu == 'lien_he.php' ? 'active' : ''; ?>">Liên hệ</a></li>
                <li>
                    <a href="#" class="cart-icon">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="cart-count">3</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>