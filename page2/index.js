
$('.foto').on('transitionend webkitTransitionEnd MSTransitionEnd', function(e) {
    if (e.originalEvent.propertyName != 'transform') return;
    
    alert('webkitTransitionEnd')
  });

