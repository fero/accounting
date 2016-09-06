@extends('layouts.main')

@section('content')
    <div class="content">
        <div id="main-carousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#main-carousel" data-slide-to="0" class="active"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="img/images/stock-photo-159131365.jpg" alt="...">
                    <div class="carousel-caption"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <h2>Resurse umane relații de muncă</h2>
        <p>Ne ocupăm de relațiile de muncă existente în societăți comerciale, persoane fizice autorizate, organizații non-guvernamentale, întreprinderi individuale și întreprinderi familiale ce au cu precădere sediul în orice sector din București și în județul Ilfov.</p>

        <p>Suntem localizați în sectorul 3, pe Bulevardul Unirii la numărul 64, la o adresă centrală și accesibilă. Administrăm personalul și întocmim documentația specifică pentru relații de muncă în domenii de activitate foarte variate, producție, transport, construcții, servicii și comerț.</p>

        <p>Ca și politică de preț, suntem o societate de administrare de personal care își construiește tarifele în funcție de numărul de angajați, numărul de funcții existente în statul de salarii, complexitatea lucrărilor (existența diurnelor, bonurilor de masă, conflicte de muncă etc) și ușurința de colaborare cu clientul.</p>

        <p>Pentru a primi o cotație de preț pentru serviciile noastre administrare de personal și relații de muncă vă invităm să folosiți formularul de mai jos. În maxim 24 de ore, zile lucrătoare, veți fi contactat de către un membru al echipei noastre și veți primi informațiile solicitate.</p>
    </div>

    <div class="content">
        <div class="header-title">Cerere ofertă de preț servicii contabilitate și expert contabil</div>
        <form id="service-request" action="{{ route('service_request') }}">
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="required" for="service-type">Serviciu solicitat</label>
                        <select title="" name="serviceType[]" id="service-type" multiple class="form-control" required>
                            <option value="Contabilitate">Contabilitate</option>
                            <option value="Administrare personal">Administrare personal</option>
                            <option value="Salarizare">Salarizare</option>
                            <option value="Audit intern si extern">Audit intern si extern</option>
                            <option value="Expertiza contabila">Expertiza contabila</option>
                            <option value="Altele">Altele</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="required" for="organisation-type">Forma de organizare</label>
                        <select title="" id="organisation-type" name="organisationType" class="form-control" required>
                            <option value="SRL">SRL</option>
                            <option value="PFA">PFA</option>
                            <option value="ONG">ONG</option>
                            <option value="SA">SA</option>
                            <option value="II / IF">II / IF</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="required" for="papers-received">Număr mediu lunar acte de cumparare primite</label>
                        <input type="text" name="papersReceived" class="form-control" id="papers-received" required>
                    </div>
                    <div class="form-group">
                        <label class="required" for="no-of-employees">Număr de salariați</label>
                        <input type="text" name="nuOfEmployees" class="form-control" id="no-of-employees" required>
                    </div>
                    <div class="form-group">
                        <label class="required" for="emailAddress">Adresă de email</label>
                        <input type="email" name="emailAddress" class="form-control" id="emailAddress" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="required" for="activity-domain">Obiect de activitate</label>
                        <select title="" name="activityDomain[]" id="activity-domain" multiple class="form-control" required>
                            <option value="Constructii">Construcții</option>
                            <option value="Comert">Comerț</option>
                            <option value="Servicii">Servicii</option>
                            <option value="Productie">Producție</option>
                            <option value="Transport">Transport</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="required" for="for-VAT">Înregistrat în scopuri de TVA</label>

                        <select title="" name="vat" class="form-control" id="for-VAT" required>
                            <option value="da">Da</option>
                            <option value="nu">Nu</option>
                            <option value="Partial - Numai pentru operațiuni UE">Parțial - Numai pentru operațiuni UE</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="required" for="papers-sent">Număr mediu lunar acte de vânzare emise</label>
                        <input type="text" name="papersSent" class="form-control" id="papers-sent" required>
                    </div>
                    <div class="form-group">
                        <label class="required" for="name">Nume</label>
                        <input type="text" name="name" class="form-control" id="name" required>
                    </div>
                    <div class="form-group">
                        <label class="required" for="phone">Telefon</label>
                        <input type="text" name="phone" class="form-control" id="phone" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="required" for="message">Mesajul dumneavoastră</label>
                        <textarea name="mmessage" id="message" class="form-control" required></textarea>
                    </div>
                </div>
            </div>

            <input type="submit" class="btn btn-default navy btn-block" value="Trimite" />
        </form>
    </div>
@endsection