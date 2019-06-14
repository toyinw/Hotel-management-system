<?php
    include("include/functions.php");
    myheader();  
?>
    <div class="mg-page-title parallax">
	<div class="container">
            <div class="row">
		<div class="col-md-12">
                    <h2>BOOKING</h2>
		</div>
            </div>
        </div>
    </div>

    <div class="mg-page">
	<div class="container">
            <div class="row">
		<div class="col-md-12">
                    <h2 class="mg-sec-left-title">BOOK with us</h2>
                    <form class="clearfix" method="post" action="signup.php">
			<p id="actioncomment"></p>
			<div class="col-md-6">
                            <div class="mg-contact-form-input">							
                                <label for="first-name">First Name</label>
				<input type="text" class="form-control" id="fname">
                            </div>
                            <div class="mg-contact-form-input">
				<label for="Middle-Name">Middle Name</label>
                                <input type="text" class="form-control" id="mname">
                            </div>
                            <div class="mg-contact-form-input">
				<label for="Surname">Surname</label>
                                <input type="text" class="form-control" id="Surname">
                            </div>	
                            <div class="mg-contact-form-input">
                                <label for="Surname">Password</label>
				<input type="password" class="form-control" id="pword">
                            </div>
                            <div class="mg-contact-form-input">
				<label for="Surname">Comfirm Password</label>
                                <input type="password" class="form-control" id="pword2">
                            </div>
                            <div class="mg-contact-form-input">
                                <label for="Surname">Date of birth</label> 
                                <input type="date" class="form-control" id="dob">
                            </div>
			</div>
			<div class="col-md-6" >
                            <div class="mg-contact-form-input">
                                <label for="first-name">Username</label>
				<input type="text" class="form-control" id="uname">
                            </div>
                            <div class="mg-contact-form-input">
                                <label for="Surname">Phone No.</label>
				<input type="text" class="form-control" id="Phone">
                            </div>
                            <div class="mg-contact-form-input">
                                <label for="Surname">Confirm Phone No.</label>
				<input type="text" class="form-control" id="Phone2">
                            </div>
                            <div class="mg-contact-form-input">
                                <label for="gender">Gender</label>
				<select id="gender" class="form-control">
                                    <option> Male </option> 
                                    <option> Female </option> 
				</select>
                            </div>
                            <div class="mg-contact-form-input">
                                <label for="email">E-mail</label>
				<input type="text" class="form-control" id="email">
                            </div>
                             <div class="mg-contact-form-input">
                                <label for="email">Profile Name</label>
				<input type="text" class="form-control" id="profileName">
				
                            </div>
			</div>
			<input type="button" id="submit" class="btn btn-dark-main pull-right" value="signup">
                    </form>
		</div>
            </div>
	</div>
    </div>

    <script type="text/javascript">
        $(document).ready(function()
        {
            $("#submit").click(function()
            {
		var firstname=$("#fname").val();
		//var lastname=$("#lname").val();
		var middlename=$("#mname").val();
		var surname=$("#Surname").val();
		var dob=$("#dob").val();
		var username=$("#uname").val();
		var phone=$("#Phone").val();
		var phone2=$("#Phone2").val();
		var gender=$("#gender").val();
		var pword=$("#pword").val();
		var pword2=$("#pword2").val();
		var email=$("#email").val();
        var profileName=$("#profileName").val();
                $.ajax(
                {
                    type:"post",
                    url:"myAjax.php",
                    data:"firstname="+firstname+"&middlename="+middlename+"&surname="+surname+"&dob="+dob+"&username="+username+"&phone="+phone+"&phone2="+phone2+"&gender="+gender+"&email="+email+"&pword="+pword+"&pword2="+pword2+"&profileName="+profileName+"&actionName=booking1",
                    success:function(data)
                    {
                        $("#actioncomment").html(data);
                    }
                });		
            });
        });
    </script>
<?php
   // myfooter();
?>