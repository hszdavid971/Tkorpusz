<div class="row content-center align-items-center my-5" id="telephely">
    <div class="container2 col-lg-7 col-md-7 col-sm-12">
    <div class="iframe-wrapper2"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2726.907050711386!2d19.675870003063263!3d46.88487712150837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4743dbcac3c29a2f%3A0x5b59a167233c07d4!2sT-Korpusz%20Innova%20Kft.!5e0!3m2!1shu!2shu!4v1700766811201!5m2!1shu!2shu" width="600" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
</div>
    <div class="col-lg-5 col-md-5 col-sm-12" id="nyitvatartas">
        <h1 class="font-weight-light">Telephely és nyitvatartás</h1>
        <p>Cím: Kecskemét, Kiskőrösi út 11-13, 6000</p>
        <p>tkorpuszinnovakftweb@gmail.com</p>
        <p>Adószám: 27525922-2-03</p>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col" class="table-dark">Nap</th>
                <th scope="col" class="table-dark">Nyitás-Zárás</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">Hétfő</th>
                <td>8:00-16:00</td>
            </tr>
            <tr>
                <th scope="row">Kedd</th>
                <td>8:00-16:00</td>
            </tr>
            <tr>
                <th scope="row">Szerda</th>
                <td>8:00-16:00</td>
            </tr>
            <tr>
                <th scope="row">Csütörtök</th>
                <td>8:00-16:00</td>
            </tr>
            <tr>
                <th scope="row">Péntek</th>
                <td>8:00-16:00</td>
            </tr>
            <tr>
                <th scope="row">Szombat</th>
                <td>Zárva</td>
            </tr>
            <tr>
                <th scope="row">Vasárnap</th>
                <td>Zárva</td>
            </tr>
            </tbody>
        </table>
        <a class="btn btn-xlg" href="tel:+36-30-5121311" style="background-color:#c19a6b; color: white;">
            <span class="glyphicon glyphicon-earphone"></span>+36305121311
        </a>
    </div>
</div>
    <div class="row" id="emailkuldo">
        <script src="kuldes.js"></script>
        <div class="col-lg-7 col-md-7 col-sm-12 my-2">
        <img class="img-fluid rounded mb-2" src="assets/emailkep.png" alt="..."/>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-12 my-5 content-center">
            <h2 id="emailh2" class="my-2 text-center">Lépjen velünk kapcsolatba</h2>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email-cím</label>
                <input type="email" class="form-control" placeholder="tkorpuszinnovakftweb@gmail.com" id="email" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tárgy</label>
                <input type="text" class="form-control" placeholder="Tárgy" id="targy" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Üzenet</label>
                <textarea class="form-control" id="message" rows="3" maxlength="300" required></textarea>
                <div id="count">
                    <span id="currentlength">0</span>
                    <span id="maxlength"> /300</span>
                </div>


            </div>
            <button class="btn" style="background-color:#c19a6b; color: white;"  id="emailgomb" href="#tudnivalok" onclick="Kuldes(event)">Küldés</button>
            <p id="alert"></p>
        </div>
    </div>
</div>

<script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
</script>
<script type="text/javascript">
    $('textarea').keyup(function(){
        var szamolo=$(this).val().length,
        currentlength=$('#currentlength'),
        maxlength=$('#maxlength'),
        count=$('#count');
        currentlength.text(szamolo);

    });
</script>
<script type="text/javascript">
   (function(){
      emailjs.init("dNs2yxzUfRJpYAlaT");
   })();
</script>