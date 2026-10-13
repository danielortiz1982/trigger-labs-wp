<?php /* Template Name: Journal Page */ ?>
<?php get_header(); ?>
<div class="tl-blog-wrapper" id="tl-blog-feed">
    <section class="tl-blog-hero">
        <div class="tl-blog-hero-glow"></div>
        <div class="tl-container">
            <div class="tl-blog-hero-content">
                <div class="tl-badge">
                    <div class="tl-pulse-dot"></div>
                    Latest Insights
                </div>
                <h1>Trigger Labs <span class="tl-text-gradient">Journal</span></h1>
                <p>Deep dives into enterprise automation, API routing, AI implementation, and the future of zero-touch business operations.</p>
            </div>
        </div>
    </section>

    <section class="tl-blog-feed-section">
        <div class="tl-container">
            <div class="tl-blog-grid">
                <?php if(have_posts() ) : while(have_posts() ) : the_post(); ?>
                <?php $thumbnail_id = get_post_thumbnail_id( get_the_ID() ); ?>
                <?php $alt_text = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true ); ?>
                <!-- Post 1 -->
                <a href="<?php the_permalink(); ?>" class="tl-blog-card">
                    <div class="tl-blog-image-wrapper">
                        <img src="<?php the_post_thumbnail(); ?>" alt="<?php echo esc_attr( $alt_text ); ?>">
                    </div>
                    <div class="tl-blog-content">
                        <div class="tl-blog-meta">
                            <div class="tl-blog-tags">
                                <!-- <span class="tl-blog-tag">Architecture</span> -->
                            </div>
                            <span class="tl-blog-date">Oct 12, 2026</span>
                        </div>
                        <h3 class="tl-blog-title"><?php the_title(); ?></h3>
                        <p class="tl-blog-excerpt"><?php the_excerpt(); ?></p>
                        <div class="tl-blog-read-more">
                            Read Article 
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </div>
                    </div>
                </a>
                <?php endwhile; endif; ?>
                <!--End of post feed-->
            </div>
        </div>
    </section>

    <section class="tl-blog-cta">
        <div class="tl-container">
            <div class="tl-blog-cta-box">
                <div class="tl-blog-cta-content">
                    <h2>Stay Ahead of the Curve</h2>
                    <p>Get exclusive breakdowns on enterprise automation, AI deployment strategies, and operational architecture delivered straight to your inbox.</p>
                    <form class="tl-blog-subscribe-form" onsubmit="event.preventDefault();">
                        <input type="email" class="tl-blog-input" placeholder="Enter your work email" required="">
                        <button type="submit" class="tl-btn-primary">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

</div>
<?php get_footer(); ?>
