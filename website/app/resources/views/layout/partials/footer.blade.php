<section id="contact">
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="heading-left-light">
                        <h2 class="text-transform-none">Skontaktuj się z nami</h2>
                        <p>Prosimy o skorzystanie z formularza lub wysłanie wiadomości bezpośrednio na adres e-mail
                            <a class="accent-link" href="mailto:kontakt@codebb.pl">kontakt@codebb.pl</a>
                        </p>
                    </div>
                </div>
                <div class="col-sm-6">
                    @if(session('message'))
                        <div class='alert alert-success'>
                            {{ session('message') }}
                        </div>
                    @endif
                    <div class="form">
                        <form class="form-horizontal" method="POST" action="/contact">
                            {{ csrf_field() }}
                            <div class="form-wrap">
                                <div class="form-wrap-group">
                                    <input type="text" placeholder="Imię / Nazwisko" class="form-control" id="name" name="name">
                                    <input type="text" placeholder="Temat wiadomości" class="border-top-transparent form-control" id="subject" name="subject">
                                </div>
                                <div class="form-wrap-group border-left-transparent">
                                    <input type="text" placeholder="E-mail" class="form-control" id="email" name="email">
                                    <input type="text" placeholder="Telefon (opcjonalnie)" class="border-top-transparent form-control" id="phone" name="phone">
                                </div>
                            </div>
                            <div class="form-row">
                                <textarea rows="8" name="message" placeholder="Wiadomość" class="border-top-transparent form-control" id="message" name="message"></textarea>
                            </div>
                            {{--<div class="form-row m-t-5px">--}}
                            {{--<div class="form-check">--}}
                            {{--<input type="checkbox" class="form-check-input accent--checkbox" id="rodo-check">--}}
                            {{--<label class="form-check-label" for="rodo-check">--}}
                            {{--Wysyłając formularz kontaktowy, wyrażasz zgodę na przetwarzanie Twoich danych osobowych przez CodeBB jako Administratora, w celu obsługi Twojego zapytania.--}}
                            {{--</label>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            <div class="form-row">
                                <button type="submit" class="btn-danger btn-md btn-block">Wyślij</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="footer-copyright">
        <div class="container">
            <h3>
                <img class="logo" src="assets/onepage2/img/logo_default.png" alt="CodeBB"/>
            </h3>
            <br/>
            <ul class="copyright-socials">
            {{--<li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
            <li><a href="https://www.facebook.com/codebbpl/"><i class="fa fa-facebook"></i></a></li>
            {{-- <li><a href="https://www.meetup.com/Bielsko-Biala-CodeBB/"><i class="fa fa-meetup"></i></a></li> --}}
            <li><a href="https://github.com/CodeBBpl"><i class="fa fa-github"></i></a></li>
            {{--<li><a href="#"><i class="fa fa-pinterest"></i></a></li>--}}
            {{--<li><a href="#"><i class="fa fa-linkedin"></i></a></li> --}}
            </ul>
        </div>
    </div>
</section>
</div>

<a href="#intro" class="go2top"><i class="fa fa-arrow-up"></i></a>

<div class="cookies-info">
    <img class="cookie-btn" src="assets/onepage2/img/icons/cookie.png"/>
    <strong>
        Cookies
        <a class="close close-cookie" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </a>
    </strong>
    <p>
        Używając tej strony zezwalasz na wykorzystywanie przez nią plików cookies. <a class="white-link" href="/cookies"
                                                                                      target="blank"><b>Polityka
                Cookies</b>.</a>
    </p>
</div>


<div id="inline-badge" class="hidden"></div>
