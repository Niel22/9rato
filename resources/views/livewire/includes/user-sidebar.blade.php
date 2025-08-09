<div class="sidebar-wrapper">
    <div id="sidebarEffect"></div>
    <div>
        <div class="logo-wrapper logo-wrapper-center">
            <a href="{{ route('user.dashboard') }}" style="font-size: 30px; font-weight: bold; color: white;" data-bs-original-title="" title="9Rato">
                <img class="img-fluid for-white" src="{{ asset('assets/images/Frame.svg') }}" style="width: 40px"  alt="logo">Rato
            </a>
            <div class="back-btn">
                <i class="fa fa-angle-left"></i>
            </div>
            <div class="toggle-sidebar">
                <i class="ri-apps-line status_toggle middle sidebar-toggle"></i>
            </div>
        </div>
        <div class="logo-icon-wrapper">
            <a href="index.html">
                <img class="img-fluid main-logo main-white" style="font-size: 30px; font-weight: bold; color: white;" src="{{ asset('assets/images/Frame.svg') }}" style="width: 40px" alt="logo">Rato
                <img class="img-fluid main-logo main-dark" style="font-size: 30px; font-weight: bold; color: white;" src="{{ asset('assets/images/Frame.svg') }}" style="width: 40px" alt="logo">Rato
            </a>
        </div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow">
                <i data-feather="arrow-left"></i>
            </div>

            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"></li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('user.dashboard') }}">
                            <i class="ri-home-line"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('user.dashboard') }}">
                            <i class="ri-home-line"></i>
                            <span>Wallet</span>
                        </a>
                    </li>


                    <li class="sidebar-list">
                        <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                            <i class="ri-settings-line"></i>
                            <span>Settings</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="{{ route('user.profile.index') }}">Profile Setting</a>
                            </li>
                            <li>
                                <a href="{{ route('user.profile.kyc') }}">KYC Verification</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="right-arrow" id="right-arrow">
                <i data-feather="arrow-right"></i>
            </div>
        </nav>
    </div>
</div>