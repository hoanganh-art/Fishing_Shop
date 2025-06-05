<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Fishing Shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../../eseter/css/admin/header_footer_sidebar.css">
</head>
<body>
    <!-- Admin Header -->
    <header class="admin-header">
        <div class="header-left">
            <button class="toggle-sidebar">
                <i class="fas fa-bars"></i>
            </button>
            <div class="admin-logo">
                <i class="fas fa-fish"></i>
                <span>Fishing Shop Admin</span>
            </div>
        </div>
        
        <div class="header-right">
            <div class="header-icon">
                <i class="fas fa-bell"></i>
                <span class="notification-badge">5</span>
            </div>
            
            <div class="header-icon">
                <i class="fas fa-envelope"></i>
                <span class="notification-badge">3</span>
            </div>
            
            <div class="admin-profile">
                <div class="profile-img">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Admin">
                </div>
                <span class="profile-name">Admin</span>
                <i class="fas fa-chevron-down"></i>
            </div>
        </div>
    </header>

    <!-- Admin Container -->
    <div class="admin-container">
        <!-- Admin Sidebar -->
        <aside class="admin-sidebar">
            <ul class="sidebar-menu">
                <li class="menu-header">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </li>
                
                <li class="menu-item active">
                    <i class="fas fa-home"></i>
                    <span>Tổng quan</span>
                </li>
                
                <li class="menu-header">
                    <i class="fas fa-shopping-bag"></i>
                    <span>Sản phẩm</span>
                </li>
                
                <li class="menu-item">
                    <i class="fas fa-box-open"></i>
                    <span>Quản lý sản phẩm</span>
                </li>
                
                <li class="menu-item">
                    <i class="fas fa-list"></i>
                    <span>Danh mục</span>
                </li>
                
                <li class="menu-item">
                    <i class="fas fa-tags"></i>
                    <span>Khuyến mãi</span>
                </li>
                
                <li class="menu-header">
                    <i class="fas fa-users"></i>
                    <span>Người dùng</span>
                </li>
                
                <li class="menu-item">
                    <i class="fas fa-user-friends"></i>
                    <span>Khách hàng</span>
                </li>
                
                <li class="menu-item">
                    <i class="fas fa-user-shield"></i>
                    <span>Quản trị viên</span>
                </li>
                
                <li class="menu-header">
                    <i class="fas fa-chart-line"></i>
                    <span>Báo cáo</span>
                </li>
                
                <li class="menu-item">
                    <i class="fas fa-shopping-cart"></i>
                    <span>Đơn hàng</span>
                </li>
                
                <li class="menu-item">
                    <i class="fas fa-chart-pie"></i>
                    <span>Thống kê</span>
                </li>
                
                <li class="menu-header">
                    <i class="fas fa-cog"></i>
                    <span>Cài đặt</span>
                </li>
                
                <li class="menu-item">
                    <i class="fas fa-sliders-h"></i>
                    <span>Hệ thống</span>
                </li>
            </ul>
        </aside>

        <!-- Admin Main Content -->
        <main class="admin-main">
            <div class="page-header">
                <h1 class="page-title">Tổng quan</h1>
                <ul class="breadcrumb">
                    <li><a href="#">Dashboard</a></li>
                    <li><span>Tổng quan</span></li>
                </ul>
            </div>
            
            <!-- Nội dung chính sẽ được thêm vào đây -->
            <div style="height: 2000px;">
                <!-- Nội dung giả để test scroll -->
            </div>
        </main>
    </div>

    <!-- Admin Footer -->
    

    <script>
        // Toggle sidebar
        const toggleBtn = document.querySelector('.toggle-sidebar');
        const sidebar = document.querySelector('.admin-sidebar');
        const menuHeaders = document.querySelectorAll('.menu-header');
        const menuItems = document.querySelectorAll('.menu-item');
        
        toggleBtn.addEventListener('click', () => {
            sidebar.classList.toggle('sidebar-collapsed');
            
            menuHeaders.forEach(header => {
                header.classList.toggle('collapsed');
            });
            
            menuItems.forEach(item => {
                item.classList.toggle('collapsed');
            });
        });

        // Responsive sidebar
        function handleResponsive() {
            if (window.innerWidth <= 992) {
                sidebar.classList.add('sidebar-collapsed');
            } else {
                sidebar.classList.remove('sidebar-collapsed');
            }
        }
        
        window.addEventListener('resize', handleResponsive);
        handleResponsive();

        // Submenu functionality (example)
        const menuWithSubmenu = document.querySelectorAll('.menu-item.has-submenu');
        
        menuWithSubmenu.forEach(item => {
            item.addEventListener('click', () => {
                const submenu = item.querySelector('.submenu');
                submenu.classList.toggle('show');
            });
        });
    </script>
</body>
</html>