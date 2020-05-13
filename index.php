<?php

namespace AdminDelete;
spl_autoload_register( function ( $classname ) {
    $path = strtolower( str_replace( "AdminDelete\\", "", $classname ) ) . ".php";
    $path = str_replace( "\\", "/", $path );
    include_once ( $path );
} );

use \AdminDelete\Query\Data;
$displayData = new Data();
$myQuery     = $displayData->displayData();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP AJAX</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h1>PHP AJAX</h1>
                <p>The Grid is a fluid system with a max width of 112.0rem (1120px), that shrinks with the browser/device at smaller sizes. </p>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <button type="button" id="delete-btn">Delete</button>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <table>
                    <thead>
                        <th>ID</th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                    </thead>

                    <tbody>
                    <?php foreach($myQuery as $row) :  ?>
                        <tr>
                            <td><input type="checkbox" value="<?php echo $row['id']; ?>"></td>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#delete-btn").on("click",function(){
                var id = []; 

                $(":checkbox:checked").each(function(key){
                    id[key] = $(this).val(); 
                }); 
                //console.log(id); 

                if(id.length === 0){
                    alert("Please select check box data"); 
                }else{
                    //console.log(id); 
                    if(confirm("Do you want to delete the data")){
                        $.ajax({
                            url:"delete/delete.php", 
                            type: "POST",
                            data: {id:id},
                            success: function(data){
                                console.log(data); 
                            }
                        });
                    }
                }
            }); 
        }); 
    </script>
</body>
</html>