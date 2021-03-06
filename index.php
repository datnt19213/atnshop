<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/index.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="js/menubar.js"></script>
    <script src="js/scrollTop.js"></script>
    <script src="js/hideSlide.js"></script>
</head>
<body>
    <!-- <?php
        include_once("connect.php");
    ?> -->
    <div id="wrapper">
        <nav class="navigation">
            <div class="nav-icon">
                <i class="fas fa-bars"></i>
            </div>
            <ul class="menu-index">
                <li class="menu-item" onclick="hide(0)"><a href="index.php">Home</a></li>
                <li class="menu-item" onclick="hide(0)"><a href="index.php">TechToys</a></li>
                <li class="menu-item" onclick="hide(0)"><a href="index.php">Normal Toys</a></li>
                <li class="menu-item"onclick="hide(0)"><a href="index.php">Popular Toys</a></li>
                <li class="menu-item"onclick="hide(0)"><a href="index.php">Type of Toys</a></li>
                <li class="menu-item"onclick="hide(2)"><a href="index.php">Feedback</a></li>
                <div class="search">
                    <input type="search" class="search-item">
                    <button class="searchButton-item">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </ul>
            <div class="account">
                <div class="account-info">
                    <a class="account-in" onclick="hide(2)" href="?page=loginsignup" style="color: #fff; text-decoration: none; margin: 0px 2px;">Login</a>
                    <a class="account-in" onclick="hide(2)" href="?page=loginsignup" style="color: #fff; text-decoration: none; margin: 0px 2px;">Signup</a>
                    <!-- <u>Hi, </u> -->
                </div>
                <div class="account-icon">
                    <!-- <div class="default-user-icon"><i class="fa-solid fa-circle-user ico"></i></div> -->
                    <a class="link-icon" onclick="hide(0)" href="?page=loginsignup"><img class="account-avatar" src="image/User-icon.jpg" alt="Account-avatar"></a>
                </div>
            </div>
        </nav>
        <div class="search-mobile">
            <input type="search" class="search-mobile-item">
            <button class="searchButton-mobile-item">
                <i class="fa-solid fa-magnifying-glass "></i>
            </button>
        </div>
        
        <div class="card">
  
            <div class="card_part card_part-one">
                <img src="" alt="Image-1">
            </div>
            
             <!-- Photo 2 -->
            <div class="card_part card_part-two">
                <img src="" alt="Image-2">
            </div>
          
            <!-- Photo 3 -->
            <div class="card_part card_part-three">
                <img src="" alt="Image-3">
            </div>
          
            <!-- Photo 4 -->
            <div class="card_part card_part-four">
                <img src="" alt="Image-4">
            </div>
          
        </div>

        <!-- <div class="container">
            <div class="left-body">
                <ul class="list-left-menu">
                    <li class="menu-left"><a class="menu-left-item" href="?page=home">Technology Toys</a></li>
                    <li class="menu-left"><a class="menu-left-item" href="?page=home">Skills Toys</a></li>
                    <li class="menu-left"><a class="menu-left-item" href="?page=home">Art - Creative Toys</a></li>
                    <li class="menu-left"><a class="menu-left-item" href="?page=home">Motor Toys</a></li>
                    <li class="menu-left"><a class="menu-left-item" href="?page=home">Building Toys</a></li>
                    <li class="menu-left"><a class="menu-left-item" href="?page=home">Music Toys</a></li>
                    <li class="menu-left"><a class="menu-left-item" href="?page=home">Fantasy Toys</a></li>
                    <li class="menu-left"><a class="menu-left-item" href="?page=home">Spring Toys</a></li>
                    <li class="menu-left"><a class="menu-left-item" href="?page=home">Summer Toys</a></li>
                    <li class="menu-left"><a class="menu-left-item" href="?page=home">Autumn Toys</a></li>
                    <li class="menu-left"><a class="menu-left-item" href="?page=home">Winter Toys</a></li>
                </ul>
            </div>
        </div> -->
	 <a href="?page=management">
		<button id="manage" onclick="hide(2)" title="Add - Update - Delete - Statistic Management">
			<i class="fas fa-tasks"></i>
		</button>
	</a>
        <button id="ontop" onclick="scrollToTop()">
            <i class="fas fa-chevron-circle-up"></i>
        </button>
        <?php
            if(isset($_GET['page'])){
                $page = $_GET['page'];
                if($page=="loginsignup"){
                    include_once("LoginSignUp.php");
                }
                if($page=="management"){
                    include_once("Management.php");
                }
                
            }
            else {
                include_once("Home.php");
            }
	    ?>
        
        <!-- <?php
           // $sql = pg_query($con, "SELECT * FROM public.index");
            //if(pg_num_rows($sql)>0){
              //  while($result = pg_fetch_assoc($sql)){
        ?>-->

        <!-- <div style="width:100%; height:fit-content; background-color:plum;">
            <ul>
                <li>Name: <b><?php echo $result['name']; ?></b></li>
                <li>Class: <b><?php echo $result['class']; ?></b></li>
                <li>Birth: <b><?php echo $result['birth']; ?></b></li>
                <li>Phone: <b><?php echo $result['phone']; ?></b></li>
            </ul>
        </div> -->
        <!-- // <?php 
             //   }
           // }
          //  else{
           //     function alert(){
            //        alert("No result");
             //   }
               // alert();
           // }
        ?> 
           -->
        <div class="footer">
            <div class="footer-header">
                <b class="footer-name">About Us</b>
            </div>
            <ul class="footer-block">
                <li class="footer-item">Support by
                    <div class="support-item">
                        <img class="icon-size" src="image/Community-social-media-icons.png" alt="Community-social-media-icons">
                    </div>
                </li>
                <li class="footer-item">Contents
                    <ul class="listcontent">
                        <li class="listContent-item"><a class="footer-infor" href="">Technology toys</a></li>
                        <li class="listContent-item"><a class="footer-infor" href="">Skills Toys<!--Foods--></a></li>
                        <li class="listContent-item"><a class="footer-infor" href="">Fantasy Toys<!--Challenges--></a></li>
                        <li class="listContent-item"><a class="footer-infor" href="">Art Toys<!--Vlogs--></a></li>
                        <li class="listContent-item"><a class="footer-infor" href="">Building Toys<!--Reactions--></a></li>
                    </ul>
                </li>
                <li class="footer-item">Channels<!--Operating Platforms-->
                    <ul class="listcontent">
                        <li class="listContent-item"><a class="footer-infor" href="">YouTube</a></li>
                        <li class="listContent-item"><a class="footer-infor" href="">Facebook</a></li>
                        <!--<li class="listContent-item"><a class="footer-infor" href="">Nonolive</a></li>
                        <li class="listContent-item"><a class="footer-infor" href="">NimoTV</a></li>
                        <li class="listContent-item"><a class="footer-infor" href="">Xbox</a></li>-->
                    </ul>
                </li>
                <li class="footer-item">Contacts
                    <ul class="listcontent">
                        <li class="listContent-item">Email: <a class="footer-infor" href="">abc123@gmail.com</a></li>
                        <li class="listContent-item">Phone: <a class="footer-infor" href="">0123456789</a></li>
                        <li class="listContent-item">Facebook: <a class="footer-infor" href="">fb.com</a></li>
                        <li class="listContent-item">Twitter: <a class="footer-infor" href="">ATNToysShop<!--RankingSocialNetworks--></a></li>
                        <li class="listContent-item">Instagram: <a class="footer-infor" href="">ATNToysShop<!--RankingSocialNetworks--></a></li>
                    </ul>
                </li>
            </ul>
            <div class="copyright">&copy;ATN Copyright</div>
        </div>
    </div>
</body>
</html>
