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
        $__internal_046c3f90aa0a18a6e519db520b0e58fdb2b8aca51da9832d4689ac6cc7b7ae64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_046c3f90aa0a18a6e519db520b0e58fdb2b8aca51da9832d4689ac6cc7b7ae64->enter($__internal_046c3f90aa0a18a6e519db520b0e58fdb2b8aca51da9832d4689ac6cc7b7ae64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_69aa884d03272e1bffec7cfff7c3b68bdad96f703c968d057606e4a34848678e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69aa884d03272e1bffec7cfff7c3b68bdad96f703c968d057606e4a34848678e->enter($__internal_69aa884d03272e1bffec7cfff7c3b68bdad96f703c968d057606e4a34848678e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_046c3f90aa0a18a6e519db520b0e58fdb2b8aca51da9832d4689ac6cc7b7ae64->leave($__internal_046c3f90aa0a18a6e519db520b0e58fdb2b8aca51da9832d4689ac6cc7b7ae64_prof);

        
        $__internal_69aa884d03272e1bffec7cfff7c3b68bdad96f703c968d057606e4a34848678e->leave($__internal_69aa884d03272e1bffec7cfff7c3b68bdad96f703c968d057606e4a34848678e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3400677292acdf370291b3429b43782d5edc3612af2101b1a328a7d21621a55f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3400677292acdf370291b3429b43782d5edc3612af2101b1a328a7d21621a55f->enter($__internal_3400677292acdf370291b3429b43782d5edc3612af2101b1a328a7d21621a55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5ad18e6d704eb00e5efdf5d79134e99c1944103ad0c550d6027ee3a3faa4eaeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ad18e6d704eb00e5efdf5d79134e99c1944103ad0c550d6027ee3a3faa4eaeb->enter($__internal_5ad18e6d704eb00e5efdf5d79134e99c1944103ad0c550d6027ee3a3faa4eaeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5ad18e6d704eb00e5efdf5d79134e99c1944103ad0c550d6027ee3a3faa4eaeb->leave($__internal_5ad18e6d704eb00e5efdf5d79134e99c1944103ad0c550d6027ee3a3faa4eaeb_prof);

        
        $__internal_3400677292acdf370291b3429b43782d5edc3612af2101b1a328a7d21621a55f->leave($__internal_3400677292acdf370291b3429b43782d5edc3612af2101b1a328a7d21621a55f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ce235fb3bfe5acce60267c7f132f11df4b938733d84c5a61b4986ad95606c4c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce235fb3bfe5acce60267c7f132f11df4b938733d84c5a61b4986ad95606c4c2->enter($__internal_ce235fb3bfe5acce60267c7f132f11df4b938733d84c5a61b4986ad95606c4c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2d263936dc5d780ce68e12758d66cae235fb5b31984a3bf40db03eaff3ec9d58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d263936dc5d780ce68e12758d66cae235fb5b31984a3bf40db03eaff3ec9d58->enter($__internal_2d263936dc5d780ce68e12758d66cae235fb5b31984a3bf40db03eaff3ec9d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_2d263936dc5d780ce68e12758d66cae235fb5b31984a3bf40db03eaff3ec9d58->leave($__internal_2d263936dc5d780ce68e12758d66cae235fb5b31984a3bf40db03eaff3ec9d58_prof);

        
        $__internal_ce235fb3bfe5acce60267c7f132f11df4b938733d84c5a61b4986ad95606c4c2->leave($__internal_ce235fb3bfe5acce60267c7f132f11df4b938733d84c5a61b4986ad95606c4c2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1a210048084d6d26a9bf4c256d2cfb2d189a4584d17d16b228417654fb4b1045 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a210048084d6d26a9bf4c256d2cfb2d189a4584d17d16b228417654fb4b1045->enter($__internal_1a210048084d6d26a9bf4c256d2cfb2d189a4584d17d16b228417654fb4b1045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_54215599421fe86d2b5743ead85a1061f92617e5b8a9bb53200838a56859c354 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54215599421fe86d2b5743ead85a1061f92617e5b8a9bb53200838a56859c354->enter($__internal_54215599421fe86d2b5743ead85a1061f92617e5b8a9bb53200838a56859c354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_54215599421fe86d2b5743ead85a1061f92617e5b8a9bb53200838a56859c354->leave($__internal_54215599421fe86d2b5743ead85a1061f92617e5b8a9bb53200838a56859c354_prof);

        
        $__internal_1a210048084d6d26a9bf4c256d2cfb2d189a4584d17d16b228417654fb4b1045->leave($__internal_1a210048084d6d26a9bf4c256d2cfb2d189a4584d17d16b228417654fb4b1045_prof);

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
