var countryCodeCount = 0;
function addCountryCodeField(){    
  jQuery('#country-code-fields').append('<div class="input-group" id="country-code-field-'+countryCodeCount+'"><input class="form-control" type="text" placeholder="Country Code e.g. EE" name="country-code[]"/><div class="input-group-addon"><a href="javascript:removeCountryCodeField('+countryCodeCount+');"><span class="glyphicon glyphicon-minus-sign" aria-hidden="true"></span></a></div></div>');
  countryCodeCount++;
}

function removeCountryCodeField(count){    
  jQuery('#country-code-field-'+count).remove();
}