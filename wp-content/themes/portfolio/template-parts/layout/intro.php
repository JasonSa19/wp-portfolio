<?php

$id = get_the_ID();

$headline = pods_field('headline', $id);
$text = pods_field('text', $id);
$button = pods_field('button', $id);
$image = pods_field('image', $id);

?>


<section id="intro" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="200">
  <div class="intro-inner flex justify-center main-wrapper">
    <div class="intro-textwrap basis-3/5">
      <h1>
        <?php echo $headline; ?>
      </h1>
      <p class="pt-10 w-3/5">
        <?php echo $text; ?>
      <p>
        <a>
          <button class="second-btn rounded-full py-4 px-12 flex justify-center items-center gap-8 mt-16">lass uns
            starten
            <svg width=24 height="27">
              <use xlink:href="#right-arrow"></use>
            </svg>
          </button>
        </a>
    </div>

    <div class="intro-imagewrap basis-2/5 flex justify-end items-center">
      <div class="imagewrap-inner relative">
        <div class="speechbubble absolute flex items-center justify-center">Hey, ich bin Jason👋</div>
        <div class="image-holder">
          <img class="object-cover w-full h-full rounded-full" src="<?php echo $image["guid"]; ?>"
            alt="<?php echo $image["post_title"]; ?>">
        </div>
      </div>
    </div>
  </div>
</section>