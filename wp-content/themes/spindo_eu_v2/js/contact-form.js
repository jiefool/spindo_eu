function checkRecaptcha(){    
  if (grecaptcha.getResponse().length === 0){
    alert("Please check you're not a robot.");   
    return false;   
  }else{    
    return true;    
  }
}