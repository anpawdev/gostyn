<?php
$program_group = get_field('program_group');
?>

<?php if ($program_group): ?>
    <section class="mb-10">
        <div class="container">
            <div class="row">
                <div class="flex flex-wrap lg:flex-nowrap justify-center">
                    <div class="lg:mr-[80px] text-center">
                        <?php
                        $image_PFR = $program_group['logotypes'];
                        $size = 'full';
                        if ($image_PFR) {
                            echo wp_get_attachment_image($image_PFR, $size);
                        }; ?>
                    </div>
                    <div class="text-center lg:order-3">
                        <?php
                        $image_PFR = $program_group['pfr_logo'];
                        $size = 'full';
                        if ($image_PFR) {
                            echo wp_get_attachment_image($image_PFR, $size);
                        }; ?>
                    </div>
                    <div class="wysiwyg-small text-[15px] font-light lg:w-9/12 lg:max-w-[1010px]">
                        <?php echo $program_group['text']; ?>
                    </div>

                </div>

            </div>
        </div>
    </section>
<?php endif; ?>