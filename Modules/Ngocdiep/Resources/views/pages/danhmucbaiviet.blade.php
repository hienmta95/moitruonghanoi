
<section class="aside-categories">
    <header class="panel-head">
        <h3 class="heading"><span>{{ __('Danh mục bài viết') }}</span></h3>
    </header>
    <section class="panel-body">
        <ul id="aside-categories" class="uk-list uk-accordion maincat" data-uk-accordion="" style="margin: 0px">

            <li>
                <a class="uk-accordion-title" href="{{ route('gioithieu') }}" title="Giới Thiệu">
                    {{ __('Giới thiệu') }}</a>
                <div data-wrapper="true" style="height: auto; position: relative;" aria-expanded="true">
                    <ul class="uk-list uk-accordion-content subcat">
                        <li>
                            <a href="{{ route('gioithieu') }}" title="{{ __('Về chúng tôi') }}">{{ __('Về chúng tôi') }}</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a class="uk-accordion-title" href="#" title="Công nghệ của chúng tôi">{{ __('Công nghệ') }}</a>
                <div data-wrapper="true" style="height: auto; position: relative;" aria-expanded="true">
                    <ul class="uk-list uk-accordion-content subcat">
                        @foreach($loaicongnghe as $item)
                            <li>
                                <a href="{{ route('loaicongnghe', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}" title="{{ $item[$title] }}">{{ $item[$title] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </li>
            <li>
                <a class="uk-accordion-title" href="#" title="Các sản phẩm">{{ __('Sản phẩm') }}</a>
                <div data-wrapper="true" style="height: auto; position: relative;" aria-expanded="true">
                    <ul class="uk-list uk-accordion-content subcat">
                        @foreach($loaisanpham as $item)
                            <li>
                                <a href="{{ route('loaisanpham', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}" title="{{ $item[$title] }}">{{ $item[$title] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </li>
            <li>
                <a class="uk-accordion-title" href="#" title="Các dự án">{{ __('Dự án') }}</a>
                <div data-wrapper="true" style="height: auto; position: relative;" aria-expanded="true">
                    <ul class="uk-list uk-accordion-content subcat">
                        @foreach($loaiduan as $item)
                            <li>
                                <a href="{{ route('loaiduan', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}" title="{{ $item[$title] }}">{{ $item[$title] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </li>
            <li>
                <a class="uk-accordion-title" href="{{ route('tintuc.list') }}" title="Tin tức">
                    {{ __('Tin tức') }}</a>
                <div data-wrapper="true" style="height: auto; position: relative;" aria-expanded="true">
                    <ul class="uk-list uk-accordion-content subcat">
                        <li>
                            <a href="{{ route('tintuc.list') }}" title="{{ __('Tin tức nổi bật') }}">{{ __('Tin tức nổi bật') }}</a>
                        </li>
                    </ul>
                </div>
            </li>

        </ul>
    </section>
</section><!-- .art-categories -->
