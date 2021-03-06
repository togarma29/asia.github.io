    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <img src="<?= base_url(); ?>/img/asiakecil.png" alt="">
        </div>
        <div class="sidebar-brand-text mx-3">ASIA Panel</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">


      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
          <i class="far fa-address-card"></i>
          <span>Profil</span>
        </a>
        <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Test Tahap 1</h6>
            <a class="collapse-item" href="/pelamar/datakeluargaview">Data Keluarga</a>
            <a class="collapse-item" href="/pelamar/pendidikanformalview">Pendidikan Formal</a>
            <a class="collapse-item" href="/pelamar/pendidikannonformalview">Pendidikan Non-Formal</a>
            <a class="collapse-item" href="/pelamar/pengalamankerjaadd">Pengalaman Kerja</a>

          </div>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Test</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Test Tahap 1</h6>
            <a class="collapse-item" href="/ujian/tahap1a">Tahap 1 Bagian A</a>
            <a class="collapse-item" href="/ujian/tesessay/tahap-1-bagian-b">Tahap 1 Bagian B</a>
            <a class="collapse-item" href="/ujian/tesessay/tahap-1-bagian-c">Tahap 1 Bagian C</a>
            <a class="collapse-item" href="/ujian/pilgan/tes-penalaran-logis">Tes Penalaran Logis</a>
            <a class="collapse-item" href="/ujian/pilgan/tes-penalaran-analisis">Tes Penalaran Analitis</a>
            <a class="collapse-item" href="/ujian/tesessay/tahap-1-bagian-f">Tahap 1 Bagian F</a>
            <a class="collapse-item" href="/ujian/tesessay/tahap-1-bagian-g">Tahap 1 Bagian G</a>
            <h6 class="collapse-header">Test Tahap 2</h6>
            <a class="collapse-item" href="/ujian/pilgan/tahap-2-bagian-a">Tahap 2 Bagian A</a>
            <a class="collapse-item" href="/ujian/tesessay/tahap-2-bagian-b">Tahap 2 Bagian B</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Interview -->
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-video"></i>
          <span>Interview</span></a>
      </li>

      <!-- Nav Item - Hasil Akhir -->
      <li class="nav-item">
        <a class="nav-link" href="/admin/hasilakhir">
          <i class=" fas fa-fw fa-table"></i>
          <span>Hasil Akhir</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
      <!-- Nav Item - Log Out-->
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-sign-out-alt"></i>
          <span>Log Out</span></a>
      </li>

      <hr class="sidebar-divider d-none d-md-block">
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->