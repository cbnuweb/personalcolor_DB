function Reservation_Info(){
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