  jQuery('input:checkbox').change(function(){
    if(jQuery(this).is(":checked")) {
        jQuery('#headbar').addClass("check");
    } else {
        jQuery('#headbar').removeClass("check");
    }
  });
