// const dragOne = document.getElementById("dragOne");
// console.log(dragOne);
// if (dragOne){
//     dragOne.addEventListener("dragstart", (ev) => {
//     console.log("dragStart");
//     // Change the source element's background color
//     // to show that drag has started
//     ev.currentTarget.classList.add("dragging");
//     // Clear the drag data cache (for all formats/types)
//     ev.dataTransfer.clearData();
//     // Set the drag's format and data.
//     // Use the event target's id for the data
//     ev.dataTransfer.setData("text/plain", ev.div1.id);
//     });
// }
// dragOne.addEventListener("dragend", (ev) =>
//   ev.div1.classList.remove("dragging")
// );

// const div1 = document.getElementById("div1");
// console.log(div1);
// if(div1){
//     div1.addEventListener("dragover", (ev) => {
//     console.log("dragOver");
//     ev.preventDefault();
//     });
// }    
// div1.addEventListener("drop", (ev) => {
//   console.log("Drop");
//   ev.preventDefault();
//   // Get the data, which is the id of the source element
//   const data = ev.dataTransfer.getData("text");
//   const dragOne = document.getElementById(data);
//   ev.div1.appendChild(dragOne);
// });

// function allowDrop(ev) {
//     ev.preventDefault();
// }
  
// function drag(ev) {
//     ev.dataTransfer.setData("text/plain", ev.target.id);
// }
  
// function drop(ev) {
//     ev.preventDefault();
//     var data = ev.dataTransfer.getData("text/plain");
//     console.log('hello');
//     console.log(data);
//     ev.target.appendChild(document.getElementById(data));
//     // var s = document.createElement('div1');
//     // s.innerHTML = document.getElementById(data).innerHTML;
//     // document.getElementById('div1').appendChild(s);
// }

// var card = document.getElementsByTagName('card');
// var choice = document.getElementsByClassName('choice');
// console.log(card);
// var dragItem = null;

// for (var i of card){
//     console.log(i);
//     i.addEventListener('dragstart',dragStart);
//     i.addEventListener('dragend', dragEnd);
// }

// function dragStart(){
//     console.log('start');
//     dragItem = this;
//     setTimeout(()=>this.style.display = "none", 0);
// }

// function dragEnd(){
//     setTimeout(()=>this.style.display = "block", 0);
//     dragItem = null;
// }

// for (var j of choice){
//     j.addEventListener('dragover', dragOver);
//     j.addEventListener('dragenter', dragEnter);
//     j.addEventListener('dragleave', dragLeave);
//     j.addEventListener('drop', Drop);
// }

// function Drop(){
//     console.log(dragItem);
//     this.append(dragItem);
// }

// function dragOver(e){
//     e.preventDefault();
// }

// function dragEnter(e){
//     e.preventDefault();
// }

// function dragLeave(){
    
// }

// const cards = document.querySelectorAll('.card')
// const col = document.querySelectorAll('.col')

// cards.forEach(card => {
//     card.addEventListener('dragstart', dragStart)
//     card.addEventListener('dragend', dragEnd)
// });

// function dragStart() {
//     console.log('drag started');
// }
// function dragEnd() {
//     console.log('drag ended');
// }
function allowDrop(ev) {
    ev.preventDefault();
  }
  
  function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
  }
  
  function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
  }
