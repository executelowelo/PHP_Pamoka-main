<table class="table table-dark table-striped spacing-2rem">
    <tr>
    <td>Name</td>
    <td>Code</td>
    <td>action</td>
    </tr>
   @foreach($countries as $countrie)
    <tr>
         <td>{{$countrie->name}}</td>
         <td>{{$countrie->code}}</td>
         <td>
            <a href="/update/countrie/{{$countrie->id}}" <button type="submit" class="spacing-1rem centered-button btn btn-warning">Edit</button></a> 
          
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
         <form action='/countries/delete/{{$countrie->id}}' method="POST"> 
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

