<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</head>
<body>
    <br>
    <a href="http://127.0.0.1:8000/booklist">List</a><br>
    <a href="http://127.0.0.1:8000/getbooks">Browse</a>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Add Book Request
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            
            <form accept-charset="UTF-8" action="{{route('books.save')}}" method="POST" enctype="multipart/form-data" name="image">
                @csrf
            
            <div class="form-group">
                <label for="image_file">Course image</label>
            
                <div id="image_file" class="custom-file">
                    <input id="image" name="image" type="file" class="custom-file-input @error('image') is-invalid @enderror">
                    <label for="image" class="custom-file-label">Image Name</label>
            
                    @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            
            <input type="text" name="bookname" id="bookname "placeholder="Enter bookname">
                        <br>
                       
                      
            <input type="text" name="author" id="author"placeholder="Enter author">
                        <br>
                       
                       
            <input type="text" name="price" id="price "placeholder="Enter price">
                        <br>

            <input type="text" name="type" id="type "placeholder="Enter type">
                        <br>
            
            <div class="form-group">
               
                   
                </div>
            </div>
           
        <div class="modal-footer">
            <div class="form-group">
                <div class="">
                    <button type="submit" class="btn btn-success">
                        Create
                    </button>
                </form>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
        </div>
      </div>
    </div>
  </div>
  
  {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> --}}
</body>
</html>