<div class="row">
  <div class="col"></div>
  <div class="col">
    <form action="./create_konobar.php" method="post">
      <fieldset>
        <legend>Novi konobar</legend>
        <div class="form-group">
          <label for="imeKonobara">Ime</label>
          <input type="text" name="imeKonobara" class="form-control" id="imeKonobara" aria-describedby="Ime" placeholder="Unesite ime" required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="sifraKonobara" class="form-control" id="password" placeholder="Password" required>
        </div>
        <div class="form-group">
          <label for="godineKonobara">Godine</label>
          <input type="number" name="godineKonobara" class="form-control" id="godineKonobara" placeholder="Godine" required>
        </div>
        <button type="submit" class="btn btn-primary" value="submitKonobar">Submit</button>
      </fieldset>
    </form>

  </div>
  <div class="col">
    <form action="./create_artikal.php" method="post">
      <fieldset>
        <legend>Novi artikal</legend>
        <div class="form-group">
          <label for="nazivArtikala">Naziv artikla</label>
          <input type="text" name="nazivAritkla" class="form-control" id="nazivArtikala" aria-describedby="nazivArtikala" placeholder="Unesite naziv" required>
        </div>
        <div class="form-group">
          <label for="selectCategory">Izaberite kategoriju</label>
          <select name="kategorijaAritkla" class="form-control" id="selectCategory">

            <?php include './display_categories.php';?>



          </select>
        </div>
        <div class="form-group">
          <label for="cijenaArtikla">Cijena</label>
          <input type="number" name="cijenaAritkla" class="form-control" id="cijenaArtikla" placeholder="Cijena u KM" required>
        </div>
        <div class="form-group">
          <label for="slikaArtikla">Slika</label>
          <input type="url" name="slikaAritkla" class="form-control" id="slikaArtikla" placeholder="Url slike" required>
        </div>
        <button type="submit" class="btn btn-primary" value="submitArtikal">Submit</button>
      </fieldset>
    </form>



  </div>

  <div class="col">



  </div>
</div>



