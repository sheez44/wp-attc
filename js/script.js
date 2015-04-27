(function ($) {
   $.getJSON('dates.json', function(data) {
    drawTable(data);
  });

   console.log("works");
  function drawTable(data) {
    for (var i = 0; i < 5; i++) {
      drawRow(data[i]);
    }
  }

  function drawRow(rowData) {
    var row = $("<tr />");
    $("#agenda").prepend(row);
    row.append($("<td>" + rowData.date + "</td>"));
    row.append($("<td>" + rowData.activity + "</td>"));
  }
})(jQuery); 
  
(function($) {
  $clubblad = $('div#overlay');


  $clubblad.on('click', function(e) {
    e.preventDefault();
    window.open("downloads/clubblad/januari_2015.pdf", '_blank');
  });
})(jQuery);


(function($) {

  $.getJSON('downloads.json', function(data) {
    var html = '<ul>';

    $.each($(data).slice(0,9), function(key, val) {
      html += '<li>';
      html += '<a target="_blank" href="' + val.link +'">';
      html += val.name + '</a>';
      html += '</li>';
    });

    html += '</ul>';

    $("div.bottom__section--downloads").append(html);

  });

})(jQuery);

(function($) {

  var $img = $('img.team_photo');

  $img.on('click', function(e) {
    e.preventDefault();

    var $targetPicture = $(this).attr('rel') + ".jpg";
    var path = "../img/informatie/";

    var image = path + $targetPicture;

    var insert = '<img class="img-responsive" src="' + image + '" />';


    $("#modal-window").fadeIn(1000);
    
    $( "#modal-window" ).append(insert).append('<span class="close">X Close</span');

    $('body').append('<div id="mask"></div>');

    $('#mask').fadeIn(600);
  });

  $(document).on('click', 'span.close, #mask', function() {
    
    $('#modal-window').fadeOut(300);
    $('#modal-window').find('img, span.close').remove();
    $('#mask').fadeOut(300, function() {
      $('#mask').remove();  
    });   
  });

  $(document).keyup(function(e) {
    if(e.keyCode === 27) {
      $('#mask, #modal-window').fadeOut(400, function() {
         $('#mask').remove(); 
      });

    }
  });

})(jQuery);