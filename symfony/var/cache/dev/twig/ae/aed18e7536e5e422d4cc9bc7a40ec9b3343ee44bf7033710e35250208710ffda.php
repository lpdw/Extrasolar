<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_67c5fb8b402a0432c64400dc79f563138dbee8a9408c47ac39b373b5fc6a9cd2 extends Twig_Template
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
        $__internal_79969f14c3b390d2c536214797cb255e67569d7c1f855f7d7f160e9bd6a118a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79969f14c3b390d2c536214797cb255e67569d7c1f855f7d7f160e9bd6a118a9->enter($__internal_79969f14c3b390d2c536214797cb255e67569d7c1f855f7d7f160e9bd6a118a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_6d5a1ebeb78160a74eaec4a3cb1dca8f3f794e23f9d8129cf0eeead245eeb60e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d5a1ebeb78160a74eaec4a3cb1dca8f3f794e23f9d8129cf0eeead245eeb60e->enter($__internal_6d5a1ebeb78160a74eaec4a3cb1dca8f3f794e23f9d8129cf0eeead245eeb60e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79969f14c3b390d2c536214797cb255e67569d7c1f855f7d7f160e9bd6a118a9->leave($__internal_79969f14c3b390d2c536214797cb255e67569d7c1f855f7d7f160e9bd6a118a9_prof);

        
        $__internal_6d5a1ebeb78160a74eaec4a3cb1dca8f3f794e23f9d8129cf0eeead245eeb60e->leave($__internal_6d5a1ebeb78160a74eaec4a3cb1dca8f3f794e23f9d8129cf0eeead245eeb60e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_854fb3045bb8c52be94bac72c3ea4d1712376a5cb227d47305750dc237f62d3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_854fb3045bb8c52be94bac72c3ea4d1712376a5cb227d47305750dc237f62d3a->enter($__internal_854fb3045bb8c52be94bac72c3ea4d1712376a5cb227d47305750dc237f62d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3eec055e81bedc980d381df6c6bc54ec51bf84fb575a0d56dfac3d9ce7c221b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eec055e81bedc980d381df6c6bc54ec51bf84fb575a0d56dfac3d9ce7c221b3->enter($__internal_3eec055e81bedc980d381df6c6bc54ec51bf84fb575a0d56dfac3d9ce7c221b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_3eec055e81bedc980d381df6c6bc54ec51bf84fb575a0d56dfac3d9ce7c221b3->leave($__internal_3eec055e81bedc980d381df6c6bc54ec51bf84fb575a0d56dfac3d9ce7c221b3_prof);

        
        $__internal_854fb3045bb8c52be94bac72c3ea4d1712376a5cb227d47305750dc237f62d3a->leave($__internal_854fb3045bb8c52be94bac72c3ea4d1712376a5cb227d47305750dc237f62d3a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_42dff1ebfff2b21f80ae3f342410ace41b63e131d93c3a0512389783729a3e6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42dff1ebfff2b21f80ae3f342410ace41b63e131d93c3a0512389783729a3e6a->enter($__internal_42dff1ebfff2b21f80ae3f342410ace41b63e131d93c3a0512389783729a3e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4dcbfd9df7a5c517880a5e7a47d3e518515b38bbcf9451c60400f6fd7c96bb06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dcbfd9df7a5c517880a5e7a47d3e518515b38bbcf9451c60400f6fd7c96bb06->enter($__internal_4dcbfd9df7a5c517880a5e7a47d3e518515b38bbcf9451c60400f6fd7c96bb06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_4dcbfd9df7a5c517880a5e7a47d3e518515b38bbcf9451c60400f6fd7c96bb06->leave($__internal_4dcbfd9df7a5c517880a5e7a47d3e518515b38bbcf9451c60400f6fd7c96bb06_prof);

        
        $__internal_42dff1ebfff2b21f80ae3f342410ace41b63e131d93c3a0512389783729a3e6a->leave($__internal_42dff1ebfff2b21f80ae3f342410ace41b63e131d93c3a0512389783729a3e6a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4955d39ff7277593a008a6c04848abf443da94a2dc4677e9e33fd191789a8d91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4955d39ff7277593a008a6c04848abf443da94a2dc4677e9e33fd191789a8d91->enter($__internal_4955d39ff7277593a008a6c04848abf443da94a2dc4677e9e33fd191789a8d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_15b2d44a93a7b7132a65c2c9da258cd90c213695dd8660b2a5e4ade00fee8bdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15b2d44a93a7b7132a65c2c9da258cd90c213695dd8660b2a5e4ade00fee8bdf->enter($__internal_15b2d44a93a7b7132a65c2c9da258cd90c213695dd8660b2a5e4ade00fee8bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_15b2d44a93a7b7132a65c2c9da258cd90c213695dd8660b2a5e4ade00fee8bdf->leave($__internal_15b2d44a93a7b7132a65c2c9da258cd90c213695dd8660b2a5e4ade00fee8bdf_prof);

        
        $__internal_4955d39ff7277593a008a6c04848abf443da94a2dc4677e9e33fd191789a8d91->leave($__internal_4955d39ff7277593a008a6c04848abf443da94a2dc4677e9e33fd191789a8d91_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
