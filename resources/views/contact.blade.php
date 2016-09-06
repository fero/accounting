@extends('layouts.main')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-6"><iframe width="100%" height="350" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ_UN8yOz-sUARvS7ZRB62EH4&key=AIzaSyBRuk5dULA0-4Vfs-znSFlI2F5VninLvGI" allowfullscreen></iframe></div>
            <div class="col-md-6">
                <form>
                    <div class="form-group">
                        <label class="required" for="name">Nume</label>
                        <input required type="string" class="form-control" id="name" placeholder="Nume">
                    </div>
                    <div class="form-group">
                        <label class="required" for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="nume@email.com" required>
                    </div>
                    <div class="form-group">
                        <label class="required" for="subject">Subiect</label>
                        <input type="text" class="form-control" id="subject" placeholder="Subiect" required>
                    </div>
                    <div class="form-group">
                        <label class="required" for="message">Mesajul dumneavoastră</label>
                        <textarea name="mmessage" id="message" class="form-control" required></textarea>
                    </div>

                    <input type="submit" class="btn btn-default navy btn-block" value="Trimite" />
                </form>
            </div>
        </div>
    </div>
@endsection