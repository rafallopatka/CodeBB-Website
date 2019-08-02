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
                            <h2>Najbliższy meetup</h2>
                            <h1><strong>Ten o zarabianiu, rozdawaniu i Flutterze</strong></h1>

                            <h3 class="date">09.09.2019 17:30</h3>
                            <h4 class="place"><a class="accent-link" href="https://www.facebook.com/pg/klubokawiarnia.aquarium/about/?ref=page_internal" target="blank">Klubokawiarnia Aquarium - Galeria Bielska BWA: ul. 3 Maja 11 (na piętrze), 43-300 Bielsko-Biała</a></h4>
                        </div>

                        <div class="page-scroll">
                            <a href="https://www.meetup.com/Bielsko-Biala-CodeBB/events/263677769/" class="join-btn animate-delay btn-brd-white btn-brd-gray" data-animation="animated fadeInUp">Zapisz się na spotkanie</a>
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
                                    <img style="margin-top: 20px" class="img-thumbnail rounded float-left" src="assets/meetings/05/opensource.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="features">
                                    <div class="features-in description">
										<h3>Za darmo się opłaca, czyli o darmowym oprogramowaniu</h3>
										<h4>Mateusz Godzic</h4>
										<p>
                                            Prezentacja będzie się skupiać na modelach biznesowych których metodyką jest udostępnianie usług za darmo, pokaże wam w jaki sposób te firmy zarabiają przy jednoczesnym zadowoleniu sowich użytkowników.										</p>
                                    </div>
                                </div>
                            </div>
                        </div>
						
						<div class="row margin-bottom-70">
							<div class="col-md-1"></div>
                            <div class="col-md-3">
                                <div class="features">
                                    <img style="margin-top: 20px" class="img-thumbnail rounded float-left" src="assets/meetings/05/flutter.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="features">
                                    <div class="features-in description">
										<h3>Flutter - Sky* is the limit</h3>
										<h4>Marcin Jasiński oraz Marcin Starmach</h4>
										<p>
                                            Brakuje Ci gotówki? Nie masz od pierwszego do pierwszego? Myślisz o programowaniu? Przyjdź na nasz wykład pod kierownictwem utalentowanych programistów Marcina Jasińskiego oraz Marcina Starmacha z Iteo. W krótki i skondensowany sposób pokażą, jak zacząć swoją przygodę z Flutterem - nowym frameworkiem w świecie aplikacji mobilnych. Poznana wiedza otworzy Ci nowe ścieżki kariery, o których nawet nie marzyłeś!										</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </section>
    @stop