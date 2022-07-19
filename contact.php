<?php
	define("DB_HOST", "localhost:3306");
	define("DB_USER", "root");
	define("DB_PASS", "");
	$connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if(isset($_POST['contact-form'])){
        $fname = trim($_POST['fname']);
        $lname = trim($_POST['lname']);
        $phone = trim($_POST['phone']);
        $messages = filter_input(INPUT_POST, 'mess' ,FILTER_SANITIZE_STRING);
        $query = "INSERT INTO contact(firstname,lastname,phone,message) values('$fname','$lname','$phone','$messages')";
        $result = mysqli_query($connect, $query);
        if($result){      
            $_SESSION['message'] = true;
            session_destroy();
        }else{
            $_SESSION['error'] = true;
            session_destroy();
        }
    }

?>

<style>

    .content.contact{
        margin-top: 60px;
    }

    .contact_us,.contact_form{
        padding: 50px 15px;
    }

    .contact_us img{
        width: 100%;
        height: 390px;
        object-fit: cover;
    }

    .contact_form .form-group{
        margin-bottom: 25px;
    }

    .success{
        color: #155724;
        background-color: #d4edda;
        border-color: #c3e6cb;
        text-align: center;
        margin: 0 auto;
    }

</style>

<div class="content py-3 contact">
    <div class="card rounded-0 card-outline card-navy shadow" >
        <div class="card-body rounded-0">
            <h2 class="text-center">Contact</h2>
            <center><hr class="bg-navy border-navy w-25 border-2"></center>
        </div>

        <?php 
            if(isset($_SESSION['message'])):
        ?>
        <div class="alert alert-success success col-4 align-center" role="alert">
            Messages Has been Sent!
        </div>
        <?php endif;?>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact_us">
                        <img src="assets/img/contact-us.webp" alt="contact">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="contact_form"> 
                        <form method="POST">
                        <div class="form-group">
                            <input name="fname" placeholder="First Name" class="form-control" required="" autocomplete="off">
                        </div>
                        
                        <div class="form-group">
                            <input placeholder="Last Name" name="lname" class="form-control" required="">
                        </div>

                        <div class="form-group">
                            
                            <input name="phone" placeholder="Phone" class="form-control" type="number" required="">
                        </div>

                        <div class="form-group">
                            <textarea rows="5" placeholder="Your Message" name="mess" required="" class="form-control" spellcheck="false"></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary" name="contact-form">Send Message</button>

                        </form>
                    </div>    
                </div>
            </div>
        </div>
    </div>

</div>