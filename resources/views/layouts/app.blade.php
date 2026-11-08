
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title>TechNews – Tech news in five minutes</title>
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
    </style>
</head>

<!-- style's contact -->
    <!-- <style>
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
    </style> -->


<!-- style's about
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
    </style> -->


<body>

    <x-header></x-header>
    

    @yield('content')

<x-footer></x-footer>

    <script>
        // Sample stories – replace with your own posts or load them from your backend.
        var POSTS = [
            { t: "AI", h: "Open-source models are catching up fast", p: "Free models now handle many tasks that needed paid tools a year ago.", m: "4 min read", c: "#dbe4ff" },
            { t: "Web", h: "Browsers get smarter about tracking", p: "New built-in controls make it easier to keep your browsing private.", m: "3 min read", c: "#d9f2e6" },
            { t: "Security", h: "Password managers explained simply", p: "What they do, why they are safer, and how to switch in ten minutes.", m: "5 min read", c: "#ffe3dc" },
            { t: "Gadgets", h: "Choosing a laptop for coding in 2026", p: "RAM, battery life, and screen: the three specs that matter most.", m: "6 min read", c: "#fff1cc" },
            { t: "AI", h: "How to use AI tools without losing your skills", p: "Practical habits for students and developers who use AI every day.", m: "4 min read", c: "#e6dcff" },
            { t: "Web", h: "Why fast websites win more readers", p: "A few small changes to images and fonts can cut load time in half.", m: "3 min read", c: "#d6f0f7" }
        ];
        var TOPICS = ["All", "AI", "Web", "Security", "Gadgets"];
        var grid = document.getElementById("grid"), chips = document.getElementById("chips");

        function render(topic) {
            var list = POSTS.filter(function (p) { return topic === "All" || p.t === topic; });
            grid.innerHTML = list.length ? list.map(function (p) {
                return '<a class="post" href="/blog"><div class="thumb" style="background:'+p.c+'"></div><div class="in">'+
                '<span class="tag">'+p.t+'</span><h3>'+p.h+'</h3><p>'+p.p+'</p><span class="meta">'+p.m+'</span></div></a>';
            }).join("") : '<p class="empty">No stories in this topic yet.</p>';
        }
        TOPICS.forEach(function (t, i) {
            var b = document.createElement("button");
            b.className = "chip"; b.textContent = t; b.setAttribute("aria-pressed", i === 0);
            b.addEventListener("click", function () {
                chips.querySelectorAll(".chip").forEach(function (c) { c.setAttribute("aria-pressed", c === b); });
                render(t);
            });
            chips.appendChild(b);
        });
        render("All");

        // Subscribe forms: simple email check (connect to your mail service or Laravel route later)
        document.querySelectorAll("[data-sub]").forEach(function (f) {
            f.addEventListener("submit", function (e) {
                e.preventDefault();
                var note = f.parentNode.querySelector("[data-note]"), v = f.email.value.trim();
                if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v)) { note.className = "note err"; note.textContent = "Enter a valid email address, like you@example.com."; return; }
                note.className = "note ok"; note.textContent = "You’re subscribed. Check your inbox tomorrow morning."; f.reset();
            });
        });
        document.getElementById("yr").textContent = new Date().getFullYear();
    </script>

<!-- contact's script -->
    <script>
        // Contact form: checks each field, then shows a success message (connect to your backend later)
        var form = document.getElementById("contactForm"), note = document.getElementById("formNote");
        function check(id, ok, msg) {
            var f = document.getElementById(id), box = f.closest(".field");
            box.classList.toggle("bad", !ok);
            box.querySelector(".hint").textContent = ok ? "" : msg;
            return ok;
        }
        form.addEventListener("submit", function (e) {
            e.preventDefault();
            var r = [
                check("name", form.name.value.trim().length >= 2, "Please enter your name."),
                check("email", /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(form.email.value.trim()), "Enter a valid email, like you@example.com."),
                check("message", form.message.value.trim().length >= 10, "Please write at least 10 characters.")
            ];
            if (r.indexOf(false) !== -1) { note.className = "note err"; note.textContent = "Please fix the fields marked above."; return; }
            note.className = "note ok"; note.textContent = "Thank you! Your message was sent. We will reply soon.";
            form.reset();
        });
        document.getElementById("yr").textContent = new Date().getFullYear();
    </script>

<!-- about's script -->
    <script>
        document.getElementById("yr").textContent = new Date().getFullYear();
    </script>

    <script>
        document.getElementById("yr").textContent = new Date().getFullYear();
    </script>


</body>

</html>

