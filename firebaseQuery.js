window.alert("okay");
var text_TaskName = document.getElementById("text_TaskName");

function submitClick() {

  var firebaseref = firebase.database().ref("availableTasks");

  window.alert("completed not");
  var newPostRef = postListRef.push();
  newPostRef.set({
    {
      "name": "repair obd scanner",
      "address": "63/22A,KAndy Road,Imbulgoda",
      "contactName": "Mr.Waruna",
      "contactNumber": "0775676543",
      "description": "repair the obd reader model 365   given to waruna",
      "langtitute": 7,
      "logtitute": 80,
    }
  })
}
