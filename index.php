<?php
require_once 'config.php';
$record_per_page = 25;
$page = '';
if(isset($_GET["page"]))
{
 $page = $_GET["page"];
}
else
{
 $page = 1;
}

$start_from = ($page-1)*$record_per_page;

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lesson Plan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <link rel="icon" type="image/x-icon" href="assets/logo.png" />
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="assets/js/main.js"></script>
</head>
<body>

  <div class="container-fluid">
    <!-- Control the column width, and how they should appear on different devices -->
    <div class="container">
    <div class="row">
      <div class="col-sm-6 d-flex align-items-center">
        <a href="" style="text-decoration: none;"><div class="p-2"><img src="assets/logo.png"><span class="txt_blue top_nav_txt" style="font-weight: bolder;">Education.com</span></div></a>
        <a href="" class="p-2 text-muted top_nav_txt" style="text-decoration: none;">Learning Library</a>
      </div>
      <div class="col-sm-6 d-flex justify-content-end align-items-center">
        <div class="p-2 text-muted top_nav_txt login">Log in</div>
        <button type="button" class="btn btn_blue text-white btn_txt">Sign Up</button>
      </div>
    </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-sm">
        <h1 class="txt_blue text-center">Lesson Plans</h1>
        <div class="input-group mb-3" style="width: 50%;margin-left: 25%;">
          <div class="input-group-append">
            <button class="btn"><i class="fas fa-search"></i></button>
          </div>
          <input type="text" class="form-control" placeholder="Search">
        </div>
          <!--second row/navigation-->
         <div class="d-flex justify-content-center">
          <a class="text-muted nav_txt" href="#">Entire Library</a>
          <a href="" class="text-muted nav_txt">Printable Worksheets</a>
          <a href="" class="text-muted nav_txt">Online Games</a>
          <a href="" class="text-muted nav_txt">Guided Lessons</a>
          <a href="" class="text-muted nav_txt">Lesson Plans</a>
          <div class="dropdown">
            <div class="nav_txt text-muted dropdown-toggle toggle_txt" data-toggle="dropdown">More</div>
            <div class="dropdown-menu drop_down_div">
              <a class="dropdown-item drop_down_txt" href="#">Hands-on Activities</a>
              <a class="dropdown-item drop_down_txt" href="#">Interactive Stories</a>
              <a class="dropdown-item drop_down_txt" href="#">Online Exercises</a>
              <a class="dropdown-item drop_down_txt" href="#">Printable Workbooks</a>
              <a class="dropdown-item drop_down_txt" href="#">Science Projects</a>
              <a class="dropdown-item drop_down_txt" href="#">Song Videos</a>
            </div>
          </div>
         </div>
      </div>
    </div>
    <hr>
    
    <div class="row">
      <div class="col-sm">
        <div class="d-flex">
          <div class="mr-auto p-2">25 search results</div>
          <div class="mr-auto p-2">
          <div class="count-checkboxes-wrapper badge-primary my_badge">
          <span id="count-checked-checkboxes">0</span> checked <i class="fas fa-times text-white"></i>
         </div>
          </div>
          <div class="p-2">
            <div class="form-group ">
              <select class="form-control actions">
                <option>Actions</option>
                <option>PrintAll</option>
                <option>Add to Assignment</option>
                <option>Add to Collection</option>
              </select>
          </div>
          </div>
          <div class="p-2 d-flex flex-row">
            <div class="p-2 text-muted top_nav_txt login">Sort By</div>
            <div class="form-group ">
              <select class="form-control" id="sel1">
                <option>Popularity</option>
                <option>Most Recent</option>
                <option>Title</option>
                <option>Relevance</option>
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
    
    <div class="row">
      <div class="col-sm-2">
      <!--Side navigation-->
        <h5>By Grade</h5>
        <a href="#"><div class="side_nav_txt text-muted side_div_links">Preschool</div></a>
        <a href="#"><div class="side_nav_txt text-muted side_div_links">Kindergarten</div></a>
        <a href="#"><div class="side_nav_txt text-muted side_div_links">1st grade</div></a>
        <a href="#"><div class="side_nav_txt text-muted side_div_links">2nd grade</div></a>
        <a href=""><div class="side_nav_txt text-muted side_div_links">3rd grade</div></a>
        <a href=""><div class="side_nav_txt text-muted side_div_links">4th grade</div></a>
        <a href=""><div class="side_nav_txt text-muted side_div_links">5th grade</div></a>
        <a href=""><div class="side_nav_txt text-muted side_div_links">6th grade</div></a>
        <a href=""><div class="side_nav_txt text-muted side_div_links">7th grade</div></a>
        <hr>
        <a href="#" data-toggle="collapse" data-target="#el" class="side_nav_txt text-muted side_div_links">English Learner (EL) </a>
        <div id="el" class="collapse">
          <a class="dropdown-item drop_down_txt" href="#">Hands-on Activities</a>
            <a class="dropdown-item drop_down_txt" href="#">Interactive Stories</a>
        </div>
      <hr>
   <h5>By Subjects</h5>
       <a href="#" data-toggle="collapse" data-target="#art"><div class="side_nav_txt text-muted side_div_links">Fine Arts</div></a>
         <div id="art" class="collapse">
          <a class="dropdown-item drop_down_txt" href="#">Drawing & Painting</a>
            <a class="dropdown-item drop_down_txt" href="#">Music</a>
            <a class="dropdown-item drop_down_txt" href="#">Dance</a>
            <a class="dropdown-item drop_down_txt" href="#">Art History</a>
        </div>
        <a href="#" data-toggle="collapse" data-target="#math"><div class="side_nav_txt text-muted side_div_links">Math</div></a>
        <div id="math" class="collapse">
         <a class="dropdown-item drop_down_txt" href="#">Number Sense</a>
           <a class="dropdown-item drop_down_txt" href="#">Addition</a>
           <a class="dropdown-item drop_down_txt" href="#">Subtraction</a>
           <a class="dropdown-item drop_down_txt" href="#">Multiplication</a>
           <a class="dropdown-item drop_down_txt" href="#">Division</a>
           <a class="dropdown-item drop_down_txt" href="#">Mixed Operation</a>
           <a class="dropdown-item drop_down_txt" href="#">Fraction</a>
           <a class="dropdown-item drop_down_txt" href="#">Decimals</a>
           <a class="dropdown-item drop_down_txt" href="#">Parcentile, Ratios & Rates</a>
           <a class="dropdown-item drop_down_txt" href="#">Algebra</a>
           <a class="dropdown-item drop_down_txt" href="#">Geometry</a>
           <a class="dropdown-item drop_down_txt" href="#">Measurement</a>
           <a class="dropdown-item drop_down_txt" href="#">Time</a>
           <a class="dropdown-item drop_down_txt" href="#">Money Math</a>
       </div>
       <a href="#" data-toggle="collapse" data-target="#reading"><div class="side_nav_txt text-muted side_div_links">Reading & Writing</div></a>
       <div id="reading" class="collapse">
        <a class="dropdown-item drop_down_txt" href="#">Reading</a>
        <a class="dropdown-item drop_down_txt" href="#">Writing</a>
        <a class="dropdown-item drop_down_txt" href="#">Grammar</a>
      </div>
      <a href="#" data-toggle="collapse" data-target="#science"><div class="side_nav_txt text-muted side_div_links">Science</div></a>
      <div id="science" class="collapse">
       <a class="dropdown-item drop_down_txt" href="#">The 5 senses</a>
         <a class="dropdown-item drop_down_txt" href="#">Simple Experiments</a>
         <a class="dropdown-item drop_down_txt" href="#">Colors</a>
         <a class="dropdown-item drop_down_txt" href="#">Physical Science</a>
         <a class="dropdown-item drop_down_txt" href="#">Earth & Space Science</a>
         <a class="dropdown-item drop_down_txt" href="#">Life Science</a>
         <a class="dropdown-item drop_down_txt" href="#">Plants, Animals & Earth</a>
     </div>
     <a href="#" data-toggle="collapse" data-target="#social_emotion"><div class="side_nav_txt text-muted side_div_links">Social Emotional</div></a>
     <div id="social_emotion" class="collapse">
      <a class="dropdown-item drop_down_txt" href="#">Mindfullness</a>
    </div>
    <a href="#" data-toggle="collapse" data-target="#social_studies"><div class="side_nav_txt text-muted side_div_links">Social Studies</div></a>
    <div id="social_studies" class="collapse">
     <a class="dropdown-item drop_down_txt" href="#">Social Skills</a>
       <a class="dropdown-item drop_down_txt" href="#">Nationals Symbols</a>
       <a class="dropdown-item drop_down_txt" href="#">History</a>
       <a class="dropdown-item drop_down_txt" href="#">Geography</a>
       <a class="dropdown-item drop_down_txt" href="#">Community & Culture</a>
       <a class="dropdown-item drop_down_txt" href="#">Government</a>
       <a class="dropdown-item drop_down_txt" href="#">Civics & Govenment</a>
       <a class="dropdown-item drop_down_txt" href="#">Economics</a>
   </div>
   <a href="#" data-toggle="collapse" data-target="#typing"><div class="side_nav_txt text-muted side_div_links">Typing</div></a>
   <div id="typing" class="collapse">
   <a href="#" data-toggle="collapse" data-target="#sentences"><div class="side_nav_txt text-muted side_div_links">Sentenses</div></a>
    <div id="sentences" class="collapse">
     <a class="dropdown-item drop_down_txt" href="#">Social Panctation</a>
       <a class="dropdown-item drop_down_txt" href="#">Shift and Capitalization</a>
       <a class="dropdown-item drop_down_txt" href="#">History</a>
   </div>
  </div>
    <hr>
    <h5>By Standard</h5>
       <a href="#" data-toggle="collapse" data-target="#common_core"><div class="side_nav_txt text-muted side_div_links">Common Core</div></a>
         <div id="common_core" class="collapse">
          <a class="dropdown-item drop_down_txt" href="#">Langauage Arts</a>
            <a class="dropdown-item drop_down_txt" href="#">Mathematics</a>
        </div>
      </div>

      <div class="col-sm-10">
      <!--/main grid-->
         <div class="container-fluid">
          <div class="row">
            <?php  

                 $sql="SELECT * FROM lesson_plan order by id ASC LIMIT $start_from, $record_per_page";
                 $stm=$conn->prepare($sql);
                 $stm->execute();               
               // LOOP TILL END OF DATA  
                while($row1 = $stm->fetch(PDO::FETCH_ASSOC)) 
                { 
                  $lesson=$row1['id'];
                  $img_src = $row1['image_path'];
              ?> 
            <!--start of col sm 3-->
             <div class="col-sm-3" style="margin-bottom: 10px;">
              <!--Start of card view-->
              <div class="card" style="width: 15rem;">
                <div class="card_div"><img src="<?php echo $img_src; ?>" alt="Card image cap" class="card-img-top"/></div>
                <div class="card-body">
                  <h6 class="card-title card_txt"><?php echo $row1['topic'];?></h6>
                  <div class="body_hidden">
                    <div class="brief_desc"><?php echo $row1['brief_description'];?></div>
                    <div class="subject"><?php echo $row1['grade'];?><span style="margin-left: 20px;color: #c1c1c1;"><?php echo $row1['subject'];?></span></div>
                  </div>
                  <div class="d-flex justify-content-between lesson_plan">
                  <p class="card-text" style="margin-top: 10px;">Lesson Plan.</p>
                    <div class="form-check"  style="margin-top: 10px;">
                        <input type="checkbox" class="form-check-input" value="">
                    </div>
                  </div>
                </div>
              </div>
              <!--End of card view-->
              </div>
              <?php 
                } 
             ?> 
              <!--end of col sm 3-->
            </div>
            <br>
            </div>
         </div>
         <!--End of main grid-->  

      </div>
      <div class="pagination d-flex justify-content-center" style="margin-top:50px">
      <?php
    $page_query = "SELECT * FROM lesson_plan ORDER BY id ASC";
    $page_result=$conn->prepare($page_query);
    $page_result->execute();
    $total_records=$page_result->fetchColumn();

    $total_pages = ceil($total_records/$record_per_page);
    $start_loop = $page;
    $difference = $total_pages - $page;
    if($difference <= 0)
    {
     $start_loop = $total_pages;
    }
    $end_loop = $start_loop;
    if($page > 1)
    {
     echo "<a href='index.php?page=1'>First</a>";
     echo "<a href='index.php?page=".($page - 1)."'><i class='fas fa-arrow-left'></i></a>";
    }
    for($i=$start_loop; $i<=$end_loop; $i++)
    {     
     echo "<a href='index.php?page=".$i."'>".$i."</a>";
    }
    if($page <= $end_loop)
    {
     echo "<a href='index.php?page=".($page + 1)."'><i class='fas fa-arrow-right'></i></a>";
     echo "<a href='index.php?page=".$total_pages."'>Last</a>";
    }
    
    
    ?>
      </div>
      <div class="container">
        <h1 class="text-muted">Lesson Plans</h1>
        <p style="margin-bottom: 30px;">Looking to engage students by increasing their focus and creativity? Or foster positive teacher-student relationships? Below is Education.com's pre K through 7th comprehensive lesson plan library, created by educators. From our free math, reading & writing, and science lesson plans, learning will be enjoyable and meaningful for every student.</p>
      </div>
      
    </div>
    <div class="tron_one">
      <div class="container">
        <div class="d-flex justify-content-center">
          <ul class="nav flex-column">
            <li>
              <a class="nav-link text-white" href="#"><h5>Guided Lessons</h5></a>
            </li>
            <li>
              <a class="nav-link text-white" href="#">Progress Tracker</a>
            </li>
            <li>
              <a class="nav-link text-white" href="#">Classroom Mode</a>
            </li>
            <li>
              <a class="nav-link text-white" href="#">Skills Progression</a>
            </li>
          </ul>

          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link text-white" href="#"><h5>Learning Libary</h5></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Worksheets</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Games</a>
            </li>
            <li class="nav-item text-white">
              <a class="nav-link text-white" href="#">Workbooks</a>
            </li>
            <li class="nav-item text-white">
              <a class="nav-link text-white" href="#">Activities</a>
            </li>
            <li class="nav-item text-white">
              <a class="nav-link text-white" href="#">Songs</a>
            </li>
            <li class="nav-item text-white">
              <a class="nav-link text-white" href="#">Stories</a>
            </li>
            <li class="nav-item text-white">
              <a class="nav-link text-white" href="#">Exercises</a>
            </li>
          </ul>

          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link text-white" href="#"><h5>Teaching Tools</h5></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Lesson Plans</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Worksheet Generator</a>
            </li>
            <li class="nav-item text-white">
              <a class="nav-link text-white" href="#">Common Core Resources</a>
            </li>
            <li class="nav-item text-white">
              <a class="nav-link text-white" href="#">More Teaching Tools</a>
            </li>
          </ul>

          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link text-white" href="#"><h5>Schools</h5></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Get a quote</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Buy School License</a>
            </li>
          </ul>

          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link text-white" href="#"><h5>Support</h5></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Give Gift</a>
            </li>
            <li class="nav-item text-white">
              <a class="nav-link text-white" href="#">Redeem Gift</a>
            </li>
            <li class="nav-item text-white">
              <a class="nav-link text-white" href="#">Schools</a>
            </li>
            <li class="nav-item text-white">
              <a class="nav-link text-white" href="#">FAQs</a>
            </li>
            <li class="nav-item text-white">
              <a class="nav-link text-white" href="#">Tell us what you think</a>
            </li>
            <li class="nav-item text-white">
              <a class="nav-link text-white" href="#">Privacy Policy</a>
            </li>
            <li class="nav-item text-white">
              <a class="nav-link text-white" href="#" style="font-weight: bold;">Coppa Privacy Policy</a>
            </li>
            <li class="nav-item text-white">
              <a class="nav-link text-white" href="#">Terms of Service</a>
            </li>
          </ul>

          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link text-white" href="#"><h5>About Us</h5></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Company</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Review</a>
            </li>
            <li class="nav-item text-white">
              <a class="nav-link text-white" href="#">Blog</a>
            </li>
            <li class="nav-item text-white">
              <a class="nav-link text-white" href="#">Press</a>
            </li>
            <li class="nav-item text-white">
              <a class="nav-link text-white" href="#">Site Map</a>
            </li>
            <li class="nav-item text-white">
              <a class="nav-link text-white" href="#">Contact Us</a>
            </li>
          </ul>

        </div>
      </div>
    </div>
    <div class="tron_two center">
      <div class="d-flex justify-content-center">
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-youtube"></a>
        <a href="#" class="fa fa-pinterest"></a>
      </div>
      <p class="text-white text-center" style="margin-top: 10px;">Copyright © 2021 Education.com, Inc, a division of IXL Learning • All Rights Reserved.</p>
      <p class="text-white text-center" style="font-size: large;font-weight: bolder;">IXL</p>
    </div>
</body>
</html>
