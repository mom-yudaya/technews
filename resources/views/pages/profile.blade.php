@extends("layouts.app")

@section('title', 'Profile')

@section('content')
<div class="profile">
    <div class="p-card">
        <div class="p-cover"></div>
        <div class="p-body">
            <div class="p-avatar">{{ strtoupper(substr($first_name, 0, 1) . substr($last_name, 0, 1)) }}</div>
            <h1>{{ $full_name }}</h1>
            <p class="p-sub">{{ $major }}</p>

            <ul class="p-list">
                <li><span>First name</span><b>{{ $first_name }}</b></li>
                <li><span>Last name</span><b>{{ $last_name }}</b></li>
                <li><span>Major</span><b>{{ $major }}</b></li>
                <li><span>Subject</span><b>{{ $subject }}</b></li>
            </ul>
        </div>
    </div>
</div>

<style>
    .profile {
        max-width: 560px;
        margin: 56px auto;
        padding: 0 24px
    }

    .p-card {
        background: var(--bg, #fff);
        border: 1px solid var(--line, #e3e7ef);
        border-radius: 16px;
        overflow: hidden
    }

    .p-cover {
        height: 110px;
        background: var(--accent, #2347ff)
    }

    .p-body {
        padding: 0 32px 32px;
        text-align: center
    }

    .p-avatar {
        width: 96px;
        height: 96px;
        border-radius: 50%;
        margin: -48px auto 16px;
        display: grid;
        place-items: center;
        background: var(--surface, #f5f7fb);
        border: 4px solid var(--bg, #fff);
        color: var(--accent, #2347ff);
        font: 800 34px var(--head, system-ui)
    }

    .p-body h1 {
        margin: 0;
        font: 800 30px/1.15 var(--head, system-ui);
        color: var(--ink, #131a2b)
    }

    .p-sub {
        margin: 6px 0 24px;
        color: var(--muted, #5b6479)
    }

    .p-list {
        list-style: none;
        margin: 0;
        padding: 0;
        text-align: left
    }

    .p-list li {
        display: flex;
        justify-content: space-between;
        gap: 16px;
        padding: 14px 0;
        border-top: 1px solid var(--line, #e3e7ef)
    }

    .p-list span {
        color: var(--muted, #5b6479)
    }

    .p-list b {
        color: var(--ink, #131a2b);
        text-align: right
    }
</style>

@endsection
