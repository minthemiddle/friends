@component('mail::message')
# Nächste Geburtstage

@foreach ($friends as $friend)
- {{ $friend->birthdate->format('d.m.Y') }} <a href="mailto:{{ $friend->email }}">{{ $friend->firstname }} {{ $friend->lastname }}</a>

@endforeach

@endcomponent
