@include('Partials.header')

<body>
    <form action="/update/airline/{{$airline->id}}" method="POST">
        @csrf
        Name :<input type="text" name="name" value="{{$airline->name}}">
        country :<input type="text" name="country" value="{{$airline->country}}">
        <button href="/airlines"  type="submit">Update</button>
    </form>

</body>
</html>
