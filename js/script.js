$(document).ready(function(){
  $('.slider')
    .css("display","block")
    .slick({
    infinite: true,
    lazyLoad: 'ondemand',
    dots: true,
    arrows: false,
    slidesToShow: 5,
    slidesToScroll: 5
  });

  $('body').click(function(e){
    if(e.target.id === "blogs-prev"){
      var prev = $(".view-blogs .pager .pager-previous a")[0];
      if(prev) prev.click();
    }
    if(e.target.id === "blogs-next"){
        var next = $(".view-blogs .pager .pager-next a")[0];
        if(next) next.click();
    }
  });
});
