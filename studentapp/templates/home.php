{% load static %}
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> dash board</title>
  <!-- Custom fonts for this template-->
  <link  rel="stylesheet" href="{% static 'fontawesome/css/all.min.css' %}">
  <link href="{% static 'css/sb-admin-2.min.css' %}" rel="stylesheet">
   <link href="{% static 'css/bootstrap.min.css' %}" rel="stylesheet">
  <link href="{% static 'css/style.css' %}" rel="stylesheet">
</head>

<body id="page-top" >


<!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
			<div>
		<img src="{% static 'img/log.svg' %}" class="img-fluid">
        </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php" class="text-center">
          <i class="fas fa-user user-font px-4"></i></a></li>

      <!-- Divider -->
	   <li class="nav-item">
        <a class="nav-link collapsed" href="{% url 'student_attendence_php' %}">
          <i class="fas fa-user-graduate px-3"></i>
          <span>Attendance</span>
        </a>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{% url 'student_assessment_php' %}">
          <i class="fas fa-chalkboard-teacher px-3"></i>
          <span>Assessments</span>
        </a>

      </li>

      <!-- Attendance Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{% url 'studentleave' %}" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-school px-3"></i>
         <span>Leave Management</span>
        </a>
		
		 <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="student-leave-management.php">Leave Management</a>
            <a class="collapse-item" href="student-applied-leave.php">Applied Leave</a>
            </div>
        </div>	
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="notification.php">
          <i class="fas fa-bell px-3"></i>
          <span>Notifications</span>
        </a>
      </li>

      <!-- Nav Item -ptrevious details-->
      <li class="nav-item">
        <a class="nav-link" href="hostel.php">
          <i class="fas fa-info-circle px-3"></i>
          <span>Hostel</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="feedback.php">
          <i class="fas fa-info-circle px-3"></i>
          <span>Feedback</span></a>
      </li>
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
		<div class="container-fliud">
        <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow bg-gradient-primary">
		<!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle  bg-light">
            <i class="fa fa-bars"></i>
          </button>
		 <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto pr-5 p-hide">

            <!-- Nav Item - Alerts -->
            <li class="nav-item ">
              <a class="nav-link " href="home.php">
                <i class="fas fa-home"><p> Home</p></i>
              </a>
              
            </li>
			<li class="nav-item">
              <a class="nav-link " href="{% url 'student_profile_php' %}">
                <i class="fas fa-user "><p> Myprofile</p></i>
              </a>
              
            </li>
			<li class="nav-item">
              <a class="nav-link " href="student-home.php">
                <i class="fas fa-info"> <p>Help</p></i>
              </a>
              
            </li>
			<li class="nav-item">
              <a class="nav-link " href="#"  >
                <i class="fas fa-bell "><p> Notification</p></i>
              </a>
              
            </li>
			<li class="nav-item">
              <a class="nav-link " href="{% url 'logouts' %}" >
                <i class="fas fa-sign-out-alt  text-gray"><p>LogOut</p></i>
              </a>
            </li>

          </ul>

        </nav>
		</div>
</div> 


<body onload="hideDiv()">

		<div class="border">
		<h2>Notification</h2>
		<nav class="navbar-nav navbar-expand  ">
			
			
			 <ul class="navbar-nav   ">

            <!-- Nav Item - Alerts -->
            <li class="nav-item px-2">
              <a class="nav-link text-dark  " href="#" >
                <i class="fas fa-chalkboard"><p> Assessment</p></i>
              </a>
              
            </li>
			<li class="nav-item px-2">
              <a class="nav-link text-dark  " href="#" >
                <i class="fas fa-bullhorn"><p> Announcement</p></i>
              </a>
              
            </li>
				</ul>
				
			</nav>
		</div>
		<hr>
		<div class="row d-flex">
			          
            <div class="col-md-4">
              <button class="btn" id="b1" >
                Calendar
              </button>             
            </div>
			<div class="col-md-4 ">
              <button class="btn" id="b2" >
                Subjects
               </button>              
            </div>
			<div class="col-md-4 ">
              <button class="btn btn-at" id="b3" >
                Attendance
              </button>              
            </div>
				
            
		</div>
		
           	   
		

	<!---------------div section 3------------>	
			<div id="div1" class="py-5">Calendar page </div>
	<!---------------Subject section start------------>			
			<div id="div2" class=" py-5">
				<div class="row">
					<div class="col-md-3 py-2 ">
						<div class="card text-center">
							<h3>HTML</h3>
								<div class="cadrbody">
									<p>TUTOR</p>
									<p>(Vijith)</p>
								</div>
						</div>
					</div>
				<div class="col-md-3 py-2">
					<div class="card text-center">
						<h3>PYTHON</h3>
							<div class="cadrbody ">
								<p>TUTOR</p>
								<p>(Anandhu)</p>
							</div>
					</div>
				</div>
				<div class="col-md-3 py-2">
					<div class="card text-center">
						<h3>JAVA</h3>
							<div class="cadrbody ">
								<p>TUTOR</p>
								<p>(Amitha)</p>
							</div>
					</div>
				</div>
				<div class="col-md-3 py-2">
					<div class="card text-center">
						<h3>DBMS</h3>
							<div class="cadrbody ">
								<p>TUTOR</p>
								<p>(Gana)</p>
							</div>
					</div>
				</div>
				<div class="col-md-3 py-2">
					<div class="card text-center">
						<h3>C-Programming</h3>
							<div class="cadrbody ">
								<p>TUTOR</p>
								<p>(Gana)</p>
							</div>
					</div>
				</div>
				<div class="col-md-3 py-2">
					<div class="card text-center">
						<h3>C-Programming</h3>
							<div class="cadrbody ">
								<p>TUTOR</p>
								<p>(Gana)</p>
							</div>
					</div>
				</div>
				<div class="col-md-3 py-2">
					<div class="card text-center">
						<h3>C-Programming</h3>
							<div class="cadrbody ">
								<p>TUTOR</p>
								<p>(Gana)</p>
							</div>
					</div>
				</div>
				<div class="col-md-3 py-2">
					<div class="card text-center">
						<h3>C-Programming</h3>
							<div class="cadrbody ">
								<p>TUTOR</p>
								<p>(Gana)</p>
							</div>
					</div>
				</div>
			</div>	
			</div>	
	<!---------------Subject section end------------>	
<!---------------Attendence section Start------------>	
			<div id="div3" class="py-5">Attendance</div>	
<!---------------Attendence section End------------>
                       
<!-- Footer -->
<footer class="">
          <div class="copyright text-center bg-gradient-primary py-2 text-light">
            <span>Copyright &copy; Orisys Academy 2019-2020</span>
        </div>
      </footer>
      <!-- End of Footer -->
</div>
    </div>
    <!-- End of Content Wrapper -->


  <!-- Bootstrap core JavaScript-->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="css/proper.min.js"></script>
  <script src="css/popper.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.js"></script>
  <!-- Custom scripts for student applied leave pages-->
  <script src="js/search.js"></script>
  
</body>

</html><script>
$(document).ready(function(){
	
	
	
  $("#b1").click(function(){
    $("#div1").show();
	 $("#div2").hide();
	  $("#div3").hide();
  });
   $("#b2").click(function(){
    $("#div1").hide();
	 $("#div2").show();
	  $("#div3").hide();
  });
  $("#b3").click(function(){
    $("#div1").hide();
	 $("#div2").hide();
	  $("#div3").show();
  });
});

 function hideDiv() {
     document.getElementById("div2").style.display = 'none';   
	document.getElementById("div3").style.display = 'none';   	  
    }  
 </script>
 
 