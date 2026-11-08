@extends('layouts.app')

@section('title', 'About – TechNews')

@section('content')

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
            <a href="/index#subscribe" class="btn">Subscribe for free</a>
        </section>
</main>

<style>
        .page-hero { padding: 88px 0 56px; max-width: 760px }
        .page-hero h1 { font-size: clamp(40px, 6vw, 64px); font-weight: 800 }
        .page-hero p { font-size: 19px; color: var(--muted); margin: 22px 0 0 }
        .eyebrow { font-size: 14px; font-weight: 600; color: var(--accent); margin: 0 0 14px }

        .stats { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; padding-bottom: 72px }
        .stat { border: 1px solid var(--line); border-radius: 14px; padding: 24px }
        .stat b { display: block; font: 800 40px var(--head); letter-spacing: -.03em }
        .stat span { color: var(--muted); font-size: 15px }

        .story { display: grid; grid-template-columns: 1fr 1.2fr; gap: 56px }
        .story h2 { font-size: clamp(28px, 4vw, 40px); font-weight: 700 }
        .story p { margin: 0 0 16px; color: var(--muted) }

        .steps { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; counter-reset: s }
        .step { border: 1px solid var(--line); border-radius: 14px; padding: 24px; background: var(--bg) }
        .step::before { counter-increment: s; content: counter(s); display: grid; place-items: center; width: 36px; height: 36px; border-radius: 50%; background: var(--accent); color: var(--accent-ink); font: 700 16px var(--head); margin-bottom: 16px }
        .step h3 { font-size: 20px; margin-bottom: 8px }
        .step p { margin: 0; font-size: 15px; color: var(--muted) }

        .team { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px }
        .member { text-align: left }
        .avatar { width: 72px; height: 72px; border-radius: 50%; display: grid; place-items: center; font: 700 24px var(--head); margin-bottom: 14px }
        .member h3 { font-size: 19px }
        .member p { margin: 2px 0 0; font-size: 15px; color: var(--muted) }

        @media (max-width: 860px) {
            .stats, .steps, .team, .story { grid-template-columns: 1fr }
            .story { gap: 24px }
            .page-hero { padding-top: 56px }
        }
</style>

@endsection