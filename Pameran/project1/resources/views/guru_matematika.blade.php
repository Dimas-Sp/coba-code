<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>Azures BootStrap</title>
<link rel="stylesheet" type="text/css" href="{{ url('/azure') }}/styles/bootstrap.css">
<link rel="stylesheet" type="text/css" href="{{ url('/azure') }}/styles/style.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ url('/azure') }}/fonts/css/fontawesome-all.min.css">    
<link rel="manifest" href="{{ url('/azure') }}/_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
<link rel="apple-touch-icon" sizes="180x180" href="{{ url('/azure') }}/app/icons/icon-192x192.png">
</head>
    
<body class="theme-light" data-highlight="blue2">
    
<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>
    
<div id="page">
    
    <!-- header and footer bar go here-->
    <div class="header header-fixed header-auto-show header-logo-app">
        <a href="#" data-back-button class="header-title header-subtitle">Back to Pages</a>
        <a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-2 show-on-theme-dark"><i class="fas fa-sun"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-2 show-on-theme-light"><i class="fas fa-moon"></i></a>
        <a href="#" data-menu="menu-highlights" class="header-icon header-icon-3"><i class="fas fa-brush"></i></a>
        <a href="#" data-menu="menu-main" class="header-icon header-icon-4"><i class="fas fa-bars"></i></a>
    </div>
    <div id="footer-bar" class="footer-bar-5">
        <a href="{{ url('/azure') }}/index-components.html"><i data-feather="heart" data-feather-line="1" data-feather-size="21" data-feather-color="red2-dark" data-feather-bg="red2-fade-light"></i><span>Features</span></a>
        <a href="{{ url('/azure') }}/index-media.html"><i data-feather="image" data-feather-line="1" data-feather-size="21" data-feather-color="green1-dark" data-feather-bg="green1-fade-light"></i><span>Media</span></a>
        <a href="{{ url('/azure') }}/index.html"><i data-feather="home" data-feather-line="1" data-feather-size="21" data-feather-color="blue2-dark" data-feather-bg="blue2-fade-light"></i><span>Home</span></a>
        <a href="{{ url('/azure') }}/index-pages.html" class="active-nav"><i data-feather="file" data-feather-line="1" data-feather-size="21" data-feather-color="brown1-dark" data-feather-bg="brown1-fade-light"></i><span>Pages</span></a>
        <a href="{{ url('/azure') }}/index-settings.html"><i data-feather="settings" data-feather-line="1" data-feather-size="21" data-feather-color="gray2-dark" data-feather-bg="gray2-fade-light"></i><span>Settings</span></a>
    </div>
    
    <div class="page-content">
        
        <div class="page-title page-title-small">
            <h2><a href="{{ url('/home') }}" data-back-button><i class="fa fa-arrow-left"></i></a>User Lists</h2>
            <a href="#" data-menu="menu-main" class="bg-fade-gray1-dark shadow-xl preload-img" data-src="{{ url('azure') }}/images/avatars/5s.png"></a>
        </div>
        <div class="card header-card shape-rounded" data-card-height="150">
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
            <div class="card-bg preload-img" data-src="{{ url('azure') }}/images/pictures/20s.jpg"></div>
        </div>

        <div class="card card-style">
            <div class="content">
                <h3>Swipe & Tap Lists</h3>
                <p>
                    To get more contact information simply tap the "Tap For More" text, or better yet, swipe the card to the left.
                </p>
                <div class="user-slider owl-carousel">
                    <div class="user-left">
                        <div class="d-flex">
                            <div><img src="{{ url('azure') }}/images/avatars/1s.png" class="mr-3 rounded-circle shadow-l bg-red2-dark" width="50"></div>
                            <div>
                                <h5 class="mt-1 mb-0">Saefudin, S.Ag</h5>
                                <p class="font-10 mt-n1 color-red2-dark">Detail Pelajaran</p>
                            </div>
                            <div class="ml-auto"><span class="next-slide-user badge bg-red2-dark mt-2 p-2 font-8">TAP FOR MORE</span></div>
                        </div>
                    </div>
                    <div class="user-right">
                        <div class="d-flex">
                            <div>
                                <h5 class="mt-1 mb-0">Saefudin, S.Ag</h5>
                                <p class="font-10 mt-n1 color-red2-dark">Detail Pelajaran</p>
                            </div>
                            <div class="ml-auto">
                                <a href="{{ url('/magur?nama_guru=Dikri Maulana, S.Ag') }}" class="icon icon-xs rounded-circle shadow-l bg-phone"><i class="fa fa-phone"></i></a>
                            </div>
                        </div>
                    </div>
                </div>              
                
                <div class="divider mt-3"></div>

                <div class="user-slider owl-carousel">
                    <div class="user-left">
                        <div class="d-flex">
                            <div><img src="{{ url('azure') }}/images/avatars/2s.png" class="bg-green1-dark mr-3 rounded-circle shadow-l" width="50"></div>
                            <div>
                                <h5 class="mt-1 mb-0">Jajang Kurnia, S.Pd</h5>
                                <p class="font-10 mt-n1 color-green1-dark">Support Team Manager</p>
                            </div>
                            <div class="ml-auto"><span class="next-slide-user badge bg-green1-dark mt-2 p-2 font-8">TAP FOR MORE</span></div>
                        </div>
                    </div>
                    <div class="user-right">
                        <div class="d-flex">
                            <div>
                                <h5 class="mt-1 mb-0">Jajang Kurnia, S.Pd</h5>
                                <p class="font-10 mt-n1 color-green1-dark">Support Team Manager</p>
                            </div>
                            <div class="ml-auto">
                                <a href="{{ url('/magur?nama_guru=Jajang Kurnia, S.Pd') }}" class="icon icon-xs rounded-circle shadow-l bg-phone"><i class="fa fa-phone"></i></a>
                            </div>
                        </div>
                    </div>
                </div>     
                
                <div class="divider mt-3"></div>


                <div class="user-slider owl-carousel">
                    <div class="user-left">
                        <div class="d-flex">
                            <div><img src="{{ url('azure') }}/images/avatars/5s.png" class="bg-yellow1-dark mr-3 rounded-circle shadow-l" width="50"></div>
                            <div>
                                <h5 class="mt-1 mb-0">Sri Haryani, S.Pd </h5>
                                <p class="font-10 mt-n1 color-blue2-dark">Executive Officer</p>
                            </div>
                            <div class="ml-auto"><span class="next-slide-user badge bg-blue2-dark mt-2 p-2 font-8">TAP FOR MORE</span></div>
                        </div>
                    </div>
                    <div class="user-right">
                        <div class="d-flex">
                            <div>
                                <h5 class="mt-1 mb-0">Sri Haryani, S.Pd </h5>
                                <p class="font-10 mt-n1 color-blue2-dark">Executive Officer</p>
                            </div>
                            <div class="ml-auto">
                                <a href="#" class="icon icon-xs rounded-circle shadow-l bg-phone"><i class="fa fa-phone"></i></a>
                                <a href="#" class="icon icon-xs rounded-circle shadow-l bg-facebook mr-2 ml-2"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="icon icon-xs rounded-circle shadow-l bg-twitter"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>   
                
                <div class="divider mt-3"></div>

                <div class="user-slider owl-carousel">
                    <div class="user-left">
                        <div class="d-flex">
                            <div><img src="{{ url('azure') }}/images/avatars/7s.png" class="bg-red2-dark mr-3 rounded-circle shadow-l" width="50"></div>
                            <div>
                                <h5 class="mt-1 mb-0">Tri Wahyono, S.Pd</h5>
                                <p class="font-10 mt-n1 color-gray2-dark">Back End Developer</p>
                            </div>
                            <div class="ml-auto"><span class="next-slide-user badge bg-blue2-dark mt-2 p-2 font-8">TAP FOR MORE</span></div>
                        </div>
                    </div>
                    <div class="user-right">
                        <div class="d-flex">
                            <div>
                                <h5 class="mt-1 mb-0">Tri Wahyono, S.Pd</h5>
                                <p class="font-10 mt-n1 color-gray2-dark">Back End Developer</p>
                            </div>
                            <div class="ml-auto">
                                <a href="#" class="icon icon-xs rounded-circle shadow-l bg-phone"><i class="fa fa-phone"></i></a>
                                <a href="#" class="icon icon-xs rounded-circle shadow-l bg-facebook mr-2 ml-2"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="icon icon-xs rounded-circle shadow-l bg-twitter"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="divider mt-4 mb-0"></div>
                <h3 class="pt-5">User Groups</h3>
                <p>You can also create user groups, which can be linked to the user list above. It's simple and very intuitive.</p>

                <div class="d-flex">
                    <div class="w-35 border-right pr-3 border-highlight">
                        <img src="images/empty.png" data-src="images/avatars/1s.png" width="80" class="bg-highlight rounded-circle preload-img">
                        <h6 class="font-14 font-600 mt-2 text-center">Johnatan D</h6>
                        <p class="color-blue2-dark mt-n3 font-9 font-400 text-center mb-0 pt-1">Group Manager</p>
                    </div>
                    <div class="w-65 pl-3 pt-2">
                        <h5>Support Staff Team</h5>
                        <p class="color-highlight mt-n3 font-10 pt-1 mb-3">Monday to Friday - 09:00AM - 05:00 PM</p>
                        <a href="#"><img src="images/empty.png" data-src="images/avatars/1s.png" width="40" class="rounded-circle preload-img"></a>
                        <a href="#"><img src="images/empty.png" data-src="images/avatars/2s.png" width="40" class="rounded-circle preload-img"></a>
                        <a href="#"><img src="images/empty.png" data-src="images/avatars/3s.png" width="40" class="rounded-circle preload-img"></a>
                        <a href="#"><img src="images/empty.png" data-src="images/avatars/4s.png" width="40" class="rounded-circle preload-img"></a>
                    </div>
                </div>

                <div class="divider mt-4"></div>

                <div class="d-flex">
                    <div class="w-35 border-right pr-3 border-green1-dark">
                        <img src="images/empty.png" data-src="images/avatars/2s.png" width="80" class="bg-green1-dark rounded-circle preload-img">
                        <h6 class="font-14 font-600 mt-2 text-center">Johnatan D</h6>
                        <p class="color-green1-dark mt-n3 font-9 font-400 text-center mb-0 pt-1">Group Manager</p>
                    </div>
                    <div class="w-65 pl-3 pt-2">
                        <h5>Design & Development</h5>
                        <p class="color-green1-dark mt-n3 font-10 pt-1 mb-3">Monday to Friday - 09:00AM - 05:00 PM</p>
                        <a href="#"><img src="images/empty.png" data-src="images/avatars/4s.png" width="40" class="rounded-circle preload-img"></a>
                        <a href="#"><img src="images/empty.png" data-src="images/avatars/5s.png" width="40" class="rounded-circle preload-img"></a>
                        <a href="#"><img src="images/empty.png" data-src="images/avatars/6s.png" width="40" class="rounded-circle preload-img"></a>
                        <a href="#"><img src="images/empty.png" data-src="images/avatars/7s.png" width="40" class="rounded-circle preload-img"></a>
                    </div>
                </div>          

                <div class="divider mt-4"></div>

                <div class="d-flex">
                    <div class="w-35 border-right pr-3 border-red2-dark">
                        <img src="images/empty.png" data-src="images/avatars/4s.png" width="80" class="bg-yellow1-dark rounded-circle preload-img">
                        <h6 class="font-14 font-600 mt-2 text-center">Johnatan D</h6>
                        <p class="color-red2-dark mt-n3 font-9 font-400 text-center mb-0 pt-1">Group Manager</p>
                    </div>
                    <div class="w-65 pl-3 pt-2">
                        <h5>Account & Billing</h5>
                        <p class="color-red2-dark mt-n3 font-10 pt-1 mb-3">Monday to Friday - 09:00AM - 05:00 PM</p>
                        <a href="#"><img src="images/empty.png" data-src="images/avatars/8s.png" width="40" class="rounded-circle preload-img"></a>
                        <a href="#"><img src="images/empty.png" data-src="images/avatars/9s.png" width="40" class="rounded-circle preload-img"></a>
                        <a href="#"><img src="images/empty.png" data-src="images/avatars/10s.png" width="40" class="rounded-circle preload-img"></a>
                        <a href="#"><img src="images/empty.png" data-src="images/avatars/11s.png" width="40" class="rounded-circle preload-img"></a>
                    </div>
                </div>
            </div>
        </div> -->

       
        <!-- footer and footer card-->
        <div class="footer" data-menu-load="menu-footer.html"></div>  
    </div>    
    <!-- end of page content-->
    
    
    <div id="menu-share" 
         class="menu menu-box-bottom menu-box-detached rounded-m" 
         data-menu-load="menu-share.html"
         data-menu-height="420" 
         data-menu-effect="menu-over">
    </div>    
    
    <div id="menu-highlights" 
         class="menu menu-box-bottom menu-box-detached rounded-m" 
         data-menu-load="menu-colors.html"
         data-menu-height="510" 
         data-menu-effect="menu-over">        
    </div>
    
    <div id="menu-main"
         class="menu menu-box-right menu-box-detached rounded-m"
         data-menu-width="260"
         data-menu-load="menu-main.html"
         data-menu-active="nav-pages"
         data-menu-effect="menu-over">  
    </div>
    

    
</div>    


<script type="text/javascript" src="{{ url('/azure') }}/scripts/jquery.js"></script>
<script type="text/javascript" src="{{ url('/azure') }}/scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ url('/azure') }}/scripts/custom.js"></script>
</body>
