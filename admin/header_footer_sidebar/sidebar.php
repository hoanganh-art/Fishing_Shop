<link rel="stylesheet" href="../../eseter/css/admin/header_footer_sidebar.css">
<aside class="admin-sidebar">
    <ul class="sidebar-menu">
        <li class="menu-header" id="bashboard">
            <i class="fas fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </li>

        <li class="menu-item active" id="tong_quan">
            <i class="fas fa-home"></i>
            <span>Tổng quan</span>
        </li>

        <li class="menu-header" id="product">
            <i class="fas fa-shopping-bag"></i>
            <span>Sản phẩm</span>
        </li>

        <li class="menu-item" id="quan_ly_product">
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

        <li class="menu-header" id="user">
            <i class="fas fa-users"></i>
            <span>Người dùng</span>
        </li>

        <li class="menu-item" id="customer">
            <i class="fas fa-user-friends"></i>
            <span>Khách hàng</span>
        </li>

        <li class="menu-item" id="admin">
            <i class="fas fa-user-shield"></i>
            <span>Quản trị viên</span>
        </li>

        <li class="menu-header" id="bao_cao">
            <i class="fas fa-chart-line"></i>
            <span>Báo cáo</span>
        </li>

        <li class="menu-item" id="don_hang">
            <i class="fas fa-shopping-cart"></i>
            <span>Đơn hàng</span>
        </li>

        <li class="menu-item" id="thong_ke">
            <i class="fas fa-chart-pie"></i>
            <span>Thống kê</span>
        </li>

        <li class="menu-header" id="cai_dat">
            <i class="fas fa-cog"></i>
            <span>Cài đặt</span>
        </li>

        <li class="menu-item" id="he_thong">
            <i class="fas fa-sliders-h"></i>
            <span>Hệ thống</span>
        </li>
    </ul>
</aside>
<script>
    //Trang tổng quan
    document.getElementById('bashboard').addEventListener('click', function() {
        document.getElementById('tong_quan').style.display = 'list-item';
    });

    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('tong_quan').style.display = 'none';
    });
    // Đóng "Tổng quan" khi click ra ngoài
    document.addEventListener('click', function(event) {
        const dashboard = document.getElementById('bashboard');
        const tongQuan = document.getElementById('tong_quan');
        if (
            tongQuan.style.display === 'list-item' &&
            !dashboard.contains(event.target) &&
            !tongQuan.contains(event.target)
        ) {
            tongQuan.style.display = 'none';
        }
    });

    //Quản lý sản phẩm
    document.getElementById('product').addEventListener('click', function() {
        document.getElementById('quan_ly_product').style.display = 'list-item';
    });
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('quan_ly_product').style.display = 'none';
    });
    //Đóng trang quản lý khi click ra ngoài
    document.addEventListener('click', function(event) {
        const dashboard = document.getElementById('product');
        const tongQuan = document.getElementById('quan_ly_product');
        if (
            tongQuan.style.display === 'list-item' &&
            !dashboard.contains(event.target) &&
            !tongQuan.contains(event.target)
        ) {
            tongQuan.style.display = 'none';
        }
    });
    //Người dùng
    document.getElementById('bao_cao').addEventListener('click', function() {
        document.getElementById('don_hang').style.display = 'list-item';
        document.getElementById('thong_ke').style.display = 'list-item';
    });
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('don_hang').style.display = 'none';
        document.getElementById('thong_ke').style.display = 'none';
    });

    document.addEventListener('click', function(event) {
        const bao_cao = document.getElementById('bao_cao');
        const don_hang = document.getElementById('don_hang');
        const thong_ke = document.getElementById('thong_ke');
        // Kiểm tra nếu customer hoặc admin đang hiển thị thì mới đóng
        if (
            (don_hang.style.display === 'list-item' || thong_ke.style.display === 'list-item') &&
            !bao_cao.contains(event.target) &&
            !don_hang.contains(event.target) &&
            !thong_ke.contains(event.target)
        ) {
            don_hang.style.display = 'none';
            thong_ke.style.display = 'none';
        }
    });

    //Báo Cáo
    document.getElementById('user').addEventListener('click', function() {
        document.getElementById('customer').style.display = 'list-item';
        document.getElementById('admin').style.display = 'list-item';
    });
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('customer').style.display = 'none';
        document.getElementById('admin').style.display = 'none';
    });

    document.addEventListener('click', function(event) {
        const user = document.getElementById('user');
        const customer = document.getElementById('customer');
        const admin = document.getElementById('admin');
        // Kiểm tra nếu customer hoặc admin đang hiển thị thì mới đóng
        if (
            (customer.style.display === 'list-item' || admin.style.display === 'list-item') &&
            !user.contains(event.target) &&
            !customer.contains(event.target) &&
            !admin.contains(event.target)
        ) {
            customer.style.display = 'none';
            admin.style.display = 'none';
        }
    });

    //Cài đặt -> hệ thống
    document.getElementById('cai_dat').addEventListener('click', function() {
        document.getElementById('he_thong').style.display = 'list-item';
    });

    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('he_thong').style.display = 'none';
    });
    // Đóng "Tổng quan" khi click ra ngoài
    document.addEventListener('click', function(event) {
        const cai_dat = document.getElementById('cai_dat');
        const he_thong = document.getElementById('he_thong');
        if (
            he_thong.style.display === 'list-item' &&
            !cai_dat.contains(event.target) &&
            !he_thong.contains(event.target)
        ) {
            he_thong.style.display = 'none';
        }
    });
</script>