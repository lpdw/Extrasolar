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
        $__internal_f1982937e59ec0df80e81988fc00ee7ad36208bc6f618f8aecf22caadef882b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1982937e59ec0df80e81988fc00ee7ad36208bc6f618f8aecf22caadef882b7->enter($__internal_f1982937e59ec0df80e81988fc00ee7ad36208bc6f618f8aecf22caadef882b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_769c97cbe848d7d6582c134e872504d1eedb58d4e320ee36d8c5b9c277941454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_769c97cbe848d7d6582c134e872504d1eedb58d4e320ee36d8c5b9c277941454->enter($__internal_769c97cbe848d7d6582c134e872504d1eedb58d4e320ee36d8c5b9c277941454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1982937e59ec0df80e81988fc00ee7ad36208bc6f618f8aecf22caadef882b7->leave($__internal_f1982937e59ec0df80e81988fc00ee7ad36208bc6f618f8aecf22caadef882b7_prof);

        
        $__internal_769c97cbe848d7d6582c134e872504d1eedb58d4e320ee36d8c5b9c277941454->leave($__internal_769c97cbe848d7d6582c134e872504d1eedb58d4e320ee36d8c5b9c277941454_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_687c460d3cc58572849273eafb5f669440d84c3d18699738f357414f68b9a88d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_687c460d3cc58572849273eafb5f669440d84c3d18699738f357414f68b9a88d->enter($__internal_687c460d3cc58572849273eafb5f669440d84c3d18699738f357414f68b9a88d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_63f1716edfb697ef5f250bec9b304991fba7d038289ebd412597b2cee9dc5ab6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63f1716edfb697ef5f250bec9b304991fba7d038289ebd412597b2cee9dc5ab6->enter($__internal_63f1716edfb697ef5f250bec9b304991fba7d038289ebd412597b2cee9dc5ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_63f1716edfb697ef5f250bec9b304991fba7d038289ebd412597b2cee9dc5ab6->leave($__internal_63f1716edfb697ef5f250bec9b304991fba7d038289ebd412597b2cee9dc5ab6_prof);

        
        $__internal_687c460d3cc58572849273eafb5f669440d84c3d18699738f357414f68b9a88d->leave($__internal_687c460d3cc58572849273eafb5f669440d84c3d18699738f357414f68b9a88d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_da378d26d480b18f6776dbf9cd54a6b8abe19105f9ab7ba6428b4d2800d71647 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da378d26d480b18f6776dbf9cd54a6b8abe19105f9ab7ba6428b4d2800d71647->enter($__internal_da378d26d480b18f6776dbf9cd54a6b8abe19105f9ab7ba6428b4d2800d71647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8669eb2b4373d7dca688628e4699d24fb6225f5c82c7ec8bb1993845349d8690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8669eb2b4373d7dca688628e4699d24fb6225f5c82c7ec8bb1993845349d8690->enter($__internal_8669eb2b4373d7dca688628e4699d24fb6225f5c82c7ec8bb1993845349d8690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8669eb2b4373d7dca688628e4699d24fb6225f5c82c7ec8bb1993845349d8690->leave($__internal_8669eb2b4373d7dca688628e4699d24fb6225f5c82c7ec8bb1993845349d8690_prof);

        
        $__internal_da378d26d480b18f6776dbf9cd54a6b8abe19105f9ab7ba6428b4d2800d71647->leave($__internal_da378d26d480b18f6776dbf9cd54a6b8abe19105f9ab7ba6428b4d2800d71647_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_451b46445807000af9f8f5e8514ab559a8e9a1afbde0172dce4a215230cff56e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_451b46445807000af9f8f5e8514ab559a8e9a1afbde0172dce4a215230cff56e->enter($__internal_451b46445807000af9f8f5e8514ab559a8e9a1afbde0172dce4a215230cff56e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3585bc0a903eef991e2f78e4d4681a037ce4771b87b3c4a1f92b899815ea4fa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3585bc0a903eef991e2f78e4d4681a037ce4771b87b3c4a1f92b899815ea4fa2->enter($__internal_3585bc0a903eef991e2f78e4d4681a037ce4771b87b3c4a1f92b899815ea4fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3585bc0a903eef991e2f78e4d4681a037ce4771b87b3c4a1f92b899815ea4fa2->leave($__internal_3585bc0a903eef991e2f78e4d4681a037ce4771b87b3c4a1f92b899815ea4fa2_prof);

        
        $__internal_451b46445807000af9f8f5e8514ab559a8e9a1afbde0172dce4a215230cff56e->leave($__internal_451b46445807000af9f8f5e8514ab559a8e9a1afbde0172dce4a215230cff56e_prof);

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
