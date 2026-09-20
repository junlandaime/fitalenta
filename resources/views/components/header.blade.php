<style>
    /* =========================================================
       FITALENTA HEADER - DESKTOP FIRST
       VISUAL ONLY: tidak mengubah backend/database/controller.
       ========================================================= */

    .ft-main-header {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 50;
        width: 100%;
        color: #fff;
        transition: background .3s ease, box-shadow .3s ease, backdrop-filter .3s ease;
    }

    .ft-main-header.is-solid {
        background: rgba(0, 41, 75, .97);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        box-shadow: 0 6px 22px rgba(0, 0, 0, .10);
    }

    .ft-main-header.is-transparent {
        background: linear-gradient(
            180deg,
            rgba(0, 28, 55, .42) 0%,
            rgba(0, 28, 55, .16) 60%,
            rgba(0, 28, 55, 0) 100%
        );
        box-shadow: none;
    }

    .ft-navbar {
        width: 100%;
    }

    /* =========================================================
       NAVBAR
       Dibuat lebih berisi agar konsisten dengan portal registrasi
       ========================================================= */

    .ft-navbar-inner {
        width: min(1180px, calc(100% - 40px));
        min-height: 96px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 18px;
    }

    /* =========================================================
       LOGO
       ========================================================= */

    .ft-brand {
        position: relative;
        width: 175px;
        height: 64px;
        display: flex;
        align-items: center;
        flex-shrink: 0;
        text-decoration: none;
        overflow: visible;
    }

    .ft-brand img {
        display: block;
        width: 175px !important;
        height: 64px !important;
        max-width: none !important;
        object-fit: contain;
        object-position: left center;
        transform: scale(1.75);
        transform-origin: left center;
        transition: transform .25s ease;
    }

    .ft-brand:hover img {
        transform: scale(1.82);
    }

    /* =========================================================
       DESKTOP
       ========================================================= */

    .ft-desktop {
        display: flex;
        flex: 1;
        align-items: center;
        justify-content: flex-end;
        gap: 14px;
        min-width: 0;
    }

    .ft-menu {
        display: flex;
        align-items: center;
        gap: 2px;
        min-width: 0;
    }

    .ft-menu a,
    .ft-login {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-height: 42px;
        padding: 0 11px;
        border-radius: 9px;
        color: #fff;
        text-decoration: none;
        font-size: 14px;
        font-weight: 600;
        white-space: nowrap;
        transition: background .2s ease, color .2s ease;
    }

    .ft-menu a:hover,
    .ft-login:hover,
    .ft-menu a.active {
        background: rgba(255, 255, 255, .10);
    }

    .ft-menu a.active {
        color: #E8491D;
    }

    .ft-auth {
        display: flex;
        align-items: center;
        gap: 5px;
        flex-shrink: 0;
    }

    .ft-register {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-height: 44px;
        padding: 0 20px;
        border-radius: 9px;
        background: #fff;
        color: #00294B;
        text-decoration: none;
        font-size: 14px;
        font-weight: 700;
        box-shadow: 0 6px 18px rgba(0, 0, 0, .10);
        transition: transform .2s ease, background .2s ease, color .2s ease;
    }

    .ft-register:hover {
        background: #E8491D;
        color: #fff;
        transform: translateY(-1px);
    }

    /* =========================================================
       MOBILE
       ========================================================= */

    .ft-toggle {
        display: none;
        width: 44px;
        height: 44px;
        border: 0;
        border-radius: 10px;
        align-items: center;
        justify-content: center;
        background: rgba(255, 255, 255, .10);
        color: #fff;
        cursor: pointer;
    }

    .ft-toggle svg {
        width: 22px;
        height: 22px;
    }

    .ft-mobile {
        display: none;
        background: rgba(0, 41, 75, .98);
        border-top: 1px solid rgba(255,255,255,.10);
        box-shadow: 0 14px 30px rgba(0,0,0,.12);
    }

    .ft-mobile-inner {
        width: min(1180px, calc(100% - 28px));
        margin: 0 auto;
        padding: 12px 0 16px;
    }

    .ft-mobile a {
        display: block;
        padding: 12px 14px;
        border-radius: 9px;
        color: #fff;
        text-decoration: none;
        font-size: 14px;
        font-weight: 600;
    }

    .ft-mobile a:hover,
    .ft-mobile a.active {
        background: rgba(255,255,255,.10);
    }

    .ft-mobile a.active {
        color: #E8491D;
    }

    .ft-mobile-auth {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 8px;
        padding-top: 10px;
        margin-top: 8px;
        border-top: 1px solid rgba(255,255,255,.10);
    }

    .ft-mobile-auth .ft-register-mobile {
        background: #fff;
        color: #00294B;
        text-align: center;
        font-weight: 700;
    }

    .ft-mobile-auth .ft-login-mobile {
        border: 1px solid rgba(255,255,255,.20);
        text-align: center;
        font-weight: 700;
    }

    /* =========================================================
       TABLET / MOBILE
       ========================================================= */

    @media (max-width: 799px) {
        .ft-desktop {
            display: none;
        }

        .ft-toggle {
            display: inline-flex;
        }

        .ft-mobile.is-open {
            display: block;
        }

        .ft-navbar-inner {
            width: calc(100% - 28px);
            min-height: 80px;
        }

        .ft-brand {
            width: 150px;
            height: 58px;
        }

        .ft-brand img {
            width: 150px !important;
            height: 58px !important;
            transform: scale(1.62);
        }

        .ft-brand:hover img {
            transform: scale(1.67);
        }
    }

    @media (max-width: 480px) {
        .ft-navbar-inner {
            width: calc(100% - 24px);
            min-height: 76px;
        }

        .ft-brand {
            width: 138px;
            height: 54px;
        }

        .ft-brand img {
            width: 138px !important;
            height: 54px !important;
            transform: scale(1.55);
        }

        .ft-brand:hover img {
            transform: scale(1.60);
        }
    }
</style>

<header
    x-data="{ isScrolled: false, open: false }"
    x-init="
        const syncNavbar = () => {
            isScrolled = window.scrollY > 40;
        };

        syncNavbar();
        window.addEventListener('scroll', syncNavbar, { passive: true });
    "
    :class="isScrolled || open ? 'is-solid' : 'is-transparent'"
    class="ft-main-header">

    <nav class="ft-navbar">
        <div class="ft-navbar-inner">

            <a href="{{ route('home', [], false) }}" class="ft-brand" aria-label="FITALENTA Home">
                <img src="{{ asset('logoputih.png') }}"
                     onerror="this.onerror=null; this.src='{{ asset('logo.png') }}';"
                     alt="FITALENTA">
            </a>

            <div class="ft-desktop">
                <div class="ft-menu">

                    <a href="{{ route('home', [], false) }}"
                       class="{{ request()->routeIs('home*') ? 'active' : '' }}">
                        Home
                    </a>

                    <a href="{{ route('events.index', [], false) }}"
                       class="{{ request()->routeIs('events*') ? 'active' : '' }}">
                        Event
                    </a>

                    <a href="{{ route('services', [], false) }}"
                       class="{{ request()->routeIs('services*') ? 'active' : '' }}">
                        Services
                    </a>

                    <a href="https://registrasi.fitalenta.co.id/programs">
                        Program
                    </a>

                    <a href="{{ route('articles.index', [], false) }}"
                       class="{{ request()->routeIs('articles*') ? 'active' : '' }}">
                        Blog
                    </a>

                    <a href="{{ route('gallery', [], false) }}"
                       class="{{ request()->routeIs('gallery*') ? 'active' : '' }}">
                        Gallery
                    </a>

                    <a href="{{ route('about', [], false) }}"
                       class="{{ request()->routeIs('about*') ? 'active' : '' }}">
                        About
                    </a>

                    <a href="{{ route('contact', [], false) }}"
                       class="{{ request()->routeIs('contact*') ? 'active' : '' }}">
                        Contact
                    </a>

                </div>

                <div class="ft-auth">

                    <a href="https://registrasi.fitalenta.co.id/login"
                       class="ft-login">
                        Login
                    </a>

                    <a href="https://registrasi.fitalenta.co.id/register"
                       class="ft-register">
                        Registrasi
                    </a>

                </div>
            </div>

            <button
                type="button"
                class="ft-toggle"
                @click="open = !open"
                :aria-expanded="open.toString()"
                aria-label="Buka menu">

                <svg
                    x-show="!open"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"/>
                </svg>

                <svg
                    x-show="open"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    style="display:none;">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M6 18L18 6M6 6l12 12"/>
                </svg>

            </button>
        </div>

        <div
            class="ft-mobile"
            :class="open ? 'is-open' : ''"
            @click.outside="open = false">

            <div class="ft-mobile-inner">

                <a href="{{ route('home', [], false) }}"
                   class="{{ request()->routeIs('home*') ? 'active' : '' }}">
                    Home
                </a>

                <a href="{{ route('events.index', [], false) }}"
                   class="{{ request()->routeIs('events*') ? 'active' : '' }}">
                    Event
                </a>

                <a href="{{ route('services', [], false) }}"
                   class="{{ request()->routeIs('services*') ? 'active' : '' }}">
                    Services
                </a>

                <a href="https://registrasi.fitalenta.co.id/programs">
                    Program
                </a>

                <a href="{{ route('articles.index', [], false) }}"
                   class="{{ request()->routeIs('articles*') ? 'active' : '' }}">
                    Blog
                </a>

                <a href="{{ route('gallery', [], false) }}"
                   class="{{ request()->routeIs('gallery*') ? 'active' : '' }}">
                    Gallery
                </a>

                <a href="{{ route('about', [], false) }}"
                   class="{{ request()->routeIs('about*') ? 'active' : '' }}">
                    About
                </a>

                <a href="{{ route('contact', [], false) }}"
                   class="{{ request()->routeIs('contact*') ? 'active' : '' }}">
                    Contact
                </a>

                <div class="ft-mobile-auth">

                    <a href="https://registrasi.fitalenta.co.id/login"
                       class="ft-login-mobile">
                        Login
                    </a>

                    <a href="https://registrasi.fitalenta.co.id/register"
                       class="ft-register-mobile">
                        Registrasi
                    </a>

                </div>
            </div>
        </div>
    </nav>
</header>
