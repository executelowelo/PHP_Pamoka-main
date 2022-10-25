<table class="table table-dark table-striped spacing-2rem">
    <tr class="all-text">
   <td>Name</td>
   <td>Country</td>
   <td>Location</td>
   <td>Airlines</td>
   <td>Action</td>
    </tr>
    @foreach($airports as $airport)
        <tr>
            <td>{{$airport->name}}</td>
            <td>{{$airport->country}}</td>
            <td>{{$airport->location}}</td>
            <td>{{$airport->airlines}}</td>
            <td><a href="/update/airport/{{$airport->id}}" <button type="submit" class="spacing-1rem centered-button btn btn-warning">Edit</button></a>

            <button type="button" class="btn btn-danger spacing-1rem centered-button" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
 <div class="modal-content">
  <div class="modal-header">
    <h1 class="modal-title fs-5 text-dark" id="exampleModalLabel">Are u sure u want to delete it?</h1>
     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
   </div>
  <div class="modal-body text-dark">
  It will be removed permanently
  </div>
  <div class="modal-footer">
  <a type="button" class="spacing-1rem centered-button btn btn-info" data-bs-dismiss="modal">Close the warning</a>
  <form action='/airport/delete/{{$airport->id}}' method="POST">
   @csrf
  <button type="submit" class="spacing-1rem centered-button btn btn-danger">Delete</button>
  </form>
</div>
</div>
</div>
</div>

        </td>
    </tr>
    @endforeach

</table>

