function validateForm () {
    var x= document.forms[myform][username].value;
    if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
    }
    var y= document.forms[myform][fname].value;
    if (y == null || y == "") {
        alert("Name must be filled out");
        return false;
    }
    var z= document.forms[myform][lname].value;
    if (z == null || z == "") {
        alert("Name must be filled out");
        return false;
    }
  
  }
function home() {
    document.getElementById("section1").innerHTML = "<h2>Hello World</h2>";
}
function aboutMe() {
    document.getElementById("section1").innerHTML = "<h2>My name is Fouad Makdissy</h2>";
}
function addGuest(){
    window.open("popupform.php");
}
function viewGuests(){
    window.open("guestbook.php");

}

function randomGenerator(){
var myrandom=Math.round(Math.random()*5);
var link1="http://slashdot.org/";
var link2="http://www.thinkgeek.com/";
var link3="http://despair.com/";
var link4="http://www.redbubble.com/";
var link5="http://googleresearch.blogspot.com/";
var link6="https://developers.google.com/speed/libraries/";
    if (myrandom==0)
        return link1;
    else if (myrandom==1)
        return link2;
    else if (myrandom==2)
        return link3;
    else if (myrandom==3)
        return link4;
    else if (myrandom==4)
        return link5;
    else if (myrandom==5)
        return link6; }
