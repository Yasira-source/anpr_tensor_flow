// "use strict";
// function myFunction() {
//     window.print();
// }


// <!-- Script to print the content of a div -->

    function printDiv() {
        var divContents = document.getElementById("pr").innerHTML;
        var a = window.open('', '', 'height=500, width=500');
        a.document.write('<html>');
        a.document.write('<body >');
        a.document.write(divContents);
        a.document.write('</body></html>');
        a.document.close();
        a.print();
    }
