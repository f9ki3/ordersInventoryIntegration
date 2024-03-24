<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

    <div class="flex">

        <a href="home.php" class="logo">OIMS_V2</a>

        <nav class="navbar">
            <ul>
                <li><a href="home">Orders</a></li>
                <li><a href="product">Products</a>
                    <!-- <ul>
                        <li><a href="about.php">product</a></li>
                        <li><a href="contact.php">contact</a></li>
                    </ul> -->
                </li>
                <li><a href="accounts">Accounts</a>
                    <!-- <ul>
                        <li><a href="login.php">login</a></li>
                        <li><a href="register.php">register</a></li>
                    </ul> -->
                </li>
            </ul>
        </nav>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="search_page.php" class="fas fa-search"></a>
            <div id="user-btn" class="fas fa-user"></div>
        </div>

        <div class="account-box">
            <a href="logout.php" class="delete-btn">logout</a>
        </div>

    </div>

</header>