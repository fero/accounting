@extends('layouts.main')

@section('content')
    <div class="content">
        <div id="main-carousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#main-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#main-carousel" data-slide-to="1"></li>
                <li data-target="#main-carousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="img/images/bg-1.jpg" alt="...">
                    <div class="carousel-caption"></div>
                </div>
                <div class="item">
                    <img src="img/images/bg-2-3.jpg" alt="...">
                    <div class="carousel-caption"></div>
                </div>
                <div class="item">
                    <img src="img/images/bg-3.jpg" alt="...">
                    <div class="carousel-caption"></div>
                </div>
            </div>
        </div>
    </div>



    <div class="offer-form">
        <div class="content">
            <div class="header-title">Cerere rapidă</div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="service-type">Serviciu solicitat</label>
                        <select title="" name="serviceType[]" id="service-type" multiple class="form-control">
                            <option value="Contabilitate">Contabilitate</option>
                            <option>Administrare personal</option>
                            <option>Salarizare</option>
                            <option>Audit intern si extern</option>
                            <option>Expertiza contabila</option>
                            <option>Altele</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="organisation-type">Forma de organizare</label>
                        <select title="" id="organisation-type" name="organisationType" class="form-control">
                            <option value="SRL">SRL</option>
                            <option value="PFA">PFA</option>
                            <option value="ONG">ONG</option>
                            <option value="SA">SA</option>
                            <option value="II / IF">II / IF</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="papers-received">Număr mediu lunar acte de cumparare primite</label>
                        <input type="text" name="papersReceived" class="form-control" id="papers-received">
                    </div>
                    <div class="form-group">
                        <label for="no-of-employees">Număr de salariați</label>
                        <input type="text" name="nuOfEmployees" class="form-control" id="no-of-employees">
                    </div>
                    <div class="form-group">
                        <label for="emailAddress">Adresă de email</label>
                        <input type="email" name="emailAddress" class="form-control" id="emailAddress">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="activity-domain">Obiect de activitate</label>
                        <select title="" name="activityDomain[]" id="activity-domain" multiple class="form-control">
                            <option value="Constructii">Construcții</option>
                            <option value="Comert">Comerț</option>
                            <option value="Servicii">Servicii</option>
                            <option value="Productie">Producție</option>
                            <option value="Transport">Transport</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="for-VAT">Înregistrat în scopuri de TVA</label>

                        <select title="" name="vat" class="form-control" id="for-VAT">
                            <option value="da">Da</option>
                            <option value="nu">Nu</option>
                            <option value="Partial - Numai pentru operațiuni UE">Parțial - Numai pentru operațiuni UE</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="papers-sent">Număr mediu lunar acte de vânzare emise</label>
                        <input type="text" name="papersSent" class="form-control" id="papers-sent">
                    </div>
                    <div class="form-group">
                        <label for="name">Nume</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="phone">Telefon</label>
                        <input type="text" name="phone" class="form-control" id="phone">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="message">Mesajul dumneavoastră</label>
                        <textarea name="message" id="message" class="form-control"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="row">
            <div class="header-title">Cum ne prezentăm</div>
            <div class="column one_fourth">
                <div id="professionalism" class="featured_block">
                    <div class="featured_block_inner">
                        <div class="featured_block_text">
                            <div>
                                <div id="icon_professionalism" class="icon_wrap"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></div>
                            </div>
                            <h2><span style="color: #ffffff;">PROFESIONALI</span></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="column one_fourth">
                <div id="ontime" class="featured_block">
                    <div class="featured_block_inner">
                        <div class="featured_block_text">
                            <div>
                                <div class="icon_wrap"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                            </div>
                            <h2><span style="color: #ffffff;">PUNCTUALI</span></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="column one_fourth">
                <div id="nostress" class="featured_block">
                    <div class="featured_block_inner">
                        <div class="featured_block_text">
                            <div>
                                <div class="icon_wrap"><i class="fa fa-smile-o" aria-hidden="true"></i></div>
                            </div>
                            <h2><span style="color: #ffffff;">0 STRES</span></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="column one_fourth">
                <div id="finance" class="featured_block">
                    <div class="featured_block_inner">
                        <div class="featured_block_text">
                            <div>
                                <div id="icon_professionalism" class="icon_wrap"><i class="fa fa-line-chart" aria-hidden="true"></i></div>
                            </div>
                            <h2><span style="color: #ffffff;">FINANȚE</span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="content">
        <div class="header-title">Serviciile noastre</div>
        <div class="tabbable tabs-left">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#a" data-toggle="tab">Firmă de contabilitate</a></li>
                <li><a href="#b" data-toggle="tab">Expert contabil</a></li>
                <li><a href="#c" data-toggle="tab">Administrare personal, relații de muncă</a></li>
                <li><a href="#d" data-toggle="tab">Servicii salarizare, payroll</a></li>
                <li><a href="#e" data-toggle="tab">Audit intern si extern</a></li>
                <li><a href="#f" data-toggle="tab">Înființtare firmă - SRL, PFA, II, IF</a></li>
                <li><a href="#g" data-toggle="tab">Modificare firmă - SRL, PFA, II, IF</a></li>
                <li><a href="#h" data-toggle="tab">Radiere firmă - SRL, PFA, II, IF</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active accounting" id="a">
                    <div class="content-box">
                        <h2>Firmă de contabilitate</h2>
                        <p>De la operarea documentelor de contabilitate primară și până la generarea situațiilor contabile finale, suntem o firmă de contabilitate permanent preocupată să înțeleagă cifrele din documente și să elaboreze recomandări pentru clienți care să-i ajute să fie mai profitabili respectând în același timp obligațiile legale și fiscale.</p>
                    </div>
                </div>
                <div class="tab-pane expert" id="b">
                    <div class="content-box">
                        <h2>Expert contabil</h2>
                        <p>Viza noastră de expert contabil este garanția unei lucrări bine făcută, fundamentată și obiectivă. Înțelegem importanța și efectele unei expertize contabile și suntem responsabili și răspunzători cu privire la realizarea ei.</p>
                    </div>
                </div>
                <div class="tab-pane hr" id="c">
                    <div class="content-box">
                        <h2>Administrare personal, relații de muncă</h2>
                        <p>Considerăm că transpunerea corectă a relațiilor de muncă în registrele și documentele specificate de lege este foarte importantă pentru fiecare angajat și angajator astfel încât sa fie eliminată orice posibilitate de nemulțumire și neînțelegere între părți și să se respecte toate prevederile legale.</p>
                    </div>
                </div>
                <div class="tab-pane payroll" id="d">
                    <div class="content-box">
                        <h2>Servicii salarizare, payroll</h2>
                        <p>În lumina preocupării permanente de optimizare fiscală a tuturor angajatorilor, calculul salarial a devenit foarte complex datorită multiplelor opțiuni pe care angajatorii încearcă să le acceseze: tichete, diurne, convenții civile etc. În afară de acest aspect, există și alte avantaje ale externalizării calculului salarial cum ar fi confidențialitatea și economia de costuri.</p>
                    </div>
                </div>
                <div class="tab-pane audit" id="e">
                    <div class="content-box">
                        <h2>Auditul intern și extern</h2>
                        <p>Societatea oferă servicii de audit intern și extern (statutar), financiar al situațiilor economice anuale/semestriale, fondurilor europene, situații economice consolidate, situații fiscale</p>
                    </div>
                </div>
                <div class="tab-pane startingCompany" id="f">
                    <div class="content-box">
                        <h2>Înființare firmă – SRL, PFA, II, IF</h2>
                        <p>Acest proces presupune alegerea din multiple opțiuni, timp investit si multe formulare. Serviciul nostru de înmatriculări oferă informații despre toate opțiunile aflate la dispoziția întreprinzătorului, un proces lin si rapid dar si evitarea deplasarilor inutile. Serviciu disponibil în orice județ al țării prin comunicare online.</p>
                    </div>
                </div>
                <div class="tab-pane modifyCompany" id="g">
                    <div class="content-box">
                        <h2>Modificare firmă – SRL, PFA, II, IF</h2>
                        <p>Unele mențiuni pot fi banale dar cele mai multe sunt dificile și necesită timp și efort de completare și depunere a unor formulare complicate. Serviciul nostru de mențiuni vă scutește de acest efort și veți beneficia de un proces lin si rapid și veți evita deplasările inutile. Serviciu disponibil în orice județ al țării prin comunicare online.</p>
                        </div>
                    </div>
                <div class="tab-pane dismantle" id="h">
                    <div class="content-box">
                        <h3>Radiere firmă – SRL, PFA, II, IF</h3>
                        <p>Decizia unei radieri se ia cu dificultate și cu regret dar odată ajunși în punctul acesta este bine să ne asigurăm că procesul se face complet și corect și nu rămân lucruri nefinalizate. Serviciul nostru de radieri acoperă complet toate nevoile clienților, având acces la toți specialiștii care ar putea fi implicați: avocat, expert contabil, jurist, lichidator. Serviciu disponibil în orice județ al țării prin comunicare online.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="header-title">Cum ne găsești</div>
        <iframe width="100%" height="350" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ_UN8yOz-sUARvS7ZRB62EH4&key=AIzaSyBRuk5dULA0-4Vfs-znSFlI2F5VninLvGI" allowfullscreen></iframe>
    </div>
@endsection