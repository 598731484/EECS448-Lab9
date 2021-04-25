var pen = document.getElementById("pen");
var pan = document.getElementById("pan");
var pin = document.getElementById("pin");
var number = document.getElementById("number");
var password = document.getElementById("password");
var free= document.getElementById("free");
var overNight= document.getElementById("overNight");
var threeDay= document.getElementById("threeDay");
function showMessage()
{
	var pen = document.getElementById("pen").value;
	var pan = document.getElementById("pan").value;
    var pin = document.getElementById("pin").value;
    var password = document.getElementById("password").value;

    if(pen=="" && pan=="" && pin=="")
    {
		number.style.display="";
	}
    if(!(/(^[1-9]\d*$)/.test(pen)) && !(/(^[1-9]\d*$)/.test(pan)) && !(/(^[1-9]\d*$)/.test(pin)))
    {
		number.style.display="";
    }
    
    var m = /^\w+((.\w+)|(-\w+))@[A-Za-z0-9]+((.|-)[A-Za-z0-9]+).[A-Za-z0-9]+$/;
    var n = document.getElementById("name");
　　 if(n.value === "")
    {
　　	mail.style.display="";
　　 }
    else if(!m.test(n.value))
    {
　		mail.style.display="";
　　 }

    if(password==="")
    {
        pass.style.display="";
    }

    if(free.checked==false && overNight.checked==false && threeDay.checked==false)
    {
		ship.style.display="";
	}

}