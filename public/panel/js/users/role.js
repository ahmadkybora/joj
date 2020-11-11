function permissionsAll(){

    if(document.getElementById("permissionsAll").checked){
        document.getElementById("mypermission").classList.add("display-hidden");
    }else{
        document.getElementById("mypermission").classList.remove("display-hidden");
    }
}
