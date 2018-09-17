<nav class="navbar navbar-light bg-light sticky-top flex-md-nowrap p-0">
  <a class="navbar-brand col-sm-3 col-md-9 mr-0 fax-header-font" href="#">Pos-sustav</a>
  <input class="form-control form-control-dark" type="text" placeholder="Search" aria-label="Search"
    onkeyup="searchCurrentMenu(this.value)">
  <ul class="navbar-nav px-3">
    <li class="nav-item dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i id="welcome">Welcome </i><b id="konobar"><?php echo $_SESSION["username"] ?></b>
          </button>


      <div class="dropdown-menu dropdown-menu-right fax-logout-align">

        <span id="logout"><a href="./logout.php" class="text-right">Log Out</a></span>
      </div>
    </li>
  </ul>
</nav>
