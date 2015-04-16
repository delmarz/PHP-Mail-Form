<?php 
    $img_url = 'images/bg.jpg';


if ($_POST['submit']) {


    if (!$_POST['name']) {

        $error = '<br />Please enter your name <span class="glyphicon glyphicon-close"></span>';
    }
     if (!$_POST['email']) {

        $error = $error.'<br />Please enter your email <span class="glyphicon glyphicon-close"></span>';
    }

     if (!$_POST['comment']) {

        $error = $error.'<br />Please enter your comment <span class="glyphicon glyphicon-close"></span>';
    }

 

    if ($error) {

        $results = '<div class="alert alert-danger"><strong>There were error(s) in form:</strong> '.$error.'</div>';
    } else {

        if (mail("d@icreate123.hairypiano.com", "Comment from website", "Name: ".$_POST['name']."

            Email: ".$_POST['email']."

            Comment: ".$_POST['comment'], "from: asdjsajkdsa@asda.com")) {

            $results = '<div class="alert alert-success"><strong>Form successfully submitted <span class="glyphicon glyphicon-ok"></span></strong></div>';
        } else {
             $results = '<div class="alert alert-danger"><strong>An error occured while sending form, Please try again later <span class="glyphicon glyphicon-close"></span></strong></div>';
        }

         
    }

}

?>
<!DOCTYPE html>
<html lang="eng">
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Email Form With Validation</title>
    
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">



<style>
    body {
        background-image: url(<?php echo $img_url; ?>);
        background-repeat: no-repeat;
        margin: 0;
        padding: 0;
        width: auto;
        height: auto;

    }
    .emailForm {
        border-radius: 10px;
        margin-top: 100px;
        padding-bottom: 20px;
        background-color: rgba(0, 0, 0, .5);
        color: #FFF;
    }

    textarea.form-control {
        height: 120px !important;
    }

    .footer-delmarz {
        padding: 80px 0 5px 10px;
        color: #e8e8e8;
        margin: 0;
        font-weight: 100;
        font-size: 1.2em;
    }

    .lead-p {
        font-weight: 100;
    }


</style>

</head>
<body>

    <?php

    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 emailForm">
                <h1>My Email Form</h1>
                <p class="lead lead-p">Please get in touch - I'll get back to you as soon as I can.</p>

                <?php echo $results; ?>
            <form method="post">

                <div class="form-group">
                    <label for="name" >Your Name:</label>
                    <input type="text" name="name" class="form-control" placeholder="Your Name" value="<?php echo $_POST['name']?>"/>
        
                </div>

                   <div class="form-group">
                    <label for="email">Your Email:</label>
                    <input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo $_POST['email']?>"/>
                </div>

                    <div class="form-group">
                    <label for="comment">Your Comment:</label>
                    <textarea class="form-control" name="comment"><?php echo $_POST['comment']?></textarea>

                 
                </div>

                   <input  type="submit" name="submit" class="btn btn-success btn-lg" value="Submit" />

            </form>
            </div>
        </div>  
           
    </div>
     <div class="footer">
        <p class="lead footer-delmarz">Copyright © 2013 <a href="http://delmarz.esy.es" target="_blank">deLmarz</a>. All rights reserved.</p>
        </div>
     
<!-- Latest compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>
