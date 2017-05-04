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
        $__internal_037f9892932fb3bd48360a6af24a8e31f328a36d571f3323c4d0e0a2645c3e50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_037f9892932fb3bd48360a6af24a8e31f328a36d571f3323c4d0e0a2645c3e50->enter($__internal_037f9892932fb3bd48360a6af24a8e31f328a36d571f3323c4d0e0a2645c3e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_7f3c6a93af23810ce82f1f0f1c45c2f445a9a3eb3b9feca2e85ab224ad162c92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f3c6a93af23810ce82f1f0f1c45c2f445a9a3eb3b9feca2e85ab224ad162c92->enter($__internal_7f3c6a93af23810ce82f1f0f1c45c2f445a9a3eb3b9feca2e85ab224ad162c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_037f9892932fb3bd48360a6af24a8e31f328a36d571f3323c4d0e0a2645c3e50->leave($__internal_037f9892932fb3bd48360a6af24a8e31f328a36d571f3323c4d0e0a2645c3e50_prof);

        
        $__internal_7f3c6a93af23810ce82f1f0f1c45c2f445a9a3eb3b9feca2e85ab224ad162c92->leave($__internal_7f3c6a93af23810ce82f1f0f1c45c2f445a9a3eb3b9feca2e85ab224ad162c92_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_19faf6a2c13561781fe4e7f2b6a1cfe2816377082d5c9b23d22256b384eec7dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19faf6a2c13561781fe4e7f2b6a1cfe2816377082d5c9b23d22256b384eec7dc->enter($__internal_19faf6a2c13561781fe4e7f2b6a1cfe2816377082d5c9b23d22256b384eec7dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_609fea1a92c9fd2061483d29687dea4a13f489d4355e21b11df2b39d05c6a66f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_609fea1a92c9fd2061483d29687dea4a13f489d4355e21b11df2b39d05c6a66f->enter($__internal_609fea1a92c9fd2061483d29687dea4a13f489d4355e21b11df2b39d05c6a66f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_609fea1a92c9fd2061483d29687dea4a13f489d4355e21b11df2b39d05c6a66f->leave($__internal_609fea1a92c9fd2061483d29687dea4a13f489d4355e21b11df2b39d05c6a66f_prof);

        
        $__internal_19faf6a2c13561781fe4e7f2b6a1cfe2816377082d5c9b23d22256b384eec7dc->leave($__internal_19faf6a2c13561781fe4e7f2b6a1cfe2816377082d5c9b23d22256b384eec7dc_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_51a3fb056af7cec24f3711543c891533055192e24161adaa8cce6eaf3921c673 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51a3fb056af7cec24f3711543c891533055192e24161adaa8cce6eaf3921c673->enter($__internal_51a3fb056af7cec24f3711543c891533055192e24161adaa8cce6eaf3921c673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9ae0f3e506db0c29414152337eee5960897d1738350b76553fdc671d92ec3a4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ae0f3e506db0c29414152337eee5960897d1738350b76553fdc671d92ec3a4c->enter($__internal_9ae0f3e506db0c29414152337eee5960897d1738350b76553fdc671d92ec3a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_9ae0f3e506db0c29414152337eee5960897d1738350b76553fdc671d92ec3a4c->leave($__internal_9ae0f3e506db0c29414152337eee5960897d1738350b76553fdc671d92ec3a4c_prof);

        
        $__internal_51a3fb056af7cec24f3711543c891533055192e24161adaa8cce6eaf3921c673->leave($__internal_51a3fb056af7cec24f3711543c891533055192e24161adaa8cce6eaf3921c673_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3eb1df0a55c4c15592268a7c1f92e4ca068657e9071b0c59bdf58574ea64e1a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eb1df0a55c4c15592268a7c1f92e4ca068657e9071b0c59bdf58574ea64e1a2->enter($__internal_3eb1df0a55c4c15592268a7c1f92e4ca068657e9071b0c59bdf58574ea64e1a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_66049e5d58777f45befa7cc438f076e2d403f44d05769448ce4adaf29afd45ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66049e5d58777f45befa7cc438f076e2d403f44d05769448ce4adaf29afd45ca->enter($__internal_66049e5d58777f45befa7cc438f076e2d403f44d05769448ce4adaf29afd45ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_66049e5d58777f45befa7cc438f076e2d403f44d05769448ce4adaf29afd45ca->leave($__internal_66049e5d58777f45befa7cc438f076e2d403f44d05769448ce4adaf29afd45ca_prof);

        
        $__internal_3eb1df0a55c4c15592268a7c1f92e4ca068657e9071b0c59bdf58574ea64e1a2->leave($__internal_3eb1df0a55c4c15592268a7c1f92e4ca068657e9071b0c59bdf58574ea64e1a2_prof);

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
