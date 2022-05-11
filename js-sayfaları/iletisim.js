var x = document.forms["benimForm"]["ad"].value;
var y = document.forms["benimForm"]["soyad"].value;
var t = document.forms["benimForm"]["sifre"].value.toString();
var z = document.forms["benimForm"]["eposta"].value;
var a = document.forms["benimForm"]["form-tipi"].value;
var s = document.forms["benimForm"]["cinsiyet"].value;
var d = document.forms["benimForm"]["universite"].value;
var b = document.forms["benimForm"]["mesaj"].value;

function formKontrol() {

    x = document.forms["benimForm"]["ad"].value;
    if(x.length > 25 || x == "" || x == null) {
        alert("adınız 25 harfi geçmemelidir!!!<br>adınız boş olmamalıdır!!!");
        return false;
    }
    
    y = document.forms["benimForm"]["soyad"].value;
    if(y.length > 15 || y == "" || y == null) {
        alert("soyadınız 15 harfi geçmemeidir!!!<br>soyadınız boş olmamalıdır!!!");
        return false;
    }

    z = document.forms["benimForm"]["eposta"].value;
    var sayac = 0;
    for(i=0; i<z.length; i++) {
        if(z[i] == "@")
        sayac++;
    }
    if(sayac == 0 || z == "" || z[0] == "@") {
        alert("mail adresi hem @ operatoru içermeli hem boş olmamalıdır");
        return false;
    }
    
    t = document.forms["benimForm"]["sifre"].value.toString();
    if(t != z.toString().substring(0,t.length) || t == "") {
        alert("sifre hatalıdır!!!<br><b>sifreniz epostanızdaki @ operatorunden onceki harflerdir</b>");
        return false;
    }
    
    s = document.forms["benimForm"]["cinsiyet"].value;
    if(s == "") {
        alert("Cinsiyet belirtilmelidir");
        return false;
    }
    
    d = document.forms["benimForm"]["universite"].value;
    if(d != "sau" && d != "subu" && d == "") {
        d = "belirtilmedi";
    }

    b = document.forms["benimForm"]["mesaj"].value;
    if(b == "") {
        alert("mesaj kısmı doldurulmalıdır!!!!");
        return false;
    }    
}