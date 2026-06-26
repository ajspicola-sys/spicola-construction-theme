# Spicola Construction — Content & Credibility Cleanup

Rebrand cleanup of leftover plumbing/water-heater content inherited from the
"Hot Water Heroes" plumbing template. **No design, CSS, layout, fonts, or colors
were changed** — content/data only. (Three CSS *comments* were updated to remove
the word "Plumbing"; no rules were touched.)

Date: 2026-06-26

---

## 1. Contact page — wrong company info (`page-contact.php`)

| Was | Now |
|-----|-----|
| Email `joe@hotwaterheroesplumbing.com` (HTML-entity-encoded, 2 places) | `info@spicolaconstruction.com` (matches site privacy policy) |
| `tel:+18134275862` (decoded to 813-427-5862) ×2 | `tel:+18137326285` |
| Phone display `(813) 732-6285 (75862)` ×2 | `(813) 732-6285` |
| "Our team is ready to help with any **plumbing** question." | "...any **construction** question." |
| Textarea placeholder "Tell us about your **plumbing issue**..." | "...your **construction project**..." |

> Note: the form's internal handles `hwh_contact_form` / `hwh_contact_submit`
> (nonce + AJAX action) were intentionally left unchanged — they are not
> visitor-facing and must match the handler in `functions.php`.

## 2. Phone number fixes (`tel:` + display `(75862)`) — all instances

Changed `tel:+18134275862` → `tel:+18137326285` and removed the trailing
`(75862)` from the displayed number in:
- `page-contact.php` (×2)
- `page-service-areas.php` (×2)
- `page-maintenance-plan.php`
- `category.php`
- `home.php`

(All other `tel:` links across the theme already used the correct
`+18137326285`.)

## 3. Removed leftover plumbing / water-heater content (live theme)

Rewritten to construction-appropriate copy (not blind word-swaps):

- **`home.php`** — blog hero "Plumbing Tips" → "Construction Tips"; "expert
  plumbing advice" → "construction advice"; empty-state text; CTA "Have a
  Plumbing Issue?" → "Have a Construction Project?"; "plumbing service" →
  "construction service". Also "HWH Blog" label → "Spicola Blog".
- **`category.php`** — "HWH Blog" → "Spicola Blog"; CTA "Have a Plumbing Issue?"
  → "Have a Construction Project?"; "plumbing service" → "construction service".
- **`page-service-areas.php`** — hero/desc, "dispatch licensed plumbers" →
  "licensed construction crews", "Tampa Bay plumbing" → "construction",
  "go-to plumbing team" → "construction team", FAQ "How fast can a plumber…" →
  "…can your team…", "emergency plumbing service" → "emergency service",
  CTA "Need a Plumber?" → "Need a Contractor?". Also changed an inflated
  "Hundreds of 5-star reviews" claim to "50+ 5-star reviews" for consistency.
- **`page-values.php`** — mission/pillars/values rewritten: "plumber/plumbers"
  → "contractor/contractors/crews", "plumbing work/codes/technology" →
  "construction work / building codes / construction methods", gas-line/water-line
  language generalized to "every part of the job".
- **`page-team.php`** — "plumbing professionals" → "construction professionals";
  CTA "dispatch a licensed plumber" → "our licensed team is ready…".
- **`page-products.php`** — "plumbing products" → "construction products";
  "your plumbing needs" → "your project needs".
- **`page-refund-policy.php`** — "Plumbing Services" → "Construction Services";
  "plumbing services are completed" → "construction services"; "send a plumber
  back" → "send our team back".
- **`page-maintenance-plan.php`** — removed water-heater flush / "plumbing
  inspection" language; generalized to "home maintenance inspection",
  "all repairs and installations".
- **`page-cancellation-policy.php`** — "If our plumber arrives" → "If our team
  arrives".
- **`page-before-after.php`** — gallery filters and all 6 sample project cards
  converted from plumbing (Water Heater, Pipe Repair, Drain, Repiping, Slab Leak)
  to construction (Kitchen Remodel, Bathroom Renovation, Primary Suite Addition,
  Roof Replacement, Exterior Siding & Paint, Concrete Patio). CTA "Need Quality
  Plumbing Work?" → "Need Quality Construction Work?".
  **[TODO: replace these placeholder gallery cards with real before/after project photos.]**
- **`footer.php`** — promo-popup default text "Book your first plumbing service"
  → "construction service".
- **`style.css`** — 3 section-header **comments** updated ("Bold Plumbing
  Design" → "Bold Construction Design", etc.). No styling changed.

### `functions.php`
- WebSite schema description: water-heater/drain list → GC services list.
- `hwh_fix_meta_descriptions()`: the two "generic" fallback strings, the blog
  archive description, and the services-archive description rewritten from
  water-heater/drain language to construction.
- Blog category seed list: removed "Water Heater Services" and "HWH News" →
  "Construction Tips" and "Spicola News".
- **Blog post seeder** (`hwh_create_blog_posts`): removed the 5 plumbing seed
  posts (see §4); kept and cleaned the one generic post, retitled
  "What to Expect When You Call a **Contractor**" (was lowercase "contractor")
  and recategorized to "Tips & Maintenance".
- **Legacy v2 service seeder** (`hwh_create_services`): the plumbing service
  catalog (Water Heater Repair, Drain Cleaning, Repiping, Gas Line, etc.) and
  its 3 plumbing categories were emptied. This seeder is **superseded by the
  v3 seeder** (`hwh_create_services_v3`), which creates Spicola's real
  construction services (Residential / Commercial / Specialty). The v2 function
  now creates nothing.
- Team-member admin field placeholder "Water Heaters, Drain Cleaning, Repiping"
  → "Remodeling, Roofing, Concrete".
- Service-title meta comment example updated to "Kitchen Remodeling…".
- FAQ answers (maintenance-plan credits; "what services do you offer") rewritten
  from water-heater/drain lists to construction services.
- **Inconsistent stat fix:** about-page meta description "300+ jobs completed"
  → "100+ projects completed".

## 4. Removed plumbing blog posts (per your instruction)

Removed from the blog seeder (`functions.php`):
- "Tank vs. Tankless Water Heaters: Which Is Right for Your Home?"
- "The Complete Guide to Preventing construction Emergencies" (body was plumbing)
- "5 Signs You Need to Replace Your Water Heater"
- "Why Tampa Bay Homes Need Annual construction Inspections" (body was plumbing)
- "Hard Water in Tampa Bay: What It Does to Your construction" (plumbing)

> ⚠️ These posts may already exist in the **live WordPress database** (the seeder
> is one-time, guarded by an option flag). Removing them from the seeder prevents
> re-creation, but you should also **delete the published posts and the
> "Water Heater Services" category in WP Admin → Posts / Categories.**

## 5. Broken find-and-replace grammar — fixed

The mangled auto-swapped posts ("Annual construction Inspections", "Preventing
construction Emergencies", "Florida construction Is Different", etc.) were all
plumbing content in disguise, so they were **removed** (§4) rather than reworded.
The one genuinely-construction post had its title capitalization fixed
("a contractor" → "a Contractor") and its body cleaned of plumbing terms
("diagnosis/repair/fully-stocked trucks" → "estimate/work/crews").

## 6. Inconsistent "Projects Completed" stat → unified to **100+**

Per your answer ("put 100"), all instances set to `100+`:
- `front-page.php` — services section (was 250+) and "Why Choose Us" (was 500+).
- `page-about.php` — hero float, story stat row, trust-stats band (all were 250+).
- `functions.php` — about meta description (was "300+ jobs").

Other stats confirmed consistent and left intentional: **10+ Years Experience**,
**50+ 5-Star Reviews / 50+ Google Reviews**, **100% Satisfaction Guaranteed**,
**3 Counties Served**.

## 7. Testimonials / reviews

Per your answer ("keep claims, remove only fake schema"):
- **Removed fabricated reviews.** `hwh_review_schema()` in `functions.php` was
  outputting 5 invented 5-star reviews (fake names "Sarah M.", "James R.", etc.)
  as JSON-LD `Review` schema on the homepage — a real credibility/legal risk.
  The review array is now empty with an early `return`, so **no review schema is
  emitted** until real, verified reviews are added. A clear `[TODO]` warns against
  ever adding fabricated reviews.
- **Text claims kept** as requested: "50+ Google Reviews" (footer), "50+ 5-Star
  Reviews" (front page).

## 8. About page (`page-about.php`)

The About page template was already content-rich (story, values, stats,
"what sets us apart", certifications, CTA) — the "one sentence" description in the
brief predates this template. Targeted fixes:
- Stats → 100+ (see §6).
- **License now displayed:** the "CGC Licensed" chip → **"Lic. CBC 1264021"**
  (the real number already in `header.php` and your latest commit).
- Owner name: added a clearly-marked HTML-comment placeholder by the founder
  paragraph (does not render to visitors). **[TODO: confirm owner/founder name.]**

## 9. Deleted leftover files (per your approval)

Stale, non-rendered files removed via `git rm`:
- `seo/posts-seo-full-import.csv` (old water-heater blog import data)
- `seo/services-export-original.csv` (old plumbing services export)
- `seo/services-seo-import.csv` (old plumbing services import)
- `assets/rebrand.ps1`, `assets/rebrand2.ps1`, `assets/rebrand3.ps1`,
  `assets/rebrand.py` (one-time Livia-MedSpa→HWH→Spicola migration scripts)
- `assets/deploy.php` (one-time deploy script with a hardcoded key + old domain)
- `sync.ps1` (HWH git-sync helper)

Kept & rebranded: `seo/hwh-csv-importer.php` — plugin header/menu title changed
from "HWH CSV Importer / Hot Water Heroes / hotwaterheroesplumbing.com" to
"Spicola CSV Importer / Spicola Construction / spicolaconstruction.com".
(Internal slug/function names left intact to avoid breakage.)

Kept as-is (your decision): `seo/services-seo-import-v2.csv` — current Spicola
construction service content. Its "Hot Water Heroes Plumbing" sister-company
references and normal GC/MEP "plumbing" usage are intentional.

---

## OUTSTANDING TODOs (need your input / a WP-admin action)

1. **[Owner name]** — confirm the founder/owner's name to put on the About page
   (placeholder comment is in `page-about.php`).
2. **[Live DB blog posts]** — delete the 5 published plumbing posts and the
   "Water Heater Services" category in WP Admin (the seeder change only prevents
   re-creation).
3. **[Live DB services]** — verify WP Admin → Services contains only the real
   Spicola construction services; delete any leftover plumbing service posts /
   "Water Heater Services" & "Drain & Pipe Services" service categories created
   by the old v2 seeder.
4. **[Reviews]** — add real Google reviews (content or embed) if/when you want
   review schema back; populate `$reviews` in `hwh_review_schema()`.
5. **[Before/After gallery]** — replace the placeholder construction cards in
   `page-before-after.php` with real project photos.
6. **[License label]** — confirm CBC vs CGC: the site uses **CBC 1264021**
   (Certified Building Contractor). The old About chip said "CGC Licensed";
   it's now "Lic. CBC 1264021" to match your header. Confirm this is correct.
7. **[Email recipients]** — confirm the WP option `hwh_notification_emails`
   (contact-form recipients) is set to `info@spicolaconstruction.com` and not
   the old plumbing address.

---

## FINAL PROOF — project-wide search after cleanup

`plumbing | plumber | water heater | hotwater | 75862 | 8134275862 | 250+ | 500+`
(case-insensitive, whole repo):

- **0 hits in any rendered theme file** (templates, `functions.php` logic,
  `header.php`, `footer.php`, `style.css`).
- `functions.php:734` — one intentional explanatory comment
  ("Legacy plumbing service catalog removed during the construction rebrand").
- `seo/services-seo-import-v2.csv` — all remaining hits; **kept by your
  decision** (current construction content: GC/MEP "plumbing" usage, intentional
  "Hot Water Heroes Plumbing" sister-company references, and "$250+/sq ft"
  pricing — not the projects stat).

The old phone number `8134275862` and the `(75862)` suffix: **0 hits.**
