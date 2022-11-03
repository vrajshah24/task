<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
</head>

<body>
  <?php
  include "sidebar.php";
  ?>
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>300+</h3>

                <p>Total Contractors</p>
              </div>
              <div class="icon">
                <i class="ion ion-hammer"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>98<sup style="font-size: 20px">%</sup></h3>

                <p>Success Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-wrench"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>100000+ </h3>

                <p>Hours of Experience</p>
              </div>
              <div class="icon">
                <i class="ion ion-compass"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>120+</h3>

                <p>Projects Delivered On Time</p>
              </div>
              <div class="icon">
                <i class="ion ion-pin"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->

      </div><!-- /.container-fluid -->
    </section>
    
    <div class="row">
    <div class="col-md-6">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Add Contractor</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form id= "form">
          <div class="card-body">
            <div class="form-group">
              <label for="contractor_name">Name</label>
              <input type="text" class="form-control" name="contractor_name" id="contractor_name" placeholder="Enter Name">
            </div>
            <div class="form-group">
              <label for="contractor_code">Code</label>
              <input type="text" class="form-control" id="contractor_code" name="contractor_code" placeholder="Code">
            </div>
            <div class="form-group">
              <label for="contractor_address">Address</Address></label>
              <textarea name="contractor_address" id="contractor_address" cols="20" rows="3" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <label for="contractor_doj">Date of Joining</label>
              <input type="date" class="form-control" id="contractor_doj" name="contractor_doj" placeholder="Date of Joining">
            </div>
            <div class="form-group">
              <label for="contractor_plan">Plan</label>
              <input type="text" class="form-control" id="contractor_plan" name="contractor_plan" placeholder="Plan">
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="button" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Contractor Details</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>Name</th>
                <th>Code</th>
                <th>Address</th>
                <th>Date Of Joining</th>
                <th>Plan</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Trident</td>
                <td>Internet
                  Explorer 4.0
                </td>
                <td>Win 95+</td>
                <td> 4</td>
                <td>X</td>
              </tr>
              <tr>
                <td>Trident</td>
                <td>Internet
                  Explorer 5.0
                </td>
                <td>Win 95+</td>
                <td>5</td>
                <td>C</td>
              </tr>
              <tr>
                <td>Trident</td>
                <td>Internet
                  Explorer 5.5
                </td>
                <td>Win 95+</td>
                <td>5.5</td>
                <td>A</td>
              </tr>
              <tr>
                <td>Trident</td>
                <td>Internet
                  Explorer 6
                </td>
                <td>Win 98+</td>
                <td>6</td>
                <td>A</td>
              </tr>
              
            </tbody>
            
          </table>
        </div>
        <!-- /.card-body -->
      </div>
    </div>

    </div>
    
  <script>
    // const form = document.getElementById("form");
    $("#form").validate({
    rules: {
      contractor_name: {
        required: true,
      },
      contractor_code: {
        required: true,
        minlength: 11,
        maxlength:11
      },
      contractor_address:{
        required: true,
      },
      contractor_plan:{
        required: true,
      }
    },
    messages: {
      contractor_name: {
        required: "Please enter a email address",
        email: "Please enter a valid email address"
      },
      contractor_code: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      contractor_address: {
        required: "Please provide an address",
      },
      contractor_plan :{
        required: "Please provide a plan",
      }
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
  </script>

</body>

</html>