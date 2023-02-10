<div class="sidebar-wrapper">
  <ul class="nav">
    <li class="active">
      <a href="{{ route('dashboard') }}">
        <i class="nc-icon nc-bank"></i>
        <p>Dashboard</p>
      </a>
    </li>
    <li>
      <a href="{{ route('dashboard-pengaduan') }}">
        <i class="nc-icon nc-single-copy-04"></i>
        <p>Pengaduan</p>
      </a>
    </li>
    <li>
      <a href="{{ route('dashboard-masyarakat') }}">
        <i class="nc-icon nc-circle-10"></i>
        <p>Masyarakat</p>
      </a>
    </li>
    <li>
      <a href="{{ route('dashboard-petugas') }}">
        <i class="nc-icon nc-single-02"></i>
        <p>Petugas</p>
      </a>
    </li>
    <li>
      <a href="{{ route('dashboard-laporan') }}">
        <i class="nc-icon nc-tile-56"></i>
        <p>Laporan</p>
      </a>
    </li>
    <li>
      <form action="{{ route('logout') }}" method="post">
        @csrf
        <button class="btn" type="submit">
          <p>Logout</p>
        </button>
      </form>
    </li>
  </ul>
</div>