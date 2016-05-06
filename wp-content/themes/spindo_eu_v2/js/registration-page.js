jQuery(document).ready(function(){ 
  var pickedPrize = $("#picked-prize").val();
  if (pickedPrize=='gadgets'){
    $(".picked-prize").hide();
    $(".prize-gadgets").show();
  }else if (pickedPrize=='holiday'){
    $(".picked-prize").hide();
    $(".prize-holiday").show();
  }else if (pickedPrize=='cash'){
    $(".picked-prize").hide();
    $(".prize-cash").show();
  }

  $(".change-prize").change(function(){
    var prizeValue = $("#change-prize").val();
    var currentWindowUrl = window.location.href;
    var urlLength = currentWindowUrl.length;
    var prizeParamIndex = currentWindowUrl.indexOf("prize=");
    var sliceUrl = currentWindowUrl.slice(prizeParamIndex, urlLength);
    window.location.href = currentWindowUrl.replace(sliceUrl, "prize="+prizeValue);
  });
});


jQuery(window).load(function(){
  if (window.location.href.indexOf("prize") != -1){
    var countryCode = $("#country-select option:selected").attr("data-country-code");
    listCitiesForCountry(countryCode);

    $("#country-select").change(function(){
      countryCode = $("#country-select option:selected").attr("data-country-code");
      $(".loading-prompt").show();
      listCitiesForCountry(countryCode);
    });  
  }
});    

function listCitiesForCountry(countryCode){  
  $.get(countryCities+countryCode, function(response){
    var obj = jQuery.parseJSON(response); 
    $("#city-select option").remove();      
    $(obj).each(function(){  
        var isSelected = '';
        if (this.name == detectedCityName ){
          isSelected = 'selected=selected';
        }
        $("#city-select").append('<option value="'+this.name+'"'+isSelected+'>'+this.name+'</option>');                     
      });
    $(".loading-prompt").hide(); 
  });
}

function registrationSaveToDatabase(){  
  $("#oi_form").ajaxSubmit({url: registrationDBScript, type: 'post'})
  var currentWindowUrl = window.location.href;
  var urlLength = currentWindowUrl.length;
  var prizeParamIndex = currentWindowUrl.indexOf("home");
  var sliceUrl = currentWindowUrl.slice(prizeParamIndex, urlLength);
  window.location.href = currentWindowUrl.replace(sliceUrl, "thank-you");
}