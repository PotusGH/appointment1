<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

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
              <label>ADD DOCTORS</label>
            </div>
            <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div style="padding: 15px;">
                <label>Medical ID</label>
                @php
                  $medId = "MID" . substr(uniqid(), -6);
                @endphp
                <input type="text" style="color:black;" name="med_id" value="{{ $medId }}" placeholder="Generated Medical ID" required="" readonly>
              </div>
              
              <div style="padding: 15px;">
                <label>Doctor Name</label>
                <input type="text" style="color:black;" name="name" placeholder="Write Doctor Name" required="">
              </div>
              <div style="padding: 15px;">
                <label>Phone</label>
                <input type="number" style="color:black;" name="number" placeholder="Write the number" required="">
              </div>
              <div style="padding: 15px;">
                <label>Specialty</label>
                <select style="color: black; width: 200px;" name="specialty" required="">
                  <option>Select Specialty</option>
                  <option>Cardiology</option> 
                  <option>Dermatology</option>
                  <option>Neurology</option>
                  <option>Orthopedics</option>
                </select>
              </div>
              <div style="padding: 15px;">
                <label>Room No</label>
                <input type="text" style="color:black;" name="room" placeholder="Write Room Number" required="">
              </div>
              <div style="padding: 15px;">
                <label>Doctor Image</label>
                <input type="file" name="file" required="">
              </div>
              <div style="padding: 15px;">
                <input type="hidden" name="doctor_id" value="DR{{uniqid()}}">
                <input type="submit" class="btn btn-success" value="Upload">
              </div>
            </form

        