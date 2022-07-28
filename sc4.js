/////////////////////////////////setAvalibleAppointment:
/////////////////////////////////setAvalibleAppointment:
var theForm2 = document.testForm2;


function validationFunc2() {

if (theForm2.date.value == "") {
    alert( "Enter the date please" );
    theForm2.date.focus();
    return false;
}


if (theForm2.note.value == ""||theForm2.note.value.length < 10) {
    alert( "Enter the not please more then 10 charcter" );
    theForm2.note.focus();
    return false;
}
if (!isNaN(theForm2.note.value)   ){
    alert( " All Number Not allowed" );
    theForm2.note.focus();
    return false;
} 
if (!isNaN(theForm2.note.value)   ){
    alert( " All Number Not allowed" );
    theForm2.note.focus();
    return false;
} 


return (true);
}





