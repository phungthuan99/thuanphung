<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo e(BASE_URL.'is-me'); ?>" class="brand-link">
      <img src="<?php echo e((BASE_URL.'app\public\upload\adm.jpg')); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">PHÙNG KHẮC THUẬN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo e((BASE_URL.'app\public\upload\logo.png')); ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="<?php echo e(getClientUrl('')); ?>" class="d-block">PHP2 - ASSIGNMENT</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="ion ion-bag"></i>
              <p>
                SẢN PHẨM
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(getClientUrl('product')); ?>" class="nav-link">
                  <i class="fas fa-list nav-icon"></i>
                  <p>Danh sách Sản Phẩm</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(getClientUrl('product-galleries')); ?>" class="nav-link">
                  <i class="fas fa-list nav-icon"></i>
                  <p>Product-Galleries</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(getClientUrl('add-product')); ?>" class="nav-link">
                  <i class="fas fa-plus-circle"></i>
                  <p>Thêm Sản Phẩm</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo e(getClientUrl('category')); ?>" class="nav-link">
              <i class="fas fa-grip-horizontal"></i>
              <p>
                DANH MỤC
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(getClientUrl('category')); ?>" class="nav-link">
                  <i class="fas fa-list nav-icon"></i>
                  <p>Danh sách danh mục</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(getClientUrl('add-category')); ?>" class="nav-link">
                  <i class="fas fa-plus-circle"></i>
                  <p>Thêm Danh Mục</p>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="<?php echo e(getClientUrl('user')); ?>" class="nav-link">
              <i class="fas fa-user-circle"></i>
              <p>
                Tài Khoản
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(getClientUrl('user')); ?>" class="nav-link">
                  <i class="fas fa-address-book"></i>
                  <p>Danh sách TK</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(getClientUrl('add-user')); ?>" class="nav-link">
                  <i class="fas fa-plus-circle"></i>
                  <p>Tạo Tài khoản</p>
                </a>
              </li>
              
            </ul>
          </li>
         
          <li class="nav-item has-treeview">
            <a href="<?php echo e(getClientUrl('user')); ?>" class="nav-link">
              <i class="fas fa-file-invoice"></i>
              <p>
                Hóa Đơn
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(getClientUrl('invoice')); ?>" class="nav-link">
                  <i class="fas fa-list nav-icon"></i>
                  <p>Danh sách hóa đơn</p>
                </a>
              </li>
            </ul>

            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(getClientUrl('invoice-detail')); ?>" class="nav-link">
                  <i class="fas fa-file-invoice-dollar"></i>
                  <p>Hóa đơn chi tiết</p>
                </a>
              </li>
            </ul>
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside><?php /**PATH C:\xampp\htdocs\PHP2\Assignment\MVC\app\views/layouts/_share/sidebar.blade.php ENDPATH**/ ?>