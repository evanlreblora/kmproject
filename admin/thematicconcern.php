<?php include 'includes/session.php'; ?>
<?php
 
  $themid = 0;

  $where = '';
  if(isset($_GET['thematicconcern'])){
    
    $themid = $_GET['thematicconcern'];
    $where = 'WHERE books.thematicconcern_id = '.$themid;
  }


?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Thematic Concern
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Thematic Concern</li>
        <li class="active">List</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</a>
 
              
              
              <div class="box-tools pull-right">
                <form class="form-inline">
                  <div class="form-group">
                    <label>Thematic Concern:  </label>
                    <select class="form-control input-sm" id="select_thematic">
                      <option value="0">ALL</option>
                      <?php
                        $sql = "SELECT * FROM thematicconcern";
                        $query = $conn->query($sql);
                        while($themrow = $query->fetch_assoc()){
                          $selected = ($themid == $themrow['id']) ? " selected" : "";
                          echo "
                            <option value='".$themrow['id']."' ".$selected.">".$themrow['thematicname']."</option>
                          ";
                        }
                      ?>
                    </select>
                  </div>
                </form>
              </div>
              
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
           
                  <th>Thematic</th>
                  <th>Filename</th>
                  <th>Description</th>
                  <!-- <th>Encoder</th> -->
                  <th>Status</th>
                  <th>Action</th>
                </thead>
                <tbody>
                  <?php
                    $sql = "SELECT *, books.id AS bookid FROM books LEFT JOIN thematicconcern on thematicconcern.id=books.thematicconcern_id $where ORDER BY books.date_uploaded DESC";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      if($row['status']){
                        $status = '<span class="label label-info">downloaded </span>';
                      }
                      else{
                        $status = '<span class="label label-success">available</span>';
                      }
                      echo "
                        <tr>
                       
                          <td>".$row['thematicname']."</td>
                          <td>".$row['filename']."</td>
                          <td>".$row['description']."</td>
                     
                          <td>".$status."</td>
                          <td>
                            <button class='btn btn-info btn-sm view btn-flat' data-id='".$row['bookid']."'><i class='fa fa-eye'></i> View</button>
                            <button class='btn btn-success btn-sm edit btn-flat' data-id='".$row['bookid']."'><i class='fa fa-edit'></i> Edit</button>
                            <button class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['bookid']."'><i class='fa fa-trash'></i> Delete</button>
                          </td>
                        </tr>
                      ";
                    }

                    
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>   
  </div>
    
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/reports_modal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
<script>
$(function(){
 
  
  $('#select_thematic').change(function(){
    var value = $(this).val();
    if(value == 0){
      window.location = 'thematicconcern.php';
    }
    else{
      window.location = 'thematicconcern.php?thematicconcern='+value;
    }
  });




  $(document).on('click', '.edit', function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.view', function(e){
    e.preventDefault();
    // console.log("hello");

    var id = $(this).data('id');
    getRow(id);
    // console.log( id );

    $.ajax({
      method: "POST",
      url: "reports_view.php",
      data: {
        'view' : true,
        'id' : id,
      },
      success: function (response) {
        // console.log(response);
        $('.view_reports_data').html(response)
        $('#view').modal('show');
      }

    });

  });

  $(document).on('click', '.delete', function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });
});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'them_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.bookid').val(response.bookid);
      $('#edit_isbn').val(response.isbn);
      $('#edit_filename').val(response.filename);
      // $('#catselect').val(response.category_id).html(response.name);
      $('#themselect').val(response.thematic_id).html(response.thematicname);
      $('#edit_description').val(response.description);
      $('#edit_link').val(response.link);
      $('#edit_publisher').val(response.publisher);
      $('#date_uploaded').val(response.date_uploaded);
      $('#edit_file').val(response.file);
      $('#del_report').html(response.filename);
    }
  });
}
</script>
</body>
</html>
