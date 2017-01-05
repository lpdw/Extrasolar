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
        $__internal_f7d0366a53bc9a336bbe6bf94fd93210181ce80ccb334ea6553a8d06932bd45a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7d0366a53bc9a336bbe6bf94fd93210181ce80ccb334ea6553a8d06932bd45a->enter($__internal_f7d0366a53bc9a336bbe6bf94fd93210181ce80ccb334ea6553a8d06932bd45a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_f01e9d1e10847287ef67c7be80758bcda38a4e5dbcc36f97d0273a653d945825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f01e9d1e10847287ef67c7be80758bcda38a4e5dbcc36f97d0273a653d945825->enter($__internal_f01e9d1e10847287ef67c7be80758bcda38a4e5dbcc36f97d0273a653d945825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7d0366a53bc9a336bbe6bf94fd93210181ce80ccb334ea6553a8d06932bd45a->leave($__internal_f7d0366a53bc9a336bbe6bf94fd93210181ce80ccb334ea6553a8d06932bd45a_prof);

        
        $__internal_f01e9d1e10847287ef67c7be80758bcda38a4e5dbcc36f97d0273a653d945825->leave($__internal_f01e9d1e10847287ef67c7be80758bcda38a4e5dbcc36f97d0273a653d945825_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b73503d762a53174bfc6952d70c26825e32b094a58dc24200f3585c5b4939dab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b73503d762a53174bfc6952d70c26825e32b094a58dc24200f3585c5b4939dab->enter($__internal_b73503d762a53174bfc6952d70c26825e32b094a58dc24200f3585c5b4939dab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1614e94b2cae02ebd4e3ab8aed3b396f9406badb6690135b69dda3918bbdf9a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1614e94b2cae02ebd4e3ab8aed3b396f9406badb6690135b69dda3918bbdf9a7->enter($__internal_1614e94b2cae02ebd4e3ab8aed3b396f9406badb6690135b69dda3918bbdf9a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_1614e94b2cae02ebd4e3ab8aed3b396f9406badb6690135b69dda3918bbdf9a7->leave($__internal_1614e94b2cae02ebd4e3ab8aed3b396f9406badb6690135b69dda3918bbdf9a7_prof);

        
        $__internal_b73503d762a53174bfc6952d70c26825e32b094a58dc24200f3585c5b4939dab->leave($__internal_b73503d762a53174bfc6952d70c26825e32b094a58dc24200f3585c5b4939dab_prof);

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
