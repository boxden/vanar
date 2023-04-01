<?php

/* layout.tpl.php */
class __TwigTemplate_4a5373fafb49d5e536013472306d8becd7777b1dad18a1acf348a5d524d8c534 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
      <title>index</title>
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
      <link rel=\"stylesheet\" href=\"http://www.w3schools.com/lib/w3.css\">
      <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    </head>
    <body>
        <div id=\"content\">";
        // line 10
        $this->displayBlock('content', $context, $blocks);
        echo "</div>

    </body>
</html>
";
    }

    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.tpl.php";
    }

    public function getDebugInfo()
    {
        return array (  31 => 10,  20 => 1,);
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
      <title>index</title>
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
      <link rel=\"stylesheet\" href=\"http://www.w3schools.com/lib/w3.css\">
      <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    </head>
    <body>
        <div id=\"content\">{% block content %}{% endblock %}</div>

    </body>
</html>
", "layout.tpl.php", "/home/student/PROJECTS/PHP/Viorel/traker_3/app/views/layout.tpl.php");
    }
}
