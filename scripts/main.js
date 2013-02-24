$(document).ready(function(){
  $('.bxslider').bxSlider(
  {
//      controls : false, 
        auto:true,
        easing : 'ease',
        speed : 2000,
        pause : 10000,
        autoHover : true//,
//        onSlideNext : function($slideElement, oldIndex, newIndex){ 
//        console.log($slideElement, oldIndex, newIndex);
//        }
  }
);
    
    
    
    $('#banner').mouseover(function(){
        $('.bx-controls-direction').show();
    })
    .mouseout(function(){
        $('.bx-controls-direction').hide();
    });
});


