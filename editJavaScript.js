 function saveText(n,i){
            var xr= new XMLHttpRequest();
            var url="saveNewText.php?err="+i;
            var text = document.getElementById(n).innerHTML;
            var vars = "newText="+text;
            xr.open("POST",url,true);
            xr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            xr.send(vars);
        }