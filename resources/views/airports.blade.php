@include('Partials.header')
<body class="text-center bg-color" >
    @include('navbar')
    <a class="spacing-1rem centered-button btn btn-danger" href="/add_airport" role="button">New airport</a>
    @include('select_bar')
    <a class="spacing-2rem centered-button btn btn-success" href="#" role="button">Search</a>
    @include('airport-table')   
</body>

</html>