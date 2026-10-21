import type { Metadata } from "next";
import PageHeader from "@/components/page-header";
import { ContactSections } from "@/components/home-sections";

export const metadata: Metadata = {
  title: "Contact Us",
  description: "Contact Softweb Technology for web development, digital marketing, and technical support in Vapi, Gujarat.",
};

const socialLinks = [
  ["Facebook", "https://www.facebook.com/softwebindia/", "fab fa-facebook-f"],
  ["X", "https://twitter.com/softwebvapi", "fab fa-x-twitter"],
  ["Instagram", "https://www.instagram.com/softwebvapi/", "fab fa-instagram"],
  ["LinkedIn", "https://www.linkedin.com/company/softwebindia/", "fab fa-linkedin-in"],
  ["Threads", "https://www.threads.com/@softwebvapi", "fab fa-threads"],
];

export default function ContactUsPage() {
  return (
    <>
      <PageHeader title="Contact Us" breadcrumbs={[{ label: "Home", href: "/" }, { label: "Contact Us" }]} />
      <section className="section-space-top section-space-bottom">
        <div className="container">
          <div className="sec-title sec-title--two">
            <div className="sec-title__top">
              <div className="sec-title__box"><div className="sec-title__box__inner" /></div>
              <h6 className="sec-title__tagline">Contact &amp; Support</h6>
            </div>
            <h2 className="sec-title__title">Feel Free to Get in Touch</h2>
          </div>
          <div className="row gutter-y-30">
            <div className="col-lg-6 col-md-12">
              <article className="contact-one__info__item contact-one__info__item--owner" style={{ height: "100%", padding: 40, background: "#fff", borderRadius: 12, boxShadow: "0 10px 30px rgba(0,0,0,.05)", border: "1px solid #eaeaea", display: "flex", flexDirection: "column", justifyContent: "space-between" }}>
                <div>
                  <div className="contact-one__info__header" style={{ borderBottom: "2px solid #f1f1f1", paddingBottom: 15, marginBottom: 20, display: "flex", justifyContent: "space-between", alignItems: "center", flexWrap: "wrap", gap: 15 }}>
                    <div>
                      <h2 style={{ fontSize: 24, color: "#1f2226", margin: "0 0 5px", fontWeight: 700 }}>Rajen Patel</h2>
                      <span style={{ fontSize: 14, color: "#ff5e14", fontWeight: 600, textTransform: "uppercase" }}>Founder</span>
                    </div>
                    <div className="topbar__social social-links" style={{ display: "flex", gap: 8, alignItems: "center" }}>
                      {socialLinks.map(([label, href, icon]) => <a href={href} key={label} target="_blank" rel="noreferrer" aria-label={label}><span className="social-links__icon"><i className={icon} /></span></a>)}
                    </div>
                  </div>
                  <p className="contact-one__info__text" style={{ fontSize: 16, color: "#5c5e61", lineHeight: 1.6, margin: "0 0 25px" }}>Visionary founder handling core business partnerships, corporate growth strategies, talent acquisition, and business growth channels at SOFTWEB since 2005.</p>
                  <div className="contact-one__info__details" style={{ display: "flex", flexDirection: "column", gap: 15, marginBottom: 25 }}>
                    <div><span className="contact-label" style={{ fontSize: 14, color: "#94979a", fontWeight: 700, textTransform: "uppercase", display: "block", marginBottom: 4 }}>Call Anytime</span><a href="tel:+919825659566" style={{ fontSize: 16, color: "#1f2226", fontWeight: 600, display: "flex", alignItems: "center", gap: 10 }}><i className="fas fa-phone" style={{ color: "#ff5e14", width: 20 }} /> +91 98256 59566</a></div>
                    <div><span className="contact-label" style={{ fontSize: 14, color: "#94979a", fontWeight: 700, textTransform: "uppercase", display: "block", marginBottom: 4 }}>Send Email</span><a href="mailto:info@softwebtechnology.com" style={{ fontSize: 16, color: "#1f2226", fontWeight: 600, display: "flex", alignItems: "center", gap: 10 }}><i className="fas fa-envelope" style={{ color: "#ff5e14", width: 20 }} /> info@softwebtechnology.com</a></div>
                    <div><span className="contact-label" style={{ fontSize: 14, color: "#94979a", fontWeight: 700, textTransform: "uppercase", display: "block", marginBottom: 4 }}>HR / Career Enquiry</span><a href="mailto:career@softwebtechnology.com" style={{ fontSize: 16, color: "#1f2226", fontWeight: 600, display: "flex", alignItems: "center", gap: 10 }}><i className="fas fa-user-tie" style={{ color: "#ff5e14", width: 20 }} /> career@softwebtechnology.com</a></div>
                  </div>
                  <p className="contact-owner-summary" style={{ paddingTop: 25, borderTop: "1px solid #f1f1f1", fontSize: 15, color: "#5c5e61", lineHeight: 1.6 }}><strong className="cus-str">SOFTWEB Technology</strong> is Vapi&apos;s most established digital agency. For over two decades, we have helped manufacturers, SMEs, and corporate businesses grow.</p>
                </div>
              </article>
            </div>
            <div className="col-lg-6 col-md-12">
              <article className="contact-one__info__item contact-one__info__item--support" style={{ height: "100%", padding: 40, background: "#fff", borderRadius: 12, boxShadow: "0 10px 30px rgba(0,0,0,.05)", border: "1px solid #eaeaea", display: "flex", flexDirection: "column", justifyContent: "space-between" }}>
                <div>
                  <div className="contact-one__info__header" style={{ borderBottom: "2px solid #f1f1f1", paddingBottom: 15, marginBottom: 20 }}>
                    <h2 style={{ fontSize: 24, color: "#1f2226", margin: "0 0 5px", fontWeight: 700 }}>Quick Technical Support</h2>
                    <span style={{ fontSize: 14, color: "#ff5e14", fontWeight: 600, textTransform: "uppercase" }}>Webmaster &amp; IT Support</span>
                  </div>
                  <p className="contact-one__info__text" style={{ fontSize: 16, color: "#5c5e61", lineHeight: 1.6, margin: "0 0 20px" }}>For website issues, email problems, or other technical support, please contact our support team.</p>
                  <div className="contact-one__info__details" style={{ display: "flex", flexDirection: "column", gap: 15, marginBottom: 25 }}>
                    <div><span className="contact-label" style={{ fontSize: 14, color: "#94979a", fontWeight: 700, textTransform: "uppercase", display: "block", marginBottom: 4 }}>Email</span><a href="mailto:webmaster@softwebtechnology.com" style={{ fontSize: 16, color: "#1f2226", fontWeight: 600, display: "flex", alignItems: "center", gap: 10 }}><i className="fas fa-tools" style={{ color: "#ff5e14", width: 20 }} /> webmaster@softwebtechnology.com</a><small style={{ color: "#74777a", fontSize: 12, display: "block", marginTop: 2, fontStyle: "italic" }}>(Please send emails only from your company&apos;s official email ID)</small></div>
                    <div><span className="contact-label" style={{ fontSize: 14, color: "#94979a", fontWeight: 700, textTransform: "uppercase", display: "block", marginBottom: 4 }}>Call our Web Master - SOFTWEB</span><a href="tel:+919081255511" style={{ fontSize: 16, color: "#1f2226", fontWeight: 600, display: "flex", alignItems: "center", gap: 10 }}><i className="fas fa-phone-alt" style={{ color: "#ff5e14", width: 20 }} /> +91 90812 55511 (Mobile)</a><a href="tel:+912602964477" style={{ fontSize: 16, color: "#1f2226", fontWeight: 600, display: "flex", alignItems: "center", gap: 10 }}><i className="fas fa-phone" style={{ color: "#ff5e14", width: 20 }} /> 0260-2964477 (Tel)</a></div>
                    <div><span className="contact-label" style={{ fontSize: 14, color: "#94979a", fontWeight: 700, textTransform: "uppercase", display: "block", marginBottom: 4 }}>Support Hours</span><span style={{ fontSize: 16, color: "#1f2226", fontWeight: 500, display: "flex", alignItems: "center", gap: 10 }}><i className="far fa-clock" style={{ color: "#ff5e14", width: 20 }} /> Monday - Saturday | 9:00 AM - 4:30 PM</span></div>
                  </div>
                </div>
                <div className="contact-office" style={{ paddingTop: 15, borderTop: "1px solid #f1f1f1" }}><span className="contact-label" style={{ fontSize: 14, color: "#94979a", fontWeight: 700, textTransform: "uppercase", display: "block", marginBottom: 4 }}>Visit Now / Corporate Office</span><p style={{ fontSize: 16, color: "#1f2226", fontWeight: 600, lineHeight: 1.5, margin: 0 }}><i className="fas fa-map-marker-alt" style={{ color: "#ff5e14", marginRight: 10 }} /> Office No. 410, 3rd Floor Tirupati Tower, GIDC Char Rasta, Vapi 396191, Gujarat</p></div>
              </article>
            </div>
          </div>
        </div>
      </section>
      <ContactSections />
    </>
  );
}