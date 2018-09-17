<nav class="navbar navbar-light bg-light sticky-top flex-md-nowrap p-0">
  <a class="navbar-brand col-sm-3 col-md-9 mr-0 fax-header-font" href="#">Pos-sustav</a>
  <button type="button" class="btn btn-warning mr-2">Ascending</button>
  <button type="button" class="btn btn-warning">Descending</button>
  <ul class="navbar-nav px-3">
    <li class="nav-item dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i id="welcome">Welcome </i><b id="konobar"><?php echo $_SESSION["username"] ?></b>
          </button>


      <div class="dropdown-menu dropdown-menu-right fax-logout-align">

        <span id="logout"><a href="./logout.php" class="text-right">Log Out</a></span><br>
        <span id="adminpage"><a href="./admin_page.php" class="text-right text-info">Admin panel</a></span><br>
        <span id="kupovine"><a href="./all_transactions.php" class="text-right text-info">Sve kupovine</a></span><br>
      </div>
    </li>
  </ul>
</nav>
