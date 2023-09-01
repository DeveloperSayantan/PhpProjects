<?php
	include_once("connection.php");
?>
<html>
    <head>
        <link type="text/css" rel="stylesheet" href="css/view.css"/>
    </head>

        <body>
            
            <div id="wrapper">
                             <div class="upper_left">
                                    <a class="link" href="dashboard.html"><h2>DASHBOARD</h2></a>
                            </div>
                                 <div class="upper_right">   
                                     <a class="active" href="login.html">Log out</a>
                                 </div>
                            </div>
                        </div>
                            <div class="menu">
                                <nav>
                                    <ul>
                                    <div class="dropdown">
                                <button class="dropbtn">Category
                                  <i class="fa fa-caret-down"></i>
                                </button>
                                <div class="dropdown-content">
                                  <a href="category.html">Add Category</a>
                                  <a href="#">Edit Category</a>
                                </div>
                                </div>
                                <div class="dropdown">
                                <button class="dropbtn">Product
                                        <i class="fa fa-caret-down"></i>
                                      </button>
                                      <div class="dropdown-content">
                                        <a href="product.html">Add Product</a>
                                        <a href="viewprd.php">View Product</a>
                                        <a href="#">Edit Product</a>
                                      </div>
                                      </div>
                            <a class="active" href="#Sales"><li>Sales</li></a>
                            <a class="active" href="#Purchase"><li>Purchase</li></a>
                            <a class="active" href="#Vendor"><li>Vendor</li></a>
                            <div class="dropdown">
                                            <button class="dropbtn">Coustomer
                                                    <i class="fa fa-caret-down"></i>
                                                  </button>
                                                  <div class="dropdown-content">
                                                  <a href="addcoustomer.html">Add Coustomer</a>
                                                    <a href="viewcous.php">View Coustomer</a>
                                                    <a href="#">Edit Coustomer</a>
                                                  </div>
                                                  </div>
                                    </ul>
                                </nav> 
                            </div>
        <div class="box">
            <table name="table1" border="1">
                <tr>
                    <th>Category Id</th>
                    <th>Category Name</th>
                    <th>Category Type</th>
                </tr>
                <tr>
                <?php
                        $sql = "SELECT * FROM category";
	                    $result = mysqli_query($con, $sql);

	                    if (mysqli_num_rows($result) > 0) 
	                    {
   		                    while($row = mysqli_fetch_assoc($result))
   		                    {
                                    echo "<tr>";
                                    echo "<td>".$row['cat_id']."</td>";
                                    echo "<td>".$row['cat_name']."</td>";
                                    echo "<td>".$row['cat_typ']."</td>";
                                    echo "</tr>";
                            }
                        }
                    ?>
                </tr>
            </table>
        </div>
</body>
</html>                                            
                                    