function  Kuldes(){
    const parameterek={

        from_name: "Tesztnevnek",
        to_name: "Tesztnetol",
        email:"tesztnevnek@gmail.com"
    }
    const serviceid='service_52wlv4c'
    const templateid='template_m5he7cm'
    emailjs.send(serviceid, templateid,parameterek)
    .then(response=>console.log(response))
    .catch(err=>console.log(err))
}
