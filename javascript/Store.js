function over(id){
  var test=id.getAttribute('id');
  var testdiv=document.getElementById(test);
  var testp=document.getElementById(test+"_p");

  testp.style.color="red";
}

function out(id){
  var test=id.getAttribute('id');
  var testdiv=document.getElementById(test);
  var testp=document.getElementById(test+"_p");

  testdiv.style.border="0px";
  testp.style.color="black";
}
