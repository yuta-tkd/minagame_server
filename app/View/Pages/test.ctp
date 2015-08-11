<h1>test</h1>
<script>

jQuery(function ($) {

/*
//Login
$.ajax({
  url: '/api/login',
  type: "POST",
  data: {'edisonName':'kame01aa'},
  dataType : "json",
  //processData: false,
  //contentType: false,
  success : function(response, dataType){
      console.log('Login');
      console.log('Ajax: ' + dataType);
      console.log(response);
      $('#content').append('<p>Login Ajax(POST)成功</p>');
  },
  error: function(XMLHttpRequest, textStatus, errorThrown){
      console.log('Ajax: Error!');
      console.log(XMLHttpRequest);
      console.log(textStatus);
      console.log(errorThrown);
  }
});
*/
//AllSensor
$.ajax({
  url: '/api/allSensor',
  type: "POST",
  data: {
    'edisonName':'kame01',
    'startTime':'2015-08-08 13:45:30',
    'duration': 10
  },
  dataType : "json",
  //processData: false,
  //contentType: false,
  success : function(response, dataType){
      console.log('AllSensor');
      console.log('Ajax: ' + dataType);
      console.log(response);
      $('#content').append('<p>AllSensor Ajax(POST)成功</p>');
  },
  error: function(XMLHttpRequest, textStatus, errorThrown){
      console.log('Ajax: Error!');
      console.log(XMLHttpRequest);
      console.log(textStatus);
      console.log(errorThrown);
  }
});
// $.ajax({
//   url: '/api/allSensor',
//   type: "POST",
//   data: {
//     'edisonName':'kame01',
//     'startTime':'2015-08-08 13:45:30',
//     'duration': 1440
//   },
//   dataType : "json",
//   //processData: false,
//   //contentType: false,
//   success : function(response, dataType){
//       console.log('AllSensor');
//       console.log('Ajax: ' + dataType);
//       console.log(response);
//       $('#content').append('<p>AllSensor Ajax(POST)成功</p>');
//   },
//   error: function(XMLHttpRequest, textStatus, errorThrown){
//       console.log('Ajax: Error!');
//       console.log(XMLHttpRequest);
//       console.log(textStatus);
//       console.log(errorThrown);
//   }
// });
/*
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

// $.ajax({
//   url: '/edisons.json',
//   type: "POST",
//   data: {
//     name: 'kame02'
//   },
//   dataType : "json",
//   //processData: false,
//   //contentType: false,
//   success : function(response, dataType){
//       console.log('Ajax: ' + dataType);
//       console.log(response);
//       $('#content').append('<p>Edison Ajax(POST)成功</p>');
//   },
//   error: function(XMLHttpRequest, textStatus, errorThrown){
//       console.log('Ajax: Error!');
//       console.log(XMLHttpRequest);
//       console.log(textStatus);
//       console.log(errorThrown);
//   }
// });

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
    time: '2015-08-08 13:40:30'
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

// $('#photo-submit').on('click',function(){
//   $form = $('#photo_form');
//   var fd = new FormData($form[0]);
//   console.log(fd);
//   $.ajax({
//     url: '/photos.json',
//     type: "POST",
//     data: {
//       edisonName: 'kame01',
//       photo: fd,
//       time: '2015-08-08 13:39:30',
//     },
//     dataType : "json",
//     processData: false,
//     contentType: false,
//     success : function(response, dataType){
//         console.log('Ajax: ' + dataType);
//         console.log(response);
//         $('#content').append('<p>Photo Ajax(POST)成功</p>');
//     },
//     error: function(XMLHttpRequest, textStatus, errorThrown){
//         console.log('Ajax: Error!');
//         console.log(XMLHttpRequest);
//         console.log(textStatus);
//         console.log(errorThrown);
//     }
//   });
//
//   return false;
// });


//Sound
$.ajax({
  url: '/sounds/kame01.json',
  type: "GET",
  // data: {'edisonId':'kame01'},
  // dataType : "json",
  //processData: false,
  //contentType: false,
  success : function(response, dataType){
      console.log('Ajax: ' + dataType);
      console.log(response);
      $('#content').append('<p>Sound Ajax(GET)成功</p>');
  },
  error: function(XMLHttpRequest, textStatus, errorThrown){
      console.log('Ajax: Error!');
      console.log(XMLHttpRequest);
      console.log(textStatus);
      console.log(errorThrown);
  }
});

// $.ajax({
//   url: '/sounds.json',
//   type: "POST",
//   data: {
//     edisonName: 'kame01',
//     sound: 1,
//     time: '2015-08-08 13:39:30'
//   },
//   dataType : "json",
//   //processData: false,
//   //contentType: false,
//   success : function(response, dataType){
//       console.log('Ajax: ' + dataType);
//       console.log(response);
//       $('#content').append('<p>Sound Ajax(POST)成功</p>');
//   },
//   error: function(XMLHttpRequest, textStatus, errorThrown){
//       console.log('Ajax: Error!');
//       console.log(XMLHttpRequest);
//       console.log(textStatus);
//       console.log(errorThrown);
//   }
// });


*/
});
</script>

<!-- <form id="photo_form" action="/photos.json" method="post" enctype="multipart/form-data">
  <input type="file" name="datafile">
  <input id="photo-submit" type="submit" value="送信">
</form> -->

<form action="/photos.json" method="post" enctype="multipart/form-data">
  <input type="file" name="photo">
  <input type="hidden" name="edisonName" value="kame01">
  <input type="hidden" name="time" value="2015-08-08 13:39:30">
  <input id="photo-submit" type="submit" value="送信">
</form>


<form action="/sounds.json" method="post" enctype="multipart/form-data">
  <input type="file" name="sound">
  <input type="hidden" name="edisonName" value="kame01">
  <input type="hidden" name="time" value="2015-08-08 13:39:30">
  <input id="photo-submit" type="submit" value="送信">
</form>
