@include('Partials.header')

<body>
    <form action="/add/airlines" method="POST">
        @csrf
        Name :<input type="text" name="name">
        country :<input type="text" name="country">
        <button href="/airlines"  type="submit">Add</button>
    </form>

</body>
</html>
