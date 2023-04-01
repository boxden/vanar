<?php

/* home.tpl.php */
class __TwigTemplate_c86e862ae0bcd53292766ef59fd747c54bfaebedd1d156f148c4bd69cec09081 extends Twig_Template
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
    <h1>Hellow Twig ";
        // line 8
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "</h1>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "home.tpl.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <title></title>
  </head>
  <body>
    <h1>Hellow Twig {{ name }}</h1>
  </body>
</html>
", "home.tpl.php", "/home/student/PROJECTS/PHP/Viorel/traker/app/views/home.tpl.php");
    }
}
