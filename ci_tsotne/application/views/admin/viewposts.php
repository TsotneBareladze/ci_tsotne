
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Dark Admin</title>

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/local.css">
    <script src="<?php echo base_url(); ?>js/js.js"></script>

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

    <!-- you need to include the shieldui css and js assets in order for the charts to work -->
    <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
    <link id="gridcss" rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/dark-bootstrap/all.min.css" />

    <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
    <script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/gridData.js"></script>
<style>
*{ margin: 0;padding: 0; }
body{background: gray;}

#header{ color: blue; width: 100%;   background: orange;    height: 100px;   border-bottom: 5px solid blue;}
#sidebar {  width: 250px;   float: left; background: orange; border-right: 5px solid blue; height: 700px;}

#header > a> h1 {   color: black;   font-size: 3em; font-family: comic sans MS;     text-align: center; padding-top: 20px; }
#sidebar > h3{  text-align: center;     font-size: 2em; color: brown;padding-top: 10px;}
#welcome{   margin: 10px; padding: 10px; text-align: center; color: white;}

</style>
</head>
<body>
    <div id="wrapper">
          <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url();?>admin/main">Admin Panel</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul id="active" class="nav navbar-nav side-nav">
                    <li class="selected"><a href="<?php echo base_url();?>main/logout"><i class="fa fa-bullseye"></i> Log Out</a></li>
                    <li><a href="<?php echo base_url();?>admin/insert"><i class="fa fa-tasks"></i>  Add New Post</a></li>
                    <li><a href="<?php echo base_url();?>admin/viewposts"><i class="fa fa-globe"></i> View Posts</a></li>
                    <li><a href="">View Comments</a><i class="fa fa-list-ol"></i></a></li>
                   
                </ul>
                <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown messages-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Profile</a>
                        <ul class="dropdown-menu">
                           
                        </ul>
                    </li>
                    <li class="dropdown user-dropdown">
                        <a href="<?php echo base_url();?>main/logout" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Log Out</a>
                       
                    </li>
                    <li class="divider-vertical"></li>
                    <li>
                        <form class="navbar-search">
                            <input type="text" placeholder="Search" class="form-control">
                        </form>
                    </li>
                </ul>
            </div>
        </nav>

    <div id="page-wrapper">
           <table width="1000px" border="5" align="center" style="margin: 0 auto; color: #F5FFFA;" >
    <tr>
        <td colspan="10" align="center" bgcolor="#2a9fd6"><h1>View All Posts</h1></td>

    </tr>
    <tr bgcolor="#008080" >
        <th>Post No:</th>
        <th>Post Title:</th>
        <th>Post Author:</th>
        <th>Post Date:</th>
        <!-- <th>Post Image:</th> -->
        <!-- <th>Post Content:</th> -->
        <th>Update  Post:</th>
        <th>Delete  Post:</th>
                
    </tr>

        <?php foreach ($rows as $row): ?> 
        
        <?php

        $post_id = $row['id'];
        $post_title = $row['title'];
        $post_author= $row['author'];
        $post_date = $row['date'];
        
        ?>


        <tr style="color: ">
            <td align="center"><?php echo $post_id;?></td>
            <td align="center"><?php echo $post_title;?></td>   
            <td align="center"><?php echo $post_author;?></td>
            <td align="center"><?php echo $post_date;?></td>
            <!-- <td><?php echo $post_image;?></td>  -->
            <!-- <td style="overflow: hidden;"></td> -->
            <td align="center"><a href="<?php echo base_url().'admin/edit/'.$post_id?>"
            style="color: #2E8B57; hover: green;">Update Post</a></td>
            <td align="center"><a href="<?php echo base_url().'admin/delete/'.$post_id?>"
            style="color: #2E8B57;a:hover: green;">Delete Post</a></td>
            
        </tr>
    <?php endforeach; ?>


</table>
          </div>
    </div>
    <!-- /#wrapper -->

   
</body>
</html>
