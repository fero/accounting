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
                    <img src="img/images/stock-photo-144968979.jpg" alt="...">
                    <div class="carousel-caption"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <h2>Audit intern și extern</h2>
        <p>Societatea oferă servicii de audit intern și extern (statutar), financiar al situațiilor economice anuale/semestriale, fondurilor europene, situații economice consolidate, situații fiscale.</p>
    </div>

    <div class="content">
        <div class="header-title">Cerere ofertă de preț servicii audit intern si extern</div>
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