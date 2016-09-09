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
        <strong>Obiect de activitate</strong>
    </div>
    <div style="display: inline-block; padding-left: 20px;">
        @if(isset($activityDomain))
            @foreach ($activityDomain as $domain)
                {{ $domain }},
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
        <strong>Bonuri de masa</strong>
    </div>
    <div style="display: inline-block; padding-left: 20px;">{{ $mealTickets or '' }}</div>
</div>

<div style="margin-bottom: 10px">
    <div style="display: inline-block; width: 200px;">
        <strong>Sporuri la salariu</strong>
    </div>
    <div style="display: inline-block; padding-left: 20px;">{{ $extraIncome or '' }}</div>
</div>

<div style="margin-bottom: 10px">
    <div style="display: inline-block; width: 200px;">
        <strong>Număr de salariați</strong>
    </div>
    <div style="display: inline-block; padding-left: 20px;">{{ $nuOfEmployees or '' }}</div>
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