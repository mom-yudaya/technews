@extends("layouts.app")

@section('content')
    <main>
        <div class="wrap page-hero">
            <p class="eyebrow">Contact</p>
            <h1>We’d love to hear from you.</h1>
            <p>Have a question, a story tip or an idea? Send us a message and we will reply within two working days.</p>
        </div>

        <div class="wrap contact">
            <div class="card">
                <form id="contactForm" novalidate>
                    <div class="two">
                        <div class="field"><label for="name">Your name</label><input id="name" name="name"
                                autocomplete="name"><span class="hint"></span></div>
                        <div class="field"><label for="email">Email</label><input id="email" name="email" type="email"
                                autocomplete="email" placeholder="you@example.com"><span class="hint"></span></div>
                    </div>
                    <div class="field">
                        <label for="topic">Topic</label>
                        <select id="topic" name="topic">
                            <option>General question</option>
                            <option>Story tip</option>
                            <option>Advertising or partnership</option>
                            <option>Report a problem</option>
                        </select>
                        <span class="hint"></span>
                    </div>
                    <div class="field"><label for="message">Message</label><textarea id="message"
                            name="message"></textarea><span class="hint"></span></div>
                    <button class="btn" type="submit">Send message</button>
                    <p class="note" id="formNote" aria-live="polite"></p>
                </form>
            </div>

            <aside class="info" aria-label="Contact details">
                <div class="item"><small>Email</small><b>hello@technews.com</b>
                    <p>For questions and story tips</p>
                </div>
                <div class="item"><small>Phone</small><b>+000 00 000 000</b>
                    <p>Monday to Friday, 9:00 – 17:00</p>
                </div>
                <div class="item"><small>Address</small><b>Your Street, Your City</b>
                    <p>Your Country</p>
                </div>
            </aside>
        </div>

        <section class="why">
            <div class="wrap">
                <div class="head">
                    <h2>Common questions</h2>
                </div>
                <div class="faq">
                    <details>
                        <summary>Is TechNews free?</summary>
                        <p>Yes. Reading the website and receiving the daily email are both free.</p>
                    </details>
                    <details>
                        <summary>How do I unsubscribe from the email?</summary>
                        <p>Every email has an unsubscribe link at the bottom. One click is enough.</p>
                    </details>
                    <details>
                        <summary>Can I send you a story to cover?</summary>
                        <p>Of course. Choose “Story tip” in the form above and include a link.</p>
                    </details>
                    <details>
                        <summary>How fast do you reply?</summary>
                        <p>Usually within two working days.</p>
                    </details>
                </div>
            </div>
        </section>
    </main>

<!-- style's contact -->
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

        /* Contact page */
        .page-hero {
            padding: 88px 0 48px;
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

        .contact {
            display: grid;
            grid-template-columns: 1.2fr .8fr;
            gap: 48px;
            padding-bottom: 72px;
            align-items: start
        }

        .card {
            border: 1px solid var(--line);
            border-radius: 16px;
            padding: 32px;
            background: var(--bg)
        }

        .field {
            margin-bottom: 20px
        }

        .field label {
            display: block;
            font-weight: 600;
            font-size: 15px;
            margin-bottom: 6px
        }

        .field input,
        .field select,
        .field textarea {
            width: 100%;
            font: 400 16px var(--body);
            padding: 12px 14px;
            border: 1px solid var(--line);
            border-radius: 10px;
            background: var(--bg);
            color: var(--ink)
        }

        .field textarea {
            min-height: 140px;
            resize: vertical
        }

        .field.bad input,
        .field.bad select,
        .field.bad textarea {
            border-color: #c23a3a
        }

        .hint {
            display: block;
            min-height: 1.4em;
            font-size: 13px;
            color: #c23a3a;
            margin-top: 4px
        }

        .two {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px
        }

        .info {
            display: grid;
            gap: 16px
        }

        .info .item {
            border: 1px solid var(--line);
            border-radius: 14px;
            padding: 20px;
            background: var(--surface)
        }

        .info small {
            display: block;
            color: var(--muted);
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 4px
        }

        .info b {
            font: 700 18px var(--head);
            word-break: break-word
        }

        .info p {
            margin: 4px 0 0;
            color: var(--muted);
            font-size: 14px
        }

        .faq {
            max-width: 760px
        }

        .faq details {
            border-top: 1px solid var(--line);
            padding: 18px 0
        }

        .faq details:last-child {
            border-bottom: 1px solid var(--line)
        }

        .faq summary {
            cursor: pointer;
            font: 700 18px var(--head);
            list-style: none;
            display: flex;
            justify-content: space-between;
            gap: 16px
        }

        .faq summary::after {
            content: "+";
            color: var(--accent);
            font-size: 24px;
            line-height: 1
        }

        .faq details[open] summary::after {
            content: "–"
        }

        .faq details p {
            margin: 10px 0 0;
            color: var(--muted)
        }

        @media (max-width:860px) {
            .contact {
                grid-template-columns: 1fr
            }

            .two {
                grid-template-columns: 1fr
            }

            .page-hero {
                padding-top: 56px
            }

            .card {
                padding: 22px
            }
        }
    </style>

@endsection

