<?php

/* torrent-list.tpl.php */
class __TwigTemplate_fe019205581f63955ac303a3d198841936d38c2a3f99452111466b4fbb4174ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layout.tpl.php", "torrent-list.tpl.php", 2);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.tpl.php";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"w3-container w3-center\">
  <h2>Torrent list</h2>
</div>

<div class=\"w3-container\">
  <table class=\"w3-table-all\">
     <tr>
       </a>
       <th>Name</th>
       <th>Type</th>
       <th>Gen</th>
     </tr>

";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["torrents"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["torrent"]) {
            // line 18
            echo "<tr>
<th><a href=\"#\"> ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["torrent"], "name", array()));
            echo "</a></th>
  <th>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["torrent"], "type", array()));
            echo "</th>
  <th>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["torrent"], "gen", array()));
            echo "</th>
  </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['torrent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
</table>
</div>
";
    }

    public function getTemplateName()
    {
        return "torrent-list.tpl.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 24,  61 => 21,  57 => 20,  53 => 19,  50 => 18,  46 => 17,  31 => 4,  28 => 3,  11 => 2,);
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
{% extends \"layout.tpl.php\" %}
{% block content %}
<div class=\"w3-container w3-center\">
  <h2>Torrent list</h2>
</div>

<div class=\"w3-container\">
  <table class=\"w3-table-all\">
     <tr>
       </a>
       <th>Name</th>
       <th>Type</th>
       <th>Gen</th>
     </tr>

{% for torrent in torrents %}
<tr>
<th><a href=\"#\"> {{ torrent.name|e }}</a></th>
  <th>{{ torrent.type|e }}</th>
  <th>{{ torrent.gen|e }}</th>
  </tr>
{% endfor %}

</table>
</div>
{% endblock %}
", "torrent-list.tpl.php", "/home/student/PROJECTS/PHP/Viorel/traker_3/app/views/torrent-list.tpl.php");
    }
}
