    @extends('layout.mainlayout')


    @section('content')
    
            <section id="start">
                <div class="team-bg parallax">
                    <div class="container">
                        <div class="heading-light">
                            <h2>
                                <img class="logo" src="assets/onepage2/img/logo_default_big.png" alt="CodeBB"/>
                            </h2>
                            <p>Porozmawiajmy o programowaniu</p>
                        </div>

                        <div class="row">
                                <div class="col-md-1"></div>
                            <div class="about col-md-10" >
                                <p class="text-justify">
                                    <em>
                                    CodeBB - inicjatywa której celem jest zrzeszanie pasjonatów programowania, testowania, technologii oraz dobrych i skutecznych praktyk wytwarzania oprogramowania. W ramach cyklicznych spotkań chcemy dzielić się wiedzą, doskonalić umiejętności, poszerzać horyzonty, wymieniać się doświadczeniami z innymi oraz oderwać się od codziennych zadań.
                                    Niezależnie od doświadczenia, roli czy wykorzystywanych na co dzień technologii i narzędzi, każdy powinien znaleźć tu coś dla siebie, czy to w formie słuchacza, aktywnego uczestnika czy prelegenta. 
                                    </em>
                                </p>
                                <p  class="text-right">
                                    <em>
                                        <strong>Serdecznie zapraszamy.</strong>
                                    </em>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="meetings">
                <div class="features-bg">
                    <div class="container">
                        <div class="heading">
                            <h2><strong>Najbliższe</strong> spotkanie</h2>
                            <h3 class="date">24.04.2019 17:30</h3>
                            <h4 class="place"><a class="accent-link" href="https://www.facebook.com/pg/klubokawiarnia.aquarium/about/?ref=page_internal" target="blank">Klubokawiarnia Aquarium - Galeria Bielska BWA: ul. 3 Maja 11 (na piętrze), 43-300 Bielsko-Biała</a></h4>
                        </div>

                        <div class="page-scroll">
                            <a href="https://www.meetup.com/Bielsko-Biala-CodeBB" class="join-btn animate-delay btn-brd-white btn-brd-gray" data-animation="animated fadeInUp">Zapisz się na spotkanie</a>
                        </div>

                        <div class="row md-margin-bottom-70 margin-top-70">
                                <div class="col-md-12 md-margin-bottom-70 text-center">
                                    <h2>Agenda</h2><br/>
                                </div>
                            </div><!-- //end row -->
                            <div class="row margin-bottom-70">
                                <div class="col-md-1"></div>
                            <div class="col-md-3">
                                <div class="features">
                                    <img style="margin-top: 20px" class="img-thumbnail rounded float-left" src="assets/meetings/03/rxlogo-min.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="features">
                                    <div class="features-in description">
                                            <h3>Rzecz o błędach, zmianach i strumieniach</h3>
                                            <h4>Rafał Łopatka</h4>
                                            <p>
                                                    Rosnące wymagania, zmiany, mnogość sposobów interakcji z aplikacjami i błędy, rodzą nieustannie nowe wyzwania z którymi musimy jako programiści sobie radzić.  

                                                    <br/> <br/>
                                                    W trakcie tej prezentacji dowiesz się, jak strumienie i programowanie reaktywne, mogą pomóc w ogarnięciu chaosu zdarzeń, poczynań użytkownika, błędów, zaspokajając wizję biznesu nie poświęcając jakości kodu. 
                                                    

                                                   <br/> <br/>
                                                    Konkretnie dowiesz się: 
                                            <ul>
                                                <li>Jak zachowują się operatory RX gdy coś pójdzie nie tak</li>
                                                <li>Jak obsługiwać błędy strumieni </li>
                                                <li>Jak zaaplikować strumienie do klasycznych rozwiązań architektonicznych </li>
                                                <li>Jak obsługiwać asynchroniczne zmiany stanu bez REDUXa ;) </li>
                                                <li>Jak zaimplementować reaktywne komponenty </li>
                                                <li>Jak połączyć to wszystko w całość </li>
                                            </ul>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </section>
    @stop