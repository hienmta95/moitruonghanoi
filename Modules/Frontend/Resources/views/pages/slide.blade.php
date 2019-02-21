<div class="banner-fix">
    <div class="slider-main owl-carousel owl-theme">

        @foreach($slide as $item)
            <div class="item">
                <a href=""><img class="w_100" src="{{ asset('/').$item['image']['url'] }}" alt=""/></a>
            </div>
        @endforeach

    </div>
</div>
