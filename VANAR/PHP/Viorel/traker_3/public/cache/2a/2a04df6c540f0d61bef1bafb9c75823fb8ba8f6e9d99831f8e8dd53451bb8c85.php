<?php

/* user-list.tpl.php */
class __TwigTemplate_96c7973dc3dfb0e4b0773b3f730868b2900d1d9ce40411cf839791f1825108cf extends Twig_Template
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
        echo "<ul>

";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 4
            echo "  <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nikname", array()));
            echo "</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "
</ul>
";
    }

    public function getTemplateName()
    {
        return "user-list.tpl.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul>

{% for user in users %}
  <li>{{ user.nikname|e }}</li>
{% endfor %}

</ul>
", "user-list.tpl.php", "/home/student/PROJECTS/PHP/Viorel/traker_2/app/views/user-list.tpl.php");
    }
}
