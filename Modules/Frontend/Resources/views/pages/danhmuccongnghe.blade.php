<div class="category">
    <h2 class="title-category">
        <a href="" title="">Danh mục công nghệ</a>
    </h2>
    <div id="webwidget_vertical_menu" class="webwidget_vertical_menu">
        <ul class="list-cate">
            @foreach($loaicongnghe as $item)
                <li>
                    <a href="{{ route('frontend.loaicongnghe', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}" title="{{ $item['title'] }}"> <i class="fa fa-caret-right" aria-hidden="true"></i>{{ $item['title'] }}</a>
                    <ul>
                    </ul>
                </li>
            @endforeach

        </ul>
    </div>
</div>

<div class="clearfix-15"></div>
