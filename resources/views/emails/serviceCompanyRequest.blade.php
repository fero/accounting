<div>Serviciu cerut:</div>
<br />
<br />

<div style="margin-bottom: 10px">
    <div style="display: inline-block; width: 200px;">
        <strong>Servicii solicitate</strong>
    </div>
    <div style="display: inline-block; padding-left: 20px;">
        @if(isset($serviceType))
            @foreach ($serviceType as $service)
                {{ $service }},
            @endforeach
        @endif
    </div>
</div>

<div style="margin-bottom: 10px">
    <div style="display: inline-block; width: 200px;">
        <strong>Forma de organizare</strong>
    </div>
    <div style="display: inline-block; padding-left: 20px;">{{ $organisationType or '' }}</div>
</div>

<div style="margin-bottom: 10px">
    <div style="display: inline-block; width: 200px;">
        <strong>Număr asociați</strong>
    </div>
    <div style="display: inline-block; padding-left: 20px;">{{ $associates or '' }}</div>
</div>

<div style="margin-bottom: 10px">
    <div style="display: inline-block; width: 200px;">
        <strong>Tip asociați</strong>
    </div>
    <div style="display: inline-block; padding-left: 20px;">{{ $associateTypes or '' }}</div>
</div>

<div style="margin-bottom: 10px">
    <div style="display: inline-block; width: 200px;">
        <strong>Cetățenie asociați</strong>
    </div>
    <div style="display: inline-block; padding-left: 20px;">{{ $associateCitizenship or '' }}</div>
</div>

<div style="margin-bottom: 10px">
    <div style="display: inline-block; width: 200px;">
        <strong>Nume</strong>
    </div>
    <div style="display: inline-block; padding-left: 20px;">{{ $name or '' }}</div>
</div>

<div style="margin-bottom: 10px">
    <div style="display: inline-block; width: 200px;">
        <strong>Adresă de email</strong>
    </div>
    <div style="display: inline-block; padding-left: 20px;">{{ $emailAddress or '' }}</div>
</div>

<div style="margin-bottom: 10px">
    <div style="display: inline-block; width: 200px;">
        <strong>Telefon</strong>
    </div>
    <div style="display: inline-block; padding-left: 20px;">{{ $phone or '' }}</div>
</div>

<div style="margin-bottom: 10px">
    <div style="display: inline-block; width: 200px;">
        <strong>Mesaj</strong>
    </div>
    <div style="display: inline-block; padding-left: 20px;">{{ $mmessage or '' }}</div>
</div>