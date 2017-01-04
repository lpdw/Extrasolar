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
        $__internal_f9c8281d34183c4f9600abb045b6b3a2aa325755335e1aa6363ec405c976cbb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9c8281d34183c4f9600abb045b6b3a2aa325755335e1aa6363ec405c976cbb1->enter($__internal_f9c8281d34183c4f9600abb045b6b3a2aa325755335e1aa6363ec405c976cbb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_46cc7877407a2469aef6efa69707c02f11edc428694ce4cb48f3c2d8468214db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46cc7877407a2469aef6efa69707c02f11edc428694ce4cb48f3c2d8468214db->enter($__internal_46cc7877407a2469aef6efa69707c02f11edc428694ce4cb48f3c2d8468214db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9c8281d34183c4f9600abb045b6b3a2aa325755335e1aa6363ec405c976cbb1->leave($__internal_f9c8281d34183c4f9600abb045b6b3a2aa325755335e1aa6363ec405c976cbb1_prof);

        
        $__internal_46cc7877407a2469aef6efa69707c02f11edc428694ce4cb48f3c2d8468214db->leave($__internal_46cc7877407a2469aef6efa69707c02f11edc428694ce4cb48f3c2d8468214db_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e14026fa6bf484ebd61ab7943ab8e73896077d224dd7053e15fe21f6808a2145 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e14026fa6bf484ebd61ab7943ab8e73896077d224dd7053e15fe21f6808a2145->enter($__internal_e14026fa6bf484ebd61ab7943ab8e73896077d224dd7053e15fe21f6808a2145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5ef7062b4f71f1c46eec4123063d26ce96e022148c60c98c2d797f1a3a4fc6d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ef7062b4f71f1c46eec4123063d26ce96e022148c60c98c2d797f1a3a4fc6d2->enter($__internal_5ef7062b4f71f1c46eec4123063d26ce96e022148c60c98c2d797f1a3a4fc6d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5ef7062b4f71f1c46eec4123063d26ce96e022148c60c98c2d797f1a3a4fc6d2->leave($__internal_5ef7062b4f71f1c46eec4123063d26ce96e022148c60c98c2d797f1a3a4fc6d2_prof);

        
        $__internal_e14026fa6bf484ebd61ab7943ab8e73896077d224dd7053e15fe21f6808a2145->leave($__internal_e14026fa6bf484ebd61ab7943ab8e73896077d224dd7053e15fe21f6808a2145_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0788107f7160cb28e13e429332696a3cf519ad1b360f9d2a3bd1fc21bef0c738 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0788107f7160cb28e13e429332696a3cf519ad1b360f9d2a3bd1fc21bef0c738->enter($__internal_0788107f7160cb28e13e429332696a3cf519ad1b360f9d2a3bd1fc21bef0c738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0c923cc5cd0c6e05d11a92995dd566e9eefb29233c20cdf9e08427b7f5849590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c923cc5cd0c6e05d11a92995dd566e9eefb29233c20cdf9e08427b7f5849590->enter($__internal_0c923cc5cd0c6e05d11a92995dd566e9eefb29233c20cdf9e08427b7f5849590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_0c923cc5cd0c6e05d11a92995dd566e9eefb29233c20cdf9e08427b7f5849590->leave($__internal_0c923cc5cd0c6e05d11a92995dd566e9eefb29233c20cdf9e08427b7f5849590_prof);

        
        $__internal_0788107f7160cb28e13e429332696a3cf519ad1b360f9d2a3bd1fc21bef0c738->leave($__internal_0788107f7160cb28e13e429332696a3cf519ad1b360f9d2a3bd1fc21bef0c738_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_32c6da3a6f866ee45151e9f26984a9be238a4b60f8b14faa64a85490fcdd2bb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32c6da3a6f866ee45151e9f26984a9be238a4b60f8b14faa64a85490fcdd2bb8->enter($__internal_32c6da3a6f866ee45151e9f26984a9be238a4b60f8b14faa64a85490fcdd2bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f39c699bfc81c5371b0d1e0b5b400154de821895c5a08d9fff1a3632de2c91b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f39c699bfc81c5371b0d1e0b5b400154de821895c5a08d9fff1a3632de2c91b5->enter($__internal_f39c699bfc81c5371b0d1e0b5b400154de821895c5a08d9fff1a3632de2c91b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_f39c699bfc81c5371b0d1e0b5b400154de821895c5a08d9fff1a3632de2c91b5->leave($__internal_f39c699bfc81c5371b0d1e0b5b400154de821895c5a08d9fff1a3632de2c91b5_prof);

        
        $__internal_32c6da3a6f866ee45151e9f26984a9be238a4b60f8b14faa64a85490fcdd2bb8->leave($__internal_32c6da3a6f866ee45151e9f26984a9be238a4b60f8b14faa64a85490fcdd2bb8_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/Extrasolar/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
