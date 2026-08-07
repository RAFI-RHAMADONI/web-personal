<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio Muhammad Rafi Rhamadoni — Mahasiswa Sistem Informasi yang passionate di bidang teknologi, pemrograman, dan big data.">
    <meta name="keywords" content="portfolio, web developer, sistem informasi, muhammad rafi rhamadoni">
    <meta name="author" content="Muhammad Rafi Rhamadoni">
    <title>Muhammad Rafi Rhamadoni | Portfolio</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Outfit:wght@300;400;500;600;700;800;900&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'outfit': ['Outfit', 'sans-serif'],
                        'inter': ['Inter', 'sans-serif'],
                        'mono': ['JetBrains Mono', 'monospace'],
                    },
                    colors: {
                        dark: {
                            900: '#0a0a0f',
                            800: '#0f0f1a',
                            700: '#151525',
                            600: '#1a1a30',
                            500: '#22223a',
                        },
                        accent: {
                            primary: '#6c63ff',
                            secondary: '#00d4aa',
                            tertiary: '#ff6b9d',
                            glow: '#6c63ff40',
                        }
                    }
                }
            }
        }
    </script>

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        /* ===== BASE ===== */
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            background-color: #0a0a0f;
            color: #e2e8f0;
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
        }

        ::selection {
            background: #6c63ff;
            color: #fff;
        }

        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #0a0a0f; }
        ::-webkit-scrollbar-thumb { background: #6c63ff; border-radius: 10px; }
        ::-webkit-scrollbar-thumb:hover { background: #8b83ff; }

        /* ===== SCROLL PROGRESS ===== */
        #scroll-progress {
            position: fixed;
            top: 0;
            left: 0;
            height: 3px;
            background: linear-gradient(90deg, #6c63ff, #00d4aa, #ff6b9d);
            z-index: 9999;
            transition: width 0.1s linear;
        }

        /* ===== NAVBAR ===== */
        .navbar {
            backdrop-filter: blur(20px) saturate(180%);
            -webkit-backdrop-filter: blur(20px) saturate(180%);
            background: rgba(10, 10, 15, 0.75);
            border-bottom: 1px solid rgba(108, 99, 255, 0.08);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .navbar.scrolled {
            background: rgba(10, 10, 15, 0.92);
            box-shadow: 0 4px 30px rgba(108, 99, 255, 0.08);
        }

        .nav-link {
            position: relative;
            transition: color 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 50%;
            transform: translateX(-50%) scaleX(0);
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, #6c63ff, #00d4aa);
            border-radius: 2px;
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            transform: translateX(-50%) scaleX(1);
        }

        .nav-link.active {
            color: #6c63ff;
        }

        /* ===== GLASSMORPHISM ===== */
        .glass {
            background: rgba(21, 21, 37, 0.6);
            backdrop-filter: blur(16px) saturate(150%);
            -webkit-backdrop-filter: blur(16px) saturate(150%);
            border: 1px solid rgba(108, 99, 255, 0.1);
        }

        .glass-strong {
            background: rgba(21, 21, 37, 0.8);
            backdrop-filter: blur(24px) saturate(180%);
            -webkit-backdrop-filter: blur(24px) saturate(180%);
            border: 1px solid rgba(108, 99, 255, 0.15);
        }

        /* ===== GLOW EFFECTS ===== */
        .glow-box {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .glow-box:hover {
            border-color: rgba(108, 99, 255, 0.4);
            box-shadow: 0 0 30px rgba(108, 99, 255, 0.15), 0 0 60px rgba(108, 99, 255, 0.05);
            transform: translateY(-4px);
        }

        .glow-text {
            text-shadow: 0 0 40px rgba(108, 99, 255, 0.3);
        }

        /* ===== GRADIENT TEXT ===== */
        .gradient-text {
            background: linear-gradient(135deg, #6c63ff 0%, #00d4aa 50%, #ff6b9d 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .gradient-text-alt {
            background: linear-gradient(135deg, #00d4aa 0%, #6c63ff 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* ===== BUTTONS ===== */
        .btn-primary {
            background: linear-gradient(135deg, #6c63ff, #8b83ff);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .btn-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.15), transparent);
            transition: left 0.5s ease;
        }

        .btn-primary:hover::before {
            left: 100%;
        }

        .btn-primary:hover {
            box-shadow: 0 0 30px rgba(108, 99, 255, 0.4);
            transform: translateY(-2px);
        }

        .btn-outline {
            border: 1px solid rgba(108, 99, 255, 0.4);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .btn-outline::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, #6c63ff, #8b83ff);
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: -1;
        }

        .btn-outline:hover::before {
            opacity: 1;
        }

        .btn-outline:hover {
            border-color: #6c63ff;
            box-shadow: 0 0 20px rgba(108, 99, 255, 0.3);
            transform: translateY(-2px);
        }

        /* ===== HERO SECTION ===== */
        .hero-bg {
            background: radial-gradient(ellipse at 20% 50%, rgba(108, 99, 255, 0.08) 0%, transparent 50%),
                        radial-gradient(ellipse at 80% 50%, rgba(0, 212, 170, 0.06) 0%, transparent 50%),
                        radial-gradient(ellipse at 50% 100%, rgba(255, 107, 157, 0.04) 0%, transparent 50%);
        }

        .hero-grid {
            background-image: linear-gradient(rgba(108, 99, 255, 0.03) 1px, transparent 1px),
                              linear-gradient(90deg, rgba(108, 99, 255, 0.03) 1px, transparent 1px);
            background-size: 60px 60px;
        }

        .floating {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        .typing-cursor {
            animation: blink 1s infinite;
        }

        @keyframes blink {
            0%, 50% { opacity: 1; }
            51%, 100% { opacity: 0; }
        }

        /* ===== PARTICLES ===== */
        .particle {
            position: absolute;
            border-radius: 50%;
            pointer-events: none;
            animation: particleFloat linear infinite;
        }

        @keyframes particleFloat {
            0% { transform: translateY(0) rotate(0deg); opacity: 0; }
            10% { opacity: 1; }
            90% { opacity: 1; }
            100% { transform: translateY(-100vh) rotate(720deg); opacity: 0; }
        }

        /* ===== PROFILE IMAGE ===== */
        .profile-ring {
            background: conic-gradient(from 0deg, #6c63ff, #00d4aa, #ff6b9d, #6c63ff);
            animation: rotate 8s linear infinite;
        }

        /* @keyframes rotate {
            to { transform: rotate(360deg); }
        } */

        .profile-glow {
            box-shadow: 0 0 60px rgba(108, 99, 255, 0.3), 0 0 120px rgba(108, 99, 255, 0.1);
        }

        /* ===== SKILL BAR ===== */
        .skill-bar-fill {
            transition: width 1.5s cubic-bezier(0.4, 0, 0.2, 1);
            background: linear-gradient(90deg, #6c63ff, #00d4aa);
            position: relative;
            overflow: hidden;
        }

        .skill-bar-fill::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            animation: shimmer 2s infinite;
        }

        @keyframes shimmer {
            100% { left: 100%; }
        }

        /* ===== TIMELINE ===== */
        .timeline-line {
            background: linear-gradient(180deg, #6c63ff, #00d4aa, #ff6b9d, transparent);
        }

        .timeline-dot {
            box-shadow: 0 0 20px rgba(108, 99, 255, 0.5);
            transition: all 0.3s ease;
        }

        .timeline-dot:hover {
            box-shadow: 0 0 30px rgba(108, 99, 255, 0.8);
            transform: scale(1.3);
        }

        /* ===== PROJECT CARD ===== */
        .project-card {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .project-card:hover {
            transform: translateY(-8px);
            border-color: rgba(108, 99, 255, 0.4);
            box-shadow: 0 20px 60px rgba(108, 99, 255, 0.12);
        }

        .project-card .project-overlay {
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .project-card:hover .project-overlay {
            opacity: 1;
        }

        .project-img-zoom {
            transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .project-card:hover .project-img-zoom {
            transform: scale(1.08);
        }

        /* ===== FORM ===== */
        .form-input {
            background: rgba(21, 21, 37, 0.5);
            border: 1px solid rgba(108, 99, 255, 0.15);
            transition: all 0.3s ease;
        }

        .form-input:focus {
            border-color: #6c63ff;
            box-shadow: 0 0 20px rgba(108, 99, 255, 0.15);
            outline: none;
        }

        .floating-label {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            pointer-events: none;
        }

        .form-input:focus ~ .floating-label,
        .form-input:not(:placeholder-shown) ~ .floating-label {
            transform: translateY(-28px) scale(0.85);
            color: #6c63ff;
        }

        /* ===== COMMENT CARD ===== */
        .comment-card {
            transition: all 0.3s ease;
        }

        .comment-card:hover {
            border-color: rgba(108, 99, 255, 0.3);
            transform: translateX(4px);
        }

        /* ===== REVEAL ANIMATION ===== */
        .reveal {
            opacity: 0;
            transform: translateY(40px);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        .reveal-left {
            opacity: 0;
            transform: translateX(-60px);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .reveal-left.active {
            opacity: 1;
            transform: translateX(0);
        }

        .reveal-right {
            opacity: 0;
            transform: translateX(60px);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .reveal-right.active {
            opacity: 1;
            transform: translateX(0);
        }

        .reveal-scale {
            opacity: 0;
            transform: scale(0.85);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .reveal-scale.active {
            opacity: 1;
            transform: scale(1);
        }

        /* ===== CONTACT ICONS ===== */
        .social-icon {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .social-icon:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 30px rgba(108, 99, 255, 0.3);
        }

        /* ===== BACK TO TOP ===== */
        #back-to-top {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        #back-to-top:hover {
            box-shadow: 0 0 30px rgba(108, 99, 255, 0.5);
            transform: translateY(-3px);
        }

        /* ===== COUNTER ===== */
        .counter-value {
            font-variant-numeric: tabular-nums;
        }

        /* ===== MOBILE MENU ===== */
        .mobile-menu {
            transform: translateX(100%);
            transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .mobile-menu.open {
            transform: translateX(0);
        }

        .hamburger-line {
            transition: all 0.3s ease;
        }

        .hamburger.active .hamburger-line:nth-child(1) {
            transform: rotate(45deg) translate(5px, 5px);
        }
        .hamburger.active .hamburger-line:nth-child(2) {
            opacity: 0;
        }
        .hamburger.active .hamburger-line:nth-child(3) {
            transform: rotate(-45deg) translate(5px, -5px);
        }

        /* ===== LOADING SCREEN ===== */
        #loader {
            transition: opacity 0.6s ease, visibility 0.6s ease;
        }

        .loader-ring {
            border: 3px solid rgba(108, 99, 255, 0.1);
            border-top-color: #6c63ff;
            border-right-color: #00d4aa;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        /* ===== TAG CHIP ===== */
        .tag-chip {
            transition: all 0.3s ease;
        }

        .tag-chip:hover {
            background: rgba(108, 99, 255, 0.2);
            border-color: rgba(108, 99, 255, 0.5);
            transform: translateY(-2px);
        }

        /* ===== STAGGER CHILDREN ===== */
        .stagger-children > * {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .stagger-children.active > *:nth-child(1) { transition-delay: 0.1s; }
        .stagger-children.active > *:nth-child(2) { transition-delay: 0.2s; }
        .stagger-children.active > *:nth-child(3) { transition-delay: 0.3s; }
        .stagger-children.active > *:nth-child(4) { transition-delay: 0.4s; }
        .stagger-children.active > *:nth-child(5) { transition-delay: 0.5s; }
        .stagger-children.active > *:nth-child(6) { transition-delay: 0.6s; }
        .stagger-children.active > *:nth-child(7) { transition-delay: 0.7s; }
        .stagger-children.active > *:nth-child(8) { transition-delay: 0.8s; }
        .stagger-children.active > *:nth-child(9) { transition-delay: 0.9s; }
        .stagger-children.active > *:nth-child(10) { transition-delay: 1.0s; }

        .stagger-children.active > * {
            opacity: 1;
            transform: translateY(0);
        }

        /* ===== PULSE DOT ===== */
        .pulse-dot {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(0, 212, 170, 0.5); }
            70% { box-shadow: 0 0 0 10px rgba(0, 212, 170, 0); }
            100% { box-shadow: 0 0 0 0 rgba(0, 212, 170, 0); }
        }

        /* ===== TECH ICON ===== */
        .tech-icon {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .tech-icon:hover {
            transform: translateY(-6px) scale(1.1);
            box-shadow: 0 12px 40px rgba(108, 99, 255, 0.2);
        }

        /* ===== TOOLTIP ===== */
        .tooltip-text {
            visibility: hidden;
            opacity: 0;
            transition: all 0.3s ease;
            transform: translateY(6px);
        }

        .tooltip-parent:hover .tooltip-text {
            visibility: visible;
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>

<!-- ============================================ -->
<!-- LOADING SCREEN                                -->
<!-- ============================================ -->
<div id="loader" class="fixed inset-0 z-[10000] flex items-center justify-center bg-dark-900">
    <div class="text-center">
        <div class="loader-ring w-16 h-16 rounded-full mx-auto mb-6"></div>
        <p class="text-sm font-mono text-gray-400 tracking-widest uppercase">Loading Portfolio</p>
    </div>
</div>

<!-- ============================================ -->
<!-- SCROLL PROGRESS BAR                           -->
<!-- ============================================ -->
<div id="scroll-progress" style="width: 0%;"></div>

<!-- ============================================ -->
<!-- NAVBAR                                        -->
<!-- ============================================ -->
<nav id="navbar" class="navbar fixed top-0 left-0 right-0 z-[1000] py-4">
    <div class="max-w-7xl mx-auto px-6 flex items-center justify-between">
        <!-- Logo -->
        <a href="#hero" class="flex items-center gap-2 group">
            <div style="border-radius: 90%" class="w-9 h-9 rounded-lg bg-gradient-to-br from-accent-primary to-accent-secondary flex items-center justify-center text-white font-outfit font-bold text-sm group-hover:shadow-lg group-hover:shadow-accent-primary/30 transition-all duration-300">
                <img style="border-radius: 90%" src="./assets/foto1.jpeg" alt="">
            </div>
            <span class="font-outfit font-semibold text-white text-lg hidden sm:block">Rafi<span class="text-accent-primary">.</span></span>
        </a>

        <!-- Desktop Nav -->
        <div class="hidden lg:flex items-center gap-8">
            <a href="#hero" class="nav-link text-sm font-medium text-gray-300 hover:text-white active" data-section="hero">Home</a>
            <a href="#about" class="nav-link text-sm font-medium text-gray-300 hover:text-white" data-section="about">About</a>
            <a href="#skills" class="nav-link text-sm font-medium text-gray-300 hover:text-white" data-section="skills">Skills</a>
            <a href="#education" class="nav-link text-sm font-medium text-gray-300 hover:text-white" data-section="education">Education</a>
            <a href="#projects" class="nav-link text-sm font-medium text-gray-300 hover:text-white" data-section="projects">Projects</a>
            <a href="#feedback" class="nav-link text-sm font-medium text-gray-300 hover:text-white" data-section="feedback">Feedback</a>
            <a href="#contact" class="nav-link text-sm font-medium text-gray-300 hover:text-white" data-section="contact">Contact</a>
        </div>

        <!-- CTA -->
        <a href="#contact" class="hidden lg:inline-flex btn-primary px-5 py-2.5 rounded-lg text-sm font-medium text-white">
            Hubungi Saya
        </a>

        <!-- Hamburger -->
        <button id="hamburger-btn" class="hamburger lg:hidden flex flex-col gap-1.5 p-2" aria-label="Toggle Menu">
            <span class="hamburger-line w-6 h-0.5 bg-white rounded-full block"></span>
            <span class="hamburger-line w-6 h-0.5 bg-white rounded-full block"></span>
            <span class="hamburger-line w-6 h-0.5 bg-white rounded-full block"></span>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="mobile-menu fixed top-0 right-0 w-72 h-screen glass-strong z-[1001] flex flex-col pt-20 px-8 lg:hidden">
        <button id="close-menu" class="absolute top-6 right-6 text-gray-400 hover:text-white transition-colors">
            <i data-lucide="x" class="w-6 h-6"></i>
        </button>
        <a href="#hero" class="mobile-nav-link text-lg font-medium text-gray-300 hover:text-white py-3 border-b border-gray-800 transition-colors" data-section="hero">Home</a>
        <a href="#about" class="mobile-nav-link text-lg font-medium text-gray-300 hover:text-white py-3 border-b border-gray-800 transition-colors" data-section="about">About</a>
        <a href="#skills" class="mobile-nav-link text-lg font-medium text-gray-300 hover:text-white py-3 border-b border-gray-800 transition-colors" data-section="skills">Skills</a>
        <a href="#education" class="mobile-nav-link text-lg font-medium text-gray-300 hover:text-white py-3 border-b border-gray-800 transition-colors" data-section="education">Education</a>
        <a href="#projects" class="mobile-nav-link text-lg font-medium text-gray-300 hover:text-white py-3 border-b border-gray-800 transition-colors" data-section="projects">Projects</a>
        <a href="#feedback" class="mobile-nav-link text-lg font-medium text-gray-300 hover:text-white py-3 border-b border-gray-800 transition-colors" data-section="feedback">Feedback</a>
        <a href="#contact" class="mobile-nav-link text-lg font-medium text-gray-300 hover:text-white py-3 border-b border-gray-800 transition-colors" data-section="contact">Contact</a>

        <a href="#contact" class="btn-primary mt-6 px-6 py-3 rounded-lg text-center text-sm font-medium text-white">
            Hubungi Saya
        </a>
    </div>
</nav>

<!-- Mobile Menu Overlay -->
<div id="menu-overlay" class="fixed inset-0 bg-black/50 z-[999] hidden lg:hidden"></div>


<!-- ============================================ -->
<!-- HERO SECTION                                  -->
<!-- ============================================ -->
<section id="hero" class="hero-bg relative min-h-screen flex items-center pt-20 overflow-hidden">
    <!-- Grid Background -->
    <div class="hero-grid absolute inset-0"></div>

    <!-- Particles Container -->
    <div id="particles" class="absolute inset-0 pointer-events-none"></div>

    <!-- Decorative Orbs -->
    <div class="absolute top-20 left-10 w-72 h-72 bg-accent-primary/5 rounded-full blur-3xl floating"></div>
    <div class="absolute bottom-20 right-10 w-96 h-96 bg-accent-secondary/5 rounded-full blur-3xl floating" style="animation-delay: -3s;"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-accent-tertiary/3 rounded-full blur-3xl"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 w-full">
        <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-16">
            <!-- Text Content -->
            <div class="flex-1 text-center lg:text-left">
                <!-- Status Badge -->
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full glass mb-6 reveal">
                    <span class="w-2 h-2 rounded-full bg-accent-secondary pulse-dot"></span>
                    <span class="text-xs font-medium text-gray-300 tracking-wide">Available for Collaboration</span>
                </div>

                <!-- Greeting -->
                <p class="text-base md:text-lg text-gray-400 font-medium mb-3 reveal" style="transition-delay: 0.1s;">
                    Halo, saya 👋
                </p>

                <!-- Name -->
                <h1 class="font-outfit font-black text-4xl sm:text-5xl md:text-6xl lg:text-7xl text-white mb-2 glow-text reveal" style="transition-delay: 0.2s;">
                    Muhammad Rafi
                </h1>
                <h1 class="font-outfit font-black text-4xl sm:text-5xl md:text-6xl lg:text-7xl gradient-text mb-6 reveal" style="transition-delay: 0.3s;">
                    Rhamadoni
                </h1>

                <!-- Typing Text -->
                <div class="flex items-center justify-center lg:justify-start gap-1 mb-8 reveal" style="transition-delay: 0.4s;">
                    <span class="text-accent-primary font-mono text-lg">&lt;</span>
                    <span id="typing-text" class="font-mono text-lg text-gray-300"></span>
                    <span class="typing-cursor font-mono text-lg text-accent-primary">|</span>
                    <span class="text-accent-primary font-mono text-lg">/&gt;</span>
                </div>

                <!-- Description -->
                <p class="text-gray-400 text-base md:text-lg max-w-lg mx-auto lg:mx-0 mb-10 leading-relaxed reveal" style="transition-delay: 0.5s;">
                    Mahasiswa <span class="text-accent-secondary font-medium">Sistem Informasi</span> yang passionate di bidang teknologi, pemrograman, dan <span class="text-accent-primary font-medium">big data</span>.
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-wrap items-center justify-center lg:justify-start gap-4 reveal" style="transition-delay: 0.6s;">
                    <a href="#projects" class="btn-primary px-7 py-3.5 rounded-xl font-medium text-white inline-flex items-center gap-2">
                        <i data-lucide="folder-open" class="w-4 h-4"></i>
                        Lihat Project
                    </a>
                    <a href="#contact" class="btn-outline px-7 py-3.5 rounded-xl font-medium text-gray-300 inline-flex items-center gap-2">
                        <i data-lucide="send" class="w-4 h-4"></i>
                        Hubungi Saya
                    </a>
                    <a href="#" class="btn-outline px-7 py-3.5 rounded-xl font-medium text-gray-300 inline-flex items-center gap-2" id="download-cv-btn">
                        <i data-lucide="download" class="w-4 h-4"></i>
                        Download CV
                    </a>
                </div>
            </div>

            <!-- Profile Image -->
            <div class="flex-shrink-0 reveal-scale" style="transition-delay: 0.4s;">
                <div class="relative">
                    <!-- Rotating Ring -->
                    <div class="profile-ring w-64 h-64 md:w-72 md:h-72 lg:w-80 lg:h-80 rounded-full p-1 floating">
                        <div class="w-full h-full rounded-full bg-dark-900 p-2">
                            <div class="w-full h-full rounded-full bg-gradient-to-br from-dark-600 to-dark-700 flex items-center justify-center profile-glow overflow-hidden">
                                <!-- Profile Initials -->
                                <div class="text-center">
                                    <span class="font-outfit font-black text-6xl md:text-7xl gradient-text">MR</span>
                                    <img style="margin-top:-50px" src="./assets/foto1.jpeg">
                                    <p class="text-xs text-gray-500 mt-2 font-mono tracking-widest">DEVELOPER</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Badges -->
                    <div class="absolute -top-2 -right-2 glass px-3 py-2 rounded-lg floating" style="animation-delay: -1s;">
                        <span class="text-xs font-mono text-accent-secondary">HTML</span>
                    </div>
                    <div class="absolute -bottom-2 -left-2 glass px-3 py-2 rounded-lg floating" style="animation-delay: -4s;">
                        <span class="text-xs font-mono text-accent-primary">CSS</span>
                    </div>
                    <div class="absolute top-1/2 -right-8 glass px-3 py-2 rounded-lg floating" style="animation-delay: -2s;">
                        <span class="text-xs font-mono text-accent-tertiary">PHP</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 reveal" style="transition-delay: 1s;">
            <span class="text-xs text-gray-500 tracking-widest uppercase">Scroll</span>
            <div class="w-6 h-10 rounded-full border-2 border-gray-700 flex justify-center pt-2">
                <div class="w-1 h-3 rounded-full bg-accent-primary animate-bounce"></div>
            </div>
        </div>
    </div>
</section>


<!-- ============================================ -->
<!-- ABOUT SECTION                                 -->
<!-- ============================================ -->
<section id="about" class="relative py-24 md:py-32 overflow-hidden">
    <!-- Decorative -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-accent-primary/3 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-accent-secondary/3 rounded-full blur-3xl"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-6">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <p class="text-accent-primary font-mono text-sm tracking-widest uppercase mb-3 reveal">// Tentang Saya</p>
            <h2 class="font-outfit font-bold text-3xl md:text-4xl lg:text-5xl text-white mb-4 reveal">
                Kenali Saya Lebih <span class="gradient-text">Dekat</span>
            </h2>
            <div class="w-20 h-1 bg-gradient-to-r from-accent-primary to-accent-secondary rounded-full mx-auto reveal"></div>
        </div>

        <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-16">
            <!-- About Image/Graphic -->
            <div class="flex-1 reveal-left">
                <div class="glass rounded-2xl p-8 relative overflow-hidden glow-box">
                    <!-- Code Block Decoration -->
                    <div class="space-y-3 font-mono text-sm">
                        <div class="flex items-center gap-2 mb-6">
                            <div class="w-3 h-3 rounded-full bg-red-500/80"></div>
                            <div class="w-3 h-3 rounded-full bg-yellow-500/80"></div>
                            <div class="w-3 h-3 rounded-full bg-green-500/80"></div>
                            <span class="ml-2 text-xs text-gray-500">about_me.js</span>
                        </div>
                        <p><span class="text-accent-primary">const</span> <span class="text-accent-secondary">developer</span> = {</p>
                        <p class="pl-6"><span class="text-accent-tertiary">name</span>: <span class="text-yellow-400">"Muhammad Rafi Rhamadoni"</span>,</p>
                        <p class="pl-6"><span class="text-accent-tertiary">role</span>: <span class="text-yellow-400">"Mahasiswa Sistem Informasi"</span>,</p>
                        <p class="pl-6"><span class="text-accent-tertiary">location</span>: <span class="text-yellow-400">"Tapung, Riau"</span>,</p>
                        <p class="pl-6"><span class="text-accent-tertiary">interests</span>: [</p>
                        <p class="pl-12"><span class="text-yellow-400">"Web Development"</span>,</p>
                        <p class="pl-12"><span class="text-yellow-400">"Big Data"</span>,</p>
                        <p class="pl-12"><span class="text-yellow-400">"System Design"</span></p>
                        <p class="pl-6">],</p>
                        <p class="pl-6"><span class="text-accent-tertiary">motto</span>: <span class="text-yellow-400">"Never stop learning"</span></p>
                        <p>};</p>
                    </div>
                </div>
            </div>

            <!-- About Text -->
            <div class="flex-1 reveal-right">
                <h3 class="font-outfit font-bold text-2xl text-white mb-4">
                    Mahasiswa Sistem Informasi<br>
                    <span class="gradient-text-alt">Angkatan 2024</span>
                </h3>
                <p class="text-gray-400 leading-relaxed mb-6">
                    Mahasiswa aktif Program Studi Sistem Informasi yang memiliki minat besar di bidang teknologi, khususnya <span class="text-white font-medium">pemrograman</span> dan <span class="text-white font-medium">big data</span>. Memiliki kemampuan dasar dalam membuat website sederhana (frontend & backend) serta merancang sistem.
                </p>
                <p class="text-gray-400 leading-relaxed mb-8">
                    Pribadi yang <span class="text-accent-secondary">cepat belajar</span>, memiliki kemauan berkembang, dan siap memberikan kontribusi terbaik dalam setiap kesempatan.
                </p>

                <!-- Stats -->
                <div class="grid grid-cols-3 gap-4">
                    <div class="glass rounded-xl p-4 text-center glow-box">
                        <div class="counter-value font-outfit font-bold text-2xl md:text-3xl text-white" data-target="2">0</div>
                        <p class="text-xs text-gray-400 mt-1">Tahun Belajar</p>
                    </div>
                    <div class="glass rounded-xl p-4 text-center glow-box">
                        <div class="counter-value font-outfit font-bold text-2xl md:text-3xl text-white" data-target="5">0</div>
                        <p class="text-xs text-gray-400 mt-1">Project</p>
                    </div>
                    <div class="glass rounded-xl p-4 text-center glow-box">
                        <div class="counter-value font-outfit font-bold text-2xl md:text-3xl gradient-text" data-target="10">0</div>
                        <p class="text-xs text-gray-400 mt-1">Skill Utama</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================================ -->
<!-- SKILLS SECTION                                -->
<!-- ============================================ -->
<section id="skills" class="relative py-24 md:py-32 overflow-hidden">
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[700px] h-[700px] bg-accent-primary/3 rounded-full blur-3xl"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-6">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <p class="text-accent-primary font-mono text-sm tracking-widest uppercase mb-3 reveal">// Keahlian Saya</p>
            <h2 class="font-outfit font-bold text-3xl md:text-4xl lg:text-5xl text-white mb-4 reveal">
                Tech <span class="gradient-text">Stack</span> & Skills
            </h2>
            <div class="w-20 h-1 bg-gradient-to-r from-accent-primary to-accent-secondary rounded-full mx-auto reveal"></div>
        </div>

        <!-- Hard Skills -->
        <div class="mb-16">
            <h3 class="font-outfit font-semibold text-xl text-white mb-8 flex items-center gap-3 reveal">
                <i data-lucide="code-2" class="w-5 h-5 text-accent-primary"></i>
                Hard Skills
            </h3>

            <!-- Tech Icons Grid -->
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4 mb-12 stagger-children" id="hard-skills-grid">
                <!-- HTML -->
                <div class="tech-icon glass rounded-xl p-5 text-center cursor-pointer glow-box tooltip-parent">
                    <div class="w-12 h-12 mx-auto mb-3 rounded-lg bg-orange-500/10 flex items-center justify-center">
                        <span class="text-orange-400 font-bold text-lg">&lt;/&gt;</span>
                    </div>
                    <p class="text-sm font-medium text-white">HTML</p>
                    <div class="mt-3 w-full bg-dark-700 rounded-full h-1.5">
                        <div class="skill-bar-fill h-1.5 rounded-full" data-width="85%" style="width: 0%"></div>
                    </div>
                    <div class="tooltip-text absolute -top-10 left-1/2 -translate-x-1/2 glass px-3 py-1.5 rounded-lg text-xs text-gray-300 whitespace-nowrap z-50">85% Proficiency</div>
                </div>
                <!-- CSS -->
                <div class="tech-icon glass rounded-xl p-5 text-center cursor-pointer glow-box tooltip-parent">
                    <div class="w-12 h-12 mx-auto mb-3 rounded-lg bg-blue-500/10 flex items-center justify-center">
                        <span class="text-blue-400 font-bold text-lg">#{ }</span>
                    </div>
                    <p class="text-sm font-medium text-white">CSS</p>
                    <div class="mt-3 w-full bg-dark-700 rounded-full h-1.5">
                        <div class="skill-bar-fill h-1.5 rounded-full" data-width="60%" style="width: 0%"></div>
                    </div>
                    <div class="tooltip-text absolute -top-10 left-1/2 -translate-x-1/2 glass px-3 py-1.5 rounded-lg text-xs text-gray-300 whitespace-nowrap z-50">60% Proficiency</div>
                </div>
                <!-- JavaScript -->
                <div class="tech-icon glass rounded-xl p-5 text-center cursor-pointer glow-box tooltip-parent">
                    <div class="w-12 h-12 mx-auto mb-3 rounded-lg bg-yellow-500/10 flex items-center justify-center">
                        <span class="text-yellow-400 font-bold text-lg">JS</span>
                    </div>
                    <p class="text-sm font-medium text-white">JavaScript</p>
                    <div class="mt-3 w-full bg-dark-700 rounded-full h-1.5">
                        <div class="skill-bar-fill h-1.5 rounded-full" data-width="50%" style="width: 0%"></div>
                    </div>
                    <div class="tooltip-text absolute -top-10 left-1/2 -translate-x-1/2 glass px-3 py-1.5 rounded-lg text-xs text-gray-300 whitespace-nowrap z-50">50% Proficiency</div>
                </div>
                <!-- PHP -->
                <div class="tech-icon glass rounded-xl p-5 text-center cursor-pointer glow-box tooltip-parent">
                    <div class="w-12 h-12 mx-auto mb-3 rounded-lg bg-purple-500/10 flex items-center justify-center">
                        <span class="text-purple-400 font-bold text-lg">PHP</span>
                    </div>
                    <p class="text-sm font-medium text-white">PHP</p>
                    <div class="mt-3 w-full bg-dark-700 rounded-full h-1.5">
                        <div class="skill-bar-fill h-1.5 rounded-full" data-width="75%" style="width: 0%"></div>
                    </div>
                    <div class="tooltip-text absolute -top-10 left-1/2 -translate-x-1/2 glass px-3 py-1.5 rounded-lg text-xs text-gray-300 whitespace-nowrap z-50">75% Proficiency</div>
                </div>
                <!-- MySQL -->
                <div class="tech-icon glass rounded-xl p-5 text-center cursor-pointer glow-box tooltip-parent">
                    <div class="w-12 h-12 mx-auto mb-3 rounded-lg bg-cyan-500/10 flex items-center justify-center">
                        <span class="text-cyan-400 font-bold text-lg">SQL</span>
                    </div>
                    <p class="text-sm font-medium text-white">MySQL</p>
                    <div class="mt-3 w-full bg-dark-700 rounded-full h-1.5">
                        <div class="skill-bar-fill h-1.5 rounded-full" data-width="85%" style="width: 0%"></div>
                    </div>
                    <div class="tooltip-text absolute -top-10 left-1/2 -translate-x-1/2 glass px-3 py-1.5 rounded-lg text-xs text-gray-300 whitespace-nowrap z-50">85% Proficiency</div>
                </div>
                <!-- Frontend & Backend -->
                <div class="tech-icon glass rounded-xl p-5 text-center cursor-pointer glow-box tooltip-parent">
                    <div class="w-12 h-12 mx-auto mb-3 rounded-lg bg-green-500/10 flex items-center justify-center">
                        <i data-lucide="layout" class="w-6 h-6 text-green-400"></i>
                    </div>
                    <p class="text-sm font-medium text-white">Frontend & Backend</p>
                    <div class="mt-3 w-full bg-dark-700 rounded-full h-1.5">
                        <div class="skill-bar-fill h-1.5 rounded-full" data-width="80%" style="width: 0%"></div>
                    </div>
                    <div class="tooltip-text absolute -top-10 left-1/2 -translate-x-1/2 glass px-3 py-1.5 rounded-lg text-xs text-gray-300 whitespace-nowrap z-50">80% Proficiency</div>
                </div>
                <!-- Perancangan SI -->
                <div class="tech-icon glass rounded-xl p-5 text-center cursor-pointer glow-box tooltip-parent">
                    <div class="w-12 h-12 mx-auto mb-3 rounded-lg bg-rose-500/10 flex items-center justify-center">
                        <i data-lucide="workflow" class="w-6 h-6 text-rose-400"></i>
                    </div>
                    <p class="text-sm font-medium text-white">System Design</p>
                    <div class="mt-3 w-full bg-dark-700 rounded-full h-1.5">
                        <div class="skill-bar-fill h-1.5 rounded-full" data-width="70%" style="width: 0%"></div>
                    </div>
                    <div class="tooltip-text absolute -top-10 left-1/2 -translate-x-1/2 glass px-3 py-1.5 rounded-lg text-xs text-gray-300 whitespace-nowrap z-50">70% Proficiency</div>
                </div>
                <!-- VS Code -->
                <div class="tech-icon glass rounded-xl p-5 text-center cursor-pointer glow-box tooltip-parent">
                    <div class="w-12 h-12 mx-auto mb-3 rounded-lg bg-blue-600/10 flex items-center justify-center">
                        <i data-lucide="terminal" class="w-6 h-6 text-blue-500"></i>
                    </div>
                    <p class="text-sm font-medium text-white">VS Code</p>
                    <div class="mt-3 w-full bg-dark-700 rounded-full h-1.5">
                        <div class="skill-bar-fill h-1.5 rounded-full" data-width="85%" style="width: 0%"></div>
                    </div>
                    <div class="tooltip-text absolute -top-10 left-1/2 -translate-x-1/2 glass px-3 py-1.5 rounded-lg text-xs text-gray-300 whitespace-nowrap z-50">85% Proficiency</div>
                </div>
                <!-- Logika Pemrograman -->
                <div class="tech-icon glass rounded-xl p-5 text-center cursor-pointer glow-box tooltip-parent">
                    <div class="w-12 h-12 mx-auto mb-3 rounded-lg bg-emerald-500/10 flex items-center justify-center">
                        <i data-lucide="brain" class="w-6 h-6 text-emerald-400"></i>
                    </div>
                    <p class="text-sm font-medium text-white">Logic</p>
                    <div class="mt-3 w-full bg-dark-700 rounded-full h-1.5">
                        <div class="skill-bar-fill h-1.5 rounded-full" data-width="75%" style="width: 0%"></div>
                    </div>
                    <div class="tooltip-text absolute -top-10 left-1/2 -translate-x-1/2 glass px-3 py-1.5 rounded-lg text-xs text-gray-300 whitespace-nowrap z-50">75% Proficiency</div>
                </div>
                <!-- Big Data
                <div class="tech-icon glass rounded-xl p-5 text-center cursor-pointer glow-box tooltip-parent">
                    <div class="w-12 h-12 mx-auto mb-3 rounded-lg bg-indigo-500/10 flex items-center justify-center">
                        <i data-lucide="database" class="w-6 h-6 text-indigo-400"></i>
                    </div>
                    <p class="text-sm font-medium text-white">Big Data</p>
                    <div class="mt-3 w-full bg-dark-700 rounded-full h-1.5">
                        <div class="skill-bar-fill h-1.5 rounded-full" data-width="55%" style="width: 0%"></div>
                    </div>
                    <div class="tooltip-text absolute -top-10 left-1/2 -translate-x-1/2 glass px-3 py-1.5 rounded-lg text-xs text-gray-300 whitespace-nowrap z-50">55% Proficiency</div>
                </div> -->
            </div>
        </div>

        <!-- Soft Skills -->
        <div>
            <h3 class="font-outfit font-semibold text-xl text-white mb-8 flex items-center gap-3 reveal">
                <i data-lucide="heart" class="w-5 h-5 text-accent-tertiary"></i>
                Soft Skills
            </h3>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 stagger-children" id="soft-skills-grid">
                <div class="glass rounded-xl p-5 glow-box flex items-center gap-4">
                    <div class="w-11 h-11 rounded-lg bg-accent-primary/10 flex items-center justify-center flex-shrink-0">
                        <i data-lucide="zap" class="w-5 h-5 text-accent-primary"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-white">Cepat Belajar</p>
                        <p class="text-xs text-gray-500">Adaptif terhadap teknologi baru</p>
                    </div>
                </div>
                <div class="glass rounded-xl p-5 glow-box flex items-center gap-4">
                    <div class="w-11 h-11 rounded-lg bg-accent-secondary/10 flex items-center justify-center flex-shrink-0">
                        <i data-lucide="shield-check" class="w-5 h-5 text-accent-secondary"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-white">Bertanggung Jawab</p>
                        <p class="text-xs text-gray-500">Komitmen tinggi pada tugas</p>
                    </div>
                </div>
                <div class="glass rounded-xl p-5 glow-box flex items-center gap-4">
                    <div class="w-11 h-11 rounded-lg bg-accent-tertiary/10 flex items-center justify-center flex-shrink-0">
                        <i data-lucide="clock" class="w-5 h-5 text-accent-tertiary"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-white">Disiplin</p>
                        <p class="text-xs text-gray-500">Manajemen waktu yang baik</p>
                    </div>
                </div>
                <div class="glass rounded-xl p-5 glow-box flex items-center gap-4">
                    <div class="w-11 h-11 rounded-lg bg-cyan-500/10 flex items-center justify-center flex-shrink-0">
                        <i data-lucide="users" class="w-5 h-5 text-cyan-400"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-white">Kerja Tim</p>
                        <p class="text-xs text-gray-500">Kolaborasi efektif</p>
                    </div>
                </div>
                <div class="glass rounded-xl p-5 glow-box flex items-center gap-4">
                    <div class="w-11 h-11 rounded-lg bg-green-500/10 flex items-center justify-center flex-shrink-0">
                        <i data-lucide="trending-up" class="w-5 h-5 text-green-400"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-white">Kemauan Berkembang</p>
                        <p class="text-xs text-gray-500">Growth mindset</p>
                    </div>
                </div>
                <div class="glass rounded-xl p-5 glow-box flex items-center gap-4">
                    <div class="w-11 h-11 rounded-lg bg-amber-500/10 flex items-center justify-center flex-shrink-0">
                        <i data-lucide="languages" class="w-5 h-5 text-amber-400"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-white">Bahasa Indonesia</p>
                        <p class="text-xs text-gray-500">Aktif (Native)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================================ -->
<!-- EDUCATION SECTION                             -->
<!-- ============================================ -->
<section id="education" class="relative py-24 md:py-32 overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-accent-primary/20 to-transparent"></div>
    <div class="absolute top-20 right-10 w-80 h-80 bg-accent-tertiary/3 rounded-full blur-3xl"></div>

    <div class="relative z-10 max-w-4xl mx-auto px-6">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <p class="text-accent-primary font-mono text-sm tracking-widest uppercase mb-3 reveal">// Pendidikan</p>
            <h2 class="font-outfit font-bold text-3xl md:text-4xl lg:text-5xl text-white mb-4 reveal">
                Education <span class="gradient-text">Timeline</span>
            </h2>
            <div class="w-20 h-1 bg-gradient-to-r from-accent-primary to-accent-secondary rounded-full mx-auto reveal"></div>
        </div>

        <!-- Timeline -->
        <div class="relative">
            <!-- Timeline Line -->
            <div class="absolute left-6 md:left-1/2 md:-translate-x-px top-0 bottom-0 w-0.5 timeline-line"></div>

            <!-- Item 1 -->
            <div class="relative flex flex-col md:flex-row items-start mb-12 reveal">
                <div class="md:w-1/2 md:pr-12 md:text-right pl-16 md:pl-0">
                    <div class="glass rounded-xl p-6 glow-box">
                        <div class="flex items-center gap-2 mb-2 md:justify-end">
                            <i data-lucide="graduation-cap" class="w-4 h-4 text-accent-primary"></i>
                            <span class="tag-chip text-xs px-2.5 py-1 rounded-full border border-accent-primary/20 text-accent-primary bg-accent-primary/5">2024 – Sekarang</span>
                        </div>
                        <h4 class="font-outfit font-semibold text-lg text-white mb-1">Program Studi Sistem Informasi</h4>
                        <p class="text-sm text-gray-400">Universitas</p>
                        <p class="text-xs text-gray-500 mt-2">Fokus pada pemrograman, big data, dan perancangan sistem informasi.</p>
                    </div>
                </div>
                <!-- Dot -->
                <div class="absolute left-4 md:left-1/2 md:-translate-x-1/2 top-6 w-5 h-5 rounded-full bg-accent-primary border-4 border-dark-900 timeline-dot z-10"></div>
                <div class="md:w-1/2 hidden md:block"></div>
            </div>

            <!-- Item 2 -->
            <div class="relative flex flex-col md:flex-row items-start mb-12 reveal">
                <div class="md:w-1/2 hidden md:block"></div>
                <!-- Dot -->
                <div class="absolute left-4 md:left-1/2 md:-translate-x-1/2 top-6 w-5 h-5 rounded-full bg-accent-secondary border-4 border-dark-900 timeline-dot z-10"></div>
                <div class="md:w-1/2 md:pl-12 pl-16">
                    <div class="glass rounded-xl p-6 glow-box">
                        <div class="flex items-center gap-2 mb-2">
                            <i data-lucide="school" class="w-4 h-4 text-accent-secondary"></i>
                            <span class="tag-chip text-xs px-2.5 py-1 rounded-full border border-accent-secondary/20 text-accent-secondary bg-accent-secondary/5">2021 – 2024</span>
                        </div>
                        <h4 class="font-outfit font-semibold text-lg text-white mb-1">SMA Negeri 2 Tapung</h4>
                        <p class="text-sm text-gray-400">Sekolah Menengah Atas</p>
                        <p class="text-xs text-gray-500 mt-2">Membangun fondasi pengetahuan dan mulai tertarik di bidang teknologi.</p>
                    </div>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="relative flex flex-col md:flex-row items-start mb-12 reveal">
                <div class="md:w-1/2 md:pr-12 md:text-right pl-16 md:pl-0">
                    <div class="glass rounded-xl p-6 glow-box">
                        <div class="flex items-center gap-2 mb-2 md:justify-end">
                            <i data-lucide="book-open" class="w-4 h-4 text-accent-tertiary"></i>
                            <span class="tag-chip text-xs px-2.5 py-1 rounded-full border border-accent-tertiary/20 text-accent-tertiary bg-accent-tertiary/5">2018 – 2021</span>
                        </div>
                        <h4 class="font-outfit font-semibold text-lg text-white mb-1">MTS Al Muhajirin Tapung</h4>
                        <p class="text-sm text-gray-400">Madrasah Tsanawiyah</p>
                        <p class="text-xs text-gray-500 mt-2">Membentuk karakter dan disiplin belajar.</p>
                    </div>
                </div>
                <div class="absolute left-4 md:left-1/2 md:-translate-x-1/2 top-6 w-5 h-5 rounded-full bg-accent-tertiary border-4 border-dark-900 timeline-dot z-10"></div>
                <div class="md:w-1/2 hidden md:block"></div>
            </div>

            <!-- Item 4 -->
            <div class="relative flex flex-col md:flex-row items-start reveal">
                <div class="md:w-1/2 hidden md:block"></div>
                <div class="absolute left-4 md:left-1/2 md:-translate-x-1/2 top-6 w-5 h-5 rounded-full bg-amber-400 border-4 border-dark-900 timeline-dot z-10"></div>
                <div class="md:w-1/2 md:pl-12 pl-16">
                    <div class="glass rounded-xl p-6 glow-box">
                        <div class="flex items-center gap-2 mb-2">
                            <i data-lucide="book" class="w-4 h-4 text-amber-400"></i>
                            <span class="tag-chip text-xs px-2.5 py-1 rounded-full border border-amber-400/20 text-amber-400 bg-amber-400/5">2016 – 2018</span>
                        </div>
                        <h4 class="font-outfit font-semibold text-lg text-white mb-1">SD Negeri 008 Pantai Cermin</h4>
                        <p class="text-sm text-gray-400">Sekolah Dasar</p>
                        <p class="text-xs text-gray-500 mt-2">Awal mula perjalanan pendidikan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================================ -->
<!-- PROJECTS SECTION                              -->
<!-- ============================================ -->
<section id="projects" class="relative py-24 md:py-32 overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-accent-secondary/20 to-transparent"></div>
    <div class="absolute bottom-20 left-10 w-80 h-80 bg-accent-primary/3 rounded-full blur-3xl"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-6">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <p class="text-accent-primary font-mono text-sm tracking-widest uppercase mb-3 reveal">// Project Saya</p>
            <h2 class="font-outfit font-bold text-3xl md:text-4xl lg:text-5xl text-white mb-4 reveal">
                Featured <span class="gradient-text">Projects</span>
            </h2>
            <div class="w-20 h-1 bg-gradient-to-r from-accent-primary to-accent-secondary rounded-full mx-auto reveal"></div>
            <p class="text-gray-400 mt-4 max-w-lg mx-auto reveal">Beberapa proyek yang telah saya kerjakan selama proses belajar.</p>
        </div>

        <!-- Project Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Project 1 -->
            <div class="project-card glass rounded-2xl overflow-hidden reveal">
                <div class="relative h-52 overflow-hidden bg-gradient-to-br from-accent-primary/20 via-dark-600 to-accent-secondary/20">
                    <!-- Mock Browser -->
                    <div class="absolute inset-4 glass rounded-lg overflow-hidden project-img-zoom">
                        <div class="flex items-center gap-1.5 px-3 py-2 bg-dark-800/80 border-b border-gray-800">
                            <div class="w-2 h-2 rounded-full bg-red-500/70"></div>
                            <div class="w-2 h-2 rounded-full bg-yellow-500/70"></div>
                            <div class="w-2 h-2 rounded-full bg-green-500/70"></div>
                            <span class="text-[10px] text-gray-500 ml-2 font-mono">localhost:3000</span>
                        </div>
                        <div class="p-4 space-y-2">
                            <div class="h-3 bg-accent-primary/20 rounded w-3/4"></div>
                            <div class="h-2 bg-gray-700 rounded w-full"></div>
                            <div class="h-2 bg-gray-700 rounded w-5/6"></div>
                            <div class="flex gap-2 mt-3">
                                <div class="h-8 bg-accent-primary/20 rounded flex-1"></div>
                                <div class="h-8 bg-accent-secondary/20 rounded flex-1"></div>
                            </div>
                            <div class="grid grid-cols-3 gap-1.5 mt-3">
                                <div class="h-12 bg-gray-800 rounded"></div>
                                <div class="h-12 bg-gray-800 rounded"></div>
                                <div class="h-12 bg-gray-800 rounded"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Overlay -->
                    <div class="project-overlay absolute inset-0 bg-dark-900/60 flex items-center justify-center gap-4">
                        <a href="#" class="btn-primary px-4 py-2 rounded-lg text-sm font-medium text-white inline-flex items-center gap-1.5">
                            <i data-lucide="external-link" class="w-3.5 h-3.5"></i> Demo
                        </a>
                        <a href="#" class="btn-outline px-4 py-2 rounded-lg text-sm font-medium text-gray-300 inline-flex items-center gap-1.5">
                            <i data-lucide="github" class="w-3.5 h-3.5"></i> Code
                        </a>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="w-2 h-2 rounded-full bg-accent-primary"></span>
                        <span class="text-xs text-gray-500 font-mono">Proyek Akademik</span>
                    </div>
                    <h4 class="font-outfit font-semibold text-lg text-white mb-2">Website Sederhana</h4>
                    <p class="text-sm text-gray-400 mb-4 leading-relaxed">Membuat website sederhana menggunakan HTML, CSS, JavaScript, PHP, dan SQL. Fokus pada desain tampilan, struktur halaman, dan logika dasar sistem.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="tag-chip text-xs px-2.5 py-1 rounded-full border border-gray-700 text-gray-400 bg-dark-700/50">HTML</span>
                        <span class="tag-chip text-xs px-2.5 py-1 rounded-full border border-gray-700 text-gray-400 bg-dark-700/50">CSS</span>
                        <span class="tag-chip text-xs px-2.5 py-1 rounded-full border border-gray-700 text-gray-400 bg-dark-700/50">JavaScript</span>
                        <span class="tag-chip text-xs px-2.5 py-1 rounded-full border border-gray-700 text-gray-400 bg-dark-700/50">PHP</span>
                        <span class="tag-chip text-xs px-2.5 py-1 rounded-full border border-gray-700 text-gray-400 bg-dark-700/50">SQL</span>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="project-card glass rounded-2xl overflow-hidden reveal">
                <div class="relative h-52 overflow-hidden bg-gradient-to-br from-accent-secondary/20 via-dark-600 to-accent-tertiary/20">
                    <div class="absolute inset-4 glass rounded-lg overflow-hidden project-img-zoom">
                        <div class="flex items-center gap-1.5 px-3 py-2 bg-dark-800/80 border-b border-gray-800">
                            <div class="w-2 h-2 rounded-full bg-red-500/70"></div>
                            <div class="w-2 h-2 rounded-full bg-yellow-500/70"></div>
                            <div class="w-2 h-2 rounded-full bg-green-500/70"></div>
                            <span class="text-[10px] text-gray-500 ml-2 font-mono">system-design.pdf</span>
                        </div>
                        <div class="p-4 space-y-3">
                            <!-- Flowchart mockup -->
                            <div class="flex items-center justify-center gap-2">
                                <div class="w-14 h-8 border border-accent-secondary/40 rounded flex items-center justify-center text-[8px] text-accent-secondary">Start</div>
                                <div class="w-4 h-px bg-accent-secondary/40"></div>
                                <div class="w-14 h-8 border border-accent-primary/40 rounded flex items-center justify-center text-[8px] text-accent-primary">Process</div>
                                <div class="w-4 h-px bg-accent-primary/40"></div>
                                <div class="w-14 h-8 border border-accent-tertiary/40 rounded flex items-center justify-center text-[8px] text-accent-tertiary">End</div>
                            </div>
                            <div class="h-2 bg-gray-700 rounded w-full"></div>
                            <div class="h-2 bg-gray-700 rounded w-4/5"></div>
                            <div class="flex gap-2">
                                <div class="w-20 h-16 border border-gray-700 rounded p-1">
                                    <div class="h-1.5 bg-accent-primary/20 rounded w-3/4 mb-1"></div>
                                    <div class="h-1 bg-gray-800 rounded w-full mb-0.5"></div>
                                    <div class="h-1 bg-gray-800 rounded w-5/6"></div>
                                </div>
                                <div class="w-20 h-16 border border-gray-700 rounded p-1">
                                    <div class="h-1.5 bg-accent-secondary/20 rounded w-3/4 mb-1"></div>
                                    <div class="h-1 bg-gray-800 rounded w-full mb-0.5"></div>
                                    <div class="h-1 bg-gray-800 rounded w-5/6"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="project-overlay absolute inset-0 bg-dark-900/60 flex items-center justify-center gap-4">
                        <a href="#" class="btn-primary px-4 py-2 rounded-lg text-sm font-medium text-white inline-flex items-center gap-1.5">
                            <i data-lucide="external-link" class="w-3.5 h-3.5"></i> Demo
                        </a>
                        <a href="#" class="btn-outline px-4 py-2 rounded-lg text-sm font-medium text-gray-300 inline-flex items-center gap-1.5">
                            <i data-lucide="github" class="w-3.5 h-3.5"></i> Code
                        </a>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="w-2 h-2 rounded-full bg-accent-secondary"></span>
                        <span class="text-xs text-gray-500 font-mono">Latihan Akademik</span>
                    </div>
                    <h4 class="font-outfit font-semibold text-lg text-white mb-2">Perancangan Sistem</h4>
                    <p class="text-sm text-gray-400 mb-4 leading-relaxed">Membuat flowchart, DFD, dan ERD sederhana untuk analisis kebutuhan sistem. Fokus pada pemahaman alur proses dan relasi data.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="tag-chip text-xs px-2.5 py-1 rounded-full border border-gray-700 text-gray-400 bg-dark-700/50">Flowchart</span>
                        <span class="tag-chip text-xs px-2.5 py-1 rounded-full border border-gray-700 text-gray-400 bg-dark-700/50">DFD</span>
                        <span class="tag-chip text-xs px-2.5 py-1 rounded-full border border-gray-700 text-gray-400 bg-dark-700/50">ERD</span>
                        <span class="tag-chip text-xs px-2.5 py-1 rounded-full border border-gray-700 text-gray-400 bg-dark-700/50">System Design</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================================ -->
<!-- FEEDBACK SECTION                              -->
<!-- ============================================ -->
<section id="feedback" class="relative py-24 md:py-32 overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-accent-tertiary/20 to-transparent"></div>
    <div class="absolute top-1/3 right-0 w-80 h-80 bg-accent-secondary/3 rounded-full blur-3xl"></div>

    <div class="relative z-10 max-w-6xl mx-auto px-6">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <p class="text-accent-primary font-mono text-sm tracking-widest uppercase mb-3 reveal">// Feedback</p>
            <h2 class="font-outfit font-bold text-3xl md:text-4xl lg:text-5xl text-white mb-4 reveal">
                Tinggalkan <span class="gradient-text">Komentar</span>
            </h2>
            <div class="w-20 h-1 bg-gradient-to-r from-accent-primary to-accent-secondary rounded-full mx-auto reveal"></div>
            <p class="text-gray-400 mt-4 max-w-lg mx-auto reveal">Saya sangat menghargai setiap masukan untuk terus berkembang.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
        <!-- FORM KOMENTAR -->
        <div class="reveal-left">
            <div class="glass-strong rounded-2xl p-8 glow-box">

                <h3 class="font-outfit font-semibold text-lg text-white mb-6 flex items-center gap-2">
                    <i data-lucide="message-square-plus"
                        class="w-5 h-5 text-accent-primary"></i>
                    Kirim Komentar
                </h3>

                <form id="comment-form"
                    class="space-y-6"
                    method="POST"
                    novalidate>

                    <!-- Nama -->
                    <div class="relative">
                        <input
                            type="text"
                            id="comment-name"
                            name="nama"
                            class="form-input w-full px-4 py-3.5 rounded-xl text-white text-sm placeholder-transparent peer"
                            placeholder="Nama"
                            required>

                        <label
                            for="comment-name"
                            class="floating-label absolute left-4 top-3.5 text-sm text-gray-500 peer-focus:text-accent-primary">
                            Nama Lengkap
                        </label>

                        <p class="error-msg text-xs text-red-400 mt-1.5 hidden">
                            Nama wajib diisi
                        </p>
                    </div>

                    <!-- Email -->
                    <div class="relative">
                        <input
                            type="email"
                            id="comment-email"
                            name="email"
                            class="form-input w-full px-4 py-3.5 rounded-xl text-white text-sm placeholder-transparent peer"
                            placeholder="Email"
                            required>

                        <label
                            for="comment-email"
                            class="floating-label absolute left-4 top-3.5 text-sm text-gray-500 peer-focus:text-accent-primary">
                            Email
                        </label>

                        <p class="error-msg text-xs text-red-400 mt-1.5 hidden">
                            Email tidak valid
                        </p>
                    </div>

                    <!-- Pesan -->
                    <div class="relative">
                        <textarea
                            id="comment-message"
                            name="pesan"
                            rows="4"
                            class="form-input w-full px-4 py-3.5 rounded-xl text-white text-sm placeholder-transparent peer resize-none"
                            placeholder="Pesan"
                            required></textarea>

                        <label
                            for="comment-message"
                            class="floating-label absolute left-4 top-3.5 text-sm text-gray-500 peer-focus:text-accent-primary">
                            Pesan / Komentar
                        </label>

                        <p class="error-msg text-xs text-red-400 mt-1.5 hidden">
                            Pesan wajib diisi
                        </p>
                    </div>

                    <!-- Tombol Submit -->
                    <button
                        type="submit"
                        id="submit-btn"
                        class="btn-primary w-full py-3.5 rounded-xl text-sm font-medium text-white flex items-center justify-center gap-2 relative overflow-hidden">

                        <span id="submit-text">
                            Kirim Komentar
                        </span>

                        <i
                            data-lucide="send"
                            class="w-4 h-4"
                            id="submit-icon"></i>

                        <!-- Loader -->
                        <div id="submit-loader"
                            class="hidden absolute inset-0 flex items-center justify-center bg-accent-primary">

                            <div class="loader-ring w-5 h-5 rounded-full">
                            </div>

                        </div>
                    </button>

                </form>

                <!-- Success Message -->
                <div id="success-msg"
                    class="hidden mt-4 glass rounded-xl p-4 border border-accent-secondary/30">

                    <div class="flex items-center gap-2 text-accent-secondary">

                        <i data-lucide="check-circle-2"
                            class="w-5 h-5"></i>

                        <span class="text-sm font-medium">
                            Komentar berhasil dikirim!
                        </span>

                    </div>
                </div>

            </div>
        </div>

        <!-- DISPLAY KOMENTAR -->
        <div class="reveal-right">

            <h3 class="font-outfit font-semibold text-lg text-white mb-6 flex items-center gap-2">

                <i data-lucide="messages-square"
                    class="w-5 h-5 text-accent-secondary"></i>

                Komentar Terbaru

                <span id="comment-count"
                    class="ml-auto text-xs text-gray-500 font-mono">

                    0 komentar

                </span>
            </h3>

            <div id="comments-container"
                class="space-y-4 max-h-[520px] overflow-y-auto pr-2"
                style="scrollbar-width: thin; scrollbar-color: #6c63ff40 transparent;">

                <!-- Komentar otomatis dari database -->

            </div>

        </div>

    </div>
    </div>
</section>


<!-- ============================================ -->
<!-- CONTACT SECTION                               -->
<!-- ============================================ -->
<section id="contact" class="relative py-24 md:py-32 overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-accent-primary/20 to-transparent"></div>
    <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-[600px] h-[600px] bg-accent-primary/3 rounded-full blur-3xl"></div>

    <div class="relative z-10 max-w-5xl mx-auto px-6">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <p class="text-accent-primary font-mono text-sm tracking-widest uppercase mb-3 reveal">// Kontak</p>
            <h2 class="font-outfit font-bold text-3xl md:text-4xl lg:text-5xl text-white mb-4 reveal">
                Mari <span class="gradient-text">Terhubung</span>
            </h2>
            <div class="w-20 h-1 bg-gradient-to-r from-accent-primary to-accent-secondary rounded-full mx-auto reveal"></div>
            <p class="text-gray-400 mt-4 max-w-lg mx-auto reveal">Jangan ragu untuk menghubungi saya. Saya selalu terbuka untuk diskusi dan kolaborasi.</p>
        </div>

        <!-- Contact Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-12 stagger-children" id="contact-cards">
            <!-- Phone -->
            <a href="tel:+6285837569337" class="glass rounded-xl p-6 text-center glow-box group">
                <div class="w-12 h-12 mx-auto mb-4 rounded-xl bg-accent-primary/10 flex items-center justify-center group-hover:bg-accent-primary/20 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#6c63ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13.5a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 2.69h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 10.1a16 16 0 0 0 6 6l1.57-1.57a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                </div>
                <p class="text-sm font-medium text-white mb-1">Telepon</p>
                <p class="text-xs text-gray-400">+62 858 3756 9337</p>
            </a>

            <!-- Email -->
            <a href="mailto:m.rafirhamadoni@gmail.com" class="glass rounded-xl p-6 text-center glow-box group">
                <div class="w-12 h-12 mx-auto mb-4 rounded-xl bg-accent-secondary/10 flex items-center justify-center group-hover:bg-accent-secondary/20 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#00d4aa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                </div>
                <p class="text-sm font-medium text-white mb-1">Email</p>
                <p class="text-xs text-gray-400 break-all">m.rafirhamadoni@gmail.com</p>
            </a>

            <!-- Instagram -->
            <a href="https://instagram.com/m.rafi_rhamadoni" target="_blank" rel="noopener" class="glass rounded-xl p-6 text-center glow-box group">
                <div class="w-12 h-12 mx-auto mb-4 rounded-xl bg-accent-tertiary/10 flex items-center justify-center group-hover:bg-accent-tertiary/20 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ff6b9d" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/></svg>
                </div>
                <p class="text-sm font-medium text-white mb-1">Instagram</p>
                <p class="text-xs text-gray-400">@m.rafi_rhamadoni</p>
            </a>

            <!-- GitHub -->
            <a href="https://github.com/RAFI-RHAMADONI" class="glass rounded-xl p-6 text-center glow-box group">
                <div class="w-12 h-12 mx-auto mb-4 rounded-xl bg-white/5 flex items-center justify-center group-hover:bg-white/10 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"/><path d="M9 18c-4.51 2-5-2-7-2"/></svg>
                </div>
                <p class="text-sm font-medium text-white mb-1">GitHub</p>
                <p class="text-xs text-gray-400">@Rafi-Rhamadoni</p>
            </a>

            <!-- LinkedIn -->
            <a href="https://www.linkedin.com/in/muhammad-rafi-rhamadoni-637919372/" target="_blank" rel="noopener" class="glass rounded-xl p-6 text-center glow-box group">
                <div class="w-12 h-12 mx-auto mb-4 rounded-xl bg-blue-500/10 flex items-center justify-center group-hover:bg-blue-500/20 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#60a5fa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect width="4" height="12" x="2" y="9"/><circle cx="4" cy="4" r="2"/></svg>
                </div>
                <p class="text-sm font-medium text-white mb-1">LinkedIn</p>
                <p class="text-xs text-gray-400">Muhammad Rafi Rhamadoni</p>
            </a>
        </div>

        <!-- Social Media Icons -->
        <div class="flex items-center justify-center gap-4 reveal">
            <a href="tel:+6285837569337" class="social-icon w-12 h-12 glass rounded-xl flex items-center justify-center text-gray-400 hover:border-accent-primary/40 transition-all duration-300 hover:shadow-[0_0_20px_rgba(108,99,255,0.5)]" aria-label="Phone">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#6c63ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13.5a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 2.69h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 10.1a16 16 0 0 0 6 6l1.57-1.57a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            </a>
            <a href="mailto:m.rafirhamadoni@gmail.com" class="social-icon w-12 h-12 glass rounded-xl flex items-center justify-center text-gray-400 hover:border-accent-primary/40 transition-all duration-300 hover:shadow-[0_0_20px_rgba(108,99,255,0.5)]" aria-label="Email">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#6c63ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
            </a>
            <a href="https://instagram.com/m.rafi_rhamadoni" target="_blank" rel="noopener" class="social-icon w-12 h-12 glass rounded-xl flex items-center justify-center text-gray-400 hover:border-accent-tertiary/40 transition-all duration-300 hover:shadow-[0_0_20px_rgba(255,107,157,0.5)]" aria-label="Instagram">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ff6b9d" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/></svg>
            </a>
            <a href="https://github.com/RAFI-RHAMADONI" class="social-icon w-12 h-12 glass rounded-xl flex items-center justify-center text-gray-400 hover:border-white/40 transition-all duration-300 hover:shadow-[0_0_20px_rgba(255,255,255,0.3)]" aria-label="GitHub">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"/><path d="M9 18c-4.51 2-5-2-7-2"/></svg>
            </a>
            <a href="https://www.linkedin.com/in/muhammad-rafi-rhamadoni-637919372/" target="_blank" rel="noopener" class="social-icon w-12 h-12 glass rounded-xl flex items-center justify-center text-gray-400 hover:border-blue-400/40 transition-all duration-300 hover:shadow-[0_0_20px_rgba(96,165,250,0.5)]" aria-label="LinkedIn">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#60a5fa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect width="4" height="12" x="2" y="9"/><circle cx="4" cy="4" r="2"/></svg>
            </a>
        </div>
    </div>
</section>


<!-- ============================================ -->
<!-- FOOTER                                        -->
<!-- ============================================ -->
<footer class="relative py-12 border-t border-gray-800/50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex flex-col md:flex-row items-center justify-between gap-6">
            <!-- Logo -->
            <div class="flex items-center gap-2">
                <div class="w-9 h-9 rounded-full overflow-hidden flex-shrink-0 ring-2 ring-accent-primary/30">
                    <img src="./assets/foto1.jpeg" alt="Rafi" class="w-full h-full object-cover">
                </div>
                <span class="font-outfit font-semibold text-white">Rafi<span class="text-accent-primary">.</span></span>
            </div>

            <!-- Quote -->
            <p class="text-sm text-gray-500 text-center italic max-w-sm">
                "The only way to do great work is to love what you do."
            </p>

            <!-- Copyright -->
            <p class="text-sm text-gray-500 text-center md:text-right">
                &copy; 2026 Muhammad Rafi Rhamadoni
            </p>
        </div>
    </div>
</footer>


<!-- ============================================ -->
<!-- BACK TO TOP BUTTON                            -->
<!-- ============================================ -->
<button id="back-to-top" class="fixed bottom-8 right-8 w-12 h-12 rounded-xl bg-accent-primary/90 text-white flex items-center justify-center z-50 opacity-0 invisible" aria-label="Back to Top">
    <i data-lucide="chevron-up" class="w-5 h-5"></i>
</button>


<!-- ============================================ -->
<!-- JAVASCRIPT                                    -->
<!-- ============================================ -->
<script>
document.addEventListener('DOMContentLoaded', () => {

    // ========== Initialize Lucide Icons ==========
    lucide.createIcons();

    // ========== Loading Screen ==========
    const loader = document.getElementById('loader');
    window.addEventListener('load', () => {
        setTimeout(() => {
            loader.style.opacity = '0';
            loader.style.visibility = 'hidden';
            setTimeout(() => loader.remove(), 600);
        }, 800);
    });

    // Fallback: remove loader after 3s
    setTimeout(() => {
        if (loader && loader.parentNode) {
            loader.style.opacity = '0';
            loader.style.visibility = 'hidden';
            setTimeout(() => { if(loader.parentNode) loader.remove(); }, 600);
        }
    }, 3000);

    // ========== Scroll Progress Bar ==========
    const scrollProgress = document.getElementById('scroll-progress');
    function updateScrollProgress() {
        const scrollTop = window.scrollY;
        const docHeight = document.documentElement.scrollHeight - window.innerHeight;
        const progress = (scrollTop / docHeight) * 100;
        scrollProgress.style.width = progress + '%';
    }

    // ========== Navbar Scroll Effect ==========
    const navbar = document.getElementById('navbar');
    function updateNavbar() {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    }

    // ========== Active Nav Link ==========
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link');
    const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');

    function updateActiveNav() {
        const scrollPos = window.scrollY + 200;
        sections.forEach(section => {
            const top = section.offsetTop;
            const height = section.offsetHeight;
            const id = section.getAttribute('id');

            if (scrollPos >= top && scrollPos < top + height) {
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.dataset.section === id) link.classList.add('active');
                });
                mobileNavLinks.forEach(link => {
                    link.classList.remove('text-accent-primary');
                    if (link.dataset.section === id) link.classList.add('text-accent-primary');
                });
            }
        });
    }

    // ========== Back to Top ==========
    const backToTop = document.getElementById('back-to-top');
    function updateBackToTop() {
        if (window.scrollY > 400) {
            backToTop.style.opacity = '1';
            backToTop.style.visibility = 'visible';
        } else {
            backToTop.style.opacity = '0';
            backToTop.style.visibility = 'hidden';
        }
    }

    backToTop.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    // ========== Combined Scroll Handler ==========
    let ticking = false;
    window.addEventListener('scroll', () => {
        if (!ticking) {
            requestAnimationFrame(() => {
                updateScrollProgress();
                updateNavbar();
                updateActiveNav();
                updateBackToTop();
                ticking = false;
            });
            ticking = true;
        }
    });

    // ========== Mobile Menu ==========
    const hamburgerBtn = document.getElementById('hamburger-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const closeMenu = document.getElementById('close-menu');
    const menuOverlay = document.getElementById('menu-overlay');

    function openMenu() {
        mobileMenu.classList.add('open');
        menuOverlay.classList.remove('hidden');
        hamburgerBtn.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeMenuFn() {
        mobileMenu.classList.remove('open');
        menuOverlay.classList.add('hidden');
        hamburgerBtn.classList.remove('active');
        document.body.style.overflow = '';
    }

    hamburgerBtn.addEventListener('click', openMenu);
    closeMenu.addEventListener('click', closeMenuFn);
    menuOverlay.addEventListener('click', closeMenuFn);

    mobileNavLinks.forEach(link => {
        link.addEventListener('click', closeMenuFn);
    });

    // ========== Typing Animation ==========
    const typingTexts = [
        'Mahasiswa Sistem Informasi',
        'Web Developer',
        'Big Data Enthusiast',
        'Problem Solver',
        'Tech Learner'
    ];
    let textIndex = 0;
    let charIndex = 0;
    let isDeleting = false;
    const typingEl = document.getElementById('typing-text');

    function typeWriter() {
        const currentText = typingTexts[textIndex];

        if (!isDeleting) {
            typingEl.textContent = currentText.substring(0, charIndex + 1);
            charIndex++;

            if (charIndex === currentText.length) {
                isDeleting = true;
                setTimeout(typeWriter, 2000);
                return;
            }
        } else {
            typingEl.textContent = currentText.substring(0, charIndex - 1);
            charIndex--;

            if (charIndex === 0) {
                isDeleting = false;
                textIndex = (textIndex + 1) % typingTexts.length;
            }
        }

        const speed = isDeleting ? 40 : 80;
        setTimeout(typeWriter, speed);
    }

    typeWriter();

    // ========== Particles ==========
    const particlesContainer = document.getElementById('particles');
    function createParticle() {
        const particle = document.createElement('div');
        particle.classList.add('particle');
        const size = Math.random() * 4 + 2;
        const colors = ['#6c63ff', '#00d4aa', '#ff6b9d'];
        const color = colors[Math.floor(Math.random() * colors.length)];
        const left = Math.random() * 100;
        const duration = Math.random() * 8 + 6;

        particle.style.cssText = `
            width: ${size}px;
            height: ${size}px;
            background: ${color};
            left: ${left}%;
            bottom: -10px;
            animation-duration: ${duration}s;
            opacity: 0.6;
        `;

        particlesContainer.appendChild(particle);
        setTimeout(() => particle.remove(), duration * 1000);
    }

    setInterval(createParticle, 400);

    // ========== Scroll Reveal ==========
    const revealElements = document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-scale, .stagger-children');

    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });

    revealElements.forEach(el => revealObserver.observe(el));

    // ========== Counter Animation ==========
    const counterValues = document.querySelectorAll('.counter-value');
    let countersAnimated = false;

    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !countersAnimated) {
                countersAnimated = true;
                counterValues.forEach(counter => {
                    const target = parseInt(counter.dataset.target);
                    let current = 0;
                    const increment = target / 60;
                    const timer = setInterval(() => {
                        current += increment;
                        if (current >= target) {
                            counter.textContent = target + '+';
                            clearInterval(timer);
                        } else {
                            counter.textContent = Math.floor(current) + '+';
                        }
                    }, 30);
                });
            }
        });
    }, { threshold: 0.5 });

    counterValues.forEach(el => counterObserver.observe(el));

    // ========== Skill Bars Animation ==========
    const skillBars = document.querySelectorAll('.skill-bar-fill');

    const skillObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const bar = entry.target;
                const targetWidth = bar.dataset.width;
                setTimeout(() => {
                    bar.style.width = targetWidth;
                }, 200);
            }
        });
    }, { threshold: 0.3 });

    skillBars.forEach(bar => skillObserver.observe(bar));

    // ========== Comments Database System ==========
    const commentsContainer =
        document.getElementById(
            'comments-container'
        );

    const commentCount =
        document.getElementById(
            'comment-count'
        );

    const commentForm =
        document.getElementById(
            'comment-form'
        );

    const successMsg =
        document.getElementById(
            'success-msg'
        );

    // format tanggal
    function formatDate(dateStr) {

        const date =
            new Date(dateStr);

        return date.toLocaleDateString(
            'id-ID',
            {
                day: 'numeric',
                month: 'short',
                year: 'numeric'
            }
        );
    }

    // ambil komentar dari database
    async function loadComments() {

        try {

            const response =
                await fetch(
                    'ambil_komentar.php'
                );

            const comments =
                await response.json();

            commentsContainer.innerHTML =
                '';

            commentCount.textContent =
                `${comments.length} komentar`;

            comments.forEach(comment => {

                const initials =
                    comment.nama
                    .split(' ')
                    .map(word =>
                        word[0]
                    )
                    .join('')
                    .substring(0, 2)
                    .toUpperCase();

                const card =
                    document.createElement(
                        'div'
                    );

                card.className =
                    'comment-card glass rounded-xl p-5 border border-transparent';

                card.innerHTML = `
                    <div class="flex items-start gap-4">

                        <div class="w-10 h-10 rounded-full bg-gradient-to-br from-accent-primary to-accent-secondary flex items-center justify-center text-white text-sm font-bold flex-shrink-0">
                            ${initials}
                        </div>

                        <div class="flex-1 min-w-0">

                            <div class="flex items-center gap-2 flex-wrap">

                                <p class="text-sm font-semibold text-white">
                                    ${comment.nama}
                                </p>

                                <span class="text-[10px] text-gray-600">
                                    •
                                </span>

                                <p class="text-[10px] text-gray-500 font-mono">
                                    ${formatDate(comment.created_at)}
                                </p>

                            </div>

                            <p class="text-sm text-gray-400 mt-1.5 leading-relaxed">
                                ${comment.pesan}
                            </p>

                        </div>

                    </div>
                `;

                commentsContainer
                .appendChild(card);
            });

        } catch(error) {

            console.error(
                'Gagal load komentar:',
                error
            );
        }
    }

    // submit komentar ke database
    commentForm.addEventListener(
        'submit',
        async function(e){

            e.preventDefault();

            const submitBtn =
                document.getElementById(
                    'submit-btn'
                );

            const submitLoader =
                document.getElementById(
                    'submit-loader'
                );

            submitLoader
            .classList
            .remove('hidden');

            submitBtn.disabled =
                true;

            try {

                const formData =
                    new FormData(
                        commentForm
                    );

                const response =
                    await fetch(
                        'proses_komentar.php',
                        {
                            method: 'POST',
                            body: formData
                        }
                    );

                const result =
                    await response.json();

                if (
                    result.status ===
                    'success'
                ) {

                    commentForm.reset();

                    successMsg
                    .classList
                    .remove(
                        'hidden'
                    );

                    loadComments();

                    setTimeout(() => {

                        successMsg
                        .classList
                        .add(
                            'hidden'
                        );

                    }, 3000);

                } else {

                    console.log(
                        result
                    );
                }

            } catch(error){

                console.error(
                    'Submit error:',
                    error
                );
            }

            submitLoader
            .classList
            .add('hidden');

            submitBtn.disabled =
                false;
        }
    );

    // realtime remove error
    document
    .querySelectorAll(
        '.form-input'
    )
    .forEach(input => {

        input.addEventListener(
            'input',
            () => {

                input.style.borderColor =
                    '';

                const error =
                    input
                    .parentElement
                    .querySelector(
                        '.error-msg'
                    );

                if(error){
                    error.classList
                    .add('hidden');
                }
            }
        );
    });

    // load komentar saat web dibuka
    loadComments();



    // ========== Download CV ==========
    document.getElementById('download-cv-btn').addEventListener('click', (e) => {
        e.preventDefault();
        alert('CV akan tersedia untuk didownload segera. Silakan hubungi saya melalui email untuk mendapatkan CV terbaru.');
    });

    // ========== Smooth scroll for anchor links ==========
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;

            e.preventDefault();
            const targetEl = document.querySelector(targetId);
            if (targetEl) {
                const offset = 80;
                const top = targetEl.getBoundingClientRect().top + window.scrollY - offset;
                window.scrollTo({ top, behavior: 'smooth' });
            }
        });
    });

    // ========== Initialize on load ==========
    updateScrollProgress();
    updateNavbar();
    updateActiveNav();
    updateBackToTop();
});
</script>

</body>
</html>
