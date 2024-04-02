<div class="card rounded p-5 m-5" id="loginpanel">
  <div class=" col-lg-4 col-md-6 col-sm-12 container py-2 content-center">
  <form>
    <div class="form-group my-3">
      <input type="username" class="form-control" name="felhasznalonev" aria-describedby="usernameHelp" placeholder="Felhasználónév">
    </div>
    <div class="form-group my-3">
      <input type="password" class="form-control" name="jelszo" placeholder="Jelszó">
      <small id="tipp" class="form-text text-muted">Soha ne oszd meg mással a jelszavadat.</small>
    </div>
  <button type="button" class="btn text-white" id="belepesbutton" onclick="belepteto(event)">Belépés</button>
  </form>
  </div>
</div>

<script>
  function belepteto(e){
    e.preventDefault();
  
    /*let username=document.getElementById("felhasznalonev").value;
    let pw=document.getElementById("jelszo").value;*/
    const formData=new FormData(document.querySelector("form"));
    let configobj={
        method:"POST",
        body: formData
    }
    postData('../server/login.php',configobj,renderresult)


  }
  function renderresult(data){
    console.log(data);
    if(data.msg=="ok") location.href="./index.php"
  }
</script>