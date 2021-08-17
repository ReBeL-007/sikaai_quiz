<nav class="nav-area">
      <!-- mobile navigation -->
      <input type="checkbox" id="check" />
      <div class="hamburger-menu-container">
        <div class="hamburger-menu">
          <div></div>
        </div>
      </div>
      <div class="overlay"></div>
      <!-- navigation start -->
      <div class="nav-nav">
        <!-- logo -->
        <div class="logo">
          <a href="{{route('index')}}">
            <svg
              width="150"
              height="71"
              viewBox="0 0 205 71"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
            >
              <rect width="205" height="71" fill="url(#pattern0)" />
              <defs>
                <pattern
                  id="pattern0"
                  patternContentUnits="objectBoundingBox"
                  width="1"
                  height="1"
                >
                  <use
                    xlink:href="#image0"
                    transform="scale(0.00487805 0.0140845)"
                  />
                </pattern>
                <image
                  id="image0"
                  width="205"
                  height="71"
                  xlink:href="data:image/png;base64,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"
                />
              </defs>
            </svg>
          </a>
        </div>
      </div>

      <!-- main navigation    -->
      <div class="main__nav-container">
        <div class="nav__list-container">
          <div class="nav__list">
            @if(auth()->user())
            <a
              href="{{route('home')}}"
              class="nav__list-link {{ request()->is('contact') ? 'nav__list-link-active' : '' }}"
              >Dashboard</a
            >
            @else
            <a
              href="{{route('index')}}"
              class="nav__list-link {{ request()->is('/') ? 'nav__list-link-active' : '' }}"
              >Home</a
            >
            @endif
            <a
              href="{{route('aboutus')}}"
              class="nav__list-link {{ request()->is('about') ? 'nav__list-link-active' : '' }}"
              >About Us</a
            >
            <a
              href="{{route('course')}}"
              class="nav__list-link {{ request()->is('courses') ? 'nav__list-link-active' : '' }}"
              >Courses</a
            >
            <!-- <a href="{{route('aboutus')}}" class="nav__list-link {{ request()->is('pricing') ? 'nav__list-link-active' : '' }}">Pricing</a> -->
            <a
              href="{{route('contact')}}"
              class="nav__list-link {{ request()->is('contact') ? 'nav__list-link-active' : '' }}"
              >Contact Us</a
            >
            <div class="mobile__actions">
              <a href="{{route('login')}}" class="action-btn btn btn-logIn"
                >Log in</a
              >
              <div class="btn__background">
                <a href="{{route('login')}}" class="action-btn btn btn-register"
                  >Log In
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- actions -->
        <div class="action">
          <a href="{{route('login')}}" class="action-btn btn btn-logIn"
            >Log in</a
          >
          <div class="btn__background">
            <a href="{{route('login')}}" class="action-btn btn btn-register"
              >Log In
            </a>
            <span></span>
          </div>
        </div>
      </div>
    </nav>