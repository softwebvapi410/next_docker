import type { Metadata } from "next";
import { notFound } from "next/navigation";
import ContentPage from "@/components/content-page";
import { sitePages } from "@/lib/site-pages";

type PageProps = {
  params: Promise<{ slug: string }>;
};

export function generateStaticParams() {
  return sitePages.map(({ slug }) => ({ slug }));
}

export async function generateMetadata({ params }: PageProps): Promise<Metadata> {
  const { slug } = await params;
  const page = sitePages.find((item) => item.slug === slug);

  return page
    ? { title: page.title, description: page.description }
    : { title: "Page Not Found" };
}

export default async function SitePage({ params }: PageProps) {
  const { slug } = await params;
  const page = sitePages.find((item) => item.slug === slug);

  if (!page) notFound();

  return <ContentPage page={page} />;
}