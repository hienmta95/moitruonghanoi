<div class="left-home">
    <div class="news-left">
        <h2 class="title-category">
            Tin tức nổi bật         </h2>
        <ul class="list-news-left">
            <?php
            $i = 0;
            foreach($tintuc as $item) {
            if($i < 3) {
            ?>
            <li>
                <div class="row">
                    <div class="col-md-4 col-sm-3 col-xs-4">
                        <div class="img-news-left">
                            <a href="{{ route('tintuc', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}" title="{{ $item['title'] }}" class="h_727"><img class="w_100" src="{{ asset('/').$item['image']['url'] }}" alt="{{ $item['title'] }}"/></a>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-9 col-xs-8">
                        <div class="text-new-left">
                            <h3 class="name-new-left">
                                <a href="/">{{ $item['title'] }}</a>
                            </h3>
                            <div class="date-time">
                                {{ date_format(date_create($item['updated_at']),"d-m-Y") }}
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <?php
            } else {
                break;
            }
            $i++;
            }
            ?>
        </ul>
    </div>
</div>
