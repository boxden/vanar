<?php

/* signup-form.tpl.php */
class __TwigTemplate_e6559570640ac43ef2a9e206cfd40613197847355e7404944e4ee28ac1a56c6a extends Twig_Template
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
        echo "
<form action=\"?user/create\" method=\"post\" class=\"w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin\">
  <h2 class=\"w3-center\"> Create an acaunt</h2>

<!-- //////////////////////////user name /////////// -->
  <div class=\"w3-row w3-section\">
     <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge fa fa-user\"></i></div>
    <div class=\"w3-rest\">
      <input class=\"w3-input w3-border\" name=\"username\" type=\"text\" placeholder=\"Username\">
    </div>
</div>

<!--  ///////////////////////////// passwords /////////////-->
  <div class=\"w3-row w3-section\">
       <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge fa fa-lock\"></i></div>
    <div class=\"w3-rest\">
      <input class=\"w3-input w3-border\" name=\"password1\" type=\"password\" placeholder=\"Password\">
    </div>

</div>

<div class=\"w3-row w3-section\">
  <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge fa fa-lock\"></i></div>
    <div class=\"w3-rest\">
      <input class=\"w3-input w3-border\" name=\"password2\" type=\"password\" placeholder=\"Confirm password\">
    </div>
</div>
<!-- /////////////////// Email ///////////////-->
<div class=\"w3-row w3-section\">
  <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge fa fa-envelope-o\"></i></div>

    <div class=\"w3-rest\">
      <input class=\"w3-input w3-border\" name=\"email\" type=\"text\" placeholder=\"Email\">
    </div>
</div>

<button class=\"w3-btn-block w3-teal w3-input\">Button<input style=\"visibility: hidden\"  type=\"submit\" value=\"Create!\"></button>
<br>
</form>
";
        // line 40
        if (($context["error"] ?? null)) {
            // line 41
            echo "<div style=\"color:red;\" > ";
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "</div>
";
        }
        // line 43
        echo "
username
password
email
";
    }

    public function getTemplateName()
    {
        return "signup-form.tpl.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 43,  62 => 41,  60 => 40,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<form action=\"?user/create\" method=\"post\" class=\"w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin\">
  <h2 class=\"w3-center\"> Create an acaunt</h2>

<!-- //////////////////////////user name /////////// -->
  <div class=\"w3-row w3-section\">
     <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge fa fa-user\"></i></div>
    <div class=\"w3-rest\">
      <input class=\"w3-input w3-border\" name=\"username\" type=\"text\" placeholder=\"Username\">
    </div>
</div>

<!--  ///////////////////////////// passwords /////////////-->
  <div class=\"w3-row w3-section\">
       <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge fa fa-lock\"></i></div>
    <div class=\"w3-rest\">
      <input class=\"w3-input w3-border\" name=\"password1\" type=\"password\" placeholder=\"Password\">
    </div>

</div>

<div class=\"w3-row w3-section\">
  <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge fa fa-lock\"></i></div>
    <div class=\"w3-rest\">
      <input class=\"w3-input w3-border\" name=\"password2\" type=\"password\" placeholder=\"Confirm password\">
    </div>
</div>
<!-- /////////////////// Email ///////////////-->
<div class=\"w3-row w3-section\">
  <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge fa fa-envelope-o\"></i></div>

    <div class=\"w3-rest\">
      <input class=\"w3-input w3-border\" name=\"email\" type=\"text\" placeholder=\"Email\">
    </div>
</div>

<button class=\"w3-btn-block w3-teal w3-input\">Button<input style=\"visibility: hidden\"  type=\"submit\" value=\"Create!\"></button>
<br>
</form>
{% if error %}
<div style=\"color:red;\" > {{error}}</div>
{% endif %}

username
password
email
", "signup-form.tpl.php", "/home/student/PROJECTS/PHP/Viorel/traker_2/app/views/signup-form.tpl.php");
    }
}
