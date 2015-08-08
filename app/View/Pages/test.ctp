<h1>test</h1>
<script>

jQuery(function ($) {
//Edison
$.ajax({
  url: '/edisons/kame01.json',
  type: "GET",
  // data: {'edisonId':'kame01'},
  // dataType : "json",
  //processData: false,
  //contentType: false,
  success : function(response, dataType){
      console.log('Ajax: ' + dataType);
      console.log(response);
      $('#content').append('<p>Edison Ajax(GET)成功</p>');
  },
  error: function(XMLHttpRequest, textStatus, errorThrown){
      console.log('Ajax: Error!');
      console.log(XMLHttpRequest);
      console.log(textStatus);
      console.log(errorThrown);
  }
});


//Touch
$.ajax({
  url: '/touches/kame01.json',
  type: "GET",
  // data: {'edisonId':'kame01'},
  // dataType : "json",
  //processData: false,
  //contentType: false,
  success : function(response, dataType){
      console.log('Ajax: ' + dataType);
      console.log(response);
      $('#content').append('<p>Touch Ajax(GET)成功</p>');
  },
  error: function(XMLHttpRequest, textStatus, errorThrown){
      console.log('Ajax: Error!');
      console.log(XMLHttpRequest);
      console.log(textStatus);
      console.log(errorThrown);
  }
});



//Temperature
$.ajax({
  url: '/temperatures/kame01.json',
  type: "GET",
  // data: {'edisonId':'kame01'},
  // dataType : "json",
  //processData: false,
  //contentType: false,
  success : function(response, dataType){
      console.log('Ajax: ' + dataType);
      console.log(response);
      $('#content').append('<p>Temperature Ajax(GET)成功</p>');
  },
  error: function(XMLHttpRequest, textStatus, errorThrown){
      console.log('Ajax: Error!');
      console.log(XMLHttpRequest);
      console.log(textStatus);
      console.log(errorThrown);
  }
});



//Photo
$.ajax({
  url: '/photos/kame01.json',
  type: "GET",
  // data: {'edisonId':'kame01'},
  // dataType : "json",
  //processData: false,
  //contentType: false,
  success : function(response, dataType){
      console.log('Ajax: ' + dataType);
      console.log(response);
      $('#content').append('<p>Photo Ajax(GET)成功</p>');
  },
  error: function(XMLHttpRequest, textStatus, errorThrown){
      console.log('Ajax: Error!');
      console.log(XMLHttpRequest);
      console.log(textStatus);
      console.log(errorThrown);
  }
});



});
</script>

<form id="photo_form" action="/photos.json" method="post" enctype=" multipart/form-data">
  <input type="file" name="datafile">
  <input id="photo-submit" type="submit" value="送信">
</form>
