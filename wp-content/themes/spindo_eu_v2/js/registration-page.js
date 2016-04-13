jQuery(document).ready(function(){   
  var countryCode = $("#country-select option:selected").attr("data-country-code");
  listCitiesForCountry(countryCode);

  alert(detectedCountryCode);

  $("#country-select").change(function(){
    countryCode = $("#country-select option:selected").attr("data-country-code");
    $(".loading-prompt").show();
    listCitiesForCountry(countryCode);
  });

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


function listCitiesForCountry(countryCode){  
  worldCitiesFile = $.get(worldCitiesPath);  
  
  var countryCities = [];      
  $.get(worldCitiesPath, 
    function(text_data) {
      var csv_data = $.simple_csv(text_data);
      $("#city-select option").remove();      
      $(csv_data).each(
        function() {          
          if (this[0] == countryCode){
            var isSelected = '';
            if (this[0] == detectedCityName ){
              isSelected = 'selected=selected';
            }
            $("#city-select").append('<option value="'+this[6]+'"'+isSelected+'>'+this[6]+'</option>');            
          } 
        }
      );
      $(".loading-prompt").hide();      
    }
  );  
}