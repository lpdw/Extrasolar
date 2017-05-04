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
        $__internal_f2bb952b52b7ffc6689d2e2f5959982813a627671803b0634556e9ddc654dc78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2bb952b52b7ffc6689d2e2f5959982813a627671803b0634556e9ddc654dc78->enter($__internal_f2bb952b52b7ffc6689d2e2f5959982813a627671803b0634556e9ddc654dc78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_2673fb2fd89b734a25d2245bc4be6863571693ec0680a404d8516b963a5f9429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2673fb2fd89b734a25d2245bc4be6863571693ec0680a404d8516b963a5f9429->enter($__internal_2673fb2fd89b734a25d2245bc4be6863571693ec0680a404d8516b963a5f9429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2bb952b52b7ffc6689d2e2f5959982813a627671803b0634556e9ddc654dc78->leave($__internal_f2bb952b52b7ffc6689d2e2f5959982813a627671803b0634556e9ddc654dc78_prof);

        
        $__internal_2673fb2fd89b734a25d2245bc4be6863571693ec0680a404d8516b963a5f9429->leave($__internal_2673fb2fd89b734a25d2245bc4be6863571693ec0680a404d8516b963a5f9429_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_af832b66837d9ed1bcf9485ca5dc5cb708b2497f68ce11508db456a564a6b8ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af832b66837d9ed1bcf9485ca5dc5cb708b2497f68ce11508db456a564a6b8ff->enter($__internal_af832b66837d9ed1bcf9485ca5dc5cb708b2497f68ce11508db456a564a6b8ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a2cb625c537625ed681c44bf3a89581af0707d348b9691a432440d4da1e9b33b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2cb625c537625ed681c44bf3a89581af0707d348b9691a432440d4da1e9b33b->enter($__internal_a2cb625c537625ed681c44bf3a89581af0707d348b9691a432440d4da1e9b33b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_a2cb625c537625ed681c44bf3a89581af0707d348b9691a432440d4da1e9b33b->leave($__internal_a2cb625c537625ed681c44bf3a89581af0707d348b9691a432440d4da1e9b33b_prof);

        
        $__internal_af832b66837d9ed1bcf9485ca5dc5cb708b2497f68ce11508db456a564a6b8ff->leave($__internal_af832b66837d9ed1bcf9485ca5dc5cb708b2497f68ce11508db456a564a6b8ff_prof);

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
