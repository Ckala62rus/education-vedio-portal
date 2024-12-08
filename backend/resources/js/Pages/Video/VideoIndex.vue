<template>
    <div class="container-fluid mb-5">
        <div class="d-flex flex-column flex-md-row">
            <!--begin::Aside-->
<!--            <div class="flex-md-row-auto w-md-275px w-xl-325px">-->
            <div class="flex-md-row col-md-4">
                <!--begin::List Widget 17-->
                <div class="card card-custom gutter-b">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label font-weight-bolder text-dark">Books to Pickup</span>
                            <span class="text-muted mt-3 font-weight-bold font-size-sm">24 Books to Return</span>
                        </h3>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-4">
                        <!--begin::Container-->
                        <div>
                            <!--begin::Item-->

<!--                            <div v-for="(item, index) in sourceVideos">-->
<!--                                <button-->
<!--                                    class="btn btn-success mb-5"-->
<!--                                    @click="playVideo(item, index)"-->
<!--                                >-->
<!--                                    Добавить видео-->
<!--                                </button>-->
<!--                            </div>-->

                            <div class="d-flex align-items-center mb-8">
                                <el-table :data="sourceVideos" height="500" style="width: 100%">
                                    <el-table-column label="Date" >
                                        <template #default="scope">
                                            <div style="display: flex; align-items: center">
                                                <div class="d-flex align-items-center mb-8">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol mr-5 pt-1">
                                                        <div class="symbol-label min-w-65px min-h-100px" style="background-image: url('assets/media/books/4.png')"></div>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column">
                                                        <!--begin::Title-->
                                                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">Darius The Great</a>
                                                        <!--end::Title-->
                                                        <!--begin::Text-->
                                                        <span class="text-muted font-weight-bold font-size-sm pb-4">Amazing Short Story About
															<br>Darius greatness</span>
                                                        <!--end::Text-->
                                                        <!--begin::Action-->
                                                        <div>
                                                            <button
                                                                @click="playVideo(scope, scope.$index)"
                                                                type="button"
                                                                class="btn btn-light font-weight-bolder font-size-sm py-2"
                                                            >Book Now</button>
                                                        </div>
                                                        <!--end::Action-->
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <span style="margin-left: 10px">{{ console.log(scope) }}</span>
                                            </div>
                                        </template>
                                    </el-table-column>
                                </el-table>
                            </div>

<!--                            <div class="d-flex align-items-center mb-8" v-for="(item, index) in sourceVideos">-->
<!--                                &lt;!&ndash;begin::Symbol&ndash;&gt;-->
<!--                                <div class="symbol mr-5 pt-1">-->
<!--                                    <div class="symbol-label min-w-65px min-h-100px" style="background-image: url('assets/media/books/4.png')"></div>-->
<!--                                </div>-->

<!--                                &lt;!&ndash;end::Symbol&ndash;&gt;-->
<!--                                &lt;!&ndash;begin::Info&ndash;&gt;-->
<!--                                <div class="d-flex flex-column">-->
<!--                                    &lt;!&ndash;begin::Title&ndash;&gt;-->
<!--                                    <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">Darius The Great</a>-->
<!--                                    &lt;!&ndash;end::Title&ndash;&gt;-->
<!--                                    &lt;!&ndash;begin::Text&ndash;&gt;-->
<!--                                    <span class="text-muted font-weight-bold font-size-sm pb-4">Amazing Short Story About-->
<!--															<br>Darius greatness</span>-->
<!--                                    &lt;!&ndash;end::Text&ndash;&gt;-->
<!--                                    &lt;!&ndash;begin::Action&ndash;&gt;-->
<!--                                    <div>-->
<!--                                        <button type="button" class="btn btn-light font-weight-bolder font-size-sm py-2">Book Now</button>-->
<!--                                    </div>-->
<!--                                    &lt;!&ndash;end::Action&ndash;&gt;-->
<!--                                </div>-->
<!--                                &lt;!&ndash;end::Info&ndash;&gt;-->
<!--                            </div>-->

                            <!--end::Item-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::List Widget 17-->
            </div>
            <!--end::Aside-->
            <!--begin::Content-->
            <div class="flex-md-row-fluid col-md-8">
                <!--begin::Card-->
                <div class="card card-custom">
                    <!--begin::Header-->
                    <div class="card-header flex-wrap border-0 pt-6 pb-0">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label font-weight-bolder text-dark">Library</span>
                            <span class="text-muted mt-1 font-weight-bold font-size-sm">Manage over 10,200 books</span>
                        </h3>
                        <div class="card-toolbar">
                            <div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
                                <a href="#" class="btn btn-success font-weight-bolder font-size-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">New Book</a>
                                <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                    <!--begin::Navigation-->
                                    <ul class="navi navi-hover py-5">
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon">
                                                    <i class="flaticon2-drop"></i>
                                                </span>
                                                <span class="navi-text">New Group</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <!--end::Navigation-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Search Form-->
                        <div class="mb-10">
                            <div class="row">
<!--                                <div class="col-md-2"></div>-->
                                <div class="col-md-12">
                                    <video-player :options="videoOptions" :key="video_key"/>
                                </div>
                            </div>
                        </div>
                        <!--begin: Datatable-->
                        <!--end: Datatable-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Content-->
        </div>

<!--        <div class="row" data-sticky-container="">-->
<!--            <div class="col-lg-3 col-xl-2">-->
<!--                <div class="card card-custom" data-sticky="true" data-margin-top="140px" data-sticky-for="1023" data-sticky-class="sticky" style="">-->
<!--                    <div class="card-body p-0">-->
<!--                        <ul class="navi navi-bold navi-hover my-5" role="tablist">-->
<!--                            <li class="navi-item">-->
<!--                                <a class="navi-link active" data-toggle="tab" href="#kt_profile_tab_personal_information">-->
<!--															<span class="navi-icon">-->
<!--																<i class="flaticon-avatar"></i>-->
<!--															</span>-->
<!--                                    <span class="navi-text">Personal Information</span>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="navi-item">-->
<!--                                <a class="navi-link" data-toggle="tab" href="#kt_profile_tab_account_information">-->
<!--															<span class="navi-icon">-->
<!--																<i class="flaticon-lock"></i>-->
<!--															</span>-->
<!--                                    <span class="navi-text">Acccount Information</span>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="navi-item">-->
<!--                                <a class="navi-link" data-toggle="tab" href="#kt_profile_change_password">-->
<!--															<span class="navi-icon">-->
<!--																<i class="flaticon-settings"></i>-->
<!--															</span>-->
<!--                                    <span class="navi-text">Change Password</span>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="navi-item">-->
<!--                                <a class="navi-link" data-toggle="tab" href="#kt_profile_email_settings">-->
<!--															<span class="navi-icon">-->
<!--																<i class="flaticon-multisymbol-2"></i>-->
<!--															</span>-->
<!--                                    <span class="navi-text">Email Settings</span>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="navi-item">-->
<!--                                <a class="navi-link" href="#" data-toggle="tooltip" title="" data-placement="right" data-original-title="This feature is coming soon!">-->
<!--															<span class="navi-icon">-->
<!--																<i class="flaticon-coins"></i>-->
<!--															</span>-->
<!--                                    <span class="navi-text">Saved Credit Cards</span>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="navi-item">-->
<!--                                <a class="navi-link" href="#" data-toggle="tooltip" title="" data-placement="right" data-original-title="This feature is coming soon!">-->
<!--															<span class="navi-icon">-->
<!--																<i class="flaticon-customer"></i>-->
<!--															</span>-->
<!--                                    <span class="navi-text">Social Networks</span>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="navi__separator"></li>-->
<!--                            <li class="navi-item">-->
<!--                                <a class="navi-link" href="#" data-toggle="tooltip" title="" data-placement="right" data-original-title="This feature is coming soon!">-->
<!--															<span class="navi-icon">-->
<!--																<i class="flaticon-diagram"></i>-->
<!--															</span>-->
<!--                                    <span class="navi-text">Tax Information</span>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="navi-item">-->
<!--                                <a class="navi-link" href="#" data-toggle="tooltip" title="" data-placement="right" data-original-title="This feature is coming soon!">-->
<!--															<span class="navi-icon">-->
<!--																<i class="flaticon-bag"></i>-->
<!--															</span>-->
<!--                                    <span class="navi-text">Purchases</span>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="navi-item">-->
<!--                                <a class="navi-link" href="#" data-toggle="tooltip" title="" data-placement="right" data-original-title="This feature is coming soon!">-->
<!--															<span class="navi-icon">-->
<!--																<i class="flaticon-tabs"></i>-->
<!--															</span>-->
<!--                                    <span class="navi-text">Statements</span>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="navi-item">-->
<!--                                <a class="navi-link" href="#" data-toggle="tooltip" title="" data-placement="right" data-original-title="This feature is coming soon!">-->
<!--															<span class="navi-icon">-->
<!--																<i class="flaticon-share"></i>-->
<!--															</span>-->
<!--                                    <span class="navi-text">Audit Log</span>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-6 col-xl-8">-->
<!--                <div class="card card-custom gutter-b example example-compact">-->
<!--                    <div class="card-header">-->
<!--                        <div class="card-title">-->
<!--                            <h3 class="card-label">StickyJS-->
<!--                                <small>handles sticky elements</small></h3>-->
<!--                        </div>-->
<!--                        <div class="card-toolbar">-->
<!--                            <div class="example-tools justify-content-center">-->
<!--                                <span class="example-toggle" data-toggle="tooltip" title="" data-original-title="View code"></span>-->
<!--                                <span class="example-copy" data-toggle="tooltip" title="" data-original-title="Copy code"></span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="card-body">-->
<!--                        <div class="example-preview">Metronic Sticky panel features are powered by-->
<!--                            <strong>Sticky-js</strong>library written in vanilla javascript. With this library you can easily set sticky elements on your website. It's also responsive. Just wrap sticky area with-->
<!--                            <code>data-sticky-container</code>attribute and use-->
<!--                            <code>data-sticky="true"</code>attribute on required elements to enable sticky mode and use-->
<!--                            <code>data-margin-top="120"</code>to set margin to to enable the sticky mode for your element. For more info please visit the plugin's the plugin's-->
<!--                            <a href="https://github.com/rgalus/sticky-js" class="font-weight-bold" target="_blank">documentation</a>.</div>-->
<!--                        &lt;!&ndash;begin::Code example&ndash;&gt;-->
<!--                        <div class="example-code">-->
<!--                            <div class="example-highlight">-->
<!--														<pre class=" language-html"><code class=" language-html"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>row<span class="token punctuation">"</span></span> <span class="token attr-name">data-sticky-container</span><span class="token punctuation">&gt;</span></span>-->
<!--    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>col-lg-3 col-xl-2<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>-->
<!--     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>card card-custom sticky<span class="token punctuation">"</span></span> <span class="token attr-name">data-sticky</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>true<span class="token punctuation">"</span></span> <span class="token attr-name">data-margin-top</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>140<span class="token punctuation">"</span></span> <span class="token attr-name">data-sticky-for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>1023<span class="token punctuation">"</span></span> <span class="token attr-name">data-sticky-class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>stickyjs<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>-->
<!--            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>card-body p-0<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>-->
<!--                ...-->
<!--            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>-->
<!--        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>-->
<!--    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>-->
<!--    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>col-lg-6 col-xl-8<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>-->
<!--     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>card card-custom gutter-b example example-compact<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>-->
<!--            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>card-header<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>-->
<!--                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>card-title<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>-->
<!--                    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>h3</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>card-label<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>StickyJS <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>small</span><span class="token punctuation">&gt;</span></span>handles sticky elements<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>small</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>h3</span><span class="token punctuation">&gt;</span></span>-->
<!--                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>-->
<!--            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>-->
<!--            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>card-body<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>-->
<!--                ...-->
<!--      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>-->
<!--  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>-->
<!--    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>-->
<!--    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>col-lg-3 col-xl-2<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>-->
<!--     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>card card-custom sticky<span class="token punctuation">"</span></span> <span class="token attr-name">data-sticky</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>true<span class="token punctuation">"</span></span> <span class="token attr-name">data-margin-top</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>140<span class="token punctuation">"</span></span> <span class="token attr-name">data-sticky-for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>1023<span class="token punctuation">"</span></span> <span class="token attr-name">data-sticky-class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>stickyjs<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>-->
<!--            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>card-body<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>-->
<!--                ...-->
<!--            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>-->
<!--        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>-->
<!--    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>-->
<!--<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span></code></pre>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <p class="mt-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
<!--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
<!--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
<!--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
<!--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
<!--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
<!--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
<!--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
<!--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
<!--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
<!--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
<!--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
<!--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
<!--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
<!--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
<!--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
<!--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
<!--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
<!--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
<!--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
<!--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
<!--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
<!--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
<!--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
<!--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
<!--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
<!--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
<!--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
<!--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
<!--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
<!--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
<!--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
<!--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
<!--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
<!--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
<!--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
<!--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
<!--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
<!--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
<!--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-3 col-xl-2">-->
<!--                <div class="card card-custom" data-sticky="true" data-margin-top="140px" data-sticky-for="1023" data-sticky-class="sticky" style="">-->
<!--                    <div class="card-body">-->
<!--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>-->
<!--                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>-->
<!--                        <p>Recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->


        <div class="row">
            <div class="col-md-4">
                <div class="card card-custom card-stretch" id="kt_page_stretched_card">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Stretched Card <small>full height card with scrollable content</small></h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-scroll h-50" style="height: 555px;">
                            <div v-for="(item, index) in sourceVideos">
                                <button
                                    class="btn btn-success mb-5"
                                    @click="playVideo(item, index)"
                                >
                                    Добавить видео
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card card-custom rdp_statistic_mg">
                    <div class="card-header">
                        <h3 class="card-title">
                            Все видео
                        </h3>
                    </div>
                    <div class="card-body">

                        <div v-for="(item, index) in sourceVideos">
                            <button
                                class="btn btn-success mb-5"
                                @click="playVideo(item, index)"
                            >
                                Добавить видео
                            </button>
                        </div>

                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <video-player :options="videoOptions" :key="video_key"/>
                            </div>
                        </div>

                        <button
                            class="btn btn-success mb-5"
                            @click="notification"
                        >
                            Добавить видео
                        </button>


                        <button
                            class="btn btn-success mb-5"
                            @click="previewVideo"
                        >
                            PREVIEW
                        </button>

                        <button
                            class="btn btn-success mb-5"
                            @click="nextVideo"
                        >
                            NEXT
                        </button>

<!--                        <div class="block text-center" m="t-4">-->
<!--                            <span class="demonstration">Switch when indicator is clicked</span>-->
<!--                            <el-carousel trigger="click" height="150px">-->
<!--                                <el-carousel-item v-for="item in this.images" :key="item">-->
<!--                                    <h3>sad</h3>-->
<!--&lt;!&ndash;                                    <img height="100px" width="100" class="lesson-preview" :src="item"/>&ndash;&gt;-->
<!--                                </el-carousel-item>-->
<!--                            </el-carousel>-->
<!--                        </div>-->

                        <div class="demo-image__preview">
                            <el-image
                                style="width: 100px; height: 100px"
                                :src="urlPreview"
                                :zoom-rate="1.2"
                                :max-scale="7"
                                :min-scale="0.2"
                                :preview-src-list="this.images"
                                :initial-index="4"
                                :hide-on-click-modal="true"
                                fit="cover"
                            />
                        </div>

<!--                        <div v-for="item in this.images" :key="item">-->
<!--                            <el-image style="width: 100px; height: 100px" :src="item" :fit=fit />-->
<!--                        </div>-->


<!--                        <el-upload-->
<!--                            v-model:file-list="this.images"-->
<!--                            action="https://run.mocky.io/v3/9d059bf9-4660-45f2-925d-ce80ad6c4d15"-->
<!--                            list-type="picture-card"-->
<!--                            :on-preview="handlePictureCardPreview"-->
<!--                            :on-remove="handleRemove"-->
<!--                        >-->
<!--                            <el-icon><Plus /></el-icon>-->
<!--                        </el-upload>-->



                        <!--begin::Form-->
                        <form class="form" @submit.prevent="submitFile">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>File Browser</label>
                                    <div></div>
                                    <div class="custom-file">
                                        <input
                                            type="file"
                                            class="custom-file-input"
                                            id="customFile"
                                            @change="handleFileUpload"
                                        />
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                                <div class="form-group">
<!--                                    <progress max="100" :value.prop="uploadPercentage"></progress>-->
<!--                                    <div class="demo-progress">-->
<!--                                        <el-progress-->
<!--                                            :text-inside="true"-->
<!--                                            :stroke-width="24"-->
<!--                                            :percentage="uploadPercentage"-->
<!--                                            status="success"-->
<!--                                        />-->
<!--                                    </div>-->

                                    <el-progress
                                        :percentage="uploadPercentage"
                                        :stroke-width="15"
                                        :status="statusProgressBar"
                                        striped
                                        striped-flow
                                        :duration="10"
                                    />
                                </div>
                                <div id="preview">
                                    <img height="150" width="150" v-if="url" :src="url" />
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-bg-light">Submit</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
import {Link, usePage} from "@inertiajs/inertia-vue3";
import { notify } from "@kyvg/vue3-notification";
import VideoPlayer from "@/Components/VideoPlayer.vue";
import('video.js/dist/video-js.css')

export default {
    name: "VideoIndex",
    components: {
        Link,
        VideoPlayer,
    },

    data() {
        return {
            url: '',
            file: '',
            uploadPercentage: 0,
            images: [],
            fit: 'contain',
            urlPreview: 'https://fuss10.elemecdn.com/a/3f/3302e58f9a181d2509f3dc0fa68b0jpeg.jpeg',

            statusProgressBar: null, //success

            dialogImageUrl: '',
            dialogVisible: false,
            disabled: false,

            // video player options
            videoOptions: {
                autoplay: false,
                controls: true,
                height: '500px',
                responsive: true,
                controlBar: {
                    skipButtons: {
                        forward: 5,
                        backward: 5,
                    }
                },
                playbackRates: [0.5, 1, 1.5, 2],
                userActions: {
                    hotkeys: function(event) {
                        // `this` is the player in this context

                        // `x` key = pause
                        if (event.which === 88) {
                            this.pause();
                        }
                        // `y` key = play
                        if (event.which === 89) {
                            this.play();
                        }
                    }
                },
                sources: [
                    // {
                    //     src:
                    //         'http://localhost:88/testbucket/videos/b3f0d9b8-9d3e-481d-9232-60300ff1541c.mp4',
                    //     type: 'video/mp4',
                    //     id: 1,
                    // },
                ],
            },

            video_key: null,
            sourceVideos: [
                // {
                //     src:
                //         'http://localhost:88/testbucket/videos/b3f0d9b8-9d3e-481d-9232-60300ff1541c.mp4',
                //     type: 'video/mp4',
                //     id: 1,
                // },
                // {
                //     src:
                //         'http://localhost:88/testbucket/videos/58d70393-1196-4a3a-90f6-632231bde672.mp4',
                //     type: 'video/mp4',
                //     id: 2,
                // },
            ],

            tableData: [
                {
                    date: '2016-05-03',
                    name: 'Tom',
                    address: 'No. 189, Grove St, Los Angeles',
                },
                {
                    date: '2016-05-02',
                    name: 'Tom',
                    address: 'No. 189, Grove St, Los Angeles',
                },
                {
                    date: '2016-05-04',
                    name: 'Tom',
                    address: 'No. 189, Grove St, Los Angeles',
                },
                {
                    date: '2016-05-01',
                    name: 'Tom',
                    address: 'No. 189, Grove St, Los Angeles',
                },
                {
                    date: '2016-05-08',
                    name: 'Tom',
                    address: 'No. 189, Grove St, Los Angeles',
                },
                {
                    date: '2016-05-06',
                    name: 'Tom',
                    address: 'No. 189, Grove St, Los Angeles',
                },
                {
                    date: '2016-05-07',
                    name: 'Tom',
                    address: 'No. 189, Grove St, Los Angeles',
                },
            ],
        }
    },

    methods: {
        playVideo(item, index){
            console.log(index);
            console.log(item);

            this.videoOptions.sources = this.sourceVideos[index]
            this.video_key = index
        },

        previewVideo(){
            if (this.video_key === 0) {
                return
            }
            this.videoOptions.sources = [this.sourceVideos[this.video_key - 1]]
            this.video_key -= 1
        },

        nextVideo(){
            let videosLength = this.sourceVideos.length
            if (this.video_key === videosLength - 1) {
                return
            }
            this.videoOptions.sources = [this.sourceVideos[this.video_key + 1]]
            this.video_key += 1
        },

        handleRemove(file) {
            console.log(file);
        },

        handlePictureCardPreview(file) {
            this.dialogImageUrl = file.url;
            this.dialogVisible = true;
        },

        handleDownload(file) {
            console.log(file);
        },

        notification(){
            notify({
                title: "Загрузка файла",
                text: "You have been logged in!",
                duration: 3000,
                speed: 1000,
                type: 'success',
                closeOnClick: true,
            });

            let video = {
                src:
                    'http://localhost:88/testbucket/videos/58d70393-1196-4a3a-90f6-632231bde672.mp4',
                type: 'video/mp4',
                id: 2,
            }

            this.videoOptions.sources = [video]
            this.video_key = video.id
        },

        handleFileUpload(e){
            if (typeof e.target === "undefined") {
                return
            }
            console.log(e.target.files[0])
            this.statusProgressBar = null
            this.uploadPercentage = 0
            this.file = e.target.files[0];
            this.url = URL.createObjectURL(this.file);
        },

        submitFile(){
            let formData = new FormData();
            formData.append('files[]', this.file);
            formData.append('folder', 'videos');
            axios.post( '/api/objects',
                formData,
                {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    },
                    onUploadProgress: function(progressEvent) {
                        console.log(progressEvent)
                        if (progressEvent.progress === 1) {
                            this.statusProgressBar = 'success'
                            notify({
                                title: "Файл загружен",
                                text: "Обработка файла на сервере!",
                                duration: 3000,
                                speed: 1000,
                                type: 'success'
                            });
                        }
                        this.uploadPercentage = parseInt(Math.round(( progressEvent.loaded / progressEvent.total) * 100));
                    }.bind(this)
                }
            ).then((result) => {
                console.log(result);
                console.log('SUCCESS!!');
                notify({
                    title: "Загрузка файла",
                    text: "Файл загружен!",
                    duration: 3000,
                    speed: 1000,
                    type: 'success'
                });

                this.url = null
                this.statusProgressBar = ''
                this.uploadPercentage = 0
                this.getImageFiles('images')
                this.getVideoFiles('videos')
            }).catch((error) => {
                console.log(error);
                console.log('FAILURE!!');
                notify({
                    title: "Загрузка файла",
                    text: "Файл загружен!",
                    duration: 3000,
                    speed: 1000,
                    type: 'success'
                });
            });
        },

        getImageFiles(folder){
            axios({
                method:'GET',
                url: '/api/objects',
                params: {
                    folder:folder
                },
            })
                .then(response => {
                    // console.log(response.data.data.files)
                    let files = response.data.data.files
                    if (files.length === 0) {
                        return
                    }
                    this.images = []
                    this.images = [...files]
                })
                .catch(err => {
                    console.log(err)
                })
        },

        getVideoFiles(folder){
            axios({
                method:'GET',
                url: '/api/objects',
                params: {
                    folder:folder
                },
            })
                .then(response => {
                    let files = response.data.data.files
                    if (files.length === 0) {
                        return
                    }
                    this.sourceVideos = []
                    this.sourceVideos = [...files]
                    this.videoOptions.sources = this.sourceVideos[0]
                    this.video_key = 0
                })
                .catch(err => {
                    console.log(err)
                })
        },
    },

    mounted() {
        this.getImageFiles('images')
        this.getVideoFiles('videos')
    }
}
</script>

<style scoped>
#preview {
    display: flex;
    justify-content: center;
    align-items: center;
}

#preview img {
    max-width: 100%;
    max-height: 500px;
}
.demonstration {
    color: var(--el-text-color-secondary);
}

/*.el-carousel__item h3 {*/
/*    color: #475669;*/
/*    opacity: 0.75;*/
/*    line-height: 150px;*/
/*    margin: 0;*/
/*    text-align: center;*/
/*}*/

.el-carousel__item:nth-child(2n) {
    background-color: #99a9bf;
}

.el-carousel__item:nth-child(2n + 1) {
    background-color: #d3dce6;
}
.demo-image__error .image-slot {
    font-size: 30px;
}
.demo-image__error .image-slot .el-icon {
    font-size: 30px;
}
.demo-image__error .el-image {
    width: 100%;
    height: 200px;
}
</style>
