<?php

$id = get_the_ID();

$headline = pods_field('infoheadline', $id);
$topline = pods_field('infotopline', $id);
$text = pods_field('infotext', $id);


$location = pods_field('location', $id);
$degree = pods_field('degree', $id);
$jobdegree = pods_field('jobdegree', $id);

?>


<section class="block-intro z-0 relative" id="info" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="200">
  <div class="topline">
    <h3>
      <?php echo $topline; ?>
    </h3>
  </div>
  <div class="info-content main-wrapper pt-8">
    <div class="info-content-inner flex flex-row gap-24">
      <div class="headline-wrap basis-1/4">
        <h2>
          <?php echo $headline; ?>
        </h2>
      </div>
      <div class="content-wrap basis-3/4">
        <p>
          <?php echo $text; ?>
        </p>
        <div class="info-elements flex flex-row justify-between mt-24 flex-wrap gap-6">
          <div class="info-element flex flex-row items-center gap-4">
            <div class="svg-wrap rounded-full w-20 h-20 flex justify-center items-center">
              <svg class="fill-white w-12 h-12">
                <use xlink:href="#bday"></use>
              </svg>
            </div>
            <?php
            $birthDate = "12/19/2001";
            $birthDate = explode("/", $birthDate);
            $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
              ? ((date("Y") - $birthDate[2]) - 1)
              : (date("Y") - $birthDate[2]));
            echo $age . " Jahre alt";
            ?>
          </div>

          <div class="info-element flex flex-row items-center gap-4">
            <div class="svg-wrap rounded-full w-20 h-20 flex justify-center items-center">
              <svg class="fill-white w-12 h-12">
                <use xlink:href="#home"></use>
              </svg>
            </div>
            <?php echo $location; ?>
          </div>
          <div class="info-element flex flex-row items-center gap-4">
            <div class="svg-wrap rounded-full w-20 h-20 flex justify-center items-center">
              <svg class="fill-white w-12 h-12">
                <use xlink:href="#school"></use>
              </svg>
            </div>
            <?php echo $degree; ?>
          </div>
          <div class="info-element flex flex-row items-center gap-4">
            <div class="svg-wrap rounded-full w-20 h-20 flex justify-center items-center">
              <svg class="fill-white w-12 h-12">
                <use xlink:href="#job"></use>
              </svg>
            </div>
            <?php echo $jobdegree; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>