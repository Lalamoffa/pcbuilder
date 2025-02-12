<nav class="navbar navbar-expand-lg navbar-light fixed-top">

    <header>
        <div class="logo">
            <a href="?page=home">
                <img src="assets/images/logo-80.png" alt="PC Builder" height="80"
                    width="80">
                <p class="hide-mobile"><span>PC</span> Builder<sup><small class="pl-1">®</small></sup></p>
            </a>
        </div>
        <div class="d-none d-md-flex pbc-border"></div>
        <form method="GET" action="https://pcbuilder.net/" class="search">
            <div><i class="fa fa-search" aria-hidden="true"></i><input autocomplete="off" name="s" type="text"
                    placeholder="Search..." id="search"></div>
        </form>

        <div class="login">
            <div class="mobile  dropdown ">
                <a class="access-my-profile"><i class="fa fa-user-circle"></i></a>
            </div>

            <div class="pc">
                <i class="fa fa-user-circle"></i><span>Welcome<div><a href="?page=login">Sign
                            In / Register</a></div></span>
            </div>
        </div>

        <div class="d-none d-lg-flex cart"><a href="?page=cart"><img class=""
                    src="assets/images/icons/cart.svg" height="32" width="32"></a>
            <div><span>Cart</span></div>
        </div>
        <div class="d-none d-lg-flex mode">
            <label class="switch">
                <input type="checkbox" id="switch" name="theme">
                <span class="slider round"></span>
            </label>
        </div>

        <button class="navbar-toggler menu" type="button">
            <svg width="60" height="60" viewBox="0 0 100 100">
                <path class="line line1"
                    d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058">
                </path>
                <path class="line line2" d="M 20,50 H 80"></path>
                <path class="line line3"
                    d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942">
                </path>
            </svg>
        </button>
    </header>

    <div id="my-nav" class="collapse navbar-collapse">
        <ul itemscope itemtype="http://schema.org/SiteNavigationElement" class="navbar-nav mr-auto">
            <li itemprop="name" class="nav-item ">
                <a itemprop="url" class="nav-link" href="?page=list"><i class="fa fa-tools"></i>
                    System Builder </a>
            </li>
            <li itemprop="name" class="nav-item ">
                <a itemprop="url" class="nav-link" href="?page=builts"><i class="fa fa-server"></i>
                    Pre-Build PC</a>
            </li>
            <li itemprop="name" class="nav-item ">
                <a itemprop="url" class="nav-link" href="?page=laptop"><i class="fa fa-laptop"></i>
                    Laptops</a>
            </li>

            <li class="nav-item dropdown megamenu-li ">
                <a class="nav-link dropdown-toggle d-none d-lg-block" href="#" id="navbarDropdownMenuLink2"
                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class=""
                        src="assets/images/icons/cpu.svg" height="24" width="24">
                    Browse Products</a>

                <div class="dropdown-menu megamenu" aria-labelledby="navbarDropdownMenuLink2">
                    <div class="row">
                        <div class="col-12 col-lg-6 ipad">

                            <div class="row">
                                <div itemprop="name" class="col-6 col-sm-4 col-md-3 col-lg-3 pcb-components">
                                    <a itemprop="url" href="https://pcbuilder.net/product/storage/">
                                        <div class="box">
                                            <img data-src="assets/images/megamenu/storage.png"
                                                class="img-fluid mx-auto d-block mega-image lazy"
                                                alt="storage, pc builder, pc part picker, build my pc">
                                            <p>Storage </p>
                                        </div>
                                    </a>
                                </div>

                                <div itemprop="name" class="col-6 col-sm-4 col-md-3 col-lg-3 pcb-components">
                                    <a itemprop="url" href="https://pcbuilder.net/product/graphics-card/">
                                        <div class="box">
                                            <img data-src="assets/images/megamenu/graphics-card.png"
                                                class="img-fluid mx-auto d-block mega-image lazy"
                                                alt="graphics card, video card, pc builder, pc part picker, build my pc">
                                            <p>Graphics Card </p>
                                        </div>
                                    </a>
                                </div>


                                <div itemprop="name" class="col-6 col-sm-4 col-md-3 col-lg-3 pcb-components">
                                    <a itemprop="url" href="https://pcbuilder.net/product/power-supply/">
                                        <div class="box">
                                            <img data-src="assets/images/megamenu/power-supply.png"
                                                class="img-fluid mx-auto d-block mega-image lazy"
                                                alt="power supply, psu, pc builder, pc part picker, build my pc">
                                            <p>Power Supply</p>
                                        </div>
                                    </a>
                                </div>

                                <div itemprop="name" class="col-6 col-sm-4 col-md-3 col-lg-3 pcb-components">
                                    <a itemprop="url" href="https://pcbuilder.net/product/case/">
                                        <div class="box">
                                            <img data-src="assets/images/megamenu/case.png"
                                                class="img-fluid mx-auto d-block mega-image lazy"
                                                alt="case, cabinet, pc builder, pc part picker, build my pc">
                                            <p>Case</p>
                                        </div>
                                    </a>
                                </div>

                                <div itemprop="name" class="col-6 col-sm-4 col-md-3 col-lg-3 pcb-components">
                                    <a itemprop="url" href="https://pcbuilder.net/product/processor/">
                                        <div class="box">
                                            <img data-src="assets/images/mega-menu/nav-processor.png"
                                                class="img-fluid mx-auto d-block mega-image lazy"
                                                alt="cpu, processor, pc builder, pc part picker, build my pc">
                                            <p>CPU</p>
                                        </div>
                                    </a>
                                </div>

                                <div itemprop="name" class="col-6 col-sm-4 col-md-3 col-lg-3 pcb-components">
                                    <a itemprop="url" href="https://pcbuilder.net/product/cpu-cooler/">
                                        <div class="box">
                                            <img data-src="assets/images/megamenu/cpu-cooler.png"
                                                class="img-fluid mx-auto d-block mega-image lazy"
                                                alt="cpu cooler, pc builder, pc part picker, build my pc">
                                            <p>CPU Cooler</p>
                                        </div>
                                    </a>
                                </div>

                                <div itemprop="name" class="col-6 col-md-3 col-lg-3 pcb-components">
                                    <a itemprop="url" href="https://pcbuilder.net/product/motherboard/">
                                        <div class="box">
                                            <img data-src="assets/images/megamenu/motherboard.png"
                                                class="img-fluid mx-auto d-block mega-image lazy"
                                                alt="motherboard, pc builder, pc part picker, build my pc">
                                            <p>Motherboard</p>
                                        </div>
                                    </a>
                                </div>

                                <div itemprop="name" class="col-6 col-md-3 col-lg-3 pcb-components">
                                    <a itemprop="url" href="https://pcbuilder.net/product/ram/">
                                        <div class="box">
                                            <img data-src="assets/images/megamenu/memory.png"
                                                class="img-fluid mx-auto d-block mega-image lazy"
                                                alt="memory, ram, pc builder, pc part picker, build my pc">
                                            <p>Memory</p>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>

                        <div class="col-12 col-lg-6 ipad">


                            <div class="row links">
                                <div class="col-6 col-sm-4">
                                    <ul class="list-unstyled">
                                        <li class="heading top-padding">Cooling</li>
                                        <li itemprop="name"><a itemprop="url"
                                                href="https://pcbuilder.net/product/case-cooler/">Case Fans</a></li>
                                        <li itemprop="name"><a itemprop="url"
                                                href="https://pcbuilder.net/product/thermal-paste/">Thermal
                                                Compound</a></li>
                                    </ul>

                                    <ul class="list-unstyled">
                                        <li class="heading">Expansion</li>
                                        <li itemprop="name"><a itemprop="url"
                                                href="https://pcbuilder.net/product/sound-card/">Sound Cards</a>
                                        </li>
                                        <li itemprop="name"><a itemprop="url"
                                                href="https://pcbuilder.net/product/wired-network-adapter/">Wired
                                                Networking</a></li>
                                        <li itemprop="name"><a itemprop="url"
                                                href="https://pcbuilder.net/product/wireless-network-adapter/">Wireless
                                                Networking</a></li>
                                    </ul>


                                    <ul class="list-unstyled">
                                        <li class="heading">Displays</li>
                                        <li itemprop="name"><a itemprop="url"
                                                href="https://pcbuilder.net/product/monitor/">Monitors</a></li>
                                        <li itemprop="name"><a itemprop="url"
                                                href="https://pcbuilder.net/product/webcam/">Webcam</a></li>
                                    </ul>
                                </div>


                                <div class="col-6 col-sm-4">
                                    <ul class="list-unstyled">
                                        <li class="heading top-padding">Peripherals</li>
                                        <li itemprop="name"><a itemprop="url"
                                                href="https://pcbuilder.net/product/headphone/">Headphones</a></li>
                                        <li itemprop="name"><a itemprop="url"
                                                href="https://pcbuilder.net/product/keyboard/">Keyboards</a></li>
                                        <li itemprop="name"><a itemprop="url"
                                                href="https://pcbuilder.net/product/mouse/">Mouse</a></li>
                                        <li itemprop="name"><a itemprop="url"
                                                href="https://pcbuilder.net/product/speakers/">Speakers</a></li>
                                        <li itemprop="name"><a itemprop="url"
                                                href="https://pcbuilder.net/product/ups/">Uninteraptable Power
                                                Supplies</a></li>
                                    </ul>

                                    <ul class="list-unstyled">
                                        <li class="heading">External Storage</li>
                                        <li itemprop="name"><a itemprop="url"
                                                href="https://pcbuilder.net/product/external-hard-drive/">External
                                                Hard Drives</a></li>
                                    </ul>

                                    <ul class="list-unstyled">
                                        <li class="heading">Drivers</li>
                                        <li itemprop="name"><a itemprop="url"
                                                href="https://pcbuilder.net/product/optical-drive/">Optical
                                                Drive</a></li>
                                    </ul>
                                </div>


                                <div class="col-6 col-sm-4">
                                    <ul class="list-unstyled">
                                        <li class="heading top-padding">Software</li>
                                        <li itemprop="name"><a itemprop="url"
                                                href="https://pcbuilder.net/product/softwares/">Antivirus</a></li>
                                        <li itemprop="name"><a itemprop="url"
                                                href="https://pcbuilder.net/product/softwares/">Utilities</a></li>
                                        <li itemprop="name"><a itemprop="url"
                                                href="https://pcbuilder.net/product/softwares/">Operating
                                                Systems</a></li>
                                    </ul>

                                    <ul class="list-unstyled">
                                        <li class="heading">Pre-Built PCs</li>
                                        <li itemprop="name"><a itemprop="url"
                                                href="https://pcbuilder.net/builts/gaming-pc/">Gaming Desktops</a>
                                        </li>
                                        <li itemprop="name"><a itemprop="url"
                                                href="https://pcbuilder.net/builts/cheap-pc/">Cheap Desktops</a>
                                        </li>
                                        <li itemprop="name"><a itemprop="url"
                                                href="https://pcbuilder.net/builts/aio-pc/">AIO Desktops</a></li>
                                    </ul>

                                    <ul class="list-unstyled">
                                        <li class="heading">Others</li>
                                        <li itemprop="name"><a itemprop="url"
                                                href="https://pcbuilder.net/laptop/">Laptops</a></li>
                                    </ul>
                                </div>
                            </div>


                        </div>


                    </div>
                </div>
            </li>
        </ul>

        <div class="right-section d-none d-lg-flex">
            <ul class="mr-5">
                <div class="">
                    <li class="nav-item">
                        <a class=""
                            onclick="if (!window.__cfRLUnblockHandlers) return false; alert('Something is Cooking Here :)');"
                            data-cf-modified-e0851343d4cacafcae6327e0-="">Forum</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://blog.pcbuilder.net/" class="">Blog</a>
                    </li>
                </div>


                <li class="image-li dropdown pcb-country">
                    <a class="country dropdown-toggle" id="navbarDropdownMenuLink2" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"><img class="img-fluid change-country"
                            src="assets/images/flags/us.svg"
                            alt="pc builder, pc part picker, build my pc"></a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                        <a class="dropdown-item"
                            onclick="if (!window.__cfRLUnblockHandlers) return false; changecountry('US');"
                            data-cf-modified-e0851343d4cacafcae6327e0-=""><img class="img-fluid dropdown-image lazy"
                                data-src="assets/images/flags/us.svg"
                                alt="pc builder us, pcbuilder us">United States</a>
                        <a class="dropdown-item"
                            onclick="if (!window.__cfRLUnblockHandlers) return false; changecountry('GB');"
                            data-cf-modified-e0851343d4cacafcae6327e0-=""><img class="img-fluid dropdown-image lazy"
                                data-src="assets/images/flags/gb.svg"
                                alt="pc builder uk, pcbuilder uk">United Kingdom</a>
                        <a class="dropdown-item"
                            onclick="if (!window.__cfRLUnblockHandlers) return false; changecountry('ES');"
                            data-cf-modified-e0851343d4cacafcae6327e0-=""><img class="img-fluid dropdown-image lazy"
                                data-src="assets/images/flags/es.svg"
                                alt="pc builder es, pcbuilder es">Spain</a>
                        <a class="dropdown-item"
                            onclick="if (!window.__cfRLUnblockHandlers) return false; changecountry('CA');"
                            data-cf-modified-e0851343d4cacafcae6327e0-=""><img class="img-fluid dropdown-image lazy"
                                data-src="assets/images/flags/ca.svg"
                                alt="pc builder ca, pcbuilder ca">Canada</a>
                        <a class="dropdown-item"
                            onclick="if (!window.__cfRLUnblockHandlers) return false; changecountry('IN');"
                            data-cf-modified-e0851343d4cacafcae6327e0-=""><img class="img-fluid dropdown-image lazy"
                                data-src="assets/images/flags/in.svg"
                                alt="pc builder in, pcbuilder in">India</a>
                        <a class="dropdown-item"
                            onclick="if (!window.__cfRLUnblockHandlers) return false; changecountry('AU');"
                            data-cf-modified-e0851343d4cacafcae6327e0-=""><img class="img-fluid dropdown-image lazy"
                                data-src="assets/images/flags/au.svg"
                                alt="pc builder au, pcbuilder au">Australia</a>
                        <a class="dropdown-item"
                            onclick="if (!window.__cfRLUnblockHandlers) return false; changecountry('IT');"
                            data-cf-modified-e0851343d4cacafcae6327e0-=""><img class="img-fluid dropdown-image lazy"
                                data-src="assets/images/flags/it.svg"
                                alt="pc builder it, pcbuilder it">Italy</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div id="my-profile" class="collapse navbar-collapse">
        <div class="mega-profile">
            <a class="dropdown-item" href="?page=login">Login</a>
            <a class="dropdown-item" href="?page=register">Sign up</a>
            <a class="dropdown-item d-none" href="#">Forum</a>
            <a class="dropdown-item d-none" href="#">Blog</a>
        </div>
    </div>

    <div id="my-search" class="collapse navbar-collapse">
        <div class="mega-search">
            <a class="search-for">Please Search a Term...</a>
        </div>
    </div>

</nav>