$(function () {
  $('#datetimepicker1').datepicker({
    format: "yyyy-dd-mm",
    orientation: "bottom-right",
    todayHighlight: true
  });
});
 
//Function handleDragStart(), Its purpose is to store the id of the draggable element.
function handleDragStart(e) {
  e.dataTransfer.setData("text", this.id);
  var parentid = this.parentElement.id;
  e.dataTransfer.setData("parentid", parentid);
  e.dataTransfer.dropEffect = "copy";
   //note: using "this" is the same as using: e.target.
}//end function


//The dragenter event fires when dragging an object over the target. 
//The css class "drag-enter" is append to the targets object.
function handleDragEnterLeave(e) {
  if(e.type == "dragenter") {
    this.className = "drag-enter" 
  } else {
    this.className = "" //Note: "this" referces to the target element where the "dragenter" event is firing from.
  }
  console.log(handleDragEnterLeave);
}//end function



//Function handles dragover event eg.. moving your source div over the target div element.
//If drop event occurs, the function retrieves the draggable element’s id from the DataTransfer object.
function handleOverDrop(e) {
  e.preventDefault(); 
  //Depending on the browser in use, not using the preventDefault() could cause any number of strange default behaviours to occur.
  if (e.type != "drop") {
    return;
    // console.log(e); //Means function will exit if no "drop" event is fired.
  }
  //Stores dragged elements ID in var draggedId
  var draggedId = e.dataTransfer.getData("text");
  var parentid = e.dataTransfer.getData("parentid");
  // console.log(parentid);

  //Stores referrence to element being dragged in var draggedEl
  var draggedEl = document.getElementById(draggedId);
  var clone = draggedEl.cloneNode(true);
  clone.id="";
  clone.setAttribute('draggable', false);
  $(clone).css({margin: 0, padding: 0});
  $(clone).children().css({margin: 0, padding: '0'});
  // $(clone).children().css({"margin": "0", "padding": "0.5 em"});
  console.log(clone.id);
  var parentElement = document.getElementById(parentid);
  //if the event "drop" is fired on the dragged elements original drop target e.i..  it's current parentNode, 
  //then set it's css class to ="" which will remove dotted lines around the drop target and exit the function.
  //Otherwise if the event "drop" is fired from a different target element, detach the dragged element node from it's
  //current drop target (i.e current perantNode) and append it to the new target element. Also remove dotted css class. 
  parentElement.prepend(draggedEl);
  this.appendChild(clone);
  // this.className = "";//Note: "this" references to the current target div that is firing the "drop" event.
}//end Function



//Retrieve two groups of elements, those that are draggable and those that are drop targets:
var draggable = document.querySelectorAll('[draggable]');
var targets = document.querySelectorAll('[data-drop-target]');
//Note: using the document.querySelectorAll() will aquire every element that is using the attribute defind in the (..)


//Register event listeners for the"dragstart" event on the draggable elements:
for(var i = 0; i < draggable.length; i++) {
  draggable[i].addEventListener("dragstart", handleDragStart);
}

//Register event listeners for "dragover", "drop", "dragenter" & "dragleave" events on the drop target elements.
for(var i = 0; i < targets.length; i++) {
  targets[i].addEventListener("dragover", handleOverDrop);
  targets[i].addEventListener("drop", handleOverDrop);
  // targets[i].addEventListener("dragenter", handleDragEnterLeave);
  // targets[i].addEventListener("dragleave", handleDragEnterLeave);
}


$("table").delegate(".fa-trash", "click", function() {
  $(this).parent().parent().remove();
});

$(".fa-trash").click(function(){
  $(this).parent().parent().remove();
});
var prefixAdress= "";

$('.addRow').click(function(){

var self = this;

fetch(prefixAdress+'/steps/'+$(this).data('stepid'))
.then(function(response) {
  return response.json();
})
.then(function(dataGites) {
  console.log(dataGites);
  var options = "";

  for(var i = 0; i < dataGites.length ; i++) {
    options += '<option value="'+dataGites[i].name+'">'+dataGites[i].name+'</option>';
  console.log(options);
  }
   $(self).parent().parent().before('<tr><td><select class="form-control">'+options+'</select></td><td  data-drop-target="true"></td><td  data-drop-target="true"></td><td  data-drop-target="true"></td><td  data-drop-target="true"></td></tr>');

   var targets = document.querySelectorAll('[data-drop-target]');
   for(var i = 0; i < targets.length; i++) {
  targets[i].addEventListener("dragover", handleOverDrop);
  targets[i].addEventListener("drop", handleOverDrop);
  // targets[i].addEventListener("dragenter", handleDragEnterLeave);
  // targets[i].addEventListener("dragleave", handleDragEnterLeave);
}
});




});