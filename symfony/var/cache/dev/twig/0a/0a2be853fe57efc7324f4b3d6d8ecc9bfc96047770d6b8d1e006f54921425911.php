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
        $__internal_7799269aec26346e751314612dc4da57c34cee9012990297985c10a678498c1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7799269aec26346e751314612dc4da57c34cee9012990297985c10a678498c1a->enter($__internal_7799269aec26346e751314612dc4da57c34cee9012990297985c10a678498c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c44fc1303b5e843cf967aa446b85fcaae1515cf110c45b91c27f6ace1f57033f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c44fc1303b5e843cf967aa446b85fcaae1515cf110c45b91c27f6ace1f57033f->enter($__internal_c44fc1303b5e843cf967aa446b85fcaae1515cf110c45b91c27f6ace1f57033f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7799269aec26346e751314612dc4da57c34cee9012990297985c10a678498c1a->leave($__internal_7799269aec26346e751314612dc4da57c34cee9012990297985c10a678498c1a_prof);

        
        $__internal_c44fc1303b5e843cf967aa446b85fcaae1515cf110c45b91c27f6ace1f57033f->leave($__internal_c44fc1303b5e843cf967aa446b85fcaae1515cf110c45b91c27f6ace1f57033f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bdb7f6fab11497007837b56d0583047723c6bd34bafc515c6a17f09ee9715e38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdb7f6fab11497007837b56d0583047723c6bd34bafc515c6a17f09ee9715e38->enter($__internal_bdb7f6fab11497007837b56d0583047723c6bd34bafc515c6a17f09ee9715e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0725d29e3d30e552687028c93d32906f84f0646003f651939d612db583a0155d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0725d29e3d30e552687028c93d32906f84f0646003f651939d612db583a0155d->enter($__internal_0725d29e3d30e552687028c93d32906f84f0646003f651939d612db583a0155d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0725d29e3d30e552687028c93d32906f84f0646003f651939d612db583a0155d->leave($__internal_0725d29e3d30e552687028c93d32906f84f0646003f651939d612db583a0155d_prof);

        
        $__internal_bdb7f6fab11497007837b56d0583047723c6bd34bafc515c6a17f09ee9715e38->leave($__internal_bdb7f6fab11497007837b56d0583047723c6bd34bafc515c6a17f09ee9715e38_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a87611ae6784663ca95954e281bed88407d0da1b5c049eda6a1fcc200456bb54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a87611ae6784663ca95954e281bed88407d0da1b5c049eda6a1fcc200456bb54->enter($__internal_a87611ae6784663ca95954e281bed88407d0da1b5c049eda6a1fcc200456bb54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cf725bfff85d4e27dc3f5e5fb27b9d60368847e8deb9cb6cf1eb044f11d46866 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf725bfff85d4e27dc3f5e5fb27b9d60368847e8deb9cb6cf1eb044f11d46866->enter($__internal_cf725bfff85d4e27dc3f5e5fb27b9d60368847e8deb9cb6cf1eb044f11d46866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cf725bfff85d4e27dc3f5e5fb27b9d60368847e8deb9cb6cf1eb044f11d46866->leave($__internal_cf725bfff85d4e27dc3f5e5fb27b9d60368847e8deb9cb6cf1eb044f11d46866_prof);

        
        $__internal_a87611ae6784663ca95954e281bed88407d0da1b5c049eda6a1fcc200456bb54->leave($__internal_a87611ae6784663ca95954e281bed88407d0da1b5c049eda6a1fcc200456bb54_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2710c1d087e6cef33750cc52e74d6f851f862bb96e8de0d5c97c84b4b28356e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2710c1d087e6cef33750cc52e74d6f851f862bb96e8de0d5c97c84b4b28356e3->enter($__internal_2710c1d087e6cef33750cc52e74d6f851f862bb96e8de0d5c97c84b4b28356e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9d4906eab62b7df71415b72e9a029db33a0bc503e94069da12859552d9acc348 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d4906eab62b7df71415b72e9a029db33a0bc503e94069da12859552d9acc348->enter($__internal_9d4906eab62b7df71415b72e9a029db33a0bc503e94069da12859552d9acc348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9d4906eab62b7df71415b72e9a029db33a0bc503e94069da12859552d9acc348->leave($__internal_9d4906eab62b7df71415b72e9a029db33a0bc503e94069da12859552d9acc348_prof);

        
        $__internal_2710c1d087e6cef33750cc52e74d6f851f862bb96e8de0d5c97c84b4b28356e3->leave($__internal_2710c1d087e6cef33750cc52e74d6f851f862bb96e8de0d5c97c84b4b28356e3_prof);

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
