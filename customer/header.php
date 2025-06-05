<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Fishing Shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --primary-dark: #1A5F7A;
            --primary-light: #57C3B6;
            --primary-accent: #FF895D;
            --sidebar-bg: #2C3E50;
            --sidebar-active: #34495E;
            --header-bg: #FFFFFF;
            --footer-bg: #F8F9FA;
            --text-dark: #343A40;
            --text-light: #6C757D;
            --border-color: #E9ECEF;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #F5F7FA;
            color: var(--text-dark);
            display: grid;
            grid-template-rows: auto 1fr auto;
            min-height: 100vh;
        }

        /* Admin Header */
        .admin-header {
            background-color: var(--header-bg);
            padding: 0.8rem 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            z-index: 100;
            position: sticky;
            top: 0;
        }

        .header-left {
            display: flex;
            align-items: center;
        }

        .toggle-sidebar {
            background: none;
            border: none;
            font-size: 1.2rem;
            color: var(--text-dark);
            margin-right: 1rem;
            cursor: pointer;
        }

        .admin-logo {
            display: flex;
            align-items: center;
        }

        .admin-logo i {
            color: var(--primary-light);
            margin-right: 0.5rem;
            font-size: 1.5rem;
        }

        .admin-logo span {
            font-weight: 600;
            font-size: 1.2rem;
        }

        .header-right {
            display: flex;
            align-items: center;
        }

        .header-icon {
            position: relative;
            margin-left: 1.5rem;
            color: var(--text-light);
            cursor: pointer;
            transition: color 0.3s;
        }

        .header-icon:hover {
            color: var(--primary-light);
        }

        .notification-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background-color: var(--primary-accent);
            color: white;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 0.6rem;
            font-weight: bold;
        }

        .admin-profile {
            display: flex;
            align-items: center;
            margin-left: 1.5rem;
            cursor: pointer;
        }

        .profile-img {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background-color: var(--primary-light);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            margin-right: 0.5rem;
            overflow: hidden;
        }

        .profile-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .profile-name {
            font-weight: 500;
            margin-right: 0.3rem;
        }

        /* Admin Sidebar */
        .admin-container {
            display: flex;
            flex: 1;
        }

        .admin-sidebar {
            width: 250px;
            background-color: var(--sidebar-bg);
            color: white;
            transition: all 0.3s;
            height: calc(100vh - 60px);
            position: sticky;
            top: 60px;
        }

        .sidebar-collapsed {
            width: 70px;
        }

        .sidebar-menu {
            list-style: none;
            padding: 1rem 0;
        }

        .menu-header {
            padding: 0.8rem 1.5rem;
            color: var(--primary-light);
            font-size: 0.8rem;
            text-transform: uppercase;
            font-weight: 600;
            letter-spacing: 1px;
            display: flex;
            align-items: center;
        }

        .menu-header.collapsed {
            justify-content: center;
        }

        .menu-header span {
            margin-left: 0.5rem;
        }

        .menu-item {
            padding: 0.7rem 1.5rem;
            display: flex;
            align-items: center;
            cursor: pointer;
            transition: all 0.3s;
            position: relative;
        }

        .menu-item:hover {
            background-color: var(--sidebar-active);
        }

        .menu-item.active {
            background-color: var(--sidebar-active);
            border-left: 3px solid var(--primary-light);
        }

        .menu-item.collapsed {
            justify-content: center;
        }

        .menu-item i {
            font-size: 1.1rem;
            color: var(--primary-light);
        }

        .menu-item span {
            margin-left: 0.8rem;
            font-size: 0.95rem;
        }

        .menu-item.collapsed span {
            display: none;
        }

        .submenu {
            list-style: none;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
            background-color: rgba(0, 0, 0, 0.1);
        }

        .submenu.show {
            max-height: 500px;
        }

        .submenu-item {
            padding: 0.6rem 1.5rem 0.6rem 3rem;
            font-size: 0.9rem;
            cursor: pointer;
            transition: all 0.3s;
        }

        .submenu-item:hover {
            background-color: var(--sidebar-active);
        }

        .submenu-item.active {
            color: var(--primary-light);
        }

        .submenu-item.collapsed {
            display: none;
        }

        /* Admin Main Content */
        .admin-main {
            flex: 1;
            padding: 1.5rem;
            background-color: #F5F7FA;
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .page-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--text-dark);
        }

        .breadcrumb {
            display: flex;
            list-style: none;
            font-size: 0.9rem;
            color: var(--text-light);
        }

        .breadcrumb li {
            margin-right: 0.5rem;
        }

        .breadcrumb li:after {
            content: '/';
            margin-left: 0.5rem;
        }

        .breadcrumb li:last-child:after {
            content: '';
        }

        .breadcrumb a {
            color: var(--text-light);
            text-decoration: none;
        }

        .breadcrumb a:hover {
            color: var(--primary-light);
        }

        /* Admin Footer */
        .admin-footer {
            background-color: var(--footer-bg);
            padding: 1rem 1.5rem;
            text-align: center;
            font-size: 0.9rem;
            color: var(--text-light);
            border-top: 1px solid var(--border-color);
        }

        /* Responsive */
        @media (max-width: 992px) {
            .admin-sidebar {
                position: fixed;
                left: 0;
                height: 100vh;
                z-index: 1000;
                transform: translateX(-100%);
            }

            .sidebar-collapsed {
                transform: translateX(0);
                width: 70px;
            }

            .sidebar-show {
                transform: translateX(0);
            }
        }
    </style>
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