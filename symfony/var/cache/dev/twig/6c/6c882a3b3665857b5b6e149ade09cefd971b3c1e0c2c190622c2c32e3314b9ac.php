<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_5a4a98caf8686541014c99dc7f196f0148a568adb6fbf50dd8f44593814b227f extends Twig_Template
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
        $__internal_93fc84fac06f835a497822a39f1529f41fae3703292e59b1e6712db77ac9b404 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93fc84fac06f835a497822a39f1529f41fae3703292e59b1e6712db77ac9b404->enter($__internal_93fc84fac06f835a497822a39f1529f41fae3703292e59b1e6712db77ac9b404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_c6df8f9ae170296067c573c2c9c6236aeb1a2df3053287aa76c347be34339f0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6df8f9ae170296067c573c2c9c6236aeb1a2df3053287aa76c347be34339f0a->enter($__internal_c6df8f9ae170296067c573c2c9c6236aeb1a2df3053287aa76c347be34339f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93fc84fac06f835a497822a39f1529f41fae3703292e59b1e6712db77ac9b404->leave($__internal_93fc84fac06f835a497822a39f1529f41fae3703292e59b1e6712db77ac9b404_prof);

        
        $__internal_c6df8f9ae170296067c573c2c9c6236aeb1a2df3053287aa76c347be34339f0a->leave($__internal_c6df8f9ae170296067c573c2c9c6236aeb1a2df3053287aa76c347be34339f0a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_64680a02162fd42c79d6769586f80422a3e311ed0950074c0a28a18c73bb9931 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64680a02162fd42c79d6769586f80422a3e311ed0950074c0a28a18c73bb9931->enter($__internal_64680a02162fd42c79d6769586f80422a3e311ed0950074c0a28a18c73bb9931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c08942a196782210cc58649e4a10ee1fabf81baa5a9d4892cb3fd274e397fdea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c08942a196782210cc58649e4a10ee1fabf81baa5a9d4892cb3fd274e397fdea->enter($__internal_c08942a196782210cc58649e4a10ee1fabf81baa5a9d4892cb3fd274e397fdea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_c08942a196782210cc58649e4a10ee1fabf81baa5a9d4892cb3fd274e397fdea->leave($__internal_c08942a196782210cc58649e4a10ee1fabf81baa5a9d4892cb3fd274e397fdea_prof);

        
        $__internal_64680a02162fd42c79d6769586f80422a3e311ed0950074c0a28a18c73bb9931->leave($__internal_64680a02162fd42c79d6769586f80422a3e311ed0950074c0a28a18c73bb9931_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/Applications/MAMP/htdocs/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
