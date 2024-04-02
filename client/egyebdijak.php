<div class="row  align-items-center my-2">
<section class="pricing py-2">
  <div class="container">
    <div class="row my-2">
      <h1 class="text-center">Egyéb Árak</h1>

      <!-- ABS Táblázat -->
      <div class="col-12 my-2 text-center">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <table class=" table table-light table-hover table-bordered table-striped">
              <thead>
                <tr>
                  <th scope="col">Mértékegység</th>
                  <th scope="col">Bruttó ár Ft</th>
                  <th scope="col">Nettó ár Ft</th>
                </tr>
              </thead>
              <tbody id="tablazatbelso">
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="row my-2">
      <div class="col card text-bg-secondary mb-5 mb-lg-0">
        <div class="card-body content-center">
          <p class="py-2">Egyedi Bútorgyártás vagy egyéb Faipari munkálatok esetén Az ÁRAJÁLAT megállapítása személyes felmérést/ egyeztetést követően kerül meghatározásra.</p>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
<script>
    getData("../server/egyebdijak.php",arakmutat)
    function arakmutat(data){
      for(let obj of data){
        document.getElementById("tablazatbelso").innerHTML+=`
        <tr>
          <th scope="row">${obj.nev}</th>
          <td>${obj.brutto}</td>
          <td>${obj.netto}</td>
         </tr>
        `
      }
    }
</script>