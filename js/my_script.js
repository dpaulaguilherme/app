$(document).ready( function() {
  $.getJSON("json_data.json", function(data){
    $.each(data.person, function(){
      $("ul").append("<li>"+this['name']+"</li><li>"+this['name']+"</li>")
    });
  }});
});
