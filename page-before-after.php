<?php
/**
 * Template Name: Before After
 * Spicola Construction — Before & After Gallery
 */
get_header(); ?>

<main class="site-main" id="main-content">

    <section class="page-hero" aria-label="Before and after gallery">
        <div class="page-hero__inner">
            <span class="section__label">Real Results</span>
            <h1 class="page-hero__title">Before & After</h1>
            <p class="page-hero__desc">See the quality of our work. All photos are from actual Spicola Construction projects across Tampa Bay.</p>
        </div>
    </section>

    <section class="gallery-section">
        <div class="section__inner">

            <!-- Filter tabs -->
            <div class="gallery-filters reveal" role="group" aria-label="Filter by project type">
                <button class="gallery-filter is-active" data-filter="all">All</button>
                <button class="gallery-filter" data-filter="remodel">Remodeling</button>
                <button class="gallery-filter" data-filter="additions">Additions</button>
                <button class="gallery-filter" data-filter="roofing">Roofing</button>
                <button class="gallery-filter" data-filter="exterior">Exterior</button>
            </div>

            <div class="gallery-grid reveal">
                <div class="gallery-card" data-category="remodel">
                    <div class="gallery-card__images before-after-slider">
                        <div class="gallery-card__before">
                            <span class="gallery-card__label">Before</span>
                            <div class="gallery-card__placeholder">Before Photo</div>
                        </div>
                        <div class="gallery-card__after">
                            <span class="gallery-card__label gallery-card__label--after">After</span>
                            <div class="gallery-card__placeholder gallery-card__placeholder--after">After Photo</div>
                        </div>
                        <input type="range" min="0" max="100" value="50" class="slider-range" aria-label="Before and after comparison slider">
                        <div class="slider-handle" aria-hidden="true">
                            <div class="slider-handle__line"></div>
                            <div class="slider-handle__circle">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="8 17 3 12 8 7"/><polyline points="16 7 21 12 16 17"/></svg>
                            </div>
                            <div class="slider-handle__line"></div>
                        </div>
                    </div>
                    <div class="gallery-card__info">
                        <h3 class="gallery-card__title">Kitchen Remodel</h3>
                        <p class="gallery-card__desc">Full kitchen renovation with new cabinetry, countertops, and lighting. Completed on schedule and on budget.</p>
                    </div>
                </div>

                <div class="gallery-card" data-category="remodel">
                    <div class="gallery-card__images before-after-slider">
                        <div class="gallery-card__before">
                            <span class="gallery-card__label">Before</span>
                            <div class="gallery-card__placeholder">Before Photo</div>
                        </div>
                        <div class="gallery-card__after">
                            <span class="gallery-card__label gallery-card__label--after">After</span>
                            <div class="gallery-card__placeholder gallery-card__placeholder--after">After Photo</div>
                        </div>
                        <input type="range" min="0" max="100" value="50" class="slider-range" aria-label="Before and after comparison slider">
                        <div class="slider-handle" aria-hidden="true">
                            <div class="slider-handle__line"></div>
                            <div class="slider-handle__circle">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="8 17 3 12 8 7"/><polyline points="16 7 21 12 16 17"/></svg>
                            </div>
                            <div class="slider-handle__line"></div>
                        </div>
                    </div>
                    <div class="gallery-card__info">
                        <h3 class="gallery-card__title">Bathroom Renovation</h3>
                        <p class="gallery-card__desc">Complete bathroom remodel with new tile, custom vanity, and modern fixtures. Finished in one week.</p>
                    </div>
                </div>

                <div class="gallery-card" data-category="additions">
                    <div class="gallery-card__images before-after-slider">
                        <div class="gallery-card__before">
                            <span class="gallery-card__label">Before</span>
                            <div class="gallery-card__placeholder">Before Photo</div>
                        </div>
                        <div class="gallery-card__after">
                            <span class="gallery-card__label gallery-card__label--after">After</span>
                            <div class="gallery-card__placeholder gallery-card__placeholder--after">After Photo</div>
                        </div>
                        <input type="range" min="0" max="100" value="50" class="slider-range" aria-label="Before and after comparison slider">
                        <div class="slider-handle" aria-hidden="true">
                            <div class="slider-handle__line"></div>
                            <div class="slider-handle__circle">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="8 17 3 12 8 7"/><polyline points="16 7 21 12 16 17"/></svg>
                            </div>
                            <div class="slider-handle__line"></div>
                        </div>
                    </div>
                    <div class="gallery-card__info">
                        <h3 class="gallery-card__title">Primary Suite Addition</h3>
                        <p class="gallery-card__desc">Built a fully permitted 400 sq ft primary suite addition, matched seamlessly to the existing home.</p>
                    </div>
                </div>

                <div class="gallery-card" data-category="roofing">
                    <div class="gallery-card__images before-after-slider">
                        <div class="gallery-card__before">
                            <span class="gallery-card__label">Before</span>
                            <div class="gallery-card__placeholder">Before Photo</div>
                        </div>
                        <div class="gallery-card__after">
                            <span class="gallery-card__label gallery-card__label--after">After</span>
                            <div class="gallery-card__placeholder gallery-card__placeholder--after">After Photo</div>
                        </div>
                        <input type="range" min="0" max="100" value="50" class="slider-range" aria-label="Before and after comparison slider">
                        <div class="slider-handle" aria-hidden="true">
                            <div class="slider-handle__line"></div>
                            <div class="slider-handle__circle">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="8 17 3 12 8 7"/><polyline points="16 7 21 12 16 17"/></svg>
                            </div>
                            <div class="slider-handle__line"></div>
                        </div>
                    </div>
                    <div class="gallery-card__info">
                        <h3 class="gallery-card__title">Roof Replacement</h3>
                        <p class="gallery-card__desc">Replaced an aging roof with new architectural shingles. Passed final inspection with no callbacks.</p>
                    </div>
                </div>

                <div class="gallery-card" data-category="exterior">
                    <div class="gallery-card__images before-after-slider">
                        <div class="gallery-card__before">
                            <span class="gallery-card__label">Before</span>
                            <div class="gallery-card__placeholder">Before Photo</div>
                        </div>
                        <div class="gallery-card__after">
                            <span class="gallery-card__label gallery-card__label--after">After</span>
                            <div class="gallery-card__placeholder gallery-card__placeholder--after">After Photo</div>
                        </div>
                        <input type="range" min="0" max="100" value="50" class="slider-range" aria-label="Before and after comparison slider">
                        <div class="slider-handle" aria-hidden="true">
                            <div class="slider-handle__line"></div>
                            <div class="slider-handle__circle">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="8 17 3 12 8 7"/><polyline points="16 7 21 12 16 17"/></svg>
                            </div>
                            <div class="slider-handle__line"></div>
                        </div>
                    </div>
                    <div class="gallery-card__info">
                        <h3 class="gallery-card__title">Exterior Siding & Paint</h3>
                        <p class="gallery-card__desc">Refreshed the home's exterior with new siding and a full repaint for lasting curb appeal.</p>
                    </div>
                </div>

                <div class="gallery-card" data-category="exterior">
                    <div class="gallery-card__images before-after-slider">
                        <div class="gallery-card__before">
                            <span class="gallery-card__label">Before</span>
                            <div class="gallery-card__placeholder">Before Photo</div>
                        </div>
                        <div class="gallery-card__after">
                            <span class="gallery-card__label gallery-card__label--after">After</span>
                            <div class="gallery-card__placeholder gallery-card__placeholder--after">After Photo</div>
                        </div>
                        <input type="range" min="0" max="100" value="50" class="slider-range" aria-label="Before and after comparison slider">
                        <div class="slider-handle" aria-hidden="true">
                            <div class="slider-handle__line"></div>
                            <div class="slider-handle__circle">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="8 17 3 12 8 7"/><polyline points="16 7 21 12 16 17"/></svg>
                            </div>
                            <div class="slider-handle__line"></div>
                        </div>
                    </div>
                    <div class="gallery-card__info">
                        <h3 class="gallery-card__title">Concrete Patio & Walkway</h3>
                        <p class="gallery-card__desc">Poured a new stamped-concrete patio and walkway, transforming an unused backyard space.</p>
                    </div>
                </div>
            </div>

            <div class="gallery-disclaimer reveal">
                <p>* All photos are from actual Spicola Construction projects. Results may vary based on property conditions.</p>
            </div>
        </div>
    </section>

    <section class="cta-section" aria-label="Request service">
        <div class="cta-section__inner reveal">
            <span class="cta-section__label">Need Quality Construction Work?</span>
            <h2 class="cta-section__title">Your Home<br>Deserves the Best.</h2>
            <p class="cta-section__text">Call us or book online — our licensed team is ready to bring your project to life.</p>
            <div class="cta-section__actions">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn--primary btn--lg">Request Service</a>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
