<?php
get_header();
// include 'search-form.php';
?>

<div class="pt_100 min_vh_100 d-flex align-items-center">
 <div class="container">
  <div class="mr-auto text-center">
    <div class="row">
     <div class="col-12">
      <h1>
       <span class="d-block w-100 text-primary mb_10 f_30_32">Programing is all about practice.</span>
       <span class="d-block w-100 text_light mb_20 f_40_42">Try more programs, with more examples, </span>
       <span class="d-block w-100 mb_30 text-primary mont_serrat f_40_42">To improve your programming logics</span>
      </h1>
      <div class="mb_40 f_16_22"> 
        <p class="mb_10">Our website is specially designed for beginers who want to learn with practice.</p>
        <p class="mb_40"> We have tried to provide you all types of programs on our website for PHP.</p>
        <p><a class="btn btn-primary px_50  pt_10 pb_10 rounded-pill" href="#learnprograms">Start Now</a></p>
      </div>
     </div>
    </div>
  </div>
 </div>
</div>

   
<!-- Section 2 Start -->
<section id="learnprograms" class="bg-light py-5 min_vh_100 d-flex align-items-center">
    <div class="container">
        <div class="mx-auto">
            <div class="row">
                <div class="col-12"><h2 class="mont_serrat heading_style type_2 text-center">Popular <span class="text-primary">Web Programs</span></h2>
                <div class="mb_40 mx-auto">
                    <p class="mb_20 text-center">You will get all basics to advanced programs for the popular programing languages and WordPress.</p>
                </div>
                </div>
            </div>
        </div>

        <?php $topTutorials = $cfs->get('top_tutorials'); ?>
        <div class="container mx-auto w_1000">
            <div class="row">

            <?php foreach($topTutorials as $tutorial) {
                $term_id = $tutorial['category']['0']; 
                $term_link = get_category_link( $term_id );
                ?>
                <div class="col-12 col-sm-4">
                    <div class="mb_20 card text-center r_30 shadow border-0 hs_11 trans_2_eio">
                        <div class="card-body">
                            <a class="card-link h_100 d-flex align-items-center justify-content-center" href="<?php echo $term_link; ?>">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/<?php echo $tutorial['icon']; ?>" alt="" class="img-fluid card-img-top w_70 max_h_70">
                            </a>
                            <h3 class="card-title f_20_22">
                                <a class="text-primary tdn" href="<?php echo $term_link; ?>">
                                    <?php echo $tutorial['title']; ?>
                                </a>
                            </h3>
                            <p class="text_light"><?php echo $tutorial['content']; ?></p>
                            <!-- <hr />  -->
                            <ul class="list-group list-group-flush list-unstyled text-left mb_20 f_14_20 d-none">
                                <?php
                                
                                $args = array(
                                        'post_type'         =>  'tutorial', 
                                        'posts_per_page'    =>  5, 
                                        'orderby'           =>  'id', 
                                        'order'             =>  'desc', 
                                        'tax_query'         =>  array(
                                                                    array(
                                                                            'taxonomy' => 'tutorial_cat',
                                                                            'field' => 'id',
                                                                            'terms' => $term_id, 
                                                                            'include_children' => false
                                                                    )
                                                                ) 
                                        );  
                                $top5_tutorials = get_posts($args); 
                                foreach($top5_tutorials as $top) {
                                ?>
                                    <li class="list-group-item px-0 bg-transparent p_y_5">
                                       <a class="link" href="<?php the_permalink($top->ID); ?>"><i class="fas fa-angle-double-right text_orange m_r_10"></i><span class="text-dark"><?php echo $top->post_title; ?></span></a> 
                                    </li>
                                <?php    
                                }    
                                ?>
                            </ul>
                            <!-- <hr />  -->
                            <!-- <div class="buy_btn_wr"><a href="<?php //echo $term_link; ?>" class="btn border-0 p_t_10 pb_10 w_100p btn-primary f_14_18">View All Topics</a></div> -->
                        </div>
                    </div>
                </div>
            <?php } ?>  

            </div>
        </div>

    </div>
</section>
<!-- Section 2 End -->

    <?php $programsTitle = $cfs->get('program_title'); ?>    
    <?php $programsSubTitle = $cfs->get('program_sub_title'); ?>    
    <?php $programsCategory = $cfs->get('programs_category')['0']['category'];
                                ?>    
     <div class="py-5 min_vh_50 d-flex align-items-center">
        <div class="container w_1000">
            <div class="row">
                <div class="col-12">
                        <h2 class="mont_serrat heading_style type_2 mbi_60 text-center"><?php echo $programsTitle; ?> <span class="text-primary">Categories</span></h2>
                        <!-- <h3 class="text-center mb-4 text-light"><?php //echo $programsSubTitle; ?></h3> -->
                        
                        <div class="category-list text-center pb_20x">
                            <?php foreach($programsCategory as $procat_id) { 
                                $term = get_term($procat_id);
                            ?>
                                <a href="<?php echo get_term_link($term); ?>" class="btn r_25 px_40 mx_5 mb_20 py_10_10 btn-primary "><?php echo $term->name; ?></a>
                            <?php } ?>
                        </div>
                        
                </div>
            </div>
        </div>  
    </div>    


    <section id="priority" class="ptb_60_40  d-none">
        <div class="container">
            <div class="row">
                 <div class="col-12"><h2 class="heading_style mb_20 f_40_46 text-center text_orange">How It Works</h2> 
                 <p class="mb_50 f_16_22 text-center">Write your code with unique and different logic. We will check and share it for others.</p>
                 </div>
      
                    <!-- Lower Section -->
                    <div class="mx-auto w_800">
                        <div class="row">
                            <div class="col-12 col-sm-6 mb_10 text-left">
                                <div class="card consult_cards border-0 rounded-0">
                                  <div class="card-body position-relative">
                                    <div class="bg_orange  d-block position-absolute text-center circle_icon r_100"><strong>1</strong></div>
                                    <h3 class="f_18_24 link">Learn programming</h3>
                                    <p class="mb_10 f_16_20">Lorem ipsum dolor sit amemipsum dolor sit amem ipsum dolor sit amemipsum dolor sit amemipsum dolor sit amem dolor sit amet, consec.ipsum dolor sit amet, consec...</p>
                                  </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 mb_10 text-left">
                            
                                <div class="card consult_cards border-0 rounded-0">
                                  <div class="card-body position-relative">
                                    <div class="bg_orange  d-block position-absolute text-center circle_icon r_100"><strong>2</strong></div>
                                    <h3 class="f_18_24 link">Create your own logic</h3>
                                    <p class="mb_10 f_16_20">Lorem ipsum dolor sit amemipsum dolor sit amem ipsum dolor sit amemipsum dolor sit amemipsum dolor sit amem dolor sit amet, consec.ipsum dolor sit amet, consec...</p>
                                  </div>
                                </div>
                            </div><div class="col-12 col-sm-6 mb_10 text-left">
                            
                                <div class="card consult_cards border-0 rounded-0">
                                  <div class="card-body position-relative">
                                    <div class="bg_orange  d-block position-absolute text-center circle_icon r_100"><strong>3</strong></div>
                                    <h3 class="f_18_24 link">Submit your code for review</h3>
                                    <p class="mb_10 f_16_20">Lorem ipsum dolor sit amemipsum dolor sit amem ipsum dolor sit amemipsum dolor sit amemipsum dolor sit amem dolor sit amet, consec.ipsum dolor sit amet, consec...</p>
                                  </div>
                                </div>
                            </div><div class="col-12 col-sm-6 mb_10 text-left">
                            
                                <div class="card consult_cards border-0 rounded-0">
                                  <div class="card-body position-relative">
                                    <div class="bg_orange  d-block position-absolute text-center circle_icon r_100"><strong>4</strong></div>
                                    <h3 class="f_18_24 link">Share with friends</h3>
                                    <p class="mb_10 f_16_20">Lorem ipsum dolor sit amemipsum dolor sit amem ipsum dolor sit amemipsum dolor sit amemipsum dolor sit amem dolor sit amet, consec.ipsum dolor sit amet, consec...</p>
                                  </div>
                                </div>
                            </div>

                        </div>
                    </div>
            </div>  
        </div>
    </section>

    <section id="partners" class="ptb_60_40 d-none">
        <div class="container">
            <div class="row">
                 <div class="col-12"><h2 class="heading_style mb_50 f_40_46 text-center ">Follow / Like / Share</h2> 
                 </div>

                 <?php  $banner_social_links = $cfs->get('banner_social_links', 289); ?>

                    <!-- Lower Section -->
                    <div class="mx-auto w_800 text-center">
                        <div class="form-row">
                        <?php if($banner_social_links) { ?>
                          <?php foreach($banner_social_links as $links) { ?>
                            <div class="col">
                                <a href="<?php echo $links['link']['url']; ?>" title="<?php echo $links['link']['text']; ?>" target="_blank" class=" d-inline-block box_shw2 p_20 r_10 tdn font-weight-bold mb_20 f_18_22 w-100"><?php echo $links['link']['text']; ?></a>
                            </div> 
                            <?php } ?>
                        <?php } ?>
                        </div>
                    </div>
            </div>  
        </div>
    </section>

<?php   

get_footer();