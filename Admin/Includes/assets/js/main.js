var statuss = document.getElementById("statuss");
var rolee = document.getElementById("rolee");

if(statuss.innerHTML == "Active"){
    statuss.setAttribute('style','color:#99d841');
}else{
    statuss.setAttribute('style','color:red');
}


if(rolee.innerHTML == "admin"){
    rolee.innerHTML = "Admin";
    rolee.setAttribute('style','color:#00f0f0');
}else{
    rolee.innerHTML = "User";
    rolee.setAttribute('style','color:#ff02ff');
}