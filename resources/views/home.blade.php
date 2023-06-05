@extends('layout.main')

@section('content')

<main>
    <div class="series">
        <h2>current series</h2>
    </div>

    <div class="container">

    <ProductCard
        v-for="(product, index) in products"
        :key="index"
        :image="product.thumb"
        :productName="product.series"
    />

    </div>

    <button>
        LOAD MORE
    </button>


    <div class="loghi">
    <ul>
        <li><img src="/img/buy-comics-digital-comics.png" alt="digital comics"> digital comics </li>
        <li><img src="/img/buy-comics-merchandise.png" alt="merchandise">dc merchandise</li>
        <li><img src="/img/buy-comics-subscriptions.png" alt="subscriptions">subscriptions</li>
        <li><img src="/img/buy-comics-shop-locator.png" alt="comic shop locator">comic shop locator</li>
        <li><img src="/img/buy-dc-power-visa.svg" alt="power visa">dc power visa</li>
        </ul>
    </div>
</main>

@endsection
