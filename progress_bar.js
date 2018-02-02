$().ready(function(){
  $('#mybutton').click(function () {

    $.ajax({
      beforeSend: function (xhr) {
        $("#progressbar").progressbar({value: 0});
        $("#progressbar").progressbar( "enable" );
      },
      xhr: function () {
        var xhr = new window.XMLHttpRequest();
        //Download progress
        xhr.addEventListener("progress", function (evt) {
            if (evt.lengthComputable) {
                var percentComplete = evt.loaded / evt.total;
                $("#progressbar").progressbar({value: Math.round(percentComplete * 100)});
            }
        }, false);
        return xhr;
      },
      url: "submit.php",
    }).done(function(data, textStatus, jqXHR){
      $("#progressbar").progressbar( "disable" );
    });

  });
});
