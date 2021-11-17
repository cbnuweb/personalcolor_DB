function warnEmpty(){ //댓글내용이 없을 경우 경고창 출
  alert("내용을 입력하세요");
}
function dateToString(date){ //subit클릭한 시간을 인자로 받아 출
  const dateString = date.toISOString();
  const dateToString = dateString.substring(0,10)+""+dateString.substring(11,19);
  return dateToString;
}
function submitComment(){ //testarea에서 받은 댓글을 추가
  const newcommentEL=document.getElementById("new-comment");
  const newcomment=newcommentEL.value.trim();

  if(newcomment){
    const dateEL = document.createElement('div');
    dateEL.classList.add('comment-date');
    const dateString = dateToString(new Date());
    dateEL.innerText = dateString;

    const contentEL = document.createElement('div');
    contentEL.classList.add('comment-content');
    contentEL.innerText = newcomment;

    const commentEL = document.createElement('div');
    commentEL.classList.add('comment-row');
    commentEL.appendChild(dateEL);
    commentEL.appendChild(contentEL);

    document.getElementById('comments').appendChild(commentEL);
    newcommentEL.value="";

    // const countEL=document.getElementById('comments-count');
    // const count=countEL.innerText;
    // countEL.innerText=parseInt(count)+1;
  }
  else warnEmpty();
}

// new vue({
//   el : '.star-rating',
//   data : {
//     ratings:''
//   }
// });
