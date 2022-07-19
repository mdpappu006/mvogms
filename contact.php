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

</style>

<div class="content py-3 contact">
    <div class="card rounded-0 card-outline card-navy shadow" >
        <div class="card-body rounded-0">
            <h2 class="text-center">Contact</h2>
            <center><hr class="bg-navy border-navy w-25 border-2"></center>
        </div>

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
                            <textarea rows="5" placeholder="Your Message" name="messages" required="" class="form-control" spellcheck="false"></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary" name="contact-form">Send Message</button>

                        </form>
                    </div>    
                </div>
            </div>
        </div>
    </div>

</div>