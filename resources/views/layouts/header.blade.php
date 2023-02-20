<header class="header header-1">
    <div class="container">
        <div class="header__wrapper">
            <div class="header__logo">
                <a href="/">
                    <img src="{{asset('/assets/images/telia-trans.png')}}" alt="logo">
                </a>
            </div>
            <div class="header__nav">
                <ul class="header__nav-primary">
                    <li><a href="/"><i class="fad fa-home-alt"></i></a></li>

                    <li><a href="#feature">Features</a></li>
                    <li><a href="#faq">FAQs</a></li>
                    {{-- <li><a href="#pricing">Pricing</a></li> --}}
                    <li><a href="#preview">Preview</a></li>
                    {{-- <li><a href="#contactForm">Contact</a></li> --}}

                    {{-- <li> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Come a vendor
                            </button></li> --}}

                </ul>
                <span><i class="fas fa-times"></i></span>
            </div>
            <div class="header__bars">
                <div class="header__bars-bar header__bars-bar-1"></div>
                <div class="header__bars-bar header__bars-bar-2"></div>
                <div class="header__bars-bar header__bars-bar-3"></div>
            </div>
        </div>
    </div>
</header>

<style>
        .header__nav {
            background: #f0f7fc !important;
        }

        .header {
            padding: 3.6rem 0 5rem -2px !important;
        }

        .header.fixed {
            padding: 0px !important;
            background-color: #f0f7fc !important;
        }

        .header__nav-primary {
            margin-bottom: 35px !important;
        }

        .header__nav-primary li .btn {
            background: inherit;
            border: 1px solid #049899 !important;
            color: #049899 !important;
            height: 50px !important;
            font-size: 1.6rem;
            font-weight: 500 !important;
            border-radius: 38px;
            padding: 0 26px;
            position: relative;
            top: -2px;
        }

        .header__nav-primary li .btn:hover,
        .header__nav-primary li .btn:focus {
            background: #049899 !important;
            color: white !important;
        }
    </style>
