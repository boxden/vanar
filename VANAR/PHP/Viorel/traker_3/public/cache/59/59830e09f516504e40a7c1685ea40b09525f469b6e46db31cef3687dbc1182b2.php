<?php

/* torrentin-form.tpl.php */
class __TwigTemplate_a5174f35c30ec91f36fb65daa5f89b3ea68d94edc2e698e3f59fa50b11f956c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form action=\"?torrent/create\" method=\"post\" enctype=\"multipart/form-data\" class=\"w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin\">
  <h2 class=\"w3-center\"> Torrent Uplaod</h2>
<!-- //////////////////////////name /////////// -->
  <div class=\"w3-row w3-section\">
     <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge fa fa-sticky-note\"></i></div>
    <div class=\"w3-rest\">
      <input class=\"w3-input w3-border\" name=\"name\" type=\"text\" placeholder=\"Name\">
    </div>
</div>

<!--  //////////////////////////// gen /////////////-->
  <div class=\"w3-row w3-section\">
       <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge fa fa-stop-circle\"></i></div>
    <div class=\"w3-rest\">
      <input class=\"w3-input w3-border\" name=\"type\" type=\"text\" placeholder=\"Type\">
    </div>
</div>
<!--  ///////////////////////////// type /////////////-->
  <div class=\"w3-row w3-section\">
       <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge fa fa-clipboard\"></i></div>
    <div class=\"w3-rest\">
      <input class=\"w3-input w3-border\" name=\"gen\" type=\"text\" placeholder=\"Gen\">
    </div>
  </div>

  <!--//////////////////////////////// Description ////////// -->
  <div class=\"w3-row w3-section\">
       <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge \tfa fa-comment-o\"></i></div>
    <div class=\"w3-rest\">
      <textarea class=\"w3-input\" name=\"description\" rows=\"5\" cols=\"20\" placeholder=\"Describe your torrent in maximum 150 characters\"></textarea>
    </div>
  </div>
 <!--////////////////////////////// Upload File //// -->
 <div class=\"w3-row w3-section\">
      <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge \tfa fa-file\"></i></div>
 <label>Put torrent File here</label>
   <div class=\"w3-rest\">
     <input class=\"w3-input w3-border\" name=\"torrent\" type=\"file\">
   </div>
 </div>
 <!--////////////////////////////// Upload image //// -->
 <div class=\"w3-row w3-section\">
      <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge \tfa fa-file-image-o\"></i></div>
 <label>Put Image here</label>
   <div class=\"w3-rest\">
     <input class=\"w3-input w3-border\" name=\"photo\" type=\"file\">
   </div>
 </div>
 <!--////////////////////////////// Submit button ///////// -->

  <button class=\"w3-btn-block w3-blue w3-input\"><i class=\"fa fa-upload\"></i><input style=\"visibility: hidden\"  type=\"submit\" value=\"Create!\"></button>
<br>
";
        // line 53
        if (($context["error"] ?? null)) {
            // line 54
            echo "<div style=\"color:red;\" > ";
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "</div>
";
        }
        // line 56
        echo "</form>
";
    }

    public function getTemplateName()
    {
        return "torrentin-form.tpl.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 56,  75 => 54,  73 => 53,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form action=\"?torrent/create\" method=\"post\" enctype=\"multipart/form-data\" class=\"w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin\">
  <h2 class=\"w3-center\"> Torrent Uplaod</h2>
<!-- //////////////////////////name /////////// -->
  <div class=\"w3-row w3-section\">
     <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge fa fa-sticky-note\"></i></div>
    <div class=\"w3-rest\">
      <input class=\"w3-input w3-border\" name=\"name\" type=\"text\" placeholder=\"Name\">
    </div>
</div>

<!--  //////////////////////////// gen /////////////-->
  <div class=\"w3-row w3-section\">
       <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge fa fa-stop-circle\"></i></div>
    <div class=\"w3-rest\">
      <input class=\"w3-input w3-border\" name=\"type\" type=\"text\" placeholder=\"Type\">
    </div>
</div>
<!--  ///////////////////////////// type /////////////-->
  <div class=\"w3-row w3-section\">
       <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge fa fa-clipboard\"></i></div>
    <div class=\"w3-rest\">
      <input class=\"w3-input w3-border\" name=\"gen\" type=\"text\" placeholder=\"Gen\">
    </div>
  </div>

  <!--//////////////////////////////// Description ////////// -->
  <div class=\"w3-row w3-section\">
       <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge \tfa fa-comment-o\"></i></div>
    <div class=\"w3-rest\">
      <textarea class=\"w3-input\" name=\"description\" rows=\"5\" cols=\"20\" placeholder=\"Describe your torrent in maximum 150 characters\"></textarea>
    </div>
  </div>
 <!--////////////////////////////// Upload File //// -->
 <div class=\"w3-row w3-section\">
      <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge \tfa fa-file\"></i></div>
 <label>Put torrent File here</label>
   <div class=\"w3-rest\">
     <input class=\"w3-input w3-border\" name=\"torrent\" type=\"file\">
   </div>
 </div>
 <!--////////////////////////////// Upload image //// -->
 <div class=\"w3-row w3-section\">
      <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge \tfa fa-file-image-o\"></i></div>
 <label>Put Image here</label>
   <div class=\"w3-rest\">
     <input class=\"w3-input w3-border\" name=\"photo\" type=\"file\">
   </div>
 </div>
 <!--////////////////////////////// Submit button ///////// -->

  <button class=\"w3-btn-block w3-blue w3-input\"><i class=\"fa fa-upload\"></i><input style=\"visibility: hidden\"  type=\"submit\" value=\"Create!\"></button>
<br>
{% if error %}
<div style=\"color:red;\" > {{error}}</div>
{% endif %}
</form>
", "torrentin-form.tpl.php", "C:\\Users\\Faust\\Desktop\\PHP\\traker_3\\app\\views\\torrentin-form.tpl.php");
    }
}
