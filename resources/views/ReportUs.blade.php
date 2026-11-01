
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title>Report Us – TechNews</title>
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
            --err: #c23a3a;
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

        /* Page hero */
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

        /* Report layout */
        .report {
            display: grid;
            grid-template-columns: 1.3fr .7fr;
            gap: 40px;
            align-items: start;
            padding-bottom: 88px
        }

        .form-card {
            border: 1px solid var(--line);
            border-radius: 16px;
            padding: 32px;
            background: var(--bg)
        }

        .row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px
        }

        .field {
            display: flex;
            flex-direction: column;
            gap: 6px;
            margin-bottom: 20px
        }

        label {
            font-size: 14px;
            font-weight: 600
        }

        label small {
            font-weight: 400;
            color: var(--muted)
        }

        input,
        select,
        textarea {
            width: 100%;
            font: 400 16px var(--body);
            padding: 12px 14px;
            border: 1px solid var(--line);
            border-radius: 10px;
            background: var(--bg);
            color: var(--ink)
        }

        textarea {
            min-height: 150px;
            resize: vertical
        }

        input[aria-invalid="true"],
        select[aria-invalid="true"],
        textarea[aria-invalid="true"] {
            border-color: var(--err)
        }

        .error {
            font-size: 13px;
            color: var(--err);
            min-height: 1.2em
        }

        .count {
            font-size: 13px;
            color: var(--muted);
            text-align: right
        }

        .check {
            flex-direction: row;
            align-items: flex-start;
            gap: 10px
        }

        .check input {
            width: 18px;
            height: 18px;
            margin-top: 4px;
            flex: none
        }

        .check label {
            font-weight: 400;
            color: var(--muted)
        }

        .note {
            font-size: 15px;
            margin: 16px 0 0;
            min-height: 1.6em
        }

        .note.ok {
            color: var(--ok)
        }

        .note.err {
            color: var(--err)
        }

        .side {
            background: var(--surface);
            border: 1px solid var(--line);
            border-radius: 16px;
            padding: 28px
        }

        .side h2 {
            font-size: 22px;
            margin-bottom: 16px
        }

        .side ul {
            margin: 0;
            padding: 0;
            list-style: none;
            display: grid;
            gap: 14px
        }

        .side li {
            font-size: 15px;
            color: var(--muted);
            padding-left: 28px;
            position: relative
        }

        .side li::before {
            content: "✓";
            position: absolute;
            left: 0;
            top: 0;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: var(--accent);
            color: var(--accent-ink);
            font-size: 12px;
            display: grid;
            place-items: center;
            line-height: 1
        }

        .side li b {
            color: var(--ink)
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

            .report,
            .row {
                grid-template-columns: 1fr
            }

            .page-hero {
                padding-top: 56px
            }

            .form-card {
                padding: 24px
            }

            nav a:not(.btn) {
                display: none
            }
        }
    </style>
</head>

<body>

    <x-header></x-header>

    <main>
        <div class="wrap page-hero">
            <p class="eyebrow">Report us</p>
            <h1>Found something wrong? Tell us.</h1>
            <p>Spotted a mistake, a broken link or a story that does not belong? Send us a report and we will review it
                as soon as we can.</p>
        </div>

        <div class="wrap report">
            <div class="form-card">
                <form id="reportForm" novalidate>
                    <div class="row">
                        <div class="field">
                            <label for="name">Name <small>(optional)</small></label>
                            <input id="name" name="name" type="text" autocomplete="name">
                        </div>
                        <div class="field">
                            <label for="email">Email</label>
                            <input id="email" name="email" type="email" autocomplete="email" required>
                            <span class="error" id="emailErr"></span>
                        </div>
                    </div>

                    <div class="field">
                        <label for="type">What are you reporting?</label>
                        <select id="type" name="type" required>
                            <option value="">Choose one…</option>
                            <option>Wrong or misleading information</option>
                            <option>Broken link or page</option>
                            <option>Duplicate story</option>
                            <option>Copyright problem</option>
                            <option>Bug on the website</option>
                            <option>Other</option>
                        </select>
                        <span class="error" id="typeErr"></span>
                    </div>

                    <div class="field">
                        <label for="url">Page link <small>(optional)</small></label>
                        <input id="url" name="url" type="url" placeholder="https://">
                        <span class="error" id="urlErr"></span>
                    </div>

                    <div class="field">
                        <label for="msg">What happened?</label>
                        <textarea id="msg" name="msg" maxlength="1000" required></textarea>
                        <div class="count"><span id="n">0</span>/1000</div>
                        <span class="error" id="msgErr"></span>
                    </div>

                    <div class="field check">
                        <input id="ok" type="checkbox">
                        <label for="ok">You may contact me about this report.</label>
                    </div>

                    <button class="btn" type="submit">Send report</button>
                    <p class="note" id="note" role="status" aria-live="polite"></p>
                </form>
            </div>

            <aside class="side">
                <h2>Helpful details</h2>
                <ul>
                    <li><b>Add the link.</b> It helps us find the story fast.</li>
                    <li><b>Be specific.</b> Say what is wrong and where.</li>
                    <li><b>Share a source.</b> If you know the correct fact, tell us.</li>
                    <li><b>We read every report.</b> Most are checked within 2 days.</li>
                </ul>
            </aside>
        </div>
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

        const form = document.getElementById("reportForm");
        const msg = document.getElementById("msg");
        const note = document.getElementById("note");

        msg.addEventListener("input", () => {
            document.getElementById("n").textContent = msg.value.length;
        });

        function setError(id, field, text) {
            document.getElementById(id).textContent = text;
            field.setAttribute("aria-invalid", text ? "true" : "false");
            return !text;
        }

        form.addEventListener("submit", (e) => {
            e.preventDefault();
            const email = form.email, type = form.type, url = form.url;

            const okEmail = setError("emailErr", email,
                /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value.trim()) ? "" : "Enter a valid email.");
            const okType = setError("typeErr", type, type.value ? "" : "Choose a report type.");
            let urlText = "";
            if (url.value.trim()) {
                try { new URL(url.value.trim()); } catch { urlText = "Enter a full link, like https://example.com"; }
            }
            const okUrl = setError("urlErr", url, urlText);
            const okMsg = setError("msgErr", msg,
                msg.value.trim().length >= 10 ? "" : "Please write at least 10 characters.");

            note.className = "note";
            if (!(okEmail && okType && okUrl && okMsg)) {
                note.textContent = "Please fix the highlighted fields.";
                note.classList.add("err");
                return;
            }

            // TODO: send the data to your server or form service here
            const data = Object.fromEntries(new FormData(form));
            console.log("Report:", data);

            note.textContent = "Thank you! Your report was sent.";
            note.classList.add("ok");
            form.reset();
            document.getElementById("n").textContent = "0";
        });
    </script>
</body>

</html>
