<a href="{{ route('product_details', $item['slug']) }}">
    <div class="pm-cardContainer">

        <div class="pm-card-cat">
            <div class="containerImg">
                <img src="{{ $item['thumb'] }}" alt="IMG">
            </div>

            <div class="name">
                <h5>{{ $item['title']}}</h5>
                <h5>{{ $item['price']}}</h5>
            </div>
        </div>

    </div>
</a>
