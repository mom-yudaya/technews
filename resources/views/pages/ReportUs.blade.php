@extends('layouts.app')

@section('title', 'Report Us – TechNews')

@section('content')

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

<style>
    .report { --err: #c23a3a; display: grid; grid-template-columns: 1.3fr .7fr; gap: 40px; align-items: start; padding-bottom: 88px }
    .form-card { border: 1px solid var(--line); border-radius: 16px; padding: 32px; background: var(--bg) }
    .report .row { display: grid; grid-template-columns: 1fr 1fr; gap: 16px }
    .report .field { display: flex; flex-direction: column; gap: 6px; margin-bottom: 20px }
    .report label { font-size: 14px; font-weight: 600 }
    .report label small { font-weight: 400; color: var(--muted) }
    .report input, .report select, .report textarea { width: 100%; font: 400 16px var(--body); padding: 12px 14px; border: 1px solid var(--line); border-radius: 10px; background: var(--bg); color: var(--ink) }
    .report textarea { min-height: 150px; resize: vertical }
    .report [aria-invalid="true"] { border-color: var(--err) }
    .report .error { font-size: 13px; color: var(--err); min-height: 1.2em }
    .report .count { font-size: 13px; color: var(--muted); text-align: right }
    .report .check { flex-direction: row; align-items: flex-start; gap: 10px }
    .report .check input { width: 18px; height: 18px; margin-top: 4px; flex: none }
    .report .check label { font-weight: 400; color: var(--muted) }
    .report .note { font-size: 15px; margin: 16px 0 0; min-height: 1.6em }
    .report .note.ok { color: var(--ok) }
    .report .note.err { color: var(--err) }
    .side { background: var(--surface); border: 1px solid var(--line); border-radius: 16px; padding: 28px }
    .side h2 { font-size: 22px; margin-bottom: 16px }
    .side ul { margin: 0; padding: 0; list-style: none; display: grid; gap: 14px }
    .side li { font-size: 15px; color: var(--muted); padding-left: 28px; position: relative }
    .side li::before { content: "✓"; position: absolute; left: 0; top: 0; width: 20px; height: 20px; border-radius: 50%; background: var(--accent); color: var(--accent-ink); font-size: 12px; display: grid; place-items: center; line-height: 1 }
    .side li b { color: var(--ink) }

    @media (max-width: 860px) {
        .report, .report .row { grid-template-columns: 1fr }
        .form-card { padding: 24px }
    }
</style>

@endsection

@push('scripts')
<script>
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
@endpush
