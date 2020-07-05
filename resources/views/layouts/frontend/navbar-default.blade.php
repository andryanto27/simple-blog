<header class="nk-header nk-header-opaque">
    <nav class="nk-navbar nk-navbar-top">
        <div class="container">
            <div class="nk-nav-table">
                <a href="{{ url('') }}" class="nk-nav-logo">
                    <img src="{{ asset('frontend/images/logo-light.svg') }}" alt="" width="85"
                        class="nk-nav-logo-onscroll">
                    <img src="{{ asset('frontend/images/logo.svg') }}" alt="" width="85">
                </a>
                <ul class="nk-nav nk-nav-right hidden-md-down" data-nav-mobile="#nk-nav-mobile">
                    <li class="{{ \Route::current()->getName() == 'about' ? 'active' : null }}">
                        <a href="{{ route('about') }}">About</a>
                    </li>
                    <li class="{{ \Route::current()->getName() == 'contact' ? 'active' : null }}">
                        <a href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li class="{{ \Route::current()->getName() == 'portfolio.index' ? 'active' : null }}">
                        <a href="{{ route('portfolio.index') }}">Portfolio</a>
                    </li>
                    <li class="{{ \Route::current()->getName() == 'blog.index' ? 'active' : null }}">
                        <a href="{{ route('blog.index') }}">Blog</a>
                    </li>
                </ul>
                <ul class="nk-nav nk-nav-right nk-nav-icons">
                    <li class="single-icon hidden-lg-up">
                        <a href="#" class="nk-navbar-full-toggle">
                            <span class="nk-icon-burger">
                                <span class="nk-t-1"></span>
                                <span class="nk-t-2"></span>
                                <span class="nk-t-3"></span>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>