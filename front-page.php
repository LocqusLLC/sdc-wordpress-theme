<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Service.com
 * @version 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <section id="tagline">
            <hgroup>
                <h1>The General Contract&shy;ing Market&shy;place</h1>
                <h2>Your Home Improvement Destination for HVAC and Roofing</h2>
            </hgroup>
 <button class="request-quote" type="button" onclick="location.href='/dashboard/search?q=hvac';" value="Request a quote">Get an HVAC quote
            </button>
            <button class="request-quote" type="button" onclick="location.href='/dashboard/search?q=roof';" value="Request a quote">Get a roofing quote
            </button>
            <a href='/dashboard/orders'>
                Already requested a quote?<br/>
                View your projects
            </a>
        </section>
        <section id="request-a-quote"  class="copy">
            <div>
                <img class="icon"
                     src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/contractor-icon.svg"/>
                <img class="icon"
                     src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/hvac-icon.svg"/>
                <img class="icon"
                     src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/handyman-icon.svg"/>
                <img class="icon"
                     src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/roofing-icon.svg"/>
            </div>
            <article>
                <h1>Request a quote</h1>
                <p>
                    Get an accurate quote fast and easy for your HVAC, Roofing, Windows, and Siding needs.  Simply fill out some information, and our verified service professionals will provide you with timely estimates.
                </p>
            </article>
        </section>
        <section id="blueprints" class="graphic">
        </section>
        <section id="chat-with-pros" class="copy">
            <article>
                <h1>Chat with pros</h1>
                <p>
                    You can shop around and have real-time conversations with multiple pros about pricing. Send and receive pictures, and get quotes sent to your phone. All communication is documented in your chat history, eliminating the "he said/she said" issues of the past.
                </p>
            </article>
            <div>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home-chat.svg"/>
            </div>
        </section>
        <section id="contractor-with-woman" class="graphic">
        </section>
        <section id="hire-a-pro" class="copy">
            <div>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home-hire.svg"/>
            </div>
            <article>
                <h1>Hire a pro</h1>
                <p>
                    After you decide on the right pro for your job, click the hire button and schedule an appointment. Your hired service professional can now come out and complete the work. All of our service professionals are verified to make sure they perform the best work possible.
                </p>
            </article>
        </section>
        <section id="painter" class="graphic">
        </section>
        <section id="finish-the-project" class="copy">
            <article>
                <h1>Finish the project</h1>
                <p>
                    Once you are satisfied with the work, simply click pay. The funds will be transferred to your pro's account. Service.com is PCI compliant, so your information is encrypted and secure. However, should there be any issues or disputes, our Project Managers are here to assist in the situation.
                </p>
            </article>
            <div>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home-finish.svg"/>
            </div>
        </section>
        <section id="home" class="graphic">
        </section>
        <section id="satisfaction-guaranteed">
            <article>
                <h1>Satisfaction guaranteed</h1>
                <p>
                    Using service.com offers many tangible benefits to both service pros and homeowners. We pride ourselves in providing homeowners with pros who are trustworthy and reliable. You know your home improvement project is on the right track when you hire with service.com.
                    <br/>
                    <a href="/dashboard/pro">
                        Looking for projects? Join as a Pro.
                    </a>
                </p>
            </article>
           <button class="request-quote" type="button" onclick="location.href='/dashboard/search?q=hvac';" value="Request a quote">Get an HVAC quote
            </button>
            <button class="request-quote" type="button" onclick="location.href='/dashboard/search?q=roof';" value="Request a quote">Get a roofing quote
            </button>

        </section>
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
