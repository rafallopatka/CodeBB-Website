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
                            <h3 class="date">30.01.2019 17:00</h3>
                            <h4 class="place"><a class="accent-link" href="https://www.facebook.com/pg/klubokawiarnia.aquarium/about/?ref=page_internal" target="blank">Klubokawiarnia Aquarium - Galeria Bielska BWA: ul. 3 Maja 11 (na piętrze), 43-300 Bielsko-Biała</a></h4>
                        </div>

                        <div class="page-scroll">
                            <a href="#" class="join-btn animate-delay btn-brd-white btn-brd-gray" data-animation="animated fadeInUp">Zapisz się na spotkanie</a>
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
                                    <img class="img-thumbnail rounded float-left" src="assets/meetings/dockerlogo.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="features">
                                    <div class="features-in description">
                                        <h3>Jak nauczyć sie programować w 10 lat?</h3>
                                        <h4>Adam Górny</h4>

                                        <p>
                                            Javascript w 60 dni? Java w 21 dni, a może C# w 7 dni? O tym jak szybko zdobyć cenne kwalifikacje. O tym jak nie zapomnieć, że prawdziwe umiejętności specjalistyczne kształtują się przez lata. O tym jak nie zwariować w dynamicznie rozwijającym się świecie IT opowie programista z firmy Euvic.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row margin-bottom-70">
                                <div class="col-md-1"></div>
                            <div class="col-md-3 md-margin-bottom-70">
                                <div class="features">
                                    <img class="img-thumbnail rounded float-left" src="assets/meetings/rxlogo.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="features">
                                    <div class="features-in description">
                                            <h3>Rzecz o programowaniu funkcyjnym i reaktywnym z ReactiveX</h3>
                                            <h4>Rafał Łopatka</h4>
    
                                            <p>
                                                RxJs, RxNet, RxJava czy RxSwift - Reactive Extensions są dziś powszechne niemal w każdym wiodącym języku programowania, podobnie jak i wyzwania z którymi mogą Ci pomóc. W trakcie tej prezentacji dowiesz się jak z użyciem reaktywnych strumieni, sprostać asynchroniczności, wielowątkowości, obsłudze błędów i zarządzaniu stanem aplikacji.
                                            </p>
    
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="row md-margin-bottom-70 text-center">
                              <a href="https://meetup.com" target="blank" class="btn-brd-danger">Zarejestruj się</a>
                            </div> --}}
                    </div>
                </div>
            </div>
            </section>

        

            <!-- SUBSCRIBE END -->

        
            {{-- <!-- BEGIN CLIENTS SECTION -->
            <section id="clients">
                <div class="clients">
                    <div class="clients-bg">
                        <div class="container">
                            <div class="heading-blue">
                                <h2>Over <strong>30.000</strong> Customers</h2>
                                <p>and let's see what are they saying</p>
                            </div><!-- //end heading -->
    
                            <!-- Owl Carousel -->
                            <div class="owl-carousel">
                                <div class="item" data-quote="#client-quote-1">
                                    <img src="assets/onepage2/img/clients/logo1.png" alt="">
                                </div>
                                <div class="item" data-quote="#client-quote-2">
                                    <img src="assets/onepage2/img/clients/logo2.png" alt="">
                                </div>
                                <div class="item" data-quote="#client-quote-3">
                                    <img src="assets/onepage2/img/clients/logo3.png" alt="">
                                </div>
                                <div class="item" data-quote="#client-quote-4">
                                    <img src="assets/onepage2/img/clients/logo4.png" alt="">
                                </div>
                                <div class="item" data-quote="#client-quote-5">
                                    <img src="assets/onepage2/img/clients/logo5.png" alt="">
                                </div>
                                <div class="item" data-quote="#client-quote-6">
                                    <img src="assets/onepage2/img/clients/logo6.png" alt="">
                                </div>
                                <div class="item" data-quote="#client-quote-7">
                                    <img src="assets/onepage2/img/clients/logo7.png" alt="">
                                </div>
                                <div class="item" data-quote="#client-quote-8">
                                    <img src="assets/onepage2/img/clients/logo8.png" alt="">
                                </div>
                                <div class="item" data-quote="#client-quote-9">
                                    <img src="assets/onepage2/img/clients/logo9.png" alt="">
                                </div>
                                <div class="item" data-quote="#client-quote-10">
                                    <img src="assets/onepage2/img/clients/logo10.png" alt="">
                                </div>
                                <div class="item" data-quote="#client-quote-11">
                                    <img src="assets/onepage2/img/clients/logo11.png" alt="">
                                </div>
                                <div class="item" data-quote="#client-quote-12">
                                    <img src="assets/onepage2/img/clients/logo12.png" alt="">
                                </div>
                                <div class="item" data-quote="#client-quote-13">
                                    <img src="assets/onepage2/img/clients/logo13.png" alt="">
                                </div>
                                <div class="item" data-quote="#client-quote-14">
                                    <img src="assets/onepage2/img/clients/logo14.png" alt="">
                                </div>
                            </div>
                            <!-- End Owl Carousel -->
                        </div>
                    </div>
                    
                    <!-- Clients Quotes -->
                    <div class="clients-quotes">
                        <div class="container">
                            <div class="client-quote" id="client-quote-1">
                                <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit euismod tincidunt ut laoreet dolore magna aliquam dolor sit amet consectetuer elit</p>
                                <h4>Mark Nilson</h4>
                                <span>Director</span>
                            </div>
                            <div class="client-quote" id="client-quote-2">
                                <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit euismod tincidunt aliquam dolor sit amet consectetuer elit</p>
                                <h4>Lisa Wong</h4>
                                <span>Artist</span>
                            </div>
                            <div class="client-quote" id="client-quote-3">
                                <p>Lorem ipsum dolor sit amet consectetuer elit euismod tincidunt aliquam dolor sit amet elit</p>
                                <h4>Nick Dalton</h4>
                                <span>Developer</span>
                            </div>
                            <div class="client-quote" id="client-quote-4">
                                <p>Fusce mattis vestibulum felis, vel semper mi interdum quis. Vestibulum ligula turpis, aliquam a molestie quis, gravida eu libero.</p>
                                <h4>Alex Janmaat</h4>
                                <span>Co-Founder</span>
                            </div>
                            <div class="client-quote" id="client-quote-5">
                                <p>Vestibulum sodales imperdiet euismod.</p>
                                <h4>Jeffrey Veen</h4>
                                <span>Designer</span>
                            </div>
                            <div class="client-quote" id="client-quote-6">
                                <p>Praesent sed sollicitudin mauris. Praesent eu metus laoreet, sodales orci nec, rutrum dui.</p>
                                <h4>Inna Rose</h4>
                                <span>Google</span>
                            </div>
                            <div class="client-quote" id="client-quote-7">
                                <p>Sed ornare enim ligula, id imperdiet urna laoreet eu. Praesent eu metus laoreet, sodales orci nec, rutrum dui.</p>
                                <h4>Jacob Nelson</h4>
                                <span>Support</span>
                            </div>
                            <div class="client-quote" id="client-quote-8">
                                <p>Adipiscing elit euismod tincidunt ut laoreet dolore magna aliquam dolor sit amet consectetuer elit</p>
                                <h4>John Doe</h4>
                                <span>Marketing</span>
                            </div>
                            <div class="client-quote" id="client-quote-9">
                                <p>Nam euismod fringilla turpis vitae tincidunt, adipiscing elit euismod tincidunt aliquam dolor sit amet consectetuer elit</p>
                                <h4>Michael Stawson</h4>
                                <span>Graphic Designer</span>
                            </div>
                            <div class="client-quote" id="client-quote-10">
                                <p>Quisque eget mi non enim efficitur fermentum id at purus.</p>
                                <h4>Liam Nelsson</h4>
                                <span>Actor</span>
                            </div>
                            <div class="client-quote" id="client-quote-11">
                                <p>Integer et ante dictum, hendrerit metus eget, ornare massa.</p>
                                <h4>Madison Klarsson</h4>
                                <span>Director</span>
                            </div>
                            <div class="client-quote" id="client-quote-12">
                                <p>Vestibulum sodales imperdiet euismod.</p>
                                <h4>Ava Veen</h4>
                                <span>Writer</span>
                            </div>
                            <div class="client-quote" id="client-quote-13">
                                <p>Ut sit amet nisl nec dui lobortis gravida ut et neque. Praesent eu metus laoreet, sodales orci nec, rutrum dui.</p>
                                <h4>Sophia Williams</h4>
                                <span>Apple</span>
                            </div>
                            <div class="client-quote" id="client-quote-14">
                                <p>Nam non vulputate orci. Duis sed mi nec ligula tristique semper vitae pretium nisi. Pellentesque nec enim vel magna pulvinar vulputate.</p>
                                <h4>Melissa Korn</h4>
                                <span>Reporter</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Clients Quotes -->
                </div>
            </section>
            <!-- END CLIENTS SECTION --> --}}


    @stop