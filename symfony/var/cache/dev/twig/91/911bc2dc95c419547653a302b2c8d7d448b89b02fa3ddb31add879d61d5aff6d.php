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
        $__internal_69fd245b807744b3bf0a7f58eae107a0d403a182d026ac7c47f22e362f99aee8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69fd245b807744b3bf0a7f58eae107a0d403a182d026ac7c47f22e362f99aee8->enter($__internal_69fd245b807744b3bf0a7f58eae107a0d403a182d026ac7c47f22e362f99aee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e1162df3addcc30393a1e4a68603473ca2813fab2baa27ad2ad9f18abfbefe2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1162df3addcc30393a1e4a68603473ca2813fab2baa27ad2ad9f18abfbefe2d->enter($__internal_e1162df3addcc30393a1e4a68603473ca2813fab2baa27ad2ad9f18abfbefe2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69fd245b807744b3bf0a7f58eae107a0d403a182d026ac7c47f22e362f99aee8->leave($__internal_69fd245b807744b3bf0a7f58eae107a0d403a182d026ac7c47f22e362f99aee8_prof);

        
        $__internal_e1162df3addcc30393a1e4a68603473ca2813fab2baa27ad2ad9f18abfbefe2d->leave($__internal_e1162df3addcc30393a1e4a68603473ca2813fab2baa27ad2ad9f18abfbefe2d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5bb4ad96f57eb001ff9b4eb1196f930b14d536c4e4b4242c8f500dfced262dba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bb4ad96f57eb001ff9b4eb1196f930b14d536c4e4b4242c8f500dfced262dba->enter($__internal_5bb4ad96f57eb001ff9b4eb1196f930b14d536c4e4b4242c8f500dfced262dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cdfa02393852374208d72d88f4d4ae1c3622f522690bc47eaa320a2e77d5fceb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdfa02393852374208d72d88f4d4ae1c3622f522690bc47eaa320a2e77d5fceb->enter($__internal_cdfa02393852374208d72d88f4d4ae1c3622f522690bc47eaa320a2e77d5fceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_cdfa02393852374208d72d88f4d4ae1c3622f522690bc47eaa320a2e77d5fceb->leave($__internal_cdfa02393852374208d72d88f4d4ae1c3622f522690bc47eaa320a2e77d5fceb_prof);

        
        $__internal_5bb4ad96f57eb001ff9b4eb1196f930b14d536c4e4b4242c8f500dfced262dba->leave($__internal_5bb4ad96f57eb001ff9b4eb1196f930b14d536c4e4b4242c8f500dfced262dba_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bffd613b494e5ed5148e4b4366f6f8146c35e8f663e527472f07329e8f92417a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bffd613b494e5ed5148e4b4366f6f8146c35e8f663e527472f07329e8f92417a->enter($__internal_bffd613b494e5ed5148e4b4366f6f8146c35e8f663e527472f07329e8f92417a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d4cf99d3d61a9ad13b244477477dc6c6230745871114357abd7c023ceab9f279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4cf99d3d61a9ad13b244477477dc6c6230745871114357abd7c023ceab9f279->enter($__internal_d4cf99d3d61a9ad13b244477477dc6c6230745871114357abd7c023ceab9f279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_d4cf99d3d61a9ad13b244477477dc6c6230745871114357abd7c023ceab9f279->leave($__internal_d4cf99d3d61a9ad13b244477477dc6c6230745871114357abd7c023ceab9f279_prof);

        
        $__internal_bffd613b494e5ed5148e4b4366f6f8146c35e8f663e527472f07329e8f92417a->leave($__internal_bffd613b494e5ed5148e4b4366f6f8146c35e8f663e527472f07329e8f92417a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_10ab899961e88e511b0f9847a038923abff9b8ebb15270b057ec8bbd78e32ba1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10ab899961e88e511b0f9847a038923abff9b8ebb15270b057ec8bbd78e32ba1->enter($__internal_10ab899961e88e511b0f9847a038923abff9b8ebb15270b057ec8bbd78e32ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_978395c21858d30c5ca24b8d6c3d1d930a1c9e6c97c2ee8c3d3e354514d2950a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_978395c21858d30c5ca24b8d6c3d1d930a1c9e6c97c2ee8c3d3e354514d2950a->enter($__internal_978395c21858d30c5ca24b8d6c3d1d930a1c9e6c97c2ee8c3d3e354514d2950a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_978395c21858d30c5ca24b8d6c3d1d930a1c9e6c97c2ee8c3d3e354514d2950a->leave($__internal_978395c21858d30c5ca24b8d6c3d1d930a1c9e6c97c2ee8c3d3e354514d2950a_prof);

        
        $__internal_10ab899961e88e511b0f9847a038923abff9b8ebb15270b057ec8bbd78e32ba1->leave($__internal_10ab899961e88e511b0f9847a038923abff9b8ebb15270b057ec8bbd78e32ba1_prof);

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
