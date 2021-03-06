<!-- ================================== ADDING LOOPS ====================================== 	
	
	The loop can be placed on any theme php page where you want a post to display.
	By default the loop will display the contents (depending on what you ask for) of each post. 
	The main blog loop is usually placed inside a theme file named loop-index.php
	
	To read more on loops visit: http://codex.wordpress.org/The_Loop
	
-->	


<!-- ================================== ESSENTIAL LOOP CODE ====================================== -->	
				<?php if (have_posts()):while(have_posts()):the_post();?> 
				<!-- checks if there are posts, if so, while there are still posts..-->
				
					<?php the_title(); ?>
					<!-- displayes the title of the post -->
				
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> </a>
					<!-- link that goes around title, to link to post -->
				
					<?php the_time('M,d');?>
					<!-- displayes the post time/date -->
				
					<?php comments_number('0','1','%');?>
					<!-- displayes the comment count -->
				
					<?php the_author(); ?>
					<!-- displays the author of the post -->
				
					<?php the_excerpt();?>
					<!-- displays the post excerpt, if no excerpt then it displays the first few lines of the post -->
				
					<?php the_content(); ?>
					<!--displays the post content, usually used only on the single.php (single post page) -->
				
           		<?php endwhile; else:?>
           		<!-- end the while; other wise if there are no posts to begin with -->
					<?php _e('Sorry, no posts at this time');?>
					<!-- echos (prints) sorry message to screen -->
				<?php endif; ?>				
				<!-- ends the if for the loop -->
				
				
				

<!-- ================================== BASIC LOOP EXAMPLE ====================================== -->	
				<h2>Basic Wordpress Loop</h2>

				<div id="bLoop"> <!-- id for styling -->				
<!-- WP Loop -->
					<?php if (have_posts()):while(have_posts()):the_post();?>
						<article>
							<h3 class="title">
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<?php the_title(); ?>
								</a>
							</h3>
							
							<div class="info">
								<span class="date">
								<i>Date:&nbsp;</i>
								<?php the_time('M,d');?>
								</span>
								
								<span class="comment">
								<i>Comments:&nbsp;</i>
								<?php comments_number('0','1','%');?>
								</span>
								
								<span class="author">
								<i>Author:&nbsp;</i>
								<?php the_author(); ?>
								</span>
							</div>
							
							<div class="excerpt">
								<?php the_excerpt();?>
							</div>
						</article>
																			
           					<?php endwhile; else:?>
						<?php _e('Sorry, no posts at this time');?>
					<?php endif; ?>

<!-- End WP Loop -->			
			</div> <!-- End div #bLoop-->	

<!-- ================================== LOOP WITH THUMBNAILS ====================================== -->				
				<h2>Wordpress Loop with Thumbnail</h2>
				<div id="thumLoop">	<!-- id for styling -->							
<!-- WP Loop -->
				<?php if (have_posts()):while(have_posts()):the_post();?>
					<article>
						<h3 class="title">
							<a href="<?php the_permalink();?>">
								<?php the_title(); ?>
							</a>
						</h3>
						
						<div class="info">
							<span class="date">
								<?php the_time('F, d, Y'); ?>
							</span>
							
							<span class="comments">
								<?php comments_number('no comments', 
								'1 comment', '% commnets');?>
							</span>
						</div>
						
						
						<figure>
							<?php the_post_thumbnail(); ?>
						</figure>
						
						<?php the_excerpt();?>
						
					
					</article>				
				
				<?php endwhile; else:?>
					<?php _e('Sorry, no posts at this time');?>
				<?php endif; ?>				

<!-- End WP Loop -->			
			</div><!-- End div #thumLoop-->

<!-- ================================== ANOTHER LOOP EXAMPLE ====================================== -->

				<h2>Another example of posts</h2>
				<div id="Loop3"><!-- id for styling -->				
<!-- WP Loop -->
				<?php if (have_posts()):while(have_posts()):the_post();?>
					<article>
						<h3 class="title">
							<a href="<?php the_permalink();?>">
								<?php the_title(); ?>
							</a>
						</h3>
						<figure>
							<?php the_post_thumbnail(); ?>
						</figure>
						
						<div class="content">
							<div class="info">
								<span class="date">
									<?php the_time('F, d, Y'); ?>
								</span>
							
								<span class="comments">
									<?php comments_number('no comments','1 comment', '% commnets');?>
								</span>
							</div>
							
							<div>
							<?php the_excerpt();?>
							</div>
						</div>
						
					
					</article>
				
				
				<?php endwhile; else:?>
					<?php _e('Sorry, no posts at this time');?>
				<?php endif; ?>				

<!-- End WP Loop -->			
			</div><!-- End div #thumLoop-->

