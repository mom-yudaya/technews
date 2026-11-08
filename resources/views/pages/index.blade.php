@extends('layouts.app')

@section('title', 'TechNews – Tech news in five minutes')

@section('content')

<main id="top">

  <div class="wrap hero">
    <div>
      <h1>The tech news that matters, in five minutes.</h1>
      <p class="lead">We gather stories from trusted sources every day, cut the noise, and give you a short, clear summary of each one.</p>
      <form class="sub" data-sub novalidate>
        <input type="email" name="email" placeholder="you@example.com" aria-label="Email address" required>
        <button class="btn" type="submit">Get the daily digest</button>
      </form>
      <p class="note" data-note aria-live="polite">Free. One email a day. Unsubscribe anytime.</p>
    </div>

    <x-aside></x-aside>
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
      <div><h3>Short by design</h3><p>Every story is summarised in a few lines. You get the point first, then choose whether to read more.</p></div>
      <div><h3>Updated automatically</h3><p>New articles arrive from trusted feeds throughout the day, so the page is never out of date.</p></div>
      <div><h3>Easy to read anywhere</h3><p>Clean white pages with large text that load fast on a phone, a laptop, or a slow connection.</p></div>
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

@push('scripts')
<script>
var POSTS = [
  {t:"AI",  h:"Open-source models are catching up fast", p:"Free models now handle many tasks that needed paid tools a year ago.", m:"4 min read", c:"#dbe4ff"},
  {t:"Web", h:"Browsers get smarter about tracking", p:"New built-in controls make it easier to keep your browsing private.", m:"3 min read", c:"#d9f2e6"},
  {t:"Security", h:"Password managers explained simply", p:"What they do, why they are safer, and how to switch in ten minutes.", m:"5 min read", c:"#ffe3dc"},
  {t:"Gadgets", h:"Choosing a laptop for coding in 2026", p:"RAM, battery life, and screen: the three specs that matter most.", m:"6 min read", c:"#fff1cc"},
  {t:"AI", h:"How to use AI tools without losing your skills", p:"Practical habits for students and developers who use AI every day.", m:"4 min read", c:"#e6dcff"},
  {t:"Web", h:"Why fast websites win more readers", p:"A few small changes to images and fonts can cut load time in half.", m:"3 min read", c:"#d6f0f7"}
];
var TOPICS = ["All","AI","Web","Security","Gadgets"];
var grid = document.getElementById("grid"), chips = document.getElementById("chips");

function render(topic){
  var list = POSTS.filter(function(p){ return topic === "All" || p.t === topic; });
  grid.innerHTML = list.length ? list.map(function(p){
    return '<a class="post" href="/blog"><div class="thumb" style="background:'+p.c+'"></div><div class="in">'+
  '<span class="tag">'+p.t+'</span><h3>'+p.h+'</h3><p>'+p.p+'</p><span class="meta">'+p.m+'</span></div></a>';
  }).join("") : '<p class="empty">No stories in this topic yet.</p>';
}
TOPICS.forEach(function(t, i){
  var b = document.createElement("button");
  b.className = "chip"; b.textContent = t; b.setAttribute("aria-pressed", i === 0);
  b.addEventListener("click", function(){
    chips.querySelectorAll(".chip").forEach(function(c){ c.setAttribute("aria-pressed", c === b); });
    render(t);
  });
  chips.appendChild(b);
});
render("All");
</script>
@endpush