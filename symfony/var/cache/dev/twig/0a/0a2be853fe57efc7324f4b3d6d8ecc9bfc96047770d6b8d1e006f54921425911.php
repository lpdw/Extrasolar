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
        $__internal_38d1782307e0759a7972177357fcd7c2dd73d2cc267f69fd8129d1eab2d4e3f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38d1782307e0759a7972177357fcd7c2dd73d2cc267f69fd8129d1eab2d4e3f2->enter($__internal_38d1782307e0759a7972177357fcd7c2dd73d2cc267f69fd8129d1eab2d4e3f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ae5439c5e3c95be0316c9d6a23380257735741cf0946b020a2f259f1f5ed79d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae5439c5e3c95be0316c9d6a23380257735741cf0946b020a2f259f1f5ed79d7->enter($__internal_ae5439c5e3c95be0316c9d6a23380257735741cf0946b020a2f259f1f5ed79d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38d1782307e0759a7972177357fcd7c2dd73d2cc267f69fd8129d1eab2d4e3f2->leave($__internal_38d1782307e0759a7972177357fcd7c2dd73d2cc267f69fd8129d1eab2d4e3f2_prof);

        
        $__internal_ae5439c5e3c95be0316c9d6a23380257735741cf0946b020a2f259f1f5ed79d7->leave($__internal_ae5439c5e3c95be0316c9d6a23380257735741cf0946b020a2f259f1f5ed79d7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_743fe626dd7c3f15132e943596b01fa9c5f7bcc9f66afd33242412e2583782a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_743fe626dd7c3f15132e943596b01fa9c5f7bcc9f66afd33242412e2583782a9->enter($__internal_743fe626dd7c3f15132e943596b01fa9c5f7bcc9f66afd33242412e2583782a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_963397fcc0e1bd834d55f770c9b62efe6e5a20829dc62c9a018c093e0d4312b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_963397fcc0e1bd834d55f770c9b62efe6e5a20829dc62c9a018c093e0d4312b6->enter($__internal_963397fcc0e1bd834d55f770c9b62efe6e5a20829dc62c9a018c093e0d4312b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_963397fcc0e1bd834d55f770c9b62efe6e5a20829dc62c9a018c093e0d4312b6->leave($__internal_963397fcc0e1bd834d55f770c9b62efe6e5a20829dc62c9a018c093e0d4312b6_prof);

        
        $__internal_743fe626dd7c3f15132e943596b01fa9c5f7bcc9f66afd33242412e2583782a9->leave($__internal_743fe626dd7c3f15132e943596b01fa9c5f7bcc9f66afd33242412e2583782a9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_725063858cd26e0e6204894e5967c0d6ef982f47297ad0ae56994f395591c51a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_725063858cd26e0e6204894e5967c0d6ef982f47297ad0ae56994f395591c51a->enter($__internal_725063858cd26e0e6204894e5967c0d6ef982f47297ad0ae56994f395591c51a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_60c0797b96a24e99a676b7fb7dd3e1e1e9774961a6850c575b1e964241a07d36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60c0797b96a24e99a676b7fb7dd3e1e1e9774961a6850c575b1e964241a07d36->enter($__internal_60c0797b96a24e99a676b7fb7dd3e1e1e9774961a6850c575b1e964241a07d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_60c0797b96a24e99a676b7fb7dd3e1e1e9774961a6850c575b1e964241a07d36->leave($__internal_60c0797b96a24e99a676b7fb7dd3e1e1e9774961a6850c575b1e964241a07d36_prof);

        
        $__internal_725063858cd26e0e6204894e5967c0d6ef982f47297ad0ae56994f395591c51a->leave($__internal_725063858cd26e0e6204894e5967c0d6ef982f47297ad0ae56994f395591c51a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f7e603475c9431bb5c86f19ed1f31637d4097f89f5d8e171fc2e18bbb9335d6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7e603475c9431bb5c86f19ed1f31637d4097f89f5d8e171fc2e18bbb9335d6e->enter($__internal_f7e603475c9431bb5c86f19ed1f31637d4097f89f5d8e171fc2e18bbb9335d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8d90791d905ec9cba3a52f5ca808ee52e60cd3fcf2c2cf984862ecf0dee25032 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d90791d905ec9cba3a52f5ca808ee52e60cd3fcf2c2cf984862ecf0dee25032->enter($__internal_8d90791d905ec9cba3a52f5ca808ee52e60cd3fcf2c2cf984862ecf0dee25032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8d90791d905ec9cba3a52f5ca808ee52e60cd3fcf2c2cf984862ecf0dee25032->leave($__internal_8d90791d905ec9cba3a52f5ca808ee52e60cd3fcf2c2cf984862ecf0dee25032_prof);

        
        $__internal_f7e603475c9431bb5c86f19ed1f31637d4097f89f5d8e171fc2e18bbb9335d6e->leave($__internal_f7e603475c9431bb5c86f19ed1f31637d4097f89f5d8e171fc2e18bbb9335d6e_prof);

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
