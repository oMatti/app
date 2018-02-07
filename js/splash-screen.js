$( document ).ready(function() {
   if (sessionStorage.getItem('splashScreen') !== 'true') {

  var quotes = [
    {
      quote: "You&rsquo;re a wizard Harry!",
      author: "Hagrid"
    },
    {
      quote: "quote2",
      author: "author2"
    },
    {
      quote: "quote3",
      author: "author3"
    }
  ];
  var randomQuote = quotes[Math.floor(Math.random() * quotes.length)];

  $('body').prepend('<header id="splashScreen" ></header>');
  $('#splashScreen').prepend('<blockquote></blockquote>');
  $('blockquote').prepend('<p id="quote"></p>');
  $('blockquote').append('<footer id="author"></footer>');
  $('#quote').html(randomQuote.quote);
  $('#author').html(randomQuote.author);
  $("#splashScreen").show().delay(2500).fadeOut();
  sessionStorage.setItem('splashScreen', 'true');
}
});
