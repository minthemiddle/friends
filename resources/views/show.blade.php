<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Freunde</title>
    <link rel="stylesheet" href="css/app.css" />
{{--     <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
 --}}</head>

<body class="p-8 antialiased">
    <section class="p-6">
        <h1 class="text-xl font-bold">Hallo Freunde</h1>
                <h2 class="">Durchschnittsalter: <span class="font-bold">{{ ceil($age_avg) }}</span></h2>
    </section>

    <section class="section">
        <table class="table-auto text-left overflow-x">
			    <thead>
			        <tr>
			            <th>In …</th>
                        <th>Vorname</th>
			            <th>Nachname</th>
			            <th>E-Mail</th>
			            <th>Geburtstag</th>
			            <th>Wird</th>

			        </tr>
			    </thead>
			    <tfoot>
			        <tr>
			            <th>In …</th>
                        <th>Vorname</th>
			            <th>Nachname</th>
			            <th>E-Mail</th>
			            <th>Geburtstag</th>
			            <th>Wird</th>

			        </tr>
			    </tfoot>
			    <tbody>
			    	@foreach ($friends as $friend)

			        <tr>
			        	<td>{{ $friend->time_delta_from_today }}</td>
                        <td>{{ $friend->firstname }}</td>
			        	<td>{{ $friend->lastname }}</td>
			        	<td><a href="mailto:{{ $friend->email }}" class="underline">{{ $friend->email }}</a></td>
			        	<td>{{ $friend->birthdate->format('d.m.Y') }}</td>
			        	<td>{{ $friend->age }}</td>

			        </tr>

					@endforeach
			    </tbody>
			</table>

    </section>
</body>

</html>
