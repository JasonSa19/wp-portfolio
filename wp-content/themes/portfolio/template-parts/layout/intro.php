<?php

// POD Fields

$id = get_the_ID();

$headline = get_field('headline', $id);
$text = get_field('text', $id);
$button = get_field('button', $id);
$image = get_field('image', $id);

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
            <svg id="right-arrow" xmlns="http://www.w3.org/2000/svg" width="31.68" height="15.918"
              viewBox="0 0 31.68 15.918">
              <g data-name="Gruppe 6" transform="translate(0 0)">
                <path data-name="Pfad 1"
                  d="M31.471,134.821h0l-7.2-7.2a.72.72,0,1,0-1.015,1.015l5.969,5.976H.72a.72.72,0,0,0,0,1.44h28.5l-5.969,5.969a.72.72,0,1,0,1.015,1.015l7.2-7.2A.72.72,0,0,0,31.471,134.821Z"
                  transform="translate(0 -127.369)" fill="#fff" />
              </g>
            </svg>
          </button>
        </a>
    </div>

    <div class="intro-imagewrap basis-2/5 flex justify-end items-center">
      <div class="imagewrap-inner relative">
        <div class="speechbubble absolute">Hey, ich bin Jason👋</div>
        <div class="image-holder">
          <img class="object-cover w-full h-full rounded-full" src="<?php echo $image["guid"]; ?>"
            alt="<?php echo $image["post_title"]; ?>">
        </div>
      </div>
    </div>
  </div>
</section>