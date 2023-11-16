<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Pengaduan Masyarakat</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
       
        <li class="menu-label"> Menu Admin </li>
        <li>
            <a href="{{ url('dashboard') }}">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="{{ url('pengaduan_admin') }}">
                <div class="parent-icon"><i class="bi bi-list-task"></i>
                </div>
                <div class="menu-title">Data Pengaduan</div>
            </a>
        </li>
        <li>
            <a href="{{ url('data_user') }}">
                <div class="parent-icon"><i class="bi bi-person-lines-fill"></i>
                </div>
                <div class="menu-title">Data User</div>
            </a>
        </li>
        
        
        <li class="menu-label">Menu Masyarakat</li>
        <li>
            <a href="index.html">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="{{ url('/profile_masyarakat') }}">
                <div class="parent-icon"><i class="bi bi-person-fill"></i>
                </div>
                <div class="menu-title">Profile</div>
            </a>
        </li>
                  <li>
                    <a class="has-arrow" href="javascript:;">
                      <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                      </div>
                      <div class="menu-title">Pengaduan</div>
                    </a>
                    <ul>
                      <li> <a href="{{url('/ajukan_pengaduan')}}"><i class="bx bx-right-arrow-alt"></i>Ajukan Pengaduan</a>
                      </li>
                      <li> <a href="{{url('/histori_pengaduan')}}"><i class="bx bx-right-arrow-alt"></i>Histori Pengaduan</a>
                      </li>
                    </ul>
                  </li>
              
        <li class="mt-5">
            <a href="index.html">
                <div class="parent-icon"><i class="bi bi-box-arrow-left"></i>
                </div>
                <div class="menu-title">Logout</div>
            </a>
        </li>
    </ul>
    
</div>
<!--end sidebar wrapper -->