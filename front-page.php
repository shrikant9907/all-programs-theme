<?php
get_header();
// include 'search-form.php';
?>

    <div class="py-5">
        <div class="container">
            <div class="mr-auto">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h1><span class="d-block w-100">Programing is all about practice.</span>Try more programs,<br />Learn with more examples, <br />Improve your logic.</h1>
                        <div class="m_b_40"> 
                            <p class="m_b_30 f_16_22">Our website is specially designed for beginers who want to learn with practice.<br /> We have tried to provide you all types of programs on our website for PHP.</p>
                            <p><a class="btn btn-primary rounded-pill" href="#learnprograms">Start Now <i class="m_l_5 fa fa-arrow-right" aria-hidden="true"></i></a></p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <img class="rounded-lg shadow-lg img-fluid" src="http://localhost/tutorialswp/wp-content/uploads/2020/07/Screenshot-from-2020-07-19-10-33-39-e1595135305115.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>

   
   <!-- Section 2 Start -->
    <section id="learnprograms" class="bg-light py-5">
        <div class="container">
            <div class="mx-auto">
                <div class="row">
                    <div class="col-12"><h2 class="heading_style m_b_20 text-center text_orange">Popular Web Programing</h2>
                    <div class="m_b_40 mx-auto">
                        <p class="m_b_20 f_16_22 text-dark text-center">You will get all basics to advanced programs for the popular programing languages and WordPress.</p>
                    </div>
                    </div>
                </div>
            </div>

            <?php $topTutorials = $cfs->get('top_tutorials'); ?>
            <div class="container mx-auto w_1000">
                <div class="form-row">

                <?php foreach($topTutorials as $tutorial) {
                    $term_id = $tutorial['category']['0']; 
                    $term_link = get_category_link( $term_id );
                    ?>
                    <div class="col-12 col-sm-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <a class="card-link h_100 d-flex align-items-center justify-content-center" href="<?php echo $term_link; ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/<?php echo $tutorial['icon']; ?>" alt="" class="img-fluid card-img-top w_100 max_h_100"></a>
                                <h3 class="card-title"><?php echo $tutorial['title']; ?></h3>
                                <p><?php echo $tutorial['content']; ?></p>
                                <!-- <hr />  -->
                                <ul class="list-group list-group-flush list-unstyled text-left m_b_20 f_14_20 d-none">
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
                                <!-- <div class="buy_btn_wr"><a href="<?php //echo $term_link; ?>" class="btn border-0 p_t_10 p_b_10 w_100p btn-primary f_14_18">View All Topics</a></div> -->
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
     <div class="py-5">
        <div class="container w_1000">
            <div class="row">
                <div class="col-12">
                        <h2 class="text_orange font-weight-bold mb-4 text-center"><?php echo $programsTitle; ?></h2>
                        <!-- <h3 class="position-absolute text-light"><?php //echo $programsSubTitle; ?></h3> -->
                        
                        <div class="category-list text-center p_b_20">
                            <?php foreach($programsCategory as $procat_id) { 
                                $term = get_term($procat_id);
                            ?>
                                <a href="<?php echo get_term_link($term); ?>" class="btn btn-outline-secondary"><?php echo $term->name; ?></a>
                            <?php } ?>
                        </div>
                        
                </div>
            </div>
        </div>  
    </div>    


    <section id="priority" class="ptb_60_40  d-none">
        <div class="container">
            <div class="row">
                 <div class="col-12"><h2 class="heading_style m_b_20 f_40_46 text-center text_orange">How It Works</h2> 
                 <p class="m_b_50 f_16_22 text-center">Write your code with unique and different logic. We will check and share it for others.</p>
                 </div>
      
                    <!-- Lower Section -->
                    <div class="mx-auto w_800">
                        <div class="row">
                            <div class="col-12 col-sm-6 m_b_10 text-left">
                                <div class="card consult_cards border-0 rounded-0">
                                  <div class="card-body position-relative">
                                    <div class="bg_orange  d-block position-absolute text-center circle_icon r_100"><strong>1</strong></div>
                                    <h3 class="f_18_24 link">Learn programming</h3>
                                    <p class="m_b_10 f_16_20">Lorem ipsum dolor sit amemipsum dolor sit amem ipsum dolor sit amemipsum dolor sit amemipsum dolor sit amem dolor sit amet, consec.ipsum dolor sit amet, consec...</p>
                                  </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 m_b_10 text-left">
                            
                                <div class="card consult_cards border-0 rounded-0">
                                  <div class="card-body position-relative">
                                    <div class="bg_orange  d-block position-absolute text-center circle_icon r_100"><strong>2</strong></div>
                                    <h3 class="f_18_24 link">Create your own logic</h3>
                                    <p class="m_b_10 f_16_20">Lorem ipsum dolor sit amemipsum dolor sit amem ipsum dolor sit amemipsum dolor sit amemipsum dolor sit amem dolor sit amet, consec.ipsum dolor sit amet, consec...</p>
                                  </div>
                                </div>
                            </div><div class="col-12 col-sm-6 m_b_10 text-left">
                            
                                <div class="card consult_cards border-0 rounded-0">
                                  <div class="card-body position-relative">
                                    <div class="bg_orange  d-block position-absolute text-center circle_icon r_100"><strong>3</strong></div>
                                    <h3 class="f_18_24 link">Submit your code for review</h3>
                                    <p class="m_b_10 f_16_20">Lorem ipsum dolor sit amemipsum dolor sit amem ipsum dolor sit amemipsum dolor sit amemipsum dolor sit amem dolor sit amet, consec.ipsum dolor sit amet, consec...</p>
                                  </div>
                                </div>
                            </div><div class="col-12 col-sm-6 m_b_10 text-left">
                            
                                <div class="card consult_cards border-0 rounded-0">
                                  <div class="card-body position-relative">
                                    <div class="bg_orange  d-block position-absolute text-center circle_icon r_100"><strong>4</strong></div>
                                    <h3 class="f_18_24 link">Share with friends</h3>
                                    <p class="m_b_10 f_16_20">Lorem ipsum dolor sit amemipsum dolor sit amem ipsum dolor sit amemipsum dolor sit amemipsum dolor sit amem dolor sit amet, consec.ipsum dolor sit amet, consec...</p>
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
                 <div class="col-12"><h2 class="heading_style m_b_50 f_40_46 text-center ">Follow / Like / Share</h2> 
                 </div>

                 <?php  $banner_social_links = $cfs->get('banner_social_links', 289); ?>

                    <!-- Lower Section -->
                    <div class="mx-auto w_800 text-center">
                        <div class="form-row">
                        <?php if($banner_social_links) { ?>
                          <?php foreach($banner_social_links as $links) { ?>
                            <div class="col">
                                <a href="<?php echo $links['link']['url']; ?>" title="<?php echo $links['link']['text']; ?>" target="_blank" class=" d-inline-block box_shw2 p_20 r_10 tdn font-weight-bold m_b_20 f_18_22 w-100"><?php echo $links['link']['text']; ?></a>
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