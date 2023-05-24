
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
                <label>APPOINTMENTS</label>
                    </div>

            <table>
                <tr style="background-color: black;">
                    <th style="padding: 10px">Customer Name</th>
                    <th style="padding: 10px">Email</th>
                    <th style="padding: 10px">Phone</th>
                    <th style="padding: 10px">Doctor Name</th>
                    <th style="padding: 10px">Date</th>
                    <th style="padding: 10px">Message</th>
                    <th style="padding: 10px">Status</th>
                    <th style="padding: 10px">Approved</th>
                    <th style="padding: 10px">Cancel</th>
                    <th style="padding: 10px">Send Mail</th>

                </tr>


                @foreach($data as $appoint)
                <tr align="center" style="background-color:skyblue; ">
                    <td>{{$appoint->name}}</td>
                    <td>{{$appoint->email}}</td>
                    <td>{{$appoint->phone}}</td>
                    <td>{{$appoint->doctor}}</td>
                    <td>{{$appoint->date}}</td>
                    <td>{{$appoint->message}}</td>
                    <td>{{$appoint->status}}</td>
                    <td>
                        <a class="btn btn-success" href="
                        {{url('approved',$appoint->id)}}">Approved</a>
                    </td>

                    <td>
                        <a class="btn btn-danger" href="
                        {{url('canceled',$appoint->id)}}">Cancel</a>
                    </td>

                    <td>
                      <a class="btn btn-primary" href="
                      {{url('emailview',$appoint->id)}}">Send Mail</a>
                  </td>
      

        
                </tr>

                @endforeach
            </table>


        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>