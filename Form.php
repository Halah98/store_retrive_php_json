<!DOCTYPE HTML>
<html>
    <head>
		<title>tamplet </title>
		<meta charset="utf-8" />
		<meta name="description" content=" sign up form" />
		<meta name="keywords" content="sign up" />
		
    <!-- Bootstrap Css link -->
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" 
        integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
         
    <!-- JQuery JS-->
       <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>       
	</head>
	<body>
        <!-- Header -->
    <?php  include 'header.php'; ?>

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                                <h1>Enter your data </h1>
                        </div>
                        <div class="panel-body">
                            <form action="form.php" method="post" enctype="multipart/form-data">
                                
                                <label for="password">Enter your User name:</label>
                                <input type="text" name="name" placeholder="Username" class="form-control" placeholder="User name" required autofocus>
                                
                                <br>
                                <label for="department">Enter your department:</label>
                                <input type="text" name="department" class="form-control" placeholder="department." required autofocus>

                                <br>
                                <label for="ID_">Enter your ID:</label>
                                <input type="text" name="ID_" class="form-control" placeholder="ID..." required autofocus>

                                <br>
                                <label for="image">Enter your Image:</label>
                                <input type="file" name="image"  class="form-control">

                                <br>
                                <input type="submit" name="submit" class="btn btn-primary btn-block" value="Register !">
                            
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    // Write in file >>>      

        // UPLOADED FILE DATA
        if(isset($_POST['submit'])){
        $data =array();
        $data[]=array(
        'name'       => $_POST['name'],
        'department' => $_POST['department'],
        'id_'        => $_POST['ID_'],
        'image'      => $_FILES['image']['name'] // image.jpg ["image", "jpg"]
        );

        $input = file_get_contents('employee_data.json');

        $tempArray = json_decode($input);
        array_push($tempArray, $data);
    
        $jsonData = json_encode($tempArray);
        file_put_contents('employee_data.json', $jsonData);      
    }

  
    ?>
	</body>
</html>