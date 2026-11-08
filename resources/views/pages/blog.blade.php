@extends('layouts.app')

@section('title', 'Blog – TechNews')

@section('content')

<main>
    <div class="wrap page-hero">
        <p class="eyebrow">Blog</p>
        <h1>All the newest tech stories.</h1>
        <p>Fresh summaries from trusted sources, in plain language. Updated every day.</p>
    </div>

    <div class="wrap">
        <div class="tools">
            <div class="chips" id="chips" role="group" aria-label="Filter by category"></div>
            <input class="search" id="q" type="search" placeholder="Search posts…" aria-label="Search posts">
        </div>

        <div id="featured"></div>
        <div class="grid" id="grid"></div>

        <div class="more">
            <button class="btn ghost" id="more" type="button">Load more</button>
        </div>
    </div>
</main>

<style>
    .page-hero { padding: 88px 0 40px; max-width: 760px }
    .page-hero h1 { font-size: clamp(40px, 6vw, 64px); font-weight: 800 }
    .page-hero p { font-size: 19px; color: var(--muted); margin: 22px 0 0 }
    .eyebrow { font-size: 14px; font-weight: 600; color: var(--accent); margin: 0 0 14px }

    .tools { display: flex; justify-content: space-between; align-items: center; gap: 16px; flex-wrap: wrap; margin-bottom: 32px }
    .search { font: 400 15px var(--body); padding: 10px 14px; border: 1px solid var(--line); border-radius: 10px; background: var(--bg); color: var(--ink); width: 240px; max-width: 100% }

    .featured { display: grid; grid-template-columns: 1.2fr 1fr; border: 1px solid var(--line); border-radius: 16px; overflow: hidden; margin-bottom: 24px; background: var(--bg) }
    .featured:hover { border-color: var(--accent) }
    .featured .thumb { min-height: 260px; height: 100% }
    .featured .in { padding: 32px; display: flex; flex-direction: column; gap: 12px; justify-content: center }
    .featured h2 { font-size: clamp(26px, 3.5vw, 36px); font-weight: 800; line-height: 1.15 }
    .featured p { margin: 0; color: var(--muted) }

    .more { text-align: center; padding: 40px 0 88px }

    @media (max-width: 860px) {
        .featured { grid-template-columns: 1fr }
        .featured .thumb { min-height: 180px }
        .page-hero { padding-top: 56px }
    }
</style>

@endsection

@push('scripts')
<script>
    const posts = [
        { title: "New AI chips make laptops faster and cooler", cat: "AI", date: "2026-11-01", min: 4, color: "#dbe4ff", text: "The latest generation of chips runs AI tasks on the device instead of the cloud." },
        { title: "Why every website now needs a passkey option", cat: "Security", date: "2026-10-31", min: 3, color: "#d9f2e6", text: "Passkeys replace passwords with something that cannot be phished." },
        { title: "A simple guide to SQL joins for beginners", cat: "Dev", date: "2026-10-30", min: 6, color: "#ffe3dc", text: "INNER, LEFT, RIGHT: what each one returns, with small examples." },
        { title: "5G vs Wi-Fi 7: which one do you really need?", cat: "Networks", date: "2026-10-29", min: 5, color: "#fff2c9", text: "Speed, range and cost compared for home and mobile use." },
        { title: "Web frameworks are getting smaller again", cat: "Dev", date: "2026-10-28", min: 4, color: "#e9dcff", text: "Developers are moving back to lighter tools and plain HTML." },
        { title: "How to spot a fake software update", cat: "Security", date: "2026-10-27", min: 3, color: "#d4f1f4", text: "Five quick checks before you click install." },
        { title: "Open-source models close the gap with big labs", cat: "AI", date: "2026-10-26", min: 5, color: "#dbe4ff", text: "Smaller teams now release models that match paid ones on many tests." },
        { title: "Home networks: set up a guest Wi-Fi in 2 minutes", cat: "Networks", date: "2026-10-25", min: 2, color: "#d9f2e6", text: "Keep visitors off your main network with one setting." },
        { title: "Learning to code in 2026: where to start", cat: "Dev", date: "2026-10-24", min: 6, color: "#ffe3dc", text: "A clear path for students, from first script to first project." }
    ];

    const PAGE = 6;
    let cat = "All", term = "", shown = PAGE;

    const chips = document.getElementById("chips");
    const grid = document.getElementById("grid");
    const featured = document.getElementById("featured");
    const more = document.getElementById("more");
    const q = document.getElementById("q");

    const esc = (s) => s.replace(/[&<>"']/g, (c) => ({ "&": "&amp;", "<": "&lt;", ">": "&gt;", '"': "&quot;", "'": "&#39;" }[c]));
    const fmt = (d) => new Date(d + "T00:00:00").toLocaleDateString("en-US", { month: "short", day: "numeric", year: "numeric" });

    posts.sort((a, b) => b.date.localeCompare(a.date));

    const cats = ["All", ...new Set(posts.map((p) => p.cat))];
    chips.innerHTML = cats.map((c) =>
        `<button class="chip" type="button" data-c="${esc(c)}" aria-pressed="${c === cat}">${esc(c)}</button>`).join("");

    function card(p) {
        return `<a class="post" href="#">
            <div class="thumb" style="background:${p.color}"></div>
            <div class="in">
                <span class="tag">${esc(p.cat)}</span>
                <h3>${esc(p.title)}</h3>
                <p>${esc(p.text)}</p>
                <span class="meta">${fmt(p.date)} · ${p.min} min read</span>
            </div></a>`;
    }

    function render() {
        const list = posts.filter((p) =>
            (cat === "All" || p.cat === cat) &&
            (p.title + " " + p.text).toLowerCase().includes(term));

        if (!list.length) {
            featured.innerHTML = "";
            grid.innerHTML = '<p class="empty">No posts found.</p>';
            more.hidden = true;
            return;
        }

        const [top, ...rest] = list;
        featured.innerHTML = `<a class="featured" href="#">
            <div class="thumb" style="background:${top.color}"></div>
            <div class="in">
                <span class="tag">${esc(top.cat)} · Newest</span>
                <h2>${esc(top.title)}</h2>
                <p>${esc(top.text)}</p>
                <span class="meta">${fmt(top.date)} · ${top.min} min read</span>
            </div></a>`;

        grid.innerHTML = rest.slice(0, shown).map(card).join("");
        more.hidden = rest.length <= shown;
    }

    chips.addEventListener("click", (e) => {
        const b = e.target.closest(".chip");
        if (!b) return;
        cat = b.dataset.c;
        shown = PAGE;
        chips.querySelectorAll(".chip").forEach((x) => x.setAttribute("aria-pressed", x === b));
        render();
    });

    q.addEventListener("input", () => {
        term = q.value.trim().toLowerCase();
        shown = PAGE;
        render();
    });

    more.addEventListener("click", () => { shown += PAGE; render(); });

    render();
</script>
@endpush