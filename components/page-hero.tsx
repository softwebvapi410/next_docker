import Link from "next/link";

type PageHeroProps = {
  eyebrow: string;
  title: React.ReactNode;
  description: string;
  image: string;
};

export default function PageHero({ eyebrow, title, description, image }: PageHeroProps) {
  return (
    <section className="hero" id="home" style={{ backgroundImage: `url("${image}")` }}>
      <div className="container hero-content">
        <p className="eyebrow">{eyebrow}</p>
        <h1>{title}</h1>
        <p className="hero-copy">{description}</p>
        <div className="hero-actions">
          <a className="button" href="mailto:info@softwebtechnology.com">Contact us <span aria-hidden="true">→</span></a>
          <Link className="button button--outline" href="/#services">Explore services</Link>
        </div>
      </div>
    </section>
  );
}