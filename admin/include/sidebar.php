
    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="" class="logo">Admin<span class="lite">Page</span></a>
      <!--logo end-->

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          
          <!-- inbox notificatoin start-->
          
          <!-- inbox notificatoin end -->
          <!-- alert notification start-->
          
          <!-- alert notification end-->
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/avatar1_small.jpg">
                            </span>
                            <span class="username"><?php echo $_SESSION['username']; ?></span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li>
                <a href="index.php?changepass"><i class="icon_key_alt"></i> Change Password</a>
              </li>
             
              <li>
                <a href="../logout.php"><i class="icon_key_alt"></i> Log Out</a>
              </li>
             
            </ul>
  
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="index.php?dashboard">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Company</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="index.php?addcompany">Add company</a></li>
              <li><a class="" href="index.php?viewcompany">View Company</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a  class="" href="index.php?candidatelist">
                          <i class="icon_document_alt"></i>
                          <span>Candidate List</span>
                          
                      </a>
          </li>
          <li class="sub-menu">
            <a  class="" href="index.php?joblist">
                          <i class="icon_document_alt"></i>
                          <span>Jobs</span>
                          
                      </a>
          </li>

   


        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>