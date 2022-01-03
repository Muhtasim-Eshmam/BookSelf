<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <style>
   
        </style>
    </head>





@foreach($books as $row)

<div class="card" style="width: 18rem;">
    <img src="{{ ($row->image_path) ?  $row->image_path : asset('images/No_Image_Available.jpg') }} " alt="image" width="30px" height="30px" data-toggle="modal" data-target="#something{{ $loop->index }}" > </td>
    <div class="modal fade "  id="something{{ $loop->index }}" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg ">
            <div class="modal-content">
                <div class="modal-body text-center font-weight-bold ">
                    
                    <img src="{{ ($row->image_path) ?  $row->image_path : asset('images/No_Image_Available.jpg') }} " alt="image"  width="400px" height="400px" data-toggle="modal" data-target="#image0">
                
                </div>
    
               
                    <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Close</button>
               
            </div>
        </div>
    </div>

    <div class="card-body">
      <h5 class="card-title">{{$row->bookname}}</h5>
      <h6 class="card-title">{{$row->author}}</h6>
      <p class="card-text">{{$row->type}}</p>
      <p class="card-text">{{$row->price}}</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>


  @endforeach
</div>