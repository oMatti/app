$( document ).ready(function() {
   if (sessionStorage.getItem('splashScreen') !== 'true') {

  var quotes = [
    {
      quote: "You&rsquo;re a wizard Harry!",
      author: "Hagrid"
    },
    {
      quote: "Goals transform a random walk into a chase.",
      author: "Mihaly Csikszentmihalyi"
    },
    {
      quote: "We are so vain that we even care for the opinion of those we don't care for.",
      author: "Marie Ebner von Eschenbach"
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
