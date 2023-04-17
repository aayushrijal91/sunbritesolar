<?= renderImg('solar_globe.png', 'lib', 'solar_globe') ?>

<header>
    <video id="headerVideo" width="100%" autoplay loop muted>
        <source src="./assets/video/header.mp4" type="video/mp4">
        <source src="./assets/video/header.webm" type="video/webm">
        Your browser does not support the video tag.
    </video>

    <div class="navigation">
        <div class="container">
            <div class="row justify-content-between align-items-center gy-lg-4 gy-xl-0">
                <div class="col-7 col-md-auto">
                    <a href="./">
                        <?= renderImg("logo.png", "logo") ?>
                    </a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <?= renderImg('clean-energy-council.png', 'logo') ?>
                </div>
                <div class="col-auto fs-24 d-none d-lg-block">
                    Installs
                </div>
                <div class="col-auto fs-24 d-none d-lg-block">
                    Repairs/Maintenance
                </div>
                <div class="col-auto d-none d-lg-block">
                    <div class="row justify-content-center justify-content-lg-end align-items-center">
                        <div class="col-12 col-md-auto">
                            <a href="tel:<?= $phone_number ?>" class="btn border-dark rounded-0 text-dark py-3 px-md-5">
                                <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.47319 7.27753C4.7332 9.68305 6.76322 11.6466 9.23949 12.8791L11.1645 11.0091C11.4008 10.7796 11.7508 10.7031 12.057 10.8051C13.037 11.1196 14.0958 11.2896 15.1808 11.2896C15.662 11.2896 16.0558 11.6721 16.0558 12.1396V15.1061C16.0558 15.5736 15.662 15.9561 15.1808 15.9561C6.96447 15.9561 0.305664 9.48755 0.305664 1.50598C0.305664 1.03848 0.699417 0.655975 1.18067 0.655975H4.2432C4.72445 0.655975 5.1182 1.03848 5.1182 1.50598C5.1182 2.56849 5.29321 3.5885 5.61696 4.54051C5.71321 4.83801 5.64321 5.16951 5.39821 5.40752L3.47319 7.27753Z" fill="#080F2B" />
                                </svg>
                                <span class="ps-2"><?= $phone_number ?></span>
                            </a>
                        </div>
                        <div class="col-12 col-md-auto">
                            <a href="tel:<?= $phone_number ?>" class="btn border-dark rounded-0 text-dark py-3 px-md-5">
                                Enquire Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="banner">
        <?= renderImg('solar_globe.png', 'lib', 'solar_globe_banner') ?>
        <div class="container">
            <div class="row">
                <div class="col-10 col-lg-7 banner_wrapper">
                    <div class="free_solar_design">
                        <?= renderImg('free-solar-design.png', 'lib', 'mainImg') ?>
                    </div>
                    <h1 class="fs-96 lh-0_76 heading">The leaders in solar energy solutions</h1>
                    <div class="fs-36 lh-1 pt-3 pb-5 py-md-5 description">Sydney's Solar Specialists. Top-quality<br class="d-none d-md-block"> solar panel installation services in Sydney</div>
                    <div class="row d-none d-md-flex">
                        <div class="col-auto d-none d-xl-block">
                            <a href="tel:<?= $phone_number ?>" class="btn border-dark rounded-0 text-dark py-3 px-md-5">
                                <svg width="27" height="26" viewBox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.79781 11.2858C7.89781 15.295 11.2811 18.5675 15.4082 20.6217L18.6166 17.505C19.0103 17.1225 19.5936 16.995 20.1041 17.165C21.7374 17.6892 23.502 17.9725 25.3103 17.9725C26.1124 17.9725 26.7686 18.61 26.7686 19.3892V24.3333C26.7686 25.1125 26.1124 25.75 25.3103 25.75C11.6166 25.75 0.518646 14.9692 0.518646 1.66667C0.518646 0.8875 1.1749 0.25 1.97698 0.25H7.08115C7.88323 0.25 8.53948 0.8875 8.53948 1.66667C8.53948 3.4375 8.83115 5.1375 9.37073 6.72417C9.53115 7.22 9.41448 7.7725 9.00615 8.16917L5.79781 11.2858Z" fill="#080F2B" />
                                </svg>
                                <span class="ps-2"><?= $phone_number ?></span>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="tel:<?= $phone_number ?>" class="btn border-dark rounded-0 text-dark py-3 px-md-5">
                                Enquire Now
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col d-flex align-items-end d-lg-none">
                    <?= renderImg('clean-energy-council-mob.png', 'logo', 'mob-clean-energy-council') ?>
                </div>
            </div>
        </div>
    </div>
    <div class="brands">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 brands_wrapper">
                    <div class="row justify-content-between gy-md-4 gy-xl-0">
                        <div class="col-xl-3">
                            <div class="text-dark fs-36 lh-1 heading">brands we work with</div>
                        </div>
                        <div class="col-12 col-xl-8">
                            <div id="brands_slider">
                                <div><?= renderImg('brand-1.png', 'logo') ?></div>
                                <div><?= renderImg('brand-2.png', 'logo') ?></div>
                                <div><?= renderImg('brand-3.png', 'logo') ?></div>
                                <div><?= renderImg('brand-4.png', 'logo') ?></div>
                                <div><?= renderImg('brand-5.png', 'logo') ?></div>
                                <div><?= renderImg('brand-6.png', 'logo') ?></div>
                                <div><?= renderImg('brand-7.png', 'logo') ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="government_assistance">
    <video id="governmentAssistanceVideo" width="100%" autoplay loop muted>
        <source src="./assets/video/governmentAssistanceVideo.mp4" type="video/mp4">
        <source src="./assets/video/governmentAssistanceVideo.webm" type="video/webm">
        Your browser does not support the video tag.
    </video>
    <div class="container position-relative">
        <div class="row">
            <div class="col-xl-7 government_assistance_wrapper">
                <div class="position-relative d-none d-md-block">
                    <?= renderImg('reliable-assistance-phone.png', 'lib', 'phone') ?>
                    <?= renderImg('handcash.png', 'lib', 'handcash') ?>
                </div>
                <div class="position-relative d-md-none">
                    <?= renderImg('reliable-assistance-phone-mob.png', 'lib', 'phone') ?>
                    <?= renderImg('handcash.png', 'lib', 'handcash') ?>
                </div>
            </div>
            <div class="col-xl-5 main_content">
                <div class="free_solar_design">
                    <?= renderImg('free_solar_design_white.png', 'lib', 'mainImg') ?>
                </div>
                <div class="fs-64 lh-1 text-white py-4">Government Assistance available NOW</div>
                <div class="text-white fs-24 lh-1 pb-md-5">Top-quality solar panel installation<br class="d-none d-md-block"> services in Sydney</div>
                <div class="d-none d-md-block">
                    <a href="tel:<?= $phone_number ?>" class="btn border-white d-inline-flex rounded-0 text-white py-3 px-md-5">
                        Enquire Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="renewable_energy">
    <div class="inner">
        <div class="container">
            <div class="row gy-7 gy-md-0">
                <div class="col-10 col-md-11 col-xl-7 renewable_energy_wrapper">
                    <div class="row">
                        <div class="col-xl-10">
                            <div class="row justify-content-between align-items-end d-none d-md-flex">
                                <div class="col-auto"><?= renderImg('clean-energy-council.png', 'logo') ?></div>
                                <div class="col-auto">
                                    <div class="free_solar_design">
                                        <?= renderImg('free-solar-design-2.png', 'lib', 'mainImg') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="fs-96 lh-0_76 py-md-5 text-tertiary heading">Renewable Energy is the future</div>
                            <div class="fs-24 text-tertiary lh-1 py-4 pt-md-0 pb-md-7 description">
                                Embrace the future of renewable energy with our custom design solar panels, designed to power a sustainable world for generations to come. As we face the urgent challenge of climate change, solar energy is no longer just an option; it's the key to a cleaner, greener, and more resilient tomorrow.
                            </div>
                            <div>
                                <a href="#" class="text-tertiary fs-24 pe-3 button d-none d-md-inline-block">Speak with our Solar Energy Consultants today</a>
                                <a href="#" class="text-tertiary fs-24 pe-3 button d-md-none">Speak to a Sunbrite Consultant</a>
                                <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.879 1.53334C17.879 0.981055 17.4312 0.53334 16.879 0.53334L7.87895 0.533341C7.32667 0.53334 6.87895 0.981056 6.87895 1.53334C6.87895 2.08562 7.32667 2.53334 7.87895 2.53334L15.879 2.53334L15.879 10.5333C15.879 11.0856 16.3267 11.5333 16.879 11.5333C17.4312 11.5333 17.879 11.0856 17.879 10.5333L17.879 1.53334ZM1.79665 18.0299L17.5861 2.24045L16.1718 0.826234L0.382432 16.6156L1.79665 18.0299Z" fill="#17274F" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="solar_sheet_img position-relative">
                        <?= renderImg('solar-sheets.png', 'lib') ?>
                    </div>
                    <div class="row gy-6 solar_sheets align-items-end">
                        <div class="col-12">
                            <div class="d-md-none">
                                <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.879 1.53334C17.879 0.981055 17.4312 0.53334 16.879 0.53334L7.87895 0.533341C7.32667 0.53334 6.87895 0.981056 6.87895 1.53334C6.87895 2.08562 7.32667 2.53334 7.87895 2.53334L15.879 2.53334L15.879 10.5333C15.879 11.0856 16.3267 11.5333 16.879 11.5333C17.4312 11.5333 17.879 11.0856 17.879 10.5333L17.879 1.53334ZM1.79665 18.0299L17.5861 2.24045L16.1718 0.826234L0.382432 16.6156L1.79665 18.0299Z" fill="#17274F" />
                                </svg>
                            </div>
                            <a href="#" class="text-tertiary fs-24 pe-3">Free Solar Design</a>
                            <span class="d-none d-md-inline">
                                <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.879 1.53334C17.879 0.981055 17.4312 0.53334 16.879 0.53334L7.87895 0.533341C7.32667 0.53334 6.87895 0.981056 6.87895 1.53334C6.87895 2.08562 7.32667 2.53334 7.87895 2.53334L15.879 2.53334L15.879 10.5333C15.879 11.0856 16.3267 11.5333 16.879 11.5333C17.4312 11.5333 17.879 11.0856 17.879 10.5333L17.879 1.53334ZM1.79665 18.0299L17.5861 2.24045L16.1718 0.826234L0.382432 16.6156L1.79665 18.0299Z" fill="#17274F" />
                                </svg>
                            </span>
                        </div>
                        <div class="col-12">
                            <div class="d-md-none">
                                <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.879 1.53334C17.879 0.981055 17.4312 0.53334 16.879 0.53334L7.87895 0.533341C7.32667 0.53334 6.87895 0.981056 6.87895 1.53334C6.87895 2.08562 7.32667 2.53334 7.87895 2.53334L15.879 2.53334L15.879 10.5333C15.879 11.0856 16.3267 11.5333 16.879 11.5333C17.4312 11.5333 17.879 11.0856 17.879 10.5333L17.879 1.53334ZM1.79665 18.0299L17.5861 2.24045L16.1718 0.826234L0.382432 16.6156L1.79665 18.0299Z" fill="#17274F" />
                                </svg>
                            </div>
                            <a href="#" class="text-tertiary fs-24 pe-3">Intelligent Energy Management System</a>
                            <span class="d-none d-md-inline">
                                <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.879 1.53334C17.879 0.981055 17.4312 0.53334 16.879 0.53334L7.87895 0.533341C7.32667 0.53334 6.87895 0.981056 6.87895 1.53334C6.87895 2.08562 7.32667 2.53334 7.87895 2.53334L15.879 2.53334L15.879 10.5333C15.879 11.0856 16.3267 11.5333 16.879 11.5333C17.4312 11.5333 17.879 11.0856 17.879 10.5333L17.879 1.53334ZM1.79665 18.0299L17.5861 2.24045L16.1718 0.826234L0.382432 16.6156L1.79665 18.0299Z" fill="#17274F" />
                                </svg>
                            </span>
                        </div>
                        <div class="col-12">
                            <div class="d-md-none">
                                <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.879 1.53334C17.879 0.981055 17.4312 0.53334 16.879 0.53334L7.87895 0.533341C7.32667 0.53334 6.87895 0.981056 6.87895 1.53334C6.87895 2.08562 7.32667 2.53334 7.87895 2.53334L15.879 2.53334L15.879 10.5333C15.879 11.0856 16.3267 11.5333 16.879 11.5333C17.4312 11.5333 17.879 11.0856 17.879 10.5333L17.879 1.53334ZM1.79665 18.0299L17.5861 2.24045L16.1718 0.826234L0.382432 16.6156L1.79665 18.0299Z" fill="#17274F" />
                                </svg>
                            </div>
                            <a href="#" class="text-tertiary fs-24 pe-3">Customizable Solar Solutions</a>
                            <span class="d-none d-md-inline">
                                <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.879 1.53334C17.879 0.981055 17.4312 0.53334 16.879 0.53334L7.87895 0.533341C7.32667 0.53334 6.87895 0.981056 6.87895 1.53334C6.87895 2.08562 7.32667 2.53334 7.87895 2.53334L15.879 2.53334L15.879 10.5333C15.879 11.0856 16.3267 11.5333 16.879 11.5333C17.4312 11.5333 17.879 11.0856 17.879 10.5333L17.879 1.53334ZM1.79665 18.0299L17.5861 2.24045L16.1718 0.826234L0.382432 16.6156L1.79665 18.0299Z" fill="#17274F" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="offering">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-11">
                <div class="fs-64 text-black lh-1 pb-5 heading">Sunbrite<br class="d-md-none"> brings you</div>

                <div class="row gx-lg-5 gy-4 gy-xl-0">
                    <div class="col-xl-6">
                        <div class="offering-1">
                            <div class="row justify-content-between align-items-end w-100 m-0">
                                <div class="col-auto">
                                    <div class="sm_text lh-1">Solar</div>
                                    <div class="lg_text lh-1">Installation</div>
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="d-md-none">
                                        <svg width="62" height="28" viewBox="0 0 62 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M51.8186 14.4717C51.9942 14.2962 51.9942 14.0115 51.8186 13.8359L48.9572 10.9745C48.7816 10.7989 48.4969 10.7989 48.3213 10.9745C48.1457 11.15 48.1457 11.4347 48.3213 11.6103L50.8648 14.1538L48.3213 16.6973C48.1457 16.8729 48.1457 17.1576 48.3213 17.3332C48.4969 17.5088 48.7816 17.5088 48.9572 17.3332L51.8186 14.4717ZM0.243042 14.6034H51.5007V13.7042H0.243042V14.6034Z" fill="#080F2A" />
                                            <circle cx="48.2828" cy="14.1539" r="12.8478" stroke="#080F2B" stroke-width="0.899257" />
                                        </svg>
                                    </a>
                                    <a href="#" class="d-none d-md-block">
                                        <svg width="137" height="60" viewBox="0 0 137 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M115.112 30.7718C115.503 30.3813 115.503 29.7481 115.112 29.3576L108.748 22.9936C108.358 22.6031 107.724 22.6031 107.334 22.9936C106.943 23.3842 106.943 24.0173 107.334 24.4078L112.991 30.0647L107.334 35.7216C106.943 36.1121 106.943 36.7452 107.334 37.1358C107.724 37.5263 108.358 37.5263 108.748 37.1358L115.112 30.7718ZM0.404907 31.0647H114.405V29.0647H0.404907V31.0647Z" fill="#080F2A" />
                                            <circle cx="107.248" cy="30.0648" r="28.5743" stroke="#080F2B" stroke-width="2" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="offering-2">
                            <div class="row justify-content-between align-items-end w-100 m-0">
                                <div class="col-auto">
                                    <div class="sm_text lh-1">Solar</div>
                                    <div class="lg_text lh-1">Repair &</div>
                                    <div class="lg_text lh-1">Installation</div>
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="d-md-none">
                                        <svg width="62" height="28" viewBox="0 0 62 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M51.8186 14.4717C51.9942 14.2962 51.9942 14.0115 51.8186 13.8359L48.9572 10.9745C48.7816 10.7989 48.4969 10.7989 48.3213 10.9745C48.1457 11.15 48.1457 11.4347 48.3213 11.6103L50.8648 14.1538L48.3213 16.6973C48.1457 16.8729 48.1457 17.1576 48.3213 17.3332C48.4969 17.5088 48.7816 17.5088 48.9572 17.3332L51.8186 14.4717ZM0.243042 14.6034H51.5007V13.7042H0.243042V14.6034Z" fill="#080F2A" />
                                            <circle cx="48.2828" cy="14.1539" r="12.8478" stroke="#080F2B" stroke-width="0.899257" />
                                        </svg>
                                    </a>
                                    <a href="#" class="d-none d-md-block">
                                        <svg width="137" height="60" viewBox="0 0 137 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M115.112 30.7718C115.503 30.3813 115.503 29.7481 115.112 29.3576L108.748 22.9936C108.358 22.6031 107.724 22.6031 107.334 22.9936C106.943 23.3842 106.943 24.0173 107.334 24.4078L112.991 30.0647L107.334 35.7216C106.943 36.1121 106.943 36.7452 107.334 37.1358C107.724 37.5263 108.358 37.5263 108.748 37.1358L115.112 30.7718ZM0.404907 31.0647H114.405V29.0647H0.404907V31.0647Z" fill="#080F2A" />
                                            <circle cx="107.248" cy="30.0648" r="28.5743" stroke="#080F2B" stroke-width="2" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="advantage">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="text-end d-md-none pb-3"><?= renderImg('free-solar-static.png', 'lib') ?></div>
                <div class="fs-64 lh-1 pb-4 pb-md-5 pb-xl-0">Experience the dual<br> advantage</div>
                <div class="d-flex">
                    <div class="advantage-1">
                        <div class="fs-48 lh-1 pb-3 pb-md-6 heading">Decrease<br> Energy Costs</div>
                        <a href="tel:<?= $phone_number ?>" class="btn border-white d-inline-flex rounded-0 text-white py-3 px-md-5">
                            Enquire Now
                        </a>
                        <div class="w-100 d-flex justify-content-center pt-4 pt-md-9"><?= renderImg('fancy-dollar.png', 'lib', 'fancy-dollar') ?></div>
                    </div>
                    <div class="advantage-2">
                        <div class="fs-48 lh-1 pb-3 pb-md-6 heading">Increase<br> Property Costs</div>
                        <a href="tel:<?= $phone_number ?>" class="btn border-white d-inline-flex rounded-0 text-white py-3 px-md-5">
                            Enquire Now
                        </a>
                        <div class="w-100 d-flex justify-content-center pt-4 pt-md-9"><?= renderImg('fancy-property.png', 'lib') ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="servicing_areas">
        <div class="pin"><?= renderImg('pin.png', 'lib') ?></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9">
                    <div class="row align-items-center">
                        <div class="col-lg-6 text-tertiary">
                            <div class="row d-md-none">
                                <div class="col-7 heading lh-1">Find a Sunbrite Solar technician near you</div>
                            </div>
                            <div class="fs-64 lh-0_76 d-none d-md-block">Find a Sunbrite Solar technician near you</div>
                            <div class="pt-5 d-lg-none"><?= renderImg('map.jpg', 'lib', 'w-100 rounded-26') ?></div>
                            <div class="fs-48 pt-4 pb-4">Areas we service</div>
                            <div class="row gy-3">
                                <div class="col-12 fs-24 text-tertiary"><u>Macarthur</u></div>
                                <div class="col-12 fs-24 text-tertiary"><u>Southern Highliands</u></div>
                                <div class="col-12 fs-24 text-tertiary"><u>South West Sydney</u></div>
                                <div class="col-12 fs-24 text-tertiary"><u>Wollongong</u></div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-none d-lg-block">
                            <?= renderImg('map.jpg', 'lib', 'w-100 rounded-54') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonials" id="testimonial_slider">
    <div class="review">
        <div>
            <svg width="210" height="39" viewBox="0 0 210 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.649 3.4915C18.9483 2.57019 20.2517 2.57019 20.5511 3.4915L23.5862 12.8327C23.7201 13.2447 24.104 13.5237 24.5373 13.5237H34.3592C35.3279 13.5237 35.7307 14.7633 34.947 15.3327L27.0009 21.1058C26.6504 21.3605 26.5037 21.8119 26.6376 22.2239L29.6727 31.5651C29.9721 32.4864 28.9176 33.2525 28.1339 32.6831L20.1878 26.9099C19.8373 26.6553 19.3627 26.6553 19.0122 26.9099L11.0662 32.6831C10.2824 33.2525 9.22796 32.4864 9.52732 31.5651L12.5624 22.2239C12.6963 21.8119 12.5497 21.3605 12.1992 21.1058L4.2531 15.3327C3.46938 14.7633 3.87216 13.5237 4.84088 13.5237H14.6628C15.096 13.5237 15.48 13.2447 15.6138 12.8327L18.649 3.4915Z" fill="#FF8800" />
                <path d="M61.4435 3.4915C61.7428 2.57019 63.0462 2.57019 63.3456 3.4915L66.3807 12.8327C66.5146 13.2447 66.8985 13.5237 67.3318 13.5237H77.1537C78.1224 13.5237 78.5252 14.7633 77.7414 15.3327L69.7954 21.1058C69.4449 21.3605 69.2982 21.8119 69.4321 22.2239L72.4672 31.5651C72.7666 32.4864 71.7121 33.2525 70.9284 32.6831L62.9823 26.9099C62.6318 26.6553 62.1572 26.6553 61.8067 26.9099L53.8607 32.6831C53.0769 33.2525 52.0225 32.4864 52.3218 31.5651L55.3569 22.2239C55.4908 21.8119 55.3442 21.3605 54.9937 21.1058L47.0476 15.3327C46.2639 14.7633 46.6667 13.5237 47.6354 13.5237H57.4573C57.8905 13.5237 58.2745 13.2447 58.4083 12.8327L61.4435 3.4915Z" fill="#FF8800" />
                <path d="M104.238 3.4915C104.537 2.57019 105.841 2.57019 106.14 3.4915L109.175 12.8327C109.309 13.2447 109.693 13.5237 110.126 13.5237H119.948C120.917 13.5237 121.32 14.7633 120.536 15.3327L112.59 21.1058C112.239 21.3605 112.093 21.8119 112.227 22.2239L115.262 31.5651C115.561 32.4864 114.507 33.2525 113.723 32.6831L105.777 26.9099C105.426 26.6553 104.952 26.6553 104.601 26.9099L96.6551 32.6831C95.8714 33.2525 94.817 32.4864 95.1163 31.5651L98.1514 22.2239C98.2853 21.8119 98.1387 21.3605 97.7882 21.1058L89.8421 15.3327C89.0584 14.7633 89.4611 13.5237 90.4299 13.5237H100.252C100.685 13.5237 101.069 13.2447 101.203 12.8327L104.238 3.4915Z" fill="#FF8800" />
                <path d="M147.033 3.4915C147.332 2.57019 148.635 2.57019 148.935 3.4915L151.97 12.8327C152.104 13.2447 152.488 13.5237 152.921 13.5237H162.743C163.711 13.5237 164.114 14.7633 163.33 15.3327L155.384 21.1058C155.034 21.3605 154.887 21.8119 155.021 22.2239L158.056 31.5651C158.356 32.4864 157.301 33.2525 156.517 32.6831L148.571 26.9099C148.221 26.6553 147.746 26.6553 147.396 26.9099L139.45 32.6831C138.666 33.2525 137.612 32.4864 137.911 31.5651L140.946 22.2239C141.08 21.8119 140.933 21.3605 140.583 21.1058L132.637 15.3327C131.853 14.7633 132.256 13.5237 133.224 13.5237H143.046C143.48 13.5237 143.864 13.2447 143.997 12.8327L147.033 3.4915Z" fill="#FF8800" />
                <path d="M189.827 3.4915C190.126 2.57019 191.43 2.57019 191.729 3.4915L194.764 12.8327C194.898 13.2447 195.282 13.5237 195.715 13.5237H205.537C206.506 13.5237 206.909 14.7633 206.125 15.3327L198.179 21.1058C197.828 21.3605 197.682 21.8119 197.816 22.2239L200.851 31.5651C201.15 32.4864 200.096 33.2525 199.312 32.6831L191.366 26.9099C191.015 26.6553 190.541 26.6553 190.19 26.9099L182.244 32.6831C181.46 33.2525 180.406 32.4864 180.705 31.5651L183.74 22.2239C183.874 21.8119 183.728 21.3605 183.377 21.1058L175.431 15.3327C174.647 14.7633 175.05 13.5237 176.019 13.5237H185.841C186.274 13.5237 186.658 13.2447 186.792 12.8327L189.827 3.4915Z" fill="#FF8800" />
            </svg>
            <div class="lh-1 py-3 pe-5 heading">Professional, affordable and knowledgeable</div>
        </div>
        <div class="description">Just had a 18.33kw solar system fitted to my home with Sunbrite Solar. Aaron, Tom and his team, made it happen where others could not. They were very professional, affordable and knowledgeable. Would thoroughly recommend this company. Well Done.</div>
        <div class="row pt-4 align-items-center">
            <div class="col-auto"><?= renderImg('user-1.png', 'lib') ?></div>
            <div class="col fs-24">Stephen. T</div>
        </div>
    </div>
    <div class="review">
        <div>
            <svg width="210" height="39" viewBox="0 0 210 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.649 3.4915C18.9483 2.57019 20.2517 2.57019 20.5511 3.4915L23.5862 12.8327C23.7201 13.2447 24.104 13.5237 24.5373 13.5237H34.3592C35.3279 13.5237 35.7307 14.7633 34.947 15.3327L27.0009 21.1058C26.6504 21.3605 26.5037 21.8119 26.6376 22.2239L29.6727 31.5651C29.9721 32.4864 28.9176 33.2525 28.1339 32.6831L20.1878 26.9099C19.8373 26.6553 19.3627 26.6553 19.0122 26.9099L11.0662 32.6831C10.2824 33.2525 9.22796 32.4864 9.52732 31.5651L12.5624 22.2239C12.6963 21.8119 12.5497 21.3605 12.1992 21.1058L4.2531 15.3327C3.46938 14.7633 3.87216 13.5237 4.84088 13.5237H14.6628C15.096 13.5237 15.48 13.2447 15.6138 12.8327L18.649 3.4915Z" fill="#FF8800" />
                <path d="M61.4435 3.4915C61.7428 2.57019 63.0462 2.57019 63.3456 3.4915L66.3807 12.8327C66.5146 13.2447 66.8985 13.5237 67.3318 13.5237H77.1537C78.1224 13.5237 78.5252 14.7633 77.7414 15.3327L69.7954 21.1058C69.4449 21.3605 69.2982 21.8119 69.4321 22.2239L72.4672 31.5651C72.7666 32.4864 71.7121 33.2525 70.9284 32.6831L62.9823 26.9099C62.6318 26.6553 62.1572 26.6553 61.8067 26.9099L53.8607 32.6831C53.0769 33.2525 52.0225 32.4864 52.3218 31.5651L55.3569 22.2239C55.4908 21.8119 55.3442 21.3605 54.9937 21.1058L47.0476 15.3327C46.2639 14.7633 46.6667 13.5237 47.6354 13.5237H57.4573C57.8905 13.5237 58.2745 13.2447 58.4083 12.8327L61.4435 3.4915Z" fill="#FF8800" />
                <path d="M104.238 3.4915C104.537 2.57019 105.841 2.57019 106.14 3.4915L109.175 12.8327C109.309 13.2447 109.693 13.5237 110.126 13.5237H119.948C120.917 13.5237 121.32 14.7633 120.536 15.3327L112.59 21.1058C112.239 21.3605 112.093 21.8119 112.227 22.2239L115.262 31.5651C115.561 32.4864 114.507 33.2525 113.723 32.6831L105.777 26.9099C105.426 26.6553 104.952 26.6553 104.601 26.9099L96.6551 32.6831C95.8714 33.2525 94.817 32.4864 95.1163 31.5651L98.1514 22.2239C98.2853 21.8119 98.1387 21.3605 97.7882 21.1058L89.8421 15.3327C89.0584 14.7633 89.4611 13.5237 90.4299 13.5237H100.252C100.685 13.5237 101.069 13.2447 101.203 12.8327L104.238 3.4915Z" fill="#FF8800" />
                <path d="M147.033 3.4915C147.332 2.57019 148.635 2.57019 148.935 3.4915L151.97 12.8327C152.104 13.2447 152.488 13.5237 152.921 13.5237H162.743C163.711 13.5237 164.114 14.7633 163.33 15.3327L155.384 21.1058C155.034 21.3605 154.887 21.8119 155.021 22.2239L158.056 31.5651C158.356 32.4864 157.301 33.2525 156.517 32.6831L148.571 26.9099C148.221 26.6553 147.746 26.6553 147.396 26.9099L139.45 32.6831C138.666 33.2525 137.612 32.4864 137.911 31.5651L140.946 22.2239C141.08 21.8119 140.933 21.3605 140.583 21.1058L132.637 15.3327C131.853 14.7633 132.256 13.5237 133.224 13.5237H143.046C143.48 13.5237 143.864 13.2447 143.997 12.8327L147.033 3.4915Z" fill="#FF8800" />
                <path d="M189.827 3.4915C190.126 2.57019 191.43 2.57019 191.729 3.4915L194.764 12.8327C194.898 13.2447 195.282 13.5237 195.715 13.5237H205.537C206.506 13.5237 206.909 14.7633 206.125 15.3327L198.179 21.1058C197.828 21.3605 197.682 21.8119 197.816 22.2239L200.851 31.5651C201.15 32.4864 200.096 33.2525 199.312 32.6831L191.366 26.9099C191.015 26.6553 190.541 26.6553 190.19 26.9099L182.244 32.6831C181.46 33.2525 180.406 32.4864 180.705 31.5651L183.74 22.2239C183.874 21.8119 183.728 21.3605 183.377 21.1058L175.431 15.3327C174.647 14.7633 175.05 13.5237 176.019 13.5237H185.841C186.274 13.5237 186.658 13.2447 186.792 12.8327L189.827 3.4915Z" fill="#FF8800" />
            </svg>
            <div class="heading lh-1 py-3 pe-5">Couldn't be happier</div>
        </div>
        <div class="description">Great customer service on the phone and great workmanship. They were very helpful and got the job done at the best quality. Couldn't be happier.</div>
        <div class="row pt-4 align-items-center">
            <div class="col-auto"><?= renderImg('user-2.png', 'lib') ?></div>
            <div class="col fs-24">Casper. S</div>
        </div>
    </div>
    <div class="review">
        <div>
            <svg width="210" height="39" viewBox="0 0 210 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.649 3.4915C18.9483 2.57019 20.2517 2.57019 20.5511 3.4915L23.5862 12.8327C23.7201 13.2447 24.104 13.5237 24.5373 13.5237H34.3592C35.3279 13.5237 35.7307 14.7633 34.947 15.3327L27.0009 21.1058C26.6504 21.3605 26.5037 21.8119 26.6376 22.2239L29.6727 31.5651C29.9721 32.4864 28.9176 33.2525 28.1339 32.6831L20.1878 26.9099C19.8373 26.6553 19.3627 26.6553 19.0122 26.9099L11.0662 32.6831C10.2824 33.2525 9.22796 32.4864 9.52732 31.5651L12.5624 22.2239C12.6963 21.8119 12.5497 21.3605 12.1992 21.1058L4.2531 15.3327C3.46938 14.7633 3.87216 13.5237 4.84088 13.5237H14.6628C15.096 13.5237 15.48 13.2447 15.6138 12.8327L18.649 3.4915Z" fill="#FF8800" />
                <path d="M61.4435 3.4915C61.7428 2.57019 63.0462 2.57019 63.3456 3.4915L66.3807 12.8327C66.5146 13.2447 66.8985 13.5237 67.3318 13.5237H77.1537C78.1224 13.5237 78.5252 14.7633 77.7414 15.3327L69.7954 21.1058C69.4449 21.3605 69.2982 21.8119 69.4321 22.2239L72.4672 31.5651C72.7666 32.4864 71.7121 33.2525 70.9284 32.6831L62.9823 26.9099C62.6318 26.6553 62.1572 26.6553 61.8067 26.9099L53.8607 32.6831C53.0769 33.2525 52.0225 32.4864 52.3218 31.5651L55.3569 22.2239C55.4908 21.8119 55.3442 21.3605 54.9937 21.1058L47.0476 15.3327C46.2639 14.7633 46.6667 13.5237 47.6354 13.5237H57.4573C57.8905 13.5237 58.2745 13.2447 58.4083 12.8327L61.4435 3.4915Z" fill="#FF8800" />
                <path d="M104.238 3.4915C104.537 2.57019 105.841 2.57019 106.14 3.4915L109.175 12.8327C109.309 13.2447 109.693 13.5237 110.126 13.5237H119.948C120.917 13.5237 121.32 14.7633 120.536 15.3327L112.59 21.1058C112.239 21.3605 112.093 21.8119 112.227 22.2239L115.262 31.5651C115.561 32.4864 114.507 33.2525 113.723 32.6831L105.777 26.9099C105.426 26.6553 104.952 26.6553 104.601 26.9099L96.6551 32.6831C95.8714 33.2525 94.817 32.4864 95.1163 31.5651L98.1514 22.2239C98.2853 21.8119 98.1387 21.3605 97.7882 21.1058L89.8421 15.3327C89.0584 14.7633 89.4611 13.5237 90.4299 13.5237H100.252C100.685 13.5237 101.069 13.2447 101.203 12.8327L104.238 3.4915Z" fill="#FF8800" />
                <path d="M147.033 3.4915C147.332 2.57019 148.635 2.57019 148.935 3.4915L151.97 12.8327C152.104 13.2447 152.488 13.5237 152.921 13.5237H162.743C163.711 13.5237 164.114 14.7633 163.33 15.3327L155.384 21.1058C155.034 21.3605 154.887 21.8119 155.021 22.2239L158.056 31.5651C158.356 32.4864 157.301 33.2525 156.517 32.6831L148.571 26.9099C148.221 26.6553 147.746 26.6553 147.396 26.9099L139.45 32.6831C138.666 33.2525 137.612 32.4864 137.911 31.5651L140.946 22.2239C141.08 21.8119 140.933 21.3605 140.583 21.1058L132.637 15.3327C131.853 14.7633 132.256 13.5237 133.224 13.5237H143.046C143.48 13.5237 143.864 13.2447 143.997 12.8327L147.033 3.4915Z" fill="#FF8800" />
                <path d="M189.827 3.4915C190.126 2.57019 191.43 2.57019 191.729 3.4915L194.764 12.8327C194.898 13.2447 195.282 13.5237 195.715 13.5237H205.537C206.506 13.5237 206.909 14.7633 206.125 15.3327L198.179 21.1058C197.828 21.3605 197.682 21.8119 197.816 22.2239L200.851 31.5651C201.15 32.4864 200.096 33.2525 199.312 32.6831L191.366 26.9099C191.015 26.6553 190.541 26.6553 190.19 26.9099L182.244 32.6831C181.46 33.2525 180.406 32.4864 180.705 31.5651L183.74 22.2239C183.874 21.8119 183.728 21.3605 183.377 21.1058L175.431 15.3327C174.647 14.7633 175.05 13.5237 176.019 13.5237H185.841C186.274 13.5237 186.658 13.2447 186.792 12.8327L189.827 3.4915Z" fill="#FF8800" />
            </svg>
            <div class="heading lh-1 py-3 pe-5">Tom quickly fixed the issue with our solar</div>
        </div>
        <div class="description">
            We rent where we live and another company installed the solar system but did not connect the inverter properly. Tom from Sunbrite Solar came out and fixed it for us so our solar is now working properly. It was a quick fix and didn’t even charge me. Thank you Tom.
        </div>
        <div class="row pt-4 align-items-center">
            <div class="col-auto"><?= renderImg('user-3.png', 'lib') ?></div>
            <div class="col fs-24">Jane. K</div>
        </div>
    </div>
    <div class="review">
        <div>
            <svg width="210" height="39" viewBox="0 0 210 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.649 3.4915C18.9483 2.57019 20.2517 2.57019 20.5511 3.4915L23.5862 12.8327C23.7201 13.2447 24.104 13.5237 24.5373 13.5237H34.3592C35.3279 13.5237 35.7307 14.7633 34.947 15.3327L27.0009 21.1058C26.6504 21.3605 26.5037 21.8119 26.6376 22.2239L29.6727 31.5651C29.9721 32.4864 28.9176 33.2525 28.1339 32.6831L20.1878 26.9099C19.8373 26.6553 19.3627 26.6553 19.0122 26.9099L11.0662 32.6831C10.2824 33.2525 9.22796 32.4864 9.52732 31.5651L12.5624 22.2239C12.6963 21.8119 12.5497 21.3605 12.1992 21.1058L4.2531 15.3327C3.46938 14.7633 3.87216 13.5237 4.84088 13.5237H14.6628C15.096 13.5237 15.48 13.2447 15.6138 12.8327L18.649 3.4915Z" fill="#FF8800" />
                <path d="M61.4435 3.4915C61.7428 2.57019 63.0462 2.57019 63.3456 3.4915L66.3807 12.8327C66.5146 13.2447 66.8985 13.5237 67.3318 13.5237H77.1537C78.1224 13.5237 78.5252 14.7633 77.7414 15.3327L69.7954 21.1058C69.4449 21.3605 69.2982 21.8119 69.4321 22.2239L72.4672 31.5651C72.7666 32.4864 71.7121 33.2525 70.9284 32.6831L62.9823 26.9099C62.6318 26.6553 62.1572 26.6553 61.8067 26.9099L53.8607 32.6831C53.0769 33.2525 52.0225 32.4864 52.3218 31.5651L55.3569 22.2239C55.4908 21.8119 55.3442 21.3605 54.9937 21.1058L47.0476 15.3327C46.2639 14.7633 46.6667 13.5237 47.6354 13.5237H57.4573C57.8905 13.5237 58.2745 13.2447 58.4083 12.8327L61.4435 3.4915Z" fill="#FF8800" />
                <path d="M104.238 3.4915C104.537 2.57019 105.841 2.57019 106.14 3.4915L109.175 12.8327C109.309 13.2447 109.693 13.5237 110.126 13.5237H119.948C120.917 13.5237 121.32 14.7633 120.536 15.3327L112.59 21.1058C112.239 21.3605 112.093 21.8119 112.227 22.2239L115.262 31.5651C115.561 32.4864 114.507 33.2525 113.723 32.6831L105.777 26.9099C105.426 26.6553 104.952 26.6553 104.601 26.9099L96.6551 32.6831C95.8714 33.2525 94.817 32.4864 95.1163 31.5651L98.1514 22.2239C98.2853 21.8119 98.1387 21.3605 97.7882 21.1058L89.8421 15.3327C89.0584 14.7633 89.4611 13.5237 90.4299 13.5237H100.252C100.685 13.5237 101.069 13.2447 101.203 12.8327L104.238 3.4915Z" fill="#FF8800" />
                <path d="M147.033 3.4915C147.332 2.57019 148.635 2.57019 148.935 3.4915L151.97 12.8327C152.104 13.2447 152.488 13.5237 152.921 13.5237H162.743C163.711 13.5237 164.114 14.7633 163.33 15.3327L155.384 21.1058C155.034 21.3605 154.887 21.8119 155.021 22.2239L158.056 31.5651C158.356 32.4864 157.301 33.2525 156.517 32.6831L148.571 26.9099C148.221 26.6553 147.746 26.6553 147.396 26.9099L139.45 32.6831C138.666 33.2525 137.612 32.4864 137.911 31.5651L140.946 22.2239C141.08 21.8119 140.933 21.3605 140.583 21.1058L132.637 15.3327C131.853 14.7633 132.256 13.5237 133.224 13.5237H143.046C143.48 13.5237 143.864 13.2447 143.997 12.8327L147.033 3.4915Z" fill="#FF8800" />
                <path d="M189.827 3.4915C190.126 2.57019 191.43 2.57019 191.729 3.4915L194.764 12.8327C194.898 13.2447 195.282 13.5237 195.715 13.5237H205.537C206.506 13.5237 206.909 14.7633 206.125 15.3327L198.179 21.1058C197.828 21.3605 197.682 21.8119 197.816 22.2239L200.851 31.5651C201.15 32.4864 200.096 33.2525 199.312 32.6831L191.366 26.9099C191.015 26.6553 190.541 26.6553 190.19 26.9099L182.244 32.6831C181.46 33.2525 180.406 32.4864 180.705 31.5651L183.74 22.2239C183.874 21.8119 183.728 21.3605 183.377 21.1058L175.431 15.3327C174.647 14.7633 175.05 13.5237 176.019 13.5237H185.841C186.274 13.5237 186.658 13.2447 186.792 12.8327L189.827 3.4915Z" fill="#FF8800" />
            </svg>
            <div class="heading lh-1 py-3 pe-5">Thank you for saving me on my electricity bill!</div>
        </div>
        <div class="description">
            Highly recommended providing an easy and professional experience. Explained everything I needed to know, was impressed with the high level of workmanship. Thank you Sunbrite for a more sustainable future and saving me on my electricity bill.
        </div>
        <div class="row pt-4 align-items-center">
            <div class="col-auto"><?= renderImg('user-3.png', 'lib') ?></div>
            <div class="col fs-24">Belinda. G</div>
        </div>
    </div>
    <div class="review">
        <div>
            <svg width="210" height="39" viewBox="0 0 210 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.649 3.4915C18.9483 2.57019 20.2517 2.57019 20.5511 3.4915L23.5862 12.8327C23.7201 13.2447 24.104 13.5237 24.5373 13.5237H34.3592C35.3279 13.5237 35.7307 14.7633 34.947 15.3327L27.0009 21.1058C26.6504 21.3605 26.5037 21.8119 26.6376 22.2239L29.6727 31.5651C29.9721 32.4864 28.9176 33.2525 28.1339 32.6831L20.1878 26.9099C19.8373 26.6553 19.3627 26.6553 19.0122 26.9099L11.0662 32.6831C10.2824 33.2525 9.22796 32.4864 9.52732 31.5651L12.5624 22.2239C12.6963 21.8119 12.5497 21.3605 12.1992 21.1058L4.2531 15.3327C3.46938 14.7633 3.87216 13.5237 4.84088 13.5237H14.6628C15.096 13.5237 15.48 13.2447 15.6138 12.8327L18.649 3.4915Z" fill="#FF8800" />
                <path d="M61.4435 3.4915C61.7428 2.57019 63.0462 2.57019 63.3456 3.4915L66.3807 12.8327C66.5146 13.2447 66.8985 13.5237 67.3318 13.5237H77.1537C78.1224 13.5237 78.5252 14.7633 77.7414 15.3327L69.7954 21.1058C69.4449 21.3605 69.2982 21.8119 69.4321 22.2239L72.4672 31.5651C72.7666 32.4864 71.7121 33.2525 70.9284 32.6831L62.9823 26.9099C62.6318 26.6553 62.1572 26.6553 61.8067 26.9099L53.8607 32.6831C53.0769 33.2525 52.0225 32.4864 52.3218 31.5651L55.3569 22.2239C55.4908 21.8119 55.3442 21.3605 54.9937 21.1058L47.0476 15.3327C46.2639 14.7633 46.6667 13.5237 47.6354 13.5237H57.4573C57.8905 13.5237 58.2745 13.2447 58.4083 12.8327L61.4435 3.4915Z" fill="#FF8800" />
                <path d="M104.238 3.4915C104.537 2.57019 105.841 2.57019 106.14 3.4915L109.175 12.8327C109.309 13.2447 109.693 13.5237 110.126 13.5237H119.948C120.917 13.5237 121.32 14.7633 120.536 15.3327L112.59 21.1058C112.239 21.3605 112.093 21.8119 112.227 22.2239L115.262 31.5651C115.561 32.4864 114.507 33.2525 113.723 32.6831L105.777 26.9099C105.426 26.6553 104.952 26.6553 104.601 26.9099L96.6551 32.6831C95.8714 33.2525 94.817 32.4864 95.1163 31.5651L98.1514 22.2239C98.2853 21.8119 98.1387 21.3605 97.7882 21.1058L89.8421 15.3327C89.0584 14.7633 89.4611 13.5237 90.4299 13.5237H100.252C100.685 13.5237 101.069 13.2447 101.203 12.8327L104.238 3.4915Z" fill="#FF8800" />
                <path d="M147.033 3.4915C147.332 2.57019 148.635 2.57019 148.935 3.4915L151.97 12.8327C152.104 13.2447 152.488 13.5237 152.921 13.5237H162.743C163.711 13.5237 164.114 14.7633 163.33 15.3327L155.384 21.1058C155.034 21.3605 154.887 21.8119 155.021 22.2239L158.056 31.5651C158.356 32.4864 157.301 33.2525 156.517 32.6831L148.571 26.9099C148.221 26.6553 147.746 26.6553 147.396 26.9099L139.45 32.6831C138.666 33.2525 137.612 32.4864 137.911 31.5651L140.946 22.2239C141.08 21.8119 140.933 21.3605 140.583 21.1058L132.637 15.3327C131.853 14.7633 132.256 13.5237 133.224 13.5237H143.046C143.48 13.5237 143.864 13.2447 143.997 12.8327L147.033 3.4915Z" fill="#FF8800" />
                <path d="M189.827 3.4915C190.126 2.57019 191.43 2.57019 191.729 3.4915L194.764 12.8327C194.898 13.2447 195.282 13.5237 195.715 13.5237H205.537C206.506 13.5237 206.909 14.7633 206.125 15.3327L198.179 21.1058C197.828 21.3605 197.682 21.8119 197.816 22.2239L200.851 31.5651C201.15 32.4864 200.096 33.2525 199.312 32.6831L191.366 26.9099C191.015 26.6553 190.541 26.6553 190.19 26.9099L182.244 32.6831C181.46 33.2525 180.406 32.4864 180.705 31.5651L183.74 22.2239C183.874 21.8119 183.728 21.3605 183.377 21.1058L175.431 15.3327C174.647 14.7633 175.05 13.5237 176.019 13.5237H185.841C186.274 13.5237 186.658 13.2447 186.792 12.8327L189.827 3.4915Z" fill="#FF8800" />
            </svg>
            <div class="heading lh-1 py-3 pe-5">Nice to bank the saving towards our kids education!</div>
        </div>
        <div class="description">
            Wow! I just want to say a big thank you to Tom and the team at Sunbrite for the amazing system they installed. We have saved so much money and are getting a nice bit of money back to put towards our kids schooling.
        </div>
        <div class="row pt-4 align-items-center">
            <div class="col-auto"><?= renderImg('user-4.png', 'lib') ?></div>
            <div class="col fs-24">Jacqueline. D</div>
        </div>
    </div>
</section>

<section class="government_benefits">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="government_benefits_inner">
                    <div class="wrapper">
                        <div class="row justify-content-center position-relative">
                            <div class="col-8 col-md-10 col-xl-8">
                                <div class="fs-64 lh-1 pb-4 pb-md-6 heading">Seize Government Benefits and Solar Rewards Today</div>
                                <a href="tel:<?= $phone_number ?>" class="btn border-dark d-inline-flex rounded-0 text-dark py-3 px-md-5">
                                    Enquire Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="playButton"><?= renderImg('playButton.png', 'icons') ?></a>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="container">
    <footer>
        <video id="footerVideo" width="100%" autoplay loop muted>
            <source src="./assets/video/header.mp4" type="video/mp4">
            <source src="./assets/video/header.webm" type="video/webm">
            Your browser does not support the video tag.
        </video>
        <div class="position-relative">
            <div class="row top_row justify-content-center justify-content-md-start">
                <div class="col-9 col-xl-4 text-center text-md-start">
                    <a href="./"><?= renderImg('logo.png', 'logo') ?></a>
                    <div class="fs-36 pt-3 pt-md-5 pb-md-6 subHeading">Sydney's Go-To Solar</div>
                    <?= renderImg('clean-energy-council.png', 'logo', 'd-none d-md-block') ?>
                </div>
                <div class="col-xl-4">
                    <div class="row">
                        <div class="col-md-auto">
                            <div class="fs-26 fw-700 pt-5 pb-3 py-md-5">Quick Links</div>
                            <ul class="footer_menu">
                                <li><a href="" class="nav-link">Rebates</a></li>
                                <li><a href="" class="nav-link">Services</a></li>
                                <li><a href="" class="nav-link">Installs</a></li>
                                <li><a href="" class="nav-link">Repairs</a></li>
                            </ul>
                        </div>
                        <div class="col-md col-lg-5 col-xl">
                            <div class="fs-26 fw-700 py-3 py-md-5">Contact</div>
                            <ul class="footer_menu">
                                <li><a href="" class="nav-link"><?= $phone_number ?></a></li>
                                <li><a href="" class="nav-link"><?= $admin_email ?></a></li>
                                <li><a href="" class="nav-link">Unit 3/69 Topham Rd, Smeaton Grange NSW 2570</a></li>
                                <li>
                                    <div class="nav-link">
                                        Mon - Fri 7am - 7pm
                                        <br>Sat 8am - 5pm
                                        <br>Sunday - Closed
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row align-items-center gx-4 gx-md-5 pt-4 pt-md-5">
                        <div class="col-auto">
                            <a href="" class="facebook" target="_blank">
                                <svg width="14" height="25" viewBox="0 0 14 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.10153 24.209V13.2615H12.9611L13.539 8.99499H9.10142V6.27103C9.10142 5.03578 9.46165 4.19403 11.3222 4.19403L13.6952 4.19297V0.37708C13.2847 0.325179 11.8761 0.208984 10.2374 0.208984C6.81606 0.208984 4.47374 2.19722 4.47374 5.84862V8.99499H0.604248V13.2615H4.47374V24.2089H9.10153V24.209Z" fill="#080F2B" />
                                </svg>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="" class="twitter" target="_blank">
                                <svg width="25" height="20" viewBox="0 0 25 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.5191 0.476978V0.472656H17.6444L18.0556 0.554779C18.3297 0.608094 18.5786 0.677963 18.8022 0.764408C19.0259 0.850852 19.2423 0.951712 19.4515 1.06696C19.6607 1.18222 19.8504 1.29965 20.0207 1.41923C20.1895 1.53738 20.3409 1.66272 20.4751 1.79526C20.6078 1.92925 20.8149 1.96383 21.0962 1.899C21.3775 1.83416 21.6805 1.74411 22.0051 1.62886C22.3297 1.5136 22.6508 1.38394 22.9682 1.23985C23.2856 1.09577 23.4789 1.00429 23.5482 0.965392C23.616 0.925065 23.652 0.903454 23.6564 0.900558L23.6607 0.894075L23.6823 0.883269L23.704 0.872464L23.7256 0.861658L23.7472 0.850852L23.7516 0.844369L23.7581 0.840047L23.7646 0.835725L23.7689 0.829241L23.7905 0.822758L23.8122 0.818436L23.8079 0.850852L23.8013 0.883269L23.7905 0.915686L23.7797 0.948103L23.7689 0.969714L23.7581 0.991325L23.7472 1.02374C23.74 1.04535 23.7328 1.07416 23.7256 1.11019C23.7184 1.14621 23.6498 1.29027 23.52 1.54241C23.3902 1.79455 23.2278 2.05027 23.0331 2.30961C22.8383 2.56894 22.6638 2.76487 22.5094 2.89743C22.3536 3.03142 22.2504 3.12506 22.1999 3.17838C22.1494 3.23312 22.0881 3.28354 22.0159 3.32966L21.9077 3.40098L21.8861 3.41178L21.8645 3.42259L21.8602 3.42907L21.8536 3.43339L21.8471 3.43771L21.8428 3.4442L21.8212 3.455L21.7995 3.46581L21.7952 3.47229L21.7887 3.47661L21.7822 3.48094L21.7779 3.48742L21.7736 3.4939L21.7671 3.49823L21.7606 3.50255L21.7563 3.50903H21.8645L22.4704 3.37936C22.8744 3.29292 23.2603 3.18847 23.6282 3.066L24.2125 2.8715L24.2774 2.84989L24.3099 2.83908L24.3315 2.82828L24.3532 2.81747L24.3748 2.80667L24.3965 2.79586L24.4398 2.78938L24.483 2.78506V2.82828L24.4722 2.8326L24.4614 2.83908L24.4571 2.84557L24.4506 2.84989L24.4441 2.85421L24.4398 2.86069L24.4354 2.86718L24.4289 2.8715L24.4224 2.87582L24.4181 2.88231L24.4138 2.88879L24.4073 2.89311L24.3965 2.91472L24.3856 2.93633L24.3792 2.94066C24.3763 2.94498 24.2847 3.06743 24.1043 3.30805C23.924 3.55009 23.8266 3.67254 23.8122 3.67544C23.7977 3.67976 23.7775 3.70137 23.7516 3.74027C23.727 3.7806 23.5741 3.94126 23.2928 4.2222C23.0114 4.50315 22.7359 4.7531 22.4661 4.97211C22.1949 5.19254 22.0578 5.4634 22.0549 5.78469C22.0506 6.10454 22.034 6.46618 22.0051 6.86957C21.9763 7.27299 21.9222 7.7088 21.8428 8.17705C21.7635 8.6453 21.6408 9.17478 21.4749 9.76548C21.309 10.3562 21.107 10.9325 20.869 11.4944C20.6309 12.0563 20.382 12.5605 20.1223 13.0072C19.8627 13.4538 19.6246 13.832 19.4082 14.1417C19.1918 14.4515 18.9718 14.7433 18.7481 15.017C18.5245 15.2907 18.2418 15.5991 17.8998 15.942C17.5564 16.2834 17.3689 16.4707 17.3372 16.5039C17.304 16.5356 17.1626 16.6537 16.913 16.8583C16.6648 17.0643 16.3979 17.2703 16.1122 17.4764C15.828 17.681 15.5669 17.8517 15.3288 17.9885C15.0908 18.1254 14.8037 18.2817 14.4675 18.4575C14.1328 18.6347 13.7707 18.799 13.3811 18.9502C12.9916 19.1015 12.5804 19.242 12.1476 19.3717C11.7148 19.5013 11.2964 19.6022 10.8924 19.6742C10.4885 19.7462 10.0304 19.8075 9.5182 19.8579L8.74994 19.9335V19.9444H7.34327V19.9335L7.15932 19.9227C7.0367 19.9155 6.9357 19.9083 6.85634 19.9011C6.77701 19.8939 6.47762 19.8543 5.95824 19.7823C5.43885 19.7102 5.03128 19.6382 4.73551 19.5662C4.43976 19.4941 3.99971 19.3572 3.4154 19.1555C2.83109 18.9538 2.33118 18.75 1.91567 18.544C1.50161 18.3394 1.24192 18.2097 1.13659 18.1549C1.03272 18.1016 0.915855 18.0354 0.786008 17.9561L0.591238 17.8373L0.586931 17.8308L0.580417 17.8265L0.573925 17.8221L0.569597 17.8157L0.547956 17.8048L0.526314 17.794L0.522008 17.7876L0.515494 17.7832L0.509002 17.7789L0.504673 17.7724L0.500367 17.7659L0.493853 17.7616H0.483032V17.7184L0.504673 17.7227L0.526314 17.7292L0.6237 17.74C0.688623 17.7472 0.865366 17.758 1.15391 17.7724C1.44247 17.7868 1.74904 17.7868 2.07365 17.7724C2.39827 17.758 2.73012 17.7256 3.06915 17.6752C3.4082 17.6248 3.80856 17.5383 4.27023 17.4158C4.73192 17.2934 5.15609 17.1479 5.54275 16.9793C5.92796 16.8093 6.20207 16.6825 6.36511 16.5989C6.52668 16.5168 6.77339 16.3641 7.10521 16.1408L7.60296 15.8058L7.60729 15.7993L7.61378 15.795L7.62029 15.7907L7.6246 15.7842L7.62893 15.7777L7.63542 15.7734L7.64194 15.7691L7.64624 15.7626L7.66788 15.7561L7.68952 15.7518L7.69385 15.7302L7.70035 15.7086L7.70686 15.7042L7.71117 15.6978L7.53804 15.6869C7.42262 15.6798 7.31081 15.6725 7.2026 15.6653C7.09439 15.6581 6.92488 15.6257 6.69403 15.5681C6.46321 15.5104 6.21434 15.424 5.94741 15.3088C5.68051 15.1935 5.42082 15.0566 5.16833 14.8981C4.91587 14.7397 4.73335 14.6078 4.62081 14.5027C4.50973 14.3989 4.36545 14.252 4.18799 14.0618C4.01198 13.8702 3.85905 13.6735 3.7292 13.4718C3.59935 13.2701 3.47528 13.0374 3.35699 12.7738L3.17735 12.3804L3.16653 12.348L3.15571 12.3156L3.14922 12.294L3.14489 12.2724L3.17735 12.2767L3.20981 12.2832L3.44787 12.3156C3.60658 12.3372 3.85545 12.3444 4.19448 12.3372C4.53354 12.33 4.76797 12.3156 4.89782 12.294C5.02767 12.2724 5.10703 12.258 5.13587 12.2508L5.17915 12.24L5.23326 12.2292L5.28736 12.2183L5.29169 12.2119L5.29818 12.2075L5.3047 12.2032L5.309 12.1967L5.26572 12.1859L5.22244 12.1751L5.17915 12.1643L5.13587 12.1535L5.09259 12.1427C5.06374 12.1355 5.01325 12.1211 4.9411 12.0995C4.86897 12.0779 4.6742 11.9986 4.35679 11.8618C4.0394 11.7249 3.78692 11.5916 3.59935 11.462C3.41132 11.3319 3.23204 11.1897 3.06265 11.0362C2.89385 10.8806 2.70847 10.6803 2.50648 10.4354C2.3045 10.1905 2.12416 9.90595 1.96545 9.58178C1.80675 9.25761 1.68773 8.94786 1.60837 8.6525C1.52933 8.35888 1.47719 8.05869 1.45258 7.75563L1.4136 7.3018L1.43524 7.30612L1.45688 7.3126L1.47852 7.32341L1.50016 7.33422L1.52181 7.34502L1.54345 7.35583L1.87888 7.5071C2.10252 7.60796 2.38024 7.69441 2.71207 7.76644C3.04391 7.83847 3.24227 7.8781 3.3072 7.8853L3.40458 7.89611H3.59935L3.59505 7.88962L3.58853 7.8853L3.58204 7.88098L3.57771 7.8745L3.57341 7.86801L3.56689 7.86369L3.5604 7.85937L3.55607 7.85288L3.53443 7.84208L3.51279 7.83127L3.50848 7.82479L3.50197 7.82047L3.49548 7.81614L3.49115 7.80966L3.46951 7.79886L3.44787 7.78805L3.44356 7.78157C3.43923 7.77867 3.37719 7.73257 3.25742 7.64326C3.13911 7.55249 3.01504 7.43507 2.8852 7.29099C2.75535 7.14691 2.6255 6.99563 2.49566 6.83716C2.36557 6.67832 2.24971 6.50838 2.1494 6.32929C2.04842 6.14921 1.94164 5.92011 1.82911 5.64206C1.71803 5.36543 1.63363 5.08665 1.57591 4.8057C1.51821 4.52476 1.48575 4.24742 1.47852 3.97367C1.47132 3.69992 1.47852 3.46581 1.50016 3.27131C1.52181 3.07681 1.56509 2.85709 1.63001 2.61217C1.69493 2.36725 1.78873 2.10791 1.91135 1.83416L2.0953 1.42355L2.10612 1.39113L2.11694 1.35872L2.12345 1.35439L2.12776 1.34791L2.13209 1.34143L2.13858 1.3371L2.14509 1.34143L2.1494 1.34791L2.15373 1.35439L2.16022 1.35872L2.16673 1.36304L2.17104 1.36952L2.17537 1.376L2.18186 1.38033L2.19268 1.40194L2.2035 1.42355L2.21002 1.42787L2.21432 1.43436L2.50648 1.75852C2.70125 1.97464 2.93209 2.21597 3.19899 2.4825C3.46591 2.74903 3.61379 2.88734 3.64264 2.89743C3.6715 2.90895 3.70756 2.94208 3.75084 2.99685C3.79412 3.05016 3.9384 3.17767 4.18366 3.37936C4.42894 3.58106 4.74995 3.8152 5.14669 4.08173C5.54346 4.34826 5.98349 4.6112 6.4668 4.87054C6.95013 5.12987 7.46952 5.36399 8.02496 5.5729C8.58042 5.78182 8.96996 5.91868 9.19358 5.98351C9.41722 6.04835 9.79953 6.13118 10.3406 6.23204C10.8816 6.3329 11.2892 6.39774 11.5633 6.42654C11.8374 6.45535 12.025 6.47193 12.126 6.47625L12.2774 6.48057L12.2731 6.44816L12.2666 6.41574L12.2233 6.1456C12.1945 5.96551 12.1801 5.71337 12.1801 5.38921C12.1801 5.06504 12.2053 4.76609 12.2558 4.49234C12.3063 4.21859 12.3821 3.94126 12.483 3.66031C12.584 3.37936 12.6829 3.15387 12.7795 2.98388C12.8776 2.81531 13.006 2.62297 13.1647 2.40686C13.3234 2.19075 13.529 1.96744 13.7815 1.73691C14.034 1.50639 14.3225 1.30108 14.6471 1.12099C14.9718 0.940906 15.2711 0.804021 15.5453 0.71038C15.8194 0.616738 16.0502 0.555492 16.2378 0.526684C16.4253 0.497877 16.5191 0.481301 16.5191 0.476978Z" fill="#080F2B" />
                                </svg>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="" class="instagram" target="_blank">
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.816406 12.209C0.816406 7.41546 0.816406 5.01871 1.95866 3.29239C2.46873 2.5215 3.12892 1.86131 3.89981 1.35124C5.62613 0.208984 8.02289 0.208984 12.8164 0.208984C17.6099 0.208984 20.0067 0.208984 21.733 1.35124C22.5039 1.86131 23.1641 2.5215 23.6742 3.29239C24.8164 5.01871 24.8164 7.41546 24.8164 12.209C24.8164 17.0025 24.8164 19.3993 23.6742 21.1256C23.1641 21.8965 22.5039 22.5567 21.733 23.0667C20.0067 24.209 17.6099 24.209 12.8164 24.209C8.02289 24.209 5.62613 24.209 3.89981 23.0667C3.12892 22.5567 2.46873 21.8965 1.95866 21.1256C0.816406 19.3993 0.816406 17.0025 0.816406 12.209ZM19.0287 12.2089C19.0287 15.64 16.2472 18.4214 12.8161 18.4214C9.38503 18.4214 6.60358 15.64 6.60358 12.2089C6.60358 8.77779 9.38503 5.99633 12.8161 5.99633C16.2472 5.99633 19.0287 8.77779 19.0287 12.2089ZM12.8161 16.3195C15.0864 16.3195 16.9268 14.4791 16.9268 12.2089C16.9268 9.93862 15.0864 8.09821 12.8161 8.09821C10.5459 8.09821 8.70545 9.93862 8.70545 12.2089C8.70545 14.4791 10.5459 16.3195 12.8161 16.3195ZM19.274 7.14397C20.0802 7.14397 20.7338 6.49042 20.7338 5.68421C20.7338 4.878 20.0802 4.22445 19.274 4.22445C18.4678 4.22445 17.8143 4.878 17.8143 5.68421C17.8143 6.49042 18.4678 7.14397 19.274 7.14397Z" fill="#080F2B" />
                                </svg>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="" class="linkedin" target="_blank">
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.14978 3.4354C0.14978 2.66578 0.420058 2.03086 0.960591 1.53063C1.50112 1.03039 2.20384 0.780273 3.0687 0.780273C3.91813 0.780273 4.60537 1.02653 5.13048 1.51909C5.67101 2.02703 5.94129 2.68887 5.94129 3.50466C5.94129 4.24348 5.67875 4.85914 5.15364 5.3517C4.61311 5.85964 3.90268 6.1136 3.02237 6.1136H2.9992C2.14977 6.1136 1.46253 5.85964 0.937425 5.3517C0.412321 4.84376 0.14978 4.20499 0.14978 3.4354ZM0.450939 23.6374V8.21461H5.5938V23.6374H0.450939ZM8.44322 23.6374H13.5861V15.0256C13.5861 14.4868 13.6479 14.0713 13.7714 13.7788C13.9876 13.2555 14.3158 12.813 14.756 12.4513C15.1961 12.0895 15.7482 11.9087 16.4123 11.9087C18.1421 11.9087 19.0069 13.0708 19.0069 15.395V23.6374H24.1498V14.7947C24.1498 12.5167 23.6092 10.7889 22.5282 9.61144C21.4471 8.43395 20.0185 7.84521 18.2424 7.84521C16.2502 7.84521 14.698 8.69946 13.5861 10.408V10.4542H13.5629L13.5861 10.408V8.21461H8.44322C8.4741 8.70715 8.48955 10.2386 8.48955 12.8091C8.48955 15.3796 8.4741 18.989 8.44322 23.6374Z" fill="#080F2B" />
                                </svg>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="" class="youtube" target="_blank">
                                <svg width="27" height="20" viewBox="0 0 27 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.0679 19.5146L8.65161 19.4133C6.89794 19.3781 5.13992 19.4485 3.42064 19.083C0.805219 18.537 0.619933 15.8598 0.426051 13.6142C0.158902 10.457 0.262323 7.24262 0.766469 4.11186C1.05108 2.35517 2.17112 1.30694 3.90323 1.19287C9.75036 0.778905 15.6364 0.827964 21.4705 1.02109C22.0867 1.0388 22.7071 1.13557 23.3147 1.24571C26.3138 1.78294 26.3869 4.8168 26.5813 7.37074C26.7752 9.95104 26.6933 12.5446 26.3228 15.1073C26.0254 17.2292 25.4566 19.0086 23.0561 19.1803C20.0484 19.405 17.1098 19.5858 14.0937 19.5282C14.0938 19.5146 14.0765 19.5146 14.0679 19.5146ZM10.8836 14.1426C13.1502 12.8127 15.3735 11.505 17.627 10.184C15.3563 8.85416 13.1372 7.54644 10.8836 6.22548V14.1426Z" fill="#080F2B" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="divider_line"></div>
            <div class="fs-20 pt-4 pb-3 pb-lg-5 copyright">
                Copyright © 2023 Sunbrite Solar | Terms and Conditions | Privacy Policy <br class="d-none d-lg-block d-xl-none"> Website by AiiMS Group Pty Ltd <a href="https://www.aiims.com.au/like-our-work/" target="_blank" class="ps-4 d-none d-lg-inline"><?= renderImg('aiims1.png', 'logo') ?></a>
            </div>
            <div class="text-center d-lg-none pb-5">
                <a href="https://www.aiims.com.au/like-our-work/" target="_blank" class="ps-4"><?= renderImg('aiims1.png', 'logo') ?></a>
            </div>
        </div>
        <?= renderImg('footer-bulb.png', 'lib', 'footer_bulb') ?>
    </footer>
</div>