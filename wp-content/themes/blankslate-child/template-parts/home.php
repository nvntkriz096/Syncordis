<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="header">
<!-- <h1 class="entry-title" itemprop="name"><?php the_title(); ?></h1> <?php edit_post_link(); ?> -->
</header>
<div class="entry-content" itemprop="mainContentOfPage">
<?php
/* Template Name: HomePageCustomTemplate */

/**Slider Section**/
$slider_image_one = get_field('slider_image_a');
$slider_picture_one = $slider_image_one['sizes']['large'];
$slider_header_one = get_field('slider_header_a');
$slider_header_one_l = get_field('slider_header_a_l');
$slider_content_one = get_field('slider_content_a');

$slider_image_two = get_field('slider_image_b');
$slider_picture_two = $slider_image_two['sizes']['large'];
$slider_header_two = get_field('slider_header_b');
$slider_header_two_l = get_field('slider_header_b_l');
$slider_content_two = get_field('slider_content_b');

$slider_image_three = get_field('slider_image_c');
$slider_picture_three = $slider_image_three['sizes']['large'];
$slider_header_three = get_field('slider_header_c');
$slider_header_three_l = get_field('slider_header_c_l');
$slider_content_three = get_field('slider_content_c');
/**End - Slider Section **/

/**Offering Section**/
$offering_header = get_field('offering_header');
$offering_header_b = get_field('offering_header_b');
$offering_desc = get_field('offering_desc');
$offering_para = get_field('offering_para');


$offering_icon1 = get_field('offering_icon1');
$offering_icona = $offering_icon1['sizes']['large'];
$offering_text1 = get_field('offering_text1');

$offering_icon2 = get_field('offering_icon2');
$offering_iconb = $offering_icon2['sizes']['large'];
$offering_text2 = get_field('offering_text2');
$offering_icon3 = get_field('offering_icon3');
$offering_iconc = $offering_icon3['sizes']['large'];
$offering_text3 = get_field('offering_text3');

$offering_icon4 = get_field('offering_icon4');
$offering_icond = $offering_icon4['sizes']['large'];
$offering_text4 = get_field('offering_text4');

$offering_icon5 = get_field('offering_icon5');
$offering_icone = $offering_icon5['sizes']['large'];
$offering_text5 = get_field('offering_text5');

$offering_icon6 = get_field('offering_icon6');
$offering_iconf = $offering_icon6['sizes']['large'];
$offering_text6 = get_field('offering_text6');
/**End Offering section**/

/** Feature section **/
$service_header = get_field('service_header');
$service_header_b = get_field('service_header_b');
$service_para = get_field('service_para');

$service_img = get_field('service_bg');
$service_bg = $service_img['sizes']['large'];

$service_icon1 = get_field('service_icon1');
$service_icona = $service_icon1['sizes']['large'];
$service_text1 = get_field('service_text1');
$service_cap1 = get_field('service_cap1');

$service_icon2 = get_field('service_icon2');
$service_iconb = $service_icon2['sizes']['large'];
$service_text2 = get_field('service_text2');
$service_cap2 = get_field('service_cap2');

$service_icon3 = get_field('service_icon3');
$service_iconc = $service_icon3['sizes']['large'];
$service_text3 = get_field('service_text3');
$service_cap3 = get_field('service_cap3');

$service_icon4 = get_field('service_icon4');
$service_icond = $service_icon4['sizes']['large'];
$service_text4 = get_field('service_text4');
$service_cap4 = get_field('service_cap4');
/**End Feature section **/

/**Journey Section**/
$journey_header = get_field('journey_header');
$journey_header_b = get_field('journey_header_b');
$journey_para = get_field('journey_para');

$journey_img = get_field('journey_bg');
$journey_bg = $journey_img['sizes']['large'];

$journey_icon1 = get_field('journey_icon1');
$journey_icona = $journey_icon1['sizes']['large'];
$journey_text1 = get_field('journey_text1');

$journey_icon2 = get_field('journey_icon2');
$journey_iconb = $journey_icon2['sizes']['large'];
$journey_text2 = get_field('journey_text2');
$journey_icon3 = get_field('journey_icon3');
$journey_iconc = $journey_icon3['sizes']['large'];
$journey_text3 = get_field('journey_text3');

$journey_icon4 = get_field('journey_icon4');
$journey_icond = $journey_icon4['sizes']['large'];
$journey_text4 = get_field('journey_text4');

$journey_icon5 = get_field('journey_icon5');
$journey_icone = $journey_icon5['sizes']['large'];
$journey_text5 = get_field('journey_text5');
/**End Journey Section**/

/**rollout Section**/
$rollout_header = get_field('rollout_header');
$rollout_header_b = get_field('rollout_header_b');
$rollout_desc = get_field('rollout_desc');

$rollout_center = get_field('rollout_center_img');
$rollout_center_img = $rollout_center['sizes']['large'];

$rollout_icon1 = get_field('rollout_icon1');
$rollout_icona = $rollout_icon1['sizes']['large'];
$rollout_cap1 = get_field('rollout_cap1');
$rollout_list1 = get_field('rollout_list1');

$rollout_icon2 = get_field('rollout_icon2');
$rollout_iconb = $rollout_icon2['sizes']['large'];
$rollout_cap2 = get_field('rollout_cap2');
$rollout_list2 = get_field('rollout_list2');

$rollout_icon3 = get_field('rollout_icon3');
$rollout_iconc = $rollout_icon3['sizes']['large'];
$rollout_cap3 = get_field('rollout_cap3');
$rollout_list3 = get_field('rollout_list3');

$rollout_icon4 = get_field('rollout_icon4');
$rollout_icond = $rollout_icon4['sizes']['large'];
$rollout_cap4 = get_field('rollout_cap4');
$rollout_list4 = get_field('rollout_list4');

$rollout_icon5 = get_field('rollout_icon5');
$rollout_icone = $rollout_icon5['sizes']['large'];
$rollout_cap5 = get_field('rollout_cap5');
$rollout_list5 = get_field('rollout_list5');

$rollout_icon6 = get_field('rollout_icon6');
$rollout_iconf = $rollout_icon6['sizes']['large'];
$rollout_cap6 = get_field('rollout_cap6');
$rollout_list6 = get_field('rollout_list6');
/**End rollout section**/

/**Connect Section **/
$connect_header = get_field('connect_header');
$connect_header_b = get_field('connect_header_b');
$connect_desc = get_field('connect_desc');
$connect_para = get_field('connect_para');
$connect_form_header = get_field('connect_form_header');
$connect_form_desc = get_field('connect_form_desc');

$connect_img = get_field('connect_bg');
$connect_bg = $connect_img['sizes']['large'];
/**End Connect Section **/
?>
  <!--Hero Carousel-->
  <section class="carousel-section">
    <div id="heroCarousel" class="hero-carousel carousel slide m-0" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= $slider_picture_one ?>" />
                <div class="container">
                    <div data-aos="fade-up" class="carousel-caption text-start">
                        <div class="hero-left">
                            <h4 class="carousel-text-small"><?= $slider_header_one ?></h4>
                            <h1 class="carousel-text-large"><?= $slider_header_one_l ?></h1>
                        </div>
                        <h6 class="carousel-text-para"><?= $slider_content_one ?></h6>
                        <a class="btn" href="#">BOOK A CONSULTATION<span class="btn-arrow"></span></a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= $slider_picture_two ?>" />
                <div class="container">
                    <div data-aos="fade-up" class="carousel-caption text-start">
                        <div class="hero-left">
                            <h4 class="carousel-text-small"><?= $slider_header_two ?></h4>
                            <h1 class="carousel-text-large"><?= $slider_header_two_l ?></h1>
                        </div>
                        <h6 class="carousel-text-para"><?= $slider_content_two ?></h6>
                        <a class="btn" href="#">BOOK A CONSULTATION<span class="btn-arrow"></span></a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= $slider_picture_three ?>" />
                <div class="container">
                    <div data-aos="fade-up" class="carousel-caption text-start">
                        <div class="hero-left">
                            <h4 class="carousel-text-small"><?= $slider_header_three ?></h4>
                            <h1 class="carousel-text-large"><?= $slider_header_three_l ?></h1>
                        </div>
                            <h6 class="carousel-text-para"><?= $slider_content_three ?></h6>
                            <a class="btn" href="#">BOOK A CONSULTATION<span class="btn-arrow"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Hero Carousel-->

<!--Service Offerings Section-->
<section class="service-section">
  <div class="container service-box">
      <div class="row mx-auto">
          <div class="col-md-4 col-sm-12">
              <div class="d-flex flex-column justify-content-between align-items-center" data-aos="fade-left">
                  <div class="service-content">
                      <h2 class="service-title"><?=$offering_header?><span><?=$offering_header_b?></span></h2>
                      <h6 class="service-desc"><?=$offering_desc?></h6>
                  </div>
              </div>
          </div>
          <div class="col-md-8 col-sm-12">
              <div class="d-flex flex-column justify-content-center" data-aos="fade-right">
                  <p class="text"><?=$offering_para?></p>
                  <a class="readmore">Read More</a>
              </div>
          </div>
          <div class="dash"></div>
          <div class="col-md-12 col-sm-12">
              <h6>Here is a glimpse of our upgrade offerings:</h6>
              <div class="offerings">
                  <div class="offering" data-aos="fade-up">
                      <img src="<?=$offering_icona?>" />
                      <p class="text"><?=$offering_text1?></p>
                  </div>
                  <div class="offering" data-aos="fade-up">
                      <img src="<?=$offering_iconb?>" />
                      <p class="text"><?=$offering_text2?></p>
                  </div>
                  <div class="offering" data-aos="fade-up">
                      <img src="<?=$offering_iconc?>"/>
                      <p class="text"><?=$offering_text3?></p>
                  </div>
                  <div class="offering" data-aos="fade-up">
                      <img src="<?=$offering_icond?>" />
                      <p class="text"><?=$offering_text4?></p>
                  </div>
                  <div class="offering" data-aos="fade-up">
                      <img src="<?=$offering_icone?>" />
                      <p class="text"><?=$offering_text5?></p>
                  </div>
                  <div class="offering" data-aos="fade-up">
                      <img src="<?=$offering_iconf?>" />
                      <p class="text"><?=$offering_text6?></p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!--End Service Offering Section-->

<!--Feature Slider section-->
<section class="feature-section">
  <img class="feature-bg" src="<?=$service_bg?>"/>
  <div class="container">
  <div class="row mx-auto my-auto justify-content-center">
      <div class="feature-inner">
          <h2 data-aos="fade-up" class="feature-title"><?= $service_header?> <span><?= $service_header_b?></span></h2>
          <p data-aos="fade-up"><?= $service_para?></p>
          <div class="feature-slider carousel slide" id="feature-slider" data-bs-ride="carousel">
          <h6>Our accelerators</h6>
              <a href="#feature-slider" class="rightLst slider-control carousel-control-next" role="button" data-bs-slide="next"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/arrow-right.png" /></a>
              
            <div class="feature-slider-inner carousel-inner" role="listbox">
                <div class="carousel-item active">
                  <div class="col-md-3">
                      <div class="item-content">
                          <img src="<?=$service_icona?>" />
                          <div class="item-text">
                            <h6><?=$service_cap1?></h6>
                            <p><?=$service_text1?></p>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="col-md-3">
                      <div class="item-content">
                          <img src="<?=$service_iconb?>" />
                          <div class="item-text">
                            <h6><?=$service_cap2?></h6>
                            <p><?=$service_text2?></p>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="col-md-3">
                      <div class="item-content">
                          <img src="<?=$service_iconc?>" />
                          <div class="item-text">
                            <h6><?=$service_cap3?></h6>
                            <p><?=$service_text3?></p>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="col-md-3">
                      <div class="item-content">
                          <img src="<?=$service_icond?>" />
                          <div class="item-text">
                            <h6><?=$service_cap4?></h6>
                            <p><?=$service_text4?></p>
                          </div>
                      </div>
                  </div>
                </div>

          </div>                        
          </div>
      </div></div>
  </div>
</section>
<!--End Feature Slider Section-->

<!--Journey Section-->
<section class="journey-section">
  <img class="journey-bg" src="<?=$journey_bg?>"/>
  <div class="container journey-box">
      <div class="row mx-auto">
          <div class="col-md-6 col-sm-12">
              <div class="d-flex flex-column justify-content-between align-items-center" data-aos="fade-left">
                  <div class="journey-content">
                      <h2 class="journey-title"><?=$journey_header?><span><?=$journey_header_b?></span></h2>
                      <p data-aos="fade-up" class="text"><?=$journey_para?></p>
                  </div>
              </div>
              <div class="breakaways">
                  <div class="breakaway" data-aos="fade-up">
                      <img src="<?=$journey_icona?>" />
                      <p class="text"><?=$journey_text1?></p>
                  </div>
                  <div class="breakaway" data-aos="fade-up">
                      <img src="<?=$journey_iconb?>" />
                      <p class="text"><?=$journey_text2?></p>
                  </div>
                  <div class="breakaway" data-aos="fade-up">
                      <img src="<?=$journey_iconc?>" />
                      <p class="text"><?=$journey_text3?></p>
                  </div>
                  <div class="breakaway" data-aos="fade-up">
                      <img src="<?=$journey_icond?>" />
                      <p class="text"><?=$journey_text4?></p>
                  </div>
                  <div class="breakaway" data-aos="fade-up">
                      <img src="<?=$journey_icone?>" />
                      <p class="text"><?=$journey_text5?></p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!--End Journey Section-->

<!--Rollout Section-->
<section class="rollout-section">
    <div class="container rollout-box">
            <div class="d-flex flex-column justify-content-between align-items-center" data-aos="fade-left">
                <div class="rollout-content">
                    <h2 class="rollout-title"><?=$rollout_header ?><span><?=$rollout_header_b?></span></h2>
                    <h6 class="rollout-desc"><?=$rollout_desc?></h6>
                </div>
            </div>
            <!--Desktop View-->
            <div class="rollout desktop">
                <div class="feature-circle">
                    <div class="outer-circle">
                        <div class="inner-circle">
                            <div class="center">
                                <img src="<?=$rollout_center_img?>" />
                            </div>
                        </div>
                    </div>
            
                    <div class="point angle1">
                        <div class="icon-div" data-aos="fade-up">
                            <img decoding="async" src="<?=$rollout_iconc?>">
                        </div>
                    </div>
                    <img class="dotted-circle dotted-circle1" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/dotted-circle.png"/>
                    <div class="point-text1 point-text">
                        <h6><?=$rollout_cap3?></h6>
                        <div><?=$rollout_list3?></div>
                    </div>
                    <div class="point angle2">
                        <div class="icon-div" data-aos="fade-right">
                            <img decoding="async" src="<?=$rollout_icond?>">
                        </div>
                    </div>
                    <img class="dotted-circle dotted-circle2" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/dotted-circle.png"/>
                    <div class="point-text2 point-text">
                        <h6><?=$rollout_cap4?></h6>
                        <div><?=$rollout_list4?></div>
                    </div>
                    <div class="point angle3">
                        <div class="icon-div" data-aos="fade-right">
                            <img decoding="async" src="<?=$rollout_icone?>">
                        </div>
                    </div>
                    <img class="dotted-circle dotted-circle3" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/dotted-circle.png"/>
                    <div class="point-text3 point-text">
                        <h6><?=$rollout_cap5?></h6>
                        <div><?=$rollout_list5?></div>
                    </div>
                      <div class="point angle4">
                        <div class="icon-div" data-aos="fade-right">
                            <img decoding="async" src="<?=$rollout_iconf?>">
                        </div>
                    </div>
                    <img class="dotted-circle dotted-circle4" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/dotted-circle.png"/>
                    <div class="point-text4 point-text">
                        <h6><?=$rollout_cap6?></h6>
                        <div><?=$rollout_list6?></div>
                    </div>
                    <div class="point angle5">
                        <div class="icon-div" data-aos="fade-left">
                            <img decoding="async" src="<?=$rollout_icona?>">
                        </div>
                    </div>
                    <img class="dotted-circle dotted-circle5" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/dotted-circle.png"/>
                    <div class="point-text5 point-text">
                        <h6><?=$rollout_cap1?></h6>
                        <div><?=$rollout_list1?></div>
                    </div>
                    <div class="point angle6">
                        <div class="icon-div" data-aos="fade-up">
                            <img decoding="async" src="<?=$rollout_iconb?>">
                        </div>
                    </div>
                    <img class="dotted-circle dotted-circle6" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/dotted-circle.png"/>
                    <div class="point-text6 point-text">
                        <h6><?=$rollout_cap2?></h6>
                        <div><?=$rollout_list2?></div>
                    </div>
                </div>
            
            </div><!--rollout dt-->

            <!--Mobile View-->
            <div class="rollout mobile">
                <img src="<?=$rollout_center_img?>" />

                    <div class="rline">
                        <div class="rline-icon" data-aos="fade-right">
                            <img decoding="async" src="<?=$rollout_iconc?>">
                        </div>                   
                        <div class="rline-text" data-aos="fade-left">
                            <h6><?=$rollout_cap3?></h6>
                            <div><?=$rollout_list3?></div>
                        </div>
                    </div>
                    <div class="rline">
                        <div class="rline-icon" data-aos="fade-right">
                            <img decoding="async" src="<?=$rollout_icond?>">
                        </div>
                        <div class="rline-text" data-aos="fade-left">
                            <h6><?=$rollout_cap4?></h6>
                            <div><?=$rollout_list4?></div>
                        </div>
                    </div>
                    <div class="rline">
                        <div class="rline-icon" data-aos="fade-right">
                            <img decoding="async" src="<?=$rollout_icone?>">
                        </div>                   
                        <div class="rline-text" data-aos="fade-left">
                            <h6><?=$rollout_cap5?></h6>
                            <div><?=$rollout_list5?></div>
                        </div>
                    </div>

                    <div class="rline">
                        <div class="rline-icon" data-aos="fade-right">
                            <img decoding="async" src="<?=$rollout_iconf?>">
                        </div>                   
                        <div class="rline-text" data-aos="fade-left">
                            <h6><?=$rollout_cap6?></h6>
                            <div><?=$rollout_list6?></div>
                        </div>
                    </div>

                    <div class="rline">
                        <div class="rline-icon" data-aos="fade-right">
                            <img decoding="async" src="<?=$rollout_icona?>">
                        </div>                 
                        <div class="rline-text" data-aos="fade-left">
                            <h6><?=$rollout_cap1?></h6>
                            <div><?=$rollout_list1?></div>
                        </div>
                    </div>

                    <div class="rline">
                        <div class="rline-icon" data-aos="fade-right">
                            <img decoding="async" src="<?=$rollout_iconb?>">
                        </div>
                        <div class="rline-text" data-aos="fade-left">
                            <h6><?=$rollout_cap2?></h6>
                            <div><?=$rollout_list2?></div>
                        </div>
                    </div>
            
            </div><!--rollout mb-->
    </div><!--container-->
</section>
<!--End Rollout Section-->

<!--Connect Section-->
<section class="connect-section">
    <img class="connect-bg" src="<?=$connect_bg?>"/>
    <div class="container connect-box">
        <div class="row mx-auto">
            <div class="col-md-10 col-sm-12 mx-auto">
                <div class="d-flex flex-column justify-content-between align-items-center" data-aos="fade-left">
                    <div class="connect-content">
                        <h2 class="connect-title"><?=$connect_header?><span><?=$connect_header_b?></span></h2>
                        <h6 class="connect-desc text-center"><?=$connect_desc?></h6>
                        <p class="connect-para text-center"><?=$connect_para?></p>
                    </div>
                    <div class="connect-form container">
                        <h1><?=$connect_form_header?></h1>
                        <p><?=$connect_form_desc?></p>
                        <form>
                            <div class="connect-form-grid">
                                <input required='' type='text'>
                                <label alt='Name' placeholder='Type your Name'></label>
                            </div>
                            <div class="connect-form-grid">
                                <input required='' type='text'>
                                <label alt='Organization' placeholder='Type your Organization'></label>
                            </div>
                            <div class="connect-form-grid">
                                <input required='' type='text'>
                                <label alt='Email' placeholder='Type your Email'></label>
                            </div>
                            <div class="connect-form-grid">
                                <input required='' type='text'>
                                <label alt='Phone' placeholder='Type your Phone'></label>
                            </div>
                            <div class="connect-form-grid">
                                <input required='' type='text'>
                                <label alt='Country' placeholder='Type your Country'></label>
                            </div>
                        </form>
                        <a class="btn" href="#">BOOK A ASSESSMENT<span class="btn-arrow"></span></a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Connect Section-->
<script type=text/javascript>
AOS.init({
    offset: 100,
    duration: 1200,
    delay: 300,
    easing: 'ease',
    once: true,
})

let items = document.querySelectorAll('.feature-slider .carousel-item')
items.forEach((el) => {
    const minPerSlide = 4
    let next = el.nextElementSibling
    for (var i=1; i<minPerSlide; i++) {
        if (!next) {
    // wrap carousel by using first child
    next = items[0]
}
let cloneChild = next.cloneNode(true)
el.appendChild(cloneChild.children[0])
next = next.nextElementSibling
}
})
</script>
</div>
</article>
<?php endwhile; endif; ?>
<?php get_footer(); ?>