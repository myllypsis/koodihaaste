<!DOCTYPE html>
<html lang="fi" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Koodihaaste</title>
    <meta name="viewport" content="initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </head>
  <body>
    <div class="container">


      <div class="row">
        <div class="col-12 screen">
          <h1>Kulutuslaskuri</h1>

          <div class="form-group">
            <label for="car_select">Valitse auto</label>
            <select class="form-control" id="car_select" name="car_select">
              <option value="a">A</option>
              <option value="b">B</option>
              <option value="c">C</option>
            </select>
          </div>

          <div class="form-group">
            <label for="distance">Matkan pituus (km)</label>
            <input type="tel" name="distance" class="form-control" id="distance">
          </div>


          <div class="row">
            <div class="form-group col-6">
              <label for="speed1">Nopeus A (km/h)</label>
              <input type="tel" name="speedInputA" id="speedInputA" class="form-control">
            </div>
            <div class="form-group col-6">
              <label for="speed2">Nopeus B (km/h)</label>
              <input type="tel" name="speedInputB" id="speedInputB" class="form-control">
            </div>
          </div>
          <button type="button" class="btn btn-primary btn-lg btn-block" id="calculate">Laske</button>


          <div class="row">
            <div class="col-6">
              <p>Kulutus:</p>
              <p class="result" id="consumptionA"></p>
              <p>matka aika:</p>
              <p class="result" id="traveltimeA"></p>
            </div>
            <div class="col-6">
              <p>Kulutus:</p>
              <p class="result" id="consumptionB"></p>
              <p>matka aika:</p>
              <p class="result" id="traveltimeB"></p>
            </div>
          </div>


          <div class="alert alert-success end_jargon_div">
            <p id="end_jargon"></p>
          </div>

        </div>
      </div>
    </div>
    <script src="main.js"></script>
  </body>
</html>




