<div class="sidebar cus">
    <aside class="widget-area">

        <!-- Search Form -->
        <div class="sidebar__form sidebar__single wow fadeInUp" data-wow-duration="1500ms">
            <form action="javascript:void(0);" class="sidebar__search">
                <input type="text" id="recentPostSearch" placeholder="Search Posts..." />
                <button type="submit" aria-label="search submit" class="sidebar__search__icon">
                    <i class="icon-search"></i>
                </button>
            </form>
        </div>

        <!-- Recent Posts -->
        <div class="sidebar__posts-wrapper sidebar__single wow fadeInUp" data-wow-duration="1500ms">
            <h4 class="sidebar__posts-title sidebar__title">Recent Posts</h4>

            <ul class="sidebar__posts list-unstyled" id="recentPostsList">

                <li class="sidebar__posts__item">
                    <div class="sidebar__posts__image">
                        <img src="assets/images/blog/blog-1.png" alt="Digital Marketing for SMEs">
                    </div>
                    <div class="sidebar__posts__content">
                        <div class="sidebar__posts__meta">
                            <span class="sidebar__posts__meta__icon">
                                <i class="fas fa-calendar-alt"></i>
                            </span>
                            18 Mar 2024
                        </div>
                        <h4 class="sidebar__posts__title">
                            <a href="digital-marketing-is-for-sme.php">
                                How Useful Digital Marketing is for SMEs: Growth Hacks to Boost Your Business Online
                            </a>
                        </h4>
                    </div>
                </li>

                <li class="sidebar__posts__item">
                    <div class="sidebar__posts__image">
                        <img src="assets/images/blog/blog-2.png" alt="Google Local SEO for SMEs">
                    </div>
                    <div class="sidebar__posts__content">
                        <div class="sidebar__posts__meta">
                            <span class="sidebar__posts__meta__icon">
                                <i class="fas fa-calendar-alt"></i>
                            </span>
                            18 Mar 2024
                        </div>
                        <h4 class="sidebar__posts__title">
                            <a href="google-my-business-promotion.php">
                                How Useful Google Local SEO and Google My Business Promotion is for SMEs
                            </a>
                        </h4>
                    </div>
                </li>

                <li class="sidebar__posts__item">
                    <div class="sidebar__posts__image">
                        <img src="assets/images/blog/blog-3.png" alt="Google My Business vs Traditional Advertising">
                    </div>
                    <div class="sidebar__posts__content">
                        <div class="sidebar__posts__meta">
                            <span class="sidebar__posts__meta__icon">
                                <i class="fas fa-calendar-alt"></i>
                            </span>
                            18 Mar 2024
                        </div>
                        <h4 class="sidebar__posts__title">
                            <a href="gmb-vs-ta.php">
                                Google My Business Promotion vs. Traditional Advertising: Why SMEs Should Invest Smart
                            </a>
                        </h4>
                    </div>
                </li>

                <li class="sidebar__posts__item">
                    <div class="sidebar__posts__image">
                        <img src="assets/images/blog/blog-4.png" alt="Leave Digital Marketing to Professionals">
                    </div>
                    <div class="sidebar__posts__content">
                        <div class="sidebar__posts__meta">
                            <span class="sidebar__posts__meta__icon">
                                <i class="fas fa-calendar-alt"></i>
                            </span>
                            18 Mar 2024
                        </div>
                        <h4 class="sidebar__posts__title">
                            <a href="leave-digital-marketing-to-professionals.php">
                                Why SMEs Should Focus on Their Business and Leave Digital Marketing to Professionals
                            </a>
                        </h4>
                    </div>
                </li>

            </ul>

            <!-- No Results Message -->
            <p id="noResultsMessage" style="display:none; margin-top:15px;">
                No matching posts found.
            </p>
        </div>

        <!-- Tags -->
        <div class="sidebar__tags-wrapper sidebar__single wow fadeInUp" data-wow-duration="1500ms">
            <h4 class="sidebar__tags-title sidebar__title">Tags</h4>
            <div class="sidebar__tags">
                <a href="digital-marketing.php">Digital Marketing</a>
                <a href="seo.php">SEO</a>
                <a href="social-media-marketing.php">SME</a>
                <a href="fb-lead-generation.php">Lead Generation</a>
                <a href="google-ads-management.php">Google Ads</a>
                <a href="social-media-marketing.php">Social Media</a>
                <a href="graphic-design.php">Branding</a>
                <a href="web-development.php">Web Design</a>
            </div>
        </div>

    </aside>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {

    const searchInput = document.getElementById("recentPostSearch");
    const posts = document.querySelectorAll("#recentPostsList .sidebar__posts__item");
    const noResults = document.getElementById("noResultsMessage");

    searchInput.addEventListener("input", function() {

        const keyword = this.value.trim().toLowerCase();
        let visibleCount = 0;

        posts.forEach(function(post) {

            const title = post.querySelector(".sidebar__posts__title")
                .textContent
                .toLowerCase();

            if (title.includes(keyword)) {
                post.style.display = "flex";
                visibleCount++;
            } else {
                post.style.display = "none";
            }

        });

        noResults.style.display = visibleCount === 0 ? "block" : "none";
    });

});
</script>