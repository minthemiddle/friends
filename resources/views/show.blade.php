<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Freunde</title>
    {{-- <link rel="stylesheet" href="css/app.css" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.1/css/bulma.min.css" />
</head>

<body>
    <section class="hero is-info">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">Hallo Freunde</h1>
                <h2 class="subtitle">Durchschnittsalter: {{ ceil($age_avg) }}</h2>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
			<table class="table">
			    <thead>
			        <tr>
			            <th>Vorname</th>
			            <th>Nachname</th>
			            <th>E-Mail</th>
			            <th>Geburtstag</th>
			            <th>Alter</th>
			            <th>In … Tagen</th>
			        </tr>
			    </thead>
			    <tfoot>
			        <tr>
			            <th>Vorname</th>
			            <th>Nachname</th>
			            <th>E-Mail</th>
			            <th>Geburtstag</th>
			            <th>Alter</th>
			            <th>In … Tagen</th>
			        </tr>
			    </tfoot>
			    <tbody>
			    	@foreach ($friends as $friend)
			        
			        <tr>
			        	<td>{{ $friend->firstname }}</td>
			        	<td>{{ $friend->lastname }}</td>
			        	<td><a href="mailto:{{ $friend->email }}">{{ $friend->email }}</a></td>
			        	<td>{{ $friend->birthday->format('d.m.Y') }}</td>
			        	<td>{{ $friend->age }}</td>
			        	<td>{{ $friend->time_delta_from_today }}</td>
			        </tr>
					
					@endforeach
			    </tbody>
			</table>

        </div>
    </section>
    <section class="section">
    	<pre>
    		{{ $friends }}
    	</pre>
    </section>
</body>

</html>
