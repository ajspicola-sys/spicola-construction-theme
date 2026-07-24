<?php
/**
 * Spicola Construction — QuickBooks Connection Callback
 *
 * Internal utility page: the bookkeeping app's OAuth redirect lands here.
 * Not linked from anywhere on the site.
 */
get_header(); ?>

<main class="site-main" id="main-content">

    <section class="page-hero" aria-label="QuickBooks Connection">
        <div class="page-hero__inner">
            <span class="section__label">Internal</span>
            <h1 class="page-hero__title">QuickBooks Connection</h1>
            <p class="page-hero__desc">Bookkeeping app authorization step</p>
        </div>
    </section>

    <section class="legal-page">
        <div class="legal-page__inner">
            <div class="legal-page__body">
                <section id="qbo-status"></section>
            </div>
        </div>
    </section>

</main>

<script>
(function () {
    var target = document.getElementById('qbo-status');
    var params = new URLSearchParams(window.location.search);
    if (params.get('code') && params.get('realmId')) {
        target.innerHTML =
            '<h2>Almost done</h2>' +
            '<p><strong>Copy the entire address from the address bar above</strong> ' +
            'and paste it into the connect window running on your computer, then ' +
            'you can close this tab.</p>';
    } else {
        target.innerHTML =
            '<h2>Nothing to see here</h2>' +
            '<p>This page is only used while connecting our internal bookkeeping ' +
            'app to QuickBooks. <a href="/">Return to the homepage</a>.</p>';
    }
})();
</script>

<?php get_footer(); ?>
