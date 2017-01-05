<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_462a1ca018458cfc2eea4660297591fe35129192fbf19c7b5d06cb074bfbb934 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_02bc49a77b8d4b29409fc2e86756ebe96984b863e630c2e0cd853737f0d4b186 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02bc49a77b8d4b29409fc2e86756ebe96984b863e630c2e0cd853737f0d4b186->enter($__internal_02bc49a77b8d4b29409fc2e86756ebe96984b863e630c2e0cd853737f0d4b186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e7c985c006d264fd217194bdaf46229173106ce30bf8588075ca2e9a4774b16b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7c985c006d264fd217194bdaf46229173106ce30bf8588075ca2e9a4774b16b->enter($__internal_e7c985c006d264fd217194bdaf46229173106ce30bf8588075ca2e9a4774b16b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02bc49a77b8d4b29409fc2e86756ebe96984b863e630c2e0cd853737f0d4b186->leave($__internal_02bc49a77b8d4b29409fc2e86756ebe96984b863e630c2e0cd853737f0d4b186_prof);

        
        $__internal_e7c985c006d264fd217194bdaf46229173106ce30bf8588075ca2e9a4774b16b->leave($__internal_e7c985c006d264fd217194bdaf46229173106ce30bf8588075ca2e9a4774b16b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_65a506693e7e7e197f4e47e3cdd0b638891f1b61c8ec14e06d9a174fe3d58170 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65a506693e7e7e197f4e47e3cdd0b638891f1b61c8ec14e06d9a174fe3d58170->enter($__internal_65a506693e7e7e197f4e47e3cdd0b638891f1b61c8ec14e06d9a174fe3d58170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c6c5e19b2d3c898be56f3c02ba65efb12ff1f70a0b1e2d1da0806c50a45b4431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6c5e19b2d3c898be56f3c02ba65efb12ff1f70a0b1e2d1da0806c50a45b4431->enter($__internal_c6c5e19b2d3c898be56f3c02ba65efb12ff1f70a0b1e2d1da0806c50a45b4431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c6c5e19b2d3c898be56f3c02ba65efb12ff1f70a0b1e2d1da0806c50a45b4431->leave($__internal_c6c5e19b2d3c898be56f3c02ba65efb12ff1f70a0b1e2d1da0806c50a45b4431_prof);

        
        $__internal_65a506693e7e7e197f4e47e3cdd0b638891f1b61c8ec14e06d9a174fe3d58170->leave($__internal_65a506693e7e7e197f4e47e3cdd0b638891f1b61c8ec14e06d9a174fe3d58170_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1d1a1c899164ebbec0555565c5b695165a30568e41a66e3be599fb583fa4fdda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d1a1c899164ebbec0555565c5b695165a30568e41a66e3be599fb583fa4fdda->enter($__internal_1d1a1c899164ebbec0555565c5b695165a30568e41a66e3be599fb583fa4fdda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9d741ef693a193f6784aab0ff2579fc031e4349ce1ca6c7960d37ae111b6b387 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d741ef693a193f6784aab0ff2579fc031e4349ce1ca6c7960d37ae111b6b387->enter($__internal_9d741ef693a193f6784aab0ff2579fc031e4349ce1ca6c7960d37ae111b6b387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9d741ef693a193f6784aab0ff2579fc031e4349ce1ca6c7960d37ae111b6b387->leave($__internal_9d741ef693a193f6784aab0ff2579fc031e4349ce1ca6c7960d37ae111b6b387_prof);

        
        $__internal_1d1a1c899164ebbec0555565c5b695165a30568e41a66e3be599fb583fa4fdda->leave($__internal_1d1a1c899164ebbec0555565c5b695165a30568e41a66e3be599fb583fa4fdda_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e9027bb87584f9a91e974ca62bbf072d270ac97f20615812a06392e08dbbab8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9027bb87584f9a91e974ca62bbf072d270ac97f20615812a06392e08dbbab8f->enter($__internal_e9027bb87584f9a91e974ca62bbf072d270ac97f20615812a06392e08dbbab8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5da386497139f9570f861953cca3360466c7051cb5636fc5cc711467eb353c13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5da386497139f9570f861953cca3360466c7051cb5636fc5cc711467eb353c13->enter($__internal_5da386497139f9570f861953cca3360466c7051cb5636fc5cc711467eb353c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5da386497139f9570f861953cca3360466c7051cb5636fc5cc711467eb353c13->leave($__internal_5da386497139f9570f861953cca3360466c7051cb5636fc5cc711467eb353c13_prof);

        
        $__internal_e9027bb87584f9a91e974ca62bbf072d270ac97f20615812a06392e08dbbab8f->leave($__internal_e9027bb87584f9a91e974ca62bbf072d270ac97f20615812a06392e08dbbab8f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/Extrasolar/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
