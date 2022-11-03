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
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
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

    <div class="row">
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Add Contractor</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form id="form">
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
            <table id="contractorTable" class="table table-bordered table-hover">
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
                <?php
                foreach ($ContractorList as $data) { ?>
                  <tr>
                    <td>
                      <?php echo $data->contractor_name; ?>
                    </td>
                    <td>
                      <?php echo $data->contractor_code; ?>
                    </td>
                    <td>
                      <?php echo $data->contractor_address; ?>
                    </td>
                    <td>
                      <?php echo $data->contractor_doj; ?>
                    </td>
                    <td>
                      <?php echo $data->contractor_plan; ?>
                    </td>
                  </tr>
                <?php } ?>
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
            maxlength: 11
          },
          contractor_address: {
            required: true,
          },
          contractor_plan: {
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
          contractor_plan: {
            required: "Please provide a plan",
          }
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
          error.addClass('invalid-feedback');
          element.closest('.form-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
          $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
          $(element).removeClass('is-invalid');
        }
      });
    </script>
    <script>
      $(document).ready(function() {
        var table = $("#contractorTable").DataTable({
          "ordering": false
        });
      });
    </script>
    <script>
      $(document).ready(function() {
        var table = $("#contractorTable").DataTable({
          responsive: true,
          ordering: false,
          ajax: {
            type: "POST",
            url: '<?php echo base_url();?>"contractor/contractorList"',
            dataSrc: "",
          },
          columns: [{
              data: "contractor_id",
            },
            {
              data: "contractor_name",
            },
            {
              data: "contractor_code",
            },
            {
              data: "contractor_address",
            },
            {
              data: "contractor_doj",
            },
            {
              data: "contractor_plan",
            },
            {
              data: "contractor_status",
            },
            {
              data: "record_status_id",
            },
            {
              data: "record_delete_status",
            },
          ],
        });
        const form = document.getElementById("form");
        const submitButton = document.getElementById("submit");
        submitButton.addEventListener("click", function(e) {
          // Prevent default button action
          e.preventDefault();
          var url = '<?php echo base_url();?>"contractor/add_contractor"';
          $.ajax({
            type: "POST",
            url: url,
            contentType: false,
            cache: false,
            processData: false,
            data: new FormData(form),
            success: function(data) {
              table.ajax.reload();
            },
          });
        });
      });
    </script>
</body>
</html>