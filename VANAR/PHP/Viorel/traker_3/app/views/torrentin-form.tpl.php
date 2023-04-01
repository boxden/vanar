{% extends "layout.tpl.php" %}
{% block content %}
<form action="?torrent/create" method="post" enctype="multipart/form-data" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin">
  <h2 class="w3-center"> Torrent Uplaod</h2>
<!-- //////////////////////////name /////////// -->
  <div class="w3-row w3-section">
     <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-sticky-note"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="name" type="text" placeholder="Name">
    </div>
</div>

<!--  //////////////////////////// gen /////////////-->
  <div class="w3-row w3-section">
       <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-stop-circle"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="type" type="text" placeholder="Type">
    </div>
</div>
<!--  ///////////////////////////// type /////////////-->
  <div class="w3-row w3-section">
       <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-clipboard"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="gen" type="text" placeholder="Gen">
    </div>
  </div>

  <!--//////////////////////////////// Description ////////// -->
  <div class="w3-row w3-section">
       <div class="w3-col" style="width:50px"><i class="w3-xxlarge 	fa fa-comment-o"></i></div>
    <div class="w3-rest">
      <textarea class="w3-input" name="description" rows="5" cols="20" placeholder="Describe your torrent in maximum 150 characters"></textarea>
    </div>
  </div>
 <!--////////////////////////////// Upload File //// -->
 <div class="w3-row w3-section">
      <div class="w3-col" style="width:50px"><i class="w3-xxlarge 	fa fa-file"></i></div>
 <label>Put torrent File here</label>
   <div class="w3-rest">
     <input class="w3-input w3-border" name="torrent" type="file">
   </div>
 </div>
 <!--////////////////////////////// Upload image //// -->
 <div class="w3-row w3-section">
      <div class="w3-col" style="width:50px"><i class="w3-xxlarge 	fa fa-file-image-o"></i></div>
 <label>Put Image here</label>
   <div class="w3-rest">
     <input class="w3-input w3-border" name="photo" type="file">
   </div>
 </div>
 <!--////////////////////////////// Submit button ///////// -->

  <button class="w3-btn-block w3-blue w3-input"><i class="fa fa-upload"></i><input style="visibility: hidden"  type="submit" value="Create!"></button>
<br>
{% if error %}
<div style="color:red;" > {{error}}</div>
{% endif %}
</form>
{% endblock %}
