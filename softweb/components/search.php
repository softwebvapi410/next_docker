<!-- SEARCH POPUP -->
<div class="search-popup" id="searchPopup">
    <div class="search-popup__overlay search-toggler"></div>

    <div class="search-popup__content">

        <!-- Search bar -->
        <form role="search" class="search-popup__form" onsubmit="return false;">
            <input
                type="text"
                id="siteSearchInput"
                placeholder="Search pages, services, blogs..."
                autocomplete="off"
                aria-label="Search"
                oninput="runSiteSearch(this.value)"
            />

            <!-- Tools inside the bar: clear + AI toggle -->
            <div class="sw-bar-tools">
                <button type="button" id="swClear" class="sw-clear" aria-label="Clear search" hidden>
                    <svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round"><path d="M6 6l12 12M18 6L6 18"/></svg>
                </button>

                <button type="button" id="aiSearchToggle" class="sw-ai-toggle" role="switch" aria-checked="false" title="Search with AI">
                    <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M10 1.5l2 5.9 5.9 2-5.9 2-2 5.9-2-5.9-5.9-2 5.9-2z"/><path d="M19 14l1 2.4 2.4 1-2.4 1-1 2.4-1-2.4-2.4-1 2.4-1z"/></svg>
                    <span class="sw-ai-toggle__text">AI</span>
                    <span class="sw-ai-toggle__track"><span class="sw-ai-toggle__knob"></span></span>
                </button>
            </div>

            <button type="button" id="siteSearchBtn" aria-label="search" class="insuba-btn insuba-btn--base">
                <i class="icon-search"></i>
            </button>
        </form>

        <!-- Results panel -->
        <div class="sw-panel" id="swPanel">
            <div class="sw-panel__head">
                <span class="sw-panel__title" id="swTitle" aria-live="polite">Popular searches</span>
                <span class="sw-panel__mode" id="swModeBadge">Site search</span>
            </div>

            <div class="sw-panel__body">

                <!-- Suggestions (shown before typing) -->
                <div id="swSuggest" class="sw-suggest"></div>

                <!-- Local results -->
                <div id="searchResults" style="display:none;"></div>

                <!-- Local empty state -->
                <div id="searchEmpty" class="sw-empty" style="display:none;">
                    <p class="sw-empty__title">No pages match &ldquo;<span id="swEmptyQ"></span>&rdquo;</p>
                    <p class="sw-empty__text">No results found. Try a different keyword, or let AI search look for it.</p>
                    <button type="button" class="sw-empty__cta" id="swTryAi">Try AI search</button>
                </div>

                <!-- AI results (Google CSE) -->
                <div id="aiResults" style="display:none;">
                    <div id="aiLoading" class="sw-skel-wrap" hidden aria-label="Loading results">
                        <div class="sw-think" aria-live="polite">
                            <span class="sw-think__icon"><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M10 1.5l2 5.9 5.9 2-5.9 2-2 5.9-2-5.9-5.9-2 5.9-2z"/><path d="M19 14l1 2.4 2.4 1-2.4 1-1 2.4-1-2.4-2.4-1 2.4-1z"/></svg></span>
                            <span class="sw-think__text" id="aiStatusText"></span><span class="sw-think__caret" aria-hidden="true"></span>
                        </div>
                        <div class="sw-skel"><div class="sw-skel__col"><span class="sw-skel__bar" style="width:38%"></span><span class="sw-skel__bar" style="width:82%"></span><span class="sw-skel__bar" style="width:64%"></span></div></div>
                        <div class="sw-skel"><div class="sw-skel__col"><span class="sw-skel__bar" style="width:46%"></span><span class="sw-skel__bar" style="width:76%"></span><span class="sw-skel__bar" style="width:58%"></span></div></div>
                        <div class="sw-skel"><div class="sw-skel__col"><span class="sw-skel__bar" style="width:34%"></span><span class="sw-skel__bar" style="width:88%"></span><span class="sw-skel__bar" style="width:52%"></span></div></div>
                    </div>
                    <div id="aiError" class="sw-empty" hidden>
                        <p class="sw-empty__title">AI search didn&rsquo;t load</p>
                        <p class="sw-empty__text">Check your connection and try again, or switch back to site search.</p>
                    </div>
                    <div class="gcse-searchresults-only" data-gname="swAI" data-autoSearchOnLoad="false"></div>
                </div>

            </div>
        </div>

    </div><!-- /.search-popup__content -->
</div><!-- /.search-popup -->

<style>
/* ── Tokens ─────────────────────────────────────────────────────────────── */
#searchPopup {
    --sw-primary: var(--insuba-primary, #1a3c5e);
    --sw-ink:     #16202b;
    --sw-muted:   #6b7684;
    --sw-line:    #e8ebef;
    --sw-soft:    #f4f6f8;
}
#searchPopup [hidden] { display: none !important; }

/* ── Search bar: in-bar tools ───────────────────────────────────────────── */
/* Adjust --sw-toggle-right if your search button is wider/narrower */
.search-popup__form { position: relative; }
.search-popup__form #siteSearchInput {
    padding-right: calc(var(--sw-toggle-right, 70px) + 150px);
}
#searchPopup .sw-bar-tools {
    position: absolute;
    top: 50%;
    right: var(--sw-toggle-right, 70px);
    transform: translateY(-50%);
    z-index: 2;
    display: flex;
    align-items: center;
    gap: 8px;
}
/* Reset theme button styles that could target "form button" */
#searchPopup .sw-bar-tools button {
    position: static;
    top: auto; right: auto; bottom: auto; left: auto;
    transform: none;
    box-shadow: none;
    margin: 0;
    min-width: 0;
    font-family: inherit;
    cursor: pointer;
}
#searchPopup .sw-clear {
    width: 26px;
    height: 26px;
    padding: 0;
    border: 0;
    border-radius: 50%;
    background: #e9edf1;
    color: #5b6673;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    transition: background 0.15s ease, color 0.15s ease;
}
#searchPopup .sw-clear:hover { background: #dce2e8; color: var(--sw-ink); }

#searchPopup .sw-ai-toggle {
    width: auto;
    height: 32px;
    padding: 0 8px 0 11px;
    display: inline-flex;
    align-items: center;
    gap: 7px;
    border: 1px solid var(--sw-line);
    border-radius: 999px;
    background: var(--sw-soft);
    color: #46515e;
    font-size: 12px;
    font-weight: 700;
    line-height: 1;
    letter-spacing: 0.02em;
    transition: background 0.2s ease, color 0.2s ease, border-color 0.2s ease;
}
#searchPopup .sw-ai-toggle:hover { border-color: #cfd5dc; }
#searchPopup .sw-ai-toggle svg { width: 14px; height: 14px; flex-shrink: 0; }
.sw-ai-toggle__track {
    position: relative;
    width: 26px;
    height: 14px;
    border-radius: 999px;
    background: #c6cdd5;
    transition: background 0.2s ease;
}
.sw-ai-toggle__knob {
    position: absolute;
    top: 2px;
    left: 2px;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: #fff;
    transition: transform 0.2s ease;
}
#searchPopup .sw-ai-toggle.is-on {
    background: var(--sw-primary);
    border-color: var(--sw-primary);
    color: #fff;
}
#searchPopup .sw-ai-toggle.is-on .sw-ai-toggle__track { background: rgba(255,255,255,0.35); }
#searchPopup .sw-ai-toggle.is-on .sw-ai-toggle__knob  { transform: translateX(12px); }
#searchPopup .sw-ai-toggle:focus-visible,
#searchPopup .sw-clear:focus-visible {
    outline: 2px solid var(--sw-primary);
    outline-offset: 2px;
}

/* ── Panel ──────────────────────────────────────────────────────────────── */
.sw-panel {
    margin-top: 14px;
    background: #fff;
    border-radius: 14px;
    box-shadow: 0 18px 48px rgba(10, 25, 41, 0.16);
    overflow: hidden;
    text-align: left;
}
.sw-panel__head {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
    padding: 12px 16px;
    border-bottom: 1px solid var(--sw-line);
}
.sw-panel__title {
    font-size: 13px;
    font-weight: 600;
    color: var(--sw-ink);
    min-width: 0;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.sw-panel__mode {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    flex-shrink: 0;
    padding: 4px 10px;
    border-radius: 999px;
    background: var(--sw-soft);
    color: var(--sw-muted);
    font-size: 11px;
    font-weight: 600;
}
.sw-panel__mode svg { width: 11px; height: 11px; }
.sw-panel__mode.is-ai { background: var(--sw-primary); color: #fff; }
.sw-panel__body {
    max-height: min(420px, 55vh);
    overflow-y: auto;
    padding: 12px;
    scrollbar-width: thin;
    scrollbar-color: #cfd5dc transparent;
}
.sw-panel__body::-webkit-scrollbar { width: 6px; }
.sw-panel__body::-webkit-scrollbar-thumb { background: #cfd5dc; border-radius: 6px; }

/* ── Suggestion chips ───────────────────────────────────────────────────── */
.sw-suggest { display: flex; flex-wrap: wrap; gap: 8px; }
#searchPopup .sw-chip {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 9px 14px;
    border: 1px solid var(--sw-line);
    border-radius: 999px;
    background: #fff;
    color: var(--sw-ink);
    font-family: inherit;
    font-size: 13px;
    line-height: 1;
    cursor: pointer;
    transition: border-color 0.15s ease, color 0.15s ease, background 0.15s ease;
}
#searchPopup .sw-chip:hover { border-color: var(--sw-primary); color: var(--sw-primary); background: var(--sw-soft); }
#searchPopup .sw-chip svg { width: 13px; height: 13px; color: var(--sw-primary); }
#searchPopup .sw-chip:focus-visible { outline: 2px solid var(--sw-primary); outline-offset: 2px; }

/* ── Local result cards ─────────────────────────────────────────────────── */
.sw-result-card {
    display: flex;
    align-items: stretch;
    background: #fff;
    border: 1px solid var(--sw-line);
    border-radius: 10px;
    margin-bottom: 8px;
    overflow: hidden;
    text-decoration: none;
    cursor: pointer;
    transition: border-color 0.15s ease, box-shadow 0.15s ease, background 0.15s ease;
}
.sw-result-card:hover,
.sw-result-card.is-active {
    border-color: var(--sw-primary);
    box-shadow: 0 4px 14px rgba(10, 25, 41, 0.08);
}
.sw-result-card.is-active { background: #f7fafc; }
.sw-result-card:focus-visible { outline: 2px solid var(--sw-primary); outline-offset: 2px; }
.sw-result-card__strip {
    width: 48px;
    min-height: 76px;
    background: var(--sw-primary);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}
.sw-result-card__strip img { width: 28px; height: 28px; object-fit: contain; }
.sw-result-card__body { padding: 11px 14px; flex: 1; min-width: 0; }
.sw-result-card__meta {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 4px;
}
.sw-result-card__tag {
    padding: 2px 8px;
    border-radius: 999px;
    background: var(--sw-soft);
    color: var(--sw-primary);
    font-size: 11px;
    font-weight: 600;
    line-height: 1.5;
}
.sw-result-card__url {
    font-size: 11px;
    color: var(--sw-muted);
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.sw-result-card__title {
    font-size: 14px;
    font-weight: 700;
    color: var(--sw-ink);
    margin: 0 0 3px;
    line-height: 1.35;
}
.sw-result-card__desc {
    font-size: 12.5px;
    color: var(--sw-muted);
    margin: 0;
    line-height: 1.5;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
.sw-result-card__arrow {
    display: flex;
    align-items: center;
    padding-right: 14px;
    color: #b8c0ca;
    flex-shrink: 0;
    transition: transform 0.15s ease, color 0.15s ease;
}
.sw-result-card:hover .sw-result-card__arrow,
.sw-result-card.is-active .sw-result-card__arrow {
    transform: translateX(3px);
    color: var(--sw-primary);
}
.sw-mark {
    background: #fff1b8;
    color: inherit;
    border-radius: 3px;
    padding: 0 2px;
}

/* ── Empty / error state ────────────────────────────────────────────────── */
.sw-empty { text-align: center; padding: 28px 12px; }
.sw-empty__title { margin: 0 0 4px; font-size: 15px; font-weight: 700; color: var(--sw-ink); }
.sw-empty__text  { margin: 0 auto; max-width: 320px; font-size: 13px; line-height: 1.5; color: var(--sw-muted); }
#searchPopup .sw-empty__cta {
    margin-top: 14px;
    padding: 9px 18px;
    border: 0;
    border-radius: 999px;
    background: var(--sw-primary);
    color: #fff;
    font-family: inherit;
    font-size: 13px;
    font-weight: 600;
    cursor: pointer;
    transition: opacity 0.15s ease;
}
#searchPopup .sw-empty__cta:hover { opacity: 0.88; }

/* ── AI loading skeleton ────────────────────────────────────────────────── */
.sw-skel {
    display: flex;
    padding: 14px;
    border: 1px solid var(--sw-line);
    border-radius: 10px;
    margin-bottom: 8px;
}
.sw-skel__col { flex: 1; display: grid; gap: 8px; }
.sw-skel__bar {
    display: block;
    height: 10px;
    border-radius: 5px;
    background: linear-gradient(90deg, #eef1f4 25%, #f8f9fb 50%, #eef1f4 75%);
    background-size: 200% 100%;
    animation: swShimmer 1.2s linear infinite;
}
@keyframes swShimmer { from { background-position: 200% 0; } to { background-position: -200% 0; } }
#aiResults.is-loading .gsc-control-cse { display: none; }

/* Streaming "searching" status */
.sw-think {
    display: flex;
    align-items: center;
    gap: 9px;
    padding: 4px 4px 14px;
    font-size: 13px;
    font-weight: 600;
    color: var(--sw-primary);
}
.sw-think__icon { display: inline-flex; animation: swPulse 1.4s ease-in-out infinite; }
.sw-think__icon svg { width: 16px; height: 16px; }
.sw-think__caret {
    width: 2px;
    height: 14px;
    margin-left: -6px;
    background: var(--sw-primary);
    animation: swBlink 0.9s steps(1) infinite;
}
@keyframes swPulse {
    0%, 100% { transform: scale(1) rotate(0deg);   opacity: 1; }
    50%      { transform: scale(1.25) rotate(18deg); opacity: 0.6; }
}
@keyframes swBlink { 50% { opacity: 0; } }

/* Indeterminate progress line under the panel header while searching */
.sw-panel__head { position: relative; }
.sw-panel.is-searching .sw-panel__head::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: -1px;
    height: 2px;
    width: 35%;
    background: var(--sw-primary);
    border-radius: 2px;
    animation: swSlide 1.1s ease-in-out infinite;
}
@keyframes swSlide {
    0%   { transform: translateX(-100%); }
    100% { transform: translateX(290%); }
}

/* AI results stream in one after another */
@keyframes swStream {
    from { opacity: 0; transform: translateY(10px); }
    to   { opacity: 1; transform: none; }
}
#aiResults .gsc-webResult.gsc-result { animation: swStream 0.45s ease both; }
#aiResults .gsc-webResult.gsc-result:nth-child(1)  { animation-delay: 0.04s; }
#aiResults .gsc-webResult.gsc-result:nth-child(2)  { animation-delay: 0.16s; }
#aiResults .gsc-webResult.gsc-result:nth-child(3)  { animation-delay: 0.28s; }
#aiResults .gsc-webResult.gsc-result:nth-child(4)  { animation-delay: 0.40s; }
#aiResults .gsc-webResult.gsc-result:nth-child(5)  { animation-delay: 0.52s; }
#aiResults .gsc-webResult.gsc-result:nth-child(6)  { animation-delay: 0.64s; }
#aiResults .gsc-webResult.gsc-result:nth-child(7)  { animation-delay: 0.76s; }
#aiResults .gsc-webResult.gsc-result:nth-child(8)  { animation-delay: 0.88s; }
#aiResults .gsc-webResult.gsc-result:nth-child(9)  { animation-delay: 1.00s; }
#aiResults .gsc-webResult.gsc-result:nth-child(10) { animation-delay: 1.12s; }

/* ── Google CSE results restyled as cards ───────────────────────────────── */
#aiResults .gsc-control-cse {
    padding: 0;
    border: 0;
    background: transparent;
    font-family: inherit;
}
#aiResults .gsc-above-wrapper-area { border: 0; padding: 0 2px 8px; }
#aiResults .gsc-result-info { padding: 0; font-size: 12px; color: var(--sw-muted); }
#aiResults .gsc-wrapper,
#aiResults .gsc-resultsbox-visible,
#aiResults .gsc-resultsRoot { padding: 0; }
#aiResults .gsc-webResult.gsc-result {
    padding: 12px 14px;
    margin: 0 0 8px;
    border: 1px solid var(--sw-line);
    border-radius: 10px;
    background: #fff;
    transition: border-color 0.15s ease, box-shadow 0.15s ease, background 0.15s ease;
}
#aiResults .gsc-webResult.gsc-result:hover,
#aiResults .gsc-webResult.gsc-result.is-active {
    border-color: var(--sw-primary);
    box-shadow: 0 4px 14px rgba(10, 25, 41, 0.08);
}
#aiResults .gsc-webResult.gsc-result.is-active { background: #f7fafc; }
#aiResults .gsc-webResult.gsc-result:has(.gs-no-results-result) { border: 0; }
#aiResults .gs-webResult.gs-result,
#aiResults .gs-webResult .gsc-table-result { margin: 0; padding: 0; }
#aiResults .gs-title,
#aiResults .gs-title * {
    font-size: 14px;
    font-weight: 700;
    color: var(--sw-ink);
    text-decoration: none;
}
#aiResults .gs-title:hover,
#aiResults .gs-title:hover * { color: var(--sw-primary); text-decoration: underline; }
#aiResults .gsc-url-top { padding: 0 0 2px; margin: 0; }
#aiResults .gs-visibleUrl { font-size: 11px; color: var(--sw-muted); }
#aiResults .gs-snippet { font-size: 12.5px; line-height: 1.5; color: var(--sw-muted); }
#aiResults .gs-snippet b { color: var(--sw-ink); }
#aiResults .gs-no-results-result .gs-snippet {
    padding: 24px 8px;
    border: 0;
    background: transparent;
    text-align: center;
    font-size: 14px;
}
#aiResults .gsc-cursor-box { margin: 8px 0 0; text-align: center; }
#aiResults .gsc-cursor-page { font-size: 12px; color: var(--sw-primary); }
#aiResults .gsc-cursor-current-page { font-weight: 700; color: var(--sw-ink); }
#aiResults .gcsc-find-more-on-google { font-size: 12px; color: var(--sw-muted); }
#aiResults .gcsc-find-more-on-google-magnifier { fill: var(--sw-muted); }

/* ── Responsive ─────────────────────────────────────────────────────────── */
@media (max-width: 575px) {
    .search-popup__form #siteSearchInput { padding-right: calc(var(--sw-toggle-right, 70px) + 104px); }
    .sw-ai-toggle__track { display: none; }
    #searchPopup .sw-ai-toggle { padding: 0 11px; }
    .sw-result-card__url { display: none; }
}
@media (prefers-reduced-motion: reduce) {
    #searchPopup *, #searchPopup *::before, #searchPopup *::after {
        transition: none !important;
        animation: none !important;
    }
}
</style>

<script>
(function () {

    // ── Config ──────────────────────────────────────────────────────────────
    var CSE_CX    = 'a6dd2c2e0189b4f0d';
    var CSE_GNAME = 'swAI';
    var AI_DELAY  = 400;   // ms to wait after the last keystroke in AI mode

    var SUGGEST_SITE = ['Web development', 'SEO', 'Google Ads', 'Social media marketing', 'Graphic design', 'Contact'];
    var SUGGEST_AI   = ['Best SEO services in Vapi', 'How much does a website cost?', 'Digital marketing for small businesses', 'Google My Business for local shops'];

    var SPARK = '<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M10 1.5l2 5.9 5.9 2-5.9 2-2 5.9-2-5.9-5.9-2 5.9-2z"/><path d="M19 14l1 2.4 2.4 1-2.4 1-1 2.4-1-2.4-2.4-1 2.4-1z"/></svg>';
    var CHEVRON = '<svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 6l6 6-6 6"/></svg>';

    // ── Page index built from meta_config.php data ──────────────────────────
    var SITE_PAGES = [
        { url: "index.php",                           tag: "Home",              title: "Home | SOFTWEB Technology Vapi",                                              desc: "Your partner in digital transformation since 2005. Web development, digital marketing, branding, SEO and event management in Vapi, Gujarat, India." },
        { url: "about-us.php",                        tag: "About",             title: "About SOFTWEB | Best Digital Marketing Agency in Vapi since 2005",           desc: "Discover SOFTWEB, the premier web design and digital marketing agency serving Vapi, Daman, Silvassa, and Valsad since 2005." },
        { url: "company-profile.php",                 tag: "About",             title: "Company Profile | Digital Marketing in Vapi",                                 desc: "Learn more about SOFTWEB, a trusted digital marketing agency in Vapi helping businesses grow in Daman, Silvassa, Valsad, and across India since 2005." },
        { url: "why-choose-us.php",                   tag: "About",             title: "Why Choose SOFTWEB | Best Marketing Company in Vapi",                        desc: "Discover why SOFTWEB is the preferred web development and SEO company in Vapi, Daman, Silvassa, and Valsad for over 20 years." },
        { url: "web-development.php",                 tag: "Web Development",   title: "Web Development Company in Vapi | Custom Websites",                          desc: "Leading web development agency in Vapi offering responsive and SEO-friendly websites for businesses in Daman, Silvassa, Valsad, and across India." },
        { url: "website-redesign.php",                tag: "Web Development",   title: "Website Redesign Services in Vapi | Modern UI/UX",                           desc: "Upgrade your online presence with website redesigning in Vapi. Improving site performance for clients in Daman, Silvassa, and Valsad." },
        { url: "ecommerce-website.php",               tag: "Web Development",   title: "Ecommerce Website Development in Vapi | Online Stores",                      desc: "Build scalable online stores with ecommerce developers in Vapi. Secure payment integration for businesses in Daman, Silvassa, and Valsad." },
        { url: "web-maintenance.php",                 tag: "Web Development",   title: "Website Maintenance Services in Vapi | SOFTWEB",                             desc: "Reliable website support and maintenance in Vapi. Keeping websites secure and updated for clients in Daman, Silvassa, and Valsad." },
        { url: "digital-marketing.php",               tag: "Digital Marketing", title: "Digital Marketing Vapi, Daman, Silvassa, Valsad | SOFTWEB Agency",           desc: "Boost your brand with expert digital marketing services in Vapi. Result-oriented SEO and SMM solutions for clients in Daman, Silvassa, and Valsad." },
        { url: "seo.php",                             tag: "SEO",               title: "SEO Services in Vapi | Rank #1 on Google",                                   desc: "Best SEO agency in Vapi. We provide organic growth and top rankings for businesses in Daman, Silvassa, Valsad, and across India." },
        { url: "google-my-business.php",              tag: "SEO",               title: "GMB & Local SEO Optimization in Vapi | SOFTWEB",                             desc: "Dominate local search with Google My Business optimization in Vapi. Increase footfall for businesses in Daman, Silvassa, and Valsad." },
        { url: "on-page-seo.php",                     tag: "SEO",               title: "On-Page SEO Experts in Vapi | Website Optimization",                         desc: "Optimize your site content with the best on-page SEO in Vapi. Serving industrial and retail sectors in Daman, Silvassa, and Valsad." },
        { url: "off-page-seo.php",                    tag: "SEO",               title: "Off-Page SEO & Link Building in Vapi | High Authority",                      desc: "Boost your domain authority with off-page SEO services in Vapi. Quality backlinks for businesses in Daman, Silvassa, and across India." },
        { url: "social-media-marketing.php",          tag: "Social Media",      title: "Social Media Marketing in Vapi | Top SMM Agency",                            desc: "Grow your social presence with the best SMM company in Vapi. Creative strategies for businesses in Daman, Silvassa, and Valsad." },
        { url: "linkedin-marketing.php",              tag: "Social Media",      title: "LinkedIn Marketing & B2B Leads in Vapi | SOFTWEB",                           desc: "Generate high-quality B2B leads with LinkedIn marketing in Vapi. Targeted professional networking for brands in Daman, Silvassa, and Valsad." },
        { url: "youtube-marketing.php",               tag: "Social Media",      title: "YouTube Marketing Agency in Vapi | Video SEO Experts",                       desc: "Professional YouTube marketing and video promotion in Vapi. Reach millions through targeted video ads in Daman, Silvassa, and India." },
        { url: "facebook-instagram-ads.php",          tag: "FB / Insta Ads",    title: "Facebook & Instagram Ads in Vapi | Performance Marketing",                   desc: "Maximize your ad spend with performance marketing in Vapi. Data-driven growth for companies in Daman, Silvassa, Valsad, and India." },
        { url: "fb-brand-awareness.php",              tag: "FB / Insta Ads",    title: "Facebook Brand Awareness Campaigns in Vapi | SOFTWEB",                       desc: "Increase your brand reach with Facebook awareness ads in Vapi. Targeted campaigns for audiences in Daman, Silvassa, and Valsad." },
        { url: "fb-lead-generation.php",              tag: "FB / Insta Ads",    title: "Facebook Lead Generation in Vapi | Grow Your Sales",                         desc: "Get qualified leads with Facebook lead ads in Vapi. Helping businesses in Daman, Silvassa, and Valsad convert users into customers." },
        { url: "fb-traffic-ads.php",                  tag: "FB / Insta Ads",    title: "Facebook Traffic Ads in Vapi | Drive Site Visitors",                         desc: "Increase website traffic with professional Facebook ad management in Vapi. Serving Daman, Silvassa, Valsad, and across India." },
        { url: "fb-page-like-ads.php",                tag: "FB / Insta Ads",    title: "Facebook Page Likes Campaign in Vapi | Grow Audience",                       desc: "Build a loyal community with Facebook page growth in Vapi. Targeted engagement for brands in Daman, Silvassa, and Valsad." },
        { url: "ppc-services.php",                    tag: "Pay Per Click",     title: "PPC & Pay Per Click Services in Vapi | Maximize ROI",                        desc: "Get instant leads with expert PPC services in Vapi. Data-driven ad campaigns for businesses in Daman, Silvassa, Valsad, and PAN India." },
        { url: "google-ads-management.php",           tag: "Pay Per Click",     title: "Google Ads Management in Vapi | PPC Experts",                                desc: "Expert Google Ads management in Vapi. Maximize conversions for businesses in Daman, Silvassa, and Valsad." },
        { url: "google-search-ads.php",               tag: "Pay Per Click",     title: "Google Search Ads Expert in Vapi | SOFTWEB",                                 desc: "Rank #1 on Google with professional Search Ads management in Vapi. High-conversion PPC for companies in Daman, Silvassa, and Valsad." },
        { url: "video-ads-campaign.php",              tag: "Pay Per Click",     title: "Video Ads Campaign Management in Vapi | SOFTWEB",                            desc: "Drive engagement with professional video ads in Vapi. High-impact video campaigns for clients in Daman, Silvassa, and across India." },
        { url: "graphic-design.php",                  tag: "Graphic Design",    title: "Graphic Design Services in Vapi | Branding & Logos",                         desc: "Creative graphic design in Vapi for logos, brochures, packaging, and social media. Serving Daman, Silvassa, Valsad, and clients across India." },
        { url: "company_profile_design.php",          tag: "Graphic Design",    title: "Company Profile Design Services in Vapi | Creative Branding",                desc: "Professional corporate profile design in Vapi. Strong brand identities for businesses in Daman, Silvassa, Valsad, and throughout India." },
        { url: "google-360.php",                      tag: "Google 360",        title: "Google 360 Virtual Tour Services in Vapi | SOFTWEB",                         desc: "Showcase your space with 360 virtual tours in Vapi. Virtual photography for hotels and industries in Daman, Silvassa, and Valsad." },
        { url: "event-management-infrastructure.php", tag: "Event Management",  title: "Event Management & Infrastructure in Vapi | SOFTWEB",                        desc: "Complete corporate event infrastructure in Vapi. Managing business expos and events in Daman, Silvassa, and Valsad." },
        { url: "clients-and-testimonials.php",        tag: "Clients",           title: "Our Clients & Testimonials | SOFTWEB Vapi Success Stories",                  desc: "Read success stories from our clients in Vapi, Daman, Silvassa, and Valsad who transformed their business with SOFTWEB." },
        { url: "blogs-articles.php",                  tag: "Blog",              title: "Digital Marketing Blog Vapi | SEO & Tech Tips",                              desc: "Stay updated with the latest digital marketing and SEO trends from SOFTWEB in Vapi, Daman, Silvassa, and Valsad." },
        { url: "careers.php",                         tag: "Careers",           title: "Careers at SOFTWEB | Join Our Team in Vapi",                                 desc: "Looking for IT or Marketing jobs in Vapi? Join SOFTWEB and grow your career in Daman, Silvassa, and Valsad." },
        { url: "contact.php",                         tag: "Contact",           title: "Contact SOFTWEB | Web Design & Digital Marketing in Vapi",                   desc: "Get in touch with SOFTWEB for expert web design and digital marketing in Vapi. We serve clients across Daman, Silvassa, Valsad, and Gujarat." },
        { url: "digital-marketing-is-for-sme.php",   tag: "Blog",              title: "How Useful Digital Marketing is for SMEs | Growth Hacks",                    desc: "How SMEs in Vapi, Daman, Silvassa, and Valsad can compete globally using professional digital marketing strategies." },
        { url: "google-my-business-promotion.php",    tag: "Blog",              title: "GMB Promotion for SMEs in Vapi | Local Marketing Guide",                     desc: "Boost your local visibility with Google My Business promotion in Vapi. More calls and visits from Daman, Silvassa, and Valsad." },
        { url: "leave-digital-marketing-to-professionals.php", tag: "Blog",     title: "Why SMEs Should Hire Digital Marketing Experts | SOFTWEB",                   desc: "Why businesses in Vapi, Daman, and Silvassa trust professional agencies for their online marketing and SEO needs." },
        { url: "gmb-vs-ta.php",                       tag: "Blog",              title: "GMB vs Traditional Advertising | Vapi Marketing Comparison",                 desc: "Compare digital vs traditional marketing for your Vapi-based business. Serving Daman, Silvassa, and Valsad markets." }
    ];

    // ── State ───────────────────────────────────────────────────────────────
    var aiMode      = false;
    var cseLoaded   = false;
    var lastAiQ     = '';
    var aiTimer     = null;
    var loadTimer   = null;
    var activeIndex = -1;

    function $(id) { return document.getElementById(id); }

    function escapeHtml(str) {
        return String(str).replace(/[&<>"']/g, function (c) {
            return { '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;' }[c];
        });
    }
    function regexEscape(s) { return s.replace(/[.*+?^${}()|[\]\\]/g, '\\$&'); }

    // Highlight terms safely (escapes text, wraps matches)
    function highlight(text, terms) {
        var esc = terms.filter(Boolean).map(regexEscape);
        if (!esc.length) return escapeHtml(text);
        var re = new RegExp('(' + esc.join('|') + ')', 'gi');
        return text.split(re).map(function (part, i) {
            return i % 2 ? '<mark class="sw-mark">' + escapeHtml(part) + '</mark>' : escapeHtml(part);
        }).join('');
    }

    function scoreResult(page, terms) {
        var score = 0;
        terms.forEach(function (term) {
            if (!term) return;
            if (page.title.toLowerCase().indexOf(term) !== -1) score += 10;
            if (page.tag.toLowerCase().indexOf(term) !== -1)   score += 7;
            if (page.desc.toLowerCase().indexOf(term) !== -1)  score += 4;
            if (page.url.toLowerCase().indexOf(term) !== -1)   score += 2;
        });
        return score;
    }

    // ── View helpers ────────────────────────────────────────────────────────
    function setTitle(text) { $('swTitle').textContent = text; }

    function showView(v) {
        $('swSuggest').style.display    = v === 'suggest' ? 'flex'  : 'none';
        $('searchResults').style.display = v === 'local'  ? 'block' : 'none';
        $('searchEmpty').style.display   = v === 'empty'  ? 'block' : 'none';
        $('aiResults').style.display     = v === 'ai'     ? 'block' : 'none';
        activeIndex = -1;
        document.querySelector('#swPanel .sw-panel__body').scrollTop = 0;
    }

    function renderSuggest() {
        var list = aiMode ? SUGGEST_AI : SUGGEST_SITE;
        $('swSuggest').innerHTML = list.map(function (t) {
            return '<button type="button" class="sw-chip" data-q="' + escapeHtml(t) + '">'
                 + (aiMode ? SPARK : '') + escapeHtml(t) + '</button>';
        }).join('');
    }

    function showSuggest() {
        clearTimeout(aiTimer);
        if (lastAiQ) clearAiResults();
        setLoading(false);
        $('aiError').hidden = true;
        renderSuggest();
        setTitle(aiMode ? 'Ask anything about our services' : 'Popular searches');
        showView('suggest');
    }

    // ── Local site search ───────────────────────────────────────────────────
    function runLocalSearch(query) {
        var raw   = query.trim();
        var terms = raw.toLowerCase().split(/\s+/);

        var matched = SITE_PAGES.map(function (page) {
            return { page: page, score: scoreResult(page, terms) };
        }).filter(function (r) {
            return r.score > 0;
        }).sort(function (a, b) {
            return b.score - a.score;
        }).slice(0, 10);

        if (!matched.length) {
            $('swEmptyQ').textContent = raw;
            setTitle('No results');
            showView('empty');
            return;
        }

        var html = matched.map(function (r) {
            var p = r.page;
            return '<a href="' + p.url + '" class="sw-result-card">'
                 +   '<div class="sw-result-card__strip"><img src="assets/images/softweb-favicon.svg" alt="SOFTWEB"></div>'
                 +   '<div class="sw-result-card__body">'
                 +     '<div class="sw-result-card__meta">'
                 +       '<span class="sw-result-card__tag">' + escapeHtml(p.tag) + '</span>'
                 +       '<span class="sw-result-card__url">' + escapeHtml(p.url) + '</span>'
                 +     '</div>'
                 +     '<p class="sw-result-card__title">' + highlight(p.title, terms) + '</p>'
                 +     '<p class="sw-result-card__desc">'  + highlight(p.desc,  terms) + '</p>'
                 +   '</div>'
                 +   '<div class="sw-result-card__arrow">' + CHEVRON + '</div>'
                 + '</a>';
        }).join('');

        $('searchResults').innerHTML = html;
        setTitle(matched.length + ' result' + (matched.length !== 1 ? 's' : '') + ' for \u201C' + raw + '\u201D');
        showView('local');
    }

    // ── Google CSE (AI search) ──────────────────────────────────────────────
    window.__gcse = {
        parsetags: 'onload',
        searchCallbacks: {
            web: {
                starting: function (gname, query) { return query; },
                ready: function () {
                    setLoading(false);
                    activeIndex = -1;
                    if (lastAiQ) setTitle('Results for \u201C' + lastAiQ + '\u201D');
                }
            }
        }
    };

    function loadCse() {
        if (cseLoaded) return;
        cseLoaded = true;
        var s = document.createElement('script');
        s.async = true;
        s.src = 'https://cse.google.com/cse.js?cx=' + CSE_CX;
        document.body.appendChild(s);
    }

    function getCseElement() {
        return (window.google && google.search && google.search.cse && google.search.cse.element)
            ? google.search.cse.element.getElement(CSE_GNAME)
            : null;
    }

    // Streaming "searching" status: types out each phrase, then moves to the next
    var THINK_PHRASES = ['Understanding your question', 'Searching for the best matches', 'Reading through results', 'Putting it together'];
    var thinkToken = 0;
    var reduceMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    function startThinking() {
        var el = $('aiStatusText');
        var token = ++thinkToken;
        if (reduceMotion) { el.textContent = THINK_PHRASES[0] + '...'; return; }

        var p = 0, i = 0;
        (function type() {
            if (token !== thinkToken) return;              // stopped or restarted
            var phrase = THINK_PHRASES[p % THINK_PHRASES.length];
            if (i <= phrase.length) {
                el.textContent = phrase.slice(0, i++);
                setTimeout(type, 28);
            } else {
                setTimeout(function () { p++; i = 0; type(); }, 900);   // hold, then next phrase
            }
        })();
    }
    function stopThinking() { thinkToken++; }

    function setLoading(on) {
        clearTimeout(loadTimer);
        var wasLoading = !$('aiLoading').hidden;
        $('aiResults').classList.toggle('is-loading', on);
        $('swPanel').classList.toggle('is-searching', on);
        $('aiLoading').hidden = !on;
        if (on && !wasLoading) startThinking();
        if (!on) stopThinking();
        if (on) {
            $('aiError').hidden = true;
            // Failsafe: if Google never answers, show the error state
            loadTimer = setTimeout(function () {
                setLoading(false);
                $('aiError').hidden = false;
                lastAiQ = '';
            }, 10000);
        }
    }

    function clearAiResults() {
        lastAiQ = '';
        var el = getCseElement();
        if (el && el.clearAllResults) el.clearAllResults();
    }

    function runAiSearch(value) {
        var q = value.trim();
        if (q.length < 2) { showSuggest(); return; }
        if (q === lastAiQ) return;            // don't repeat the same query
        lastAiQ = q;
        activeIndex = -1;
        setLoading(true);
        setTitle('Searching for \u201C' + q + '\u201D');

        var tries = 0;
        (function waitForCse() {
            if (!aiMode || lastAiQ !== q) return;   // user moved on
            var el = getCseElement();
            if (el) { el.execute(q); return; }
            if (tries++ < 60) { setTimeout(waitForCse, 100); return; }
            setLoading(false);                       // script never loaded
            $('aiError').hidden = false;
            lastAiQ = '';
        })();
    }

    // ── Routing: decide what to show for the current input ─────────────────
    function route(value, immediate) {
        var q = value.trim();
        $('swClear').hidden = !value.length;

        if (q.length < 2) { showSuggest(); return; }

        if (aiMode) {
            showView('ai');
            clearTimeout(aiTimer);
            if (immediate) {
                runAiSearch(value);
            } else {
                if (!lastAiQ) setLoading(true);      // first search: show skeleton right away
                aiTimer = setTimeout(function () { runAiSearch(value); }, AI_DELAY);
            }
        } else {
            runLocalSearch(value);
        }
    }

    // Called on every keystroke by the input's oninput attribute
    window.runSiteSearch = function (value) { route(value, false); };

    // ── Mode switching ──────────────────────────────────────────────────────
    function setMode(ai) {
        var input  = $('siteSearchInput');
        var toggle = $('aiSearchToggle');
        var badge  = $('swModeBadge');

        aiMode = ai;
        toggle.classList.toggle('is-on', ai);
        toggle.setAttribute('aria-checked', ai ? 'true' : 'false');
        input.placeholder = ai ? 'Ask a question or search with AI...' : 'Search pages, services, blogs...';
        badge.className   = 'sw-panel__mode' + (ai ? ' is-ai' : '');
        badge.innerHTML   = ai ? SPARK + 'AI search' : 'Site search';

        clearTimeout(aiTimer);
        setLoading(false);
        $('aiError').hidden = true;
        lastAiQ = '';
        if (ai) loadCse();

        route(input.value, true);
        input.focus();
    }

    // ── Keyboard navigation ─────────────────────────────────────────────────
    function getNavItems() {
        var sel = aiMode ? '#aiResults .gsc-webResult.gsc-result' : '#searchResults .sw-result-card';
        return Array.prototype.slice.call(document.querySelectorAll(sel));
    }
    function itemLink(el) { return el.tagName === 'A' ? el : el.querySelector('a.gs-title, a'); }

    function setActive(items, index) {
        items.forEach(function (el) { el.classList.remove('is-active'); });
        activeIndex = index;
        if (items[index]) {
            items[index].classList.add('is-active');
            items[index].scrollIntoView({ block: 'nearest' });
        }
    }

    function closePopup() {
        var overlay = document.querySelector('#searchPopup .search-popup__overlay');
        if (overlay) overlay.click();
    }

    var input = $('siteSearchInput');

    input.addEventListener('keydown', function (e) {
        var items;
        if (e.key === 'ArrowDown' || e.key === 'ArrowUp') {
            items = getNavItems();
            if (!items.length) return;
            e.preventDefault();
            var n = activeIndex + (e.key === 'ArrowDown' ? 1 : -1);
            if (n < 0) n = items.length - 1;
            if (n >= items.length) n = 0;
            setActive(items, n);
        } else if (e.key === 'Enter') {
            e.preventDefault();
            items = getNavItems();
            var link = (activeIndex > -1 && items[activeIndex]) ? itemLink(items[activeIndex]) : null;
            if (link) link.click();
            else route(input.value, true);
        } else if (e.key === 'Escape') {
            if (input.value) { input.value = ''; route('', true); }
            else closePopup();
        }
    });

    // ── Events ──────────────────────────────────────────────────────────────
    $('aiSearchToggle').addEventListener('click', function () { setMode(!aiMode); });
    $('siteSearchBtn').addEventListener('click', function () { route(input.value, true); });
    $('swTryAi').addEventListener('click', function () { setMode(true); });

    $('swClear').addEventListener('click', function () {
        input.value = '';
        route('', true);
        input.focus();
    });

    $('swSuggest').addEventListener('click', function (e) {
        var chip = e.target.closest('.sw-chip');
        if (!chip) return;
        input.value = chip.getAttribute('data-q');
        route(input.value, true);
        input.focus();
    });

    // Reset when the popup opens/closes (keeps the chosen mode)
    document.addEventListener('click', function (e) {
        if (e.target.classList.contains('search-toggler') || e.target.closest('.search-toggler')) {
            input.value = '';
            clearTimeout(aiTimer);
            if (lastAiQ) clearAiResults();
            route('', true);
        }
    });

    // Initial state
    renderSuggest();
    showView('suggest');

})();
</script>