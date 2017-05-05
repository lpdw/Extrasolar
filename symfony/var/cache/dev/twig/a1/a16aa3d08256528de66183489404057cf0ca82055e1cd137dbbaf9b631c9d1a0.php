<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_7d31937f8fb0e0c0f9a43bda512c405f0d76fff5efedde06a8faf8bcd19c1f70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50cffd0c34f90e0a3f386a9dc450671c068af17b1b576842d9bf3c3a7e7084b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50cffd0c34f90e0a3f386a9dc450671c068af17b1b576842d9bf3c3a7e7084b9->enter($__internal_50cffd0c34f90e0a3f386a9dc450671c068af17b1b576842d9bf3c3a7e7084b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_6900ae3686c59d949c922d608b8dd0254be7555629089953ae201d15dad499f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6900ae3686c59d949c922d608b8dd0254be7555629089953ae201d15dad499f3->enter($__internal_6900ae3686c59d949c922d608b8dd0254be7555629089953ae201d15dad499f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50cffd0c34f90e0a3f386a9dc450671c068af17b1b576842d9bf3c3a7e7084b9->leave($__internal_50cffd0c34f90e0a3f386a9dc450671c068af17b1b576842d9bf3c3a7e7084b9_prof);

        
        $__internal_6900ae3686c59d949c922d608b8dd0254be7555629089953ae201d15dad499f3->leave($__internal_6900ae3686c59d949c922d608b8dd0254be7555629089953ae201d15dad499f3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8e8601ad335cf44b90d03287322276a1614719173e3d5b99d2b18129207a07c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e8601ad335cf44b90d03287322276a1614719173e3d5b99d2b18129207a07c7->enter($__internal_8e8601ad335cf44b90d03287322276a1614719173e3d5b99d2b18129207a07c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_591e791f8813e25dafbfff527fb80b2e11965ef89742dff40703d661eb21af03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_591e791f8813e25dafbfff527fb80b2e11965ef89742dff40703d661eb21af03->enter($__internal_591e791f8813e25dafbfff527fb80b2e11965ef89742dff40703d661eb21af03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_591e791f8813e25dafbfff527fb80b2e11965ef89742dff40703d661eb21af03->leave($__internal_591e791f8813e25dafbfff527fb80b2e11965ef89742dff40703d661eb21af03_prof);

        
        $__internal_8e8601ad335cf44b90d03287322276a1614719173e3d5b99d2b18129207a07c7->leave($__internal_8e8601ad335cf44b90d03287322276a1614719173e3d5b99d2b18129207a07c7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/lpdw/Desktop/Extrasolar/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
