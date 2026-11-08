@extends("layouts.app")

@section('content')

<main id="top">
        <div class="wrap hero">
            <div>
                <h1>{{$title}}, {{$subtitle}}</h1>
                <p class="lead">We gather stories from trusted sources every day, cut the noise, and give you a short,
                    clear summary of each one.</p>
                <form class="sub" data-sub novalidate>
                    <input type="email" name="email" placeholder="you@example.com" aria-label="Email address" required>
                    <button class="btn" type="submit">Get the daily digest</button>
                </form>
                <p class="note" data-note aria-live="polite">Free. One email a day. Unsubscribe anytime.</p>
            </div>

            <x-aside> </x-aside>

        </div>

        <section id="latest" class="wrap">
            <div class="head">
                <h2>Latest stories</h2>
                <div class="chips" role="group" aria-label="Filter by topic" id="chips"></div>
            </div>
            <div class="grid" id="grid"></div>
        </section>

        <section id="why" class="why">
            <div class="wrap cols">
                <div>
                    <h3>Short by design</h3>
                    <p>Every story is summarised in a few lines. You get the point first, then choose whether to read
                        more.</p>
                </div>
                <div>
                    <h3>Updated automatically</h3>
                    <p>New articles arrive from trusted feeds throughout the day, so the page is never out of date.</p>
                </div>
                <div>
                    <h3>Easy to read anywhere</h3>
                    <p>Clean white pages with large text that load fast on a phone, a laptop, or a slow connection.</p>
                </div>
            </div>
        </section>

        <section id="subscribe" class="cta wrap">
            <h2>Start your morning with one email</h2>
            <p>Join readers who catch up on technology before their first coffee.</p>
            <form class="sub" data-sub novalidate>
                <input type="email" name="email" placeholder="you@example.com" aria-label="Email address" required>
                <button class="btn" type="submit">Subscribe</button>
            </form>
            <p class="note" data-note aria-live="polite"></p>
        </section>
</main>

@endsection