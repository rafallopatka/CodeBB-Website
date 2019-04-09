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
                            <h3 class="date">11.03.2019 17:30</h3>
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
                        <div class="row margin-bottom-30">
                            <div class="col-md-1"></div>
                            <div class="col-md-3">
                                <div class="features">
                                    <img class="img-thumbnail rounded float-left" src="assets/meetings/02/vertx.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="features">
                                    <div class="features-in description">
                                        <h3>Budowanie reaktywnej aplikacji z wykorzystaniem Vert.x</h3>
                                        <h4>Bartosz Malinowski.</h4>
                                        <p>
                                            Obecnie wymagania stawiane aplikacjom, wymuszają na twórcach oprogramowania szukanie i korzystanie z rozwiązań pozwalających na zwiększenie dostępności, responsywności i skalowalności tworzonych systemów. Prezentacja ta poświęcona zostanie bibliotece Vert.x – lekkiemu i elastycznemu rozwiązaniu ułatwiającym tworzenie szybkich, wydajnych - reaktywnych systemów.
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