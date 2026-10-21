"use client";

import Link from "next/link";
import { useDeferredValue, useEffect, useRef, useState } from "react";
import { sitePages } from "@/lib/site-pages";

const searchablePages = [
  { title: "Home", href: "/", description: "Softweb Technology home page" },
  { title: "About Us", href: "/about-us", description: "Learn about Softweb Technology" },
  { title: "Contact Us", href: "/contact-us", description: "Contact and support" },
  { title: "On-Page SEO", href: "/on-page-seo", description: "On-Page SEO services" },
  ...sitePages.map((page) => ({
    title: page.title,
    href: `/${page.slug}`,
    description: page.description,
  })),
];

export default function SiteSearch() {
  const [isOpen, setIsOpen] = useState(false);
  const [query, setQuery] = useState("");
  const searchInput = useRef<HTMLInputElement>(null);
  const deferredQuery = useDeferredValue(query.trim().toLowerCase());
  const results = deferredQuery
    ? searchablePages.filter((page) => `${page.title} ${page.description}`.toLowerCase().includes(deferredQuery)).slice(0, 8)
    : [];

  useEffect(() => {
    if (!isOpen) return;
    searchInput.current?.focus();
    function closeOnEscape(event: KeyboardEvent) {
      if (event.key === "Escape") setIsOpen(false);
    }
    document.addEventListener("keydown", closeOnEscape);
    return () => document.removeEventListener("keydown", closeOnEscape);
  }, [isOpen]);

  function closeSearch() {
    setIsOpen(false);
    setQuery("");
  }

  return (
    <>
      <button className="main-header__search" type="button" onClick={() => setIsOpen(true)} aria-label="Open site search" title="Search">
        <span className="main-header__search__icon"><i className="icon-search" aria-hidden="true" /></span>
      </button>
      <div className={`search-popup${isOpen ? " active" : ""}`} aria-hidden={!isOpen}>
        <button className="search-popup__overlay" type="button" onClick={closeSearch} aria-label="Close search" tabIndex={isOpen ? 0 : -1} />
        <div className="search-popup__content" role="dialog" aria-modal="true" aria-label="Search this site" inert={!isOpen}>
          <form className="search-popup__form" onSubmit={(event) => event.preventDefault()}>
            <input ref={searchInput} type="search" value={query} onChange={(event) => setQuery(event.target.value)} placeholder="Search pages, services, blogs..." aria-label="Search pages, services, and blogs" />
            <button className="insuba-btn insuba-btn--base" type="submit" aria-label="Search"><i className="icon-search" aria-hidden="true" /></button>
          </form>
          <div className="site-search__results" aria-live="polite">
            <p className="site-search__heading">{deferredQuery ? `${results.length} results` : "Popular pages"}</p>
            {(deferredQuery ? results : searchablePages.slice(0, 5)).map((page) => (
              <Link href={page.href} className="site-search__result" key={page.href} onClick={closeSearch}>
                <span>{page.title}</span><small>{page.description}</small>
              </Link>
            ))}
            {deferredQuery && results.length === 0 ? <p className="site-search__empty">No matching pages. Try another search.</p> : null}
          </div>
        </div>
      </div>
    </>
  );
}