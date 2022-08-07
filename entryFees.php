<?php include('templates/header.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Entry Fees</title>

    <link
      rel="stylesheet"
      href="node_modules/bootstrap/dist/js/bootstrap.bundle.js"
    />
  </head>
  <body>
    <div class="container mt-3">
      <h2>Current Victoria Falls Entrance Fees Zambia</h2>
      <p>
        The standard Victoria Falls entrance fee is $30 for all tourists on both
        the Zambia and Zimbabwean side. SADC passport holders pay a reduced rate
        of $20 and Zambian locals pay $2. Just make sure you have your passport,
        ID or driver’s license on you to qualify for the discount.
        <br />
        <br />
        All nationalities receive a discount of 5% if they are in groups of 20,
        8% for groups above 40. Entrance fees for locals are in kwacha while for
        other nationalities its in dollars.
      </p>
      <table class="table">
        <thead>
          <tr>
            <th>Category</th>
            <th>Entrance Fee (US$)</th>
            <th>Entrance Fee (ZMK)</th>
          </tr>
        </thead>
        <tbody>
          <tr class="table-primary">
            <td>International & SADC visitors</td>
            <td>US$ 20</td>
            <td>ZMK 327.97</td>
          </tr>
          <tr class="table-danger">
            <td>Zambian visitors</td>
            <td>US$ 2</td>
            <td>ZMK 32.80</td>
          </tr>
          <tr class="table-warning">
            <td>Lunar tour (all visitors)</td>
            <td>US$ 30</td>
            <td>ZMK 491.96</td>
          </tr>
        </tbody>
      </table>
      <br />
      <a href="entryCost.html" class="btn btn-success">
        Calculate Total Cost Of Entry
      </a>
    </div>

    <script src="js/bootstrap.bundle.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
  </body>
</html>
<?php include('templates/footer.php');?>