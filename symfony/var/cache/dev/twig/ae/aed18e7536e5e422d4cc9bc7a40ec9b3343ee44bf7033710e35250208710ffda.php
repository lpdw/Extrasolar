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
        $__internal_41e997b5f5d3517ece04d75223ad3267c2bbb0e97ad8a2130722d5dd04ce4798 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41e997b5f5d3517ece04d75223ad3267c2bbb0e97ad8a2130722d5dd04ce4798->enter($__internal_41e997b5f5d3517ece04d75223ad3267c2bbb0e97ad8a2130722d5dd04ce4798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_bc465d86da09eb5656e413bb548cec6ed0e15909d21020f68d8fca443a90fd62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc465d86da09eb5656e413bb548cec6ed0e15909d21020f68d8fca443a90fd62->enter($__internal_bc465d86da09eb5656e413bb548cec6ed0e15909d21020f68d8fca443a90fd62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41e997b5f5d3517ece04d75223ad3267c2bbb0e97ad8a2130722d5dd04ce4798->leave($__internal_41e997b5f5d3517ece04d75223ad3267c2bbb0e97ad8a2130722d5dd04ce4798_prof);

        
        $__internal_bc465d86da09eb5656e413bb548cec6ed0e15909d21020f68d8fca443a90fd62->leave($__internal_bc465d86da09eb5656e413bb548cec6ed0e15909d21020f68d8fca443a90fd62_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b94c47413b6068ce3b0c2cbb263e99a14e21c6548ff976d160eb78a8e9335ddb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b94c47413b6068ce3b0c2cbb263e99a14e21c6548ff976d160eb78a8e9335ddb->enter($__internal_b94c47413b6068ce3b0c2cbb263e99a14e21c6548ff976d160eb78a8e9335ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c012f2d7bad5726b640ecda83773905d38c38dc28c5d519bf5007d927d7f270f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c012f2d7bad5726b640ecda83773905d38c38dc28c5d519bf5007d927d7f270f->enter($__internal_c012f2d7bad5726b640ecda83773905d38c38dc28c5d519bf5007d927d7f270f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c012f2d7bad5726b640ecda83773905d38c38dc28c5d519bf5007d927d7f270f->leave($__internal_c012f2d7bad5726b640ecda83773905d38c38dc28c5d519bf5007d927d7f270f_prof);

        
        $__internal_b94c47413b6068ce3b0c2cbb263e99a14e21c6548ff976d160eb78a8e9335ddb->leave($__internal_b94c47413b6068ce3b0c2cbb263e99a14e21c6548ff976d160eb78a8e9335ddb_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fb267a0cafac0e2146a8f750b72ee1366326a9d75d244fee4d0e52e2cf01b656 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb267a0cafac0e2146a8f750b72ee1366326a9d75d244fee4d0e52e2cf01b656->enter($__internal_fb267a0cafac0e2146a8f750b72ee1366326a9d75d244fee4d0e52e2cf01b656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3496a3611ded4437a3b08c1d91697916de41396078a83cf4dc624661543c3320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3496a3611ded4437a3b08c1d91697916de41396078a83cf4dc624661543c3320->enter($__internal_3496a3611ded4437a3b08c1d91697916de41396078a83cf4dc624661543c3320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_3496a3611ded4437a3b08c1d91697916de41396078a83cf4dc624661543c3320->leave($__internal_3496a3611ded4437a3b08c1d91697916de41396078a83cf4dc624661543c3320_prof);

        
        $__internal_fb267a0cafac0e2146a8f750b72ee1366326a9d75d244fee4d0e52e2cf01b656->leave($__internal_fb267a0cafac0e2146a8f750b72ee1366326a9d75d244fee4d0e52e2cf01b656_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ea39312833cb9acd32fc96b4f685ed25695c194f0f0c8b7fe7b9c87e1ddd8ba9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea39312833cb9acd32fc96b4f685ed25695c194f0f0c8b7fe7b9c87e1ddd8ba9->enter($__internal_ea39312833cb9acd32fc96b4f685ed25695c194f0f0c8b7fe7b9c87e1ddd8ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a52310c49e1104aee62e3689f96c84b57402ff29c1ce2ee8785257e9b5c19d58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a52310c49e1104aee62e3689f96c84b57402ff29c1ce2ee8785257e9b5c19d58->enter($__internal_a52310c49e1104aee62e3689f96c84b57402ff29c1ce2ee8785257e9b5c19d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_a52310c49e1104aee62e3689f96c84b57402ff29c1ce2ee8785257e9b5c19d58->leave($__internal_a52310c49e1104aee62e3689f96c84b57402ff29c1ce2ee8785257e9b5c19d58_prof);

        
        $__internal_ea39312833cb9acd32fc96b4f685ed25695c194f0f0c8b7fe7b9c87e1ddd8ba9->leave($__internal_ea39312833cb9acd32fc96b4f685ed25695c194f0f0c8b7fe7b9c87e1ddd8ba9_prof);

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
