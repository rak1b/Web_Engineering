const submit_func = () => {
  var time_slot = document.getElementById("time_slot");
  var time_slot_value = time_slot.options[select.selectedIndex].value;
  console.log(time_slot_value);
};

// const fun = () => {
//     var time_slot = document.getElementById("time_slot");
//     var time_slot_value = time_slot.options[time_slot.selectedIndex].value;
//     const short_slot_value = time_slot_value.split(" ");
//     console.log(short_slot_value[0]);
//   };






  function fun() {

    //   var project = prompt("Please enter project name");
    var fname = document.getElementById("fname");
    var lname = document.getElementById("lname");
    var sid = document.getElementById("sid");
    var email = document.getElementById("email");
    var time_slot = document.getElementById("time_slot");
    var selected_slot = time_slot.options[time_slot.selectedIndex].value;
    const slot = selected_slot.split(" ")[0];


    console.log(slot);

    // if (slot != null && slot !="") {
    //       $.post("index.php", { 
    //             'fname':fname,
    //             'lname':lname,
    //             'sid':sid,
    //             'email':email,
    //             'slot' : slot
    //         },function(response){
    //          console.log(response);
    //      });
    // }
  }