jQuery(document).ready(function(){ 
  var countryCode = $("#country").val();
  alert(countryCode);


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