<?php
session_start();
    require_once 'structure/template.php';
?>

<!doctype html>
<html lang="pl">

    <?php echo $template_start_head; ?>
    <title>BTeam</title>
    <?php echo $template_end_head; ?>
           <header id="header">
            <?php echo $nav_menu; ?>
            </header>
    <body>
<div class="main_oNas__oferta_background">
        <section id="main">
            <div class="main_photo" id="slider">
                <ul>
                    <li  class="one show mySlides" alt="Łukasz Bochenkiewicz"></li>
                    <li class="two show mySlides" alt="Bracia Bochenkiewicz"></li>
                    <li class="three show mySlides" alt="Paweł Bochenkiewicz"></li>
                    <li class="four show mySlides" alt="Bracia Bochenkiewicz"></li>
                    <li class="five show mySlides" alt="Paweł Bochenkiewicz"></li>
                    <li class="six show mySlides" alt="Bracia Bochenkiewicz"></li>
             </div>  
            <div class="col-8 main__content">
                <div class="main__text">
                    <p >Siła rodzi się z kolan.</p>
                </div>
            </div>
        </section>
             <div class="razor" id="razor">
                <div class="razor_shadow"></div>
            </div>
        <!-- O Nas  -->
        <section class="oNas" id="oNas">
        <div class="oNas__title">
            <h2 class="h2">O nas</h2>
        </div>
        <div class="container">
            <div class="row oNas_box">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-sm-12 col-lg-6 oNas_box-main">
                        <div class="col-12  oNas_img_hover hover_2">
                                <img src="../images/galleries/oNas/22.jpg" alt="Łukasz Bochenkiewicz">   
                            </div>
                            <div class="oNas_pawel-box" id="lukasz" data-swap="false">
                                <div>
                                    <img src="images/galleries/oNas/2.jpg" class="oNas__bottom-img" alt="Łukasz Bochenkiewicz">
                                    <p class="oNas__bottom-text">Łukasz Bochenkiewicz</p>
                                    <p>&nbsp&nbsp&nbsp&nbsp Trener z powołania. Trener przygotowania motorycznego, trener personalny, pasjonata treningu funkcjonalnego i sztuk walki.</p>
                                    <p>&nbsp&nbsp&nbsp&nbsp Wychowanek WKS Śląsk Wrocław w koszyk&oacute;wce. Czterokrotny medalista Mistrzostw Polski w tym dwa razy Mistrz Polski i najlepszy zawodnik MVP. Reprezentant kraju na Mistrzostwach Europy i Świata. Absowent Akademii Wychowania Fizycznego we Wrocławiu. Uczestnik wielu prestiżowych szkoleń z zakresu przygotowania motorycznego i treningu funkcjonalnego (m.in. NCSC/ EXOS/ FMS).</p>
                                    <p>&nbsp&nbsp&nbsp&nbsp Ze sportem związany od ponad 20 lat. Trenuje zawodnik&oacute;w sport&oacute;w zespołowych i indywidualnych pod kątem przygotowania motorycznego. Trener Mistrz&oacute;w Świata, Europy i Polski zawodnik&oacute;w r&oacute;żnych sztuk walki (K1, Karate, MMA) itp. Trener przygotowania fizycznego koszykarskiego G&oacute;rnika Wałbrzych w sezonie 2016/17. Trener młodzieżowej reprezentacji polski w siatk&oacute;wce kobiet. Przygotowuje r&oacute;wnież służby mundurowe do selekcji na komandos&oacute;w oraz wiele innych.</p>
                                    <p>&nbsp&nbsp&nbsp&nbsp Jako trener personalny pomaga swoim podopiecznym osiągnąć wyznaczony cel ze znakomitą skutecznością. Członek Polskiego Związku Trener&oacute;w Personalnych.</p>
                                    <p class="oNas__bottom-text-last">  Motywator i profesjonalista.</p>
                                </div>
                            </div> 
                        </div>                                     
                        <div class="col-sm-12 col-lg-6 oNas_box-main">
                        <div class="col-12  oNas_img_hover hover_1">
                                <img src="../images/galleries/oNas/11.jpg" alt="Paweł Bochenkiewicz">   
                            </div> 
                            <div class="oNas_pawel-box" id="pawel" data-swap="false">
                                <div>
                                    <img src="images/galleries/oNas/1.jpg" class="oNas__bottom-img" alt="Paweł Bochenkiewicz">
                                    <p class="oNas__bottom-text">Paweł Bochenkiewicz</p>
                                    <p>&nbsp&nbsp&nbsp&nbsp Trener z powołania. Trener przygotowania motorycznego, trener personalny, trener II klasy koszyk&oacute;wki, pasjonata treningu funkcjonalnego i oporowego.</p>
                                    <p>&nbsp&nbsp&nbsp&nbsp Wychowanek WKS Śląsk Wrocław w koszyk&oacute;wce. Medalista Mistrzostw Polski, reprezentant Polski na Mistrzostwach Europy. Wsp&oacute;łautor trzech awans&oacute;w z WKS Śląsk Wrocław od najniższej klasy rozgrywkowej w Polsce do najwyższej (ekstraklasy). Wielokrotny triumfator Konkursu Wsad&oacute;w. Absolwent Akademii Wychowania Fizycznego we Wrocławiu (trener przygotowania motorycznego).&nbsp; Uczestnik wielu prestiżowych szkoleń z zakresu przygotowania motorycznego i treningu funkcjonalnego (m.in. NCSC/ EXOS/ FMS).</p>
                                    <p>&nbsp&nbsp&nbsp&nbsp Ze sportem związany od ponad 20 lat. Zajmuje się przygotowaniem motorycznym zar&oacute;wno u amator&oacute;w jak i profesjonalnych zawodnik&oacute;w r&oacute;żnych dyscyplin sportowych (koszyk&oacute;wka, piłka ręczna, akrobatyka, sztuki walki itd.). Trener przygotowania fizycznego młodzieżowej kadry polski w siatk&oacute;wce mężczyzn. Trener komendy miejskiej państwowej straży pożarnej we Wrocławiu w 2017 roku oraz wiele innych.</p>
                                    <p>&nbsp&nbsp&nbsp&nbsp Jako trener personalny zawsze zmierza do celu z powodzeniem wraz ze swoimi podopiecznymi. Członek Polskiego Związku Trener&oacute;w Personalnych. </p>
                                    <p class="oNas__bottom-text-last">Perfekcjonista i Fanatyk.</p>
                                </div>  
                            </div> 

                        </div>
                    </div>   
                </div>
            </div>
    </section>
      <div class="razor" id="razor">
        <div class="razor_shadow"></div>
    </div>
<section class="oferta" id="oferta">
    <div class="oferta-body">
            <div class="oferta__title">
                <h2 class="h2">Oferta</h2>
            </div>
            <div class="container">
                    <div class="row" style="justify-content: center;">
                        <div class="col-lg-6 col-xl-4 d-flex big_bottom_box" data-aos="zoom-in-up">
                            <div class="oferta__box">
                                <div>
                                    <h3 class="h3">Przygotowanie <br>Motoryczne</h3>
                                </div>
                                <div class="oferta_image"> 
                                    <img src="images/galleries/oferta/1.jpg" class="  oferta_image-gray" alt="Przygotowanie Motoryczne">
                                </div>
                                <div>
                                    <p class="oferta__text">
                                    Przygotowanie motoryczne/fizyczne zawodnika jest kluczowym elementem we wsp&oacute;łczesnym sporcie na każdym jego etapie i poziomie. Gł&oacute;wnym elementem naszej pracy jest ocena fundamentalnych wzorc&oacute;w ruchowych jako podstawy do dalszego rozwoju sportowca. W oparciu o światowe standardy (NSCA/ EXOS/ FMS/ MCS itp..), oraz dostęp do najnowszych badań i publikacji, a także wieloletnie doświadczenie zawodnicze i trenerskie w sportach zespołowych i indywidualnych pomaga nam doskonale zrozumieć i zintegrować się ze swoimi podopiecznymi.
                                    </p>  
                                </div>
                                <div class="oferta_button-center">
                                    <div class="col-md-12 oferta_button"> 
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Przygotowanie_Motoryczne">
                                        Dowiedz się więcej
                                        </button>
                                    </div>
                                </div>  
                            </div>
                        </div>  
                        <div class="modal fade" id="Przygotowanie_Motoryczne" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Przygotowanie Motoryczne</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>
                                Uprzednio wymienione składowe pozwalają nam na dokładną analizę potrzeb i wyznaczenie ścieżki działania. Wiemy jak ważne jest kształtowanie wszystkich cech motorycznych (tj. SIŁA, WYTRZYMAŁOŚĆ, SZYBKOŚĆ, ZWINNOŚĆ, SKOCZNOŚĆ, ZRĘCZNOŚĆ, GIBKOŚĆ) niezależnie od rodzaju dyscypliny sportowej, tak aby maksymalnie zminimalizować ryzyko kontuzji. Dokładamy wszelkich starań, swoją pasję, doświadczenie i zaangażowanie w pracę ze sportowcami. Nie jesteśmy teoretykami, lecz przede wszystkim praktykami, kt&oacute;rzy cały czas się rozwijają i pogłębiają swoją wiedzę, aplikując ją bezpośrednio do program&oacute;w<br />treningowych. Podczas lat związanych ze sportem zdążyliśmy poznać wszystkie odmiany wysiłk&oacute;w<br />fizycznych o r&oacute;żnej intensywności i przetestować je na sobie. Nieodzownymi elementami każdego sportowca podczas treningu i start&oacute;w jest krew, pot i łzy, aby miały one sens i przełożenie na wyniki sportowe trzeba wiedzieć jak działać. Z nami to osiągniesz.
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-6 col-xl-4 d-flex big_bottom_box" data-aos="zoom-in-up">
                            <div class="oferta__box">
                                <div>
                                    <h3 class="h3">Trening <br>Personalny</h3></div>
                                <div class="oferta_image">
                                    <img src="images/galleries/oferta/2.jpg" alt="Trening Personalny">
                                </div>
                                <div>
                                    <p class="oferta__text">
                                    Związani z treningiem i zdrowym stylem życia jesteśmy od najmłodszych lat. Jako profesjonalni sportowcy wiemy jak istotne jest to w każdej dyscyplinie sportowej, jak r&oacute;wnież w życiu codziennym. Każdy człowiek wykonuję fundamentalne czynności związane z ruchem, takie jak: chodzenie, bieganie, siadanie, podnoszenie r&oacute;żnych przedmiot&oacute;w, skakanie i wiele innych. Wykonując te wszystkie zadania życia codziennego przez wiele lat w nieodpowiedni spos&oacute;b można doprowadzić do trwałych uszczerbk&oacute;w całego układu ruchu. Nasz organizm jest bardzo tolerancyjny do czasu&hellip;
                                    </p>  
                                </div>
                                <div class="oferta_button-center">

                                    <div class="col-12 oferta_button"> 
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Trening_Personalny">
                                         Dowiedz się więcej
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="modal fade" id="Trening_Personalny" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="Trening_Personalny">Trening Personalny</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Właściwy i odpowiedni trening pod czujnym okiem profesjonalist&oacute;w jest niezbędny, aby zminimalizować ryzyko r&oacute;żnego rodzaju zwichnięć, złamań, skręceń, b&oacute;l&oacute;w i przeciążeń. R&oacute;wnież po to, aby żyło nam się łatwiej i przyjemniej, a jakość życia wzrosła, bez niepotrzebnych nikomu kontuzji, natomiast wyżej wymienione czynności nie sprawiały nam problemu.</p>
                                <p>Ponad to cele jakie możesz z nami skutecznie realizować w świetnej atmosferze to między innymi:</p>
                                <ul>
                                    <li>redukcja tkanki tłuszczowej</li>
                                    <li>poprawa kondycji</li>
                                    <li>rozw&oacute;j muskulatury</li>
                                    <li>budowa siły</li>
                                    <li>og&oacute;lna poprawa sylwetki (korzystna zmiana składu ciała)</li>
                                    <li>nauka poprawnych wzorc&oacute;w ruchowych</li>
                                    <li>wzmocnienie całego aparatu ruchowego</li>
                                    <li>prewencja i powroty po urazach</li>
                                    <li>przygotowanie do sport&oacute;w sezonowych</li>
                                </ul>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                            </div>
                            </div>
                        </div>
                        </div>
                       <div class="col-lg-6 col-xl-4 d-flex big_bottom_box" data-aos="zoom-in-up">
                            <div class="oferta__box">
                                <div>
                                    <h3 class="h3 h3_center">Diagnostyka </span></h3></div>
                                <div class="oferta_image">
                                    <img src="images/galleries/oferta/3.jpg" alt="Diagnostyka">
                                </div>
                                    <div>
                                        <p class="oferta__text oferta__text-center">
                                        Sprzęt opisany powyżej pozwola nam na dokładną analizę i diagnozę praktycznie wszystkich parametr&oacute;w motorycznych. Dzięki konkretnym badaniom diagnostycznym jesteśmy w stanie określić dokładny profil motoryczny zawodnika. Z kolei na podstawie uzyskanego profilu dobieramy odpowiednią ścieżkę rozwoju sportowca pod kątem przygotowania fizycznego/motorycznego.
                                        </p>  
                                    </div>
                                <div class="oferta_button-center">
                                    <div class="col-12 oferta_button"> 
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Diagnostyka">Dowiedz się więcej</button>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="modal fade" id="Diagnostyka" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="Diagnostyka">Diagnostyka</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p><u>GymAware:</u></p>
                                <p>&nbsp;To mały, przenośny i precyzyjny liniowy przetwornik położenia, kt&oacute;rego element w postaci pętli przyczepia się do pasa, sztangi lub maszyn izolowanych w celu pomiaru m.in. mocy. System GymAware służy m.in. do oceny wydajności treningu na siłowni.</p>
                                <p>Natychmiastowy podgląd wynik&oacute;w pozwala monitorować postępy, optymalizować obciążenia, kontrolować zmęczenie, przetrenowanie, sprawdzać kilka parametr&oacute;w jednocześnie, takich przemieszczenie, prędkość, siłę, wykonywaną pracę i moc. Jedną z unikalnych cech GymAware jest czujnik zmiany kąta, dzięki kt&oacute;remu urządzenie koryguje pomiar podczas ćwiczeń zawierających przemieszczenia w r&oacute;żnych osiach.</p>
                                <p>Badane parametry:</p>
                                <p>- Moc (W) - szczytowa, średnia</p>
                                <p>- Szybkość (m/s) - szczytowa, średnia</p>
                                <p>- Siła (N) - szczytowa, średnia</p>
                                <p>- Praca (J)</p>
                                <p>- Czas powt&oacute;rzenia (s)</p>
                                <p>- Wysokość (m)</p>
                                <p>- Głębokość (m)</p>
                                <p>&nbsp;</p>
                                <p><u>Komputerowa Platforma Stabilometryczna i Dynamometryczna:</u></p>
                                <ol>
                                    <li>Skoki z miejsca w g&oacute;rę z przysiadu bez zamachu SJ (squat jump),</li>
                                    <li>Skoki w g&oacute;rę z miejsca poprzedzone szybkim ugięciem n&oacute;g i zamachem - CMJ (counter movement jump)</li>
                                    <li>Skoki w g&oacute;rę po zeskoku z pewnej wysokości - DJ (drop jump).</li>
                                    <li>Zeskok z lądowaniem DL (drop land).</li>
                                </ol>
                                <p>Na wykresie możemy wyszczeg&oacute;lnić następujące fazy wyskoku:</p>
                                <p>1) przygotowawcza (zamach)&nbsp;</p>
                                <p>- początek: moment, w kt&oacute;rym OSC rozpoczyna ruch w d&oacute;ł (rozpoczęcie uginania&nbsp; w stawach kolanowych &ndash; odciążenie na wykresie)</p>
                                <p>- koniec: OSC zatrzymuje się w ruchu w d&oacute;ł i znajduje się w najniższym położeniu (maksymalne ugięcie w stawach kolanowych)</p>
                                <p>2) odbicie</p>
                                <p>- początek: OSC rozpoczyna ruch w g&oacute;rę, rozpoczęcie prostowania w stawach kolanowych</p>
                                <p>- koniec: moment utraty kontaktu z podłożem (Vmax)</p>
                                <p>3) lotu</p>
                                <p>- początek: utrata kontaktu z podłożem</p>
                                <p>- koniec: odzyskanie kontaktu z podłożem</p>
                                <p>4) lądowanie (amortyzacja)</p>
                                <p>- początek: odzyskanie kontaktu z podłożem</p>
                                <p>- koniec I: OSC znajduje się w najniższym położeniu, stawy kolanowe maksymalnie ugięte</p>
                                <p>- koniec II: powr&oacute;t do pozycji wyjściowej</p>
                                <p>Dla wyskoku liczone są m.in.:</p>
                                <ul>
                                    <li>Masa - średnia pierwsze 0.2s zaznaczonego testu</li>
                                    <li>Czas przygotowania</li>
                                    <li>Czas odbicia</li>
                                    <li>Czas lotu</li>
                                    <li>Czas lądowania</li>
                                    <li>Prędkość odbicia</li>
                                    <li>Minimalne położenie środka masy</li>
                                    <li>Odbicie położenie środka masy</li>
                                    <li>Maksymalne położenie środka masy</li>
                                    <li>Maksymalne przemieszczenie środka masy</li>
                                    <li>Względna wysokość wyskoku (ymax/h) [%]</li>
                                    <li>Praca (energii odbicia) E[J]</li>
                                    <li>Względna energii odbicia E/m[J/kg]</li>
                                    <li>Maksymalna moc odbicia Pmax [W]</li>
                                    <li>Względna moc maksymalna Pmax/m[W/kg]</li>
                                    <li>Średnia moc odbicia Pśr [W]</li>
                                    <li>Względna moc średnia Pśr/m[W/kg]</li>
                                    <li>Maksymalna siła reakcji [N]</li>
                                    <li>Maksymalna prędkość [m/s]</li>
                                </ul>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                        <div class="row oferta_bottom-line">
                            <div class="col-lg-6 col-xl-4 d-flex justify-content-center big_bottom_box" data-aos="zoom-in-up">
                                <div class="oferta__box">
                                <div>
                                        <h3 class="h3">Periodyzacja <br>Programowanie</h3></div>
                                    <div class="oferta_image">
                                        <img src="images/galleries/oferta/4.jpg" alt="Periodyzacja Programowanie">
                                    </div>
                                    <div>
                                        <p class="oferta__text">
                                        Programujemy profesjonalne plany treningowe na podstawie spotkania z podopiecznymi. Na początku
                                        przeprowadzamy szczegółową rozmowę i wywiad, omawiamy cele oraz oczekiwania. Kolejnym etapem
                                        są proste testy ruchowe, które dają szeroki obraz o stanie biomechanicznym konkretnej osoby.
                                        Następnie analizujemy i diagnozujemy dany przypadek. W konsekwencji tych działań tworzymy
                                        pełnowartościowy i indywidualny program treningowy. Na końcu przedkładamy podopiecznemu gotowy
                                        program przeprowadzając go i omawiając kolejne etapy oraz pokazując poszczególne ćwiczenia.
                                        </p>  
                                    </div>
                                    <!-- <div class="col-12 oferta_button"> 
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Diagnostyka">Dowiedz się więcej</button>
                                    </div> -->
                                </div>
                            </div>  
                            <div class="col-lg-6 col-xl-4 d-flex justify-content-center big_bottom_box" data-aos="zoom-in-up">
                                <div class="oferta__box">
                                    <div>
                                        <h3 class="h3 h3_center">Warsztaty </span></h3>
                                    </div>
                                    <div class="oferta_image">
                                        <img src="images/galleries/oferta/5.jpg" alt="Warsztaty">
                                    </div>
                                    <div>
                                        <p class="oferta__text oferta__text-center oferta__text-szkolenia">
                                        Pierwsze warsztaty już wkrótce!
                                        </p>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
</div>
<div class="razor" id="razor">
        <div class="razor_shadow"></div>
    </div>
<!-- <div class="section_referencje_kontakt-background"> -->
    <section class="referencje" id="referencje">
        <div class="referencje-body">
                    <div class="referencje__title">
                        <h2 class="h2">Referencje</h2>
                    </div>
        <div class="container">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="z-index:0;" data-interval="10000">
                            <ol class="carousel-indicators d-none d-md-flex">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            </ol>
                            <div class="carousel-inner" style="z-index:0;">
                                        <div class="carousel-item active">
                                            <div class="carousel-caption d-md-block">
                                                <a target="_blank" href="https://www.facebook.com/turynski.kickboxing/?__tn__=K-R&eid=ARD691GedjzX8GInPW771Il5synlRJ9hxprKFZbAEDzL4qdOcKiUPtLpuQR85FNo32EOiJsYT9bYrE-U&fref=mentions">
                                                    <img src="images/galleries/referencje/1.jpg" href="" alt="Michał Turyński">
                                                </a>
                                                <h5>Michał Turyński</h5>
                                                <h6>Mistrz Świata w Kickboxingu wagi ciężkiej WAKO PRO, Zawodnik Glory, Wielokrotny mistrz Polski </h6>
                                                <p><q class="lol">Z Łukaszem i Pawłem przygotowuję się do swoich walk zawodowych od ponad roku. Przekonał mnie do nich mój przyjaciel, mówiąc, że są najlepsi i się nie mylił !
                                                Chłopaki posiadają niesamowitą wiedzę teoretyczną popartą wieloletnią praktyką w sporcie na najwyższym poziomie!</q></p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="carousel-caption d-md-block">
                                            <a target="_blank" href="https://www.facebook.com/michalskimma/">
                                                    <img src="images/galleries/referencje/2.jpg" href="" alt="Michał Michalski">
                                                </a>
                                                <h5>Michał Michalski</h5>
                                                <h6>Profesjonalny zawodnik MMA federacji KSW kategoria 77kg</h6>
                                                <p><q>Profesjonaliści, zawodowcy, trenerzy z powołania.</q></p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="carousel-caption d-md-block">
                                                <a target="_blank" href="https://www.facebook.com/sylwek.sypien?__tn__=K-R&eid=ARD5HALo1vfgQ8lG-FeC7x-pyc2apLjW1e3WcgCaxzM5X-OtMW3gfKtXi5jasJsxyDuPgqL4tUYogokl&fref=mentions&__xts__[0]=68.ARDMJQAzg4reaAxwmRcmtD20mspA5dmoxJjL5ONB5flviTV3gAwdZN_UYyMbZGhu2mx4wA4tZQ8FiwcRv8ffvPTAdzLntSjqGJd9HZ2vOR6yU1Mhm3rRllP5jso1acsoeumZMQGFyYO9ciWysqNe3OcoauoM0VEhCmnbyHDbyLZCnLqsCenH5DPmPkflslvBnl7PBSpcwYOx32DZniDesApfsFyFIkBy7smL7i8iZgrrIpA-c-ApUBXdtaKqCQ2KQukw1bB3Wf62kVo6saDzWmchnOgzBm_EttKS_-FZG29dcxYdJZvIYJf2U4hdBEy0169gAUKB2gMX5JvI6V_aGLzfTg">
                                                    <img src="images/galleries/referencje/3.jpg" href="" alt="Sylwester Sypień">
                                                </a>
                                                <h5>Sylwester Sypień</h5>
                                                <h6>Mistrz Świata Masters w Karate Kyokushin</h6>
                                                <p><q>Podczas przygotowań do Mistrzostw Świata Masters karate Kyokushin przygotowaniem motorycznym zajął się Bteam. Dziękuję za profesjonalne przygotowanie zakończone tytułem Mistrza Świata w Tokio. Osu.</q></p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="carousel-caption d-md-block">
                                                <a target="_blank" href="https://www.facebook.com/flemasss?__tn__=K-R&eid=ARBixjmm58o6n8gjDzgPdlly89Wgh2RM0dSXcbHXEyrCKy438FsIe0IaIht0UhG-1-T8kq6SFQPsDSKR&fref=mentions&__xts__[0]=68.ARC1FQkAnRZ7R7_0JtZc_fj5y9gSXumRdNAB7sBVFSy4NUGRb1IsU8oWeVO6u5bzMNeaNae-NbJGlTsrmxsL0y51zPr3eQqRSWp3aN6jJ33NhNIgC8aSu_Z28TiAX9IWUB42jJxPgeEZrSidonr_qv4lNj-ZqiFKuUv8xPOMQlpAGszrVn_VnmTWJRoAhLBYwZ29NkpoXjIwwXlSh0JR6JCzx2c3TJ-VcOnJDmGnSozeL9pU6EwrIVU91DX1CNCgfiHg3tqSUoe_quDV0vZzqyt5HC9Z1AN4-aynZF6kyJL74qRpo320nXKxwEe5iAC7gE3OkExbbdEP_va_rptqnOP8Lw">
                                                    <img src="images/galleries/referencje/4.jpg" href="" alt="Patryk Sypień">
                                                </a>
                                                <h5>Patryk Sypień</h5>
                                                <h6>Mistrz Polski oraz Mistrz Europy Open w Karate Kyokushin</h6>
                                                <p><q>Od kilkunastu lat startuje na imprezach rangi światowej i próbowałem współpracy z wieloma trenerami. W ostatnim sezonie oddałem się w ręce Bteam i był to mój najlepszy rok startowy. Poczułem ogromną różnice w moim przygotowaniu i dlatego wiem, że nasza współpraca będzie jeszcze długo trwała.</q></p>
                                            </div>
                                        </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                            </div>
                        </div>
        </div>
    </section>
    <div class="razor" id="razor">
            <div class="razor_shadow"></div>
        </div>
    <section class="kontant section pb-5" id="kontakt">

                    <div class="kontakt__title">
                        <h2 class="h2">Kontakt</h2>
                    </div>
            <div class="container">
                    <div class="row kontakt-body" data-aos="fade-up" data-aos-duration="2000">
                            <div class="col-sm-12 col-lg-6 kontakt-body-column">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-header kontakt-text text-center">
                                            <h3><i class="fas fa-envelope"></i> Napisz do nas:</h3>
                                        </div>
                                            <?php if(isset($_SESSION["messageForUser-form"])){
                                                echo $_SESSION["messageForUser-form"];
                                                $_SESSION["messageForUser-form"] ="";
                                            } ?>
                                            <?php
                                                echo $mainForm;
                                            ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6 kontakt-body-column google-kolumn" >
                                <div class="col-12 kolumn-map h-100"style="max-height: none;">
                                    <div id="googlemap"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2504.651112141391!2d16.971280115969982!3d51.11489694714562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470fc1e6d0a502b3%3A0xa252a05660f42f7!2sProjekt%20Fabryczna!5e0!3m2!1spl!2spl!4v1580508416513!5m2!1spl!2spl" frameborder="0" style="border:0;"></iframe></div>
                                        <div>
                                            <div class="row text-center kontakt-dane">
                                                <div class=" col-sm-4">
                                                    <p>Łukasz: 883572227</p>
                                                    <p>Paweł: 601557544</p>
                                                </div>
                                                <div class=" col-sm-4">
                                                    <p>Wrocław</p>
                                                    <p>info@bteam.pl</p>
                                                </div>
                                                <div class=" col-sm-4">
                                                    <p>Pon - Pt: 6:00-22:00</p>
                                                    <p>Sob: 8:00-15:00</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             </div>
                </div>
    </section>
<!--Section: Contact v.1-->
    <div class="razor" id="razor">
            <div class="razor_shadow"></div>
        </div>
    <section id="partners">
                <div class="container">
            <div class="partners__title">
                <h2 class="h2"> Partnerzy </h2>
            <div>                  
            <div class="row partnerzy-center">
                <div id="partners-images-top" class="col-8 partners-images ">
                        <div class="col-6  partner-logo-box" data-aos="flip-left"  data-aos-duration="1000">
                        <a target="_blank" href="https://www.akielaszek.pl/">
                            <img src="images/galleries/partnerzy/akielaszek_wektor_www.png" class=".img-fluid"  id="akielaszek_wektor_www" alt="Kamil Akielaszek">
                            </a>
                      
                        </div>
                        <div class="col-6  partner-logo-box"data-aos="flip-left" data-aos-duration="1500">
                        <a target="_blank" href="https://www.facebook.com/AdamMazurkiewiczSC/?fref=mentions">
                                <img src="images/galleries/partnerzy/M-movement-room_1.png" class=".img-fluid" id="M-movement-room_1" alt="M-movment-room">
                            </a>
                        </div>
                        <div class="col-6  partner-logo-box" data-aos="flip-left" data-aos-duration="2000">
                            <a target="_blank" href="https://pztp.org/">
                                <img class="partners-images-pztp" src="images/galleries/partnerzy/pztp.png" class=".img-fluid"  id="pztp" alt="PZTP">
                            </a>
                        </div>
                </div>
                <div id="partners-images-bottom" class="col-8 partners-images partners-images-bottom">
                    <div class="col-6  partner-logo-box" data-aos="flip-left" data-aos-duration="1000"> 
                        <a target="_blank" href="http://www.sportcube.pl/">
                            <img src="images/galleries/partnerzy/sc_ok_1.png" class=".img-fluid"  id="sc_ok_1" alt="Sports Cube">
                        </a>
                    </div>
                    <div class="col-6  partner-logo-box" data-aos="flip-left" data-aos-duration="1500"> 
                        <a target="_blank" href="https://www.facebook.com/pg/projektfabryczna/about/">
                            <img src="images/galleries/partnerzy/projekt_fabryczna_logo.png" class=".img-fluid"  id="projekt_fabryczna_logo" alt="Projekt Fabryczna">
                        </a>
                    </div>
                </div>
            <div>

        </div>
    </section>
<aside id="cookies" class="d-none">
    <p>Używamy plików cookie, aby zoptymalizować funkcjonalność strony i zapewnić jak najlepsze możliwe wrażenia. <a href="#!" data-toggle="modal" data-target="#exampleModal">Dowiedz się więcej</a> </p>
        <span id="closeCookies">&#215;</span>
        <!-- Modal -->
</aside>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <p><strong>Polityka Prywatności</strong></p>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <p><strong>Czym są ciasteczka?</strong></p>
            <p>Ciasteczka (Cookies) to pliki, w których znajdują się informacje na temat użytkownika. Mechanizm cookie został wprowadzony aby w protokole HTTP umożliwić odróżnienie odwiedzających użytkowników.</p>
            <p>To właśnie dzięki nim m.in. zapamiętywane są nasze odwiedziny strony oraz nasze preferencje (np. język strony, produkty w sklepie internetowym czy nawet miejsce zamieszkania).</p>
            <p>Właściciele serwisów internetowych poprzez ciasteczka są w stanie określić zainteresowania swoich użytkowników, tworzyć statystyki odwiedzalności stron oraz wyświetlać reklamy produktów które mogą być dla nas interesujące.</p>
            <p>Krótko mówiąc to dzięki ciasteczkom strony internetowe oraz reklamy na nich umieszczone są przystosowane dla nas indywidualnie, dzięki czemu są dużo atrakcyjniejsze.</p>
            <br>
            <p><strong>Jak działają pliki cookies?</strong></p>
            <p>Są one zapisywane na żądanie serwera lub skryptu po stronie przeglądarki użytkownika. Wbrew nazwie pojedyncze ciasteczko często nie jest zapisywane jako jeden plik na dysku (Internet Explorer przechowuje wszystkie ciasteczka z danej witryny w jednym pliku, zaś przeglądarki jak Firefox i Chrome przechowują ją w bazie danych SQLite).</p>
            <p>Możemy podzielić je na pliki sesyjne (tymczasowe), stałe oraz pliki cookies podmiotów zewnętrznych. Pliki sesyjne są przechowywane do momentu wylogowania z serwisu lub wyłączenia przeglądarki, zaś te drugie przez pewien czas który jest określony w pliku cookie. Pliki cookies podmiotów zewnętrznych są to pliki które pochodzą min. z serwerów reklamowych, dostawców usług czy serwerów firm. To właśnie ten rodzaj jest wykorzystywany w reklamach.</p>
            <p>Pliki cookies mogą być w każdej chwili usunięte przez użytkownika.</p>
            <p>W 2012 roku Unia Europejska nałożyła na właścicieli witryn obowiązek informowania o używanie ciasteczek na stronie (efektywnie regulacje weszły w życie 22 marca 2013 roku).</p>
            </br>
            <p><strong>RODO</strong></p>
            <p>Administratorem powierzonych nam przez Państwa danych osobowych jest Ł&P Bochenkiewicz -Bteam. Zgodnie z przepisami Rozporządzenia RODO Parlamentu Europejskiego i Rady Europy (UE) z dnia 27 kwietnia 2016 w sprawie ochrony os&oacute;b fizycznych w związku z przetwarzaniem danych osobowych i w sprawie swobodnego przepływu takich danych oraz uchylenia dyrektywy 95/46/WE i z ustawą z dnia 29 sierpnia 1997 r. o ochronie danych osobowych przysługuje Państwu prawo dostępu do treści swoich danych, prawo ich poprawiania, a także żądania ich usunięcia z bazy danych. Podanie danych jest dobrowolne, jednak niezbędne dla realizacji oczekiwanych przez Państwa cel&oacute;w. Powierzone nam dane są przetwarzane wyłącznie w celu i zakresie w jakim zostały nam przez Państwa udostępnione.</p>
        </div>
            <div class="modal-footer">
                <button onclick="acceptCookies()" type="button" class="btn btn-secondary" data-dismiss="modal">Akceptuje</button>
            </div>
        </div>
    </div>
</div>
<!-- </div> -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
        <?php 
        /* echo $cta; */
        // echo $footer;
        echo $template_copyright;
        echo $socialMedia_fix;
     echo $template_end_body; ?>
</html>