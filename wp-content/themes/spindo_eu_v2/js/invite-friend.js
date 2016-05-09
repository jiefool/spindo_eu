var fieldCount = 0;

function addEmailForm(){
  jQuery("#invite-email").append('<div class="form-group" id="emailField'+fieldCount+'"><div class="input-group" id="invite-email"> <input type="email" class="form-control" name="referred-email[]" placeholder="Email" required /><div class="input-group-addon"><a href="javascript:removeEmail('+fieldCount+');"><span class="glyphicon glyphicon-minus-sign" aria-hidden="true"></span></a></div></div></div>');
  fieldCount++;
}

function removeEmail(fieldNumber){
  jQuery("#emailField"+fieldNumber).remove();
  fieldCount--;
}