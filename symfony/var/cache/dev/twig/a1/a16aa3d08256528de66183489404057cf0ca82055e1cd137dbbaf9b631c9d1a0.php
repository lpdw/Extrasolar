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
        $__internal_9779a6e13fb90a8ed1cf4accd5ffa000f5ebe4ca999744f33223303ae77af2d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9779a6e13fb90a8ed1cf4accd5ffa000f5ebe4ca999744f33223303ae77af2d7->enter($__internal_9779a6e13fb90a8ed1cf4accd5ffa000f5ebe4ca999744f33223303ae77af2d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_9e7897491e21d81e0eb8f44b43cf1efa7bfa61ff43c92d3deda77e54acfc5b17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e7897491e21d81e0eb8f44b43cf1efa7bfa61ff43c92d3deda77e54acfc5b17->enter($__internal_9e7897491e21d81e0eb8f44b43cf1efa7bfa61ff43c92d3deda77e54acfc5b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9779a6e13fb90a8ed1cf4accd5ffa000f5ebe4ca999744f33223303ae77af2d7->leave($__internal_9779a6e13fb90a8ed1cf4accd5ffa000f5ebe4ca999744f33223303ae77af2d7_prof);

        
        $__internal_9e7897491e21d81e0eb8f44b43cf1efa7bfa61ff43c92d3deda77e54acfc5b17->leave($__internal_9e7897491e21d81e0eb8f44b43cf1efa7bfa61ff43c92d3deda77e54acfc5b17_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e21cbfa9bd9f79573165041ca8a252a7d2337e575a9110c69c1403f75a4c475b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e21cbfa9bd9f79573165041ca8a252a7d2337e575a9110c69c1403f75a4c475b->enter($__internal_e21cbfa9bd9f79573165041ca8a252a7d2337e575a9110c69c1403f75a4c475b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4716b8747391c4ad90b72a9e64072a5f27e3a9a41b86a851c38139501a002f4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4716b8747391c4ad90b72a9e64072a5f27e3a9a41b86a851c38139501a002f4c->enter($__internal_4716b8747391c4ad90b72a9e64072a5f27e3a9a41b86a851c38139501a002f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_4716b8747391c4ad90b72a9e64072a5f27e3a9a41b86a851c38139501a002f4c->leave($__internal_4716b8747391c4ad90b72a9e64072a5f27e3a9a41b86a851c38139501a002f4c_prof);

        
        $__internal_e21cbfa9bd9f79573165041ca8a252a7d2337e575a9110c69c1403f75a4c475b->leave($__internal_e21cbfa9bd9f79573165041ca8a252a7d2337e575a9110c69c1403f75a4c475b_prof);

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
