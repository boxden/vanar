<form action="?user/login" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin">
  <h2 class="w3-center"> Login</h2>

<!-- //////////////////////////user name /////////// -->
  <div class="w3-row w3-section">
     <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="username" type="text" placeholder="Username">
    </div>
</div>

<!--  ///////////////////////////// passwords /////////////-->
  <div class="w3-row w3-section">
       <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-lock"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="password1" type="password" placeholder="Password">
    </div>
</div>
<div class="w3-rest">
  <button class="w3-btn-block w3-teal w3-input">Entere<input style="visibility: hidden"  type="submit" value="Create!"></button>
<br>
</div>
{% if error %}
<div style="color:red;" > {{error}}</div>
{% endif %}
</form>
