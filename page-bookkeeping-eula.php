<?php
/**
 * Spicola Construction — Bookkeeping App End User License Agreement
 */
get_header(); ?>

<main class="site-main" id="main-content">

    <section class="page-hero" aria-label="End User License Agreement">
        <div class="page-hero__inner">
            <span class="section__label">Legal</span>
            <h1 class="page-hero__title">End User License Agreement</h1>
            <p class="page-hero__desc">Spicola Bookkeeping Automation &mdash; Effective July 24, 2026</p>
        </div>
    </section>

    <section class="legal-page">
        <div class="legal-page__inner">

            <div class="legal-page__intro">
                <p>This End User License Agreement ("Agreement") governs the use of <strong>Spicola Bookkeeping Automation</strong> (the "Software"), an internal software application owned and operated by <strong>Spicola Construction</strong> ("we," "us," or "our").</p>
                <p>The Software is a private, internal business tool. It is not offered, sold, licensed, or made available to the public or to any third party.</p>
            </div>

            <div class="legal-page__body">

                <section id="purpose">
                    <h2>1. Purpose of the Software</h2>
                    <p>The Software automates bookkeeping for Spicola Construction and its affiliated companies. It reads receipt images stored in our own cloud storage, extracts purchase details, and records those expenses in our own QuickBooks Online accounts, attaching the receipt image to the corresponding transaction.</p>
                </section>

                <section id="license">
                    <h2>2. License and Permitted Users</h2>
                    <p>Use of the Software is limited to the owner and authorized personnel of Spicola Construction and its affiliated companies. No license, right, or permission to use the Software is granted to any other person or entity. The Software has no public sign-up, no customer-facing features, and no third-party users.</p>
                </section>

                <section id="data">
                    <h2>3. Data</h2>
                    <p>The Software processes only our own business records &mdash; receipts and accounting data belonging to Spicola Construction and its affiliated companies. It does not collect, store, or process data from customers or members of the public. For details, see our <a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>">Privacy Policy</a>.</p>
                </section>

                <section id="third-party">
                    <h2>4. Third-Party Services</h2>
                    <p>The Software connects to QuickBooks Online (Intuit Inc.), Google Drive (Google LLC), and the Claude API (Anthropic, PBC) solely to perform the functions described above. Those services are governed by their own terms. <strong>Intuit is not a party to this Agreement and bears no responsibility or liability for the Software.</strong></p>
                </section>

                <section id="warranty">
                    <h2>5. Disclaimer of Warranty</h2>
                    <p>The Software is provided <strong>"as is,"</strong> without warranty of any kind, express or implied, including but not limited to warranties of merchantability, fitness for a particular purpose, or non-infringement.</p>
                </section>

                <section id="liability">
                    <h2>6. Limitation of Liability</h2>
                    <p>To the maximum extent permitted by law, we shall not be liable for any indirect, incidental, special, or consequential damages arising out of or relating to the use of the Software.</p>
                </section>

                <section id="changes">
                    <h2>7. Changes to This Agreement</h2>
                    <p>We may update this Agreement from time to time. The updated version will be indicated by a revised effective date at the top of this page.</p>
                </section>

                <section id="contact">
                    <h2>8. Contact</h2>
                    <p>Questions about this Agreement may be directed to <a href="mailto:info@spicolaconstruction.com">info@spicolaconstruction.com</a> or by post at:</p>
                    <address class="legal-address">
                        Spicola Construction<br>
                        9249 Lazy Ln<br>
                        Tampa, FL 33614<br>
                        United States
                    </address>
                </section>

            </div><!-- .legal-page__body -->
        </div><!-- .legal-page__inner -->
    </section>

</main>

<?php get_footer(); ?>
