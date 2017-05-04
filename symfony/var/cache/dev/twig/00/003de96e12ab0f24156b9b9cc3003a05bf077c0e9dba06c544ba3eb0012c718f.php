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
        $__internal_7021e5c5da619cee3b7d89aa8161a8c9e9e7b1ce28a053ddcc3fc840601ca766 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7021e5c5da619cee3b7d89aa8161a8c9e9e7b1ce28a053ddcc3fc840601ca766->enter($__internal_7021e5c5da619cee3b7d89aa8161a8c9e9e7b1ce28a053ddcc3fc840601ca766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f6d40845549f09b8d9b12b7f875c0c4b23c848240e7463c9b28f571b6ec0dd08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6d40845549f09b8d9b12b7f875c0c4b23c848240e7463c9b28f571b6ec0dd08->enter($__internal_f6d40845549f09b8d9b12b7f875c0c4b23c848240e7463c9b28f571b6ec0dd08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7021e5c5da619cee3b7d89aa8161a8c9e9e7b1ce28a053ddcc3fc840601ca766->leave($__internal_7021e5c5da619cee3b7d89aa8161a8c9e9e7b1ce28a053ddcc3fc840601ca766_prof);

        
        $__internal_f6d40845549f09b8d9b12b7f875c0c4b23c848240e7463c9b28f571b6ec0dd08->leave($__internal_f6d40845549f09b8d9b12b7f875c0c4b23c848240e7463c9b28f571b6ec0dd08_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1a0b7caf2b3d2792bfe1e61a0f7aa4776563a3c46ff6875ce3afc95b73a8e74c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a0b7caf2b3d2792bfe1e61a0f7aa4776563a3c46ff6875ce3afc95b73a8e74c->enter($__internal_1a0b7caf2b3d2792bfe1e61a0f7aa4776563a3c46ff6875ce3afc95b73a8e74c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3a17d2197f131300ab245afdb0ac623fffcfcbd4a099c0962a45118dfb40fcde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a17d2197f131300ab245afdb0ac623fffcfcbd4a099c0962a45118dfb40fcde->enter($__internal_3a17d2197f131300ab245afdb0ac623fffcfcbd4a099c0962a45118dfb40fcde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3a17d2197f131300ab245afdb0ac623fffcfcbd4a099c0962a45118dfb40fcde->leave($__internal_3a17d2197f131300ab245afdb0ac623fffcfcbd4a099c0962a45118dfb40fcde_prof);

        
        $__internal_1a0b7caf2b3d2792bfe1e61a0f7aa4776563a3c46ff6875ce3afc95b73a8e74c->leave($__internal_1a0b7caf2b3d2792bfe1e61a0f7aa4776563a3c46ff6875ce3afc95b73a8e74c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_40ce9e22d9d07156209b261bab816b045c0cd662bd0d9b74e11dec9869e37d80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40ce9e22d9d07156209b261bab816b045c0cd662bd0d9b74e11dec9869e37d80->enter($__internal_40ce9e22d9d07156209b261bab816b045c0cd662bd0d9b74e11dec9869e37d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_04dde99556726aa2196ea1d34b53d3292840c47508830c3a766fe1841f43c209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04dde99556726aa2196ea1d34b53d3292840c47508830c3a766fe1841f43c209->enter($__internal_04dde99556726aa2196ea1d34b53d3292840c47508830c3a766fe1841f43c209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_04dde99556726aa2196ea1d34b53d3292840c47508830c3a766fe1841f43c209->leave($__internal_04dde99556726aa2196ea1d34b53d3292840c47508830c3a766fe1841f43c209_prof);

        
        $__internal_40ce9e22d9d07156209b261bab816b045c0cd662bd0d9b74e11dec9869e37d80->leave($__internal_40ce9e22d9d07156209b261bab816b045c0cd662bd0d9b74e11dec9869e37d80_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a5be8b1c6a4bcad6cf71d1ec64d4526ad0120049102ce824f0bfb2b070972f36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5be8b1c6a4bcad6cf71d1ec64d4526ad0120049102ce824f0bfb2b070972f36->enter($__internal_a5be8b1c6a4bcad6cf71d1ec64d4526ad0120049102ce824f0bfb2b070972f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3a5d900bf3a894cec29ad9fdae81386cd9b6deff5f5ffe8c1e683bed0703e8d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a5d900bf3a894cec29ad9fdae81386cd9b6deff5f5ffe8c1e683bed0703e8d7->enter($__internal_3a5d900bf3a894cec29ad9fdae81386cd9b6deff5f5ffe8c1e683bed0703e8d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3a5d900bf3a894cec29ad9fdae81386cd9b6deff5f5ffe8c1e683bed0703e8d7->leave($__internal_3a5d900bf3a894cec29ad9fdae81386cd9b6deff5f5ffe8c1e683bed0703e8d7_prof);

        
        $__internal_a5be8b1c6a4bcad6cf71d1ec64d4526ad0120049102ce824f0bfb2b070972f36->leave($__internal_a5be8b1c6a4bcad6cf71d1ec64d4526ad0120049102ce824f0bfb2b070972f36_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Users/lpdw/Desktop/Extrasolar/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
