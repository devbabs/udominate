<header id="header" class="header-transparent header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-top-0 box-shadow-none">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{{ route('index') }}">
                                <img alt="{{ config('app.name') }}" src="{{ asset('images/brand/logo.png') }}" class="header-brand-image">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-links header-nav-dropdowns-dark order-2 order-lg-1">
                            <div class="header-nav-main header-nav-main-font-lg header-nav-main-font-lg-upper-2 header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li>
                                            <a class="nav-link active" data-hash data-hash-offset="0" data-hash-offset-lg="68" href="#home">Home</a>
                                        </li>
                                        <li>
                                            <a class="nav-link" data-hash data-hash-offset="0" data-hash-offset-lg="68" href="#cohort-section">Cohort</a>
                                        </li>
                                        <li>
                                            <a class="nav-link" data-hash data-hash-offset="0" data-hash-offset-lg="68" href="#masterclass-section">Masterclass</a>
                                        </li>
                                        <li>
                                            <a class="nav-link" data-hash data-hash-offset="0" data-hash-offset-lg="68" href="#magazine-section">Magazine</a>
                                        </li>
                                        <li>
                                            <a class="nav-link" data-hash data-hash-offset="0" data-hash-offset-lg="68" href="#books-section">eBooks</a>
                                        </li>
                                        <li>
                                            <a class="nav-link" data-hash data-hash-offset="0" data-hash-offset-lg="68" href="#courses-section">Free Courses</a>
                                        </li>
                                        <li>
                                            <a class="nav-link" data-hash data-hash-offset="0" data-hash-offset-lg="68" href="#">Contact Us</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
