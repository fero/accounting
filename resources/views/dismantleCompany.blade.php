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
                    <img src="img/images/stock-photo-70324485.jpg" alt="...">
                    <div class="carousel-caption"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <h2>Radiere firmă – SRL, PFA, II, IF – (dizolvare și lichidare) la Registrul Comerțului din orice județ</h2>

        <p>Serviciul nostru de închidere firmă și radieri este centrat pe următoarele forme de înregistrare: persoană fizică autorizată (PFA), întreprindere individuală (II), întreprindere familială (IF), societate cu răspundere limitată (SRL) sau organizație non-guvernamentală (ONG).</p>

        <p>Serviciul este disponibil pentru realizarea de radieri (dizolvare și lichidare) în orice județ al țării mulțumită comunicării online și folosirii semnăturii electronice.</p>

        <p>Clienții beneficiază de consultanță cu privire la opțiunile disponibile și implicațiile procesului, evită deplasările și drumurile inutile și cozile de la birourile Oficiului Național al Registrului Comerțului.</p>

        <p>Suntem localizați în centrul Bucureștiului, în sectorul 3 pe Bulevardul Unirii la numărul 64, la o adresă ușor accesibilă la orice oră din zi. Lucrările pentru clienții noștri se pot realiza însă și fără vizită la sediu, folosindu-ne de tehnologiile moderne de comunicare, curier și semnătură electronică.</p>

        <p>Pentru o cotație de preț, vă rugăm folosiți formularul de mai jos și veți primi un răspuns în maxim 24 de ore.</p>
    </div>

    <div class="content">
        <div class="header-title">Cerere ofertă de preț servicii înființare firmă (înmatriculare) la Registrul Comerțului</div>
        <form id="service-request" action="{{ route('service_request') }}">
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="required" for="service-type">Serviciu solicitat</label>
                        <select title="" name="serviceType[]" id="service-type" class="form-control" required>
                            <option value="Înmatriculare">Înmatriculare</option>
                            <option value="Modificare/Mențiune">Modificare/Mențiune</option>
                            <option value="Radiere">Radiere</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="required" for="no-of-associates">Număr asociați</label>
                        <input type="text" name="associates" class="form-control" id="no-of-associates" required>
                    </div>
                    <div class="form-group">
                        <label class="required" for="associate-citizenship">Cetățenie asociați</label>
                        <input type="text" name="associateCitizenship" class="form-control" id="associate-citizenship" required>
                    </div>
                    <div class="form-group">
                        <label class="required" for="emailAddress">Adresă de email</label>
                        <input type="email" name="emailAddress" class="form-control" id="emailAddress" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="required" for="organisation-type">Formă de organizare</label>
                        <select title="" id="organisation-type" name="organisationType" class="form-control" required>
                            <option value="SRL">SRL</option>
                            <option value="PFA">PFA</option>
                            <option value="ONG">ONG</option>
                            <option value="SA">SA</option>
                            <option value="II / IF">II / IF</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="required" for="associate-types">Tip asociați</label>
                        <input type="text" name="associateTypes" class="form-control" id="associate-types" required>
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