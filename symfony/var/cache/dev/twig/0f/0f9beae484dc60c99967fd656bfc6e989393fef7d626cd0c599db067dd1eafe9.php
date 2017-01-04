<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8108f5d1ee36c3878b2175a55b3d302e34d4747217b0f55cddfb625da60cfabe extends Twig_Template
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
        $__internal_0b0699a9fcbc75f1cabcf9a26e6233002d2b191add80f09e67697a5aeed22b09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b0699a9fcbc75f1cabcf9a26e6233002d2b191add80f09e67697a5aeed22b09->enter($__internal_0b0699a9fcbc75f1cabcf9a26e6233002d2b191add80f09e67697a5aeed22b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_2e7a912d3cd97460905b7b7bb101405a1454d5881029174ced7fea9c654132ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e7a912d3cd97460905b7b7bb101405a1454d5881029174ced7fea9c654132ec->enter($__internal_2e7a912d3cd97460905b7b7bb101405a1454d5881029174ced7fea9c654132ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b0699a9fcbc75f1cabcf9a26e6233002d2b191add80f09e67697a5aeed22b09->leave($__internal_0b0699a9fcbc75f1cabcf9a26e6233002d2b191add80f09e67697a5aeed22b09_prof);

        
        $__internal_2e7a912d3cd97460905b7b7bb101405a1454d5881029174ced7fea9c654132ec->leave($__internal_2e7a912d3cd97460905b7b7bb101405a1454d5881029174ced7fea9c654132ec_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3b6c5c1dcde19fba13ee003913e874e0f3877a396ab01a99ffc1ae8acc1e1a11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b6c5c1dcde19fba13ee003913e874e0f3877a396ab01a99ffc1ae8acc1e1a11->enter($__internal_3b6c5c1dcde19fba13ee003913e874e0f3877a396ab01a99ffc1ae8acc1e1a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bb990c15ef9fc3a5bd10f05a8c6a58d61c2c011c6cf42eb53de90a49f5db631a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb990c15ef9fc3a5bd10f05a8c6a58d61c2c011c6cf42eb53de90a49f5db631a->enter($__internal_bb990c15ef9fc3a5bd10f05a8c6a58d61c2c011c6cf42eb53de90a49f5db631a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bb990c15ef9fc3a5bd10f05a8c6a58d61c2c011c6cf42eb53de90a49f5db631a->leave($__internal_bb990c15ef9fc3a5bd10f05a8c6a58d61c2c011c6cf42eb53de90a49f5db631a_prof);

        
        $__internal_3b6c5c1dcde19fba13ee003913e874e0f3877a396ab01a99ffc1ae8acc1e1a11->leave($__internal_3b6c5c1dcde19fba13ee003913e874e0f3877a396ab01a99ffc1ae8acc1e1a11_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_926ea6ad366f35e3fc4ad5e889dd4891da96443589cece43e7e8262c87619774 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_926ea6ad366f35e3fc4ad5e889dd4891da96443589cece43e7e8262c87619774->enter($__internal_926ea6ad366f35e3fc4ad5e889dd4891da96443589cece43e7e8262c87619774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_edc3ad6b2380b6efc43ccd357428ee2eaef07bd0923f5d0e738d24827a6d787e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edc3ad6b2380b6efc43ccd357428ee2eaef07bd0923f5d0e738d24827a6d787e->enter($__internal_edc3ad6b2380b6efc43ccd357428ee2eaef07bd0923f5d0e738d24827a6d787e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_edc3ad6b2380b6efc43ccd357428ee2eaef07bd0923f5d0e738d24827a6d787e->leave($__internal_edc3ad6b2380b6efc43ccd357428ee2eaef07bd0923f5d0e738d24827a6d787e_prof);

        
        $__internal_926ea6ad366f35e3fc4ad5e889dd4891da96443589cece43e7e8262c87619774->leave($__internal_926ea6ad366f35e3fc4ad5e889dd4891da96443589cece43e7e8262c87619774_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_178b259081c5337bc6091267705d561ad19014d4255b8bc03d5b31ff32c17171 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_178b259081c5337bc6091267705d561ad19014d4255b8bc03d5b31ff32c17171->enter($__internal_178b259081c5337bc6091267705d561ad19014d4255b8bc03d5b31ff32c17171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4e0c727284f17e617d8a492c25dd0500410bbefc6a66ec98a179a72f29076d08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e0c727284f17e617d8a492c25dd0500410bbefc6a66ec98a179a72f29076d08->enter($__internal_4e0c727284f17e617d8a492c25dd0500410bbefc6a66ec98a179a72f29076d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4e0c727284f17e617d8a492c25dd0500410bbefc6a66ec98a179a72f29076d08->leave($__internal_4e0c727284f17e617d8a492c25dd0500410bbefc6a66ec98a179a72f29076d08_prof);

        
        $__internal_178b259081c5337bc6091267705d561ad19014d4255b8bc03d5b31ff32c17171->leave($__internal_178b259081c5337bc6091267705d561ad19014d4255b8bc03d5b31ff32c17171_prof);

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
