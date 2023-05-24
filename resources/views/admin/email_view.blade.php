<!DOCTYPE html>
<html lang="en">
  <head>
    
    <!-- Required meta tags -->
    <base href="/public">

<style type="text/css">
label {

    display: inline-block; width: 200px;
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



            <div class="container" align="center" style="padding-top: 100px;">
                
                @if(session()->has('message'))

                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">
                            x
                        </button>
                        
                        {{session()->get('message')}}

                    </div>
                    
                @endif
                    <div>

                <div align="center" style="background-color: green;" style="padding: 15px;">
                <label>MAIL</label>
                    </div>

                <form action="{{url('sendemail',$data->id)}}" method="POST" ">

                    @csrf

                    <div style="padding: 15px;">
                        <label>Greeting</label>
                        <input type="text" style="color:black;" name="greeting" required="">
                    </div>
                    <div style="padding: 15px;">
                        <label>Body</label>
                        <input type="text" style="color:black;" name="
                        body"  required="">
                    </div>

                   
                    <div style="padding: 15px;">
                        <label>Action Text</label>
                        <input type="text" style="color:black;" name="
                        actiontext"  required="">
                    </div>

                    <div style="padding: 15px;">
                        <label>Action Url</label>
                        <input type="text" style="color:black;" name="
                        actionurl"  required="">
                    </div>

                    <div style="padding: 15px;">
                        <label>End Part</label>
                        <input type="text" style="color:black;" name="
                        endpart"  required="">
                    </div>




                    <div style="padding: 15px;">
                        <input type="hidden" name="doctor_id" value="DR{{uniqid()}}">
                        <input type="submit" style="background: green" class="btn btn-success" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>

        