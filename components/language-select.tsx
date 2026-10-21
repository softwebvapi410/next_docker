"use client";

import { useEffect, useRef, useState } from "react";

declare global {
  interface Window {
    googleTranslateElementInit?: () => void;
    google?: {
      translate?: {
        TranslateElement?: new (options: { pageLanguage: string; includedLanguages: string; autoDisplay: boolean }, elementId: string) => unknown;
      };
    };
  }
}

export default function LanguageSelect() {
  const [language, setLanguage] = useState("en");
  const pendingLanguage = useRef("en");

  useEffect(() => {
    function applyLanguage(value: string) {
      const googleSelect = document.querySelector<HTMLSelectElement>(".goog-te-combo");
      if (!googleSelect) return;
      googleSelect.value = value === "en" ? "" : value;
      googleSelect.dispatchEvent(new Event("change", { bubbles: true }));
    }

    window.googleTranslateElementInit = () => {
      const TranslateElement = window.google?.translate?.TranslateElement;
      if (!TranslateElement) return;
      new TranslateElement({ pageLanguage: "en", includedLanguages: "en,hi,gu", autoDisplay: false }, "google_translate_element");
      window.setTimeout(() => applyLanguage(pendingLanguage.current), 0);
    };

    const script = document.createElement("script");
    script.src = "https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit";
    script.async = true;
    document.head.appendChild(script);

    return () => {
      script.remove();
      delete window.googleTranslateElementInit;
    };
  }, []);

  function changeLanguage(value: string) {
    setLanguage(value);
    pendingLanguage.current = value;
    const googleSelect = document.querySelector<HTMLSelectElement>(".goog-te-combo");
    if (googleSelect) {
      googleSelect.value = value === "en" ? "" : value;
      googleSelect.dispatchEvent(new Event("change", { bubbles: true }));
    }
  }

  return (
    <div className="topbar__language">
      <label className="visually-hidden" htmlFor="language-select-header">Choose language</label>
      <select className="selectpicker notranslate" id="language-select-header" value={language} onChange={(event) => changeLanguage(event.target.value)}>
        <option value="en">English</option>
        <option value="hi">हिंदी</option>
        <option value="gu">ગુજરાતી</option>
      </select>
      <div id="google_translate_element" className="google-translate-hidden" />
    </div>
  );
}