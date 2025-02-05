<?php

/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package 
 */

$phone = get_field('phone_number', 'options');
$email = get_field('email_address', 'options');
?>

<header class="top-0 left-0 w-full fixed z-50 transition-all duration-300 xl:pt-[47px] <?php echo is_404() ? 'bg-primary' : ''; ?>">
	<nav class="nav px-6 xl:mx-[53px] 2xl:px-[70px] flex items-center pb-5 xl:pb-[50px] max-w-[100vw] h-full border-b border-solid border-b-white">
		<div class="nav-wrapper flex justify-between items-center xl:items-start w-full xl:pt-[53px]">

			<nav class="xl:flex flex-col gap-[116px] hidden" aria-label="<?php esc_attr_e('Menu główne', 'gostyniec'); ?>">
				<div class="flex items-center text-white js-hide-scroll gap-[30px]">
					<?php if (!empty($phone)): ?>
						<a href="tel:<?= filter_var($phone, FILTER_SANITIZE_NUMBER_INT); ?>" class="flex items-center hover:text-primary">
							<svg class="mr-[30px]" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
								<path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
							</svg>
							<?php echo $phone; ?>
						</a>
					<?php endif; ?>
					<?php if ($email): ?>
						<a class="flex items-center hover:text-primary" href="mailto:<?php echo antispambot($email); ?>">
							<svg class="mr-[30px]" width="23" height="17" viewBox="0 0 23 17" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<mask id="mask0_1_111" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="23" height="17">
									<rect width="23" height="17" fill="url(#pattern0_1_111)" />
								</mask>
								<g mask="url(#mask0_1_111)">
									<rect width="23" height="17" fill="white" class="fill-color" />
								</g>
								<defs>
									<pattern id="pattern0_1_111" patternContentUnits="objectBoundingBox" width="1" height="1">
										<use xlink:href="#image0_1_111" transform="scale(0.0434783 0.0588235)" />
									</pattern>
									<image id="image0_1_111" width="23" height="17" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAARCAMAAAABrcePAAAAdVBMVEUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAB5WX1YAAAAJ3RSTlP/APDv8vrJ7mhsYgad1M9y55XBzLpeNhI+V+tQCy2lfjgWh2+OHAqFZISuAAAAk0lEQVR4nG3OWRKCMBAE0O4Ahh01IoL7ev8jOlaQBCr9keVVMjNgb7SK/Chdt0SKUBqsgl6heAT4dQJ53i10uydR92Q+eBql5NHI4XJnsZm4/LArZVdA0pA3278+kFn8U1kAY6/uQWxdvhfsrm9yLDg5tLRjvh5vzmW8pxvYdz/SK+gJ/hXnGdAGPQXzSqt5oirjF95OBW+9l3awAAAAAElFTkSuQmCC" />
								</defs>
							</svg>

							<?php echo $email; ?>
						</a>
						<svg width="15" height="22" viewBox="0 0 15 22" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<mask id="mask0_1973_114" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="15" height="22">
								<rect width="14" height="21" transform="translate(0.0283203 0.71582)" fill="url(#pattern0_1973_114)" />
							</mask>
							<g mask="url(#mask0_1973_114)">
								<rect x="0.0283203" y="0.71582" width="14" height="21" fill="white" class="fill-color" />
							</g>
							<defs>
								<pattern id="pattern0_1973_114" patternContentUnits="objectBoundingBox" width="1" height="1">
									<use xlink:href="#image0_1973_114" transform="scale(0.0714286 0.047619)" />
								</pattern>
								<image id="image0_1973_114" width="14" height="21" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAAVCAMAAABBhy+7AAAAaVBMVEUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAnbPKNAAAAI3RSTlMA/xTcKm5q6kwJfu27qGSQOv5Tr/WUQYMYcciXsufEBV7PwCNvMQQAAACTSURBVHicTc7XGsMgCAVgjjGr2Xt2vv9DFghpcy7U/wMV4sxT9+mmWY6cpYekX1SDnO+yDKyE980//cZ7QhQAoXaFQJASsNobq5TPopZvzMgYHdyNO/CiDBhVI5A5aWnKlNKyOa7F/GH81lWaWh1R0uolHkQTHC/Wxtp+yFW5ibzSn6SCVfxEjun+pArVReQeVvwClw4EjuQXU3kAAAAASUVORK5CYII=" />
							</defs>
						</svg>
					<?php endif; ?>
				</div>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'menu-1',
						'container'     => 'ul',
						'menu_class' => 'header__menu flex flex-row justify-center'
					)
				);
				?>
			</nav>

			<div class="relative w-full h-full xl:pt-[124px] xl:min-w-[200px]" data-aos="zoom-in">
				<a aria-label="gostyniec" href="<?php echo bloginfo('url'); ?>" id="logo" class="xl:absolute xl:top-1/2 xl:left-1/2 xl:-translate-x-1/2 xl:-translate-y-1/2">
					<?php
					$logo = get_field('logo', 'options');

					$size = 'full';
					if ($logo) {
						$attr = array(
							'class' => 'w-[100px] h-[100px] xl:w-full xl:h-full object-contain',
							'loading' => 'lazy'
						);
						echo wp_get_attachment_image($logo, $size, false, $attr);
					}
					?>
				</a>
			</div>

			<nav class="xl:flex flex-col gap-[98px] hidden" aria-label="<?php esc_attr_e('Menu główne', 'gostyniec'); ?>">
				<div class="flex items-center justify-end js-hide-scroll gap-[48px]">
					<?php
					$link = get_field('reservation_button', 'options');
					if ($link):
						$link_url = $link['url'];
						$link_title = $link['title'];
						$link_target = $link['target'] ? $link['target'] : '_self';
					?>
						<a
							class="text-white hover:bg-primary hover:border-transparent h-[42px] px-[52px] font-light text-[15px] transition-all inline-flex justify-center items-center border border-solid border-white"
							href="<?php echo esc_url($link_url); ?>"
							target="<?php echo esc_attr($link_target); ?>">
							<?php echo esc_html($link_title); ?>
						</a>
					<?php endif; ?>
					<div class="flex items-center gap-[38px]">
						<?php
						$social_media = get_field('social_media', 'options');
						if ($social_media && isset($social_media['facebook'])): ?>
							<a target="_blank" rel="nofollow noopener" href="<?php echo esc_url($social_media['facebook']); ?>">
								<svg width="10" height="20" viewBox="0 0 10 20" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
									<mask id="mask0_1_99" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="10" height="20">
										<rect width="10" height="20" fill="url(#pattern0_1_99)" />
									</mask>
									<g mask="url(#mask0_1_99)">
										<rect width="10" height="20" fill="white" class="fill-color"></rect>
									</g>
									<defs>
										<pattern id="pattern0_1_99" patternContentUnits="objectBoundingBox" width="1" height="1">
											<use xlink:href="#image0_1_99" transform="scale(0.1 0.05)" />
										</pattern>
										<image id="image0_1_99" width="10" height="20" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAUCAMAAACDMFxkAAAAUVBMVEUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABcqRVCAAAAG3RSTlP/AANK5PL45i9SdcXtzE9A0+Gt3Wg6us6CxLUJNCkXAAAAWklEQVR4nJXMSRKAIAwEQCJGZMd9+f9DTYh4dy7TVamMAo6LAU3lrWpIq4h5cC+RaUgOoHEUTsSNOHs/EMu1v8812MC3LznZQHUm3RZkrOuJ+j953AoLImaAByuGAnQq4jenAAAAAElFTkSuQmCC" />
									</defs>
								</svg>
							</a>
						<?php endif; ?>
						<?php
						if ($social_media && isset($social_media['booking'])): ?>
							<a target="_blank" rel="nofollow noopener" href="<?php echo esc_url($social_media['booking']); ?>">
								<svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
									<mask id="mask0_1973_102" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="21" height="22">
										<rect width="20" height="21" transform="translate(0.0283203 0.71582)" fill="url(#pattern0_1973_102)" />
									</mask>
									<g mask="url(#mask0_1973_102)">
										<rect x="0.0283203" y="0.71582" width="20" height="21" fill="white" class="fill-color" />
									</g>
									<defs>
										<pattern id="pattern0_1973_102" patternContentUnits="objectBoundingBox" width="1" height="1">
											<use xlink:href="#image0_1973_102" transform="scale(0.05 0.047619)" />
										</pattern>
										<image id="image0_1973_102" width="20" height="21" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAVCAMAAABxCz6aAAAA1VBMVEUAAAATOIATOH8UOIATOIATOIAAp+YAn98TOIAUOIAUOIATOYATOH8TOIASOYASOYASOIATOYATOIAApOMSOIEUOYETOYETOIAUOIAXJ3EWK3UAldMBnt0AQIAFh8cJeboUNHwAM5kUMXoVNHwApuYAVaoTOIAkJG0kSZITN38Ase4UM4UArOogQIAUPIAPabQUO4kVOIAAr+0TOYAWOnwRNoICldUTOYAUN4AaTZkAruwTOYAXOoATOH8UOIAAmNoTOIAYPYYSOIEVOYIUNoETN4AAse5DV3NBAAAAR3RSTlMA//Kbnuj//8q37Gz1+dyai7qT/31Z/4TeiDs6zQSTO/wFxEqYA7EHB3iwGTEIJhENVo3UIz3aNoEK/+YWUsQ+wBVxMUvYig+62RQAAADESURBVHicXc7VEoNADAXQbCm0SL1I3d3dXf7/k5rNALvT+8LlDCSBSj7Kk9q/QaTLgniXEEPDLAK08MXI6FfSuY8RxhIjfL6wMFvgiUoWMS9Q7fPiIpoSUkkirgVaT9McrNCUYDuf7yca3inhfSOjqus6H8l20p1nXtKIn//t4KFOQzQm1DKILYEdaipjThHgNha/NxT8sN47lLVjlRbFMQaaU4ClFotp8p2sCTAkFGSlcUotl9O2kFUoKdd+0LpS+zv7AUfJDDVNw6+GAAAAAElFTkSuQmCC" />
									</defs>
								</svg>
							</a>
						<?php endif; ?>
						<?php
						if ($social_media && isset($social_media['instagram'])): ?>
							<a target="_blank" rel="nofollow noopener" href="<?php echo esc_url($social_media['instagram']); ?>">
								<svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="#fff" viewBox="0 0 16 16">
									<path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
								</svg>
							</a>
						<?php endif; ?>
					</div>
				</div>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-2',
						'menu_id'        => 'menu-2',
						'container'     => 'ul',
						'menu_class' => 'header__menu flex flex-row justify-center'
					)
				);
				?>
			</nav>

			<div class="nav-toggle xl:hidden">
				<div></div>
				<div></div>
				<div></div>
			</div>
			<div class="nav-content">
				<nav aria-label="<?php esc_attr_e('Menu główne', 'gostyniec'); ?>">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'menu-1',
							'container'     => 'ul',
							'menu_class' => 'flex flex-col justify-start items-stretch'
						)
					);
					?>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-2',
							'menu_id'        => 'menu-2',
							'container'     => 'ul',
							'menu_class' => 'flex flex-col justify-start items-stretch'
						)
					);
					?>
				</nav>
				<?php
				$link = get_field('reservation_button', 'options');
				if ($link):
					$link_url = $link['url'];
					$link_title = $link['title'];
					$link_target = $link['target'] ? $link['target'] : '_self';
				?>
					<a
						class="text-white bg-primary hover:border-transparent h-[62px] px-[52px] font-light text-[15px] transition-all inline-flex justify-center items-center w-full sm:w-auto sm:max-w-[225px]"
						href="<?php echo esc_url($link_url); ?>"
						target="<?php echo esc_attr($link_target); ?>">
						<?php echo esc_html($link_title); ?>
					</a>
				<?php endif; ?>
			</div>

		</div>
	</nav>
</header>