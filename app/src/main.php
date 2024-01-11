<header>
    <div class="navigation_bar py-md-4 py-2">
        <div class="container-fluid">
            <div class="row justify-content-center justify-content-lg-between align-items-center gy-4">
                <div class="col-lg-auto">
                    <div class="row justify-content-center align-items-center gy-4">
                        <div class="col-auto">
                            <a href="./">
                                <?= renderImg("logo.png", "logo") ?>
                            </a>
                        </div>

                        <div class="col-auto d-none d-md-block">
                            <div class="bg-sea-green rounded-pill px-4 py-2 fs-14 fw-700 text-black">
                                In partnership with
                                <span class="ps-2"><?= renderImg('wonder-loans.png', 'lib') ?></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-auto">
                    <div class="row justify-content-center align-items-center py-2 py-lg-0">
                        <div class="col-auto">
                            <a href="tel:<?= $phone_number ?>" class="btn btn-primary text-white">
                                <svg width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.8554 14.3002L14.9345 12.3862C14.5466 12.1974 14.113 12.1547 13.7008 12.2646C13.2887 12.3744 12.9209 12.6308 12.6547 12.9939L11.471 14.6233C9.55282 13.2809 7.92591 11.4916 6.70511 9.38188L8.185 8.08115C8.51624 7.78856 8.75026 7.38372 8.85063 6.92963C8.951 6.47554 8.91209 5.99769 8.73996 5.57045L6.99884 1.25716C6.81388 0.799033 6.48707 0.428012 6.07665 0.210199C5.66623 -0.00761358 5.19885 -0.0580721 4.75776 0.0678128L1.44302 1.01517C0.985711 1.14659 0.588098 1.45794 0.325492 1.89025C0.0628867 2.32256 -0.0464734 2.8458 0.0181268 3.36087C0.631973 8.05944 2.61287 12.4129 5.66419 15.7693C8.71552 19.1257 12.6731 21.3045 16.9443 21.9794C17.0321 21.993 17.1206 21.9999 17.2093 22C17.6361 21.9997 18.0507 21.8438 18.3883 21.5567C18.726 21.2696 18.9676 20.8675 19.0754 20.4133L19.9353 16.7655C20.0514 16.2804 20.0065 15.7657 19.8085 15.3138C19.6106 14.8619 19.2726 14.5025 18.8554 14.3002Z" fill="#9159E8" />
                                    <ellipse cx="16.9204" cy="4.71415" rx="3.07669" ry="3.14286" fill="#1BCEAF" />
                                </svg>
                                <span class="ps-2">Talk to a Human</span>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="#form" class="btn btn-secondary rounded-pill">
                                Apply Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="banner" id="form">
        <div class="container">
            <div class="row gy-md-5">
                <div class="col-xl-8">
                    <div class="banner_left">
                        <div class="fs-96 lh-1 text-white font-articulat-heavy ls-2 mb-3 text-center text-md-start">More <span class="text-secondary-light">Options.</span> More <span class="text-sea-green">You.</span></div>
                        <div class="text-white fs-32 fw-700 ls-2 text-capitalize text-center text-md-start">Compare Personal Loans Online</div>
                        <div class="bg-sea-green rounded-pill px-4 py-2 fs-14 fw-700 text-black mt-4 d-md-none">
                            In partnership with
                            <span class="ps-2"><?= renderImg('wonder-loans.png', 'lib') ?></span>
                        </div>
                        <div class="text-white fs-20 pb-5 pt-3 text-center text-md-start">Compare realistic loan options with powerful data & AI matching technology</div>


                        <div class="form_wrapper rounded-20 bg-white mt-3 loanwidget" id="loanwidgetwrap">
                            <div class="fieldgroup loanwidgetfieldgroup fieldgroup-1">
                                <p class="fw-900 h2 text-primary mb-4">How much do you want to borrow?</p>

                                <p class="fs-64 text-grey fw-900 w-100">$<span id="borrowAmount">0</span></p>

                                <div class="row align-items-center">
                                    <div class="col">
                                        <div class="range">
                                            <div class="sliderThumb amount"></div>
                                            <div class="progressBar amount"></div>
                                            <input type="range" id="borrowSlider" name="borrowAmount" min="0" max="100000" value="0" step="5000">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <a href="javascript:void(0)" class="btn btn-secondary text-white fw-900 rounded-pill px-lg-4 p-2 py-lg-3 w-100 fieldgroupnext">Continue</a>
                                    </div>
                                </div>
                            </div>
                            <div class="fieldgroup loanwidgetfieldgroup fieldgroup-2 hidden">
                                <p class="fw-900 h2 text-primary mb-4">What’s your preferred loan term?</p>

                                <p class="fs-64 text-grey fw-900 w-100"><span id="borrowTerm">0</span> years</p>


                                <div class="row align-items-center">
                                    <div class="col">
                                        <div class="range">
                                            <div class="sliderThumb year"></div>
                                            <div class="progressBar year"></div>
                                            <input type="range" id="termSlider" name="termyear" min="0" max="7" value="0" step="1">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <a href="javascript:void(0)" class="btn btn-secondary text-white fw-900 rounded-pill px-lg-4 p-2 py-lg-3 w-100 fieldgroupnext-2">Continue</a>
                                    </div>
                                </div>
                            </div>
                            <div class="fieldgroup loanwidgetfieldgroup fieldgroup-3 hidden">
                                <p class="fw-900 h2 text-primary mb-7">Is this going to be for personal or business use?</p>

                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <select id="loanUsage" class="form-select form-control" aria-label="Default select example">
                                            <option class="fs-16" value selected>Personal</option>
                                            <option class="fs-16">Business</option>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <button class="btn btn-secondary text-white fw-900 rounded-pill px-lg-4 p-2 py-lg-3 w-100 loanwidgetsubmit">Compare Personal Loans</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="banner_right h-100 rounded-20">
                        <div class="text-center">
                            <div class="fs-20 fw-700 text-white">In Partnership with</div>

                            <?= renderImg("wonder-loans.png", "logo", "my-4") ?>

                            <div class="font-articulat-heavy ls-2 fs-40 lh-1 text-white px-xl-3">A Simpler,<br /> <span class="text-sea-green">Easier Way</span> To Borrow Money</div>
                            <div class="py-4 fs-20 fw-700 text-white">Get a fast loan today up to $5,000.</div>
                            <div class="row align-items-center justify-content-center">
                                <div class="col-auto">
                                    <a href="https://www.wonderloans.com.au/" target="_blank" class="btn btn-sea-green d-inline-flex rounded-pill rounded-0 text-white px-4">Visit Wonder Loans</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cta_slider" id="cta_slider">
                <div>
                    <div class="row h-100 align-items-center justify-content-around">
                        <div class="col-auto">
                            <svg width="54" height="50" viewBox="0 0 54 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M38.6072 0.405194C38.2339 0.800751 38.2024 1.02382 38.2024 3.27692V5.71992H22.2153C6.96384 5.71992 6.21407 5.73548 5.92001 6.05878C5.26969 6.77356 5.65482 7.99636 6.60255 8.22647C6.82584 8.28056 14.4433 8.30169 23.5301 8.27297C39.086 8.22406 40.0708 8.20182 40.3841 7.89112C40.6429 7.63415 40.7372 7.15504 40.8096 5.7277L40.9027 3.89424L45.4654 7.13262C47.9749 8.91364 50.1315 10.4725 50.2579 10.5965C50.4391 10.7745 49.4986 11.5251 45.8012 14.1533C43.2236 15.9857 41.0461 17.5125 40.9622 17.5464C40.8783 17.5805 40.8096 16.8555 40.8096 15.9356C40.8096 14.4657 40.7588 14.2054 40.3906 13.7869L39.9716 13.3107L23.7193 13.3105C9.48263 13.3103 7.39851 13.3455 6.91505 13.5942C5.78164 14.1772 5.79803 14.0134 5.79803 24.7022V34.4392L4.55959 35.3181C1.99741 37.1369 0.322998 38.4307 0.137511 38.7349C-0.347623 39.5314 0.106969 39.9317 7.28882 45.0377C11.2209 47.8332 14.4433 50 14.6686 50C14.8884 50 15.2662 49.8409 15.508 49.6463C15.9248 49.311 15.9508 49.1613 16.0086 46.7746L16.0696 44.2566H31.8848C47.452 44.2566 47.706 44.2508 48.0727 43.886C48.6086 43.3528 48.5548 42.5165 47.9544 42.0468C47.4663 41.6648 47.3747 41.6627 30.9393 41.6627C11.366 41.6627 13.4335 41.3548 13.4335 44.2701C13.4335 45.2817 13.395 46.1093 13.3477 46.1093C13.1864 46.1093 3.84278 39.4169 3.78673 39.2612C3.73439 39.1158 12.6512 32.6581 13.1866 32.4538C13.3812 32.3795 13.4335 32.7373 13.4335 34.1394C13.4335 36.9691 11.3395 36.6604 30.5417 36.6604C46.8536 36.6604 46.9067 36.6591 47.3994 36.2735C48.466 35.4389 48.4448 35.6651 48.45 25.1365L48.4546 15.4467L51.1969 13.4976C53.7513 11.6822 53.9427 11.5045 53.9939 10.9038C54.0239 10.5492 53.9401 10.125 53.8077 9.9608C53.6086 9.71457 43.0228 2.13212 40.5508 0.465037C39.6591 -0.136357 39.1341 -0.152476 38.6072 0.405194ZM12.0433 16.4135C11.7586 17.5421 10.046 19.2459 8.91145 19.5292L8.40528 19.6555V17.7826V15.9099H10.2877H12.1703L12.0433 16.4135ZM38.2024 18.2771C38.2024 21.0065 38.373 21.4681 39.3825 21.4681C39.8453 21.4681 40.6018 21.0304 42.6835 19.5586C44.1689 18.5083 45.4863 17.5864 45.6111 17.5097C45.7872 17.4013 45.8379 18.5085 45.8379 22.4689V27.5678L45.0475 27.7795C42.4418 28.4775 40.1096 30.7276 39.487 33.1439L39.2494 34.0666H27.6451H16.0408V31.7757C16.0408 29.7386 15.998 29.4307 15.6547 28.9966C14.9847 28.1492 14.4146 28.3187 11.8817 30.1186C10.6354 31.004 9.34351 31.9311 9.01053 32.1785L8.40528 32.6283V27.5328V22.437L9.38299 22.1232C10.8071 21.6659 11.7327 21.0773 12.8104 19.9438C13.8442 18.8563 14.3915 17.9279 14.7249 16.6962L14.9377 15.9099H26.5702H38.2024V18.2771ZM25.2593 17.2829C22.9299 17.858 20.9022 19.4819 19.9284 21.552C17.6632 26.3678 20.5046 31.8231 25.7818 32.7904C30.4806 33.6518 35.032 29.8129 35.032 24.9882C35.032 19.9375 30.1376 16.0785 25.2593 17.2829ZM29.1651 20.0644C30.9693 20.8144 32.4292 23.0166 32.4292 24.9882C32.4292 26.9447 30.9701 29.1617 29.1975 29.8985C25.2946 31.5208 21.0417 28.1284 21.822 24.0156C22.4442 20.7355 26.077 18.7809 29.1651 20.0644ZM45.8379 32.2139V34.0666H43.87C41.9157 34.0666 41.9028 34.0636 42.0289 33.6497C42.3499 32.5946 43.3148 31.4785 44.5343 30.7513C45.7522 30.0249 45.8379 30.121 45.8379 32.2139Z" fill="#1BCEAF" />
                            </svg>
                        </div>
                        <div class="col">Flexible Terms & Payment Options</div>
                    </div>
                </div>
                <div>
                    <div class="row h-100 align-items-center justify-content-around">
                        <div class="col-auto">
                            <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M25 12V25H12V22.1739H22.1739V12H25Z" fill="#1BCEAF" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M30 40.6383V34H32.9269V40.6383C32.9269 41.2073 33.4528 42.0945 35.2038 42.9219C36.8673 43.7079 39.268 44.234 42 44.234C44.732 44.234 47.1327 43.7079 48.7962 42.9219C50.5472 42.0945 51.0731 41.2073 51.0731 40.6383V34H54V40.6383C54 42.8192 52.1675 44.4213 50.1051 45.3959C47.9553 46.4117 45.0877 47 42 47C38.9123 47 36.0447 46.4117 33.8949 45.3959C31.8325 44.4213 30 42.8192 30 40.6383Z" fill="#1BCEAF" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M30 47.6383V41H32.9269V47.6383C32.9269 48.2073 33.4528 49.0945 35.2038 49.9219C36.8673 50.7079 39.268 51.234 42 51.234C44.732 51.234 47.1327 50.7079 48.7962 49.9219C50.5472 49.0945 51.0731 48.2073 51.0731 47.6383V41H54V47.6383C54 49.8192 52.1675 51.4213 50.1051 52.3959C47.9553 53.4117 45.0877 54 42 54C38.9123 54 36.0447 53.4117 33.8949 52.3959C31.8325 51.4213 30 49.8192 30 47.6383Z" fill="#1BCEAF" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M35.204 31.1669C33.4528 32.0123 32.9269 32.9189 32.9269 33.5C32.9269 34.0811 33.4528 34.9877 35.204 35.8331C36.8676 36.6363 39.2683 37.1739 42 37.1739C44.7317 37.1739 47.1324 36.6363 48.796 35.8331C50.5472 34.9877 51.0731 34.0811 51.0731 33.5C51.0731 32.9189 50.5472 32.0123 48.796 31.1669C47.1324 30.3637 44.7317 29.8261 42 29.8261C39.2683 29.8261 36.8676 30.3637 35.204 31.1669ZM33.8951 28.6391C36.0449 27.6012 38.9125 27 42 27C45.0875 27 47.9551 27.6012 50.1049 28.6391C52.1673 29.6348 54 31.2717 54 33.5C54 35.7283 52.1673 37.3652 50.1049 38.3609C47.9551 39.3988 45.0875 40 42 40C38.9125 40 36.0449 39.3988 33.8951 38.3609C31.8327 37.3652 30 35.7283 30 33.5C30 31.2717 31.8327 29.6348 33.8951 28.6391Z" fill="#1BCEAF" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M23.4807 2.83137C12.0746 2.83137 2.82904 12.0845 2.82904 23.5C2.82904 34.9155 12.0746 44.1686 23.4807 44.1686C24.0146 44.1686 24.5459 44.148 25.0712 44.1081L26.4817 44.0012L26.6954 46.8245L25.285 46.9314C24.69 46.9765 24.0874 47 23.4807 47C10.5122 47 0 36.4792 0 23.5C0 10.5208 10.5122 0 23.4807 0C35.8412 0 45.9715 9.55906 46.8928 21.6939L47 23.1056L44.1791 23.3201L44.0719 21.9085C43.2619 11.2388 34.3508 2.83137 23.4807 2.83137Z" fill="#1BCEAF" />
                            </svg>
                        </div>
                        <div class="col">Quick Decisions &amp; Funding</div>
                    </div>
                </div>
                <div>
                    <div class="row h-100 align-items-center justify-content-around">
                        <div class="col-auto">
                            <svg width="40" height="57" viewBox="0 0 40 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.6894 0.722656L19.6953 2.69707L19.701 0.722656C22.8512 0.731787 25.9218 1.71603 28.4937 3.54101C31.0656 5.36599 33.0133 7.94277 34.071 10.9196L30.3631 12.2455C29.5774 10.0345 28.1307 8.12056 26.2205 6.76505C24.3118 5.41065 22.0332 4.67968 19.6954 4.67171C16.6971 4.68222 13.8245 5.88173 11.7043 8.00873C9.58338 10.1364 8.3876 13.0194 8.3779 16.0283V19.9997C11.6535 17.6569 15.6657 16.2782 20 16.2782C31.0457 16.2782 40 25.2325 40 36.2782C40 47.3239 31.0457 56.2782 20 56.2782C8.9543 56.2782 0 47.3239 0 36.2782C0 31.517 1.66368 27.1445 4.44141 23.7101V16.0252L4.44141 16.0193C4.45348 11.9661 6.06384 8.08239 8.92079 5.21632C11.7777 2.35026 15.6491 0.734762 19.6894 0.722656ZM3.87097 36.2782C3.87097 27.3704 11.0922 20.1492 20 20.1492C28.9078 20.1492 36.129 27.3704 36.129 36.2782C36.129 45.186 28.9078 52.4072 20 52.4072C11.0922 52.4072 3.87097 45.186 3.87097 36.2782ZM21.481 41.9581V45.9074H17.7773V41.9594C14.7881 41.1472 12.5898 38.4143 12.5898 35.1679C12.5898 31.2814 15.7404 28.1309 19.6269 28.1309C23.5133 28.1309 26.6639 31.2814 26.6639 35.1679C26.6639 38.4126 24.4679 41.1444 21.481 41.9581ZM16.4282 35.1679C16.4282 33.4013 17.8603 31.9692 19.6269 31.9692C21.3934 31.9692 22.8255 33.4013 22.8255 35.1679C22.8255 36.9345 21.3934 38.3666 19.6269 38.3666C17.8603 38.3666 16.4282 36.9345 16.4282 35.1679Z" fill="#1BCEAF" />
                            </svg>
                        </div>
                        <div class="col">Fast Unsecured Personal Loans</div>
                    </div>
                </div>
                <div>
                    <div class="row h-100 align-items-center justify-content-around">
                        <div class="col-auto">
                            <svg width="49" height="50" viewBox="0 0 49 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M32.2197 18.6955L16.1098 0L0 18.6955H10.349V50H18.615V47.175H13.189V15.8705H6.17478L16.1098 4.34085L26.0449 15.8705H19.0306V23.0133H21.8706V18.6955H32.2197Z" fill="#1BCEAF" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M28.0482 23.4262C24.8665 23.4262 22.2873 25.9917 22.2873 29.1565C22.2873 32.3213 24.8665 34.8869 28.0482 34.8869C31.2298 34.8869 33.809 32.3213 33.809 29.1565C33.809 25.9917 31.2298 23.4262 28.0482 23.4262ZM25.1273 29.1565C25.1273 27.5519 26.435 26.2511 28.0482 26.2511C29.6613 26.2511 30.969 27.5519 30.969 29.1565C30.969 30.7611 29.6613 32.0619 28.0482 32.0619C26.435 32.0619 25.1273 30.7611 25.1273 29.1565Z" fill="#1BCEAF" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M37.4784 44.2696C37.4784 41.1048 40.0576 38.5392 43.2392 38.5392C46.4208 38.5392 49 41.1048 49 44.2696C49 47.4344 46.4208 49.9999 43.2392 49.9999C40.0576 49.9999 37.4784 47.4344 37.4784 44.2696ZM43.2392 41.3642C41.6261 41.3642 40.3184 42.665 40.3184 44.2696C40.3184 45.8742 41.6261 47.1749 43.2392 47.1749C44.8523 47.1749 46.16 45.8742 46.16 44.2696C46.16 42.665 44.8523 41.3642 43.2392 41.3642Z" fill="#1BCEAF" />
                                <path d="M27.1823 49.4934L46.3197 25.6981L44.102 23.9333L24.9646 47.7286L27.1823 49.4934Z" fill="#1BCEAF" />
                            </svg>
                        </div>
                        <div class="col">Competitive Variable Interest Rates</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="more-control py-xl-10 py-md-6 py-5">
    <div class="container">
        <h2 class="fs-96 fw-800 text-dark font-articulat-heavy">More Control<span class="text-sea-green">.</span></h2>
        <p class="fs-20 fw-lighter mb-5">We make it simple for you. There are three easy steps to follow when applying.</p>
        <div id="control_slider">
            <div class="bg-white shadow pt-md-5 pt-4 px-xl-7 px-md-5 px-4 pb-md-0 pb-4 rounded-20 mb-5">
                <div class="row align-items-center justify-content-between gx-5 gy-4">
                    <div class="col-md-5 order-2 order-md-1">
                        <div class="text-light-grey fw-700">Step 1</div>
                        <p class="fs-64 fw-800"><span class="text-dark">Input</span><span class="text-quaternary">.</span></p>
                        <div class="text-dark-grey fs-20">
                            <p>Input your information in our AI options tool and it will calculate and present you with the best options available!</p>
                            <p></p>Remember, the more information you provide, the more accurate your loan options will be.<p></p>
                        </div>
                    </div>
                    <div class="col-xl-auto col order-1 order-md-2"><?= renderImg('mc1.gif', 'lib') ?></div>
                </div>
            </div>
            <div class="bg-white shadow pt-md-5 pt-4 px-xl-7 px-md-5 px-4 pb-md-0 pb-4 rounded-20 mb-5">
                <div class="row align-items-center justify-content-between gx-5 gy-4">
                    <div class="col-xl-auto col"><?= renderImg('mc2.gif', 'lib') ?></div>
                    <div class="col-md-5">
                        <div class="text-light-grey fw-700">Step 2</div>
                        <p class="fs-64 fw-800"><span class="text-dark">Compare</span><span class="text-quaternary">.</span></p>
                        <div class="text-dark-grey fs-20">
                            <p>Let our AI options tool do the work instantly! No waiting around!</p>
                            <p></p>With over 60 Lenders, our AI options tool will curate and personalise the best results based on your priorities.<p></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white shadow pt-md-5 pt-4 px-xl-7 px-md-5 px-4 pb-md-0 pb-4 rounded-20">
                <div class="row align-items-center justify-content-between gx-5 gy-4">
                    <div class="col-md-5 order-2 order-md-1">
                        <div class="text-light-grey fw-700">Step 3</div>
                        <p class="fs-64 fw-800"><span class="text-dark">Choose</span><span class="text-quaternary">.</span></p>
                        <div class="text-dark-grey fs-20">
                            <p>Now the easy part! Pick from the list and if you need further clarity, the platform can provide you with a granular level of detail to help find what you are looking for.</p>
                            <p>For a more personal touch our Customer Service Consultants are available to talk to you.</p>
                        </div>
                    </div>
                    <div class="col-xl-auto col order-1 order-md-2"><?= renderImg('mc3.gif', 'lib') ?></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="equipment-financing">
    <div class="container">
        <div class="col-xl-8">
            <h2 class="fs-96 fw-800 text-white font-articulat-heavy lh-1">How do I know what is right for me?</h2>
        </div>

        <p class="text-white fs-20 pt-4 mb-5 mb-lg-7">
            As a savvy individual managing your finances, staying informed and prepared is crucial. Venturing into the world of personal loans without adequate knowledge can lead to confusion and overwhelm. The key to finding the right personal loan is not getting lost in the myriad of financial products, varying interest rates, and endless advertisements. The most effective strategy is to compare current market offerings. Remember, it's all about comparison! By carefully comparing your options, you'll secure the best loan that suits your unique financial situation. Below are some tips to consider, providing a solid starting point for your search for the ideal personal loan.
        </p>

        <div class="bg-white shadow py-md-5 py-4 px-xl-7 px-md-5 px-4 rounded-20 mb-5">
            <div class="row justify-content-between gx-5 gy-6 gy-xl-4">
                <div class="col-xl-5 order-2 order-md-1">
                    <div class="fs-64 fw-800 lh-1">The Right
                        Interest Rate<span class="text-sea-green">.</span></div>
                    <div class="text-dark-grey fs-20 py-4 description">
                        <p>These days on the news all you hear about is interest rates rising. You can thank the Reserve Bank of Australia (RBA) for that. Interest rates play a vital role, as they dictate the amount you pay on a loan in any given year. When you are looking to get a personal loan, be sure to be smart about it, don’t be a dummy and go with the first loan you see. Use LoanOptions to compare and find yourself (without any need to contact anyone else) the best loan for you! More Options. More You.</p>
                    </div>
                </div>

                <div class="col-xl-6 order-2 order-md-1">
                    <div class="fs-64 fw-800 lh-1">More Return (ROI)<span class="text-sea-green">.</span></div>
                    <div class="text-dark-grey fs-20 pt-4 description">
                        <p>Financial flexibility is vital in personal finance! With the right personal loan, you can achieve your personal goals, whether that's home improvement, debt consolidation, or funding a significant life event. The principle of investing in yourself applies here too. The funds from a personal loan can help you in areas that might lead to improved quality of life or financial stability, potentially offsetting the cost of interest in the long run. Personal loans come in various forms, including secured, unsecured, fixed-rate, and variable-rate loans, each suited to different needs. Our team at LoanOptions is ready to guide you through these choices to find the best fit for your individual situation. Contact our Customer Service experts today for personalized advice!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="loan_security">
    <div class="container">
        <div class="row align-items-end mb-xl-7 mb-md-5 mb-4">
            <div class="col-lg-9 col-xl-7">
                <div class="fs-96 lh-3 ls-2 text-white font-articulat-heavy">To secure, or not secure your loan?</div>
            </div>
            <div class="col-auto">
                <div class="animated_text">That is the<br>question</div>
            </div>
        </div>
        <div class="loans-slider-wrapper" id="loans">
            <ul class="loans-slider-nav">
                <li class="active"><a href="javascript:void(0)" class="btn fw-600 text-white loan-slider-btn" slideTarget="0">Secured Loans</a></li>
                <li><a href="javascript:void(0)" class="btn fw-600 border-1 text-white loan-slider-btn" slideTarget="1">Unsecured Loans</a></li>
                <li class="slide"></li>
            </ul>

            <div class="loans_slider" id="loans_slider">
                <div class="loan-slider-content">
                    <div class="row justify-content-between align-items-md-center h-100 gx-xl-5">
                        <div class="col-lg-7">
                            <div class="fs-64 ls-2 fw-800 lh-1 pb-3">Secured<span class="text-quaternary">.</span></div>
                            <p class="fs-20 text-dark-grey pt-md-4 description">A secured loan uses the asset being purchased meaning collateral, in this case the car, as security for the loan. If you the borrower can’t repay the loan, the lender can reclaim the asset to cover the costs. Although if the sale of the asset doesn’t cover the full amount owing, the borrower must pay the difference.</p>
                            <p class="fs-20 text-dark-grey description">The benefits of a secured loan is that usually it comes with a lower and fixed rates, as the risk to your lender is lower.</p>
                        </div>
                        <div class="col">
                            <div class="rounded-20 bg-grey w-100 h-100 py-4 d-flex justify-content-center"><?= renderImg("secured-lock.png", "lib") ?></div>
                        </div>
                    </div>
                </div>
                <div class="loan-slider-content">
                    <div class="row justify-content-between align-items-md-center h-100 gx-xl-5">
                        <div class="col-lg-7">
                            <div class="fs-64 ls-2 fw-800 lh-1 pb-3">Unsecured<span class="text-quaternary">.</span></div>
                            <p class="fs-20 text-dark-grey pt-md-4 description">Personal loans are a type of unsecured loan where the borrower is not required to offer any assets as collateral. This absence of collateral generally leads to higher interest rates compared to secured loans, as the risk to the lender is greater.</p>
                            <p class="fs-20 text-dark-grey description">Personal loans are versatile and can be used for a variety of purposes. They are particularly useful in situations where individuals need to cover expenses that don't involve tangible assets or when they prefer not to risk their assets. These loans can be ideal for consolidating debt, financing home renovations, covering medical expenses, or funding major life events. Since these loans are unsecured, lenders typically base their approval and terms on the borrower's creditworthiness and financial history.</p>
                        </div>
                        <div class="col">
                            <div class="rounded-20 bg-grey w-100 h-100 py-4 d-flex justify-content-center"><?= renderImg("unsecure-lock.png", "lib") ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="lenders">
    <div class="container">
        <div class="row align-items-center gx-xxl-6 gy-5">
            <div class="col-lg-6">
                <div class="fs-96 text-white font-articulat-heavy lh-3 ls-2">No sugar coating here.</div>
                <div class="fs-20 text-secondary-light py-md-5 py-4 description">
                    We’ll tell you what you need to know, enquire with LoanOptions and take one step closer to getting your personal loan.
                </div>
                <a href="#form" class="btn btn-quaternary text-white d-inline-flex rounded-pill">Compare Personal Loans</a>
            </div>
            <div class="col-lg"><?= renderImg("75-lenders.png", 'lib', 'w-100') ?></div>
        </div>
    </div>
</section>

<section class="vision">
    <div class="container">
        <div class="row align-items-center pb-5 pb-md-7 gy-4">
            <div class="col-xl-5">
                <div class="fs-96 text-primary font-articulat-heavy text-center text-xl-start lh-3 ls-2">Our <span class="vision_heading_prefix">Vision</span><span class="text-quaternary">.</span></div>
            </div>
            <div class="col-xl-6">
                <div class="fs-32 ls-2 fw-500 text-center text-xl-start description">Empowering customers to find the right loan with <span class="fw-800">fairness, accuracy & speed</span></div>
            </div>
        </div>
        <div class="row gy-3 gy-md-4 justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="vision_card fairness">
                    <div>
                        <div class="fancyText">Justice!</div>
                        <div class="fs-72 font-articulat-heavy lh-1 text-white">Fairness</div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="vision_card accuracy">
                    <div>
                        <div class="fancyText">See That!</div>
                        <div class="fs-72 font-articulat-heavy lh-1 text-white">Accuracy</div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="vision_card speed">
                    <div>
                        <div class="fancyText">Hella Fast!</div>
                        <div class="fs-72 font-articulat-heavy lh-1 text-white">Speed</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $testimonials = [
    [
        'title' => 'Vicki Fraser',
        'timeline' => '4 days ago',
        'content' => 'Chantelle is amazing to deal with, nothing was too much trouble, she was thorough and extremely helpful and accommodating to my requests. Chantelle worked out the best solution for my personal needs to move forward with my life and she ensured I was informed every step of the way.😊 I cannot recommend Chantelle highly enough. A huge thank you Chantelle 🙏',
        'smile_no' => '371',
        'image' => 'https://loanoptions.ai/uploads/testimonials/ts1.png',
    ],
    [
        'title' => 'Mary Ann Luague',
        'timeline' => '4 days ago',
        'content' => "<p>Pan Bhandge was very efficient and professional. The transaction was seamless and fast I never have to worry about anything. I'm very very busy so that matters. Not only did I get a good fair deal, it saves me from looking around.</p><p>Thank you Pan. You deserve the five star</p>",
        'smile_no' => '372',
        'image' => 'https://loanoptions.ai/uploads/testimonials/ts2.png',
    ],
    [
        'title' => 'Mrskat Charman',
        'timeline' => '4 days ago',
        'content' => 'Pan was a great help in finding me the right personal loan. He always kept me up to date with the process and was alway available should I have any questions. I really recommend Loan Options. Excellent service thanks again Pan?',
        'smile_no' => '373',
        'image' => 'https://loanoptions.ai/uploads/testimonials/ts3.png',
    ],
    [
        'title' => 'Paul Ciantar',
        'timeline' => '4 days ago',
        'content' => 'Great service quick and easy so much better than a big bank ???',
        'smile_no' => '374',
        'image' => 'https://loanoptions.ai/uploads/testimonials/ts4.png',
    ],
]; ?>
<section class="testimonials">
    <div class="container">
        <div class="row align-items-center mb-4 mb-md-5 gy-4">
            <div class="col-12 col-lg">
                <div class="fs-96 font-articulat-heavy lh-1 ls-2 text-tertiary">The cool people.</div>
            </div>
            <div class="col-12 col-lg-auto">
                <div class="row align-items-center gx-5">
                    <div class="col-auto d-none d-md-block">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 5.744L8 0L6 5.744H0L4.89 9.572L2.968 15.488L8 11.832L13.032 15.488L11.11 9.572L16 5.744H10Z" fill="#5614BB" />
                        </svg>
                        <span class="fw-600 ls-2 ps-2 lh-1">5/5 Rating</span>
                    </div>
                    <div class="col-auto d-none d-md-block">
                        <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.6828 2.03539L10.9646 0.317191C10.7615 0.114094 10.4859 0 10.1987 0C9.91141 0 9.63591 0.114094 9.43275 0.317191L7.96697 1.78297L11.217 5.03302L12.6828 3.56725C12.8859 3.36409 13 3.08858 13 2.80132C13 2.51405 12.8859 2.23855 12.6828 2.03539Z" fill="#5614BB" />
                            <path d="M7.19996 2.54998L1.08335 8.66659L0 13L4.33341 11.9166L10.45 5.80004L7.19996 2.54998Z" fill="#5614BB" />
                        </svg>
                        <span class="fw-600 ls-2 ps-2">509 reviews</span>
                    </div>
                    <div class="col-auto">
                        <a href="https://www.google.com/search?q=loanoptions+review&rlz=1C1ONGR_enAU1010AU1010&sxsrf=ALiCzsZV3OzoOBJlKjezMPtOZ12yTHhxMg%3A1664943498089&ei=igU9Y7iWBe7Fz7sPqv2zuAs&ved=0ahUKEwi4g5nuncj6AhXu4nMBHar-DLcQ4dUDCA8&uact=5&oq=loanoptions+review&gs_lcp=Cgdnd3Mtd2l6EAMyCAgAEB4QFhAKMggIABAeEA0QBTIICAAQHhANEAUyCAgAEB4QCBANMgUIABCGAzIFCAAQhgMyBQgAEIYDOgoIABBHENYEELADOg0ILhCABBDHARCvARAKOgcIABCABBAKOgoIABCABBDJAxAKOgYIABAeEBY6CAgAEB4QDxAWSgQIQRgASgQIRhgAUK4FWP8bYMgdaAFwAXgAgAGxAYgB7wiSAQMwLjeYAQCgAQHIAQjAAQE&sclient=gws-wiz#lrd=0x6b12bde29f9771c7:0xc077907404b9b979,1,,," target="_blank" class="btn btn-primary-light text-secondary rounded-pill">All Google Reviews</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="about_testimonials">
            <div class="section_left">
                <div class="row gy-5">
                    <div class="col-lg-12 d-lg-none">
                        <?= renderImg('hanging-superhero.png', 'lib', 'w-100') ?>
                    </div>
                    <div class="col-lg-7">
                        <div class="row align-items-center gx-3 gx-md-4">
                            <div class="col col-md-auto"><?= renderImg('google.png', 'logo') ?></div>
                            <div class="col-auto">
                                <svg width="126" height="22" viewBox="0 0 126 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.2151 7.32361L14.7252 6.38043L11.8213 0.493756C11.7372 0.349449 11.6168 0.229727 11.472 0.146522C11.3273 0.0633158 11.1633 0.0195312 10.9963 0.0195312C10.8294 0.0195312 10.6654 0.0633158 10.5207 0.146522C10.3759 0.229727 10.2555 0.349449 10.1714 0.493756L7.27476 6.38043L0.784913 7.32361C0.615609 7.34822 0.456564 7.41976 0.325771 7.53015C0.194978 7.64053 0.0976564 7.78534 0.0448168 7.94821C-0.00802275 8.11108 -0.0142716 8.28549 0.0267772 8.45173C0.067826 8.61797 0.154534 8.76939 0.277092 8.88887L4.97398 13.4764L3.86301 19.9466C3.834 20.1154 3.85281 20.289 3.9173 20.4477C3.98179 20.6064 4.08939 20.7439 4.22792 20.8445C4.36644 20.9452 4.53035 21.005 4.70109 21.0172C4.87182 21.0294 5.04256 20.9935 5.19397 20.9136L11 17.8528L16.806 20.9081C16.937 20.9777 17.0831 21.0136 17.2313 21.0127C17.3649 21.013 17.497 20.9841 17.6182 20.9279C17.7394 20.8718 17.847 20.7898 17.9332 20.6877C18.0195 20.5857 18.0824 20.4659 18.1176 20.337C18.1528 20.208 18.1594 20.0729 18.137 19.941L17.026 13.4709L21.7229 8.88336C21.8455 8.76389 21.9322 8.61246 21.9732 8.44623C22.0143 8.27999 22.008 8.10557 21.9552 7.94271C21.9023 7.77984 21.805 7.63502 21.6742 7.52464C21.5434 7.41426 21.3844 7.34272 21.2151 7.31811V7.32361Z" fill="#F6C042" />
                                    <path d="M47.2151 7.32361L40.7252 6.38043L37.8213 0.493756C37.7372 0.349449 37.6168 0.229727 37.472 0.146522C37.3273 0.0633158 37.1633 0.0195312 36.9963 0.0195312C36.8294 0.0195312 36.6654 0.0633158 36.5207 0.146522C36.3759 0.229727 36.2555 0.349449 36.1714 0.493756L33.2748 6.38043L26.7849 7.32361C26.6156 7.34822 26.4566 7.41976 26.3258 7.53015C26.195 7.64053 26.0977 7.78534 26.0448 7.94821C25.992 8.11108 25.9857 8.28549 26.0268 8.45173C26.0678 8.61797 26.1545 8.76939 26.2771 8.88887L30.974 13.4764L29.863 19.9466C29.834 20.1154 29.8528 20.289 29.9173 20.4477C29.9818 20.6064 30.0894 20.7439 30.2279 20.8445C30.3664 20.9452 30.5304 21.005 30.7011 21.0172C30.8718 21.0294 31.0426 20.9935 31.194 20.9136L37 17.8528L42.806 20.9081C42.937 20.9777 43.0831 21.0136 43.2313 21.0127C43.3649 21.013 43.497 20.9841 43.6182 20.9279C43.7394 20.8718 43.847 20.7898 43.9332 20.6877C44.0195 20.5857 44.0824 20.4659 44.1176 20.337C44.1528 20.208 44.1594 20.0729 44.137 19.941L43.026 13.4709L47.7229 8.88336C47.8455 8.76389 47.9322 8.61246 47.9732 8.44623C48.0143 8.27999 48.008 8.10557 47.9552 7.94271C47.9023 7.77984 47.805 7.63502 47.6742 7.52464C47.5434 7.41426 47.3844 7.34272 47.2151 7.31811V7.32361Z" fill="#F6C042" />
                                    <path d="M73.2151 7.32361L66.7252 6.38043L63.8213 0.493756C63.7372 0.349449 63.6168 0.229727 63.472 0.146522C63.3273 0.0633158 63.1633 0.0195312 62.9963 0.0195312C62.8294 0.0195312 62.6654 0.0633158 62.5207 0.146522C62.3759 0.229727 62.2555 0.349449 62.1714 0.493756L59.2748 6.38043L52.7849 7.32361C52.6156 7.34822 52.4566 7.41976 52.3258 7.53015C52.195 7.64053 52.0977 7.78534 52.0448 7.94821C51.992 8.11108 51.9857 8.28549 52.0268 8.45173C52.0678 8.61797 52.1545 8.76939 52.2771 8.88887L56.974 13.4764L55.863 19.9466C55.834 20.1154 55.8528 20.289 55.9173 20.4477C55.9818 20.6064 56.0894 20.7439 56.2279 20.8445C56.3664 20.9452 56.5304 21.005 56.7011 21.0172C56.8718 21.0294 57.0426 20.9935 57.194 20.9136L63 17.8528L68.806 20.9081C68.937 20.9777 69.0831 21.0136 69.2313 21.0127C69.3649 21.013 69.497 20.9841 69.6182 20.9279C69.7394 20.8718 69.847 20.7898 69.9332 20.6877C70.0195 20.5857 70.0824 20.4659 70.1176 20.337C70.1528 20.208 70.1594 20.0729 70.137 19.941L69.026 13.4709L73.7229 8.88336C73.8455 8.76389 73.9322 8.61246 73.9732 8.44623C74.0143 8.27999 74.008 8.10557 73.9552 7.94271C73.9023 7.77984 73.805 7.63502 73.6742 7.52464C73.5434 7.41426 73.3844 7.34272 73.2151 7.31811V7.32361Z" fill="#F6C042" />
                                    <path d="M99.2151 7.32361L92.7252 6.38043L89.8213 0.493756C89.7372 0.349449 89.6168 0.229727 89.472 0.146522C89.3273 0.0633158 89.1633 0.0195312 88.9963 0.0195312C88.8294 0.0195312 88.6654 0.0633158 88.5207 0.146522C88.3759 0.229727 88.2555 0.349449 88.1714 0.493756L85.2748 6.38043L78.7849 7.32361C78.6156 7.34822 78.4566 7.41976 78.3258 7.53015C78.195 7.64053 78.0977 7.78534 78.0448 7.94821C77.992 8.11108 77.9857 8.28549 78.0268 8.45173C78.0678 8.61797 78.1545 8.76939 78.2771 8.88887L82.974 13.4764L81.863 19.9466C81.834 20.1154 81.8528 20.289 81.9173 20.4477C81.9818 20.6064 82.0894 20.7439 82.2279 20.8445C82.3664 20.9452 82.5304 21.005 82.7011 21.0172C82.8718 21.0294 83.0426 20.9935 83.194 20.9136L89 17.8528L94.806 20.9081C94.937 20.9777 95.0831 21.0136 95.2313 21.0127C95.3649 21.013 95.497 20.9841 95.6182 20.9279C95.7394 20.8718 95.847 20.7898 95.9332 20.6877C96.0195 20.5857 96.0824 20.4659 96.1176 20.337C96.1528 20.208 96.1594 20.0729 96.137 19.941L95.026 13.4709L99.7229 8.88336C99.8455 8.76389 99.9322 8.61246 99.9732 8.44623C100.014 8.27999 100.008 8.10557 99.9552 7.94271C99.9023 7.77984 99.805 7.63502 99.6742 7.52464C99.5434 7.41426 99.3844 7.34272 99.2151 7.31811V7.32361Z" fill="#F6C042" />
                                    <path d="M125.215 7.32361L118.725 6.38043L115.821 0.493756C115.737 0.349449 115.617 0.229727 115.472 0.146522C115.327 0.0633158 115.163 0.0195312 114.996 0.0195312C114.829 0.0195312 114.665 0.0633158 114.521 0.146522C114.376 0.229727 114.255 0.349449 114.171 0.493756L111.275 6.38043L104.785 7.32361C104.616 7.34822 104.457 7.41976 104.326 7.53015C104.195 7.64053 104.098 7.78534 104.045 7.94821C103.992 8.11108 103.986 8.28549 104.027 8.45173C104.068 8.61797 104.155 8.76939 104.277 8.88887L108.974 13.4764L107.863 19.9466C107.834 20.1154 107.853 20.289 107.917 20.4477C107.982 20.6064 108.089 20.7439 108.228 20.8445C108.366 20.9452 108.53 21.005 108.701 21.0172C108.872 21.0294 109.043 20.9935 109.194 20.9136L115 17.8528L120.806 20.9081C120.937 20.9777 121.083 21.0136 121.231 21.0127C121.365 21.013 121.497 20.9841 121.618 20.9279C121.739 20.8718 121.847 20.7898 121.933 20.6877C122.019 20.5857 122.082 20.4659 122.118 20.337C122.153 20.208 122.159 20.0729 122.137 19.941L121.026 13.4709L125.723 8.88336C125.845 8.76389 125.932 8.61246 125.973 8.44623C126.014 8.27999 126.008 8.10557 125.955 7.94271C125.902 7.77984 125.805 7.63502 125.674 7.52464C125.543 7.41426 125.384 7.34272 125.215 7.31811V7.32361Z" fill="#F6C042" />
                                </svg>
                            </div>
                            <div class="col-auto fs-24 text-secondary-light fw-600 lh-1 description">
                                5 star reviews
                            </div>
                        </div>
                        <div class="hero_heading fs-96 font-articulat-heavy lh-3 ls-2 text-white">More than <span class="text-secondary-light">509</span> smiles, laughs & warcries</div>
                        <a href="javascript:void(0)" id="seeTestimonials" class="btn d-inline-flex rounded-pill btn-secondary-light text-white">See Testimonials</a>
                    </div>
                </div>
                <?= renderImg('hanging-superhero.png', 'lib', 'hanging_superhero') ?>
            </div>
            <?php if (!empty($testimonials)) { ?>
                <div class="section_right">
                    <div class="text-center d-xl-none pt-5 pb-4">
                        <div class="fs-96 font-articulat-heavy lh-1 ls-2 text-tertiary">More Smiles.</div>
                        <div class="fw-500 pt-3">Hear from our customers</div>
                    </div>
                    <div id="testimonial_slider">
                        <?php foreach ($testimonials as $key => $testimonial) { ?>
                            <div class="">
                                <div>
                                    <div class="d-flex align-items-center mb-4">
                                        <img src="<?= $testimonial['image'] ?>" class="lazy me-3 entered loaded" alt="Loan Option ">
                                        <div>
                                            <div class="fs-32 fw-700 ls-2"><?= $testimonial['title'] ?></div>
                                            <div class="fs-14 text-light-grey ls-2"><?= $testimonial['timeline'] ?></div>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-4">
                                        <svg width="126" height="22" viewBox="0 0 126 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21.2151 7.32361L14.7252 6.38043L11.8213 0.493756C11.7372 0.349449 11.6168 0.229727 11.472 0.146522C11.3273 0.0633158 11.1633 0.0195312 10.9963 0.0195312C10.8294 0.0195312 10.6654 0.0633158 10.5207 0.146522C10.3759 0.229727 10.2555 0.349449 10.1714 0.493756L7.27476 6.38043L0.784913 7.32361C0.615609 7.34822 0.456564 7.41976 0.325771 7.53015C0.194978 7.64053 0.0976564 7.78534 0.0448168 7.94821C-0.00802275 8.11108 -0.0142716 8.28549 0.0267772 8.45173C0.067826 8.61797 0.154534 8.76939 0.277092 8.88887L4.97398 13.4764L3.86301 19.9466C3.834 20.1154 3.85281 20.289 3.9173 20.4477C3.98179 20.6064 4.08939 20.7439 4.22792 20.8445C4.36644 20.9452 4.53035 21.005 4.70109 21.0172C4.87182 21.0294 5.04256 20.9935 5.19397 20.9136L11 17.8528L16.806 20.9081C16.937 20.9777 17.0831 21.0136 17.2313 21.0127C17.3649 21.013 17.497 20.9841 17.6182 20.9279C17.7394 20.8718 17.847 20.7898 17.9332 20.6877C18.0195 20.5857 18.0824 20.4659 18.1176 20.337C18.1528 20.208 18.1594 20.0729 18.137 19.941L17.026 13.4709L21.7229 8.88336C21.8455 8.76389 21.9322 8.61246 21.9732 8.44623C22.0143 8.27999 22.008 8.10557 21.9552 7.94271C21.9023 7.77984 21.805 7.63502 21.6742 7.52464C21.5434 7.41426 21.3844 7.34272 21.2151 7.31811V7.32361Z" fill="#F6C042" />
                                            <path d="M47.2151 7.32361L40.7252 6.38043L37.8213 0.493756C37.7372 0.349449 37.6168 0.229727 37.472 0.146522C37.3273 0.0633158 37.1633 0.0195312 36.9963 0.0195312C36.8294 0.0195312 36.6654 0.0633158 36.5207 0.146522C36.3759 0.229727 36.2555 0.349449 36.1714 0.493756L33.2748 6.38043L26.7849 7.32361C26.6156 7.34822 26.4566 7.41976 26.3258 7.53015C26.195 7.64053 26.0977 7.78534 26.0448 7.94821C25.992 8.11108 25.9857 8.28549 26.0268 8.45173C26.0678 8.61797 26.1545 8.76939 26.2771 8.88887L30.974 13.4764L29.863 19.9466C29.834 20.1154 29.8528 20.289 29.9173 20.4477C29.9818 20.6064 30.0894 20.7439 30.2279 20.8445C30.3664 20.9452 30.5304 21.005 30.7011 21.0172C30.8718 21.0294 31.0426 20.9935 31.194 20.9136L37 17.8528L42.806 20.9081C42.937 20.9777 43.0831 21.0136 43.2313 21.0127C43.3649 21.013 43.497 20.9841 43.6182 20.9279C43.7394 20.8718 43.847 20.7898 43.9332 20.6877C44.0195 20.5857 44.0824 20.4659 44.1176 20.337C44.1528 20.208 44.1594 20.0729 44.137 19.941L43.026 13.4709L47.7229 8.88336C47.8455 8.76389 47.9322 8.61246 47.9732 8.44623C48.0143 8.27999 48.008 8.10557 47.9552 7.94271C47.9023 7.77984 47.805 7.63502 47.6742 7.52464C47.5434 7.41426 47.3844 7.34272 47.2151 7.31811V7.32361Z" fill="#F6C042" />
                                            <path d="M73.2151 7.32361L66.7252 6.38043L63.8213 0.493756C63.7372 0.349449 63.6168 0.229727 63.472 0.146522C63.3273 0.0633158 63.1633 0.0195312 62.9963 0.0195312C62.8294 0.0195312 62.6654 0.0633158 62.5207 0.146522C62.3759 0.229727 62.2555 0.349449 62.1714 0.493756L59.2748 6.38043L52.7849 7.32361C52.6156 7.34822 52.4566 7.41976 52.3258 7.53015C52.195 7.64053 52.0977 7.78534 52.0448 7.94821C51.992 8.11108 51.9857 8.28549 52.0268 8.45173C52.0678 8.61797 52.1545 8.76939 52.2771 8.88887L56.974 13.4764L55.863 19.9466C55.834 20.1154 55.8528 20.289 55.9173 20.4477C55.9818 20.6064 56.0894 20.7439 56.2279 20.8445C56.3664 20.9452 56.5304 21.005 56.7011 21.0172C56.8718 21.0294 57.0426 20.9935 57.194 20.9136L63 17.8528L68.806 20.9081C68.937 20.9777 69.0831 21.0136 69.2313 21.0127C69.3649 21.013 69.497 20.9841 69.6182 20.9279C69.7394 20.8718 69.847 20.7898 69.9332 20.6877C70.0195 20.5857 70.0824 20.4659 70.1176 20.337C70.1528 20.208 70.1594 20.0729 70.137 19.941L69.026 13.4709L73.7229 8.88336C73.8455 8.76389 73.9322 8.61246 73.9732 8.44623C74.0143 8.27999 74.008 8.10557 73.9552 7.94271C73.9023 7.77984 73.805 7.63502 73.6742 7.52464C73.5434 7.41426 73.3844 7.34272 73.2151 7.31811V7.32361Z" fill="#F6C042" />
                                            <path d="M99.2151 7.32361L92.7252 6.38043L89.8213 0.493756C89.7372 0.349449 89.6168 0.229727 89.472 0.146522C89.3273 0.0633158 89.1633 0.0195312 88.9963 0.0195312C88.8294 0.0195312 88.6654 0.0633158 88.5207 0.146522C88.3759 0.229727 88.2555 0.349449 88.1714 0.493756L85.2748 6.38043L78.7849 7.32361C78.6156 7.34822 78.4566 7.41976 78.3258 7.53015C78.195 7.64053 78.0977 7.78534 78.0448 7.94821C77.992 8.11108 77.9857 8.28549 78.0268 8.45173C78.0678 8.61797 78.1545 8.76939 78.2771 8.88887L82.974 13.4764L81.863 19.9466C81.834 20.1154 81.8528 20.289 81.9173 20.4477C81.9818 20.6064 82.0894 20.7439 82.2279 20.8445C82.3664 20.9452 82.5304 21.005 82.7011 21.0172C82.8718 21.0294 83.0426 20.9935 83.194 20.9136L89 17.8528L94.806 20.9081C94.937 20.9777 95.0831 21.0136 95.2313 21.0127C95.3649 21.013 95.497 20.9841 95.6182 20.9279C95.7394 20.8718 95.847 20.7898 95.9332 20.6877C96.0195 20.5857 96.0824 20.4659 96.1176 20.337C96.1528 20.208 96.1594 20.0729 96.137 19.941L95.026 13.4709L99.7229 8.88336C99.8455 8.76389 99.9322 8.61246 99.9732 8.44623C100.014 8.27999 100.008 8.10557 99.9552 7.94271C99.9023 7.77984 99.805 7.63502 99.6742 7.52464C99.5434 7.41426 99.3844 7.34272 99.2151 7.31811V7.32361Z" fill="#F6C042" />
                                            <path d="M125.215 7.32361L118.725 6.38043L115.821 0.493756C115.737 0.349449 115.617 0.229727 115.472 0.146522C115.327 0.0633158 115.163 0.0195312 114.996 0.0195312C114.829 0.0195312 114.665 0.0633158 114.521 0.146522C114.376 0.229727 114.255 0.349449 114.171 0.493756L111.275 6.38043L104.785 7.32361C104.616 7.34822 104.457 7.41976 104.326 7.53015C104.195 7.64053 104.098 7.78534 104.045 7.94821C103.992 8.11108 103.986 8.28549 104.027 8.45173C104.068 8.61797 104.155 8.76939 104.277 8.88887L108.974 13.4764L107.863 19.9466C107.834 20.1154 107.853 20.289 107.917 20.4477C107.982 20.6064 108.089 20.7439 108.228 20.8445C108.366 20.9452 108.53 21.005 108.701 21.0172C108.872 21.0294 109.043 20.9935 109.194 20.9136L115 17.8528L120.806 20.9081C120.937 20.9777 121.083 21.0136 121.231 21.0127C121.365 21.013 121.497 20.9841 121.618 20.9279C121.739 20.8718 121.847 20.7898 121.933 20.6877C122.019 20.5857 122.082 20.4659 122.118 20.337C122.153 20.208 122.159 20.0729 122.137 19.941L121.026 13.4709L125.723 8.88336C125.845 8.76389 125.932 8.61246 125.973 8.44623C126.014 8.27999 126.008 8.10557 125.955 7.94271C125.902 7.77984 125.805 7.63502 125.674 7.52464C125.543 7.41426 125.384 7.34272 125.215 7.31811V7.32361Z" fill="#F6C042" />
                                        </svg>
                                    </div>
                                    <div class="fs-20 mb-7 description">
                                        <?= $testimonial['content'] ?>
                                    </div>
                                </div>
                                <div class="mt-auto text-palepurple font-articulat-heavy text-end">
                                    Smile No. <span class="display-2 fw-bolder"><?= $testimonial['smile_no'] ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<section class="footer_contact">
    <div class="container">
        <div class="row gy-4">
            <div class="col-md-8">
                <div class="flight_center">
                    <div class="row align-items-end justify-content-center justify-content-md-between gy-md-5 gy-4">
                        <div class="col-lg text-center text-md-start">
                            <div class="fs-40 font-articulat-heavy lh-3">A Simpler, <span class="text-sea-green">Easier Way</span><br /> To Borrow Money</div>
                            <div class="fs-20 fw-700 pt-3">Get a fast loan today up to $5,000.</div>
                        </div>
                        <div class="col-auto d-flex flex-column gap-5">
                            <?= renderImg('wonder-loans.png', 'logo') ?>
                            <a href="https://www.wonderloans.com.au/" target="_blank" class="btn btn-sea-green text-white d-inline-flex rounded-pill">Visit Wonder Loans</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="h-100 bg-secondary rounded-20 text-center d-flex align-items-center flex-column justify-content-center py-5 py-md-4 px-md-4">
                    <div class="fs-32 ls-2 text-white fw-700 lh-1 pb-3">Compare Over 75 <br class="d-none d-md-block">Loans <br class="d-block d-md-none">Lenders Today</div>
                    <a href="#form" id="seeTestimonials" class="btn d-inline-flex rounded-pill btn-quaternary text-white">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>