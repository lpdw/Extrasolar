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
        $__internal_5e3bc1c49356c8ae4914683a187af0993ac2434a4dafdd3787328476b6330d08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e3bc1c49356c8ae4914683a187af0993ac2434a4dafdd3787328476b6330d08->enter($__internal_5e3bc1c49356c8ae4914683a187af0993ac2434a4dafdd3787328476b6330d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b1e75a94fa17f7119533e7a1d415bbb75b62859c51bc2255b0159257e4a8389e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1e75a94fa17f7119533e7a1d415bbb75b62859c51bc2255b0159257e4a8389e->enter($__internal_b1e75a94fa17f7119533e7a1d415bbb75b62859c51bc2255b0159257e4a8389e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e3bc1c49356c8ae4914683a187af0993ac2434a4dafdd3787328476b6330d08->leave($__internal_5e3bc1c49356c8ae4914683a187af0993ac2434a4dafdd3787328476b6330d08_prof);

        
        $__internal_b1e75a94fa17f7119533e7a1d415bbb75b62859c51bc2255b0159257e4a8389e->leave($__internal_b1e75a94fa17f7119533e7a1d415bbb75b62859c51bc2255b0159257e4a8389e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c6c4ab3c4b9d2a3a09946af79a6f574de929d85d4c80465a739d38105da2c277 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6c4ab3c4b9d2a3a09946af79a6f574de929d85d4c80465a739d38105da2c277->enter($__internal_c6c4ab3c4b9d2a3a09946af79a6f574de929d85d4c80465a739d38105da2c277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_44ed5c214d47a44471e3a3387fb7755e0f9595841a86fc94f395a81d9d9c3fe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44ed5c214d47a44471e3a3387fb7755e0f9595841a86fc94f395a81d9d9c3fe6->enter($__internal_44ed5c214d47a44471e3a3387fb7755e0f9595841a86fc94f395a81d9d9c3fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_44ed5c214d47a44471e3a3387fb7755e0f9595841a86fc94f395a81d9d9c3fe6->leave($__internal_44ed5c214d47a44471e3a3387fb7755e0f9595841a86fc94f395a81d9d9c3fe6_prof);

        
        $__internal_c6c4ab3c4b9d2a3a09946af79a6f574de929d85d4c80465a739d38105da2c277->leave($__internal_c6c4ab3c4b9d2a3a09946af79a6f574de929d85d4c80465a739d38105da2c277_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_aad085c3125a3c910c60d44648b274d346e9b9000948e7a496d40af2bad44830 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aad085c3125a3c910c60d44648b274d346e9b9000948e7a496d40af2bad44830->enter($__internal_aad085c3125a3c910c60d44648b274d346e9b9000948e7a496d40af2bad44830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_351b07941a6b978a4dd780f5a141fc37f72e89581107eb703e2a69a9ea804fc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_351b07941a6b978a4dd780f5a141fc37f72e89581107eb703e2a69a9ea804fc1->enter($__internal_351b07941a6b978a4dd780f5a141fc37f72e89581107eb703e2a69a9ea804fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_351b07941a6b978a4dd780f5a141fc37f72e89581107eb703e2a69a9ea804fc1->leave($__internal_351b07941a6b978a4dd780f5a141fc37f72e89581107eb703e2a69a9ea804fc1_prof);

        
        $__internal_aad085c3125a3c910c60d44648b274d346e9b9000948e7a496d40af2bad44830->leave($__internal_aad085c3125a3c910c60d44648b274d346e9b9000948e7a496d40af2bad44830_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_55d0ae808e3d284d318bae3335a41eb5f9c4e3196371a81275a8019537a79bfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55d0ae808e3d284d318bae3335a41eb5f9c4e3196371a81275a8019537a79bfd->enter($__internal_55d0ae808e3d284d318bae3335a41eb5f9c4e3196371a81275a8019537a79bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1beb19fafe1ad9f6d2675904a875454baefec8864c1e087ce35668795e4057e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1beb19fafe1ad9f6d2675904a875454baefec8864c1e087ce35668795e4057e3->enter($__internal_1beb19fafe1ad9f6d2675904a875454baefec8864c1e087ce35668795e4057e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1beb19fafe1ad9f6d2675904a875454baefec8864c1e087ce35668795e4057e3->leave($__internal_1beb19fafe1ad9f6d2675904a875454baefec8864c1e087ce35668795e4057e3_prof);

        
        $__internal_55d0ae808e3d284d318bae3335a41eb5f9c4e3196371a81275a8019537a79bfd->leave($__internal_55d0ae808e3d284d318bae3335a41eb5f9c4e3196371a81275a8019537a79bfd_prof);

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
