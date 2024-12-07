console.log("actions.js loaded");
function deletion(id) {
    alert("user is deleted" + id);
    window.location.href = "display_user.php?id="+id ;
}
 function update(id) {
    alert("you have selected "+id);
    
    window.location.href = "updateUser.php?id="+id ;
}
