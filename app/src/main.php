<header>
    <video id="headerVideo" width="100%" autoplay loop muted>
        <source src="./assets/video/header.mp4" type="video/mp4">
        <source src="./assets/video/header.webm" type="video/webm">
        Your browser does not support the video tag.
    </video>
    <div class="navigation">
        <div class="container-fluid">
            <div class="row justify-content-center justify-content-lg-between align-items-center">
                <div class="col-auto">
                    <a href="./">
                        <?= renderImg("logo.png", "logo") ?>
                    </a>
                </div>
                <div class="col-auto">
                    <div class="row justify-content-center justify-content-lg-end align-items-center">
                        <div class="col-12 col-md-auto">
                            <a href="tel:<?= $phone_number ?>" class="btn border-dark rounded-0 text-dark py-3 px-md-5">
                                <?= $phone_number ?>
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
</header>

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