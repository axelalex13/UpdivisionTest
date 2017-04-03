
 $( function() {
    $( "#html-slider" ).slider({
      range: "min",
      value: 1,
      min: 1,
      max: 10,
      slide: function( event, ui ) {
        $( "#amount_html" ).val( ui.value );
      }
    });
    $( "#amount_html" ).val(  $( "#html-slider" ).slider( "value" ) );
  } );

 $( function() {
    $( "#slider-range-min_css" ).slider({
      range: "min",
      value: 1,
      min: 1,
      max: 10,
      slide: function( event, ui ) {
        $( "#amount_css" ).val( ui.value );
      }
    });
    $( "#amount_css" ).val(  $( "#slider-range-min_css" ).slider( "value" ) );
  } );

 $( function() {
    $( "#slider-range-min_php" ).slider({
      range: "min",
      value: 1,
      min: 1,
      max: 10,
      slide: function( event, ui ) {
        $( "#amount_php" ).val( ui.value );
      }
    });
    $( "#amount_php" ).val(  $( "#slider-range-min_php" ).slider( "value" ) );
  } );

 $( function() {
    $( "#slider-range-min_js" ).slider({
      range: "min",
      value: 1,
      min: 1,
      max: 10,
      slide: function( event, ui ) {
        $( "#amount_js" ).val( ui.value );
      }
    });
    $( "#amount_js" ).val(  $( "#slider-range-min_js" ).slider( "value" ) );
  } );

 $('#flat-slider').slider({
  orientation: 'horizontal',
  range:       false,
  value:      17
});
