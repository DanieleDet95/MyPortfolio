{{-- Guest/index.blade.php --}}

{{-- Layouts app --}}
@extends('layouts.app')

{{-- Yeld Main Content --}}
@section("content")

  {{-- Principal Block --}}
  <div class="wrapper">

    {{-- Block info left --}}
    <div class="block-info">
      <div class="top">
        <div class="info-avatar">
          <img src="{{asset("img/profilo.PNG")}}" alt="Profilo">
        </div>
        <div class="info-name">
          <h5>Daniele Detommaso</h5>
        </div>
        <div class="info-text">
          <h5>Jr. Full Stack Web Developer</h5>
        </div>
      </div>

      {{-- Personal information --}}
      <div class="middle">
        <div class="info-infos">
          <p>Age: <span>25</span></p>
          <p>Tel: <span>+39 3298826230</span></p>
          <p>Email: <br><span>danieledetommaso1995@gmail.com</span></p>
          <hr>

          {{-- My skills --}}
          <div class="info-skills">
            <h4>Skills</h4>
            <span>HTML</span>
            <span class="right">90%</span>
            <div class="barra">
              <div class="html-bar"></div>
            </div>

            <span>CSS</span>
            <span class="right">80%</span>
            <div class="barra">
              <div class="css-bar"></div>
            </div>

            <span>JS</span>
            <span class="right">85%</span>
            <div class="barra">
              <div class="js-bar"></div>
            </div>

            <span>PHP</span>
            <span class="right">85%</span>
            <div class="barra">
              <div class="php-bar"></div>
            </div>

            <span>WordPress</span>
            <span class="right">75%</span>
            <div class="barra">
              <div class="wp-bar"></div>
            </div>
            {{-- End my skills --}}

            <hr>

            {{-- My competences --}}
            <div class="competences">
              <h4>Others skills</h4>
              {{-- <ul>
                <li><i class="fas fa-check-circle"></i> SASS,Bootstrap,Handlebars</li>
                <li><i class="fas fa-check-circle"></i> JQuery,Moment.js,Chart.js</li>
                <li><i class="fas fa-check-circle"></i> Laravel,Ajax,MySQL</li>
              </ul> --}}
              <div class="container">
                <div class="row">

                  <div class="col-4">
                    <div class="block">
                      <img src="{{asset("img/sass.png")}}" alt="SASS" title="SASS">
                    </div>
                  </div>

                  <div class="col-4">
                    <div class="block">
                      <img src="{{asset("img/laravel.png")}}" alt="laravel" title="laravel">
                    </div>
                  </div>

                  <div class="col-4">
                    <div class="block">
                      <img src="{{asset("img/bootstrap.png")}}" alt="bootstrap"
                      title="bootstrap">
                    </div>
                  </div>

                  <div class="col-4">
                    <div class="block">
                      <img src="{{asset("img/vue.png")}}" alt="vue" title="vue">
                    </div>
                  </div>

                  <div class="col-4">
                    <div class="block">
                      <img src="{{asset("img/moment.png")}}" alt="moment" title="moment">
                    </div>
                  </div>

                  <div class="col-4">
                    <div class="block">
                      <img src="{{asset("img/mysql.png")}}" alt="mysql" title="mysql">
                    </div>
                  </div>

                  <div class="col-4">
                    <div class="block">
                      <img src="{{asset("img/api.png")}}" alt="api" title="api">
                    </div>
                  </div>

                  <div class="col-4">
                    <div class="block">
                      <img src="{{asset("img/WordPress.png")}}" alt="WordPress" title="WordPress">
                    </div>
                  </div>

                  <div class="col-4">
                    <div class="block">
                      <img src="{{asset("img/chart.png")}}" alt="chart" title="chart">
                    </div>
                  </div>
                </div>

              </div>
            </div>
            {{-- End my competences --}}

          </div>
        </div>
      </div>
      {{-- End personal information --}}

      {{-- Social --}}
      <div class="info-social">
        <a href="https://www.linkedin.com/in/daniele-detommaso-234682178/"><i class="fab fa-linkedin"></i></a>
        <a href="https://github.com/DanieleDet95"><i class="fab fa-github"></i></a>
        <a href="#"><i class="fas fa-envelope"></i></a>
      </div>
      {{-- End social --}}

    </div>
    {{-- End block info left --}}

    {{-- Block home right --}}
    <div class="home">
      <div class="container-fluid">
        <div class="row p-30">
          <div class="col-12 col-top">

            {{-- Immagine sfondo --}}
            <div class="sfondo" style="background-image: url(https://bslthemes.com/arter-wp/wp-content/uploads/2020/09/bg.jpg)">

              {{-- Contenuto banner --}}
              <div class="banner">
                <div class="banner-text">
                  <h1>Discover my Amazing <br>
                    Art Space! </h1>
                  <div class="sottotitolo">
                    <span><<i>code</i>> I build web interfaces. < /<i>code</i>></span>
                  </div>
                  <a href="#">
                    <div class="button explore">
                      Explore now
                    </div>
                  </a>
                </div>
              </div>
              {{-- End contenuto banner --}}

            </div>
          </div>
        </div>

        {{-- About me --}}
        <div class="row">
          <div class="col-12">
            <div class="about_me">
              <h4>About me</h4>
              <div class="block">
                <p>Sono un giovane ragazzo con una grande passione per l'informatica ed in
                particolare lo sviluppo web. Sono fortemente motivato a crescere ,imparare
                sempre di più per arricchire le mie conoscenze informatiche e a superare le
                sfide che mi vengono poste.Mi entusiasma lavorare in Team,ma riesco anche
                ad organizzare tempi e priorità per lavorare in piena autonomia.
                </p>
              </div>
            </div>
          </div>
        </div>
        {{-- End about me --}}

        {{-- My services --}}
        <div class="row">
          <div class="col-12">
            <div class="myservices">
              <h4>My services</h4>
              <div class="row">

                {{-- Container front-end --}}
                <div class="block col-lg-4 col-sm-12">
                  <div class="contenitore">
                    <h5>Front-end</h5>
                    <p>Sviluppo siti web con HTML, CSS (SASS)per la parte grafica mentre per le funzioni dinamiche Javascript, principalmente con la libreria JQuery e il framework Vue. Ho un ottima conoscenza per la gestione delle interfacce mobile responsive e utilizzo plug-in/frameworks come Bootstrap, Handlebars, MomentJS(date) e Chart JS(statistiche). </p>
                  </div>
                </div>
                {{-- End container front-end --}}

                {{-- Container back-end --}}
                <div class="block col-lg-4 col-sm-12">
                  <div class="contenitore">
                    <h5>Back-end</h5>
                    <p>Sviluppo principalmente con PHP,tramite il framework Laravel, che mi ha dato le competenze di gestione, modifica, manipolazione e visualizzazione dei dati di applicativi web con database complessi.Ho la conoscenza per implementare le API nei progetti con le chiamate AJAX.Inoltre, con MySQL,creo database, tabelle e relazioni tra di esse.</p>
                  </div>
                </div>
                {{-- End container back-end --}}

                {{-- Container WordPress --}}
                <div class="block col-lg-4 col-sm-12">
                  <div class="contenitore">
                    <h5>WordPress</h5>
                    <p>Sviluppo di siti responsive per web e mobile tramite l'utilizzo della piattaforma software (CMS) WordPress. Posso implementare temi che il cliente gradisce molto facilmente e con l'utilizzo dei plugin posso far diventare il sito molto funzionale come il cliente desidera, rendendo la gestione del sito molto facile, tra questi ci sono blog, e-commerce e tanto altro.</p>
                  </div>
                </div>
                {{-- End container WordPress --}}

              </div>
            </div>
          </div>
        </div>
        {{-- End my services --}}

        {{-- Footer --}}
        <footer>
          <div class="copyright">
            © 2020 All Rights Reserved.
          </div>
          <div class="email">
            <a href="#">danieledetommaso1995@gmail.com</a>
          </div>
        </footer>
        {{-- End footer --}}

      </div>
    </div>
    {{-- End block home right --}}

    {{-- Block portfolio right --}}
    <div class="portfolio" style="display: none">
      <div class="container-fluid">
        <div class="row p-30">
          <div class="col-12 col-top">
            <h1>Portfolio</h1>

            <div class="container-fluid">
              <div class="row">

                <div class="row">
                  <div class="col-md-6">
                    <div class="card">
                      <a href="https://danieledet95.github.io/boolbnb_goodluck">
                        <div class="immagine">
                          <img src="{{ asset("img/AirBnb.png")}}" alt="AirBnb">
                        </div>
                      </a>
                      <h3>AirBnb</h3>
                      <p>Realizzazione del sito AirBnb con il framework Laravel per trovare e gestire l’affitto di appartamenti, completa di back-end e front-end, con tutte le funzionalità CRUD, creazione di utenti con registrazione e accesso, creazione di appartamenti da affittare, modificarli ed eliminarli dal database, geolocalizzazione con Algoria, possibilità di pagamento(Braintree) e statistiche(Chart.js).</p>
                    </div>
                  </div>
                  <div class="col-md-6">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card">
                              <a href="https://danieledet95.github.io/html-css-helbiz/">
                                <div class="immagine">
                                  <img src="{{ asset("img/helbiz.png")}}" alt="Helbiz">
                                </div>
                              </a>
                              <h3>Helbiz</h3>
                              <p>Realizzazione del layout responsive del sito HELBIZ.</p>
                            </div>
                          </div>
                      </div>
                      <div class="row bottom-right">
                          <div class="col-sm-12">
                            <div class="card">
                              <a href="https://danieledet95.github.io/html-css-digitalocean/">
                                <div class="immagine">
                                  <img src="{{ asset("img/DigitalOcean.png")}}" alt="DigitalOcean">
                                </div>
                              </a>
                              <h3>DigitalOcean</h3>
                              <p>Realizzazione del sito Digital Ocean completamente responsive.</p>
                            </div>
                          </div>
                      </div>
                  </div>
                 </div>

                <div class="col-lg-6 col-md-12">
                  <div class="card">
                    <a href="https://danieledet95.github.io/html-css-spotifyweb/">
                      <div class="immagine">
                        <img src="{{ asset("img/Spotify.png")}}" alt="Spotify">
                      </div>
                    </a>
                    <h3>Spotify</h3>
                    <p>Realizzazione di Spotify Web con layout responsive e barra di riproduzione.</p>
                  </div>
                </div>

                <div class="col-lg-6 col-md-12">
                  <div class="card">
                    <a href="https://danieledet95.github.io/ajax-ex-boolflix/">
                      <div class="immagine">
                        <img src="{{ asset("img/Boolflix.png")}}" alt="Boolflix">
                      </div>
                    </a>
                    <h3>Netflix</h3>
                    <p>Realizzazione di un sito stile Netflix con la possibilità di ricercare con chiamate API dati relativi a film e serie TV.</p>
                  </div>
                </div>

                <div class="col-lg-6 col-md-12">
                  <div class="card">
                    <a href="https://danieledet95.github.io/js-html-css-boolzap/">
                      <div class="immagine">
                        <img src="{{ asset("img/Boolzap.png")}}" alt="Boolzap">
                      </div>
                    </a>
                    <h3>WhatsApp</h3>
                    <p>Realizzazione di una webapp ispirata a WhatsApp Web con possibilità di scrivere e ricevere messaggi in chat separate con gestione dell'ora del messaggio e dell'ultimo accesso.</p>
                  </div>
                </div>

                <div class="col-lg-6 col-md-12">
                  <div class="card">
                    <a href="https://danieledet95.github.io/htmlcss-hubspot/">
                      <div class="immagine">
                        <img src="{{ asset("img/Hubspot.png")}}" alt="Hubspot">
                      </div>
                    </a>
                    <h3>Hubspot</h3>
                    <p>Realizzazione del sito Hubspot completamente responsive.</p>
                  </div>
                </div>

                <div class="col-lg-6 col-md-12">
                  <div class="card">
                    <a href="https://danieledet95.github.io/html-css-fluentify/">
                      <div class="immagine">
                        <img src="{{ asset("img/Fluentify.png")}}" alt="Fluentify">
                      </div>
                    </a>
                    <h3>Fluentify</h3>
                    <p>Realizzazione del sito Fluentify.</p>
                  </div>
                </div>

                <div class="col-lg-6 col-md-12">
                  <div class="card">
                    <a href="https://danieledet95.github.io/htmlcss-wp/">
                      <div class="immagine">
                        <img src="{{ asset("img/Template.png")}}" alt="Template">
                      </div>
                    </a>
                    <h3>Template WordPress</h3>
                    <p>Realizzazione dei un template WordPress completamente responsive.</p>
                  </div>
                </div>

              </div>
            </div>

          </div>
        </div>

        {{-- Footer --}}
        <footer>
          <div class="copyright">
            © 2020 All Rights Reserved.
          </div>
          <div class="email">
            <a href="#">danieledetommaso1995@gmail.com</a>
          </div>
        </footer>
        {{-- End footer --}}

      </div>
    </div>
    {{-- End block portfolio right --}}

  </div>
  {{-- End principal Block --}}

@endsection
