<section class="main-slide">
    <div class="uk-slidenav-position slideshow" data-uk-slideshow="{animation: 'swipe', autoplay: true, autoplayInterval: 7500}">
        <ul class="uk-slideshow">
            @foreach($slide as $item)
                <li>
                    <a class="image img-cover" href="">
                        <img src="{{ asset('/').$item['image']['url'] }}" alt="" />
                    </a>
                </li>
            @endforeach

        </ul>
        <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
        <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
    </div>
</section><!-- .main-slide -->
