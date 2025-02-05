<?php

$cta_group = get_field('offer_group');
$background = $cta_group['offer_background'];
?>

<section class="hero hero-overlay relative flex justify-center items-center mt-20 lg:mt-0 pt-32 md:pt-[195px] pb-24 md:pb-[248px] mb-[62px]" style="background: url(<?php echo esc_url($background); ?>) no-repeat; background-size:cover;">
    <div class="container">
        <div data-aos="fade-up" class="text-white mx-auto xl:w-8/12 relative">
            <svg class="absolute sm:-left-10 -left-3.5 -top-3.5 sm:-top-10" width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <mask id="mask0_1979_199" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="64" height="65">
                    <rect width="64" height="64" transform="translate(0 0.000244141)" fill="url(#pattern0_1979_199)" />
                </mask>
                <g mask="url(#mask0_1979_199)">
                    <rect y="0.000244141" width="64" height="64" fill="white" />
                </g>
                <defs>
                    <pattern id="pattern0_1979_199" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_1979_199" transform="scale(0.015625)" />
                    </pattern>
                    <image id="image0_1979_199" width="64" height="64" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABAAQMAAACQp+OdAAAABlBMVEUAAAAjTFs/GckDAAAAAnRSTlMA/1uRIrUAAAAWSURBVHicY/gPBQwNDFAwyhhlEM0AAB//J3nWymt0AAAAAElFTkSuQmCC" />
                </defs>
            </svg>

            <h2 class="text-[28px] md:text-[40px] md:leading-[40px] uppercase sm:w-3/4 lg:w-1/2"><?php echo $cta_group['offer_title']; ?></h2>
            <div class="flex items-center flex-wrap md:flex-nowrap mt-10 md:mt-[104px]">
                <div class="text-[17px] leading-[22px] md:border-r md:border-solid md:border-r-white md:pr-[90px] xl:w-[70%]">
                    <?php echo $cta_group['offer_text']; ?>
                </div>
                <div class="md:pl-[66px] w-full sm:w-auto">
                    <?php
                    $link = $cta_group['offer_button'];
                    if ($link):
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                        <a
                            class="text-white hover:bg-white mt-14 md:mt-0 hover:text-secondary hover:border-transparent h-[61px] lg:h-[69px] lg:px-[52px] font-light px-10 text-[17px] lg:text-[18px] w-full sm:w-auto transition-all inline-flex justify-center items-center border border-solid border-white uppercase"
                            href="<?php echo esc_url($link_url); ?>"
                            target="<?php echo esc_attr($link_target); ?>">
                            <?php echo esc_html($link_title); ?>
                        </a>
                    <?php endif; ?>
                </div>

            </div>
            <svg class="absolute -bottom-3.5 -right-3.5 sm:-bottom-7 sm:-right-7" width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <mask id="mask0_1979_202" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="64" height="64">
                    <rect width="64" height="64" fill="url(#pattern0_1979_202)" />
                </mask>
                <g mask="url(#mask0_1979_202)">
                    <rect width="64" height="64" fill="white" />
                </g>
                <defs>
                    <pattern id="pattern0_1979_202" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_1979_202" transform="scale(0.015625)" />
                    </pattern>
                    <image id="image0_1979_202" width="64" height="64" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABAAQMAAACQp+OdAAAABlBMVEUAAAAjTFs/GckDAAAAAnRSTlMA/1uRIrUAAAAUSURBVHicY4ACxlHGKIMExn8oAABtOwg4s9iRYAAAAABJRU5ErkJggg==" />
                </defs>
            </svg>

        </div>
    </div>
    <svg class="absolute bottom-0 left-0 hidden lg:block" width="154" height="303" viewBox="0 0 154 303" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <mask id="mask0_1979_157" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="154" height="303">
            <rect width="154" height="303" fill="url(#pattern0_1979_157)" />
        </mask>
        <g mask="url(#mask0_1979_157)">
            <rect width="154" height="303" fill="#BD907C" />
        </g>
        <defs>
            <pattern id="pattern0_1979_157" patternContentUnits="objectBoundingBox" width="1" height="1">
                <use xlink:href="#image0_1979_157" transform="scale(0.00649351 0.00330033)" />
            </pattern>
            <image id="image0_1979_157" width="154" height="303" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJoAAAEvCAMAAACKUShXAAABv1BMVEUAAAD///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////8CUf3FAAAAlXRSTlMA//Mlxf7qoPvM8MoX+imDDoe7HFIMBT5iAfYQC1XkEhVoE2TcndhbCIkr1B6TV850Mogv7TXQSz209NKF4QKBmpC4IeespsBgsnyO9QOwJ5sxlkbxoQ/Cb1MZbDheBEBOxkI6LVnrct96mMh/2kdnqTb4GJIm6KdaLlB144ytayJ5Yde9twnuRKJKix/Vwa9ud6S+RcRBKx4AABIkSURBVHic7V33W9RKF97QOyyggPTuClzKSm/Sq0gXQZqKIFVFAaVYsd1r9w/+tmYzM2dKsrMJz/f4/kgym5eUmVPec8aGISn5bGxyCv/rRcCI4sFZvtVECAx5mSlKSYrVVDAc+5kpSrPVXFBkB5gpyn2r2SCwa6l9s5qNFlfDtNSUa1bz0eANwkwZs5pPADnTKLULdNvmMGbKkNWMVETh1JQkqyn5UEMwuyhvG/Z5XqTb9hNgdjGWhEstEDWl1mpeLrSBzJTfVvOy2YpiYGrKstXMbOMUZkqr1cx6aMwU5Y7F1Jrp1PKsZXafzkxR1i2lxrhp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" />
        </defs>
    </svg>

</section>