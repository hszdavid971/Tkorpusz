function  Kuldes(e){

    e.preventDefault()

    let em=document.getElementById('email').value
    let t=document.getElementById('targy').value
    let m=document.getElementById('message').value
    

    if(!em||!t||!m){
        renderMsg('Az összes kitöltése kötelező!')
        return

    }
    else{
        if(!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(em)){
            renderMsg('Az email mező kitöltése nem megfelelő!')
            return
        }
    }


    const parameterek={

        email: em,
        targy: t,
        message:m
    }
    const serviceid='service_gt8m0ij'
    const templateid='template_m67twne'
    emailjs.send(serviceid, templateid,parameterek)
    .then(response=>{
        console.log(response)
        renderMsg(1)
    })
    .catch(err=>{
        console.log(err)
        renderMsg('Valami hiba történt')
    })
    function renderMsg(k){
        if(k==1){

        document.getElementById("alert").innerHTML = `
        <br>
            <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Email elküldve!</h4>
            <hr>Köszönjük hogy írtál, hamarosan válaszolunk.</p>
            </div>
        `
        }
        else{
            console.log(k)
            document.getElementById("alert").innerHTML = `
        <br>
            <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">Valami hiba történt!</h4>
            <hr>
            <p class="mb-0">${k}</p>
            </div>
        `
        }
    }
}
