<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title>About – TechNews</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@500;700;800&family=Public+Sans:wght@400;500;600&display=swap"
        rel="stylesheet">
    <style>
        :root {
            --bg: #ffffff;
            --surface: #f5f7fb;
            --ink: #131a2b;
            --muted: #5b6479;
            --line: #e3e7ef;
            --accent: #2347ff;
            --accent-ink: #ffffff;
            --ok: #0a7a4b;
            color-scheme: light;
            --head: "Bricolage Grotesque", "Segoe UI", system-ui, sans-serif;
            --body: "Public Sans", "Segoe UI", system-ui, sans-serif;
            box-sizing: border-box;
            padding-top: env(safe-area-inset-top, 0px);
            padding-bottom: env(safe-area-inset-bottom, 0px);
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 80px
        }

        body {
            margin: 0;
            background: var(--bg);
            color: var(--ink);
            font: 400 17px/1.65 var(--body)
        }

        a {
            color: inherit;
            text-decoration: none
        }

        :focus-visible {
            outline: 3px solid var(--accent);
            outline-offset: 3px;
            border-radius: 6px
        }

        .wrap {
            max-width: 1080px;
            margin: 0 auto;
            padding: 0 24px
        }

        h1,
        h2,
        h3 {
            font-family: var(--head);
            line-height: 1.1;
            margin: 0;
            letter-spacing: -.02em
        }

        /* Header */
        header {
            position: sticky;
            top: env(safe-area-inset-top, 0px);
            z-index: 5;
            background: var(--bg);
            border-bottom: 1px solid var(--line)
        }

        .bar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 64px
        }

        .logo {
            font: 800 22px var(--head);
            letter-spacing: -.03em
        }

        .logo span {
            color: var(--accent)
        }

        nav {
            display: flex;
            align-items: center;
            gap: 28px;
            font-size: 15px;
            color: var(--muted)
        }

        nav a:hover {
            color: var(--ink)
        }

        .btn {
            display: inline-block;
            border: 0;
            cursor: pointer;
            font: 600 15px var(--body);
            padding: 12px 20px;
            border-radius: 10px;
            background: var(--accent);
            color: var(--accent-ink)
        }

        .btn:hover {
            filter: brightness(1.08)
        }

        .btn.ghost {
            background: transparent;
            color: var(--ink);
            border: 1px solid var(--line)
        }

        .btn.ghost:hover {
            background: var(--surface)
        }

        nav .btn {
            padding: 9px 16px
        }

        /* Hero */
        .hero {
            padding: 88px 0 72px;
            display: grid;
            grid-template-columns: 1.1fr .9fr;
            gap: 56px;
            align-items: center
        }

        .hero h1 {
            font-size: clamp(40px, 6vw, 68px);
            font-weight: 800
        }

        .hero p.lead {
            font-size: 19px;
            color: var(--muted);
            max-width: 30em;
            margin: 22px 0 32px
        }

        .sub {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            max-width: 460px
        }

        .sub input {
            flex: 1 1 220px;
            min-width: 0;
            font: 400 16px var(--body);
            padding: 12px 14px;
            border: 1px solid var(--line);
            border-radius: 10px;
            background: var(--bg);
            color: var(--ink)
        }

        .note {
            font-size: 14px;
            color: var(--muted);
            margin: 10px 0 0;
            min-height: 1.6em
        }

        .note.ok {
            color: var(--ok)
        }

        .note.err {
            color: #c23a3a
        }

        /* Today list in hero */
        .today {
            background: var(--surface);
            border: 1px solid var(--line);
            border-radius: 16px;
            padding: 8px 24px
        }

        .today h2 {
            font-size: 15px;
            font-weight: 700;
            color: var(--muted);
            padding: 16px 0 4px;
            letter-spacing: 0
        }

        .today a {
            display: block;
            padding: 16px 0;
            border-top: 1px solid var(--line)
        }

        .today a:first-of-type {
            border-top: 0
        }

        .today b {
            display: block;
            font: 700 18px/1.3 var(--head)
        }

        .today small {
            color: var(--muted);
            font-size: 14px
        }

        .today a:hover b {
            color: var(--accent)
        }

        /* Sections */
        section {
            padding: 72px 0
        }

        .head {
            display: flex;
            justify-content: space-between;
            align-items: end;
            gap: 24px;
            flex-wrap: wrap;
            margin-bottom: 32px
        }

        .head h2 {
            font-size: clamp(28px, 4vw, 40px);
            font-weight: 700
        }

        .chips {
            display: flex;
            gap: 8px;
            flex-wrap: wrap
        }

        .chip {
            font: 500 14px var(--body);
            padding: 8px 16px;
            border-radius: 999px;
            border: 1px solid var(--line);
            background: var(--bg);
            color: var(--muted);
            cursor: pointer
        }

        .chip:hover {
            color: var(--ink)
        }

        .chip[aria-pressed="true"] {
            background: var(--ink);
            border-color: var(--ink);
            color: var(--bg)
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px
        }

        .post {
            display: flex;
            flex-direction: column;
            border: 1px solid var(--line);
            border-radius: 14px;
            overflow: hidden;
            background: var(--bg)
        }

        .post:hover {
            border-color: var(--accent)
        }

        .thumb {
            height: 140px
        }

        .post .in {
            padding: 20px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            flex: 1
        }

        .tag {
            font-size: 13px;
            font-weight: 600;
            color: var(--accent)
        }

        .post h3 {
            font-size: 20px;
            font-weight: 700;
            line-height: 1.25
        }

        .post p {
            margin: 0;
            font-size: 15px;
            color: var(--muted)
        }

        .meta {
            margin-top: auto;
            font-size: 13px;
            color: var(--muted)
        }

        .empty {
            grid-column: 1/-1;
            color: var(--muted)
        }

        /* Why */
        .why {
            background: var(--surface);
            border-block: 1px solid var(--line)
        }

        .why .cols {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px
        }

        .why h3 {
            font-size: 21px;
            margin-bottom: 8px
        }

        .why p {
            margin: 0;
            color: var(--muted);
            font-size: 16px
        }

        /* CTA */
        .cta {
            text-align: center
        }

        .cta h2 {
            font-size: clamp(30px, 4.5vw, 46px);
            font-weight: 800;
            max-width: 15em;
            margin: 0 auto 16px
        }

        .cta p {
            color: var(--muted);
            margin: 0 auto 28px;
            max-width: 30em
        }

        .cta .sub {
            margin: 0 auto;
            justify-content: center
        }

        footer {
            border-top: 1px solid var(--line);
            padding: 32px 0;
            font-size: 14px;
            color: var(--muted)
        }

        footer .wrap {
            display: flex;
            justify-content: space-between;
            gap: 16px;
            flex-wrap: wrap
        }

        footer nav {
            gap: 20px;
            font-size: 14px
        }

        @media (max-width:860px) {
            .hero {
                grid-template-columns: 1fr;
                padding-top: 56px
            }

            .grid,
            .why .cols {
                grid-template-columns: 1fr
            }

            nav a:not(.btn) {
                display: none
            }
        }

        @media (prefers-reduced-motion:no-preference) {

            .hero h1,
            .hero .lead,
            .hero .sub {
                animation: rise .6s ease both
            }

            .hero .lead {
                animation-delay: .08s
            }

            .hero .sub {
                animation-delay: .16s
            }

            @keyframes rise {
                from {
                    opacity: 0;
                    transform: translateY(12px)
                }

                to {
                    opacity: 1;
                    transform: none
                }
            }
        }

        /* About page */
        .page-hero {
            padding: 88px 0 56px;
            max-width: 760px
        }

        .page-hero h1 {
            font-size: clamp(40px, 6vw, 64px);
            font-weight: 800
        }

        .page-hero p {
            font-size: 19px;
            color: var(--muted);
            margin: 22px 0 0
        }

        .eyebrow {
            font-size: 14px;
            font-weight: 600;
            color: var(--accent);
            margin: 0 0 14px
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
            padding-bottom: 72px
        }

        .stat {
            border: 1px solid var(--line);
            border-radius: 14px;
            padding: 24px
        }

        .stat b {
            display: block;
            font: 800 40px var(--head);
            letter-spacing: -.03em
        }

        .stat span {
            color: var(--muted);
            font-size: 15px
        }

        .story {
            display: grid;
            grid-template-columns: 1fr 1.2fr;
            gap: 56px
        }

        .story h2 {
            font-size: clamp(28px, 4vw, 40px);
            font-weight: 700
        }

        .story p {
            margin: 0 0 16px;
            color: var(--muted)
        }

        .steps {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
            counter-reset: s
        }

        .step {
            border: 1px solid var(--line);
            border-radius: 14px;
            padding: 24px;
            background: var(--bg)
        }

        .step::before {
            counter-increment: s;
            content: counter(s);
            display: grid;
            place-items: center;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: var(--accent);
            color: var(--accent-ink);
            font: 700 16px var(--head);
            margin-bottom: 16px
        }

        .step h3 {
            font-size: 20px;
            margin-bottom: 8px
        }

        .step p {
            margin: 0;
            font-size: 15px;
            color: var(--muted)
        }

        .team {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px
        }

        .member {
            text-align: left
        }

        .avatar {
            width: 72px;
            height: 72px;
            border-radius: 50%;
            display: grid;
            place-items: center;
            font: 700 24px var(--head);
            margin-bottom: 14px
        }

        .member h3 {
            font-size: 19px
        }

        .member p {
            margin: 2px 0 0;
            font-size: 15px;
            color: var(--muted)
        }

        @media (max-width:860px) {

            .stats,
            .steps,
            .team,
            .story {
                grid-template-columns: 1fr
            }

            .story {
                gap: 24px
            }

            .page-hero {
                padding-top: 56px
            }
        }
    </style>
</head>

<body>

    <!-- <header>       /instead of the same code in every file we make a component to code once and finish
        <div class="wrap bar">
            <a href="index.html" class="logo" aria-label="TechNews home">Tech<span>News</span></a>
            <nav aria-label="Main">
                <a href="index.html#latest">Latest</a>
                <a href="about.html" aria-current="page" style="color:var(--ink)">About</a>
                <a href="index.html#subscribe" class="btn">Subscribe</a>
            </nav>
        </div>
    </header> -->

    <x-header></x-header>

    <main>
        <div class="wrap page-hero">
            <p class="eyebrow">About us</p>
            <h1>We make technology news easy to read.</h1>
            <p>TechNews started with a simple idea: people are busy, and good information should not take an hour to
                find.</p>
        </div>

        <div class="wrap stats">
            <div class="stat"><b>5 min</b><span>to read the daily digest</span></div>
            <div class="stat"><b>20+</b><span>trusted sources checked every day</span></div>
            <div class="stat"><b>100%</b><span>free for every reader</span></div>
        </div>

        <section class="why">
            <div class="wrap story">
                <h2>Our story</h2>
                <div>
                    <p>We are a small team of developers, teachers and writers who love technology. We kept seeing the
                        same problem: too many articles, too much noise, and not enough time.</p>
                    <p>So we built TechNews. It gathers stories from trusted sources, removes repeats, and gives you a
                        short, clear summary of each one, written in plain language.</p>
                    <p>Whether you are a student, a developer or just curious, our goal is the same: help you understand
                        what changed in tech today.</p>
                </div>
            </div>
        </section>

        <section class="wrap">
            <div class="head">
                <h2>How it works</h2>
            </div>
            <div class="steps">
                <div class="step">
                    <h3>We collect</h3>
                    <p>New articles arrive automatically from trusted news feeds throughout the day.</p>
                </div>
                <div class="step">
                    <h3>We simplify</h3>
                    <p>Each story is shortened to the key points, so you know what happened and why it matters.</p>
                </div>
                <div class="step">
                    <h3>You read</h3>
                    <p>Browse the website or get the best stories in one short email each morning.</p>
                </div>
            </div>
        </section>

        <section class="wrap">
            <div class="head">
                <h2>The team</h2>
            </div>
            <div class="team">
                <div class="member">
                    <div class="avatar" style="background:#dbe4ff">A</div>
                    <h3>Your Name</h3>
                    <p>Founder and developer</p>
                </div>
                <div class="member">
                    <div class="avatar" style="background:#d9f2e6">B</div>
                    <h3>Team Member</h3>
                    <p>Editor</p>
                </div>
                <div class="member">
                    <div class="avatar" style="background:#ffe3dc">C</div>
                    <h3>Team Member</h3>
                    <p>Designer</p>
                </div>
            </div>
        </section>

        <section class="cta wrap">
            <h2>Read less. Know more.</h2>
            <p>Get the daily digest and catch up on technology in five minutes.</p>
            <a href="index.html#subscribe" class="btn">Subscribe for free</a>
        </section>
    </main>

    <!-- <footer>
        <div class="wrap">
            <span>© <span id="yr">2026</span> TechNews. All rights reserved.</span>
            <nav aria-label="Footer"><a href="index.html#latest">Latest</a><a href="about.html">About</a><a
                    href="index.html#subscribe">Subscribe</a></nav>
        </div>
    </footer> -->

    <x-footer></x-footer>

    <script>
        document.getElementById("yr").textContent = new Date().getFullYear();
    </script>
</body>

</html>
