<?= renderImg('solar_globe.png', 'lib', 'solar_globe') ?>
<header>
    <video id="headerVideo" width="100%" autoplay loop muted>
        <source src="./assets/video/header.mp4" type="video/mp4">
        <source src="./assets/video/header.webm" type="video/webm">
        Your browser does not support the video tag.
    </video>

    <div class="navigation">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center">
                <div class="col-auto">
                    <a href="./">
                        <?= renderImg("logo.png", "logo") ?>
                    </a>
                </div>
                <div class="col-auto">
                    <?= renderImg('clean-energy-council.png', 'logo') ?>
                </div>
                <div class="col-auto fs-24">
                    Installs
                </div>
                <div class="col-auto fs-24">
                    Repairs/Maintenance
                </div>
                <div class="col-auto">
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
        <div class="container">
            <div class="row">
                <div class="col-xl-7 banner_wrapper">
                    <div class="free_solar_design">
                        <?= renderImg('free-solar-design.png', 'lib', 'mainImg') ?>
                    </div>
                    <h1 class="fs-96 lh-0_76">The leaders in solar energy solutions</h1>
                    <div class="fs-36 lh-1 py-5">Sydney's Solar Specialists. Top-quality<br> solar panel installation services in Sydney</div>
                    <div class="row">
                        <div class="col-auto">
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
            </div>
        </div>
    </div>
    <div class="brands">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 brands_wrapper">
                    <div class="row justify-content-between">
                        <div class="col-3">
                            <div class="text-dark fs-36 lh-1">brands we work with</div>
                        </div>
                        <div class="col-8">
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
    <div class="container">
        <div class="row align-items-end">
            <div class="col-xl-7 government_assistance_wrapper">
                <div class="position-relative">
                    <?= renderImg('reliable-assistance-phone.png', 'lib', 'phone') ?>
                    <?= renderImg('handcash.png', 'lib', 'handcash') ?>
                </div>
            </div>
            <div class="col-xl-5 main_content">
                <div class="free_solar_design">
                    <?= renderImg('free_solar_design_white.png', 'lib', 'mainImg') ?>
                </div>
                <div class="fs-64 lh-1 text-white py-4">Government Assistance available NOW</div>
                <div class="text-white fs-24 lh-1 pb-5">Top-quality solar panel installation<br> services in Sydney</div>
                <a href="tel:<?= $phone_number ?>" class="btn border-white d-inline-flex rounded-0 text-white py-3 px-md-5">
                    Enquire Now
                </a>
            </div>
        </div>
    </div>
</section>

<section class="renewable_energy">
    <div class="inner">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 renewable_energy_wrapper">
                    <div class="row">
                        <div class="col-xl-10">
                            <div class="row justify-content-between align-items-end">
                                <div class="col-auto"><?= renderImg('clean-energy-council.png', 'logo') ?></div>
                                <div class="col-auto">
                                    <div class="free_solar_design">
                                        <?= renderImg('free-solar-design-2.png', 'lib', 'mainImg') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="fs-96 lh-0_76 py-5 text-tertiary">Renewable Energy is the future</div>
                            <div class="fs-24 text-tertiary lh-1 pb-7">
                                Embrace the future of renewable energy with our custom design solar panels, designed to power a sustainable world for generations to come. As we face the urgent challenge of climate change, solar energy is no longer just an option; it's the key to a cleaner, greener, and more resilient tomorrow.
                            </div>
                            <div>
                                <a href="#" class="text-tertiary fs-24 pe-3">Speak with our Solar Energy Consultants today</a>
                                <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.879 1.53334C17.879 0.981055 17.4312 0.53334 16.879 0.53334L7.87895 0.533341C7.32667 0.53334 6.87895 0.981056 6.87895 1.53334C6.87895 2.08562 7.32667 2.53334 7.87895 2.53334L15.879 2.53334L15.879 10.5333C15.879 11.0856 16.3267 11.5333 16.879 11.5333C17.4312 11.5333 17.879 11.0856 17.879 10.5333L17.879 1.53334ZM1.79665 18.0299L17.5861 2.24045L16.1718 0.826234L0.382432 16.6156L1.79665 18.0299Z" fill="#17274F" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="solar_sheet_img">
                        <?= renderImg('solar-sheets.png', 'lib') ?>
                    </div>
                    <div class="row gy-6 solar_sheets align-items-end">
                        <div class="col-12">
                            <a href="#" class="text-tertiary fs-24 pe-3">Free Solar Design</a>
                            <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.879 1.53334C17.879 0.981055 17.4312 0.53334 16.879 0.53334L7.87895 0.533341C7.32667 0.53334 6.87895 0.981056 6.87895 1.53334C6.87895 2.08562 7.32667 2.53334 7.87895 2.53334L15.879 2.53334L15.879 10.5333C15.879 11.0856 16.3267 11.5333 16.879 11.5333C17.4312 11.5333 17.879 11.0856 17.879 10.5333L17.879 1.53334ZM1.79665 18.0299L17.5861 2.24045L16.1718 0.826234L0.382432 16.6156L1.79665 18.0299Z" fill="#17274F" />
                            </svg>
                        </div>
                        <div class="col-12">
                            <a href="#" class="text-tertiary fs-24 pe-3">Intelligent Energy Management System</a>
                            <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.879 1.53334C17.879 0.981055 17.4312 0.53334 16.879 0.53334L7.87895 0.533341C7.32667 0.53334 6.87895 0.981056 6.87895 1.53334C6.87895 2.08562 7.32667 2.53334 7.87895 2.53334L15.879 2.53334L15.879 10.5333C15.879 11.0856 16.3267 11.5333 16.879 11.5333C17.4312 11.5333 17.879 11.0856 17.879 10.5333L17.879 1.53334ZM1.79665 18.0299L17.5861 2.24045L16.1718 0.826234L0.382432 16.6156L1.79665 18.0299Z" fill="#17274F" />
                            </svg>
                        </div>
                        <div class="col-12">
                            <a href="#" class="text-tertiary fs-24 pe-3">Customizable Solar Solutions</a>
                            <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.879 1.53334C17.879 0.981055 17.4312 0.53334 16.879 0.53334L7.87895 0.533341C7.32667 0.53334 6.87895 0.981056 6.87895 1.53334C6.87895 2.08562 7.32667 2.53334 7.87895 2.53334L15.879 2.53334L15.879 10.5333C15.879 11.0856 16.3267 11.5333 16.879 11.5333C17.4312 11.5333 17.879 11.0856 17.879 10.5333L17.879 1.53334ZM1.79665 18.0299L17.5861 2.24045L16.1718 0.826234L0.382432 16.6156L1.79665 18.0299Z" fill="#17274F" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row justify-content-center justify-content-lg-between align-items-center">
            <div class="col-auto">
                <div class="row gx-2 gx-md-3 text-white justify-content-center">
                    <div class="col-12 text-center pb-3 d-lg-none">
                        <a href="https://www.aiims.com.au/like-our-work/" target="_blank">
                            <?= renderImg("aiims.png", "logo") ?>
                        </a>
                    </div>
                    <div class="col-auto text-center">Copyright <?= date('Y') ?></div>
                    <div class="col-auto">|</div>
                    <div class="col-auto text-center"><?= $site ?></div>
                    <div class="col-auto">|</div>
                    <div class="col-auto text-center">All Rights Reserved</div>
                </div>
            </div>
            <div class="col-auto d-none d-lg-block">
                <a href="https://www.aiims.com.au/like-our-work/" target="_blank">
                    <?= renderImg("aiims.png", "logo") ?>
                </a>
            </div>
        </div>
    </div>
</footer>