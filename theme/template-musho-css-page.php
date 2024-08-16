<?php
/**

 * Template Name: Musho-css-test-Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 *
 * @package Megan_tw
 */

// get_header();
?>

	<section id="primary">
		<main id="main" >

<style>
.therapy-section { background-color: #fff; position: relative; display: flex; flex-direction: column; justify-content: start; }
.header { background-color: #e1ebdc; position: absolute; z-index: 1; display: flex; width: 100%; align-items: center; overflow: hidden; color: #40513b; justify-content: space-between; left: 0; right: 0; top: 0; padding: 8px; font: 400 12px Inter, sans-serif; }
@media (max-width: 991px) { .header { max-width: 100%; } }
.brand { align-self: stretch; z-index: 0; display: flex; align-items: center; gap: 8px; font-size: 16px; justify-content: start; margin: auto 0; padding: 0 8px; }
.brand-logo { aspect-ratio: 1; object-fit: fill; object-position: center; width: 24px; align-self: stretch; margin: auto 0; width:100%;}
.brand-name { align-self: stretch; margin: auto 0; }
.contact-button { border-radius: 8px; align-self: stretch; z-index: 0; display: flex; min-height: 48px; align-items: center; gap: 8px; text-align: center; line-height: 1.6; justify-content: center; margin: auto 0; padding: 15px 40px; border: 1px solid #40513b; }
@media (max-width: 991px) { .contact-button { padding: 0 20px; } }
.contact-text { align-self: stretch; gap: 16px; margin: auto 0; padding: 0 8px; }
.nav-links { align-self: start; position: absolute; z-index: 0; display: flex; min-width: 240px; min-height: 38px; align-items: center; gap: 16px; white-space: nowrap; line-height: 1.6; justify-content: start; left: 50%; top: 50%; transform: translate(-50%, -50%); height: 38px; padding: 0 16px; }
@media (max-width: 991px) { .nav-links { white-space: initial; } }
.nav-link { align-self: stretch; gap: 8px; height: 100%; padding: 0 16px; }
@media (max-width: 991px) { .nav-link { white-space: initial; } }
.hero-section { position: relative; z-index: 0; display: flex; min-height: 712px; width: 100%; align-items: flex-start; gap: 48px; font-family: Inter, sans-serif; text-align: center; justify-content: center; flex-wrap: wrap; padding: 0 16px; }
@media (max-width: 991px) { .hero-section { max-width: 100%; } }
.hero-image { aspect-ratio: 1.81; object-fit: contain; object-position: center; width: 1280px; align-self: start; position: absolute; z-index: 0; left: 0; right: 0; top: 3px; bottom: 4px; }
@media (max-width: 991px) { .hero-image { max-width: 100%; } }
.hero-content { border-radius: 16px; background-color: #fff; z-index: 0; display: flex; min-width: 240px; flex-direction: column; align-items: center; justify-content: center; flex: 1; flex-basis: 0%; max-width: 800px; margin: auto 0; padding: 32px; }
@media (max-width: 991px) { .hero-content { max-width: 100%; padding: 0 20px; } }
.hero-text { display: flex; width: 572px; max-width: 572px; flex-direction: column; justify-content: start; }
@media (max-width: 991px) { .hero-text { max-width: 100%; } }
.hero-title { color: #18181b; font-size: 51px; font-weight: 700; line-height: 1.2; letter-spacing: -1.02px; }
@media (max-width: 991px) { .hero-title { max-width: 100%; font-size: 40px; } }
.hero-subtitle { color: #71717a; font-size: 22px; font-weight: 400; line-height: 29px; margin-top: 16px; }
@media (max-width: 991px) { .hero-subtitle { max-width: 100%; } }
.cta-buttons { display: flex; margin-top: 32px; width: 420px; max-width: 420px; align-items: center; gap: 16px; font-size: 14px; font-weight: 600; justify-content: start; flex-wrap: wrap; }
.primary-cta { border-radius: 4px; background-color: #815cce; align-self: stretch; display: flex; min-width: 140px; align-items: center; gap: 4px; color: #fafafa; justify-content: center; flex: 1; flex-basis: 0%; margin: auto 0; padding: 16px 24px; }
@media (max-width: 991px) { .primary-cta { padding: 0 20px; } }
.cta-text { align-self: stretch; gap: 8px; margin: auto 0; padding: 0 4px; }
.secondary-cta { border-radius: 4px; align-self: stretch; display: flex; min-width: 140px; align-items: center; gap: 4px; color: #18181b; justify-content: center; flex: 1; flex-basis: 0%; margin: auto 0; padding: 16px 24px; border: 1px solid #a1a1aa; }
@media (max-width: 991px) { .secondary-cta { padding: 0 20px; } }
.about-section { background-color: #e1ebdc; z-index: 0; display: flex; width: 100%; flex-direction: column; align-items: center; justify-content: center; padding: 120px 24px; }
@media (max-width: 991px) { .about-section { max-width: 100%; padding: 100px 20px; } }
.about-content { display: flex; width: 100%; max-width: 1160px; flex-direction: column; align-items: center; justify-content: center; }
@media (max-width: 991px) { .about-content { max-width: 100%; } }
.profile-image { aspect-ratio: 1; object-fit: contain; object-position: center; width: 300px; border-radius: 300px; min-height: 300px; max-width: 100%; gap: 8px; }
.about-text { display: flex; min-width: 280px; margin-top: 40px; width: 100%; max-width: 1200px; align-items: start; gap: 40px; justify-content: start; flex-wrap: wrap; }
@media (max-width: 991px) { .about-text { max-width: 100%; } }
.bio-container { display: flex; min-width: 280px; flex-direction: column; align-items: start; justify-content: start; flex: 1; flex-basis: 0%; max-width: 1200px; }
@media (max-width: 991px) { .bio-container { max-width: 100%; } }
.bio { align-self: stretch; color: #40513b; font: 800 36px/47px Inter, sans-serif; }
@media (max-width: 991px) { .bio { max-width: 100%; } }
.social-links { display: flex; margin-top: 32px; align-items: start; gap: 16px; justify-content: start; }
.social-icon { aspect-ratio: 1; object-fit: contain; object-position: center; width: 24px; }
.contact-cta { border-radius: 8px; background-color: #815cce; display: flex; margin-top: 32px; min-height: 57px; width: 360px; max-width: 360px; align-items: center; gap: 4px; color: #fff; text-align: center; justify-content: center; padding: 11px 24px; font: 400 18px Inter, sans-serif; }
@media (max-width: 991px) { .contact-cta { padding: 0 20px; } }
.cta-text-2 { align-self: stretch; gap: 8px; margin: auto 0; padding: 4px; }
.experience-list { display: flex; min-width: 280px; flex-direction: column; justify-content: start; flex: 1; flex-basis: 0%; font: 400 18px Inter, sans-serif; }
@media (max-width: 991px) { .experience-list { max-width: 100%; } }
.experience-item { display: flex; width: 100%; align-items: center; justify-content: start; flex-wrap: wrap; padding: 24px 0; }
@media (max-width: 991px) { .experience-item { max-width: 100%; } }
.experience-year { min-width: 62px; color: #40513b; align-self: stretch; margin: auto 0; }
.experience-description { align-self: stretch; min-width: 220px; color: #6c8f70; line-height: 27px; flex: 1; margin: auto 0; }
@media (max-width: 991px) { .experience-description { max-width: 100%; } }
.mission-section { background-color: #e1ebdc; z-index: 0; display: flex; width: 100%; flex-direction: column; align-items: center; text-align: center; justify-content: center; padding: 80px 32px; font: 800 36px Inter, sans-serif; }
@media (max-width: 991px) { .mission-section { max-width: 100%; padding: 0 20px; } }
.mission-content { display: flex; width: 100%; max-width: 1440px; align-items: center; gap: 48px; justify-content: center; flex-wrap: wrap; }
@media (max-width: 991px) { .mission-content { max-width: 100%; } }
.mission-text { align-self: stretch; display: flex; min-width: 280px; flex-direction: column; justify-content: start; flex: 1; flex-basis: 0%; max-width: 960px; margin: auto 0; }
@media (max-width: 991px) { .mission-text { max-width: 100%; } }
.mission-heading { color: #a479fd; line-height: 1.3; }
@media (max-width: 991px) { .mission-heading { max-width: 100%; } }
.mission-description { color: #6c8f70; line-height: 47px; margin-top: 8px; }
@media (max-width: 991px) { .mission-description { max-width: 100%; } }
.mission-image { aspect-ratio: 0.81; object-fit: contain; object-position: center; width: 100%; border-radius: 32px; align-self: stretch; min-width: 320px; min-height: 720px; flex: 1; flex-basis: 0%; margin: auto 0; }
@media (max-width: 991px) { .mission-image { max-width: 100%; } }
.testimonial-section { background-color: #e1ebdc; z-index: 0; display: flex; width: 100%; flex-direction: column; overflow: hidden; font-family: Inter, sans-serif; font-weight: 400; justify-content: start; padding: 88px 64px; }
@media (max-width: 991px) { .testimonial-section { max-width: 100%; padding: 0 20px; } }
.testimonial-quote { max-width: 720px; align-self: center; color: #40513b; text-align: center; font-size: 28px; line-height: 39px; width: 720px; }
@media (max-width: 991px) { .testimonial-quote { max-width: 100%; } }
.testimonial-author { display: flex; min-width: 120px; margin-top: 32px; width: 100%; align-items: center; gap: 16px; font-size: 16px; justify-content: center; flex-wrap: wrap; }
@media (max-width: 991px) { .testimonial-author { max-width: 100%; } }
.author-image { aspect-ratio: 1; object-fit: contain; object-position: center; width: 56px; border-radius: 50%; align-self: stretch; margin: auto 0; }
.author-info { align-self: stretch; display: flex; flex-direction: column; justify-content: start; margin: auto 0; }
.author-name { color: #40513b; }
.author-title { color: #6c8f70; }
.faq-section { background-color: #e1ebdc; z-index: 0; display: flex; width: 100%; flex-direction: column; overflow: hidden; align-items: center; font-family: Inter, sans-serif; justify-content: center; padding: 120px 32px; }
@media (max-width: 991px) { .faq-section { max-width: 100%; padding: 100px 20px; } }
.faq-container { display: flex; width: 800px; max-width: 800px; flex-direction: column; justify-content: start; }
@media (max-width: 991px) { .faq-container { max-width: 100%; } }
.faq-header { display: flex; width: 100%; flex-direction: column; justify-content: start; }
@media (max-width: 991px) { .faq-header { max-width: 100%; } }
.faq-title { color: #40513b; font-size: 56px; font-weight: 800; line-height: 1.2; }
@media (max-width: 991px) { .faq-title { max-width: 100%; font-size: 40px; } }
.faq-subtitle { color: #6c8f70; font-size: 18px; font-weight: 400; margin-top: 24px; }
@media (max-width: 991px) { .faq-subtitle { max-width: 100%; } }
.faq-list { border-radius: 16px; background-color: #b9d8a9; display: flex; margin-top: 72px; width: 100%; flex-direction: column; font-size: 18px; color: #40513b; font-weight: 400; justify-content: start; padding: 16px 32px; }
<FILE path="megan-gredesky-therapy-section.html">
@media (max-width: 991px) { .faq-list { max-width: 100%; margin-top: 40px; padding: 0 20px; } }
.faq-item { display: flex; min-width: 280px; height: 65px; width: 100%; flex-direction: column; justify-content: start; }
@media (max-width: 991px) { .faq-item { max-width: 100%; } }
.faq-question { display: flex; width: 100%; align-items: center; gap: 12px; overflow: hidden; justify-content: space-between; flex-wrap: wrap; padding: 20px 0; }
@media (max-width: 991px) { .faq-question { max-width: 100%; } }
.question-text { align-self: stretch; flex: 1; flex-basis: 0%; margin: auto 0; }
@media (max-width: 991px) { .question-text { max-width: 100%; } }
.toggle-icon { width: 24px; height: 24px; }
.more-questions { display: flex; margin-top: 72px; width: 100%; flex-direction: column; justify-content: center; }
@media (max-width: 991px) { .more-questions { max-width: 100%; margin-top: 40px; } }
.more-questions-text { display: flex; width: 100%; flex-direction: column; justify-content: start; }
@media (max-width: 991px) { .more-questions-text { max-width: 100%; } }
.more-questions-heading { color: #40513b; font-size: 36px; font-weight: 800; line-height: 1.3; }
@media (max-width: 991px) { .more-questions-heading { max-width: 100%; } }
.more-questions-subheading { color: #6c8f70; font-size: 18px; font-weight: 400; margin-top: 16px; }
@media (max-width: 991px) { .more-questions-subheading { max-width: 100%; } }
.contact-button { border-radius: 4px; background-color: #e1ebdc; align-self: start; display: flex; margin-top: 24px; align-items: center; gap: 4px; font-size: 14px; color: #455740; font-weight: 500; white-space: nowrap; line-height: 24px; justify-content: center; padding: 8px 16px; border: 1px solid #6c8f70; }
@media (max-width: 991px) { .contact-button { white-space: initial; } }
.contact-button-text { align-self: stretch; gap: 8px; margin: auto 0; padding: 0 4px; }
@media (max-width: 991px) { .contact-button-text { white-space: initial; } }
.cta-section { background-color: #fff; z-index: 0; display: flex; width: 100%; align-items: start; gap: 40px 48px; justify-content: center; padding: 104px 24px 64px; }
@media (max-width: 991px) { .cta-section { max-width: 100%; padding: 100px 20px 0; } }
.cta-wrapper { display: flex; min-width: 240px; width: 100%; max-width: 1200px; align-items: center; gap: 48px; justify-content: center; flex-wrap: wrap; flex: 1; flex-basis: 0%; }
@media (max-width: 991px) { .cta-wrapper { max-width: 100%; } }
.cta-image-container { border-radius: 16px; align-self: stretch; display: flex; min-width: 280px; min-height: 704px; gap: 8px; overflow: hidden; justify-content: center; flex: 1; flex-basis: 0%; margin: auto 0; }
@media (max-width: 991px) { .cta-image-container { max-width: 100%; } }
.cta-image { aspect-ratio: 0.82; object-fit: contain; object-position: center; width: 100%; border-radius: 16px; min-width: 240px; flex: 1; flex-basis: 0%; }
@media (max-width: 991px) { .cta-image { max-width: 100%; } }
.cta-content { align-self: stretch; display: flex; min-width: 280px; flex-direction: column; font-family: Inter, sans-serif; justify-content: center; flex: 1; flex-basis: 0%; max-width: 720px; margin: auto 0; }
@media (max-width: 991px) { .cta-content { max-width: 100%; } }
.cta-text { display: flex; width: 100%; flex-direction: column; justify-content: center; }
@media (max-width: 991px) { .cta-text { max-width: 100%; } }
.cta-heading { color: #18181b; font-size: 48px; font-weight: 700; line-height: 52px; letter-spacing: -0.48px; }
@media (max-width: 991px) { .cta-heading { max-width: 100%; font-size: 40px; line-height: 48px; } }
.cta-subheading { color: #71717a; font-size: 22px; font-weight: 400; line-height: 31px; margin-top: 16px; }
@media (max-width: 991px) { .cta-subheading { max-width: 100%; } }
.cta-button { border-radius: 4px; background-color: #6366f1; display: flex; margin-top: 40px; min-height: 57px; width: 360px; max-width: 360px; align-items: center; gap: 4px; font-size: 18px; color: #fafafa; font-weight: 600; text-align: center; justify-content: center; padding: 11px 24px; }
@media (max-width: 991px) { .cta-button { padding: 0 20px; } }
.cta-button-text { align-self: stretch; gap: 8px; margin: auto 0; padding: 4px; }
.footer { background-color: #455740; z-index: 0; display: flex; width: 100%; align-items: start; font-family: Inter, sans-serif; color: #eaf1e2; font-weight: 400; justify-content: space-between; padding: 64px 32px; }
@media (max-width: 991px) { .footer { max-width: 100%; padding: 0 20px; } }
.footer-content { display: flex; min-width: 240px; width: 100%; max-width: 1200px; align-items: start; gap: 56px 0px; justify-content: space-between; flex-wrap: wrap; flex: 1; flex-basis: 0%; }
@media (max-width: 991px) { .footer-content { max-width: 100%; } }
.footer-brand { display: flex; min-width: 248px; flex-direction: column; justify-content: start; flex: 1; flex-basis: 0%; }
@media (max-width: 991px) { .footer-brand { max-width: 100%; } }
.footer-logo { align-self: start; display: flex; align-items: center; gap: 8px; font-size: 14px; line-height: 1.6; justify-content: center; }
.footer-logo-image { aspect-ratio: 1; object-fit: contain; object-position: center; width: 32px; align-self: stretch; margin: auto 0; }
.footer-tagline { font-size: 18px; margin-top: 24px; }
.footer-links { display: flex; min-width: 280px; align-items: start; gap: 40px; font-size: 14px; white-space: nowrap; line-height: 1.6; justify-content: end; flex-wrap: wrap; flex: 1; flex-basis: 0%; }
@media (max-width: 991px) { .footer-links { max-width: 100%; white-space: initial; } }
.footer-link-group { display: flex; min-width: 108px; flex-direction: column; justify-content: start; flex: 1; flex-basis: 0%; }
@media (max-width: 991px) { .footer-link-group { white-space: initial; } }
.footer-link { margin-top: 16px; }
</style>

<section class="therapy-section">
  <header class="header">
    <div class="brand">
      <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/cb4851c4f1dc9bb2badf3680715ddca0b0333e40a4b1de7c8947cbd5630890f0?placeholderIfAbsent=true&apiKey=dcee793b309f4f2986da660c06df29ee" alt="Brand Logo" class="brand-logo">
      <span class="brand-name">Megan Gredesky</span>
    </div>
    <div class="contact-button">
      <span class="contact-text">Contact Megan</span>
    </div>
    <nav class="nav-links">
      <a href="#" class="nav-link">Home</a>
      <a href="#" class="nav-link">About</a>
      <a href="#" class="nav-link">Services</a>
    </nav>
  </header>

  <section class="hero-section">
    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/8b551726b2269ac15e8b1961bbf7035e22b8c70227e91659dc13089e06348dbe?placeholderIfAbsent=true&apiKey=dcee793b309f4f2986da660c06df29ee" alt="Hero Background" class="hero-image">
    <div class="hero-content">
      <div class="hero-text">
        <h1 class="hero-title">Megan Gredesky, LMFT</h1>
        <p class="hero-subtitle">Specializing in Brainspotting, Grief Recovery, and Fertility Counseling in Oakland, California</p>
      </div>
      <div class="cta-buttons">
        <a href="#" class="primary-cta">
          <span class="cta-text">Schedule Now</span>
        </a>
        <a href="#" class="secondary-cta">
          <span class="cta-text">Learn More</span>
        </a>
      </div>
    </div>
  </section>

  <section class="about-section">
    <div class="about-content">
      <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/302d9910ee70622b8a5d4ce1f97393cfce809cb6802bd9d635b8a729cdefdbbb?placeholderIfAbsent=true&apiKey=dcee793b309f4f2986da660c06df29ee" alt="Megan Gredesky" class="profile-image">
      <div class="about-text">
        <div class="bio-container">
          <p class="bio">Megan Gredesky is a California Licensed Marriage and Family Therapist with over a decade of experience. She specializes in Brainspotting, Grief Recovery Method, and Fertility/IVF counseling. Megan is dedicated to helping individuals and families navigate their emotional journeys.</p>
          <div class="social-links">
            <a href="#" aria-label="Facebook"><img src="https://cdn.builder.io/api/v1/image/assets/TEMP/6e967e56f974b9c68179d513b9b176b08cb3517794b17ba1fb63763432e836af?placeholderIfAbsent=true&apiKey=dcee793b309f4f2986da660c06df29ee" alt="Facebook" class="social-icon"></a>
            <a href="#" aria-label="Twitter"><img src="https://cdn.builder.io/api/v1/image/assets/TEMP/dc6deb01ed744cd8bb1556cc5f3a47b1e2b0c40b51c3ccb36cfdc02073012bca?placeholderIfAbsent=true&apiKey=dcee793b309f4f2986da660c06df29ee" alt="Twitter" class="social-icon"></a>
            <a href="#" aria-label="LinkedIn"><img src="https://cdn.builder.io/api/v1/image/assets/TEMP/824b865144ce89114b5cc96de6e6d4d2732512f32a15f9db2391d99bd16ec075?placeholderIfAbsent=true&apiKey=dcee793b309f4f2986da660c06df29ee" alt="LinkedIn" class="social-icon"></a>
          </div>
          <a href="#" class="contact-cta">
            <span class="cta-text-2">Contact Me</span>
          </a>
        </div>
        <div class="experience-list">
          <div class="experience-item">
            <span class="experience-year">2014</span>
            <p class="experience-description">Started private practice focusing on family therapy and grief counseling.</p>
          </div>
          <div class="experience-item">
            <span class="experience-year">2014</span>
            <p class="experience-description">Certified in Brainspotting therapy to aid trauma recovery.</p>
          </div>
          <div class="experience-item">
            <span class="experience-year">2014</span>
            <p class="experience-description">Began offering specialized counseling for fertility and IVF challenges.</p>
          </div>
          <div class="experience-item">
            <span class="experience-year">2014</span>
            <p class="experience-description">Developed workshops for grief recovery and emotional resilience.</p>
          </div>
          <div class="experience-item">
            <span class="experience-year">2014</span>
            <p class="experience-description">Expanded practice to include online therapy sessions.</p>
          </div>
          <div class="experience-item">
            <span class="experience-year">2014</span>
            <p class="experience-description">Joined professional associations for continuous learning and networking.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="mission-section">
    <div class="mission-content">
      <div class="mission-text">
        <h2 class="mission-heading">Our Mission</h2>
        <p class="mission-description">To provide compassionate and effective therapy to individuals and families, helping them heal and thrive through specialized therapeutic methods.</p>
      </div>
      <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/6652c214c32d6792448bf997bf87f0845f25577b9f2f5144344170ed8be0ef1c?placeholderIfAbsent=true&apiKey=dcee793b309f4f2986da660c06df29ee" alt="Mission Image" class="mission-image">
    </div>
  </section>

  <section class="testimonial-section">
    <blockquote class="testimonial-quote">"Megan's expertise in Brainspotting and grief recovery has been life-changing for me. Her compassionate approach made all the difference."</blockquote>
    <div class="testimonial-author">
      <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/82d97789f30cfbf3ace81b04efc1020c9ec268dbf923632523880259cd76382d?placeholderIfAbsent=true&apiKey=dcee793b309f4f2986da660c06df29ee" alt="Jane Doe" class="author-image">
      <div class="author-info">
        <span class="author-name">Jane Doe</span>
        <span class="author-title">Client, Private Practice</span>
      </div>
    </div>
  </section>

  <section class="faq-section">
    <div class="faq-container">
      <div class="faq-header">
        <h2 class="faq-title">FAQs</h2>
        <p class="faq-subtitle">Find answers to common questions about our services and therapeutic approaches.</p>
      </div>
      <div class="faq-list">
        <div class="faq-item">
          <div class="faq-question">
            <span class="question-text">What is Brainspotting?</span>
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/9bba74a7edf3208cd70ae80f769a3e1b73293c9b94e7dda82c684e34227a6e80?placeholderIfAbsent=true&apiKey=dcee793b309f4f2986da660c06df29ee" alt="Toggle" class="toggle-icon">
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            <span class="question-text">How does Grief Recovery Method work?</span>
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/9bba74a7edf3208cd70ae80f769a3e1b73293c9b94e7dda82c684e34227a6e80?placeholderIfAbsent=true&apiKey=dcee793b309f4f2986da660c06df29ee" alt="Toggle" class="toggle-icon">
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            <span class="question-text">What can I expect from fertility counseling?</span>
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/9bba74a7edf3208cd70ae80f769a3e1b73293c9b94e7dda82c684e34227a6e80?placeholderIfAbsent=true&apiKey=dcee793b309f4f2986da660c06df29ee" alt="Toggle" class="toggle-icon">
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            <span class="question-text">Do you offer online sessions?</span>
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/9bba74a7edf3208cd70ae80f769a3e1b73293c9b94e7dda82c684e34227a6e80?placeholderIfAbsent=true&apiKey=dcee793b309f4f2986da660c06df29ee" alt="Toggle" class="toggle-icon">
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            <span class="question-text">How do I schedule an appointment?</span>
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/9bba74a7edf3208cd70ae80f769a3e1b73293c9b94e7dda82c684e34227a6e80?placeholderIfAbsent=true&apiKey=dcee793b309f4f2986da660c06df29ee" alt="Toggle" class="toggle-icon">
          </div>
        </div>
      </div>
      <div class="more-questions">
        <div class="more-questions-text">
          <h3 class="more-questions-heading">Still have a question?</h3>
          <p class="more-questions-subheading">Feel free to reach out to us for any additional information.</p>
        </div>
        <a href="#" class="contact-button">
          <span class="contact-button-text">Contact</span>
        </a>
      </div>
    </div>
  </section>

  <section class="cta-section">
    <div class="cta-wrapper">
      <div class="cta-image-container">
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/be0b4ae5283d78ead43e76e96bf2f9421bbc43df9c580c2daf50a30de4bcd10e?placeholderIfAbsent=true&apiKey=dcee793b309f4f2986da660c06df29ee" alt="Empowering Emotional Wellness" class="cta-image">
      </div>
      <div class="cta-content">
        <div class="cta-text">
          <h2 class="cta-heading">Empowering Emotional Wellness and Healing</h2>
          <p class="cta-subheading">Specialized Therapy for Brainspotting, Grief, and Fertility Challenges</p>
        </div>
        <a href="#" class="cta-button">
          <span class="cta-button-text">Get Started Today</span>
        </a>
      </div>
    </div>
  </section>

  <footer class="footer">
    <div class="footer-content">
      <div class="footer-brand">
        <div class="footer-logo">
          <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/62f6c22cc7b6a804e023b30b886c8edc351a1a8d4390dcc62bb49a7445acbc24?placeholderIfAbsent=true&apiKey=dcee793b309f4f2986da660c06df29ee" alt="Megan Gredesky Logo" class="footer-logo-image">
          <span class="brand-name">Megan Gredesky</span>
        </div>
        <p class="footer-tagline">Healing Through Therapy</p>
      </div>
      <nav class="footer-links">
        <div class="footer-link-group">
          <h4>Company</h4>
          <a href="#" class="footer-link">About</a>
          <a href="#" class="footer-link">Careers</a>
          <a href="#" class="footer-link">Newsroom</a>
        </div>
        <div class="footer-link-group">
          <h4>Services</h4>
          <a href="#" class="footer-link">Therapy</a>
          <a href="#" class="footer-link">Workshops</a>
          <a href="#" class="footer-link">Resources</a>
        </div>
        <div class="footer-link-group">
          <h4>Social</h4>
          <a href="#" class="footer-link">Twitter</a>
          <a href="#" class="footer-link">Instagram</a>
          <a href="#" class="footer-link">Threads</a>
        </div>
        <div class="footer-link-group">
          <h4>Legal</h4>
          <a href="#" class="footer-link">Terms</a>
          <a href="#" class="footer-link">Privacy</a>
        </div>
      </nav>
    </div>
  </footer>
</section>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
// get_footer();
?>