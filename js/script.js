
// $('ul.nav li').each(function () {if (this.getElementsByTagName("a")[0].href == location.href) this.className = "active";});



$('.btn-lg').on('click', function(){
      $('html, body').animate({ scrollTop: $('#trial-classic-form').offset().top }, 1000);
    });