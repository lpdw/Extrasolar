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
        $__internal_c9fbd93cfd5da50557a3ea9522865272be67112194ac67bd0d9a3c20f56995af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9fbd93cfd5da50557a3ea9522865272be67112194ac67bd0d9a3c20f56995af->enter($__internal_c9fbd93cfd5da50557a3ea9522865272be67112194ac67bd0d9a3c20f56995af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_a11505210b3798f230d976a44b5f51e9a076c12e8718389cdcbbbc020c90e2c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a11505210b3798f230d976a44b5f51e9a076c12e8718389cdcbbbc020c90e2c2->enter($__internal_a11505210b3798f230d976a44b5f51e9a076c12e8718389cdcbbbc020c90e2c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9fbd93cfd5da50557a3ea9522865272be67112194ac67bd0d9a3c20f56995af->leave($__internal_c9fbd93cfd5da50557a3ea9522865272be67112194ac67bd0d9a3c20f56995af_prof);

        
        $__internal_a11505210b3798f230d976a44b5f51e9a076c12e8718389cdcbbbc020c90e2c2->leave($__internal_a11505210b3798f230d976a44b5f51e9a076c12e8718389cdcbbbc020c90e2c2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_74c0b061af52e7dd11fc36b2502df78312eb386f1820e9f101effb2d25e9751c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74c0b061af52e7dd11fc36b2502df78312eb386f1820e9f101effb2d25e9751c->enter($__internal_74c0b061af52e7dd11fc36b2502df78312eb386f1820e9f101effb2d25e9751c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_98e22085ad64d52ff8e946a138045c945c0736e55ae62eab7ff4168159b3567f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98e22085ad64d52ff8e946a138045c945c0736e55ae62eab7ff4168159b3567f->enter($__internal_98e22085ad64d52ff8e946a138045c945c0736e55ae62eab7ff4168159b3567f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_98e22085ad64d52ff8e946a138045c945c0736e55ae62eab7ff4168159b3567f->leave($__internal_98e22085ad64d52ff8e946a138045c945c0736e55ae62eab7ff4168159b3567f_prof);

        
        $__internal_74c0b061af52e7dd11fc36b2502df78312eb386f1820e9f101effb2d25e9751c->leave($__internal_74c0b061af52e7dd11fc36b2502df78312eb386f1820e9f101effb2d25e9751c_prof);

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
