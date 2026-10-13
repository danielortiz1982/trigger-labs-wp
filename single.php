<?php get_header(); ?>
<?php if(have_posts() ) : while(have_posts() ) : the_post(); ?>
<?php $author_id = get_the_author_meta( 'ID' ); ?>
<?php $avatar_url = get_avatar_url( $author_id ); ?>
<?php $alt_text = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true ); ?>
<main>
    <div class="tl-post-wrapper" id="tl-single-post">

        <header class="tl-post-header-section">
            <div class="tl-post-header-glow"></div>
            <div class="tl-container">
                <div class="tl-post-header-content">
                    
                    <div class="tl-post-tags">
                        <span class="tl-post-tag">Architecture</span>
                        <span class="tl-post-tag">Engineering</span>
                    </div>
                    
                    <h1 class="tl-post-title"><?php the_title(); ?></h1>
                    
                    <p class="tl-post-excerpt"><?php the_excerpt(); ?></p>
                    
                    <div class="tl-post-meta">
                        <div class="tl-meta-author">
                            <img src="<?php echo esc_url( $avatar_url ); ?>" alt="<?php echo get_the_author_meta( 'display_name' ); ?>">
                            <?php the_author(); ?>
                        </div>
                        <div class="tl-meta-divider"></div>
                        <span class="tl-meta-date"><?php echo get_the_date('F j, Y'); ?></span>
                        <div class="tl-meta-divider"></div>
                        <span class="tl-meta-time">8 min read</span>
                    </div>

                </div>
            </div>
        </header>

        <div class="tl-post-featured-image">
            <?php the_post_thumbnail(); ?>
        </div>

        <main class="tl-post-body">
            <div class="tl-content-container">
                <?php the_content(); ?>
                <div class="tl-author-box">
                    <img src="<?php echo esc_url( $avatar_url ); ?>" alt="<?php echo get_the_author_meta( 'display_name' ); ?>" class="tl-author-avatar">
                    <div class="tl-author-info">
                        <h4><?php echo get_the_author_meta( 'display_name' ); ?></h4>
                        <span>Lead Systems Architect @ Trigger Labs</span>
                        <p><?php the_author_meta( 'description' ); ?></p>
                    </div>
                </div>

            </div>
        </main>

        <section class="tl-post-footer-cta">
            <div class="tl-container">
                <h2>Stop building fragile integrations.</h2>
                <p>Speak with our architecture team to see how a centralized Trigger Labs engine can unify your tech stack.</p>
                <a href="#contact" class="tl-btn-primary">Schedule a Technical Review</a>
            </div>
        </section>
    </div>
</main>
<?php endwhile ?>
<?php endif ?>
<?php get_footer(); ?>
