<template>
    <div id="kt_header_mobile" class="header-mobile  header-mobile-fixed ">
        <div class="mobile-logo">
            <a href="#">
                <img alt="Laravel" src="#"/>
            </a>
        </div>
        <div class="d-flex align-items-center">

            <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle"><span></span></button>

            <button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle"><span></span></button>

            <button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
            <span class="svg-icon svg-icon-xl"><!--begin::Svg Icon | path:media/svg/icons/General/User.svg--><svg
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
              fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
              fill="#000000" fill-rule="nonzero"/>
    </g>
</svg><!--end::Svg Icon--></span>
            </button>

        </div>
    </div>

    <div class="d-flex flex-column flex-root">

        <Sidebar />

        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

            <div class="">
                <slot/>
            </div>

            <div id="kt_header" class="header  header-fixed ">
                <div class="container-fluid d-flex align-items-center justify-content-between">
                    <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">

                        <div id="kt_header_menu" class="header-menu header-menu-mobile  header-menu-layout-default ">
                            <ul class="menu-nav ">
                                <li class="menu-item  menu-item-active " aria-haspopup="true"><a href="#"
                                                                                                 class="menu-link "><span
                                    class="menu-text">Dashboard</span></a></li>
                                <li class="menu-item  menu-item-submenu menu-item-rel" data-menu-toggle="click"
                                    aria-haspopup="true"><a href="#" class="menu-link menu-toggle"><span
                                    class="menu-text">Features</span><i class="menu-arrow"></i></a>
                                    <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                                        <ul class="menu-subnav">
                                            <li class="menu-item  menu-item-submenu" data-menu-toggle="hover"
                                                aria-haspopup="true"><a href="#" class="menu-link menu-toggle">
                                                <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Communication/Add-user.svg-->
                                                    <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                                    <path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                                          fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                    <path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                                          fill="#000000" fill-rule="nonzero"/>
                                                    </g>
                                                </svg><!--end::Svg Icon-->
                                                </span><span class="menu-text">Bootstrap</span><i class="menu-hor-arrow"></i><i
                                                class="menu-arrow"></i></a>
                                                <div class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                    <ul class="menu-subnav">
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="#"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Utilities</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="#"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Typography</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="#"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Buttons</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="#"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Button Group</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="#"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Dropdown</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="#"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Navs</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="#"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Tables</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="#"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Progress</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="#"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Modal</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="#"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Alerts</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="#"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Popover</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="#"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Tooltip</span></a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-item  menu-item-submenu" data-menu-toggle="hover"
                                                aria-haspopup="true"><a href="#" class="menu-link menu-toggle"><span
                                                class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Files/Pictures1.svg--><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <rect x="0" y="0" width="24" height="24"/>
    <path d="M3.5,21 L20.5,21 C21.3284271,21 22,20.3284271 22,19.5 L22,8.5 C22,7.67157288 21.3284271,7 20.5,7 L10,7 L7.43933983,4.43933983 C7.15803526,4.15803526 6.77650439,4 6.37867966,4 L3.5,4 C2.67157288,4 2,4.67157288 2,5.5 L2,19.5 C2,20.3284271 2.67157288,21 3.5,21 Z"
          fill="#000000" opacity="0.3"/>
    <polygon fill="#000000" opacity="0.3" points="4 19 10 11 16 19"/>
    <polygon fill="#000000" points="11 19 15 14 19 19"/>
    <path d="M18,12 C18.8284271,12 19.5,11.3284271 19.5,10.5 C19.5,9.67157288 18.8284271,9 18,9 C17.1715729,9 16.5,9.67157288 16.5,10.5 C16.5,11.3284271 17.1715729,12 18,12 Z"
          fill="#000000" opacity="0.3"/>
    </g>
    </svg><!--end::Svg Icon--></span><span class="menu-text">Custom</span><i class="menu-hor-arrow"></i><i
                                                class="menu-arrow"></i></a>
                                                <div class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                    <ul class="menu-subnav">
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/custom/utilities"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Utilities</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/custom/accordions"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Accordions</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/custom/labels"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Label</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/custom/line-tabs"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Line Tabs</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/custom/advance-navs"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Advance Navigations</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/custom/timeline"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Timeline</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/custom/pagination"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Pagination</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/custom/media"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Media</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/custom/spinners"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Spinners</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/custom/iconbox"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Iconbox</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/custom/callout"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Callout</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/custom/ribbons"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Ribbons</span></a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-item  menu-item-submenu" data-menu-toggle="hover"
                                                aria-haspopup="true"><a href="#" class="menu-link menu-toggle"><span
                                                class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Communication/Address-card.svg--><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <rect x="0" y="0" width="24" height="24"/>
    <path d="M6,2 L18,2 C19.6568542,2 21,3.34314575 21,5 L21,19 C21,20.6568542 19.6568542,22 18,22 L6,22 C4.34314575,22 3,20.6568542 3,19 L3,5 C3,3.34314575 4.34314575,2 6,2 Z M12,11 C13.1045695,11 14,10.1045695 14,9 C14,7.8954305 13.1045695,7 12,7 C10.8954305,7 10,7.8954305 10,9 C10,10.1045695 10.8954305,11 12,11 Z M7.00036205,16.4995035 C6.98863236,16.6619875 7.26484009,17 7.4041679,17 C11.463736,17 14.5228466,17 16.5815,17 C16.9988413,17 17.0053266,16.6221713 16.9988413,16.5 C16.8360465,13.4332455 14.6506758,12 11.9907452,12 C9.36772908,12 7.21569918,13.5165724 7.00036205,16.4995035 Z"
          fill="#000000"/>
    </g>
    </svg><!--end::Svg Icon--></span><span class="menu-text">Icons</span><i class="menu-hor-arrow"></i><i
                                                class="menu-arrow"></i></a>
                                                <div class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                    <ul class="menu-subnav">
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/icons/flaticon"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Flaticon</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/icons/fontawesome5"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Fontawesome 5</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/icons/lineawesome"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Lineawesome</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/icons/socicons"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Socicons</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/svg/icons"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">SVG Icons</span></a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-item  menu-item-submenu" data-menu-toggle="hover"
                                                aria-haspopup="true"><a href="#" class="menu-link menu-toggle"><span
                                                class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Communication/Adress-book2.svg--><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <rect x="0" y="0" width="24" height="24"/>
    <path d="M18,2 L20,2 C21.6568542,2 23,3.34314575 23,5 L23,19 C23,20.6568542 21.6568542,22 20,22 L18,22 L18,2 Z"
          fill="#000000" opacity="0.3"/>
    <path d="M5,2 L17,2 C18.6568542,2 20,3.34314575 20,5 L20,19 C20,20.6568542 18.6568542,22 17,22 L5,22 C4.44771525,22 4,21.5522847 4,21 L4,3 C4,2.44771525 4.44771525,2 5,2 Z M12,11 C13.1045695,11 14,10.1045695 14,9 C14,7.8954305 13.1045695,7 12,7 C10.8954305,7 10,7.8954305 10,9 C10,10.1045695 10.8954305,11 12,11 Z M7.00036205,16.4995035 C6.98863236,16.6619875 7.26484009,17 7.4041679,17 C11.463736,17 14.5228466,17 16.5815,17 C16.9988413,17 17.0053266,16.6221713 16.9988413,16.5 C16.8360465,13.4332455 14.6506758,12 11.9907452,12 C9.36772908,12 7.21569918,13.5165724 7.00036205,16.4995035 Z"
          fill="#000000"/>
    </g>
    </svg><!--end::Svg Icon--></span><span class="menu-text">Cards</span><i class="menu-hor-arrow"></i><i
                                                class="menu-arrow"></i></a>
                                                <div class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                    <ul class="menu-subnav">
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/cards/general"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">General Cards</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/cards/stacked"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Stacked Cards</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/cards/tabbed"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Tabbed Cards</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/cards/draggable"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Draggable Cards</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/cards/tools"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Cards Tools</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/cards/sticky"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Sticky Cards</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/cards/stretched"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Stretched Cards</span></a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-item  menu-item-submenu" data-menu-toggle="hover"
                                                aria-haspopup="true"><a href="#" class="menu-link menu-toggle"><span
                                                class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Communication/Chat1.svg--><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <rect x="0" y="0" width="24" height="24"/>
    <polygon fill="#000000" opacity="0.3" points="5 15 3 21.5 9.5 19.5"/>
    <path d="M13.5,21 C8.25329488,21 4,16.7467051 4,11.5 C4,6.25329488 8.25329488,2 13.5,2 C18.7467051,2 23,6.25329488 23,11.5 C23,16.7467051 18.7467051,21 13.5,21 Z M8.5,13 C9.32842712,13 10,12.3284271 10,11.5 C10,10.6715729 9.32842712,10 8.5,10 C7.67157288,10 7,10.6715729 7,11.5 C7,12.3284271 7.67157288,13 8.5,13 Z M13.5,13 C14.3284271,13 15,12.3284271 15,11.5 C15,10.6715729 14.3284271,10 13.5,10 C12.6715729,10 12,10.6715729 12,11.5 C12,12.3284271 12.6715729,13 13.5,13 Z M18.5,13 C19.3284271,13 20,12.3284271 20,11.5 C20,10.6715729 19.3284271,10 18.5,10 C17.6715729,10 17,10.6715729 17,11.5 C17,12.3284271 17.6715729,13 18.5,13 Z"
          fill="#000000"/>
    </g>
    </svg><!--end::Svg Icon--></span><span class="menu-text">Widgets</span><i class="menu-hor-arrow"></i><i
                                                class="menu-arrow"></i></a>
                                                <div class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                    <ul class="menu-subnav">
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/widgets/lists"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Lists</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/widgets/stats"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Stats</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/widgets/charts"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Charts</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/widgets/charts"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Charts</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/widgets/mixed"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Mixed</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/widgets/tiles"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Tiles</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/widgets/engage"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Engage</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/widgets/tables"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Tables</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/widgets/forms"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Forms</span></a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-item  menu-item-submenu" data-menu-toggle="hover"
                                                aria-haspopup="true"><a href="#" class="menu-link menu-toggle"><span
                                                class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Communication/Chat-check.svg--><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <rect x="0" y="0" width="24" height="24"/>
    <path d="M4.875,20.75 C4.63541667,20.75 4.39583333,20.6541667 4.20416667,20.4625 L2.2875,18.5458333 C1.90416667,18.1625 1.90416667,17.5875 2.2875,17.2041667 C2.67083333,16.8208333 3.29375,16.8208333 3.62916667,17.2041667 L4.875,18.45 L8.0375,15.2875 C8.42083333,14.9041667 8.99583333,14.9041667 9.37916667,15.2875 C9.7625,15.6708333 9.7625,16.2458333 9.37916667,16.6291667 L5.54583333,20.4625 C5.35416667,20.6541667 5.11458333,20.75 4.875,20.75 Z"
          fill="#000000" fill-rule="nonzero" opacity="0.3"/>
    <path d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z"
          fill="#000000"/>
    </g>
    </svg><!--end::Svg Icon--></span><span class="menu-text">Calendar</span><i class="menu-hor-arrow"></i><i
                                                class="menu-arrow"></i></a>
                                                <div class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                    <ul class="menu-subnav">
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/calendar/basic"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Basic Calendar</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/calendar/list-view"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">List Views</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/calendar/google"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Google Calendar</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/calendar/external-events"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">External Events</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/calendar/background-events"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Background Events</span></a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-item  menu-item-submenu" data-menu-toggle="hover"
                                                aria-haspopup="true"><a href="#" class="menu-link menu-toggle"><span
                                                class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Communication/Dial-numbers.svg--><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <rect x="0" y="0" width="24" height="24"/>
    <rect fill="#000000" opacity="0.3" x="4" y="4" width="4" height="4" rx="2"/>
    <rect fill="#000000" x="4" y="10" width="4" height="4" rx="2"/>
    <rect fill="#000000" x="10" y="4" width="4" height="4" rx="2"/>
    <rect fill="#000000" x="10" y="10" width="4" height="4" rx="2"/>
    <rect fill="#000000" x="16" y="4" width="4" height="4" rx="2"/>
    <rect fill="#000000" x="16" y="10" width="4" height="4" rx="2"/>
    <rect fill="#000000" x="4" y="16" width="4" height="4" rx="2"/>
    <rect fill="#000000" x="10" y="16" width="4" height="4" rx="2"/>
    <rect fill="#000000" x="16" y="16" width="4" height="4" rx="2"/>
    </g>
    </svg><!--end::Svg Icon--></span><span class="menu-text">Charts</span><i class="menu-hor-arrow"></i><i
                                                class="menu-arrow"></i></a>
                                                <div class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                    <ul class="menu-subnav">
                                                        <li class="menu-item  menu-item-submenu"
                                                            data-menu-toggle="hover" aria-haspopup="true"><a href="#"
                                                                                                             class="menu-link menu-toggle"><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">amCharts</span><i
                                                            class="menu-hor-arrow"></i><i
                                                            class="menu-arrow"></i></a>
                                                            <div class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                                <ul class="menu-subnav">
                                                                    <li class="menu-item " aria-haspopup="true"><a
                                                                        href="http://metro/features/charts/amcharts/charts"
                                                                        class="menu-link "><i
                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                        class="menu-text">amCharts Charts</span></a>
                                                                    </li>
                                                                    <li class="menu-item " aria-haspopup="true"><a
                                                                        href="http://metro/features/charts/amcharts/stock-charts"
                                                                        class="menu-link "><i
                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                        class="menu-text">amCharts Stock Charts</span></a>
                                                                    </li>
                                                                    <li class="menu-item " aria-haspopup="true"><a
                                                                        href="http://metro/features/charts/amcharts/maps"
                                                                        class="menu-link "><i
                                                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                                        class="menu-text">amCharts Maps</span></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/charts/flotcharts"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Flot Charts</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/charts/google-charts"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Google Charts</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/charts/morris-charts"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Morris Charts</span></a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-item  menu-item-submenu" data-menu-toggle="hover"
                                                aria-haspopup="true"><a href="#" class="menu-link menu-toggle"><span
                                                class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Communication/Incoming-box.svg--><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <rect x="0" y="0" width="24" height="24"/>
    <path d="M22,17 L22,21 C22,22.1045695 21.1045695,23 20,23 L4,23 C2.8954305,23 2,22.1045695 2,21 L2,17 L6.27924078,17 L6.82339262,18.6324555 C7.09562072,19.4491398 7.8598984,20 8.72075922,20 L15.381966,20 C16.1395101,20 16.8320364,19.5719952 17.1708204,18.8944272 L18.118034,17 L22,17 Z"
          fill="#000000"/>
    <path d="M2.5625,15 L5.92654389,9.01947752 C6.2807805,8.38972356 6.94714834,8 7.66969497,8 L16.330305,8 C17.0528517,8 17.7192195,8.38972356 18.0734561,9.01947752 L21.4375,15 L18.118034,15 C17.3604899,15 16.6679636,15.4280048 16.3291796,16.1055728 L15.381966,18 L8.72075922,18 L8.17660738,16.3675445 C7.90437928,15.5508602 7.1401016,15 6.27924078,15 L2.5625,15 Z"
          fill="#000000" opacity="0.3"/>
    <path d="M11.1288761,0.733697713 L11.1288761,2.69017121 L9.12120481,2.69017121 C8.84506244,2.69017121 8.62120481,2.91402884 8.62120481,3.19017121 L8.62120481,4.21346991 C8.62120481,4.48961229 8.84506244,4.71346991 9.12120481,4.71346991 L11.1288761,4.71346991 L11.1288761,6.66994341 C11.1288761,6.94608579 11.3527337,7.16994341 11.6288761,7.16994341 C11.7471877,7.16994341 11.8616664,7.12798964 11.951961,7.05154023 L15.4576222,4.08341738 C15.6683723,3.90498251 15.6945689,3.58948575 15.5161341,3.37873564 C15.4982803,3.35764848 15.4787093,3.33807751 15.4576222,3.32022374 L11.951961,0.352100892 C11.7412109,0.173666017 11.4257142,0.199862688 11.2472793,0.410612793 C11.1708299,0.500907473 11.1288761,0.615386087 11.1288761,0.733697713 Z"
          fill="#000000" fill-rule="nonzero"
          transform="translate(11.959697, 3.661508) rotate(-270.000000) translate(-11.959697, -3.661508) "/>
    </g>
    </svg><!--end::Svg Icon--></span><span class="menu-text">Maps</span><i class="menu-hor-arrow"></i><i
                                                class="menu-arrow"></i></a>
                                                <div class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                    <ul class="menu-subnav">
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/maps/google-maps"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Google Maps</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/maps/jqvmap"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">JQVMap</span></a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-item  menu-item-submenu" data-menu-toggle="hover"
                                                aria-haspopup="true"><a href="#" class="menu-link menu-toggle"><span
                                                class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Communication/Active-call.svg--><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <rect x="0" y="0" width="24" height="24"/>
    <path d="M13.0799676,14.7839934 L15.2839934,12.5799676 C15.8927139,11.9712471 16.0436229,11.0413042 15.6586342,10.2713269 L15.5337539,10.0215663 C15.1487653,9.25158901 15.2996742,8.3216461 15.9083948,7.71292558 L18.6411989,4.98012149 C18.836461,4.78485934 19.1530435,4.78485934 19.3483056,4.98012149 C19.3863063,5.01812215 19.4179321,5.06200062 19.4419658,5.11006808 L20.5459415,7.31801948 C21.3904962,9.0071287 21.0594452,11.0471565 19.7240871,12.3825146 L13.7252616,18.3813401 C12.2717221,19.8348796 10.1217008,20.3424308 8.17157288,19.6923882 L5.75709327,18.8875616 C5.49512161,18.8002377 5.35354162,18.5170777 5.4408655,18.2551061 C5.46541191,18.1814669 5.50676633,18.114554 5.56165376,18.0596666 L8.21292558,15.4083948 C8.8216461,14.7996742 9.75158901,14.6487653 10.5215663,15.0337539 L10.7713269,15.1586342 C11.5413042,15.5436229 12.4712471,15.3927139 13.0799676,14.7839934 Z"
          fill="#000000"/>
    <path d="M14.1480759,6.00715131 L13.9566988,7.99797396 C12.4781389,7.8558405 11.0097207,8.36895892 9.93933983,9.43933983 C8.8724631,10.5062166 8.35911588,11.9685602 8.49664195,13.4426352 L6.50528978,13.6284215 C6.31304559,11.5678496 7.03283934,9.51741319 8.52512627,8.02512627 C10.0223249,6.52792766 12.0812426,5.80846733 14.1480759,6.00715131 Z M14.4980938,2.02230302 L14.313049,4.01372424 C11.6618299,3.76737046 9.03000738,4.69181803 7.1109127,6.6109127 C5.19447112,8.52735429 4.26985715,11.1545872 4.51274152,13.802405 L2.52110319,13.985098 C2.22450978,10.7517681 3.35562581,7.53777247 5.69669914,5.19669914 C8.04101739,2.85238089 11.2606138,1.72147333 14.4980938,2.02230302 Z"
          fill="#000000" fill-rule="nonzero" opacity="0.3"/>
    </g>
    </svg><!--end::Svg Icon--></span><span class="menu-text">Miscellaneous</span><i class="menu-hor-arrow"></i><i
                                                class="menu-arrow"></i></a>
                                                <div class="menu-submenu menu-submenu-classic menu-submenu-right">
                                                    <ul class="menu-subnav">
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/miscellaneous/kanban-board"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Kanban Board</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/miscellaneous/sticky-panels"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Sticky Panels</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/miscellaneous/blockui"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Block UI</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/miscellaneous/perfect-scrollbar"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Perfect Scrollbar</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/miscellaneous/treeview"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Tree View</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/miscellaneous/bootstrap-notify"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Bootstrap Notify</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/miscellaneous/toastr"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Toastr</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/miscellaneous/sweetalert2"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">SweetAlert2</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/miscellaneous/dual-listbox"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Dual Listbox</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/miscellaneous/session-timeout"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Session Timeout</span></a></li>
                                                        <li class="menu-item " aria-haspopup="true"><a
                                                            href="http://metro/features/miscellaneous/idle-timer"
                                                            class="menu-link "><i
                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                            class="menu-text">Idle Timer</span></a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="topbar">
                        <div class="dropdown">
                            <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
                                <form>
                                    <div class="d-flex flex-column pt-12 bgi-size-cover bgi-no-repeat rounded-top"
                                         style="background-image: url('http://metro/media/misc/bg-1.jpg')">

                                        <h4 class="d-flex flex-center rounded-top">
                                            <span class="text-white">User Notifications</span>
                                            <span class="btn btn-text btn-success btn-sm font-weight-bold btn-font-md ml-2">23 new</span>
                                        </h4>


                                        <ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-3x nav-tabs-line-transparent-white nav-tabs-line-active-border-success mt-3 px-8"
                                            role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active show" data-toggle="tab"
                                                   href="#topbar_notifications_notifications">Alerts</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab"
                                                   href="#topbar_notifications_events">Events</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#topbar_notifications_logs">Logs</a>
                                            </li>
                                        </ul>
                                    </div>


                                    <div class="tab-content">

                                        <div class="tab-pane active show p-8" id="topbar_notifications_notifications"
                                             role="tabpanel">

                                            <div class="scroll pr-7 mr-n7" data-scroll="true" data-height="300"
                                                 data-mobile-height="200">

                                                <div class="d-flex align-items-center mb-6">

                                                    <div class="symbol symbol-40 symbol-light-primary mr-5">
                <span class="symbol-label">
                    <span class="svg-icon svg-icon-lg svg-icon-primary"><!--begin::Svg Icon | path:media/svg/icons/Home/Library.svg--><svg
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <rect x="0" y="0" width="24" height="24"/>
    <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z"
          fill="#000000"/>
    <rect fill="#000000" opacity="0.3"
          transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) "
          x="16.3255682" y="2.94551858" width="3" height="18" rx="1"/>
    </g>
    </svg><!--end::Svg Icon--></span>
                </span>
                                                    </div>


                                                    <div class="d-flex flex-column font-weight-bold">
                                                        <a href="#"
                                                           class="text-dark text-hover-primary mb-1 font-size-lg">Briviba
                                                            SaaS</a>
                                                        <span class="text-muted">PHP, SQLite, Artisan CLIмм</span>
                                                    </div>
                                                </div>


                                                <div class="d-flex align-items-center mb-6">

                                                    <div class="symbol symbol-40 symbol-light-warning mr-5">
                <span class="symbol-label">
                    <span class="svg-icon svg-icon-lg svg-icon-warning"><!--begin::Svg Icon | path:media/svg/icons/Communication/Write.svg--><svg
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <rect x="0" y="0" width="24" height="24"/>
    <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
          fill="#000000" fill-rule="nonzero"
          transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) "/>
    <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
          fill="#000000" fill-rule="nonzero" opacity="0.3"/>
    </g>
    </svg><!--end::Svg Icon--></span>
                </span>
                                                    </div>


                                                    <div class="d-flex flex-column font-weight-bold">
                                                        <a href="#"
                                                           class="text-dark-75 text-hover-primary mb-1 font-size-lg">Briviba
                                                            SaaS</a>
                                                        <span class="text-muted">PHP, SQLite, Artisan CLIмм</span>
                                                    </div>
                                                </div>


                                                <div class="d-flex align-items-center mb-6">

                                                    <div class="symbol symbol-40 symbol-light-success mr-5">
                <span class="symbol-label">
                    <span class="svg-icon svg-icon-lg svg-icon-success"><!--begin::Svg Icon | path:media/svg/icons/Communication/Group-chat.svg--><svg
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <rect x="0" y="0" width="24" height="24"/>
    <path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z"
          fill="#000000"/>
    <path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z"
          fill="#000000" opacity="0.3"/>
    </g>
    </svg><!--end::Svg Icon--></span>
                </span>
                                                    </div>


                                                    <div class="d-flex flex-column font-weight-bold">
                                                        <a href="#"
                                                           class="text-dark text-hover-primary mb-1 font-size-lg">Briviba
                                                            SaaS</a>
                                                        <span class="text-muted">PHP, SQLite, Artisan CLIмм</span>
                                                    </div>
                                                </div>


                                                <div class="d-flex align-items-center mb-6">

                                                    <div class="symbol symbol-40 symbol-light-danger mr-5">
                <span class="symbol-label">
                    <span class="svg-icon svg-icon-lg svg-icon-danger"><!--begin::Svg Icon | path:media/svg/icons/General/Attachment2.svg--><svg
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <rect x="0" y="0" width="24" height="24"/>
    <path d="M11.7573593,15.2426407 L8.75735931,15.2426407 C8.20507456,15.2426407 7.75735931,15.6903559 7.75735931,16.2426407 C7.75735931,16.7949254 8.20507456,17.2426407 8.75735931,17.2426407 L11.7573593,17.2426407 L11.7573593,18.2426407 C11.7573593,19.3472102 10.8619288,20.2426407 9.75735931,20.2426407 L5.75735931,20.2426407 C4.65278981,20.2426407 3.75735931,19.3472102 3.75735931,18.2426407 L3.75735931,14.2426407 C3.75735931,13.1380712 4.65278981,12.2426407 5.75735931,12.2426407 L9.75735931,12.2426407 C10.8619288,12.2426407 11.7573593,13.1380712 11.7573593,14.2426407 L11.7573593,15.2426407 Z"
          fill="#000000" opacity="0.3"
          transform="translate(7.757359, 16.242641) rotate(-45.000000) translate(-7.757359, -16.242641) "/>
    <path d="M12.2426407,8.75735931 L15.2426407,8.75735931 C15.7949254,8.75735931 16.2426407,8.30964406 16.2426407,7.75735931 C16.2426407,7.20507456 15.7949254,6.75735931 15.2426407,6.75735931 L12.2426407,6.75735931 L12.2426407,5.75735931 C12.2426407,4.65278981 13.1380712,3.75735931 14.2426407,3.75735931 L18.2426407,3.75735931 C19.3472102,3.75735931 20.2426407,4.65278981 20.2426407,5.75735931 L20.2426407,9.75735931 C20.2426407,10.8619288 19.3472102,11.7573593 18.2426407,11.7573593 L14.2426407,11.7573593 C13.1380712,11.7573593 12.2426407,10.8619288 12.2426407,9.75735931 L12.2426407,8.75735931 Z"
          fill="#000000"
          transform="translate(16.242641, 7.757359) rotate(-45.000000) translate(-16.242641, -7.757359) "/>
    <path d="M5.89339828,3.42893219 C6.44568303,3.42893219 6.89339828,3.87664744 6.89339828,4.42893219 L6.89339828,6.42893219 C6.89339828,6.98121694 6.44568303,7.42893219 5.89339828,7.42893219 C5.34111353,7.42893219 4.89339828,6.98121694 4.89339828,6.42893219 L4.89339828,4.42893219 C4.89339828,3.87664744 5.34111353,3.42893219 5.89339828,3.42893219 Z M11.4289322,5.13603897 C11.8194565,5.52656326 11.8194565,6.15972824 11.4289322,6.55025253 L10.0147186,7.96446609 C9.62419433,8.35499039 8.99102936,8.35499039 8.60050506,7.96446609 C8.20998077,7.5739418 8.20998077,6.94077682 8.60050506,6.55025253 L10.0147186,5.13603897 C10.4052429,4.74551468 11.0384079,4.74551468 11.4289322,5.13603897 Z M0.600505063,5.13603897 C0.991029355,4.74551468 1.62419433,4.74551468 2.01471863,5.13603897 L3.42893219,6.55025253 C3.81945648,6.94077682 3.81945648,7.5739418 3.42893219,7.96446609 C3.0384079,8.35499039 2.40524292,8.35499039 2.01471863,7.96446609 L0.600505063,6.55025253 C0.209980772,6.15972824 0.209980772,5.52656326 0.600505063,5.13603897 Z"
          fill="#000000" opacity="0.3"
          transform="translate(6.014719, 5.843146) rotate(-45.000000) translate(-6.014719, -5.843146) "/>
    <path d="M17.9142136,15.4497475 C18.4664983,15.4497475 18.9142136,15.8974627 18.9142136,16.4497475 L18.9142136,18.4497475 C18.9142136,19.0020322 18.4664983,19.4497475 17.9142136,19.4497475 C17.3619288,19.4497475 16.9142136,19.0020322 16.9142136,18.4497475 L16.9142136,16.4497475 C16.9142136,15.8974627 17.3619288,15.4497475 17.9142136,15.4497475 Z M23.4497475,17.1568542 C23.8402718,17.5473785 23.8402718,18.1805435 23.4497475,18.5710678 L22.0355339,19.9852814 C21.6450096,20.3758057 21.0118446,20.3758057 20.6213203,19.9852814 C20.2307961,19.5947571 20.2307961,18.9615921 20.6213203,18.5710678 L22.0355339,17.1568542 C22.4260582,16.76633 23.0592232,16.76633 23.4497475,17.1568542 Z M12.6213203,17.1568542 C13.0118446,16.76633 13.6450096,16.76633 14.0355339,17.1568542 L15.4497475,18.5710678 C15.8402718,18.9615921 15.8402718,19.5947571 15.4497475,19.9852814 C15.0592232,20.3758057 14.4260582,20.3758057 14.0355339,19.9852814 L12.6213203,18.5710678 C12.2307961,18.1805435 12.2307961,17.5473785 12.6213203,17.1568542 Z"
          fill="#000000" opacity="0.3"
          transform="translate(18.035534, 17.863961) scale(1, -1) rotate(45.000000) translate(-18.035534, -17.863961) "/>
    </g>
    </svg><!--end::Svg Icon--></span>
                </span>
                                                    </div>


                                                    <div class="d-flex flex-column font-weight-bold">
                                                        <a href="#"
                                                           class="text-dark text-hover-primary mb-1 font-size-lg">Briviba
                                                            SaaS</a>
                                                        <span class="text-muted">PHP, SQLite, Artisan CLIмм</span>
                                                    </div>
                                                </div>


                                                <div class="d-flex align-items-center mb-2">

                                                    <div class="symbol symbol-40 symbol-light-info mr-5">
                <span class="symbol-label">
                    <span class="svg-icon svg-icon-lg  svg-icon-info"><!--begin::Svg Icon | path:media/svg/icons/Communication/Shield-user.svg--><svg
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <rect x="0" y="0" width="24" height="24"/>
    <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z"
          fill="#000000" opacity="0.3"/>
    <path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z"
          fill="#000000" opacity="0.3"/>
    <path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z"
          fill="#000000" opacity="0.3"/>
    </g>
    </svg><!--end::Svg Icon--></span>
                </span>
                                                    </div>


                                                    <div class="d-flex flex-column font-weight-bold">
                                                        <a href="#"
                                                           class="text-dark text-hover-primary mb-1 font-size-lg">Briviba
                                                            SaaS</a>
                                                        <span class="text-muted">PHP, SQLite, Artisan CLIмм</span>
                                                    </div>
                                                </div>


                                                <div class="d-flex align-items-center mb-2">

                                                    <div class="symbol symbol-40 symbol-light-info mr-5">
                <span class="symbol-label">
                    <span class="svg-icon svg-icon-lg  svg-icon-info"><!--begin::Svg Icon | path:media/svg/icons/Communication/Mail-notification.svg--><svg
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <rect x="0" y="0" width="24" height="24"/>
    <path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z"
          fill="#000000"/>
    <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5"/>
    </g>
    </svg><!--end::Svg Icon--></span>
                </span>
                                                    </div>


                                                    <div class="d-flex flex-column font-weight-bold">
                                                        <a href="#"
                                                           class="text-dark text-hover-primary mb-1 font-size-lg">Briviba
                                                            SaaS</a>
                                                        <span class="text-muted">PHP, SQLite, Artisan CLIмм</span>
                                                    </div>
                                                </div>


                                                <div class="d-flex align-items-center mb-2">

                                                    <div class="symbol symbol-40 symbol-light-info mr-5">
                <span class="symbol-label">
                    <span class="svg-icon svg-icon-lg  svg-icon-info"><!--begin::Svg Icon | path:media/svg/icons/Design/Bucket.svg--><svg
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <rect x="0" y="0" width="24" height="24"/>
    <path d="M5,5 L5,15 C5,15.5948613 5.25970314,16.1290656 5.6719139,16.4954176 C5.71978107,16.5379595 5.76682388,16.5788906 5.81365532,16.6178662 C5.82524933,16.6294602 15,7.45470952 15,7.45470952 C15,6.9962515 15,6.17801499 15,5 L5,5 Z M5,3 L15,3 C16.1045695,3 17,3.8954305 17,5 L17,15 C17,17.209139 15.209139,19 13,19 L7,19 C4.790861,19 3,17.209139 3,15 L3,5 C3,3.8954305 3.8954305,3 5,3 Z"
          fill="#000000" fill-rule="nonzero"
          transform="translate(10.000000, 11.000000) rotate(-315.000000) translate(-10.000000, -11.000000) "/>
    <path d="M20,22 C21.6568542,22 23,20.6568542 23,19 C23,17.8954305 22,16.2287638 20,14 C18,16.2287638 17,17.8954305 17,19 C17,20.6568542 18.3431458,22 20,22 Z"
          fill="#000000" opacity="0.3"/>
    </g>
    </svg><!--end::Svg Icon--></span>
                </span>
                                                    </div>


                                                    <div class="d-flex flex-column font-weight-bold">
                                                        <a href="#"
                                                           class="text-dark text-hover-primary mb-1 font-size-lg">Briviba
                                                            SaaS</a>
                                                        <span class="text-muted">PHP, SQLite, Artisan CLIмм</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="tab-pane" id="topbar_notifications_events" role="tabpanel">

                                            <div class="navi navi-hover scroll my-4" data-scroll="true"
                                                 data-height="300" data-mobile-height="200">

                                                <a href="#" class="navi-item">
                                                    <div class="navi-link">
                                                        <div class="navi-icon mr-2">
                                                            <i class="flaticon2-line-chart text-success"></i>
                                                        </div>
                                                        <div class="navi-text">
                                                            <div class="font-weight-bold">
                                                                New report has been received
                                                            </div>
                                                            <div class="text-muted">
                                                                23 hrs ago
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>


                                                <a href="#" class="navi-item">
                                                    <div class="navi-link">
                                                        <div class="navi-icon mr-2">
                                                            <i class="flaticon2-paper-plane text-danger"></i>
                                                        </div>
                                                        <div class="navi-text">
                                                            <div class="font-weight-bold">
                                                                Finance report has been generated
                                                            </div>
                                                            <div class="text-muted">
                                                                25 hrs ago
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>


                                                <a href="#" class="navi-item">
                                                    <div class="navi-link">
                                                        <div class="navi-icon mr-2">
                                                            <i class="flaticon2-user flaticon2-line- text-success"></i>
                                                        </div>
                                                        <div class="navi-text">
                                                            <div class="font-weight-bold">
                                                                New order has been received
                                                            </div>
                                                            <div class="text-muted">
                                                                2 hrs ago
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>


                                                <a href="#" class="navi-item">
                                                    <div class="navi-link">
                                                        <div class="navi-icon mr-2">
                                                            <i class="flaticon2-pin text-primary"></i>
                                                        </div>
                                                        <div class="navi-text">
                                                            <div class="font-weight-bold">
                                                                New customer is registered
                                                            </div>
                                                            <div class="text-muted">
                                                                3 hrs ago
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>


                                                <a href="#" class="navi-item">
                                                    <div class="navi-link">
                                                        <div class="navi-icon mr-2">
                                                            <i class="flaticon2-sms text-danger"></i>
                                                        </div>
                                                        <div class="navi-text">
                                                            <div class="font-weight-bold">
                                                                Application has been approved
                                                            </div>
                                                            <div class="text-muted">
                                                                3 hrs ago
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>


                                                <a href="#" class="navi-item">
                                                    <div class="navi-link">
                                                        <div class="navi-icon mr-2">
                                                            <i class="flaticon2-pie-chart-3 text-warning"></i>
                                                        </div>
                                                        <div class="navinavinavi-text">
                                                            <div class="font-weight-bold">
                                                                New file has been uploaded
                                                            </div>
                                                            <div class="text-muted">
                                                                5 hrs ago
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>


                                                <a href="#" class="navi-item">
                                                    <div class="navi-link">
                                                        <div class="navi-icon mr-2">
                                                            <i class="flaticon-pie-chart-1 text-info"></i>
                                                        </div>
                                                        <div class="navi-text">
                                                            <div class="font-weight-bold">
                                                                New user feedback received
                                                            </div>
                                                            <div class="text-muted">
                                                                8 hrs ago
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>


                                                <a href="#" class="navi-item">
                                                    <div class="navi-link">
                                                        <div class="navi-icon mr-2">
                                                            <i class="flaticon2-settings text-success"></i>
                                                        </div>
                                                        <div class="navi-text">
                                                            <div class="font-weight-bold">
                                                                System reboot has been successfully completed
                                                            </div>
                                                            <div class="text-muted">
                                                                12 hrs ago
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>


                                                <a href="#" class="navi-item">
                                                    <div class="navi-link">
                                                        <div class="navi-icon mr-2">
                                                            <i class="flaticon-safe-shield-protection text-primary"></i>
                                                        </div>
                                                        <div class="navi-text">
                                                            <div class="font-weight-bold">
                                                                New order has been placed
                                                            </div>
                                                            <div class="text-muted">
                                                                15 hrs ago
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>


                                                <a href="#" class="navi-item">
                                                    <div class="navi-link">
                                                        <div class="navi-icon mr-2">
                                                            <i class="flaticon2-notification text-primary"></i>
                                                        </div>
                                                        <div class="navi-text">
                                                            <div class="font-weight-bold">
                                                                Company meeting canceled
                                                            </div>
                                                            <div class="text-muted">
                                                                19 hrs ago
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>


                                                <a href="#" class="navi-item">
                                                    <div class="navi-link">
                                                        <div class="navi-icon mr-2">
                                                            <i class="flaticon2-fax text-success"></i>
                                                        </div>
                                                        <div class="navi-text">
                                                            <div class="font-weight-bold">
                                                                New report has been received
                                                            </div>
                                                            <div class="text-muted">
                                                                23 hrs ago
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>


                                                <a href="#" class="navi-item">
                                                    <div class="navi-link">
                                                        <div class="navi-icon mr-2">
                                                            <i class="flaticon-download-1 text-danger"></i>
                                                        </div>
                                                        <div class="navi-text">
                                                            <div class="font-weight-bold">
                                                                Finance report has been generated
                                                            </div>
                                                            <div class="text-muted">
                                                                25 hrs ago
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>


                                                <a href="#" class="navi-item">
                                                    <div class="navi-link">
                                                        <div class="navi-icon mr-2">
                                                            <i class="flaticon-security text-warning"></i>
                                                        </div>
                                                        <div class="navi-text">
                                                            <div class="font-weight-bold">
                                                                New customer comment recieved
                                                            </div>
                                                            <div class="text-muted">
                                                                2 days ago
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>


                                                <a href="#" class="navi-item">
                                                    <div class="navi-link">
                                                        <div class="navi-icon mr-2">
                                                            <i class="flaticon2-analytics-1 text-success"></i>
                                                        </div>
                                                        <div class="navi-text">
                                                            <div class="font-weight-bold">
                                                                New customer is registered
                                                            </div>
                                                            <div class="text-muted">
                                                                3 days ago
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>


                                        <div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">

                                            <div class="d-flex flex-center text-center text-muted min-h-200px">
                                                All caught up!
                                                <br/>
                                                No new notifications.
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="topbar-item" @click="menuToogle">
                            <div class="btn btn-icon w-auto btn-clean d-flex align-items-center btn-lg px-2"
                                 id="kt_quick_user_toggle">
                                <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
<!--                                <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">Sean</span>-->
                                <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">{{ $page.props.auth.user.name}}</span>
                                <span class="symbol symbol-35 symbol-light-success">
                    <span class="symbol-label font-size-h5 font-weight-bold">S</span>
                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--        <Footer />-->
    </div>

        <UserMenu/>

    <div id="kt_quick_panel" class="offcanvas offcanvas-right pt-5 pb-10">

        <div class="offcanvas-header offcanvas-header-navs d-flex align-items-center justify-content-between mb-5">
            <ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-3x nav-tabs-primary flex-grow-1 px-10"
                role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#kt_quick_panel_logs">Audit Logs</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_quick_panel_notifications">Notifications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_quick_panel_settings">Settings</a>
                </li>
            </ul>
            <div class="offcanvas-close mt-n1 pr-5">
                <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_panel_close">
                    <i class="ki ki-close icon-xs text-muted"></i>
                </a>
            </div>
        </div>


        <div class="offcanvas-content px-10">
            <div class="tab-content">

                <div class="tab-pane fade show pt-3 pr-5 mr-n5 active" id="kt_quick_panel_logs" role="tabpanel">

                    <div class="mb-15">
                        <h5 class="font-weight-bold mb-5">System Messages</h5>

                        <div class="d-flex align-items-center flex-wrap mb-5">
                            <div class="symbol symbol-50 symbol-light mr-5">
							<span class="symbol-label">
								<img src="#" class="h-50 align-self-center"
                                     alt=""/>
							</span>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#" class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">Top
                                    Authors</a>
                                <span class="text-muted font-weight-bold">Most Successful Fellas</span>
                            </div>
                            <span class="btn btn-sm btn-light font-weight-bolder py-1 my-lg-0 my-2 text-dark-50">+82$</span>
                        </div>


                        <div class="d-flex align-items-center flex-wrap mb-5">
                            <div class="symbol symbol-50 symbol-light mr-5">
							<span class="symbol-label">
								<img src="#" class="h-50 align-self-center"
                                     alt=""/>
							</span>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#" class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">Popular
                                    Authors</a>
                                <span class="text-muted font-weight-bold">Most Successful Fellas</span>
                            </div>
                            <span class="btn btn-sm btn-light font-weight-bolder  my-lg-0 my-2 py-1 text-dark-50">+280$</span>
                        </div>


                        <div class="d-flex align-items-center flex-wrap mb-5">
                            <div class="symbol symbol-50 symbol-light mr-5">
							<span class="symbol-label">
								<img src="#" class="h-50 align-self-center"
                                     alt=""/>
							</span>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#" class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">New
                                    Users</a>
                                <span class="text-muted font-weight-bold">Most Successful Fellas</span>
                            </div>
                            <span class="btn btn-sm btn-light font-weight-bolder  my-lg-0 my-2 py-1 text-dark-50">+4500$</span>
                        </div>


                        <div class="d-flex align-items-center flex-wrap mb-5">
                            <div class="symbol symbol-50 symbol-light mr-5">
							<span class="symbol-label">
								<img src="#" class="h-50 align-self-center"
                                     alt=""/>
							</span>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#" class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">Active
                                    Customers</a>
                                <span class="text-muted font-weight-bold">Most Successful Fellas</span>
                            </div>
                            <span class="btn btn-sm btn-light font-weight-bolder my-lg-0 my-2 py-1 text-dark-50">+4500$</span>
                        </div>


                        <div class="d-flex align-items-center flex-wrap">
                            <div class="symbol symbol-50 symbol-light mr-5">
							<span class="symbol-label">
								<img src="#"
                                     class="h-50 align-self-center" alt=""/>
							</span>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#" class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">Bestseller
                                    Theme</a>
                                <span class="text-muted font-weight-bold">Most Successful Fellas</span>
                            </div>
                            <span class="btn btn-sm btn-light font-weight-bolder my-lg-0 my-2 py-1 text-dark-50">+4500$</span>
                        </div>
                    </div>


                    <div class="mb-5">
                        <h5 class="font-weight-bold mb-5">Notifications</h5>


                        <div class="d-flex align-items-center bg-light-warning rounded p-5 mb-5">
			            <span class="svg-icon svg-icon-warning mr-5">
			                <span class="svg-icon svg-icon-lg"><!--begin::Svg Icon | path:media/svg/icons/Home/Library.svg--><svg
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z"
              fill="#000000"/>
        <rect fill="#000000" opacity="0.3"
              transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) "
              x="16.3255682" y="2.94551858" width="3" height="18" rx="1"/>
    </g>
</svg><!--end::Svg Icon--></span>
			            </span>

                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#" class="font-weight-normal text-dark-75 text-hover-primary font-size-lg mb-1">Another
                                    purpose persuade</a>
                                <span class="text-muted font-size-sm">Due in 2 Days</span>
                            </div>

                            <span class="font-weight-bolder text-warning py-1 font-size-lg">+28%</span>
                        </div>


                        <div class="d-flex align-items-center bg-light-success rounded p-5 mb-5">
			            <span class="svg-icon svg-icon-success mr-5">
			                <span class="svg-icon svg-icon-lg"><!--begin::Svg Icon | path:media/svg/icons/Communication/Write.svg--><svg
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
              fill="#000000" fill-rule="nonzero"
              transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) "/>
        <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
              fill="#000000" fill-rule="nonzero" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span>
			            </span>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#" class="font-weight-normal text-dark-75 text-hover-primary font-size-lg mb-1">Would
                                    be to people</a>
                                <span class="text-muted font-size-sm">Due in 2 Days</span>
                            </div>

                            <span class="font-weight-bolder text-success py-1 font-size-lg">+50%</span>
                        </div>


                        <div class="d-flex align-items-center bg-light-danger rounded p-5 mb-5">
			            <span class="svg-icon svg-icon-danger mr-5">
			                <span class="svg-icon svg-icon-lg"><!--begin::Svg Icon | path:media/svg/icons/Communication/Group-chat.svg--><svg
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z"
              fill="#000000"/>
        <path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z"
              fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span>
			            </span>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#" class="font-weight-normel text-dark-75 text-hover-primary font-size-lg mb-1">Purpose
                                    would be to persuade</a>
                                <span class="text-muted font-size-sm">Due in 2 Days</span>
                            </div>

                            <span class="font-weight-bolder text-danger py-1 font-size-lg">-27%</span>
                        </div>


                        <div class="d-flex align-items-center bg-light-info rounded p-5">
			            <span class="svg-icon svg-icon-info mr-5">
			                <span class="svg-icon svg-icon-lg"><!--begin::Svg Icon | path:media/svg/icons/General/Attachment2.svg--><svg
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M11.7573593,15.2426407 L8.75735931,15.2426407 C8.20507456,15.2426407 7.75735931,15.6903559 7.75735931,16.2426407 C7.75735931,16.7949254 8.20507456,17.2426407 8.75735931,17.2426407 L11.7573593,17.2426407 L11.7573593,18.2426407 C11.7573593,19.3472102 10.8619288,20.2426407 9.75735931,20.2426407 L5.75735931,20.2426407 C4.65278981,20.2426407 3.75735931,19.3472102 3.75735931,18.2426407 L3.75735931,14.2426407 C3.75735931,13.1380712 4.65278981,12.2426407 5.75735931,12.2426407 L9.75735931,12.2426407 C10.8619288,12.2426407 11.7573593,13.1380712 11.7573593,14.2426407 L11.7573593,15.2426407 Z"
              fill="#000000" opacity="0.3"
              transform="translate(7.757359, 16.242641) rotate(-45.000000) translate(-7.757359, -16.242641) "/>
        <path d="M12.2426407,8.75735931 L15.2426407,8.75735931 C15.7949254,8.75735931 16.2426407,8.30964406 16.2426407,7.75735931 C16.2426407,7.20507456 15.7949254,6.75735931 15.2426407,6.75735931 L12.2426407,6.75735931 L12.2426407,5.75735931 C12.2426407,4.65278981 13.1380712,3.75735931 14.2426407,3.75735931 L18.2426407,3.75735931 C19.3472102,3.75735931 20.2426407,4.65278981 20.2426407,5.75735931 L20.2426407,9.75735931 C20.2426407,10.8619288 19.3472102,11.7573593 18.2426407,11.7573593 L14.2426407,11.7573593 C13.1380712,11.7573593 12.2426407,10.8619288 12.2426407,9.75735931 L12.2426407,8.75735931 Z"
              fill="#000000"
              transform="translate(16.242641, 7.757359) rotate(-45.000000) translate(-16.242641, -7.757359) "/>
        <path d="M5.89339828,3.42893219 C6.44568303,3.42893219 6.89339828,3.87664744 6.89339828,4.42893219 L6.89339828,6.42893219 C6.89339828,6.98121694 6.44568303,7.42893219 5.89339828,7.42893219 C5.34111353,7.42893219 4.89339828,6.98121694 4.89339828,6.42893219 L4.89339828,4.42893219 C4.89339828,3.87664744 5.34111353,3.42893219 5.89339828,3.42893219 Z M11.4289322,5.13603897 C11.8194565,5.52656326 11.8194565,6.15972824 11.4289322,6.55025253 L10.0147186,7.96446609 C9.62419433,8.35499039 8.99102936,8.35499039 8.60050506,7.96446609 C8.20998077,7.5739418 8.20998077,6.94077682 8.60050506,6.55025253 L10.0147186,5.13603897 C10.4052429,4.74551468 11.0384079,4.74551468 11.4289322,5.13603897 Z M0.600505063,5.13603897 C0.991029355,4.74551468 1.62419433,4.74551468 2.01471863,5.13603897 L3.42893219,6.55025253 C3.81945648,6.94077682 3.81945648,7.5739418 3.42893219,7.96446609 C3.0384079,8.35499039 2.40524292,8.35499039 2.01471863,7.96446609 L0.600505063,6.55025253 C0.209980772,6.15972824 0.209980772,5.52656326 0.600505063,5.13603897 Z"
              fill="#000000" opacity="0.3"
              transform="translate(6.014719, 5.843146) rotate(-45.000000) translate(-6.014719, -5.843146) "/>
        <path d="M17.9142136,15.4497475 C18.4664983,15.4497475 18.9142136,15.8974627 18.9142136,16.4497475 L18.9142136,18.4497475 C18.9142136,19.0020322 18.4664983,19.4497475 17.9142136,19.4497475 C17.3619288,19.4497475 16.9142136,19.0020322 16.9142136,18.4497475 L16.9142136,16.4497475 C16.9142136,15.8974627 17.3619288,15.4497475 17.9142136,15.4497475 Z M23.4497475,17.1568542 C23.8402718,17.5473785 23.8402718,18.1805435 23.4497475,18.5710678 L22.0355339,19.9852814 C21.6450096,20.3758057 21.0118446,20.3758057 20.6213203,19.9852814 C20.2307961,19.5947571 20.2307961,18.9615921 20.6213203,18.5710678 L22.0355339,17.1568542 C22.4260582,16.76633 23.0592232,16.76633 23.4497475,17.1568542 Z M12.6213203,17.1568542 C13.0118446,16.76633 13.6450096,16.76633 14.0355339,17.1568542 L15.4497475,18.5710678 C15.8402718,18.9615921 15.8402718,19.5947571 15.4497475,19.9852814 C15.0592232,20.3758057 14.4260582,20.3758057 14.0355339,19.9852814 L12.6213203,18.5710678 C12.2307961,18.1805435 12.2307961,17.5473785 12.6213203,17.1568542 Z"
              fill="#000000" opacity="0.3"
              transform="translate(18.035534, 17.863961) scale(1, -1) rotate(45.000000) translate(-18.035534, -17.863961) "/>
    </g>
</svg><!--end::Svg Icon--></span>
			            </span>

                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#" class="font-weight-normel text-dark-75 text-hover-primary font-size-lg mb-1">The
                                    best product</a>
                                <span class="text-muted font-size-sm">Due in 2 Days</span>
                            </div>

                            <span class="font-weight-bolder text-info py-1 font-size-lg">+8%</span>
                        </div>
                    </div>

                </div>


                <div class="tab-pane fade pt-2 pr-5 mr-n5" id="kt_quick_panel_notifications" role="tabpanel">

                    <div class="navi navi-icon-circle navi-spacer-x-0">

                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label"><i class="flaticon-bell text-success icon-lg"></i></div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">
                                        5 new user generated report
                                    </div>
                                    <div class="text-muted">
                                        Reports based on sales
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label"><i class="flaticon2-box text-danger icon-lg"></i></div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold  font-size-lg">
                                        2 new items submited
                                    </div>
                                    <div class="text-muted">
                                        by Grog John
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label"><i class="flaticon-psd text-primary icon-lg"></i></div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold  font-size-lg">
                                        79 PSD files generated
                                    </div>
                                    <div class="text-muted">
                                        Reports based on sales
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label"><i class="flaticon2-supermarket text-warning icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold  font-size-lg">
                                        $2900 worth producucts sold
                                    </div>
                                    <div class="text-muted">
                                        Total 234 items
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label"><i class="flaticon-paper-plane-1 text-success icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold  font-size-lg">
                                        4.5h-avarage response time
                                    </div>
                                    <div class="text-muted">
                                        Fostest is Barry
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label"><i
                                        class="flaticon-safe-shield-protection text-danger icon-lg"></i></div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold  font-size-lg">
                                        3 Defence alerts
                                    </div>
                                    <div class="text-muted">
                                        40% less alerts thar last week
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label"><i class="flaticon-notepad text-primary icon-lg"></i></div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold  font-size-lg">
                                        Avarage 4 blog posts per author
                                    </div>
                                    <div class="text-muted">
                                        Most posted 12 time
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label"><i class="flaticon-users-1 text-warning icon-lg"></i></div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold  font-size-lg">
                                        16 authors joined last week
                                    </div>
                                    <div class="text-muted">
                                        9 photodrapehrs, 7 designer
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label"><i class="flaticon2-box text-info icon-lg"></i></div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold  font-size-lg">
                                        2 new items have been submited
                                    </div>
                                    <div class="text-muted">
                                        by Grog John
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label"><i class="flaticon2-download text-success icon-lg"></i></div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold  font-size-lg">
                                        2.8 GB-total downloads size
                                    </div>
                                    <div class="text-muted">
                                        Mostly PSD end AL concepts
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label"><i class="flaticon2-supermarket text-danger icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold  font-size-lg">
                                        $2900 worth producucts sold
                                    </div>
                                    <div class="text-muted">
                                        Total 234 items
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label"><i class="flaticon-bell text-primary icon-lg"></i></div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold  font-size-lg">
                                        7 new user generated report
                                    </div>
                                    <div class="text-muted">
                                        Reports based on sales
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label"><i class="flaticon-paper-plane-1 text-success icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold  font-size-lg">
                                        4.5h-avarage response time
                                    </div>
                                    <div class="text-muted">
                                        Fostest is Barry
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>


                <div class="tab-pane fade pt-3 pr-5 mr-n5" id="kt_quick_panel_settings" role="tabpanel">
                    <form class="form">

                        <div>
                            <h5 class="font-weight-bold mb-3">Customer Care</h5>
                            <div class="form-group mb-0 row">
                                <label class="col-8 col-form-label">Enable Notifications:</label>
                                <div class="col-4 text-right">
								<span class="switch switch-success switch-sm">
									<label>
										<input type="checkbox" checked="checked" name="select"/>
										<span></span>
									</label>
								</span>
                                </div>
                            </div>
                            <div class="form-group mb-0 row">
                                <label class="col-8 col-form-label">Enable Case Tracking:</label>
                                <div class="col-4 text-right">
								<span class="switch switch-success switch-sm">
									<label>
										<input type="checkbox" name="quick_panel_notifications_2"/>
										<span></span>
									</label>
								</span>
                                </div>
                            </div>
                            <div class="form-group mb-0 row">
                                <label class="col-8 col-form-label">Support Portal:</label>
                                <div class="col-4 text-right">
								<span class="switch switch-success switch-sm">
									<label>
										<input type="checkbox" checked="checked" name="select"/>
										<span></span>
									</label>
								</span>
                                </div>
                            </div>
                        </div>

                        <div class="separator separator-dashed my-6"></div>


                        <div class="pt-2">
                            <h5 class="font-weight-bold mb-3">Reports</h5>
                            <div class="form-group mb-0 row">
                                <label class="col-8 col-form-label">Generate Reports:</label>
                                <div class="col-4 text-right">
								<span class="switch switch-sm switch-danger">
									<label>
										<input type="checkbox" checked="checked" name="select"/>
										<span></span>
									</label>
								</span>
                                </div>
                            </div>
                            <div class="form-group mb-0 row">
                                <label class="col-8 col-form-label">Enable Report Export:</label>
                                <div class="col-4 text-right">
								<span class="switch switch-sm switch-danger">
									<label>
										<input type="checkbox" name="select"/>
										<span></span>
									</label>
								</span>
                                </div>
                            </div>
                            <div class="form-group mb-0 row">
                                <label class="col-8 col-form-label">Allow Data Collection:</label>
                                <div class="col-4 text-right">
								<span class="switch switch-sm switch-danger">
									<label>
										<input type="checkbox" checked="checked" name="select"/>
										<span></span>
									</label>
								</span>
                                </div>
                            </div>
                        </div>

                        <div class="separator separator-dashed my-6"></div>


                        <div class="pt-2">
                            <h5 class="font-weight-bold mb-3">Memebers</h5>
                            <div class="form-group mb-0 row">
                                <label class="col-8 col-form-label">Enable Member singup:</label>
                                <div class="col-4 text-right">
								<span class="switch switch-sm switch-primary">
									<label>
										<input type="checkbox" checked="checked" name="select"/>
										<span></span>
									</label>
								</span>
                                </div>
                            </div>
                            <div class="form-group mb-0 row">
                                <label class="col-8 col-form-label">Allow User Feedbacks:</label>
                                <div class="col-4 text-right">
								<span class="switch switch-sm switch-primary">
									<label>
										<input type="checkbox" name="select"/>
										<span></span>
									</label>
								</span>
                                </div>
                            </div>
                            <div class="form-group mb-0 row">
                                <label class="col-8 col-form-label">Enable Customer Portal:</label>
                                <div class="col-4 text-right">
								<span class="switch switch-sm switch-primary">
									<label>
										<input type="checkbox" checked="checked" name="select"/>
										<span></span>
									</label>
								</span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-sticky modal-sticky-bottom-right" id="kt_chat_modal" role="dialog" data-backdrop="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="card card-custom">

                    <div class="card-header align-items-center px-4 py-3">
                        <div class="text-left flex-grow-1">

                            <div class="dropdown dropdown-inline">
                                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="svg-icon svg-icon-lg"><!--begin::Svg Icon | path:media/svg/icons/Communication/Add-user.svg--><svg
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
              fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
              fill="#000000" fill-rule="nonzero"/>
    </g>
</svg><!--end::Svg Icon--></span>
                                </button>
                                <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-md">

                                    <ul class="navi navi-hover py-5">
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon"><i class="navi-icon flaticon2-group"></i></span>
                                                <span class="navi-text">New Group</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon"><i class="flaticon2-open-text-book"></i></span>
                                                <span class="navi-text">Contacts</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon"><i class="navi-icon flaticon2-rocket-1"></i></span>
                                                <span class="navi-text">Groups</span>
                                                <span class="navi-link-badge">
                                                <span class="label label-primary label-inline">new</span>
                                            </span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon"><i class="navi-icon flaticon2-bell-2"></i></span>
                                                <span class="navi-text">Calls</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon"><i class="navi-icon flaticon2-dashboard"></i></span>
                                                <span class="navi-text">Settings</span>
                                            </a>
                                        </li>

                                        <li class="navi-separator my-3"></li>

                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon"><i class="navi-icon flaticon2-protected"></i></span>
                                                <span class="navi-text">Help</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon"><i class="navi-icon flaticon2-bell-2"></i></span>
                                                <span class="navi-text">Privacy</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="text-center flex-grow-1">
                            <div class="text-dark-75 font-weight-bold font-size-h5">Matt Pears</div>
                            <div>
                                <span class="label label-dot label-success"></span>
                                <span class="font-weight-bold text-muted font-size-sm">Active</span>
                            </div>
                        </div>
                        <div class="text-right flex-grow-1">
                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-dismiss="modal">
                                <i class="ki ki-close icon-1x"></i>
                            </button>
                        </div>
                    </div>


                    <div class="card-body">

                        <div class="scroll scroll-pull" data-height="400" data-mobile-height="350">

                            <div class="messages">

                                <div class="d-flex flex-column mb-5 align-items-start">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-circle symbol-40 mr-3">
                                            <img alt="Pic" src="#"/>
                                        </div>
                                        <div>
                                            <a href="#"
                                               class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt
                                                Pears</a>
                                            <span class="text-muted font-size-sm">2 Hours</span>
                                        </div>
                                    </div>
                                    <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold text-left max-w-400px">
                                        How likely are you to recommend our company
                                        to your friends and family?
                                    </div>
                                </div>


                                <div class="d-flex flex-column mb-5 align-items-end">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <span class="text-muted font-size-sm">3 minutes</span>
                                            <a href="#"
                                               class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                        </div>
                                        <div class="symbol symbol-circle symbol-40 ml-3">
                                            <img alt="Pic" src="#"/>
                                        </div>
                                    </div>
                                    <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold text-right max-w-400px">
                                        Hey there, we’re just writing to let you know
                                        that you’ve been subscribed to a repository on GitHub.
                                    </div>
                                </div>

                                <div class="d-flex flex-column mb-5 align-items-start">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-circle symbol-40 mr-3">
                                            <img alt="Pic" :src="'/template/media/users/300_21.jpg'"/>
                                        </div>
                                        <div>
                                            <a href="#"
                                               class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt
                                                Pears</a>
                                            <span class="text-muted font-size-sm">40 seconds</span>
                                        </div>
                                    </div>
                                    <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold text-left max-w-400px">
                                        Ok, Understood!
                                    </div>
                                </div>

                                <div class="d-flex flex-column mb-5 align-items-end">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <span class="text-muted font-size-sm">Just now</span>
                                            <a href="#"
                                               class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                        </div>
                                        <div class="symbol symbol-circle symbol-40 ml-3">
<!--                                            <img alt="Pic" src="http://metro/media/users/300_21.jpg"/>-->
                                        </div>
                                    </div>
                                    <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold text-right max-w-400px">
                                        You’ll receive notifications for all issues, pull requests!
                                    </div>
                                </div>


                                <div class="d-flex flex-column mb-5 align-items-start">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-circle symbol-40 mr-3">
                                            <img alt="Pic" :src="'/template/media/users/300_12.jpg'"/>
                                        </div>
                                        <div>
                                            <a href="#"
                                               class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt
                                                Pears</a>
                                            <span class="text-muted font-size-sm">40 seconds</span>
                                        </div>
                                    </div>
                                    <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold text-left max-w-400px">
                                        You can unwatch this repository immediately by clicking here: <a href="#">https://github.com</a>
                                    </div>
                                </div>


                                <div class="d-flex flex-column mb-5 align-items-end">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <span class="text-muted font-size-sm">Just now</span>
                                            <a href="#"
                                               class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                        </div>
                                        <div class="symbol symbol-circle symbol-40 ml-3">
                                            <img alt="Pic" :src="'/template/media/users/300_21.jpg'"/>
                                        </div>
                                    </div>
                                    <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold text-right max-w-400px">
                                        Discover what students who viewed Learn Figma - UI/UX Design. Essential Training
                                        also viewed
                                    </div>
                                </div>


                                <div class="d-flex flex-column mb-5 align-items-start">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-circle symbol-40 mr-3">
<!--                                            <img alt="Pic" src="http://metro/media/users/300_12.jpg"/>-->
                                        </div>
                                        <div>
                                            <a href="#"
                                               class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt
                                                Pears</a>
                                            <span class="text-muted font-size-sm">40 seconds</span>
                                        </div>
                                    </div>
                                    <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold text-left max-w-400px">
                                        Most purchased Business courses during this sale!
                                    </div>
                                </div>


                                <div class="d-flex flex-column mb-5 align-items-end">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <span class="text-muted font-size-sm">Just now</span>
                                            <a href="#"
                                               class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                        </div>
                                        <div class="symbol symbol-circle symbol-40 ml-3">
<!--                                            <img alt="Pic" src="http://metro/media/users/300_21.jpg"/>-->
                                        </div>
                                    </div>
                                    <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold text-right max-w-400px">
                                        Company BBQ to celebrate the last quater achievements and goals. Food and drinks
                                        provided
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card-footer align-items-center">

                        <textarea class="form-control border-0 p-0" rows="2" placeholder="Type a message"></textarea>
                        <div class="d-flex align-items-center justify-content-between mt-5">
                            <div class="mr-3">
                                <a href="#" class="btn btn-clean btn-icon btn-md mr-1"><i
                                    class="flaticon2-photograph icon-lg"></i></a>
                                <a href="#" class="btn btn-clean btn-icon btn-md"><i
                                    class="flaticon2-photo-camera  icon-lg"></i></a>
                            </div>
                            <div>
                                <button type="button"
                                        class="btn btn-primary btn-md text-uppercase font-weight-bold chat-send py-2 px-6">
                                    Send
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <notifications/>
</template>

<script>

import Sidebar from "@/Sidebar.vue";
import Footer from "@/Pages/Footer.vue";
import UserMenu from "@/Pages/UserMenu.vue";

export default {
    name: "Metronic",
    components: {
        Sidebar,
        Footer,
        UserMenu
    },

    methods: {
        menuToogle(){
            let menu = document.getElementById('kt_quick_user');
            menu.classList.add('offcanvas-on');
        },
    },

    mounted() {
        let closeButtonMenu = document.getElementById('kt_quick_user_close');
        closeButtonMenu.addEventListener('click', () => {
            let menu = document.getElementById('kt_quick_user');
            menu.classList.remove('offcanvas-on');
        })
    },
}
</script>

<style scoped>

</style>
