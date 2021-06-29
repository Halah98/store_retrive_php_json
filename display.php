<html>
    <head>
		<title>Data</title>
		<meta charset="utf-8" />
		
    <!-- Bootstrap Css link -->
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" 
        integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
         
    <!-- JQuery JS-->
       <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>       
	</head>
  
<?php include 'header.php'; ?>
<!-- HTML -->
<body>
    <div class="container">
    <table id='table' class="table table-hover">
        <!-- HEADING FORMATION -->
        <tr  class="info">
            <th >Name</th>
            <th>ID</th>
            <th>department</th>
            <th>Image</th>
        </tr>
    </table>
</div>
 
    <script>
        $(document).ready(function () {
        
            // FETCHING DATA FROM JSON FILE
            $.getJSON("employee_data.json",  function (data) {
                var employee = '';

            // ITERATING THROUGH OBJECTS
            $.each(data, function (key, value) {

                //CONSTRUCTION OF ROWS HAVING
                // DATA FROM JSON OBJECT
                employee += '<tr>';
                employee += '<td>' + value.name + '</td>';

                employee += '<td>' + value.id_ + '</td>';

                employee += '<td>' + value.department + '</td>';

                employee += '<td><img src=' + value.image + ' class="img-thumbnail" width="100" height="100"></td>';

                employee += '</tr>';
            });
                
            //INSERTING ROWS INTO TABLE 
            $('#table').append(employee);
             });
        });
    </script>

    </body>
</html>