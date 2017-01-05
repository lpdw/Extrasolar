<?php

/* @WebProfiler/Profiler/toolbar_item.html.twig */
class __TwigTemplate_496718af8f1b9d2d4cd8bdb3d0899eb74cb5a48eb88090680333a4bb36e692e8 extends Twig_Template
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
<<<<<<< HEAD
        $__internal_481587797f9a4ae8439f1028b1f904930feec266a13ea728aa990be128620573 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_481587797f9a4ae8439f1028b1f904930feec266a13ea728aa990be128620573->enter($__internal_481587797f9a4ae8439f1028b1f904930feec266a13ea728aa990be128620573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));

        $__internal_b4683ab4911f4ebf4db9363da3b0e2ffd5371f1ab041acedede5584682dc7470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4683ab4911f4ebf4db9363da3b0e2ffd5371f1ab041acedede5584682dc7470->enter($__internal_b4683ab4911f4ebf4db9363da3b0e2ffd5371f1ab041acedede5584682dc7470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));
=======
        $__internal_e96fe943a363dd0ab0898c94604a6d5c18e031a702bf1032688e469f72babd8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e96fe943a363dd0ab0898c94604a6d5c18e031a702bf1032688e469f72babd8b->enter($__internal_e96fe943a363dd0ab0898c94604a6d5c18e031a702bf1032688e469f72babd8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));

        $__internal_83e04e03901b074bb154e42e1a0fea83edd042191711121b06f541b84f96a4b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83e04e03901b074bb154e42e1a0fea83edd042191711121b06f541b84f96a4b6->enter($__internal_83e04e03901b074bb154e42e1a0fea83edd042191711121b06f541b84f96a4b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));
>>>>>>> 305a5c83807d551c85ea4575bf6b100c3f8213a3

        // line 1
        echo "<div class=\"sf-toolbar-block sf-toolbar-block-";
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo " sf-toolbar-status-";
        echo twig_escape_filter($this->env, ((array_key_exists("status", $context)) ? (_twig_default_filter(($context["status"] ?? $this->getContext($context, "status")), "normal")) : ("normal")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ((array_key_exists("additional_classes", $context)) ? (_twig_default_filter(($context["additional_classes"] ?? $this->getContext($context, "additional_classes")), "")) : ("")), "html", null, true);
        echo "\">
    ";
        // line 2
        if (( !array_key_exists("link", $context) || ($context["link"] ?? $this->getContext($context, "link")))) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => ($context["token"] ?? $this->getContext($context, "token")), "panel" => ($context["name"] ?? $this->getContext($context, "name")))), "html", null, true);
            echo "\">";
        }
        // line 3
        echo "        <div class=\"sf-toolbar-icon\">";
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter(($context["icon"] ?? $this->getContext($context, "icon")), "")) : ("")), "html", null, true);
        echo "</div>
    ";
        // line 4
        if (((array_key_exists("link", $context)) ? (_twig_default_filter(($context["link"] ?? $this->getContext($context, "link")), false)) : (false))) {
            echo "</a>";
        }
        // line 5
        echo "        <div class=\"sf-toolbar-info\">";
        echo twig_escape_filter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter(($context["text"] ?? $this->getContext($context, "text")), "")) : ("")), "html", null, true);
        echo "</div>
</div>
";
        
<<<<<<< HEAD
        $__internal_481587797f9a4ae8439f1028b1f904930feec266a13ea728aa990be128620573->leave($__internal_481587797f9a4ae8439f1028b1f904930feec266a13ea728aa990be128620573_prof);

        
        $__internal_b4683ab4911f4ebf4db9363da3b0e2ffd5371f1ab041acedede5584682dc7470->leave($__internal_b4683ab4911f4ebf4db9363da3b0e2ffd5371f1ab041acedede5584682dc7470_prof);
=======
        $__internal_e96fe943a363dd0ab0898c94604a6d5c18e031a702bf1032688e469f72babd8b->leave($__internal_e96fe943a363dd0ab0898c94604a6d5c18e031a702bf1032688e469f72babd8b_prof);

        
        $__internal_83e04e03901b074bb154e42e1a0fea83edd042191711121b06f541b84f96a4b6->leave($__internal_83e04e03901b074bb154e42e1a0fea83edd042191711121b06f541b84f96a4b6_prof);
>>>>>>> 305a5c83807d551c85ea4575bf6b100c3f8213a3

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  45 => 4,  40 => 3,  34 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"sf-toolbar-block sf-toolbar-block-{{ name }} sf-toolbar-status-{{ status|default('normal') }} {{ additional_classes|default('') }}\">
    {% if link is not defined or link %}<a href=\"{{ path('_profiler', { token: token, panel: name }) }}\">{% endif %}
        <div class=\"sf-toolbar-icon\">{{ icon|default('') }}</div>
    {% if link|default(false) %}</a>{% endif %}
        <div class=\"sf-toolbar-info\">{{ text|default('') }}</div>
</div>
", "@WebProfiler/Profiler/toolbar_item.html.twig", "/Applications/MAMP/htdocs/Extrasolar/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_item.html.twig");
    }
}
