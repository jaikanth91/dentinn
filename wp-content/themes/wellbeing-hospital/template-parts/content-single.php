<div class="post-single">
    <?php if(has_post_thumbnail()){?>
    <div class="post-thumbnail">
        <img src="<?php echo esc_url(get_the_post_thumbnail_url('full'));?>" class="img-fluid" alt="<?php the_title_attribute();?>">
    </div>

    <?php }?>
    <div class="post-content">
        <?php wellbeing_hospital_entry_meta();?>
        <h2><?php the_title();?></h2>
        <?php the_content();?>
    </div>
    <?php wellbeing_hospital_tags();?>
</div>        