<?php

/* home.tpl.php */
class __TwigTemplate_bad711f882a0f8d7177225ae84a68d094076eed66ead1a0f993ae34cc5100f2e extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <title></title>
  </head>
  <body>
    <h1>Hellow Twig</h1>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "home.tpl.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home.tpl.php", "/home/student/PROJECTS/PHP/Viorel/traker/app/views/home.tpl.php");
    }
}
