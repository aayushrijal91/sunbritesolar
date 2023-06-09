<?= renderImg('solar_globe.png', 'lib', $thankyouPage ? 'solar_globe thankyou' : 'solar_globe') ?>

<!-- Modal -->
<div class="modal fade" id="form" tabindex="-1" aria-labelledby="formLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="./src/form.php" method="POST" id="heroForm">
                <input type="hidden" name="token" id="recaptchaResponse" class="recaptchaResponse" />
                <div class="modal-header">
                    <h5 class="modal-title" id="formLabel">Get Free Quote</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row gy-3">
                        <div class="col-12">
                            <input type="text" class="form-control" placeholder="Your Full Name" name="fullName" required />
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control" placeholder="Your Email" name="email" required />
                        </div>
                        <div class="col-12">
                            <input type="tel" id="phoneInput" class="form-control" placeholder="Your Number" name="phoneNumber" required />
                            <small id="phoneError" class="validationError">Please enter a valid phone number</small>
                        </div>
                        <div class="col-12">
                            <select name="service" class="form-control form-select" required>
                                <option selected disabled>Service Required</option>
                                <option>Solar Panel Installation</option>
                                <option>Solar Panel Repairs</option>
                                <option>Solar Panel Maintenance</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary px-5">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

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
                <div class="col-auto d-none d-lg-block d-xl-none d-xxl-block">
                    <a href="#installations" class="fs-24 text-decoration-none text-dark">Installs</a>
                </div>
                <div class="col-auto d-none d-lg-block d-xl-none d-xxl-block">
                    <a href="#installations" class="fs-24 text-decoration-none text-dark">Repairs/Maintenance</a>
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
                            <a href="#form" data-bs-toggle="modal" data-bs-target="#form" class="btn border-dark rounded-0 text-dark py-3 px-md-5">
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
                <div class="col-10 col-lg-7 col-xl-9 col-xxl-7 banner_wrapper">
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
                            <a href="#form" data-bs-toggle="modal" data-bs-target="#form" class="btn border-dark rounded-0 text-dark py-3 px-md-5">
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
                <div class="col-xl-9 col-xxl-7  brands_wrapper">
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

<section class="government_assistance" id="rebates">
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
                    <a href="#form" data-bs-toggle="modal" data-bs-target="#form" class="btn border-white d-inline-flex rounded-0 text-white py-3 px-md-5">
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
                        <div class="col-xl-11 col-xxl-10">
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
                                Embrace the future of renewable energy with our custom design solar solutions, designed to power a sustainable world for generations to come. As we face the urgent challenge of climate change, solar energy is no longer just an option; it's the key to a cleaner, greener, and more resilient tomorrow.
                            </div>
                            <div>
                                <a href="#form" data-bs-toggle="modal" data-bs-target="#form" class="text-tertiary fs-24 pe-3 button d-none d-md-inline-block">Speak with our Solar Energy Consultants today</a>
                                <a href="#form" data-bs-toggle="modal" data-bs-target="#form" class="text-tertiary fs-24 pe-3 button d-md-none">Speak to a Sunbrite Consultant</a>
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
                            <a href="#form" data-bs-toggle="modal" data-bs-target="#form" class="text-tertiary fs-24 pe-3">Free Solar Design</a>
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
                            <a href="#form" data-bs-toggle="modal" data-bs-target="#form" class="text-tertiary fs-24 pe-3">Intelligent Energy Management System</a>
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
                            <a href="#form" data-bs-toggle="modal" data-bs-target="#form" class="text-tertiary fs-24 pe-3">Customizable Solar Solutions</a>
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

<section class="offering" id="installations">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-11">
                <div class="fs-64 text-black lh-1 pb-5 heading">Sunbrite<br class="d-md-none"> brings you</div>

                <div class="row gx-lg-5 gy-4 gy-xl-0">
                    <div class="col-xl-6">
                        <div class="offering-1 offering_slider">
                            <div class="first">
                                <div class="d-flex justify-content-end cartoon"><?= renderImg('cartoon-sun.png', 'lib') ?></div>
                                <div class="row justify-content-between align-items-end w-100 m-0">
                                    <div class="col-auto">
                                        <div class="sm_text lh-1">Solar</div>
                                        <div class="lg_text lh-1">Installation</div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="javascript:void(0)" class="slideToNext d-md-none">
                                            <svg width="62" height="28" viewBox="0 0 62 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M51.8186 14.4717C51.9942 14.2962 51.9942 14.0115 51.8186 13.8359L48.9572 10.9745C48.7816 10.7989 48.4969 10.7989 48.3213 10.9745C48.1457 11.15 48.1457 11.4347 48.3213 11.6103L50.8648 14.1538L48.3213 16.6973C48.1457 16.8729 48.1457 17.1576 48.3213 17.3332C48.4969 17.5088 48.7816 17.5088 48.9572 17.3332L51.8186 14.4717ZM0.243042 14.6034H51.5007V13.7042H0.243042V14.6034Z" fill="#080F2A" />
                                                <circle cx="48.2828" cy="14.1539" r="12.8478" stroke="#080F2B" stroke-width="0.899257" />
                                            </svg>
                                        </a>
                                        <a href="javascript:void(0)" class="slideToNext d-none d-md-block">
                                            <svg width="137" height="60" viewBox="0 0 137 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M115.112 30.7718C115.503 30.3813 115.503 29.7481 115.112 29.3576L108.748 22.9936C108.358 22.6031 107.724 22.6031 107.334 22.9936C106.943 23.3842 106.943 24.0173 107.334 24.4078L112.991 30.0647L107.334 35.7216C106.943 36.1121 106.943 36.7452 107.334 37.1358C107.724 37.5263 108.358 37.5263 108.748 37.1358L115.112 30.7718ZM0.404907 31.0647H114.405V29.0647H0.404907V31.0647Z" fill="#080F2A" />
                                                <circle cx="107.248" cy="30.0648" r="28.5743" stroke="#080F2B" stroke-width="2" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="second">
                                <div class="row align-items-center">
                                    <div class="col-4 col-md-2">
                                        <?= renderImg('cartoon-sun.png', 'lib') ?>
                                    </div>
                                    <div class="col">
                                        <div class="sm_text lh-1">Solar</div>
                                        <div class="lg_text lh-1">Installation</div>
                                    </div>
                                </div>
                                <div class="description py-3">
                                    <p>At Sunbrite Solar, we provide top-quality solar panel installation services in Sydney. Our experienced team will assess your property, provide a customized solar solution, and use only the highest-quality materials to ensure optimal performance.</p>

                                    <p>We take care of all necessary permits and paperwork for a stress-free installation process. Choose Sunbrite Solar for a reliable and efficient solar panel installation.</p>
                                </div>
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-auto">
                                        <a href="#form" data-bs-toggle="modal" data-bs-target="#form" class="text-dark fs-24">Enquire Now</a>
                                    </div>
                                    <div class="col-auto">
                                        <a href="javascript:void(0)" class="slideToPrev d-none d-md-block">
                                            <svg width="138" height="61" viewBox="0 0 138 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M22.3154 29.7443C21.9248 30.1348 21.9248 30.768 22.3154 31.1585L28.6793 37.5225C29.0698 37.913 29.703 37.913 30.0935 37.5225C30.4841 37.132 30.4841 36.4988 30.0935 36.1083L24.4367 30.4514L30.0935 24.7946C30.4841 24.404 30.4841 23.7709 30.0935 23.3803C29.703 22.9898 29.0698 22.9898 28.6793 23.3803L22.3154 29.7443ZM137.022 29.4514L23.0225 29.4514L23.0225 31.4514L137.022 31.4514L137.022 29.4514Z" fill="#080F2A" />
                                                <circle cx="30.1796" cy="30.4514" r="28.5743" transform="rotate(-180 30.1796 30.4514)" stroke="#080F2B" stroke-width="2" />
                                            </svg>
                                        </a>
                                        <a href="javascript:void(0)" class="slideToPrev d-md-none">
                                            <svg width="62" height="28" viewBox="0 0 62 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.0049 13.8361C9.82927 14.0117 9.82927 14.2964 10.0049 14.472L12.8663 17.3334C13.0419 17.509 13.3266 17.509 13.5022 17.3334C13.6777 17.1578 13.6777 16.8731 13.5022 16.6975L10.9587 14.1541L13.5022 11.6106C13.6777 11.435 13.6777 11.1503 13.5022 10.9747C13.3266 10.7991 13.0419 10.7991 12.8663 10.9747L10.0049 13.8361ZM61.5804 13.7044L10.3228 13.7044V14.6037L61.5804 14.6037V13.7044Z" fill="#080F2A" />
                                                <circle cx="13.5407" cy="14.154" r="12.8478" transform="rotate(-180 13.5407 14.154)" stroke="#080F2B" stroke-width="0.899257" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="offering-2 offering_slider">
                            <div class="first">
                                <div class="d-flex justify-content-end mb-md-n5 cartoon"><?= renderImg('cartoon-solar.png', 'lib') ?></div>
                                <div class="row justify-content-between align-items-end w-100 m-0">
                                    <div class="col-auto">
                                        <div class="sm_text lh-1">Solar</div>
                                        <div class="lg_text lh-1">Repair &</div>
                                        <div class="lg_text lh-1">Installation</div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="javascript:void(0)" class="slideToNext d-md-none">
                                            <svg width="62" height="28" viewBox="0 0 62 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M51.8186 14.4717C51.9942 14.2962 51.9942 14.0115 51.8186 13.8359L48.9572 10.9745C48.7816 10.7989 48.4969 10.7989 48.3213 10.9745C48.1457 11.15 48.1457 11.4347 48.3213 11.6103L50.8648 14.1538L48.3213 16.6973C48.1457 16.8729 48.1457 17.1576 48.3213 17.3332C48.4969 17.5088 48.7816 17.5088 48.9572 17.3332L51.8186 14.4717ZM0.243042 14.6034H51.5007V13.7042H0.243042V14.6034Z" fill="#080F2A" />
                                                <circle cx="48.2828" cy="14.1539" r="12.8478" stroke="#080F2B" stroke-width="0.899257" />
                                            </svg>
                                        </a>
                                        <a href="javascript:void(0)" class="slideToNext d-none d-md-block">
                                            <svg width="137" height="60" viewBox="0 0 137 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M115.112 30.7718C115.503 30.3813 115.503 29.7481 115.112 29.3576L108.748 22.9936C108.358 22.6031 107.724 22.6031 107.334 22.9936C106.943 23.3842 106.943 24.0173 107.334 24.4078L112.991 30.0647L107.334 35.7216C106.943 36.1121 106.943 36.7452 107.334 37.1358C107.724 37.5263 108.358 37.5263 108.748 37.1358L115.112 30.7718ZM0.404907 31.0647H114.405V29.0647H0.404907V31.0647Z" fill="#080F2A" />
                                                <circle cx="107.248" cy="30.0648" r="28.5743" stroke="#080F2B" stroke-width="2" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="second">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <?= renderImg('tools.png', 'lib') ?>
                                    </div>
                                    <div class="col">
                                        <div class="sm_text lh-1">Solar</div>
                                        <div class="lg_text lh-1">Repair &</div>
                                        <div class="lg_text lh-1">Installation</div>
                                    </div>
                                </div>
                                <div class="description py-3">
                                    <p>At Sunbrite Solar, we understand the importance of keeping your solar panels operating at their best. That's why we offer expert solar panel repairs and maintenance services in Sydney. Our team of experienced professionals will perform a thorough inspection of your system and identify any issues that need attention.</p>
                                    <p>We use only the highest-quality materials to ensure that your panels are repaired to the highest standard. Regular maintenance can help extend the life of your solar panels and improve their performance, saving you money in the long run. Choose Sunbrite Solar for reliable and efficient solar panel repairs and maintenance.</p>
                                </div>
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-auto">
                                        <a href="#form" data-bs-toggle="modal" data-bs-target="#form" class="text-dark fs-24">Enquire Now</a>
                                    </div>
                                    <div class="col-auto">
                                        <a href="javascript:void(0)" class="slideToPrev d-none d-md-block">
                                            <svg width="138" height="61" viewBox="0 0 138 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M22.3154 29.7443C21.9248 30.1348 21.9248 30.768 22.3154 31.1585L28.6793 37.5225C29.0698 37.913 29.703 37.913 30.0935 37.5225C30.4841 37.132 30.4841 36.4988 30.0935 36.1083L24.4367 30.4514L30.0935 24.7946C30.4841 24.404 30.4841 23.7709 30.0935 23.3803C29.703 22.9898 29.0698 22.9898 28.6793 23.3803L22.3154 29.7443ZM137.022 29.4514L23.0225 29.4514L23.0225 31.4514L137.022 31.4514L137.022 29.4514Z" fill="#080F2A" />
                                                <circle cx="30.1796" cy="30.4514" r="28.5743" transform="rotate(-180 30.1796 30.4514)" stroke="#080F2B" stroke-width="2" />
                                            </svg>
                                        </a>
                                        <a href="javascript:void(0)" class="slideToPrev d-md-none">
                                            <svg width="62" height="28" viewBox="0 0 62 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.0049 13.8361C9.82927 14.0117 9.82927 14.2964 10.0049 14.472L12.8663 17.3334C13.0419 17.509 13.3266 17.509 13.5022 17.3334C13.6777 17.1578 13.6777 16.8731 13.5022 16.6975L10.9587 14.1541L13.5022 11.6106C13.6777 11.435 13.6777 11.1503 13.5022 10.9747C13.3266 10.7991 13.0419 10.7991 12.8663 10.9747L10.0049 13.8361ZM61.5804 13.7044L10.3228 13.7044V14.6037L61.5804 14.6037V13.7044Z" fill="#080F2A" />
                                                <circle cx="13.5407" cy="14.154" r="12.8478" transform="rotate(-180 13.5407 14.154)" stroke="#080F2B" stroke-width="0.899257" />
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
    </div>
</section>

<section class="advantage">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-9 col-xxl-8">
                <div class="text-end d-md-none pb-3"><?= renderImg('free-solar-static.png', 'lib') ?></div>
                <div class="fs-64 lh-1 pb-4 pb-md-5 pb-xl-0">Experience the dual<br> advantage</div>
                <div class="d-flex">
                    <div class="advantage-1">
                        <div class="fs-48 lh-1 pb-3 pb-md-6 heading">Decrease<br> Energy Costs</div>
                        <a href="#form" data-bs-toggle="modal" data-bs-target="#form" class="btn border-white d-inline-flex rounded-0 text-white py-3 px-md-5">
                            Enquire Now
                        </a>
                        <div class="w-100 d-flex justify-content-center pt-4 pt-md-9"><?= renderImg('fancy-dollar.png', 'lib', 'fancy-dollar') ?></div>
                    </div>
                    <div class="advantage-2">
                        <div class="fs-48 lh-1 pb-3 pb-md-6 heading">Increase<br> Property Value</div>
                        <a href="#form" data-bs-toggle="modal" data-bs-target="#form" class="btn border-white d-inline-flex rounded-0 text-white py-3 px-md-5">
                            Enquire Now
                        </a>
                        <div class="w-100 d-flex justify-content-center pt-4 pt-md-9"><?= renderImg('fancy-property.png', 'lib') ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="servicing_areas">
        <div class="bigpin"><?= renderImg('bigpin.png', 'lib') ?></div>
        <div class="smallpin"><?= renderImg('smallpin.png', 'lib') ?></div>
        <div class="pin"><?= renderImg('pin.png', 'lib') ?></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-xxl-9">
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
            <div class="col-xl-10 col-xxl-8">
                <div class="government_benefits_inner">
                    <div class="wrapper">
                        <div class="row justify-content-center position-relative">
                            <div class="col-8 col-md-10 col-xl-8">
                                <div class="fs-64 lh-1 pb-4 pb-md-6 heading">Seize Government Benefits and Solar Rewards Today</div>
                                <a href="#form" data-bs-toggle="modal" data-bs-target="#form" class="btn border-dark d-inline-flex rounded-0 text-dark py-3 px-md-5">
                                    Enquire Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


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
                <div class="row gx-md-5 gx-xl-7">
                    <div class="col-md-auto">
                        <div class="fs-26 fw-700 pt-5 pb-3 py-md-5">Quick Links</div>
                        <ul class="footer_menu">
                            <li><a href="#rebates" class="nav-link">Rebates</a></li>
                            <li><a href="#installations" class="nav-link">Services</a></li>
                            <li><a href="#installations" class="nav-link">Installs</a></li>
                            <li><a href="#installations" class="nav-link">Repairs</a></li>
                        </ul>
                    </div>
                    <div class="col-md col-lg-5 col-xl">
                        <div class="fs-26 fw-700 py-3 py-md-5">Contact</div>
                        <ul class="footer_menu">
                            <li><a href="tel:<?= $phone_number ?>" class="nav-link"><?= $phone_number ?></a></li>
                            <li><a href="mailto:<?= $admin_email ?>" class="nav-link"><?= $admin_email ?></a></li>
                            <li>
                                <div class="nav-link">Unit 3/69 Topham Rd, Smeaton Grange NSW 2570</div>
                            </li>
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
                        <a href="https://www.facebook.com/Sunbritesolar/" class="facebook" target="_blank">
                            <svg width="14" height="25" viewBox="0 0 14 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.10153 24.209V13.2615H12.9611L13.539 8.99499H9.10142V6.27103C9.10142 5.03578 9.46165 4.19403 11.3222 4.19403L13.6952 4.19297V0.37708C13.2847 0.325179 11.8761 0.208984 10.2374 0.208984C6.81606 0.208984 4.47374 2.19722 4.47374 5.84862V8.99499H0.604248V13.2615H4.47374V24.2089H9.10153V24.209Z" fill="#080F2B" />
                            </svg>
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="https://www.instagram.com/sunbritesolar" class="instagram" target="_blank">
                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.816406 12.209C0.816406 7.41546 0.816406 5.01871 1.95866 3.29239C2.46873 2.5215 3.12892 1.86131 3.89981 1.35124C5.62613 0.208984 8.02289 0.208984 12.8164 0.208984C17.6099 0.208984 20.0067 0.208984 21.733 1.35124C22.5039 1.86131 23.1641 2.5215 23.6742 3.29239C24.8164 5.01871 24.8164 7.41546 24.8164 12.209C24.8164 17.0025 24.8164 19.3993 23.6742 21.1256C23.1641 21.8965 22.5039 22.5567 21.733 23.0667C20.0067 24.209 17.6099 24.209 12.8164 24.209C8.02289 24.209 5.62613 24.209 3.89981 23.0667C3.12892 22.5567 2.46873 21.8965 1.95866 21.1256C0.816406 19.3993 0.816406 17.0025 0.816406 12.209ZM19.0287 12.2089C19.0287 15.64 16.2472 18.4214 12.8161 18.4214C9.38503 18.4214 6.60358 15.64 6.60358 12.2089C6.60358 8.77779 9.38503 5.99633 12.8161 5.99633C16.2472 5.99633 19.0287 8.77779 19.0287 12.2089ZM12.8161 16.3195C15.0864 16.3195 16.9268 14.4791 16.9268 12.2089C16.9268 9.93862 15.0864 8.09821 12.8161 8.09821C10.5459 8.09821 8.70545 9.93862 8.70545 12.2089C8.70545 14.4791 10.5459 16.3195 12.8161 16.3195ZM19.274 7.14397C20.0802 7.14397 20.7338 6.49042 20.7338 5.68421C20.7338 4.878 20.0802 4.22445 19.274 4.22445C18.4678 4.22445 17.8143 4.878 17.8143 5.68421C17.8143 6.49042 18.4678 7.14397 19.274 7.14397Z" fill="#080F2B" />
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