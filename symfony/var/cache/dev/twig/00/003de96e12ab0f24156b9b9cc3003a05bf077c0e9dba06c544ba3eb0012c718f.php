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
        $__internal_e83a7c33654cbbc334e0f940f329419481723e5b19f33d266495c9c5fe149cea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e83a7c33654cbbc334e0f940f329419481723e5b19f33d266495c9c5fe149cea->enter($__internal_e83a7c33654cbbc334e0f940f329419481723e5b19f33d266495c9c5fe149cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_69eaa1aac6169d43a743acced80f53b7b979d3490ac2fb9131b0fc09b1fb61f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69eaa1aac6169d43a743acced80f53b7b979d3490ac2fb9131b0fc09b1fb61f4->enter($__internal_69eaa1aac6169d43a743acced80f53b7b979d3490ac2fb9131b0fc09b1fb61f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e83a7c33654cbbc334e0f940f329419481723e5b19f33d266495c9c5fe149cea->leave($__internal_e83a7c33654cbbc334e0f940f329419481723e5b19f33d266495c9c5fe149cea_prof);

        
        $__internal_69eaa1aac6169d43a743acced80f53b7b979d3490ac2fb9131b0fc09b1fb61f4->leave($__internal_69eaa1aac6169d43a743acced80f53b7b979d3490ac2fb9131b0fc09b1fb61f4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fc660fa0196d6ecb655116ac540da5f4f5eeff507e38e5a60f8463ce8dee1769 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc660fa0196d6ecb655116ac540da5f4f5eeff507e38e5a60f8463ce8dee1769->enter($__internal_fc660fa0196d6ecb655116ac540da5f4f5eeff507e38e5a60f8463ce8dee1769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_236383575eb7d82b5776b11b6d24389dd7de77285432de45f149721e2b8b50cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_236383575eb7d82b5776b11b6d24389dd7de77285432de45f149721e2b8b50cf->enter($__internal_236383575eb7d82b5776b11b6d24389dd7de77285432de45f149721e2b8b50cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_236383575eb7d82b5776b11b6d24389dd7de77285432de45f149721e2b8b50cf->leave($__internal_236383575eb7d82b5776b11b6d24389dd7de77285432de45f149721e2b8b50cf_prof);

        
        $__internal_fc660fa0196d6ecb655116ac540da5f4f5eeff507e38e5a60f8463ce8dee1769->leave($__internal_fc660fa0196d6ecb655116ac540da5f4f5eeff507e38e5a60f8463ce8dee1769_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6371f1e2dcd1182e8320b0bd3925c182033b2575fd1cf761e15e116203d60a92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6371f1e2dcd1182e8320b0bd3925c182033b2575fd1cf761e15e116203d60a92->enter($__internal_6371f1e2dcd1182e8320b0bd3925c182033b2575fd1cf761e15e116203d60a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1ffef823f21b015193ca22f8b254d3a7b44ce7abbeb6f3198e7e83ed66401971 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ffef823f21b015193ca22f8b254d3a7b44ce7abbeb6f3198e7e83ed66401971->enter($__internal_1ffef823f21b015193ca22f8b254d3a7b44ce7abbeb6f3198e7e83ed66401971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1ffef823f21b015193ca22f8b254d3a7b44ce7abbeb6f3198e7e83ed66401971->leave($__internal_1ffef823f21b015193ca22f8b254d3a7b44ce7abbeb6f3198e7e83ed66401971_prof);

        
        $__internal_6371f1e2dcd1182e8320b0bd3925c182033b2575fd1cf761e15e116203d60a92->leave($__internal_6371f1e2dcd1182e8320b0bd3925c182033b2575fd1cf761e15e116203d60a92_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a44ce8afe70ad36761357b783b38717e1a268c95b4e10b5e26c05ac2697873da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a44ce8afe70ad36761357b783b38717e1a268c95b4e10b5e26c05ac2697873da->enter($__internal_a44ce8afe70ad36761357b783b38717e1a268c95b4e10b5e26c05ac2697873da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_07c594d94bf0331fdc2f5fe2a4cbe840e9eb5c726aea50bc30dd21ada6ccd2ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07c594d94bf0331fdc2f5fe2a4cbe840e9eb5c726aea50bc30dd21ada6ccd2ad->enter($__internal_07c594d94bf0331fdc2f5fe2a4cbe840e9eb5c726aea50bc30dd21ada6ccd2ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_07c594d94bf0331fdc2f5fe2a4cbe840e9eb5c726aea50bc30dd21ada6ccd2ad->leave($__internal_07c594d94bf0331fdc2f5fe2a4cbe840e9eb5c726aea50bc30dd21ada6ccd2ad_prof);

        
        $__internal_a44ce8afe70ad36761357b783b38717e1a268c95b4e10b5e26c05ac2697873da->leave($__internal_a44ce8afe70ad36761357b783b38717e1a268c95b4e10b5e26c05ac2697873da_prof);

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
