import Link from "next/link";

type Breadcrumb = {
  label: string;
  href?: string;
};

type PageHeaderProps = {
  title: string;
  breadcrumbs: Breadcrumb[];
};

export default function PageHeader({ title, breadcrumbs }: PageHeaderProps) {
  return (
    <section className="page-header">
      <div className="page-header__bg" style={{ backgroundImage: 'url("/assets/images/backgrounds/main-slider-bg-4-4.jpg")' }} />
      <div className="container">
        <div className="page-header__content">
          <h1 className="page-header__title">{title}</h1>
          <ul className="insuba-breadcrumb list-unstyled">
            {breadcrumbs.map((breadcrumb) => (
              <li key={breadcrumb.label}>
                {breadcrumb.href ? <Link href={breadcrumb.href}>{breadcrumb.label}</Link> : <span>{breadcrumb.label}</span>}
              </li>
            ))}
          </ul>
        </div>
      </div>
      <img src="/assets/images/resources/page-header-1-1.png" alt="" className="page-header__image" />
      <img src="/assets/images/shapes/page-header-shape-1-1.png" alt="" className="page-header__shape-one" />
      <div className="page-header__shape-two" />
      <div className="page-header__shape-three" />
      <div className="page-header__shape-four" />
    </section>
  );
}