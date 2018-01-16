<?php
/**
 * Template part for displaying page content in frontpage.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Barracuda
 */

?>

<!-- Page Content -->
    
    <!--club start*/-->
    <section class="homebarracuda-club" id="club">
            <div class="feature-onworking-list">
                        <div class="col-md-6 col-sm-6">
                            <div class="club-left-contents padding-top padding-bottom">
                                <div class="text-center">
	                                <?php if(get_field('club_logo')):?>
	                                	<img src="<?php the_field('club_logo')?>" alt="Smiling Barracuda Blue Logo">
	                                <?php endif;?>	
	                            </div>
                                <?php if(get_field('club_statement')):?>
                                	<?php the_field('club_statement');?>
                                <?php endif;?>        
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="club-right-contents padding-top padding-bottom">
                                <?php if(get_field('club_heading')):?>
                                	<h2><?php the_field('club_heading')?></h2>
                                <?php endif;?>                             
                                <div class="media">
								    <div class="media-left pull-left media-middle">
								        <?php if(get_field('founders_icon')):?>
								        <img class="media-object img-responsive" src="<?php the_field('founders_icon')?>" alt="Founders Icon" />
								        <?php endif;?>
								    </div>
								    <div class="media-body">
								      <?php if(get_field('founders_heading')):?>
								      		<h4 class="media-heading"><?php the_field('founders_heading');?></h4>
								      <?php endif;?>
								      <?php if(get_field('founders_descriptions')):?>
								      <p><?php the_field('founders_descriptions')?></p>
								    <?php endif;?>
								    </div>
                                </div>
                                <div class="media">
								    <div class="media-left pull-left media-middle">
								        <?php if(get_field('experts_icon')):?>
								        <img class="media-object img-responsive" src="<?php the_field('experts_icon')?>" alt="Experts Icon" />
								        <?php endif;?>
								    </div>
								    <div class="media-body">
								      <?php if(get_field('experts_heading')):?>
								      		<h4 class="media-heading"><?php the_field('experts_heading')?></h4>
								      <?php endif;?>
								      <?php if(get_field('experts_descriptions')):?>
								      	<p><?php the_field('experts_descriptions')?></p>
								      <?php endif;?>
								    </div>
								</div>
                           </div>
						</div>
				</div>
    </section>
    <!--club ends-->
    <!--programme  starts-->
    <section class="programme padding-top padding-bottom" id="programme">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
	                <?php if(get_field('programme_heading')):?>
	                	<h2><?php the_field('programme_heading')?></h2>
	                <?php endif;?>
	            </div>
                <div class="col-md-6">
	                <?php if(get_field('programme_descriptions')):?>
	                	<p class="lead"><?php the_field('programme_descriptions')?></p>
	                <?php endif;?>
	           </div>
            </div>
            <div class="programme-table top20">
                <div class="row">
	                <div class="col-md-12 bottom20">
		                <?php if(get_field('programme_table_heading')):?>
		                	<?php the_field('programme_table_heading');?>
		                <?php endif;?>
		            </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-3 col-sm-3">
                            <div class="education match-height">
                            	<?php if(get_field('programme_column_1')):?>
                            		<?php the_field('programme_column_1');?>
                            	<?php endif;?>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="inspiration match-height">
                            	<?php if(get_field('programme_column_2')):?>
                            		<?php the_field('programme_column_2');?>
                            	<?php endif;?>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="accountability match-height">
	                            <?php if(get_field('programme_column_3')):?>
                            		<?php the_field('programme_column_3');?>
                            	<?php endif;?>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
	                        <div class="support match-height">
		                        <?php if(get_field('programme_column_4')):?>
                            		<?php the_field('programme_column_4');?>
                            	<?php endif;?>
	                        </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="programme-application top50">
	            <div class="row">
		            <div class="col-md-2">
			            <?php if(get_field('programme_logo')):?>
			            <img src="<?php the_field('programme_logo')?>" class="programme-application-logo" alt="Smiling Barracuda Programme Logo">
			            <?php else:?>
			            <img src="<?php echo get_template_directory_uri(); ?>/images/programme-logo.png" class="programme-application-logo" alt="Smiling Barracuda Programme Logo"><?php endif;?>
		            </div>
		            <div class="programme-application-message col-md-7 top25">
			        <?php if(get_field('programme_application_descriptions')):?>
			        	<?php the_field('programme_application_descriptions')?>
					<?php endif;?>
		            </div>
		            <div class="programme-application-buton col-md-3 top50">
			            <?php if(get_field('programme_application_button_label') AND get_field('programme_application_button_url')):?>
			            <a href="<?php the_field('programme_application_button_url')?>" target="_blank" class="btn btn-default btn-lg btn-block"><?php the_field('programme_application_button_label')?></a>
			            <?php endif;?>
		            </div>
				</div>
            </div>
        </div>
    </section>
    <!--programme  ends-->
	<!--team  starts-->
    <section class="who-we-are padding-top padding-bottom" id="team">
        <div class="container">
            <div class="row">
            	<div class="col-md-12"><div class="who-we-are-heading"><h2><?php the_field('team_heading')?></h2></div></div>
            </div>
            <div class="row">
            	<div class="team-members">
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="grid-five">
	                            <div class="team-member-1  hover-div-yellow">
	                                <div class="team-member-data top50 match-height">
	                                    <div class="row1">
		                                    <div class="person-info pull-left">
		                                    	<?php if(get_field('1_team_member_name')):?>
		                                    		<h3 class="name-member"><?php the_field('1_team_member_name')?></h3>
		                                    	<?php endif;?>
												<?php if(get_field('1_team_profession')):?>
													<p class="profession"><?php the_field('1_team_profession')?></p>
												<?php endif;?>
		                                    </div>
		                                    <div class="person-linkedin pull-right">
			                                    <a href="<?php the_field('1_team_linkedin_url')?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/profile-linkedin.jpg" alt="<?php the_field('1_team_member_name')?> Linkedin"></a>
		                                    </div>
	                                    </div>
	                                    <div class="row">
	                                    	<div class="col-md-12 p3 top20">
		                                    	<?php if(get_field('1_team_member_profile')):?>
		                                    		<div class="profile-descr">
		                                    			<?php the_field('1_team_member_profile')?>
		                                    		</div>
		                                    	<?php endif;?>
		                                    </div>
	                                    </div>
	                                </div>
	                                <div class="img-hover-circal top50">
	                                    <div class="member-1-img-back ">
	                                        <div class="img-center">
	                                            <?php if(get_field('1_team_member_image')):?>
	                                            <img class="img-responsive" src="<?php the_field('1_team_member_image')?>" alt="<?php the_field('1_team_member_name')?>">
	                                            <?php endif;?>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="grid-five">
	                            <div class="team-member-2  hover-div-yellow">
	                                <div class="team-member-data top50 match-height">
	                                    <div class="row1">
		                                    <div class="person-info pull-left">
												<?php if(get_field('2_team_member_name')):?>
													<h3 class="name-member"><?php the_field('2_team_member_name')?></h3>
												<?php endif;?>
												<?php if(get_field('2_team_profession')):?>
													<p class="profession"><?php the_field('2_team_profession')?></p>
												<?php endif;?>
		                                    </div>
		                                    <div class="person-linkedin pull-right">
			                                    <a href="<?php the_field('2_team_linkedin_url')?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/profile-linkedin.jpg" alt="<?php the_field('2_team_member_name')?>"></a>
		                                    </div>
		                                </div>
		                                <div class="row">
	                                    	<div class="col-md-12 p3 top20">
		                                    	<?php if(get_field('2_team_member_profile')):?>
		                                    		<div class="profile-descr">
		                                    			<?php the_field('2_team_member_profile')?>
		                                    		</div>
		                                    	<?php endif;?>
		                                    	</div>
											</div>
		                                </div>
	                                <div class="img-hover-circal top50">
	                                    <div class="member-2-img-back ">
	                                        <div class="img-center">
		                                        <?php if(get_field('2_team_member_image')):?>
		                                        <img class="img-responsive" src="<?php the_field('2_team_member_image')?>" alt="<?php the_field('2_team_member_name')?>">
		                                        <?php endif;?>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
							</div>
	                        <div class="grid-five">
                            	<div class="team-member-3  hover-div-yellow">
                                <div class="team-member-data top50 match-height">
                                    <div class="row1">
	                                    <div class="person-info pull-left">
		                                    <?php if(get_field('3_team_member_name')):?>
		                                    	<h3 class="name-member"><?php the_field('3_team_member_name')?></h3>
                                    		<?php endif;?>
                                    		<?php if(get_field('3_team_profession')):?>
                                    		<p class="profession top15"><?php the_field('3_team_profession')?></p>
                                    		<?php endif;?>
										</div>
										<div class="person-linkedin pull-right">
		                                    <a href="<?php the_field('3_team_linkedin_url')?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/profile-linkedin.jpg" alt="<?php the_field('3_team_member_name')?>"></a>
	                                    </div>
									</div>
                                    <div class="row">
                                    	<div class="col-md-12 p3 top20">
	                                    	<?php if(get_field('3_team_member_profile')):?>
	                                    		<div class="profile-descr">
	                                    			<?php the_field('3_team_member_profile')?>
	                                    		</div>
	                                    	<?php endif;?>
	                                    </div>
                                    </div>
                                </div>
                                <div class="img-hover-circal top50">
                                    <div class="member-3-img-back ">
                                        <div class="img-center">
	                                        <?php if(get_field('3_team_member_image')):?>
	                                        <img class="img-responsive" src="<?php the_field('3_team_member_image')?>" alt="<?php the_field('3_team_member_name')?>">
	                                        <?php endif;?>
                                        </div>
                                    </div>
                                </div>
                            </div>
							</div>
							<div class="grid-five">
                            	<div class="team-member-4  hover-div-yellow">
                                	<div class="team-member-data top50 match-height">
                                    <div class="row1">
	                                    <div class="person-info pull-left">
		                                    <?php if(get_field('4_team_member_name')):?>
		                                    	<h3 class="name-member"><?php the_field('4_team_member_name')?></h3>
                                    		<?php endif;?>
											<?php if(get_field('4_team_profession')):?>
											<p class="profession top15"><?php the_field('4_team_profession')?></p>
											<?php endif;?>
	                                    </div>
	                                    <div class="person-linkedin pull-right">
		                                    <a href="<?php the_field('4_team_linkedin_url')?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/profile-linkedin.jpg" alt="<?php the_field('4_team_member_name')?>"></a>
	                                    </div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-md-12 p3 top20">
	                                    	<?php if(get_field('4_team_member_profile')):?>
	                                    	<div class="profile-descr">
	                                    		<?php the_field('4_team_member_profile')?>
	                                    	</div>
	                                    	<?php endif;?>
	                                    </div>
                                    </div>
									</div>
									<div class="img-hover-circal top50">
                                    <div class="member-4-img-back ">
                                        <div class="img-center">
	                                        <?php if(get_field('4_team_member_image')):?>
                                            <img class="img-responsive" src="<?php the_field('4_team_member_image')?>" alt="<?php the_field('4_team_member_name')?>">
                                            <?php endif;?>
                                        </div>
                                    </div>
                                </div>
								</div>
	                    	</div>
							<div class="grid-five">
                            	<div class="team-member-5  hover-div-yellow">
                                	<div class="team-member-data top50 match-height">
                                    	<div class="row1">
	                                    <div class="person-info pull-left">
		                                    <?php if(get_field('5_team_member_name')):?>
		                                    	<h3 class="name-member"><?php the_field('5_team_member_name')?></h3>
                                    		<?php endif;?>
											<?php if(get_field('5_team_profession')):?>
											<p class="profession top15"><?php the_field('5_team_profession')?></p>
											<?php endif;?>
	                                    </div>
	                                    <div class="person-linkedin pull-right">
		                                    <?php if(get_field('5_team_linkedin_url')):?>
		                                    <a href="<?php the_field('5_team_linkedin_url')?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/profile-linkedin.jpg" alt="<?php the_field('5_team_member_name')?>"></a><?php endif;?>
	                                    </div>
                                    </div>
										<div class="row">
                                    	<div class="col-md-12 p3 top20">
	                                    	<?php if(get_field('5_team_member_profile')):?>
	                                    		<div class="profile-descr">
	                                    			<?php the_field('5_team_member_profile')?>
	                                    		</div>
	                                    	<?php endif;?>
	                                    </div>
                                    </div>
									</div>
									<div class="img-hover-circal top50">
                                    <div class="member-5-img-back ">
                                        <div class="img-center">
	                                        <?php if(get_field('5_team_member_image')):?>
                                            <img class="img-responsive" src="<?php the_field('5_team_member_image')?>" alt="<?php the_field('5_team_member_name')?>">
                                            <?php endif;?>
                                        </div>
                                    </div>
                                </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>
    <!--team  ends-->
    <!-- contact us starts -->
    <section class="contact-us padding-top padding-bottom" id="contact">
        <div class="container">
            <div class="row">
	            <div class="col-md-4">
                    <div class="office-location">
                        <h2><?php the_field('contact_left_heading')?></h2>
                        <div class="social-contact">
	                        <ul class="list-inline">
		                        <li><a href="<?php the_field('contact_linkedin_url')?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.png" alt="LinkedIn Barracuda"></a></li>
		                        <li><a href="https://twitter.com/<?php the_field('contact_twitter_url')?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" alt="Twitter Barracuda"></a></li>
		                        <li class="follow-us">Follow us at<br/><a href="https://twitter.com/<?php the_field('contact_twitter_url')?>" target="_blank">@<?php the_field('contact_twitter_url')?></a></li>
	                        </ul>
                        </div>
                        <div class="map top25">
	                        <?php if(get_field('google_map_shortcode')):?>
	                        	<?php the_field('google_map_shortcode')?>
	                        <?php endif;?>
                        </div>
                        <div class="address top25">
                            <i class="fa fa-map-marker" ></i>
                            <?php if(get_field('contact_address')):?>
                            	<?php the_field('contact_address')?>
                            <?php else:?>
	                            <div class="alert alert-warning">No Address found!</div>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="social-info">
                        <h2><?php the_field('column_right_heading')?></h2>                      
                        <div class="contact-us-form top55">
	                        <?php if(get_field('contact_form_shortcode')):?>
	                        	<?php echo do_shortcode(the_field('contact_form_shortcode'));?>
	                        <?php endif;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact us end -->