import Image from "next/image";
import Link from "next/link";

type ServiceCardProps = {
  number: string;
  title: string;
  description: string;
  image: string;
  href: string;
};

export default function ServiceCard({ number, title, description, image, href }: ServiceCardProps) {
  return (
    <article className="service-card">
      <div className="service-card__image">
        <Image src={image} alt="" fill sizes="(max-width: 680px) 100vw, (max-width: 900px) 50vw, 33vw" style={{ objectFit: "cover" }} />
      </div>
      <div className="service-card__body">
        <span className="service-card__number">{number}</span>
        <h3>{title}</h3>
        <p>{description}</p>
        <Link className="text-link" href={href}>Learn more <span aria-hidden="true">→</span></Link>
      </div>
    </article>
  );
}