@include('Partials.header')

<body>
    <form action="/add/countries" method="POST">
        @csrf
        Name :<input type="text" name="name">
        code :<input type="text" name="code">
        <button href="/countries"  type="submit">Add</button>
    </form>

</body>
</html>