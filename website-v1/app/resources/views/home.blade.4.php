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
                            <h3 class="date">15.07.2019 17:30</h3>
                            <h4 class="place"><a class="accent-link" href="https://www.facebook.com/pg/klubokawiarnia.aquarium/about/?ref=page_internal" target="blank">Klubokawiarnia Aquarium - Galeria Bielska BWA: ul. 3 Maja 11 (na piętrze), 43-300 Bielsko-Biała</a></h4>
                        </div>

                        <div class="page-scroll">
                            <a href="https://www.meetup.com/Bielsko-Biala-CodeBB/events/262587945/" class="join-btn animate-delay btn-brd-white btn-brd-gray" data-animation="animated fadeInUp">Zapisz się na spotkanie</a>
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
                                    <img style="margin-top: 20px" class="img-thumbnail rounded float-left" src="assets/meetings/04/redis-site-logo.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="features">
                                    <div class="features-in description">
										<h3>Redis Cache</h3>
										<h4>Marcin Rzeszowski </h4>
										<p>
                                            Czym jest Redis? Jak go zainstalować? Jak zacząć? Czy warto instalować własny serwer, czy lepiej skorzystać z rozwiązań typu SaaS? Podczas prezentacji Marcin Rzeszowski postara się odpowiedzieć na każde z tych pytań, a także jak efektywnie używać Redis Cache z wykorzystaniem platformy .NET Core. 
										</p>
                                    </div>
                                </div>
                            </div>
                        </div>
						
						<div class="row margin-bottom-70">
							<div class="col-md-1"></div>
                            <div class="col-md-3">
                                <div class="features">
                                    <img style="margin-top: 20px" class="img-thumbnail rounded float-left" src="assets/meetings/04/androidai-sitelogo.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="features">
                                    <div class="features-in description">
										<h3>Wykorzystanie machine learningu na platformach mobilnych </h3>
										<h4>Wojciech Warwas i Andrzej Nowak </h4>
										<p>
                                            W trakcie tej prelekcji zostanie zaprezentowane wykorzystanie machine learningu w aplikacjach biznesowych. Zaczynając od wskazania przykładowego frameworku przez wykorzystanie go w kilku przykładowych zadaniach, aż do prezentacji wyników. Rezultatem będzie aplikacja wykorzystująca mechanizmy, których nie powstydziłoby się samo Google! 
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