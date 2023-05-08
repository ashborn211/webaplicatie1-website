/*dit zorgt ervoor als je bij adminDELETE op submit klikt een pop-up tevoorschijn komt dat vraagt of je zeker bent met je kuizen*/
function confirmSubmit()
{
var agree=confirm("Are you sure you wish to continue?");
if (agree)
 return true ;
else
 return false ;
}