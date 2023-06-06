@extends('layout.main')

@section('title')
    Cards
@endsection

@section('content')


<main>
    <div class="series">
        <h2>current series</h2>
    </div>

    <div class="container">

        {{-- @forelse ($cards as $card)
        <div class="cards">
            <img src="{{ $card['thumb'] }}" alt="{{ $card['title'] }}">
            <h4>{{ $card['title']}} </h4>
        </div>
        @empty

        @endforelse --}}

<div class="cards">
    <img src="https://static.wikia.nocookie.net/marvel_dc/images/0/0d/Batman_Superman_Vol_1_1.jpg" alt="productName">
    <h4>Card</h4>
</div>
<div class="cards">
    <img src="https://static.wikia.nocookie.net/marvel_dc/images/0/0d/Batman_Superman_Vol_1_1.jpg" alt="productName">
    <h4>Card</h4>
</div>
<div class="cards">
    <img src="https://static.wikia.nocookie.net/marvel_dc/images/0/0d/Batman_Superman_Vol_1_1.jpg" alt="productName">
    <h4>Card</h4>
</div>
<div class="cards">
    <img src="https://static.wikia.nocookie.net/marvel_dc/images/0/0d/Batman_Superman_Vol_1_1.jpg" alt="productName">
    <h4>Card</h4>
</div>
<div class="cards">
    <img src="https://static.wikia.nocookie.net/marvel_dc/images/0/0d/Batman_Superman_Vol_1_1.jpg" alt="productName">
    <h4>Card</h4>
</div>
<div class="cards">
    <img src="https://static.wikia.nocookie.net/marvel_dc/images/0/0d/Batman_Superman_Vol_1_1.jpg" alt="productName">
    <h4>Card</h4>
</div>

    </div>

    <button>
        LOAD MORE
    </button>
</main>

@endsection
