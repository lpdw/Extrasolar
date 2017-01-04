<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_48d41f524b5e1d5f24d03e1a3afe7423b6a4b18e52500c710cad310e5b28992b extends Twig_Template
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
        $__internal_a3eec8b63409f9e4df8b2396a1eba38f5bf787951202ac6bf2562676cf4609be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3eec8b63409f9e4df8b2396a1eba38f5bf787951202ac6bf2562676cf4609be->enter($__internal_a3eec8b63409f9e4df8b2396a1eba38f5bf787951202ac6bf2562676cf4609be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_c43f999e648fff9da4ca13057b1cc30625668d7fdfbd734efff4504a72de7cf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c43f999e648fff9da4ca13057b1cc30625668d7fdfbd734efff4504a72de7cf7->enter($__internal_c43f999e648fff9da4ca13057b1cc30625668d7fdfbd734efff4504a72de7cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3eec8b63409f9e4df8b2396a1eba38f5bf787951202ac6bf2562676cf4609be->leave($__internal_a3eec8b63409f9e4df8b2396a1eba38f5bf787951202ac6bf2562676cf4609be_prof);

        
        $__internal_c43f999e648fff9da4ca13057b1cc30625668d7fdfbd734efff4504a72de7cf7->leave($__internal_c43f999e648fff9da4ca13057b1cc30625668d7fdfbd734efff4504a72de7cf7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_de26144a4f7d2e33404ba9f296ce529d2ca2d43f8b0011f20fdcb423e9577299 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de26144a4f7d2e33404ba9f296ce529d2ca2d43f8b0011f20fdcb423e9577299->enter($__internal_de26144a4f7d2e33404ba9f296ce529d2ca2d43f8b0011f20fdcb423e9577299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_899362122dd551b1825de3f7fb1cac82c14f028d49432cec5d8780e13330dbbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_899362122dd551b1825de3f7fb1cac82c14f028d49432cec5d8780e13330dbbc->enter($__internal_899362122dd551b1825de3f7fb1cac82c14f028d49432cec5d8780e13330dbbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_899362122dd551b1825de3f7fb1cac82c14f028d49432cec5d8780e13330dbbc->leave($__internal_899362122dd551b1825de3f7fb1cac82c14f028d49432cec5d8780e13330dbbc_prof);

        
        $__internal_de26144a4f7d2e33404ba9f296ce529d2ca2d43f8b0011f20fdcb423e9577299->leave($__internal_de26144a4f7d2e33404ba9f296ce529d2ca2d43f8b0011f20fdcb423e9577299_prof);

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
