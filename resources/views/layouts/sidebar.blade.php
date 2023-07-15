<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">EMOSENSE<sup></sup></div>
    </a>
    
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    
    <!-- Nav Item - Home -->

    <li class="nav-item">
      <a class="nav-link" href="/home">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="{{ route('patients') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Patients</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('caretakers') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span> Caretakers</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/chat">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Messages</span></a>
    </li>
  
    
   
    
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
    
  </ul>
  <style>
    z-index: 999;
  </style>