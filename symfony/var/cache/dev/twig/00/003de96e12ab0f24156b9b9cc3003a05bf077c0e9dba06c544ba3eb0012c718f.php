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
        $__internal_549309962ab283c4b43c4d5733e79a25dab798df7e6781b48cdec76c3590dac0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_549309962ab283c4b43c4d5733e79a25dab798df7e6781b48cdec76c3590dac0->enter($__internal_549309962ab283c4b43c4d5733e79a25dab798df7e6781b48cdec76c3590dac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_9891f58eb8dbb346fa2b7ba700ae400feed27d809359c38abbde581f241a9638 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9891f58eb8dbb346fa2b7ba700ae400feed27d809359c38abbde581f241a9638->enter($__internal_9891f58eb8dbb346fa2b7ba700ae400feed27d809359c38abbde581f241a9638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_549309962ab283c4b43c4d5733e79a25dab798df7e6781b48cdec76c3590dac0->leave($__internal_549309962ab283c4b43c4d5733e79a25dab798df7e6781b48cdec76c3590dac0_prof);

        
        $__internal_9891f58eb8dbb346fa2b7ba700ae400feed27d809359c38abbde581f241a9638->leave($__internal_9891f58eb8dbb346fa2b7ba700ae400feed27d809359c38abbde581f241a9638_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_01cc166351e0f62d00fb97f55c1ba585e11cefd86de74deaf5e5533779f54bd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01cc166351e0f62d00fb97f55c1ba585e11cefd86de74deaf5e5533779f54bd8->enter($__internal_01cc166351e0f62d00fb97f55c1ba585e11cefd86de74deaf5e5533779f54bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0811cfec59e300b36e7c4aca9080f2d6ffb7aa205c127353881f6fbc84b5bf4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0811cfec59e300b36e7c4aca9080f2d6ffb7aa205c127353881f6fbc84b5bf4a->enter($__internal_0811cfec59e300b36e7c4aca9080f2d6ffb7aa205c127353881f6fbc84b5bf4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0811cfec59e300b36e7c4aca9080f2d6ffb7aa205c127353881f6fbc84b5bf4a->leave($__internal_0811cfec59e300b36e7c4aca9080f2d6ffb7aa205c127353881f6fbc84b5bf4a_prof);

        
        $__internal_01cc166351e0f62d00fb97f55c1ba585e11cefd86de74deaf5e5533779f54bd8->leave($__internal_01cc166351e0f62d00fb97f55c1ba585e11cefd86de74deaf5e5533779f54bd8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dc8681572f86c3c788526269f2845624718b5dde4bdac84940645b64626fd62e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc8681572f86c3c788526269f2845624718b5dde4bdac84940645b64626fd62e->enter($__internal_dc8681572f86c3c788526269f2845624718b5dde4bdac84940645b64626fd62e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e086629e2253a21e1b5429f0a2048576d55429460b200d1f7fe7e0ae59c70bb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e086629e2253a21e1b5429f0a2048576d55429460b200d1f7fe7e0ae59c70bb9->enter($__internal_e086629e2253a21e1b5429f0a2048576d55429460b200d1f7fe7e0ae59c70bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e086629e2253a21e1b5429f0a2048576d55429460b200d1f7fe7e0ae59c70bb9->leave($__internal_e086629e2253a21e1b5429f0a2048576d55429460b200d1f7fe7e0ae59c70bb9_prof);

        
        $__internal_dc8681572f86c3c788526269f2845624718b5dde4bdac84940645b64626fd62e->leave($__internal_dc8681572f86c3c788526269f2845624718b5dde4bdac84940645b64626fd62e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5814ba6a6cd005132647223fff4134646cb2e1b2259266c83f4059afb567086e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5814ba6a6cd005132647223fff4134646cb2e1b2259266c83f4059afb567086e->enter($__internal_5814ba6a6cd005132647223fff4134646cb2e1b2259266c83f4059afb567086e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fd7027911a3203db6a9ce8be2a23f1229a6c6ed746fb9f25014170388a76e8a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd7027911a3203db6a9ce8be2a23f1229a6c6ed746fb9f25014170388a76e8a1->enter($__internal_fd7027911a3203db6a9ce8be2a23f1229a6c6ed746fb9f25014170388a76e8a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fd7027911a3203db6a9ce8be2a23f1229a6c6ed746fb9f25014170388a76e8a1->leave($__internal_fd7027911a3203db6a9ce8be2a23f1229a6c6ed746fb9f25014170388a76e8a1_prof);

        
        $__internal_5814ba6a6cd005132647223fff4134646cb2e1b2259266c83f4059afb567086e->leave($__internal_5814ba6a6cd005132647223fff4134646cb2e1b2259266c83f4059afb567086e_prof);

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
