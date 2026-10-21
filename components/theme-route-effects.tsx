"use client";

import { usePathname } from "next/navigation";
import { useEffect, useRef } from "react";

type ThemeJQuery = (target: Window | string) => {
  triggerHandler?: (eventName: string) => void;
  selectpicker?: () => void;
};

function initializeSelectPickers() {
  const jquery = (window as unknown as { jQuery?: ThemeJQuery }).jQuery;
  jquery?.(".selectpicker").selectpicker?.();
}

export default function ThemeRouteEffects() {
  const pathname = usePathname();
  const currentPath = useRef(pathname);

  useEffect(() => {
    initializeSelectPickers();
    if (currentPath.current === pathname) return;

    currentPath.current = pathname;

    const jquery = (window as unknown as { jQuery?: ThemeJQuery }).jQuery;
    jquery?.(window).triggerHandler?.("load");
    initializeSelectPickers();
  }, [pathname]);

  useEffect(() => {
    function initializeTabs() {
      document.querySelectorAll<HTMLElement>(".tabs-box").forEach((tabsBox) => {
        const buttons = Array.from(tabsBox.querySelectorAll<HTMLElement>(".tab-buttons .tab-btn[data-tab]"));
        const panels = Array.from(tabsBox.querySelectorAll<HTMLElement>(".tabs-content .tab"));
        const activeButton = buttons.find((button) => button.classList.contains("active-btn")) ?? buttons[0];
        if (!activeButton) return;

        const activePanel = tabsBox.querySelector<HTMLElement>(activeButton.dataset.tab ?? "");
        buttons.forEach((button) => button.classList.toggle("active-btn", button === activeButton));
        panels.forEach((panel) => {
          const isActive = panel === activePanel;
          panel.classList.toggle("active-tab", isActive);
          panel.style.display = isActive ? "block" : "none";
        });
      });
    }

    function initializeAccordions() {
      document.querySelectorAll<HTMLElement>(".faq-two .insuba-accordion").forEach((group) => {
        const items = Array.from(group.querySelectorAll<HTMLElement>(".accordion"));
        const activeItem = items.find((item) => item.classList.contains("active")) ?? items[0];
        items.forEach((item) => {
          const isActive = item === activeItem;
          item.classList.toggle("active", isActive);
          const content = item.querySelector<HTMLElement>(".accordion-content");
          if (content) content.style.display = isActive ? "block" : "none";
        });
      });
    }

    initializeTabs();
    initializeAccordions();

    function handleThemeClick(event: MouseEvent) {
      if (!(event.target instanceof Element)) return;

      const tabButton = event.target.closest<HTMLElement>(".tabs-box .tab-buttons .tab-btn[data-tab]");
      if (tabButton) {
        const tabsBox = tabButton.closest(".tabs-box");
        const selector = tabButton.dataset.tab;
          const tabPanel = selector ? tabsBox?.querySelector<HTMLElement>(selector) : null;
        if (!tabsBox || !tabPanel) return;

        tabsBox.querySelectorAll(".tab-buttons .tab-btn").forEach((button) => button.classList.remove("active-btn"));
        tabsBox.querySelectorAll<HTMLElement>(".tabs-content .tab").forEach((panel) => {
          panel.classList.remove("active-tab");
          panel.style.display = "none";
        });
        tabButton.classList.add("active-btn");
        tabPanel.classList.add("active-tab");
        tabPanel.style.display = "block";
        return;
      }

      const accordionTitle = event.target.closest(".faq-two .insuba-accordion .accordion-title");
      const accordion = accordionTitle?.closest<HTMLElement>(".accordion");
      const accordionGroup = accordionTitle?.closest(".insuba-accordion");
      if (!accordion || !accordionGroup) return;

      if (accordion.classList.contains("active")) return;
      accordionGroup.querySelectorAll<HTMLElement>(".accordion").forEach((item) => {
        item.classList.remove("active");
        const content = item.querySelector<HTMLElement>(".accordion-content");
        if (content) content.style.display = "none";
      });

      accordion.classList.add("active");
      const content = accordion.querySelector<HTMLElement>(".accordion-content");
      if (content) content.style.display = "block";
    }

    document.addEventListener("click", handleThemeClick);
    return () => document.removeEventListener("click", handleThemeClick);
  }, []);

  return null;
}