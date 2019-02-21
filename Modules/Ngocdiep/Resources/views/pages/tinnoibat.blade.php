
<section class="aside-panel aside-news">
    <header class="panel-head">
        <h3 class="heading"><span>Tin tức nổi bật</span></h3>
    </header>
    <section class="panel-body">
        <ul class="uk-list list-article">
            <?php
            $i = 0;
            foreach($tintuc as $item) {
            if($i < 5) {
            ?>
            <li>
                <article class="article uk-clearfix">
                    <div class="thumb">
                        <a class="image img-cover" href="{{ route('tintuc', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}" title="Ngọc Diệp cung cấp nội thất cho Trung tâm lưu ký chứng khoán Việt Nam">
                            <img src="{{ asset('/').$item['image']['url'] }}" alt="{{ $item['title'] }}">
                        </a>
                    </div>
                    <div class="infor">
                        <h4 class="title">
                            <a href="{{ route('tintuc', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}" title="{{ $item['title'] }}">
                                {{ $item['title'] }}
                            </a>
                        </h4>
                        <div class="meta"><i class="fa fa-clock-o"></i> {{ date_format(date_create($item['updated_at']),"d-m-Y") }}</div>
                    </div>
                </article>
            </li>
        <?php
            } else {
                break;
            }
            $i++;
            }
            ?>
        </ul>
    </section>
</section>
