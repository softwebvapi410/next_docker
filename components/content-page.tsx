import Link from "next/link";
import PageHeader from "@/components/page-header";
import { BlogSection } from "@/components/home-sections";
import { sitePages, type SitePage } from "@/lib/site-pages";

function ServiceSidebar({ currentSlug }: { currentSlug: string }) {
  const services = sitePages.filter((page) => page.kind === "service");

  return (
    <aside className="insurance-sidebar">
      <div className="insurance-sidebar__single">
        <h2 className="insurance-sidebar__title">Our Services</h2>
        <ul className="list-unstyled insurance-sidebar__nav">
          {services.map((service) => (
            <li key={service.slug}>
              <Link href={`/${service.slug}`} aria-current={service.slug === currentSlug ? "page" : undefined}>
                <span className="insurance-sidebar__nav__icon"><i className="far fa-check-circle" /></span>
                {service.title}
              </Link>
            </li>
          ))}
        </ul>
      </div>
    </aside>
  );
}

function RelatedPages({ page }: { page: SitePage }) {
  const related = page.slug === "blogs-articles"
    ? sitePages.filter((item) => item.kind === "article")
    : page.slug === "clients-and-testimonials" || page.slug === "our-iconic-websites"
      ? sitePages.filter((item) => item.kind === "service").slice(0, 6)
      : sitePages.filter((item) => item.category === page.category && item.slug !== page.slug).slice(0, 6);

  return (
    <section className="features-one features-one--service-details">
      <div className="row gutter-y-30">
        {related.map((item, index) => (
          <div className="features-one__column col-lg-4 col-md-6" key={item.slug}>
            <article className="features-one__card">
              <div className="features-one__card__content">
                <h2 className="features-one__card__title"><Link href={`/${item.slug}`}>{item.title}</Link></h2>
                <p className="features-one__card__text">{item.description}</p>
                <Link href={`/${item.slug}`} className="features-one__card__btn" aria-label={`Read about ${item.title}`}>
                  <span className="features-one__card__btn__icon"><i className="icon-back-2" /></span>
                </Link>
              </div>
            </article>
          </div>
        ))}
        {related.length === 0 ? <div className="col-12"><p>Contact our team to learn more about this service.</p></div> : null}
      </div>
    </section>
  );
}

function ServicePage({ page }: { page: SitePage }) {
  const points = page.points ?? [
    "A clear strategy tailored to your business and audience.",
    "A responsive experience built around customer needs.",
    "Ongoing support and measurable performance improvements.",
  ];

  return (
    <section className="service-details section-space-top section-space-bottom">
      <div className="container">
        <div className="row gutter-y-40">
          <div className="col-xl-4 col-lg-5"><ServiceSidebar currentSlug={page.slug} /></div>
          <div className="col-xl-8 col-lg-7">
            <div className="service-details__thumbnail">
              {page.image ? <img src={`/assets/images/services/${page.image}`} alt={page.title} /> : <img src="/assets/images/services/digital-marketing.png" alt={page.title} />}
            </div>
          </div>
        </div>
        <div className="service-details__content">
          <div className="service-details__details">
            <h2 className="service-details__title service-details__details__title">{page.title}</h2>
            <p className="service-details__text">{page.description}</p>
          </div>
          <div className="service-details__policies">
            <div className="row gutter-y-30 align-items-center">
              <div className="col-lg-5"><div className="service-details__policies__image"><img src="/assets/images/services/digital-marketing-sm.png" alt="Softweb digital services" /></div></div>
              <div className="col-lg-7"><div className="service-details__policies__content">
                <h2 className="service-details__title service-details__policies__title">How We Help</h2>
                <p className="service-details__text service-details__policies__text">Softweb Technology combines local market knowledge, practical planning, and reliable delivery to help businesses make progress online.</p>
                <ul className="list-unstyled service-details__policies__list">{points.map((point) => <li key={point}><span className="service-details__policies__icon"><i className="fas fa-angle-double-right" /></span>{point}</li>)}</ul>
              </div></div>
            </div>
          </div>
          <RelatedPages page={page} />
          <div className="service-details__cta"><h2 className="service-details__title service-details__cta__title">Ready to discuss {page.title.toLowerCase()}?</h2><p className="service-details__text service-details__cta__text">Talk with our team about a plan tailored to your business.</p><Link href="/contact-us" className="insuba-btn"><span>Contact Softweb</span><span className="insuba-btn__icon-box"><span className="insuba-btn__icon"><i className="fas fa-arrow-right" /></span></span></Link></div>
        </div>
      </div>
    </section>
  );
}

function ArticlePage({ page }: { page: SitePage }) {
  const image = page.image ?? "blog-1.png";

  return (
    <section className="blog-details-page section-space"><div className="container"><div className="row gutter-y-60">
      <div className="col-xl-8 col-lg-7"><article className="blog-details"><div className="blog-card-three__image"><img src={`/assets/images/blog/${image}`} alt={page.title} /></div><div className="blog-details-box"><h2>{page.title}</h2><p>{page.description}</p><h3>Why this matters</h3><p>Useful digital marketing starts with a clear understanding of your customers, the questions they ask, and the information they need to make a decision. A focused approach helps your business communicate consistently and build lasting visibility.</p><h3>Build a practical plan</h3><p>Set measurable goals, select the right channels, and review performance regularly. Softweb Technology works with businesses in Vapi and across Gujarat to turn those steps into a reliable digital strategy.</p><Link className="insuba-btn" href="/contact-us"><span>Talk to our team</span><span className="insuba-btn__icon-box"><span className="insuba-btn__icon"><i className="fas fa-arrow-right" /></span></span></Link></div></article></div>
      <aside className="col-xl-4 col-lg-5"><div className="insurance-sidebar"><div className="insurance-sidebar__single"><h2 className="insurance-sidebar__title">Related Articles</h2><ul className="list-unstyled insurance-sidebar__nav">{sitePages.filter((item) => item.kind === "article" && item.slug !== page.slug).map((item) => <li key={item.slug}><Link href={`/${item.slug}`}>{item.title}</Link></li>)}</ul></div></div></aside>
    </div></div></section>
  );
}

function InfoPage({ page }: { page: SitePage }) {
  return (
    <section className="service-details section-space-top section-space-bottom"><div className="container"><div className="service-details__content"><div className="service-details__details"><h2 className="service-details__title service-details__details__title">{page.title}</h2><p className="service-details__text">{page.description}</p></div>{page.points ? <div className="service-details__policies"><div className="row gutter-y-30">{page.points.map((point, index) => <div className="features-one__column col-lg-4 col-md-6" key={point}><article className="features-one__card"><div className="features-one__card__content"><h3 className="features-one__card__title">{String(index + 1).padStart(2, "0")} &nbsp; {point}</h3><p className="features-one__card__text">Learn more about this opportunity and connect with Softweb for details.</p></div></article></div>)}</div></div> : null}<RelatedPages page={page} /><Link href={page.slug === "careers" ? "mailto:career@softwebtechnology.com" : "/contact-us"} className="insuba-btn"><span>{page.slug === "careers" ? "Send Your Resume" : "Contact Softweb"}</span></Link></div></div></section>
  );
}

export default function ContentPage({ page }: { page: SitePage }) {
  return (
    <>
      <PageHeader title={page.title} breadcrumbs={[{ label: "Home", href: "/" }, { label: page.category }, { label: page.title }]} />
      {page.slug === "blogs-articles" ? <BlogSection /> : null}
      {page.kind === "service" ? <ServicePage page={page} /> : null}
      {page.kind === "article" ? <ArticlePage page={page} /> : null}
      {page.slug !== "blogs-articles" && (page.kind === "listing" || page.kind === "info" || page.kind === "legal") ? <InfoPage page={page} /> : null}
    </>
  );
}