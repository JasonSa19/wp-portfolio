<?php

$id = get_the_ID();

$headline = pods_field('infoheadline', $id);
$topline = pods_field('topline', $id);
$text = pods_field('infotext', $id);
$anchor = pods_field('infoanchor', $id);


?>


<section class="z-0 relative" id="<?php echo $anchor; ?>" data-aos="fade-up" data-aos-easing="ease"
  data-aos-delay="200">
  <div class="topline">
    <h3>
      <?php echo $topline; ?>
    </h3>
  </div>
  <div class="info-content main-wrapper pt-8">
    <div class="info-content-inner flex flex-row gap-6">
      <div class="headline-wrap basis-1/4">
        <h2>
          <?php echo $headline; ?>
        </h2>
      </div>
      <div class="content-wrap basis-3/4">
        <p class="w-4/5">
          <?php echo $text; ?>
        </p>
        <div class="info-elements">
          <div class="info-element">
            <div class="svg-wrap rounded-full w-20 h-20 flex justify-center items-center">
              <svg height="26">
                <use xlink:href="#bday"></use>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>