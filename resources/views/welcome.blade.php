@extends('layouts.app')

@section('content')
<div class="flex justify-center items-center">
    <main class="content">
        <header class="text-6xl">
            {{ __('messages.welcome', ['app' => config('app.name')]) }}
        </header>
    </main>
</div>
@endsection
