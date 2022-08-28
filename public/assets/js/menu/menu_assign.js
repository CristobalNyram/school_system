$(document).ready(()=>{

    let parent_check =document.querySelector('.parent_check');
    parent_check.addEventListener('change',()=>{
               if(parent_check.checked)
               {
                console.log(parent_check);
               }
    });

});
