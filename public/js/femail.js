  $.validator.addMethod("validateName", function(value, element) {
    var v_regex=/^([.a-zA-Z0-9_-])+@([.a-zA-Z0-9-])+((\.[a-zA-Z0-9]{1,256}){1,2})$/;
    value=""+value;
    if(value){
        if(!v_regex.test(value)){
          return false;
        }else{
          return true;
        }
      }else{
        return null;
      }
  }, "Your email address must be in the format of name@domain.com");