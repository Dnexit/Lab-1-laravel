@extends('layouts.default')
@section('title', 'история просмотра')
@section('content')
    <main class="main">
        <div class="history" id="history_local">
            <h2>История за все время</h2>
            <ul>
            </ul>
        </div>
        <div class="history" id="history_session">
            <h2>История сессии</h2>
            <ul>

            </ul>
        </div>
    </main>
    <script src="js/history.js" defer></script>
@endsection
