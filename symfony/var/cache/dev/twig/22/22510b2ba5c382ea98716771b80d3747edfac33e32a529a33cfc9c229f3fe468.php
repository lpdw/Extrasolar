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
        $__internal_20e54351514c637473d46a30df6aa0a51b08a372eecbee884509ccd25679b048 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20e54351514c637473d46a30df6aa0a51b08a372eecbee884509ccd25679b048->enter($__internal_20e54351514c637473d46a30df6aa0a51b08a372eecbee884509ccd25679b048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_599dc62ea3f5405426a42514529aa064cf78b24f30ecaa2b33658a8fd6baf1e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_599dc62ea3f5405426a42514529aa064cf78b24f30ecaa2b33658a8fd6baf1e8->enter($__internal_599dc62ea3f5405426a42514529aa064cf78b24f30ecaa2b33658a8fd6baf1e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20e54351514c637473d46a30df6aa0a51b08a372eecbee884509ccd25679b048->leave($__internal_20e54351514c637473d46a30df6aa0a51b08a372eecbee884509ccd25679b048_prof);

        
        $__internal_599dc62ea3f5405426a42514529aa064cf78b24f30ecaa2b33658a8fd6baf1e8->leave($__internal_599dc62ea3f5405426a42514529aa064cf78b24f30ecaa2b33658a8fd6baf1e8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f1bbf4b9e37262226d4b2b88932da6c620a8e319e51dddc7b52a0377a8912165 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1bbf4b9e37262226d4b2b88932da6c620a8e319e51dddc7b52a0377a8912165->enter($__internal_f1bbf4b9e37262226d4b2b88932da6c620a8e319e51dddc7b52a0377a8912165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_94223a479d060cef49e5ebff4924c85e230233beb32921cbac9a2259082159db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94223a479d060cef49e5ebff4924c85e230233beb32921cbac9a2259082159db->enter($__internal_94223a479d060cef49e5ebff4924c85e230233beb32921cbac9a2259082159db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_94223a479d060cef49e5ebff4924c85e230233beb32921cbac9a2259082159db->leave($__internal_94223a479d060cef49e5ebff4924c85e230233beb32921cbac9a2259082159db_prof);

        
        $__internal_f1bbf4b9e37262226d4b2b88932da6c620a8e319e51dddc7b52a0377a8912165->leave($__internal_f1bbf4b9e37262226d4b2b88932da6c620a8e319e51dddc7b52a0377a8912165_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_180e640f8e29242409549ce27c887b2bb882facd7152091c483580576d74509b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_180e640f8e29242409549ce27c887b2bb882facd7152091c483580576d74509b->enter($__internal_180e640f8e29242409549ce27c887b2bb882facd7152091c483580576d74509b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3925baa95af75c6f3521c386d6e53aba6a386a23f43af26628a34366c628e238 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3925baa95af75c6f3521c386d6e53aba6a386a23f43af26628a34366c628e238->enter($__internal_3925baa95af75c6f3521c386d6e53aba6a386a23f43af26628a34366c628e238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_3925baa95af75c6f3521c386d6e53aba6a386a23f43af26628a34366c628e238->leave($__internal_3925baa95af75c6f3521c386d6e53aba6a386a23f43af26628a34366c628e238_prof);

        
        $__internal_180e640f8e29242409549ce27c887b2bb882facd7152091c483580576d74509b->leave($__internal_180e640f8e29242409549ce27c887b2bb882facd7152091c483580576d74509b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6201a5cd6978534976d7a49ed6c2eb38a3036fda47ee30a08a8c2f352a225765 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6201a5cd6978534976d7a49ed6c2eb38a3036fda47ee30a08a8c2f352a225765->enter($__internal_6201a5cd6978534976d7a49ed6c2eb38a3036fda47ee30a08a8c2f352a225765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f7e68c2a78a46e4abd63c935f9352b4c9f0e5d411f83a27990445ef6ef398c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f7e68c2a78a46e4abd63c935f9352b4c9f0e5d411f83a27990445ef6ef398c3->enter($__internal_6f7e68c2a78a46e4abd63c935f9352b4c9f0e5d411f83a27990445ef6ef398c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_6f7e68c2a78a46e4abd63c935f9352b4c9f0e5d411f83a27990445ef6ef398c3->leave($__internal_6f7e68c2a78a46e4abd63c935f9352b4c9f0e5d411f83a27990445ef6ef398c3_prof);

        
        $__internal_6201a5cd6978534976d7a49ed6c2eb38a3036fda47ee30a08a8c2f352a225765->leave($__internal_6201a5cd6978534976d7a49ed6c2eb38a3036fda47ee30a08a8c2f352a225765_prof);

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
