<div class="row content-center align-items-center my-5">
    <div class="container2 col-lg-7 col-md-7 col-sm-12">
    <div class="iframe-wrapper2"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2726.907050711386!2d19.675870003063263!3d46.88487712150837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4743dbcac3c29a2f%3A0x5b59a167233c07d4!2sT-Korpusz%20Innova%20Kft.!5e0!3m2!1shu!2shu!4v1700766811201!5m2!1shu!2shu" width="600" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
</div>
    <div class="col-lg-5 col-md-5 col-sm-12" id="kontakt">
        <h1 class="font-weight-light">Telephely és nyitvatartás</h1>
        <p>Cím: Kecskemét, Kiskőrösi út 11-13, 6000</p>
        <p>mail@email.com</p>
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
                <td>8:00-17:00</td>
            </tr>
            <tr>
                <th scope="row">Kedd</th>
                <td>8:00-17:00</td>
            </tr>
            <tr>
                <th scope="row">Szerda</th>
                <td>8:00-17:00</td>
            </tr>
            <tr>
                <th scope="row">Csütörtök</th>
                <td>8:00-17:00</td>
            </tr>
            <tr>
                <th scope="row">Péntek</th>
                <td>8:00-17:00</td>
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
        <a class="btn btn-xlg" href="tel:123-456-7890" style="background-color:#c19a6b; color: white;">
            <span class="glyphicon glyphicon-earphone"></span>+36701234567
        </a>
    </div>
</div>
    <div class="row">
        <div class="col-lg-7 col-md-7 col-sm-12 my-5">
        <img class="img-fluid rounded mb-4 mb-lg-0" src="assets/kep1.jpg" alt="..."/>
        </div>
        <form action="#" method="mail">
        <div class="col-lg-5 col-md-5 col-sm-12 my-5 content-center">
            <h2 id="emailh2" class="my-2 text-center">Lépjen velünk kapcsolatba</h2>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Név</label>
                <input name="nev" type="text" class="form-control" id="exampleFormControlInput" placeholder="Név">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email-cím</label>
                <input name="email" type="email" class="form-control" id="exampleFormControlInput2" placeholder="TKorpuszkft@gmail.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tárgy</label>
                <input name="targy" type="text" class="form-control" id="exampleFormControlInput3" placeholder="Tárgy">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Üzenet</label>
                <textarea name="uzenet" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
            </div>
            <div class="mb-3">
                 <label for="formFile" class="form-label">Csatolmány</label>
                <input name="fajl" class="form-control" type="file" id="formFile">
            </div>
            <input type="checkbox" name="check" id="checkid" required>Elfogadom a felteteleket.
            <button name="send" type="submit" class="btn" style="background-color:#c19a6b; color: white;" id="emailgomb">Küldés</button>
        </div>
        </form>
    </div>
</div>

<?php

    // TESZTHEZ: Hogy minden hibĂĄt kiĂ­rjon.
    ini_set('display_errors', 1);
    ini_set('log_errors', '0');
    ini_set('error_reporting', -1);
    header('Content-type:text/plain;charset=UTF-8');

    // PHPMailer 5.2.16-tal ellenĹriztem.
    // https://github.com/PHPMailer/PHPMailer/archive/master.zip
    require 'phpmailer/PHPMailerAutoload.php';

    $mai             = new PHPMailer();

    $nev=htmlentities($_POST['nev']);
    $email=htmlentities($_POST['email']);
    $targy=htmlentities($_POST['targy']);
    $uzenet=htmlentities($_POST['uzenet']);
    $fajl=htmlentities($_POST['fajl']);

    $mail->SMTPDebug = 3;                   // TESZTHEZ: Mindent kiĂ­r.
    $mail->isSMTP();
    $mail->SMTPAuth  = true;
    $mail->Username  = $_POST['email'];  // Hozd lĂŠtre cPanelen! DKIM, SPF!
    $mail->Password  = 'ntfemjvjwsnodkqc';
    $mail->CharSet   = 'UTF-8';
    $mail->From      = $_POST['email'];
    $mail->FromName  = $_POST['nev'];
    $mail->addAddress('tkorpuszinnovakftweb@gmail.com');
    $mail->WordWrap  = 50;                  // KompatibilitĂĄsĂŠrt.
    $mail->Subject   = 'Teszt';
    $mail->Body      = 'Ez egy teszt e-mail.';

    if (!$mail->send())
    {
        exit("\n\nHiba történt:\n\n" . $mail->ErrorInfo);
    }
    else
    {
        exit("\n\nNincs hibaüzenet.");
    }

?>