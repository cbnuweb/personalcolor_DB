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

function changebg(id,test){
  var next=id.getAttribute('id');
  var imgsrc=window.getComputedStyle(document.querySelector(".testinsection_image")).backgroundImage;
  var temp=imgsrc.split('img/t');
  var temp2=temp[1];
  var imgnum=temp2.substring(0,1);
  if(next=="left"){
    if(imgnum==1){
      imgnum=4;
    }
    else{
      imgnum--;
    }
  }
  else{
    if(imgnum==4){
      imgnum=1;
    }
    else {
      imgnum++;
    }
  }
  imgsrc="url('../img/t"+imgnum+".png')";
  console.log(imgsrc);
  if(test==1){
    document.getElementById("testinsection_cam").style.backgroundImage=imgsrc;
  }
  else if(test==2){
    document.getElementById("testinsection_img").style.backgroundImage=imgsrc;
  }
}

function select_image(){
  var imgsrc=window.getComputedStyle(document.querySelector(".testinsection_image")).backgroundImage;
  var temp=imgsrc.split('img/t');
  var temp2=temp[1];
  var imgnum=temp2.substring(0,1);

  if(imgnum==1){
    location.href='Spring.html';
  }
  else if(imgnum==2){
    location.href='Summer.html';
  }
  else if(imgnum==3){
    location.href='Autumn.html';
  }
  else if(imgnum==4){
    location.href='Winter.html';
  }
}

function select(id){
  var answer = id.getAttribute("id");
  var answer_div = document.getElementById(answer+"_div");

  var arr2=new Array();

  for(var i=1; i<19; i++){
    arr2[i] = document.getElementById("q"+i+"_div");
  }

  for(var i = 1; i<19; i++){
    arr2[i].style.display='none';
  }
  answer_div.style.display="block"
}
