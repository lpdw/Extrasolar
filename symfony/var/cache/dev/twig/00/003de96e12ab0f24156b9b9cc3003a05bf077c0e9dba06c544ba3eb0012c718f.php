<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0c8de590daae0472ef1c2562bf3b92ce8024d959b75e3d9fbbcefe0f216cbc79 extends Twig_Template
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
        $__internal_0a58da90779d59cc091d5e70f8288e10171c3499e97fb0e7f3b2edf0a45f7f3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a58da90779d59cc091d5e70f8288e10171c3499e97fb0e7f3b2edf0a45f7f3f->enter($__internal_0a58da90779d59cc091d5e70f8288e10171c3499e97fb0e7f3b2edf0a45f7f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_1cdc97ba1992cdfd672413178917f2e5879e94300ec2b3b1ef2e5417eae8ea4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cdc97ba1992cdfd672413178917f2e5879e94300ec2b3b1ef2e5417eae8ea4a->enter($__internal_1cdc97ba1992cdfd672413178917f2e5879e94300ec2b3b1ef2e5417eae8ea4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a58da90779d59cc091d5e70f8288e10171c3499e97fb0e7f3b2edf0a45f7f3f->leave($__internal_0a58da90779d59cc091d5e70f8288e10171c3499e97fb0e7f3b2edf0a45f7f3f_prof);

        
        $__internal_1cdc97ba1992cdfd672413178917f2e5879e94300ec2b3b1ef2e5417eae8ea4a->leave($__internal_1cdc97ba1992cdfd672413178917f2e5879e94300ec2b3b1ef2e5417eae8ea4a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8d6df5673ca7aeb04c5ed654c5ee7d07f1436fc3d530e7d69f157dd84e03423e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d6df5673ca7aeb04c5ed654c5ee7d07f1436fc3d530e7d69f157dd84e03423e->enter($__internal_8d6df5673ca7aeb04c5ed654c5ee7d07f1436fc3d530e7d69f157dd84e03423e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b6773167700608bf2d3ce7488067a91743fed3d58a03d13d5cdf7513ad06bba4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6773167700608bf2d3ce7488067a91743fed3d58a03d13d5cdf7513ad06bba4->enter($__internal_b6773167700608bf2d3ce7488067a91743fed3d58a03d13d5cdf7513ad06bba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b6773167700608bf2d3ce7488067a91743fed3d58a03d13d5cdf7513ad06bba4->leave($__internal_b6773167700608bf2d3ce7488067a91743fed3d58a03d13d5cdf7513ad06bba4_prof);

        
        $__internal_8d6df5673ca7aeb04c5ed654c5ee7d07f1436fc3d530e7d69f157dd84e03423e->leave($__internal_8d6df5673ca7aeb04c5ed654c5ee7d07f1436fc3d530e7d69f157dd84e03423e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_18e07137bce87ddc5a11672830c0fda4ad9faa886d73b298c4bd8b242697b8f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18e07137bce87ddc5a11672830c0fda4ad9faa886d73b298c4bd8b242697b8f3->enter($__internal_18e07137bce87ddc5a11672830c0fda4ad9faa886d73b298c4bd8b242697b8f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c340c11ef3b762ca32c74de5edf3c31e3a5d0293eb9f286676a188a3aa5dc837 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c340c11ef3b762ca32c74de5edf3c31e3a5d0293eb9f286676a188a3aa5dc837->enter($__internal_c340c11ef3b762ca32c74de5edf3c31e3a5d0293eb9f286676a188a3aa5dc837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c340c11ef3b762ca32c74de5edf3c31e3a5d0293eb9f286676a188a3aa5dc837->leave($__internal_c340c11ef3b762ca32c74de5edf3c31e3a5d0293eb9f286676a188a3aa5dc837_prof);

        
        $__internal_18e07137bce87ddc5a11672830c0fda4ad9faa886d73b298c4bd8b242697b8f3->leave($__internal_18e07137bce87ddc5a11672830c0fda4ad9faa886d73b298c4bd8b242697b8f3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_857b68bb2a6afe0c65fe6100ff53b2657b9f9ffc1394a0a71937f7cf302e90fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_857b68bb2a6afe0c65fe6100ff53b2657b9f9ffc1394a0a71937f7cf302e90fa->enter($__internal_857b68bb2a6afe0c65fe6100ff53b2657b9f9ffc1394a0a71937f7cf302e90fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1b34a5aefd6a182c8b1c4211e48c26b4a18408fc3f1aea2f4261c1ffef77b0f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b34a5aefd6a182c8b1c4211e48c26b4a18408fc3f1aea2f4261c1ffef77b0f1->enter($__internal_1b34a5aefd6a182c8b1c4211e48c26b4a18408fc3f1aea2f4261c1ffef77b0f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1b34a5aefd6a182c8b1c4211e48c26b4a18408fc3f1aea2f4261c1ffef77b0f1->leave($__internal_1b34a5aefd6a182c8b1c4211e48c26b4a18408fc3f1aea2f4261c1ffef77b0f1_prof);

        
        $__internal_857b68bb2a6afe0c65fe6100ff53b2657b9f9ffc1394a0a71937f7cf302e90fa->leave($__internal_857b68bb2a6afe0c65fe6100ff53b2657b9f9ffc1394a0a71937f7cf302e90fa_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Users/IntelliJ/ProjectAlexandre/Extrasolar/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
