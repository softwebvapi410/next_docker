import type { Metadata } from "next";
import AboutEnding from "@/components/about-ending";
import PageHeader from "@/components/page-header";
import {
  AboutSection,
  ExpertiseSection,
  FactsSection,
  FaqSection,
  TestimonialsSection,
} from "@/components/home-sections";

export const metadata: Metadata = {
  title: "About Us",
  description: "Meet Softweb Technology, a digital agency serving businesses in Vapi, Gujarat since 2005.",
};

export default function AboutUsPage() {
  return (
    <>
      <PageHeader title="About Us" breadcrumbs={[{ label: "Home", href: "/" }, { label: "About Us" }]} />
      <AboutSection />
      <FactsSection />
      <ExpertiseSection />
      <TestimonialsSection />
      <FaqSection />
      <AboutEnding />
    </>
  );
}