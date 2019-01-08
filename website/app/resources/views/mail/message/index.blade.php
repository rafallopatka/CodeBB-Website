@component('mail::layout')

    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            <img src="{{asset('assets/onepage2/img/logo_default.png')}}"/>
        @endcomponent
    @endslot
    <div>
        <p> Imię i nazwisko: {{ $name}} </p>
        <p> E-mail: {{ $email }} </p>
        <p> Telefon: {{ $phone }} </p>
        <p> Temat: {{ $subject }} </p>
        <p> Wiadomość: {{ $message }} </p>
    </div>
    @slot('footer')
        @component('mail::footer')
            © {{ date('Y') }} CodeBB
        @endcomponent
    @endslot
@endcomponent