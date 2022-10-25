@include('Partials.header')

<body>
    <form action="/update/airport/{{$airport->id}}" method="POST">
        @csrf
        Name :<input type="text" name="name" value="{{$airport->name}}">
        Country :<input type="text" name="country" value="{{$airport->contry}}">
        Location :<input type="text" name="location" value="{{$airport->location}}">
        Airlines :<input type="text" name="airlines" value="{{$airport->airlines}}">
        <button href="/airports"  type="submit">Update</button>
    </form>

</body>
</html>
