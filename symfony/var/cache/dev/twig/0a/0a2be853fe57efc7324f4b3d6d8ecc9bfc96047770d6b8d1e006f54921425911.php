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
        $__internal_32abece05749082cccc0281b30170958b3dfe5e96c66ce6e01aa67b3eb6ea443 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32abece05749082cccc0281b30170958b3dfe5e96c66ce6e01aa67b3eb6ea443->enter($__internal_32abece05749082cccc0281b30170958b3dfe5e96c66ce6e01aa67b3eb6ea443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_6c8579f6354232650cf61ff42d8b8898790b5ac7ad5e0851717ca8583bd9d2e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c8579f6354232650cf61ff42d8b8898790b5ac7ad5e0851717ca8583bd9d2e4->enter($__internal_6c8579f6354232650cf61ff42d8b8898790b5ac7ad5e0851717ca8583bd9d2e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32abece05749082cccc0281b30170958b3dfe5e96c66ce6e01aa67b3eb6ea443->leave($__internal_32abece05749082cccc0281b30170958b3dfe5e96c66ce6e01aa67b3eb6ea443_prof);

        
        $__internal_6c8579f6354232650cf61ff42d8b8898790b5ac7ad5e0851717ca8583bd9d2e4->leave($__internal_6c8579f6354232650cf61ff42d8b8898790b5ac7ad5e0851717ca8583bd9d2e4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c31dc9765b1e9b3561597b83eb19cd7354ed94c10700d27d528d2b1b480c5be5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c31dc9765b1e9b3561597b83eb19cd7354ed94c10700d27d528d2b1b480c5be5->enter($__internal_c31dc9765b1e9b3561597b83eb19cd7354ed94c10700d27d528d2b1b480c5be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_84f674a26b385715ec296a2c4d7872ecfe10a984ad2759015372beb2f01f07da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84f674a26b385715ec296a2c4d7872ecfe10a984ad2759015372beb2f01f07da->enter($__internal_84f674a26b385715ec296a2c4d7872ecfe10a984ad2759015372beb2f01f07da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_84f674a26b385715ec296a2c4d7872ecfe10a984ad2759015372beb2f01f07da->leave($__internal_84f674a26b385715ec296a2c4d7872ecfe10a984ad2759015372beb2f01f07da_prof);

        
        $__internal_c31dc9765b1e9b3561597b83eb19cd7354ed94c10700d27d528d2b1b480c5be5->leave($__internal_c31dc9765b1e9b3561597b83eb19cd7354ed94c10700d27d528d2b1b480c5be5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_802b58130a76359d80db64c5423498f9b3135ed26703896cf6466578354e6c1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_802b58130a76359d80db64c5423498f9b3135ed26703896cf6466578354e6c1b->enter($__internal_802b58130a76359d80db64c5423498f9b3135ed26703896cf6466578354e6c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_dd0981022c6af7b301a9cc35532ba521846285ed04df88c0a58aca292106bf14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd0981022c6af7b301a9cc35532ba521846285ed04df88c0a58aca292106bf14->enter($__internal_dd0981022c6af7b301a9cc35532ba521846285ed04df88c0a58aca292106bf14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dd0981022c6af7b301a9cc35532ba521846285ed04df88c0a58aca292106bf14->leave($__internal_dd0981022c6af7b301a9cc35532ba521846285ed04df88c0a58aca292106bf14_prof);

        
        $__internal_802b58130a76359d80db64c5423498f9b3135ed26703896cf6466578354e6c1b->leave($__internal_802b58130a76359d80db64c5423498f9b3135ed26703896cf6466578354e6c1b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_000b8c8da4ef7c8dee8ed0b1854f51d839616be7d72eda43aaa6ab9c48cb9181 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_000b8c8da4ef7c8dee8ed0b1854f51d839616be7d72eda43aaa6ab9c48cb9181->enter($__internal_000b8c8da4ef7c8dee8ed0b1854f51d839616be7d72eda43aaa6ab9c48cb9181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_40a48f264de747311b2630c9899e234111c09c5da134dd24cd87e5b292475af7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40a48f264de747311b2630c9899e234111c09c5da134dd24cd87e5b292475af7->enter($__internal_40a48f264de747311b2630c9899e234111c09c5da134dd24cd87e5b292475af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_40a48f264de747311b2630c9899e234111c09c5da134dd24cd87e5b292475af7->leave($__internal_40a48f264de747311b2630c9899e234111c09c5da134dd24cd87e5b292475af7_prof);

        
        $__internal_000b8c8da4ef7c8dee8ed0b1854f51d839616be7d72eda43aaa6ab9c48cb9181->leave($__internal_000b8c8da4ef7c8dee8ed0b1854f51d839616be7d72eda43aaa6ab9c48cb9181_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
