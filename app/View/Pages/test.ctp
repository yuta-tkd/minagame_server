<h1>test</h1>
<script>

jQuery(function ($) {
//Edison
// $.ajax({
//   url: '/edisons/kame01.json',
//   type: "GET",
//   // data: {'edisonId':'kame01'},
//   // dataType : "json",
//   //processData: false,
//   //contentType: false,
//   success : function(response, dataType){
//       console.log('Ajax: ' + dataType);
//       console.log(response);
//       $('#content').append('<p>Edison Ajax(GET)成功</p>');
//   },
//   error: function(XMLHttpRequest, textStatus, errorThrown){
//       console.log('Ajax: Error!');
//       console.log(XMLHttpRequest);
//       console.log(textStatus);
//       console.log(errorThrown);
//   }
// });

$.ajax({
  url: '/edisons.json',
  type: "POST",
  data: {
    name: 'kame02'
  },
  dataType : "json",
  //processData: false,
  //contentType: false,
  success : function(response, dataType){
      console.log('Ajax: ' + dataType);
      console.log(response);
      $('#content').append('<p>Edison Ajax(POST)成功</p>');
  },
  error: function(XMLHttpRequest, textStatus, errorThrown){
      console.log('Ajax: Error!');
      console.log(XMLHttpRequest);
      console.log(textStatus);
      console.log(errorThrown);
  }
});/*

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

$.ajax({
  url: '/touches.json',
  type: "POST",
  data: {
    edisonName: 'kame01',
    touch: 1,
    time: '2015-08-08 13:39:30'
  },
  dataType : "json",
  //processData: false,
  //contentType: false,
  success : function(response, dataType){
      console.log('Ajax: ' + dataType);
      console.log(response);
      $('#content').append('<p>Touch Ajax(POST)成功</p>');
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

$.ajax({
  url: '/temperatures.json',
  type: "POST",
  data: {
    edisonName: 'kame01',
    temperature: 28,
    time: '2015-08-08 13:39:30'
  },
  dataType : "json",
  //processData: false,
  //contentType: false,
  success : function(response, dataType){
      console.log('Ajax: ' + dataType);
      console.log(response);
      $('#content').append('<p>Temperature Ajax(POST)成功</p>');
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

$('#photo-submit').on('click',function(){
  $form = $('#photo_form');
  var fd = new FormData($form[0]);
  console.log(fd);
  $.ajax({
    url: '/photos.json',
    type: "POST",
    data: {
      edisonName: 'kame01',
      //photo: 28,
      time: '2015-08-08 13:39:30',
      formData: fd
    },
    dataType : "json",
    processData: false,
    contentType: false,
    success : function(response, dataType){
        console.log('Ajax: ' + dataType);
        console.log(response);
        $('#content').append('<p>Photo Ajax(POST)成功</p>');
    },
    error: function(XMLHttpRequest, textStatus, errorThrown){
        console.log('Ajax: Error!');
        console.log(XMLHttpRequest);
        console.log(textStatus);
        console.log(errorThrown);
    }
  });

  return false;
});*/


});
</script>

<form id="photo_form" action="/photos.json" method="post" enctype=" multipart/form-data">
  <input type="file" name="datafile">
  <input id="photo-submit" type="submit" value="送信">
</form>
