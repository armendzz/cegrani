   (function () { 

var aqi = document.getElementById("circle").getAttribute("value");

if (aqi <= 50) {
document.getElementById("circle").style.backgroundColor = '#05720b';
}
else  
if (aqi >= 51 && aqi <= 100)  
{
document.getElementById("circle").style.backgroundColor = '#dde02b';
}  
else  
if (aqi >= 101 && aqi <= 150)  
{
document.getElementById("circle").style.backgroundColor = '#d48d09';
}
else  
if (aqi >= 151 && aqi <= 200)  
{
document.getElementById("circle").style.backgroundColor = '#d40909';
}
else  
if (aqi >= 201 && aqi <= 300)  
{
document.getElementById("circle").style.backgroundColor = '#580b52';
}
else  
if (aqi > 300 )  
{
document.getElementById("circle").style.backgroundColor = '#580b0b';
}

})();
