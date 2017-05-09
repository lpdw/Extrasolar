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
        $__internal_d35a5c53d92d8ac3894c7128f174ed5ba9a5a41bbf931e2943c7cbfb3cd8f938 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d35a5c53d92d8ac3894c7128f174ed5ba9a5a41bbf931e2943c7cbfb3cd8f938->enter($__internal_d35a5c53d92d8ac3894c7128f174ed5ba9a5a41bbf931e2943c7cbfb3cd8f938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e3a46e40ee1e300ee2ccb2b8cde7d67968b03fc967c4c5d85d297314e8b549e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3a46e40ee1e300ee2ccb2b8cde7d67968b03fc967c4c5d85d297314e8b549e5->enter($__internal_e3a46e40ee1e300ee2ccb2b8cde7d67968b03fc967c4c5d85d297314e8b549e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d35a5c53d92d8ac3894c7128f174ed5ba9a5a41bbf931e2943c7cbfb3cd8f938->leave($__internal_d35a5c53d92d8ac3894c7128f174ed5ba9a5a41bbf931e2943c7cbfb3cd8f938_prof);

        
        $__internal_e3a46e40ee1e300ee2ccb2b8cde7d67968b03fc967c4c5d85d297314e8b549e5->leave($__internal_e3a46e40ee1e300ee2ccb2b8cde7d67968b03fc967c4c5d85d297314e8b549e5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1a18487cbf48ca8610a81fa5a6f45b0a284aea8e18578ef05f5230eae6b7becb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a18487cbf48ca8610a81fa5a6f45b0a284aea8e18578ef05f5230eae6b7becb->enter($__internal_1a18487cbf48ca8610a81fa5a6f45b0a284aea8e18578ef05f5230eae6b7becb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_46db89c00800f03ae515b2497ba9fdefca6a33e97f462d0fcad6056c14bcfa36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46db89c00800f03ae515b2497ba9fdefca6a33e97f462d0fcad6056c14bcfa36->enter($__internal_46db89c00800f03ae515b2497ba9fdefca6a33e97f462d0fcad6056c14bcfa36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_46db89c00800f03ae515b2497ba9fdefca6a33e97f462d0fcad6056c14bcfa36->leave($__internal_46db89c00800f03ae515b2497ba9fdefca6a33e97f462d0fcad6056c14bcfa36_prof);

        
        $__internal_1a18487cbf48ca8610a81fa5a6f45b0a284aea8e18578ef05f5230eae6b7becb->leave($__internal_1a18487cbf48ca8610a81fa5a6f45b0a284aea8e18578ef05f5230eae6b7becb_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3482abf3a628364484c3a1c88d6eafb583d7b6a54f98e486082579d0ee6a1e39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3482abf3a628364484c3a1c88d6eafb583d7b6a54f98e486082579d0ee6a1e39->enter($__internal_3482abf3a628364484c3a1c88d6eafb583d7b6a54f98e486082579d0ee6a1e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f903c624a85df1a1df61b0f32308d36c0d14a282d59a635a46b4d4ecaf0b71a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f903c624a85df1a1df61b0f32308d36c0d14a282d59a635a46b4d4ecaf0b71a7->enter($__internal_f903c624a85df1a1df61b0f32308d36c0d14a282d59a635a46b4d4ecaf0b71a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_f903c624a85df1a1df61b0f32308d36c0d14a282d59a635a46b4d4ecaf0b71a7->leave($__internal_f903c624a85df1a1df61b0f32308d36c0d14a282d59a635a46b4d4ecaf0b71a7_prof);

        
        $__internal_3482abf3a628364484c3a1c88d6eafb583d7b6a54f98e486082579d0ee6a1e39->leave($__internal_3482abf3a628364484c3a1c88d6eafb583d7b6a54f98e486082579d0ee6a1e39_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f40ef55a580c7ed6478df1d4b00b20e15c89af90f37c37b39e41b77e11ee659b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f40ef55a580c7ed6478df1d4b00b20e15c89af90f37c37b39e41b77e11ee659b->enter($__internal_f40ef55a580c7ed6478df1d4b00b20e15c89af90f37c37b39e41b77e11ee659b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b1f0cc138665fea2e95e7bb5fe04ecabe5388e4b2a56ddb00dbe784e12f569ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1f0cc138665fea2e95e7bb5fe04ecabe5388e4b2a56ddb00dbe784e12f569ef->enter($__internal_b1f0cc138665fea2e95e7bb5fe04ecabe5388e4b2a56ddb00dbe784e12f569ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_b1f0cc138665fea2e95e7bb5fe04ecabe5388e4b2a56ddb00dbe784e12f569ef->leave($__internal_b1f0cc138665fea2e95e7bb5fe04ecabe5388e4b2a56ddb00dbe784e12f569ef_prof);

        
        $__internal_f40ef55a580c7ed6478df1d4b00b20e15c89af90f37c37b39e41b77e11ee659b->leave($__internal_f40ef55a580c7ed6478df1d4b00b20e15c89af90f37c37b39e41b77e11ee659b_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Users/IntelliJ/ProjectAlexandre/Extrasolar/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
