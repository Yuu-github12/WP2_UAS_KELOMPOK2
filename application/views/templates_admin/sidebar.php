<style>
  .main-sidebar{
    background-color: #6578EE; /* Ubah warna latar belakang saat di-highlight */
  }
  .sidebar-menu li:not(:last-child) {
    border-bottom: 1px solid black; /* Add a bottom border to each menu item except the last one */
    margin-bottom: 4px; /* Add some margin at the bottom to create a shorter separator */
  }
  .sidebar-menu li:hover {
    background-color: #337ab7; /* Ubah warna latar belakang saat di-highlight */
  }

  .sidebar-menu li:hover a {
    color: #000000; /* Ubah warna teks saat di-highlight */
  }

  .sidebar-brand {
    padding: 15px 20px; /* Atur padding agar elemen memiliki ruang di sekitarnya */
    background-color: #FFFFFF; /* Ubah warna latar belakang */
    color: #fff; /* Ubah warna teks */
    font-size: 20px; /* Atur ukuran font */
    font-weight: bold; /* Atur ketebalan font */
  }

  .sidebar-brand a {
    color: #fff; /* Ubah warna teks link */
    text-decoration: none; /* Hilangkan dekorasi tautan */
  }

  .sidebar-brand i {
    font-size: 24px; /* Atur ukuran ikon */
    margin-right: 5px; /* Atur jarak antara ikon dan teks */
  }

  .nav-link-user {
    display: inline-block;
    padding: 10px 20px;
    background-color: #3498db;
    color: #fff;
    border-radius: 20px;
    font-size: 20px;
    font-weight: bold;
    text-decoration: none;
    transition: background-color 0.3s ease;
  }

  .nav-link-user:hover {
    background-color: #2980b9;
  }

  .nav-link-user i {
    margin-right: 5px;
    font-size: 20px;
  }

  .navbar-nav {
    margin-left: auto;
  }

.main-sidebar .sidebar-menu li a
{
  color: black; /* Set the font and icon color to white */
} 
.sidebar-menu li a i {
  color: black; /* Set the font and icon color to white */
}
  
</style>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <ul class="navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="nav-link nav-link-lg nav-link-user">
              <i class="fas fa-user-circle"></i> <!-- Icon profil dari Font Awesome -->
              <span class="welcome-text">Welcome <?php echo $this->session->userdata('nama') ?></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="<?php echo base_url('auth/logout') ?>" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
        <div class="sidebar-brand d-flex align-items-center justify-content-center">
  <a href="<?php echo base_url('admin/dashboard') ?>">
    <i class="fas fa-car"></i>
    <span class="sidebar-brand-text">Rental Mobil</span>
  </a>
</div>
          <div class="sidebar-brand sidebar-brand-sm">
          </div>
          <ul class="sidebar-menu">
            <li><a class="nav-link" href="<?php echo base_url('admin/dashboard') ?>"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
            <li><a class="nav-link" href="<?php echo base_url('admin/data_mobil') ?>"><i class="fas fa-car"></i> <span>Data Mobil</span></a></li>
            <li><a class="nav-link" href="<?php echo base_url('admin/data_type') ?>"><i class="fas fa-grip-horizontal"></i> <span>Data Type</span></a></li>
            <li><a class="nav-link" href="<?php echo base_url('admin/data_customer') ?>"><i class="fas fa-users"></i> <span>Data Customer</span></a></li>
            <li><a class="nav-link" href="<?php echo base_url('admin/transaksi') ?>"><i class="fas fa-money-bill"></i> <span>Transaksi</span></a></li>
            <li><a class="nav-link" href="<?php echo base_url('admin/laporan') ?>"><i class="fas fa-clipboard-list"></i> <span>Laporan</span></a></li>
            <li><a class="nav-link" href="<?php echo base_url('auth/logout') ?>" onclick="return confirm('Apakah Anda yakin ingin logout?')"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a></li>
            <li><a class="nav-link" href="<?php echo base_url('auth/ganti_password') ?>" onclick="return confirm('Apakah Anda yakin ingin mengganti password?')"><i class="fas fa-lock"></i> <span>Ganti Password</span></a></li>
          </ul>
        </aside>
      </div>
    </div>
  </div>
</body>
