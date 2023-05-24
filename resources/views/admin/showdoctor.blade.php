<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    
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
            <div align="center" style="padding-top: 100px;">

              <div align="center" style="background-color: green;" style="padding: 15px;">
                <label>ALL DOCTORS</label>
                    </div>

                <table>
                    <tr style="background-color: black;">
                        <th style="padding: 10px">Doctor Name</th>
                        <th style="padding: 10px">Phone</th>
                        <th style="padding: 10px">Specialty</th>
                        <th style="padding: 10px">Room No</th>
                        <th style="padding: 10px">Image</th>
                        <th style="padding: 10px">Delete</th>
                        <th style="padding: 10px">Update</th>
                       
                    </tr>

                @foreach ($data as $doctor)

                    <tr align="center" style="background-color:skyblue; ">

                        <td>{{$doctor->name}}</td>
                        <td>{{$doctor->phone}}</td>
                        <td>{{$doctor->specialty}}</td>
                        <td>{{$doctor->room}}</td>
                        <td><img height="100" width="100" src="doctorimage/{{$doctor->image}}"></td>

                        <td>
                            <a onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger" href="{{url('deletedoctor',$doctor->id) }}">Delete</a>
                        </td>
                        
                        <td>
                            <a class="btn btn-primary" href="
                            {{url('updatedoctor',$doctor->id)}}">Update</a>
                            </td>
                      
                        
                    </tr>
                    @endforeach

                </div>
            </div>



    <!-- container-scroller -->
    <!-- plugins:js -->

   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>