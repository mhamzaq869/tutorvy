<<<<<<< HEAD

// sidenav

$(document).ready(function () {
  $("#sidebarCollapse").on('click', function () {
    $("#sidebar").toggleClass('active');
  });
=======
// sidenav

$(document).ready(function() {
    $("#sidebarCollapse").on('click', function() {
        $("#sidebar").toggleClass('active');
    });
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
});

// sidenav end

// toggle
<<<<<<< HEAD
var main = function () {
  $('.notification img').click(function () {
    $('.notification-menu').toggle();
  });

  $('.post .btn').click(function () {
    $(this).toggleClass('btn-like');
  });
=======
var main = function() {
    $('.notification').click(function() {
        $('.notification-menu').toggle();
    });


    $('.post .btn').click(function() {
        $(this).toggleClass('btn-like');
    });
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
};

// end toggle

$(document).ready(main);

// chat box

<<<<<<< HEAD
$(function () {
  $('.fa-minus').click(function () {
    $(this).closest('.chatbox').toggleClass('chatbox-min');
  });
  $('.fa-close').click(function () {
    $(this).closest('.chatbox').hide();
  });
=======
$(function() {
    $('.fa-minus').click(function() {
        $(this).closest('.chatbox').toggleClass('chatbox-min');
    });
    $('.fa-close').click(function() {
        $(this).closest('.chatbox').hide();
    });
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
});

// onscroll side nav

//  tooltip

<<<<<<< HEAD
$(document).ready(function () {
  $('[data-toggle="tooltip"]').tooltip();
=======
$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
});

// tooltip end

// payment

// payment end

// sidebar btn active

var header = document.getElementById("sidebar");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
<<<<<<< HEAD
  btns[i].addEventListener("click", function () {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
=======
    btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
    });
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
}

// end active 

<<<<<<< HEAD
$(document).ready(function () {
  $(".notification-drop .item").on('click', function () {
    $(this).find('ul').toggle();
  });
});

// 
$(document).ready(function () {
  $('.bg-dark2 a').click(function () {
    $('span').removeClass("activee");
    $(this).addClass("activee");
  });
=======
$(document).ready(function() {
    $(".notification-drop .item").on('click', function() {
        $(this).find('ul').toggle();
    });
});

// 
$(document).ready(function() {
    $('.bg-dark2 a').click(function() {
        $('span').removeClass("activee");
        $(this).addClass("activee");
    });
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
});

// 

function chooseColor() {
<<<<<<< HEAD
  var mycolor = document.getElementById("myColor").value;
  document.execCommand('foreColor', false, mycolor);
}

function changeFont() {
  var myFont = document.getElementById("input-font").value;
  document.execCommand('fontName', false, myFont);
}

function changeSize() {
  var mysize = document.getElementById("fontSize").value;
  document.execCommand('fontSize', false, mysize);
}

function checkDiv() {
  var editorText = document.getElementById("editor1").innerHTML;
  if (editorText === '') {
    document.getElementById("editor1").style.border = '5px solid red';
  }
}

function removeBorder() {
  document.getElementById("editor1").style.border = '1px solid transparent';
=======
    var mycolor = document.getElementById("myColor").value;
    document.execCommand('foreColor', false, mycolor);
}

function changeFont() {
    var myFont = document.getElementById("input-font").value;
    document.execCommand('fontName', false, myFont);
}

function changeSize() {
    var mysize = document.getElementById("fontSize").value;
    document.execCommand('fontSize', false, mysize);
}

function checkDiv() {
    var editorText = document.getElementById("editor1").innerHTML;
    if (editorText === '') {
        document.getElementById("editor1").style.border = '5px solid red';
    }
}

function removeBorder() {
    document.getElementById("editor1").style.border = '1px solid transparent';
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
}

// sidenav icon

function navicon() {

<<<<<<< HEAD
  // var element = document.getElementById("sidenav-toggle");
  // element.classList.toggle("toogle");
//   var x = document.getElementById("sidenav-hide");
//   if (x.style.display === "none") {
//     x.style.display = "block";

//   } else {
//     x.style.display = "none";
//   }
//   var y = document.getElementById("sidenav-show");
//   var z = document.getElementById('homesection');
//   var c = document.getElementById('btns-sideicons');
//   var d = document.getElementById('box');
//   var e = document.getElementById('sideicons-side');


//   if (y.style.display === "block") {
//     y.style.display = "none";
//     z.style.width = "100%";
//     z.style.marginLeft = "0px";
//     d.style.marginLeft = "0px";
//     e.style.display = "none";

//   }

//   else {

//     y.style.display = "block";
//     y.style.marginLeft = "200px";
//     c.style.background = "none";
//     c.style.borderRight = "none";
//     z.style.width = "97%";
//     z.style.marginLeft = "50px";
//     d.style.marginLeft = "100px";
//     e.style.display = "block";


//   }

// }
// $(".sidenav-toggle").click(function (e) {
//   e.preventDefault();
//   $("#sidebar").toggleClass("active");
//   $("#sidebar").css("border-right", "none");
// });
// // rotate
// $(".rotate").click(function () {
//   $(this).toggleClass("down");
// })

// code editor
function downloadFile() {
  if (!window.File || !window.FileReader || !window.FileList || !window.Blob) {
    alert('The File APIs are not fully supported in this browser.');
    return;
  }

  input = document.getElementById('fileinput');
  if (!input) {
    alert("Um, couldn't find the fileinput element.");
  }
  else if (!input.files) {
    alert("This browser doesn't seem to support the `files` property of file inputs.");
  }
  else if (!input.files[0]) {
    alert("Please select a file before clicking 'Load'");
  }
  else {
    file = input.files[0];
    fr = new FileReader();
    fr.readAsDataURL(file);

    var blob = new Blob([file], { type: "application/pdf" });// change resultByte to bytes

    var link = document.createElement('a');
    link.href = window.URL.createObjectURL(blob);
    link.download = "myFileName.pdf";
    link.click();
  }
}


// /* setting */

// function openCity(evt, cityName) {
//   var i, tabcontent, tablinks;
//   tabcontent = document.getElementsByClassName("tabcontent");
//   for (i = 0; i < tabcontent.length; i++) {
//     tabcontent[i].style.display = "none";
//   }
//   tablinks = document.getElementsByClassName("tablinks");
//   for (i = 0; i < tablinks.length; i++) {
//     tablinks[i].className = tablinks[i].className.replace(" active", "");
//   }
//   document.getElementById(cityName).style.display = "block";
//   evt.currentTarget.className += " active";
// }

// document.getElementById("defaultOpen").click();
=======
    // var element = document.getElementById("sidenav-toggle");
    // element.classList.toggle("toogle");
    //   var x = document.getElementById("sidenav-hide");
    //   if (x.style.display === "none") {
    //     x.style.display = "block";

    //   } else {
    //     x.style.display = "none";
    //   }
    //   var y = document.getElementById("sidenav-show");
    //   var z = document.getElementById('homesection');
    //   var c = document.getElementById('btns-sideicons');
    //   var d = document.getElementById('box');
    //   var e = document.getElementById('sideicons-side');


    //   if (y.style.display === "block") {
    //     y.style.display = "none";
    //     z.style.width = "100%";
    //     z.style.marginLeft = "0px";
    //     d.style.marginLeft = "0px";
    //     e.style.display = "none";

    //   }

    //   else {

    //     y.style.display = "block";
    //     y.style.marginLeft = "200px";
    //     c.style.background = "none";
    //     c.style.borderRight = "none";
    //     z.style.width = "97%";
    //     z.style.marginLeft = "50px";
    //     d.style.marginLeft = "100px";
    //     e.style.display = "block";


    //   }

    // }
    // $(".sidenav-toggle").click(function (e) {
    //   e.preventDefault();
    //   $("#sidebar").toggleClass("active");
    //   $("#sidebar").css("border-right", "none");
    // });
    // // rotate
    // $(".rotate").click(function () {
    //   $(this).toggleClass("down");
    // })

    // code editor
    function downloadFile() {
        if (!window.File || !window.FileReader || !window.FileList || !window.Blob) {
            alert('The File APIs are not fully supported in this browser.');
            return;
        }

        input = document.getElementById('fileinput');
        if (!input) {
            alert("Um, couldn't find the fileinput element.");
        } else if (!input.files) {
            alert("This browser doesn't seem to support the `files` property of file inputs.");
        } else if (!input.files[0]) {
            alert("Please select a file before clicking 'Load'");
        } else {
            file = input.files[0];
            fr = new FileReader();
            fr.readAsDataURL(file);

            var blob = new Blob([file], { type: "application/pdf" }); // change resultByte to bytes

            var link = document.createElement('a');
            link.href = window.URL.createObjectURL(blob);
            link.download = "myFileName.pdf";
            link.click();
        }
    }


    // /* setting */

    // function openCity(evt, cityName) {
    //   var i, tabcontent, tablinks;
    //   tabcontent = document.getElementsByClassName("tabcontent");
    //   for (i = 0; i < tabcontent.length; i++) {
    //     tabcontent[i].style.display = "none";
    //   }
    //   tablinks = document.getElementsByClassName("tablinks");
    //   for (i = 0; i < tablinks.length; i++) {
    //     tablinks[i].className = tablinks[i].className.replace(" active", "");
    //   }
    //   document.getElementById(cityName).style.display = "block";
    //   evt.currentTarget.className += " active";
    // }

    // document.getElementById("defaultOpen").click();
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249





}




// get all title
let titles = document.querySelectorAll('.main .title');
let searchTerm = '';
let tit = '';

function search(e) {
    // get input fieled value and change it to lower case
    searchTerm = e.target.value.toLowerCase();

    titles.forEach((title) => {
        // navigate to p in the title, get its value and change it to lower case
        tit = title.textContent.toLowerCase();
        // it search term not in the title's title hide the title. otherwise, show it.
        tit.includes(searchTerm) ? title.style.display = 'block' : title.style.display = 'none';
    });
}