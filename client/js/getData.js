const getData=async (url,fcName)=>{
    const response=await fetch(url);
    const data=await response.json();
    fcName(data)
}
const postData=async (url,configobj, fcName)=>{
    const response=await fetch(url, configobj);
    const data=await response.json();
    fcName(data)
}
const logoutAdmin=async (url)=>{
    const response=await fetch(url);
    const data=await response.json();
    if(data) location.href='./index.php'
}