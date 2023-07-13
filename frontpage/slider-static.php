<?php
global $complete;  
$ImageUrl[] = esc_url(get_template_directory_uri() ."/images/slides/slider1.jpg");
$ImageUrl[] = esc_url(get_template_directory_uri() ."/images/slides/slider1.jpg");
$ImageUrl[] = esc_url(get_template_directory_uri() ."/images/slides/slider1.jpg");
$ImageUrl[] = esc_url(get_template_directory_uri() ."/images/slides/slider1.jpg");
$ImageUrl[] = esc_url(get_template_directory_uri() ."/images/slides/slider1.jpg");
$ImageUrl[] = esc_url(get_template_directory_uri() ."/images/slides/slider1.jpg");
$ImageUrl[] = esc_url(get_template_directory_uri() ."/images/slides/slider1.jpg");
$ImageUrl[] = esc_url(get_template_directory_uri() ."/images/slides/slider1.jpg");
$ImageUrl[] = esc_url(get_template_directory_uri() ."/images/slides/slider1.jpg"); 

for($i=1; $i<=10; $i++){
	if(!empty($complete['slide_image'.$i])){
		$imgArr[] = $i;
	}
}
require get_template_directory() . '/frontpage/slider.php';
?>

<section id="home_slider">
  <div class="slider-main">
    <?php if(!empty($imgArr)){ ?>
    <div class="slider-wrapper theme-default">
      <div id="slider" class="nivoSlider">
        <?php
			   foreach($imgArr as $val){
				?>
        <img src="<?php echo $complete['slide_image'.$val]; ?>" data-thumb="<?php echo $complete['slide_image'.$val]; ?>" alt="<?php echo strip_tags($complete['slide_title'.$val]); ?>" title="<?php echo esc_attr('#htmlcaption'.$val) ; ?>" />
        <?php } ?>
      </div>
      <?php foreach($imgArr as $val)	{ ?>
      <div id="htmlcaption<?php echo esc_attr($val); ?>" class="nivo-html-caption">
      	<div class="nivo-caption-content">
			<?php if(!empty($complete['slide_title'.$val])){ ?>
            <div class="title"><?php echo $complete['slide_title'.$val]; ?></div>
            <?php } ?>
            <?php if(!empty($complete['slide_desc'.$val])){ ?>
            <div class="slidedesc"><?php echo $complete['slide_desc'.$val]; ?></div>
            <?php } ?>
            <?php if(!empty($complete['slide_btn'.$val])){ ?>
            <div class="slidebtn"><a class="slidelink" href="<?php echo $complete['slide_link'.$val]; ?>"><?php echo $complete['slide_btn'.$val]; ?></a></div>
            <?php } ?>
            <?php if(!empty($complete['slide_btn'.$val.'_2'])){ ?>
            <div class="slidebtn slidebtn2"><a class="slidelink slidelink2" href="<?php echo $complete['slide_link'.$val.'_2']; ?>"><?php echo $complete['slide_btn'.$val.'_2']; ?></a></div>
            <?php } ?>
      	</div>
      </div>
      <?php } ?>
    </div>
    <?php }
	else { ?>
    <div class="slider-wrapper slide-temp theme-default">
      <div id="slider" class="nivoSlider">
        <?php foreach($ImageUrl as $val) { ?>
        <img src="<?php echo $val; ?>" data-thumb="<?php echo $val; ?>" alt="" title="#htmlcaption" />
        <?php } ?>
      </div>
      <?php for($i=1; $i<=3; $i++)	{ ?>
      <div id="htmlcaption" class="nivo-html-caption">
        <div class="title"><?php echo 'SKT Nutristore<small>Portfolio</small>Theme'; ?></div>
        <div class="slidedesc">&nbsp;</div>
        <div class="slidebtn">&nbsp;</div>
      </div>
      <?php } ?>
    </div>
    <?php } ?>    
  </div>
</section>