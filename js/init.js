'use strict';

//document.getElementById('eee').innerHTML = ' js ';

let aside_content = document.getElementById('left_sidebar').innerHTML;
//alert("init");

function show_hide_sidebar()
{
     let aside = document.getElementById('left_sidebar');

//    alert("qqqq");
     //alert(aside.style.visibility);

    // if (aside.style.visibility == 'visible') {
    //     aside.style.visibility = 'hidden';
    // } else {
    //     aside.style.visibility = 'visible';
    // }


    if (aside.innerHTML == '') {
        aside.innerHTML = aside_content;
    }
    else {
        aside.innerHTML = '';

    }

}