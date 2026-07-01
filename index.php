<?php
$stack = [
    'Frontend' => ['React', 'Vite', 'Tailwind CSS', 'JavaScript / TypeScript', 'HTML5 / CSS3', 'Responsive Design'],
    'Backend & data' => ['PHP', 'Firebase', 'Firestore', 'Node.js', 'JavaScript', 'REST APIs', 'SQL / MySQL'],
    'Outils & workflow' => ['Git', 'Python / WeasyPrint', 'VS Code', 'UML', 'Agilité', 'Docker', 'npm / yarn', 'Markdown'],
    'Infrastructure' => ['Laragon', 'Firebase Hosting', 'Deno', 'Nginx / Apache'],
    'Réseau & vidéosurveillance' => [['Configuration réseau', ['VPN', 'Firewall']], 'Câblage structuré', 'Packet Tracer', 'GNS3', 'Supervision & maintenance'],
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>John-Sheer — Développeur &amp; technicien réseau / vidéosurveillance</title>
    <meta name="description" content="John-Sheer — développeur full-stack, technicien réseau & vidéosurveillance, SheerTech.">
    <meta name="theme-color" content="#0b0e14">
    <meta name="color-scheme" content="dark">
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Crect width='32' height='32' rx='6' fill='%230b0e14'/%3E%3Ctext x='16' y='22' font-size='18' text-anchor='middle' fill='%23d8b36b' font-family='monospace' font-weight='bold'%3EJS%3C/text%3E%3C/svg%3E">
    <link rel="apple-touch-icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Crect width='32' height='32' rx='6' fill='%230b0e14'/%3E%3Ctext x='16' y='22' font-size='18' text-anchor='middle' fill='%23d8b36b' font-family='monospace' font-weight='bold'%3EJS%3C/text%3E%3C/svg%3E">

    <meta http-equiv="Content-Security-Policy" content="default-src 'self'; connect-src https://formspree.io; form-action https://formspree.io; style-src 'self' 'unsafe-inline'; img-src 'self' data:; script-src 'self' 'unsafe-inline'; frame-ancestors 'none'; font-src 'self'">

    <style>
        :root {
            --bg: #08080b;
            --panel: #08080b;
            --panel-2: #08080b;
            --border: rgba(52, 184, 138, 0.2);
            --text: #e9ecf2;
            --muted: #a0aabf;
            --emerald: #34b88a;
            --radius: 14px;
            --maxw: 1080px;
        }

        * { box-sizing: border-box; }

        html { scroll-behavior: smooth; }

        body {
            margin: 0;
            background: var(--bg);
            background-image:
                radial-gradient(circle at 15% 0%, rgba(216, 179, 107, 0.07), transparent 45%),
                radial-gradient(circle at 85% 20%, rgba(52, 184, 138, 0.06), transparent 40%);
            color: var(--text);
            font-family: 'Consolas', monospace;
            line-height: 1.55;
            -webkit-font-smoothing: antialiased;
        }

        a { color: inherit; }

        .mono { font-family: monospace; }

        .accent { color: var(--emerald); }

        :focus-visible {
            outline: 2px solid var(--emerald);
            outline-offset: 3px;
        }

        ::selection {
            background: rgba(216, 179, 107, 0.25);
            color: var(--text);
        }

        /* ---------- SKIP LINK ---------- */
        .skip-link {
            position: absolute;
            top: -100%;
            left: 50%;
            transform: translateX(-50%);
            z-index: 999;
            padding: 10px 20px;
            background: var(--emerald);
            color: #1a1505;
            border-radius: 0 0 8px 8px;
            font-family: 'Consolas', monospace;
            font-size: 0.9rem;
            text-decoration: none;
            transition: top 0.2s ease;
        }
        .skip-link:focus { top: 0; }

        /* ---------- NAV ---------- */
        .nav {
            position: sticky;
            top: 0;
            z-index: 10;
            backdrop-filter: blur(10px);
            background: rgba(8, 8, 11, 0.75);
            border-bottom: 1px solid var(--border);
        }

        .nav-inner {
            max-width: var(--maxw);
            margin: 0 auto;
            padding: 18px 24px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .wordmark {
            font-family: 'Segoe UI', 'Tahoma', sans-serif;
            font-weight: 700;
            font-size: 2rem;
            letter-spacing: -0.02em;
            color: #34b88a;
        }

        .founder-tag {
            font-family: monospace;
            font-size: 0.85rem;
            color: var(--muted);
            margin-left: 10px;
            padding: 3px 8px;
            border: 1px solid rgba(52, 184, 138, 0.3);
            border-radius: 6px;
            vertical-align: middle;
            box-shadow: 0 0 10px rgba(52, 184, 138, 0.25), 0 0 25px rgba(52, 184, 138, 0.1);
        }

        .nav-links {
            display: flex;
            gap: 28px;
            font-size: 1.1rem;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--muted);
            transition: color 0.2s ease, text-shadow 0.2s ease;
        }

        .nav-links a:hover {
            color: var(--text);
            text-shadow: 0 0 8px rgba(52, 184, 138, 0.5), 0 0 20px rgba(52, 184, 138, 0.2);
        }

        /* ---------- HERO ---------- */
        .hero {
            max-width: var(--maxw);
            margin: 0 auto;
            padding: 30px 24px 24px;
            scroll-margin-top: 80px;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.15fr 0.85fr;
            gap: 48px;
            align-items: start;
        }

        .hero-photo-wrap {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 16px;
            z-index: 1;
        }

        .photo-frame {
            position: relative;
            width: 100%;
            -webkit-mask-image: linear-gradient(to bottom, #000 60%, transparent 100%);
            mask-image: linear-gradient(to bottom, #000 60%, transparent 100%);
            max-width: 700px;
            aspect-ratio: 1 / 1;
            border-radius: 8px;
            background-image: url('John.png');
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
            filter: grayscale(100%) brightness(1.05) contrast(1.05);
            transition: filter 0.4s ease, transform 0.4s ease;
            transform-origin: top center;
        }

        .photo-frame.hover-active {
            filter: grayscale(0%) brightness(1) contrast(1);
            transform: scale(1.7);
            z-index: 10;
        }

        .availability {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-family: monospace;
            font-size: 0.78rem;
            color: #fff;
            background: rgba(52, 184, 138, 0.1);
            border: 1px solid rgba(52, 184, 138, 0.3);
            border-radius: 8px;
            padding: 6px 12px;
            box-shadow: 0 0 10px rgba(52, 184, 138, 0.25), 0 0 25px rgba(52, 184, 138, 0.1);
            position: relative;
            z-index: 20;
            cursor: pointer;
            text-decoration: none;
            transition: background 0.2s ease, box-shadow 0.2s ease;
            margin-top: -15px;
        }
        .availability:hover {
            background: rgba(52, 184, 138, 0.2);
            box-shadow: 0 0 14px rgba(52, 184, 138, 0.4), 0 0 35px rgba(52, 184, 138, 0.15);
        }

        .eyebrow {
            color: var(--emerald);
            font-size: 1.3rem;
            letter-spacing: 0.04em;
            margin: 0 0 14px;
        }

        .hero-title {
            font-family: 'Segoe UI', 'Tahoma', sans-serif;
            font-weight: 700;
            font-size: clamp(1.7rem, 4.5vw, 2.8rem);
            line-height: 1.04;
            letter-spacing: -0.02em;
            margin: 0 0 22px;
        }

        .terminal {
            max-width: 560px;
            border: 1px solid rgba(52, 184, 138, 0.35);
            border-radius: 0;
            background: #000;
            margin-bottom: 40px;
            font-family: 'Consolas', monospace;
            height: 170px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }
        .terminal-title {
            flex: 0 0 auto;
            background: #1a1a1a;
            padding: 5px 14px;
            font-size: 0.75rem;
            color: #ccc;
            border-bottom: 1px solid rgba(52, 184, 138, 0.35);
            user-select: none;
        }
        .terminal-body {
            flex: 1;
            min-height: 0;
            padding: 14px 16px 16px;
            font-size: 0.88rem;
            overflow-y: auto;
        }

        .terminal-body p {
            margin: 0 0 3px;
            font-family: 'Consolas', monospace;
            line-height: 1.5;
        }

        .terminal-body .prompt { color: #8ce; }
        .terminal-body .cmd { color: #e55; }
        .terminal-body .out { color: #bcd; }

        .blink,
        .cursor {
            animation: blink 1s step-end infinite;
        }

        .terminal-body .cursor {
            color: #e55;
        }

        @keyframes blink { 50% { opacity: 0; } }

        .reveal {
            opacity: 0;
            transform: translateY(24px);
            transition: opacity 0.6s cubic-bezier(0.16, 1, 0.3, 1),
                        transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .reveal-delay-1 { transition-delay: 0.1s; }
        .reveal-delay-2 { transition-delay: 0.2s; }
        .reveal-delay-3 { transition-delay: 0.3s; }
        .reveal-delay-4 { transition-delay: 0.4s; }

        .hero-cta {
            display: flex;
            gap: 14px;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-family: monospace;
            font-size: 0.78rem;
            padding: 7px 14px;
            border-radius: 8px;
            text-decoration: none;
            transition: background 0.2s ease, border-color 0.2s ease, transform 0.15s ease;
        }

        .btn:hover { transform: translateY(-1px); }

        .btn-primary {
            background: rgba(52, 184, 138, 0.1);
            border: 1px solid rgba(52, 184, 138, 0.3);
            color: var(--emerald);
        }

        .btn-primary:hover { background: rgba(52, 184, 138, 0.2); }

        .btn-ghost {
            background: transparent;
            border: 1px solid rgba(52, 184, 138, 0.2);
            color: var(--emerald);
        }

        .btn-ghost:hover { background: rgba(52, 184, 138, 0.1); }

        /* ---------- SECTIONS ---------- */
        section {
            max-width: var(--maxw);
            margin: 0 auto;
            padding: 50px 24px 70px;
            border-top: 1px solid var(--border);
            scroll-margin-top: 75px;
        }

        .section-title {
            font-family: 'Segoe UI', 'Tahoma', sans-serif;
            font-size: 1.6rem;
            font-weight: 600;
            margin: 0 0 20px;
        }

        /* ---------- STACK GRID ---------- */
        .stack-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 12px;
        }

        .stack-card {
            background: var(--panel);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 16px;
            transition: border-color 0.2s ease, transform 0.2s ease;
        }

        .stack-card:hover {
            border-color: rgba(52, 184, 138, 0.5);
            transform: translateY(-2px);
        }

        .stack-card h3 {
            margin: 0 0 10px;
            font-family: 'Segoe UI', 'Tahoma', sans-serif;
            font-size: 1rem;
            font-weight: 600;
        }

        .tags {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
        }

        .tag {
            font-family: monospace;
            font-size: 0.78rem;
            color: var(--muted);
            background: var(--panel-2);
            border: 1px solid var(--border);
            border-radius: 5px;
            padding: 3px 7px;
        }

        .dot {
            display: inline-block;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--emerald);
            margin-right: 8px;
        }

        /* ---------- CONTACT ---------- */
        .contact-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px;
        }

        .contact-card {
            display: flex;
            align-items: flex-start;
            gap: 14px;
            background: var(--panel);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 20px;
            text-decoration: none;
            color: var(--text);
            transition: border-color 0.2s ease, transform 0.2s ease;
        }

        .contact-card:hover {
            border-color: rgba(52, 184, 138, 0.7);
            transform: translateY(-2px);
            box-shadow: 0 0 12px rgba(52, 184, 138, 0.3), 0 0 30px rgba(52, 184, 138, 0.1);
        }

        .contact-icon {
            flex: 0 0 auto;
            width: 38px;
            height: 38px;
            border-radius: 9px;
            background: var(--panel-2);
            border: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .contact-icon svg {
            width: 18px;
            height: 18px;
            stroke: var(--emerald);
            fill: none;
            stroke-width: 1.8;
        }

        .contact-label {
            display: block;
            font-size: 0.78rem;
            color: var(--muted);
            margin-bottom: 4px;
        }

        .contact-val {
            font-family: monospace;
            font-size: 0.92rem;
            word-break: break-word;
        }

        /* ---------- FORMULAIRE DEVIS ---------- */
        .form {
            background: var(--panel);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 32px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-size: 0.85rem;
            color: var(--muted);
            margin-bottom: 6px;
            font-family: monospace;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
        }

        .form-control {
            width: 100%;
            padding: 12px 14px;
            background: #000;
            border: 1px solid rgba(52, 184, 138, 0.3);
            border-radius: 6px;
            color: #ddd;
            font-family: 'Consolas', monospace;
            font-size: 0.88rem;
            caret-color: #e55;
            transition: border-color 0.2s ease;
        }

        .form-control:focus {
            outline: none;
            border-color: rgba(52, 184, 138, 0.6);
        }

        .sr-only {
            position: absolute;
            width: 1px; height: 1px;
            overflow: hidden;
            clip: rect(0,0,0,0);
            border: 0;
        }

        .custom-select {
            position: relative;
        }

        .select-trigger {
            cursor: pointer;
            text-align: left;
            display: flex;
            align-items: center;
            justify-content: space-between;
            -webkit-appearance: none;
            appearance: none;
        }

        .select-trigger::after {
            content: '\25BC';
            font-size: 0.6rem;
            color: var(--muted);
            margin-left: 8px;
        }

        .select-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            z-index: 50;
            margin: 2px 0 0;
            padding: 4px 0;
            list-style: none;
            background: #000;
            border: 1px solid rgba(52, 184, 138, 0.3);
            border-radius: 6px;
            max-height: 200px;
            overflow-y: auto;
        }

        .select-menu.open { display: block; }

        .select-menu li {
            font-family: 'Consolas', monospace;
            font-size: 0.85rem;
            color: #ddd;
            padding: 8px 14px;
            cursor: pointer;
            transition: color 0.15s ease;
        }

        .select-menu li:hover {
            color: #34b88a;
        }

        .select-menu li.selected {
            color: #34b88a;
        }

        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.15);
        }

        .msg-terminal {
            border: 1px solid rgba(52, 184, 138, 0.3);
            background: #000;
        }

        .msg-terminal .form-control {
            border: none;
            background: transparent;
        }

        .msg-terminal .form-control:focus {
            border-color: transparent;
        }

        .msg-prompt {
            font-family: 'Consolas', monospace;
            font-size: 0.88rem;
            color: #8ce;
            white-space: pre;
            letter-spacing: 0;
            padding: 10px 14px 0;
            display: none;
        }
        .msg-prompt.visible { display: block; }

        .prompt-cmd {
            color: #e55;
        }

        .msg-wrap {
            position: relative;
        }

        .msg-overlay {
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            padding: 8px 14px 10px;
            font-family: 'Consolas', monospace;
            font-size: 0.88rem;
            line-height: 1.4;
            color: #fff;
            white-space: pre-wrap;
            word-wrap: break-word;
            overflow: hidden;
            pointer-events: none;
            letter-spacing: 0;
        }

        .msg-overlay .cursor {
            color: #e55;
        }

        .message-editor {
            min-height: 56px;
            line-height: 1.4;
            resize: none;
            border-radius: 0;
            color: transparent;
            caret-color: transparent;
            overflow: hidden;
            padding: 8px 14px 10px;
            position: relative;
            background: transparent;
        }

        .form .btn-primary {
            cursor: pointer;
            font-family: monospace;
            font-size: 0.82rem;
            padding: 9px 18px;
        }

        .form-success {
            text-align: center;
            padding: 40px 20px;
        }

        .form-success .emoji {
            font-size: 2.5rem;
            margin-bottom: 12px;
        }

        .form-success h3 {
            font-family: 'Segoe UI', 'Tahoma', sans-serif;
            font-size: 1.3rem;
            margin: 0 0 8px;
            color: var(--emerald);
        }

        .form-success p {
            color: var(--muted);
            margin: 0;
        }

        @media (max-width: 680px) {
            .form-row { grid-template-columns: 1fr; }
        }

        /* ---------- FOOTER ---------- */
        .footer {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            gap: 14px;
            font-size: 0.85rem;
            color: var(--muted);
        }

        /* ---------- PHONE CHOICE MODAL ---------- */
        .modal-overlay {
            display: none;
            position: fixed;
            inset: 0;
            z-index: 999;
            background: rgba(0,0,0,0.8);
            backdrop-filter: blur(4px);
            align-items: center;
            justify-content: center;
        }
        .modal-overlay.active { display: flex; }

        .modal {
            background: #000;
            border: 1px solid rgba(52, 184, 138, 0.35);
            border-radius: 6px;
            padding: 28px 32px 20px;
            text-align: center;
            min-width: 260px;
        }

        .modal-title {
            font-size: 0.95rem;
            color: var(--text);
            margin-bottom: 22px;
        }

        .modal-actions {
            display: flex;
            gap: 12px;
            justify-content: center;
            margin-bottom: 16px;
        }

        .modal-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-family: monospace;
            font-size: 0.85rem;
            color: var(--emerald);
            background: rgba(52, 184, 138, 0.1);
            border: 1px solid rgba(52, 184, 138, 0.3);
            border-radius: 6px;
            padding: 10px 18px;
            text-decoration: none;
            transition: background 0.2s;
        }

        .modal-btn:hover { background: rgba(52, 184, 138, 0.2); }

        .modal-btn svg { stroke: var(--emerald); fill: none; stroke-width: 1.8; }

        .modal-close {
            font-family: monospace;
            font-size: 0.78rem;
            color: var(--muted);
            background: none;
            border: none;
            cursor: pointer;
            padding: 6px 12px;
        }

        .modal-close:hover { color: var(--text); }

        @media (max-width: 400px) {
            .modal-actions { flex-direction: column; }
        }

        /* ---------- RESPONSIVE ---------- */
        @media (max-width: 680px) {
            .nav-links { gap: 16px; font-size: 0.85rem; }
            .hero-grid { grid-template-columns: 1fr; gap: 32px; }
            .hero-photo-wrap { order: -1; }
            .photo-frame { max-width: 260px; }
            .stack-grid { grid-template-columns: 1fr; }
            .contact-grid { grid-template-columns: 1fr; }
        }

        @media (prefers-reduced-motion: reduce) {
            html { scroll-behavior: auto; }
            .btn:hover, .stack-card:hover,
            .contact-card:hover { transform: none; }
            .reveal { opacity: 1; transform: none; transition: none; }
        }
    </style>
</head>
<body>

<a class="skip-link" href="#stack">Aller au contenu</a>
<nav class="nav">
    <div class="nav-inner">
        <a href="#accueil" class="wordmark" style="text-decoration:none">John-Sheer<span class="founder-tag"> SheerTech</span></a>
        <div class="nav-links">
            <a href="#stack">Stack</a>
            <a href="#devis">Devis</a>
            <a href="#contact">Contact</a>
        </div>
    </div>
</nav>

<header class="hero" id="accueil">
    <div class="hero-grid">
        <div>
            <p class="eyebrow mono">// portfolio</p>
            <h1 class="hero-title">Code.<br>Réseau.<br>Vidéo protection.</h1>

            <div class="terminal">
                <div class="terminal-title">C:\Windows\system32\cmd.exe - powershell</div>
                <div class="terminal-body" id="terminalBody"></div>
            </div>

            <div class="hero-cta">
                <a href="#stack" class="btn btn-primary">Voir mes compétences</a>
                <a href="#contact" class="btn btn-ghost">Me contacter</a>
            </div>
        </div>

        <div class="hero-photo-wrap">
            <div class="photo-frame" role="img" aria-label="Portrait de John-Sheer"></div>
            <a href="#contact" class="availability"><span class="dot"></span>disponible pour projets</a>
        </div>
    </div>
</header>

<section id="stack">
    <h2 class="section-title reveal">Compétences <span class="mono accent">/ ce que je fais</span></h2>
    <div class="stack-grid">
        <?php $r = 1; foreach ($stack as $category => $items): ?>
            <?php $wide = ($category === 'Réseau & vidéosurveillance'); ?>
            <div class="stack-card reveal reveal-delay-<?= min($r++, 4); ?>"<?= $wide ? ' style="grid-column:1/-1;"' : ''; ?>>
                <h3><?= htmlspecialchars($category, ENT_QUOTES, 'UTF-8'); ?></h3>
                <div class="tags">
                    <?php foreach ($items as $item): ?>
                        <?php if (is_array($item)): ?>
                            <?php $children = implode(', ', array_map(function ($c) { return htmlspecialchars($c, ENT_QUOTES, 'UTF-8'); }, $item[1])); ?>
                            <span class="tag"><?= htmlspecialchars($item[0], ENT_QUOTES, 'UTF-8'); ?> &gt; <?= $children; ?></span>
                        <?php else: ?>
                            <span class="tag"><?= htmlspecialchars($item, ENT_QUOTES, 'UTF-8'); ?></span>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<section id="devis">
    <h2 class="section-title reveal">Demande de devis <span class="mono accent">/ gratuit</span></h2>

        <form class="form reveal reveal-delay-1" id="devisForm" method="post" action="https://formspree.io/f/mgojlwdk">

            <div class="form-row">
                <div class="form-group">
                    <label for="name">Nom *</label>
                    <input class="form-control" type="text" id="name" name="name" placeholder="John" required>
                </div>
                <div class="form-group">
                    <label for="email">Email *</label>
                    <input class="form-control" type="email" id="email" name="email" placeholder="exemple@gmail.com" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="phone">Téléphone</label>
                    <input class="form-control" type="tel" id="phone" name="phone" placeholder="+228 XX XX XX XX">
                </div>
                <div class="form-group">
                    <label for="service">Service souhaité</label>
                    <div class="custom-select">
                        <select class="form-control sr-only" id="service" name="service">
                            <option value="">— Sélectionne —</option>
                            <option value="Développement web">Développement web</option>
                            <option value="Réseau / Vidéosurveillance">Réseau / Vidéosurveillance</option>
                            <option value="Maintenance">Maintenance</option>
                            <option value="Autre">Autre</option>
                        </select>
                        <button class="form-control select-trigger" type="button" id="selectTrigger">— Sélectionne —</button>
                        <ul class="select-menu" id="selectMenu">
                            <li data-value="">— Sélectionne —</li>
                            <li data-value="Développement web">Développement web</li>
                            <li data-value="Réseau / Vidéosurveillance">Réseau / Vidéosurveillance</li>
                            <li data-value="Maintenance">Maintenance</li>
                            <li data-value="Autre">Autre</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="message">Message *</label>
                <div class="msg-terminal">
                    <div class="msg-prompt" id="msgPrompt"><span class="prompt-label">PS C:\John-Sheer\Devis\votreNom&gt;</span><span class="prompt-cmd"></span></div>
                    <div class="msg-wrap">
                        <div class="msg-overlay" id="msgOverlay"></div>
                        <textarea class="form-control message-editor" id="message" name="message" placeholder="Décris ton projet..." required></textarea>
                    </div>
                </div>
            </div>

            <button class="btn btn-primary" type="submit">Envoyer la demande</button>
        </form>
</section>

<section id="contact">
    <h2 class="section-title reveal">Contact <span class="mono accent">/ me joindre</span></h2>
    <div class="contact-grid">
        <div class="contact-card reveal reveal-delay-1 phone-card" data-tel="+22891983377" data-wa="22891983377">
            <span class="contact-icon">
                <svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            </span>
            <span>
                <span class="contact-label">Téléphone</span>
                <span class="contact-val">+228 91 98 33 77</span>
            </span>
        </div>

        <div class="contact-card reveal reveal-delay-2 phone-card" data-tel="+22898983377" data-wa="22898983377">
            <span class="contact-icon">
                <svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            </span>
            <span>
                <span class="contact-label">Téléphone</span>
                <span class="contact-val">+228 98 98 33 77</span>
            </span>
        </div>

        <a class="contact-card reveal reveal-delay-3" href="mailto:meskojohn@gmail.com">
            <span class="contact-icon">
                <svg viewBox="0 0 24 24"><path d="M4 4h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            </span>
            <span>
                <span class="contact-label">Email — Gmail</span>
                <span class="contact-val">meskojohn@gmail.com</span>
            </span>
        </a>

        <a class="contact-card reveal reveal-delay-4" href="mailto:meskojohn@yahoo.fr">
            <span class="contact-icon">
                <svg viewBox="0 0 24 24"><path d="M4 4h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            </span>
            <span>
                <span class="contact-label">Email — Yahoo</span>
                <span class="contact-val">meskojohn@yahoo.fr</span>
            </span>
        </a>

        <a class="contact-card reveal reveal-delay-4" href="https://github.com/John-Sheer" target="_blank" rel="noopener" style="grid-column: 1 / -1;">
            <span class="contact-icon">
                <svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 0 0-3.16 19.49c.5.09.68-.22.68-.48v-1.7c-2.78.6-3.37-1.34-3.37-1.34-.46-1.16-1.11-1.47-1.11-1.47-.91-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.89 1.52 2.34 1.08 2.91.83.09-.65.35-1.08.63-1.33-2.22-.25-4.56-1.11-4.56-4.95 0-1.09.39-1.98 1.03-2.68-.1-.25-.45-1.27.1-2.64 0 0 .84-.27 2.75 1.03a9.6 9.6 0 0 1 5 0c1.91-1.3 2.75-1.03 2.75-1.03.55 1.37.2 2.39.1 2.64.64.7 1.03 1.59 1.03 2.68 0 3.85-2.34 4.7-4.57 4.95.36.31.68.92.68 1.85v2.75c0 .26.18.57.69.48A10 10 0 0 0 12 2z"/></svg>
            </span>
            <span>
                <span class="contact-label">GitHub</span>
                <span class="contact-val">github.com/John-Sheer</span>
            </span>
        </a>
    </div>
</section>

<div class="modal-overlay" id="phoneModal">
    <div class="modal">
        <div class="modal-title mono">Choisis une action</div>
        <div class="modal-actions">
            <a class="modal-btn" id="modalCall" href="#">
                <svg viewBox="0 0 24 24" width="20" height="20"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                Appel
            </a>
            <a class="modal-btn" id="modalWhatsApp" href="#" target="_blank" rel="noopener">
                <svg viewBox="0 0 24 24" width="20" height="20"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
                WhatsApp
            </a>
        </div>
        <button class="modal-close" id="modalClose">Annuler</button>
    </div>
</div>

<footer class="footer">
    <span>© <?= date('Y'); ?> John-Sheer — SheerTech</span>
</footer>

<script>
(() => {
    'use strict';

    // ── Terminal typing animation ──
    const cmds = [
        { cmd: 'whoami',            out: 'John-Sheer — développeur full-stack et technicien réseau &amp; vidéosurveillance' },
        { cmd: 'skills --list',     out: 'full-stack · réseau · vidéosurveillance' },
        { cmd: 'compétences',       out: 'React · Vite · JavaScript / TypeScript · PHP · PowerShell · Git · Python · UML · Agilité' },
    ];
    let idx = 0;
    const termBody = document.getElementById('terminalBody');
    const terminalEl = document.querySelector('.terminal');

    const isConsoleVisible = () => {
        if (!terminalEl || document.hidden) return false;
        const rect = terminalEl.getBoundingClientRect();
        return rect.bottom >= 0 && rect.top <= window.innerHeight;
    };

    const typeCommand = (i) => {
        const entry = cmds[i];
        const cmdText = entry.cmd;
        const outText = entry.out;
        let pos = 0;
        let typedCmd = '';
        let typedOut = '';

        const p1 = document.createElement('p');
        p1.innerHTML = '<span class="prompt">PS C:\\Users\\John-Sheer&gt;</span> <span class="cmd"></span>';
        const p2 = document.createElement('p');
        p2.className = 'out';
        p2.innerHTML = '<span class="cursor blink">_</span>';
        termBody.innerHTML = '';
        termBody.appendChild(p1);
        termBody.appendChild(p2);

        const cmdSpan = p1.querySelector('.cmd');
        const outSpan = p2;

        const typeCmd = () => {
            if (pos < cmdText.length) {
                typedCmd += cmdText.charAt(pos);
                cmdSpan.textContent = typedCmd;
                if (isConsoleVisible()) playKeySound();
                pos++;
                setTimeout(typeCmd, 140 + Math.random() * 100);
            } else {
                pos = 0;
                setTimeout(typeOut, 200);
            }
        };

        const typeOut = () => {
            if (pos < outText.length) {
                typedOut += outText.charAt(pos);
                outSpan.innerHTML = typedOut + '<span class="cursor blink">_</span>';
                if (isConsoleVisible()) playKeySound();
                pos++;
                termBody.scrollTop = termBody.scrollHeight;
                setTimeout(typeOut, 80 + Math.random() * 60);
            }
        };

        typeCmd();
    };

    if (termBody) {
        typeCommand(0);
        let animPaused = false;
        setInterval(() => {
            if (!isConsoleVisible()) { animPaused = true; return; }
            if (animPaused) { animPaused = false; typeCommand(idx); return; }
            idx = (idx + 1) % cmds.length;
            typeCommand(idx);
        }, 13000);
    }

    // ── Intersection Observer for fade-in reveals ──
    const els = document.querySelectorAll('.reveal');
    if (els.length && 'IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
        els.forEach((el) => { observer.observe(el); });
    } else {
        els.forEach((el) => { el.classList.add('visible'); });
    }

    // ── Active nav link highlighting on scroll ──
    const navLinks = document.querySelectorAll('.nav-links a');
    const sections = [];
    navLinks.forEach((link) => {
        const href = link.getAttribute('href');
        if (href && href.charAt(0) === '#') {
            const section = document.getElementById(href.slice(1));
            if (section) sections.push({ el: section, link });
        }
    });
    if (sections.length && 'IntersectionObserver' in window) {
        const navObserver = new IntersectionObserver(() => {
            let current = '';
            sections.forEach((s) => {
                const rect = s.el.getBoundingClientRect();
                if (rect.top <= 150) current = s.el.id;
            });
            navLinks.forEach((l) => { l.style.color = ''; });
            const active = document.querySelector(`.nav-links a[href="#${current}"]`);
            if (active) active.style.color = 'var(--emerald)';
        }, { threshold: [0, 0.25, 0.5, 0.75, 1] });
        sections.forEach((s) => { navObserver.observe(s.el); });
    }

    // ── PowerShell prompt for message field ──
    const msgField2 = document.getElementById('message');
    const nameField = document.getElementById('name');
    const msgPrompt = document.getElementById('msgPrompt');
    const promptLabel = document.querySelector('.prompt-label');
    const promptCmd = document.querySelector('.prompt-cmd');

    const autoResize = (el) => {
        el.style.height = 'auto';
        el.style.height = el.scrollHeight + 'px';
    };

    const updateMsgPrompt = () => {
        const name = nameField ? nameField.value.trim().replace(/\s+/g, '_') || 'votreNom' : 'votreNom';
        const typed = msgField2 ? msgField2.value : '';
        promptLabel.textContent = `PS C:\\John-Sheer\\Devis\\${name}> `;
        promptCmd.textContent = typed ? ' message' : '';
    };

    // ── Overlay cursor for message field ──
    const msgOverlay = document.getElementById('msgOverlay');

    const escapeHtml = (s) => s.replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;');

    const msgRenderOverlay = () => {
        const val = msgField2.value;
        let html;
        if (!val && document.activeElement !== msgField2) {
            html = '<span style="color:rgba(255,255,255,0.15)">Décris ton projet...</span>';
        } else {
            html = escapeHtml(val);
            if (document.activeElement === msgField2) {
                html += '<span class="cursor">\u2581</span>';
            }
        }
        msgOverlay.innerHTML = html;
    };

    if (msgField2 && msgOverlay) {
        autoResize(msgField2);
        msgField2.addEventListener('focus', () => {
            updateMsgPrompt();
            msgPrompt.classList.add('visible');
            msgRenderOverlay();
            autoResize(msgField2);
        });
        msgField2.addEventListener('blur', () => {
            msgRenderOverlay();
            if (!msgField2.value.trim()) {
                msgPrompt.classList.remove('visible');
            }
            autoResize(msgField2);
        });
        msgField2.addEventListener('input', () => {
            msgRenderOverlay();
            updateMsgPrompt();
            autoResize(msgField2);
        });
        nameField.addEventListener('input', () => {
            if (msgPrompt.classList.contains('visible')) updateMsgPrompt();
        });
        msgRenderOverlay();
    }

    // ── Keyboard sound for all form fields + console ──
    let audioCtx;
    try { audioCtx = new (window.AudioContext || window.webkitAudioContext)(); } catch (e) {}
    const resumeAudioCtx = () => {
        if (audioCtx && audioCtx.state === 'suspended') audioCtx.resume();
    };
    document.addEventListener('click', resumeAudioCtx);
    document.addEventListener('pointermove', resumeAudioCtx, { once: true });
    document.addEventListener('touchstart', resumeAudioCtx, { once: true });

    const playKeySound = () => {
        if (!audioCtx) return;
        if (audioCtx.state === 'suspended') audioCtx.resume();
        const osc = audioCtx.createOscillator();
        const gain = audioCtx.createGain();
        osc.connect(gain);
        gain.connect(audioCtx.destination);
        osc.frequency.value = 600;
        osc.type = 'sine';
        const now = audioCtx.currentTime;
        gain.gain.setValueAtTime(0, now);
        gain.gain.linearRampToValueAtTime(0.05, now + 0.005);
        gain.gain.exponentialRampToValueAtTime(0.001, now + 0.04);
        osc.start(now);
        osc.stop(now + 0.04);
    };

    const devisForm = document.querySelector('#devis form');
    if (devisForm) {
        devisForm.addEventListener('keydown', (e) => {
            if (e.target.tagName === 'INPUT' || e.target.tagName === 'SELECT' || e.target.tagName === 'TEXTAREA') {
                playKeySound();
            }
        });

        // ── AJAX submit to Formspree ──
        devisForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const btn = devisForm.querySelector('button[type="submit"]');
            btn.textContent = 'Envoi en cours…';
            btn.disabled = true;
            fetch(devisForm.action, {
                method: 'POST',
                body: new FormData(devisForm),
                headers: { 'Accept': 'application/json' }
            }).then((r) => r.json()).then((data) => {
                if (data.ok) {
                    devisForm.innerHTML =
                        '<div class="form-success">' +
                            '<div class="emoji">✓</div>' +
                            '<h3>Message envoyé !</h3>' +
                            '<p>Je te réponds sous 24h. À très vite !</p>' +
                            '<button class="btn btn-primary" id="resetDevis">Soumettre un devis</button>' +
                        '</div>';
                    document.getElementById('resetDevis').addEventListener('click', () => {
                        location.reload();
                    });
                } else {
                    btn.textContent = 'Réessaie';
                    btn.disabled = false;
                    alert("Erreur : " + (data.error || "Réessaie plus tard."));
                }
            }).catch(() => {
                btn.textContent = 'Réessaie';
                btn.disabled = false;
                alert("Erreur réseau. Réessaie.");
            });
        });
    }

    // ── Custom select ──
    const trigger = document.getElementById('selectTrigger');
    const menu = document.getElementById('selectMenu');
    const nativeSelect = document.getElementById('service');
    if (trigger && menu && nativeSelect) {
        trigger.addEventListener('click', (e) => {
            e.stopPropagation();
            menu.classList.toggle('open');
        });
        menu.querySelectorAll('li').forEach((li) => {
            li.addEventListener('click', () => {
                const val = li.getAttribute('data-value');
                const text = li.textContent;
                nativeSelect.value = val;
                trigger.textContent = text;
                menu.querySelectorAll('li').forEach((l) => { l.classList.remove('selected'); });
                li.classList.add('selected');
                menu.classList.remove('open');
            });
        });
        document.addEventListener('click', () => {
            menu.classList.remove('open');
        });
        menu.addEventListener('click', (e) => {
            e.stopPropagation();
        });
    }

    // ── Phone choice modal ──
    const phoneCards = document.querySelectorAll('.phone-card');
    const modal = document.getElementById('phoneModal');
    const callBtn = document.getElementById('modalCall');
    const waBtn = document.getElementById('modalWhatsApp');
    const closeBtn = document.getElementById('modalClose');

    phoneCards.forEach((card) => {
        card.addEventListener('click', () => {
            callBtn.href = 'tel:' + card.getAttribute('data-tel');
            waBtn.href = 'https://wa.me/' + card.getAttribute('data-wa');
            modal.classList.add('active');
        });
    });

    const closeModal = () => { modal.classList.remove('active'); };
    closeBtn.addEventListener('click', closeModal);
    modal.addEventListener('click', (e) => {
        if (e.target === modal) closeModal();
    });
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') closeModal();
    });

    /* Hit map : scale uniquement sur pixels non transparents */
    (() => {
        const frame = document.querySelector('.photo-frame');
        if (!frame) return;
        const img = new Image();
        img.crossOrigin = 'anonymous';
        img.src = 'John.png?' + Date.now();
        const hitmap = [];
        let iw, ih, scaleFactor;

        img.onload = () => {
            iw = img.naturalWidth;
            ih = img.naturalHeight;
            const c = document.createElement('canvas');
            const ctx = c.getContext('2d');
            c.width = iw;
            c.height = ih;
            ctx.drawImage(img, 0, 0);
            const data = ctx.getImageData(0, 0, iw, ih).data;
            const step = 4;
            for (let y = 0; y < ih; y += step) {
                hitmap[y] = [];
                for (let x = 0; x < iw; x += step) {
                    const alpha = data[(y * iw + x) * 4 + 3];
                    hitmap[y][x] = alpha > 30;
                }
            }
            scaleFactor = step;
        };

        frame.addEventListener('mousemove', (e) => {
            if (!hitmap.length) return;
            const rect = frame.getBoundingClientRect();
            const ew = rect.width, eh = rect.height;
            const s = Math.min(ew / iw, eh / ih);
            const rw = iw * s, rh = ih * s;
            const ox = (ew - rw) / 2, oy = (eh - rh) / 2;
            const mx = e.clientX - rect.left - ox;
            const my = e.clientY - rect.top - oy;
            if (mx < 0 || my < 0 || mx >= rw || my >= rh) {
                frame.classList.remove('hover-active');
                return;
            }
            const px = Math.floor((mx / rw) * iw);
            const py = Math.floor((my / rh) * ih);
            const sy = Math.floor(py / scaleFactor) * scaleFactor;
            const sx = Math.floor(px / scaleFactor) * scaleFactor;
            const hit = hitmap[sy] && hitmap[sy][sx];
            frame.classList.toggle('hover-active', !!hit);
        });

        frame.addEventListener('mouseleave', () => {
            frame.classList.remove('hover-active');
        });
    })();

})();
</script>

</body>
</html>
