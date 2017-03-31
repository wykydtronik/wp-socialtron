if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {

  var twitterUser = '@placeholder';

  // No need to change anything else :)

  var shareURL = window.location.href
  var shareTitle = document.getElementsByTagName("title")[0].innerHTML;
  var shareTweetdata = shareTitle + ' via ' + twitterUser + ' ';

  // If Font Awesome not included to project, we create related link tag inside of <head></head> elements.
  document.fonts.ready.then(function() {
    if (document.fonts.check('1em "FontAwesome"') != true) {
      jQuery('head').append('<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">');
    }
  });

  var dataList = '<section class="socialShare">' +
  '<a class="facebook" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=' + shareURL + '"><i class="fa fa-facebook"></i></a>' +
  '<a class="twitter" target="_blank" href="https://twitter.com/intent/tweet?text=' + shareTweetdata + '&amp;url=' + shareURL + '"><i class="fa fa-twitter"></i></a>' +
  '<a class="linkedin" target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=' + shareURL + '&amp;title=' + shareTitle + '"><i class="fa fa-linkedin"></i></a>' +
  '<a class="whatsapp" target="_blank" href="whatsapp://send?text=' + shareTitle + '%20' + shareURL + '"><i class="fa fa-whatsapp"></i></a>' +
  '<a class="email" href="mailto:?subject=' + shareTitle + '&amp;body=' + shareURL + '"><i class="fa fa-envelope"></i></a>' +
  '</section>';

  jQuery('body').prepend(dataList);
}
