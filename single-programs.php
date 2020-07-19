<?php get_header();

$programsPath = get_template_directory().'/tutscodes/programs/';
$term_taxonomy = 'programs-category';
$term_obj_list = get_the_terms( $post->ID, $term_taxonomy );
$term_id = $term_obj_list['0']->term_id;
$term_name = $term_obj_list['0']->name;
?>  
           
<section class="page-section">
<h1 class="text-center bg-dark mb-5 text-white py-3"><?php the_title(); ?></h1>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-3">
                <!-- Tutorials List -->
                <?php
                $args   =   array(
                                    'post_type'         =>  'programs',
                                    'posts_per_page'    =>  -1, 
                                    'orderby'           =>  'date', 
                                    'order'             =>  'asc', 
                                    'tax_query'         =>  array(
                                                                array(
                                                                        'taxonomy' => $term_taxonomy,
                                                                        'field' => 'id',
                                                                        'terms' => $term_id, 
                                                                        'include_children' => false
                                                                    )
                                                                )
                                );  
                query_posts($args);
                $count = 1;
                if(have_posts()):
                ?>
                <div class="card mb-4">
                  <div class="card-header">
                    <h4 class="card-title m-0"><?php echo $term_name; ?></h4>
                  </div>
                  <div class="card-body p-0"> 
                    <ul class='list-group list-group-flush'> 
                        <?php   
                            while(have_posts()): the_post();  
                            $image = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ; 
                        ?>
                            <li class="list-group-item">
                            <?php echo $count; ?>) <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span class="post-date pull-right"></span>
                            </li> 
                        <?php 
                            $count++;
                            endwhile; 
                            wp_reset_query();
                        ?>
                    </ul> 
                  </div>
                </div>   
                <?php endif; ?>   

                <!-- Related Posts -->
                <div class="card mb-4">
                  <div class="card-header">
                    <h4 class="card-title m-0">Recommended Programs</h4>
                  </div>
                  <div class="card-body"> 
                    <?php   
                    // Post Tags
                    $taxonomies = get_terms( array(
                            'taxonomy' => $term_taxonomy, 
                            'hide_empty' => true,
                            'parent'=>0,
                            'order' => 'asc',
                            'orderby' => 'name'
                        )
                    );

                    if ( !empty($taxonomies) ) { 
                        foreach( $taxonomies as $category ) { 
                        $term_link = get_term_link( $category );
                            if($category->parent == 0) {
                                $output.= '<a class="badge badge-primary mr-2" href="'.$term_link.'">'. esc_html( $category->name ) .'</a>';
                            }
                        }
                        echo $output; 
                    } 
                    ?> 
                  </div>
                </div>  

            <?php //get_sidebar(); ?>
            </div>
            <div class="col-12 col-md-7">
                    <div class="left_side">
                        <?php 
                            if(have_posts()):   
                                $count = 0;
                                while(have_posts()): the_post();  
                        ?>
                        <div class="card mb-4">
                            <div class="card-header"><h3 class="m-0"><?php the_title(); ?></h3></div>
                            <div class="card-body">
                                <?php 
                                $image = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ; 
                                if(has_post_thumbnail()) { ?>
                                    <div class='card-image-top'>
                                        <img src='<?php echo $image; ?>' alt='<?php the_title(); ?>' />
                                    </div> 
                                <?php } ?>
                                <div class='mb-2'><?php istl_theme_entry_meta(); ?></div>
                   
                                <div class="card-text">
                                    <?php the_content(); ?>
                                    <div class="tutorials_article">
                                    <?php 
                                    $methods = $cfs->get('methods'); 
                                    if($methods){ ?>
                                        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/codemirror.js"></script>
                                        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/codemirror/mode/xml.js"></script>
                                        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/codemirror/mode/javascript.js"></script>
                                        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/codemirror/mode/css.js"></script>
                                        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/codemirror/mode/clike.js"></script>
                                        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/codemirror/mode/php.js"></script> 
                                        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/codemirror/mode/python.js"></script> 
                                        <?php 
                                        $count = 1;
                                        foreach($methods as $method){
                                            
                                            $methodTitle = $method['method_title'];
                                            $methodOptions = $method['method_options'];
                                            echo '<div class="method border-bottom mb-4">';
                                            echo "<h4 class='m-0 mb-3'>$methodTitle</h4>";
                                            foreach($methodOptions as $option) {
                                                $mode = $option['mode'];
                                                if (!$mode) {
                                                    $mode = 'php';
                                                }
                                                $description = $option['description'];
                                                $note = $option['note'];
                                                $file = htmlspecialchars($option['file']);
                                                if($file!=''){   
                                                    $headerfile = $programsPath.$mode.'/'.$file;    
                                                    $headercode = htmlspecialchars(file_get_contents($headerfile));  
                                                    echo "<textarea id='showcode_2$count'>$headercode</textarea>";
                                                ?>
                                                <script>
                                                  var editor = CodeMirror.fromTextArea(document.getElementById("showcode_2<?php echo $count; ?>"), {
                                                    lineNumbers: true,
                                                    styleActiveLine: false,
                                                    matchBrackets: true,
                                                    mode: "<?php echo $mode; ?>",
                                                    readOnly: true
                                                  });
                                                </script> 
                                            <?php
       
                                                }                                        
                                            }
                                            echo '<div class="description pb-0">'.$description.'</div>';
                                            if ($note){
                                                echo '<div class="alert alert-info">'.$note.'</div>';
                                            }
                                            echo "</div>";
                                            $count++;
                                        }
                                    }?>
                                                
                                    </div>    
                                </div>
                            </div> 
                        </div>
                        <div class="single_posts_nav d-flex justify-content-between">
                             <?php
                            $prev_post = get_previous_post();
                            if (!empty( $prev_post )): ?>
                             <div class='article-prev'>
                                <a class="btn btn-secondary mb-3 d-inline-block" href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>">Previous: <?php //echo esc_attr( $prev_post->post_title ); ?></a>
                            </div>
                            <?php endif ?>

                            <?php
                            $next_post = get_next_post();
                            if (!empty( $next_post )): ?>
                            <div class='article-nextpost'>
                                <a class="btn btn-secondary mb-3 d-inline-block" href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>">Next: <?php //echo esc_attr( $next_post->post_title ); ?></a>
                            </div>
                            <?php endif; ?>
                        </div>
                        
                        <?php // echo do_shortcode('[starbox id="23"]'); ?>                 
                        
                        <?php  
                            endwhile; 
                            endif; 
                        ?>      
                
                    </div> 
                
                <!--Related Posts-->
                <?php istl_related_posts(); ?>
                
                <?php comment_form(); ?>

            </div>
          </div>
        </div>
    </div>
</section>
      
<?php get_footer(); ?> 



