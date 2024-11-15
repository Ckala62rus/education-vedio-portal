<template>
    <div class="aside aside-left  aside-fixed  d-flex flex-column flex-row-auto" id="kt_aside">
        <div class="brand flex-column-auto " id="kt_brand">

            <div class="brand-logo">
                <a href="https://leather.ru/" target="_blank">
                    <img alt="Laravel" :src="'/template/media/logos/logo.png'" style="max-width: 60px"/>
                </a>
            </div>

            <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
                <span class="svg-icon svg-icon-xl"><!--begin::Svg Icon | path:media/svg/icons/Navigation/Angle-double-left.svg--><svg
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                    height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24"/>
                            <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z"
                                  fill="#000000" fill-rule="nonzero"
                                  transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) "/>
                            <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z"
                                  fill="#000000" fill-rule="nonzero" opacity="0.3"
                                  transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) "/>
                        </g>
                    </svg><!--end::Svg Icon-->
                </span>
            </button>

        </div>

        <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
            <div
                id="kt_aside_menu"
                class="aside-menu my-4 "
                data-menu-vertical="1"
                data-menu-scroll="1" data-menu-dropdown-timeout="500">

                <ul class="menu-nav ">

                    <li class="menu-item" aria-haspopup="true">
                        <a href="#" @click="logout" class="menu-link ">
                            <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                                <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Communication/Shield-user.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3"/>
                                            <path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" fill="#000000" opacity="0.3"/>
                                            <path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" fill="#000000" opacity="0.3"/>
                                        </g>
                                    </svg><!--end::Svg Icon-->
                                </span>
                            </span>
                            <span class="menu-text">ВЫХОД</span>
                        </a>
                    </li>

                    <li class="menu-section ">
                        <h4 class="menu-text">Dashboard</h4>
                        <i class="menu-icon flaticon-more-v2"></i>
                    </li>

                    <li class="menu-item" aria-haspopup="true">
                        <Link :href="route('metronic.profile')" class="menu-link ">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                            <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo8/dist/../src/media/svg/icons/Communication/Contact1.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
                                        <path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 L7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" fill="#000000" opacity="0.3"/>
                                    </g>
                                </svg><!--end::Svg Icon-->
                            </span>
                        </span>
                            <span class="menu-text">Мой профиль</span>
                        </Link>
                    </li>

                    <li class="menu-item" aria-haspopup="true">
                        <Link :href="route('metronic.lesson-category.index')" class="menu-link ">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                            <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Communication/Shield-user.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3"/>
                                    <path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" fill="#000000" opacity="0.3"/>
                                    <path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" fill="#000000" opacity="0.3"/>
                                </g>
                            </svg><!--end::Svg Icon-->
                        </span>
                        </span>
                            <span class="menu-text">Категории статей</span>
                        </Link>
                    </li>

<!--                    <li class="menu-item" aria-haspopup="true">-->
<!--                        <Link :href="route('metronic.lesson.create')" class="menu-link ">-->
<!--                        <span class="svg-icon menu-icon">&lt;!&ndash;begin::Svg Icon | path:media/svg/icons/Design/Layers.svg&ndash;&gt;-->
<!--                            <span class="svg-icon svg-icon-primary svg-icon-2x">&lt;!&ndash;begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Communication/Shield-user.svg&ndash;&gt;-->
<!--                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">-->
<!--                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">-->
<!--                                    <rect x="0" y="0" width="24" height="24"/>-->
<!--                                    <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3"/>-->
<!--                                    <path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" fill="#000000" opacity="0.3"/>-->
<!--                                    <path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" fill="#000000" opacity="0.3"/>-->
<!--                                </g>-->
<!--                            </svg>&lt;!&ndash;end::Svg Icon&ndash;&gt;-->
<!--                        </span>-->
<!--                        </span>-->
<!--                            <span class="menu-text">Создать пост</span>-->
<!--                        </Link>-->
<!--                    </li>-->

                    <li class="menu-item" aria-haspopup="true">
                        <Link :href="route('metronic.lesson.index')" class="menu-link ">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                            <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo8/dist/../src/media/svg/icons/Text/Article.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5"/>
                                        <path d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L12.5,10 C13.3284271,10 14,10.6715729 14,11.5 C14,12.3284271 13.3284271,13 12.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z" fill="#000000" opacity="0.3"/>
                                    </g>
                                </svg><!--end::Svg Icon-->
                            </span>
                        </span>
                            <span class="menu-text">Все посты</span>
                        </Link>
                    </li>

                    <li class="menu-item" aria-haspopup="true">
                        <Link :href="route('metronic.user.index')" class="menu-link ">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                            <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo8/dist/../src/media/svg/icons/Communication/Group.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24"/>
                                        <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                        <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
                                    </g>
                                </svg><!--end::Svg Icon-->
                            </span>
                        </span>
                            <span class="menu-text">Пользователи</span>
                        </Link>
                    </li>

                    <li class="menu-item" aria-haspopup="true">
                        <Link :href="route('metronic.role.index')" class="menu-link ">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                            <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-04-09-093151/theme/html/demo1/dist/../src/media/svg/icons/General/Clipboard.svg-->
                                <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-06-223557/theme/html/demo1/dist/../src/media/svg/icons/General/Settings-2.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" fill="#000000"/>
                                        </g>
                                    </svg><!--end::Svg Icon-->
                                </span>
                            </span><!--end::Svg Icon-->
                        </span>
                            <span class="menu-text">Роли</span>
                        </Link>
                    </li>

                    <li class="menu-item" aria-haspopup="true">
                        <a href="/elfinder/tinymce5" class="menu-link" target="_blank">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                            <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo8/dist/../src/media/svg/icons/Files/Group-folders.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <path d="M4.5,21 L21.5,21 C22.3284271,21 23,20.3284271 23,19.5 L23,8.5 C23,7.67157288 22.3284271,7 21.5,7 L11,7 L8.43933983,4.43933983 C8.15803526,4.15803526 7.77650439,4 7.37867966,4 L4.5,4 C3.67157288,4 3,4.67157288 3,5.5 L3,19.5 C3,20.3284271 3.67157288,21 4.5,21 Z" fill="#000000" opacity="0.3"/>
                                        <path d="M2.5,19 L19.5,19 C20.3284271,19 21,18.3284271 21,17.5 L21,6.5 C21,5.67157288 20.3284271,5 19.5,5 L9,5 L6.43933983,2.43933983 C6.15803526,2.15803526 5.77650439,2 5.37867966,2 L2.5,2 C1.67157288,2 1,2.67157288 1,3.5 L1,17.5 C1,18.3284271 1.67157288,19 2.5,19 Z" fill="#000000"/>
                                    </g>
                                </svg><!--end::Svg Icon-->
                            </span>
                        </span>
                            <span class="menu-text">Файловый менеджер</span>
                        </a>
                    </li>

                    <li class="menu-item" aria-haspopup="true">
                        <a href="/log-viewer" class="menu-link" target="_blank">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                            <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo8/dist/../src/media/svg/icons/Code/Error-circle.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
                                        <path d="M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z" fill="#000000"/>
                                    </g>
                                </svg><!--end::Svg Icon-->
                            </span>
                        </span>
                            <span class="menu-text">Логирование</span>
                        </a>
                    </li>

                    <li class="menu-section ">
                        <h4 class="menu-text">Custom</h4>
                        <i class="menu-icon flaticon-more-v2"></i>
                    </li>

                    <li class="menu-item" aria-haspopup="true">
                        <a href="/users" class="menu-link ">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                            <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-04-09-093151/theme/html/demo1/dist/../src/media/svg/icons/General/Clipboard.svg-->
                                <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-06-223557/theme/html/demo1/dist/../src/media/svg/icons/General/Settings-2.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" fill="#000000"/>
                                        </g>
                                    </svg><!--end::Svg Icon-->
                                </span>
                            </span><!--end::Svg Icon-->
                        </span>
                            <span class="menu-text">Пользователи</span>
                        </a>
                    </li>
                    <li class="menu-item" aria-haspopup="true">
                        <a href="/windows/server" class="menu-link ">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                            <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Devices/Server.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <path d="M5,2 L19,2 C20.1045695,2 21,2.8954305 21,4 L21,6 C21,7.1045695 20.1045695,8 19,8 L5,8 C3.8954305,8 3,7.1045695 3,6 L3,4 C3,2.8954305 3.8954305,2 5,2 Z M11,4 C10.4477153,4 10,4.44771525 10,5 C10,5.55228475 10.4477153,6 11,6 L16,6 C16.5522847,6 17,5.55228475 17,5 C17,4.44771525 16.5522847,4 16,4 L11,4 Z M7,6 C7.55228475,6 8,5.55228475 8,5 C8,4.44771525 7.55228475,4 7,4 C6.44771525,4 6,4.44771525 6,5 C6,5.55228475 6.44771525,6 7,6 Z" fill="#000000" opacity="0.3"/>
                                    <path d="M5,9 L19,9 C20.1045695,9 21,9.8954305 21,11 L21,13 C21,14.1045695 20.1045695,15 19,15 L5,15 C3.8954305,15 3,14.1045695 3,13 L3,11 C3,9.8954305 3.8954305,9 5,9 Z M11,11 C10.4477153,11 10,11.4477153 10,12 C10,12.5522847 10.4477153,13 11,13 L16,13 C16.5522847,13 17,12.5522847 17,12 C17,11.4477153 16.5522847,11 16,11 L11,11 Z M7,13 C7.55228475,13 8,12.5522847 8,12 C8,11.4477153 7.55228475,11 7,11 C6.44771525,11 6,11.4477153 6,12 C6,12.5522847 6.44771525,13 7,13 Z" fill="#000000"/>
                                    <path d="M5,16 L19,16 C20.1045695,16 21,16.8954305 21,18 L21,20 C21,21.1045695 20.1045695,22 19,22 L5,22 C3.8954305,22 3,21.1045695 3,20 L3,18 C3,16.8954305 3.8954305,16 5,16 Z M11,18 C10.4477153,18 10,18.4477153 10,19 C10,19.5522847 10.4477153,20 11,20 L16,20 C16.5522847,20 17,19.5522847 17,19 C17,18.4477153 16.5522847,18 16,18 L11,18 Z M7,20 C7.55228475,20 8,19.5522847 8,19 C8,18.4477153 7.55228475,18 7,18 C6.44771525,18 6,18.4477153 6,19 C6,19.5522847 6.44771525,20 7,20 Z" fill="#000000"/>
                                </g>
                            </svg><!--end::Svg Icon--></span>
                        </span>
                            <span class="menu-text">Сервера</span>
                        </a>
                    </li>
                    <li class="menu-item" aria-haspopup="true">
                        <a href="/windows/dashboard" class="menu-link ">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                            <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Devices/Display3.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <polygon fill="#000000" opacity="0.3" points="5 7 5 15 19 15 19 7"/>
                                    <path d="M11,19 L11,16 C11,15.4477153 11.4477153,15 12,15 C12.5522847,15 13,15.4477153 13,16 L13,19 L14.5,19 C14.7761424,19 15,19.2238576 15,19.5 C15,19.7761424 14.7761424,20 14.5,20 L9.5,20 C9.22385763,20 9,19.7761424 9,19.5 C9,19.2238576 9.22385763,19 9.5,19 L11,19 Z" fill="#000000" opacity="0.3"/>
                                    <path d="M5,7 L5,15 L19,15 L19,7 L5,7 Z M5.25,5 L18.75,5 C19.9926407,5 21,5.8954305 21,7 L21,15 C21,16.1045695 19.9926407,17 18.75,17 L5.25,17 C4.00735931,17 3,16.1045695 3,15 L3,7 C3,5.8954305 4.00735931,5 5.25,5 Z" fill="#000000" fill-rule="nonzero"/>
                                </g>
                            </svg><!--end::Svg Icon--></span>
                        </span>
                            <span class="menu-text">Управление службами серверов</span>
                        </a>
                    </li>

                    <li class="menu-item" aria-haspopup="true">
                        <a href="/rdp" class="menu-link ">
                        <span class="svg-icon menu-icon">
                            <span class="svg-icon svg-icon-primary svg-icon-2x">
                                <span class="svg-icon svg-icon-primary svg-icon-2x">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3"/>
                                            <path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z" fill="#000000"/>
                                            <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000"/>
                                        </g>
                                    </svg>
                                </span>
                            </span>
                        </span>
                            <span class="menu-text">Статистика удалённых подключений</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</template>

<script>

import {Link} from "@inertiajs/inertia-vue3";

export default {
    name: "Sidebar",
    components: {
        Link
    },

    methods: {
        logout(){
            axios.post('/logout').then(res => {
                if (res.status === 200) {
                    window.location.href = '/login'
                }
            })
        },
    },
}
</script>

<style scoped>

</style>
