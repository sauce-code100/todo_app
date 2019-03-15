<?php

  include 'functions.php';

  echo '<b>'.calculateAge().'';

?>





<?php include "includes/header.php" ?> 

<table class="table table-hover" style="margin-top:20px";>


<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#myModal">Add Task</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add Tasks Here</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">

<form action="index.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1"><strong>Task Title</strong></label>
    <input type="text" name="task_title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><strong>Task Detail</strong></label>
    <input type="text" name="task_detail" class="form-control" id="exampleInputPassword1" >
  </div>

  <button type="submit" name="add_task" class="btn btn-primary">Add Task</button>
</form>


<?php

if(isset($_POST['add_task'])){
    $new_task_title = $_POST['task_title'];
    $new_task_detail = $_POST['task_detail'];

    $query = "INSERT INTO tasks (task_name, task_detail) VALUES ('{$new_task_title}', '{$new_task_detail}' )";
    $result = mysqli_query($connection, $query);

}

?>
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    
      </div>
    </div>

  </div>
</div>





<button type="button" class="btn btn-default float-right">Print</button>
<hr><br>
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Task Title</th>
      <th scope="col">Task Description</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
      
    </tr>
  </thead>
  <tbody>

            <!-- View All Tasks Result -->

<?php

if(isset($_POST['find'])){

    $search = $_POST['search'];
    echo 'ddddd';

$query = "SELECT * FROM tasks WHERE task_name LIKE '%$search%' ";
$result = mysqli_query($connection, $query);
}
$count = mysqli_num_rows($result);
if($count == 0){
    echo "<h1>NO RESULT</h1>";
}else{

    while($row = mysqli_fetch_assoc($result)){
        $task_id = $row['task_id'];
        $task_name = $row['task_name'];
        $task_detail = $row['task_detail'];
    echo 
    "<tr>
      <td scope='row'>{$task_id}</td>
      <td>{$task_name}</td>
      <td>{$task_detail}</td>
      <td><a href='edit.php?edit={$task_id}'>Edit</a></td>
      <td><a href='index.php?delete={$task_id}'>Delete</a></td>
    </tr>";

    }}
    ?>






   
  </tbody>
</table>


<?php
// Delete Task

if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    $query = "DELETE FROM tasks WHERE task_id = {$delete_id}";
    $result = mysqli_query($connection, $query);
    header("Location: index.php");

}

?>





<?php include "includes/footer.php" ?>