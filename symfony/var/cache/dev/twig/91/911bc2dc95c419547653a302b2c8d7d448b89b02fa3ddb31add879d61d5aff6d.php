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
        $__internal_bf70e0aa2bff221e669397a38e44078d6dc4027557c5b0bf1b2f25aab42f3df5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf70e0aa2bff221e669397a38e44078d6dc4027557c5b0bf1b2f25aab42f3df5->enter($__internal_bf70e0aa2bff221e669397a38e44078d6dc4027557c5b0bf1b2f25aab42f3df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_190b9d2d293513a0f6e8f0888b9ffb865d0e7b0b751a0dd6e2868feed3ec9b73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_190b9d2d293513a0f6e8f0888b9ffb865d0e7b0b751a0dd6e2868feed3ec9b73->enter($__internal_190b9d2d293513a0f6e8f0888b9ffb865d0e7b0b751a0dd6e2868feed3ec9b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf70e0aa2bff221e669397a38e44078d6dc4027557c5b0bf1b2f25aab42f3df5->leave($__internal_bf70e0aa2bff221e669397a38e44078d6dc4027557c5b0bf1b2f25aab42f3df5_prof);

        
        $__internal_190b9d2d293513a0f6e8f0888b9ffb865d0e7b0b751a0dd6e2868feed3ec9b73->leave($__internal_190b9d2d293513a0f6e8f0888b9ffb865d0e7b0b751a0dd6e2868feed3ec9b73_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ef6bc3041a7b007475d7ad76ca16658900636b3cfda9a667c5c8bc4dcb9d2f59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef6bc3041a7b007475d7ad76ca16658900636b3cfda9a667c5c8bc4dcb9d2f59->enter($__internal_ef6bc3041a7b007475d7ad76ca16658900636b3cfda9a667c5c8bc4dcb9d2f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9b95a4688b1c9c367ee1c690ef8e6ef498b9bb8854ef2402067f78c2cf57817f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b95a4688b1c9c367ee1c690ef8e6ef498b9bb8854ef2402067f78c2cf57817f->enter($__internal_9b95a4688b1c9c367ee1c690ef8e6ef498b9bb8854ef2402067f78c2cf57817f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_9b95a4688b1c9c367ee1c690ef8e6ef498b9bb8854ef2402067f78c2cf57817f->leave($__internal_9b95a4688b1c9c367ee1c690ef8e6ef498b9bb8854ef2402067f78c2cf57817f_prof);

        
        $__internal_ef6bc3041a7b007475d7ad76ca16658900636b3cfda9a667c5c8bc4dcb9d2f59->leave($__internal_ef6bc3041a7b007475d7ad76ca16658900636b3cfda9a667c5c8bc4dcb9d2f59_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9210f8b38fd48fc76ad4107681d66e900e27e061c2a758afa8d64e3d5e02e8f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9210f8b38fd48fc76ad4107681d66e900e27e061c2a758afa8d64e3d5e02e8f2->enter($__internal_9210f8b38fd48fc76ad4107681d66e900e27e061c2a758afa8d64e3d5e02e8f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_17675c280321c853eed0e1e2324ebcc01d21c28692f77670cf9122acffbac4a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17675c280321c853eed0e1e2324ebcc01d21c28692f77670cf9122acffbac4a4->enter($__internal_17675c280321c853eed0e1e2324ebcc01d21c28692f77670cf9122acffbac4a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_17675c280321c853eed0e1e2324ebcc01d21c28692f77670cf9122acffbac4a4->leave($__internal_17675c280321c853eed0e1e2324ebcc01d21c28692f77670cf9122acffbac4a4_prof);

        
        $__internal_9210f8b38fd48fc76ad4107681d66e900e27e061c2a758afa8d64e3d5e02e8f2->leave($__internal_9210f8b38fd48fc76ad4107681d66e900e27e061c2a758afa8d64e3d5e02e8f2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_557456e71c55e5961897ad9dc11fa4aabcabc27244cf4a435140dcdeab69675a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_557456e71c55e5961897ad9dc11fa4aabcabc27244cf4a435140dcdeab69675a->enter($__internal_557456e71c55e5961897ad9dc11fa4aabcabc27244cf4a435140dcdeab69675a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0807ca75e55afeb52036918c83dc77628897594203acfb851e3ffdf4fef5c3ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0807ca75e55afeb52036918c83dc77628897594203acfb851e3ffdf4fef5c3ed->enter($__internal_0807ca75e55afeb52036918c83dc77628897594203acfb851e3ffdf4fef5c3ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_0807ca75e55afeb52036918c83dc77628897594203acfb851e3ffdf4fef5c3ed->leave($__internal_0807ca75e55afeb52036918c83dc77628897594203acfb851e3ffdf4fef5c3ed_prof);

        
        $__internal_557456e71c55e5961897ad9dc11fa4aabcabc27244cf4a435140dcdeab69675a->leave($__internal_557456e71c55e5961897ad9dc11fa4aabcabc27244cf4a435140dcdeab69675a_prof);

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
