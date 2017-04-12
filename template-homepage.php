<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>



  <div class="bg-poster"></div>

  <video poster="<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/poster-landing.jpg" class="hide-for-small-only bgvid" id="bgvid" playsinline autoplay muted loop>
	  <!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
	<source src="<?php echo get_template_directory_uri(); ?>/assets/images/video/landing-video.webm" type="video/webm">
	<source src="<?php echo get_template_directory_uri(); ?>/assets/images/video/landing-video.mp4" type="video/mp4">
	</video>

  <section class="section-welcome text-center wrap">
    <h1 class="welcome-title"><?php _e( 'Pick, Promote, Earn', 'jointswp' ); ?></h1>
    <h2 class="h4">The best place to earn money with your social networks</h2>
    <a href="http://sharepop.com/auth/sign_up" class= "button large cta-button" id="join-button-1">
      Start now
    </a>
    <h3 class="h5"><strong>and earn money on:</strong></h3>
    <p>Facebook, Twitter, Instagram, YouTube</strong></p>
    <a href="#section2" class="button hollow button-more">
      Tell me more<br />
      <span class="dashicons dashicons-arrow-down-alt2"></span>
    </a>
  </section>

  <section class="pattern-12" id="section2">
    <div class="bg-container">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/bg-circles.svg" class="svg bg-circles">
    </div>
    <div class="row lift-1">
      <div class="wrap">
        <div class="medium-6 columns">
          <p>What do<br />
          <span class="blown-up">you get?</span>
          </p>
          <div class="row bottom-1 show-for-small-only">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/triangle-quadrant.svg" class="svg triangle-quadrant">
          </div>
        </div>
        <div class="medium-6 columns part-2">
          <div class="row mt-1">
            <div class="small-3 columns text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/layericons/lic-crown.svg" class="svg layericon">
            </div>
            <div class="small-9 columns">
              <p><span class="point">Premium Campaigns</span><br />
              Promote apps and content from renowned brands. Get instant access after sign up.
              </p>
            </div>
          </div>
          <div class="row mt-2">
            <div class="small-3 columns text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/layericons/lic-payment.svg" class="svg layericon">
            </div>
            <div class="small-9 columns">
              <p><span class="point">Fast Payments</span><br />
              We pay on time! Monthly or weekly payments via Paypal or wire transfer.
              </p>
            </div>
          </div>
          <div class="row mt-2">
            <div class="small-3 columns text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/layericons/lic-moneybags.svg" class="svg layericon">
            </div>
            <div class="small-9 columns">
              <p><span class="point">Unlimited Earning Potential</span><br />
              Get paid for results with almost unlimited earning potential.
              </p>
            </div>
          </div>
          <div class="row mt-2">
            <div class="small-3 columns text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/layericons/lic-analytics.svg" class="svg layericon">
            </div>
            <div class="small-9 columns">
              <p><span class="point">Real-Time Analytics</span><br />
              Track the performance of your promotions instantly and live.
              </p>
            </div>
          </div>
          <div class="row bottom-2 show-for-small-only">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/triangle-quadrant.svg" class="svg triangle-quadrant">
          </div>

        </div>
      </div>
    </div>
    <div class="bottom-12 hide-for-small-only">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/triangle-quadrant.svg" class="svg triangle-quadrant">
    </div>
  </section>

  <section class="pattern-34" id="section3">
    <div class="bg-container">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/bg-cogs.svg" class="svg bg-cogs">
    </div>
    <div class="row lift-1">
      <div class="wrap">
        <div class="medium-6 columns">
          <p>OK so...<br />
          <span class="blown-up">How it works?</span>
          </p>
          <div class="row bottom-1 show-for-small-only">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/triangle-quadrant.svg" class="svg triangle-quadrant">
          </div>
        </div>
        <div class="medium-6 columns part-2">
          <div class="row mt-1">
            <div class="small-3 columns text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/layericons/lic-content.svg" class="svg layericon">
            </div>
            <div class="small-9 columns">
              <p><span class="point">Pick</span><br />
              Pick available campaign and create your unique link.
              </p>
            </div>
          </div>
          <div class="row mt-2">
            <div class="small-3 columns text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/layericons/lic-megaphone.svg" class="svg layericon">
            </div>
            <div class="small-9 columns">
              <p><span class="point">Promote</span><br />
              Promote the app or post the content on your social media with your link.
              </p>
            </div>
          </div>
          <div class="row mt-2">
            <div class="small-3 columns text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/layericons/lic-payment.svg" class="svg layericon">
            </div>
            <div class="small-9 columns">
              <p><span class="point">Earn</span><br />
              Get paid for every install or click. Cash in once you reached 50$.
              </p>
            </div>
          </div>
          <div class="row bottom-2 show-for-small-only">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/triangle-quadrant.svg" class="svg triangle-quadrant">
          </div>

        </div>
      </div>
    </div>
    <div class="bottom-12 hide-for-small-only">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/triangle-quadrant.svg" class="svg triangle-quadrant">
    </div>
  </section>

  <section class="pattern-21" id="section4">
    <div class="row">
      <div class="wrap">
        <div class="medium-6 columns">
          <div class="medium-4 columns">
            <p>
            <span class="point">Earn with</span><br />
            App Promotions
            </p>
          </div>
          <div class="medium-8 columns">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/content/en/cpi-example.jpg", alt="app promotions">
          </div>
          <div class="row">
            <hr />
          </div>
          <div class="row">
            <div class="large-6 columns">
              <div class="row large-collapse">
                <div class="small-3 columns">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/layericons/lic-megaphone.svg" class="svg mtn-half float-center layericon">
                </div>
                <div class="small-9 columns">
                  <p>Promote apps and games on your social media</p>
                </div>
              </div>
            </div>

            <div class="large-6 columns">
              <div class="row large-collapse">
                <div class="small-3 columns">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/layericons/lic-moneybags.svg" class="svg mtn-half float-center layericon">
                </div>
                <div class="small-9 columns">
                  <p>Get paid up to $5 for every app install</p>
                </div>
              </div>
            </div>
          </div>

          <div class="row bottom-1 show-for-small-only">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/triangle-quadrant.svg" class="svg triangle-quadrant">
          </div>
        </div>

        <div class="medium-6 columns part-2">
          <div class="medium-4 columns">
            <p>
              <span class="point">Earn with</span><br />
              Promoting Content
            </p>
          </div>
          <div class="medium-8 columns">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/content/en/cpc-example.jpg" alt="promoting content">
          </div>

          <div class="row">
            <hr />
          </div>

          <div class="row">
            <div class="large-6 columns">
              <div class="row large-collapse">
                <div class="small-3 columns">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/layericons/lic-megaphone.svg" class="svg mtn-half float-center layericon">
                </div>
                <div class="small-9 columns">
                  <p>Post articles from your favorite magazines or brands on your facebook or twitter</p>
                </div>
              </div>
            </div>

            <div class="large-6 columns">
              <div class="row large-collapse">
                <div class="small-3 columns">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/layericons/lic-moneybags.svg" class="svg mtn-half float-center layericon">
                </div>
                <div class="small-9 columns">
                  <p>Get paid up to 5 cents for every click</p>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="row bottom-2 show-for-small-only">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/triangle-quadrant.svg" class="svg triangle-quadrant">
        </div>

      </div>
    </div>
    <div class="bottom-12 hide-for-small-only">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/triangle-quadrant.svg" class="svg triangle-quadrant">
    </div>
  </section>

  <section class="pattern-43 pre-last" id="section5">
    <div class="bg-container">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/bg-circles.svg" class="svg bg-circles">
    </div>
    <div class="row lift-1">
      <div class="wrap">
        <div class="medium-6 columns">
          Because our<br />
          <span class="blown-up">Users say</span>
          </p>
          <div class="row bottom-1 show-for-small-only">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/triangle-quadrant.svg" class="svg triangle-quadrant">
          </div>
        </div>
        <div class="medium-6 columns part-2">
          <div class="row mt-1">
            <div class="small-3 columns text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/content/en/testimony-user-1.jpg" alt="Krissy">
            </div>
            <div class="small-9 columns">
              <p><span class="point">Krissy (Blog)</span><br />
              <a href="http://love-luxe.com/" target: '_blank' class="small-text-link">
                http://love-luxe.com/</a><br />
              <em>I've been using Sharepop for quite a while now and I've always found a great variety of apps to choose from. I recommend the apps to my fans, add the SharePop link, and that’s basically it. It is an easy way to increase revenues. And as a bonus - the support team is very friendly :)</em>
              </p>
            </div>
          </div>
          <div class="row mt-2">
            <div class="small-3 columns text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/content/en/testimony-user-2.jpg" alt="Ziovo">
            </div>
            <div class="small-9 columns">
              <p><span class="point">Ziovo (YouTube)</span><br />
              <a href="https://www.youtube.com/user/Ziovo" target: '_blank' class="small-text-link">
                https://www.youtube.com/user/Ziovo</a><br />
              <em>As a tech Youtuber, I sometimes make app review videos. SharePop is a great way to earn extra money while staying true to the spirit of my channel. When I mention an app, I just check if there is a SharePop campaign running for it. If yes, I add the tracking link in the description and ask my followers to download the app. Easy!</em>
              </p>
            </div>
          </div>
          <div class="row bottom-2 show-for-small-only">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/triangle-quadrant.svg" class="svg triangle-quadrant">
          </div>

        </div>
      </div>
    </div>
    <div class="bottom-12 hide-for-small-only">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/triangle-quadrant.svg" class="svg triangle-quadrant">
    </div>
  </section>

  <section class="section-last text-center" id="section6">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/sp-crown-white.svg" width="100">
    <div id="typed-strings">
      <p>...</p>
      <p>, Promote...</p>
      <p>, Promote, Earn</p>
    </div>
    <p class="typed text-center">
    <strong>Pick</strong><span class="typed" id="typed" style="white-space:pre; font-weight:bold;"></span>
    </p>
    <div class="row content-wrap clearfix">
      <div class="small-12 medium-6 medium-offset-3 columns clearfix">
        <p class="sub-slogan">
          Promote apps and content on your social media and earn money!
        </p>
        <a href="http://sharepop.com/auth/sign_up" class="button large cta-button" id="join-button-2">
          Start now
        </a>
      </div>
    </div>
  </section>
</div>

<?php get_footer(); ?>
