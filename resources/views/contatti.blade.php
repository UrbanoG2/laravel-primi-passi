<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Elenco contatti</h1>
    <ul>
        @foreach ($contacts as $contact)
            <li>{{ $contact["name"] }} {{ $contact["lastname"] }}

                {{-- @foreach ($contact["fiori"] as $key => $value)

                    <h1>{{ $value }}</h1>

                    @dd($value)


                    {{-- @if ($key === "fiori")
                        {{ $value["type"] }}  {{ $value["color"] }}      
                    @endif --}}

                    {{-- <h5> {{ $value }} </h5> --}}
                    {{-- @dd($value) --}}
                {{--@endforeach --}}

            </li>     


        @endforeach
    </ul>
</body>
</html>