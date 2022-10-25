@include('Partials.header')
<body class="text-center bg-color" >
    @include('navbar')
    <a class="spacing-1rem centered-button btn btn-danger" href="/add_countries" role="button">New country</a>
    <a class="spacing-1rem centered-button btn btn-danger" href="/noAirlinbes" role="button">Countries without airlines</a>
    <a class="spacing-1rem centered-button btn btn-danger" href="/test1" role="button">Countries without airlines and airports</a>
    @include('countries_bar')
</body>

</html>