@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            Liên hệ môi trường Hà Nôi
        @endcomponent
    @endslot
    {{-- Body --}}
    Khách hàng có tên {{ $data['hoten'] }} vừa mới thực hiện một liên hệ từ phía website {{ route('trangchu') }}
    <br />
    Thông tin của khách hàng:<br />
    Họ tên : {{ $data['hoten'] }}<br />
    SĐT: {{ $data['sdt'] }}<br />
    Email: {{ $data['email'] }}<br />
    Địa chỉ: {{ $data['diachi'] }}<br />
    Nội dung: {{ $data['noidung'] }}<br />

    @slot('footer')
        @component('mail::footer')
            © {{ date('Y') }} Moitruonghanoi. superAdmin!
        @endcomponent
    @endslot
@endcomponent
