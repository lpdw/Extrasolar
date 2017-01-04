<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_1c2610247c2699547dbe923227a0a5cfe5a3ef83069ffaebf6abd5bcdb24628d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59c210d7baf37e15949171e6793f222213cbd75e121ad8b1aa78eedd38652804 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59c210d7baf37e15949171e6793f222213cbd75e121ad8b1aa78eedd38652804->enter($__internal_59c210d7baf37e15949171e6793f222213cbd75e121ad8b1aa78eedd38652804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d08e033a51e47e31df3b63e0778170854f7b2b8cdf4a947c079168c17a8c8588 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d08e033a51e47e31df3b63e0778170854f7b2b8cdf4a947c079168c17a8c8588->enter($__internal_d08e033a51e47e31df3b63e0778170854f7b2b8cdf4a947c079168c17a8c8588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59c210d7baf37e15949171e6793f222213cbd75e121ad8b1aa78eedd38652804->leave($__internal_59c210d7baf37e15949171e6793f222213cbd75e121ad8b1aa78eedd38652804_prof);

        
        $__internal_d08e033a51e47e31df3b63e0778170854f7b2b8cdf4a947c079168c17a8c8588->leave($__internal_d08e033a51e47e31df3b63e0778170854f7b2b8cdf4a947c079168c17a8c8588_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ddf35d9086deb1f6fa8dfccb208b572b4359c7649d5c0ba3207afbad9802ebb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddf35d9086deb1f6fa8dfccb208b572b4359c7649d5c0ba3207afbad9802ebb2->enter($__internal_ddf35d9086deb1f6fa8dfccb208b572b4359c7649d5c0ba3207afbad9802ebb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3a7e9bf418c0306e7ecd13e2882a733e5fdd874cc5273dc957cc1f8b7cf523ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a7e9bf418c0306e7ecd13e2882a733e5fdd874cc5273dc957cc1f8b7cf523ba->enter($__internal_3a7e9bf418c0306e7ecd13e2882a733e5fdd874cc5273dc957cc1f8b7cf523ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_3a7e9bf418c0306e7ecd13e2882a733e5fdd874cc5273dc957cc1f8b7cf523ba->leave($__internal_3a7e9bf418c0306e7ecd13e2882a733e5fdd874cc5273dc957cc1f8b7cf523ba_prof);

        
        $__internal_ddf35d9086deb1f6fa8dfccb208b572b4359c7649d5c0ba3207afbad9802ebb2->leave($__internal_ddf35d9086deb1f6fa8dfccb208b572b4359c7649d5c0ba3207afbad9802ebb2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_21e8f96d20ba8b9bf4b4d308d24bdfb7d19d772483c19dee00ab75017ab769a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21e8f96d20ba8b9bf4b4d308d24bdfb7d19d772483c19dee00ab75017ab769a8->enter($__internal_21e8f96d20ba8b9bf4b4d308d24bdfb7d19d772483c19dee00ab75017ab769a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8736b9bd5686663c884786da1321111d8ce34996d0cef4cce22e7f5c1a897908 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8736b9bd5686663c884786da1321111d8ce34996d0cef4cce22e7f5c1a897908->enter($__internal_8736b9bd5686663c884786da1321111d8ce34996d0cef4cce22e7f5c1a897908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8736b9bd5686663c884786da1321111d8ce34996d0cef4cce22e7f5c1a897908->leave($__internal_8736b9bd5686663c884786da1321111d8ce34996d0cef4cce22e7f5c1a897908_prof);

        
        $__internal_21e8f96d20ba8b9bf4b4d308d24bdfb7d19d772483c19dee00ab75017ab769a8->leave($__internal_21e8f96d20ba8b9bf4b4d308d24bdfb7d19d772483c19dee00ab75017ab769a8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1b6839a6145f8f68266e9e73051ea68a2e0deca9be843d74b6f309be048522ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b6839a6145f8f68266e9e73051ea68a2e0deca9be843d74b6f309be048522ba->enter($__internal_1b6839a6145f8f68266e9e73051ea68a2e0deca9be843d74b6f309be048522ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_32285aa2aaf2bf5bf3e243757f49639955519d24815b59e80d3271fd9c88c43d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32285aa2aaf2bf5bf3e243757f49639955519d24815b59e80d3271fd9c88c43d->enter($__internal_32285aa2aaf2bf5bf3e243757f49639955519d24815b59e80d3271fd9c88c43d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_32285aa2aaf2bf5bf3e243757f49639955519d24815b59e80d3271fd9c88c43d->leave($__internal_32285aa2aaf2bf5bf3e243757f49639955519d24815b59e80d3271fd9c88c43d_prof);

        
        $__internal_1b6839a6145f8f68266e9e73051ea68a2e0deca9be843d74b6f309be048522ba->leave($__internal_1b6839a6145f8f68266e9e73051ea68a2e0deca9be843d74b6f309be048522ba_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/Extrasolar/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
