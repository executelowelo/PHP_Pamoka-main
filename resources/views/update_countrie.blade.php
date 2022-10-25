@include('Partials.header')

<body>
    <form action="/update/countrie/{{$countrie->id}}" method="POST">
        @csrf
        Name :<input type="text" name="name" value="{{$countrie->name}}">
        code :<input type="text" name="code" value="{{$countrie->code}}">
        <button href="/countrie"  type="submit">Update</button>
    </form>

</body>
</html>
