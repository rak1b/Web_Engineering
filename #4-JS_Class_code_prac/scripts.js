document.body.onload(alert("Welcome To Our Website"));

function change_date(){
    document.getElementById('show_date').innerHTML=Date();
}

function change_text() {
    document.getElementById('show_func').innerHTML="The text Changed";
    
}

function sum() {
    var Num1 =  document.getElementById('Num1').value;
    var Num2 =  document.getElementById('Num2').value;
    var result =parseFloat(Num1) + parseFloat(Num2) ;

    document.getElementById('Sum').value = result;
    
}

var array = ["Python","C","Java","Javascript"]
document.getElementById('array').innerHTML = array;

