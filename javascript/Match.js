function select(id){
  var seasonid=id.getAttribute('id');

  if(seasonid=='spr'){
    document.querySelector("td[data-name='001']").style.backgroundColor="#D82D19";
    document.querySelector("td[data-name='002']").style.backgroundColor="#E88452";
    document.querySelector("td[data-name='003']").style.backgroundColor="#FBB1B1";
    document.querySelector("td[data-name='004']").style.backgroundColor="#EEF3B1";
    document.querySelector("td[data-name='005']").style.backgroundColor="#94DA9B";
    document.querySelector("td[data-name='006']").style.backgroundColor="#BAEBD7";
    document.querySelector("td[data-name='007']").style.backgroundColor="#64BDCD";
    document.querySelector("td[data-name='008']").style.backgroundColor="#2E6A9C";
  }
  else if(seasonid=='sum'){
    document.querySelector("td[data-name='001']").style.backgroundColor="#E79CBB";
    document.querySelector("td[data-name='002']").style.backgroundColor="#F0C6DE";
    document.querySelector("td[data-name='003']").style.backgroundColor="#C4ADD9";
    document.querySelector("td[data-name='004']").style.backgroundColor="#DDD6F7";
    document.querySelector("td[data-name='005']").style.backgroundColor="#A4BDF7";
    document.querySelector("td[data-name='006']").style.backgroundColor="#446BBA";
    document.querySelector("td[data-name='007']").style.backgroundColor="#BAEBD7";
    document.querySelector("td[data-name='008']").style.backgroundColor="#EEF3B1";
}
  else if(seasonid=='aut'){
    document.querySelector("td[data-name='001']").style.backgroundColor="#942C21";
    document.querySelector("td[data-name='002']").style.backgroundColor="#E88452";
    document.querySelector("td[data-name='003']").style.backgroundColor="#F7C6A7";
    document.querySelector("td[data-name='004']").style.backgroundColor="#DEB501";
    document.querySelector("td[data-name='005']").style.backgroundColor="#527318";
    document.querySelector("td[data-name='006']").style.backgroundColor="#658B8C";
    document.querySelector("td[data-name='007']").style.backgroundColor="#14546D";
    document.querySelector("td[data-name='008']").style.backgroundColor="#342714";
  }
  else if(seasonid=='win'){
    document.querySelector("td[data-name='001']").style.backgroundColor="#852A53";
    document.querySelector("td[data-name='002']").style.backgroundColor="#300E55";
    document.querySelector("td[data-name='003']").style.backgroundColor="#2E6A9C";
    document.querySelector("td[data-name='004']").style.backgroundColor="#15546D";
    document.querySelector("td[data-name='005']").style.backgroundColor="#877873";
    document.querySelector("td[data-name='006']").style.backgroundColor="#2A1210";
    document.querySelector("td[data-name='007']").style.backgroundColor="#B6BBBE";
    document.querySelector("td[data-name='008']").style.backgroundColor="#0C172A";
  }
}

function changecloth(id){
  var colorid=id.getAttribute('id');
  var cloth=document.getElementById("section1_cloth");
  var color=window.getComputedStyle(document.querySelector("td[id='"+colorid+"']")).backgroundColor;
  cloth.style.backgroundColor=color;
}
