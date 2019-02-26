@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            Môi trường Hà Nội
        @endcomponent
    @endslot
    {{-- Body --}}
    Cám ơn bạn {{ $data['hoten'] }} đã liên hệ, chúng tôi sẽ có phản hồi hoặc liên hệ lại với bạn trong thời gian gần nhất. <br />
    {{ route('trangchu') }}

    {{-- Subcopy --}}
    {{--@isset($subcopy)--}}
        {{--@slot('subcopy')--}}
            {{--@component('mail::subcopy')--}}
                {{--{{ $subcopy }}--}}
            {{--@endcomponent--}}
        {{--@endslot--}}
    {{--@endisset--}}
    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            © {{ date('Y') }} Moitruonghanoi. superAdmin!
        @endcomponent
    @endslot
@endcomponent
