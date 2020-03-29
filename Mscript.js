
function show1() {
var content= document.getElementById("s1").innerHTML;
if(content === "Show price") {
    document.getElementById("p1").innerHTML = "150 $";
    document.getElementById("s1").innerHTML = "Hide price";
}
else
    {document.getElementById("s1").innerHTML = "Show price";
     document.getElementById("p1").innerHTML=" ";
    }
}
function show2() {
    var content = document.getElementById("s2").innerHTML;
    if (content === "Show price") {
        document.getElementById("p2").innerHTML = "120 $";
        document.getElementById("s2").innerHTML = "Hide price";
    } else {
        document.getElementById("s2").innerHTML = "Show price";
        document.getElementById("p2").innerHTML = " ";
    }

}

function show3()
{
    var content= document.getElementById("s3").innerHTML;
    if(content === "Show price") {
        document.getElementById("p3").innerHTML = "80 $";
        document.getElementById("s3").innerHTML = "Hide price";
    }
    else
    {document.getElementById("s3").innerHTML = "Show price";
        document.getElementById("p3").innerHTML=" ";
    }
}