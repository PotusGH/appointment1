
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">
    <style type="text/css">
    label { 
        display: inline-block;
        width: 200px;

    }
    
    
    </style>

    
@include('admin.css')

  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            
           
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
     
      @include('admin.sidebar')
      
      @include('admin.navbar')

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

           
            <div class="container" align="center" style="padding: 100px">

                @if (session()->has('message'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">&times;</span>
        </button>
        {{ session()->get('message') }}
    </div>
@endif


                 <form action="{{url('editdoctor',$data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                
                    <div style="padding: 15px">
                        <label>Doctor Name</label>
                        <input type="text" style="color: black;" name="name" value="{{$data->name}}">
                    </div>
                    <div style="padding: 15px">
                        <label>Phone</label>
                        <input type="number" style="color: black;" name="phone" value="{{$data->phone}}">
                    </div>
                    
                    <div style="padding: 15px">
                        <label>Specialty</label>
                        <select name="specialty" style="color: black;">
                            <option value="">Select Specialty</option>
                            <option value="Cardiology" {{$data->specialty == 'Cardiology' ? 'selected' : ''}}>Cardiology</option>
                            <option value="Dermatology" {{$data->specialty == 'Dermatology' ? 'selected' : ''}}>Dermatology</option>
                            <option value="Endocrinology" {{$data->specialty == 'Endocrinology' ? 'selected' : ''}}>Endocrinology</option>
                            <option value="Gynaecology" {{$data->specialty == 'Gynaecology' ? 'selected' : ''}}>Gynaecology</option>
                            <option value="Oncology" {{$data->specialty == 'Oncology' ? 'selected' : ''}}>Oncology</option>
                            <option value="Radiology" {{$data->specialty == 'Radiology' ? 'selected' : ''}}>Radiology</option>
                            <!-- Add more options for other specialties if needed -->
                        </select>
                    </div>
                    
                    <div style="padding: 15px">
                        <label>Room No</label>
                        <select name="room" style="color: black;">
                            <option value="">Select Room No</option>
                            <option value="101" {{$data->room == '101' ? 'selected' : ''}}>101</option>
                            <option value="102" {{$data->room == '102' ? 'selected' : ''}}>102</option>
                            <option value="103" {{$data->room == '103' ? 'selected' : ''}}>103</option>
                            <option value="103" {{$data->room == '103' ? 'selected' : ''}}>104</option>
                            <option value="103" {{$data->room == '103' ? 'selected' : ''}}>105</option>
                            <!-- Add more options for other room numbers if needed -->
                        </select>
                    </div>
                    

                    <div style="padding: 15px;">
                        <label>Old Image</label>
                        <img height="150" width="150" src="{{asset('doctorimage/'.$data->image)}}" alt="Old Image">
                    </div>
                
                    <div style="padding: 15px;">
                        <label>Change Image</label>
                        <input type="file" name="file">
                    </div>
                
                    <div style="padding: 15px;">
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </div>
                </form>
                



    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>