
<section class="aside-categories" style="display: none">
    <header class="panel-head">
        <h3 class="heading"><span>Danh mục công nghệ</span></h3>
    </header>
    <section class="panel-body">
        <ul id="aside-categories" class="uk-list uk-accordion maincat" data-uk-accordion="" style="margin: 0px">

        </ul>
    </section>
</section>

<section class="aside-categories">
    <header class="panel-head">
        <h3 class="heading"><span>{{ __('Danh mục công nghệ') }}</span></h3>
    </header>
    <section class="panel-body">
        <ul id="aside-categories" class="uk-list uk-accordion maincat" data-uk-accordion="" style="margin: 0px">
            @foreach($loaicongnghe as $item)
                <li>
                    <a class="uk-accordion-title uk-active" href="{{ route('loaicongnghe', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}" title="{{ $item[$title] }}">
                        {{ $item[$title] }}
                    </a>
                    <div data-wrapper="true" style="height: auto; position: relative;" aria-expanded="true"><ul class="uk-list uk-accordion-content subcat uk-active">
                            @foreach($item['congnghe'] as $congnghe)
                                <li>
                                    <a href="{{ route('congnghe', ['id'=>$congnghe['id'], 'slug'=>$congnghe['slug']]) }}" title="{{ $congnghe[$title] }}">
                                        {{ $congnghe[$title] }}
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </li>
            @endforeach
        </ul>
    </section>
</section><!-- .art-categories -->
