'use strict';

//document.getElementById('eee').innerHTML = ' js ';
let aside = document.getElementById('left_sidebar').innerHTML;

function show_hide_sidebar()
{
    if (document.getElementById('left_sidebar').innerHTML == '')
        document.getElementById('left_sidebar').innerHTML = aside;
    else
        document.getElementById('left_sidebar').innerHTML = '';

}


//let aside = document.getElementById('left_sidebar');
//let aside_content = aside.innerHTML;
//let aside_content = 'qqq';
//alert(document.getElementById('left_sidebar'));
//aside_content = document.getElementById('left_sidebar').innerHTML;
//alert(aside_content);
//let aside_content = 'zxcvbnm,';
//alert("init");

// function show_hide_sidebar()
// {
//     let aside_content = document.getElementById('left_sidebar').innerHTML;
// //    alert("qqqq");
//      //alert(aside.style.visibility);
//
//     // if (aside.style.visibility == 'visible') {
//     //     aside.style.visibility = 'hidden';
//     // } else {
//     //     aside.style.visibility = 'visible';
//     // }
//
//     alert(','+document.getElementById('left_sidebar').innerHTML+'.');
//     alert('z'+aside_content+'z');
//
//     if (document.getElementById('left_sidebar').innerHTML === '') {
//         document.getElementById('left_sidebar').innerHTML = aside_content;
//     }
//     else {
//         document.getElementById('left_sidebar').innerHTML = '';
//
//     }
//
// }