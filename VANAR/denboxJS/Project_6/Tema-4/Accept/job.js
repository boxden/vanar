function save(){
  // get the new task from input
  var new_task = document.getElementById("task").value;
  // get old tasks from storage
  var old_tasks = JSON.parse( localStorage.getItem("tasks") );
  if (old_tasks == null) old_tasks = [];
  // add new task to the array
  old_tasks.push( new_task );
  localStorage.setItem("task", JSON.stringify( old_tasks) )
}

//DZ

localStorage -> array[] -> html ul/li
