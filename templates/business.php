<?php /* Template Name: Business */ ?>
<?php get_header() ?>
        <div class="business">
            <div class="section1">
                <div class="size-img">
                    <img src="<?php the_field('image_cover') ?>" class="img-fluid" alt="">
                </div>
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="title-page">
                                    <span><?php the_field('title_page') ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <?php $menuAdmin =get_terms( array('taxonomy' => 'admin-cat','parent' =>0,'hide_empty' => false ));
                                    $i=0;
                            ?>
                            <?php foreach ($menuAdmin as $menu): ?>
                            <div class="menu" data-aos="fade-up" data-aos-duration="500">
                                <?php $children = get_terms(array('taxonomy'=>'admin-cat','parent'=>$menu->term_id,'hide_empty' => false)); ?>
                                <?php echo $menu->name ?>
                                <div class="arrows-down"><img src="<?php echo get_template_directory_uri() ?>/assets/images/down.png" alt="" class="img-fluid"></div>
                                <ul class="list-unstyled <?php if($i==0): echo'hide';endif; $a=0;?>">
                                    <?php foreach($children as $child): ?>
                                        <li class="<?php if($a==0): echo'active';endif;?> "><a href=""><?php echo $child->name ?></a></li>
                                    <?php $a++ ;endforeach; ?>
                                </ul>
                            </div>
                            <?php $i++ ;endforeach;?>
                        </div>
                        <div class="col-md-9">
                            <div class="title-section">
                                <a><?php the_field('title_section') ?></a>
                            </div>
                            <div class="description">
                                <?php the_field('description') ?>
                            </div>
                            <div class="row mt-md-4">
                                <?php $menuAdminn =get_terms( array('taxonomy' => 'admin-cat','parent' =>0,'hide_empty' => false ));
                                ?>
                                <?php foreach($menuAdminn as $menuu): ?>
                                <div class="col-md-6 pb-md-5" data-aos="fade-up" data-aos-duration="500">
                                    <div class="title">
                                        <?php echo $menuu->name ?>
                                    </div>
                                    <div class="thumbnail">
                                        <img src="<?php the_field('image','admin-cat'.'_'.$menuu->term_id) ?>" alt="" class="img-fluid">
                                    </div>
                                    <div class="see-more ">
                                        <a href="" class="utm-b">Xem thêm</a>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php get_footer() ?>