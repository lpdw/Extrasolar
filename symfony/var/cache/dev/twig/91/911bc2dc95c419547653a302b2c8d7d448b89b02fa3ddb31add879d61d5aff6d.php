<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_4841a0ab7f860baa68500ef090e378fa6316fb7304e8bedde677606aae2cfb71 extends Twig_Template
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
        $__internal_ad39ed2d3892fe9a674097e6ee4ae93dd27dc75663bf8707d80cc75b574c8c33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad39ed2d3892fe9a674097e6ee4ae93dd27dc75663bf8707d80cc75b574c8c33->enter($__internal_ad39ed2d3892fe9a674097e6ee4ae93dd27dc75663bf8707d80cc75b574c8c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_6d90b3e0823d41337618d490345432548a738818dc65d4d3eceb7c48eda5a46e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d90b3e0823d41337618d490345432548a738818dc65d4d3eceb7c48eda5a46e->enter($__internal_6d90b3e0823d41337618d490345432548a738818dc65d4d3eceb7c48eda5a46e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad39ed2d3892fe9a674097e6ee4ae93dd27dc75663bf8707d80cc75b574c8c33->leave($__internal_ad39ed2d3892fe9a674097e6ee4ae93dd27dc75663bf8707d80cc75b574c8c33_prof);

        
        $__internal_6d90b3e0823d41337618d490345432548a738818dc65d4d3eceb7c48eda5a46e->leave($__internal_6d90b3e0823d41337618d490345432548a738818dc65d4d3eceb7c48eda5a46e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_94883c293fdd503664187981f882fe1ddc7bc83cd0a962efa7e52403b94dc140 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94883c293fdd503664187981f882fe1ddc7bc83cd0a962efa7e52403b94dc140->enter($__internal_94883c293fdd503664187981f882fe1ddc7bc83cd0a962efa7e52403b94dc140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3de1c30e420c4df3685de4d73371c2cdf18adf3d9b141cea57e10f4e540e8245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3de1c30e420c4df3685de4d73371c2cdf18adf3d9b141cea57e10f4e540e8245->enter($__internal_3de1c30e420c4df3685de4d73371c2cdf18adf3d9b141cea57e10f4e540e8245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3de1c30e420c4df3685de4d73371c2cdf18adf3d9b141cea57e10f4e540e8245->leave($__internal_3de1c30e420c4df3685de4d73371c2cdf18adf3d9b141cea57e10f4e540e8245_prof);

        
        $__internal_94883c293fdd503664187981f882fe1ddc7bc83cd0a962efa7e52403b94dc140->leave($__internal_94883c293fdd503664187981f882fe1ddc7bc83cd0a962efa7e52403b94dc140_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5edf266ac4d5c53dd7f66aeb930842b5d04127ec711d0e2223fa72e305883341 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5edf266ac4d5c53dd7f66aeb930842b5d04127ec711d0e2223fa72e305883341->enter($__internal_5edf266ac4d5c53dd7f66aeb930842b5d04127ec711d0e2223fa72e305883341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a8730707849cb969c84f19f69040e7b6e3e72d9f8dd119d20d03883185fb13a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8730707849cb969c84f19f69040e7b6e3e72d9f8dd119d20d03883185fb13a0->enter($__internal_a8730707849cb969c84f19f69040e7b6e3e72d9f8dd119d20d03883185fb13a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_a8730707849cb969c84f19f69040e7b6e3e72d9f8dd119d20d03883185fb13a0->leave($__internal_a8730707849cb969c84f19f69040e7b6e3e72d9f8dd119d20d03883185fb13a0_prof);

        
        $__internal_5edf266ac4d5c53dd7f66aeb930842b5d04127ec711d0e2223fa72e305883341->leave($__internal_5edf266ac4d5c53dd7f66aeb930842b5d04127ec711d0e2223fa72e305883341_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ec6aae826ece0c79fc973a282760386a75b8e9412697924264ef0826648fb25a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec6aae826ece0c79fc973a282760386a75b8e9412697924264ef0826648fb25a->enter($__internal_ec6aae826ece0c79fc973a282760386a75b8e9412697924264ef0826648fb25a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2f78d7f751bdb2efc2cac2094b17c9005925cabdbd7c1e3aec80b98efe21c2a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f78d7f751bdb2efc2cac2094b17c9005925cabdbd7c1e3aec80b98efe21c2a1->enter($__internal_2f78d7f751bdb2efc2cac2094b17c9005925cabdbd7c1e3aec80b98efe21c2a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_2f78d7f751bdb2efc2cac2094b17c9005925cabdbd7c1e3aec80b98efe21c2a1->leave($__internal_2f78d7f751bdb2efc2cac2094b17c9005925cabdbd7c1e3aec80b98efe21c2a1_prof);

        
        $__internal_ec6aae826ece0c79fc973a282760386a75b8e9412697924264ef0826648fb25a->leave($__internal_ec6aae826ece0c79fc973a282760386a75b8e9412697924264ef0826648fb25a_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Users/lpdw/Desktop/Extrasolar/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
